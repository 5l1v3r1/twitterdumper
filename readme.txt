TwitterDumper

Este proyecto tiene dos utilidades, una descarga tweets usando la api de twitter y los almacena en base de dato usando la linea de comandos.
La otra es una aplicacion para web que muestra el contenido de la base de datos.

Como mejora se puede usar almacenamiento en navegador si se soporta LocalStorage 
https://github.com/twitter/typeahead.js/blob/master/doc/bloodhound.md

También se puede considerar preconstruir los sets de datos (json) dependiendo de la frecuencia con la que vaya a cambiar el contenido,etc...



INSTALL 

# Componentes necesarios parar php 
php5-curl
php5-mysql
php5-memcached

# para debian / ubuntu 
apt-get install php5-curl php5-mysql php5-memcached
 
# memcached 
apt-get install memcached

# paquetes php de terceros, instalar via composer 
* smarty 
* doctrine dbal
* abraham's twitteroauth

curl -sS https://getcomposer.org/installer | php
composer install 

# Configuraciones / settings 
Es necesario configurar en app/Config/settings.php

* base de datos ( mysql ) usa doctrine 
* cuenta de twitter 
* cache memcached ( opcional ). 


Importar la estructura de la base de datos 
mysql -u USER -pPASSWORD DATABASE < db.sql

o desde la consola de mysql 
source db.sql


SETTINGS 

Para desactivar la cache hay que indicar $config['cache']['driver'] = false ;



RUN

# Para volcar tweets de twitter en la base de datos  
# tag : texto por el que buscar en twitter
# count : numero de tweets a descargar, limitado por la api de twitter. Por defecto 100
php Console/dumper.php TAG [count]


# start web server 
# arranca un servidor standalone en el puerto 9999
# abrir un navegador en http://localhost:9999

php -S localhost:9999 app/src 



