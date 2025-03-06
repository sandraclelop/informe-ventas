<?php 
    require_once ($_SERVER['DOCUMENT_ROOT']."/informe-ventas/config/config.php");

$listadoVentas= obtenerListadoDeVentasUltimoTrimestre2024();

    function obtenerListadoDeVentasUltimoTrimestre2024(){
        $consulta="SELECT empresas.nombre, ventas.* FROM ventas
                    INNER JOIN empresas ON empresas.id = ventas.id_empresa
                    WHERE ventas.fecha_venta BETWEEN '2024-10-01' AND '2024-12-31'";

        $conn= conectarDB();
        try{
            $resultado=mysqli_query($conn, $consulta); 
            $listadoVentas = array();    
        
            while ($venta = mysqli_fetch_assoc($resultado)) {   
                array_push($listadoVentas, $venta);
            }
            return $listadoVentas;
        }catch(Exception $e){
            exit('No se ha podido realizar la consulta: ' .  $e->getMessage());
        }
        finally{
            cerrarDB($conn);
        }
    }

    function conectarDB() {
        try {
            $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        } catch (Exception $e) {
            $mensajeError = 'Error de conexión con la base de datos: ' .  $e->getMessage();
            exit($mensajeError);
            return $mensajeError;
        }

        return $conn;
    }

   function cerrarDB($conn){
        mysqli_close($conn);
    }

?>