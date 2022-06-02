<?php

class Personne
{
    public function __construct(
        public string $lastName,
        public string $firstName,
        public string $address,
        public DateTime $birthDate,
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

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getBirthDate(): string
    {
        return $this->birthDate->format('d/m/Y');
    }

    public function displayInformation(): string
    {
        return 'La personne se nomme'." ".$this->firstName." "
            .$this->lastName." ".'elle est née le'." ".$this->birthDate->format(
                "d/m/y"
            )." ".'et habite au'." ".$this->address;
    }

    public function ageNow(): string
    {
        $now = new DateTime('now');
        $age = $now->diff($this->birthDate);

        return $age->format("%Y ans");
    }
}
