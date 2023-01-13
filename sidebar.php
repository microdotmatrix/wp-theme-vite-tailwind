<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _s
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="page-sidebar">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>

  <footer class="sidebar-footer">
    <div class="flex flex-row w-full items-center justify-center gap-2">
      <div class="flex-1">
        <img src="<?php home_url() ?>/wp-content/themes/cypress/assets/img/icons/tsha-icon.webp" alt="Texas Speech-Language Hearing Association" style="width: 65%; margin: auto" />
      </div>
      <div class="flex-1">
        <img src="<?php home_url() ?>/wp-content/themes/cypress/assets/img/icons/asha-icon.webp" alt="American Speech-Language Hearing Association" />
      </div>
    </div>
    <div class="flex flex-row w-full items-center justify-center gap-2">
      <div class="p-2">
        <iconify-icon icon="cib:facebook" class="text-4xl text-blue-dark bg-blue-bright rounded-full"></iconify-icon>
      </div>
      <div class="p-2">
        <iconify-icon icon="cib:linkedin" class="text-4xl text-blue-dark bg-blue-bright rounded-full"></iconify-icon>
      </div>
      <div class="p-2">
        <iconify-icon icon="cib:twitter" class="text-4xl text-blue-dark bg-blue-bright rounded-full"></iconify-icon>
      </div>
      <div class="p-2">
        <iconify-icon icon="cib:google" class="text-4xl text-blue-dark bg-blue-bright rounded-full"></iconify-icon>
      </div>
    </div>
  </footer>
</aside><!-- #secondary -->
