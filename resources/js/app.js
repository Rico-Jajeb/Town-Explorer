import './bootstrap';
import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy';

//Kanan Primevue ini 
import PrimeVue from 'primevue/config';
import Aura from '@primeuix/themes/aura';

// Tas adi an kanan text box ini gin global para matawag bis ngain
import FloatLabel from 'primevue/floatlabel';
import InputText from 'primevue/inputtext';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) });

        app.use(plugin);
        app.use(ZiggyVue);
        app.use(PrimeVue, {
            theme: {
                preset: Aura
            }
        });

        // amo ini an component para han global input box
        app.component('FloatLabel', FloatLabel);
        app.component('InputText', InputText);
        app.mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
