<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	 <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P2PBT8ZR');</script>
	<!-- End Google Tag Manager -->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'twentytwentyone'); ?></a>

		<?php get_template_part('template-parts/header/site-header'); ?>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">

					<!-- Main jumbotron for a primary marketing message or call to action -->
					<div class="default-max-width">
						<div>
							<p><button id="testButton" class="btn btn-success"  onclick="loadPopup();" title="Bind an event to me!">Subscription Popup!</button></p>
						</div>
					</div>

					<div id="mainContent" class="container">

					</div> <!-- /container -->
					<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
	function hideModal(){
	var modal = document.getElementById("testModal");
  //removed to show button - roselyn
	// modal.style.display = "none";
}

function sayHello(){
	window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-5Z1DJ5DEQQ');
	var hello = document.getElementById("say").value;
	alert(hello);
  gtag('event', "EventTwo", {
    'event_category': 'Say Hello',
    'event_label': hello,
    'event_action': "Say It!",
  });
}


function loadPopup() {
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'G-5Z1DJ5DEQQ');

  buttonText = document.getElementById("testButton").innerHTML;
  gtag('event', "EventOne", {
    'event_category': 'Button Interaction',
    'event_label': buttonText,
    'event_action': "Click",
  });
	var popUp = `
	<div class="default-max-width">
        <div id="testModal" class="modal" tabindex="-1" role="dialog" style="display:block">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" onclick="hideModal();" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Test Popup!</h4>
              </div>
              <div class="modal-body">
                <p>
                  <form>
                    <div class="form-group">
                      <label for="say">Say Hello:</label>
                      <input type="text" id="say" class="form-control" placeholder="Hello Wheelhouse!" name="say">
                    </div>
                  </form>
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" onclick="hideModal();" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="submit" onclick="sayHello();" class="btn btn-primary">Say It!</button>
              </div>
            </div><!-- /.modal-content -->
          </div><!-- /.modal-dialog -->
        </div><!-- /.modal -->
      </div>
      `;

      var content = document.getElementById("mainContent");
      content.innerHTML = popUp;
}
</script>