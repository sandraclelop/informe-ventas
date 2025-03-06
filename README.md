# InforVentas

Proyecto de informe de ventas con generador de pdf.

# Pasos previos para instalación
- Descarga, instalación y configuración de XAMPP.
- Poner a correr Apache y MySQL desde el panel de control de XAMPP.
- clonar el repositorio dentro de la carpeta htdocs de XAMPP en Windows.
- Desde el directorio en el que se encuentra el composer: /informe-ventas/app/lib, abrir Windows PowerShell
- Una vez abierto el terminal con el comando composer install, instalar las dependencias (se generará la carpeta vendor con la librería de mpdf)
- Importar la BBDD ventas_db.sql que se encuentra en la carpeta informe-ventas a phpMyAdmin.
- Y ya podemos abrir nuestra página desde el navegador con la dirección: http://localhost/informe-ventas/index.php
