<template>
    <!--begin::App Content Header-->
    <div class="app-content-header">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Row-->
        <div class="row">
          <div class="col-sm-6">
            <h1 class="mb-0 fs-3">Utilisateurs</h1>
          </div>
          <div class="col-sm-6">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb float-sm-end">
                <li class="breadcrumb-item"><Link  :href="route('admin.dashboard')">Accueil</Link ></li>
                <li class="breadcrumb-item active" aria-current="page">Liste des utilisateurs</li>
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
            <div class="card mb-4">
              <!--begin::Card Header-->
              <div class="card-header">
                <div class="row g-2 align-items-center">
                  <div class="col-12 col-md-4">
                    <h3 class="card-title">Liste des utilisateurs</h3>
                  </div>
                  <div class="col-12 col-md-8">
                    <div class="d-flex flex-wrap justify-content-md-end gap-2">
                      <div class="input-group input-group-sm w-auto">
                        <span class="input-group-text">
                          <i class="bi bi-search" aria-hidden="true"></i>
                        </span>
                        <input
                          type="search"
                          id="user-search"
                          class="form-control"
                          placeholder="Rechercher des utilisateurs"
                          aria-label="Rechercher des utilisateurs"
                          style="width: 180px"
                        />
                      </div>
                      <select
                        id="user-role-filter"
                        class="form-select form-select-sm w-auto"
                        aria-label="Filtrer par rôle"
                      >
                        <option value="all" selected>Tous les Rôles</option>
                        <option value="administrator">Administrateur</option>
                        <option value="subscriber">Abonné</option>
                      </select>
                      <button
                        type="button"
                        class="btn btn-sm btn-primary"
                        data-bs-toggle="modal"
                        data-bs-target="#modal-add-user"
                      >
                        <i class="bi bi-person-plus-fill me-1" aria-hidden="true"> </i>
                        Ajouter un utilisateur
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!--end::Card Header-->
              <!--begin::Card Body-->
              <div class="card-body p-0">
                <div class="table-responsive">
                  <table class="table table-hover align-middle m-0">
                    <thead>
                      <tr>
                        <th>Noms et prénoms</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Status</th>
                        <th>Ajouter depuis</th>
                        <th class="text-end">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <div class="d-flex align-items-center">
                            <img
                              src="./assets/img/user1-128x128.jpg"
                              alt=""
                              class="img-size-32 rounded-circle me-2"
                            />
                            <span class="fw-medium">Alexander Pierce</span>
                          </div>
                        </td>
                        <td>alexander.pierce@example.com</td>
                        <td>
                          <span class="badge text-bg-danger"> Administrator </span>
                        </td>
                        <td>
                          <span class="badge text-bg-success">Active</span>
                        </td>
                        <td>Mar 12, 2025</td>
                        <td class="text-end">
                          <div class="btn-group btn-group-sm">
                            <Link
                              role="button"
                              class="btn btn-outline-secondary"
                              aria-label="Edit Alexander Pierce"
                              :href="route('admin.users.account')"
                            >
                              <i class="bi bi-pencil" aria-hidden="true"> </i>
                            </Link>
                            <button
                              type="button"
                              class="btn btn-outline-danger"
                              data-bs-toggle="modal"
                              data-bs-target="#modal-delete-user"
                              aria-label="Delete Alexander Pierce"
                            >
                              <i class="bi bi-trash" aria-hidden="true"> </i>
                            </button>
                          </div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.table-responsive -->
              </div>
              <!--end::Card Body-->
              <!--begin::Card Footer-->
              <div class="card-footer clearfix">
                <div class="float-start pt-1 fs-7 text-body-secondary">
                  Showing 1 to 9 of 42 users
                </div>
                <ul class="pagination pagination-sm m-0 float-end">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous"> &laquo; </a>
                  </li>
                  <li class="page-item active">
                    <a class="page-link" href="#">1</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">2</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">3</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">4</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">5</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next"> &raquo; </a>
                  </li>
                </ul>
              </div>
              <!--end::Card Footer-->
            </div>
            <!--end::Card-->
          </div>
          <!-- /.col -->
        </div>
        <!--end::Row-->

        <!--begin::Add User Modal-->
        <div
          class="modal fade"
          id="modal-add-user"
          tabindex="-1"
          aria-labelledby="modal-add-user-label"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <form>
                <div class="modal-header">
                  <h5 class="modal-title" id="modal-add-user-label">Ajouter un nouvel utilisateur</h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-bs-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <div class="mb-3">
                    <label for="first_name" class="form-label"> Prenom </label>
                    <input
                      type="text"
                      class="form-control"
                      id="first_name"
                      placeholder="e.g. Jhon"
                    />
                  </div>
                  <div class="mb-3">
                    <label for="last_name" class="form-label"> Nom </label>
                    <input
                      type="text"
                      class="form-control"
                      id="last_name"
                      placeholder="e.g. Doe"
                      required
                    />
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label"> Email</label>
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="name@example.com"
                      required
                    />
                    <div class="form-text">Une invitation va être envoyée à cette adresse mail.</div>
                  </div>
                  <div class="mb-3">
                    <label for="role" class="form-label"> Rôle </label>
                    <select required id="role" class="form-select">
                      <option selected>Abonné</option>
                      <option>Administrateur</option>
                    </select>
                  </div>
                  <div class="mb-3">
                    <button class="btn btn-primary" type="button" @click="$refs.avatarInput.click()" >
                        <i class="bi bi-cloud-upload me-1" aria-hidden="true"></i>
                        Ajouter un avatar
                    </button>
                    <input type="file" id="avatar" ref="avatarInput" hidden accept="image/*" @change="handleFileChange"> <span v-if="avatar.avatar" class="text-muted">{{ avatar.avatar.name }}</span>
                  </div>
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      id="new-user-welcome"
                      checked
                    />
                    <label class="form-check-label" for="new-user-welcome">
                      Envoyer un mail avec les informations de connexion
                    </label>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                    Annuler
                  </button>
                  <button type="submit" class="btn btn-primary">Créer un utilisateur</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!--end::Add User Modal-->

        <!--begin::Delete User Modal-->
        <div
          class="modal fade"
          id="modal-delete-user"
          tabindex="-1"
          aria-labelledby="modal-delete-user-label"
          aria-hidden="true"
        >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modal-delete-user-label">Supprimer un utilisateur</h5>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="modal"
                  aria-label="Close"
                ></button>
              </div>
              <div class="modal-body">
                <p class="mb-0">
                  Etes vous sûr de vouloir supprimer cet utilisateur? Tous son contenu va être perdu. Cette action est irréverssible.
                </p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                  Cancel
                </button>
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                  Supprimer un utilisateur
                </button>
              </div>
            </div>
          </div>
        </div>
        <!--end::Delete User Modal-->
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

    const avatar = useForm({
        avatar: null,
    });
    const handleFileChange = (event) => {
        avatar.avatar = event.target.files[0];
    };
</script>