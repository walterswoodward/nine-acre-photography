<template>
  <div class="images">
    <img
      class="image"
      v-for="(name, index) in 7"
      :key="index"
      :src="`/images/test/${name}.jpg`"
    />
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
}
</style>

<script>
export default {
  props: {},
};
</script>
