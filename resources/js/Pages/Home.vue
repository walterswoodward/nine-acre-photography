<template>
  <div class="w-full h-full flex flex-col items-center justify-center items-center min-h-full">
    <div class="w-4/5 flex flex-col sm:flex-row sm:items-start">
      <img class="w-1/3 sm:w-auto sm:max-w-md" src="./../../images/camera__w130.svg" />
      <div class="w-4/5 sm:w-4/5 text-4xl sm:text-5xl max-w-md custom-font-1">
        Nine Acre Photography
      </div>
    </div>
    <div class="w-4/5 text-sm sm:text-base">
      <p>
        Founded on the belief that human beings were made to empower one another to
        create, innovate, and pursue justice together.
      </p>
    </div>
  </div>
</template>

<style scoped>
.custom-font-1 {
  font-family: "Cinzel Decorative";
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
  },
};
</script>
