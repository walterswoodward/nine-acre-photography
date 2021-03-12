<template>
  <lightbox-image> </lightbox-image>
</template>

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
