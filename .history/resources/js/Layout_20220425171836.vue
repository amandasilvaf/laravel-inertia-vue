<template>
  <div>
    <Link href="/">Home</Link>
    <Link href="/about">About</Link>
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