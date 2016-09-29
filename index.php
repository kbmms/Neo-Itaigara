<?php get_header(); ?>

<!-- Primeiro slider - Full -->
<?php get_template_part( 'templates/conteudo/slider', 'slider' ); ?>

<!-- Segundo Slider em Empreendimentos -->
<?php get_template_part( 'templates/conteudo/empreendimento', 'empreendimento' ); ?>

<!-- Localização e Mapa -->
<?php get_template_part( 'templates/conteudo/localizacao', 'localizacao' ); ?>

<!-- Parte das galerias -->
<?php get_template_part( 'templates/conteudo/galeria', 'galeria' ); ?>

<!-- Vídeo e texto  -->
<?php get_template_part( 'templates/conteudo/video', 'video' ); ?>

<!-- Galeria das plantas -->
<?php get_template_part( 'templates/conteudo/plantas', 'plantas' ); ?>

<!-- Parte de contato form e textos -->
<?php get_template_part( 'templates/conteudo/contato', 'contato' ); ?>

<?php get_footer(); ?>