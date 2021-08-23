Prueba Técnia de Luis Miguel Moya Correa para Legops

Prerequisitos:
 1.XAMMP
 2.Composer
 3.Git
Instrucciones 
 1.Una vez instalado XAMMP ir a C:\xampp\htdocs
 2.git clone https://github.com/luismoya91/prueba_legops
 3.cd prueba_legops
 4.Ejecutar el archivo prueba_etraining.sql ubicado en la carpeta database 
 5.Copiar configuracion de .env.example a .env 
 6.Ejecutar composer install
 7.Ejecutar php artisan migrate
 8.Ejecutar php artisan queue:work
 9.acceder a http://localhost/prueba_legops/public/api/ejecuciones/10
 10.Para validar los correos enviados ingresar a gmail

