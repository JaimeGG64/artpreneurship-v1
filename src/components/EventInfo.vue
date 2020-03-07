<template>
    <div class="event-info">
        <span id="name">{{eventObj.name.text}}</span>
        <span id="event-duration">{{eventObj.start.local}} - {{eventObj.end.local}}</span>
        <button id="go-to-event"></button>
    </div>
</template>

<script>
export default {
    props: {
        eventObj: Object,
    },
}
</script>

<style lang="scss" scoped>
    @import "../scss/variables.scss";
    @import "../scss/button-styles.scss";

    
</style>