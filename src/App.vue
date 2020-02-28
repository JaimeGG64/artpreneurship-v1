<template>
  <div id="app">
    <GlobalNav/>
    <router-view/>
    <button id="test">Button</button>
  </div>
</template>
<script>

import GlobalNav from '@/components/GlobalNav.vue'

export default {
  components: {
    GlobalNav,
  },
}
</script>

<style lang="scss">
@import "/scss/variables.scss";
#app {
  font-family: $default-font;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
body {
  margin: 0;
}
</style>
