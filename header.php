<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <!-- fontmontserrat -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- aoscss -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
    // WordPress 5.2 wp_body_open implementation
    if ( function_exists( 'wp_body_open' ) ) {
        wp_body_open();
    } else {
        do_action( 'wp_body_open' );
    }
?>

<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'wp-bootstrap-starter' ); ?></a>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>

    <!-- top -->
    <section class="l-top d-none position-relative">

        <div class="container">
            <!--
                $args = array(
                    'posts_per_page' => 1,
                    'post_type'      => 'informacoes_gerais'
                );

                $informations = get_posts($args);

                foreach($informations as $information) : 
            -->
                    <div class="row justify-content-center">

                            
                        <div class="col-lg-11">

                            <div class="row">

                                <div class="col-lg-7"> 
                                    
                                    <!-- menu editorials -->
                                    <?php echo get_template_part( 'template-parts/content', 'menu-editorials' ) ?>
                                    <!-- end menu editorials -->
                                </div>

                                <div class="col-lg-3 mt-3">

                                    <div class="row">

                                        <div class="col-12 py-3 py-md-0">

                                            <ul class="l-top__social-media d-flex justify-content-center mb-0 pl-0">

                                                <?php if(get_field( 'instagram', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                        <a
                                                        class="u-icon__brands u-icon__instagram u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'instagram', 'option' ); ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Instagram
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                
                                                <?php if(get_field( 'facebook', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                        <a
                                                        class="u-icon__brands u-icon__facebook u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'facebook', 'option' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Facebook
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                
                                                <?php if(get_field( 'youtube', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                        <a
                                                        class="u-icon__brands u-icon__youtube u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'youtube', 'option' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Youtube
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                                
                                                <?php if(get_field( 'whatsapp', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                        <a
                                                        class="u-icon__brands u-icon__whatsapp u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'whatsapp', 'option' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Whatsapp
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>

                                        <div class="col-12 mt-3 px-5">
                                            
                                            <?php if(get_field( 'visivel', 'option' ) == 'Sim') : ?>
                                                    <a
                                                    class="d-block hover:u-opacity-8 u-font-size-14 u-font-weight-bold text-center text-decoration-none py-2 px-4"
                                                    style="color:<?php echo get_field( 'cor', 'option' ) ?>;background-color:<?php echo get_field( 'cor_de_fundo', 'option' ) ?>"
                                                    href="<?php echo get_field( 'link_do_botao', 'option' ) ?>"
                                                    <?php if(get_field( 'abrir_em_uma_nova_guia', 'option') == 'Sim') : ?>
                                                        target="_blank"
                                                    <?php endif; ?>
                                                    >
                                                        <?php echo get_field( 'texto', 'option' ) ?>
                                                    </a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-lg-2 d-flex d-lg-block justify-content-center align-items-center mt-3 mt-lg-0 px-lg-0">      
                                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                            <img
                                            class="img-fluid"
                                            src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>"
                                            alt="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>">
                                        </a>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-12 d-flex justify-content-center align-items-center">
                            <a href="<?php echo get_home_url( null, '/' ) ?>">
                                <img
                                class="img-fluid"
                                src="<?php echo get_field( 'logo_no_topo', 'option') ?>"
                                alt="<?php echo get_bloginfo( 'name' ) ?>">
                            </a>
                        </div>
                    </div>
            <!-- endforeach; -->
        </div>
    </section>
    <!-- end top -->

    <!-- top -->
    <section class="l-top position-relative">

        <div class="container">

            <div class="row justify-content-center">

                    
                <div class="col-lg-11">

                    <div class="row">

                        <div class="col-lg-7"> 
                            
                            <!-- menu editorials -->
                            <?php echo get_template_part( 'template-parts/content', 'menu-editorials' ) ?>
                            <!-- end menu editorials -->
                        </div>

                        <div class="col-5 d-none d-lg-block">
                            
                            <div class="row">

                                <div class="col-3">
                                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                            <img
                                            class="img-fluid"
                                            src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>"
                                            alt="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>">
                                        </a>
                                    <?php endif; ?>
                                </div>

                                <div class="col-4 px-0">
                                    <?php
                                        $buttons = get_field( 'botoes_de_acesso', 'option');

                                        $buttons[0];

                                        if( $buttons[0][ 'visivel' ] == 'Sim' ) : 
                                    ?>
                                            <a
                                            class="d-block hover:u-opacity-8 u-font-size-10 u-font-weight-bold text-center text-decoration-none my-1 py-2 px-4"
                                            style="color:<?php echo $buttons[0][ 'cor' ]; ?>;background-color:<?php echo $buttons[0][ 'cor_de_fundo' ]; ?>"
                                            href="<?php echo $buttons[0]['link_do_botao']; ?>"
                                            <?php if( $buttons[0][ 'abrir_em_uma_nova_aba' ] == 'Sim' ) : ?>
                                                target="_blank"
                                            <?php endif; ?>>
                                                <?php echo $buttons[0][ 'texto' ]; ?>
                                            </a>
                                    <?php endif; ?>

                                    <?php if( $buttons[1][ 'visivel' ] == 'Sim' ) : ?>
                                            <a
                                            class="d-block hover:u-opacity-8 u-font-size-10 u-font-weight-bold text-center text-decoration-none my-1 py-2 px-4"
                                            style="color:<?php echo $buttons[1][ 'cor' ]; ?>;background-color:<?php echo $buttons[1][ 'cor_de_fundo' ]; ?>"
                                            href="<?php echo $buttons[1]['link_do_botao']; ?>"
                                            <?php if( $buttons[1][ 'abrir_em_uma_nova_aba' ] == 'Sim' ) : ?>
                                                target="_blank"
                                            <?php endif; ?>>
                                                <?php echo $buttons[1][ 'texto' ]; ?>
                                            </a>
                                    <?php endif; ?>
                                </div>

                                <div class="col-5 pt-1 px-1">
                                    
                                    <div class="row">

                                        <div class="col-12">
                                            <?php if( $buttons[2][ 'visivel' ] == 'Sim' ) : ?>
                                                    <a
                                                    class="d-block hover:u-opacity-8 u-font-size-10 u-font-weight-bold text-center text-decoration-none mb-1 py-2 px-4"
                                                    style="color:<?php echo $buttons[2][ 'cor' ]; ?>;background-color:<?php echo $buttons[2][ 'cor_de_fundo' ]; ?>"
                                                    href="<?php echo $buttons[2]['link_do_botao']; ?>"
                                                    <?php if( $buttons[2][ 'abrir_em_uma_nova_aba' ] == 'Sim' ) : ?>
                                                        target="_blank"
                                                    <?php endif; ?>>
                                                        <?php echo $buttons[2][ 'texto' ]; ?>
                                                    </a>
                                            <?php endif; ?>
                                        </div>

                                        <div class="col-12">

                                            <ul class="l-top__social-media d-flex justify-content-center mb-0 pl-0">

                                                <?php if(get_field( 'instagram', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                        <a
                                                        class="u-icon__brands u-icon__instagram u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'instagram', 'option' ); ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Instagram
                                                        </a>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if(get_field( 'facebook', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                        <a
                                                        class="u-icon__brands u-icon__facebook u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'facebook', 'option' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Facebook
                                                        </a>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if(get_field( 'youtube', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                        <a
                                                        class="u-icon__brands u-icon__youtube u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'youtube', 'option' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Youtube
                                                        </a>
                                                    </li>
                                                <?php endif; ?>

                                                <?php if(get_field( 'whatsapp', 'option' )) : ?>
                                                    <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                        <a
                                                        class="u-icon__brands u-icon__whatsapp u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                        href="<?php echo get_field( 'whatsapp', 'option' ) ?>"
                                                        target="_blank"
                                                        rel="noreferrer noopener">
                                                            Link do Whatsapp
                                                        </a>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-3 d-lg-none">

                            <div class="row">

                                <div class="col-12 py-3 py-md-0">

                                    <ul class="l-top__social-media d-flex justify-content-center mb-0 pl-0">

                                        <?php if(get_field( 'instagram', 'option' )) : ?>
                                            <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                <a
                                                class="u-icon__brands u-icon__instagram u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                href="<?php echo get_field( 'instagram', 'option' ); ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Link do Instagram
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        
                                        <?php if(get_field( 'facebook', 'option' )) : ?>
                                            <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                <a
                                                class="u-icon__brands u-icon__facebook u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                href="<?php echo get_field( 'facebook', 'option' ) ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Link do Facebook
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        
                                        <?php if(get_field( 'youtube', 'option' )) : ?>
                                            <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                <a
                                                class="u-icon__brands u-icon__youtube u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                href="<?php echo get_field( 'youtube', 'option' ) ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Link do Youtube
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                        
                                        <?php if(get_field( 'whatsapp', 'option' )) : ?>
                                            <li class="l-top__social-media__item d-flex justify-content-center align-items-center u-bg-folk-primary mx-1">
                                                <a
                                                class="u-icon__brands u-icon__whatsapp u-font-size-0 before::u-font-size-16 text-decoration-none u-color-folk-white"
                                                href="<?php echo get_field( 'whatsapp', 'option' ) ?>"
                                                target="_blank"
                                                rel="noreferrer noopener">
                                                    Link do Whatsapp
                                                </a>
                                            </li>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </div>
                            
                        </div>

                        <div class="col-lg-2 d-flex d-lg-none justify-content-center align-items-center mt-3 mt-lg-0 px-lg-0">      
                            <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                                <a href="<?php echo esc_url( home_url( '/' )); ?>">
                                    <img
                                    class="img-fluid"
                                    src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>"
                                    alt="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>">
                                </a>
                            <?php endif; ?>

                            <a 
                            class="col-6 d-lg-none pr-4" 
                            href="<?php echo get_home_url( null, '/' ) ?>">
                                <img
                                class="img-fluid"
                                src="<?php echo get_field( 'logo_no_topo', 'option') ?>"
                                alt="<?php echo get_bloginfo( 'name' ) ?>">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class="col-9 d-none">

                    <div class="row justify-content-center">

                        <div class="col-2 d-flex justify-content-center align-items-center">
                            <a href="<?php echo get_home_url( null, '/' ) ?>">
                                <img
                                class="img-fluid"
                                src="<?php echo get_field( 'logo_no_topo', 'option') ?>"
                                alt="<?php echo get_bloginfo( 'name' ) ?>">
                            </a>
                        </div>    
                    </div>
                </div>

                <div class="col-lg-2 d-lg-none">

                    <div class="row">

                        <div class="col-12">
                                
                            <?php
                                if( have_rows( 'botoes_de_acesso', 'option' ) ) :
                                    while( have_rows( 'botoes_de_acesso', 'option' ) ) : the_row();
                                        if( get_sub_field( 'visivel' ) == 'Sim' ) :
                            ?>
                                        <a
                                        class="d-block hover:u-opacity-8 u-font-size-14 u-font-weight-bold text-center text-decoration-none my-1 py-2 px-4"
                                        style="color:<?php echo get_sub_field( 'cor' ) ?>;background-color:<?php echo get_sub_field( 'cor_de_fundo' ) ?>"
                                        href="<?php echo get_sub_field('link_do_botao') ?>"
                                        title="<?php echo get_sub_field( 'texto' ) ?>"
                                        <?php if( get_sub_field( 'abrir_em_uma_nova_aba' ) == 'Sim' ) : ?>
                                            target="_blank"
                                        <?php endif; ?>>
                                            <?php echo get_sub_field( 'texto' ) ?>
                                        </a>
                            <?php
                                        endif;
                                    endwhile;
                                endif;
                            ?>
                        </div>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end top -->

    <header id="masthead" class="l-header header site-header navbar-static-top u-bg-folk-primary mt-4 mt-lg-0 py-4 py-lg-0 <?php echo wp_bootstrap_starter_bg_class(); ?>" role="banner">

        <div class="container">

            <nav class="l-navbar navbar navbar-expand-xl p-0">

                <div class="navbar-brand d-none">
                    <?php if ( get_theme_mod( 'wp_bootstrap_starter_logo' ) ): ?>
                        <a href="<?php echo esc_url( home_url( '/' )); ?>">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" alt="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>">
                        </a>
                    <?php else : ?>
                        <a class="site-title" href="<?php echo esc_url( home_url( '/' )); ?>"><?php esc_url(bloginfo('name')); ?></a>
                    <?php endif; ?>

                </div>
                
                <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="l-navbar__hamburger"></span>
                </button>

                <div class="l-navbar__brand-box position-relative d-none d-lg-block p-2">
                    <a 
                    class="position-relative d-block"
                    href="<?php echo get_home_url( null, '/' ) ?>">
                        <img
                        class="img-fluid"
                        src="<?php echo get_field( 'logo_no_topo', 'option') ?>"
                        alt="<?php echo get_bloginfo( 'name' ) ?>">
                    </a>
                </div>

                <?php
                wp_nav_menu(array(
                'theme_location'    => 'primary',
                'container'       => 'div',
                'container_id'    => 'main-nav',
                'container_class' => 'collapse navbar-collapse justify-content-center lg:u-bg-folk-primary py-3',
                'menu_id'         => false,
                'menu_class'      => 'navbar-nav',
                'depth'           => 3,
                'fallback_cb'     => 'wp_bootstrap_navwalker::fallback',
                'walker'          => new wp_bootstrap_navwalker()
                ));
                ?>

            </nav>
        </div>
    </header><!-- #masthead -->
    
    <?php endif; ?>