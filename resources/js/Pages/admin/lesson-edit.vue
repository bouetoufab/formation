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
                <li class="breadcrumb-item active" aria-current="page">Edition d'une lesson</li>
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
                    <div class="card-title">Lesson</div>
                  </div>
                  <form>
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="lesson_name" class="form-label"> Titre </label>
                            <input
                            type="text"
                            class="form-control"
                            id="lesson_name"
                            placeholder="e.g. logements sociaux"
                            required
                            />
                        </div>
                        <div class="mb-3">
                            <label for="lesson_course" class="form-label"> Cours </label>
                            <select required id="lesson_course" class="form-select">
                                <option >Cours 1</option>
                                <option>Cours 2</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="lesson_position" class="form-label"> Position </label>
                            <input
                            type="number"
                            class="form-control"
                            id="lesson_position"
                            placeholder="e.g. 1"
                            min="1"
                            required
                            />
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary" type="button" @click="$refs.lessonInput.click()" >
                                <i class="bi bi-cloud-upload me-1" aria-hidden="true"></i>
                                Ajouter une lesson
                            </button><span v-if="video.file" class="text-muted m-3">{{ video.file.name }}</span>
                            <input type="file" id="lesson" ref="lessonInput" hidden accept="video/*" @change="handleFileChange">
                        </div>
                        <div class="mb-3">
                            <label for="lesson_description" class="form-label"> Description </label>
                            <textarea class="form-control"  name="lesson_description" id="lesson_description"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="lesson_transcription" class="form-label"> Transcription </label>
                            <textarea class="form-control"  name="lesson_transcription" id="lesson_transcription"></textarea>
                        </div>
                        <div class="mb-3">
                            <div class="form-check form-switch">
                            <input
                                class="form-check-input"
                                type="checkbox"
                                role="switch"
                                id="switch-2"
                                checked
                            />
                            <label class="form-check-label" for="switch-2">Status (Publier)</label>
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
    const video = useForm({
        file: null,
    });
    const handleFileChange = (event) => {
        video.file = event.target.files[0];
    };
</script>