      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="profile.html"><img src="/assets/img/michael.png" class="img-circle" width="60"></a></p>
            <h5 class="centered">Usuario de Ecobici</h5>
            <!--<li class="mt">
              <a href="{{ url('/home') }}">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>-->
            <li class="sub-menu">
              <a href="/inicio">
                <i class="fa fa-users"></i>
                <span>Inicio</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
                <i class="fa fa-file-text"></i>
                <span>Herramientas de Viajes</span>
              </a>
              <ul class="sub">
                <li><a  href="/mapa">Ver Rutas</a></li>
                <li><a  href="/historial/viajes">Historial de Recorridos</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
                <i class="fa fa-file-text"></i>
                <span>Herramientas de Pagos</span>
              </a>
              <ul class="sub">
                <li><a  href="/pagos">Facturas Pendientes</a></li>
                <li><a  href="/historial/pagos">Historial de Pagos</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
                <i class="fa fa-file-text"></i>
                <span>Cuenta</span>
              </a>
              <ul class="sub">
                <li><a  href="/user/cuenta">Datos Personales</a></li>
                <li><a  href="/user/changepass">Cambio de Contraseña</a></li>
              </ul>
            </li>
          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->