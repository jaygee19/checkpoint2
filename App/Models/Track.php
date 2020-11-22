<?php


namespace App\Models;

use App\Core\Model;
use PDO;

class Track extends Model
{
    protected $id;
    protected $artist;
    protected $nameTrack;
    protected $votes;

    public function __construct($artist = "", $nameTrack = "")
    {
        $this->artist = $artist;
        $this->nameTrack = $nameTrack;
    }

    static public function setDbColumns()
    {
        return ['id','artist','nameTrack','votes'];
    }

    static public function setTableName()
    {
        return "songs";
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @param mixed $artist
     */
    public function setArtist($artist): void
    {
        $this->artist = $artist;
    }

    /**
     * @return mixed
     */
    public function getVotes()
    {
        return $this->votes;
    }

    /**
     * @param mixed $votes
     */
    public function setVotes($votes): void
    {
        $this->votes = $votes;
    }

    public function addVote()
    {
        $this->votes++;
    }

    public function takeVote()
    {
        $this->votes--;
    }

    /**
     * @return mixed
     */
    public function getNameTrack()
    {
        return $this->nameTrack;
    }

    /**
     * @param mixed $nameTrack
     */
    public function setNameTrack($nameTrack): void
    {
        $this->nameTrack = $nameTrack;
    }
}