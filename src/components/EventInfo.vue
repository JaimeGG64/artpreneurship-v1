<template>
    <div class="event-info">
        <dt class="event-info__name">{{eventObj.name.text}}</dt>
            <div class="event-info__timestamp">
                <span class="event-info__timestamp-date">
                    {{formattedDateTime.date}} 
                </span>
                <span class="event-info__timestamp-time">
                    {{formattedDateTime.time}}
                </span>
            </div>
            <dd class='event-info__sumamry'>{{eventObj.summary}}</dd>
            <a class="event-info__button" :href='eventObj.url' target=_blank>Sign up</a>
    </div>
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
        this.formattedDateTime = this.formatDate(this.eventObj.start.utc);
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
            var parsed = parseInt(hours);
            if (parsed < 12) 
                formattedTime += hours[1] + ':' + mins + 'am UTC';
            else {
                parsed -= 10;
                formattedTime += parsed.toString() + ':' + mins + 'pm UTC';
            }
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

    .event-info {
        background: $white;
        padding: 1.5rem;
        display: grid;
        grid-template-columns: 1fr;
        grid-template-rows: repeat(4, auto);
        border-radius: 7px;
        row-gap: 1.25rem;
        box-shadow: 0px 3px 20px rgba(0,0,0,.07);
        &__name {
            grid-row: 2/3;
        }
        &__timestamp{
            display: flex;
            justify-content: space-between;
            &-time,&-date{
                display: block;
            }
            &-date{
                font-size: 1.25rem;
                font-weight: $weight-black;
            }
            &-time{
                font-weight: $weight-bold;
            }
        }
        &__sumamry{
            margin: 0;
            grid-row: 3/4;
        }
        &__button {
            grid-row: 4/5;
            width: 9rem;
            justify-self: center;
            @include base-btn-style($blue, none);
            &:hover, &:focus{
            @include base-btn-blur(30px, $blue);
        }
        }
    }
    @media screen and (min-width: map-get($break-point , "md")) {
        .event-info{
            grid-template-columns: 17% 51% auto;
            grid-template-rows: repeat(4,auto);
            column-gap: 2rem;
            row-gap: 1rem;
            &__name {
                grid-row: 1/2;
                grid-column: 2/3;
            }
            &__sumamry{
                grid-column: 2/3;
                grid-row: 2/5;
            }
            &__button{
                grid-column: 3/4;
                grid-row: 1/5;
                width: 100%;
                padding-left: 0;
                padding-right: 0;
                align-self: end;
            }
            &__timestamp{
                flex-direction: column;
                justify-self: flex-start;
                align-self: center;
                grid-row: 1/5;
                &-time,&-date{
                    text-align: left;
                    width: 8rem;
                    font-size: 1.2rem;
                    font-weight: $weight-black;
                }
            }
        }
    }
    @media screen and (min-width: map-get($break-point , "lg")) {
        .event-info{
            grid-template-columns: 1fr 3fr 1fr;
            &__timestamp{
                justify-self: center;
            }
        }
    }
</style>