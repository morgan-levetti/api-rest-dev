<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerETEBxeK\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerETEBxeK/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerETEBxeK.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerETEBxeK\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerETEBxeK\App_KernelDevDebugContainer([
    'container.build_hash' => 'ETEBxeK',
    'container.build_id' => 'd03e9973',
    'container.build_time' => 1638984276,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerETEBxeK');
