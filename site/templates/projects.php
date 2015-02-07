<?php snippet('header') ?>

	
  <body>
    <?php snippet('menu') ?>

    	<div class="container">

      		<h1><?php echo $page->title()->html() ?></h1>
      		<?php echo $page->text()->kirbytext() ?>

      	<?php snippet('projects') ?>
    
    	</div> <!-- /container -->



<?php snippet('footer') ?>