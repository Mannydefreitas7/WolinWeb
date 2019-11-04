

<?php get_header(); ?>

<!-- SPECIFIC PAGE CONTENT BEGINS HERE -->
<div class="container clearfix">

					<div class="row topmargin bottommargin-sm">
			<?php
			/*
			 * Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
                	</div>
</div>


<!-- SPECIFIC PAGE CONTENT ENDS HERE -->

<?php get_footer(); ?>