<?php
	$title = "AMSiteworks - Web Development Portfolio";
	include('./includes/header.php');
	include('./includes/fbscript.php');
	include('./includes/topnav.php');
	
?>
    <main>
    	<article class="primary">
            <h1 class="mainheading">Welcome to AMSiteWorks!</h1>
            <h3 style="margin-left: 80px;"><em>Web Development Portfolio</em></h3>
            <p><span style="font-size: 1.1em;">I am Anthony Mantz, a web developer from Riverside, CA.</span> Please take a look around at the various projects I have posted, and if you like what you see I would like to hear from you. Better yet, I would LOVE to work with you on your next web project. Please get in touch with me by filling out my<br><a class="linkbutton" href="./contact.php">Contact Form</a>.</p>
            <!-- SlidesJS Required: Start Slides -->
            <!-- The container is used to define the width of the slideshow -->
            <div class="container">
                <div id="slides">
                    <a href="./portfolio.php#mantzmusic"><img src="./images/mantzmusicssslide.jpg" alt="Mantz Music Website"></a>
                    <a href="./portfolio.php#westernculvert"><img src="./images/westernculvertssslide.jpg" alt="Western Culvert and Supply Website"></a>
                    <a href="./portfolio.php#brianmantzmusic"><img src="./images/brianmantzmusicssslide.jpg" alt="Brian Mantz Music"></a>
                    <a href="./portfolio.php#amsiteworks"><img src="./images/amsiteworksssslide.jpg" alt="AMSiteworks Website"></a>
                </div><!-- End slides -->
            </div><!-- End container -->
          <!-- SlidesJS Required: Link to jQuery -->
          <!--<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>-->
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
          <!-- End SlidesJS Required -->
        
          <!-- SlidesJS Required: Link to jquery.slides.js -->
          <script src="./js/jquery.slides.min.js"></script>
          <!-- End SlidesJS Required -->
        
          <!-- SlidesJS Required: Initialize SlidesJS with a jQuery doc ready -->
		  <script>
            $(function() {
              $("#slides").slidesjs({
                preload: true,
                preloadImage: './images/mantzmusicss.png',
                width: 500,
                height: 350,
                navigation: {
                  effect: "fade"
                },
                pagination: {
                  effect: "fade"
                },
				play: {
					effect: "fade",
					interval: 8000,
					auto: true,
				},
                effect: {
                  fade: {
                    speed: 1300,
				  crossfade: true	
                  }
                }
              });
            });
          </script>
          <!-- End SlidesJS Required -->
        </article>
  		<aside id="recent-projects">
            <div class="sbchunk">
                <h2>Recent Projects</h2>
                <ul>
                    <li><a href="./portfolio.php#brianmantzmusic">Brian Mantz Music</a></li>
                    <li><a href="./portfolio.php#amsiteworks">AMSiteworks</a></li>
                    <li><a href="./portfolio.php#westernculvert">Western Culvert</a></li>
                    <li><a href="./portfolio.php#mantzmusic">Mantz Music</a></li>
                </ul>
            </div>
            <div class="sbchunk">
                <h2>Social Media</h2>
                <div class="social">
                    <!--<p style="text-align:center; margin-top: 40px;">--><a style="line-height:33px;" href="https://www.linkedin.com/pub/anthony-mantz/14/218/a55" target="_blank"><img src="https://static.licdn.com/scds/common/u/img/webpromo/btn_myprofile_160x33.png" width="160" height="33" border="0" alt="View Anthony Mantz's profile on LinkedIn"></a><!--</p>-->
            	</div>
                <div class="social" >
                <div class="fb-page" data-href="https://www.facebook.com/amsiteworks" data-width="250" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/amsiteworks"><a href="https://www.facebook.com/amsiteworks">AMSiteworks</a></blockquote></div></div>
                </div>
        	</div>
        </aside>
    </main>
<?php
	include('./includes/footer.php');
?>   
