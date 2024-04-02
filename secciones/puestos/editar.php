<?php
include("../../bd.php");

if(isset($_GET['txtID']))
{
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia=$conexión->prepare("SELECT * FROM tbl_puestos
    WHERE idpuesto=:ID");
    $sentencia->bindParam(":ID",$txtID);
    $sentencia->execute();
    $registro=$sentencia->fetch(PDO::FETCH_LAZY);
    $nombredelpuesto=$registro['puesto'];
}

?>


<?php
include("../../templates/header.php");
?>
<h4> Editar puesto </h4>
<div class="card">
    <div class="card-header"> Datos del Puesto </div>
    <div classs="card-body">

</div>
<form action="" method="post" enctype="multipart/form-data">
<div class="mb-3">
    <label for="txtID" class="form-label">ID:</label>
    <input
        type="text"
        value="<?php echo $txtID;  ?>"
        class="form-control"
        readonly
        name="txtID"
        id="txtID"
        aria-describedby="helpId"
        placeholder="id"
    />
    
</div>
    
<div clas="mb-3">

        <label for="nombredelpuesto" class="form-label"> Nombre del Puesto </label>
        <div class="mb-3">
            <input
                type="text"
                value="<?php echo $nombredelpuesto; ?>"
                class="form-control"
                name="nombredelpuesto"
                id="nombredelpuesto"
                aria-describedby="helpId"
                placeholder="Nombre del puesto"
            />
        </div>
    </div>
    <button type="submit" class="btn btn-success"> Guardar cambios </button>
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