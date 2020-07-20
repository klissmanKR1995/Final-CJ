<template>
  <div>
    <div class="modal-content"> <br>
      <h5 class="text-center"> Actualizar Información <i> (users) </i> </h5> <br>
      <form  @submit.prevent="editar(user)" v-if="editarActivo">        
                
         <input type="text" class="form-control mb-2" v-model="user.name" placeholder="Nombre del Usuario" ><br>

        <input type="text" class="form-control mb-2" v-model="user.email" placeholder="Correo Electronico"  ><br>

        <input type="text" class="form-control mb-2" v-model="user.password" placeholder="contraseña"><br>

        <div class="form-group">
          <select id="inputStateUsersGuardar" v-model="user.role_id" class="form-control" >
            <option value="">Rol del usuario </option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
          </select>
        </div>

        <center>    
        <div class="alert alert-danger" role="alert" id="existeAlertaUser">
          Registro existente, verifique la información a almacenar
        </div>
        <button class="btn btn-primary" type="submit" id="guardarUser"> Actualizar </button>
        <button class="btn btn-danger" type="submit" @click="cancelarEdicion()"> Cancelar </button>
        </center> <br>   
      </form>  






      <form @submit.prevent="agregar" v-else>

        <h4 class="text-center"> Usuarios </h4> <br>

         <input type="text" class="form-control mb-2" v-model="user.name" placeholder="Nombre del Usuario" ><br>

        <input type="text" class="form-control mb-2" v-model="user.email" placeholder="Correo Electronico"  ><br>

        <input type="text" class="form-control mb-2" v-model="user.password" placeholder="contraseña"><br>

        <div class="form-group">
          <select id="inputStateUsersGuardar"  v-model="user.role_id" class="form-control" >
            <option value="">Rol del usuario </option>
            <option>1</option>
            <option>2</option>
            <option>3</option>
            <option>4</option>
            <option>5</option>
            <option>6</option>
            <option>7</option>
          </select>
        </div>

    
        <center>    
        <div class="alert alert-danger" role="alert" id="existeAlertaUser">
          Registro existente, verifique la información a almacenar
        </div>
        <button class="btn btn-danger" type="submit" id="guardarUser"> Guardar </button> 
        </center><br>
      </form>  
      </div>



     <div class="container">
      <table class="table table-striped">
        <thead>
            <tr>
              <th scope="col"> Nombre </th>
              <th scope="col"> email </th>
              <th scope="col"> Fecha de registro </th>
            </tr>
            <tr v-for="(item, index) in users.data" :key="index">
              <td>{{item.name}}</td>
              <td>{{item.email}}</td>
              <td> <span class="badge badge-primary"> {{item.created_at}} </span> </td>
             <td><button class="btn btn-primary" @click="editarFormulario(item)">Actualizar</button></td>
              <td><button class="btn btn-danger" @click="confirmar(item.id)">Eliminar</button></td>
            </tr>
        </thead>   
      </table>
       <pagination :data="users" @pagination-change-page="getResultsUsers">
      </pagination>
    </div>  

    <!-- Modal -->
    <div class="modal fade" id="modal_users" tabindex="-1" role="dialog" aria-labelledby="modal_usersLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="modal_usersLabel">Confirmar elminación</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <input type="hidden" name="id" id="id">
            ¿Estas seguro(a) de eliminar el registro seleccionado?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" @click="eliminarUser('cancelar')">Cancelar</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal" @click="eliminarUser('aceptar')">Eliminar</button>
          </div>
        </div>
      </div>
    </div> 
  </div>          


      </div>     
</template>


<script>
    export default {
       data(){
            return{
                laravelData: {},
                users: {},
                user: {name: '', email: '',password: '',role_id: ''},
                editarActivo: false
            }
       },
       mounted() {
        // Fetch initial results
        this.getResultsUsers();
        $("#existeAlertaUser").hide()
      },
       created(){
            axios.get('/Proyecto-CJ/public/usuarios')
            .then(res => {
                this.users = res.data;
                
            })
       },
       methods:{
            getResultsUsers(page = 1) {
              axios.get('/Proyecto-CJ/public/usuarios?page=' + page)
                .then(response => {
                  this.users = response.data;
                });
            },
            editarFormulario(item){
              this.editarActivo = true;
              this.user.name = item.name;
              this.user.email = item.email;
              this.user.password = item.password;
              this.user.role_id = item.role_id;
              this.user.id = item.id;
            },
           editar(item){
              const params = {name: item.name, email: item.email, password: item.password, role_id: item.role_id};
              axios.put(`/Proyecto-CJ/public/usuarios/${item.id}`, params)
                .then(res =>{

                  this.editarActivo = false;
                  this.user = {name: '', email: '', password: '', role_id: ''}
                  this.getResultsUsers(this.users.current_page);
                })
            },
            cancelarEdicion(){
              this.editarActivo = false;
              this.user = {name: '', email: '', password: '', role_id: ''}
            },
            agregar(){
                //Valida materia de formularios
                 if(this.user.name.trim() === '', this.user.email.trim() === ''){
                    alert('Debes completar todos los campos antes de guardar');
                    return;
                  }

                //console.log(this.materia.nombre_materia, this.materia.descripcion); 
                const params = {
                name: this.user.name,
                email: this.user.email,
                password: this.user.password,
                role_id: this.user.role_id,
                }
                //Accion para limpiar los campos

                this.user.name = '';
                this.user.email = '';
                this.user.password = '';
                this.user.role_id = '';
                
                axios.post('/Proyecto-CJ/public/usuarios', params)     
                    .then(res => {
                        this.getResultsUsers(this.users.last_page);
                    })     
            },
            confirmar(id){
              $('#modal_users').modal("show")
              $('#id').val(id)
            },
            eliminarUser(op){
              if (op === "aceptar") {
                axios.delete(`/Proyecto-CJ/public/usuarios/` + $("#id").val())
                  .then(()=>{
                      this.getResultsUsers(this.users.current_page);
                      $('#modal_users').modal("hide")
                  })
              }
              else{
                $('#modal_users').modal("hide")
              }

            },

       }
    }
</script>

