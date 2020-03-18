<template>
    <section class="footer-wrapper">
        <section class="footer-wrapper__info">
            <img alt="Artpreneurship logo" src="../assets/global/logo.svg" class="footer-wrapper__logo">
            <p class="footer-wrapper__info--address">18111 Nordhoff St,<br>Northridge, CA, 91330</p> 
            <section class="footer-wrapper__info--contact">
                <a class="footer-wrapper__info--contact-phone" href="tel:8181234567">+1 (818) 123-4567</a><br>
                <a class="footer-wrapper__info--contact-email" href="mailto:info@artpreneurship.com">info@artpreneurship.com</a>
            </section>
        </section>
        <section class="footer-wrapper__copyright">
            <section class="footer-wrapper__copyright--social-media">
                
            </section>
            <p class="footer-wrapper__copyright--copy">© Copyright {{ year }}. Artpreneurship All Right Reserved</p>
        </section>
    </section>
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
    },
}
</script>

<style lang="scss">
@import "../scss/variables.scss";
@import "../scss/type.scss";

.footer-wrapper {
    display: grid;
    grid-template-columns: 100%;
    grid-template-rows: 2;
    box-shadow: 0 -.5rem 1.5rem rgba(0, 0, 0, 0.09);
    &__logo {
        width: 4.75rem;
    }
    &__info {
        display: grid;
        grid-template-columns: 30% 70%;
        grid-template-rows: 2;
        background: white;
        color: $black-hue-1;
        padding: 3.5rem $mobile-gutter;
        &--address{
            @extend .copy;
        }
        &--contact {
            grid-column: 2/3;
            &-phone, &-email {
                @extend .copy-bold;
            }
        }
    }
    &__copyright {
        background: $black-hue-1;
        padding: 2rem $mobile-gutter;
        &-copy{
            width: 70%;
            font-size: .95rem;
            text-align: left;
            color: grey;
            @extend .copy;
        }
    }
}
</style>