(self["webpackChunk"] = self["webpackChunk"] || []).push([["/js/app"],{

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
Object(function webpackMissingModule() { var e = new Error("Cannot find module './App.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
/* harmony import */ var vue_router__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! vue-router */ "./node_modules/vue-router/dist/vue-router.js");
/* harmony import */ var vue_router__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(vue_router__WEBPACK_IMPORTED_MODULE_3__);
Object(function webpackMissingModule() { var e = new Error("Cannot find module 'vue-axios'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! axios */ "./node_modules/axios/dist/axios.js");
/* harmony import */ var axios__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(axios__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _routes__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./routes */ "./resources/js/routes.js");
__webpack_require__(/*! ./bootstrap */ "./resources/js/bootstrap.js");

window.Vue = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.js");





Vue.use((vue_router__WEBPACK_IMPORTED_MODULE_3___default()));
Vue.use(Object(function webpackMissingModule() { var e = new Error("Cannot find module 'vue-axios'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()), (axios__WEBPACK_IMPORTED_MODULE_1___default()));
var router = new (vue_router__WEBPACK_IMPORTED_MODULE_3___default())({
  mode: 'history',
  routes: _routes__WEBPACK_IMPORTED_MODULE_2__.routes
});
var app = new Vue({
  el: '#app',
  router: router,
  render: function render(h) {
    return h(Object(function webpackMissingModule() { var e = new Error("Cannot find module './App.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()));
  }
});

/***/ }),

/***/ "./resources/js/bootstrap.js":
/*!***********************************!*\
  !*** ./resources/js/bootstrap.js ***!
  \***********************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

window._ = __webpack_require__(/*! lodash */ "./node_modules/lodash/lodash.js");
/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = __webpack_require__(/*! axios */ "./node_modules/axios/dist/axios.js");
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */
// import Echo from 'laravel-echo';
// window.Pusher = require('pusher-js');
// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

/***/ }),

/***/ "./resources/js/routes.js":
/*!********************************!*\
  !*** ./resources/js/routes.js ***!
  \********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "routes": () => (/* binding */ routes)
/* harmony export */ });
/* harmony import */ var _components_AllCustomers_vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./components/AllCustomers.vue */ "./resources/js/components/AllCustomers.vue");
/* harmony import */ var _components_AllCustomers_vue__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_components_AllCustomers_vue__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _components_AddCustomer_vue__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./components/AddCustomer.vue */ "./resources/js/components/AddCustomer.vue");
/* harmony import */ var _components_AddCustomer_vue__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_components_AddCustomer_vue__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _components_EditCustomer_vue__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/EditCustomer.vue */ "./resources/js/components/EditCustomer.vue");
/* harmony import */ var _components_EditCustomer_vue__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_components_EditCustomer_vue__WEBPACK_IMPORTED_MODULE_2__);



var routes = [{
  name: 'home',
  path: '/',
  component: (_components_AllCustomers_vue__WEBPACK_IMPORTED_MODULE_0___default())
}, {
  name: 'add',
  path: '/add',
  component: (_components_AddCustomer_vue__WEBPACK_IMPORTED_MODULE_1___default())
}, {
  name: 'edit',
  path: '/edit/:id',
  component: (_components_EditCustomer_vue__WEBPACK_IMPORTED_MODULE_2___default())
}];

/***/ }),

/***/ "./resources/css/app.css":
/*!*******************************!*\
  !*** ./resources/css/app.css ***!
  \*******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/js/components/AddCustomer.vue":
/*!*************************************************!*\
  !*** ./resources/js/components/AddCustomer.vue ***!
  \*************************************************/
/***/ (() => {

throw new Error("Module parse failed: Unexpected token (1:0)\nYou may need an appropriate loader to handle this file type, currently no loaders are configured to process this file. See https://webpack.js.org/concepts#loaders\n> <template>\n|     <div>\n|         <h3 class=\"text-center\">Add Customer</h3>");

/***/ }),

/***/ "./resources/js/components/AllCustomers.vue":
/*!**************************************************!*\
  !*** ./resources/js/components/AllCustomers.vue ***!
  \**************************************************/
/***/ (() => {

throw new Error("Module parse failed: Unexpected token (1:0)\nYou may need an appropriate loader to handle this file type, currently no loaders are configured to process this file. See https://webpack.js.org/concepts#loaders\n> <template>\n|     <div>\n|         <h3 class=\"text-center\">All Customers</h3><br/>");

/***/ }),

/***/ "./resources/js/components/EditCustomer.vue":
/*!**************************************************!*\
  !*** ./resources/js/components/EditCustomer.vue ***!
  \**************************************************/
/***/ (() => {

throw new Error("Module parse failed: Unexpected token (1:0)\nYou may need an appropriate loader to handle this file type, currently no loaders are configured to process this file. See https://webpack.js.org/concepts#loaders\n> <template>\n|     <div>\n|         <h3 class=\"text-center\">Edit Customer</h3>");

/***/ })

},
0,[["./resources/js/app.js","/js/manifest","/js/vendor"],["./resources/css/app.css","/js/manifest","/js/vendor"]]]);