<template>
  <div class="gallery" ref="masonry">
    <div class="item" v-for="(name, index) in 7"
        :key="index">
      <img
        :src="`https://res.cloudinary.com/pacmankana/image/upload/v1539881487/samples/animals/three-dogs.jpg`"
      />
    </div>
  </div>
</template>

<style scoped>
.gallery {
  display: grid;
  grid-gap: 10px;
  grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
  grid-auto-rows: 250px 150px;
  grid-auto-flow: dense;
  padding: 0px 20px;
}

.gallery .item img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

@media (min-width: 480px) {
  .gallery .item:first-child {
    grid-area: 1 / 1 / span 2 / span 2;
  }

  .gallery .item:nth-child(3n) {
    grid-column: span 2;
  }
}
</style>

<script>
export default {
  props: {},
  methods: {
    showImagesElement: function () {
      console.log(this.$refs.masonry);
    },
  },
  mounted: function () {
    this.showImagesElement();
  },
};
</script>
