<template>
  <div>
    <div class="modal-content"> <br>
      <form @submit.prevent="editar(modulotres)" v-if="editarActivo">
      <h5 class="text-center"> Actualizar Información <i> (Modulo - 3) </i> </h5> <br>
        <div class="container">
         
         <div class="form-group">
            <select id="id_expediente" class="form-control" v-model="modulotres.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
          

          <div class="form-row">
          
              <div class="col-md-4">
               <label for="inputState1">Tipo de Audiencia: </label>
                <select id="inputState1" class="form-control" v-model="modulotres.tipo_audiencia">
                  <option selected>Seleccionar</option>
                  <option>1.- Audiencia preliminar</option>
                  <option>2.- Audiencia incidental</option>
                  <option>3.- Audiencia de juicio</option>
                  <option>4.- Audiencia de continuación de juicio</option>
                  <option>5.- Otra</option>
                </select>
              </div>

             <div class="col-md-4">
                <label for="inputState">Fecha y hora de audiencia fijada por la/el juez: </label>
                <input type="date" class="form-control" v-model="modulotres.fecha_audiencia">
              </div>
           
             <div class="col-md-4">
                <label for="inputState">Fecha y hora de inicio de la audiencia: </label>
                <input type="date" class="form-control" v-model="modulotres.fecha_inicio_audiencia">
            </div>

          </div>

          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Fecha y hora de conclusión de la audiencia: </label>
                <input type="date" class="form-control" v-model="modulotres.fecha_conclusion">
             </div>

              <div class="col-md-4">
               <label for="inputState1">Se difiere la Audiencia: </label>
                <select id="inputState1" class="form-control" v-model="modulotres.se_difiere">
                  <option selected>Seleccionar</option>
                  <option>Si</option>
                  <option>No</option>
                </select>
              </div>

              <div class="col-md-4">
               <label for="inputState1">Tipo de audiencia diferida: </label>
                <select id="inputState1" class="form-control" v-model="modulotres.tipo_audiencia_diferida">
                  <option selected>Seleccionar</option>
                  <option>1.- Audiencia preliminar</option>
                  <option>2.- Audiencia incidental</option>
                  <option>3.- Audiencia de juicio</option>
                  <option>4.- Audiencia de continuación de juicio</option>
                  <option>5.- Otra</option>
                </select>
              </div>

          </div> <br>

          <div class="form-row">

            <div class="col-md-4">
             <label for="inputState">Causas de diferimientos de audiencias: </label>
             <input type="text" class="form-control" v-model="modulotres.causas_diferimientos">
            </div>

            <div class="col-md-4">
              <label for="inputState">Fecha en la que se difiere la audiencia: </label>
              <input type="date" class="form-control" v-model="modulotres.fecha_difiere_audiencia">
            </div>

            <div class="col-md-4">
              <label for="inputState">Fecha y hora en que se da continuidad a la audiencia diferida: </label>
              <input type="date" class="form-control" v-model="modulotres.fecha_continuidad">
            </div>

          </div> <br>

      
          <div class="form-row">

            <div class="col-md-4">
              <label for="inputState">Fecha y hora de conclusión de la audiencia diferida: </label>
              <input type="date" class="form-control" v-model="modulotres.fecha_conclusion_diferida">
            </div>

          </div> <br>

         

          <center>    
          <button class="btn btn-primary" type="submit"> Actualizar </button>
          <button class="btn btn-danger" type="submit" @click="cancelarEdicion()"> Cancelar </button>
          </center> <br>
        </div>     
      </form>  

      <form @submit.prevent="agregar" v-else>
      <h4 class="text-center"> Datos de audiencias (Módulo - 3)  </h4> <br>
        <div class="container">
         
                 
         <div class="form-group">
            <select id="id_expediente" class="form-control" v-model="modulotres.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
          

          <div class="form-row">
          
              <div class="col-md-4">
               <label for="inputState1">Tipo de Audiencia: </label>
                <select id="inputState1" class="form-control" v-model="modulotres.tipo_audiencia">
                  <option selected>Seleccionar</option>
                  <option>1.- Audiencia preliminar</option>
                  <option>2.- Audiencia incidental</option>
                  <option>3.- Audiencia de juicio</option>
                  <option>4.- Audiencia de continuación de juicio</option>
                  <option>5.- Otra</option>
                </select>
              </div>

             <div class="col-md-4">
                <label for="inputState">Fecha y hora de audiencia fijada por la/el juez: </label>
                <input type="date" class="form-control" v-model="modulotres.fecha_audiencia">
              </div>
           
             <div class="col-md-4">
                <label for="inputState">Fecha y hora de inicio de la audiencia: </label>
                <input type="date" class="form-control" v-model="modulotres.fecha_inicio_audiencia">
            </div>

          </div>

          <div class="form-row">
             
             <div class="col-md-4">
                <label for="inputState">Fecha y hora de conclusión de la audiencia: </label>
                <input type="date" class="form-control" v-model="modulotres.fecha_conclusion">
             </div>

              <div class="col-md-4">
               <label for="inputState1">Se difiere la Audiencia: </label>
                <select id="inputState1" class="form-control" v-model="modulotres.se_difiere">
                  <option selected>Seleccionar</option>
                  <option>Si</option>
                  <option>No</option>
                </select>
              </div>

              <div class="col-md-4">
               <label for="inputState1">Tipo de audiencia diferida: </label>
                <select id="inputState1" class="form-control" v-model="modulotres.tipo_audiencia_diferida">
                  <option selected>Seleccionar</option>
                  <option>1.- Audiencia preliminar</option>
                  <option>2.- Audiencia incidental</option>
                  <option>3.- Audiencia de juicio</option>
                  <option>4.- Audiencia de continuación de juicio</option>
                  <option>5.- Otra</option>
                </select>
              </div>

          </div> <br>

          <div class="form-row">

            <div class="col-md-4">
             <label for="inputState">Causas de diferimientos de audiencias: </label>
             <input type="text" class="form-control" v-model="modulotres.causas_diferimientos">
            </div>

            <div class="col-md-4">
              <label for="inputState">Fecha en la que se difiere la audiencia: </label>
              <input type="date" class="form-control" v-model="modulotres.fecha_difiere_audiencia">
            </div>

            <div class="col-md-4">
              <label for="inputState">Fecha y hora en que se da continuidad a la audiencia diferida: </label>
              <input type="date" class="form-control" v-model="modulotres.fecha_continuidad">
            </div>

          </div> <br>

      
          <div class="form-row">

            <div class="col-md-4">
              <label for="inputState">Fecha y hora de conclusión de la audiencia diferida: </label>
              <input type="date" class="form-control" v-model="modulotres.fecha_conclusion_diferida">
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
                <th scope="col"> Tipo </th>
                <th scope="col"> Fecha </th>
                <th scope="col"> Fecha-Inicio </th>
                <th scope="col"> Fecha-conclusión </th>
                <th scope="col"> Se difiere </th>
                <th scope="col"> Tipo-diferida </th>
                <th scope="col"> Causas </th>
                <th scope="col"> Fecha-difiere </th>
                <th scope="col"> Fecha-continuidad</th>
                <th scope="col"> Fecha-conclusión-diferida </th>
                <th scope="col"> Actualizar - Registro</th>
                <th scope="col"> Eliminar - Registro</th>
              </tr>
              <tr v-for="(item, index) in modulotress.data" :key="index">
                <td>{{item.numero_expediente}}</td>
                <td>{{item.tipo_audiencia}}</td>
                <td>{{item.fecha_audiencia}}</td>
                <td>{{item.fecha_inicio_audiencia}}</td>
                <td>{{item.fecha_conclusion}}</td>
                <td>{{item.se_difiere}}</td>
                <td>{{item.tipo_audicencia_diferida}}</td>
                <td>{{item.causas_diferimientos}}</td>
                <td>{{item.fecha_difiere_audiencia}}</td>
                <td>{{item.fecha_continuidad}}</td>
                <td>{{item.fecha_conclusion_diferida}}</td>
                <td><button class="btn btn-primary" @click="editarFormulario(item)">Actualizar</button></td>
              <td><button class="btn btn-danger"  @click="confirmar(item.id_modulo)">Eliminar</button></td>
              </tr>
          </thead>   
        </table>


       <!-- Paginador -->
       <pagination :data="modulotress" @pagination-change-page="getResults"> </pagination>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalModuloTres" tabindex="-1" role="dialog" aria-labelledby="exampleModalModuloTresLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalModuloTresLabel">Confirmar elminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" id="id">
                ¿Estas seguro(a) de eliminar el registro seleccionado?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="eliminarModulotres('cancelar')">Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" @click="eliminarModulotres('aceptar')">Eliminar</button>
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
                modulotress: {},
                modulotres: {id_expediente: '', tipo_audiencia: '', fecha_audiencia: '', fecha_inicio_audiencia: '', fecha_conclusion: '',se_difiere: '', tipo_audiencia_diferida: '', causas_diferimientos: '', fecha_difiere_audiencia: '', fecha_continuidad: '', fecha_conclusion_diferida: ''},
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
              axios.get('/Proyecto-CJ/public/modulo3?page=' + page)
                .then(response => {
                  this.modulotress = response.data;
                }).catch(error => {
                    console.log(error.response)
                });
            },
            editarFormulario(item){
              this.editarActivo = true;
              this.modulotres.id_expediente = item.id_expediente;
              this.modulotres.tipo_audiencia = item.tipo_audiencia;
              this.modulotres.fecha_audiencia = item.fecha_audiencia;
              this.modulotres.fecha_inicio_audiencia = item.fecha_inicio_audiencia;
              this.modulotres.fecha_conclusion = item.fecha_conclusion;
              this.modulotres.se_difiere = item.se_difiere;
              this.modulotres.tipo_audiencia_diferida = item.tipo_audiencia_diferida;
              this.modulotres.causas_diferimientos = item.causas_diferimientos;
              this.modulotres.fecha_difiere_audiencia = item.fecha_difiere_audiencia;
              this.modulotres.fecha_continuidad = item.fecha_continuidad;
              this.modulotres.fecha_conclusion_diferida = item.fecha_conclusion_diferida;
              this.modulotres.id_modulo = item.id_modulo;

            },
           editar(item){
              const params = {id_expediente: item.id_expediente, tipo_audiencia: item.tipo_audiencia, fecha_audiencia: item.fecha_audiencia, fecha_inicio_audiencia: item.fecha_inicio_audiencia, fecha_conclusion: item.fecha_conclusion, se_difiere: item.se_difiere, tipo_audiencia_diferida: item.tipo_audiencia_diferida, causas_diferimientos: item.causas_diferimientos, fecha_difiere_audiencia: item.fecha_difiere_audiencia, fecha_continuidad: item.fecha_continuidad, fecha_conclusion_diferida: item.fecha_conclusion_diferida};
              axios.put(`/Proyecto-CJ/public/modulo3/${item.id_modulo}`, params)
                .then(res =>{
                  this.editarActivo = false;
                  this.getResults(this.modulotress.current_page);
                })
                  
              this.modulotres.id_expediente = item.id_expediente;
              this.modulotres.tipo_audiencia = item.tipo_audiencia;
              this.modulotres.fecha_audiencia = item.fecha_audiencia;
              this.modulotres.fecha_inicio_audiencia = item.fecha_inicio_audiencia;
              this.modulotres.fecha_conclusion = item.fecha_conclusion;
              this.modulotres.se_difiere = item.se_difiere;
              this.modulotres.tipo_audiencia_diferida = item.tipo_audiencia_diferida;
              this.modulotres.causas_diferimientos = item.causas_diferimientos;
              this.modulotres.fecha_difiere_audiencia = item.fecha_difiere_audiencia;
              this.modulotres.fecha_continuidad = item.fecha_continuidad;
              this.modulotres.fecha_conclusion_diferida = item.fecha_conclusion_diferida;
                
            },
            cancelarEdicion(){
              this.editarActivo = false;
              this.modulotres = {id_expediente: '', tipo_audiencia: '', fecha_audiencia: '', fecha_inicio_audiencia: '', fecha_conclusion: '',se_difiere: '', tipo_audiencia_diferida: '', causas_diferimientos: '', fecha_difiere_audiencia: '', fecha_continuidad: '', fecha_conclusion_diferida: ''}
            },
            agregar(){

                //Valida modulouno de formularios
                 //if(this.modulouno.municipios.trim() === ''){
                    //alert('Debes completar todos los campos antes de guardar');
                    //return;
                  //}

                //console.log(this.modulouno.id_expediente, this.modulouno.descripcion); 
                const params = {
                id_expediente: this.modulotres.id_expediente,
                tipo_audiencia: this.modulotres.tipo_audiencia,
                fecha_audiencia: this.modulotres.fecha_audiencia,
                fecha_inicio_audiencia: this.modulotres.fecha_inicio_audiencia,
                fecha_conclusion: this.modulotres.fecha_conclusion,
                se_difiere: this.modulotres.se_difiere,
                tipo_audiencia_diferida: this.modulotres.tipo_audiencia_diferida,
                causas_diferimientos: this.modulotres.causas_diferimientos,
                fecha_difiere_audiencia: this.modulotres.fecha_difiere_audiencia,
                fecha_continuidad: this.modulotres.fecha_continuidad,
                fecha_conclusion_diferida: this.modulotres.fecha_conclusion_diferida,
 
                }
                //Accion para limpiar los campos

                this.modulotres.id_expediente = '';
                this.modulotres.tipo_audiencia = '';
                this.modulotres.fecha_audiencia = '';
                this.modulotres.fecha_inicio_audiencia = '';
                this.modulotres.fecha_conclusion = '';
                this.modulotres.se_difiere = '';
                this.modulotres.tipo_audiencia_diferida = '';
                this.modulotres.causas_diferimientos = '';
                this.modulotres.fecha_difiere_audiencia = '';
                this.modulotres.fecha_continuidad = '';
                this.modulotres.fecha_conclusion_diferida = '';
               

                axios.post('/Proyecto-CJ/public/modulo3', params)     
                    .then(res => {
                        this.getResults(this.modulotress.last_page);
                        this.expedientes.length = 0
                        axios.get('/Proyecto-CJ/public/expedientesAll')
                        .then(res => {
                            this.expedientes = res.data;
                        })
                })

            },
            confirmar(id){
              $('#exampleModalModuloTres').modal("show")
              $('#id').val(id)
            },
            eliminarModulotres(op){
              if (op === "aceptar") {
                axios.delete(`/Proyecto-CJ/public/modulo3/` + $("#id").val())
                  .then(()=>{
                      this.getResults(this.modulotress.current_page);
                      $('#exampleModalModuloTres').modal("hide")
                  })
              }
              else{
                $('#exampleModalModuloTres').modal("hide")
              }

            },
       }
    }
</script>


