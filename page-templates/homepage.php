<?php
/**
 * Template Name: Homepage
 *
 */
the_post();
get_header();

?>

<ul>
<?php

    $args = array( 'posts_per_page' => 3 );

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) { ?>
        <li>
            <?php         get_partial('_blog-preview', array('post' => $post)); ?>
        </li>
    <?php }

    wp_reset_postdata();?>


<?php  ?>
</ul>

<?php

get_footer();
