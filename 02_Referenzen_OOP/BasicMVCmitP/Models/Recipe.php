<?php
class Recipe implements JsonSerializable
{   
    private $id;
    private $name;
    private $zubereitungszeit;
    private $anweisung;


    public function __construct(int $id, string $name,  string $zubereitungszeit, string $anweisung)
    {
        $this->id=$id;
        $this->name=$name;
        $this->zubereitungszeit=$zubereitungszeit;
        $this->anweisung=$anweisung;
    }

    public function getName(): string
    {
        return $this->name;
    }   

    public function getId(): int
    {
        return $this->id;
    }

    public function getZubereitungszeit(): string
    {
        return $this->zubereitungszeit;
    }  

    public function getAnweisung(): string
    {
        return $this->anweisung;
    }  
    
    public function jsonSerialize()
    {
        return 
        [
            'id'   => $this->id,
            'name' => $this->name,
            'zubereitungszeit' => $this->zubereitungszeit,
            'anweisung' => $this->anweisung
        ];
    }
}

