<?php include '../../views/header_loged.php'; ?>

<?php include '../../database/db_posts.php' ?>

<div class="container mt-5 pt-5">
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

                <?php
                // Inserto en tabala 
                if (isset($_POST['save'])) {
                    $title = $_POST['Titulo'];
                    $description = $_POST['Descripcion'];
                    $username = $_POST['Titulo'];

                    $query = "INSERT INTO $db_table (Titulo,Descripcion,Nombre_usuario) VALUES ('$title','$description','$username')";

                    $result = mysqli_query($conn, $query);

                    $_SESSION['mensaje'] = 'Blog creado';
                    $_SESSION['mensaje_tipo'] = 'success';
                }
                if (isset($_SESSION['mensaje'])) { ?>

                    <div class="alert alert-<?= $_SESSION['mensaje_tipo']; ?> alert-dismissible fade show" role="alert">
                        <?= $_SESSION['mensaje'];  ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php
                }
                session_unset();

                ?>
            </div>
        </div>
    </div>
</div>


<?php include '../../views/footer.php';      ?>