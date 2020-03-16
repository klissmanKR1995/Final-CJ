<template>
 <div>
<div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="ModalLabel9" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel3">Módulo - IV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 

        <form @submit.prevent="agregar" >
      <h4 class="text-center">Montos de liquidación de la sentencia (Módulo 9)  </h4> <br>
        <div class="container">
         
          <div class="form-group">
            <select id="id_expediente" class="form-control" v-model="modulonueve.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
          

          

          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Suerte principal liquidada en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.suerte_principal_liquidada_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Intereses Ordinarios liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.intereses_ordinarios_liquidados_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Intereses Moratorios liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.intereses_moratorios_liquidados_en_la_sentencia">
             </div>

          </div> <br>


          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Pena Convencional liquidada en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.pena_convencional_liquidada_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Daños liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.daños_liquidados_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Perjuicios liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.perjuicios_liquidados_en_la_sentencia">
             </div>

          </div> <br>


          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Gastos liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.gastos_liquidados_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Costas liquidadas en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.costas_liquidadas_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Honorarios liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.honorarios_liquidados_en_la_sentencia">
             </div>

          </div> <br>


          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Otros liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.otros_liquidados_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Suerte principal liquidada en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.suerte_principal_liquidada_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Intereses Ordinarios liquidados en la ejecución la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia">
             </div>

          </div> <br>

          

           <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Intereses Ordinarios liquidados en la ejecución la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Intereses Moratorios liquidados en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Pena Convencional liquidada en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.pena_convencional_liquidada_en_la_ejecución_de_la_sentencia">
             </div>

          </div> <br>



          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Daños liquidados en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.daños_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Perjuicios liquidados en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.perjuicios_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Gastos liquidados en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.gastos_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

          </div> <br>


          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Costas liquidadas en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.costas_liquidadas_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Honorarios liquidados en la ejecución de la sentencia**: </label>
                <input type="number" class="form-control" v-model="modulonueve.honorarios_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Otros liquidados en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.otros_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

          </div> <br>



          <center>    
          <button class="btn btn-danger" type="submit"> Guardar Registro </button> 
          </center><br>
        </div>     
      </form>

      </form>
       </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>





<div class="modal fade" id="modalEdit8" tabindex="-1" role="dialog" aria-labelledby="ModalLabel9" aria-hidden="true">
      <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel9">Módulo - IV</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body"> 


        <form @submit.prevent="editar(modulonueve)" v-if="editarActivo">
      <h5 class="text-center"> Actualizar Información <i> (Módulo  9) </i> </h5> <br>
        <div class="container">
         
         <div class="form-group">
            <select id="id_expediente" class="form-control" v-model="modulonueve.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
          

          

          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Suerte principal liquidada en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.suerte_principal_liquidada_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Intereses Ordinarios liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.intereses_ordinarios_liquidados_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Intereses Moratorios liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.intereses_moratorios_liquidados_en_la_sentencia">
             </div>

          </div> <br>


          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Pena Convencional liquidada en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.pena_convencional_liquidada_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Daños liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.daños_liquidados_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Perjuicios liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.perjuicios_liquidados_en_la_sentencia">
             </div>

          </div> <br>


          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Gastos liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.gastos_liquidados_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Costas liquidadas en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.costas_liquidadas_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Honorarios liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.honorarios_liquidados_en_la_sentencia">
             </div>

          </div> <br>


          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Otros liquidados en la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.otros_liquidados_en_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Suerte principal liquidada en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.suerte_principal_liquidada_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Intereses Ordinarios liquidados en la ejecución la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia">
             </div>

          </div> <br>

          

           <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Intereses Ordinarios liquidados en la ejecución la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Intereses Moratorios liquidados en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Pena Convencional liquidada en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.pena_convencional_liquidada_en_la_ejecución_de_la_sentencia">
             </div>

          </div> <br>



          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Daños liquidados en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.daños_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Perjuicios liquidados en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.perjuicios_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Gastos liquidados en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.gastos_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

          </div> <br>


          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Costas liquidadas en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.costas_liquidadas_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Honorarios liquidados en la ejecución de la sentencia**: </label>
                <input type="number" class="form-control" v-model="modulonueve.honorarios_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

             <div class="col-md-4">
                <label for="inputState">Otros liquidados en la ejecución de la sentencia: </label>
                <input type="number" class="form-control" v-model="modulonueve.otros_liquidados_en_la_ejecución_de_la_sentencia">
             </div>

          </div> <br>



         

          <center>    
          <button class="btn btn-primary" type="submit"> Actualizar </button>
          <button class="btn btn-danger" type="submit" @click="cancelarEdicion()"> Cancelar </button>
          </center> <br>
        </div> 
      </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>


