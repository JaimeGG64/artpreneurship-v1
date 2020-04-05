<template>
    <div class="collab">
        <img class="collab__image" :src="collabInfo.filename" :alt="collabInfo.altTxt">
        <div class="collab__text-wrapper">
            <dt class="collab__name">{{collabInfo.Name}}</dt>
            <dd class="collab__desc">{{collabInfo.description}}</dd>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        collabInfo: Object
    },
}
</script>

<style lang="scss">
@import "../scss/variables.scss";

.collab {
    box-shadow: 0 .25rem 1.25rem rgba(0, 0, 0, .07);
    width: 100%;
    justify-self: center;
    border-radius: 10px;
    max-width: 25rem;
    overflow: hidden;
    &__image {
        width: 100%;
    }
    &__text-wrapper {
        padding: $mobile-gutter;
    }
    &__name {
        font-size: 1.75rem;
    }
    &__desc {
        margin: 0;
    }
}

@media screen and (min-width: map-get($break-point , "md")) {
    .collab {
        max-width: 29rem;
        &__text-wrapper {
            padding: 1rem 2rem 1.5rem 2rem;
        }
    }
}

@media screen and (min-width: map-get($break-point , "lg")) {
    .collab {
        max-width: 29rem;
    }
}

</style>