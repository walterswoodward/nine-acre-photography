<template>
  <div class="images flex justify-center flex-wrap" v-if="!showModal">
    <div class="image" v-for="(image, index) in images" v-bind:key="index">
      <img
        v-bind:src="'https://res.cloudinary.com/nineacrephotography/image/upload/c_scale,w_300' + image.path"
        v-on:click="lightbox"
        v-bind:name="image.name"
      />
    </div>
  </div>
  <div class="lightbox__wrap" v-bind:key="0" v-if="showModal">
    <button class="modal__close" v-on:click="lightbox">x</button>
    <button class="arrow__right">&gt;</button>
    <button class="arrow__left">&lt;</button>
    <img
      class="lightbox__image"
      v-bind:src="
        'https://res.cloudinary.com/nineacrephotography/image/upload' + images[0].path
      "
      v-on:click="lightbox"
      v-bind:name="images[0].name"
    />
  </div>
</template>

<style scoped>
.image {
}

.arrow__right, .arrow__left {
        position: absolute;
    font-size: 6rem;
}

.arrow__right {
    right: 7rem;
}

.arrow__left {
    left: 7rem;
}

.modal__close {
    position: absolute;
    right: 3rem;
    font-size: 3rem;
    top: 1rem;
}

.lightbox__wrap {
  background: rgba(0,0,0,0.5);
  position: absolute;
  left:0;
  width: 100%;
  height: calc(100vh - 3.5rem);
  display: flex;
  justify-content: center;
  align-items: center;
}

.lightbox__image {
  display: flex;
  width: 50%;
}
</style>

<script>
var cl = cloudinary.Cloudinary.new({ cloud_name: "demo" });
cl.responsive();
export default {
  props: {},
  methods: {
    lightbox: function (event) {
      console.log(event.target.name + " image clicked");
      this.showModal = !this.showModal;
    },
  },
  data: function () {
    return {
    showModal: false,
      images: [
        {
          name: "bicycle.jpg",
          path: "/v1604249965/samples/people/bicycle.jpg",
        },
        // {
        //      name: 'jazz.jpg',
        //   path:
        //     "/v1604249963/samples/people/jazz.jpg",
        // },
        // {
        //      name: 'boy-snow-hoodie.jpg',
        //   path:
        //     "/v1604249963/samples/people/boy-snow-hoodie.jpg",
        // },
        // {
        //      name: 'smiling-man.jpg',
        //   path:
        //     "/v1604249961/samples/people/smiling-man.jpg",
        // },
      ],
    };
  },
};
</script>
