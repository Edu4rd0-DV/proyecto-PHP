<div class="container">
	<div class="row">
		<div class="col s12">
			<div class="card white">
				<div class="card-content">
					<a href="?app=dashboardEmpresa"><i class="material-icons right black-text">close</i></a>
					<span class="card-title">Ofertas publicadas</span>
					<p>Data example.</p>
					<!--Inicio tabla-->
					<table class="responsive-table highlight">
						<thead>
							<tr>
								<th class="hide">Id</th>
								<th class="hide">Empresa</th>
								<th>Oferta</th>
								<th class="hide">Detalle</th>
								<th class="hide">Edad</th>
								<th>Tipo contrato</th>
								<th class="hide">Vacantes</th>
								<th>Salario</th>
								<th class="hide">Experiencia laboral</th>
								<th>Nivel académico</th>
								<th>Departamento</th>
								<th>Fecha aplicación</th>
								<th>Estado</th>
								<th>Acción</th>
							</tr>
						</thead>
						<?php
						$id = $_POST['postOfertas'];
						include "phpActions/verOfertas.php";
						while ($obj=mysqli_fetch_array($sql))
						{
							?>
							<tbody>
								<tr>
									<form name="dataOferta" action="?app=updateOfertas" method="post">
										<td class="hide"><?php echo ($obj[0]); ?></td>
				    					<td class="hide"><?php echo ($obj[1]); ?></td>
										<td class="hide"><?php echo ($obj[2]); ?></td>
										<td><?php echo ($obj[3]); ?></td>
										<td class="hide"><?php echo ($obj[4]); ?></td>
										<td class="hide"><?php echo ($obj[5]); ?></td>
										<td class="hide"><?php echo ($obj[6]); ?></td>
										<td><?php echo ($obj[7]); ?></td>
										<td class="hide"><?php echo ($obj[8]); ?></td>
										<td>$<?php echo ($obj[9]); ?></td>
										<td class="hide"><?php echo ($obj[10]); ?></td>
										<td class="hide"><?php echo ($obj[11]); ?></td>
										<td><?php echo ($obj[12]); ?></td>
										<td class="hide"><?php echo ($obj[13]); ?></td>
										<td><?php echo ($obj[14]); ?></td>
										<td><?php echo ($obj[15]); ?></td>
										<td><?php echo ($obj[16]); ?></td>
										<td>
											<input type="text" class="hide" name="idOfertas" value="<?php $idOferta = $obj[0]; echo $idOferta ?>">
											<button style="cursor:pointer;" onclick="document.forms['dataOferta'].submit()">
												Seleccionar
											</button>
										</td>
									</form>
								</tr>
							</tbody>

							<?php
						}
						?>
					</table>
					<!--Fin tabla-->
				</div>
				<div class="card-action center-align">
					<a href="#addOfertas" class="btn-floating waves-effect waves-light pulse modal-trigger" title="Oferta NVA.">
						<i class="material-icons">add</i>
					</a>
					<p class="title center-align blue-text">
						<strong>
							---> Haz click en "seleccionar" para editar o eliminar un producto ó en el botón "add" para agregar una nueva oferta. <---
						</strong>
					</p>
				</div>
			</div>
		</div>
	</div>
</div>

<!--start modal-->
<div id="addOfertas" class="modal modal-fixed-footer">
	<form>
		<div class="modal-content">
			<h4 class="center-align">Registrar oferta nva.
				<a class="modal-action modal-close">
					<i class="material-icons right black-text">close</i>
				</a>
			</h4>
			<div class="row">
				<p class="center-align">
					Ingresa los datos que se te piden en los siguientes campos.
				</p>
			</div>
			<div class="divider"></div>
			<!--Inicio formulario-->
		    <div>
		    	<input type="text" class="" id="id" value="<?php echo $id ?>">
		    </div>

			<div class="row">
				<div class="input-field col s12">
					<input id="nombreOferta" type="text" class="validate">
					<label for="oferta">Nombre de la oferta:</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s12">
					<textarea id="detalle" class="materialize-textarea validate"></textarea>
					<label for="detalle">Detalle de la oferta:</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="edad" type="text" class="validate">
					<label for="edad">Edad requerida:</label>
				</div>
				<div class="input-field col s6">
					<select id="tipoContrato">
						<option value="" disabled selected>Selecciona una opción</option>
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
					<input id="vacantes" type="text" class="validate">
					<label for="oferta">Vacantes disponibles:</label>
				</div>
				<div class="input-field col s6">
					<input id="salario" type="text" class="validate">
					<label for="oferta">Salario:</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="experiencia" type="text" class="validate">
					<label for="experiencia">Experiencia laboral:</label>
				</div>
				<div class="input-field col s6">
					<select id="nivelAcademico">
						<option value="" disabled selected>Selecciona una opción</option>
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
						<option value="" disabled selected>Selecciona una opción</option>
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
					<input id="fecha" type="date" class="validate">
					<label for="fecha">Fecha de aplicación:</label>
				</div>
			</div>
			<div class="row">
				<div class="input-field col s6">
					<input id="estado" type="text" class="validate">
					<label for="estado">Estado de la oferta:</label>
				</div>
			</div>
			<!--Fin formulario-->
		</div>
		<div class="modal-footer">
			<div class="center-align">
				<input type="button" id="btnaddOferta" class="btn" value="Agregar">
				<input type="reset" class="btn orange" value="Limpiar">
			</div>
		</div>
	</form>
</div>
<!--end modal-->