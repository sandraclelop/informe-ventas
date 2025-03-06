 <?php  
    function getPlantilla($listadoVentas){
        $plantilla='
            <body class="grid-body">
                <header>
                    <img src= "../img/logo-empresa.png" class="logo" alt="logo">
                    <p class="nombre-web-logo-plantilla"> InforVentas</p>
                </header>
                <main>
                    <h2 class="titulo-seccion"> INFORME DE VENTAS:</h2>
                        <p>En el presente documento se muestra la tabla de ventas del último trimestre de 2024. </p>
                        <section class="informe-ventas">
                            <div class="contenedor-tabla-informe-ventas">
                                <table class="tabla-informe-ventas">
                                    <thead class = "thead-tabla-informe-ventas">
                                        <tr>
                                            <th>ID de empresa: </th>
                                            <th>Nombre empresa: </th>
                                            <th>ID venta: </th>
                                            <th>Número Factura: </th>
                                            <th>Comprador: </th>
                                            <th>Fecha venta: </th>
                                            <th>Número de artículos vendidos: </th>
                                            <th> Valor total: </th>
                                        <tr>
                                    </thead>
                                    <tbody>';
                                        foreach($listadoVentas as $venta) {
                                            $plantilla.= '<tr>
                                                <td>'. $venta["id_empresa"] . '</td>
                                                <td>'. $venta["nombre"] .'</td>
                                                <td>'. $venta["id"] . '</td>
                                                <td>'. $venta["num_factura"] . '</td>
                                                <td>'. $venta["comprador"] .' </td>
                                                <td>'. $venta["fecha_venta"] . '</td>
                                                <td>'. $venta["articulos_vendidos"] . '</td>
                                                <td>'. $venta["valor_total"] .' </td>
                                            </tr>';
                                        }
                                         $plantilla.= '
                                    </tbody>
                                </table>
                            </div>
                        </section>
                </main>
            </body>';
        return $plantilla;
    }
?>