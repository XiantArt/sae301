<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerLTAgCGZ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerLTAgCGZ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerLTAgCGZ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerLTAgCGZ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerLTAgCGZ\App_KernelDevDebugContainer([
    'container.build_hash' => 'LTAgCGZ',
    'container.build_id' => 'dcc2b366',
    'container.build_time' => 1671780812,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerLTAgCGZ');