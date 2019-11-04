<?php
/**
 * ECAE about page
 *
 * @package ECAE
 */

$theme = wp_get_theme();

$sangar_slider_lite_active = is_plugin_active( 'sangar-slider-lite/sangar-slider-lite.php' );
$sangar_slider_active      = is_plugin_active( 'sangar-slider/sangar-slider.php' );

if ( ! function_exists( 'is_ecae_premium_exist' ) ) {
	$other['ecae'] = array(
		'type'      => __( 'Plugin', 'easy-custom-auto-excerpt' ),
		'link'      => 'http://wpexcerptplugin.com/?utm_source=wp_ecae&utm_medium=onboarding_upsell&utm_campaign=upsell',
		'name'      => __( 'Easy Custom Auto Excerpt Pro', 'easy-custom-auto-excerpt' ),
		'img'       => 'upsell_ecae.jpg',
		'desc'      => __( 'Easy Custom Auto Excerpt is a WordPress plugin to cut/excerpt your post displayed on the home, search or archive pages.', 'easy-custom-auto-excerpt' ),
		'btn1'      => 'http://wpexcerptplugin.com/?utm_source=wp_ecae&utm_medium=onboarding_upsell&utm_campaign=upsell',
		'btn2'      => 'https://tonjoostudio.com/product/easy-custom-auto-excerpt-premium/?utm_source=wp_ecae&utm_medium=onboarding_upsell&utm_campaign=upsell',
		'btn1_text' => __( 'More Details', 'easy-custom-auto-excerpt' ),
		'btn2_text' => __( 'Upgrade Now', 'easy-custom-auto-excerpt' ),
	);
}

if ( ! $sangar_slider_active ) {
	$other['ss'] = array(
		'type'      => __( 'Plugin', 'easy-custom-auto-excerpt' ),
		'link'      => 'http://sangarslider.com/?utm_source=wp_ecae&utm_medium=onboarding_upsell&utm_campaign=upsell',
		'name'      => __( 'Sangar Slider Pro', 'easy-custom-auto-excerpt' ),
		'img'       => 'upsell_sangar.jpg',
		'desc'      => __( 'Sangar Slider is a premium high quality responsive WordPress slider plugin. With smooth animation, layered slide, touch and swipe support, easy to use and trully responsive.', 'easy-custom-auto-excerpt' ),
		'btn1'      => 'http://sangarslider.com/?utm_source=wp_ecae&utm_medium=onboarding_upsell&utm_campaign=upsell',
		'btn2'      => 'https://tonjoostudio.com/product/sangar-slider-responsive-wordpress-slider-plugin/?utm_source=wp_ecae&utm_medium=onboarding_upsell&utm_campaign=upsell',
		'btn1_text' => __( 'More Details', 'easy-custom-auto-excerpt' ),
		'btn2_text' => __( 'Get Plugin', 'easy-custom-auto-excerpt' ),
	);

	if ( $sangar_slider_lite_active ) {
		$other['ss']['btn2_text'] = __( 'Upgrade Now', 'easy-custom-auto-excerpt' );
	}
}

if ( 'mino' !== $theme->get( 'TextDomain' ) ) {
	$other['mino'] = array(
		'type'      => __( 'Theme', 'easy-custom-auto-excerpt' ),
		'link'      => 'https://tonjoostudio.com/product/mino-clean-responsive-wordpress-theme/?utm_source=wp_ecae&utm_medium=onboarding_upsell&utm_campaign=upsell',
		'name'      => __( 'Mino Theme', 'easy-custom-auto-excerpt' ),
		'img'       => 'upsell_mino.jpg',
		'desc'      => __( 'Mino is a responsive WordPress multipurpose theme with a focus on readability that combines clean design and excellent user experience.', 'easy-custom-auto-excerpt' ),
		'btn1'      => 'http://theme.tonjoostudio.com/?utm_source=wp_ecae&utm_medium=onboarding_upsell&utm_campaign=upsell',
		'btn2'      => 'https://tonjoostudio.com/product/mino-clean-responsive-wordpress-theme/?utm_source=wp_ecae&utm_medium=onboarding_upsell&utm_campaign=upsell',
		'btn1_text' => __( 'Live Preview', 'easy-custom-auto-excerpt' ),
		'btn2_text' => __( 'Get Theme', 'easy-custom-auto-excerpt' ),
	);
}

