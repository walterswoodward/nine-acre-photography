<template>
  <div
    id="public-minimal__wrap" class="relative flex items-top min-h-screen justify-center bg-gray-100 dark:bg-gray-500"
  >
    <div class="navbar flex justify-end fixed w-full top-0 bg-gray-100">
      <div class="navbar__links">
        <inertia-link
          v-if="$page.props.auth.user"
          href="/dashboard"
          class="text-sm text-gray-700 underline"
        >
          Dashboard
        </inertia-link>

        <template v-else>
          <inertia-link
            v-if="canLogin"
            :href="route('login')"
            class="text-md text-gray-600 underline"
          >
            Log in
          </inertia-link>
          <inertia-link
            v-else-if="canRegister"
            :href="route('register')"
            class="ml-4 text-md text-gray-600 underline"
          >
            Register
          </inertia-link>
          <inertia-link
            :href="route('home')"
            class="mr-4 text-md text-gray-600 hover:underline"
          >
            Home
          </inertia-link>
          <inertia-link
            :href="route('about')"
            class="mr-4 text-md text-gray-600 hover:underline"
          >
            About
          </inertia-link>
          <inertia-link
            :href="route('work')"
            class="mr-4 text-md text-gray-600 hover:underline"
          >
            Work
          </inertia-link>
        </template>
      </div>
    </div>

    <!-- Page Heading -->
    <header class="bg-white shadow" v-if="$slots.header">
      <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <slot name="header" />
      </div>
    </header>

    <!-- Page Content -->
    <main>
      <slot />
    </main>
  </div>
</template>

<style scoped>
.public-minimal__wrap {

}

.navbar {
  height: 50px;
}

.navbar__links {
  height: 100%;
  display: flex;
  align-items: center;
}

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
export default {
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
  mounted: function () {
      // To address this: https://stackoverflow.com/questions/37112218/css3-100vh-not-constant-in-mobile-browser
      document.getElementById('public-minimal__wrap').style.minHeight = window.innerHeight + 'px';
  }
};
</script>
