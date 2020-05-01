<template>
    <main class="collaborators">
        <section class="our-collaborators">
            <div class="our-collaborators__text-wrapper">
                <h1 class="our-collaborators__heading">Our Collaborators</h1>
                <p class="our-collaborators__copy">Our collaborators are alumni, community, and business folks who simply love to support artists, creatives, and designers. Like us, these are the people who believe that art can transform communities and add value to everyday life. These collaborators have provided our students with resources, financial support, mentorships, and simply advocating for our student artists, creative, and designers. Thank you! If you would like to be part of our collaborator community, please reach out to us.</p>
                <a class="our-collaborators__btn" href="mailto:dave.moon@ixla.org?subject=Becoming an Artpreneurship Collaborator">Become A Collaborator</a>
            </div>
            <picture class="our-collaborators__image">
                <source media="(min-width: 1280px)" srcset="../assets/collaborators/collaborator-feature-img-xl.jpg">
                <source media="(min-width: 1024px)" srcset="../assets/collaborators/collaborator-feature-img-lg.jpg">
                <source media="(min-width: 768px)" srcset="../assets/collaborators/collaborator-feature-img-md.jpg">
                <img src="../assets/collaborators/collaborator-feature-img.jpg" alt="Group photo with collaborators" style="width: 100%">
            </picture>
        </section>
        <section class="collab-list-section">
            <dl class="collab-list-section__list">
                <Collaborator v-for="(collaborator, index) in collaborators" :key=index :collabInfo=collaborator />
            </dl>
        </section>
    </main>
</template>

<script>
import Collaborator from '../components/Collaborator.vue'

import TomWhite      from '../assets/collaborators/members/Tom-1.png'
import LiLiu         from '../assets/collaborators/members/Li-1.png'
import DouglasDavis  from '../assets/collaborators/members/David-1.png'
import JessicaArana  from '../assets/collaborators/members/Jessica.png'
import AaronAtchison from '../assets/collaborators/members/Aaron-1.png'

export default {
    name: 'collaborators',
    title: 'Collaborators',

    components: {
        Collaborator,
    },

    data: function() {
        return {
            collaborators: [],
        }
    },
    methods: {
        pushCollaborator: function(title, desc, file, alt) {
            var collab = {
                Name: title,
                description: desc,
                filename: file,
                altTxt: alt,
            };
            this.collaborators.push(collab);
        },
    },
    beforeMount() {
        this.pushCollaborator("Tom White", "Director at the Los Angeles Cleantech Incubator", TomWhite, "")
        this.pushCollaborator("Li Liu", "Ph.D., Assistant Professor at California State University, Northridge (CSUN)", LiLiu, "")
        this.pushCollaborator("Douglas Davis", "Founder of The Davis Group LLC", DouglasDavis, "")
        this.pushCollaborator("Jessica Arana", "Designer, Artist, Educator", JessicaArana, "")
        this.pushCollaborator("Aaron Atchison", "Founder and Creative Director of Farm Design", AaronAtchison, "")
    },
}
</script>

<style lang="scss">
@import "../scss/variables.scss";
@import "../scss/button-styles.scss";

.our-collaborators{
    display: grid;
    &__text-wrapper{
        padding: $mobile-gutter;
        display: grid;
        row-gap: 1rem;
    }
    &__heading{
        font-size: 2rem;
        text-align: center;
    }
    &__copy{
        font-size: 1.1rem;
        font-weight: $weight-bold;
    }
    &__image{
        grid-row: 1/2;
    }
    &__btn{
        @include base-btn-style($blue, none);
        width: 14rem;
        justify-self: center;
        grid-row: 3/4;
        &:hover,
        &:focus {
            @include base-btn-blur(30px, $blue);
        }
    }
}

.collab-list-section {
    padding: $mobile-gutter;
    &__list{
        display: grid;
        grid-template-columns: 100%;
        grid-gap: $mobile-gutter;
    }
}

@media screen and (min-width: map-get($break-point , "md")) {
    .our-collaborators{
        &__text-wrapper{
            padding: $tablet-gutter;
            row-gap: 1.5rem;
        }
    }
    .collab-list-section {
        padding: $tablet-gutter;
        &__list{
            grid-template-columns: repeat(2, auto);
            grid-gap: $tablet-gutter;
        }
    }
}

@media screen and (min-width: map-get($break-point , "lg")) {
    .our-collaborators{
        grid-template-columns: auto 45%;
        &__text-wrapper{
            row-gap: 1.25rem;
            align-content: center;
        }
        &__heading{
            text-align: left;
        }
        &__btn{
            justify-self: start;
        }
        &__image{
            grid-column: 2/3;
        }
    }
    .collab-list-section {
        padding: 5rem $tablet-gutter;
        &__list{
            grid-template-columns: repeat(3, auto);
        }
    }
}

@media screen and (min-width: map-get($break-point , "xl")) {
    .our-collaborators{
        grid-template: auto 37%;
        &__text-wrapper{
            padding: $lg-gutter;
        }
        &__heading{
            font-size: 3.5rem;
        }
    }
    .collab-list-section {
        padding: $lg-gutter;
    }
}
</style>
