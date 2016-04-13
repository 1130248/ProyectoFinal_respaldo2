
<?php
include('../conexion/config.php');
$mysqli->set_charset("utf8");


$consulta="SELECT * from asambleas";

$result= $mysqli->query($consulta);
?>

<select>    
    <?php    
    while ( $row = $result->fetch_array() )    
    {
        ?>
    
        <option value=" <?php echo $row['id_asamblea'] ?> " >
        <?php echo $row['fecha_asamblea']; ?>
        </option>
        
        <?php
    }    
    ?>  </select>      

