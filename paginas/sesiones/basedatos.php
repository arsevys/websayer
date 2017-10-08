 <?php 
     require ('conect.php');
     $mostrar=$conexion->query("SELECT * FROM usuario");
     echo "<table border='1' class='table' >";
     echo "<thead>";
     echo "<tr>";
     echo "<td>ID</td>";
     echo "<td>Nombre</td>";
     echo "<td>Apellido</td>";
     echo "<td>Edad</td>";
     echo "<td>Usuario</td>";
     echo "<td>Comtraseña</td>";
     echo "<td>Telefono</td>";
     echo "<td>Fecha De Nacimiento</td>";
     echo "<td>Email</td>";
     echo "</thead>";
  echo "<tbody>";
     while ($arreglo=mysqli_fetch_array($mostrar)) {
          
          echo "<tr>";
          echo"<td>$arreglo[0]</td>";
          echo"<td>$arreglo[1]</td>";
          echo"<td>$arreglo[2]</td>";
          echo"<td>$arreglo[3]</td>";
          echo"<td>$arreglo[4]</td>";
          echo"<td>$arreglo[5]</td>";
          echo"<td>$arreglo[6]</td>";
          echo"<td>$arreglo[7]</td>";
          echo"<td>$arreglo[8]</td>"; 
          echo"<td><a id='asd'  onclick='modificar($arreglo[0])'><img src='../../imagenes/admin/actualizar.gif' class='img-rounded'></a></td>";
          echo"<td><a onclick='eliminar($arreglo[0])'><img src='../../imagenes/admin/eliminar.png'></a></td>";
        echo "</tr>";
        
     }

 echo"</tbody>";
          echo"</table>";



       ?>
