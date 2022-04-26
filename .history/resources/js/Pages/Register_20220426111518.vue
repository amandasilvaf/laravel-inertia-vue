<script>
import Layout from "../Layout.vue"



export default {
    components: { Layout },
    props: {},

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
        alert('O form foi submetido');
      }
    }
   
}
</script>


<template>
  <Layout>

    <div>
      <form @submit.prevent="handleForm()">
        <input type="text" placeholder="nome" v-model="form.name">

        <input type="email" placeholder="email" v-model="form.email">

        <input type="password" placeholder="senha" v-model="form.password">

        <button type="submit">Cadastrar Usuário</button>
      </form>
    </div>

  </Layout>
</template>

<style>

</style>