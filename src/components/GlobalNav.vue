<template>
    <nav class="global-nav">
        <router-link to="/">
            <img alt="Artpreneurship logo" src="../assets/global/logo.svg" class="global-nav__logo">
        </router-link>
        <button class="global-nav__btn" @click="toggleNavigation" :aria-expanded="isNavOpen ? 'true' : 'false'">
            <img src="../assets/global/menu.svg" alt="Menu">
        </button>
        <ul class="global-nav__links" :class="isNavOpen ? 'global-nav__links--active' : ''">
            <li class="global-nav__element"><router-link to="/">Home</router-link></li>
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
    data () {
        return {
            isNavOpen: false,
        }
    },

    methods: {
        toggleNavigation() {
            if (this.isNavOpen === false) {
                this.isNavOpen = true
            } else {
                this.isNavOpen = false
            }
        }
    },

    watch: {
        '$route' () {
            this.isNavOpen = false
        }
    }
}
</script>

<style lang="scss">
@import "../scss/variables.scss";

.global-nav{
    width: 100%;
    background: $white;
    display: flex;
    justify-content: space-between;
    padding: 1rem 1.75rem;
    box-sizing: border-box;
    &__logo{
        width: 4.75rem;
    }
    &__btn{
        border: none;
        position: fixed;
        top: 1rem;
        right: 0;
        padding: 1.75rem;
        z-index: 100;
        border-radius: 10px 0 0 10px;
        background: $white;
        cursor: pointer;
    }
    &__links{
        list-style: none;
        display:flex;
        flex-direction: column;
        padding: 0;
        margin: 0;
        position: fixed;
        left: 0;
        top: 0;
        height: 0;
        width: 0;
        z-index: 50;
        opacity: 0;
        overflow: hidden;
        transition: opacity .3s;
        &--active{
            background: rgba(255,255,255, .95);
            height: 100vh;
            width: 100vw;
            justify-content: center;
            box-sizing: border-box;
            opacity: 1;
        }
    }
    &__element {
        height: 3rem;
        width: 100vw;
        display: flex;
        justify-content: center;
        align-items: center;
        a{
            color: $black-hue-3;
            font-family: $default-font;
            font-weight: $weight-regular;
            text-transform: uppercase;
            text-decoration: none;
            text-align: center;
            font-size: 1.8rem;
            line-height: 0;
        }
    }
        
}

.router-link-exact-active{
    color: $black-hue-1 !important;
    font-weight: $weight-bold !important;
}

@media screen and (min-width: map-get($break-point , "lg")) {
.global-nav{
    &__btn{
        display: none;
    }
    &__links{
        width: 45rem;
        justify-content: space-evenly;
        align-items: center;
        position: relative;
        height: unset;
        width: unset;
        flex-direction: row;
    }
}
}
</style>