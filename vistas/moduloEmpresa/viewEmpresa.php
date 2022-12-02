<div class="container">
	<div class="row">
		<div class="col s12">
			<div class="card white">
				<div class="card-content">
					<a href="?app=dashboardEmpresa"><i class="material-icons right black-text">close</i></a>
					<span class="card-title">Datos de la Empresa</span>
					<p>Data example.
					</p>
					<?php
					$correo = $_POST['postData'];
					include "phpActions/verEmpresa.php";
					while ($obj=mysqli_fetch_array($sql))
					{
						?>
						<!--Inicio formulario-->
						<div class="row">
							<div class="col s12">
								<div class="row">
									<div class="input-field col s6">
										<input id="id" type="text" class="hide" value="<?php echo ($obj[0]); ?>">
									</div>
								</div>
								<div class="row">
									<div class="input-field col s6">
										<input id="nombre" type="text" class="validate" value="<?php echo ($obj[1]); ?>">
										<label for="nombreEmpresa">Nombre de la empresa:</label>
									</div>
									<div class="input-field col s6">
										<select id="razonSocial">
											<option value="" disabled selected>Selecciona un opción</option>
											<?php
											include "phpActions/llenarSelectRS.php";
											while ($lista = mysqli_fetch_array($sql)) {
												echo "<option value='".$lista["id"]."'>".$lista["nombre"]."
												</option>";
											}

											?>
										</select>
										<label for="razonSocial">Razon social:</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="telefono" type="text" class="validate" value="<?php echo ($obj[4]); ?>">
										<label for="telefono">Nº de teléfono:</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<input id="correo" type="email" class="validate" value="<?php echo ($obj[5]); ?>">
										<label for="correo">Correo electrónico:</label>
									</div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<textarea id="direccion" class="materialize-textarea validate"><?php echo ($obj[6]); ?></textarea>
										<label for="direccion">Dirección:</label>
									</div>
								</div>
							</div>
						</div>

						<!--Fin formulario-->
						<?php
					}
					?>
				</div>
			<div class="card-action center-align">
				<a href="#" id="btnActualizarEmpresa" class="btn waves-effect waves-light pulse">
					<i class="material-icons left">edit</i> Actualizar
				</a>
			</div>
		</div>
	</div>
</div>
</div>