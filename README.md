docker pull manolo/examen-laravel:v1

docker run --name laravelex -ti -v /home/alumno/laravel:/var/www/html 
    -p 8000-8010:8000-8010 -p 5170-5175:5170-5175 manolo/examen-laravel:v1

cd laravel
laravel new examen //creo el proyecto
cd examen
sudo chown alumno:alumno -R* //doy privilegios para poder editar en PHPStorm

php artisan serve --host 0.0.0.0 //puerto que se ha abierto

php artisan make:migration basedatosExamen

php artisan migrate:fresh --seed

composer require laravel/breeze

php artisan breeze:install

npm install

laravel make:model Alumno --all

php artisan route:list
