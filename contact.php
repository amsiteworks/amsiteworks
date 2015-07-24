<?php
	$title = "AMSiteworks - Contact";
	include('./includes/header.php');
	include('./includes/fbscript.php');
	include('./includes/topnav.php');
	
?>
        <main id="contactpage">
    	<h1 class="mainheading">Contact</h1>
        <article class="primary" id="contact">
        	<p>I would love to hear from you! You can reach me directly with the information below, or by contacting me through the form.</p>
            <p style="margin-top: 0;">Phone: 909-261-0416</p>
            <p>Email: <a href="mailto:amantz@amsiteworks.com">amantz@amsiteworks.com</a></p>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="./js/jquery.validate.min.js"></script>

		<form id="contactForm" method="post" action="./contactsend.php">
			<div class="formRow"><input id="name" name="name" type="text" size="50" maxlength="50" placeholder="Name*"></div>
        	<div class="formRow"><input id="email" name="email" type="email" size="50" maxlength="50" placeholder="Email*"></div>
            <div class="formArea"><label for="message"></label><br><textarea id="message" name="message" cols="50" rows="12" placeholder="Message*"></textarea></div>
            <div class="buttons">
            <button type="reset">Clear</button>
            <button type="submit">Send</button>
            <span class="notice">*Required</span>
            </div>

        </form>
    </article>
        <script>
		$().ready(function(){
			$.validator.addMethod("regex", function(value, element, regexp) {
				return regexp.test(value);
			});
			$("#contactForm").validate({
				rules: {
					name: {
						required: true,
						minlength: 2,
					},
					email: {
						required: true,
						email: true
					},
					message: {
						required: true,
					}
				},
				messages: {
					name: {
						required: "Please enter your name",
						minlength: "Must contain at least 2 characters"
					},
					email: {
						required: "Please enter your email address"
					},
					message: {
						required: "Please enter your message"
					}
				},
				errorElement: "div",
				errorPlacement: function(error, element){
					element.parent().after(error);
				}
			});
		});
		</script>
        <aside>
        	<div class="social">
            <h3 style="margin-bottom: 25px;">You may also connect with me via social media:</h3>
            <a style="line-height:33px;" href="https://www.linkedin.com/pub/anthony-mantz/14/218/a55" target="_blank"><img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_myprofile_160x33.png" width="160" height="33" border="0" alt="View Anthony Mantz's profile on LinkedIn"></a>
            </div>
            <div class="social">
            <div class="fb-page" data-href="https://www.facebook.com/amsiteworks" data-width="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/amsiteworks"><a href="https://www.facebook.com/amsiteworks">AMSiteworks</a></blockquote></div></div>
            </div>
        </aside>
    </main>
<?php
	include('./includes/footer.php');
?>