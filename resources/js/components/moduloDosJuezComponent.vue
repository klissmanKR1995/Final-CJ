<template>
  <div>
    <!-- Modal -->
    <div class="container"> 

     
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
              <tr>
                <th scope="col"> Número de expediente </th>
                <th scope="col"> Monto demandado </th>
                <th scope="col"> Fecha-emisión </th>
                <th scope="col"> Tipo de acuerdo </th>
                <th scope="col"> Fecha-conclusión </th>
                <th scope="col"> Subsana prevención </th>
                <th scope="col"> Contastación demanda</th>
                <th scope="col"> Fecha-no-contesta </th>
                <th scope="col"> Si contesta </th>
                <th scope="col"> Reconviene demanda</th>
                <th scope="col"> Fecha-reconviene </th>
                <th scope="col"> Contesta-reconvenido </th>
                <th scope="col"> Numero de acuerdos </th>
              </tr>
              <tr v-for="(item, index) in modulodoss.data" :key="index">
                <td>{{item.numero_expediente}}</td>
                <td>{{item.monto_demandado}}</td>
                <td>{{item.fecha_emision}}</td>
                <td>{{item.fecha_acuerdo}}</td>
                <td>{{item.subsana_prevencion}}</td>
                <td>{{item.contestacion_demanda}}</td>
                <td>{{item.fecha_no_contesta}}</td>
                <td>{{item.si_contesta}}</td>
                <td>{{item.fecha_si_contesta}}</td>
                <td>{{item.reconviene_demanda}}</td>
                <td>{{item.fecha_reconviene}}</td>
                <td>{{item.contesta_reconvenido}}</td>
                <td>{{item.numero_acuerdos}}</td>

              </tr>
          </thead>   
        </table>


       <!-- Paginador -->
       <pagination :data="modulodoss" @pagination-change-page="getResults"> </pagination>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalModuloDos" tabindex="-1" role="dialog" aria-labelledby="exampleModalModuloDosLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalModuloDosLabel">Confirmar elminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" id="id">
                ¿Estas seguro(a) de eliminar el registro seleccionado?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="eliminarModulodos('cancelar')">Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" @click="eliminarModulodos('aceptar')">Eliminar</button>
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
                modulodoss: {},
                modulodos: {id_expediente: '', monto_demandado: '', fecha_emision: '', tipo_acuerdo: '', subsana_prevencion: '',contestacion_demanda: '', fecha_no_contesta: '', si_contesta: '', fecha_si_contesta: '', reconviene_demanda: '', fecha_reconviene: '', contesta_reconvenido: '', numero_acuerdos: ''},
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
              axios.get('/Proyecto-CJ/public/modulo2?page=' + page)
                .then(response => {
                  this.modulodoss = response.data;
                }).catch(error => {
                    console.log(error.response)
                });
            },
            editarFormulario(item){
              this.editarActivo = true;
              this.modulodos.id_expediente = item.id_expediente;
              this.modulodos.monto_demandado = item.monto_demandado;
              this.modulodos.fecha_emision = item.fecha_emision;
              this.modulodos.tipo_acuerdo = item.tipo_acuerdo;
              this.modulodos.subsana_prevencion = item.subsana_prevencion;
              this.modulodos.contestacion_demanda = item.contestacion_demanda;
              this.modulodos.fecha_no_contesta = item.fecha_no_contesta;
              this.modulodos.si_contesta = item.si_contesta;
              this.modulodos.fecha_si_contesta = item.fecha_si_contesta;
              this.modulodos.reconviene_demanda = item.reconviene_demanda;
              this.modulodos.fecha_reconviene = item.fecha_reconviene;
              this.modulodos.contesta_reconvenido = item.contesta_reconvenido;
              this.modulodos.numero_acuerdos = item.numero_acuerdos;
              this.modulodos.id_modulo = item.id_modulo;

            },
           editar(item){
              const params = {id_expediente: item.id_expediente, monto_demandado: item.monto_demandado, fecha_emision: item.fecha_emision, tipo_acuerdo: item.tipo_acuerdo, subsana_prevencion: item.subsana_prevencion, contestacion_demanda: item.contestacion_demanda, fecha_no_contesta: item.fecha_no_contesta, si_contesta: item.si_contesta, fecha_si_contesta: item.fecha_si_contesta, reconviene_demanda: item.reconviene_demanda, fecha_reconviene: item.fecha_reconviene, contesta_reconvenido: item.contesta_reconvenido, numero_acuerdos: item.numero_acuerdos};
              axios.put(`/Proyecto-CJ/public/modulo2/${item.id_modulo}`, params)
                .then(res =>{
                  this.editarActivo = false;
                  this.getResults(this.modulodoss.current_page);
                })
                  
              this.modulodos.id_expediente = item.id_expediente;
              this.modulodos.monto_demandado = item.monto_demandado;
              this.modulodos.fecha_emision = item.fecha_emision;
              this.modulodos.tipo_acuerdo = item.tipo_acuerdo;
              this.modulodos.subsana_prevencion = item.subsana_prevencion;
              this.modulodos.contestacion_demanda = item.contestacion_demanda;
              this.modulodos.fecha_no_contesta = item.fecha_no_contesta;
              this.modulodos.si_contesta = item.si_contesta;
              this.modulodos.fecha_si_contesta = item.fecha_si_contesta;
              this.modulodos.reconviene_demanda = item.reconviene_demanda;
              this.modulodos.fecha_reconviene = item.fecha_reconviene;
              this.modulodos.contesta_reconvenido = item.contesta_reconvenido;
              this.modulodos.numero_acuerdos = item.numero_acuerdos;
                
            },
            cancelarEdicion(){
              this.editarActivo = false;
              this.modulodos = {id_expediente: '', monto_demandado: '', fecha_emision: '', tipo_acuerdo: '', subsana_prevencion: '',contestacion_demanda: '', fecha_no_contesta: '', si_contesta: '', fecha_si_contesta: '', reconviene_demanda: '', fecha_reconviene: '', contesta_reconvenido: '', numero_acuerdos: ''}
            },
            agregar(){

                //Valida modulouno de formularios
                 //if(this.modulouno.municipios.trim() === ''){
                    //alert('Debes completar todos los campos antes de guardar');
                    //return;
                  //}

                //console.log(this.modulouno.id_expediente, this.modulouno.descripcion); 
                const params = {
                id_expediente: this.modulodos.id_expediente,
                monto_demandado: this.modulodos.monto_demandado,
                fecha_emision: this.modulodos.fecha_emision,
                tipo_acuerdo: this.modulodos.tipo_acuerdo,
                subsana_prevencion: this.modulodos.subsana_prevencion,
                contestacion_demanda: this.modulodos.contestacion_demanda,
                fecha_no_contesta: this.modulodos.fecha_no_contesta,
                si_contesta: this.modulodos.si_contesta,
                fecha_si_contesta: this.modulodos.fecha_si_contesta,
                reconviene_demanda: this.modulodos.reconviene_demanda,
                fecha_reconviene: this.modulodos.fecha_reconviene,
                contesta_reconvenido: this.modulodos.contesta_reconvenido,
                numero_acuerdos: this.modulodos.numero_acuerdos,
 
                }
                //Accion para limpiar los campos

               this.modulodos.id_expediente = '';
              this.modulodos.monto_demandado = '';
              this.modulodos.fecha_emision = '';
              this.modulodos.tipo_acuerdo = '';
              this.modulodos.subsana_prevencion = '';
              this.modulodos.contestacion_demanda = '';
              this.modulodos.fecha_no_contesta = '';
              this.modulodos.si_contesta = '';
              this.modulodos.fecha_si_contesta = '';
              this.modulodos.reconviene_demanda = '';
              this.modulodos.fecha_reconviene = '';
              this.modulodos.contesta_reconvenido = '';
              this.modulodos.numero_acuerdos = '';

                axios.post('/Proyecto-CJ/public/modulo2', params)     
                    .then(res => {
                        this.getResults(this.modulodoss.last_page);
                        this.expedientes.length = 0
                        axios.get('/Proyecto-CJ/public/expedientesAll')
                        .then(res => {
                            this.expedientes = res.data;
                        })
                })

            },
            confirmar(id){
              $('#exampleModalModuloDos').modal("show")
              $('#id').val(id)
            },
            eliminarModulodos(op){
              if (op === "aceptar") {
                axios.delete(`/Proyecto-CJ/public/modulo2/` + $("#id").val())
                  .then(()=>{
                      this.getResults(this.modulodoss.current_page);
                      $('#exampleModalModuloDos').modal("hide")
                  })
              }
              else{
                $('#exampleModalModuloDos').modal("hide")
              }

            },
       }
    }
</script>


