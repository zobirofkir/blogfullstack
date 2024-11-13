<?php
namespace App\Services\Constructor;

interface BlogConstructor
{
    public function get();

    public function show($slug);
}