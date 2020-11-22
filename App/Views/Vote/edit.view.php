<?php /** @var \App\Models\Track $data */ ?>
<div class="container">
    <h4> Edit song: (<?= $data->getArtist() ?> - <?= $data->getNameTrack() ?>) </h4>
    <p></p>
    <form action="?c=Vote&a=postEdit" method="post">
        <input type="text" name="artist" value="<?= $data->getArtist() ?>">
        <input type="text" name="nameTrack" value="<?= $data->getNameTrack() ?>">
        <input type="hidden" name="id" value="<?= $data->getId() ?>">
        <input type="submit" value="Send" >
    </form>
</div>