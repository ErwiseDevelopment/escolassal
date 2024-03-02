<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
    <div id="main" class="site-main" role="main">

        <!-- banner -->
        <section class="u-border-color-dark-marron u-bg-cover u-bg-no-repeat py-5" style="background-color: #0B4DAD ;">
                       <div class="container" >

                <div class="row">

                    <div class="col-12">

                        <div class="d-flex justify-content-center align-items-center" ">
                            <h1 class="d-inline-block u-font-size-32 xl:u-font-size-48 xxl:u-font-size-54 u-font-weight-extrabold u-font-family-nunito text-center u-color-folk-white mb-0 ml-3">
                                Nossa equipe
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end banner -->

        <section class="l-team py-5">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10">

                        <div class="row">

                            <?php
                            // Consulta para recuperar os posts com a categoria "Diretoria"
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type'      => 'equipe',
                                'order'          => 'DESC',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'equipecat',
                                        'field'    => 'slug',
                                        'terms'    => 'diretoria',
                                    ),
                                ),
                            );

                            $equipe_diretoria = new WP_Query($args);

                            if ($equipe_diretoria->have_posts()) :
                                while ($equipe_diretoria->have_posts()) : $equipe_diretoria->the_post(); ?>
                                    <!-- Exibição dos posts -->
                                    <div class="col-md-6 my-3">
                                        <div class="card border-0">
                                            <div class="card-img px-4">
                                                <img class="img-fluid w-100 h-100 u-object-fit-cover"
                                                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    alt="Foto 01">
                                            </div>

                                            <div class="card-body mt-n3 pt-0 px-0" style="background-color: #0B4DAD; border-radius: 50px 10px 50px 10px;">
                                                <div class="l-team__box-title py-3 px-4">
                                                    <h4 class="u-font-size-18 xl:u-font-size-22 xxl:u-font-size-26 u-font-weight-extrabold u-font-family-nunito text-center u-color-folk-white">
                                                        <?php the_title(); ?>
                                                    </h4>
                                                </div>

                                                <div class="mt-n3 pl-3 pl-lg-5">
                                                    <div class="l-team__box-office py-3">
                                                        <p class="u-font-size-15 xl:u-font-size-18 xxl:u-font-size-20 u-font-weight-extrabold u-font-family-nunito text-center text-uppercase u-color-folk-white mb-0">
                                                            <?php
                                                            $categoria = get_the_terms(get_the_ID(), 'equipecat');
                                                            foreach ($categoria as $category) :
                                                                echo $category->name . '<br>';
                                                            endforeach;
                                                            ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;

                            // Resetar a consulta
                            wp_reset_postdata();
                            ?>

                            <!-- Consulta para recuperar os demais posts -->
                            <?php
                            $args = array(
                                'posts_per_page' => -1,
                                'post_type'      => 'equipe',
                                'order'          => 'DESC',
                                'tax_query'      => array(
                                    array(
                                        'taxonomy' => 'equipecat',
                                        'field'    => 'slug',
                                        'terms'    => 'diretoria',
                                        'operator' => 'NOT IN',
                                    ),
                                ),
                            );

                            $equipe = new WP_Query($args);

                            if ($equipe->have_posts()) :
                                while ($equipe->have_posts()) : $equipe->the_post(); ?>
                                    <!-- Exibição dos posts -->
                                    <div class="col-md-6 my-3">
                                        <div class="card border-0">
                                            <div class="card-img px-4">
                                                <img class="img-fluid w-100 h-100 u-object-fit-cover"
                                                    src="<?php echo get_the_post_thumbnail_url(); ?>"
                                                    alt="Foto 01">
                                            </div>

                                            <div class="card-body mt-n3 pt-0 px-0" style="background-color: #0B4DAD; border-radius: 50px 10px 50px 10px;">
                                                <div class="l-team__box-title py-3 px-4">
                                                    <h4 class="u-font-size-18 xl:u-font-size-22 xxl:u-font-size-26 u-font-weight-extrabold u-font-family-nunito text-center u-color-folk-white">
                                                        <?php the_title(); ?>
                                                    </h4>
                                                </div>

                                                <div class="mt-n3 pl-3 pl-lg-5">
                                                    <div class="l-team__box-office py-3">
                                                        <p class="u-font-size-15 xl:u-font-size-18 xxl:u-font-size-20 u-font-weight-extrabold u-font-family-nunito text-center text-uppercase u-color-folk-white mb-0">
                                                            <?php
                                                            $categoria = get_the_terms(get_the_ID(), 'equipecat');
                                                            foreach ($categoria as $category) :
                                                                echo $category->name . '<br>';
                                                            endforeach;
                                                            ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile;
                            endif;

                            // Resetar a consulta
                            wp_reset_postdata();
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div><!-- #main -->
</section><!-- #primary -->

<?php
get_footer();
