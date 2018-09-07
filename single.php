<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package MEU
 */

get_header();
?>
<button class="btn" id="logout-button" id="wp-admin-bar-logout"><a id="login-logout" class="ab-item" href="http://mobile-eyes-us.itp.io/login">Login</a>                </button>

<!DOCTYPE html>
<html lang="en-US">
<head>

<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">	

</head>

<body>

<div class="wrap">

<div class="videocontainer">
	
<div class="fb-video">
<?php the_title( '<h2>', '</h2>' ); ?>

<?php
		while ( have_posts() ) :
			the_post();
			the_content ('<p>','</p>');

		endwhile; // End of the loop.
		?>

	</div>

<div id="childbox">

<!-- 
<div id="buttonpanel">
<button class="btn active" id="helptranslate" data-target="translation">Translate this event</button>
  <button class="btn" id="givecontext" data-target="givingcontext">Give context</button>
 </div>
  -->

<div class="box" id="translation">

<a id="showtips" class="moretips">i</a>
	<div class="hiddentips">
	<div class="translationtips">
		<ul>
		<h1>Translation tips</h1>
		<li>Play video <i class="fas fa-play-circle"></i> <br> and unmute it <i class="fas fa-volume-up"></i></li>
		<li>Summarize! <i class="fas fa-edit"></i> <br> It's the thought that counts!</li>
		<li>Focus on a phrase! <i class="fas fa-tasks"></i> <br>
		This is a collaborative effort! <i class="fas fa-people-carry"></i></li>
		<li>The quicker you submit, the better! <i class="fas fa-hourglass-half"></i></li>
		<li>Don't sweat the small stuff <i class="fas fa-microscope"></i> <br>Errors are OK! <i class="fas fa-check"></i></li>
		<button id="ready" class="btn">Ready!</button>
		</ul>
		
</div>



</div>


<textarea name="text" class="translationbox" id="translation_input" placeholder="Translate video content from Portuguese to English here"></textarea>
<div class="translatebtn submit">
	<button id="translation_submit" class="btn" type="submit" value="Submit" disabled>Submit</button>
		</div>
</div>

<!-- 
<div class="box" id="givingcontext">
<textarea name="text" class="translationbox" id="context_input"></textarea>
<div class="submit">
	<button id="context_submit" class="btn" type="submit" value="Submit" disabled>Submit</button>
		</div>
</div>
-->

</div>


	</div>


<div class="context">

	<div id="primary">
		<div id="content">

<!--
	<div class="newcontentbuttons">
		<div id="togglecontent">
<button class="btn active" id="seetranslation" data-target="addedtranslation">Check others translations</button>
  <button class="btn" id="seecontext" data-target="addedcontext">Context</button>
		
 </div>
		<div id="refresh">
			<button class="btn" onClick="history.go(0)" VALUE="Refresh">
				<i style="font-size:18px" class="fa">&#xf021;</i>
			</button>
			</div>

			</div>
-->

		<div class="clearfix">
			</div>

			<a class="toggle-icon">+</a>
			
			<div id="translationandcontext">
				<div class="incoming">

				<a target="_blank" class="moreinfo" tooltip="You can view your and others' translations coming in here" tooltip-position="right">?</a>
				<h2>Incoming translations</h2>
				<div class="addedcontent" id="addedtranslation">
					<!-- Translation Should Go Here -->
				</div>
				</div>


			<div class="tab">
      							<input id="tab-one" type="checkbox" name="tabs">
     							<label class="accordion-label" for="tab-one">
     								<p>About this campaign</p>
     								<i></i>
     							</label>
     							<div class="tab-content">
									<p>
						<?php
						$categories = get_the_category();
						echo category_description( $categories[0] ); ?> 
												</p>
									
									</div>
    </div>

				<div class="incoming">

				<a target="_blank" class="moreinfo" tooltip="This is where you can see valuable information that distant witnesses are contributing about what is happening" tooltip-position="right">?</a>
				<h2>Context</h2>
				<div class="addedcontent" id="addedcontext">
					<!-- Context Should go here -->
				</div>
				</div>

			</div>
		</div>
	</div>	


					
	


	</div>
</div>

<!-- original -->
<!--
<div class="popup conf-modal center success" role="alert">
	<div class="popup-container">
		<div class="title-text"></div>
	  	<h1>Help us translate!</h1></div>
  		<p id="popupcontent"></p>
  		<div class="modal-footer">
    		<div class="exit conf-but aqua" onClick="dismissPopup()">Ok</div>
		</div>    
	</div>
</div>
-->
<!-- end original -->

<!-- new -->
<div id="wherepopupsgo" class="center">
	<!-- Repeat -->
	<!--
	<div class="popup conf-modal offcenter firstoff success" role="alert">
		<div class="popup-container">
			<p id="popupcontent"></p>
  			<div class="modal-footer">
    			<div class="exit conf-but" onClick="dismissPopup()">OK</div>
			</div>    
		</div>
	</div>
	-->
	<!-- End Repeat -->

	<!-- Repeat Example 
	<div class="popup conf-modal offcenter success" role="alert">
		<div class="popup-container">
			<p>We need help translating a live stream. Can you help? </p>
			<div class="modal-footer">
				<div class="exit conf-but" onClick="">OK</div>
			</div>    
		</div>
	</div>
	-->
</div>
<!-- end new -->
