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

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
	
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

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




<textarea name="text" class="translationbox" id="translation_input" placeholder="Translate video content from Portuguese to English here"></textarea>
<div class="translatebtn submit">
	<button id="translation_submit" class="btn" type="submit" value="Submit" disabled>Submit</button>
		</div>

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
			
			<div id="translationandcontext">
				<div class="incoming">

				<a target="_blank" class="moreinfo" tooltip="You can view your and others' translations coming in here" tooltip-position="right">?</a>
				<h2>Incoming translations</h2>
				<div class="addedcontent" id="addedtranslation">
				<a class="toggle-icon">+</a>
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


<!-- Functionality that only contextualizers can access
  <nav id="contextualize" class="container"> 
    

 <a id="showcontext" class="contextbuttons" tooltip="Give context"><span class="icon compass"></span></a>


  </nav>

  <div id="givecontext">
	<div class="popup conf-modal success" role="givecontext">
   <div class="popup-container">
   	
  <textarea name="text" class="translationbox contextbox" id="generalcontext" placeholder="Help complete the picture of what is happening. Choose one of the options below or add anything that will help us get a better sense of this issue."></textarea>

  <div class="modal-footer">
    <button id="sendcontext" class="exit context-but btn" onClick="">Submit</button>
    </div> 
<section class="card" id="contextcard">
  <div class="card--content" id="immediatecontext">
    <span class="icon exclamation-circle"></span>
  </div>
  <div class="card--content" id="locationcontext">
    <span class="icon globe-americas"></span>
  </div>
  <div class="card--content" id="backgroundcontext">
    <span class="icon puzzle-piece"></span>
  </div>
  <div class="card--content" id="similarcontext"> 
    <span class="icon fist-raised"></span>
  </div>
  <div class="card--content" id="localcontext">
    <span class="icon user-check"></span>
  </div>
  <div class="card--content" id="socialmediacontext">
    <span class="icon laptop"></span>
  </div>
  <div class="card--content" id="questioncontext">
    <span class="icon question-circle"></span>
  </div>
</section>
  </div>

</div>
</div>				
-->	

<!-- Functionality that only can be accessible to admins
  <nav id="admin" class="container"> 
    
    <a target="_blank" id="notify-share" class="alertbuttons" tooltip="Notify to share" tooltip-position="left"><span class="icon share-alt"></span></a>
    
    <a target="_blank" id="notify-contextualizers" class="alertbuttons" tooltip="Notify contextualizers" tooltip-position="left"><span class="icon compass"></span></a>
    
    <a target="_blank" id="notify-translators" class="alertbuttons" tooltip="Notify translators" tooltip-position="left"><span class="icon comment-dots"></span></a>

    <div class="alertbuttons">
<textarea name="text" class="notificationbox" placeholder="Write message to distant witnesses"></textarea>
	<select class="selectpicker" data-width="130px" multiple title="Select senders">
  <option value="all">Everyone</option>
  <option value="translators">Translators</option>
  <option value="contextualizers">Contextualizers</option>
  <option value="user">User1</option>
</select>
<div class="submit">
	<button  class="btn sendbtn" type="submit" value="Submit">Send</button>
		</div>
</div>

 <a id="notify" class="alertbuttons" tooltip="Notify"><span class="icon bullhorn"></span></a>

  </nav>
-->


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

    <label class="switch" id="admin-role">
        <input type="checkbox">
        <span class="slider-switch square">
            <span class="switch-notify">Notify</span>
            <span class="switch-context">Give context</span>
        </span>
    </label>

</body>
</html>
