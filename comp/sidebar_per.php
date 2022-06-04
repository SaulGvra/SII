        <!-- --------------------Sidebar fijo-------------------- -->
        <main>
            <div class="wrapper" >
                <nav id="sidebar" class="sb">
                    <div class="sidebar-header">
                        <h3 ><i class="fas fa-align-left" ></i> Menú</h3>
                    </div>
                    <ul class="lisst-unstyled components">
                        <li>
                        <a href="index_per.php"><i class="fa-solid fa-house-user"> </i> Inicio</a>
                        </li>
                        
                        <li>
                            <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-user-check"></i> Inscripciones</a>
                            <ul class="collapse lisst-unstyled" id="pageSubmenu">
                                <li>
                                    <a href="per_datos.php">Datos personales</a>
                                </li>   
                            </ul>
                        </li>
                        <br><br><br>
                        <hr style="width:100%;text-align:left;margin-left:0">
                        <li>
                            <a href="logout.php"><i class="fa-solid fa-house-lock"></i> Cerrar Sessión</a>
                        </li>
                    </ul>
                </nav>
                
                
                
                <!-- ---------------------Sidebar desplegable------------------------ -->

                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-body">
                            <nav id="sidebarDp" class="sbDp">
                                <div class="sidebar-header">
                                    <h3 ><i class="fas fa-align-left" ></i> Menú</h3>
                                </div>
                                <ul class="lisst-unstyled components">
                                <li>
                                    <a href="index_per.php"><i class="fa-solid fa-house-user"> </i> Inicio</a>
                                    </li>
                                    
                                    <li>
                                    <li>
                                        <a href="#pageSubmenuDP" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-user-check"></i> Inscripciones</a>
                                        <ul class="collapse lisst-unstyled" id="pageSubmenuDP">
                                            <li>
                                            <a href="per_datos.php">Datos personales</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <br><br><br>
                    
                                    <hr style="width:100%;text-align:left;margin-left:0">
                                    <li>
                                        <a href="logout.php"><i class="fa-solid fa-house-lock"></i> Cerrar Sessión</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                      </div>
                
                <!-- --------------------------------------------- -->