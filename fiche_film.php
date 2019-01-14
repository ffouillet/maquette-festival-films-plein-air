<?php ob_start(); ?>
<section id="fiche-projection-film">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div id="bloc-infos-film">
					<h1>Titre du film projeté</h1>
					<p class="projection-date">Date et heure de la projection</p>
					<div>
						<img class="thumb-projection" src="assets/img/thumb_projection.jpg" alt="Vignette du film projeté"/>
					</div>
					<h2>Synopsis</h2>
					<p class="synopsis">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin eget diam in sollicitudin. Morbi ex dui, finibus a accumsan interdum, eleifend vitae lacus. Ut ut posuere lorem. Vivamus non nulla sit amet risus vestibulum convallis. Sed rutrum velit quis mi tempor bibendum. Maecenas at justo risus. Sed dui nisi, malesuada at placerat non, convallis non purus.
						<br/><br/>

						Morbi porta accumsan dui non dapibus. Phasellus sed faucibus magna, vel venenatis metus. Integer vel nisi venenatis, faucibus lectus sed, auctor odio. Donec quis porta dui. Donec vitae convallis orci. Nam lorem quam, viverra in tempus nec, pulvinar vel velit. Vivamus vel nunc id ante faucibus vestibulum. Mauris convallis dignissim orci non viverra. Nunc et ante sit amet est elementum accumsan. Morbi vulputate at urna vel laoreet. Phasellus mattis iaculis fermentum. Maecenas sollicitudin a quam at gravida. Nullam arcu sapien, viverra vitae erat vel, rhoncus placerat turpis.<br/><br/>

						Suspendisse lorem metus, mollis id urna eu, egestas ullamcorper mi. Curabitur eget urna eu erat interdum convallis eleifend in est. Fusce ut eros ut nisl porttitor pulvinar vel ac purus. Sed luctus sem massa, nec varius ipsum volutpat molestie. Nullam elementum risus vel orci condimentum faucibus. Pellentesque id suscipit tortor. Pellentesque congue dictum lacus sit amet consectetur. Etiam massa eros, venenatis non euismod et, mattis sit amet purus. Phasellus in neque eget magna gravida efficitur in ac risus. Etiam ac massa nec leo consequat pellentesque. Duis eleifend consequat finibus. Proin pretium orci nec sapien dignissim convallis vel vel velit.<br/><br/>
					</p>
				</div>
			</div>
			<div class="col-md-4">
				<div id="bloc-preinscription-film">
					<h2>Pré-inscription</h2>
					<p>
						N'hésitez pas à nous indiquer votre venue à la projection de ce film en saisissant votre adresse email ci-dessous puis en cliquant sur le bouton "Je me pré-inscris".<br/>
						En faisant celà, vous nous aidez à organiser le festival :-)<br/>
						<strong>L'entrée est gratuite !</strong>
					</p>
					<input type="email" placeholder="Votre adresse email" />
					<a class="red-button" href="#">Je me pré-inscris</a>
				</div>
			</div>
		</div>
		<div class="row row-nav-articles">
			<div class="col-md-12">
				<a href="#">← Film précedent</a>
				<a href="#">Film suivant →</a>
			</div>
		</div>
	</div>
</section>

<?php 
$ficheFilmPageContent = ob_get_contents();
ob_end_clean();

ob_start();
require_once('page_elements/menu.php');
$navbar = ob_get_contents();
ob_end_clean();

$pageContent = $navbar . $ficheFilmPageContent;

$pageTitle = 'Titre Film Projeté';

require_once('page_elements/layout.php');

?>