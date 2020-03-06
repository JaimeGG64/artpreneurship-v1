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
        // var request = new XMLHttpRequest();
        // const console1 = console;

        // request.open('GET', 'https://www.eventbriteapi.com/v3/o/29883110681/events/');

        // request.setRequestHeader('Authorization', 'Bearer 4FXQ6WMAZSFXKLMCIKZV');

        // request.onreadystatechange = function () {
        // if (this.readyState === 4) {
        //     console1.log('Status:', this.status);
        //     console1.log('Headers:', this.getAllResponseHeaders());
        //     console1.log('Body:', this.responseText);
        //     this.eventsEB = this.responseText;
        //     //console1.log(this.response);
        //     }
        // };
        // request.send();
        const axios = require('axios');
        axios.defaults.headers.common['Authorization'] = 'Bearer 4FXQ6WMAZSFXKLMCIKZV';
        axios
            .get('https://www.eventbriteapi.com/v3/organizers/29883110681/events/')
            .then(response => (this.eventsEB = response))
    }
}
</script>
