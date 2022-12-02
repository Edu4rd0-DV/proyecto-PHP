<!--Formulario de login para empresa-->
<div class="row">
	<form>
		<div class="col m8 offset-m2 s10 offset-s1">
			<div class="card horizontal" style="margin-top: 5%;">
				<div class="card-image hide-on-med-and-down">
					<img class="responsive-img img-size" src="extras/img/empresa.png">
				</div>
				<div class="card-stacked">
					<div class="card-content">
						<span class="card-title center-align">
							Login -> Empresa
						</span>
						<p class="center-align">LLena los siguientes campos.</p>
						<div class="row">
							<div class="input-field col s12">
								<i class="material-icons prefix">email</i>
								<input type="text" id="email" placeholder="Ingrese el email">
							</div>
							<div class="input-field col s12">
								<i class="material-icons prefix">lock</i>
								<input type="password" id="password" placeholder="Ingrese la contraseña">
							</div>
						</div>
						<div class="row">
							<p class="center-align">¿No tienes una cuenta? <a data-target="modalNVOEmpresa" class="modal-trigger" href="#">Registrate aquí</a></p>
						</div>
					</div>
					<div class="card-action center-align">
						<input type="button" id="btnLoginEmpresa" class="border-button btn col m5 s5 offset-s1 offset-m1" value="Ingresar">
						<a class="border-button btn orange col m5 s5" href="?menu=main">Volver</a>
					</div>
				</div>
			</div>
		</div>
	</form>
</div>
<!-- Modal Structure -->
<div id="modalNVOEmpresa" class="modal modal-fixed-footer">
	<form>
		<div class="modal-content">
			<h4>¡Bienvenido! registra tu empresa aquí.</h4>
			<p>LLena los siguientes campos...</p>
			<!--Inicio formulario-->
			<div class="row">
				<div class="col s12">
					<div class="row">
						<div class="input-field col s6">
							<input id="nombre" type="text" class="validate">
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
							<label>Razon social:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="telefono" type="text" class="validate">
							<label for="telefono">Nº de teléfono:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<textarea id="direccion" class="materialize-textarea validate"></textarea>
							<label for="direccion">Dirección:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="correo" type="email" class="validate">
							<label for="correo">Correo electrónico:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="clave" type="password" class="validate">
							<label for="clave">Clave:</label>
						</div>
					</div>
					<div class="row">
						<div class="input-field col s12">
							<input id="reClave" type="password" class="validate">
							<label for="reClave">Repita la clave:</label>
						</div>
					</div>
				</div>
			</div>
			<!--Fin formulario-->
		</div>
		<div class="modal-footer">
			<input type="button" id="btnAgregarEmpresa" class="btn disabled" value="Agregar">
			<input type="reset" class="btn orange" value="Limpiar">
			<a href="#!" class="btn red white-text modal-close waves-effect waves-green btn-flat">Salir</a>
		</div>
	</form>
</div>
<script type="text/javascript" src="extras/js/verificarClaves.js"></script>