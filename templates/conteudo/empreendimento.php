            <div class="row" id="empreendimento">
              <div class="owl-carousel-two">

                <?php

                query_posts('post_type=slider2&order=ASC&showposts=-1');

                if (have_posts()) : while (have_posts()): the_post();

                ?>                 

                <div class="item">
                  <div class="col-md-6 col-texto-full">
                      <div class="box-texto-empreendimento">
                        <div class="col-md-6 col-md-offset-4">
                        <h1><?php the_title(); ?></h1>
                        <p><?php the_content(); ?></p>                          
                        </div>
                      </div>
                  </div>
                  <div class="col-md-6 img-slide-two">
                    <img src="<?php the_field('imagem_do_slider_2'); ?>" height="1080" width="950" alt="<?php the_title(); ?>" class="img-responsive">
                  </div>
                </div>

                <?php  endwhile;  endif;   wp_reset_query(); ?>  
              </div>              
             </div>