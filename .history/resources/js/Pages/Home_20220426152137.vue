<template>
  <Layout>
      <div>Olá, {{ user }}. Você está na página home.</div>
      <div v-if="$page.flash.success">
        {{ $page.flash.success }}
      </div>
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