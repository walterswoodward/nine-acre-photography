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
          v-bind:index="index"
          v-bind:title="image.title"
          v-bind:description="image.description"
          v-bind:specs="image.specs"
        />
      </div>
    </div>
    <div class="lightbox__wrap" v-bind:key="0" v-if="showModal">
      <!-- <button class="arrow__right"><font-awesome-icon icon="angle-double-right" /></button> -->
      <!-- <button class="arrow__left"><font-awesome-icon :icon="['fas', 'angle-double-left']" /></button> -->
      <div class="lightbox-image__actions">
        <div class="lightbox-image-actions__count">{{index}}/4</div>
        <div class="lightbox-image-actions__actions">
          <!-- <font-awesome-icon icon="share-alt" /> -->
          <!-- <font-awesome-icon icon="clone" /> -->
          <!-- <font-awesome-icon icon="search-minus" /> -->
          <!-- <font-awesome-icon icon="search-plus" /> -->
          <!-- <font-awesome-icon icon="file-download" /> -->
          <button class="modal__close" v-on:click="toggleModal">
            <font-awesome-icon :icon="['fas', 'times']" class="text-xl"/>
          </button>
        </div>
      </div>
      <div class="lightbox-image__caption">
        <p class="lightbox-image-caption__title">{{imageTitle}}</p>
        <p class="lightbox-image-caption__specs">{{imageSpecs}}</p>
        <p class="lightbox-image-caption__description">{{imageDescription}}</p>
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
.images {
    margin-top: 50px;
}

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


.lightbox__wrap {
  position: absolute;
  left: 0;
  width: 100vw;
    margin-top: 50px;
  height: calc(100vh - 50px);
  display: flex;
  flex-direction: column;
  align-items: center;
}

.lightbox-image__wrap {
  width: 100%;
  height: 100%;
}

.lightbox__image {
  width: 100%;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  height: 100%;
}

.lightbox-image__actions,
.lightbox-image__caption {
  position: fixed;
  background: rgba(0, 0, 0, 0.7);
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
  justify-content: flex-end;
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
      this.index = parseInt(event.target.getAttribute("index")) + 1;
      this.imageTitle = event.target.getAttribute("title");
      this.imageSpecs = event.target.getAttribute("specs");
      this.imageDescription = event.target.getAttribute("description");
      this.showModal = !this.showModal;
    },
  },
  data: function () {
    return {
      showModal: false,
      modalImage: null,
      images: [
        {
          name: "07620025_BLK_zeizz3.jpg",
          path: "/v1615741521/Work/07620025_BLK_zeizz3.jpg",
          title: "Symmetry",
          specs: "camera specs for Symmetry",
          description: "I think of all that we have created. How none of it compares to this flower"
        },
        {
          name: "000077340007_zefxif.jpg",
          path: "/v1615741543/Work/000077340007_zefxif.jpg",
          title: "New Morning",
          specs: "camera specs for New Morning",
          description: "Blades of grass and morning dew remind me of my hope anew"
        },
        {
          name: "000082770009_mtkalu.jpg",
          path: "/v1615741644/Work/000082770009_mtkalu.jpg",
          title: "Another Way",
          specs: "camera specs for Another Way",
          description: "Beyond that gate is another life just waiting for you"
        }
      ]
    };
  },
};
</script>
