<?php get_header(); ?>

<!-- Get the banner to display -->
<?php get_template_part( 'template-parts/bannerheader' ); ?>
<!-- Get the menu if is create in panel admin -->
<?php get_template_part( 'template-parts/menubellowbanner' ); ?>

<?php
$collection = \Tainacan\Repositories\Collections::get_instance()->fetch_one(['name' => 'Catalogo de Filmes'], 'OBJECT');
$items = \Tainacan\Repositories\Items::get_instance()->fetch(['orderby' => 'post_title', 'order' => 'ASC', 'nopaging' => true], $collection);
?>

<?php if ($items->have_posts()): ?>
	<div class="container-fluid max-large px-0 margin-top-95">
		<div id="content" role="main" class="margin-one-column">
			<h3 class="mb-4">
				<a href="#" class="font-weight-bold">Edições da Revista</a>
			</h3>
			<ul class="carrossel-revistas">

			<?php while ($items->have_posts()): $items->the_post(); ?>
				<li>
					<a href="<?php the_permalink(); ?>">
						<?php the_post_thumbnail('tainacan-medium-full'); ?>
						<span><?php the_title(); ?></span>
					</a>
				</li>
			<?php endwhile; ?>

			</ul>
		</div>
	</div>
<?php endif; ?>

<?php get_footer(); ?>