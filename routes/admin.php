<?php

use App\Http\Controllers\Admin\BlogController as BlogAdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\MemberController;
use App\Http\Controllers\Admin\PropertiesController;
use App\Http\Controllers\Admin\ValuationController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/register', function() {
    return redirect('/login');
});

Route::post('/register', function() {
    return redirect('/login');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', function () { return Inertia::render('Dashboard'); })->name('dashboard');
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
    Route::get('/newsletter', [ContactController::class, 'newsletter'])->name('newsletter');


    Route::get('/posts', [BlogAdminController::class, 'getPosts'])->name('posts');
    Route::get('/posts_create', [BlogAdminController::class, 'create'])->name('post.create');
    Route::post('/post_store', [BlogAdminController::class, 'store']);
    Route::get('/posts_edit/{id}', [BlogAdminController::class, 'edit'])->name('post.edit');
    Route::post('/posts_save', [BlogAdminController::class, 'save'])->name('post.save');
    Route::delete('/posts_delete/{id}', [BlogAdminController::class, 'delete'])->name('post.delete');


    Route::get('/tasations', [ValuationController::class, 'index'])->name('tasations');
    Route::delete('/tasation_delete/{id}', [ValuationController::class, 'delete'])->name('tasation.delete');

    Route::get('/properties', [PropertiesController::class, 'index'])->name('property.admin');

    Route::get('/property_create', [PropertiesController::class, 'create'])->name('property.create');
    Route::post('/property_store', [PropertiesController::class, 'store'])->name('property.store');
    Route::get('/property_edit/{id}', [PropertiesController::class, 'edit'])->name('property.edit');
    Route::post('/property_save', [PropertiesController::class, 'save'])->name('property.save');
    Route::delete('/property_delete/{id}', [PropertiesController::class, 'delete'])->name('property.delete');

    Route::get('/property-question', [PropertiesController::class, 'properties_questions']);

    Route::get('/properties-outstanding', [PropertiesController::class, 'outstandingProperties']);
    Route::post('/properties-outstanding-change', [PropertiesController::class, 'changeOutstandingProps']);

    Route::get('/members', [MemberController::class, 'index']);
    Route::post('/create-member', [MemberController::class, 'store']);
    Route::get('/edit-member/{id}', [MemberController::class, 'edit']);
    Route::post('/save-member', [MemberController::class, 'save']);
    Route::delete('/delete-member/{id}', [MemberController::class, 'delete']);
    Route::get('/order-members', [MemberController::class, 'order']);
    Route::post('/order-members-save', [MemberController::class, 'saveOrder']);
});

