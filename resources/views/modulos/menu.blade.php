<aside class="main-sidebar navbar-dark elevation-4" style="overflow-x:hidden">
    <!-- Brand Logo -->
    <a href="{{ url('/') }}" class="brand-link">
      <img src="{{ url('/') }}/img/marca/icono.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light text-white">San José del Sur</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host observed"><div class="os-resize-observer" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 299px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ url('/') }}/img/usuarios/admin.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <span class="profile-username text-justify">
                <a href="#" class="text-white">{{ Auth::user()->name }}</a>
                <a href="#" class="float-left btn-tool text-white">Código: 21983478901</a>
            </span>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
         
            <li class="nav-item">
                <a href="{{ url('/') }}" class="nav-link">
                  <i class="nav-icon fa fa-home text-white"></i>
                  <p class="text-white">
                    PRINCIPAL
                  </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="{{ url('/') }}/usuarios" class="nav-link">
                  <i class="nav-icon fas fa-chart-pie text-white"></i>
                  <p class="text-white">
                    USUARIOS

                  </p>
                </a>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-user-graduate nav-icon text-white"></i>
                  <p class="text-white">
                    MIS ESTUDIOS
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/') }}/malla-curricular" class="nav-link">
                      <i class="far fa-circle nav-icon text-white"></i>
                      <p class="text-white">Malla Curricular</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/') }}/avance-carrera" class="nav-link">
                      <i class="far fa-circle nav-icon text-white"></i>
                      <p class="text-white">Avance de Carrera</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/') }}/record-academico" class="nav-link">
                      <i class="far fa-circle nav-icon text-white"></i>
                      <p class="text-white">Record Académico</p>
                    </a>
                  </li>
                  
                </ul>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="fas fa-file-signature nav-icon text-white"></i>
                    
                  <p class="text-white">
                    MIS CURSOS
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/') }}/cursos-actuales" class="nav-link">
                      <i class="far fa-circle nav-icon text-white"></i>
                      <p class="text-white">Cursos Actuales</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/') }}/historial-cursos" class="nav-link">
                      <i class="far fa-circle nav-icon text-white"></i>
                      <p class="text-white">Historial de cursos</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/') }}/horario" class="nav-link">
                      <i class="far fa-circle nav-icon text-white"></i>
                      <p class="text-white">Horario de clases</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/') }}/ficha-matricula" class="nav-link">
                      <i class="far fa-circle nav-icon text-white"></i>
                      <p class="text-white">Ficha de Matrícula</p>
                    </a>
                  </li>                   
                      
                    </ul>
                </li>
                
                <li class="nav-item">
                    <a href="#" class="nav-link">
                   <i class="fas fa-money-bill-wave nav-icon text-white"></i>
              
                 <p class="text-white">
                    FINANZAS
                   <i class="right fas fa-angle-left"></i>
                 </p>
               </a>
               <ul class="nav nav-treeview">
                 <li class="nav-item">
                   <a href="{{ url('/') }}/pagos-pendientes" class="nav-link">
                     <i class="far fa-circle nav-icon text-white"></i>
                     <p class="text-white">Pagos Pendientes</p>
                   </a>
                 </li>
                 <li class="nav-item">
                   <a href="{{ url('/') }}/historial-pagos" class="nav-link">
                     <i class="far fa-circle nav-icon text-white"></i>
                     <p class="text-white">Historial de Pagos</p>
                   </a>
                 </li>

               </ul>
            </li>
            <li class="nav-item">
                <a href="{{ url('/') }}/tramites" class="nav-link">
                    <i class="fas fa-folder-open nav-icon text-white"></i>
                  <p class="text-white">
                    TRÁMITES
                  </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/') }}/reglamentos" class="nav-link">
                    <i class="fas fa-file-medical-alt nav-icon text-white "></i>
                 
                  <p class="text-white">
                    REGLAMENTOS
                  </p>
                </a>
            </li>

     
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div></div></div><div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden"><div class="os-scrollbar-track"><div class="os-scrollbar-handle" style="height: 22.1076%; transform: translate(0px, 0px);"></div></div></div><div class="os-scrollbar-corner"></div></div>
    <!-- /.sidebar -->
  </aside>