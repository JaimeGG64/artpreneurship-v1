<template>
    <div class="event-info">
        <span id="name">{{eventObj.name.text}}</span>
        <span id="event-duration">{{eventObj.start.local}} - {{eventObj.end.local}}</span>
        <button id="go-to-event">Sign up</button>
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

    #go-to-event {
        @include base-btn-style($blue, none);
    }
    #go-to-event:hover {
        @include base-btn-blur(30px, $blue);
    }

    
</style>