<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/bootstrap/app.php';

return (new Jubeki\LaravelCodeStyle\Config())
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->notName('*.blade.php')
            ->in('packages/*')
            ->in(base_path('routes'))
    )
    ->setRules([
        // Here you can adjust the rules as much as needed
    ]);
