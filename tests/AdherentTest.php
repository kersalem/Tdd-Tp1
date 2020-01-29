<?php
use PHPUnit\Framework\TestCase;

class AdherentTest extends TestCase
{
    public function testCanBeCreated() {
        $adherent = new Adherent('Nom', 'Prenom', new DateTime());
        $this->assertInstanceOf(
            Adherent::class,
            $adherent
        );
    }
}