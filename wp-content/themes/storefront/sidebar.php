<?php
/**
 * The sidebar containing the main widget area.
 *
 * @package storefront
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<div id="secondary" class="widget-area hide-on-med-and-down" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>