# Proyecto Fory Factory

## Requisitos previos

Asegúrate de tener instalados los siguientes programas:

- **PHP** (>= 8.0)
- **Composer** (https://getcomposer.org/)
- **Node.js** y **npm** (https://nodejs.org/)

---

## Instalación en Windows

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/eemi1/proyectoEgreso.git
   cd proyectoEgreso
   ```

2. **Instala las dependencias de PHP:**
   ```bash
   composer install
   ```

3. **Instala las dependencias de Node.js:**
   ```bash
   npm install
   ```

4. **Copia el archivo de entorno y genera la clave de la app:**
   ```bash
   copy .env.example .env
   php artisan key:generate
   ```

5. **Configura la base de datos** en el archivo `.env` según tu entorno.

6. **Ejecuta las migraciones:**
   ```bash
   php artisan migrate
   ```

7. **Compila los assets de frontend:**
   ```bash
   npm run dev
   ```

8. **Inicia el servidor de desarrollo de Laravel:**
   ```bash
   php artisan serve
   ```

---

## Instalación en Linux

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/eemi1/proyectoEgreso.git
   cd proyectoEgreso
   ```

2. **Instala las dependencias de PHP:**
   ```bash
   composer install
   ```

3. **Instala las dependencias de Node.js:**
   ```bash
   npm install
   ```

4. **Copia el archivo de entorno y genera la clave de la app:**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configura la base de datos** en el archivo `.env` según tu entorno.

6. **Ejecuta las migraciones:**
   ```bash
   php artisan migrate
   ```

7. **Compila los assets de frontend:**
   ```bash
   npm run dev
   ```

8. **Inicia el servidor de desarrollo de Laravel:**
   ```bash
   php artisan serve
   ```

---

## Notas
- Si tienes problemas con permisos en Linux, puedes usar `sudo` para instalar dependencias.
- Asegúrate de tener configurada la base de datos y los datos de acceso en el archivo `.env`.
- Para producción, utiliza `npm run build` en vez de `npm run dev`.

---

¡Listo! Ahora puedes acceder a la aplicación en [http://localhost:8000](http://localhost:8000) 