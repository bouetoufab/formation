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
                <li class="breadcrumb-item active" aria-current="page">Edition d'une catégorie</li>
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
                    <div class="card-title">Catégorie</div>
                  </div>
                  <form>
                    <div class="card-body">
                      <div class="mb-3">
                        <label for="cat_name" class="form-label">Libellé</label>
                        <input
                        type="text"
                        class="form-control"
                        id="cat_name"
                        placeholder="e.g. logements sociaux"
                        required
                        />
                      </div>
                      <div class="mb-3">
                        <label for="cat_slug" class="form-label">Slug</label>
                        <input
                            type="text"
                            class="form-control"
                            id="cat_slug"
                            value="logements-sociaux"
                            readonly
                        />
                      </div>
                      <div class="mb-3">
                        <label class="form-label" for="cat_description">Description</label>
                        <textarea class="form-control"  name="cat_description" id="cat_description"></textarea>
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