<?php

class Personne
{
    public function __construct(
        public string $lastName,
        public string $firstName,
        public string $adress,
        public DateTime $date,
    ) {
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): string
    {
        $this->firstName = $firstName;
    }

    public function getAdress(): string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): void
    {
        $this->adress = $adress;
    }

    public function birthDate(): string
    {
        return $this->date->format('d/m/Y');
    }

    public function displayInformation(): string
    {
        return 'La personne se nomme'." ".$this->firstName." "
            .$this->lastName." ".'elle est née le'." ".$this->date->format(
                "d/m/y"
            )." ".'et habite au'." ".$this->adress;
    }

    public function ageNow(): string
    {
        $now = new DateTime('now');
        $age = $now->diff($this->date);

        return $age->format("%Y ans");
    }
}
