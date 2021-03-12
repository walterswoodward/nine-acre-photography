<template>
    <img
        class="image"
        v-for="(name, index) in 7"
        :key="index"
        :src="`/images/test/${name}.jpg`">
</template>

<script>
    export default {
        props: {
            // fileName: {
            //     type: String,
            //     default: 'submit',
            // },
            index: {
                type: Number,
                default: 'submit',
            },
        }
    }
</script>
