<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>NUEVA CATEGORIA</title>
</head>
<body>

<form action="" method="post">
    <input type="hidden" name="id" value="<?php echo $id; ?>"/>
    <input type="hidden" name="nombre" value="<?php echo $nombre; ?>"/>
    <div>
        <p><strong>ID:</strong> <?php echo $id; ?></p>
        <strong>Nombre: </strong> <input type="text" name="nombre" value="<?php echo $nombre; ?>"/><br/>
        <input type="submit" name="update" value="Modificar">
    </div>
</form>
</body>
</html>




