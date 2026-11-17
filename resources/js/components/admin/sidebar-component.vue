<template>
    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
        <!--begin::Sidebar Brand-->
        <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="#" class="brand-link">
            <!--begin::Brand Image-->
            <img
            src=""
            alt=""
            class="brand-image opacity-75 shadow"
            />
            <!--end::Brand Image-->
            <!--begin::Brand Text-->
            <span class="brand-text fw-light">Formation App</span>
            <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
        </div>
        <!--end::Sidebar Brand-->
        <!--begin::Sidebar Search-->
        <div class="sidebar-search" role="search">
        <label for="sidebar-search-input" class="visually-hidden">Filtrer sur le menu</label>
        <input
            type="search"
            id="sidebar-search-input"
            class="form-control form-control-sm"
            placeholder="Filter menu…"
            autocomplete="off"
            data-lte-toggle="sidebar-search"
            data-lte-target="#navigation"
        />
        <p class="fs-7 text-secondary mt-2 mb-0" data-lte-search-empty role="status" hidden>
            Aucune de correspondance.
        </p>
        </div>
        <!--end::Sidebar Search-->
        <!--begin::Sidebar Wrapper-->
        <div class="sidebar-wrapper">
        <nav class="mt-2" aria-label="Main navigation">
            <!--begin::Sidebar Menu-->
            <ul
            class="nav sidebar-menu flex-column"
            data-lte-toggle="treeview"
            data-accordion="false"
            id="navigation"
            >
                <li class="nav-item" :class="{ 'menu-open': route().current('admin.users.*') }">
                    <a  href="#" class="nav-link" :class="{ active: route().current('admin.users.*') }">
                        <i class="nav-icon bi bi-people"></i>
                        <p>
                            Utilisateurs
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>

                    </a >
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <Link  :href="route('admin.users.list')" class="nav-link" :class="{ active: route().current('admin.users.list') }">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Liste des utilisateurs</p>
                            </Link >
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Ajouter un utilisateur</p>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item" :class="{ 'menu-open': route().current('admin.courses.categories.*')}">
                    <a href="#" class="nav-link" :class="{ active: route().current('admin.courses.categories.*') }">
                        <i class="nav-icon bi bi-pencil-square"></i>
                        <p>
                            Catégories de Cours
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <Link  :href="route('admin.courses.categories.list')" class="nav-link" :class="{ active: route().current('admin.courses.categories.list') }">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Liste des catégories</p>
                            </Link >
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Ajouter une Catégorie</p>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item" :class="{ 'menu-open': route().current('admin.courses.data.*')}">
                    <a href="#" class="nav-link" :class="{ active: route().current('admin.course.data.*') }">
                        <i class="nav-icon bi bi-book"></i>
                        <p>
                            Cours
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <Link  :href="route('admin.courses.data.list')" class="nav-link" :class="{ active: route().current('admin.courses.data.list') }">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Liste des Cours</p>
                            </Link >
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Ajouter un Cours</p>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <li class="nav-item" :class="{ 'menu-open': route().current('admin.courses.lesson.*')}">
                    <a href="#" class="nav-link" :class="{ active: route().current('admin.courses.lesson.*') }">
                        <i class="nav-icon bi bi-file-earmark-text"></i>
                        <p>
                            Lessons
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <Link  :href="route('admin.courses.lesson.list')" class="nav-link" :class="{ active: route().current('admin.courses.lesson.list') }">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Liste des Lessons</p>
                            </Link >
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Ajouter une Lesson</p>
                            </a>
                        </li> -->
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon bi bi-table"></i>
                        <p>
                            Evenements
                            <i class="nav-arrow bi bi-chevron-right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <Link  href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Liste des Evenements</p>
                            </Link >
                        </li>
                        <li class="nav-item">
                            <Link  href="#" class="nav-link">
                                <i class="nav-icon bi bi-circle"></i>
                                <p>Ajouter un Evenement</p>
                            </Link >
                        </li>
                    </ul>
                </li> -->
            </ul>
            <!--end::Sidebar Menu-->
        </nav>
        </div>
        <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
</script>