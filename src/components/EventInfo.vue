<template>
    <event class="event-info">

    </event>
</template>

<script>
export default {
    props: {
        eventId: String,
    },

    data: function() {
        return {
            eventName: '',
            ticketClasses: [],
        }
    },

    mounted: function() {
        const axios = require('axios');
        const vm = this;
        const console1 = console;
        var token = 'H4NWI3NXE5UR3WS24AXZ';

        axios({
            method: 'get',
            url: this.url,
        })
        .then(function (response) {
            console1.log(response);
            vm.ticketClasses = response;
        });
    }
}
</script>

<style scoped>

</style>