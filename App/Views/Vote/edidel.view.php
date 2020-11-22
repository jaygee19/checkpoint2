<div class="container">
    <h3> All Songs: </h3>
    <?php /** @var \App\Models\Track $track */
    foreach($data as $track) {
        ?>
        <ul class="list-group">
            <li class="list-group-item"> <?= $track->getArtist() ?> <?= " - " ?> <?= $track->getNameTrack() ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="?c=Vote&a=edit&id=<?= $track->getId() ?>">Edit</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <a href="?c=Vote&a=delete&id=<?= $track->getId() ?>">Delete</a>
            </li>
        </ul>
    <?php  } ?>
</div>

