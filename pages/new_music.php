<h1>Cadastrar nova música no gênero <?=$_GET['album']?></h1>
<a href="?page=musics&album=<?=$_GET['album']?>" class="btn btn-secondary">Voltar para <?=$_GET['album']?></a>
<form action="#" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input type="file" name="audio" class="form-control mt-2">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $album = $_GET['album'];
        $path = "albums/{$album}/musics/";

        if(!is_dir($path)){
            mkdir($path,0777,true);
            chmod($path,0755);
        }

        if(move_uploaded_file($_FILES['audio']['tmp_name'], $path . $_FILES['audio']['name'] )){
            header("Location: ?page=musics&album={$album}");

        }else{
             echo '<div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
            Falha ao fazer upload da música!
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';
        }
    }
?>