<template>
  <div>
    <div class="images flex justify-center flex-wrap" v-if="!showModal">
      <div class="image" v-for="(image, index) in images" v-bind:key="index">
        <img
          class="m-1"
          v-bind:src="
            'https://res.cloudinary.com/nineacrephotography/image/upload/c_scale,w_300' +
            image.path
          "
          v-on:click="toggleModal"
          v-bind:path="image.path"
        />
      </div>
    </div>
    <div class="lightbox__wrap" v-bind:key="0" v-if="showModal">
      <!-- <button class="arrow__right"><font-awesome-icon icon="angle-double-right" /></button> -->
      <!-- <button class="arrow__left"><font-awesome-icon :icon="['fas', 'angle-double-left']" /></button> -->
      <div class="lightbox-image__actions">
        <div class="lightbox-image-actions__count">1/3</div>
        <div class="lightbox-image-actions__actions">
          <font-awesome-icon icon="share-alt" />
          <font-awesome-icon icon="clone" />
          <font-awesome-icon icon="search-minus" />
          <font-awesome-icon icon="search-plus" />
          <font-awesome-icon icon="file-download" />
          <button class="modal__close" v-on:click="toggleModal">
            <font-awesome-icon :icon="['fas', 'times']" />
          </button>
        </div>
      </div>
      <div class="lightbox-image__caption">
        <p class="lightbox-image-caption__title">Title</p>
        <p class="lightbox-image-caption__specs">Specs</p>
        <p class="lightbox-image-caption__description">Description</p>
      </div>
      <div class="lightbox-image__wrap">
        <div
          class="lightbox__image"
          v-bind:style="{
            backgroundImage:
              'url(https://res.cloudinary.com/nineacrephotography/image/upload' +
              modalImagePath +
              ')',
          }"
          v-on:click="lightbox"
        ></div>
      </div>
    </div>
  </div>
</template>

<style scoped>
.image {
  cursor: pointer;
}

.arrow__right,
.arrow__left {
  position: absolute;
  font-size: 2.5rem;
}

.arrow__right {
  right: 60px;
}

.arrow__left {
  left: 60px;
}

.arrow__right:hover,
.arrow__left:hover {
  color: #fff;
}

.modal__close {
  /* position: absolute;
  right: 3rem;
  font-size: 3rem;
  top: 1rem; */
}

.lightbox__wrap {
  position: absolute;
  left: 0;
  width: 100%;
  height: calc(100vh - 3.5rem);
  display: flex;
  flex-direction: column;
  align-items: center;
}

.lightbox-image__wrap {
  width: 100%;
  height: 100%;
}

.lightbox__image {
  display: flex;
  width: 100%;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  height: 100%;
}

.lightbox-image__actions,
.lightbox-image__caption {
  position: fixed;
  background: rgba(0, 0, 0, 0.8);
  width: 100%;
  color: #fff;
  padding: 10px;
  text-align: center;
}

.lightbox-image__caption {
  bottom: 0;
}

.lightbox-image-caption__specs,
.lightbox-image-caption__description {
  font-size: 0.75rem;
}

.lightbox-image__actions {
  display: flex;
  justify-content: space-between;
}

.lightbox-image-actions__count {
  font-size: 0.75rem;
  display: flex;
  align-items: center;
}

.lightbox-image-actions__actions {
  width: 30%;
  display: flex;
  min-width: 150px;
  justify-content: space-around;
  align-items: center;
}
</style>

<script>
import { library } from "@fortawesome/fontawesome-svg-core";
import {
  faAngleDoubleLeft,
  faAngleDoubleRight,
  faTimes,
  faShareAlt,
  faClone,
  faSearchMinus,
  faSearchPlus,
  faFileDownload,
} from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/vue-fontawesome";
library.add(
  faAngleDoubleLeft,
  faAngleDoubleRight,
  faTimes,
  faShareAlt,
  faClone,
  faSearchMinus,
  faSearchPlus,
  faFileDownload
);

export default {
  components: {
    FontAwesomeIcon,
  },
  props: {},
  methods: {
    toggleModal: function (event) {
      event.stopPropagation();
      this.modalImagePath = event.target.getAttribute("path");
      this.showModal = !this.showModal;
    },
  },
  data: function () {
    return {
      showModal: false,
      modalImage: null,
      images: [
        {
          name: "bicycle.jpg",
          path: "/v1604249965/samples/people/bicycle.jpg",
        },
        {
          name: "jazz.jpg",
          path: "/v1604249963/samples/people/jazz.jpg",
        },
        {
          name: "boy-snow-hoodie.jpg",
          path: "/v1604249963/samples/people/boy-snow-hoodie.jpg",
        },
        {
          name: "smiling-man.jpg",
          path: "/v1604249961/samples/people/smiling-man.jpg",
        },
      ],
    };
  },
};
</script>
