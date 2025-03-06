<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Informe de ventas</title>
        <link rel="stylesheet" href="./css/estilos.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
        <?php require_once "./ventas/ventas.php";?>
    </head>
    <body class="grid-body">
        <header class ="encabezado">
            <img src= "./img/logo-empresa.png" class="logo" alt="logo">
            <p class="nombre-web-logo"> InforVentas</p>
        </header>
        <main>
            <h2 class='titulo-seccion'> INFORME DE VENTAS:</h2>
            <?php if(isset($mensajeError)){
                echo '<p>'.$mensajeError.'</p>';
            }?>
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
                            <tbody>
                                <?php foreach($listadoVentas as $venta) {?>
                                    <tr>
                                        <td> <?php echo $venta['id_empresa']?></td>
                                        <td> <?php echo $venta['nombre']?></td>
                                        <td> <?php echo $venta['id']?></td>
                                        <td> <?php echo $venta['num_factura']?></td>
                                        <td> <?php echo $venta['comprador']?></td>
                                        <td> <?php echo $venta['fecha_venta']?></td>
                                        <td> <?php echo $venta['articulos_vendidos']?></td>
                                        <td> <?php echo $venta['valor_total']?></td>
                                    </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                    <a href="./ventas/ventas-generador-pdf.php"> Generar PDF del informe de ventas </a>
                </section>
            <?php ?>
        </main>
        <footer>
            <p> Diseño realizado por Sandra C. </p>
            <div class="footer-enlaces-redes-sociales">
                <a href="mailto:sandraclelop@gmail.com" target="_blank" alt="Enlace a email"><ion-icon name="mail-outline" class="logo-email"></ion-icon></a>
                <a href="https://www.linkedin.com/in/sandra-clemente-96119b31b/" target="_blank" alt="Enlace a perfil de linkedin"><ion-icon name="logo-linkedin" class="logo-linkedin"></ion-icon></a>
                <a href='https://github.com/sandraclelop'><ion-icon name="logo-github" class="logo-github"></ion-icon></a>
            </div>
        </footer>
    </body>
</html>