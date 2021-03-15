<template>
  <div class="w-full h-full flex flex-col items-center justify-center items-center">
    <div class="w-4/5 flex flex-col sm:flex-row sm:items-start">
      <img class="w-1/3 sm:w-auto sm:max-w-md" src="./../../images/camera__w130.svg" />
      <div class="w-4/5 sm:w-4/5 text-4xl sm:text-5xl max-w-md custom-font-1">
        Nine Acre Photography
      </div>
    </div>
    <div class="w-4/5 text-sm sm:text-base">
      <p>
        Founded on the belief that human beings were made to empower one another to
        create, innovate, and pursue justice together.
      </p>
    </div>
  </div>
</template>

<style scoped>
.custom-font-1 {
  font-family: "Cinzel Decorative";
}
.bg-gray-100 {
  background-color: #f7fafc;
  background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
  border-color: #edf2f7;
  border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
  color: #cbd5e0;
  color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
  color: #a0aec0;
  color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
  color: #718096;
  color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
  color: #4a5568;
  color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
  color: #1a202c;
  color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
  .dark\:bg-gray-800 {
    background-color: #2d3748;
    background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
  }

  .dark\:bg-gray-900 {
    background-color: #1a202c;
    background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
  }

  .dark\:border-gray-700 {
    border-color: #4a5568;
    border-color: rgba(74, 85, 104, var(--tw-border-opacity));
  }

  .dark\:text-white {
    color: #fff;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  .dark\:text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
  }
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
  },
};
</script>
