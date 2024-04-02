<?php
include("../../bd.php");

if(isset($_GET['txtID']))
{
    $txtID=(isset($_GET['txtID']))?$_GET['txtID']:"";
    $sentencia=$conexión->prepare("DELETE FROM tbl_puestos
    WHERE idpuesto=:ID");
    $sentencia->bindParam(":ID",$txtID);
    $sentencia->execute();
    header("Location:index.php");
}


$sentencia=$conexión->prepare("SELECT * FROM tbl_puestos");
$sentencia->execute();
$lista_tbl_puestos = $sentencia->fetchAll(PDO::FETCH_ASSOC);


?>


<?php
include("../../templates/header.php");
?>

</br>
<h4>Listar puestos</h4>
<div class="card">
    <div class="card-header">Puestos</div>
    <div class="card-body">
        <a
            name=""
            id=""
            class="btn btn-primary"
            href="crear.php"
            role="button"
            >Agregar puestos</a
        >
    </div>
    <div class="card-footer text-muted"></div>
    <div
        class="table"
    >
        <table
            class="table table-primary"
        >
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>

            <?php foreach($lista_tbl_puestos as $registro) {?>

            <tbody>
                <tr class="">
                    <td scope="row"><?php echo $registro['idpuesto'];?> </td>
                    <td> <?php echo $registro['puesto'];?> </td>
                    <td>
                        <a
                            name=""
                            id=""
                            class="btn btn-primary"
                            href="editar.php?txtID=<?php echo $registro['idpuesto']; ?>"
                            role="button"
                            >Editar</a
                        >
                        
                        |
                        <a
                            name=""
                            id=""
                            class="btn btn-danger"
                            href="index.php?txtID=<?php echo $registro['idpuesto']; ?>"
                            role="button"
                            >Eliminar</a
                        >
                        </td>
                </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
    
</div>

<?php
include("../../templates/footer.php");
?>