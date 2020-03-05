<template>
    <main class="Business">
        <h1>Business Page</h1>
        <div>{{ eventsEB }}</div>
    </main>
</template>

<script>
export default {
    name: 'business',
    title: 'Business',

    data: function() {
        return {
            eventsEB: {},     
        }
    },

    mounted: function() {
        var request = new XMLHttpRequest();
        const console1 = console;

        request.open('GET', 'https://www.eventbriteapi.com/v3/organizations/17588567121/events/');

        request.setRequestHeader('Authorization', 'Bearer 4FXQ6WMAZSFXKLMCIKZV');

        request.onreadystatechange = function () {
        if (this.readyState === 4) {
            //console1.log('Status:', this.status);
            //console1.log('Headers:', this.getAllResponseHeaders());
            //console1.log('Body:', this.responseText);
            this.eventsEB = this.responseText;
            console1.log(this.responseText);
        }
    };
        request.send();
    }
}
</script>
