Todos los archivos php (VISTAS) que se encuentran fuera son html que contienen c�digo php para llenar la vista, por ende, deben ser .php de por s�.

Todos los archivos que se encuentran dentro de la carpeta "php" son controladores de consultas.

Todos los archivos en "lib" son .js de funcionamiento general de la p�gina, los js que trabajan con el DOM se encuentran precisamente en la carpeta "js".

El dump de la base de datos se encuentra en "sql", contiene 6 tablas, 5 pertenecientes a las categor�as de productos y una para clientes.

Cada categor�a tiene su propia lectura de ID para el llenado del detalle de cada producto.

La idea principal de la p�gina es ser un puente entre el cliente y el vendedor, posee registro para as� obtener los datos de la persona que se interes� y ofrecerle descuentos. El login cumple la funci�n b�sica de dar una bienvenida por el momento, m�s adelante se pretende saber qu� productos visit� el comprador. 
Actualmente se ha decidido que la implementaci�n de un carrito de compras es algo inseguro, cuando la PYME se encuentre en etapa de ganancias se tiene en cuenta pagar por un carrito de compras seguro o implentar el sitio en una plataforma que brinde confianza al consumidor y al vendedor. Entonces, se tiene como m�todo de venta el contacto por redes sociales y el pago v�a transferencias. El proyecto se acota a la Novena Regi�n de La Araucan�a, Temuco-Lautaro-Curacaut�n espec�ficamente, como primer paso. 