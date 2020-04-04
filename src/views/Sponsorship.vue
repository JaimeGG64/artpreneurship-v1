<template>
    <main class="sponsorship">
        <h1 class="sponsorship__heading">Sponsorship & Donation</h1>
        <img class="sponsorship__img" src="../assets/sponsorship/sponsorship.svg" alt="">
        <p class="sponsorship__text">Given the multitude of ongoing events and activities that connect the latest entrepreneurial topics to our students, we rely on sponsors who are willing to help support us. We are actively seeking sponsorship opportunities to underwrite many of the expenses relating to our events. </p>

        <a class="sponsorship__btn" href="" src="">BUTTON</a>
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

.sponsorship {
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
        width: 55%;
    }
    &__text {
        @extend .copy-bold;
        padding: $mobile-gutter 0;
        max-width: 30rem;
        justify-self: center;
    }
    &__img {
        width: 100%;
        justify-self: center;
        padding: $mobile-gutter 0;
        max-width: 15rem;
    }
    &__btn {
        @include base-btn-style($blue, none);
        width: 7rem;
        justify-self: center;
        margin-bottom: 3.25rem;
        &:hover,
        &:focus {
            @include base-btn-blur(30px, $blue);
        }
    }
}

@media screen and (min-width: map-get($break-point , "md")) {
    .sponsorship{
        grid-template-columns: repeat(2, auto);
        grid-template-rows: repeat(4, auto);
        padding: 5rem $tablet-gutter;
        &__heading {
            grid-column: 1/2;
            grid-row: 1/2;
            justify-self: left;
            text-align: left;
            width: 50%;
            font-size: 2.2rem;
        }
        &__text {
            grid-column: 1/2;
            grid-row: 2/3;
            padding-right: 2rem;
            justify-self: left;
            text-align: top;
        }
        &__img {
            grid-column: 2/3;
            grid-row: 1/4;
            padding: 5rem 0 0 0;
            max-width: 40rem;
        }
        &__btn {
            display: none;
        }
    }
}

@media screen and (min-width: map-get($break-point , "lg")) {
    .sponsorship {
        padding: 0 $tablet-gutter;
        padding-top: $tablet-gutter;
        padding-bottom: 10rem;
        grid-template-columns: repeat(2, auto);
        &__heading {
            grid-row: 2/3;
            width: 60%;
            font-size: 3rem;
        }
        &__text {
            font-size: 1.4rem;
            grid-row: 3/4;
            max-width: 40rem;
        }
        &__img {
            grid-row: 1/4;
        }
    }
}

@media screen and (min-width: map-get($break-point , "xl")) {
    .sponsorship {
        padding: 0 13rem;
        padding-top: 5rem;
        padding-bottom: 10rem;
        grid-template-columns: 40% 60%;
        &__heading {
            grid-row: 2/3;
            width: 70%;
            font-size: 4.75rem;
        }
        &__text {
            font-size: 1.4rem;
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
