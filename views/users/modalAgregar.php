<!-- Modal -->
<form action="" method="POST" id="frmAgregarUsuario" onSubmit="return agregarUsuario()">
    <div class="modal fade" id="modalAgregarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control form-control-sm" id="nombre" name="nombre"
                                    placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="fechaNacimiento">Fecha Nacimiento</label>
                                <input type="date" class="form-control form-control-sm" id="fechaNacimiento"
                                    name="fechaNacimiento" placeholder="Fecha Nacimiento" required>
                            </div>
                            <div class="form-group">
                                <label for="correo">Correo</label>
                                <input type="email" class="form-control form-control-sm" id="correo" name="correo"
                                    placeholder="Email" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="paterno">Apellido Paterno</label>
                                <input type="text" class="form-control form-control-sm" id="paterno" name="paterno"
                                    placeholder="Apellido Paterno" required>
                            </div>
                            <div class="form-group">
                                <label for="sexo">Sexo</label>
                                <select class="custom-select form-control form-control-sm" id="sexo" name="sexo"
                                    required>
                                    <option selected>----------</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control form-control-sm" id="usuario" name="usuario"
                                    placeholder="Usuario" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="materno">Apellido Materno</label>
                                <input type="text" class="form-control form-control-sm" id="materno" name="materno"
                                    placeholder="Apellido Materno" required>
                            </div>

                            <div class="form-group">
                                <label for="telefono">Telefono</label>
                                <input type="text" class="form-control form-control-sm" id="telefono" name="telefono"
                                    placeholder="Ingrese Telfono" required>
                            </div>

                            <div class="form-group">
                                <label for="password">Contraseña</label>
                                <input type="password" class="form-control form-control-sm" id="password"
                                    name="password" placeholder="Ingresa Password" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="rolUsuario">Rol de Usuario</label>
                            <select class="custom-select form-control form-control-sm" required id="rolUsuario"
                                name="rolUsuario">
                                <option selected>----------</option>
                                <option value="1">Cliente</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="descripcion">Descripcion</label>
                            <textarea name="descripcion" id="descripcion" cols="30" rows="3"
                                class="form-control form-control-sm" placeholder="Ingrese Descripcion" required></textarea>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <span type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancelar</span>
                    <button class="btn btn-success btn-sm"><i class="fa-solid fa-user-plus"></i> Agregar Usuario
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>