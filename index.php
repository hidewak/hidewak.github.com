<?php 
$experiences = [
["title" => "Freelance Développeur Web", "contrat" => "Auto-entrepreneur", "entreprise" => "", "date" => "Depuis Juin 2015", "content" => [], "tag" => []],
["title" => "Développeur Web", "contrat" => "CDD", "entreprise" => "Agralis", "date" => "Mars 2014 - Août 2014", "content" => ["Développement \"from scratch\" d'une application web de gestion de sonde à distance, ainsi que visualisation des données reçues."], "tag" => ["Cakephp 2.x", "PHP5", "MySQL", "HTML5", "CSS", "Bootstrap3", "Flotchart"]],

["title" => "Développeur Web", "contrat" => "Stage", "entreprise" => "Goût de Web", "date" => "Février 2012 - Mars 2012", "content" => ["Maintenance de projets web existants.", "Développement d'une plateforme d'échange entre particulier et professionnel dans l'entretien de résidence."], "tag" => ["Cakephp 2.x", "PHP", "MySQL", "HTML", "CSS"]],

["title" => "Développeur Web", "contrat" => "CDD", "entreprise" => "CPAM", "date" => "Juillet 2011 - Août 2011", "content" => ["Poursuite du développement d'une application web de gestion de bénéficiaire."], "tag" => ["PHP", "MySQL", "HTML", "CSS"]],

["title" => "Développeur Web", "contrat" => "Stage", "entreprise" => "CPAM", "date" => "Mai 2011 - Juin 2011", "content" => ["Reprise d'une application web de gestion de bénéficiaire."], "tag" => ["PHP", "MySQL", "HTML", "CSS"]]];

$educations = [
["title" => "Master Expert informatique", "name" => "EPITECH - European Institute of Technology", "date" => "2012 - 2016"],
["title" => "BTS Informatique de Gestion", "name" => "Lycée Gustave Eiffel", "date" => "2009 - 2011"]
];

$skills = [
["name" => "Web", "content" =>[
	["name" => "HTML", "percent" => "80"],
	["name" => "CSS", "percent" => "80"],
	["name" => "Javascript", "percent" => "70"],
	["name" => "PHP", "percent" => "80"],
	["name" => "CakePHP 2.x", "percent" => "80"],
	["name" => "Symfony 2", "percent" => "60"],
	["name" => "Ruby", "percent" => "70"],
	["name" => "Rails", "percent" => "50"]]
],
["name" => "Software", "content" => 
	[
		["name" => "C", "percent" => "80"],
		["name" => "C++", "percent" => "70"],
		["name" => "C#", "percent" => "50"]
	]
]];

$languages = [
	["name" => "Français", "level" => 5],
	["name" => "Espagnol", "level" => 4],
	["name" => "Anglais", "level" => 4]
];

