<? include_once '_funciones.php'?>

<? $titulo="DDBB Alumni.Valerio."?>
<? include_once '_header.php'?>


<?php

$sql="SELECT * FROM alumnos";

$datos = consulta($sql);



echo '<ul>';

if ($datos->num_rows > 0) {
    // output data of each row
    while($row = $datos->fetch_assoc()) {
        echo '<li>';
        echo "<p>".$row["id"]. " | " .$row["nombre"]. " " .$row["apellido"]. " | " .$row["direccion"]. " | " . $row["fechaNacimiento"].  " | "."</p>" ;
        
        echo "<h3>". "<a href='mailto:".$row["email"]."'>".$row['email']."</a>". " </h3>";
     
        echo "<a href='tel:".$row["telefono"]."'>".$row['telefono']."</a>";
        echo '</li>';
    }
  } else {
    echo "0 resultados";
  }





?>



<? include_once '_footer.php'?>
