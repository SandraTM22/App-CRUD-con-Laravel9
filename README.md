## Bienvenido a mi proyecto de LARAVEL 9
En este proyecto desarrollo una aplicación de un blog, el cual podemos tanto crear, editar y borrar un post. Estos post se encuentran en una base de datos.Para ello he utilizado las siguientes herramientas y tecnologías:
       
  * PHPStormt
  * Laravel 9
  * Docker
  * MySQL
  * TailwindCss
  * AlpineJS
     
       
Para comenzar debemos tener Docker Compose instalado ( <a class="font-medium text-blue-900" href="https://docs.docker.com/compose/install/">Install Docker Compose</a>).
Y seguiremos las instrucciones que nos dá la documentacion de Laravel. <a class="font-medium text-blue-900" href="https://laravel.com/docs/9.x">Guia Laravel</a>. 
<code class="p-2 m-1 bg-gray-100">curl -s https://laravel.build/example-app | bash</code>
Con este comando crearemos nuestra carpeta llamada "example-app" con los directorios, accedemos a ella a través de consola y 'levantamos' el contenedor con el comando:
<code class="p-2 m-1 bg-gray-100">./vendor/bin/sail up</code>
Ya estariamos listos para seguir con el proyecto, creando los controller, views y models.
Si queremos introducir base de datos tenemos que trabajar con los Models, Seeder y Factory, es importante tener la base de datos ya creada y las variables de entorno bien definidas.
            
 Para introducir CSSse ha utilizado TailwindCSS, se ha instalado utilizando la guia para Laravel Mix
<a class="font-medium text-blue-900" href="https://tailwindcss.com/docs/guides/laravel#mix">TailwindCSS</a>. Y para JS se ha utilizado
<a class="font-medium text-blue-900" href="https://alpinejs.dev/essentials/installation">AlpineJS</a>.

   
