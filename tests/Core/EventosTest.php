<?php

namespace Tests\Core;

use Core\Eventos;
use Core\Exceptions\ModuleProviderAlreadyRegisteredException;

/**
 * Class EventosTest
 * @package Tests\Core
 */
class EventosTest extends CoreTestCase
{
    /** @test */
    public function it_can_create_a_instance_of_eventos(): void
    {
        $instance = new Eventos();

        $this->assertInstanceOf(Eventos::class, $instance);
    }

    /** @test */
    public function it_can_register_a_module_provider_to_eventos(): void
    {
        $eventos = new Eventos();

        $result = $eventos->registerModuleProvider(
            FakeModuleProvider::class
        );

        $this->assertNull($result);
    }

    /** @test */
    public function when_a_module_provider_is_registered_twice_a_module_already_registered_exception_is_thrown(): void
    {
        $eventos = new Eventos();

        $this->expectException(ModuleProviderAlreadyRegisteredException::class);
        $this->expectExceptionMessage(
            'There was already a instance of Tests\Core\FakeModuleProvider registered to eventos.'
        );

        $eventos->registerModuleProvider(FakeModuleProvider::class);
        $eventos->registerModuleProvider(FakeModuleProvider::class);
    }

    /** @test */
    public function it_can_register_multiple_module_providers(): void
    {
        $eventos = new Eventos();


        $eventos->registerModuleProvider(
            FakeModuleProvider::class
        );

        $eventos->registerModuleProvider(
            AnotherFakeModuleProvider::class
        );

        $this->assertNull(null); // $this->doesNotPerformAssertions(); does not work?
    }

}

class FakeModuleProvider{}

class AnotherFakeModuleProvider {}
