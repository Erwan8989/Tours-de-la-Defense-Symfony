<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerI4b0G1c\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerI4b0G1c/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerI4b0G1c.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerI4b0G1c\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerI4b0G1c\App_KernelDevDebugContainer([
    'container.build_hash' => 'I4b0G1c',
    'container.build_id' => '6b162c9f',
    'container.build_time' => 1684826743,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerI4b0G1c');
