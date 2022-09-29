<div style="margin-top: 100px; border: 1px solid lightgray; box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25) !important; border-radius: 10px;" class="container">
    <div class="row">


        <?php
            echo '<img class="img-fluid col-md-6 col-sm-6 col-12 " src="http://localhost/wordpress/wp-content/uploads/2022/09/joinUs.png"/>'
        ?>

        <div style="border-radius: 0px 10px 10px 0px; padding: 40px;" class="col-md-6 col-sm-6 col-12">

            <?php

                $id=242; // identifiant de la page

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

            <a href="<?php bloginfo('url'); ?>/?page_id=5">
                <button>
                    Postuler à notre offre
                </button>
            </a>


        </div>


        
    </div>
</div>