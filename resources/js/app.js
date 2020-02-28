require('./bootstrap');

window.Vue = require('vue');

/**
 Componentes Administrador
 */

Vue.component('inicio-component', require('./components/inicioComponent.vue').default);
Vue.component('distritos-component', require('./components/distritosNComponent.vue').default);
Vue.component('juzgados-component', require('./components/juzgadosNComponent.vue').default);
Vue.component('materias-component', require('./components/materiasNComponent.vue').default);
Vue.component('juicios-component', require('./components/juiciosNComponent.vue').default);
Vue.component('variables-component', require('./components/variablesNComponent.vue').default);
Vue.component('valoresvariables-component', require('./components/valoresvariablesNComponent.vue').default);
Vue.component('expedientesadmin-component', require('./components/expedientesAdminComponent.vue').default);
Vue.component('modulounoactualizar-component', require('./components/modulounoactualizarComponent.vue').default);
Vue.component('modulodosactualizar-component', require('./components/modulodosactualizarComponent.vue').default);
Vue.component('modulodiezactualizar-component', require('./components/modulodiezactualizarComponent.vue').default);

/**
 Componentes Oficial de partes
 */

Vue.component('expedientes-component', require('./components/expedientesComponent.vue').default);
Vue.component('modulouno-component', require('./components/modulounoComponent.vue').default);
Vue.component('modulodos-component', require('./components/modulodosComponent.vue').default);


/**
 Componentes Secretario
 */

Vue.component('modulo2-component', require('./components/moduloDossComponent.vue').default);
Vue.component('modulotres-component', require('./components/moduloTresComponent.vue').default);
Vue.component('modulocuatro-component', require('./components/moduloCuatroComponent.vue').default);
Vue.component('modulocinco-component', require('./components/moduloCincoComponent.vue').default);
Vue.component('moduloseis-component', require('./components/moduloSeisComponent.vue').default);
Vue.component('modulosiete-component', require('./components/moduloSieteComponent.vue').default);
Vue.component('modulonueve-component', require('./components/moduloNueveComponent.vue').default);





/**
 Componentes Contralor
 */
Vue.component('expedintescontraloria-component', require('./components/expedientesContraloriaComponent.vue').default);
Vue.component('veruno-component', require('./components/contraloriaModuloUnoComponent.vue').default);
Vue.component('verdos-component', require('./components/contraloriaModuloDosComponent.vue').default);
Vue.component('verdiez-component', require('./components/contraloriaModuloDiezComponent.vue').default);
Vue.component('modulodosc-component', require('./components/moduloDosContralorComponent.vue').default);
Vue.component('modulotresc-component', require('./components/moduloTresContralorComponent.vue').default);
Vue.component('modulocuatroc-component', require('./components/moduloCuatroContralorComponent.vue').default);
Vue.component('modulocincoc-component', require('./components/moduloCincoContralorComponent.vue').default);
Vue.component('moduloseisc-component', require('./components/moduloSeisContralorComponent.vue').default);
Vue.component('modulosietec-component', require('./components/moduloSieteContralorComponent.vue').default);
Vue.component('modulonuevec-component', require('./components/moduloNueveContralorComponent.vue').default);


/**
 Componentes Diligenciario
 */
Vue.component('modulodiez-component', require('./components/modulodiezComponent.vue').default);


Vue.component('pagination', require('laravel-vue-pagination'));



const app = new Vue({
    el: '#app'
});
