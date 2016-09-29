<!DOCTYPE html>
<?php
 global $options;
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <meta name="description" content="Neo Itaigara Life">
    <meta name="keywords" content="Neo Itaigara Life, Empreendimento, Imóveis">
    <meta name="author" content="Abrasivo Digital - Neo Itaigara Life">
    <meta name="robots" content="index, follow">



    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(). '/images/favicon.ico' ?>">
    <link rel="icon" href="<?php echo get_template_directory_uri(). '/images/favicon.ico' ?>">
    <!-- ### Metas Open Graph ### -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/font-awesome.css">
    <meta property="og:title" content="Neo Itaigara Life">
    <meta property="og:url" content="http://www.neoitaigara.com.br">
    <meta property="og:site_name" content="Neo Itaigara Life">
    <meta property="og:description" content="Trabalho, orla, shopping e lazer. A oportunidade de viver ao lado de tudo isso.">
    <meta property="og:type" content="website">  
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Neo Itaigara Life</title>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <?php wp_head(); ?>
 
  </head>

  <!-- NAVEGAÇÃO -->


        <!-- NAVEGAÇÃO -->
  <body>

        <div class="menu-topo container-fluid">
        <div class="container-fluid topo-contatos hidden-xs">
                <div class="container">
                    <div class="col-md-12">
                        <div class="col-md-4 col-sm-4">
                        <div class="corretor-online-topo">
                            <p><i class="fa fa-phone-square" aria-hidden="true"></i><span> 71 3412-1212 | 713016-9393</span></p>
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                        <div class="corretor-online-topo">
                            <p><i class="fa fa-whatsapp" aria-hidden="true"></i><span> 71 99992-0008</span></p>
                        </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="corretor-online-topo">
                                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico_corretoronline_branco.png" alt="">
                                    <a href="http://bbbritoeamoedo.hypnobox.com.br/?controle=Atendimento&acao=index&produto=381568&midia=HotsiteNeoItaigara" onclick="window.open(this.href,'galeria','width=780,height=470');" target="_blank">Corretor Online</a>
                            </div>
                        </div>                
                    </div>
                </div>
        </div>
<!--             <div class="botao-flutuante hidden-xs">

                        
                <ul>
                   <li class="whatsapp_hover">
                        <img  title="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico_zap.png" alt="">
                        <div class="whatsapp_appear">
                          <p><?php echo $options['whatsapp']; ?></p> 
                        </div>                        
                    </li>
                   <li class="telefone_hover">
                        <img  title="" src="<?php echo get_stylesheet_directory_uri(); ?>/images/ico_tel.png" alt="">
                        <div class="telefone_appear">
                          <p><?php echo $options['telefones_fixo']; ?></p> 
                        </div>                        
                    </li>               
                </ul>
            </div> -->
            <nav class="navbar navbar-default">
    
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header col-md-3 col-md-offset-1">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="http://www.neoitaigaralife.com.br"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" height="74" width="121" alt=""></a>
                </div>
                
                <br>
               <div class="row visible-xs telefones-mobile">
                <div class="container text-center">
                  <p><span class="telefone-texto"><?php echo $options['telefones_fixo']; ?></span> | <span class="telefone-texto">Whatsapp <?php echo $options['whatsapp']; ?></span></p>
                </div>
                
                                
                </div>

           <!--      <div class="telefone-topo-fixo hidden-xs">
                    <p><span><?php echo $options['telefones_fixo']; ?></span></p>
                </div> -->
        <?php    

            wp_nav_menu(
                $args = array( 
                    'menu' => 'top', 
                    'container' => 'div', 
                    'container_class' => 'collapse navbar-collapse scroll-go-link', 
                    'container_id' => 'bs-example-navbar-collapse-1', 
                    'menu_class' => 'nav navbar-nav', 
                    'menu_id' => '',
                    'echo' => true, 
                    'fallback_cb' => 'wp_page_menu', 
                    'before' => '', 
                    'after' => '', 
                    'link_before' => '', 
                    'link_after' => '', 
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth' => 0, 
                    'walker' => new WPDocs_Walker_Nav_Menu(),
                    'theme_location' => 'top' 
                )
            );

        ?>

              </div><!-- /.container-fluid -->

            </nav>    

            </div>

