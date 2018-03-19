<?php
/**
 * @package Make
 */

?>

<span class="price-single"><?php echo $value = the_field( "price" ); ?></span> | 

<span class="class-time">
			<?php
			global $post;
			foreach(get_the_tags($post->ID) as $tag)
			{
			    echo '<a href="' . get_tag_link($tag->term_id) . '">' . "$tag->name" . '</a>';
			}
			?>
</span> | <span class="class-time"><?php $value = the_field( "time" ); ?></span>

<div class="cfk-teacher">Teacher: <?php $value = the_field( "teacher" ); ?></div>