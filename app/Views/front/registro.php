<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card p-4 shadow-sm custom-form-card">
                <div class="card-body">
                    <h2 class="card-title text-center mb-4">Registrar usuario</h2>
                    <form action="#" method="POST"> <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                        </div>
                        <div class="mb-3">
                            <label for="apellido" class="form-label">Apellido</label>
                            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Apellido" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="correo@algo.com" required>
                        </div>
                        <div class="mb-3">
                            <label for="usuario" class="form-label">Usuario</label>
                            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña (mínimo 5 caracteres)" required minlength="5">
                        </div>
                        <div class="mb-4">
                            <label for="confirm_password" class="form-label">Confirmar Password</label>
                            <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Repetir contraseña" required minlength="5">
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success custom-btn-guardar">Guardar</button>
                            <button type="button" class="btn btn-danger custom-btn-cancelar">cancelar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
