<?php include '../includes/header.php'       ?>
<?php include '../database/db.php'       ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-body">
                <form action="save.php" method="POST">
                    <div class="form-group">
                        <input class="form-control" type="text" name="Titulo" placeholder="Titulo del post" autofocus>
                    </div>
                    <div class="form-group">
                        <textarea class="form-group form-control" name="Descripcion" id="" rows="2" placeholder="Descripcion"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="Nombre_usuario" placeholder="Nombre de usuario">
                    </div>
                    <div class="form-group">
                        <input class="btn btn-success btn-block" type="submit" name="save" value="Crear Post">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php

if (isset($_POST['save'])) {
    $title = $_POST['Titulo'];
    $description = $_POST['Descripcion'];
    $username = $_POST['Titulo'];

    $query = "INSERT INTO $db_table (Titulo,Descripcion,Nombre_usuario) VALUES ('$title','$description','$username')";

    $result = mysqli_query($conn, $query);
}


?>