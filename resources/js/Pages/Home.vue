<template>
    <div class="hello">
    </div>
    Hello from Home.vue
</template>

<style scoped>
.hello {
    padding-top: 50px;
}
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
