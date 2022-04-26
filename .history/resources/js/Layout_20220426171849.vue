<script >
import { Link } from '@inertiajs/inertia-vue3'

export default{
  components: {
    Link,
  },
};
</script>

<template>
  <div>
    <Link href="/">Home</Link>
    <Link href="/about">Sobre</Link>
    <Link href="/register">Usuários</Link>
    
    <div>
      <slot />
    </div>
  </div>
</template>


<style scoped>
  *{
    margin: 5px;
  }
</style>