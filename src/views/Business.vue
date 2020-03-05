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
            ticketClasses: [],
        }
    },

    mounted: function() {
    const axios = require('axios');
    const vm = this;

    axios({
      method: 'get',
      url: "https://www.eventbriteapi.com/v3/users/me/events/",
    })
    .then(function (response) {
        console.log(response);
        vm.ticketClasses = response;
    });
    }
}
</script>
