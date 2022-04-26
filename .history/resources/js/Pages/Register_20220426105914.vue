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
        <input type="text">
        <input type="email">
        <input type="password">
        <button type="submit">Cadastrar Usuário</button>
      </form>
    </div>

  </Layout>
</template>

<style>

</style>