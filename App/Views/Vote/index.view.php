<div class="container">
    <h3> All Songs: </h3>
    <?php /** @var \App\Models\Track $track */
    $counter = 0;
    foreach($data as $track) {
       $counter++;
        ?>
        <ul class="list-group">
            <li class="list-group-item"> <?= $track->getArtist() ?> <?= " - " ?> <?= $track->getNameTrack() ?>
            </li>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <div class="input-group-text">
                        <form action="?c=Vote&a=sendVote" method="post">
                            <input type="submit" class="submitbut" value="Vote">
                            <input type="hidden" name="vot" value=<?= $track->getId()?>>
                        </form>
                        <form action="?c=Vote&a=takeVote" method="post">
                            <input type="submit" class="submitbut" value="Unvote">
                            <input type="hidden" name="vot" value=<?= $track->getId()?>>
                        </form>
                    </div>
                </div>
            </div>
        </ul>
    <?php  } ?>
</div>
