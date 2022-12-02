<?php
session_start();
if(isset($_SESSION["correo"]))
{
	$correo = $_SESSION["correo"];
	$id = $_SESSION["id"];
}
else
{
	echo "<meta http-equiv='refresh' content='0;url=?app=loginEmpresa'>";
}
?>
<div class="row">
	<div class="col s12 m4">
		<div class="card horizontal">
			<div class="card-image">
				<img src="extras/img/editEmpresa.png">
			</div>
			<div class="card-stacked">
				<h2 class="card-title">Editar datos</h2>
				<div class="card-content">
					<p>I am a very simple card. I am good at containing small bits of information.</p>
				</div>
				<div class="card-action">
					<form name="data" method="post" action="?app=viewEmpresa">
					<input type="text" name="postData" class="hide" value="<?php $postData = $correo; echo $postData?>">
					<a class="btn" style="cursor:pointer;" onclick="document.forms['data'].submit()">Editar datos</a>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="col s12 m4">
		<div class="card horizontal">
			<div class="card-image">
				<img src="extras/img/oferta.png">
			</div>
			<div class="card-stacked">
				<h2 class="card-title">Ofertas laborales</h2>
				<div class="card-content">
					<p>I am a very simple card. I am good at containing small bits of information.</p>
				</div>
				<div class="card-action">
					<form name="dataOfertas" method="post" action="?app=viewOfertas">
					<input type="text" name="postOfertas" class="hide" value="<?php $postOfertas = $id; echo $postOfertas; ?>">
					<a class="btn" style="cursor:pointer;" onclick="document.forms['dataOfertas'].submit()">Ir a ofertas</a>
					</form>
				</div>
			</div>
		</div>
	</div>

	<div class="col s12 m4">
		<div class="card horizontal">
			<div class="card-image">
				<img src="extras/img/user.png">
			</div>
			<div class="card-stacked">
				<h2 class="card-title">Postulantes</h2>
				<div class="card-content">
					<p>I am a very simple card. I am good at containing small bits of information.</p>
				</div>
				<div class="card-action">
					<a class="btn" href="?app=viewEmpresa">Ver aplicaciones</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col s12 m4">
		<div class="card horizontal">
			<div class="card-image">
				<img src="extras/img/entrevista.png">
			</div>
			<div class="card-stacked">
				<h2 class="card-title">Entrevistas</h2>
				<div class="card-content">
					<p>I am a very simple card. I am good at containing small bits of information.</p>
				</div>
				<div class="card-action">
					<a class="btn" href="?app=viewEmpresa">Ir a entrevistas</a>
				</div>
			</div>
		</div>
	</div>

	<div class="col s12 m4">
		<div class="card horizontal">
			<div class="card-image">
				<img src="extras/img/reporte.png">
			</div>
			<div class="card-stacked">
				<h2 class="card-title">Reportes</h2>
				<div class="card-content">
					<p>I am a very simple card. I am good at containing small bits of information.</p>
				</div>
				<div class="card-action">
					<a class="btn" href="?app=viewEmpresa">Ir a reportes</a>
				</div>
			</div>
		</div>
	</div>
</div>