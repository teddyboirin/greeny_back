<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerDHwdnTr\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerDHwdnTr/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerDHwdnTr.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerDHwdnTr\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerDHwdnTr\App_KernelDevDebugContainer([
    'container.build_hash' => 'DHwdnTr',
    'container.build_id' => '1bf9243d',
    'container.build_time' => 1594135158,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerDHwdnTr');
