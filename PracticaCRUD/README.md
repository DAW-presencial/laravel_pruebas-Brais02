# Trabajo de CRUD, autorización y autenticación 
Enlace al servidor remoto: http://bvirlan.ifc33b.cifpfbmoll.eu/laravel/laravel_pruebas-Brais02/PracticaCRUD/public/
Enlace secundario al servidor remoto: http://bravel.servehalflife.com/

Para poder acceder a los permisos para crear, eliminar y editar es necesario entrar con un usuario llamado admin, por ello recomiendo usar
el usuario ya creado con estos datos:
Correo: admin@gmail.com
Contraseña: secretos

Dentro de este proyecto se puede encontrar todo lo que se solicita, menos subir los archivos, que ciertos datos aparezcan
en el edit, la insercción con Raw y QueryBuilder y la creación a través del seeder de 2 campos en la tabla.

## Copia del archivo .env
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:rWOHuhLca9GHl9utACMkGD8hqWxv8032/m67svuay6U=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=pgsql
DB_HOST=g1.ifc33b.cifpfbmoll.eu
DB_PORT=5432
DB_DATABASE=bvirlan_db
DB_USERNAME=bvirlan_usr
DB_PASSWORD=abc123.

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DRIVER=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=null
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
