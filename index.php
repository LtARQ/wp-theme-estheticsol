<?php

// Blog Page

get_header('single');
?>
<section id="blog">
<div class="container">            
    <div class="row">
        
        <?php $query = new WP_Query(array('post_type' => 'post', 'posts_per_page' => '8'));
        
        if($query->have_posts()) {
          while($query->have_posts()) : $query->the_post();
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');      
        ?>
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 wow fadeInUp animated" data-wow-delay=".1s">
            <div class="blog-img">
                <img src="<?php echo $image[0]; ?>"/>
            </div>
            <div class="row">
                <div class="data">30</div>
                <div class="month">March</div>
            </div>
            <div class="row c-h ">				
				<h3><?php the_title(); ?></h3>					
            </div>
			<div class="row c-h-2">
				<p><?php the_excerpt(); ?></p>					
			</div>
			<div class="row c-h">
				<a class="" href="<?php the_permalink(); ?>">MORE</a>
			</div>
		</div>
            <?php endwhile; } ?>
        
	</div>
</div>

</section>

<?php get_footer(); 