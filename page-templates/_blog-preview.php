<?php
/**
 * Created by PhpStorm.
 * User: st00ne1
 * Date: 23/06/16
 * Time: 11:51
 *
 * @post: Object
 */


?>

<h1><?php echo $post->post_title; ?></h1>
<h3><?php echo date("d.n.Y", strtotime($post->post_date)); ?></h3>
<h2><?php echo $post->post_excerpt; ?></h2>
<a href="<?php echo get_the_permalink($post->ID); ?>">Detaljno</a>