<?php
include("../../templates/header.php");
?>

<h4>Agregar Empleado</h4>

<div class="card">
    <div class="card-header">Datos del Empleado</div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="primernombre" class="form-label">Primer Nombre</label>
            <input
                type="text"
                class="form-control"
                name="primernombre"
                id="primernombre"
                aria-describedby="helpId"
                placeholder="Primer Nombre"
            />
            <div class="mb-3">
                <label for="segundonombre" class="form-label">Segundo Nombre</label>
                <input
                    type="text"
                    class="form-control"
                    name="segundonombre"
                    id="segundonombre"
                    aria-describedby="helpId"
                    placeholder="Segundo Nombre"
                />
                <div class="mb-3">
                    <label for="apellidopaterno" class="form-label">Apellido Paterno</label>
                    <input
                        type="text"
                        class="form-control"
                        name="apellidopaterno"
                        id="apellidopaterno"
                        aria-describedby="helpId"
                        placeholder="Apellido Paterno"
                    />
                    <div class="mb-3">
                        <label for="apellidopaterno" class="form-label">Apellido Materno</label>
                        <input
                            type="text"
                            class="form-control"
                            name="apellidopaterno"
                            id="apellidopaterno"
                            aria-describedby="helpId"
                            placeholder="Apellido Materno"
                        />
                    </div>
                    
                </div>
                
            </div>
            
        </div>
        <div class="mb-3">
            <label for="fotografia" class="form-label">Fotografia</label>
            <input
                type="file"
                class="form-control"
                name="fotografia" 
                id="fotografia"
                aria-describedby="helpId"
                placeholder="Fotografia"
            />
        </div>
        <div class="mb-3">
            <label for="cv" class="form-label">CV (pdf)</label>
            <input
                type="file"
                class="form-control"
                name="cv"
                id="cv"
                placeholder="CV"
                aria-describedby="fileHelpId"
            />
        </div>
        <div class="mb-3">
            <label for="idpuesto" class="form-label">Puestos</label>
            <select
                class="form-select form-select-sm"
                name="idpuesto"
                id="idpuesto"
            >
                <option selected>Select one</option>
                <option value="">New Delhi</option>
                <option value="">Istanbul</option>
                <option value="">Jakarta</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="fechadeingreso" class="form-label">Fecha de Ingreso</label>
            <input
                type="date"
                class="form-control"
                name="fechadeingreso"
                id="fechadeingreso"
                aria-describedby="emailHelpId"
                placeholder="Fecha de Ingreso"
            />
        </div>
        <a
            name=""
            id=""
            class="btn btn-danger"
            href="#"
            role="button"
            >Agregar Registro</a
        >
        <a
            name=""
            id=""
            class="btn btn-success"
            href="index.php"
             role="button"
            >Cancelar Registro</a
        >
        
        
    </form>
    </div>
    <div class="card-footer text-muted"></div>
</div>


<?php
include("../../templates/footer.php");
?>