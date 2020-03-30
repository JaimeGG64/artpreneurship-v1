<template>
    <main class="Collaborators">
        <h1>Collaborators Page</h1>
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
    padding: 2rem $mobile-gutter;
    &__list{
        display: grid;
        grid-template-columns: 100%;
        grid-row-gap: $mobile-gutter;
    }
}


h1 {
    font-size: 2rem;
}

</style>
