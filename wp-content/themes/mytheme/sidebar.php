<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package MyTheme
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area col-md-3">
    <?php
        $terms = get_terms( array(
            'taxonomy'   => 'os',
            'hide_empty' => true,
        ));
    ?>
    <div class="section1">
        <div class="title">
            <span class="title1">heading head heading</span>
            <span class="title2">subheading sub</span>
        </div>
        <nav>
            <?php
                echo '<ul>';
                    echo '<li><a class="taxonomy active" href="'. get_site_url() .'/wp-admin/admin-ajax.php">All</a></li>';
                    foreach( $terms as $term ) {
                    echo '<li><a class="taxonomy" data-id="'.$term->term_id.'" href="'. get_site_url() .'/wp-admin/admin-ajax.php">'. $term->name .'</a></li>';
                }
            ?>
        </nav>
    </div>
</aside><!-- #secondary -->
