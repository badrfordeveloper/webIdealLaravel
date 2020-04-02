<!-- Vertical navbar -->
<div class="vertical-nav bg-white" id="sidebar">
  <div class="py-3 px-3 mb-3 bg-light">
    <div class="media d-flex align-items-center"><img src="{{ asset('assets/img/logo.png') }}" alt="..."  class="mr-3 rounded-circle img-thumbnail shadow-sm logo-circle">
      <div class="media-body">
        <h4 class="m-0">WEBEXIT</h4>
      </div>
    </div>
  </div>

  <ul class="nav flex-column bg-white mb-0">
    <li class="nav-item">
      <a href="{{ url('administration') }}" class="nav-link text-dark font-italic bg-light">
                <i class="fa fa-th-large mr-3 text-primary fa-fw"></i>
                Tableau de bord
            </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('administration/articles') }}" class="nav-link text-dark font-italic">
                <i class="fa fa-address-card mr-3 text-primary fa-fw"></i>
                Articles
            </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('administration/categories') }}" class="nav-link text-dark font-italic">
                <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i>
                Catégories
            </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('administration/tags') }}" class="nav-link text-dark font-italic">
                <i class="fa fa-cubes mr-3 text-primary fa-fw"></i>
                Tags
            </a>
    </li>
    <li class="nav-item">
      <a href="{{ url('administration/users') }}" class="nav-link text-dark font-italic">
                <i class="fa fa-users mr-3 text-primary fa-fw"></i>
                Utilisateurs
            </a>
    </li>
    <li class="nav-item">
      
      <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link text-dark font-italic">
                <i class="fa fa-power-off mr-3 text-primary fa-fw"></i>
        Deconnexion
      </a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
      </form>
    </li>
  </ul>
</div>
<!-- End vertical navbar -->


<!-- Page content holder -->
<div class="page-content " id="content">
  <!-- Toggle button -->
  <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars "></i></button>



