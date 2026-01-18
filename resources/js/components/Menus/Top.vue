<script setup>
import { router } from "@inertiajs/vue3";

const logout = () => {
  router.post("logout", {
    onFinish: () => (window.location = route("login")),
  });
};
</script>

<template>
  <!-- BEGIN NAVBAR  -->
  <header class="navbar navbar-expand-md d-none d-lg-flex d-print-none">
    <div class="container-xl">
      <!-- BEGIN NAVBAR TOGGLER -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu"
        aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle primary navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- END NAVBAR TOGGLER -->

      <div class="navbar-nav flex-row order-md-last ms-auto">
        <div class="d-none d-md-flex">
          <!-- BEGIN THEME TOGGLE -->
          <div class="nav-item">
            <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Enable dark mode"
              data-bs-toggle="tooltip" data-bs-placement="bottom">
              <!-- Download SVG icon from http://tabler.io/icons/icon/moon -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"
                focusable="false" class="icon icon-1">
                <path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454l0 .008" />
              </svg>
            </a>

            <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Enable light mode"
              data-bs-toggle="tooltip" data-bs-placement="bottom">
              <!-- Download SVG icon from http://tabler.io/icons/icon/sun -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"
                focusable="false" class="icon icon-1">
                <path d="M8 12a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                <path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" />
              </svg>
            </a>
          </div>
          <!-- END THEME TOGGLE -->

          <!-- END LANGUAGE SELECTOR -->
        </div>
        <!-- BEGIN USER MENU -->
        <div class="nav-item dropdown">
          <a href="#" class="nav-link d-flex lh-1 p-0 px-2" data-bs-toggle="dropdown" aria-label="Open user menu">
            <!-- <span class="avatar avatar-sm" style="background-image: url(./static/avatars/000m.jpg)"> </span> -->
            <div class="d-none d-xl-block ps-2">
              <div>{{ $page.props.auth.user.name }}</div>
              <div class="mt-1 small text-secondary">Administrador</div>
            </div>
          </a>

          <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
            <a class="dropdown-item"
              href="./profile.html"><!-- Download SVG icon from http://tabler.io/icons/icon/user -->
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true"
                focusable="false" class="icon dropdown-item-icon icon-2">
                <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0" />
                <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
              </svg>
              Perfil
            </a>

            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="./settings.html">Configurações</a>
            <form @submit.prevent="logout">
              <button type="submit" class="dropdown-item">
                Terminar Sessão
              </button>
            </form>
          </div>
        </div>
        <!-- END USER MENU -->
      </div>

      <!-- END NAVBAR MENU -->

    </div>

  </header>
  <!-- END NAVBAR  -->
</template>