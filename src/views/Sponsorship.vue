<template>
    <main class="sponsorship">
        <section class="sponsorship-and-donation">
            <h1 class="sponsorship-and-donation__heading">Sponsorship & Donation</h1>
            <img class="sponsorship-and-donation__img" src="../assets/sponsorship/sponsorship.svg" alt="">
            <p class="sponsorship-and-donation__text">Given the multitude of ongoing events and activities that connect the latest entrepreneurial topics to our students, we rely on sponsors who are willing to help support us. We are actively seeking sponsorship opportunities to underwrite many of the expenses relating to our events. </p>
            <a class="sponsorship-and-donation__btn" href="#">BUTTON</a>
        </section>
    </main>
</template>

<script>
export default {
    name: 'sponsorship',
    title: 'Sponsorship',
}
</script>

<style lang="scss">
@import "../scss/button-styles.scss";
@import "../scss/variables.scss";
@import "../scss/type.scss";

.sponsorship-and-donation {
    display: grid;
    grid-template-columns: 100%;
    padding: $mobile-gutter;
    &__text-wrapper {
        justify-self: center;
    }
    &__heading {
        font-size: 2rem;
        justify-self: center;
        text-align: center;
        width: 62%;
    }
    &__text {
        @extend .copy-bold;
        padding: $mobile-gutter 0;
        justify-self: center;
    }
    &__img {
        width: 100%;
        justify-self: center;
        align-self: center;
        padding: $mobile-gutter 0;
        max-width: 15rem;
    }
    &__btn {
        @include base-btn-style($blue, none);
        width: 9rem;
        justify-self: center;
        margin-bottom: 3.25rem;
        &:hover,
        &:focus {
            @include base-btn-blur(30px, $blue);
        }
    }
}

@media screen and (min-width: map-get($break-point , "md")) {
    .sponsorship-and-donation{
        grid-template-columns: 48% auto;
        grid-template-rows: repeat(3, auto);
        padding: 5rem $tablet-gutter;
        &__heading {
            grid-column: 1/2;
            grid-row: 1/2;
            justify-self: left;
            text-align: left;
            align-self: end;
            width: 55%;
            font-size: 2.25rem;
        }
        &__text {
            grid-column: 1/2;
            grid-row: 2/3;
            justify-self: left;
            text-align: top;
            font-size: 1.1rem;
            font-weight: $weight-bold;
        }
        &__img {
            grid-column: 2/3;
            grid-row: 1/3;
            min-width: 20rem;
            max-width: 35rem;
        }
        &__btn {
            display: none;
        }
    }
}

@media screen and (min-width: map-get($break-point , "lg")) {
    .sponsorship-and-donation {
        grid-template-columns: 57% auto;
        column-gap: 1rem;
        &__heading {
            grid-row: 2/3;
            width: 50%;
        }
        &__text {
            grid-row: 3/4;
            max-width: 40rem;
        }
        &__img {
            max-width: 40rem;
            grid-row: 1/4;
        }
    }
}

@media screen and (min-width: map-get($break-point , "xl")) {
    .sponsorship-and-donation {
        padding: 5rem $lg-gutter;
        grid-template-columns: 40% 60%;
        &__heading {
            grid-row: 2/3;
            width: 67%;
            font-size: 3.5rem;
        }
        &__text {
            grid-row: 3/3;
            max-width: 40rem;
        }
        &__img {
            grid-row: 1/4;
            max-width: 90%
        }
    }
}
</style>
