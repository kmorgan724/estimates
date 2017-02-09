<?php var_dump($data); ?>

<?php if (in_array('contact_form', $data['functionality'])) : ?>
	<p>Has contact form.</p>
<?php endif; ?>

<?php if (in_array('newsletter_form', $data['functionality'])) : ?>
	<p>Has newsletter form.</p>
<?php endif; ?>

<?php if (in_array('catalog', $data['functionality'])) : ?>
	<p>Has catalog.</p>
<?php endif; ?>

<?php if (in_array('events', $data['functionality'])) : ?>
	<p>Has events page.</p>
<?php endif; ?>

<?php if (in_array('blog', $data['functionality'])) : ?>
	<p>Has blog page.</p>
<?php endif; ?>

<?php if (in_array('social_media', $data['functionality'])) : ?>
	<p>Has links to social media.</p>
<?php endif; ?>

<?php if (in_array('map', $data['functionality'])) : ?>
	<p>Has directions and/or a map.</p>
<?php endif; ?>

<?php if (in_array('testimonials', $data['functionality'])) : ?>
	<p>Has testimonials section.</p>
<?php endif; ?>

<?php if (in_array('traditional_layout', $data['style'])) : ?>
	<p>Has a traditional layout.</p>
<?php endif; ?>

<?php if (in_array('creative_layout', $data['style'])) : ?>
	<p>Has a creative layout.</p>
<?php endif; ?>

<?php if (in_array('rotating_slide', $data['style'])) : ?>
	<p>Has a rotating slide.</p>
<?php endif; ?>

<?php if (in_array('slide', $data['style'])) : ?>
	<p>Has a static slide.</p>
<?php endif; ?>

<?php if (in_array('static_slide', $data['focus'])) : ?>
	<p>Has a slide to highlight information about the site.</p>
<?php endif; ?>

<?php if (in_array('select_services', $data['focus'])) : ?>
	<p>Has information boxes highlighting select services.</p>
<?php endif; ?>

<?php if (in_array('news', $data['focus'])) : ?>
	<p>Has a news/events section.</p>
<?php endif; ?>