<template>
  <div class="images">
    <lightbox-image> </lightbox-image>
  </div>
</template>

<style scoped>
.images {
  display: flex;
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
import BreezePublicLayout from "@/Layouts/PublicMinimal";
import LightboxImage from "@/Components/LightboxImage";

export default {
  components: {
    LightboxImage,
  },
  layout: BreezePublicLayout,
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
};
</script>
