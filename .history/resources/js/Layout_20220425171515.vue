<template>
  <div>
    <inertia-link href="/">Home</inertia-link>
    <inertia-link href="/about">About</inertia-link>
    <div>
      <slot />
    </div>
  </div>
</template>

<script >
import { Link } from '@inertiajs/inertia-vue3'

export default{
  components: {
    Link,
  }


};
</script>

<style>
</style>