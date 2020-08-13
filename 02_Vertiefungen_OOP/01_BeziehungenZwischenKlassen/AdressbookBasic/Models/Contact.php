<?php

class Contact implements JsonSerializable
{   
    private $id;
    private $name;
    private $phone;

    public function __construct(int $id, string $name, string $phone)
    {
        $this->id=$id;
        $this->name=$name;
        $this->phone=$phone;
    }

    public function getName(): string
    {
        return $this->name;
    }
    
    public function getID(): int
    {
        return $this->id;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }
    
    public function jsonSerialize()
    {
        return 
        [
            'id' => $this->id,
            'name' => $this->name,
            'phone' => $this->phone,
        ];
    }
}