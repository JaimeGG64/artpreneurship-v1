<template>
    <main class="Collaborators">
        <h1>Collaborators Page</h1>
        <div class="collab-wrapper">
            <ul class="collab-wrapper__list" v-for="(collaborator, index) in collaborators" :key=index>
                <Collaborator class="collab-wrapper__collaborator"
                    :collabInfo=collaborator
                ></Collaborator>
            </ul>
        </div>
    </main>
</template>

<script>
import Collaborator from '../components/Collaborator.vue'
import DaveImg from '../assets/collaborators/dave-photo.jpg'

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
        this.pushCollaborator("Dave Moon", "Hello World!", DaveImg, "issa dave")
    },
}
</script>
