<div class="container">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-9">
			<h3>2019-yilgi bitiruvchilar</h3>
			<br>
			<table class="table table-bordered" style="font-size: 18px;">
				<tr>
				 <td>
					sinf
				</td>
				<td> familiya ism sharf</td>
			</tr>
			<?php foreach($bitiruvchilar as $b):?>
				<tr>
					<td><?=$b->sinf ?></td>
					<td><?=$b->fish ?></td>
				</tr>
			<?php endforeach;?>
			</table>
		</div>
		<div class="col-lg-2"></div>
	</div>
</div>