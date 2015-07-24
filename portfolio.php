<?php
	$title = "AMSiteworks - Portfolio";
	include('./includes/header.php');
	include('./includes/topnav.php');
	
?>
    <main>
    	<h1 class="mainheading">Portfolio</h1>
        
    	<article class="project" id="mantzmusic">
            <a href="http://www.mantzmusic.com" target="_blank"><img src="./images/mantzmusicss.png" width="350" height="262" alt="mantzmusic.com"/></a>
        	<h2 class="projectheading">Mantz Music</h2>
            <p><em><a href="http://mantzmusic.com">Mantzmusic.com</a></em> is a site I created for my other passion... audio engineering! Developed with Wordpress, the site utilizes a custom child theme based on the "Omega-Church" theme by Themehall. It also incorporates plugins including Jetpack, Akismet, and Ninja Forms. Photoshop was used to create logos and edit photos.</p>
            <ul class="skilltag">
            	<li>Wordpress</li>
                <li>PHP</li>
                <li>CSS3</li>
            	<li>Javascript</li>
                <li>JQuery</li>
                <li>Photoshop</li>
            </ul>
    	</article>
        
      	<article class="project" id="amsiteworks">
            <a href="#"><img src="./images/amsiteworksss.png" width="350" height="242" alt="mantzmusic.com"/></a>
        	<h2 class="projectheading">AMSiteworks</h2>
            <p><em>AMSiteworks.com</em> is the site you're looking at right now! There's nothing wrong with including this on the portfolio page, right? This page is structured with PHP utilizing semantic HTML5 tags, modern CSS3 styles and the slides-js JQuery plugin for added interactivity. Illustrator was used to create the logo along with Photoshop to prepare the images.</p>
            <ul class="skilltag">
            	<li>PHP</li>
            	<li>HTML5</li>
            	<li>CSS3</li>
            	<li>Javascript</li>
            	<li>JQuery</li>
                <li>Photoshop</li>
                <li>Illustrator</li>
            </ul>
		</article>
        
        <article class="project" id="westernculvert">
            <a href="http://www.westernculvert.com" target="_blank"><img src="./images/westernculvertss.png" width="350" height="262" alt="mantzmusic.com"/></a>
        	<h2 class="projectheading">Western Culvert</h2>
            <p><em><a href="http://www.westernculvert.com" target="_blank">Westernculvert.com</a></em> is an informational small business site. For this project, I was tasked with taking an old site with a table-based layout and rewriting the underlying code to make the site functional on modern browsers, including mobile (previously the site would not even open on a mobile device). Existing content was reused so the bulk of the work was converting the table layout to a responsive CSS float based layout.</p>
            <ul class="skilltag">
            	<li>PHP</li>
            	<li>HTML5</li>
            	<li>CSS3</li>
            	<li>Javascript</li>
            	<li>JQuery</li>
            </ul>
        </article>
        
        <article class="project" id="brianmantzmusic">
            <a href="http://www.brianmantzmusic.com" target="_blank"><img src="./images/brianmantzmusicss.png" width="350" height="262" alt="mantzmusic.com"/></a>
        	<h2 class="projectheading">Brian Mantz Music</h2>
            <p><em><a href="http://www.brianmantzmusic.com" target="_blank">Brian Mantz Music</a></em> is a site I developed for my brother, a professional trumpet player. This is an informational personal site with a PHP structure, semantic HTML5 tags and CSS3 styles. The banner images were created with Photoshop. The SoundCloud Player was embedded and customized on several pages for streaming audio.</p>
            <ul class="skilltag">
            	<li>PHP</li>
            	<li>HTML5</li>
            	<li>CSS3</li>
            	<li>Javascript</li>
            	<li>JQuery</li>
                <li>Photoshop</li>
			</ul>
        </article>
    </main>
<?php
	include('./includes/footer.php');
?>