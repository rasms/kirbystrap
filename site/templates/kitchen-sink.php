<?php snippet('header') ?>

	
  <body>
    <?php snippet('menu') ?>

    	<div class="container">

            
            <div class="jumbotron">
                <h1><?php echo $page->title()->html() ?></h1>
                <?php echo $page->jumbo()->kirbytext() ?>
            </div>  
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default" id="headings">
                        <div class="panel-heading">Headings</div>
                        <div class="panel-body">
                        <?php echo $page->headings()->html() ?>
                        </div>
                </div>
                    
                    <div class="panel panel-default" id="tables">
                        <div class="panel-heading">Tables</div>
                        <div class="panel-body">
                        <?php echo $page->tables()->html() ?>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-6">
                    <div class="panel panel-default" id="content-formatting">
                        <div class="panel-heading">Content Formatting</div>
                        <div class="panel-body">
                        <?php echo $page->formatting()->html() ?>
                        </div>
                    </div>
                </div>    
            </div>
    
    	</div> 

      </div><!-- /container -->

<?php snippet('footer') ?>