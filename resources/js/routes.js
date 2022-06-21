import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//importo i componenti
import Home from './components/pages/HomePage/Home.vue';
import ContactPage from './components/pages/ContactPage.vue';
import ProjectDetail from './components/pages/HomePage/ProjectDetail.vue';
import Biograpy from './components/pages/Biograpy.vue';

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        { path: '/', component: Home, name: 'home'},
        { path: '/contactme', component: ContactPage, name: 'contact-page'},
        { path: '/projects/:id', component: ProjectDetail, name: 'project-detail'},
        { path: '/biograpy', component: Biograpy, name: 'biograpy'},
    ],
    scrollBehavior(to, from, savedPosition) {
        return { x: 0, y: 0 }
    }
})

export default router;