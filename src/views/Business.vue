<template>
    <main class="Business">
        <h1>Business Page</h1>
        <div class="events-wrapper">
            <ul class="events-wrapper__event-list" v-for="(event, index) in events" :key=index>
                <EventInfo class="event-wrapper__event" :eventObj="event"></EventInfo>
            </ul>
        </div>
    </main>
</template>

<script>
import EventInfo from '@/components/EventInfo.vue'

export default {
    name: 'business',
    title: 'Business',
    components: {
        EventInfo,
    },
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
        this.loadEvent('77903821427')
        this.loadEvent('91637172249')
        this.loadEvent('85699332009')
    }
}
</script>
