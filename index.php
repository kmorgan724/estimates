<?php

require 'vendor/autoload.php';

$app = new \Slim\Slim(array(
    'templates.path' => './templates'
));

function getConfig($name = 'config.json')
{
	$configFile = fopen($name, 'r');
	$configJson = fread($configFile, filesize($name));
	return json_decode($configJson, true);
}

function createProposalPage($title = 'Proposal Page', $content)
{
	//TODO: Create page via the API
}

$app->get('/', function() use ($app)
{
	$app->render('form.php', array());
});

$app->post('/project/wordpress', function() use ($app)
{
	$config = getConfig();
	$data = $app->request->post('wordpress');

	$totalHours = $data['pages'] * $config['wordpress']['modifiers']['per_page'];

	if ($data['extra'] > 0)
		$totalHours = $totalHours + $data['extra'];

	if (isset($data['functionality']))
		foreach ($data['functionality'] as $feature)
			$totalHours = $totalHours + $config['wordpress']['hours']['functionality'][$feature];

	if (isset($data['style']))
		foreach ($data['style'] as $feature) 
			$totalHours = $totalHours + $config['wordpress']['hours']['style'][$feature];

	if (isset($data['focus']))
		foreach ($data['focus'] as $feature)
			$totalHours = $totalHours + $config['wordpress']['hours']['focus'][$feature];

	if ($totalHours < $config['wordpress']['hours']['minimum'])
		$totalHours = $config['wordpress']['hours']['minimum'];

	//TODO: If creating proposal
	$content = $app->view->fetch('proposals/wordpress.php', array('data' => $data));

	echo $content;

	//createProposalPage('whatever title', $content);

	$app->render('output.php', array('totalHours' => $totalHours));
});

$app->post('/project/ecommerce', function() use ($app)
{
	$config = getConfig();
	$data = $app->request->post('ecommerce');

	$totalHours = $data['products'] * $config['ecommerce']['modifiers']['per_product'];

	if ($data['extra'] > 0)
		$totalHours = $totalHours + $data['extra'];

	if (isset($data['key_features']))
		foreach ($data['key_features'] as $feature)
			$totalHours = $totalHours + $config['ecommerce']['hours']['key_features'][$feature];

	if (isset($data['exports']))
		foreach ($data['exports'] as $feature)
			$totalHours = $totalHours + $config['ecommerce']['hours']['exports'][$feature];

	if ($totalHours < $config['ecommerce']['hours']['minimum'])
		$totalHours = $config['ecommerce']['hours']['minimum'];

	//TODO: If creating proposal
	$content = $app->view->fetch('proposals/ecommerce.php', array('data' => $data));

	echo $content;

	//createProposalPage('whatever title', $content);

	$app->render('output.php', array('totalHours' => $totalHours));
});

$app->run();