<?php 

function enqueue_styles() {
 
    $parent_style = 'tainacan-interface';
 
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'tainacan-Programadora-Brasil',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_styles', 99 );

function carousel_files() {
    wp_enqueue_script('call-carousel', get_theme_file_uri('/assets/js/base.js'), null, microtime(), true);
}
add_action('wp_enqueue_scripts','carousel_files');

/**
 * Display carousel of collection
 * @param 1 Collection name | Get the items of collections
 * @param 2 Title of carousel
 */
function carousel_front_page($collection_name, $title_carousel) {
    $collection = \Tainacan\Repositories\Collections::get_instance()->fetch_one(['name' => $collection_name], 'OBJECT');
    $items = \Tainacan\Repositories\Items::get_instance()->fetch(['orderby' => 'post_title', 'order' => 'ASC', 'nopaging' => true], $collection);

    if ($items->have_posts()): ?>
        <div class="container-fluid max-large px-0 margin-top-95">
            <div id="content" role="main" class="margin-one-column">
                <h3 class="mb-4">
                    <a href="#" class="font-weight-bold"><?php echo $title_carousel; ?></a>
                </h3>
                <ul class="carrossel-revistas">

                <?php while ($items->have_posts()): $items->the_post(); ?>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('tainacan-medium'); ?>
                            <span><?php the_title(); ?></span>
                        </a>
                    </li>
                <?php endwhile; ?>

                </ul>
            </div>
        </div>
    <?php endif;
}