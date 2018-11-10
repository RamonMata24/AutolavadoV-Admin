<div class="page-content"> <!-- Se comienza con un div de la pagina de contenid de nuestro inicio -->

   <div class="row">
   	    <div class="page-header mt-3">
            <div class="row d-flex align-items-center">
            	
                <div class="col-xl-8 col-lg-8 col-md-8 col-8 d-flex justify-content-xl-end justify-content-lg-end justify-content-md-center justify-content-center">
                     <h2 class="page-header-title" style="margin-right: 0 !important;">¡BIENVENIDO ADMINISTRADOR!</h2>
                </div>

            </div>
        </div>
    </div>


<!-- Begin Row -->
                                <div class="row flex-row">
                                    <!-- comienzo del widget de progreso-->
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                        <div class="widget-31 widget has-shadow">
                                            <div class="widget-body conso">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-7">
                                                        <div class="conso-title">
                                                            <div class="title">Clientes</div>
                                                        </div>
                                                    </div>
                                                    <!-- Begin Progress -->
                                                    <div class="col-xl-5 d-flex justify-content-center">
                                                        <div class="cliente">
                                                            <div class="percent">
                                                            <?php
                                                             $count = new Controller();
                                                             $count->usuarios();
                                                             ?>
                                                             </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Progress -->
                                                </div>
                                                <i class="icon-big ion-happy"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fin del primer widget-->
                                    <!-- Begin visitas -->
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12"">
                                        <div class="widget-31 widget has-shadow">
                                            <div class="widget-body conso">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-7">
                                                        <div class="conso-title">
                                                            <div class="title">Visitas</div>
                                                        </div>
                                                    </div>
                                                    <!-- Begin Progress -->
                                                    <div class="col-xl-5 d-flex justify-content-center">
                                                        <div class="visita">
                                                            <div class="percent">
                                                            <?php
                                                             $count = new Controller();
                                                             $count->visitas();
                                                             ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Progress -->
                                                </div>
                                                <i class="icon-big ion-model-s"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End -->
                                    <!-- Begin promocion -->
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12"">
                                        <div class="widget-31 widget has-shadow">
                                            <div class="widget-body conso">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-7">
                                                        <div class="conso-title">
                                                            <div class="title">Promocion</div>
                                                        </div>
                                                    </div>
                                                    <!-- Begin Progress -->
                                                    <div class="col-xl-5 d-flex justify-content-center">
                                                        <div class="promocion">
                                                            <div class="percent">
                                                            <?php
                                                             $count = new Controller();
                                                             $count->promociones();
                                                             ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Progress -->
                                                </div>
                                                <i class="icon-big ion-flash"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End  -->
                                     <!-- Begin premios -->
                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-12">
                                        <div class="widget-31 widget has-shadow">
                                            <div class="widget-body conso">
                                                <div class="row align-items-center">
                                                    <div class="col-xl-7">
                                                        <div class="conso-title">
                                                            <div class="title">Premios</div>
                                                        </div>
                                                    </div>
                                                    <!-- Begin Progress -->
                                                    <div class="col-xl-5 d-flex justify-content-center">
                                                        <div class="premios">
                                                            <div class="percent">
                                                            <?php

                                                             $count = new Controller();
                                                             $count->premios();

                                                             ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Progress -->
                                                </div>
                                                <i class="icon-big ion-trophy"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End  -->
                                </div>
                                <!-- End Row -->
