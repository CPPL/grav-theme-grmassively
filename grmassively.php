<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class GrMassively extends Theme
{
    // Access plugin events in this class

    public function onThemeInitialized() {
        // We don't need to extend twig for admin
        if ($this->isAdmin()) {
            $this->active = false;
            return;
        }

        $this->enable([
            'onTwigExtensions' => ['onTwigExtensions', 0]
        ]);
    }

    public function onTwigExtensions() {
        /* @var \Grav\Common\Twig\Twig $twig */
        $twig = $this->grav['twig']->twig;
        $twigStrLoader = new \Twig\Extension\StringLoaderExtension();
        $twig->addExtension($twigStrLoader);
    }
}
