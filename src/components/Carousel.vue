<template>
    <b-carousel
        id="carousel-1"
        v-model="slide"
        fade
        :interval="0"
        controls
        indicators
    >
    <b-carousel-slide
        :img-src="getImageOne"
    ></b-carousel-slide>

    <b-carousel-slide 
        :img-src="getImageTwo">
    </b-carousel-slide>

    </b-carousel>
</template>

<script>
import imageOne from '../assets/home/carousel/carousel-1.jpg'
import imageTwo from '../assets/home/carousel/carousel-2.jpg'

export default {
    data() {
        return {
        slide: 0,
        sliding: null,
        getImageOne: imageOne,
        getImageTwo: imageTwo
        };
    }
};
</script>

<style lang="scss">
@import "node_modules/bootstrap/scss/functions";
@import "node_modules/bootstrap/scss/variables";
@import "node_modules/bootstrap/scss/mixins";
@import "node_modules/bootstrap/scss/utilities/screenreaders";
@import 'node_modules/bootstrap/scss/carousel.scss';
.img-fluid{
    width: 100%;
}
</style>