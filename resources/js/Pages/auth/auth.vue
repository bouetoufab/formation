<template>
    <main class="login-box">
      <div class="card card-outline card-primary">
        <div class="card-header">
            <Link  :href="route('auth')" class="link-light text-center link-offset-2 link-opacity-100 link-opacity-50-hover"><h1 class="mb-0"><b>FORMATION</b> APP</h1></Link >
        </div>
        <div class="card-body login-card-body">
          <p class="login-box-msg">Ouvrir une session</p>

          <form action="../index3.html" method="post">
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="loginEmail" type="email" class="form-control" value="" placeholder="" />
                <label for="loginEmail">Email</label>
              </div>
              <div class="input-group-text">
                <span class="bi bi-envelope"></span>
              </div>
            </div>
            <div class="input-group mb-1">
              <div class="form-floating">
                <input id="loginPassword" type="password" class="form-control" placeholder="" />
                <label for="loginPassword">Mot de passe</label>
              </div>
              <div class="input-group-text">
                <span class="bi bi-lock-fill"></span>
              </div>
            </div>
            <!--begin::Row-->
            <div class="row">
              <div class="col-8 d-inline-flex align-items-center">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                  <label class="form-check-label" for="flexCheckDefault"> Se rappeler de moi </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Connexion</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
            <!--end::Row-->
          </form>

          <p class="mb-1">
            <Link  :href="route('forgot-password')">Mot de passe oublier</Link >
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </main>
    <!-- /.login-box -->
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
</script>