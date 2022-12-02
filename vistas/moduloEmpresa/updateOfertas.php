<div class="container">
	<div class="row">
		<div class="col s12">
			<div class="card white">
				<div class="card-content">
					<a href="?app=dashboardEmpresa"><i class="material-icons right black-text">close</i></a>
					<span class="card-title">Editar información</span>
					<p>Data example.</p>
					<?php
					$id2 = $_POST['idOfertas'];
					include "phpActions/verOfertas.php";
					while ($obj=mysqli_fetch_array($sql2))
					{
						?>
						<!--Inicio formulario-->
						<div class="row">
							<div class="input-field col s12">
								<input id="id_oferta" type="text" class="" value="<?php echo ($obj[0]); ?>">
								
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<input id="oferta" type="text" class="validate" value="<?php echo ($obj[3]); ?>">
								<label for="oferta">Nombre de la oferta:</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12">
								<textarea id="detalle" class="materialize-textarea validate"><?php echo ($obj[4]); ?></textarea>
								<label for="detalle">Detalle de la oferta:</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input id="edad" type="text" class="validate" value="<?php echo ($obj[5]); ?>">
								<label for="edad">Edad requerida:</label>
							</div>
							<div class="input-field col s6">
								<select id="tipoContrato">
									<option value="<?php echo ($obj[6]);?>" ><?php echo ($obj[7]); ?></option>
									<?php	
									include "phpActions/llenarSelectTC.php";
                             		while ($lista = mysqli_fetch_array($sql)) {
										echo "<option value='".$lista["id"]."'>".$lista["nombre"]."
										</option>";
									}

									?>
								</select>
								<label for="razonSocial">Tipo de contrato:</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input id="vacantes" type="text" class="validate" value="<?php echo ($obj[8]); ?>">
								<label for="oferta">Vacantes disponibles:</label>
							</div>
							<div class="input-field col s6">
								<input id="salario" type="text" class="validate" value="<?php echo ($obj[9]); ?>">
								<label for="oferta">Salario:</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input id="experiencia" type="text" class="validate" value="<?php echo ($obj[10]); ?>">
								<label for="experiencia">Experiencia laboral:</label>
							</div>
							<div class="input-field col s6">
								<select id="nivelAcademico">
									<option value="<?php echo ($obj[11]); ?>" ><?php echo ($obj[12]); ?></option>
									<?php
									include "phpActions/llenarSelectNA.php";
									while ($lista = mysqli_fetch_array($sql)) {
										echo "<option value='".$lista["id"]."'>".$lista["nombre"]."
										</option>";
									}

									?>
								</select>
								<label for="razonSocial">Nivel académico:</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<select id="departamento">
									<option value="<?php echo ($obj[13]); ?>" ><?php echo ($obj[14]); ?></option>
									<?php
									include "phpActions/llenarSelectDepto.php";
									while ($lista = mysqli_fetch_array($sql)) {
										echo "<option value='".$lista["id"]."'>".$lista["nombre"]."
										</option>";
									}

									?>
								</select>
								<label for="razonSocial">Departamento:</label>
							</div>
							<div class="input-field col s6">
								<input id="fecha" type="text" class="datepicker validate" value="<?php echo ($obj[15]); ?>">
								<label for="fecha">Fecha de aplicación:</label>
							</div>
						</div>
						<div class="row">
							<div class="input-field col s6">
								<input id="estado" type="text" class="validate" value="<?php echo ($obj[16]); ?>">
								<label for="estado">Estado de la oferta:</label>
							</div>
						</div>
						<!--Fin formulario-->
						<?php
					}
					?>
				</div>
				<div class="card-action center-align">
					<a href="#" id="btnActualizarOferta" class="btn waves-effect waves-light">
						<i class="material-icons left">edit</i> Actualizar
					</a>
					<a href="#" id="btnEliminarOferta" class="btn red waves-effect waves-light">
						<i class="material-icons left">delete</i> Eliminar
					</a>
				</div>
			</div>
		</div>
	</div>
</div>