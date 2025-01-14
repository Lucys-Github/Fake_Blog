<?php
function load_theme_styles()
{
    // Ladda stilmallen för temat (style.css)

    // Dynamiskt versionsnummer baserat på filens ändringstid för att undvika cachingproblem
    $style_version = filemtime(get_template_directory() . '/style.css');

    // Köa stilmallen
    wp_enqueue_style(
        'blog-style', // Unikt ID (handle) för stilmallen
        get_template_directory_uri() . '/style.css', // URL till stilmallen
        array(), // Beroenden, om en css fil behöver laddas in före denna ex. (lämna tom om det inte finns några)
        $style_version, // Dynamiskt versionsnummer nu baserat på filändringstid (Vilket är bra under utveckling så man slipper cachingproblem)
        'all' // Mediatyp (all = för alla medier, som skärmar och skrivare)
    );
}

// Anropa funktionen när WordPress laddar stilmallar
add_action('wp_enqueue_scripts', 'load_theme_styles', );

function register_my_menu()
{
    register_nav_menu('primary-menu', __('Primary Menu'));
}

function register_my_menu2()
{
    register_nav_menu('secondary-menu', __('Secondary Menu'));
}

add_action('after_setup_theme', 'register_my_menu', );

add_action('after_setup_theme', 'register_my_menu2', );

add_theme_support('post-thumbnails');
function my_theme_register_sidebar()
{
    register_sidebar(array(
        'name' => 'Side menu widget',
        'id' => 'side-menu-widget',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'my_theme_register_sidebar');

function show_blog_posts_shortcode($atts)
{

    ob_start(); // Start output buffering
    // The Loop to display blog posts
    if (have_posts()):
        while (have_posts()):
            the_post();
            ?>
            <article
                class="vertical-margin-40 vertical-padding-20 flex-container flex-gap-10 flex-column horizontal-padding-40 border-top bg-white">
                <?php
                if (has_post_thumbnail()):
                    the_post_thumbnail('medium');
                endif;
                ?>

                <h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
                <div class="flex-container flex-gap-10">
                    <p><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?php the_author(); ?>
                        </a></p>
                    <p><?php echo the_category() ?></p>
                    <p><?php echo get_the_date() ?></p>
                </div>
                <?php the_excerpt() ?>
            </article>
        <?php endwhile; ?>

        <div class="pagination">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('« Previous', 'textdomain'),
                'next_text' => __('Next »', 'textdomain'),
            ));
            ?>
        </div>

    <?php endif;

    return ob_get_clean(); // Return the content buffered into a string
}
add_shortcode('show-blog-posts', 'show_blog_posts_shortcode');
