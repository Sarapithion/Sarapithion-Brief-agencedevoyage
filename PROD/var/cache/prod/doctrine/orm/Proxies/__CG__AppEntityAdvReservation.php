<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AdvReservation extends \App\Entity\AdvReservation implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'Message' => [parent::class, 'Message', null],
        "\0".parent::class."\0".'advStatut' => [parent::class, 'advStatut', null],
        "\0".parent::class."\0".'advUser' => [parent::class, 'advUser', null],
        "\0".parent::class."\0".'advVoyage' => [parent::class, 'advVoyage', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        'Message' => [parent::class, 'Message', null],
        'advStatut' => [parent::class, 'advStatut', null],
        'advUser' => [parent::class, 'advUser', null],
        'advVoyage' => [parent::class, 'advVoyage', null],
        'id' => [parent::class, 'id', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}
