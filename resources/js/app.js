import './bootstrap';
import App from './App.vue';
import { createApp} from "vue";
import loginPage from "./loginPage.vue";
import registerPage from "./registerPage.vue";

createApp(App).mount("#app");
createApp(loginPage).mount('#loginPage');
createApp(registerPage).mount('#registerPage')
