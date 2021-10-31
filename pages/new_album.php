<h1>Novo Álbum</h1>
<a href="?page=albums" class="btn btn-secondary">Voltar</a>
<form action="#" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <input type="text" name="name" palceholder="Nome álbum" class="form-control mt-2" id="">
    </div>
    <div class="form-group">
        <input type="file" name="image" class="form-control mt-2" id="">
    </div>

    <button type="submit" class="btn btn-primary mt-2">Cadastrar</button>
</form>
<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $album = $_POST['name'];
        $path = "albums/{$album}";
        if(!is_dir($path)){
            mkdir($path);
        }

        $file = $_FILES['image'];
        $fileInfo = explode('.', $file['name']);

        $extension = $fileInfo[1];
        $nameImage = $album . '.' . $extension;

        if(move_uploaded_file($file['tmp_name'],$path.'/'.$nameImage)){
            header('Location:?page=albums');
        }else{
            echo 'Falha no upload...';
        };
    }
?>