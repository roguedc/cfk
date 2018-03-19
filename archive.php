<?php
/**
* A Simple Category Template
*/
 
get_header(); 
?> 

<?php ttfmake_maybe_show_sidebar( 'left' ); ?>

<section id="primary" class="site-content">
<div id="content" role="main">
 
<?php 
// Check if there are any posts to display
if ( have_posts() ) : ?>

<header class="archive-header">
<span class="archive-title"><?php get_template_part( 'partials/section', 'title' ); ?></span>
<?php
// Display optional category description
 if ( category_description() ) : ?>
<div class="archive-meta"><?php echo category_description(); ?></div>
<?php endif; ?>
</header>

<div class="archive-layout">

<?php
// The Loop
while ( have_posts() ) : the_post(); ?>

<div class="archive-bricks">

<?php if ( has_post_thumbnail()) : ?>
	   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
	   <?php the_post_thumbnail(); ?></a>
 <?php endif; ?>

<div class=""><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></div>

<span class="cat-archive">
<?php
	global $post;
	foreach(get_the_tags($post->ID) as $tag)
{
	echo '<a href="' . get_tag_link($tag->term_id) . '">' . "$tag->name" . '</a>';
}
?></span>

<div class="cat-archive"><?php echo $value = the_field( "time" ); ?> | 
<span class="price-archive"><?php echo $value = the_field( "price" ); ?></span></div>

</div>

<?php endwhile; 
 
else: ?>

</div>

<p>Sorry, no posts matched your criteria.</p>
 
 
<?php endif; ?>
</div>

</section>

<div class="nav-next alignright"><?php next_posts_link( 'Next' ); ?></div>
<div class="nav-previous alignleft"><?php previous_posts_link( 'Previous' ); ?></div>

<?php ttfmake_maybe_show_sidebar( 'right' ); ?>

 <?php get_footer(); ?>