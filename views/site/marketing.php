<div class="container">
	<div class="row">
		<div class="col-lg-2"></div>
		<div class="col-lg-9">
			<h3>Har bir sinf uchun obuna to'lovlari miqdori alohida belgilangan</h3>
			<br>
			<table class="table table-bordered" style="font-size: 18px;">
				<tr>
				 <td>
					sinf
				</td>
				<td> miqdori</td>
			</tr>
			<?php foreach($marketing as $m):?>
				<tr>
					<td><?=$m->matn ?></td>
					<td><?=$m->tolovlar ?> so'm</td>
				</tr>
			<?php endforeach;?>
			</table>
		</div>
		<div class="col-lg-2"></div>
	</div>
</div>