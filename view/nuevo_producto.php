<?php
//si el usuario no es admin redirecciono a la home.
if($_SESSION['admin'] != 'admin') {
    header('Location: view/home_view.php');
}?>
<!--vista para añadir producto-->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title>NUEVO PRODUCTO</title>
</head>
<body>

<p>Rellena el formulario para añadir un nuevo producto.</p>
<?php
//conexion a BBDD para el select
$user = 'root';
$pwd = '';
$db = new PDO('mysql:host=localhost;dbname=aa2_jf', $user, $pwd);
?>
<form method="post">
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" required><br>
    <label for="nombre">Precio:</label>
    <input type="text" name="precio" required><br>
    <select name="id_categoria" class="form-control">
<!--Select para que muestre las categorias existentes y al admin pueda elegir una de ellas y asi añadir el producto-->
        <option value="">Elige una categoria</option>
        <?php
        $consulta = $db->prepare("SELECT * FROM categoria");
        $consulta->execute();
        $categorias = $consulta->fetchAll();

        foreach ($categorias as $categoria):
        echo '<option value"'.$categoria["id"].'">'.$categoria["id"].' - '.$categoria["nombre"].'</option>';
        endforeach;
        ?>
    </select>
    <input type="submit" name="registro" value="Añadir">
</form>
</body>
</html>
