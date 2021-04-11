<?php
use DaveJamesMiller\Breadcrumbs\BreadcrumbsGenerator as Crumbs;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;

Breadcrumbs::register('home', function(Crumbs $crubms) {
  $crubms->push('Home', route('home'));
});

Breadcrumbs::register('login', function(Crumbs $crubms) {
    $crubms->parent('home');
    $crubms->push('Login', route('login'));
});

Breadcrumbs::register('register', function(Crumbs $crumbs) {
   $crumbs->parent('home');
   $crumbs->push('Register', route('register'));
});

