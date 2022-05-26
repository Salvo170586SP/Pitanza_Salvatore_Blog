import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

//importo i componenti
import HomePage from './components/pages/HomePage.vue';
import PostDetail from './components/pages/PostDetail.vue';
import ContactPage from './components/pages/ContactPage.vue';
import HomePortfolio from './components/pages/Portfolio/HomePortfolio.vue';
import ProjectDetail from './components/pages/Portfolio/ProjectDetail.vue';
import HomeBio from './components/pages/Bio/HomeBio.vue';

const router = new VueRouter({
    mode: 'history',
    linkExactActiveClass: 'active',
    routes: [
        { path: '/', component: HomePage, name: 'home'},
        { path: '/posts/:id', component: PostDetail, name: 'post-detail'},
        { path: '/contactme', component: ContactPage, name: 'contact-page'},
        { path: '/home-portfolio', component: HomePortfolio, name: 'home-portfolio'},
        { path: '/projects/:id', component: ProjectDetail, name: 'project-detail'},
        { path: '/home-bio', component: HomeBio, name: 'home-bio'},
    ],
})

export default router;