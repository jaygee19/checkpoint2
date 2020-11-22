<?php

namespace App\Models;

use PDO;

class DBOfTracks
{

    /**
     * @var PDO
     */
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:host=localhost;dbname=voting", "root", "dtb456");
    }

    public function LoadAll()
    {
        $result = [];

        $r = $this->pdo->query("SELECT * FROM allSongs");

        foreach ($r as $item) {
            $result[] = new Track($item['artist'],$item['nameTrack'],$item['votes']);
        }

        return $result;
    }

    public function Save(Track $param)
    {
       $statement = $this->pdo->prepare("INSERT INTO articles (artist, nameTrack) value (?,?)");
       $statement->execute([$param->getArtist(), $param->getNameTrack()]);
    }
}