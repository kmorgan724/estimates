<?php

$configFile = fopen('hours.json', 'r');
$configJson = fread($configFile, filesize('hours.json'));
$config = json_decode($configJson, true);

// var_dump($configJson);
// var_dump($config['wordpress']['hours']['assets']);
// var_dump($config['wordpress']['hours']['functionality']);
// var_dump($config['wordpress']['hours']['style']);
// var_dump($config['wordpress']['hours']['focus']);
// var_dump($_POST);

$totalHours = 0;

switch ($_POST['project_type'])
{
	case 'wordpress':
		$pages = $_POST['wordpress']['pages'];
		$totalHours = $pages * $config['wordpress']['modifiers']['per_page'];
		
		if (isset($_POST['wordpress']['functionality']))
		{
			foreach ($_POST['wordpress']['functionality'] as $feature)
			{
				$totalHours = $totalHours + $config['wordpress']['hours']['functionality'][$feature];
			}
		}


		if (isset($_POST['wordpress']['style']))
		{
			foreach ($_POST['wordpress']['style'] as $feature) 
			{
				$totalHours = $totalHours + $config['wordpress']['hours']['style'][$feature];
			}
		}


		if (isset($_POST['wordpress']['focus']))
		{
			foreach ($_POST['wordpress']['focus'] as $feature) 
			{
				$totalHours = $totalHours + $config['wordpress']['hours']['focus'][$feature];
			}
		}

		break;

	case 'ecommerce':
		$products = $_POST['ecommerce']['products'];
		$totalHours = $products * $config['ecommerce']['modifiers']['per_product'];


		if (isset($_POST['ecommerce']['key_features']))
		{
			foreach ($_POST['ecommerce']['key_features'] as $feature)
			{
				$totalHours = $totalHours + $config['ecommerce']['hours']['key_features'][$feature];
			}
		}

		if (isset($_POST['ecommerce']['exports']))
		{
			foreach ($_POST['ecommerce']['exports'] as $feature)
			{
				$totalHours = $totalHours + $config['ecommerce']['hours']['exports'][$feature];
			}
		}

		break;
	
	default:
		# code...
		break;
}

echo "<p style='color: green; text-align: center; font-size: 24pt;'>This project will take a minimum of {$totalHours} hours.</p>";