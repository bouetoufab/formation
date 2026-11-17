<template>
    <!--begin::App Wrapper-->
    <div class="app-wrapper">

        <headerPageComponent />
        <!-- j'utilise le key pour un rechargement local du composant sidebar -->
        <sidebarComponent :key="page.url" />

        <!--begin::App Main-->
        <main class="app-main">
            <slot />
        </main>
        <!--end::App Main-->

        <footerComponent />

    </div>
    <!--end::App Wrapper-->
</template>


<script setup>
    import headerPageComponent from '../components/admin/header-page-component.vue';
    import sidebarComponent from '../components/admin/sidebar-component.vue';
    import footerComponent from '../components/admin/footer-component.vue';

    import { usePage } from '@inertiajs/vue3';

    const page = usePage();
</script>