        <!-- --------------------Sidebar fijo-------------------- -->
        <main>
            <div class="wrapper" >
                <nav id="sidebar" class="sb">
                    <div class="sidebar-header">
                        <h3 ><i class="fas fa-align-left" ></i> Menú</h3>
                    </div>
                    <ul class="lisst-unstyled components">
                        
                    <li>
                                    <a href="index_admin.php"><i class="fa-solid fa-house-user"> </i> Inicio</a>
                                    </li>

                        <li>
                            <a href="#pageSubmenuad" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-user-check"></i> Inscripciones</a>
                            <ul class="collapse lisst-unstyled" id="pageSubmenuad">
                                <li>
                                    <a href="ins_alumno.php">Alumnos</a>
                                </li>  
                                <li>
                                    <a href="ins_aspirante.php">Aspirantes</a>
                                </li>  
                                <li>
                                    <a href="ins_personal.php">Personal</a>
                                </li>   
                            </ul>
                        </li>

                        <li>
                        <a href="bajas.php"><i class="fa-solid fa-house-user"> </i> Bajas</a>
                        </li>
                      
                        <li>
                            <a href="index_reporte.php"><i class="fa-solid fa-calendar-days"></i> Reporte</a>
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
                                    <a href="modulos/inicio_asp.php"><i class="fa-solid fa-house-user"> </i> Inicio</a>
                                    </li>
                                    
                                    <li>
                                        <a href="#pageSubmenuad" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa-solid fa-user-check"></i> Inscripciones</a>
                                        <ul class="collapse lisst-unstyled" id="pageSubmenuad">
                                            <li>
                                                <a href="ins_alumno.php">Alumnos</a>
                                            </li>  
                                            <li>
                                                <a href="ins_aspirante.php">Aspirantes</a>
                                            </li>  
                                            <li>
                                                <a href="ins_personal.php">Personal</a>
                                            </li>   
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="bajas.php"><i class="fa-solid fa-house-user"> </i> Bajas</a>
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