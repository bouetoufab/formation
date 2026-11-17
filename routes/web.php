<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return inertia('auth/auth',[
        'username' => 'Fabrice Bouetou'
    ]);
})->name('auth');

Route::get('/forgot-password', function () {
    return inertia('auth/forgot-password',[
        'username' => 'Fabrice Bouetou'
    ]);
})->name('forgot-password');

Route::get('/admin/dashboard', function () {
    return inertia('admin/dashboard');
})->name('admin.dashboard');

Route::get('/admin/users/list', function () {
    return inertia('admin/users-list');
})->name('admin.users.list');

// Route::get('/admin/users/account/{user}', function () {
Route::get('/admin/users/account/uuid', function () {
    return inertia('admin/users-account');
})->name('admin.users.account');

Route::get('/admin/courses/categories/list', function () {
    return inertia('admin/courses-categories-list');
})->name('admin.courses.categories.list');

Route::get('/admin/courses/categories/edit', function () {
    return inertia('admin/courses-categories-edit');
})->name('admin.courses.categories.edit');

Route::get('/admin/courses/list', function () {
    return inertia('admin/courses-list');
})->name('admin.courses.data.list');

Route::get('/admin/courses/edit', function () {
    return inertia('admin/courses-edit');
})->name('admin.courses.data.edit');

Route::get('/admin/courses/lesson/list', function () {
    return inertia('admin/lesson-list');
})->name('admin.courses.lesson.list');

Route::get('/admin/courses/lesson/edit', function () {
    return inertia('admin/lesson-edit');
})->name('admin.courses.lesson.edit');

/**
 * route du front
 */

Route::get('/home', function () {
    return inertia('front/home');
})->name('home');