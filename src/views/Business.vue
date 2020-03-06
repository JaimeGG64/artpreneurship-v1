<template>
    <main class="Business">
        <h1>Business Page</h1>
    </main>
</template>

<script>
export default {
    name: 'business',
    title: 'Business',

    data: function() {
        return {
            events: [],
        }
    },

    methods: {
        loadEvent: function(eventID) {
            const axios = require('axios');
            const vm = this;
            const console1 = console;
            axios.defaults.headers.common['Authorization'] = 'Bearer H4NWI3NXE5UR3WS24AXZ';

            axios({
                method: 'get',
                url: 'https://www.eventbriteapi.com/v3/events/' + eventID + '/',
            })
            .then(function (response) {
                console1.log(response.data)
                vm.events.push(response.data)
            });
        }
    },

    mounted: function() {
        // Load 3 events into events[]
        this.loadEvent()
        this.loadEvent()
        this.loadEvent()
    }
}
</script>
