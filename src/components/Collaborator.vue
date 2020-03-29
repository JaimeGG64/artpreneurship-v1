<template>
    <section class="collab-wrapper__list__bio-wrapper">
        <picture class="collab-wrapper__list__bio-wrapper__image">
            <source media="(min-width: 1920px)" :srcset="collabInfo.lgFilename">
            <source media="(min-width: 1024px)" :srcset="collabInfo.mdFilename">
            <source media="(min-width: 640px)" :srcset="collabInfo.mobileFilename">
                <img :src="collabInfo.mobileFilename" :alt="collabInfo.altTxt">
        </picture>
        <section class="collab-wrapper__list__bio-wrapper__copy">
            <dt class=“collab-wrapper__list__bio-wrapper__copy__name”>{{collabInfo.Name}}</dt>
            <dd class=“collab-wrapper__list__bio-wrapper__copy__desc”>{{collabInfo.description}}</dd>
        </section>
    </section>
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
@import "../scss/type.scss";

.collab-wrapper {
    &__list{
        &__bio-wrapper {
            box-shadow: 0 3px 20px rgba(0, 0, 0, .09);
            width: 22.5rem;
            height: 18.75rem;
            display: grid;
            grid-template-columns: 5% 90% 5%;
            &__image {
                grid-column: 1/4;
            }
            &__copy {
                grid-column: 2/3;
                // &__name {

                // }   

                &__desc {
                    text-indent: 0;
                }
            }
        }
    }
}

@media screen and (min-width: map-get($break-point , "md")) {
    .collab-wrapper {
        &__list{
            &__bio-wrapper {
                box-shadow: 0 3px 20px rgba(0, 0, 0, .09);
                width: 29rem;
                height: 31.25rem;
            }
        }
    }
}

@media screen and (min-width: map-get($break-point , "xl")) {
    .collab-wrapper {
        &__list{
            &__bio-wrapper {
                box-shadow: 0 3px 20px rgba(0, 0, 0, .09);
                width: 29rem;
                height: 31.25rem;
            }
        }
    }
}
</style>