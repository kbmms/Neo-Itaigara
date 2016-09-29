           <div class="row contato-2">
             <div class="container-fluid">
               <div class="text-center realizacoes">
                  <?php $query = new WP_Query( 'category_name=realizacao&showposts=1&offset=0' ); ?>
                  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>               
                 
                  <div class="row realizacoes-empresas-realizacao">
                   <h4>Realização</h4>
                  <div class="realizacoes-empresas">
                    <?php the_content(); ?>
                  </div>                    
                  </div>
                   <?php endwhile; 
                   wp_reset_postdata();
                   else : ?>
                   <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
                   <?php endif; ?>

                  <?php $query = new WP_Query( 'category_name=vendas&showposts=1&offset=0' ); ?>
                  <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>                                      
                  <h4>Vendas</h4>
                  <div class="row">
                    <div class="realizacoes-empresas realizacoes-empresas-vendas">
                      <?php the_content(); ?>
                    </div>
                  </div>
                 <?php endwhile; 
                 wp_reset_postdata();
                 else : ?>
                 <p><?php _e( 'Desculpa, nenhuma postagem encontrada.' ); ?></p>
                 <?php endif; ?>
               </div>
             </div>
           </div>           
          </div> <!-- Fechamendo da div bg-full-contao-e-footer (página footer) -->
          <div class="row copyright">
          <div class="corretor-online hidden-xs">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico_corretoronline_branco.png" alt="">
            <a href="http://bbbritoeamoedo.hypnobox.com.br/?controle=Atendimento&acao=index&produto=381568&midia=HotsiteNeoItaigara" onclick="window.open(this.href,'galeria','width=780,height=470');" target="_blank">Corretor Online</a>
          </div>
            <div class="container-fluid">
              <div class="container">
                <div class="col-md-6">
                  <p><a href="http://www.abrasivodigital.com.br" target="_blank">Desenvolvido por Abrasivo Digital Studio. Todos os direitos reservados.</a></p>
                </div>
                <div class="col-md-1 col-md-offset-5">
                  <a href="http://www.abrasivodigital.com.br" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/abrasivo.png" height="18" width="92" alt=""></a>
                </div>
              </div>
            </div>
          </div>
    <?php wp_footer(); ?>
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-25302769-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');

fbq('init', '1623774644603372');
fbq('track', "PageView");</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1623774644603372&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<!-- Facebook Conversion Code for Leads - Neo Itaigara 1 -->
<script>(function() {
  var _fbq = window._fbq || (window._fbq = []);
  if (!_fbq.loaded) {
    var fbds = document.createElement('script');
    fbds.async = true;
    fbds.src = 'https://connect.facebook.net/en_US/fbds.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(fbds, s);
    _fbq.loaded = true;
  }
})();
window._fbq = window._fbq || [];
window._fbq.push(['track', '6049786922235', {'value':'0.00','currency':'BRL'}]);
</script>
<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6049786922235&amp;cd[value]=0.00&amp;cd[currency]=BRL&amp;noscript=1" /></noscript>

  </body>
</html>