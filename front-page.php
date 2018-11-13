<?php get_header(); ?>

<!-- Get the banner to display -->
<?php get_template_part( 'template-parts/bannerheader' ); ?>
<!-- Get the menu if is create in panel admin -->
<?php get_template_part( 'template-parts/menubellowbanner' ); ?>

<?php carousel_front_page('Catalogo de Filmes', 'Catalogo de Filmes'); ?>

<?php carousel_front_page('Filmes Edital Carmen Santos
', 'Filmes Edital Carmen Santos
'); ?>

<?php get_footer(); ?>