<?php

use TallEcommerce\Product\Models\Product;
use TallEcommerce\Product\Models\Category;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

it('should have cateory table', function () {
    $category = Category::factory()->create([
        'name' => "Category #1",
        'code' => "category-1",
        'metadata' => [
            'owner' => "duccm",
        ],
        'sort' => 1,
        'description' => "Lorem Ipsum",
        'level' => 1,
        'path_in_store' => "/category-1",
        'path' => "/category-1",
    ]);
    $this->assertDatabaseHas('categories', [
        'id' => 1,
        'name' => "Category #1",
        'code' => "category-1",
        'sort' => 1,
        'description' => "Lorem Ipsum",
        'level' => 1,
        'path_in_store' => "/category-1",
        'path' => "/category-1",
    ]);
});