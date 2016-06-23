<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_post();
$postId = get_the_ID();

get_header(); ?>

    <h3><?php the_time('d.n.Y') ?></h3>
	<h1><?php the_title(); ?></h1>
    <h2><?php the_excerpt(); ?></h2>

    <p><?php the_content(); ?></p>

<?php
    $args = array( 'posts_per_page' => 3, 'exclude' => $postId);

    $myposts = get_posts( $args );
    foreach ( $myposts as $post ) { ?>
    <li>
        <?php         get_partial('_blog-preview', array('post' => $post)); ?>
    </li>
<?php }

wp_reset_postdata();?>

<?php
get_footer();
