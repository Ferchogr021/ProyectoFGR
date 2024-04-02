<?php

include("../../templates/header.php");


?>

<br/>
<h4>Lista de Usuarios</h4>
<div class="card">
    <div class="card-header">
        <a
            name=""
            id=""
            class="btn btn-danger"
            href="crear.php"
            role="button"
            >Agregar usuario</a
        >
        
    </div>
    <div class="card-body">
        <div
            class="table"
        >
            <table
                class="table table-primary"
            >
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del Usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Carlos Santa Ana</td>
                        <td>******</td>
                        <td>CarlosSA@uvne.onmicrosoft.com</td>
                        <td>
                            <a
                                name=""
                                id=""
                                class="btn btn-info"
                                href="editar.php"
                                role="button"
                                >Editar</a
                            >
                            
                            |
                            <a
                                name=""
                                id=""
                                class="btn btn-danger"
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