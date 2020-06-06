/*
 * Load JS Bootstrap
 */
require('./bootstrap');

/*
 * Load Vue and all Vue components in the /resources/js/components directory
 */
window.Vue = require('vue');

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

/*
 * Load Turbolinks and Start
 */
import Turbolinks from 'turbolinks';
Turbolinks.start();

/*
 * Mount the Vue instance with Turbolinks
 */
document.addEventListener('turbolinks:load', () => {
    new Vue({
        el: '#app',

        beforeMount() {
            if (this.$el.parentNode) {
                document.addEventListener('turbolinks:before-render', function teardown() {
                    document.removeEventListener('turbolinks:before-render', teardown);
                });

                this.$originalEl = this.$el.outerHTML;
            }
        },
        destroyed() {
            this.$el.outerHTML = this.$originalEl;
        }
    });
});
