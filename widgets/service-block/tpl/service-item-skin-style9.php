<?php if ( ! defined( 'ABSPATH' ) ) { exit; } ?>
<!-- Service Block Style9-->
<?php
$service_item['settings'] = $settings;
$service_item['title_tag'] = $title_tag;
$service_item['subtitle_tag'] = $subtitle_tag;
$feature_link = $service_item['feature_link'];
$count = $service_item['count'];
$target = ( $feature_link && $feature_link['is_external'] ) ? ' target="_blank"' : '';
$url = ( $feature_link && $feature_link['url'] ) ? $feature_link['url'] : '';
?>
<div class="service-block-style9">
	<div class="service-item">
		<?php seif_component_get_shortcode_template_part( 'part-title', null, 'service-block/tpl', $service_item, false );?>
		<?php seif_component_get_shortcode_template_part( 'icon-type', $service_item['icon_type'], 'service-block/tpl', $service_item, false );?>
		<?php seif_component_get_shortcode_template_part( 'part-content', null, 'service-block/tpl', $service_item, false );?>
		<a href="<?php echo esc_url( $url );?>" class="btn-more"><?php echo esc_html( $settings['view_details_button_text']  ); ?> <i class="lnr-icon-arrow-right"></i></a>
	</div>
</div>