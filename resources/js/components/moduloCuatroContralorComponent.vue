<template>
  <div>
    <div class="modal-content"> <br>
      <form @submit.prevent="editar(modulocuatro)" v-if="editarActivo">
      <h5 class="text-center"> Actualizar Información <i> (Módulo 4) </i> </h5> <br>
        <div class="container">
         
         <div class="form-group">
            <select id="id_expediente" class="form-control" v-model="modulocuatro.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
          
            <div class="form-row">

              <div class="col-md-4">
               <label for="inputState1">Se ofrecen pruebas:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.se_ofrecen_pruebas">
                  <option selected>Seleccionar</option>
                  <option>Si</option>
                  <option>No</option>
                </select>
              </div>

              <div class="col-md-4">
               <label for="inputState1">Parte que ofrece la/s prueba/s:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.parte_que_ofrece_prueba">
                  <option selected>Seleccionar</option>
                  <option>1.- Parte actora</option>
                  <option>2.- Parte demandada</option>
                </select>
              </div>

            <div class="col-md-4">
              <label for="inputState">Fecha en que se ofrecen las pruebas:</label>
              <input type="date" class="form-control" v-model="modulocuatro.fecha_ofrecen_pruebas">
            </div>
            
            </div>

            <div class="form-row">
            
              <div class="col-md-4">
                <label for="inputState">Fecha de admisión de las pruebas:</label>
                <input type="date" class="form-control" v-model="modulocuatro.fecha_admision_pruebas">
              </div>

              <div class="col-md-4">
               <label for="inputState1">Prueba/s ofrecida/s en:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.pruebas_ofrecidas_en">
                  <option selected>Seleccionar</option>
                  <option>1.- Juicio</option>
                  <option>2.- Reconvención</option>
                </select>
              </div>
            
             <div class="form-row">
                <div class="col-md-4">
                 <label for="inputState">Tipo de prueba/s ofrecida/s:</label>
                    <vue-select class="vue-select1"  label="valor_variable" :options='
                      pruebas' :model.sync="result1" v-model="modulocuatro.tipo_pruebas_ofrecidas"></vue-select>
                </div>
             </div>

            </div>

            <div class="form-row">
              
              <div class="form-row">
                <div class="col-md-4">
                 <label for="inputState">Tipo de prueba/s admitida/s:</label>
                    <vue-select class="vue-select1"  label="valor_variable" :options='
                      pruebas' :model.sync="result1" v-model="modulocuatro.tipo_pruebas_admitidas"></vue-select>
                </div>
             </div>

             <div class="form-row">
                <div class="col-md-4">
                 <label for="inputState">Tipo de prueba/s desahogada/s:</label>
                    <vue-select class="vue-select1"  label="valor_variable" :options='
                      pruebas' :model.sync="result1" v-model="modulocuatro.tipo_pruebas_desahogadas"></vue-select>
                </div>
             </div>

             <div class="col-md-4">
                <label for="inputState">Fecha de desahogo de pruebas admitidas:</label>
                <input type="date" class="form-control" v-model="modulocuatro.fecha_desahogo_pruebas">
              </div>


            </div>

            <div class="form-row">

              <div class="col-md-4">
                <label for="inputState">Número de pruebas desahogadas fuera del Tribunal:</label>
              <input type="number" class="form-control" v-model="modulocuatro.numero_pruebas_desahogadas">
              </div>

              <div class="col-md-4">
                <label for="inputState">Fecha de aceptación de cargo de peritos para pruebas periciales:</label>
                <input type="date" class="form-control" v-model="modulocuatro.fecha_aceptacion_cargo  ">
              </div>

              <div class="col-md-4">
                <label for="inputState">Fecha en que peritos rinden informe respecto de las pruebas periciales:</label>
                <input type="date" class="form-control" v-model="modulocuatro.fecha_perritos_rinden">
              </div>


            </div>

            <div class="form-row">

               <div class="col-md-4">
               <label for="inputState1">Juez designa perito en discordia:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.juez_designa_perito">
                  <option selected>Seleccionar</option>
                  <option>Si</option>
                  <option>No</option>
                </select>
              </div>

               <div class="col-md-4">
               <label for="inputState1">Se renuncia a las pruebas:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.se_renuncia_pruenas">
                  <option selected>Seleccionar</option>
                  <option>Si</option>
                  <option>No</option>
                </select>
              </div>

              <div class="col-md-4">
               <label for="inputState1">Parte que renuncia a la/s prueba/s:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.parte_renuncia_pruebas">
                  <option selected>Seleccionar</option>
                  <option>1.- Parte actora</option>
                  <option>2.- Parte demandada</option>
                </select>
              </div>


            </div>

            <div class="form-row">
              
               <div class="form-row">
                <div class="col-md-4">
                 <label for="inputState">Tipo de prueba/s a la/s que se renuncia:</label>
                    <vue-select class="vue-select1"  label="valor_variable" :options='
                      pruebas' :model.sync="result1" v-model="modulocuatro.tipo_pruebas_renuncia"></vue-select>
                </div>
             </div>
            </div>

              <div class="col-md-4">
               <label for="inputState1">Motivo por el que renuncian a la/s prueba/s:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.motivos_renuncia_pruebas">
                  <option selected>Seleccionar</option>
                  <option>1.- Por acuerdo entre las partes</option>
                  <option>22.- Otra</option>
                </select>
              </div>


          <center>    
          <button class="btn btn-primary" type="submit"> Actualizar </button>
          <button class="btn btn-danger" type="submit" @click="cancelarEdicion()"> Cancelar </button>
          </center> <br>
        </div>     
      </form>  

      <form @submit.prevent="agregar" v-else>
      <h4 class="text-center"> Datos de pruebas (Módulo 4)  </h4> <br>
        <div class="container">
         
                  <div class="form-group">
            <select id="id_expediente" class="form-control" v-model="modulocuatro.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
          
            <div class="form-row">

              <div class="col-md-4">
               <label for="inputState1">Se ofrecen pruebas:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.se_ofrecen_pruebas">
                  <option selected>Seleccionar</option>
                  <option>Si</option>
                  <option>No</option>
                </select>
              </div>

              <div class="col-md-4">
               <label for="inputState1">Parte que ofrece la/s prueba/s:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.parte_que_ofrece_prueba">
                  <option selected>Seleccionar</option>
                  <option>1.- Parte actora</option>
                  <option>2.- Parte demandada</option>
                </select>
              </div>

            <div class="col-md-4">
              <label for="inputState">Fecha en que se ofrecen las pruebas:</label>
              <input type="date" class="form-control" v-model="modulocuatro.fecha_ofrecen_pruebas">
            </div>
            
            </div>

            <div class="form-row">
            
              <div class="col-md-4">
                <label for="inputState">Fecha de admisión de las pruebas:</label>
                <input type="date" class="form-control" v-model="modulocuatro.fecha_admision_pruebas">
              </div>

              <div class="col-md-4">
               <label for="inputState1">Prueba/s ofrecida/s en:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.pruebas_ofrecidas_en">
                  <option selected>Seleccionar</option>
                  <option>1.- Juicio</option>
                  <option>2.- Reconvención</option>
                </select>
              </div>
            
             <div class="form-row">
                <div class="col-md-4">
                 <label for="inputState">Tipo de prueba/s ofrecida/s:</label>
                    <vue-select class="vue-select1"  label="valor_variable" :options='
                      pruebas' :model.sync="result1" v-model="modulocuatro.tipo_pruebas_ofrecidas"></vue-select>
                </div>
             </div>

            </div>

            <div class="form-row">
              
              <div class="form-row">
                <div class="col-md-4">
                 <label for="inputState">Tipo de prueba/s admitida/s:</label>
                    <vue-select class="vue-select1"  label="valor_variable" :options='
                      pruebas' :model.sync="result1" v-model="modulocuatro.tipo_pruebas_admitidas"></vue-select>
                </div>
             </div>

             <div class="form-row">
                <div class="col-md-4">
                 <label for="inputState">Tipo de prueba/s desahogada/s:</label>
                    <vue-select class="vue-select1"  label="valor_variable" :options='
                      pruebas' :model.sync="result1" v-model="modulocuatro.tipo_pruebas_desahogadas"></vue-select>
                </div>
             </div>

             <div class="col-md-4">
                <label for="inputState">Fecha de desahogo de pruebas admitidas:</label>
                <input type="date" class="form-control" v-model="modulocuatro.fecha_desahogo_pruebas">
              </div>


            </div>

            <div class="form-row">

              <div class="col-md-4">
                <label for="inputState">Número de pruebas desahogadas fuera del Tribunal:</label>
              <input type="number" class="form-control" v-model="modulocuatro.numero_pruebas_desahogadas">
              </div>

              <div class="col-md-4">
                <label for="inputState">Fecha de aceptación de cargo de peritos para pruebas periciales:</label>
                <input type="date" class="form-control" v-model="modulocuatro.fecha_aceptacion_cargo  ">
              </div>

              <div class="col-md-4">
                <label for="inputState">Fecha en que peritos rinden informe respecto de las pruebas periciales:</label>
                <input type="date" class="form-control" v-model="modulocuatro.fecha_perritos_rinden">
              </div>


            </div>

            <div class="form-row">

               <div class="col-md-4">
               <label for="inputState1">Juez designa perito en discordia:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.juez_designa_perito">
                  <option selected>Seleccionar</option>
                  <option>Si</option>
                  <option>No</option>
                </select>
              </div>

               <div class="col-md-4">
               <label for="inputState1">Se renuncia a las pruebas:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.se_renuncia_pruenas">
                  <option selected>Seleccionar</option>
                  <option>Si</option>
                  <option>No</option>
                </select>
              </div>

              <div class="col-md-4">
               <label for="inputState1">Parte que renuncia a la/s prueba/s:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.parte_renuncia_pruebas">
                  <option selected>Seleccionar</option>
                  <option>1.- Parte actora</option>
                  <option>2.- Parte demandada</option>
                </select>
              </div>


            </div>

            <div class="form-row">
              
               <div class="form-row">
                <div class="col-md-4">
                 <label for="inputState">Tipo de prueba/s a la/s que se renuncia:</label>
                    <vue-select class="vue-select1"  label="valor_variable" :options='
                      pruebas' :model.sync="result1" v-model="modulocuatro.tipo_pruebas_renuncia"></vue-select>
                </div>
             </div>
            </div>

              <div class="col-md-4">
               <label for="inputState1">Motivo por el que renuncian a la/s prueba/s:</label>
                <select id="inputState1" class="form-control" v-model="modulocuatro.motivos_renuncia_pruebas">
                  <option selected>Seleccionar</option>
                  <option>1.- Por acuerdo entre las partes</option>
                  <option>22.- Otra</option>
                </select>
              </div>


          <center>    
          <button class="btn btn-danger" type="submit"> Guardar Registro </button> 
          </center><br>
        </div>     
      </form>
    </div>

    <div class="container">  
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
              <tr>
                <th scope="col"> Número de expediente </th>
                <th scope="col"> Ofrecen-pruebas </th>
                <th scope="col"> Parte-ofrece </th>
                <th scope="col"> Fecha-ofrece </th>
                <th scope="col"> Fecha-admisión </th>
                <th scope="col"> Pruebas-ofrecidas </th>
                <th scope="col"> Tipo-pruebas </th>
                <th scope="col"> Tipo-admitidas </th>
                <th scope="col"> Tipo-desahogadas </th>
                <th scope="col"> Fecha-desahogadas </th>
                <th scope="col"> Numero-desahogadas </th>
                <th scope="col"> Fecha-aceptación </th>
                <th scope="col"> Fecha-peritos </th>
                <th scope="col"> Juez-designa </th>
                <th scope="col"> Renuncia </th>
                <th scope="col"> Parte </th>
                <th scope="col"> Tipo </th>
                <th scope="col"> Motivos </th>
                <th scope="col"> Actualizar - Registro</th>
                <th scope="col"> Eliminar - Registro</th>
              </tr>
              <tr v-for="(item, index) in modulocuatros.data" :key="index">
                <td>{{item.numero_expediente}}</td>
                <td>{{item.se_ofrecen_pruebas}}</td>
                <td>{{item.parte_que_ofrece_prueba}}</td>
                <td>{{item.fecha_ofrecen_pruebas}}</td>
                <td>{{item.fecha_admision_pruebas}}</td>
                <td>{{item.pruebas_ofrecidas_en}}</td>
                <td>{{item.tipo_pruebas_ofrecidas}}</td>
                <td>{{item.tipo_pruebas_admitidas}}</td>
                <td>{{item.tipo_pruebas_desahogadas}}</td>
                <td>{{item.fecha_desahogo_pruebas}}</td>
                <td>{{item.numero_pruebas_desahogadas}}</td>
                <td>{{item.fecha_aceptacion_cargo}}</td>
                <td>{{item.fecha_perritos_rinden}}</td>
                <td>{{item.juez_designa_perito}}</td>
                <td>{{item.se_renuncia_pruenas}}</td>
                <td>{{item.parte_renuncia_pruebas}}</td>
                <td>{{item.tipo_pruebas_renuncia}}</td>
                <td>{{item.motivos_renuncia_pruebas}}</td>
                <td><button class="btn btn-primary" @click="editarFormulario(item)">Actualizar</button></td>
              <td><button class="btn btn-danger"  @click="confirmar(item.id_modulo)">Eliminar</button></td>
              </tr>
          </thead>   
        </table>


       <!-- Paginador -->
       <pagination :data="modulocuatros" @pagination-change-page="getResults"> </pagination>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalModuloUno" tabindex="-1" role="dialog" aria-labelledby="exampleModalModuloUnoLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalModuloUnoLabel">Confirmar elminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" id="id">
                ¿Estas seguro(a) de eliminar el registro seleccionado?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="eliminarModulouno('cancelar')">Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" @click="eliminarModulouno('aceptar')">Eliminar</button>
              </div>
            </div>
          </div>
        </div>
        <!--Termina modal -->
      </div>  
    </div>    
  </div>            
