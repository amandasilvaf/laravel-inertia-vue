<template>
  <Layout>
      <div>Olá, {{ user }}. Você está na página home.</div>
      <div v-if="$page.flash.success">
        <div class="alert alert-success" role="alert">
            {{ $page.flash.success }}
        </div>
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