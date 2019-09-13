const mix = require('laravel-mix');

/**
 * Compila os assets da interface do portal
 *
 */
mix
.js('app/Interfaces/Portal/Resources/js/app.js', 'public/portal/js')
.sass('app/Interfaces/Portal/Resources/sass/app.scss', 'public/portal/css');

// End of file
