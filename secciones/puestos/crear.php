<?php
include("../../bd.php");
if($_POST){
    $nombredelpuesto=(isset($_POST["nombredelpuesto"])?$_POST["nombredelpuesto"]:"");
    $sentencia=$conexión->prepare("INSERT INTO tbl_puestos(idpuesto, puesto)
    VALUES(null, :nombredelpuesto)");
    $sentencia->bindParam(":nombredelpuesto", $nombredelpuesto);
    $sentencia->execute();
    header("Location:index.php");
}


?>


<?php
include("../../templates/header.php");
?>

<h4> Listar puesto </h4>

<div class="card">
    <div class="card-header"> Datos del Puesto </div>
    <div classs="card-body">

</div>
<form action="" method="post" enctype="multipart/form-data">
    <div clas="mb-3">
        <label for="nombredelpuesto" class="form-label"> Nombre del Puesto </label>
        <div class="mb-3">
            <input
                type="text"
                class="form-control"
                name="nombredelpuesto"
                id="nombredelpuesto"
                aria-describedby="helpId"
                placeholder="Nombre del puesto"
            />
        </div>
    </div>
    <button type="submit" class="btn btn-success"> Agregar Registro </button>
    <a
        name=""
        id=""
        class="btn btn-danger"
        href="index.php"
        role="button"
        >Cancelar</a
    >
    
</form>
<div class="card-footer text-muted"></div>

<?php
include("../../templates/footer.php");
?>