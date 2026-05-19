import './bootstrap';
import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
// import './bootstrap';

createInertiaApp({
    resolve: name => {
        const pages = import.meta.glob('./pages/**/*.vue', { eager: true })
        return pages[`./pages/${name}.vue`].default
    },
    setup({ el, app, props, plugin }) {
        createApp({ render: () => h(app, props) })
            .use(plugin)
            .mount(el)
    },
});