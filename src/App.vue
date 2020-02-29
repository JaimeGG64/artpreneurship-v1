<template>
  <div id="app">
    <GlobalNav/>
    <router-view/>
  </div>
</template>
<script>

import GlobalNav from '@/components/GlobalNav.vue'

export default {
  components: {
    GlobalNav
  },
}
</script>

<style lang="scss">
@import "/scss/variables.scss";
@import "/scss/type.scss";

#app {
  font-family: $default-font;
}
body {
  margin: 0;
}
</style>
