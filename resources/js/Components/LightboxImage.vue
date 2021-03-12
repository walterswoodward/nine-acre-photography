<template>
  <div class="gallery" ref="masonry">
    <div class="item" v-for="(image, index) in images" v-bind:key="index">
      <img v-bind:src="'https://res.cloudinary.com/nineacrephotography/image/upload' + image.path" v-on:click="lightbox" v-bind:name="image.name"/>
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
  cursor: pointer;
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
var cl = cloudinary.Cloudinary.new({cloud_name: "demo"});
cl.responsive();
export default {
  props: {},
  methods: {
      lightbox: function(event) {
          console.log(event.target.name + " image clicked");
      }
  },
  data: function () {
    return {
      images: [
        {
            name: 'bicycle.jpg',
            path: '/v1604249965/samples/people/bicycle.jpg',
        },
        {
             name: 'jazz.jpg',
          path:
            "/v1604249963/samples/people/jazz.jpg",
        },
        {
             name: 'boy-snow-hoodie.jpg',
          path:
            "/v1604249963/samples/people/boy-snow-hoodie.jpg",
        },
        {
             name: 'smiling-man.jpg',
          path:
            "/v1604249961/samples/people/smiling-man.jpg",
        },
      ],
    };
  },
};
</script>
