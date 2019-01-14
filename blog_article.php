<?php ob_start(); ?>
<section id="fiche-projection-film">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div id="bloc-article-blog">
					<h1>Titre article blog</h1>
					<p class="infos-article">
						<i class="fas fa-calendar-alt"></i>Date et heure publication
						<span class="auteur-article"><i class="fas fa-user"></i>Auteur</span>
					</p>
					<p class="corps-article">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam sollicitudin eget diam in sollicitudin. Morbi ex dui, finibus a accumsan interdum, eleifend vitae lacus. Ut ut posuere lorem. Vivamus non nulla sit amet risus vestibulum convallis. Sed rutrum velit quis mi tempor bibendum. Maecenas at justo risus. Sed dui nisi, malesuada at placerat non, convallis non purus.
						<br/><br/>

						Morbi porta accumsan dui non dapibus. Phasellus sed faucibus magna, vel venenatis metus. Integer vel nisi venenatis, faucibus lectus sed, auctor odio. Donec quis porta dui. Donec vitae convallis orci. Nam lorem quam, viverra in tempus nec, pulvinar vel velit. Vivamus vel nunc id ante faucibus vestibulum. Mauris convallis dignissim orci non viverra. Nunc et ante sit amet est elementum accumsan. Morbi vulputate at urna vel laoreet. Phasellus mattis iaculis fermentum. Maecenas sollicitudin a quam at gravida. Nullam arcu sapien, viverra vitae erat vel, rhoncus placerat turpis.<br/><br/>

						Suspendisse lorem metus, mollis id urna eu, egestas ullamcorper mi. Curabitur eget urna eu erat interdum convallis eleifend in est. Fusce ut eros ut nisl porttitor pulvinar vel ac purus. Sed luctus sem massa, nec varius ipsum volutpat molestie. Nullam elementum risus vel orci condimentum faucibus. Pellentesque id suscipit tortor. Pellentesque congue dictum lacus sit amet consectetur. Etiam massa eros, venenatis non euismod et, mattis sit amet purus. Phasellus in neque eget magna gravida efficitur in ac risus. Etiam ac massa nec leo consequat pellentesque. Duis eleifend consequat finibus. Proin pretium orci nec sapien dignissim convallis vel vel velit.
					</p>
					<div class="categories-article">
						<i class="fas fa-folder"></i>Categories
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div id="bloc-derniers-articles">
					<h2>Les derniers articles</h2>
					<ul>
						<li><a href="#">Titre dernier article posté</a></li>
						<li><a href="#">Titre dernier article posté</a></li>
						<li><a href="#">Titre dernier article posté</a></li>
					</ul>
				</div>
			</div>
		</div>
		<div class="row row-nav-articles">
			<div class="col-md-12">
				<a href="#">← Article précedent</a>
				<a href="#">Article suivant →</a>
			</div>
		</div>
	</div>
</section>

<?php 
$blogArticleContent = ob_get_contents();
ob_end_clean();

ob_start();
require_once('page_elements/menu.php');
$navbar = ob_get_contents();
ob_end_clean();

$pageContent = $navbar . $blogArticleContent;

require_once('page_elements/menu.php');
require_once('page_elements/layout.php');

?> 
