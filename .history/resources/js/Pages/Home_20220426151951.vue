<template>
  <Layout>
      <div>Olá, {{ user }}. Você está na página home.</div>
  </Layout>

</template>

<script>
import Layout from "../Layout"; 

export default{
  components: { Layout },

  props:{
    user: String,
  }

};
</script>

<style>
</style>