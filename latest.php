<?php
/*
Template Name: Latest
*/
?>
<?php get_header(); ?>
<?php /* The loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="content2">    
<h1><?php the_title(); ?></h1>
<?php the_content(); ?>
</div>


<div class="search-date">
<div id='cssmenu'>
<ul>
<li class='has-sub '><a href='#'>All Categories</a>
<ul>
<?php wp_list_categories('orderby=id&use_desc_for_title=0&child_of=7&title_li='); ?>    
</ul>
</ul>
</div>

</div>  
    

<div class="last"> 
    
    
    
    <h2>latest</h2>
<?php 


$my_query = new WP_Query('category_name=news&posts_per_page=12');?>
<?PHP while ($my_query->have_posts()) : $my_query->the_post();?>
<div class="news box_2">
<?php  $image = get_field('topdimage');?>
    <img src="<?php echo $image['url']; ?>"  alt="<?php echo $image['alt']; ?>" />
<div class="last-text">    
<h2><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2>
</div>
    <div class="viewLast"> <a href="<?php the_permalink(); ?>" rel="bookmark">read more</a></div>
</div>
<?php endwhile;?>
    
    
    
    
</div>

<div class="down-nav-holder">

</div>





<div class="footer-line"><img src="<?php echo esc_url( home_url( '/' ) );?>wp-content/uploads/footer-line.png"/></div>    
</article>
<?php endwhile; ?>
<?php get_footer();?>

