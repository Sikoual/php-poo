<?php
    
class Personne
{
    public function __construct(
        public string $nom,
        public string $prenom,
        public string $adresse,
        public string $date,
    ) {
    }

    public function getLastName(): string
    {
        return $this->nom;
    }

    public function setLastName(string $lastName): void
    {
        $this->nom = $lastName;
    }

    public function getFirstName(): string
    {
        return $this->prenom;
    }

    public function setFirstName(string $firstName): string
    {
        $this->prenom = $firstName;
    }

    public function getAdress(): string
    {
        return $this->adresse;
    }

    public function setAdress(string $adress): void
    {
        $this->adresse = $adress;
    }

    public function getBirthday(): string
    {
        return $this->date;
    }

    public function setBirthday(string $birthday): void
    {
        $this->date = $birthday;
    }

    public function afficherInformations(): string
    {
        return "La personne s'appelle $this->prenom $this->nom née le $this->date elle habite au $this->adresse";
    }

    public function ageNow(): string
    {
        $now = time();
        $timestamp = strtotime($this->date);
        $age = round(($now - $timestamp) / 60 / 60 / 24 / 365, 0);
        return "Tony Stark aurait $age ans aujourd'hui. ";
    }
}
