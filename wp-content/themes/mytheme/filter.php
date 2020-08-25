<?php
//function data_filter_function(){
    $args = array(
        'orderby' => 'id', // we will sort posts by date
        'order'	=> 'desc' // ASC or DESC
    );

    // for taxonomies / categories
//    if( isset( $_POST['categoryfilter'] ) )
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'os',
                'field' => 'id',
                'terms' => 'ios'
            )
        );

    $query = new WP_Query($args);

    if( $query->have_posts() ) :
        while( $query->have_posts() ): $query->the_post();
            echo '<h2>' . $query->post->post_title . '</h2>';
        endwhile;
        wp_reset_postdata();
    else :
        echo 'No posts found';
    endif;

    die();
//}
?>