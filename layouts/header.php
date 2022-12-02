<?php
session_start();
?>
<!--Menú-->
<div class="navbar-fixed">

<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="#!">¿Quieres cerrar la sesión?</a></li>
  <li class="divider"></li>
  <li><a href="?app=logout">Cerrar Sesion</a></li>
</ul>
<!--End Dropdown-->
 <nav class="#01579b light-blue darken-4">
    <div class="nav-wrapper">
      <a href="?app=home" class="brand-logo">
      <i class="material-icons">add_box</i> Trabaja</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="?menu=main">
        <i class="material-icons left">home</i> Inicio</a></li>
        <li><a href="?menu=ofertas">
        <i class="material-icons left">work</i> Ofertas de empleo</a></li>
        <li><a href="?menu=contacto">
        <i class="material-icons left">live_help</i> Contacto</a></li>
        <li>
        <?php 
        if(isset($_SESSION["correo"]))
        {
          $correo = $_SESSION["correo"];
          $id_correo = $_SESSION["id"];
          echo '<a class="dropdown-trigger" href="#!" data-target="dropdown1">
          <i class="material-icons left">uaccount_circle</i>'.$correo.'</a>';
        }
        else
        {
          echo '<a href="?menu=main">
          <i class="material-icons left">lock_outline</i> Inicia sesion</a>';
        }
        ?>
        </li>
      </ul>
    </div>
  </nav>
</div>