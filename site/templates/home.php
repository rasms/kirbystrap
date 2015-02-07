
<?php snippet('header') ?>

	
  <body>
    <?php snippet('menu') ?>

    	<div class="container">

    		<div class="jumbotron">

      		<h1><?php echo $page->title()->html() ?></h1>
      		<?php echo $page->text()->kirbytext() ?>

    		</div>

    		 <hr>

    		<?php snippet('projects') ?>

    	</div> <!-- /container -->



<?php snippet('footer') ?>