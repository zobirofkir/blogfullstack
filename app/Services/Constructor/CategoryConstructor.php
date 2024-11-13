<?php

namespace App\Services\Constructor;

interface CategoryConstructor
{
    public function get();
    public function show($slug);
}