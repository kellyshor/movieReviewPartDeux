
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php
		$film = $_GET["film"];
		//var_dump($film);
		$movieInfo=file($film . "/info.txt");
		//var_dump($movieInfo);
		$movieName=$movieInfo[0];
		//var_dump($movieName);
		$movieDate=$movieInfo[1];
		$percent=$movieInfo[2];
		$moviePhoto=$film . "/overview.png";
		$overview=file($film . "/overview.txt");
	//var_dump($overview);
	//for each line explode on colon
	//second array to identify which one is which http_post_fields
	$headings=array();
	foreach($overview as $row){

		$pieces=explode(":", $row);
		$headings[$pieces[0]]=$pieces[1];

//var_dump($pieces);
}
//	var_dump($headings);





		 ?>
		<title>Rancid Tomatoes</title>
		<meta charset="utf-8" />
		<link href="movie copy.css" type="text/css" rel="stylesheet" />
	</head>

	<body>
		<div class="center">
			<div class="header">
				<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/rancidbanner.png" alt="Rancid Tomatoes"/>
			</div>
			<h1><?php echo $movieName. " (".$movieDate.")"; ?></h1>
			<div class="all">
				<div class="genoverview">
					<div>
						<img src="<?php echo $moviePhoto; ?>" alt="general overview" />
					</div>

					<dl>

					<!-- start of the added php code -->
					<?php 
					foreach (file("$movie_name/overview.txt", FILE_IGNORE_NEW_LINES) as $info_line) {
						if (strlen(trim($info_line)) == 0) { continue; }
						list($term, $defn) = explode(":", $info_line);
						?> 
						<dt> <?= $term ?> </dt>
						<dd> <?= $defn ?> </dd>
						<?php
					}
					?>
					<!-- End of the added php code -->

						<dt>STARRING</dt>
					<dd><?php
						$stars=$headings["STARRING"];
						$starringActors=explode(",",$stars);

					foreach($starringActors as $star){
							echo "$star <br>"; }?></dd>

						<dt>DIRECTOR</dt>
						<dd><?php
							$directors=$headings["DIRECTOR"];
							$director=explode(",",$directors);

						foreach($director as $d){
								echo "$d <br>"; }?></dd>

						<dt>RATING</dt>
						<dd><?php
							$rating=$headings["RATING"];
								echo $rating; ?></dd>

						<dt>THEATRICAL RELEASE</dt>
						<dd><?php
					//	$files = glob("RELEASE");
						$release=$headings["THEATRICAL RELEASE"];
				print_r(glob("RELEASE"));
					//	echo $files[0];


								echo $release; ?></dd>

						<dt>MOVIE SYNOPSIS</dt>
							<dd><?php $synopsis=$headings["SYNOPSIS"];
							echo $synopsis; ?></dd>

						<dt>MPAA RATING</dt>
						<dd>PG, for animated action violence, some scary cartoon images and mild language</dd>

						<dt>RELEASE COMPANY</dt>
						<dd>Warner Bros.</dd>

						<dt>RUNTIME</dt>
						<dd>90 mins</dd>

						<dt>GENRE</dt>
						<dd>Action/Adventure, Comedies, Childrens, Martial Arts, Superheroes, Ninjas, Animated Characters</dd>

						<dt>BOX OFFICE</dt>
						<dd>$54,132,596</dd>

						<dt>LINKS</dt>
						<dd>
							<ul>
								<li><a href="http://www.ninjaturtles.com/">The Official TMNT Site</a></li>
								<li><a href="http://www.rottentomatoes.com/m/teenage_mutant_ninja_turtles/">RT Review</a></li>
								<li><a href="http://www.rottentomatoes.com/">RT Home</a></li>
							</ul>
						</dd>
					</dl>
				</div>
				<div class="reviewsection">
					<div class="innerheader">
						<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/rottenlarge.png" alt="Rotten" />
						<span class="percent"><?php echo $percent."%"; ?></span>
					</div>
					<div class="column">

						<p class="reviews">
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/rotten.gif" alt="Rotten" />
							<q>Ditching the cheeky, self-aware wink that helped to excuse the concept's inherent corniness, the movie attempts to look polished and 'cool,' but the been-there animation can't compete with the then-cutting-edge puppetry of the 1990 live-action movie.</q>
						</p>
						<p>
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/critic.gif" alt="Critic" />
							Peter Debruge <br />
							<span class="source">Variety</span>
						</p>

						<p class="reviews">
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/fresh.gif" alt="Fresh" />
							<q>TMNT is a fun, action-filled adventure that will satisfy longtime fans and generate a legion of new ones.</q>
						</p>
						<p>
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/critic.gif" alt="Critic" />
							Todd Gilchrist <br />
							<span class="source">IGN Movies</span>
						</p>

						<p class="reviews">
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/rotten.gif" alt="Rotten" />
							<q>It stinks!</q>
						</p>
						<p>
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/critic.gif" alt="Critic" />
							Jay Sherman (unemployed)
						</p>

						<p class="reviews">
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/rotten.gif" alt="Rotten" />
							<q>The rubber suits are gone and they've been redone with fancy computer technology, but that hasn't stopped them from becoming dull.</q>
						</p>
						<p>
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/critic.gif" alt="Critic" />
							Joshua Tyler <br />
							<span class="source">CinemaBlend.com</span>
						</p>

						<p class="reviews">
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/rotten.gif" alt="Rotten" />
							<q>I've never seen this movie</q>
						</p>
						<p>
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/critic.gif" alt="Critic" />
							Kelly Shor <br />
							<span class="source">Lewis and Clark College</span>
						</p>

					</div>

					<div class="column">
						<p class="reviews">
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/rotten.gif" alt="Rotten" />
							<q>The turtles themselves may look prettier, but are no smarter; torn irreparably from their countercultural roots, our superheroes on the half shell have been firmly co-opted by the industry their creators once sought to spoof.</q>
						</p>
						<p>
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/critic.gif" alt="Critic" />
							Jeannette Catsoulis <br />
							<span class="source">New York Times</span>
						</p>

						<p class="reviews">
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/rotten.gif" alt="Rotten" />
							<q>Impersonally animated and arbitrarily plotted, the story appears to have been made up as the filmmakers went along.</q>
						</p>
						<p>
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/critic.gif" alt="Critic" />
							Ed Gonzalez <br />
							<span class="source">Slant Magazine</span>
						</p>

						<p class="reviews">
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/fresh.gif" alt="Fresh" />
							<q>The striking use of image and motion allows each sequence to leave an impression. It's an accomplished restart to this franchise.</q>
						</p>
						<p>
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/critic.gif" alt="Critic" />
							Mark Palermo <br />
							<span class="source">Coast (Halifax, Nova Scotia)</span>
						</p>

						<p class="reviews">
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/rotten.gif" alt="Rotten" />
							<q>The script feels like it was computer generated. This mechanical presentation lacks the cheesy charm of the three live action films.</q>
						</p>
						<p>
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/critic.gif" alt="Critic" />
							Steve Rhodes <br />
							<span class="source">Internet Reviews</span>
						</p>

						<p class="reviews">
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/rotten.gif" alt="Rotten" />
							<q>YOUR REVIEW HERE</q>
						</p>
						<p>
							<img src="http://watzek.lclark.edu/cs/293spr2021/ex2/critic.gif" alt="Critic" />
							NAME <br />
							<span class="source" type="video/">PUBLICATION</span>
						</p>
					</div>
				</div>
				<p>(1-10) of 88</p>
			</div>
		</div>
		<div id="validator">
			<a href="https://validator.w3.org/"><img src="http://watzek.lclark.edu/cs/293spr2021/ex2/w3c-html.png" alt="Valid HTML5" /></a><br />
			<a href="https://jigsaw.w3.org/css-validator/"><img src="http://watzek.lclark.edu/cs/293spr2021/ex2/w3c-css.png" alt="Valid CSS" /></a>
		</div>
	</body>
</html>
