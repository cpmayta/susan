<?php
session_start();
if(isset ($_SESSION['id'])) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Deseos</title>
        <link rel="stylesheet" type ="text/css" href="css/delete_wish.css">
    </head>
    <body>
    <center>
        <a href ="menu.php" class = "uno">Volver...</a>       
    <div class ="delete">   
        <form action ="../controller/drop.php" method ="POST">
            <h3 class = "title">¿Que Deseo Quieres Eliminar?</h3>
              <p>Titulo Del Deseo</p><input type = "text" id ="jax" name="title">
              <table>
                  <td><input type="reset" value="Limpiar" class ="uno"></td><td> <input type="submit" value="Eliminar Deseo" class="uno"></td>
              </table>
        </form>     
    </div>  
    </center>
    </body>
</html>
<?php
}else{ 
    echo "Debes iniciar sesion antes de acceder a esta pagina";  
}
?>
