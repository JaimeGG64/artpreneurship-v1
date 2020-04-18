<template>
    <footer class="footer-wrapper">
        <section class="footer-wrapper__info">
            <img alt="Artpreneurship logo" src="../assets/global/logo.svg" class="footer-wrapper__logo">
            <p class="footer-wrapper__info--address">Northridge, CA, 91330</p> 
            <section class="footer-wrapper__info--contact">
                <a class="footer-wrapper__info--contact-phone" href="tel:8181234567">+1 (818) 123-4567</a><br>
                <a class="footer-wrapper__info--contact-email" href="mailto:info@artpreneurship.com">info@artpreneurship.com</a>
            </section>
        </section>
        <section class="footer-wrapper__copyright">
            <section class="footer-wrapper__copyright--logos">
                <a href='#'>
                    <img class="footer-wrapper__copyright--logos-facebook" alt="Link to Facebook." src="../assets/global/facebook.svg">
                </a>
                <a href='#'>
                    <img class="footer-wrapper__copyright--logos-twitter" alt="Link to Twitter." src="../assets/global/twitter.svg">
                </a>
                <a href='#'>
                    <img class="footer-wrapper__copyright--logos-instagram" alt="Link to Instagram." src="../assets/global/instagram.svg">
                </a>
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
                color: #333333;
                font-weight: $weight-bold;
                text-decoration: none;
            }
        }
    }
    &__copyright {
        background: $black-hue-1;
        display: grid;
        grid-template-rows: repeat(2, auto);
        padding: 2rem $mobile-gutter;
        padding-bottom: 1rem;
        &--logos {
            grid-row: 1/2;
            justify-self: center;
            &-facebook, &-twitter, &-instagram {
                padding: 0rem .3rem .9rem .3rem;
            }
        }
        &--copy{
            grid-row: 2/2;
            width: 70%;
            font-size: .95rem;
            text-align: left;
            color: grey;
            @extend .copy;
        }
    }
}

@media screen and (min-width: map-get($break-point , "md")) {
    .footer-wrapper {
        grid-template-columns: 100%;
        grid-template-rows: repeat(2, auto);
        &__logo {
            justify-self: left;
        }
        &__info {
            grid-template-columns: repeat(3, auto);
            grid-template-rows: 0;
            padding: 5rem $tablet-gutter;
            text-align: right;
            &--address {
                grid-column: 3/4;
                justify-self: right;
                font-size: $tablet-font-size;
            }
            &--contact {
                grid-column: 2/3;
                justify-self: right;
                &-phone, &-email {
                    grid-column: 2/3;
                    font-size: $tablet-font-size;
                }
            }
        }
        &__copyright {
            padding: 1rem $tablet-gutter;
            &--logos {
                grid-column: 2/2;
                grid-row: 1/1;
                justify-self: right;
                &-facebook, &-twitter, &-instagram {
                    padding: 0rem .3rem;
                    position: relative;
                    bottom: -.2rem;
                }
            }
            &--copy{
                grid-column: 1/1;
                grid-row: 1/1;
                width: 100%;
                align-self: center;
                font-size: $tablet-font-size;
                text-align: left;
            }
        }
    }
}

@media screen and (min-width: map-get($break-point , "xl")) {
    .footer-wrapper {
        grid-template-columns: 100%;
        grid-template-rows: repeat(2, auto);
        &__logo {
            width: 5.5rem;
            grid-row: 1/1;
            grid-column: 2/2;
            position: relative;
            top: -1rem;
        }
        &__info {
            grid-template-columns: 25% 50% 25%;
            padding: 4.5rem $lg-gutter;
            text-align: left;
            &--address {
                grid-column: 2/2;
                justify-self: center;
                font-size: 1rem;
                position: relative;
                left: -2rem;
            }
            &--contact {
                grid-row: 1/1;
                justify-self: right;
                &-phone, &-email {
                    font-size: 1rem;
                }
            }
        }
        &__copyright {
            padding: 1.5rem $lg-gutter;
            &--logos {
                display: none;
            }
            &--copy{
                grid-column: 1/1;
                grid-row: 1/1;
                width: 100%;
                text-align: center;
                font-size: 1rem;
                color: white;
            }
        }
    }
}
</style>