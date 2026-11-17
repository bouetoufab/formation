<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }} | Tableau de board</title>

        <!--begin::Accessibility Meta Tags-->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes" />
        <meta name="color-scheme" content="light dark" />
        <meta name="theme-color" content="#007bff" media="(prefers-color-scheme: light)" />
        <meta name="theme-color" content="#1a1a1a" media="(prefers-color-scheme: dark)" />
        <!--end::Accessibility Meta Tags-->

        <!--begin::Primary Meta Tags-->
        <meta name="title" content="{{ config('app.name', 'Laravel') }}| Tableau de board" />
        <meta name="author" content="Boutoufab@gmail.com" />
        <!--end::Primary Meta Tags-->

        <!-- Étape clé : Injecter les routes Laravel dans JavaScript -->
        @routes
        @vite('resources/js/app.js')
        <x-inertia::head />
    </head>
    <body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
            <x-inertia::app />
    </body>
</html>