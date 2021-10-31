<h1>Músicas do Álbum <?=$_GET['album']?></h1>
<a href="?page=albums" class="btn btn-primary mt-2">Voltar</a>
<hr>
<?php
    $album = $_GET['album'];
    $musics = getMusics($album);
    foreach($musics as $music):
        ?>
<div class="col-12">
    <audio src="<?=$music?>" controls></audio>
</div>
<?php
        endforeach;
?>