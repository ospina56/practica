<head>
    <title><?php echo"actualizar"; ?></title>
</head>
<div class="row">
<h1>actualiza tus datos</h1>
<?php include('usuario.php'); ?>
<form action="guardara.php"><br>
    <input type="number" name="documento" placeholder="documento"><br>

    <input type="text" name="nombre" placeholder="nombre"><br>   

    <input type="date" name="fecha" placeholder="fecha de nacimiento"><br>

    <input type="password" name="contraseña" placeholder="contraseña"><br>

    <input type="text" name="foto" placeholder="foto"><br>
    <input type="submit">
</form>