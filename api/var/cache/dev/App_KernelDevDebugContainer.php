<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerAn1O3DL\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAn1O3DL/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAn1O3DL.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerAn1O3DL\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAn1O3DL\App_KernelDevDebugContainer([
    'container.build_hash' => 'An1O3DL',
    'container.build_id' => 'a809d965',
    'container.build_time' => 1675356145,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAn1O3DL');
