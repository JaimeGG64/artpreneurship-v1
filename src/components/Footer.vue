<template>
    <div class="footer-wrapper">
        <section class="footer-wrapper__info">
            <img alt="Artpreneurship logo" src="../assets/global/logo.svg" class="footer-wrapper__logo">
            <p class="footer-wrapper__info--address">
                18111 Nordhoff St,<br>
                Northridge, CA, 91330
            </p> 
            <section class="footer-wrapper__info--contact">
                <a class="footer-wrapper__info--contact-phone" href="tel:8181234567">+1 (818) 123-4567</a><br>
                <a class="footer-wrapper__info--contact-email" href="mailto:info@artpreneurship.com">info@artpreneurship.com</a>
            </section>
        </section>
        <p class="footer-wrapper__copyright">© Copyright {{ year }}. Artpreneurship All Right Reserved</p>
    </div>
</template>

<script>
export default {
    data: function(){
        return {
            year: '',
        }
    },
    created: function() {
        this.year = new Date().getFullYear();
    }
}
</script>

<style lang="scss">
@import "../scss/variables.scss";
@import "../scss/type.scss";

.footer-wrapper {
    width: 100%;
    box-shadow: 0 -.5rem 1.5rem rgba(0, 0, 0, 0.09);;
    &__logo {
        width: 4.75rem;
    }
    &__info {
        display: flex;
        justify-content: space-evenly;
        background: white;
        padding: 5rem;
        color: $black-hue-1;

        &--address, &--contact {
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