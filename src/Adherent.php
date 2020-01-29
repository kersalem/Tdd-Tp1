<?php


class Adherent
{
    /**
     * @var string
     */
    private $nom;

    /**
     * @var string
     */
    private $prenom;

    /**
     * @var DateTime
     */
    private $dateDeNaissance;

    /**
     * Adherent constructor.
     *
     * @param string   $nom
     * @param string   $prenom
     * @param DateTime $dateDeNaissance
     */
    public function __construct(string $nom, string $prenom, DateTime $dateDeNaissance)
    {
        $this->nom             = $nom;
        $this->prenom          = $prenom;
        $this->dateDeNaissance = $dateDeNaissance;
    }

    public function getId(): string
    {
        return $this->nom.$this->prenom.$this->dateDeNaissance->format('dmY');
    }
}