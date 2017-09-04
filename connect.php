<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">




	<title>Everyday Coping Cards</title>
	
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- styles -->
	<link rel="stylesheet" href="styles/styles.css">

	<link rel="stylesheet" href="styles/font-awesome.min.css">

</head>
<body>

<link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
<div id='stars'></div>
<div id='stars2'></div>
<div id='stars3'></div>



<div class="container" style="margin-top:50px;">
	<div class="row">
		<!-- images  -->
		<div class="col-md-3">
			
		</div>
		<div id="id-img" class="col-md-6 col-sm-6 col-xs-6 ">
			<div class="images">
				<img  src="images/Tumblr_CopingCards2copy.jpg" alt="image" id="the-img-id">
			</div>
		</div>
		<div class="col-md-3 col-sm-3 col-xs-3">
			
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 col-sm-12 col-xs-12 center">
			<!-- BEGIN DESCRIPTION BUTTON AND MODAL -->
			<div class="description-text">
				<div class="buttons">
					<!-- Button trigger modal -->
					<div class="btn btn-primary navbar-inverse btn-contain" data-toggle="modal" data-target="#about-the-cards">
						About The Cards
					</div>

					<div class="btn btn-info btn-contain" data-toggle="modal" data-target="#about-the-creator">
						About The Creator
					</div>

					
					<div class="btn btn-primary btn-contain" onClick="window.location.reload()" id="select-card">
						Select Another Card
					</div>
				</div>

				<!-- CARDS MODAL -->
				<div class="modal fade" id="about-the-cards" tabindex="-1" role="dialog" aria-labelledby="about-the-cards" aria-hidden="true" style="height: 95vh;">
					<div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="about-the-cards">About The Cards</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					        <div class="modal-body" style="overflow: scroll;">
						        <p>More than words. More Than Images. Coping cards are a communication tool designed to develop and strengthen coping skills.</p>
								<p>Life presents many obstacles and challenges, often leaving us little time to reflect or acknowledge the emotions that we feel.</p>
								<p>Without strong coping skills, we can become overwhelmed, exhausted and burnt out, which impacts all aspects of our life including health, relationships, and career.</p>
								<p>Here, we invite you to consult a card at random, and utilie the creative promts to help yourself process feelings and reactions to the various situations and events of life.</p>
								<p>Whether it be facing a medical challenge, overwhelming frustrations, being a source of support for a friend or loved one, or even processing the cards with a partner, see how these coping cards can help increase positive coping mechanisms, improve communication, and strengthen resilience.</p>
								<p>Begin by choosing a new card at random. Then, you have the option to tap your card to read the creative response prompts and respond outside of the application with your own tools.  Write in a notebook, site quietly and let the image guide your thoughts for a few minutes of mindfulness, or create a musical or artistic piece - song lyrics, poetry, collage, painting an interpretive dance, etc.  The purpose is to notice and express whatever you are feeling.</p>
								<p>There are no limiations, no judgements, and no wrong responses.  Whatever feelings and emotions that come up through the card images or the creative prompts are there to help you acknowledge and express the truth of your own feelings, needs, and desires.</p>
								<p>Life will always be full of pressure, deadlines, and questions.  Welcome to the act tapping into your creativity and self reflection through these guided prompts.  Thank you for making time for the journey of self discovery.</p>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								</div>
					    	</div>
					  	</div>
					</div>
				</div>
				<!-- END CARDS MODAL -->

				<!-- CREATOR MODAL -->
				<div class="modal fade" id="about-the-creator" tabindex="-1" role="dialog" aria-labelledby="about-the-creator" aria-hidden="true" style="height: 95vh;">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="about-the-creator">About the Creator</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <p>These cards were developed by board certified music therapist and certified child life specialist Eileen B. Esposito.  After experiencing many peaks and valleys of both creative and professional endeavors, she began to grow exhausted from the perceived cycles of success and failure, and from the perceived pressure of social comparison.</p>
				        <p>In an effort to combine her passion for creativity, her honed therapeutic skills, and her own personal need for confidence and balance in a constantly challenging world, she slowly developed these coping cards.</p>
				        <p>  They are made up of images that are both universal and unique, and have brought calm and resilience to her at different stages in her life.  The process of examining and expressing your feelings and emotions through both mindful reflection and acts of creativity is essential to health and happiness.  These cards are intended to give you the opportunity to do all that and more.</p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
				<!-- END CREATOR MODAL -->
			</div> 	
		</div>
	</div>
</div>	

<script>
	var myImages = [
  '11succulents.jpg',
  '13openwindow.jpg',
  '14moonlight.jpg',
  '15technicolor.jpg',
  '16fallenleaves.jpg',
  '17thewoods.jpg',
  '18mistypath.jpg',
  '19indoorrainbow.jpg',
  '20_grow.jpg',
  '22sanctuary.jpg',
  '22wildflowers.jpg',
  '23cliff.jpg',
  '23drivingatnight.jpg',
  '24Abovetheclouds.jpg',
  '29waterfall.jpg',
  'card-description.png',
  '30stars.jpg',
  'abovethecity24.jpg',
  'blanktemplate.jpg',
  'bridge.jpg',
  'cityskyline7.jpg',
  'clearhorizon10.jpg',
  'clearsky5.jpg',
  'lighthouse.jpg',
  'LightNShadow21.jpg',
  'music.jpg',
  'rainbow4.jpg',
  'softrain9.jpg',
  'STORMCLOUD3.jpg',
  'sunlight.jpg',
  'Sunrise1.jpg',
  'Sunset2.jpg',
  'sunshine6.jpg'
];

// select a element with id="the-img-id"
// document.getElementById('the-img-id').onclick = function() {
//   var randomInt = Math.round(Math.random() * myImages.length-1 ); // Create random number
//   this.src = 'images/'+myImages[randomInt]; // replace the src with the new img


var clicks = 0;
	



	$('#the-img-id').on("click", function(){
		var img = $('#the-img-id');
		if(clicks == 0){
			var randomInt = Math.round(Math.random() * myImages.length-1 ); 
		// Create random number
			this.src = 'images/'+myImages[randomInt]; // replace the src with the new img
			console.log("1 click");

		} else {
			this.src = 'images/card-description.png';

			document.getElementById("select-card").classList.remove('btn-primary');
			document.getElementById("select-card").classList.add('btn-danger');

					
		};
		++clicks;

	});
	
</script>
<!-- end images -->
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

</body>
</html>
