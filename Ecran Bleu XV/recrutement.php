<?php
/*
  Template Name: Recrutement
*/

get_header();


?>


<div id="hdr-recrutement" class="container-fluid">

    <h1 style="color: white; padding-top : 60px;">
        <?php the_title()?>
    </h1>

    <div  class="row">

        <?php
            echo '<img padding-top : 60px;" class="img-fluid col-md-4 col-sm-6 col-12 " src="http://localhost/wordpress/wp-content/uploads/2022/09/recherche.png"/>'
        ?>


        <div class="col-md-6 col-sm-4 col-12">

            <h2 style="color: white;">
                <?php the_content()?>
            </h2>

        </div>

    </div>

</div>





<?php

	get_footer();

?>