</template>

<script>
  import vueSelect from 'vue-select'
  Vue.component('vue-select', vueSelect)
  import 'vue-select/dist/vue-select.css'
    export default {
       data(){
            return{
                expedientes: [],
                modulocuatros: {},
                modulocuatro: {id_expediente: '',se_ofrecen_pruebas: '',parte_que_ofrece_prueba: '',fecha_ofrecen_pruebas: '',fecha_admision_pruebas: '',pruebas_ofrecidas_en: '',tipo_pruebas_ofrecidas: '',tipo_pruebas_admitidas: '',tipo_pruebas_desahogadas: '',fecha_desahogo_pruebas: '',numero_pruebas_desahogadas: '',fecha_aceptacion_cargo: '',fecha_perritos_rinden: '',juez_designa_perito: '',se_renuncia_pruenas: '',parte_renuncia_pruebas: '',tipo_pruebas_renuncia: '',motivos_renuncia_pruebas: ''},
                pruebas: [] ,
                editarActivo: false,
                result1: "",
            }
       },
       mounted() {
        // Fetch initial results
        this.getResults();
      },
       created(){
            axios.get('/Proyecto-CJ/public/expedientesAll')
            .then(res => {
                this.expedientes = res.data;
            }).catch(error => {
                console.log(error.response)
            });
    
            axios.get('/Proyecto-CJ/public/pruebasCatalogos')
            .then(res => {
                this.pruebas = res.data;
            }).catch(error => {
                console.log(error.response)
            });
       },
        methods:{
            getResults(page = 1) {
              axios.get('/Proyecto-CJ/public/modulocuatro?page=' + page)
                .then(response => {
                  this.modulocuatros = response.data;
                }).catch(error => {
                    console.log(error.response)
                });
            },
            editarFormulario(item){
              this.editarActivo = true;
              this.modulocuatro.id_expediente = item.id_expediente;
              this.modulocuatro.se_ofrecen_pruebas = item.se_ofrecen_pruebas;
              this.modulocuatro.parte_que_ofrece_prueba = item.parte_que_ofrece_prueba;
              this.modulocuatro.fecha_ofrecen_pruebas = item.fecha_ofrecen_pruebas;
              this.modulocuatro.fecha_admision_pruebas = item.fecha_admision_pruebas;
              this.modulocuatro.pruebas_ofrecidas_en = item.pruebas_ofrecidas_en;
              this.modulocuatro.tipo_pruebas_ofrecidas = item.tipo_pruebas_ofrecidas;
              this.modulocuatro.tipo_pruebas_admitidas = item.tipo_pruebas_admitidas;
              this.modulocuatro.tipo_pruebas_desahogadas = item.tipo_pruebas_desahogadas;
              this.modulocuatro.fecha_desahogo_pruebas = item.fecha_desahogo_pruebas;
              this.modulocuatro.numero_pruebas_desahogadas = item.numero_pruebas_desahogadas;
              this.modulocuatro.fecha_aceptacion_cargo = item.fecha_aceptacion_cargo;
              this.modulocuatro.fecha_perritos_rinden = item.fecha_perritos_rinden;
              this.modulocuatro.juez_designa_perito = item.juez_designa_perito;
              this.modulocuatro.se_renuncia_pruenas = item.se_renuncia_pruenas;
              this.modulocuatro.parte_renuncia_pruebas = item.parte_renuncia_pruebas;
              this.modulocuatro.motivos_renuncia_pruebas = item.motivos_renuncia_pruebas;
              this.modulocuatro.id_modulo = item.id_modulo;

            },
           editar(item){
              const params = {id_expediente: item.id_expediente,se_ofrecen_pruebas: item.se_ofrecen_pruebas,parte_que_ofrece_prueba: item.parte_que_ofrece_prueba,fecha_ofrecen_pruebas: item.fecha_ofrecen_pruebas,fecha_admision_pruebas: item.fecha_admision_pruebas,pruebas_ofrecidas_en: item.pruebas_ofrecidas_en,tipo_pruebas_admitidas: item.tipo_pruebas_admitidas,tipo_pruebas_desahogadas: item.tipo_pruebas_desahogadas,fecha_desahogo_pruebas: item.fecha_desahogo_pruebas,numero_pruebas_desahogadas: item.numero_pruebas_desahogadas,fecha_aceptacion_cargo: item.fecha_aceptacion_cargo,fecha_perritos_rinden: item.fecha_perritos_rinden,juez_designa_perito: item.juez_designa_perito,se_renuncia_pruenas: item.se_renuncia_pruenas,parte_renuncia_pruebas: item.parte_renuncia_pruebas,motivos_renuncia_pruebas: item.motivos_renuncia_pruebas};
              axios.put(`/Proyecto-CJ/public/modulocuatro/${item.id_modulo}`, params)
                .then(res =>{
                  this.editarActivo = false;
                  this.getResults(this.modulocuatros.current_page);
                })
                  
                this.modulocuatro.id_expediente = '';
                this.modulocuatro.se_ofrecen_pruebas = '';
                this.modulocuatro.parte_que_ofrece_prueba = '';
                this.modulocuatro.fecha_ofrecen_pruebas = '';
                this.modulocuatro.fecha_admision_pruebas = '';
                this.modulocuatro.pruebas_ofrecidas_en = '';
                this.modulocuatro.tipo_pruebas_ofrecidas = '';
                this.modulocuatro.tipo_pruebas_admitidas = '';
                this.modulocuatro.tipo_pruebas_desahogadas = '';
                this.modulocuatro.fecha_desahogo_pruebas = '';
                this.modulocuatro.numero_pruebas_desahogadas = '';
                this.modulocuatro.fecha_aceptacion_cargo = '';
                this.modulocuatro.fecha_perritos_rinden = '';
                this.modulocuatro.juez_designa_perito = '';
                this.modulocuatro.se_renuncia_pruenas = '';
                this.modulocuatro.parte_renuncia_pruebas = '';
                this.modulocuatro.tipo_pruebas_renuncia = '';
                this.modulocuatro.motivos_renuncia_pruebas = '';


            },
            cancelarEdicion(){
              this.editarActivo = false;
              this.modulocuatro = {id_expediente: '',se_ofrecen_pruebas: '',parte_que_ofrece_prueba: '',fecha_ofrecen_pruebas: '',fecha_admision_pruebas: '',pruebas_ofrecidas_en: '',tipo_pruebas_ofrecidas: '',tipo_pruebas_admitidas: '',tipo_pruebas_desahogadas: '',fecha_desahogo_pruebas: '',numero_pruebas_desahogadas: '',fecha_aceptacion_cargo: '',fecha_perritos_rinden: '',juez_designa_perito: '',se_renuncia_pruenas: '',parte_renuncia_pruebas: '',tipo_pruebas_renuncia: '',motivos_renuncia_pruebas: ''}
            },
            agregar(){

                //Valida modulouno de formularios
                 //if(this.modulouno.municipios.trim() === ''){
                    //alert('Debes completar todos los campos antes de guardar');
                    //return;
                  //}

                //console.log(this.modulouno.id_expediente, this.modulouno.descripcion); 
                const params = {
                id_expediente: this.modulocuatro.id_expediente,
                se_ofrecen_pruebas: this.modulocuatro.se_ofrecen_pruebas,
                parte_que_ofrece_prueba: this.modulocuatro.parte_que_ofrece_prueba,
                fecha_ofrecen_pruebas: this.modulocuatro.fecha_ofrecen_pruebas,
                fecha_admision_pruebas: this.modulocuatro.fecha_admision_pruebas,
                pruebas_ofrecidas_en: this.modulocuatro.pruebas_ofrecidas_en,
                tipo_pruebas_ofrecidas: this.modulocuatro.tipo_pruebas_ofrecidas,
                tipo_pruebas_admitidas: this.modulocuatro.tipo_pruebas_admitidas,
                tipo_pruebas_desahogadas: this.modulocuatro.tipo_pruebas_desahogadas,
                fecha_desahogo_pruebas: this.modulocuatro.fecha_desahogo_pruebas,
                numero_pruebas_desahogadas: this.modulocuatro.numero_pruebas_desahogadas,
                fecha_aceptacion_cargo: this.modulocuatro.fecha_aceptacion_cargo,
                fecha_perritos_rinden: this.modulocuatro.fecha_perritos_rinden,
                juez_designa_perito: this.modulocuatro.juez_designa_perito,
                se_renuncia_pruenas: this.modulocuatro.se_renuncia_pruenas,
                parte_renuncia_pruebas: this.modulocuatro.parte_renuncia_pruebas,
                tipo_pruebas_renuncia: this.modulocuatro.tipo_pruebas_renuncia,
                motivos_renuncia_pruebas: this.modulocuatro.motivos_renuncia_pruebas,
 
    
                }
                //Accion para limpiar los campos
                this.modulocuatro.id_expediente = '';
                this.modulocuatro.se_ofrecen_pruebas = '';
                this.modulocuatro.parte_que_ofrece_prueba = '';
                this.modulocuatro.fecha_ofrecen_pruebas = '';
                this.modulocuatro.fecha_admision_pruebas = '';
                this.modulocuatro.pruebas_ofrecidas_en = '';
                this.modulocuatro.tipo_pruebas_ofrecidas = '';
                this.modulocuatro.tipo_pruebas_admitidas = '';
                this.modulocuatro.tipo_pruebas_desahogadas = '';
                this.modulocuatro.fecha_desahogo_pruebas = '';
                this.modulocuatro.numero_pruebas_desahogadas = '';
                this.modulocuatro.fecha_aceptacion_cargo = '';
                this.modulocuatro.fecha_perritos_rinden = '';
                this.modulocuatro.juez_designa_perito = '';
                this.modulocuatro.se_renuncia_pruenas = '';
                this.modulocuatro.parte_renuncia_pruebas = '';
                this.modulocuatro.tipo_pruebas_renuncia = '';
                this.modulocuatro.motivos_renuncia_pruebas = '';


                axios.post('/Proyecto-CJ/public/modulocuatro', params)     
                    .then(res => {
                        this.getResults(this.modulocuatros.last_page);
                        this.expedientes.length = 0
                        axios.get('/Proyecto-CJ/public/expedientesAll')
                        .then(res => {
                            this.expedientes = res.data;
                        })
                })

            },
            confirmar(id){
              $('#exampleModalModuloUno').modal("show")
              $('#id').val(id)
            },
            eliminarModulouno(op){
              if (op === "aceptar") {
                axios.delete(`/Proyecto-CJ/public/modulouno/` + $("#id").val())
                  .then(()=>{
                      this.getResults(this.modulounos.current_page);
                      $('#exampleModalModuloUno').modal("hide")
                  })
              }
              else{
                $('#exampleModalModuloUno').modal("hide")
              }

            },
       }
    }
</script>


