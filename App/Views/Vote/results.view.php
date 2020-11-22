<div class="container">
    <h3> All Songs:  <p class="numVotes"> Number of votes: </p> </h3>
    <?php /** @var \App\Models\Track $track */
    $counter = 0;
    foreach($data as $track) {
        $counter++;
        if ($counter < 11) {
        ?>
        <ul class="list-group">
            <li class="list-group-item"> <?= $counter ?> . <?= $track->getArtist() ?> <?= " - " ?> <?= $track->getNameTrack() ?>
                <span class="votes"> <b> <?= $track->getVotes()?> </b> </span>
            </li>
        </ul>
    <?php  }} ?>
</div>
