<div class="row plantas-paddings" id="plantas">

              <div class="container-fluid">

                <div class="col-md-8 col-md-offset-2 box-texto plantas-text-marg">

                  <h1>REPLETO DE OPÇÕES COMO A VIDA DEVE SER</h1>

                </div>





                <div class="row rows-margins-paddings">

                <?php $query = new WP_Query( array('post_type' => 'post', 'p' => 215 )); ?>

                 <?php if ( $query->have_posts() ) : ?>

                  <?php $i = 0; ?>

                 <?php while ( $query->have_posts() ) : $query->the_post(); ?>

                  <?php $i++; ?>



              <?php  if ( get_post_gallery() ) :



                    $gallery = get_post_gallery(get_the_ID(), false);

                    $ids = explode( ",", $gallery['ids'] ); ?>



                          <?php foreach( $ids as $id )

                          {

                            $full = wp_get_attachment_url( $id );

                            $mini = wp_get_attachment_image( $id, 'large' );

                            $title = get_the_title( $id );

                              ?>



                            <a href="<?php echo $full; ?>" class="fancybox-thumb" rel="galeria-plantas">

                             <div class="galerias-box col-md-3 col-sm-6 col-sm-offset-0 col-xs-10 col-xs-offset-1">

                                <div class="block-hover col-md-12 col-xs-12 col-sm-12">

                                  <h3><?php echo $title; ?></h3>

                                </div>          

                                <?php echo $mini; ?>

                             </div>

                            </a>  



                          <?php } ?>



                <?php endif; endwhile; endif; wp_reset_postdata(); ?>                

                </div>



                                                                                                                                     

              </div>

            </div> 