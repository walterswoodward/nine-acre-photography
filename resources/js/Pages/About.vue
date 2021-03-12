<template>
    Hello from About.vue
</template>

<style scoped>

</style>

<script>
    import BreezePublicLayout from "@/Layouts/PublicMinimal"

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