<!-- Begin Widget  -->
<div class="row">
		 <div class="col-xl-8 col-lg-8 col-md-8 col-sm-8">
                               <div class="invoice-date d-flex justify-content-xl-end justify-content-center">
                                            <h2>LISTADO DE SERVICIOS</h2>
                                        </div>
                                        <!-- Begin Table -->
                                        <div class="col-xl-12 desc-tables">
	                                        <div class="table-responsive">
		                                        <table class="table">
		                                            <thead>
		                                                <tr>
		                                                    <th class="text-left">Servicios</th>
		                                                    <th class="text-center">Precios</th>
		                                                    
		                                                </tr>
		                                            </thead>
		                                            <tbody>
		                                                <tr>
		                                                    <td class="text-left">
		                                                        LAVADO EXPRESS
		                                                     <br>
		                                                        <div class="description">
		                                                        	Desengrasante
																	Cera Shampoo Tri-Foam
																	Secado
		                                                        </div>
		                		                            </td>
		                                                    <td class="text-center">$80.00</td>
		                                                </tr> 

		                                                 <tr>
		                                                    <td class="text-left">
		                                                        LAVADO EJECUTIVO
		                                                     <br>
		                                                        <div class="description">
			                                                        	Desengrasante,
																		Cera Shampoo Tri-Foam,
																		Secado,
																		Abrillantador en Llantas,
																		Aspirado Y
																		Limpieza Interior
		                                                        </div>
		                		                            </td>
		                                                    <td class="text-center">$150.00</td>
		                                                </tr> 

		                                                <tr>
		                                                    <td class="text-left">
		                                                        LAVADO D'LUXE
		                                                     <br>
		                                                        <div class="description">
			                                                        	Desengrasante,
																		Cera Shampoo Tri-Foam,
																		Secado,
																		Abrillantador en Llantas,
																		Aspirado,
																		Limpieza Interior,
																		Abrillantador Interior,
																		Clip Aromatizante y 
																		Lavado de Tapetes
		                                                        </div>
		                		                            </td>
		                                                    <td class="text-center">$280.00</td>
		                                                </tr> 

		                                            </tbody>
		                                        </table>
	                                        </div>
                                        </div>
                                        <!-- End Table -->
                                    </div>
                                    <!-- End Invoice Container -->

                        <!-- Begin widget de clima -->
                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="widget widget-15 has-shadow">
                                    <div class="widget-body">
                                        <div class="row">
                                            <div class="col-xl-6 d-flex justify-content-center align-items-center">
                                                <div class="weather-infos">
                                                    <div class="temp">24°</div>
                                                    <div class="city">Cd. Victoria, MX</div>
                                                    <div class="risk"><i class="la la-tint"></i>80%</div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 d-flex justify-content-center align-items-center">
                                                <div class="weather-icon">
                                                    <i class="meteocons-cloudy"></i>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="tab-content">
                                            <div class="week-prev">
                                            <div class="row">
                                                <div class="col-xl-2 text-center">
                                                    <div class="day">MON</div>
                                                    <div class="weather-mini-icon">
                                                        <i class="meteocons-sun"></i>
                                                    </div>
                                                    <div class="weather-temp">26°</div>
                                                </div>
                                                <div class="col-xl-2 text-center">
                                                    <div class="day">TUE</div>
                                                    <div class="weather-mini-icon">
                                                        <i class="meteocons-cloudy"></i>
                                                    </div>
                                                    <div class="weather-temp">30°</div>
                                                </div>
                                                <div class="col-xl-2 text-center">
                                                    <div class="day">WED</div>
                                                    <div class="weather-mini-icon">
                                                        <i class="meteocons-sun"></i>
                                                    </div>
                                                    <div class="weather-temp">32°</div>
                                                </div>
                                                <div class="col-xl-2 text-center">
                                                    <div class="day">THU</div>
                                                    <div class="weather-mini-icon">
                                                        <i class="meteocons-sun"></i>
                                                    </div>
                                                    <div class="weather-temp">27°</div>
                                                </div>
                                                <div class="col-xl-2 text-center">
                                                    <div class="day">FRI</div>
                                                    <div class="weather-mini-icon">
                                                        <i class="meteocons-cloudy2"></i>
                                                    </div>
                                                    <div class="weather-temp">25°</div>
                                                </div>
                                                <div class="col-xl-2 text-center">
                                                    <div class="day">SAT</div>
                                                    <div class="weather-mini-icon">
                                                        <i class="meteocons-windy2"></i>
                                                    </div>
                                                    <div class="weather-temp">31°</div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            </div>
                            <!-- End Widget -->


               	
</div>
<!-- End Row -->

               
                                    





</div>



