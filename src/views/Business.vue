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

        request.open('GET', 'https://www.eventbriteapi.com/v3/organizations/17588567121/events/?token=H4NWI3NXE5UR3WS24AXZ');

        request.setRequestHeader('Authorization', 'Bearer 5JYFQW7M3S522QWKXD');

        request.onreadystatechange = function () {
        if (this.readyState === 4) {
            console1.log('Status:', this.status);
            console1.log('Headers:', this.getAllResponseHeaders());
            console1.log('Body:', this.response);
            this.eventsEB = this.response;
            //console1.log(this.response);
        }
    };
        request.send();
    }
}
</script>
