<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB0bxvwx\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB0bxvwx/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerB0bxvwx.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerB0bxvwx\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerB0bxvwx\appProdProjectContainer([
    'container.build_hash' => 'B0bxvwx',
    'container.build_id' => '53e3e806',
    'container.build_time' => 1551031669,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB0bxvwx');