if ( 'kensington' !== $theme->get( 'TextDomain' ) ) {
	$other['kensington'] = array(
		'type'      => __( 'Theme', 'easy-custom-auto-excerpt' ),
		'link'      => 'http://theme.tonjoostudio.com/kensington/?utm_source=wp_ecae&utm_medium=onboarding_upsell&utm_campaign=upsell',
		'name'      => __( 'Kensington Theme', 'easy-custom-auto-excerpt' ),
		'img'       => 'upsell_kensington.jpg',
		'desc'      => __( 'Kensington is a WordPress premium real estate theme with booking system. Kensington has modern, clean, intuitive and fully responsive design that looks gorgeous on any size tablet or mobile phone.', 'easy-custom-auto-excerpt' ),
		'btn1'      => 'http://theme.tonjoostudio.com/kensington/?utm_source=wp_ecae&utm_medium=onboarding_upsell&utm_campaign=upsell',
		'btn2'      => '',
		'btn1_text' => __( 'Live Preview', 'easy-custom-auto-excerpt' ),
		'btn2_text' => __( 'Get Theme', 'easy-custom-auto-excerpt' ),
	);
}

?>
<div class="wrap">
	<h2 class="nav-tab-wrapper">
		<a class="nav-tab" id="opt-overview-tab" href="#opt-overview"><?php esc_html_e( 'Overview', 'easy-custom-auto-excerpt' ); ?></a>
		<a class="nav-tab" id="opt-other-tab" href="#opt-other"><?php esc_html_e( 'Other Cool Stuff for Your Website', 'easy-custom-auto-excerpt' ); ?></a>
	</h2>
	<div id="ecae-boarding">
		<div id="opt-overview" class="group">
			<div class="ecae-content">
				<div class="row">
					<div class="col-half">

						<img class="logo-ecae" src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ); ?>assets/about/ecae_about.png" alt="">

						<p><?php esc_html_e( 'Easy Custom Auto Excerpt is a WordPress plugin to cut/excerpt your posts displayed on home, search or archive pages. This plugin also enables you to customize the read more button text and thumbnail image. Just activate the plugin, configure some options and you are good to go.', 'easy-custom-auto-excerpt' ); ?></p>

						<div class="main-cta">
							<a href="<?php echo esc_url( admin_url( 'admin.php?page=tonjoo_excerpt' ) ); ?>" class="btn btn-blue-welcome"><?php esc_html_e( 'Configure Excerpt', 'easy-custom-auto-excerpt' ); ?></a>
							<?php if ( ! function_exists( 'is_ecae_premium_exist' ) ) : ?>
								<a href="https://tonjoostudio.com/product/easy-custom-auto-excerpt-premium/?utm_source=wp_ecae&utm_medium=onboarding_overview&utm_campaign=upsell" class="btn btn-red-welcome"><?php esc_html_e( 'Upgrade to PRO version!', 'easy-custom-auto-excerpt' ); ?></a>
							<?php endif; ?>
						</div>
					</div>
					<div class="col-half">
						<div class="frame"><iframe css="display:block;margin:0px auto;max-height:300px" width="100%" height="300px" src="https://www.youtube.com/embed/ZZaXfrB4-68?ecver=1" frameborder="0" allowfullscreen=""></iframe></div>
					</div>
				</div>
			</div>

			<?php if ( ! function_exists( 'is_ecae_premium_exist' ) ) : ?>
				<div class="ecae-learn-more">
					<div class="row">
						<div class="col-half">
							<div class="banner-content">
								<div>
									<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ); ?>assets/about/banner_logo.png" alt="">
									<p><?php esc_html_e( 'Upgrade to PRO Version and get full benefit of ECAE', 'easy-custom-auto-excerpt' ); ?></p>
								</div>
								<div class="main-cta">
									<a href="https://tonjoostudio.com/product/easy-custom-auto-excerpt-premium/?utm_source=wp_ecae&utm_medium=onboarding_overview&utm_campaign=upsell" class="btn btn-orange-welcome">
										<i class="fa fa-rocket" aria-hidden="true"></i>
										<?php esc_html_e( 'Upgrade Now', 'easy-custom-auto-excerpt' ); ?>
									</a>
									<a href="http://wpexcerptplugin.com/wordpress-pro/?utm_source=wp_ecae&utm_medium=onboarding_overview&utm_campaign=upsell" class="btn btn-white-welcome">
										<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
										<?php esc_html_e( 'Learn More', 'easy-custom-auto-excerpt' ); ?>
									</a>
								</div>
							</div>
						</div>
						<div class="col-half">
							<div class="banner-content ecae-features">
								<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ); ?>assets/about/banner_feature_1.png" alt="">
								<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ); ?>assets/about/banner_feature_2.png" alt="">
								<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ); ?>assets/about/banner_feature_3.png" alt="">
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<div class="ecae-more" class="group">
				<div class="more-content">
					<div class="more-text">
						<h3><?php esc_html_e( 'Documentation', 'easy-custom-auto-excerpt' ); ?></h3>
						<p><?php esc_html_e( "Our online documentation will give you  important information about the plugin. This is an exceptional resource to start discovering the plugin's true potential.", 'easy-custom-auto-excerpt' ); ?></p>
					</div>
					<div class="more-btn">
						<a href="http://pustaka.tonjoostudio.com/plugins/easy-custom-auto-excerpt/" class="button-primary">
							<?php esc_html_e( 'Learn More', 'easy-custom-auto-excerpt' ); ?>
							<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
						</a>
					</div>
				</div>

				<div class="more-content">
					<div class="more-text">
						<h3><?php esc_html_e( 'Support Forum', 'easy-custom-auto-excerpt' ); ?></h3>
						<p><?php esc_html_e( 'We offer outstanding support through our forum. To get support first you need to register (create an account) and open a thread in our forum.', 'easy-custom-auto-excerpt' ); ?></p>
					</div>
					<div class="more-btn">
						<a href="https://forum.tonjoostudio.com/?utm_source=wp_ecae&utm_medium=onboarding_overview&utm_campaign=upsell" class="button-primary">
							<?php esc_html_e( 'Learn More', 'easy-custom-auto-excerpt' ); ?>
							<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
						</a>
					</div>
				</div>

				<div class="more-content">
					<div class="more-text">
						<h3><?php esc_html_e( 'Rate Us', 'easy-custom-auto-excerpt' ); ?></h3>
						<p><?php esc_html_e( 'If you have a moment, please help us spread the word by reviewing the plugin on WordPress.', 'easy-custom-auto-excerpt' ); ?></p>
					</div>
					<div class="more-btn">
						<a href="https://wordpress.org/support/plugin/easy-custom-auto-excerpt/reviews/#new-post" class="button-primary">
							<?php esc_html_e( 'Review Our Plugin', 'easy-custom-auto-excerpt' ); ?>
							<i class="fa fa-arrow-circle-right" aria-hidden="true"></i>
						</a>
					</div>
				</div>
			</div>
		</div>

		<div id="opt-other" class="group">
			<?php foreach ( $other as $v ) : ?>
				<div class="plugin-card">
					<div class="plugin-card-top">
						<div class="name column-name">
							<div><strong><?php echo esc_html( $v['type'] ); ?></strong></div>
							<h3>
								<a href="<?php echo esc_html( $v['link'] ); ?>">
									<?php echo esc_html( $v['name'] ); ?>
									<img src="<?php echo esc_url( plugin_dir_url( __FILE__ ) ); ?>assets/about/<?php echo esc_attr( $v['img'] ); ?>" alt="" class="plugin-icon">
								</a>
							</h3>
						</div>
						<div class="desc column-description">
							<p><?php echo esc_html( $v['desc'] ); ?></p>
						</div>
					</div>
					<div class="plugin-card-bottom">
						<a href="<?php echo esc_url( $v['btn1'] ); ?>" class="button">
							<?php echo esc_html( $v['btn1_text'] ); ?>
						</a>
						<a href="<?php echo esc_url( $v['btn2'] ); ?>" class="button-primary">
							<?php echo esc_html( $v['btn2_text'] ); ?>
						</a>
					</div>
				</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
