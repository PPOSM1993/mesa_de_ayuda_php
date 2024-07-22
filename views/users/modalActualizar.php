<!-- Modal -->
<form action="" method="POST" id="frmActualizarUsuario" onSubmit="return actualizarUsuario()">
    <div class="modal fade" id="modalActualizarUsuarios" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="idUsuario" name="idUsuario" hidden>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="nombreu">Nombre</label>
                                <input type="text" class="form-control form-control-sm" id="nombreu" name="nombreu"
                                    placeholder="Nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="fechaNacimientou">Fecha Nacimiento</label>
                                <input type="date" class="form-control form-control-sm" id="fechaNacimientou"
                                    name="fechaNacimientou" placeholder="Fecha Nacimiento" required>
                            </div>
                            <div class="form-group">
                                <label for="correou">Correo</label>
                                <input type="email" class="form-control form-control-sm" id="correou" name="correou"
                                    placeholder="Email" required>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="paternou">Apellido Paterno</label>
                                <input type="text" class="form-control form-control-sm" id="paternou" name="paternou"
                                    placeholder="Apellido Paterno" required>
                            </div>
                            <div class="form-group">
                                <label for="sexou">Sexo</label>
                                <select class="custom-select form-control form-control-sm" id="sexou" name="sexou"
                                    required>
                                    <option selected>----------</option>
                                    <option value="M">Masculino</option>
                                    <option value="F">Femenino</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="usuariou">Usuario</label>
                                <input type="text" class="form-control form-control-sm" id="usuariou" name="usuariou"
                                    placeholder="Usuario" required>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group">
                                <label for="maternou">Apellido Materno</label>
                                <input type="text" class="form-control form-control-sm" id="maternou" name="maternou"
                                    placeholder="Apellido Materno" required>
                            </div>

                            <div class="form-group">
                                <label for="telefonou">Telefono</label>
                                <input type="text" class="form-control form-control-sm" id="telefonou" name="telefonou"
                                    placeholder="Ingrese Telfono" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="idRolu">Rol de Usuario</label>
                            <select class="custom-select form-control form-control-sm" required id="idRolu"
                                name="idRolu">
                                <option selected>----------</option>
                                <option value="1">Cliente</option>
                                <option value="2">Administrador</option>
                            </select>
                        </div>
                    </div>
                    <br>

                    <div class="row">
                        <div class="col-sm-12">
                            <label for="ubicacionu">Descripcion</label>
                            <textarea name="ubicacionu" id="ubicacionu" cols="30" rows="3"
                                class="form-control form-control-sm" placeholder="Ingrese Descripcion" required></textarea>
                        </div>
                    </div>



                </div>
                <div class="modal-footer">
                    <span type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa-solid fa-xmark"></i> Cancelar</span>
                    <button class="btn btn-success btn-sm"><i class="fa-solid fa-pen-nib"></i> Actualizar Usuario
                    </button>
                </div>
            </div>
        </div>
    </div>
</form>