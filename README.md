<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 💰 My Wallet (En construcción)

**My Wallet** es una aplicación basada en Laravel diseñada para ayudar a los usuarios a gestionar sus finanzas de manera eficiente. Permite el seguimiento de ingresos, gastos, ahorros y proporciona cálculos automáticos para alcanzar objetivos de ahorro.

---

## 🚀 MVP: Producto Mínimo Viable

### 🎯 Funcionalidades del MVP

✅ Gestión de salarios: Control de ingresos mensuales.  
✅ Seguimiento de gastos: Registro y categorización de gastos.  
✅ Registro de ingresos extra: Cualquier ingreso adicional.  
✅ Gestión de ahorros: Monitoreo de ahorros actuales.  
✅ Cálculo de objetivo de ahorro: Calcula automáticamente el ahorro mensual necesario para alcanzar una meta (ej: €35,000 para el 1 de enero de 2025).  
✅ Dashboard amigable: Interfaz limpia para gestionar todos los registros financieros.  
✅ Autenticación de usuarios.  

---

## 📋 Lista de Tareas del MVP

### 1️⃣ Infraestructura

-   [x] Crear repositorio y estructura de carpetas en Laravel.
-   [x] Configurar base de datos y entorno (.env).
-   [x] Instalar Laravel Breeze para autenticación.

### 2️⃣ Modelado de Datos

-   [x] Crear migraciones y modelos para:
   -   [x] Users.
   -   [x] Salaries (salarios).
   -   [x] Expenses (gastos).
   -   [x] Extra Income (ingresos extra).
   -   [x] Savings (ahorros).

### 3️⃣ Lógica de Negocio

-   [x] CRUD de ingresos y gastos.
-   [x] Cálculo automático de objetivos de ahorro.
-   [x] Validación de datos financieros.

### 4️⃣ Interfaz de Usuario

-   [x] Dashboard principal con resumen financiero.
-   [x] Formularios para registro de ingresos y gastos.
-   [x] Vista de objetivos de ahorro.

### 5️⃣ Pruebas

-   [x] Validaciones principales.
-   [x] Revisar todo el flujo.

### 6️⃣ Documentación

-   [x] README inicial con pasos de despliegue.

---

## 🌱 Funcionalidades Post-MVP

✅ Reportes financieros avanzados.  
✅ Gráficos y estadísticas de gastos por categoría.  
✅ Exportación de datos a CSV/PDF.  
✅ Notificaciones de recordatorios de gastos.  
✅ Múltiples objetivos de ahorro simultáneos.  
✅ API RESTful para apps móviles.  
✅ Multi-divisa y conversión de monedas.  
✅ Planificación de presupuestos mensuales.  
✅ Categorías personalizables de gastos.

---

## 🗂️ Roadmap de Versiones

```text
IDEA ──> MVP ──> V1.0 ──> V1.1 ──> V1.2 ──> V2.0

MVP:
 └─ Gestión básica de finanzas
 └─ Cálculo de objetivos
 └─ Dashboard simple
 └─ Autenticación

V1.0:
 └─ Reportes avanzados
 └─ Gráficos y estadísticas
 └─ Exportación de datos

V1.1:
 └─ Notificaciones
 └─ Múltiples objetivos
 └─ Presupuestos mensuales

V1.2:
 └─ API RESTful
 └─ Multi-divisa
 └─ Categorías personalizables

V2.0:
 └─ Integración bancaria
 └─ Multi-tenant
 └─ App móvil

```

---

## 🛠️ Tecnologías Usadas

Laravel (backend)
MySQL (base de datos)
Laravel Breeze (autenticación)
TailwindCSS (styling)
Chart.js (gráficos)
PHPUnit (testing)

### Prerequisitos

PHP >= 8.1
MySQL 8.0 o mayor
Composer

---

## 🚀 Cómo empezar

### Clonar el repositorio:
```bash
git clone https://github.com/raortega8906/my-wallet.git
cd my-wallet
```

### Instalar dependencias PHP:
```bash
composer install
```

### Crear el archivo .env desde el ejemplo:
```bash
cp .env.example .env
```

### Generar la clave de aplicación:
```bash
php artisan key:generate
```

### Configurar las credenciales de la base de datos en el archivo .env.
Ejecutar las migraciones de la base de datos:
```bash
php artisan migrate --seed
```

### Iniciar el servidor de desarrollo:
```bash
php artisan serve
```

### Acceder a la aplicación en:
```bash
http://localhost:8000.
```

---

## 📫 Contribuciones
¡Las contribuciones son bienvenidas! Si deseas contribuir a este proyecto, por favor sigue estos pasos:

---

## Haz un fork del repositorio.
Crea una nueva rama (git checkout -b feature/nueva-caracteristica).
Realiza tus cambios y haz commit (git commit -m 'Añadir nueva característica').
Haz push a la rama (git push origin feature/nueva-caracteristica).
Crea un Pull Request.

---

## 🔒 Seguridad
Si descubres alguna vulnerabilidad de seguridad, por favor repórtala a your-email@example.com.

---

## 📄 Licencia
Este proyecto está licenciado bajo la Licencia MIT.

---

Gracias por tu interés en contribuir a este proyecto!