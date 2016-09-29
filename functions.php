<?php

// add_theme_support( 'post-thumbnails');

 if ( function_exists( 'add_theme_support' ) ) {

        add_theme_support('post-thumbnails');



        }



        function customScripts() {

	

	wp_enqueue_style( 'accesspress-staple-responsive-nav', get_template_directory_uri() . '/css/bootstrap.css');

	wp_enqueue_style( 'accesspress-staple-animate', get_template_directory_uri() . '/css/owl.carousel.css');

	wp_enqueue_style( 'accesspress-staple-fancycss', get_template_directory_uri() . '/css/jquery.fancybox.css"');

    wp_enqueue_style( 'accesspress-staple-style', get_stylesheet_uri() );



	wp_enqueue_script( 'jquery-basic', get_template_directory_uri() . '/js/jquery-1.12.3.min.js',  array(), '1.0', true);    

    wp_enqueue_script( 'neo-bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js',  array('jquery'), '1.0', true);



	wp_enqueue_script( 'neo-owl', get_template_directory_uri() . '/js/owl.carousel.min.js',  array('jquery'), '1.0', true);

	wp_enqueue_script( 'neo-scripts', get_template_directory_uri() . '/js/script.js',  array('jquery'), '1.0', true);

	wp_enqueue_script( 'neo-fancyjs', get_template_directory_uri() . '/js/jquery.fancybox.js',  array('jquery'), '1.0', true);



	

	

	

	}

	add_action( 'wp_enqueue_scripts', 'customScripts' );





	// Custom Post Para Slide Home (Primeiro Slide da Página)

	add_action( 'init', 'slider' );

	function slider() {

	  $labels = array(

	    'name' => _x('slide', 'post type general name'),

	    'singular_name' => _x('sliders', 'post type singular name'),

	    'add_new' => _x('Adicionar Novo', 'Slide'),

	    'add_new_item' => __('Adicionar Novo slide'),

	    'edit_item' => __('Editar Slide'),

	    'new_item' => __('Novo Slide'),

	    'all_items' => __('Todos Slides'),

	    'view_item' => __('Ver  Slide'),

	    'search_items' => __('Procurar Slide'),

	    'not_found' =>  __('Nenhum slide encontrado'),

	    'not_found_in_trash' => __('Nenhum slide encontrado'),

	    'parent_item_colon' => '',

	    'menu_name' => 'Slide Home'

	  );

	  $args = array(

	    'labels' => $labels,

	    'public' => true,

	    'publicly_queryable' => true,

	    'show_ui' => true,

	    'show_in_menu' => true,

	    'query_var' => true,

	    'rewrite' => true,

	    'capability_type' => 'post',

	    'hierarchical' => false,

	    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )

	  );

	  register_post_type('slider',$args);

	}





	// Custom Post Para Slide Empreendmento (Segundo Slide da Página)

	add_action( 'init', 'slider2' );

	function slider2() {

	  $labels = array(

	    'name' => _x('slide', 'post type general name'),

	    'singular_name' => _x('sliders', 'post type singular name'),

	    'add_new' => _x('Adicionar Novo', 'Slide'),

	    'add_new_item' => __('Adicionar Novo slide'),

	    'edit_item' => __('Editar Slide'),

	    'new_item' => __('Novo Slide'),

	    'all_items' => __('Todos Slides'),

	    'view_item' => __('Ver  Slide'),

	    'search_items' => __('Procurar Slide'),

	    'not_found' =>  __('Nenhum slide encontrado'),

	    'not_found_in_trash' => __('Nenhum slide encontrado'),

	    'parent_item_colon' => '',

	    'menu_name' => 'Slide Empreendimentos'

	  );

	  $args = array(

	    'labels' => $labels,

	    'public' => true,

	    'publicly_queryable' => true,

	    'show_ui' => true,

	    'show_in_menu' => true,

	    'query_var' => true,

	    'rewrite' => true,

	    'capability_type' => 'post',

	    'hierarchical' => false,

	    'supports' => array( 'title', 'editor', 'thumbnail', 'page-attributes' )

	  );

	  register_post_type('slider2',$args);

	}



        // MENUS



        register_nav_menus( array(



            // TOPO

            'top' => esc_html__( 'Menu do Topo', 'azud' )        



        ) );


		
