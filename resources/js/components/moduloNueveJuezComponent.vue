<template>
    <div class="container">  
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
              <tr>
                <th scope="col"> Número de expediente </th>
                <th scope="col"> Suerte Principal </th>
                <th scope="col"> Intereses Ordinario </th>
                <th scope="col"> Intereses moratorios </th>
              <tr v-for="(item, index) in modulonueves.data" :key="index">
                <td>{{item.numero_expediente}}</td>
                <td>{{item.suerte_principal_liquidada_en_la_sentencia}}</td>
                <td>{{item.intereses_ordinarios_liquidados_en_la_sentencia}}</td>
                <td>{{item.intereses_moratorios_liquidados_en_la_sentencia}}</td>
              </tr>
          </thead>   
        </table>


       <!-- Paginador -->
       <pagination :data="modulonueves" @pagination-change-page="getResults"> </pagination>


        <!-- Modal -->
        <div class="modal fade" id="exampleModalModuloNueve" tabindex="-1" role="dialog" aria-labelledby="exampleModalModuloNueveLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalModuloNueveLabel">Confirmar elminación</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <input type="hidden" name="id" id="id">
                ¿Estas seguro(a) de eliminar el registro seleccionado?
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-dismiss="modal" @click="eliminarModulonueve('cancelar')">Cancelar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" @click="eliminarModulonueve('aceptar')">Eliminar</button>
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


