<nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="/administration">
                <i class="mdi mdi-grid-large menu-icon"></i>
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            {{-- <li class="nav-item nav-category">Gestion des Catégories</li> --}}
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#one" aria-expanded="false" aria-controls="one">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Gestion des Catégories</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="one">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('categories.index')}}">Liste </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('categories.create')}}">Ajouter</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#two" aria-expanded="false" aria-controls="two">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Gestion des Sous Catégories</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="two">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('subcategories.index')}}">Liste </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('subcategories.create')}}">Ajouter</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#three" aria-expanded="false" aria-controls="three">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Gestion des Articles</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="three">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="{{route('articles.index')}}">Liste </a></li>
                  <li class="nav-item"> <a class="nav-link" href="{{route('articles.create')}}">Ajouter</a></li>
                  <li class="nav-item"> <a class="nav-link" href="#">Stock</a></li>
                </ul>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#four" aria-expanded="false" aria-controls="four">
                <i class="menu-icon mdi mdi-floor-plan"></i>
                <span class="menu-title">Marketing</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="four">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="#">Ventes Flash </a></li>
                </ul>
              </div>
            </li>
            

            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Les Commandes</span>
              </a>
            </li>

            
            
            
            {{-- <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#form-elements" aria-expanded="false" aria-controls="form-elements">
                <i class="menu-icon mdi mdi-card-text-outline"></i>
                <span class="menu-title">Form elements</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="form-elements">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"><a class="nav-link" href="pages/forms/basic_elements.html">Basic Elements</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
                <i class="menu-icon mdi mdi-chart-line"></i>
                <span class="menu-title">Charts</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="charts">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/charts/chartjs.html">ChartJs</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#tables" aria-expanded="false" aria-controls="tables">
                <i class="menu-icon mdi mdi-table"></i>
                <span class="menu-title">Tables</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="tables">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/tables/basic-table.html">Basic table</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
                <i class="menu-icon mdi mdi-layers-outline"></i>
                <span class="menu-title">Icons</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="icons">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/icons/font-awesome.html">Font Awesome</a></li>
                </ul>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
                <i class="menu-icon mdi mdi-account-circle-outline"></i>
                <span class="menu-title">User Pages</span>
                <i class="menu-arrow"></i>
              </a>
              <div class="collapse" id="auth">
                <ul class="nav flex-column sub-menu">
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
                  <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
                </ul>
              </div>
            </li> --}}
            <li class="nav-item">
              <a class="nav-link" href="#">
                <i class="menu-icon mdi mdi-file-document"></i>
                <span class="menu-title">Paramétrage d'accès</span>
              </a>
            </li>
          </ul>
        </nav>