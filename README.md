# Artworks
Proyecto basado en un gestor de museos y obras de arte realizado en Laravel 5.5 y Bootstrap v4.0.

**Instalación**

Para poder usar la aplicacion es necesario que instale previamente PHP, Composer , Vagrant , Virtualbox y Node.js.

**PHP**

Link para instalar _PHP:_ http://php.net/manual/es/install.windows.php

**Composer**

Link para instalar _Composer:_ https://getcomposer.org/download/

**Vagrant**

Link para instalar _Vagrant:_ https://www.vagrantup.com/downloads.html

**Node.js**

Link para instalar _npm:_ https://nodejs.org/es/download/package-manager/

**Homestead**

Link para instalar _homestead:_ https://laravel.com/docs/5.5/homestead

**Tutorial paso a paso de la instalación por si no ha quedado claro:**

https://medium.com/eaimanshoshi/i-am-going-to-write-down-step-by-step-procedure-to-setup-homestead-for-laravel-5-2-17491a423aa

Una vez que se hayan completado todos los pasos, procedemos a descargarnos el proyecto en la carpeta que haya usted determinado para los proyectos Homestead.

_git clone https://github.com/Raojayou/Artworks.git_

**Configuración**

Una vez descargado el proyecto, pasamos a la configuración, todos los pasos pueden ser modificardos por el usuario.

**Homestead.yaml**

En primer lugar modificaremos el archivo Homestead.yaml ubicado en la carpeta Homestead.

**Hosts**

En segundo lugar modificaremos el archivo hosts con permisos de administrador.

En _Windows_ la ruta sería: C:\Windows\System32\drivers\etc

En _Linux_ se encuentra en: etc/hosts

Una vez realizados todos estos pasos, nos dispondremos a encender la máquina virtual, al añadir una base de datos, será necesario utilizar el siguiente comando en la carpeta de _Homestead:_

_vagrant up --provision_

El resto de ocasiones que queramos iniciar vagrant, será necesario utilizar sólo este comando:

_vagrant up_

**.env**

Una vez realizado todos estos pasos, nos faltará configurar el archivo _.env_ del proyecto **Artworks.** 

Para ello podemos renombramos el archivo _.env.example_ o creamos un archivo _.env_, en cualquier caso, la configuración deberá ser así:

Para generar 'APP_KEY, deberá utilizar el siguiente comando:'

_php artisan key:generate_

**Base de datos**

Para la configuración de la base de datos, utilizará los datos del archivo _.env._

Accedemos a _Database -> New -> Data Source -> MySQL_

**Instalación de los componentes de Artworks**

Para instalar los componentes necesarios para que funcione correctamente el proyecto, se deberán utilizar los siguientes comandos:

_composer install_

_npm run dev_

Una vez que estemos conectados a la _Base de Datos_ y todos los componentes estén ya instalados, el usuario podrá utilizar el siguiente comando en el proyecto, este comando creará datos para la base de datos usando factorías, con información generada aleatoriamente con **$faker**.

_php artisan migrate:refresh --seed_