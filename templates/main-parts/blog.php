<?php
/*
* Blog Template Part
*
* @package Estheticsol
*/
?>
<div class="container">            
    <div class="row">
        <div class="title">
        <h2>Our Blog</h2>
        <p>Meet some of our lovely, passionate, positive people.</p>
        </div>
         <!-- First Post -->
        <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInUp animated" data-wow-delay=".1s">
        <?php $query = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'erp',
            'posts_per_page' => 1,
        ));        
        if($query->have_posts()) {
          while($query->have_posts()) : $query->the_post();
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');   
        ?>
            <div class="blog-img">
                <img src="<?php echo $image[0]; ?>"/>
            </div>
            <div class="row">
                <div class="data">30</div>
                <div class="month">March</div>
            </div>
            <div class="row c-h">				
				<h3><?php the_title(); ?></h3>					
            </div>
			<div class="row c-h-2">
				<p><?php the_excerpt(); ?></p>					
			</div>
			<div class="row c-h">
				<a href="<?php the_permalink(); ?>">MORE</a>
			</div>
            <?php endwhile; } ?>
        </div>
        <!-- Second Post    -->
        <div class="col-xs-12 col-sm-3 col-md-3 wow bounceIn animated" data-wow-delay=".4s">
        <?php $query = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'tech',
            'posts_per_page' => 1,
        ));        
        if($query->have_posts()) {
          while($query->have_posts()) : $query->the_post();
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');   
          ?>
            <div class="blog-img">
                <img src="<?php echo $image[0]; ?>"/>
            </div>
            <div class="row">
                <div class="data">30</div>
                <div class="month">March</div>
            </div>
            <div class="row c-h">				
				<h3><?php the_title(); ?></h3>					
            </div>
			<div class="row c-h-2">
				<p><?php the_excerpt(); ?></p>					
			</div>
			<div class="row c-h">
				<a href="<?php the_permalink(); ?>">MORE</a>
			</div>
            <?php endwhile; } ?>
        </div>
        <!-- Third Post -->
        <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInDown animated" data-wow-delay=".3s">
        <?php $query = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'web',
            'posts_per_page' => 1,
        ));        
        if($query->have_posts()) {
          while($query->have_posts()) : $query->the_post();
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');   
          ?>
            <div class="blog-img">
                <img src="<?php echo $image[0]; ?>"/>
            </div>
            <div class="row">
                <div class="data">30</div>
                <div class="month">March</div>
            </div>
            <div class="row c-h">				
				<h3><?php the_title(); ?></h3>					
            </div>
			<div class="row c-h-2">
				<p><?php the_excerpt(); ?></p>					
			</div>
			<div class="row c-h">
				<a href="<?php the_permalink(); ?>">MORE</a>
			</div>
            <?php endwhile; } ?>
        </div>
            <!-- Forth Post -->
        <div class="col-xs-12 col-sm-3 col-md-3 wow fadeInDown animated" data-wow-delay=".3s">
        <?php $query = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'category_name' => 'pms',
            'posts_per_page' => 1,
        ));        
        if($query->have_posts()) {
          while($query->have_posts()) : $query->the_post();
          $image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');   
        ?>
            <div class="blog-img">
                <img src="<?php echo $image[0]; ?>"/>
            </div>
            <div class="row">
                <div class="data">30</div>
                <div class="month">March</div>
            </div>
            <div class="row c-h">				
				<h3><?php the_title(); ?></h3>					
            </div>
			<div class="row c-h-2">
				<p><?php the_excerpt(); ?></p>					
			</div>
			<div class="row c-h">
				<a href="<?php the_permalink(); ?>">MORE</a>
			</div>
            <?php endwhile; } ?>
        </div> 
    </div>
</div>