<template>
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6">
            <h1 class="mb-0 fs-3">Utilsateur</h1>
          </div>
          <div class="col-sm-6">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><Link  :href="route('admin.dashboard')">Accueil</Link ></li>
                <li class="breadcrumb-item active" aria-current="page">Compte d"un utilisateur</li>
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
          <div class="container-fluid">
            <div class="row g-3">
              <!-- Left rail -->
              <div class="col-md-3">
                <div
                  class="list-group list-group-flush nav nav-pills flex-column"
                  id="settings-nav"
                  role="tablist"
                >
                  <a
                    href="#account"
                    class="list-group-item list-group-item-action active"
                    data-bs-toggle="pill"
                    role="tab"
                    aria-selected="true"
                  >
                    <i class="bi bi-person me-2" aria-hidden="true"></i>Mon compte
                  </a>
                  <a
                    href="#avatar"
                    class="list-group-item list-group-item-action"
                    data-bs-toggle="pill"
                    role="tab"
                  >
                    <i class="bi bi-emoji-smile me-2" aria-hidden="true"></i>Avatar
                  </a>
                  <a
                    href="#security"
                    class="list-group-item list-group-item-action"
                    data-bs-toggle="pill"
                    role="tab"
                  >
                    <i class="bi bi-shield-lock me-2" aria-hidden="true"></i>Securité
                  </a>
                  <a
                    href="#danger"
                    class="list-group-item list-group-item-action text-danger"
                    data-bs-toggle="pill"
                    role="tab"
                  >
                    <i class="bi bi-exclamation-triangle me-2" aria-hidden="true"></i>
                    Zone de danger
                  </a>
                </div>
              </div>

              <!-- Tab content -->
              <div class="col-md-9">
                <div class="tab-content">
                  <!-- Account -->
                  <div class="tab-pane fade show active" id="account" role="tabpanel">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Mon compte</h3>
                      </div>
                      <div class="card-body">
                        <form class="row g-3">
                          <div class="col-md-6">
                            <label class="form-label" for="first_name"> Prénom </label>
                            <input
                              type="text"
                              class="form-control"
                              id="first_name"
                              value="John"
                            />
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="settings-email"> Email </label>
                            <input
                              type="email"
                              class="form-control"
                              id="settings-email"
                              value="jane@example.com"
                            />
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="last_name"> Nom </label>
                            <input
                              type="text"
                              class="form-control"
                              id="last_name"
                              value="Doe"
                            />
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="role"> Rôle </label>
                            <select required id="role" class="form-select">
                            <option selected>Abonné</option>
                            <option>Administrateur</option>
                            </select>
                          </div>
                          <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- Notifications -->
                  <div class="tab-pane fade" id="avatar" role="tabpanel">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Avatar</h3>
                      </div>
                      <div class="card-body">
                        <form class="row g-3">
                          <div class="col-md-6">
                            <button class="btn btn-primary" type="button" @click="$refs.avatarInput.click()" >
                                <i class="bi bi-cloud-upload me-1" aria-hidden="true"></i>
                                Ajouter un avatar
                            </button>
                            <input type="file" id="avatar" ref="avatarInput" hidden accept="image/*" @change="handleFileChange"> <span v-if="avatar.avatar" class="text-muted">{{ avatar.avatar.name }}</span>
                          </div>
                          <div class="col-md-6">
                            <figure class="card h-100 mb-0">
                                <div class="ratio ratio-4x3">
                                    <!-- <img
                                    src=""
                                    alt="Avatar"
                                    class="card-img-top object-fit-cover"
                                    loading="lazy"
                                    /> -->
                                </div>
                                <figcaption class="card-body d-flex align-items-start gap-2 py-2">
                                    <div class="flex-grow-1 overflow-hidden">
                                        <!-- <p class="fw-semibold mb-0 text-truncate">Reading by lamplight</p>
                                        <p class="fs-7 text-secondary mb-0">3.8 MB · 3200×2133</p> -->
                                    </div>
                                    <div class="dropdown flex-shrink-0">
                                        <button
                                            class="btn btn-tool"
                                            type="button"
                                            data-bs-toggle="dropdown"
                                            aria-expanded="false"
                                            aria-label="Actions for Reading by lamplight"
                                        >
                                            <i class="bi bi-three-dots-vertical" aria-hidden="true"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-end">
                                            <li>
                                            <a class="dropdown-item text-danger" href="#"> Delete </a>
                                            </li>
                                        </ul>
                                    </div>
                                </figcaption>
                            </figure>
                          </div>
                          <div class="col-12">
                            <button type="submit" class="btn btn-primary">Enregistrer</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- Security -->
                  <div class="tab-pane fade" id="security" role="tabpanel">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Mot de passe</h3>
                      </div>
                      <div class="card-body">
                        <form class="row g-3">
                          <div class="col-md-12">
                            <label class="form-label" for="pwd-current"> Mot de passe actuel</label>
                            <input type="password" class="form-control" id="pwd-current" />
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="pwd-new"> Nouveau mot de passe </label>
                            <input type="password" class="form-control" id="pwd-new" />
                          </div>
                          <div class="col-md-6">
                            <label class="form-label" for="pwd-confirm">
                              Confirmer nouveau mot de passe
                            </label>
                            <input type="password" class="form-control" id="pwd-confirm" />
                          </div>
                          <div class="col-12">
                            <button type="submit" class="btn btn-primary">Mise à jour du mot de passe</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  <!-- Danger zone -->
                  <div class="tab-pane fade" id="danger" role="tabpanel">
                    <div class="card border-danger">
                      <div class="card-header bg-danger-subtle">
                        <h3 class="card-title text-danger">Zone de danger</h3>
                      </div>
                      <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start">
                          <div>
                            <p class="mb-0 fw-semibold text-danger">Supprimer le compte</p>
                            <small class="text-secondary">
                              Cette action entrainera une suppresion permanente du compte et de toutes les données qui lui sont associer.
                              Cette action est irréverssible.
                            </small>
                          </div>
                          <button class="btn btn-danger">Supprimer le compte</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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

    const avatar = useForm({
        avatar: null,
    });
    const handleFileChange = (event) => {
        avatar.avatar = event.target.files[0];
    };
</script>