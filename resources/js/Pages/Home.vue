<template>
    Hello from Home.vue
</template>

<style scoped>

</style>

<script>
    import BreezePublicLayout from "@/Layouts/Public"

    export default {
        layout: BreezePublicLayout,
        props: {
            canLogin: Boolean,
            canRegister: Boolean,
            laravelVersion: String,
            phpVersion: String,
        }
    }
</script>
