<template>
    <nav class="global-nav">
        <router-link to="/"><img alt="Artpreneurship logo" src="../assets/global/logo.svg" class="global-nav__logo"></router-link>
        <ul class="global-nav__links">
            <li class="global-nav__element"><router-link to="/about">About</router-link></li>
            <li class="global-nav__element"><router-link to="/collaborators">Collaborators</router-link></li>
            <li class="global-nav__element"><router-link to="/business">Business</router-link></li>
            <li class="global-nav__element"><router-link to="/sponsorship">Sponsorship</router-link></li>
            <li class="global-nav__element"><router-link to="/awards">Awards</router-link></li>
        </ul>
    </nav>
</template>

<script>
export default {

}
</script>

<style lang="scss">
@import "../scss/variables.scss";

.global-nav{
    width: 100%;
    background: $black-hue-1;
    display: flex;
    justify-content: space-between;
    padding: 1rem 1.75rem;
    box-sizing: border-box;
    &__logo{
        width: 4.75rem;
    }
    &__links{
        display:flex;
        list-style: none;
        padding: 0;
        margin: 0;
        width: 45rem;
        justify-content: space-evenly;
        align-items: center;
    }
    &__element a{
        color: white;
        font-family: $default-font;
        font-weight: 700;
        text-decoration: none;
        font-size: 1.25rem;
    }
    a{
        line-height: 0;
    }
}
</style>