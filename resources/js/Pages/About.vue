<template>
  <div class="about">
    <div class="about__bio text-sm">
      {{ bio }}
    </div>
    <div
      class="about__image"
      v-bind:style="{
        backgroundImage: 'url(' + aboutImage + ')',
      }"
    ></div>
  </div>
</template>

<style scoped>
.about {
  margin-top: 50px;
  height: calc(100% - 50px);
  background: black;
  display: flex;
  justify-content: flex-end;
}

.about__image {
  background-size: contain;
  background-repeat: no-repeat;
  background-position: 100% 0%;
  background-color: #000;
  height: 100%;
  width: 50%;
  clip-path: rect(10px, 20px, 30px, 40px);
}

.about__bio {
  color: #ddd;
  width: 40%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}
</style>

<script>
import BreezePublicLayout from "@/Layouts/PublicMinimal";

export default {
  layout: BreezePublicLayout,
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
    message: String,
    bio: {
      type: String,
      default:
        "Sam Williams is a professional photographer based in Boston working under the name Nine Acre Photography, a name that pays homage to his childhood home.  His most recent work documenting the city’s protests has been highlighted by the Boston Globe and recognized by the community.  Sam’s work celebrates the raw moments of history in the making, exploring natural light, emotion, and the relationships that form between photographer and subject.",
    },
    aboutImage: {
      type: String,
      default:
        "https://res.cloudinary.com/nineacrephotography/image/upload/v1615832940/About/sam-williams_g5n61o.jpg",
    },
  },
};
</script>
