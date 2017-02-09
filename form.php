<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Estimate Generator</title>
        <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootswatch/3.3.5/yeti/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="page-header">
                <h1 class="text-center">Estimate Generator</h1>
            </div>

            <ul class="nav nav-tabs nav-justified">
              <li role="presentation" class="active"><a href="#wordpress" data-toggle="tab"  class="text-primary"aria-expanded="true"><strong>WordPress</strong></a></li>
                <li role="presentation"><a href="#ecommerce" data-toggle="tab" class="text-warning"><strong>eCommerce</strong></a></li>
                <li role="presentation"><a href="#custom" data-toggle="tab" class="text-danger"><strong>Custom</strong></a></li>
            </ul>

            <div class="tab-content">
                <div class="tab-pane fade active in" id="wordpress">
                    <form method="post" action="/project/wordpress" class="form-horizontal well">
                    	<input type="hidden" name="project_type" value="wordpress">
                        <fieldset>
                            <legend class="text-primary">Wordpress/CMS</legend>
                            <div class="form-group">
                                <label for="wordpress-client-name" class="col-md-4 control-label"><strong>Client's name</strong></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="wordpress-client-name" name="wordpress[client-name]" style="resize: vertical;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="wordpress-per-page" class="col-md-4 control-label"><strong>Number of Pages</strong></label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="wordpress[pages]" id="wordpress-per-page" min="1" max="999" required="required"> 
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="wordpress-images" class="col-md-4 control-label"><strong>Assets</strong></label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[assets][]" value="images_provided" id="wordpress-images"><span class="toggle"></span>Client will provide images
                                        </label>
                                    </div>
                                    <!-- TODO: Maybe add custom logo here... -->
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="wordpress-keep-functionality" class="col-md-4 control-label"><strong>Fuctionality to keep</strong></label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="wordpress-keep-functionality" name="wordpress[keep_functionality]" style="resize: vertical;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="wordpress-new-functionality" class="col-md-4 control-label"><strong>Fuctionality</strong></label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[functionality][]" value="contact_form" id="wordpress-functionality-contact-form"> Contact Form
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[functionality][]" value="newsletter_form" id="wordpress-functionality-newsletter-signup-form"> Newsletter Signup Form
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[functionality][]" value="catalog" id="wordpress-functionality-feature-products"> Feature Products/Product Catalog
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[functionality][]" value="events" id="wordpress-functionality-events"> Events
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[functionality][]" value="blog" id="wordpress-functionality-blog"> Blog/News
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[functionality][]" value="social_media" id="wordpress-functionality-social-media"> Social Media
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[functionality][]" value="map" id="wordpress-functionality-map"> Directions/Map
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[functionality][]" value="testimonials" id="wordpress-functionality-testimonials"> Testimonials
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="wordpress-description" class="col-md-4 control-label"><strong>Main Colors</strong></label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="wordpress-description" name="wordpress[main_description]" style="resize: vertical;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="wordpress-style" class="col-md-4 control-label"><strong>Style</strong></label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[style][]" value="traditional_layout" id="wordpress-style-traditional-layout"> Traditional Layout
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[style][]" value="creative_layout" id="wordpress-style-creative-layout"> Creative Layout
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[style][]" value="rotating_slide" id="wordpress-style-rotating-slide"> Rotating Slide
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[style][]" value="static_slide" id="wordpress-style-static-slide"> Static Slide
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="wordpress-focus" class="col-md-4 control-label"><strong>Focus</strong></label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[focus][]" value="slide" id="wordpress-focus-slide"> Slide highlighting something about your site?
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[focus][]" value="select_services" id="wordpress-focus-select-services"> Information boxes highlighting select services?
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="wordpress[focus][]" value="news" id="wordpress-focus-news"> News/Events?
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="wordpress-extra" class="col-md-4 control-label"><strong>Extras</strong></label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="wordpress[extra]" id="wordpress-extra" min="0" max="999" value="0">
                                </div>
                            </div>
                            <div class="output"></div>
                            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-clock-o"></i> Estimate</button>
                        </fieldset>
                    </form>
                </div>
                <div class="tab-pane fade" id="ecommerce">
                    <form method="post" action="/project/ecommerce" class="form-horizontal well">
                    	<input type="hidden" name="project_type" value="ecommerce">
                        <fieldset>
                            <legend class="text-warning">eCommerce</legend>
                            <div class="form-group">
                                <label for="ecommerce-client-name" class="col-md-4 control-label"><strong>Client's name</strong></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="ecommerce-client-name" name="ecommerce[client-name]" style="resize: vertical;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ecommerce-products" class="col-md-4 control-label"><strong>Number of Products</strong></label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="ecommerce[products]" id="ecommerce-products" min="1" max="999" required="required"> 
                                </div>  
                            </div>
                            <div class="form-group">
                                <label for="ecommerce-assets" class="col-md-4 control-label"><strong>Assets</strong></label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ecommerce[assets][]" value="images" id="ecommerce-assets-images"> Client will provide images
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ecommerce-key-features" class="col-md-4 control-label"><strong>Key Features</strong></label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ecommerce[key_features][]" value="search_optimization" id="ecommerce-key-features-search-optimization"> Search Engine Optimization
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ecommerce[key_features][]" value="contact_form" id="ecommerce-key-features-contact-form"> Contact Form
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ecommerce[key_features][]" value="newsletter_form" id="ecommerce-key-features-newsletter-signup-form"> Newsletter Signup Form
                                        </label>
                                    </div>
									<div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ecommerce[key_features][]" value="blog" id="ecommerce-key-features-blog"> Blog/News
                                        </label>
                                    </div>
									<div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ecommerce[key_features][]" value="social_media" id="ecommerce-key-features-social-media"> Social Media
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ecommerce[key_features][]" value="map" id="ecommerce-key-features-map">Map
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ecommerce[key_features][]" value="reviews" id="ecommerce-key-features-reviews"> Reviews
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="ecommerce-exports" class="col-md-4 control-label"><strong>Exports</strong></label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ecommerce[exports][]" value="google_feed" id="ecommerce-exports-google-feed"> Google Feed
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ecommerce[exports][]" value="ebay_feed" id="ecommerce-exports-search-optimization"> Ebay Feed
                                        </label>
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="ecommerce[exports][]" value="amazon_feed" id="ecommerce-exports-amazon-feed"> Amazon Feed
                                        </label>
                                    </div>
                                </div>    
                            </div>
                            <div class="form-group">
                                <label for="ecommerce-extra" class="col-md-4 control-label"><strong>Extras</strong></label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" name="ecommerce[extra]" id="ecommerce-extra" min="0" max="999" value="0">
                                </div>
                            </div>
                            <div class="output"></div>
                            <button type="submit" class="btn btn-warning btn-block"><i class="fa fa-clock-o"></i> Estimate</button>
                        </fieldset>
                    </form>
                </div>
                <div class="tab-pane fade" id="custom">
                    <form method="post" action="process.php" class="form-horizontal well">
	                    <input type="hidden" name="project_type" value="custom">
                        <fieldset>
                            <legend class="text-danger">Custom Web App</legend>
                            <div class="form-group">
                                <label for="custom-client-name" class="col-md-4 control-label"><strong>Client's name</strong></label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" id="custom-client-name" name="custom[client-name]" style="resize: vertical;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="custom-assets" class="col-md-4 control-label"><strong>Assets</strong></label>
                                <div class="col-md-8">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="custom[assets][]" value="images" id="custom-assets-images"> Client will provide images
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="custom-overall-feel" class="col-md-4 control-label"><strong>Overall Feel</strong></label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="custom-overall-feel" name="custom[overall_feel]" style="resize: vertical;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="custom-functionality" class="col-md-4 control-label"><strong>Describe Functionality</strong></label>
                                <div class="col-md-8">
                                    <textarea class="form-control" id="custom-functionality" name="custom[functionality]" style="resize: vertical;"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="custom-extra" class="col-md-4 control-label"><strong>Extras</strong></label>
                                <div class="col-md-8">
                                    <input type="number" class="form-control" id="custom-extra" name="custom[extra]" style="resize: vertical;">
                                </div>
                            </div>
                            <div class="output"></div>
                            <button type="submit" class="btn btn-danger btn-block"><i class="fa fa-clock-o"></i> Estimate</button>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <style type="text/css">
            .output h2 { margin: 40px 0; }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            var forms = document.querySelectorAll('form');

            for (var i = forms.length - 1; i >= 0; i--) {
                forms[i].addEventListener('submit', function(e) {
                    e.preventDefault();
                    var data = new FormData(e.target);
                    var xhr = new XMLHttpRequest();
                    var currentForm = this;

                    xhr.onreadystatechange = function () { 
                        if (xhr.readyState === 4 && xhr.status === 200) {
                            var outputElement = currentForm.querySelector('.output');
                            outputElement.innerHTML = xhr.responseText;
                        } 
                    }; 

                    xhr.open('POST', this.action, true);
                    xhr.send(data);
                });
            };
        </script>
        
    </body>
</html>