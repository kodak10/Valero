 <aside class="left-sidebar with-vertical">
    <div>
      <div class="brand-logo d-flex align-items-center justify-content-between">
        <a href="/" class="text-nowrap logo-img">
          <img src="{{asset('assets/images/logo.webp')}}" class="dark-logo" alt="Logo-Dark" style="height: 100px; width:100%"/>
          <img src="{{asset('assets/images/logo.webp')}}" class="light-logo" alt="Logo-light" style="height: 100px; width:100%"/>
        </a>
        <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
          <i class="ti ti-x"></i>
        </a>
      </div>


      <nav class="sidebar-nav scroll-sidebar" data-simplebar>
        <ul id="sidebarnav">
          
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Accueil</span>
          </li>
          
          <li class="sidebar-item">
            <a class="sidebar-link" href="/admin" aria-expanded="false">
              <span>
                <i class="ti ti-shopping-cart"></i>
              </span>
              <span class="hide-menu">Menu Général</span>
            </a>
          </li>
          
          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Commandes</span>
          </li>
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-basket"></i>
              </span>
              <span class="hide-menu">Les commandes</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Liste</span>
                </a>
              </li>
              
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Retour de commande</span>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-small-cap">
            <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
            <span class="hide-menu">Gestions</span>
          </li>
          <li class="sidebar-item ">
            <a class="sidebar-link has-arrow {{ request()->routeIs('admin.articles*') ? 'active' : '' }}" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-basket"></i>
              </span>
              <span class="hide-menu">Articles</span>
            </a>
            <ul aria-expanded="{{ request()->routeIs('admin.articles*') ? 'true' : 'false' }}" class="collapse first-level">
              
              <li class="sidebar-item">
                <a href="{{ route('admin.articles.index') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Liste</span>
                </a>
              </li>
              
              <li class="sidebar-item">
                <a href="{{ route('admin.articles.create') }}" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Ajouter</span>
                </a>
              </li>
            </ul>
          </li>

         
          
         
          <li class="sidebar-item">
            <a class="sidebar-link has-arrow" href="javascript:void(0)" aria-expanded="false">
              <span class="d-flex">
                <i class="ti ti-basket"></i>
              </span>
              <span class="hide-menu">Utilisateurs / <br> Rôle et Permissions</span>
            </a>
            <ul aria-expanded="false" class="collapse first-level">
              
              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Utilisateurs</span>
                </a>
              </li>

              <li class="sidebar-item">
                <a href="#" class="sidebar-link">
                  <div class="round-16 d-flex align-items-center justify-content-center">
                    <i class="ti ti-circle"></i>
                  </div>
                  <span class="hide-menu">Rôles / Permissions</span>
                </a>
              </li>
              
            </ul>
          </li>

          </ul>
        </li>

        
        </ul>
      </nav>

    </div>
  </aside>
  <!--  Sidebar End -->