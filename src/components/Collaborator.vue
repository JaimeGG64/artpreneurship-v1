<template>
    <dl class=“curricula__def-list”>
        <div class=“bio-wrapper”>
            <img class=“bio-wrapper__img” :src='collabInfo.filename' :alt='collabInfo.altTxt'/>
            <dt class=“bio-wrapper__name”>{{collabInfo.Name}}</dt>
                <dd class=“bio-wrapper__desc”>{{collabInfo.description}}</dd>
        </div>
    </dl>
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

    // .curricula {
    //     &__def-list {

    //     }
    // }

    .bio-wrapper {
        &__name {
            font-weight: 700;
            font-size: 2rem;
        }

        &__desc {
            font-weight: 400;
            font-size: 1.25rem;
        }
    }
    
    
</style>