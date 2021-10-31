<h1>Álbum</h1>
<a href="?page=new_album" class="btn btn-info">Novo álbum</a>
<div class="row">
    <?php
    $albums = getAlbums();
        //for($i = 1; $i <= 12; $i++):
            foreach($albums as $album):

                $infoAlbum = explode('/',$album);
                $nameAlbum = $infoAlbum[1];
                //$imgAlbum = $album .'/'. $nameAlbum . '.jpg';
                $imgAlbum = "{$album}/{$nameAlbum}.jpg";
    ?>
    <div class="col-3 album">
        <a href="?page=musics&album=<?=$nameAlbum?>">
            <img src="<?=$imgAlbum?>" alt="<?=$nameAlbum?>" class="capa_album" width="250" height="250">
            <h4 class="mt-2"><?=$nameAlbum?></h4>
        </a>
    </div>
    <?php
        endforeach;
    ?>
</div>