import './bootstrap';
import '../css/app.css';
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap"

import {createApp, h} from 'vue';
import {createInertiaApp, Link} from '@inertiajs/vue3';
import {resolvePageComponent} from 'laravel-vite-plugin/inertia-helpers';
import {ZiggyVue} from '../../vendor/tightenco/ziggy/dist/vue.m';
import {QuillEditor} from '@vueup/vue-quill';

/* import the fontawesome core */
import {library} from '@fortawesome/fontawesome-svg-core';
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome';
import {faWhatsapp, faTwitter, faFacebook, faInstagram, faYoutube, faLinkedin} from '@fortawesome/free-brands-svg-icons';

/* import specific icons */
import {
    faBathtub,
    faBed,
    faRuler,
    faChevronRight,
    faChevronLeft,
    faArrowRight,
    faCheck,
    faPencil,
    faTrash,
    faEye,
    faHouse,
    faBlog,
    faUser,
    faTimes,
    faGripVertical,
} from '@fortawesome/free-solid-svg-icons';

library.add(
    faBathtub,
    faBed,
    faRuler,
    faChevronRight,
    faChevronLeft,
    faArrowRight,
    faCheck,
    faWhatsapp,
    faPencil,
    faTrash,
    faEye,
    faHouse,
    faBlog,
    faUser,
    faTimes,
    faFacebook,
    faInstagram,
    faYoutube,
    faLinkedin,
    faTwitter,
    faGripVertical,
)


const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} RedFox Argentina`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({el, App, props, plugin}) {
        return createApp({render: () => h(App, props)})
            .component('font-awesome-icon', FontAwesomeIcon)
            .component('InertiaLink', Link)
            .component('QuillEditor', QuillEditor)
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
