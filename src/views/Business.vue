<template>
    <main class="Business">
        <h1>Business Page</h1>
        <div>{{eventsEB}}</div>
    </main>
</template>

<script>
export default {
    name: 'business',
    title: 'Business',

    data: function() {
        return {
            eventsEB: '',     
        }
    },

    mounted: function() {
        const axios = require('axios');
        const vm = this;
        const console1 = console;
        axios.defaults.headers.common['Authorization'] = 'Bearer 4FXQ6WMAZSFXKLMCIKZV';

        axios({
            method: 'get',
            url: 'https://www.eventbriteapi.com/v3/organizers/29883110681/events/'
        })
        .then(function (response) {
            console1.log(response.data)
            vm.eventEB = response.data
        });
    }
}
</script>
