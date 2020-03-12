<template>
    <dl class="event__def-list">
        <div class="event-wrapper">
            <dt class="event-wrapper__name">{{eventObj.name.text}}</dt>
                <dd class='event-wrapper__sumamry'>{{eventObj.summary}}</dd>
                <dd class="event-wrapper__start-date">{{formattedDateTime.date}}</dd>
                <dd class="event-wrapper__start-time">{{formattedDateTime.time}}</dd>
                <a class="event-wrapper__button" :href='eventObj.url' target=_blank>Sign up</a>
        </div>
    </dl>
</template>

<script>
export default {
    props: {
        eventObj: Object,
    },
    data: function() {
        return {
            formattedDateTime: {},
        }
    },
    created: function() {
        this.formattedDateTime = this.formatDate(this.eventObj.start.local);
    },
    methods: {
        clickUrl: function() {

        },
        formatDate: function(dateToFormat) {
            var formattedDate = ''
            var formattedTime = ''
            var month = dateToFormat[5] + dateToFormat[6]
            var date = dateToFormat[8] + dateToFormat[9]
            var hours = dateToFormat[11] + dateToFormat[12]
            var mins = dateToFormat[14] + dateToFormat[15]
            
            switch(month) {
                case '01':
                    formattedDate += "January ";
                    break;
                case '02':
                    formattedDate += "February ";
                    break;
                case '03':
                    formattedDate += "March ";
                    break;
                case '04':
                    formattedDate += "April ";
                    break;
                case '05':
                    formattedDate += "May ";
                    break;
                case '06':
                    formattedDate += "June ";
                    break;
                case '07':
                    formattedDate += "July ";
                    break;
                case '08':
                    formattedDate += "August ";
                    break;
                case '09':
                    formattedDate += "September ";
                    break;
                case '10':
                    formattedDate += "October ";
                    break;
                case '11':
                    formattedDate += "November ";
                    break;
                case '12':
                    formattedDate += "December ";
                    break;
            }
            date[0] === '0' ? 
                formattedDate += date[1] : 
                    formattedDate += date[0] + date[1]

            switch(date) {
                case '01':
                case '21':
                case '31':
                    formattedDate += 'st';
                    break;
                case '02':
                case '22':
                    formattedDate += 'nd';
                    break;
                case '03':
                case '23':
                    formattedDate += 'rd';
                    break;
                default:
                    formattedDate += 'th';
                    break;
            }
            
            hours[0] === '0' ? 
                formattedTime += hours[1] + ':' + mins + 'am' :
                    formattedTime += hours + ':' + mins + 'pm'

            return {
                date: formattedDate,
                time: formattedTime,
            }
        },
    },
}
</script>

<style lang="scss">
    @import "../scss/variables.scss";
    @import "../scss/button-styles.scss";

    .event-wrapper {
        &__button, a {
            @include base-btn-style($blue, none);
            text-decoration: none;
        }
        &__button:hover{
            @include base-btn-blur(30px, $blue);
        }
    }
    
</style>