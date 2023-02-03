#Udemy course Symfony Api Platform

>A Symfony project

##Anotaciones
>Para la configuración de x-debug, en caso de usar Visual Studio Code, consultar el siguiente enlace: https://dev.to/fuenrob/configurar-docker-con-xdebug-y-vs-code-252h

>Nuestro launch.json tendrá el siguiente contenido:
{
    "version": "0.2.0",
    "configurations": [
        {
            "name": "Listen for XDebug",
            "type": "php",
            "request": "launch",
            "port": 9003,
            "pathMappings": {
                "/appdata/www": "/Users/javier/code/symfony-api-platform/api"
            },
            "xdebugSettings": {
                "max_data": 65535,
                "show_hidden": 1,
                "max_children": 100,
                "max_depth": 5
            }
        }
    ]
}