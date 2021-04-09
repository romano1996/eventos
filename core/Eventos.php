<?php

namespace Core;

use Core\Exceptions\ModuleProviderAlreadyRegisteredException;

/**
 * Eventos application instance.
 *
 * @package Core
 * @author Romano Schoonheim <romano@romanoschoonheim.nl>
 */
class Eventos
{
    private array $modules = [];

    public function registerModuleProvider(string $module): void
    {
        foreach ($this->modules as $registeredModule) {
           if ($registeredModule === $module) {
               throw new ModuleProviderAlreadyRegisteredException(
                   $module
               );
           }
        }

        $this->modules[] = $module;
    }
}
