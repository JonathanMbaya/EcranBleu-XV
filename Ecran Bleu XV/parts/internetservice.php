<?php

/* on fait de $post une variable globale */
global $post;

/* on stocke la variable dans un nom de variable inutilisé */
$sky_post_ID = $post->ID;

/* on affiche cette variable */
// echo $sky_post_ID;

// identifiant de la page


if ($sky_post_ID == 28) {

    $post = get_post(310);

    $content = apply_filters('the_content', $post->post_content);
    $title = apply_filters('the_title', $post->post_title);
    $post_thumbnails = apply_filters('the_post_thumbnails', $post->post_thumbnails);

}


?>


<h2>
    <?php

        echo $title;

    ?>
</h2>




<!-- POST 1 -->

<div class="container">

    <!-- L'image de la publication -->

    <?php
        echo '<img style="position: relative; z-index: 500; border-radius : 10px;" class="img-fluid col-md-6 col-sm-6 col-12" src=" '.get_bloginfo('stylesheet_directory').'/img/website-templates.png"/>'
    ?>

    <!-- Le texte de la publication -->


    <div style="margin-top : -100px; position: relative; z-index:1000;" class="offset-md-3 col-md-6 col-12">
        <div style="background-color : white; border: 1px solid lightgray; border-radius: 10px; padding: 10px; ">

            <h3>Site de Présentation</h3>
            <p>

                Votre site est une vitrine de vos activités. Vous mettez à profit les spécificités du média internet – réactivité, interactivité – adaptabilité pour développer votre notoriété, valoriser votre métier et votre savoir-faire.

                Il s’agit là d’élargir votre potentiel client, d’initier une relation client solide via l’Internet.
            </p>
        </div>
    </div>

</div>




<!-- POST 2 -->




<div style="margin-top : 80px;" class="container">

    <!-- L'image de la publication -->

    <?php
        echo '<img style="position: relative; z-index: 500; border-radius : 10px;" class="img-fluid offset-md-6 col-md-6 col-sm-6 col-12" src=" '.get_bloginfo('stylesheet_directory').'/img/website-templates.png"/>'
    ?>

    <!-- Le texte de la publication -->


    <div style="margin-top : -100px; position: relative; z-index:1000;" class="offset-md-3 col-md-6 col-sm-6 col-12">
        <div style="background-color : white; border: 1px solid lightgray; border-radius: 10px; padding: 10px; ">

            <h3>Site E-Commerce</h3>
            <p>
                Nous concevons pour vous des solutions e-commerce avec paiement sécurisé complètement modulables en fonction de vos spécificités et de votre demande. 
                Entièrement paramétrable, votre e-commerce vous donne la possibilité d’ajouter, de modifier et de supprimer vos produits grâce à votre interface d’administration sécurisée. 
                Vous êtes donc complètement autonome dans la mise en œuvre de votre e-commerce.
            </p>
        </div>
    </div>

</div>



<!-- POST 3 -->



<div style="margin-top : 80px;" class="container">

    <!-- L'image de la publication -->

    <?php
        echo '<img style="position: relative; z-index: 500; border-radius : 10px;" class="img-fluid col-md-6 col-sm-6 col-12" src=" '.get_bloginfo('stylesheet_directory').'/img/website-templates.png"/>'
    ?>

    <!-- Le texte de la publication -->


    <div style="margin-top : -100px; position: relative; z-index:1000;" class="offset-md-3 col-md-6 col-12">
        <div style="background-color : white; border: 1px solid lightgray; border-radius: 10px; padding: 10px; ">

            <h3>Site Intranet</h3>
            <p>

                Intranet désigne précisément un réseau local et privé qui met en œuvre les technologies de l'Internet et les exploite à l'usage d'une communauté d'utilisateurs restreinte.

                Votre site intranet est une vitrine ouverte sur votre entreprise et une plate forme de communication entre collaborateurs.
            </p>
        </div>
    </div>

</div>




