<?php
session_start();
if(isset ($_SESSION['id'])) {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agregar Deseos</title>
        <link rel="stylesheet" type ="text/css" href="css/add_wish.css">
    </head>
    <body>
    <center>
        <a href ="menu.php" class = "uno">Volver...</a>       
    <div class ="maik">   
        <form action ="../controller/add_wish.php" method ="POST">
            <h3 class = "title">Ingresa Tu Deseo...</h3>
            <p>Titulo Del Deseo</p><input title = "Se necesita el titulo del deseo" type = "text" id ="jinx" name="title" required>
                <div><textarea name ="deseo" rows="14" cols="50"  id="area" title ="Ingresa el deseo " required ></textarea></div>
                <input type="reset" value="Limpiar" class ="uno"> <input type="submit" value="Agregar Deseo" class="uno">
        </form>     
    </div>  
    </center>
    </body>
</html>
<?php
}else{
    echo"Debes iniciar sesion antes de acceder a esta pagina"; 
}
?>
