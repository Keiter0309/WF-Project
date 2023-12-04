import './bootstrap';
import App from './App.vue';
import { createApp } from "vue";
import loginPage from "./loginPage.vue";
import registerPage from "./registerPage.vue";
import music from "./musicPage.vue";
createApp(App).mount("#app");
createApp(loginPage).mount('#loginPage');
createApp(registerPage).mount('#registerPage')
createApp(music).mount('#music');

// export default new Router({
//     routes: [
//         {
//             path: '/',
//             name: 'loginPage',
//             component: loginPage
//         },
//         {
//             path: '/register',
//             name: 'registerPage',
//             component: registerPage
//         },
//         {
//
//         },
//
//     ]
// })
