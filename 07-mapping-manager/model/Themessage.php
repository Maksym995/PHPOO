<?php

namespace model ;

// on veut utiliser Exception

use DateTime;
use Exception;

class Themessage
{
    // propriétés
    private int $idTheMessage;
    private string $titleTheMessage;
    private string $slugTheMessage;
    private DateTime $dateTheMessage;
    private string $messageTheMessage;
    private int $TheMessageIdTheUser;

    // constructeur
    public function __construct(array $datas) 
    {
        $this->hydrate($datas);
    }

    // hydratation (remplissage des propriétés en utilisant les setters)
    private function hydrate(array $datas)
    {
        foreach ($datas as $key => $value) {
            // création du nom du setter correspondant à la clé (convention de nommage), ucfirst met la première lettre en majuscule
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) { // si la méthode existe
                // utilisation du setter correspondant
                $this->$method($value);
                // echo "setter $method($value)<br>;
            }else{
                //echo "setter $method($value) n'existe pas <br>;
            }
        }
    }
    
    // getters
    public function getIdTheMessage(): int
    {
        return $this->idTheMessage;
    }

    public function getTitleTheMessage(): string
    {
        return $this->titleTheMessage;
    }

    public function getSlugTheMessage(): string
    {
        return $this->slugTheMessage;
    }

    public function getDateTheMessage(): DateTime
    {
        return $this->dateTheMessage;
    }

    public function getMessageTheMessage(): string
    {
        return $this->messageTheMessage;
    }

    public function getTheMessageIdTheUser(): int
    {
        return $this->TheMessageIdTheUser;
    }

    // setters
    public function set
}