$hobbies = [
	["name" => "Jeux Vidéo", "img" => "gamepad"],
	["name" => "Programmation", "img" => "laptop"],
	["name" => "Sport", "img" => "futbol-o"],
	["name" => "Film", "img" => "film"]
];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Développeur Web & Logiciel - Romain Tejero</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,700,900' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300' rel='stylesheet' type='text/css'>
</head>
<body>
	<div class="container" style="background-color: white; margin-top: 50px;">
		  <!-- --------------------HEAD----------------------- -->
		<div class="row head">
		  <div class="col-md-12">
		  		<div class="title text-center text-uppercase">Bonjour,</div>
		  		<div class="short text-center text-uppercase">Je m'appelle <span class="my-color">Romain</span><sup><strong>23ans</strong></sup> et je suis développeur <span class="my-color">web</span> & <span class="my-color">logiciel</span></div>
		  </div>
		</div>
		<hr>
		  <!-- ----------------------BODY----------------------- -->
		<div class="row body">
			<div class="col-md-7">
			  	<div class="col-md-12 intro">
			  		<div class="title">// ABOUT ME</div>
			  		<div class="content">
			  			<div class="row">
				  			<div class="col-md-3"><img src="img/me.jpg" class="img-circle"></div>
				  			<div class="col-md-9">
				  				<p class="text-justify">
				  					<!-- MODIF INTRO DEBUT/QUELLES CHANGEMENTS A PARTIR DE EPITECH + passionné coeur de métier  -->
				  					Je m'appelle Romain, j'ai 23 ans et je serai à la rentrée 2015 en 5ème et dernière année en école d'Ingénieur en informatique à {EPITECH}. Je suis depuis très jeune passionné par les nouvelles technologies et la programmation, j'ai la chance de pouvoir aujourd'hui faire de ma passion mon activité professionnelle.
				  				</p>
				  				<i class="fa fa-envelope-o"></i>&nbsp;<a href="mailto:tejero.romain@gmail.com">tejero.romain@gmail.com</a><br>
				  				<i class="fa fa-linkedin-square"></i>&nbsp;&nbsp;<a href="https://fr.linkedin.com/pub/romain-tejero/91/99a/86" target="_blank">Linkedin</a>
				  			</div>
				  			<div class="col-md-12 text-center link">
				  				
				  			</div>
			  			</div>
			  		</div>
			  	</div>
			  	<div class="col-md-12 experience">
			  		<div class="title">// EXPERIENCE</div>
			  		<div class="content">
				  		<dl class="dl-horizontal">
				  			<?php foreach ($experiences as $key => $experience) : ?>
		  						<dt>
		  							<?php if (!empty($experience["entreprise"])) echo $experience["entreprise"] . "<br>" ?>
		  							<span class="lightdate"><?= $experience["date"] ?></span><br>
		  							<?= $experience["contrat"] ?>
		  						</dt>
		  						<dd>
		  							<div class="subtitle"><?= $experience["title"] ?></div>
		  							<?php foreach ($experience['content'] as $key => $content) : ?>
		  								<?= $content ?><br>
		  							<?php endforeach; ?>
		  						</dd>
		  						<?php foreach ($experience['tag'] as $key => $tag) : ?>
		  							<span class="label label-default"><?= $tag ?></span>
		  						<?php endforeach; ?>
		  						<hr>
				  			<?php endforeach; ?>
						</dl>
			  		</div>
			  	</div>
			  	<div class="col-md-12 education">
			  		<div class="title">// EDUCATION</div>
			  		<div class="content">
			  			<?php foreach ($educations as $key => $education) : ?>
			  				<blockquote>
							  <footer><?= $education["name"] ?>, <?= $education["date"] ?></footer>
							  <p><?= $education["title"] ?></p>
							</blockquote>
			  			<?php endforeach; ?>
			  		</div>
			  	</div>
		  	</div>
		  <div class="col-md-5">
		  	<div class="col-md-12 skill">
		  		<div class="title">// SKILLS</div>
		  		<div class="content">
		  			<?php foreach ($skills as $key => $skill) : ?>
		  				<?php foreach ($skill["content"] as $key => $techno) : ?>
							<div class="progress">
							  <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: <?= $techno["percent"]; ?>%;">
							    <?= $techno["name"]; ?>
							  </div>
							</div>
		  				<?php endforeach; ?>
		  			<?php endforeach; ?>
		  		</div>
		  	</div>
		  	<div class="col-md-12 language">
		  		<div class="title">// LANGUAGES</div>
		  		<div class="content">
		  			<?php foreach ($languages as $key => $language) : ?>
		  				<div class="col-md-6"><?= $language["name"]; ?></div>
		  				<div class="col-md-6">
		  					<?php $i = 0; ?>
		  					<?php while ($i <= 4) : ?>
		  						<?php if ($i <= $language["level"]) : ?>
		  							<i class="fa fa-star" style="color: #f15c57;"></i>
		  						<?php else : ?>
		  							<i class="fa fa-star-o"></i>
		  						<?php endif; ?>
		  						<?php $i++; ?>
		  					<?php endwhile; ?>
		  				</div>
		  			<?php endforeach; ?>
		  		</div>
		  	</div>
		  	<div class="col-md-12 hobbies">
		  		<div class="title">// HOBBIES</div>
		  		<div class="content">
		  			<?php foreach ($hobbies as $key => $hobbie) : ?>
		  				<span class="label label-default"><i class="fa fa-<?= $hobbie["img"] ?>"></i>&nbsp;&nbsp;&nbsp;<?= $hobbie["name"] ?></span>
		  			<?php endforeach; ?>
		  		</div>
		  	</div>
		  </div>
		</div>
	</div>
</body>
</html>