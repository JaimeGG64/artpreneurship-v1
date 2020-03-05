<template>
    <main class="Business">
        <h1>Business Page</h1>
        <div>{{ userEB }}</div>
    </main>
</template>

<script>
export default {
    name: 'business',
    title: 'Business',

    data: function() {
        return {
            userEB: {},     
        }
    },

    mounted: function() {
        const axios = require('axios');
        //var token = 'H4NWI3NXE5UR3WS24AXZ';

        axios
            .get('https://www.eventbriteapi.com/v3/users/17588567121/')
            .then(response => (this.userEB = response))
    }
}
</script>
