<template>
    <b-carousel
        id="carousel-1"
        v-model="slide"
        fade
        :interval="0"
        controls
        indicators
    >
    <b-carousel-slide v-for="image in images" :key="image.location"
        :img-src="image.location"
        :img-alt="image.altText"/>
    </b-carousel>
</template>

<script>
import imageOne from '../assets/home/carousel/carousel-1.jpg'
import imageTwo from '../assets/home/carousel/carousel-2.jpg'
import imageThree from '../assets/home/carousel/carousel-3.jpg'

export default {
    data() {
        return {
            slide: 0,
            sliding: null,
            images: {
                0: {
                    location: imageOne, 
                    altText: "students siting at a large table collaborating"
                },
                1: {
                    location: imageTwo,
                    altText: "students siting a table designing tote bags"
                },
                2: {
                    location: imageThree,
                    altText: "Two student discussing designs"
                }
            }
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