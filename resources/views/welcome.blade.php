<!DOCTYPE html>
<!-- <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title> -->

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" /> -->

        <!-- Styles / Scripts -->
        <!-- @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>

</html> -->
@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page_title', 'Tableau de Bord Principal')

@section('content')
<div class="row">
    <!-- Exemple d'une carte d'information AdminLTE v4 (sans jQuery) -->
    <div class="col-lg-3 col-6">
        <div class="small-box text-bg-primary">
            <div class="inner">
                <h3>150</h3>
                <p>Nouveaux Clients</p>
            </div>
            <div class="icon">
                <i class="bi bi-bag-plus"></i>
            </div>
            <a href="#" class="small-box-footer link-light">
                Plus d'infos <i class="bi bi-link-45deg"></i>
            </a>
        </div>
    </div>

    <!-- Une carte standard -->
    <div class="col-md-12 mt-4">
        <div class="card card-primary card-outline">
            <div class="card-header">
                <h5 class="card-title">Bienvenue sur votre gestionnaire</h5>
            </div>
            <div class="card-body">
                <p>Votre structure est prête et fonctionnelle sous Laravel 12 !</p>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="module">
    // Votre code jQuery ou JS spécifique à cette page s'exécutera ici de manière sécurisée
    $(document).ready(function() {
        console.log('La page dashboard est chargée et jQuery est disponible.');
    });
</script>
@endpush

