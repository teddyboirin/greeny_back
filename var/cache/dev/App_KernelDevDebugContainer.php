<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

<<<<<<< HEAD
if (\class_exists(\Container5EbI8jD\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container5EbI8jD/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container5EbI8jD.legacy');
=======
if (\class_exists(\ContainerAwfxpWk\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerAwfxpWk/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerAwfxpWk.legacy');
>>>>>>> 92d6ccbef5a3492df946832c785590cfe29e4219

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
<<<<<<< HEAD
    \class_alias(\Container5EbI8jD\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container5EbI8jD\App_KernelDevDebugContainer([
    'container.build_hash' => '5EbI8jD',
    'container.build_id' => '9c8c13d8',
    'container.build_time' => 1594146760,
], __DIR__.\DIRECTORY_SEPARATOR.'Container5EbI8jD');
=======
    \class_alias(\ContainerAwfxpWk\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerAwfxpWk\App_KernelDevDebugContainer([
    'container.build_hash' => 'AwfxpWk',
    'container.build_id' => '41aa182d',
    'container.build_time' => 1594165694,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerAwfxpWk');
>>>>>>> 92d6ccbef5a3492df946832c785590cfe29e4219
