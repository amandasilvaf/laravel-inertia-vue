<template>
  <Layout>
      <div>Olá, {{ user }}. Você está na página home.</div>

      <div v-if="$page.props.flash.message" class="alert" style="color:aqua">

               {{ $page.props.flash.message }}
        
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