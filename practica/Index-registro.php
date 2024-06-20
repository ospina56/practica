<head>
    <title><?php echo"registrate"; ?></title>
</head>
<div class="row">
<h1>Registrate</h1>
<?php include('usuario.php'); ?>
<form action="guardar-registro.php"><br>
    <input type="number" value="<?php if(isset($_GET['documento'])){
        echo MOSTRAR::retornarDato(1,$_GET['documento']);}?>" name="documento" placeholder="documento"><br>

    <input type="text" value="<?php if(isset($_GET['documento'])){
        echo MOSTRAR::retornarDato(2,$_GET['documento']);}?>" name="nombre" placeholder="nombre"><br>   

    <input type="date" value="<?php if(isset($_GET['documento'])){
        echo MOSTRAR::retornarDato(3,$_GET['documento']);}?>" name="fecha" placeholder="fecha de nacimiento"><br>

    <input type="password" value="<?php if(isset($_GET['documento'])){
        echo MOSTRAR::retornarDato(4,$_GET['documento']);}?>" name="contraseña" placeholder="contraseña"><br>

    <input type="text" value="<?php if(isset($_GET['documento'])){
        echo MOSTRAR::retornarDato(5,$_GET['documento']);}?>" name="foto" placeholder="foto"><br>
    <input type="submit">
</form>