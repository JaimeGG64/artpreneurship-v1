<template>
    <main class="business">
        <section class="business-side">
            <div class="business-side__text-wrapper">
                <h1 class="business-side__heading">The Business Side Of Creativity</h1>
                <p class="business-side__copy">
                    Classroom: Filled with online videos and other online resources with specific topics to help you launch your new business. Additionally, check out the Events section, as we will have many in-person classes for you to attend. Seating is always limited, so please register early.
                </p>
                <p class="business-side__copy">
                    Events: Current and future activities, events, and programs are listed here. Check often or sign up for our email list.
                </p>
            </div>
            <picture class="business-side__image">
                <source media="(min-width: 1920px)" srcset="../assets/business/business-collaboration-xl.jpg">
                <source media="(min-width: 1024px)" srcset="../assets/business/business-collaboration-lg.jpg">
                <source media="(min-width: 768px)" srcset="../assets/business/business-collaboration-md.jpg">
                <img src="../assets/business/business-collaboration.jpg" alt="student collaborating" style="width: 100%">
            </picture>
        </section>
        <section class="resources">
            <h2 class="resources__heading">Resources</h2>
            <p class="resources__copy">
                Here you will find business essentials that can help you successfully build your business model, from using a simple Business Model Canvas to developing a comprehensive Integrated Marketing Communications plan. Whatever the resources you need to help launch a thriving business, you will find them here. If you don’t see what you need, contact us and we will find it for you.
            </p>
            <ul class="resources__list">
                <li class="resources__list-item">
                    Students will be encouraged to attend a series of lectures, workshops, and seminars to better familiarize themselves with business and business applications.
                    <img class="resources__list-item-icon" src="../assets/global/icon-check.svg" alt="" />
                </li>
                <li class="resources__list-item">
                    Students will tour and visit various businesses and will have an opportunity to learn and share their business models.
                    <img class="resources__list-item-icon" src="../assets/global/icon-check.svg" alt="" />
                </li>
                <li class="resources__list-item">
                    Students will be introduced to different levels of business development.
                    <img class="resources__list-item-icon" src="../assets/global/icon-check.svg" alt="" />
                </li>
            </ul>
            <img class="resources__image" src="../assets/global/air_rally_illustration_4.svg" alt="" />
        </section>
        <section class="upcomming-event">
            <h2 class="upcomming-event__heading">Upcoming Events</h2>
            <dl class="event-wrapper__event-list">
                <EventInfo v-for="(event, index) in events" :key=index :eventObj="event"/>
            </dl>
        </section>
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
            axios.defaults.headers.common['Authorization'] = 'Bearer H4NWI3NXE5UR3WS24AXZ';

            axios({
                method: 'get',
                url: 'https://www.eventbriteapi.com/v3/events/' + eventID + '/',
            })
            .then(function (response) {
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

<style lang="scss">
@import "../scss/variables.scss";

.business-side{
    display: grid;
    &__text-wrapper{
        display: grid;
        grid-row-gap: 1rem;
        padding: $mobile-gutter;
    }
    &__heading{
        font-size: 2rem;
        text-align: center;
    }
    &__copy{
        font-weight: $weight-bold;
    }
    &__image{
        grid-row: 1/2;
    }
}
.resources{
    display: grid;
    grid-row-gap: 1rem;
    padding: $mobile-gutter;
    &__heading{
        font-weight: $weight-black;
        font-size: 2rem;
        text-align: center;
    }
    &__copy{
        font-weight: $weight-bold;
    }
    &__image{
        grid-row: 1/2;
        width: 82%;
        justify-self: center;
        transform: scaleX(-1);
    }
    &__list{
        margin: 0;
        padding: 0;
        &-item{
            display: grid;
            grid-template-columns: 4.5rem auto;
            &-icon{
                grid-column: 1/2;
                grid-row: 1/2;
                height: 2.75rem;
                padding: .35rem;
            }
        }
    }
    
}
.upcomming-event{
    background: $yellow-hue-1;
    padding: 0 $mobile-gutter ($mobile-gutter * 2) $mobile-gutter;
    &__heading{
        font-weight: $weight-black;
        font-size: 2rem;
        text-align: center;
        padding: 2.5rem 0;
    }
    .event-wrapper__event-list{
        display: grid;
        grid-row-gap: $mobile-gutter;
    }
}

@media screen and (min-width: map-get($break-point , "md")) {
    .business-side{
        &__text-wrapper{
            padding: 2rem $tablet-gutter;
        }
    }
}
</style>