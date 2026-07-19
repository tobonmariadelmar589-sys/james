# Terrario — Landing page (Laravel + BEM)

Landing page ficticia para "Terrario", una marca de terrarios cerrados y autosuficientes.
Construida con Blade puro y CSS con metodología BEM (sin frameworks CSS), siguiendo el
taller de nomenclatura BEM: bloques, elementos y modificadores en cada componente.

## Cómo instalarlo

```bash
composer create-project laravel/laravel terrario
cd terrario
```

Luego copia estas carpetas de este paquete sobre el proyecto recién creado,
reemplazando lo que ya exista:

```
app/Http/Controllers/LandingController.php   →  app/Http/Controllers/
routes/web.php                               →  routes/  (reemplaza el archivo)
resources/views/landing.blade.php            →  resources/views/
resources/views/layouts/app.blade.php        →  resources/views/layouts/
resources/views/partials/                    →  resources/views/partials/
public/css/                                  →  public/css/
public/js/                                   →  public/js/
```

Corre el servidor:

```bash
php artisan serve
```

Abre `http://127.0.0.1:8000`.

No se necesita build step (Vite/npm) porque el CSS es puro y se sirve directo desde
`public/css/main.css`. Las fuentes (Fraunces, Work Sans, IBM Plex Mono) se cargan desde
Google Fonts vía `<link>` en el layout.

## Estructura BEM

Cada sección de la página es un bloque independiente. Nomenclatura usada:

| Bloque | Elementos destacados | Modificadores |
|---|---|---|
| `site-header` | `__logo`, `__nav`, `__list`, `__item`, `__link`, `__cta`, `__toggle` | `__item--active`, `__nav--open` |
| `hero` | `__copy`, `__title`, `__actions`, `__specimen`, `__jar`, `__tag` | `__cta--primary`, `__cta--ghost` |
| `feature-grid` / `feature-card` | `__title`, `__code`, `__description` | `feature-card--featured` |
| `testimonial-section` / `testimonial` | `__quote`, `__author`, `__avatar` | `testimonial--default`, `testimonial--quote` |
| `pricing` / `pricing-plan` | `__name`, `__price`, `__list`, `__cta` | `pricing-plan--featured` |
| `contact-form` | `__field`, `__label`, `__input`, `__textarea`, `__submit` | `__field--error`, `__submit--disabled` |
| `notification` | `__icon`, `__message`, `__close` | `--success`, `--error`, `--warning`, `--info`, `--enter` |
| `site-footer` | `__brand`, `__group`, `__list`, `__link` | — |

Reglas seguidas del taller: minúsculas y guiones simples para nombres compuestos
(`site-header`, `feature-card`), doble guion bajo para elementos, doble guion medio
para modificadores, sin anidar elementos (`.feature-card__title`, nunca
`.feature-grid__card__title`), y nombres que describen propósito
(`--featured`, `--error`) en vez de apariencia.

## Signature visual

El elemento distintivo de la página es la "ficha de espécimen": una etiqueta tipo
catálogo botánico (`hero__tag`, `feature-card__code`, `pricing-plan__code`) que aparece
en varias secciones como un sistema de clasificación consistente, en vez de los
típicos marcadores numerados 01/02/03.

## Validación del formulario de contacto

`LandingController@contact` valida `name`, `email` y `message` con las reglas nativas
de Laravel. Si hay errores, Blade agrega automáticamente la clase
`contact-form__field--error` al campo correspondiente y muestra el mensaje en
`.contact-form__error-message`. Si el envío es exitoso, se muestra el bloque
`notification--success` con animación de entrada y auto-cierre a los 6 segundos
(`public/js/terrario.js`).
