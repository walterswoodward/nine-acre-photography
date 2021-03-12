<template>
  <div class="gallery" ref="masonry">
    <div class="item" v-for="(image, index) in images" v-bind:key="index">
      <img v-bind:src="image.src" />
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
  data: function () {
    return {
      images: [
        {
          src:
            "https://res.cloudinary.com/nineacrephotography/image/upload/v1604249965/samples/people/bicycle.jpg",
        },
        {
          src:
            "https://res.cloudinary.com/nineacrephotography/image/upload/v1604249963/samples/people/jazz.jpg",
        },
        {
          src:
            "https://res.cloudinary.com/nineacrephotography/image/upload/v1604249963/samples/people/boy-snow-hoodie.jpg",
        },
        {
          src:
            "https://res.cloudinary.com/nineacrephotography/image/upload/v1604249961/samples/people/smiling-man.jpg",
        },
      ],
    };
  },
};
</script>
