<?php get_header('single'); have_posts(); 
$image = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');

?>
    
    <!-- =============== blog single =============== -->
	<section style="background-color: white;">	
    <div class="container marg50">
        <div class="row">
          <div class="col-lg-12">
            <div class="classic-blog blog-single">
              <div class="bs-blog-img"><img alt="acx" src="<?php print_r($image[0]); ?>"></div>
              <div class="bs-blog-naz">
                <div class="bs-blog-type"><i class="fa fa-pencil-square-o"></i></div>
                <div class="bs-blog-name"><a href="#"><?php the_title(); ?></a></div>
                <div class="bs-blog-detail"><?php the_date(); ?>, by <a href="#"><?php the_author(); ?></a>, in <a href="#">Envato</a>, <a href="#">25 comments</a></div>
                <div class="bs-blog-text"><?php the_content(); ?>
                </div> 
              </div>
            </div>
            <div class="row marg50">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="soc-blog-single">
                  <ul class="soc-blog">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-vk"></i></a></li>
                    <li><a href="#"><i class="fa fa-tumblr"></i></a></li>
                  </ul>
                </div>
              </div>
            </div>
            
            <div class="bs-blog-line"></div>
            <h3>Comments</h3>
            <div class="comment marg25">
              <img class="img_comm" alt="" src="assets/img/team-img1.jpg">
              <div class="comm_name">Jone <span>- 8 February 2015</span></div>
              <p class="text_cont com_top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sed facere numquam accusantium ratione neque nulla veniam voluptatem officiis libero eaque expedita dignissimos aliquam alias cupiditate sunt doloribus fugit.</p>
            </div>
            <div class="bs-blog-line-com"></div>
            <div class="comment">
              <img class="img_comm" alt="" src="assets/img/team-img2.jpg">
              <div class="comm_name">Shone Svenson <span>- 12 February 2015</span></div>
              <p class="text_cont com_top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sed facere numquam accusantium ratione neque nulla veniam voluptatem officiis libero eaque expedita dignissimos aliquam alias cupiditate sunt doloribus fugit. Dolores aut consectetur quas quisquam voluptate?</p>
            </div>
            <div class="comment-inner">
              <img class="img_comm" alt="" src="assets/img/team-img1.jpg">
              <div class="comm_name">Jone <span>- 14 February 2015</span></div>
              <p class="text_cont com_top">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sed facere numquam accusantium ratione neque nulla veniam voluptatem officiis libero eaque expedita dignissimos aliquam alias cupiditate sunt doloribus fugit. Dolores aut consectetur quas quisquam voluptate?</p>
            </div>
            <div class="bs-blog-line-com"></div>
            <div class="comment">
              <img class="img_comm" alt="" src="assets/img/team-img3.jpg">
              <div class="comm_name">Black Stripes <span>- 16 February 2014</span></div>
              <p class="text_cont com_top">Dolores aut consectetur quas quisquam voluptate fugit saepe reiciendis eligendi odio? Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati sed facere numquam accusantium ratione neque nulla veniam voluptatem officiis libero eaque expedita dignissimos aliquam alias cupiditate sunt doloribus fugit. Dolores aut consectetur quas quisquam voluptate fugit saepe reiciendis eligendi odio?</p>
            </div>
            <div class="bs-blog-line"></div>
            <p class="text_cont"><input type="text" class="input-def" placeholder="Name" name="name"></p>
            <p class="text_cont"><input type="text" class="input-def" placeholder="E-mail" name="email"></p>
            <p class="text_cont"><input type="text" class="input-def" placeholder="Web Site" name="subject"></p>
            <p class="text_cont"><textarea rows="10" cols="40" class="input-def-textarea" id="message" placeholder="Comment" name="message"></textarea></p>
            <p><input type="submit" value="Send Comment" class="btn btn-default" id="send"></p>
          </div> 
        </div>
      </div>
	</section>	
    <!-- Footer -->
    <?php get_footer();

