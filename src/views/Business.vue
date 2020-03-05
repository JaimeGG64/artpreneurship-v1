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
            eventResponse: {},     
        }
    },

    methods: {
        outData
    },

    mounted: function() {
        const axios = require('axios');
        const vm = this;
        const console1 = console;
        //var token = 'H4NWI3NXE5UR3WS24AXZ';

        axios({
            method: 'get',
            url: "https://www.eventbriteapi.com/v3/users/17588567121/"
        })
        .then(function (response) {
            console1.log(response);
            vm.eventResponse = response;
        });
    }
}
</script>
