<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerHyzgMGn\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerHyzgMGn/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerHyzgMGn.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerHyzgMGn\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerHyzgMGn\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'HyzgMGn',
    'container.build_id' => 'f9ae13d1',
    'container.build_time' => 1523258425,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerHyzgMGn');