<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <div id="usuario">    
            <nav class="sidebar-nav">
                <ul id="sidebarnav">
                    <li class="user-profile">
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <img src="<?php echo IMAGES.'users/profile.png' ?>" alt="user" id="imagen_usuario"/>
                        <span class="hide-menu" id="name_usuario"></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="javascript:void()">My Profile </a></li>
                            <li><a href="javascript:void()">My Balance</a></li>
                            <li><a href="javascript:void()">Inbox</a></li>
                            <li><a href="javascript:void()">Account Setting</a></li>
                            <li><a href="javascript:void()" onclick="logout()">Logout</a></li>
                        </ul>
                    </li>
                    <li class="nav-devider"></li>
                    <li class="nav-small-cap">PERSONAL</li>
                    <li> <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                    <i class="mdi mdi-gauge"></i>
                    <span class="hide-menu">Dashboard <span class="label label-rouded label-themecolor pull-right">4</span></span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="javascript:void()">Minimal </a></li>
                            <li><a href="javascript:void()">Analytical</a></li>
                            <li><a href="javascript:void()">Demographical</a></li>
                            <li><a href="javascript:void()">Modern</a></li>
                        </ul>
                    </li>

                    <li id="paises"> 
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Paises</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo URL.'pais' ?>">Listar Paises</a></li>
                            <li><a href="<?php echo URL.'pais/crear' ?>">Crear Pais</a></li>
                        </ul>
                    </li>

                    <li id="ciudades"> 
                        <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                        <i class="mdi mdi-gauge"></i>
                        <span class="hide-menu">Ciudades</span></a>
                        <ul aria-expanded="false" class="collapse">
                            <li><a href="<?php echo URL.'ciudad' ?>">Listar Ciudades</a></li>
                            <li><a href="<?php echo URL.'ciudad/crear' ?>">Crear Ciudad</a></li>
                        </ul>
                    </li>
                    <input type="hidden" id="url" value="<?php echo URL ?>">
                </ul>
            </nav>
        </div>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->