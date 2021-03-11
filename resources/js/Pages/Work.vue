<template>
    <div class="images">   
        <img
        class="image"
        v-for="index in 7"
        :key="index"
        :src="`/images/test/${index}.jpg`"
        >
    </div>
</template>

<style scoped>
.images {
    display:flex;
    flex-wrap: wrap;
    justify-content: center;
}

.image {
    width: 300px;
    /* opacity: 0; */
    /* transition: opacity 0.2s ease-in; */
}

.image:hover {
    opacity: 1;
}

</style>


<script>
import BreezePublicLayout from "@/Layouts/Public";

export default {
  layout: BreezePublicLayout,
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  }

};
</script>
