<template>
  <div>
    <div class="modal-content"> <br>
      <form @submit.prevent="editar(modulotres)" v-if="editarActivo">
      <h5 class="text-center"> Actualizar Información <i> (Modulo - I) </i> </h5> <br>
        <div class="container">
         
         <div class="form-group">
            <select id="id_expediente" class="form-control" v-model="modulotres.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
                
           <div class="form-row">
            <div class="col-md-4">
              <label for="inputState">Fecha en que el juez ordena el emplazamiento</label>
              <input type="date" class="form-control" v-model="modulotres.fecha_juez_emplazamiento">
            </div>
            <div class="col-md-4">
              <label for="inputState">Mecanismos para realizar el emplazamiento</label>
              <vue-select class="vue-select1"  label="valor_variable" :options='
                mecanismosRealizar' :model.sync="result1" v-model="modulotres.mecanismos_realizar_emplazamiento"></vue-select>
            </div>
            <div class="col-md-4">
              <label for="inputState">Pais señalado emplazamiento</label>
              <vue-select class="vue-select1"  label="valor_variable" :options='
                paisEmplazamiento' :model.sync="result1" v-model="modulotres.pais_emplazamiento"></vue-select>
            </div>
          </div> <br>

          <div class="form-row">
            <div class="col-md-4">
              <label for="inputState">Estado señalado emplazamiento</label>
              <vue-select class="vue-select1"  label="valor_variable" :options='
                estadoEmplazamiento' :model.sync="result1" v-model="modulotres.estado_emplazamiento"></vue-select>
            </div>
            <div class="col-md-4">
              <label for="inputState">Municipio señalado emplazamiento</label>
              <vue-select class="vue-select1"  label="valor_variable" :options='
                municipioEmplazamiento' :model.sync="result1" v-model="modulotres.municipio_emplazamiento"></vue-select>
            </div>
            <div class="col-md-4">
              <label for="inputState">Código postal señalado emplazamiento</label>
              <vue-select class="vue-select1"  label="valor_variable" :options='
                codigoPostal' :model.sync="result1" v-model="modulotres.codigo_postal"></vue-select>
            </div>
          </div> <br>

          <div class="form-row">
            <div class="col-md-4">
              <label for="inputState">  Número de visitas para realizar el emplazamiento </label>
              <input type="text" class="form-control" v-model="modulotres.numero_visitas">
            </div>
            <div class="col-md-4">
             <label for="inputState">¿Se realiza el emplazamiento?</label>
              <select class="form-control" v-model="modulotres.se_realizo">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputState">Mecanismos de realizacion del emplazamiento</label>
                <vue-select class="vue-select1"  label="valor_variable" :options='
                  mecanismosRealizacion' :model.sync="result1" v-model="modulotres.mecanismos_realizacion_emplazamiento"></vue-select>
            </div>
          </div> <br>

          <div class="form-row">
            <div class="col-md-4">
              <label for="inputState">Si se realizo el emplezamiento anotar fecha</label>
              <input type="date" class="form-control" v-model="modulotres.si_fecha">
            </div>
            <div class="col-md-4">
             <label for="inputState">No se realiza el emplazamiento, motivos</label>
             <input type="text" class="form-control" v-model="modulotres.no_motivos">
            </div>
          </div> <br>

          <center>    
          <button class="btn btn-primary" type="submit"> Actualizar </button>
          <button class="btn btn-danger" type="submit" @click="cancelarEdicion()"> Cancelar </button>
          </center> <br>
        </div>     
      </form>  

      <form @submit.prevent="agregar" v-else>
      <h4 class="text-center"> Datos emplazamiento (Modulo X)  </h4> <br>
        <div class="container">
         
         <div class="form-group">
            <select id="id_expediente" class="form-control" v-model="modulotres.id_expediente">
              <option value="">Número de expediente </option>
              <option v-for="(item, index) in expedientes" :value="item.id_expediente">{{item.numero_expediente}}</option>
            </select>
          </div>
                
         <div class="form-row">
            <div class="col-md-4">
              <label for="inputState">Fecha en que el juez ordena el emplazamiento</label>
              <input type="date" class="form-control" v-model="modulotres.fecha_juez_emplazamiento">
            </div>
            <div class="col-md-4">
              <label for="inputState">Mecanismos para realizar el emplazamiento</label>
              <vue-select class="vue-select1"  label="valor_variable" :options='
                mecanismosRealizar' :model.sync="result1" v-model="modulotres.mecanismos_realizar_emplazamiento"></vue-select>
            </div>
            <div class="col-md-4">
              <label for="inputState">Pais señalado emplazamiento</label>
              <vue-select class="vue-select1"  label="valor_variable" :options='
                paisEmplazamiento' :model.sync="result1" v-model="modulotres.pais_emplazamiento"></vue-select>
            </div>
          </div> <br>

          <div class="form-row">
            <div class="col-md-4">
              <label for="inputState">Estado señalado emplazamiento</label>
              <vue-select class="vue-select1"  label="valor_variable" :options='
                estadoEmplazamiento' :model.sync="result1" v-model="modulotres.estado_emplazamiento"></vue-select>
            </div>
            <div class="col-md-4">
              <label for="inputState">Municipio señalado emplazamiento</label>
              <vue-select class="vue-select1"  label="valor_variable" :options='
                municipioEmplazamiento' :model.sync="result1" v-model="modulotres.municipio_emplazamiento"></vue-select>
            </div>
            <div class="col-md-4">
              <label for="inputState">Código postal señalado emplazamiento</label>
              <vue-select class="vue-select1"  label="valor_variable" :options='
                codigoPostal' :model.sync="result1" v-model="modulotres.codigo_postal"></vue-select>
            </div>
          </div> <br>

          <div class="form-row">
            <div class="col-md-4">
              <label for="inputState"> Número de visitas para realizar el emplazamiento a la parte demandada</label>
              <input type="text" class="form-control" v-model="modulotres.numero_visitas">
            </div>
            <div class="col-md-4">
             <label for="inputState">¿Se realiza el emplazamiento?</label>
              <select class="form-control" v-model="modulotres.se_realizo">
                <option selected>Seleccionar</option>
                <option>Si</option>
                <option>No</option>
              </select>
            </div>
            <div class="col-md-4">
              <label for="inputState">Mecanismos de realizacion del emplazamiento</label>
                <vue-select class="vue-select1"  label="valor_variable" :options='
                  mecanismosRealizacion' :model.sync="result1" v-model="modulotres.mecanismos_realizacion_emplazamiento"></vue-select>
            </div>
          </div> <br>

          <div class="form-row">
            <div class="col-md-4">
              <label for="inputState">Si se realizo el emplezamiento anotar fecha</label>
              <input type="date" class="form-control" v-model="modulotres.si_fecha">
            </div>
            <div class="col-md-4">
             <label for="inputState">No se realiza el emplazamiento, motivos</label>
             <input type="text" class="form-control" v-model="modulotres.no_motivos">
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
                <th scope="col"> Fecha Juez Emplazamiento </th>
                <th scope="col"> Mecanismos Realizar Emplazamiento </th>
                <th scope="col"> Pais Emplazamiento </th>
                <th scope="col"> Estado Emplazamiento </th>
                <th scope="col"> Municipio Emplazamiento </th>
                <th scope="col"> Codigo Postal </th>
                <th scope="col"> Número Visitas </th>
                <th scope="col"> Se realizo </th>
                <th scope="col"> Mecanismos de realización </th>
                <th scope="col"> Si, Fecha </th>
                <th scope="col"> No, Motivos </th>
              </tr>
              <tr v-for="(item, index) in modulotress.data" :key="index">
                <td>{{item.numero_expediente}}</td>
                <td>{{item.fecha_juez_emplazamiento}}</td>
                <td>{{item.mecanismos_realizar_emplazamiento}}</td>
                <td>{{item.pais_emplazamiento}}</td>
                <td>{{item.estado_emplazamiento}}</td>
                <td>{{item.municipio_emplazamiento}}</td>
                <td>{{item.codigo_postal}}</td>
                <td>{{item.numero_visitas}}</td>
                <td>{{item.se_realizo}}</td>
                <td>{{item.mecanismos_realizacion_emplazamiento}}</td>
                <td>{{item.si_fecha}}</td>
                <td>{{item.no_motivos}}</td>
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
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="eliminarModuloTres('cancelar')">Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" @click="eliminarModuloTres('aceptar')">Eliminar</button>
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
                modulotres: {id_expediente: '', fecha_juez_emplazamiento: '', mecanismos_realizar_emplazamiento: '', pais_emplazamiento: '', estado_emplazamiento: '',municipio_emplazamiento: '', codigo_postal: '', numero_visitas: '', se_realizo: '', mecanismos_realizacion_emplazamiento: '', si_fecha: '', no_motivos: '', contestacion_demanda: '', fecha_declaracion_rebeldia: '', si_contesta_demanda: '', fecha_contestacion_demanda: '', reconviene_demanda: '', fecha_reconvencion_demanda: '', contesta_reconvencion: '', numero_total_acuerdos: ''},
                mecanismosRealizar: [] ,
                paisEmplazamiento: [] ,
                estadoEmplazamiento: [] ,
                municipioEmplazamiento: [] ,
                codigoPostal: [] ,
                mecanismosRealizacion: [] ,
                siContesta: [] ,
                demandadoReconviene: [] ,
                reconvenidoReconvencion: [] ,
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
            axios.get('/Proyecto-CJ/public/mecanismosRealizarCatalogos')
            .then(res => {
                this.mecanismosRealizar = res.data;
            }).catch(error => {
                console.log(error.response)
            });
            axios.get('/Proyecto-CJ/public/paisEmplazamientoCatalogos')
            .then(res => {
                this.paisEmplazamiento = res.data;
            }).catch(error => {
                console.log(error.response)
            });
            axios.get('/Proyecto-CJ/public/estadoEmplazamientoCatalogos')
            .then(res => {
                this.estadoEmplazamiento = res.data;
            }).catch(error => {
                console.log(error.response)
            });
            axios.get('/Proyecto-CJ/public/municipioEmplazamientoCatalogos')
            .then(res => {
                this.municipioEmplazamiento = res.data;
            }).catch(error => {
                console.log(error.response)
            });
            axios.get('/Proyecto-CJ/public/codigoPostalCatalogos')
            .then(res => {
                this.codigoPostal = res.data;
            }).catch(error => {
                console.log(error.response)
            });
            axios.get('/Proyecto-CJ/public/mecanismosRealizacionCatalogos')
            .then(res => {
                this.mecanismosRealizacion = res.data;
            }).catch(error => {
                console.log(error.response)
            });
            axios.get('/Proyecto-CJ/public/siContestaCatalogos')
            .then(res => {
                this.siContesta = res.data;
            }).catch(error => {
                console.log(error.response)
            });
       },
        methods:{
            getResults(page = 1) {
              axios.get('/Proyecto-CJ/public/modulotres?page=' + page)
                .then(response => {
                  this.modulotress = response.data;
                }).catch(error => {
                    console.log(error.response)
                });
            },
            editarFormulario(item){
              this.editarActivo = true;
              this.modulotres.id_expediente = item.id_expediente;
              this.modulotres.fecha_juez_emplazamiento = item.fecha_juez_emplazamiento;
              this.modulotres.mecanismos_realizar_emplazamiento = item.mecanismos_realizar_emplazamiento;
              this.modulotres.pais_emplazamiento = item.pais_emplazamiento;
              this.modulotres.estado_emplazamiento = item.estado_emplazamiento;
              this.modulotres.municipio_emplazamiento = item.municipio_emplazamiento;
              this.modulotres.codigo_postal = item.codigo_postal;
              this.modulotres.numero_visitas = item.numero_visitas;
              this.modulotres.se_realizo = item.se_realizo;
              this.modulotres.mecanismos_realizacion_emplazamiento = item.mecanismos_realizacion_emplazamiento;
              this.modulotres.si_fecha = item.si_fecha;
              this.modulotres.no_motivos = item.no_motivos;
              this.modulotres.contestacion_demanda = item.contestacion_demanda;
              this.modulotres.fecha_declaracion_rebeldia = item.fecha_declaracion_rebeldia;
              this.modulotres.si_contesta_demanda = item.si_contesta_demanda;
              this.modulotres.fecha_contestacion_demanda = item.fecha_contestacion_demanda;
              this.modulotres.reconviene_demanda = item.reconviene_demanda;
              this.modulotres.fecha_reconvencion_demanda = item.fecha_reconvencion_demanda;
              this.modulotres.contesta_reconvencion = item.contesta_reconvencion;
              this.modulotres.numero_total_acuerdos = item.numero_total_acuerdos;
              this.modulotres.id_modulotres = item.id_modulotres;

            },
           editar(item){
              const params = {id_expediente: item.id_expediente, fecha_juez_emplazamiento: item.fecha_juez_emplazamiento, mecanismos_realizar_emplazamiento: item.mecanismos_realizar_emplazamiento, pais_emplazamiento: item.pais_emplazamiento, estado_emplazamiento: item.estado_emplazamiento, municipio_emplazamiento: item.municipio_emplazamiento, codigo_postal: item.codigo_postal, numero_visitas: item.numero_visitas, se_realizo: item.se_realizo, mecanismos_realizacion_emplazamiento: item.mecanismos_realizacion_emplazamiento, si_fecha: item.si_fecha, no_motivos: item.no_motivos, contestacion_demanda: item.contestacion_demanda, fecha_declaracion_rebeldia: item.fecha_declaracion_rebeldia, si_contesta_demanda: item.si_contesta_demanda, fecha_contestacion_demanda: item.fecha_contestacion_demanda, reconviene_demanda: item.reconviene_demanda, fecha_reconvencion_demanda: item.fecha_reconvencion_demanda, contesta_reconvencion: item.contesta_reconvencion, numero_total_acuerdos: item.numero_total_acuerdos};
              axios.put(`/Proyecto-CJ/public/modulotres/${item.id_modulotres}`, params)
                .then(res =>{
                  this.editarActivo = false;
                  this.getResults(this.modulotress.current_page);
                })
                  
                this.modulotres.id_expediente = '';
                this.modulotres.fecha_juez_emplazamiento = '';
                this.modulotres.mecanismos_realizar_emplazamiento = '';
                this.modulotres.pais_emplazamiento = '';
                this.modulotres.estado_emplazamiento = '';
                this.modulotres.municipio_emplazamiento = '';
                this.modulotres.codigo_postal = '';
                this.modulotres.numero_visitas = '';
                this.modulotres.se_realizo = '';
                this.modulotres.mecanismos_realizacion_emplazamiento = '';
                this.modulotres.si_fecha = '';
                this.modulotres.no_motivos = '';
                this.modulotres.contestacion_demanda = '';
                this.modulotres.fecha_declaracion_rebeldia = '';
                this.modulotres.si_contesta_demanda = '';
                this.modulotres.fecha_contestacion_demanda = '';
                this.modulotres.reconviene_demanda = '';
                this.modulotres.fecha_reconvencion_demanda = '';
                this.modulotres.numero_total_acuerdos = '';
            },
            cancelarEdicion(){
              this.editarActivo = false;
              this.modulotres = {id_expediente: '', fecha_juez_emplazamiento: '', mecanismos_realizar_emplazamiento: '', pais_emplazamiento: '', estado_emplazamiento: '',municipio_emplazamiento: '', codigo_postal: '', numero_visitas: '', se_realizo: '', mecanismos_realizacion_emplazamiento: '', si_fecha: '', no_motivos: '', contestacion_demanda: '', fecha_declaracion_rebeldia: '', si_contesta_demanda: '', fecha_contestacion_demanda: '', reconviene_demanda: '', fecha_reconvencion_demanda: '', contesta_reconvencion: '', numero_total_acuerdos: ''}
            },
            agregar(){

                //Valida modulotres de formularios
                 //if(this.modulotres.municipios.trim() === ''){
                    //alert('Debes completar todos los campos antes de guardar');
                    //return;
                  //}

                //console.log(this.modulotres.id_expediente, this.modulotres.descripcion); 
                const params = {
                id_expediente: this.modulotres.id_expediente,
                fecha_juez_emplazamiento: this.modulotres.fecha_juez_emplazamiento,
                mecanismos_realizar_emplazamiento: this.modulotres.mecanismos_realizar_emplazamiento.valor_variable,
                pais_emplazamiento: this.modulotres.pais_emplazamiento.valor_variable,
                estado_emplazamiento: this.modulotres.estado_emplazamiento.valor_variable,
                municipio_emplazamiento: this.modulotres.municipio_emplazamiento.valor_variable,
                codigo_postal: this.modulotres.codigo_postal.valor_variable,
                numero_visitas: this.modulotres.numero_visitas,
                se_realizo: this.modulotres.se_realizo,
                mecanismos_realizacion_emplazamiento: this.modulotres.mecanismos_realizacion_emplazamiento.valor_variable,
                si_fecha: this.modulotres.si_fecha,
                no_motivos: this.modulotres.no_motivos,
                contestacion_demanda: this.modulotres.contestacion_demanda,
                fecha_declaracion_rebeldia: this.modulotres.fecha_declaracion_rebeldia,
                si_contesta_demanda: this.modulotres.si_contesta_demanda.valor_variable,
                fecha_contestacion_demanda: this.modulotres.fecha_contestacion_demanda,
                reconviene_demanda: this.modulotres.reconviene_demanda,
                fecha_reconvencion_demanda: this.modulotres.fecha_reconvencion_demanda,
                contesta_reconvencion: this.modulotres.contesta_reconvencion,
                numero_total_acuerdos: this.modulotres.numero_total_acuerdos,
                }
                //Accion para limpiar los campos

                this.modulotres.id_expediente = '';
                this.modulotres.fecha_juez_emplazamiento = '';
                this.modulotres.mecanismos_realizar_emplazamiento = '';
                this.modulotres.pais_emplazamiento = '';
                this.modulotres.estado_emplazamiento = '';
                this.modulotres.municipio_emplazamiento = '';
                this.modulotres.codigo_postal = '';
                this.modulotres.numero_visitas = '';
                this.modulotres.se_realizo = '';
                this.modulotres.mecanismos_realizacion_emplazamiento = '';
                this.modulotres.si_fecha = '';
                this.modulotres.no_motivos = '';
                this.modulotres.contestacion_demanda = '';
                this.modulotres.fecha_declaracion_rebeldia = '';
                this.modulotres.si_contesta_demanda = '';
                this.modulotres.fecha_contestacion_demanda = '';
                this.modulotres.reconviene_demanda = '';
                this.modulotres.fecha_reconvencion_demanda = '';
                this.modulotres.contesta_reconvencion = '';
                this.modulotres.numero_total_acuerdos = '';

                axios.post('/Proyecto-CJ/public/modulotres', params)     
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
            eliminarModuloTres(op){
              if (op === "aceptar") {
                axios.delete(`/Proyecto-CJ/public/modulotres/` + $("#id").val())
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


