<template>
    <main class="Collaborators">
        <h1>Collaborators Page</h1>
        <div id="collaborators-people">
            <ul v-for="(collaborator, index) in collaborators" :key=index>
                <Collaborator 
                    :cName="collaborator.name"
                    :description="collaborator.description"
                    :filename="collaborator.filename"
                    :altTxt="collaborator.altTxt"
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
            collaborators: [
                {
                    name: 'Dave Moon',
                    description: 'Hello World!',
                    filename: DaveImg,
                    altTxt: 'iss dave',
                },
            ],
        }
    },
}
</script>
