Todos los archivos php (VISTAS) que se encuentran fuera son html que contienen código php para llenar la vista, por ende, deben ser .php de por sí.

Todos los archivos que se encuentran dentro de la carpeta "php" son controladores de consultas.

Todos los archivos en "lib" son .js de funcionamiento general de la página, los js que trabajan con el DOM se encuentran precisamente en la carpeta "js".

El dump de la base de datos se encuentra en "sql", contiene 6 tablas, 5 pertenecientes a las categorías de productos y una para clientes.

Cada categoría tiene su propia lectura de ID para el llenado del detalle de cada producto.

La idea principal de la página es ser un puente entre el cliente y el vendedor, posee registro para así obtener los datos de la persona que se interesó y ofrecerle descuentos. El login cumple la función básica de dar una bienvenida por el momento, más adelante se pretende saber qué productos visitó el comprador. 
Actualmente se ha decidido que la implementación de un carrito de compras es algo inseguro, cuando la PYME se encuentre en etapa de ganancias se tiene en cuenta pagar por un carrito de compras seguro o implentar el sitio en una plataforma que brinde confianza al consumidor y al vendedor. Entonces, se tiene como método de venta el contacto por redes sociales y el pago vía transferencias. El proyecto se acota a la Novena Región de La Araucanía, Temuco-Lautaro-Curacautín específicamente, como primer paso. 