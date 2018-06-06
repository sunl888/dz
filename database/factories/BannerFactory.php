<?php

use Faker\Generator as Faker;

$factory->define(\App\Models\Banner::class, function (Faker $faker) {
    static $imagesPath = null, $categories = null;

    if (is_null($imagesPath)) {
        $imagesConfig = config('images');
        $storage = Storage::disk($imagesConfig['source_disk']);
        $imagesPath = $storage->path($imagesConfig['source_path_prefix']);
        $storage->exists($imagesPath) || $storage->makeDirectory($imagesConfig['source_path_prefix']);
    }
    return [
        'url' => $faker->url,
        'title' => $faker->title,
        'image' => $faker->image($imagesPath, 1771, 735, 'food', false),
        // 外部传入 'type_name',
        'is_visible' => true,
        'creator_id' => 1,
        'is_target_blank' => true,
        'enabled_at' => null,
        'expired_at' => null,
    ];

});
