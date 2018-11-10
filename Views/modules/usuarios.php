    <button type ="button" class ="btn btn-success mr-1 mb-2">
    <a href ="index.php?action=addUser"><i class ="la la-plus">
    <span>Nuevo Usuario</span></i></a>
    
    </button>
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Clientes/Usuarios</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                    <th>Id</th>
                                                    <th>Nombre(s)</th>
                                                    <th>Apellido(s)</th>
                                                    <th>Edad</th>
                                                    <th><span style="width:100px;">Usuario</span></th>
                                                    <th>Contraseña</th>
                                                    <th>Correo</th>
                                                    <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                <?php
                                
                                                    // CLASE Y FUNCION DEL CONTROLADOR
                                                    $users = new Controller();
                                                    $users->getUsers();
                                                ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                 </div>
