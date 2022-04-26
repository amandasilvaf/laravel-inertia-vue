<template>
  <Layout>
      <div>Olá, {{ user }}. Você está na página home.</div>

      <div v-if="$page.props.flash.success" class="alert alert-success" role="alert">

               {{ $page.props.flash.success }}
        
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