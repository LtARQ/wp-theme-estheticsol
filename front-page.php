<?php
/*
* Template Name: Home
*
*/


get_header();
?>
<!-- =============== About =============== -->
<section id="about" class="">
		<!-- =============== container =============== -->
        <?php get_template_part('templates/main-parts/about'); ?>  
		<!-- =============== container end =============== -->		
    </section>
	<section id="team" class="">
		<!-- =============== container =============== -->
        <?php get_template_part('templates/main-parts/team2'); ?>
		<!-- =============== container end =============== -->		
    </section>
	<!-- <section id="services" class=""> -->
		<!-- =============== container =============== -->
        <?php get_template_part('templates/main-parts/mission'); ?>
		<!-- =============== container end =============== -->		
    <!-- </section> -->
	<section class="partners">
		<!-- =============== Our Partners =============== -->
        <?php get_template_part('templates/main-parts/partners'); ?>   
		<!-- =============== container end =============== -->		
    </section>
	<!-- =============== Services =============== -->
    <?php get_template_part('templates/main-parts/services'); ?>
	<!-- =============== Partner =============== -->
    	
	<!-- =============== Counter =============== -->
    <section class="counter" id="fun-facts">

		<!-- =============== Calculated Data =============== -->
        <?php get_template_part('templates/main-parts/calculate'); ?>   
		<!-- =============== container end =============== -->		
    </section>	
</section>
	<section id="blog" class="">
		<!-- =============== blog =============== -->
        <?php get_template_part('templates/main-parts/blog'); ?>
		<!-- =============== container end =============== -->		
    </section>	
	<section id="contact">
	<!-- =============== contact Us =============== -->
		<?php get_template_part('templates/main-parts/contact'); ?>
	</section>
    <!-- Footer -->
<?php
get_footer();


    
