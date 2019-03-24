import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter);

import Dashboard from '../Views/DashBoard.vue';
import Profile from '../views/Profile.vue'
import Registration from '../views/Registration.vue'
import Login from '../views/Login.vue'
import BookDetail from '../views/BookDetail.vue'
import CreateBook from '../views/CreateBook.vue'

const routes = [
    { path:'/', name: 'Dashboard', component: Dashboard},
    { path:'/login', name: 'Login', component: Login},
    { path:'/registration', name: 'Registration', component: Registration},
    { path:'/profile', name: 'Profile', component: Profile },
    { path:'/book-detail', name: 'BookDetail', component: BookDetail },
    { path:'/create-Book', name: 'CreateBook', component: CreateBook },
    { path:'/create-Book', name: 'CreateBook', component: CreateBook },

];

 const  router = new VueRouter({
     mode: 'history',
     base:'/',
     routes
});
export default router;
