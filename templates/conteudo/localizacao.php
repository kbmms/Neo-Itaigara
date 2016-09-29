            <div class="row scroll-go-link" id="localizacao">
              <div class=" localizacao-full container-fluid">
                <div class="container">
               <?php $query = new WP_Query( 'category_name=localizacao&showposts=1' ); ?>
               <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                 
                  <div class="col-md-8 col-md-offset-2 box-texto box-texto-localizacao">
                    <h1><?php the_title(); ?></h1>
                    <p><?php the_content(); ?></p>
                  </div>
                   <?php endwhile; 
                   wp_reset_postdata();
                   else : ?>
                   <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
                   <?php endif; ?>   

                  <div class="col-md-12 box-icons">
                  <ul>
                  <?php $query = new WP_Query( array('post_type' => 'post', 'p' => 275 )); ?>

                 <?php if ( $query->have_posts() ) : ?>
                  
                 <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                    <?php  if ( get_post_gallery() ) :

                    $gallery = get_post_gallery(get_the_ID(), false);

                    $ids = explode( ",", $gallery['ids'] ); ?>

                          <?php foreach( $ids as $id )

                          {

                            $full = wp_get_attachment_url( $id );

                            $mini = wp_get_attachment_image( $id, 'small' );

                            $title = get_the_title( $id );

                              ?>
                                <li>
                                   <!--  <a href="javascript:getInfo('5578');" class="text-center"> -->
                                      <?php echo $mini; ?>
                                      <p ><?php echo $title; ?></p>
                                    <!-- </a> -->
                                </li>
                                                                                                                               
                          <?php } ?>
                   <?php endif; endwhile; endif; wp_reset_postdata(); ?>   
                  </ul>
                  </div>



                </div>
              </div>
              <div class="box-map container-fluid hidden-xs">
              <?php echo do_shortcode('[ready_google_map id="2"]') ?>
                <!-- <div id="map" style="height: 500px; width: 100%"></div> -->
      
            </div>