<div class="table-responsive">
   <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#Modal3">
  Nuevo Registro
</button><br> <br>
        <table class="table table-striped">
          <thead>
              <tr>
                <th scope="col"> Número de expediente </th>
                <th scope="col"> Suerte Principal </th>
                <th scope="col"> Intereses Ordinario </th>
                <th scope="col"> Intereses moratorios </th>
                <th scope="col"> Actualizar  </th>
              <tr v-for="(item, index) in modulonueves.data" :key="index">
                <td>{{item.numero_expediente}}</td>
                <td>{{item.suerte_principal_liquidada_en_la_sentencia}}</td>
                <td>{{item.intereses_ordinarios_liquidados_en_la_sentencia}}</td>
                <td>{{item.intereses_moratorios_liquidados_en_la_sentencia}}</td>
                <td><button  class="btn btn-primary" data-toggle="modal" data-target="#modalEdit8" @click="editarFormulario(item)">Actualizar
      </button></td>
              </tr>
          </thead>   
        </table>


       <!-- Paginador -->
       <pagination :data="modulonueves" @pagination-change-page="getResults"> </pagination>
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
                modulonueves: {},
                modulonueve: {id_expediente: '',suerte_principal_liquidada_en_la_sentencia: '',intereses_ordinarios_liquidados_en_la_sentencia: '',intereses_moratorios_liquidados_en_la_sentencia: '',pena_convencional_liquidada_en_la_sentencia: '',daños_liquidados_en_la_sentencia: '',perjuicios_liquidados_en_la_sentencia: '',gastos_liquidados_en_la_sentencia: '',costas_liquidadas_en_la_sentencia: '',honorarios_liquidados_en_la_sentencia: '',otros_liquidados_en_la_sentencia: '',suerte_principal_liquidada_en_la_ejecución_de_la_sentencia: '',intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia: '',intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia: '',pena_convencional_liquidada_en_la_ejecución_de_la_sentencia: '',daños_liquidados_en_la_ejecución_de_la_sentencia: '',perjuicios_liquidados_en_la_ejecución_de_la_sentencia: '',gastos_liquidados_en_la_ejecución_de_la_sentencia: '',costas_liquidadas_en_la_ejecución_de_la_sentencia: '',honorarios_liquidados_en_la_ejecución_de_la_sentencia: '',otros_liquidados_en_la_ejecución_de_la_sentencia: ''},
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
       },
        methods:{
            getResults(page = 1) {
              axios.get('/Proyecto-CJ/public/modulonueve?page=' + page)
                .then(response => {
                  this.modulonueves = response.data;
                }).catch(error => {
                    console.log(error.response)
                });
            },
            editarFormulario(item){
              this.editarActivo = true;
              this.modulonueve.id_expediente = item.id_expediente;
              this.modulonueve.suerte_principal_liquidada_en_la_sentencia = item.suerte_principal_liquidada_en_la_sentencia;
              this.modulonueve.intereses_ordinarios_liquidados_en_la_sentencia = item.intereses_ordinarios_liquidados_en_la_sentencia;
              this.modulonueve.intereses_moratorios_liquidados_en_la_sentencia = item.intereses_moratorios_liquidados_en_la_sentencia;
              this.modulonueve.pena_convencional_liquidada_en_la_sentencia = item.pena_convencional_liquidada_en_la_sentencia;
              this.modulonueve.daños_liquidados_en_la_sentencia = item.daños_liquidados_en_la_sentencia;
              this.modulonueve.perjuicios_liquidados_en_la_sentencia = item.perjuicios_liquidados_en_la_sentencia;
              this.modulonueve.gastos_liquidados_en_la_sentencia = item.gastos_liquidados_en_la_sentencia;
              this.modulonueve.costas_liquidadas_en_la_sentencia = item.costas_liquidadas_en_la_sentencia;
              this.modulonueve.honorarios_liquidados_en_la_sentencia = item.honorarios_liquidados_en_la_sentencia;
              this.modulonueve.otros_liquidados_en_la_sentencia = item.otros_liquidados_en_la_sentencia;
              this.modulonueve.suerte_principal_liquidada_en_la_ejecución_de_la_sentencia = item.suerte_principal_liquidada_en_la_ejecución_de_la_sentencia;
              this.modulonueve.intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia = item.intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia;
              this.modulonueve.intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia = item.intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia;
              this.modulonueve.pena_convencional_liquidada_en_la_ejecución_de_la_sentencia = item.pena_convencional_liquidada_en_la_ejecución_de_la_sentencia;
              this.modulonueve.daños_liquidados_en_la_ejecución_de_la_sentencia = item.daños_liquidados_en_la_ejecución_de_la_sentencia;
              this.modulonueve.perjuicios_liquidados_en_la_ejecución_de_la_sentencia = item.perjuicios_liquidados_en_la_ejecución_de_la_sentencia;
              this.modulonueve.gastos_liquidados_en_la_ejecución_de_la_sentencia = item.gastos_liquidados_en_la_ejecución_de_la_sentencia;
              this.modulonueve.costas_liquidadas_en_la_ejecución_de_la_sentencia = item.costas_liquidadas_en_la_ejecución_de_la_sentencia;
              this.modulonueve.honorarios_liquidados_en_la_ejecución_de_la_sentencia = item.honorarios_liquidados_en_la_ejecución_de_la_sentencia;
              this.modulonueve.otros_liquidados_en_la_ejecución_de_la_sentencia = item.otros_liquidados_en_la_ejecución_de_la_sentencia;
              this.modulonueve.id_modulo = item.id_modulo;

            },
           editar(item){
              const params = {id_expediente: item.id_expediente,suerte_principal_liquidada_en_la_sentencia: item.suerte_principal_liquidada_en_la_sentencia,intereses_ordinarios_liquidados_en_la_sentencia: item.intereses_ordinarios_liquidados_en_la_sentencia,intereses_moratorios_liquidados_en_la_sentencia: item.intereses_moratorios_liquidados_en_la_sentencia,pena_convencional_liquidada_en_la_sentencia: item.pena_convencional_liquidada_en_la_sentencia,daños_liquidados_en_la_sentencia: item.daños_liquidados_en_la_sentencia,perjuicios_liquidados_en_la_sentencia: item.perjuicios_liquidados_en_la_sentencia,gastos_liquidados_en_la_sentencia: item.gastos_liquidados_en_la_sentencia,costas_liquidadas_en_la_sentencia: item.costas_liquidadas_en_la_sentencia,honorarios_liquidados_en_la_sentencia: item.honorarios_liquidados_en_la_sentencia,otros_liquidados_en_la_sentencia: item.otros_liquidados_en_la_sentencia,suerte_principal_liquidada_en_la_ejecución_de_la_sentencia: item.suerte_principal_liquidada_en_la_ejecución_de_la_sentencia,intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia: item.intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia,intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia: item.intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia,pena_convencional_liquidada_en_la_ejecución_de_la_sentencia: item.pena_convencional_liquidada_en_la_ejecución_de_la_sentencia,daños_liquidados_en_la_ejecución_de_la_sentencia: item.daños_liquidados_en_la_ejecución_de_la_sentencia,perjuicios_liquidados_en_la_ejecución_de_la_sentencia: item.perjuicios_liquidados_en_la_ejecución_de_la_sentencia,gastos_liquidados_en_la_ejecución_de_la_sentencia: item.gastos_liquidados_en_la_ejecución_de_la_sentencia,costas_liquidadas_en_la_ejecución_de_la_sentencia: item.costas_liquidadas_en_la_ejecución_de_la_sentencia,honorarios_liquidados_en_la_ejecución_de_la_sentencia: item.honorarios_liquidados_en_la_ejecución_de_la_sentencia,otros_liquidados_en_la_ejecución_de_la_sentencia: item.otros_liquidados_en_la_ejecución_de_la_sentencia};
              axios.put(`/Proyecto-CJ/public/modulonueve/${item.id_modulo}`, params)
                .then(res =>{
                  this.editarActivo = false;
                  this.getResults(this.modulonueves.current_page);
                })
                  
              this.modulonueve.id_expediente = item.id_expediente;
              this.modulonueve.suerte_principal_liquidada_en_la_sentencia = item.suerte_principal_liquidada_en_la_sentencia;
              this.modulonueve.intereses_ordinarios_liquidados_en_la_sentencia = item.intereses_ordinarios_liquidados_en_la_sentencia;
              this.modulonueve.intereses_moratorios_liquidados_en_la_sentencia = item.intereses_moratorios_liquidados_en_la_sentencia;
              this.modulonueve.pena_convencional_liquidada_en_la_sentencia = item.pena_convencional_liquidada_en_la_sentencia;
              this.modulonueve.daños_liquidados_en_la_sentencia = item.daños_liquidados_en_la_sentencia;
              this.modulonueve.perjuicios_liquidados_en_la_sentencia = item.perjuicios_liquidados_en_la_sentencia;
              this.modulonueve.gastos_liquidados_en_la_sentencia = item.gastos_liquidados_en_la_sentencia;
              this.modulonueve.costas_liquidadas_en_la_sentencia = item.costas_liquidadas_en_la_sentencia;
              this.modulonueve.honorarios_liquidados_en_la_sentencia = item.honorarios_liquidados_en_la_sentencia;
              this.modulonueve.otros_liquidados_en_la_sentencia = item.otros_liquidados_en_la_sentencia;
              this.modulonueve.suerte_principal_liquidada_en_la_ejecución_de_la_sentencia = item.suerte_principal_liquidada_en_la_ejecución_de_la_sentencia;
              this.modulonueve.intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia = item.intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia;
              this.modulonueve.intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia = item.intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia;
              this.modulonueve.pena_convencional_liquidada_en_la_ejecución_de_la_sentencia = item.pena_convencional_liquidada_en_la_ejecución_de_la_sentencia;
              this.modulonueve.daños_liquidados_en_la_ejecución_de_la_sentencia = item.daños_liquidados_en_la_ejecución_de_la_sentencia;
              this.modulonueve.perjuicios_liquidados_en_la_ejecución_de_la_sentencia = item.perjuicios_liquidados_en_la_ejecución_de_la_sentencia;
              this.modulonueve.gastos_liquidados_en_la_ejecución_de_la_sentencia = item.gastos_liquidados_en_la_ejecución_de_la_sentencia;
              this.modulonueve.costas_liquidadas_en_la_ejecución_de_la_sentencia = item.costas_liquidadas_en_la_ejecución_de_la_sentencia;
              this.modulonueve.honorarios_liquidados_en_la_ejecución_de_la_sentencia = item.honorarios_liquidados_en_la_ejecución_de_la_sentencia;
              this.modulonueve.otros_liquidados_en_la_ejecución_de_la_sentencia = item.otros_liquidados_en_la_ejecución_de_la_sentencia;

                
            },
            cancelarEdicion(){
              this.editarActivo = false;
              this.modulonueve = {id_expediente: '',suerte_principal_liquidada_en_la_sentencia: '',intereses_ordinarios_liquidados_en_la_sentencia: '',intereses_moratorios_liquidados_en_la_sentencia: '',pena_convencional_liquidada_en_la_sentencia: '',daños_liquidados_en_la_sentencia: '',perjuicios_liquidados_en_la_sentencia: '',gastos_liquidados_en_la_sentencia: '',costas_liquidadas_en_la_sentencia: '',honorarios_liquidados_en_la_sentencia: '',otros_liquidados_en_la_sentencia: '',suerte_principal_liquidada_en_la_ejecución_de_la_sentencia: '',intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia: '',intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia: '',pena_convencional_liquidada_en_la_ejecución_de_la_sentencia: '',daños_liquidados_en_la_ejecución_de_la_sentencia: '',perjuicios_liquidados_en_la_ejecución_de_la_sentencia: '',gastos_liquidados_en_la_ejecución_de_la_sentencia: '',costas_liquidadas_en_la_ejecución_de_la_sentencia: '',honorarios_liquidados_en_la_ejecución_de_la_sentencia: '',otros_liquidados_en_la_ejecución_de_la_sentencia: ''}
            },
            agregar(){

                //Valida modulouno de formularios
                 //if(this.modulouno.municipios.trim() === ''){
                    //alert('Debes completar todos los campos antes de guardar');
                    //return;
                  //}

                //console.log(this.modulouno.id_expediente, this.modulouno.descripcion); 
                const params = {
                id_expediente: this.modulonueve.id_expediente,
                suerte_principal_liquidada_en_la_sentencia: this.modulonueve.suerte_principal_liquidada_en_la_sentencia,
                intereses_ordinarios_liquidados_en_la_sentencia: this.modulonueve.intereses_ordinarios_liquidados_en_la_sentencia,
                intereses_moratorios_liquidados_en_la_sentencia: this.modulonueve.intereses_moratorios_liquidados_en_la_sentencia,
                pena_convencional_liquidada_en_la_sentencia: this.modulonueve.pena_convencional_liquidada_en_la_sentencia,
                daños_liquidados_en_la_sentencia: this.modulonueve.daños_liquidados_en_la_sentencia,
                perjuicios_liquidados_en_la_sentencia: this.modulonueve.perjuicios_liquidados_en_la_sentencia,
                gastos_liquidados_en_la_sentencia: this.modulonueve.gastos_liquidados_en_la_sentencia,
                costas_liquidadas_en_la_sentencia: this.modulonueve.costas_liquidadas_en_la_sentencia,
                honorarios_liquidados_en_la_sentencia: this.modulonueve.honorarios_liquidados_en_la_sentencia,
                otros_liquidados_en_la_sentencia: this.modulonueve.otros_liquidados_en_la_sentencia,
                suerte_principal_liquidada_en_la_ejecución_de_la_sentencia: this.modulonueve.suerte_principal_liquidada_en_la_ejecución_de_la_sentencia,
                intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia: this.modulonueve.intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia,
                intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia: this.modulonueve.intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia,
                pena_convencional_liquidada_en_la_ejecución_de_la_sentencia: this.modulonueve.pena_convencional_liquidada_en_la_ejecución_de_la_sentencia,
                daños_liquidados_en_la_ejecución_de_la_sentencia: this.modulonueve.daños_liquidados_en_la_ejecución_de_la_sentencia,
                perjuicios_liquidados_en_la_ejecución_de_la_sentencia: this.modulonueve.perjuicios_liquidados_en_la_ejecución_de_la_sentencia,
                gastos_liquidados_en_la_ejecución_de_la_sentencia: this.modulonueve.gastos_liquidados_en_la_ejecución_de_la_sentencia,
                costas_liquidadas_en_la_ejecución_de_la_sentencia: this.modulonueve.costas_liquidadas_en_la_ejecución_de_la_sentencia,
                honorarios_liquidados_en_la_ejecución_de_la_sentencia: this.modulonueve.honorarios_liquidados_en_la_ejecución_de_la_sentencia,
                otros_liquidados_en_la_ejecución_de_la_sentencia: this.modulonueve.otros_liquidados_en_la_ejecución_de_la_sentencia,

 
                }
                //Accion para limpiar los campos

              this.modulonueve.id_expediente = '';
              this.modulonueve.suerte_principal_liquidada_en_la_sentencia = '';
              this.modulonueve.intereses_ordinarios_liquidados_en_la_sentencia = '';
              this.modulonueve.intereses_moratorios_liquidados_en_la_sentencia = '';
              this.modulonueve.pena_convencional_liquidada_en_la_sentencia = '';
              this.modulonueve.daños_liquidados_en_la_sentencia = '';
              this.modulonueve.perjuicios_liquidados_en_la_sentencia = '';
              this.modulonueve.gastos_liquidados_en_la_sentencia = '';
              this.modulonueve.costas_liquidadas_en_la_sentencia = '';
              this.modulonueve.honorarios_liquidados_en_la_sentencia = '';
              this.modulonueve.otros_liquidados_en_la_sentencia = '';
              this.modulonueve.suerte_principal_liquidada_en_la_ejecución_de_la_sentencia = '';
              this.modulonueve.intereses_ordinarios_liquidados_en_la_ejecución_la_sentencia = '';
              this.modulonueve.intereses_moratorios_liquidados_en_la_ejecución_de_la_sentencia = '';
              this.modulonueve.pena_convencional_liquidada_en_la_ejecución_de_la_sentencia = '';
              this.modulonueve.daños_liquidados_en_la_ejecución_de_la_sentencia = '';
              this.modulonueve.perjuicios_liquidados_en_la_ejecución_de_la_sentencia = '';
              this.modulonueve.gastos_liquidados_en_la_ejecución_de_la_sentencia = '';
              this.modulonueve.costas_liquidadas_en_la_ejecución_de_la_sentencia = '';
              this.modulonueve.honorarios_liquidados_en_la_ejecución_de_la_sentencia = '';
              this.modulonueve.otros_liquidados_en_la_ejecución_de_la_sentencia = ''; 

                axios.post('/Proyecto-CJ/public/modulonueve', params)     
                    .then(res => {
                        this.getResults(this.modulonueves.last_page);
                        this.expedientes.length = 0
                        axios.get('/Proyecto-CJ/public/expedientesAll')
                        .then(res => {
                            this.expedientes = res.data;
                        })
                })

            },
            confirmar(id){
              $('#exampleModalModuloNueve').modal("show")
              $('#id').val(id)
            },
            eliminarModuloNueve(op){
              if (op === "aceptar") {
                axios.delete(`/Proyecto-CJ/public/modulonueve/` + $("#id").val())
                  .then(()=>{
                      this.getResults(this.modulonueves.current_page);
                      $('#exampleModalModuloNueve').modal("hide")
                  })
              }
              else{
                $('#exampleModalModuloNueve').modal("hide")
              }

            },
       }
    }
</script>


