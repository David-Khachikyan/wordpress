<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyTheme
 */

get_header();
get_sidebar();
?>

    <main id="primary" class="site-main">

<!--        --><?php //if ( have_posts() ) : ?>
<!---->
<!--            <header class="page-header">-->
<!--                --><?php
//                the_archive_title( '<h1 class="page-title">', '</h1>' );
//                the_archive_description( '<div class="archive-description">', '</div>' );
//                ?>
<!--            </header>-->
<!---->
<!--            --><?php
//            /* Start the Loop */
//            while ( have_posts() ) :
//                the_post();
//
//                /*
//                 * Include the Post-Type-specific template for the content.
//                 * If you want to override this in a child theme, then include a file
//                 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
//                 */
//                get_template_part( 'template-parts/content', get_post_type() );
//
//            endwhile;
//
//            the_posts_navigation();
//
//        else :
//
//            get_template_part( 'template-parts/content', 'none' );
//
//        endif;
//        ?>

<?php
//$terms = get_terms( array(
//    'taxonomy'   => 'os',
//    'hide_empty' => true,
//));
//echo '<ul>';
//
//// Loop through all terms with a foreach loop
//foreach( $terms as $term ) {
//    // Use get_term_link to get terms permalink
//    // USe $term->name to return term name
//    echo '<li><a href="'. get_term_link( $term ) .'">'. $term->name .'</a></li>';
//}
//
//echo '</ul>';

//    $args = array(
//        'post_type'=> 'apps',
//        'posts_per_page' => 10,
//        'tax_query'=> array(
//            array(
//            'taxonomy'=> 'os',
//            'field'=>'slug',
//            'terms' => '777'
//            )
//        )
//    );
////    $data = new WP_Query($args);
//    $data = get_posts($args);
//    var_dump($data);
//    while($data->has_posts()) : $data->the_post();?>
<!--        <a href="--><?php //the_permalink(); ?><!--">--><?php //the_title();?><!--</a>-->
<!---->
<!--    --><?php //echo '<div class="entry-content">';
//        the_content();
//    echo '</div>';
//    endwhile;
//
//    ?>
<!--        -->

    </main><!-- #main -->

<?php

get_footer();
