import './assets/main.css'
import Vue from 'vue'
import { createApp } from 'vue'
import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(router)

app.mount('#app')

Vue.use(VueRouter);

const routes = [
    { path: '/tarefaspendentes', component: TarefasPendentes }
]