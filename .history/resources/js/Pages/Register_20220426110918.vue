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
    }
   
}
</script>


<template>
  <Layout>

    <div>
      <form>
        <input type="text" v-model="form.name">
        <input type="email" v-model="form.email">
        <input type="password" v-model="form.password">
        <button type="submit">Cadastrar Usuário</button>
      </form>
    </div>

  </Layout>
</template>

<style>

</style>