<script>
import Layout from "../Layout.vue"



export default {
    components: { Layout },

    props: {
      errors: Object,
      users: Object
    },

    data: () => {
        return {
            form: {
                name: null,
                email: null,
                password: null,
            }
        };
    },

    methods:{
      handleForm(){
        this.$inertia.post('register', this.form);
      }
    }
   
}
</script>


<template>
  <Layout>

    <div>
      <div v-for="(erro, index) in errors" :key="index" style="color:red">
        {{ erro }}
      </div>
      <form @submit.prevent="handleForm">
        <input type="text" placeholder="Nome" v-model="form.name">
        

        <input type="text" placeholder="E-mail" v-model="form.email">

        <input type="password" placeholder="Senha" v-model="form.password">

        <button type="submit">Cadastrar Usuário</button>
      </form>
    </div>

      <div v-if="$page.props.flash.success" class="alert alert-success alert-dismissible fade show" role="alert">
          {{ $page.props.flash.success }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>
      <div v-if="$page.props.flash.error" class="alert alert-danger alert-dismissible fade show" role="alert">
          {{ $page.props.flash.error }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
      </div>

    <div class="title">
      <h3>Usuários</h3>
    </div>
    <table>
      <thead>
        <tr>
          <th scope="col">ID</th>
          <th scope="col">Nome</th>
          <th scope="col">E-mail</th>
        </tr>
      </thead>
      <tbody>
        <tr v-foreach="user in users">
       
              <td>{{ user.id }}</td>
              <td>{{ user.name }}</td>
              <td>{{ user.email }}</td>
     
          
        </tr>
      </tbody>
    </table>


  </Layout>
</template>

<style scoped>
  form{
    margin-top: 15px;
  }

  .title{
    margin-top: 50px
  }

</style>