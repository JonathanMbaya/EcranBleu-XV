<?php
/*
  Template Name: Contact
*/

get_header();


?>

<div id="hdr-apropos" class="container-fluid">

    <h1 style="text-align : center; padding-top: 80px; color: white;">
        <?php the_title(); ?>
    </h1>



    <div class="col-md-12 col-sm-12 col-12">

        <h2 style="color: white; text-align : center; padding-top: 40px; ">
            <?php the_content(); ?>


            <div style="">
	            <div style="" class="container">
                    <?php echo do_shortcode( '[contact-form-7 id="196" title="Formulaire de contact 1"]' ); ?>
                </div>
            </div>

        </h2>



    

        <form name="contactForm" id="contactForm" method="post" onsubmit="return formValidation()"  action="">


        

        <!-- <div style="display: flex; justify-content: center; flex-direction: column; align-items: center;" class="container">

            <div class="row offset-2 col-8">
                <div class="label">Nom(s)</div>
                <input class="col-8" type="text" id="name" name="name" placeholder="Votre Nom">
            </div>

            <div class="row offset-2 col-8">
                <div class="label">Email</div>
                <input class="col-8" type="text" id="email" name="email" placeholder="Votre Email">
            </div>

            <div class="row offset-2 col-8">
                <div class="label">Sujet / Objet</div>
                <input class="col-8" type="text" id="subject" name="subject" placeholder="Sujet / Objet">
            </div>

            <div class="row offset-2 col-8">
                <div class="label">Message</div>
                <textarea class="col-8" id="message" name="message" rows="5"></textarea>
            </div>

            <div class="row offset-2 col-8">
                <input class="col-8" type="submit" value="Submit"> 
                <span id="status"></span>
            </div>

        </div> -->

        </form>

    </div>

    
</div>


<section style="height: 100vh"></section>






<script>

function formValidation() {
	  event.preventDefault();

	  var name = document.forms["contactForm"]["name"].value;
	  var email = document.forms["contactForm"]["email"].value;
	  var subject = document.forms["contactForm"]["subject"].value;
	  var message = document.forms["contactForm"]["message"].value;
	  document.getElementById('status').innerHTML = '';
      var errorMessage="<span class='error'>Tous les champs sont requis</span>";
	  var regEx = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;


        if (name.trim() == "" ||email.trim() == "" || subject.trim() == "" || message.trim() == "") {
             document.getElementById('status').innerHTML = errorMessage;
             return false;
        }

        if (!regEx.test(email)) {
    	   var errorMessage="<span class='error'>Votre Email est invalide</span>";
 		    document.getElementById('status').innerHTML = errorMessage;
 		    return false;
 		}

	    processContactSubmit();
        return true;
	}

function processContactSubmit() {
                var request = new XMLHttpRequest();
                request.open("POST", "/wordpress/wp-admin/admin-ajax.php?action=process_contact_form");
                request.onreadystatechange = function() {
                    if(this.readyState === 4 && this.status === 200) {
                        document.getElementById("status").innerHTML = this.responseText;
                    }
                };
                var myForm = document.getElementById("contactForm");
                var formData = new FormData(contactForm);
                request.send(formData);
}
</script>

<?php

	get_footer();

?>