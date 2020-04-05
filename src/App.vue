<template>
  <div id="app">
    <GlobalNav/>
    <router-view/>
    <Footer/>
  </div>
</template>
<script>

import GlobalNav from '@/components/GlobalNav.vue'
import Footer from '@/components/Footer.vue'

export default {
  components: {
    GlobalNav,
    Footer,
  }
}
</script>

<style lang="scss">
@import "/scss/variables.scss";
@import "/scss/button-styles.scss";
@import "/scss/type.scss";

#app {
  font-family: $default-font;
}
body {
  margin: 0;
}

@media screen and (min-width: 1920px) {
  html{
    font-size: 133.33%;
  }
}
</style>
