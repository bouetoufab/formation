<template>
    <main class="login-box">
      <h1 class="login-logo">
        <Link  :href="route('forgot-password')"><a href="#"><b>FORMATION</b> App</a></Link >
      </h1>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg">
            Vous avez oublié votre mot de passe ? Vous pouvez facilement en obtenir un nouveau ici.
          </p>

          <form action="../examples/login.html" method="post">
            <label class="visually-hidden" for="forgotEmail">Email</label>
            <div class="input-group mb-3">
              <input id="forgotEmail" type="email" class="form-control" placeholder="Email" />
              <div class="input-group-text">
                <span class="bi bi-envelope"></span>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="d-grid gap-2">
                  <button type="submit" class="btn btn-primary">Demander un nouveau mot de passe</button>
                </div>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <p class="mt-3 mb-1">
            <Link  :href="route('auth')">Connexion</Link >
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