<?php /** @var TYPE_NAME $data */ ?>
<div class="container">
    <h4> Add song: </h4>
    <p></p>
    <form method="post">
        <?php if (isset($data['model'])) { ?>
        <input type="text" name="artist" value="<?= $data['model']->getArtist() ?>" placeholder="artist" required>
        <?php } else { ?>
        <input type="text" name="artist" placeholder="artist" required>
        <?php } ?>
        <?php if (isset($data['err'][0])) {
            foreach ($data['err'][0] as $err) {
                ?>
                <div> <?= $err ?> </div>
        <?php }} ?>
        <div>
            <p></p>
            <?php if (isset($data['model'])) { ?>
                <input type="text" name="nameTrack" value="<?= $data['model']->getNameTrack() ?>" placeholder="song" required>
            <?php } else { ?>
                <input type="text" name="nameTrack"placeholder="song" required>
            <?php } ?>
        <?php if (isset($data['err'][1])) {
            foreach ($data['err'][1] as $err) {
                ?>
                <div> <?= $err ?> </div>
        <?php }} ?>
        </div>
        <div>
            <p></p>
        <input type="submit" value="Send" >
        </div>
    </form>
</div>


