-- Consulta que permite conocer cual es el producto que más stock tiene.
SELECT nombre FROM productos
ORDER BY stock DESC
LIMIT 1;


-- Consulta que permite conocer cual es el producto más vendido.
SELECT productos.nombre, SUM(ventas.cantidad) AS total_ventas
FROM ventas
INNER JOIN productos ON ventas.id_producto = productos.id
GROUP BY productos.nombre
ORDER BY total_ventas DESC
LIMIT 1;