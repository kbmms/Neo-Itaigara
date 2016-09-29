          <div class="bg-full-contao-e-footer">
          <!--   =============   CONTATO ============ -->
            <div class="row bg-contato-cinza" id="contato">
              <div class="container-fluid">
               <?php $query = new WP_Query( 'category_name=contato&showposts=1' ); ?>
               <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>              
                <div class="container contato-container">
                <div class="row">
                    <div class="col-md-5 box-texto contato-texto-principal">
                      <h4><?php the_title(); ?></h4>
                    </div>                   
                </div>
               
                    <div class="col-md-5 box-texto plantas-texto">
                    <?php the_content(); ?>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="col-md-6">
                    <?php the_field('contato'); ?>
                   
                    </div>                  
                </div>
               <?php endwhile; 
               wp_reset_postdata();
               else : ?>
               <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
               <?php endif; ?>
              </div>
            </div>