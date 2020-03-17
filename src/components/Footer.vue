<template>
    <div class="footer-wrapper">
        <section class="footer-wrapper__info">
            <img alt="Artpreneurship logo" src="../assets/logo.svg" class="footer-wrapper__logo">
            <p class="footer-wrapper__info-address">
                18111 Nordhoff St,<br>
                Northridge, CA, 91330
            </p> 
            <p class="footer-wrapper__info-contact">
                +1 (818) 123-4567<br>
                info@artpreneurship.com
            </p>
        </section>
        <p class="footer-wrapper__copyright">© Copyright 2019. Artpreneurship All Right Reserved</p>
    </div>
</template>

<script>
export default {

}
</script>

<style lang="scss">
@import "../scss/variables.scss";
@import "../scss/type.scss";

.footer-wrapper {
    width: 100%;
    &__logo {
        width: 4.75rem;
    }
    &__info {
        display: flex;
        justify-content: space-evenly;
        background: white;
        padding: 5rem;
        color: $black-hue-1;

        &-address, &-contact {
            @extend .copy;
        }
    }
    &__copyright {
        background: $black-hue-1;
        align-content: center;
        text-align: center;
        color: white;
        padding: 2rem;
        @extend .copy;
    }
}
</style>