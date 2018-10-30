<?php get_header(); ?>

<!-- Get the banner to display -->
<?php get_template_part( 'template-parts/bannerheader' ); ?>
<!-- Get the menu if is create in panel admin -->
<?php get_template_part( 'template-parts/menubellowbanner' ); ?>

<?php carousel_front_page('Collection test', 'Collection test'); ?>

<?php carousel_front_page('Collection test 1', 'Collection test 1'); ?>

<?php get_footer(); ?>