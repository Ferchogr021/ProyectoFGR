<?php
include("../../templates/header.php");
?>
<br/>
<h4>Lista de empleados</h4>
<div class="card">
    <div class="card-header">
        <a
            name=""
            id=""
            class="btn btn-danger"
            href="crear.php"
            role="button"
            >Agregar Empleado</a
        >
        
    </div>
    <div class="card-body">
    <div
        class="table-responsive-sm"
    >
        <table
            class="table"
        >
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Foto</th>
                    <th scope="col">CV</th>
                    <th scope="col">Puesto</th>
                    <th scope="col">Fecha de invreso</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr class="">
                    <td scope="row">Carlos Santa Ana</td>
                    <td>Foto.jpg</td>
                    <td>CV.pdf</td>
                    <td>Programador jr</td>
                    <td>09/02/2024</td>
                    <td><a
                        name=""
                        id=""
                        class="btn btn-danger"
                        href="#"
                        role="button"
                        >Carta</a
                    >
                    |<a
                        name=""
                        id=""
                        class="btn btn-info"
                        href="editar.php"
                        role="button"
                        >Editar</a
                    >
                    |<a
                        name=""
                        id=""
                        class="btn btn-primary"
                        href="#"
                        role="button"
                        >Eliminar</a
                    >
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    
    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php
include("../../templates/footer.php");
?>