<script>
import Layout from "../Layout.vue"



export default {
    components: { Layout },

    props: {
      errors: Object,
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
    <div v-foreach="erro in errors" style="border:1px solid red; margin-bottom: 10px;">
      {{ erro }}
    </div>
      <form @submit.prevent="handleForm">
        <input type="text" placeholder="Nome" v-model="form.name">

        <input type="email" placeholder="E-mail" v-model="form.email">

        <input type="password" placeholder="Senha" v-model="form.password">

        <button type="submit">Cadastrar Usuário</button>
      </form>
    </div>

  </Layout>
</template>

<style scoped>
  form{
    margin-top: 15px;
  }


</style>