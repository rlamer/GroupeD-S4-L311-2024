<!-- Correction du code pour inclure le contenu du fichier inc.function.php -->

<?php include 'inc/inc.functions.php'; ?>
<!DOCTYPE HTML>
<!--
	Story by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Story by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<?php include 'inc/inc.css.php'; ?>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper" class="divided">
				<?php 
					getPageTemplate(  // Correction "Page" au lieu de "Pages"         
						array_key_exists('page', $_GET) ? $_GET['page'] : null   // Correction semblable, ici pour "exist" qui doit être "exists"
					); 
				?> 
		<!-- Correction du nom de fichier "tpls-foorter.php" --> 
				<?php include 'inc/tpl-footer.php'; ?> 
			</div>

<!-- Correction de "include" comme faite au début du fichier plus haut--> 
		<?php include 'inc/inc.js.php'; ?>

	</body>
</html>