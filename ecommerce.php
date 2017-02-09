<?php var_dump($data); ?>

<?php if (in_array('search_optimization', $data['key_features'])) : ?>
	<p>Client wants to include search engine optimatization.</p>
<?php endif; ?>

<?php if (in_array('contact_form', $data['key_features'])) : ?>
	<p>Has contact form.</p>
<?php endif; ?>

<?php if (in_array('newsletter_form', $data['key_features'])) : ?>
	<p>Has a newsletter signup form.</p>
<?php endif; ?>

<?php if (in_array('blog', $data['key_features'])) : ?>
	<p>Has blog/news page.</p>
<?php endif; ?>

<?php if (in_array('social_media', $data['key_features'])) : ?>
	<p>Has links to social media.</p>
<?php endif; ?>

<?php if (in_array('map', $data['key_features'])) : ?>
	<p>Has a map.</p>
<?php endif; ?>

<?php if (in_array('reviews', $data['key_features'])) : ?>
	<p>Has review section.</p>
<?php endif; ?>

<?php if (in_array('google_feed', $data['exports'])) : ?>
	<p>Has google feed.</p>
<?php endif; ?>

<?php if (in_array('ebay_feed', $data['exports'])) : ?>
	<p>Has ebay feed.</p>
<?php endif; ?>

<?php if (in_array('amazon_feed', $data['exports'])) : ?>
	<p>Has amazon section.</p>
<?php endif; ?>