<?php

use Illuminate\Foundation\Testing\RefreshDatabase;
use TallEcommerce\Product\Models\Product;

uses(RefreshDatabase::class);

it('should have product table', function () {
    $product = Product::factory()->create([
        'name' => 'Product #1',
        'code' => 'product_1',
        'metadata' => [
            'owner' => 'duccm',
        ],
    ]);
    $this->assertDatabaseHas('products', [
        'id' => 1,
        'name' => 'Product #1',
        'code' => 'product_1',
    ]);
});
