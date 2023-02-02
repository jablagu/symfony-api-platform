# Indicamos la imagen y la version de esta
FROM nginx:1.19

# Argumento que recibimos desde el exterior
ARG UID
# Este argumento le exponemos a nuestro codigo
EXPOSE $UID

# Añade un usuario dentro del contenedor con el nombre appuser. Con la palabra RUN
# ejecutamos un comando (para instalar librerias, crear carpetas, etc)
RUN adduser -u ${UID} --disabled-password --gecos "" appuser

COPY default.conf /etc/nginx/conf.d/