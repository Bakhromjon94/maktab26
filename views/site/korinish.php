<div class="container">
	<div class="row">
		<div class="jumbotron">
  <div class="container">
  	<?php foreach($boglanishform as $b)?>
    <div class="col-lg-7 col-md-7 col-sm-7">
    	<h4><?=$b->matn ?></h4>
    	<h6><?=$b->ism ?></h6>
    </div>
<?php endforeach;?>
  </div>
</div>
	</div>
</div>