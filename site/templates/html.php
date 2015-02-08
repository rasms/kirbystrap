<?php snippet('header') ?>

	
  <body>
    <?php snippet('menu') ?>

    	<div class="container">

      		<h1><?php echo $page->title()->html() ?></h1>
      		<?php echo $page->text()->html() ?>
    
    	</div> <!-- /container -->



<?php snippet('footer') ?>