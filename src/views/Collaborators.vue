<template>
    <main class="Collaborators">
        <h1>Collaborators Page</h1>
        <section class="collab-wrapper">
            <dl class="collab-wrapper__list" v-for="(collaborator, index) in collaborators" :key=index>
                <Collaborator :collabInfo=collaborator></Collaborator>
            </dl>
        </section>
    </main>
</template>

<script>
import Collaborator from '../components/Collaborator.vue'

import JaneMobile from '../assets/collaborators/jane-doe-mobile.png'
import JohnMobile from '../assets/collaborators/john-doe-mobile.png'
import JulieMobile from '../assets/collaborators/julie-doe-mobile.png'

import JaneMd from '../assets/collaborators/jane-doe-md.png'
import JohnMd from '../assets/collaborators/john-doe-md.png'

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
        pushCollaborator: function(title, desc, mobileFile, mdfile, file, alt) {
            var collab = {
                Name: title,
                description: desc,
                mobileFilename: mobileFile,
                mdFilename: mdfile,
                lgFilename: file,
                altTxt: alt,
            };
            this.collaborators.push(collab);
        },
    },
    beforeMount() {
        this.pushCollaborator("Jane Doe", "Hello World!", JaneMobile, JaneMd, JaneDoe, "")
        this.pushCollaborator("John Doe", "Hello World!", JohnMobile, JohnMd, JohnDoe, "")
        this.pushCollaborator("Julie Doe", "Hello World!", JulieMobile, JaneMd, JulieDoe, "")
    },
}
</script>

<style lang="scss">
@import "../scss/variables.scss";
@import "../scss/type.scss";

.collab-wrapper {
    padding: 2rem $mobile-gutter;
    &__list{
        display: grid;
        grid-template-columns: 100%;
        padding: 1.25rem 0;
    }
}
</style>
