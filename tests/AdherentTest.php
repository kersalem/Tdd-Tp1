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

    public function testConcatenationId() {
        $adherent = new Adherent("PIERRE", "PAUL", new dateTime("1985-04-20"));
        $this->assertEquals(
            "PIERREPAUL20041985",
            $adherent->getId()
        );
    }

    public function testCapitalize() {
        $adherent = new Adherent("Pierre", "Paul", new dateTime("1985-04-20"));

        $this->assertEquals(
            "PIERREPAUL20041985",
            $adherent->getId()
        );
    }
}