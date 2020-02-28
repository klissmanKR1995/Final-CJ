<template>
  <div>
    <div class="modal-content"> <br>
      <form @submit.prevent="editar(modulocinco)" v-if="editarActivo">
      <h5 class="text-center"> Actualizar Información <i> (Módulo  5) </i> </h5> <br>
        <div class="container">
         
         <div class="form-group">
            <select id="id_expediente" class="form-control" v-model="modulocinco.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
          
                
          <div class="form-row">
           
            <div class="col-md-4">
              <label for="inputState1">Emisión de acuerdo por hechos no controvertidos: </label>
              <select class="form-control" v-model="modulocinco.emision_acuerdo_controvertido">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div> 

            <div class="col-md-4">
              <label for="inputState1">Fecha causa sentencia</label>
              <input type="date" class="form-control" v-model="modulocinco.fecha_emision_acuerdo">
            </div>

            <div class="col-md-4">
              <label for="inputState1">Fecha de promoción</label>
              <input type="date" class="form-control" v-model="modulocinco.fecha_emision_acuerdo_probatorio">
            </div>

          </div> <br>

          <div class="form-row">
           
            <div class="col-md-4">
              <label for="inputState1">Emision de acuerdo: </label>
              <select class="form-control" v-model="modulocinco.emision_acuerdo">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div> 


            <div class="col-md-4">
              <label for="inputState1">Número total de acuerdos emitidos en la fase de Audiencia preliminar:</label>
              <input type="number" class="form-control" v-model="modulocinco.numero_total_acuerdos">
            </div>

          </div> <br>
           

          <center>    
          <button class="btn btn-primary" type="submit"> Actualizar </button>
          <button class="btn btn-danger" type="submit" @click="cancelarEdicion()"> Cancelar </button>
          </center> <br>
        </div>     
      </form>  

      <form @submit.prevent="agregar" v-else>
      <h4 class="text-center"> Datos de los expedientes (Módulo 5)  </h4> <br>
        <div class="container">
         
         <div class="form-group">
            <select class="form-control" v-model="modulocinco.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
                

          <div class="form-row"> 
            <div class="col-md-4">
              <label for="inputState1">Emisión de acuerdo por hechos no controvertidos: </label>
              <select class="form-control" v-model="modulocinco.emision_acuerdo_controvertido">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div> 

            <div class="col-md-4">
              <label for="inputState1">Fecha causa sentencia</label>
              <input type="date" class="form-control" v-model="modulocinco.fecha_emision_acuerdo">
            </div>

            <div class="col-md-4">
              <label for="inputState1">Fecha de promoción</label>
              <input type="date" class="form-control" v-model="modulocinco.fecha_emision_acuerdo_probatorio">
            </div>

          </div> <br>

          <div class="form-row">
           
            <div class="col-md-4">
              <label for="inputState1">Emisión de acuerdo: </label>
              <select class="form-control" v-model="modulocinco.emision_acuerdo">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div> 


            <div class="col-md-4">
              <label for="inputState1">Número total de acuerdos emitidos en la fase de Audiencia preliminar:</label>
              <input type="number" class="form-control" v-model="modulocinco.numero_total_acuerdos">
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
                <th scope="col"> Emisión de acuerdo </th>
                <th scope="col"> Fecha de emisión de acuerdo </th>
                <th scope="col"> Fecha de emisión de acuerdo probatorio</th>
                <th scope="col"> Emisión de acuerdo</th>
                <th scope="col"> Numero total de acuerdos</th>
                <th scope="col"> Actualizar - Registro</th>
                <th scope="col"> Eliminar - Registro</th>
              </tr>
              <tr v-for="(item, index) in modulocincos.data" :key="index">
                <td>{{item.numero_expediente}}</td>
                <td>{{item.emision_acuerdo_controvertido}}</td>
                <td>{{item.fecha_emision_acuerdo}}</td>
                <td>{{item.fecha_emision_acuerdo_probatorio}}</td>
                <td>{{item.emision_acuerdo}}</td>
                <td>{{item.numero_total_acuerdos}}</td>
                <td><button class="btn btn-primary" @click="editarFormulario(item)">Actualizar</button></td>
              <td><button class="btn btn-danger"  @click="confirmar(item.id_modulo)">Eliminar</button></td>
              </tr>
          </thead>   
        </table>


       <!-- Paginador -->
       <pagination :data="modulocincos" @pagination-change-page="getResultsModuloCinco"> </pagination>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalModuloCinco" tabindex="-1" role="dialog" aria-labelledby="exampleModalModuloCincoLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalModuloCincoLabel">Confirmar elminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" id="id">
                ¿Estas seguro(a) de eliminar el registro seleccionado?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="eliminarModuloCinco('cancelar')">Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" @click="eliminarModuloCinco('aceptar')">Eliminar</button>
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
                modulocincos: {},
                modulocinco: {id_expediente: '', emision_acuerdo_controvertido: '', fecha_emision_acuerdo: '', fecha_emision_acuerdo_probatorio: '', emision_acuerdo: '',numero_total_acuerdos: ''},
                editarActivo: false,
                result1: "",
            }
       },
       mounted() {
        // Fetch initial results
        this.getResultsModuloCinco();
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
            getResultsModuloCinco(page = 1) {
              axios.get('/Proyecto-CJ/public/modulocinco?page=' + page)
                .then(response => {
                  this.modulocincos = response.data;
                }).catch(error => {
                    console.log(error.response)
                });
            },
            editarFormulario(item){
              this.editarActivo = true;
              this.modulocinco.id_expediente = item.id_expediente;
              this.modulocinco.emision_acuerdo_controvertido = item.emision_acuerdo_controvertido;
              this.modulocinco.fecha_emision_acuerdo = item.fecha_emision_acuerdo;
              this.modulocinco.fecha_emision_acuerdo_probatorio = item.fecha_emision_acuerdo_probatorio;
              this.modulocinco.emision_acuerdo = item.emision_acuerdo;
              this.modulocinco.numero_total_acuerdos = item.numero_total_acuerdos;
              this.modulocinco.id_modulo = item.id_modulo;

            },
           editar(item){
              const params = {id_expediente: item.id_expediente, emision_acuerdo_controvertido: item.emision_acuerdo_controvertido, fecha_emision_acuerdo: item.fecha_emision_acuerdo, fecha_emision_acuerdo_probatorio: item.fecha_emision_acuerdo_probatorio, emision_acuerdo: item.emision_acuerdo, numero_total_acuerdos: item.numero_total_acuerdos};
              axios.put(`/Proyecto-CJ/public/modulocinco/${item.id_modulo}`, params)
                .then(res =>{
                  this.editarActivo = false;
                  this.getResultsModuloCinco(this.modulocincos.current_page);
                })
                  
                this.modulocinco.id_expediente = '';
                this.modulocinco.emision_acuerdo_controvertido = '';
                this.modulocinco.fecha_emision_acuerdo = '';
                this.modulocinco.fecha_emision_acuerdo_probatorio = '';
                this.modulocinco.emision_acuerdo = '';
                this.modulocinco.numero_total_acuerdos = '';

         
            },
            cancelarEdicion(){
              this.editarActivo = false;
              this.modulocinco = {id_expediente: '', emision_acuerdo_controvertido: '', fecha_emision_acuerdo: '', fecha_emision_acuerdo_probatorio: '', emision_acuerdo: '',numero_total_acuerdos: ''}
            },
            agregar(){

                const params = {
                id_expediente: this.modulocinco.id_expediente,
                emision_acuerdo_controvertido: this.modulocinco.emision_acuerdo_controvertido,
                fecha_emision_acuerdo: this.modulocinco.fecha_emision_acuerdo,
                fecha_emision_acuerdo_probatorio: this.modulocinco.fecha_emision_acuerdo_probatorio,
                emision_acuerdo: this.modulocinco.emision_acuerdo,
                numero_total_acuerdos: this.modulocinco.numero_total_acuerdos,
                }
                //Accion para limpiar los campos

                this.modulocinco.id_expediente = '';
                this.modulocinco.emision_acuerdo_controvertido = '';
                this.modulocinco.fecha_emision_acuerdo = '';
                this.modulocinco.fecha_emision_acuerdo_probatorio = '';
                this.modulocinco.emision_acuerdo = '';
                this.modulocinco.numero_total_acuerdos = '';
                    
              axios.post('/Proyecto-CJ/public/modulocinco', params)     
                    .then(res => {
                        this.getResults(this.modulocincos.last_page);
                        this.expedientes.length = 0
                        axios.get('/Proyecto-CJ/public/expedientesAll')
                        .then(res => {
                            this.expedientes = res.data;
                        })
                })

            },
            confirmar(id){
              $('#exampleModalModuloCinco').modal("show")
              $('#id').val(id)
            },
            eliminarModuloCinco(op){
              if (op === "aceptar") {
                axios.delete(`/Proyecto-CJ/public/modulocinco/` + $("#id").val())
                  .then(()=>{
                      this.getResultsModuloCinco(this.modulocincos.current_page);
                      $('#exampleModalModuloCinco').modal("hide")
                  })
              }
              else{
                $('#exampleModalModuloCinco').modal("hide")
              }

            },
       }
    }
</script>


