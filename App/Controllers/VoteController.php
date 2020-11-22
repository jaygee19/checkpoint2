<?php


namespace App\Controllers;


use App\Core\AControllerBase;
use App\Models\Track;

class VoteController extends AControllerBase
{

    public function index()
    {
        return Track::getAll();
    }

    public function sendVote()
    {
        $trc = Track::getOne($_POST['vot']);
        $trc->addVote();
        $trc->save();
        header("Location: http://localhost/checkpoint2?c=Vote&a=results");
        die();
    }

    public function results()
    {
        return Track::getAll();
    }

    public function add()
    {
        if (!isset($_POST['artist'])) {
            return "";
        } else {
            $temp = null;
            $temp = $this->validate($_POST['artist'],$_POST['nameTrack']);

            $trc = new Track($_POST['artist'], $_POST['nameTrack']);
            $trc->setVotes(0);
            if( $temp == null) {
                $trc->save();
                header("Location: http://localhost/checkpoint2?c=vote");
                die();
            }
            return ['model' => $trc, 'err' => $temp ];
        }
    }

    public function edit()
    {
        if (isset($_GET['id'])) {
            $trc = Track::getOne($_GET['id']);
            return $trc;
        }
    }

    public function postEdit()
    {
        if (isset($_POST['id'])) {
            $trc = Track::getOne($_POST['id']);
            $trc->setArtist($_POST['artist']);
            $trc->setNameTrack($_POST['nameTrack']);
            $trc->save();
            header("Location: http://localhost/checkpoint2?c=Vote&a=edidel");
            die();
      }
    }

    public function delete()
    {
        if (isset($_GET['id'])) {
            $trc = Track::getOne($_GET['id']);
            $trc->delete();
        }
        header("Location: http://localhost/checkpoint2?c=Vote&a=edidel");
        die();
    }

    public function edidel()
    {
        return Track::getAll();
    }

    public function validate($artist, $nameTrack)
    {
        $artistErrors = [];
        if (strlen($artist) < 3)
        {
            $artistErrors[] = "Name of artist is too short";
        }

        if (preg_match("/['\.\*\!\;\}\{\+\@\#\%\^\&\|']/", $nameTrack))
        {
            $nameTrackErrors[] = "Invalid char";
        }

        return count($artistErrors) > 0 || count($nameTrackErrors) > 0 ? [$artistErrors,$nameTrackErrors] : null;
    }
}