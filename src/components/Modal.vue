<template>
    <Modal class="modal"> 
        <h1 class="modal__title">{{ title }}</h1>
        <p class="modal__text">{{ text }}</p>
        <p class="modal__cancel" @click="$emit('clickCancel')">Cancel</p>
        <a class="modal__ok" @click="$emit('clickOk')" href='url'>Ok</a>
    </Modal>
</template>

<script>
export default {
    props: {
        title: String,
        text: String,
        url: String,
    },
    data: function() {
        return {

        }
    },
}
</script>

<style scoped>

</style>