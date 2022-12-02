<div class="row">
	<?php
	include "phpActions/mostrarOfertas.php";
	if($sql->num_rows > 0){
		while ($obj=mysqli_fetch_array($sql))
		{
			?>
			<div class="col s12 m3">
				<div class="card">
					<div class="card-image">
						<img src="extras/img/oferta.png">
						<a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">remove_red_eye</i></a>
					</div>
					<div class="card-content">
						<span class="card-title"><?php echo $obj[3]; ?></span>
						<p><?php echo 'Empresa: '.$obj[2]; ?></p>
						<p><?php echo 'Tipo de contratación: '.$obj[7]; ?></p>
						<p><?php echo 'Vacantes: '.$obj[8]; ?></p>
						<p><?php echo 'Salario: $'.$obj[9]; ?></p>
						<p><?php echo 'Lugar: '.$obj[14]; ?></p>
						<p><?php echo 'Fecha de aplicación: '.$obj[15]; ?></p>
					</div>
				</div>
			</div>
		<?php } }else{ ?>
			<p class="white-text">Oferta(s) not found.....</p>
		<?php } ?>
	</div>