      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse no-print">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="{{url('/dashboard')}}"><img src="/assets/img/ico_user.png" class="img-circle" width="60"></a></p>
            <h5 class="centered">Usuario Ecobici</h5>
            <li class="sub-menu">
              <a href="javascript:;" >
                <i class="fa fa-university"></i>
                <span>Diagnostico</span>
              </a>
              <ul class="sub">
                <li class="sub-menu">
                  <a href="{!! route('curso.index') !!}" >
                    <span>Curso</span>
                  </a>
                </li>
                <li class="sub-menu">
                  <a href="/evaluacion" >
                    <span>Evaluacion</span>
                  </a>
                </li>
              </ul>
            </li>
            <?php $user = auth()->user(); ?>
            @if($user->usuario_aprobado == 'activo' || $user->usuario_aprobado == 'aprobado')
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
            @endif
            <li class="sub-menu">
              <a href="javascript:;" >
                <i class="fa fa-file-text"></i>
                <span>Cuenta</span>
              </a>
              <ul class="sub">
                <li><a  href="/editar-usuario">Datos Personales</a></li>
                <li><a  href="/user/changepass">Cambio de Contraseña</a></li>
                <li><a  href="/suport">Soporte</a></li>
              </ul>
            </li>
          </ul>
          <!-- sidebar menu end-->
        </div>

      </aside>
      <!--sidebar end-->