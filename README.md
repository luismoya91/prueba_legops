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
 5.php artisan migrate
 6.Copiar configuracion de .env.example a .env 
 7.composer install
 8.Ejecutar php artisan migrate
 9.Ejecutar php artisan queue:work
 10.acceder a https://localhost/prueba_legops/public/api/ejecuciones/10
 11.Para validar los correos enviados ingresar a gmail
 Usuario: pruebalegops@gmail.com
 Contraseña: Colombia123

