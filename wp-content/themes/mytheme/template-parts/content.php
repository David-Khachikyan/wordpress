<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package MyTheme
 */
        $args = array(
        'post_type' => 'apps',
        'posts_per_page'=>-1
        );

        global $post;
        $posts = get_posts( $args );
        ob_start (); ?>
    <div class="section2 container-fluid"  id="content">
        <div class="row">
            <?php foreach( $posts as $post ) : setup_postdata($post); ?>
                <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
            <div class="col1 col-lg-6">
                <div class="images">
                    <img src="<?= $image[0]; ?>" class="imagesback">
                </div>
                <div class="descriptions">
                    <div class="texts">
                        <div class="post_title"><?php the_title(); ?></div>
                        <p class="description">Tiny Times in every Macafe</p>
                    </div>
                    <div>
                        <i class="far fa-thumbs-up like"></i>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

	<footer class="entry-footer">
<!--		--><?php //mytheme_entry_footer(); ?>
	</footer><!-- .entry-footer -->
