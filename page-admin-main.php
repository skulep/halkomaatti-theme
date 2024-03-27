<?php echo do_shortcode ( '[need_login]' ); ?>

<?php
/*
Template Name: Admin Main

fireb shortcode <?php echo do_shortcode ( '[custom_firebase]' ); ?>


		<div class="notif-holder">
			<div class="text-center">
				<a href="https://firewood2go.eu/index.php/admin-notifications/" class="btn btn-primary btn-lg text-center justify-content-center" role="button" aria-disabled="true">All notifications</a>
			</div>

		</div>
*/



get_header('admin');
?>


	<main id="primary" class="site-main">
		<h1 class="text-center">Box Status</h1>
		<select id="locationDropdown"></select>
		<button onclick="readUsingOption()">Get Data</button>


		<div class="container-fluid px-1 px-md-4 py-5 mx-auto">
			<div class="box-status-holder"></div>
		</div>

		<h1 class="text-center">Notifications</h1>
		<div class="notif-holder"></div>
		
		
	</main><!-- #main -->

<?php
get_sidebar();
get_footer('admin');