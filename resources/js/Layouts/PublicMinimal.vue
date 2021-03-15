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
</style>

<script>
export default {
  props: {
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
  },
  mounted: function () { // note that this should never be an arrow function
      // To address this: https://stackoverflow.com/questions/37112218/css3-100vh-not-constant-in-mobile-browser
      console.log( window.innerHeight + 'px');
      document.getElementById('public-minimal__wrap').style.minHeight = window.innerHeight + 'px';
  }
};
</script>
