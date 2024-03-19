import domReady from '@roots/sage/client/dom-ready';

// Import Bootstrap
import 'bootstrap';

import { themeSwitch } from './theme-switch.js';
import { Livewire } from '../../vendor/livewire/livewire/dist/livewire.js'

/**
 * Application entrypoint
 * https://discourse.roots.io/t/how-to-add-javascript-the-right-way-in-sage10/25047/4
 */
domReady(async () => {
    themeSwitch();
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);
