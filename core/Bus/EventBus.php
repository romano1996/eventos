<?php

namespace Core\Bus;

/**
 * Class EventBus
 *
 * @package Core\Bus
 * @author Romano Schoonheim <romano@romanoschoonheim.nl>
 */
abstract class EventBus
{
    private array $subscribes = [];

    private array $publishers = [];

    public function registerSubscriber(): void {}

    public function registerPublisher(): void {}

    public function publish(): void {}
}
