<template>
    <footer class="footer-wrapper">
        <section class="footer-wrapper__info">
            <img alt="Artpreneurship logo" src="../assets/global/logo.svg" class="footer-wrapper__logo">
            <p class="footer-wrapper__info--address">18111 Nordhoff St,<br>Northridge, CA, 91330</p> 
            <section class="footer-wrapper__info--contact">
                <a class="footer-wrapper__info--contact-phone" href="tel:8181234567">+1 (818) 123-4567</a><br>
                <a class="footer-wrapper__info--contact-email" href="mailto:info@artpreneurship.com">info@artpreneurship.com</a>
            </section>
        </section>
        <section class="footer-wrapper__copyright">
            <section class="footer-wrapper__copyright--logos">
                <img class="footer-wrapper__copyright--logos-facebook" href="#" alt="Link to Facebook." src="../assets/global/facebook.svg">
                <img class="footer-wrapper__copyright--logos-twitter" href="#" alt="Link to Twitter." src="../assets/global/twitter.svg">
                <img class="footer-wrapper__copyright--logos-instagram" href="#" alt="Link to Instagram." src="../assets/global/instagram.svg">
            </section>
            <p class="footer-wrapper__copyright--copy">© Copyright {{ year }}. Artpreneurship All Right Reserved</p>
        </section>
    </footer>
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
    grid-template-rows: repeat(2, auto);
    box-shadow: 0 -.5rem 1.5rem rgba(0, 0, 0, 0.09);
    &__logo {
        width: 4.75rem;
    }
    &__info {
        display: grid;
        grid-template-columns: 30% 70%;
        grid-template-rows: repeat(2, auto);
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
        display: grid;
       // grid-template-columns: 15% 70% 15%;
        grid-template-rows: repeat(2, auto);
        padding: 2rem $mobile-gutter;
        padding-bottom: 1rem;
        &--logos {
            grid-row: 1/2;
            //grid-column: 2/3;
            justify-self: center;
            &-facebook, &-twitter, &-instagram {
                padding: 0rem .3rem .9rem .3rem;
            }
        }
        &--copy{
            //grid-column: 1/4;
            grid-row: 2/2;
            width: 70%;
            font-size: .95rem;
            text-align: left;
            color: grey;
            @extend .copy;
        }
    }
}
</style>