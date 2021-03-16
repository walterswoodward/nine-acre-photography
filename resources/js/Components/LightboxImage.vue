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
          v-bind:count="images.length"
        />
      </div>
    </div>
    <div class="lightbox__wrap" v-bind:key="0" v-if="showModal">
      <div class="lightbox-image__actions">
        <div class="lightbox-image-actions__count">
          {{ currentImage.id }} / {{ imagesCount }}
        </div>
        <div class="lightbox-image-actions__change">
          <button
            class="arrow__left"
            v-on:click="previousImage"
            v-bind:index="currentIndex"
          >
            <font-awesome-icon :icon="['fas', 'angle-double-left']" />
          </button>
          <button class="arrow__right" v-on:click="nextImage" v-bind:index="currentIndex">
            <font-awesome-icon icon="angle-double-right" />
          </button>
        </div>
        <div class="lightbox-image-actions__actions">
          <!-- <font-awesome-icon icon="share-alt" /> -->
          <!-- <font-awesome-icon icon="clone" /> -->
          <!-- <font-awesome-icon icon="search-minus" /> -->
          <!-- <font-awesome-icon icon="search-plus" /> -->
          <!-- <font-awesome-icon icon="file-download" /> -->
          <button class="modal__close" v-on:click="toggleModal">
            <font-awesome-icon :icon="['fas', 'times']" class="text-xl" />
          </button>
        </div>
      </div>

      <div class="lightbox-image__wrap">
        <div
          class="lightbox__image"
          v-bind:style="{
            backgroundImage:
              'url(https://res.cloudinary.com/nineacrephotography/image/upload' +
              currentImage.path +
              ')',
          }"
        ></div>
      </div>
      <div class="lightbox-image__caption">
        <p class="lightbox-image-caption__title">{{ currentImage.title }}</p>
        <p class="lightbox-image-caption__specs">{{ currentImage.specs }}</p>
        <p class="lightbox-image-caption__description">{{ currentImage.description }}</p>
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

.lightbox__wrap {
  position: absolute;
  left: 0;
  width: 100vw;
  margin-top: 50px;
  height: calc(100% - 50px);
  display: flex;
  flex-direction: column;
  align-items: center;
}

.lightbox-image__wrap {
  width: 100%;
  height: 74%;
}

.lightbox__image {
  width: 100%;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: center;
  background-color: #000;
  height: 100%;
}

.lightbox-image__actions,
.lightbox-image__caption {
  /* position: fixed; */
  background: rgba(0, 0, 0, 0.8);
  width: 100%;
  color: #fff;
  padding: 10px;
  text-align: center;
}

.lightbox-image__caption {
  bottom: 0;
  height: 18%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.lightbox-image-caption__title {
  font-weight: 700;
}

.lightbox-image-caption__specs {
  font-weight: 200;
  font-size: 0.7rem;
}

.lightbox-image-caption__description {
  font-size: 0.75rem;
}

.lightbox-image__actions {
  display: flex;
  justify-content: space-between;
  height: 8%;
}

.lightbox-image-actions__count {
  font-size: 0.75rem;
  display: flex;
  align-items: center;
  width: 30%;
}

.lightbox-image-actions__change {
  width: 40%;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.arrow__right:hover,
.arrow__left:hover {
  color: #fff;
}

.lightbox-image-actions__actions {
  display: flex;
  justify-content: flex-end;
  align-items: center;
  width: 30%;
}

.modal__close {
  display: flex;
  justify-content: center;
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

var lightBoxImages = {
  all: function (images) {
    return images;
  },
};

export default {
  components: {
    FontAwesomeIcon,
  },
  props: {},
  data: function () {
    return {
      showModal: false,
      modalImage: null,
      currentImage: null,
      currentIndex: null,
      images: [
        {
          name: "07620025_BLK_zeizz3.jpg",
          path: "/v1615741521/Work/07620025_BLK_zeizz3.jpg",
          title: "Symmetry",
          specs: "camera specs for Symmetry",
          description:
            "I think of all that we have created. How none of it compares to this flower",
          id: 1,
        },
        {
          name: "000077340007_zefxif.jpg",
          path: "/v1615741543/Work/000077340007_zefxif.jpg",
          title: "New Morning",
          specs: "camera specs for New Morning",
          description: "Blades of grass and morning dew remind me of my hope anew",
          id: 2,
        },
        {
          name: "000082770009_mtkalu.jpg",
          path: "/v1615741644/Work/000082770009_mtkalu.jpg",
          title: "Another Way",
          specs: "camera specs for Another Way",
          description: "Beyond that gate is another life just waiting for you",
          id: 3,
        },
      ],
    };
  },
  methods: {
    toggleModal: function (event) {
      event.stopPropagation();
      let allImages = lightBoxImages.all(this.images);
      this.currentIndex = event.target.getAttribute("index");
      this.currentImage = allImages[event.target.getAttribute("index")];
      // TODO: As this does not change, it should probably be put somewhere else
      this.imagesCount = allImages.length;
      this.showModal = !this.showModal;
    },
    nextImage: function (event) {
      event.stopPropagation();
      let allImages = lightBoxImages.all(this.images);
      let newIndex = (parseInt(this.currentIndex) + 1) % 3;
      this.currentImage = allImages[newIndex];
      this.currentIndex = newIndex;
    },
    previousImage: function () {
      event.stopPropagation();
      let allImages = lightBoxImages.all(this.images);

      let newIndex = parseInt(this.currentIndex) - 1;
      if (newIndex < 0) {
        newIndex = this.imagesCount - 1;
      }

      this.currentImage = allImages[newIndex];
      this.currentIndex = newIndex;
    },
  },
};
</script>
