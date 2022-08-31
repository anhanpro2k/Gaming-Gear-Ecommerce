<?php
$mts_options = get_option(MTS_THEME_NAME);
$brands_heading = isset( $mts_options['brands_heading'] ) ? $mts_options['brands_heading'] : '';
?>
<div class="shop-by-brand home-section clearfix">
	<div class="container">
		<div class="brand-controls">
			<?php if ( !empty( $brands_heading ) ) { ?><div class="featured-category-title"><?php echo $brands_heading; ?></div><?php } ?>
			<div class="custom-nav">
				<a class="btn brand-prev"><i class="fa fa-angle-left"></i></a>
				<a class="btn brand-next"><i class="fa fa-angle-right"></i></a>
			</div>
		</div>
		<?php if ( !empty( $mts_options['brand_images'] ) ) { ?>
			<div class="brand-container clearfix loading">
				<div id="brands-slider" class="brand-category">
				<?php
				if ( $mts_options['brand_images'] && is_array( $mts_options['brand_images'] ) ) {
					foreach ( $mts_options['brand_images'] as $item ) {
						//extract($image);// was gettin' some strange "Illegal string offset" warning, only this helped
						if ( !empty( $item ) ) { ?>
							<div class="brand-slider">
								<?php if(!empty($item['link'])) { ?><a href="<?php echo esc_url( $item['link'] );?>"><?php } ?>
									<?php echo wp_get_attachment_image( $item['image'], 'brand', false, array( 'title' => '' ) ); ?>
								<?php if(!empty($item['link'])) { ?></a><?php } ?>
							</div>
						<?php
						}
					}
				}
				?>
				</div>
			</div>
		<?php } ?>
	</div>
</div>
