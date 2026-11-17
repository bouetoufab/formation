<template>
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6">
            <h1 class="mb-0 fs-3">Cours</h1>
          </div>
          <div class="col-sm-6">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><Link  :href="route('admin.dashboard')">Accueil</Link ></li>
                <li class="breadcrumb-item active" aria-current="page">Edition d'un cours</li>
              </ol>
            </nav>
          </div>
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content Header-->
    <!--begin::App Content-->
    <div class="app-content">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-12">
            <!--begin::Card-->
            <div class="card card-primary card-outline mb-4">
                  <div class="card-header">
                    <div class="card-title">Cours</div>
                  </div>
                  <form>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="course_name" class="form-label">Titre</label>
                        <input
                        type="text"
                        class="form-control"
                        id="course_name"
                        placeholder="e.g. logements sociaux"
                        required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="course_slug" class="form-label">Slug</label>
                        <input
                            type="text"
                            class="form-control"
                            id="course_slug"
                            value="logements-sociaux"
                            readonly
                        />
                      </div>
                        <div class="mb-3">
                            <label for="course_cat" class="form-label"> Catégorie </label>
                            <select required id="course_cat" class="form-select">
                                <option >Cat 1</option>
                                <option>cat 2</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label" for="course_description">Description</label>
                            <textarea class="form-control"  name="course_description" id="course_description"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                                <label class="form-check-label" for="course-status">Status (Publier)</label>
                                <input
                                    class="form-control form-check-input"
                                    type="checkbox"
                                    role="switch"
                                    id="course-status"
                                    checked
                                />
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                      <button type="submit" class="btn btn-primary">Enregistrer</button>
                    </div>
                  </form>
            </div>
            <!--end::Card-->
          </div>
          <!-- /.col -->
        </div>
        <!--end::Row-->
      </div>
      <!--end::Container-->
    </div>
    <!--end::App Content-->
</template>

<script setup>
import {useForm} from '@inertiajs/vue3'
import { Link } from '@inertiajs/vue3'
import AdminLayout from '../../layouts/adminLayout.vue';
defineOptions({
    layout: AdminLayout
});

</script>