<?php
include("../../templates/header.php");
?>
</br>
<h4>Agregar usuario</h4>

<div class="card">
    <div class="card-header">Datos del usuario</div>
    <div class="card-body">
    

    
    <form action="" method="post"enctype="multipart/form-data">
    
        <div class="mb-3">
        <label for="nombredelusuario" class="form-label">Nombre del Usuario</label>
            <input
            type="text"
            class="form-control"
            name="nombredelusuario"
            id="nombredelusuario"
            aria-describedby="helpId"
            placeholder="Nombre del usuario"
            />
        
        </div>
        <div class="mb-3">
               <label for="contraseña" class="form-label">Contraseña</label>
                <input
                type="password"
                class="form-control"
                name="contraseña"
                id="contraseña"
                aria-describedby="helpId"
                placeholder="Contraseña"
                />
            
            </div>
        <div class="mb-3">
            <label for="correo" class="form-label">Correo</label>
            <input
            type="email"
            class="form-control"
            name="correo"
            id="correo"
            aria-describedby="helpId"
            placeholder="Escriba su Correo"
            />

        </div>
        <a
        name=""
        id=""
        class="btn btn-success"
        href="#"
        role="button"
        >Agregar</a
        >
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
</div>


<?php
include("../../templates/footer.php");
?>