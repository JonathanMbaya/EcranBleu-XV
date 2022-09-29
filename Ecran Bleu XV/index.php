<?php get_header(); ?>

<!-- DEBUT DE HEADER -->


<header>

    <div class="container">

        <div class="header">

            <div style="padding-top: 80px;" id="front-title">
                <h1 id="title-home">Ecran Bleu ,</h1>

                <h2 id="subtitle-home">L’agence pour l’innovation de toute votre système d’information</h2>
            </div>

        </div>


    </div>


    <div class="container">

        <div class="row">

            <div class="screenslider">

                <div style="position: relative;" class="slider">
                    <?php
                        echo '<img class="img-fluid" src=" '.get_bloginfo('stylesheet_directory').'/img/website-templates.png"/>'
                    ?>
                </div>

                <div class="screen">
                    <?php
                        echo '<img class="" src=" '.get_bloginfo('stylesheet_directory').'/assets/large-cinema-display.png"/>'
                    ?>
                </div>

            </div>

        </div>

    </div>


    <p id="ctaa">
        Découvrez Ecran Bleu 
    </p>

</header>


<!-- FIN DE HEADER -->




<!-- Présentation de l'entreprise -->
<div class="container">

    <h2>Pourquoi créer un site internet avec EcranBleu XV ?</h2>
    
</div>

<div style ="margin-top : 25px; margin-bottom : 80px;" class="container block-presentation">

    


    <div style="display: flex;" class="row">

        <?php
            echo '<img style=" border-radius : 10px;" class="img-fluid col-md-6 col-sm-6 col-12" src=" '.get_bloginfo('stylesheet_directory').'/img/website-templates.png"/>'
        ?>


        <div style="border-radius: 10px;" class="text-presentation col-md-6 col-sm-6 col-12">

            <h2 style ="margin-top : 50px; color : #88A4E3 !important;">Ecran Bleu</h2>

            L'arrivée du Très Haut Débit, l’avènement et la généralisation rapide 
            de la vidéo à la demande via l’Internet, ont fait du début des années 
            2000 une période riche en innovation et en accélération technologiques.

        </div>

    </div>

</div>



<div class="col-md-12 col-sm-6 col-12" id="img-block" style="display: flex; justify-content: center; align-items: center; margin-bottom : 50px;">

    <a href="<?php bloginfo('url') ; ?>/?page_id=8">
        <button style ="width: 150px; height: 100px; border-radius: 10px;">Vers A propos <i class="fa-solid fa-chevron-right"></i></button>
    </a>

</div>

<!-- <span class="vertical"></span> -->

<!-- NOS SERVICES -->

<section  class="container" style="background-color : #FBF9F9; margin-bottom: 50px;" id="forResult">



<h3>Nos Services</h3>

<div style="margin : 50px;">

    <?php
        $args = array(
            'post_type' => 'post', // enter custom post type
            'orderby' => 'date',
            'order' => 'ASC',
        );

        $loop = new WP_Query( $args );

        if( $loop->have_posts() ):

        while( $loop->have_posts() ): $loop->the_post(); global $post;

            echo '<div style="display: flex !important; flew-wrap: wrap !important; flex-direction: row !important;" class="container col-md-12 col-sm-12 col-12">';
                echo '<div style="flew-wrap: wrap !important;" class="row portfolio">';

                    echo '<h3>' . get_the_title(). '</h3>';

                        echo '<div style="" class="portfolio-work">

                                <div style="padding: 10px" class="text">'

                                    . get_the_excerpt().' 
                                    <br>
                                    <br>
                                    <button><a href='.get_the_permalink().'>Voir plus +</a></button>
                                </div>
                
                        
                
                        </div>';



            echo '<hr></hr>';

            echo '</div>';
            echo '</div>';

            echo '</div>';

            echo '</div>';
            
        endwhile;
        endif;
        
    ?>
</div>



</section>

<!-- Domaines d'activités -->

<?php get_template_part( 'parts/domaine' );?>

<?php get_template_part( 'parts/joinus' );?>

<h3 style="text-align: center; margin: 40px 40px 40px 10px;">Ils nous font confiance</h3>

<?php echo do_shortcode('[sp_wpcarousel id="125"]'); ?>

<!-- FOOTER -->

<?php get_footer(); ?>