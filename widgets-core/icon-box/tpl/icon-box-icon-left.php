<?php $settings['settings'] = $settings;?>
<div class="tm-sc-icon-box icon-box icon-left <?php if( !empty($classes) ) echo esc_attr(implode(' ', $classes)); ?>">
	<?php seif_component_get_widgetcore_template_part( 'bgimg-hover', null, 'icon-box/tpl', $settings, false );?>
	<div class="icon-box-wrapper">
		<?php seif_component_get_widgetcore_template_part( 'icon', null, 'icon-box/tpl', $settings, false );?>
		<div class="icon-text">
			<?php  if( $settings['switch_title_content_pos'] === 'yes' ) {?>
			<?php seif_component_get_widgetcore_template_part( 'content', null, 'icon-box/tpl', $settings, false );?>
			<?php seif_component_get_widgetcore_template_part( 'title', null, 'icon-box/tpl', $settings, false );?>
			<?php } else {?>
			<?php seif_component_get_widgetcore_template_part( 'title', null, 'icon-box/tpl', $settings, false );?>
			<?php seif_component_get_widgetcore_template_part( 'content', null, 'icon-box/tpl', $settings, false );?>
			<?php }?>

			<?php seif_component_get_widgetcore_template_part( 'bg-shadow-icon', null, 'icon-box/tpl', $settings, false );?>

			<?php if ( $show_view_details_button == 'yes' ) : ?>
			<?php seif_component_get_widgetcore_template_part( 'button', null, 'icon-box/tpl', $settings, false );?>
			<?php endif; ?>
		</div>
		<div class="clearfix"></div>
	</div>
</div>