/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter); 

/* import router from './routes/routes.js';  */
import Home from "./components/HomeComponent.vue"; 
import Job from "./components/JobsComponent.vue"; 
import JobsDetails from "./components/JobsDetails.vue"; 
import Login from "./components/Login.vue"; 
import Signup from "./components/Signup.vue"; 
// import '../sass/style.scss'
const routes = [
  
    {
         path: '/jobs',
          component: Job,
        
        },

        {
          path: '/job/:slug',
          component: JobsDetails,
          name:'jobsDetails'
        },

        {
          path: '/login',
          component: Login,
          name:'login'
        },

        {
          path: '/signup',
          component: Signup,
          name:'signup'
        },
  ]; 


  const router = new VueRouter({
    routes, // raccourci pour `routes: routes`
    hasbang:false, 
    mode:'history'
  }); 
  


const app = new Vue({
    el: '#app',
   components:{
      Home
   },
    router : router

});
