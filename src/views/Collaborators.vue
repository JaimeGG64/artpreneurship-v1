<template>
    <main class="Collaborators">
        
        <section>
            <div>
                <h1>Our Collaborators</h1>
                <p>Our collaborators are alumni, community, and business folks who simply love to support artists, creatives, and designers. Like us, these are the people who believe that art can transform communities and add value to everyday life. These collaborators have provided our students with resources, financial support, mentorships, and simply advocating for our student artists, creative, and designers. Thank you! If you would like to be part of our collaborator community, please reach out to us.</p>
                <a href="#">Become A Collaborator</a>
            </div>
            <picture>
                <source media="(min-width: 1920px)" srcset="../assets/collaborators/collaborators-celebration-xl.jpg">
                <source media="(min-width: 1024px)" srcset="../assets/collaborators/collaborators-celebration-lg.jpg">
                <source media="(min-width: 768px)" srcset="../assets/collaborators/collaborators-celebration-md.jpg">
                <img src="../assets/collaborators/collaborators-celebration.jpg" alt="student collaborating" style="width: 100%">
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

import JaneDoe from '../assets/collaborators/jane-doe.png'
import JohnDoe from '../assets/collaborators/john-doe.png'
import JulieDoe from '../assets/collaborators/julie-doe.png'

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
        this.pushCollaborator("Jane Doe", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ", JaneDoe, "")
        this.pushCollaborator("John Doe", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ", JohnDoe, "")
        this.pushCollaborator("Julie Doe", "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore ", JulieDoe, "")
    },
}
</script>

<style lang="scss">
@import "../scss/variables.scss";

.collab-list-section {
    padding: $mobile-gutter;
    &__list{
        display: grid;
        grid-template-columns: 100%;
        grid-gap: $mobile-gutter;
    }
}

h1 {
    font-size: 2rem;
}

@media screen and (min-width: map-get($break-point , "md")) {
    .collab-list-section {
        padding: $tablet-gutter;
        &__list{
            grid-template-columns: repeat(2, auto);
            grid-gap: $tablet-gutter;
        }
    }
}

@media screen and (min-width: map-get($break-point , "lg")) {
    .collab-list-section {
        &__list{
            grid-template-columns: repeat(3, auto);
        }
    }
}

@media screen and (min-width: map-get($break-point , "xl")) {
    .collab-list-section {
        padding: 4rem $lg-gutter;
    }
}
</style>
