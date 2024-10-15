## Inicializar el proyecto
### Primero se debe clonar el repositorio
```bash
git clone https://github.com/Emmanuel-Fregoso/CursoLaravel2.git
```
### Después se debe instalar las dependencias
```bash
composer install
```
```bash
npm install
```
### Crear un archivo .env
```bash
cp .env.example .env
```
### Generar una llave
```bash
php artisan key:generate
```
### Finalmente, Migrar las tablas
```bash
php artisan migrate
```
