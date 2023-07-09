# Cafeteria | Konecta

## Descripción del proyecto
Sistema de inventario para cafetería en sede Konecta y venta de productos, reporte de ventas.

## Instrucciones de instalación

1. Descarga e instala XAMPP en tu computadora siguiendo las instrucciones en su sitio web oficial (https://www.apachefriends.org/index.html).

2. Inicia XAMPP y asegúrate de que los servicios de Apache y MySQL estén activos.

3. Descarga el código fuente del proyecto y descomprímelo en la carpeta htdocs de XAMPP. Si no tienes una carpeta htdocs, crea una en la raíz de la instalación de XAMPP.

4. Crea una base de datos en MySQL con el nombre que desees para el proyecto. Puedes utilizar la herramienta phpMyAdmin que se incluye con XAMPP para crear la base de datos.

5. Importa las tablas del proyecto en la base de datos que acabas de crear. Puedes hacerlo a través de la herramienta phpMyAdmin seleccionando la opción "Importar" en el menú.

6. Configura la conexión a la base de datos en el archivo de configuración del proyecto. Por lo general, este archivo se llama database.php o similar y se encuentra en la raíz del proyecto. Asegúrate de que la configuración de la conexión a la base de datos coincida con la que has establecido anteriormente.

7. Abre el proyecto en tu navegador web accediendo a http://localhost/nombre-del-proyecto. Asegúrate de que Apache y MySQL estén activos y de que la carpeta del proyecto se encuentre dentro de la carpeta htdocs de XAMPP.

8. Si todo ha ido bien, deberías poder acceder al proyecto en tu navegador y utilizarlo como se describe en las instrucciones de uso. Espero que estas instrucciones te sean de ayuda. Si tienes alguna otra pregunta o necesitas más ayuda, no dudes en preguntar.

## Ejemplos de uso
Inicialmente se debe tener productos registrados en el sistema, para poder realizar una venta, para esto:
1. Seleccionamos la opción que dice productos, luego en agregar nuevo producto, editar o eliminar el mismo, dependiendo de la necesidad del usuario.
2. Si la categoría a seleccionar no está en el select, se debe registrar de forma manual en la base de datos.
3. Si el producto está registrado, para realizar la venta en el buscador escribe el número de identificación del producto, luego en la tabla selecciona la cantidad de producto y por último seleccionas el botón vender.

## Autor
Mauro Andrés Rodriguez Goenaga | mauro.rogo2@gmail.com
