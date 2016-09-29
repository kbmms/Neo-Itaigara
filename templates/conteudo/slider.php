            <div class="linha-sliders row" id="slider">
            <div class="owl-carousel slider-1">
      <?php
      query_posts('post_type=slider&order=ASC&showposts=-1');
      if (have_posts()) : while (have_posts()): the_post();
      ?>            
              <div class="item">
                <div class="slider-texto">

                <?php if (get_field('texto_do_slider_1')){?>
                <h1 class="hidden-xs"><span><?php the_field('texto_do_slider_1'); ?></span></h1>
                      <?php } ?>

                <?php if (get_field('texto_do_slider_2')){?>
                <h2><span><?php the_field('texto_do_slider_2'); ?></span></h2>
                 <?php } ?>


              <?php if (get_field('texto_do_slider_3')){?>
                        <h4 class=""><span><?php the_field('texto_do_slider_3'); ?></span></h4>    
              <?php } ?>
                <?php if (get_field('texto_do_slider_4')){?>
				          <h3 class="hidden-xs"><span><?php the_field('texto_do_slider_4'); ?></span></h3>    
			       	<?php } ?>
                </div>

                <img src="<?php the_field('imagem_do_slider'); ?>" height="1080" width="1920" alt="<?php the_title(); ?>" class="img-responsive">
              </div>
       <?php  endwhile;  endif;   wp_reset_query(); ?>       

          </div>              
            </div>