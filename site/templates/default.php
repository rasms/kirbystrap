<?php snippet('header') ?>

	
  <body>
    <?php snippet('menu') ?>

    	<div class="container">

      		<h1><?php echo $page->title()->kirbytext() ?></h1>
      		<?php echo $page->text()->kirbytext() ?>
    
    	</div> <!-- /container -->



<?php snippet('footer') ?>