// WALKER - RESPONSÁVEL POR CUSTOMIZAR O MENU



   require_once( 'setup/walker.php' );
	//Customização da tela de login
	function cutom_login_logo() {
		echo "<style type=\"text/css\">
				body.login div#login h1 a {
				background-image: url(".get_bloginfo('template_directory')."/images/logo-abrasivo.png);
				-webkit-background-size: auto;
				background-size: auto;
				margin: 0 0 25px;
				width: 320px;
				}
				body.login{
					background: url(".get_bloginfo('template_directory')."/images/bg-abrasivo.jpg) no-repeat #12a89d center center fixed ;
					-webkit-background-size: cover;
					-moz-background-size: cover;
					-o-background-size: cover;
					background-size: cover;
				}
				.login #backtoblog a, .login #nav a, .login h1 a, .login #backtoblog a:hover, .login #nav a:hover, .login h1 a:hover{
					color:#ffffff;
				}
				#login{
					text-align:center;
				}
		</style>";
	}
	add_action( 'login_enqueue_scripts', 'cutom_login_logo' );

	function loginpage_custom_link() {
		return 'http://www.abrasivodigital.com.br';
	}
	add_filter('login_headerurl','loginpage_custom_link');




/*------------------------------------------------*\
    Campos customizados em Configurações do Admin
\*------------------------------------------------*/

/**
 * Theme Option Page Example
 */
// Funções para inserir campos em "Aparência de Tema" (precisa dos códigos para exibicao na página também)



$options = get_option( 'pu_theme_options' );

function pu_theme_menu()
{
  add_theme_page( 'Opções do Tema', 'Opções do Tema', 'manage_options', 'pu_theme_options.php', 'pu_theme_page');
}
add_action('admin_menu', 'pu_theme_menu');

/**
 * Callback function to the add_theme_page
 * Will display the theme options page
 */
function pu_theme_page()
{
?>
    <div class="section panel">
      <h1>Opçoes de Customização do Tema</h1>
      <form method="post" enctype="multipart/form-data" action="options.php">
        <?php
          settings_fields('pu_theme_options');
          do_settings_sections('pu_theme_options.php');
        ?>
            <p class="submit">
                <input type="submit" class="button-primary" value="<?php _e('Salvar') ?>" />
            </p>
      </form>
    </div>
    <?php
}

/**
 * Register the settings to use on the theme options page
 */
add_action( 'admin_init', 'pu_register_settings' );

/**
 * Function to register the settings
 */
function pu_register_settings()
{
    // Register the settings with Validation callback
    register_setting( 'pu_theme_options', 'pu_theme_options');

    // Add settings section
    add_settings_section( 'pu_text_section', '', '', 'pu_theme_options.php' );

    // Create textbox field

    $telefone_central_args = array(
      'type'      => 'text',
      'id'        => 'telefones_fixo',
      'name'      => 'telefone_central_args',
      'desc'      => 'Telefones Fixo',
      'std'       => '',
      'size'      => '75',
      'label_for' => 'telefones_fixo',
      'class'     => 'css_class'
    );

        $whatsappargs = array(
      'type'      => 'text',
      'id'        => 'whatsapp',
      'name'      => 'whatsappargs',
      'desc'      => 'Whatsapp',
      'std'       => '',
      'size'      => '75',
      'label_for' => 'whatsapp',
      'class'     => 'css_class'
    );


	add_settings_field( 'telefones_fixo', 'Telefone Fixo 1', 'pu_display_setting', 'pu_theme_options.php', 'pu_text_section', $telefone_central_args );
	add_settings_field( 'whatsapp', 'Whatsapp', 'pu_display_setting', 'pu_theme_options.php', 'pu_text_section', $whatsappargs );	
}

/**
 * Function to display the settings on the page
 * This is setup to be expandable by using a switch on the type variable.
 * In future you can add multiple types to be display from this function,
 * Such as checkboxes, select boxes, file upload boxes etc.
 */

function st_add_init()

{

   $screen = get_current_screen();

   if ($screen->id =='appearance_page_pu_theme_options')
        {
            //Media Uploader Scripts
            wp_enqueue_script('media-upload');
            wp_enqueue_script('thickbox');
            wp_register_script('my-upload', get_bloginfo( 'stylesheet_directory' ) . '/js/uploader.js', array('jquery','media-upload','thickbox'));
            wp_enqueue_script('my-upload');
            //Media Uploader Style
            wp_enqueue_style('thickbox');

        }
}
add_action('admin_enqueue_scripts', 'st_add_init');


function pu_display_setting($args)
{
    extract( $args );

    $option_name = 'pu_theme_options';

    $options = get_option( $option_name );

    switch ( $type ) {
            case 'text':
                $options[$id] = stripslashes($options[$id]);
                $options[$id] = esc_attr( $options[$id]);
                echo "<input class='regular-text$class' type='text' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' size='$size' />";
                echo ($desc != '') ? "<br /><span class='description'>$desc</span>" : "";
            break;
            case 'upload':
                $options[$id] = stripslashes($options[$id]);
                $options[$id] = esc_attr( $options[$id]);
                echo "<input class='upload-$class' type='text' id='$id' name='" . $option_name . "[$id]' value='$options[$id]' size='$size' />";
                echo '<input id="st_upload_button" class="st_upload_button" type="button" name="upload_button" value="Upload" />';
                echo '<span class="description">' . $desc . '</span>';
            break;
    }
}
	
?>