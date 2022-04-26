<template>
  <Layout>
      <div>Olá, {{ user }}. Você está na página home.</div>

      <div v-if="$page.props.flash.success" class="alert alert-success" role="alert">
          {{ $page.props.flash.success }}
      </div>
      <div v-if="$page.props.flash.error" class="alert alert-danger" role="alert">
          {{ $page.props.flash.error }}
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