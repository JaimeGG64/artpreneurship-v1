<template>
    <div class="collaborator">
        <img id="pic" :src='filename' :alt='altTxt'>
        <div id="name">{{ cName }}</div>
        <div id="desc">{{ description }}</div>
    </div>
</template>

<script>
export default {
    props: {
        cName: String,
        description: String,
        filename: String,
        altTxt: String,
    },
}
</script>

<style lang="scss" scoped>
    @import "../scss/variables.scss";
    @import "../scss/type.scss";

    #name {
        font-weight: 700;
        font-size: 2rem;
    }
    #desc {
        font-weight: 400;
        font-size: 1rem;
    }
    
</style>