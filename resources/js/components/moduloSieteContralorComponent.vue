<template>
  <div>
    <div class="modal-content"> <br>
      <form @submit.prevent="editar(modulosiete)" v-if="editarActivo">
      <h5 class="text-center"> Actualizar Información <i> (Módulo 7) </i> </h5> <br>
        <div class="container">
         
         <div class="form-group">
            <select id="id_expediente" class="form-control" v-model="modulosiete.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
          

          <div class="form-row">
          
              <div class="col-md-4">
               <label for="inputState1">Tipo de terminación: </label>
                <select id="inputState1" class="form-control" v-model="modulosiete.tipo_termminacion">
                  <option selected>Seleccionar</option>
                  <option>1.- Sentencia definitiva</option>
                  <option>2.- Sentencia interlocutoria</option>
                  <option>3.- Terminación por causa diversa a sentencia</option>
                </select>
              </div>

              <div class="col-md-4">
               <label for="inputState1">En caso de terminación por causa diferente a sentencia, especificar: </label>
                <select id="inputState1" class="form-control" v-model="modulosiete.caso_terminacion">
                  <option selected>Seleccionar</option>
                  <option>1.- Convenio/Conciliación</option>
                  <option>2.- Desistimiento</option>
                  <option>3.- Desechamiento</option>
                  <option>4.- Excusa</option>
                  <option>5.- Recusación</option>
                  <option>6.- Acumulación</option>
                  <option>7.- Caducidad de la instancia</option>
                  <option>8.- Inactividad procesal</option>
                  <option>9.- Incompetencia</option>
                  <option>10.- Otro</option>
                </select>
              </div>

              <div class="col-md-4">
               <label for="inputState1">Fase de la terminación por causa diferente a sentencia: </label>
                <select id="inputState1" class="form-control" v-model="modulosiete.fase_terminacion">
                  <option selected>Seleccionar</option>
                  <option>1.- Etapa postulatoria</option>
                  <option>2.- Reconvención</option>
                  <option>3.- Audiencia preliminar</option>
                  <option>4.- Audiencia de juicio</option>
                </select>
              </div>


             

          </div>

          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Fecha de la terminación por causa diferente a sentencia: </label>
                <input type="date" class="form-control" v-model="modulosiete.fecha_terminacion">
             </div>


             <div class="col-md-4">
                <label for="inputState">Fecha de emisión de la sentencia: </label>
                <input type="date" class="form-control" v-model="modulosiete.fecha_emision_sentencia">
             </div>

              <div class="col-md-4">
               <label for="inputState1">Sentencia a favor de: </label>
                <select id="inputState1" class="form-control" v-model="modulosiete.sentencia_favor">
                  <option selected>Seleccionar</option>
                  <option>1.- Parte actora</option>
                  <option>2.- Parte demandada</option>
                </select>
              </div>
            

          </div> <br>

          <div class="form-row">

            <div class="col-md-4">
             <label for="inputState">Monto líquido fijado en la sentencia: </label>
             <input type="number" class="form-control" v-model="modulosiete.monto_liquido">
            </div>
          </div> <br>


         

          <center>    
          <button class="btn btn-primary" type="submit"> Actualizar </button>
          <button class="btn btn-danger" type="submit" @click="cancelarEdicion()"> Cancelar </button>
          </center> <br>
        </div>     
      </form>  

      <form @submit.prevent="agregar" v-else>
      <h4 class="text-center"> Terminación de juicios (Módulo 7)  </h4> <br>
        <div class="container">
         
                 
      

          <div class="form-group">
            <select id="id_expediente" class="form-control" v-model="modulosiete.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
          

          <div class="form-row">
          
              <div class="col-md-4">
               <label for="inputState1">Tipo de terminación: </label>
                <select id="inputState1" class="form-control" v-model="modulosiete.tipo_termminacion">
                  <option selected>Seleccionar</option>
                  <option>1.- Sentencia definitiva</option>
                  <option>2.- Sentencia interlocutoria</option>
                  <option>3.- Terminación por causa diversa a sentencia</option>
                </select>
              </div>

              <div class="col-md-4">
               <label for="inputState1">En caso de terminación por causa diferente a sentencia, especificar: </label>
                <select id="inputState1" class="form-control" v-model="modulosiete.caso_terminacion">
                  <option selected>Seleccionar</option>
                  <option>1.- Convenio/Conciliación</option>
                  <option>2.- Desistimiento</option>
                  <option>3.- Desechamiento</option>
                  <option>4.- Excusa</option>
                  <option>5.- Recusación</option>
                  <option>6.- Acumulación</option>
                  <option>7.- Caducidad de la instancia</option>
                  <option>8.- Inactividad procesal</option>
                  <option>9.- Incompetencia</option>
                  <option>10.- Otro</option>
                </select>
              </div>

              <div class="col-md-4">
               <label for="inputState1">Fase de la terminación por causa diferente a sentencia: </label>
                <select id="inputState1" class="form-control" v-model="modulosiete.fase_terminacion">
                  <option selected>Seleccionar</option>
                  <option>1.- Etapa postulatoria</option>
                  <option>2.- Reconvención</option>
                  <option>3.- Audiencia preliminar</option>
                  <option>4.- Audiencia de juicio</option>
                </select>
              </div>


             

          </div>

          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Fecha de la terminación por causa diferente a sentencia: </label>
                <input type="date" class="form-control" v-model="modulosiete.fecha_terminacion">
             </div>


             <div class="col-md-4">
                <label for="inputState">Fecha de emisión de la sentencia: </label>
                <input type="date" class="form-control" v-model="modulosiete.fecha_emision_sentencia">
             </div>

              <div class="col-md-4">
               <label for="inputState1">Sentencia a favor de: </label>
                <select id="inputState1" class="form-control" v-model="modulosiete.sentencia_favor">
                  <option selected>Seleccionar</option>
                  <option>1.- Parte actora</option>
                  <option>2.- Parte demandada</option>
                </select>
              </div>
            

          </div> <br>

          <div class="form-row">

            <div class="col-md-4">
             <label for="inputState">Monto líquido fijado en la sentencia: </label>
             <input type="number" class="form-control" v-model="modulosiete.monto_liquido">
            </div>
          </div> <br>



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
                <th scope="col"> Tipo de terminación</th>
                <th scope="col"> Fase de terminación </th>
                <th scope="col"> Fecha-terminación </th>
                <th scope="col"> Fecha-emisión </th>
                <th scope="col"> Sentencia a favor de </th>
                <th scope="col"> Monto liquido </th>
                <th scope="col"> Actualizar - Registro</th>
                <th scope="col"> Eliminar - Registro</th>
              </tr>
              <tr v-for="(item, index) in modulosietes.data" :key="index">
                <td>{{item.numero_expediente}}</td>
                <td>{{item.tipo_termminacion}}</td>
                <td>{{item.fase_terminacion}}</td>
                <td>{{item.fecha_terminacion}}</td>
                <td>{{item.fecha_emision_sentencia}}</td>
                <td>{{item.sentencia_favor}}</td>
                <td>{{item.monto_liquido}}</td>
               <td><button class="btn btn-primary" @click="editarFormulario(item)">Actualizar</button></td>
              <td><button class="btn btn-danger"  @click="confirmar(item.id_modulo)">Eliminar</button></td>
              </tr>
          </thead>   
        </table>


       <!-- Paginador -->
       <pagination :data="modulosietes" @pagination-change-page="getResults"> </pagination>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalModuloSiete" tabindex="-1" role="dialog" aria-labelledby="exampleModalModulosieteLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalModuloSieteLabel">Confirmar elminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" id="id">
                ¿Estas seguro(a) de eliminar el registro seleccionado?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="eliminarModuloSiete('cancelar')">Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" @click="eliminarModuloSiete('aceptar')">Eliminar</button>
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
                modulosietes: {},
                modulosiete: {id_expediente: '',tipo_termminacion: '',caso_terminacion: '',fase_terminacion: '',fecha_terminacion: '',fecha_emision_sentencia: '',sentencia_favor: '',monto_liquido: '' },
                editarActivo: false,
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
              axios.get('/Proyecto-CJ/public/modulosiete?page=' + page)
                .then(response => {
                  this.modulosietes = response.data;
                }).catch(error => {
                    console.log(error.response)
                });
            },
            editarFormulario(item){
              this.editarActivo = true;
              this.modulosiete.id_expediente = item.id_expediente;
              this.modulosiete.tipo_termminacion = item.tipo_termminacion;
              this.modulosiete.caso_terminacion = item.caso_terminacion;
              this.modulosiete.fase_terminacion = item.fase_terminacion;
              this.modulosiete.fecha_terminacion = item.fecha_terminacion;
              this.modulosiete.fecha_emision_sentencia = item.fecha_emision_sentencia;
              this.modulosiete.sentencia_favor = item.sentencia_favor;
              this.modulosiete.monto_liquido = item.monto_liquido;             
              this.modulosiete.id_modulo = item.id_modulo;

            },
           editar(item){
              const params = {id_expediente: item.id_expediente,tipo_termminacion: item.tipo_termminacion,caso_terminacion: item.caso_terminacion,fase_terminacion: item.fase_terminacion,fecha_terminacion: item.fecha_terminacion,fecha_emision_sentencia: item.fecha_emision_sentencia,sentencia_favor: item.sentencia_favor,monto_liquido: item.monto_liquido};
              axios.put(`/Proyecto-CJ/public/modulosiete/${item.id_modulo}`, params)
                .then(res =>{
                  this.editarActivo = false;
                  this.getResults(this.modulosietes.current_page);
                })
                  
              this.modulosiete.id_expediente = item.id_expediente;
              this.modulosiete.tipo_termminacion = item.tipo_termminacion;
              this.modulosiete.caso_terminacion = item.caso_terminacion;
              this.modulosiete.fase_terminacion = item.fase_terminacion;
              this.modulosiete.fecha_terminacion = item.fecha_terminacion;
              this.modulosiete.fecha_emision_sentencia = item.fecha_emision_sentencia;
              this.modulosiete.sentencia_favor = item.sentencia_favor;
              this.modulosiete.monto_liquido = item.monto_liquido; 
                
            },
            cancelarEdicion(){
              this.editarActivo = false;
              this.modulosiete = {id_expediente: '',tipo_termminacion: '',caso_terminacion: '',fase_terminacion: '',fecha_terminacion: '',fecha_emision_sentencia: '',sentencia_favor: '',monto_liquido: ''}
            },
            agregar(){

                //Valida modulouno de formularios
                 //if(this.modulouno.municipios.trim() === ''){
                    //alert('Debes completar todos los campos antes de guardar');
                    //return;
                  //}

                //console.log(this.modulouno.id_expediente, this.modulouno.descripcion); 
                const params = {
                id_expediente: this.modulosiete.id_expediente,
                tipo_termminacion: this.modulosiete.tipo_termminacion,
                caso_terminacion: this.modulosiete.caso_terminacion,
                fase_terminacion: this.modulosiete.fase_terminacion,
                fecha_terminacion: this.modulosiete.fecha_terminacion,
                fecha_emision_sentencia: this.modulosiete.fecha_emision_sentencia,
                sentencia_favor: this.modulosiete.sentencia_favor,
                monto_liquido: this.modulosiete.monto_liquido,
 
 
                }
                //Accion para limpiar los campos

                this.modulosiete.id_expediente = '';
                this.modulosiete.tipo_termminacion = '';
                this.modulosiete.caso_terminacion = '';
                this.modulosiete.fase_terminacion = '';
                this.modulosiete.fecha_terminacion = '';
                this.modulosiete.fecha_emision_sentencia = '';
                this.modulosiete.sentencia_favor = '';
                this.modulosiete.monto_liquido = '';

               

                axios.post('/Proyecto-CJ/public/modulosiete', params)     
                    .then(res => {
                        this.getResults(this.modulosietes.last_page);
                        this.expedientes.length = 0
                        axios.get('/Proyecto-CJ/public/expedientesAll')
                        .then(res => {
                            this.expedientes = res.data;
                        })
                })

            },
            confirmar(id){
              $('#exampleModalModuloSiete').modal("show")
              $('#id').val(id)
            },
            eliminarModulosiete(op){
              if (op === "aceptar") {
                axios.delete(`/Proyecto-CJ/public/modulosiete/` + $("#id").val())
                  .then(()=>{
                      this.getResults(this.modulosietes.current_page);
                      $('#exampleModalModuloSiete').modal("hide")
                  })
              }
              else{
                $('#exampleModalModuloSiete').modal("hide")
              }

            },
       }
    }
</script>


