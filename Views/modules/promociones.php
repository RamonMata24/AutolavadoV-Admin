<button type ="button" class ="btn btn-success mr-1 mb-2">
    <a href ="index.php?action=addPromo"><i class ="la la-plus">
    <span>Nueva Promoción</span></i></a>
    
    </button>
                                <div class="widget has-shadow">
                                    <div class="widget-header bordered no-actions d-flex align-items-center">
                                        <h4>Promociones</h4>
                                    </div>
                                    <div class="widget-body">
                                        <div class="table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                    <th>Id</th>
                                                    <th>Promociones</th>
                                                    <th>Fecha Vencimiento</th>
                                                    <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                <?php
                                
                                                    // CLASE Y FUNCION DEL CONTROLADOR
                                                    $users = new Controller();
                                                    $users->getPromociones();
                                                ?>
                                                   
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                 </div>
