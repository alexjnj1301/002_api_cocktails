<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVlgM0oi\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVlgM0oi/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVlgM0oi.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVlgM0oi\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVlgM0oi\App_KernelDevDebugContainer([
    'container.build_hash' => 'VlgM0oi',
    'container.build_id' => 'c00a48a6',
    'container.build_time' => 1666686728,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVlgM0oi');
