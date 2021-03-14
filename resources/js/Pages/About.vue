<template>
  <div class="about">
    {{ message }}
  </div>
</template>

<style scoped>
.about {
    margin-top: 50px;
}
</style>

<script>
import BreezePublicLayout from "@/Layouts/PublicMinimal";

export default {
  layout: BreezePublicLayout,
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    message: String,
  },
};
</script>
