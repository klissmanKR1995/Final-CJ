<template>
  <div>
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


