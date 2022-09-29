<?php
/*
  Template Name: A Propos
*/

get_header();


?>


<div id="hdr-apropos" class="container-fluid">

    <h1 style="color: white; padding-top : 60px;">
        <?php the_title()?>
    </h1>

    <div  class="row">

        <?php
            echo '<img padding-top : 60px;" class="img-fluid col-md-6 col-sm-6 col-12 " src=" '.get_bloginfo('stylesheet_directory').'/img/teachers.png"/>'
        ?>


        <div class="col-md-6 col-sm-4 col-12">

            <h2 style="color: white;">
                <?php the_content()?>
            </h2>

        </div>

    </div>

</div>


<div style="margin-top: 100px;" class="container">
    <div class="row">

        <div class="col-md-6 col-sm-6 col-12">

            <?php

                $id=237; // identifiant de la page

                $post = get_post($id);

                $content = apply_filters('the_content', $post->post_content);
                $title = apply_filters('the_title', $post->post_title);



            ?>

            <h2>
                <?php echo $title; ?>
            </h2>

            <p>
                <?php
                    echo $content;
                ?>
            </p>

        </div>



        <?php
            echo '<img class="img-fluid col-md-6 col-sm-6 col-12 " src="http://localhost/wordpress/wp-content/uploads/2022/09/imgApropos-1.jpg"/>'
        ?>

        
    </div>
</div>




<?php get_template_part( 'parts/joinus' );?>








<?php

	get_footer();

?>