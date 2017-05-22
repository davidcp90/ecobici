      <!--sidebar start-->
      <aside>
        <div id="sidebar"  class="nav-collapse no-print ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu" id="nav-accordion">
            <p class="centered"><a href="{{url('/dashboard')}}"><img src="/assets/img/ico_user.png" class="img-circle" width="60"></a></p>
            <h5 class="centered">Funcionario Ecobici</h5>
            <!--<li class="mt">
              <a href="{{ url('/home') }}">
                <i class="fa fa-dashboard"></i>
                <span>Dashboard</span>
              </a>
            </li>-->
            <li class="sub-menu">
              <a href="javascript:;" >
                <i class="fa fa-users"></i>
                <span>Registro de Usuarios</span>
              </a>
              <ul class="sub">
                <li><a  href="/admin/users">Usuarios Registrados</a></li>
                <li><a  href="/admin/users/create">Agregar Usuario</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" >
                <i class="fa fa-file-text"></i>
                <span>Gestion Evaluaciones</span>
              </a>
              <ul class="sub">
                <li><a  href="/admin/cuestionarios">Cuestionario</a></li>
                <li><a  href="/admin/categorias">Categoria</a></li>
                <li><a  href="/admin/preguntas">Preguntas</a></li>
              </ul>
            </li>
          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->