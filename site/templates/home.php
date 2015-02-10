
<?php snippet('header') ?>

	
  <body>
    <?php snippet('menu') ?>

    	<div class="container">

    		<div class="jumbotron">

      		<h1><?php echo $page->title()->html() ?></h1>
      		<?php echo $page->jumbo()->kirbytext() ?>

    		</div>
            <div class="row">
            <div class="col-lg-12">
               <?php echo $page->text()->kirbytext() ?> 
            </div>
            </div>


    	</div> <!-- /container -->



<?php snippet('footer') ?>