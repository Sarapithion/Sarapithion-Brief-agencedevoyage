<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8AVGO1X\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8AVGO1X/App_KernelProdContainer.php') {
    touch(__DIR__.'/Container8AVGO1X.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\Container8AVGO1X\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \Container8AVGO1X\App_KernelProdContainer([
    'container.build_hash' => '8AVGO1X',
    'container.build_id' => '6ed9de57',
    'container.build_time' => 1715854474,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container8AVGO1X');
