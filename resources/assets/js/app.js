
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import $ from 'jquery';
import FreeTransform from 'vue-free-transform';
window.$ = window.jQuery = $;

global.$ = global.jQuery = require('jquery');
import 'jquery-ui/ui/widgets/datepicker.js';
require('./bootstrap');
import  'bootstrap'

import BootstrapVue from 'bootstrap-vue'
//import * as uiv from 'uiv'
window.Vue = require('vue');
Vue.use(BootstrapVue);
Vue.use(FreeTransform);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
 
 
var menu = new Vue({
    el: '#Menu'
});
 
var app ;

Vue.component('Ani1', require('./components/Animacion/ani1.vue').default);


if($("#AUX").length!=0)  
app = new Vue({
    el: '#AUX'
});
window.onscroll = function() {myFunction()};

//Get the navbar
var navbar = document.getElementById("navbar");
var contentprin =  document.getElementById("principal");
//Get the offset position of the navbar
var sticky = navbar.offsetTop;

//Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
	if (window.pageYOffset >= sticky) {
		navbar.classList.add("sticky");
		contentprin.classList.add("content_prin");
		
	} else {
		navbar.classList.remove("sticky");
		contentprin.classList.remove("content_prin");
	}
	
}

