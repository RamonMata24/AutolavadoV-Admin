<button type ="button" class ="btn btn-success mr-1 mb-2">
    <a href ="index.php?action=addVisita"><i class ="la la-plus">
    <span>Nueva Visita</span></i></a>
    
    </button>
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Visitas</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                    <th>Id</th>
                                                    <th>Fecha</th>
                                                    <th>Usuario</th>
                                                    <th>Servicio</th>
                                                    <th>Estado</th>
                                                    <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                <?php
                                
                                                    // CLASE Y FUNCION DEL CONTROLADOR
                                                    $visita = new Controller();
                                                    $visita->getVisitas();
                                                ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                 </div>
