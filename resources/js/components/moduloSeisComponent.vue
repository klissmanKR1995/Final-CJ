<template>
  <div>
    <div class="modal-content"> <br>
      <form @submit.prevent="editar(moduloseis)" v-if="editarActivo">
      <h5 class="text-center"> Actualizar Información <i> (Modulo - VIII) </i> </h5> <br>
        <div class="container">
         
         <div class="form-group">
            <select class="form-control" v-model="moduloseis.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
                
          <div class="form-row">
           
            <div class="col-md-4">
              <label for="inputState1">Alegatos presentados por la parte actora: </label>
              <select class="form-control" v-model="moduloseis.alegatos_presentados">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div> 

            
            <div class="col-md-4">
              <label for="inputState1">Alegatos presentados por la parte demandada: </label>
              <select class="form-control" v-model="moduloseis.alegatos_presentados_parte_demandada">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div> 

            <div class="col-md-4">
              <label for="inputState1">Incidentes pendientes por resolver: </label>
              <select class="form-control" v-model="moduloseis.incidentes_pendientes">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div> 

          </div> <br>

          <div class="form-row">
           
            <div class="col-md-4">
              <label for="inputState1">Número de incidentes pendientes por resolver, según tipo: </label>
              <select class="form-control" v-model="moduloseis.numero_incidentes_por_resolver">
                <option selected>Seleccionar</option>
                <option>1.- Impugnación de falsedad de documento</option>
                <option>2.- Nulidad de emplazamiento</option>
              </select>
            </div> 

            <div class="col-md-4">
                <label for="inputState">Número de incidentes resueltos, según tipo:</label>
              <input type="number" class="form-control" v-model="moduloseis.numero_incidentes_resueltos">
            </div>

            <div class="col-md-4">
                <label for="inputState">Número total de acuerdos emitidos en la fase de Audiencia de juicio:</label>
              <input type="number" class="form-control" v-model="moduloseis.numero_total_acuerdos_por_resolver">
              </div>

          </div> <br>
           

          <center>    
          <button class="btn btn-primary" type="submit"> Actualizar </button>
          <button class="btn btn-danger" type="submit" @click="cancelarEdicion()"> Cancelar </button>
          </center> <br>
        </div>     
      </form>  

      <form @submit.prevent="agregar" v-else>
      <h4 class="text-center"> Datos de los expedientes - Audiencia de Juicio (Modulo VI) </h4> <br>
        <div class="container">
         
               <div class="form-group">
            <select class="form-control" v-model="moduloseis.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
                
          <div class="form-row">
           
            <div class="col-md-4">
              <label for="inputState1">Alegatos presentados por la parte actora: </label>
              <select class="form-control" v-model="moduloseis.alegatos_presentados">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div> 

            
            <div class="col-md-4">
              <label for="inputState1">Alegatos presentados por la parte demandada: </label>
              <select class="form-control" v-model="moduloseis.alegatos_presentados_parte_demandada">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div> 

            <div class="col-md-4">
              <label for="inputState1">Incidentes pendientes por resolver: </label>
              <select class="form-control" v-model="moduloseis.incidentes_pendientes">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div> 

          </div> <br>

          <div class="form-row">
           
            <div class="col-md-4">
              <label for="inputState1">Número de incidentes pendientes por resolver, según tipo: </label>
              <select class="form-control" v-model="moduloseis.numero_incidentes_por_resolver">
                <option selected>Seleccionar</option>
                <option>1.- Impugnación de falsedad de documento</option>
                <option>2.- Nulidad de emplazamiento</option>
              </select>
            </div> 

            <div class="col-md-4">
                <label for="inputState">Número de incidentes resueltos, según tipo:</label>
              <input type="number" class="form-control" v-model="moduloseis.numero_incidentes_resueltos">
            </div>

            <div class="col-md-4">
                <label for="inputState">Número total de acuerdos emitidos en la fase de Audiencia de juicio:</label>
              <input type="number" class="form-control" v-model="moduloseis.numero_total_acuerdos_por_resolver">
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
                <th scope="col"> Alegatos presentados por la parte actora </th>
                <th scope="col"> Alegatos presentados por la parte demandada</th>
                <th scope="col"> Incidentes pendientes por resolver</th>
              </tr>
              <tr v-for="(item, index) in modulo6.data" :key="index">
                <td>{{item.numero_expediente}}</td>
                <td>{{item.alegatos_presentados}}</td>
                <td>{{item.alegatos_presentados_parte_demandada}}</td>
                <td>{{item.incidentes_pendientes}}</td>

              </tr>
          </thead>   
        </table>


       <!-- Paginador -->
       <pagination :data="modulo6" @pagination-change-page="getResultsModuloSeis"> </pagination>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalModuloSeis" tabindex="-1" role="dialog" aria-labelledby="exampleModalModuloSeisLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalModuloSeisLabel">Confirmar elminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" id="id">
                ¿Estas seguro(a) de eliminar el registro seleccionado?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="eliminarModuloSeis('cancelar')">Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" @click="eliminarModuloSeis('aceptar')">Eliminar</button>
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
                modulo6: {},
                moduloseis: {id_expediente: '', alegatos_presentados: '', alegatos_presentados_parte_demandada: '', incidentes_pendientes: '', numero_incidentes_por_resolver: '',numero_incidentes_resueltos: '',numero_total_acuerdos_por_resolver: ''},
                editarActivo: false,
            }
       },
       mounted() {
        // Fetch initial results
        this.getResultsModuloSeis();
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
            getResultsModuloSeis(page = 1) {
              axios.get('/Proyecto-CJ/public/moduloseis?page=' + page)
                .then(response => {
                  this.modulo6 = response.data;
                }).catch(error => {
                    console.log(error.response)
                });
            },
            editarFormulario(item){
              this.editarActivo = true;
              this.moduloseis.id_expediente = item.id_expediente;
              this.moduloseis.alegatos_presentados = item.alegatos_presentados;
              this.moduloseis.alegatos_presentados_parte_demandada = item.alegatos_presentados_parte_demandada;
              this.moduloseis.incidentes_pendientes = item.incidentes_pendientes;
              this.moduloseis.numero_incidentes_por_resolver = item.numero_incidentes_por_resolver;
              this.moduloseis.numero_incidentes_resueltos = item.numero_incidentes_resueltos;
              this.moduloseis.numero_total_acuerdos_por_resolver = item.numero_total_acuerdos_por_resolver;
              this.moduloseis.id_modulo = item.id_modulo;

            },
           editar(item){
              const params = {id_expediente: item.id_expediente,alegatos_presentados: item.alegatos_presentados,alegatos_presentados_parte_demandada: item.alegatos_presentados_parte_demandada,incidentes_pendientes: item.incidentes_pendientes,numero_incidentes_por_resolver: item.numero_incidentes_por_resolver,numero_incidentes_resueltos: item.numero_incidentes_resueltos,numero_total_acuerdos_por_resolver: item.numero_total_acuerdos_por_resolver,};
              axios.put(`/Proyecto-CJ/public/moduloseis/${item.id_modulo}`, params)
                .then(res =>{
                  this.editarActivo = false;
                  this.getResultsModuloSeis(this.modulo6.current_page);
                })
                  
                this.moduloseis.id_expediente = '';
                this.moduloseis.alegatos_presentados = '';
                this.moduloseis.alegatos_presentados_parte_demandada = '';
                this.moduloseis.incidentes_pendientes = '';
                this.moduloseis.numero_incidentes_por_resolver = '';
                this.moduloseis.numero_incidentes_resueltos = '';
                this.moduloseis.numero_total_acuerdos_por_resolver = '';
    

         
            },
            cancelarEdicion(){
              this.editarActivo = false;
              this.moduloseis = {id_expediente: '', alegatos_presentados: '', alegatos_presentados_parte_demandada: '', incidentes_pendientes: '', numero_incidentes_por_resolver: '',numero_incidentes_resueltos: '',numero_total_acuerdos_por_resolver: ''}
            },
            agregar(){

                const params = {
                id_expediente: this.moduloseis.id_expediente,
                alegatos_presentados: this.moduloseis.alegatos_presentados,
                alegatos_presentados_parte_demandada: this.moduloseis.alegatos_presentados_parte_demandada,
                incidentes_pendientes: this.moduloseis.incidentes_pendientes,
                numero_incidentes_por_resolver: this.moduloseis.numero_incidentes_por_resolver,
                numero_incidentes_resueltos: this.moduloseis.numero_incidentes_resueltos,
                numero_total_acuerdos_por_resolver: this.moduloseis.numero_total_acuerdos_por_resolver,
 
                }
                //Accion para limpiar los campos

                this.moduloseis.id_expediente = '';
                this.moduloseis.alegatos_presentados = '';
                this.moduloseis.alegatos_presentados_parte_demandada = '';
                this.moduloseis.incidentes_pendientes = '';
                this.moduloseis.numero_incidentes_por_resolver = '';
                this.moduloseis.numero_incidentes_resueltos = '';
                this.moduloseis.numero_total_acuerdos_por_resolver = '';



                axios.post('/Proyecto-CJ/public/moduloseis', params)     
                    .then(res => {
                        this.getResults(this.moduloseis.last_page);
                    })     
               /* axios.post('/Proyecto-CJ/public/modulocinco', params)     
                    .then(res => {
                        this.getResultsModuloCinco(this.modulocincos.last_page);
                        this.expedientes.length = 0
                        axios.get('/Proyecto-CJ/public/expedientesAll')
                        .then(res => {
                            this.expedientes = res.data;
                        })
                })*/

            },
            confirmar(id){
              $('#exampleModalModuloSeis').modal("show")
              $('#id').val(id)
            },
            eliminarModuloSeis(op){
              if (op === "aceptar") {
                axios.delete(`/Proyecto-CJ/public/moduloseis/` + $("#id").val())
                  .then(()=>{
                      this.getResultsModuloSeis(this.modulo6.current_page);
                      $('#exampleModalModuloSeis').modal("hide")
                  })
              }
              else{
                $('#exampleModalModuloSeis').modal("hide")
              }

            },
       }
    }
</script>


