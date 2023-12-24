    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
          <!-- Dark Logo-->
          <a href="{{ route('dashboard') }}" class="logo logo-dark">
            <span class="logo-sm">
              <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="17" />
            </span>
          </a>
          <!-- Light Logo-->
          <a href="{{ route('dashboard') }}" class="logo logo-light">
            <span class="logo-sm">
              <img src="{{asset('assets/images/logo-sm.png')}}" alt="" height="22" />
            </span>
            <span class="logo-lg">
              <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="17" />
            </span>
          </a>
          <button
            type="button"
            class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
            id="vertical-hover"
          >
            <i class="ri-record-circle-line"></i>
          </button>
        </div>

        <div id="scrollbar">
          <div class="container-fluid">
            <div id="two-column-menu"></div>
            <ul class="navbar-nav" id="navbar-nav">
              <li class="menu-title"><span data-key="t-menu">Menu</span></li>
              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarDashboards"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarDashboards"
                >
                  <i data-feather="home" class="icon-dual"></i>
                  <span data-key="t-dashboards">Dashboards</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarDashboards">
                  <ul class="nav nav-sm flex-column">
                    <li class="nav-item">
                      <a
                        href="dashboard-analytics.html"
                        class="nav-link"
                        data-key="t-analytics"
                      >
                        Analytics
                      </a>
                    </li>

                  </ul>
                </div>
              </li>
              <!-- end Dashboard Menu -->
              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sidebarApps"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="sidebarApps"
                >
                  <i data-feather="grid" class="icon-dual"></i>
                  <span data-key="t-apps">Bus</span>
                </a>
                <div class="collapse menu-dropdown" id="sidebarApps">
                  <ul class="nav nav-sm flex-column">
                    <!-- <li class="nav-item">
                      <a
                        href="#sidebarCalendar"
                        class="nav-link"
                        data-bs-toggle="collapse"
                        role="button"
                        aria-expanded="false"
                        aria-controls="sidebarCalendar"
                        data-key="t-calender"
                      >
                        Calendar
                      </a>
                      <div class="collapse menu-dropdown" id="sidebarCalendar">
                        <ul class="nav nav-sm flex-column">
                          <li class="nav-item">
                            <a
                              href="apps-calendar.html"
                              class="nav-link"
                              data-key="t-main-calender"
                            >
                              Main Calender
                            </a>
                          </li>
                          <li class="nav-item">
                            <a
                              href="apps-calendar-month-grid.html"
                              class="nav-link"
                              data-key="t-month-grid"
                            >
                              Month Grid
                            </a>
                          </li>
                        </ul>
                      </div>
                    </li> -->
                    <!-- <li class="nav-item">
                      <a
                        href="apps-chat.html"
                        class="nav-link"
                        data-key="t-chat"
                      >
                        Brand
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="apps-chat.html"
                        class="nav-link"
                        data-key="t-chat"
                      >
                        Category
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="apps-chat.html"
                        class="nav-link"
                        data-key="t-chat"
                      >
                        Unit
                      </a>
                    </li> -->
                    <li class="nav-item">
                      <a
                        href="{{ url('/buses/create') }}" class="nav-link" ata-key="t-chat">
                        Add Buses
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="{{ url('/buses/index') }}" class="nav-link" ata-key="t-chat">
                        Bus List
                      </a>
                    </li>
                    



                  </ul>
                </div>
              </li>

              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#locations"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="salesApps"
                >
                  <i data-feather="grid" class="icon-dual"></i>
                  <span data-key="t-apps">Location</span>
                </a>
                <div class="collapse menu-dropdown" id="locations">
                  <ul class="nav nav-sm flex-column">
                    
                    <li class="nav-item">
                      <a
                        href="{{url('/locations/create')}}" class="nav-link" ata-key="t-chat">
                        Add Location
                      </a>
                    </li>
                    <li class="nav-item">
                      <a
                        href="{{url('/locations/index')}}" class="nav-link" ata-key="t-chat">
                        Location List
                      </a>
                    </li>

                  </ul>
                </div>
              </li>



              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#salesApps"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="salesApps"
                >
                  <i data-feather="grid" class="icon-dual"></i>
                  <span data-key="t-apps">Trips</span>
                </a>
                <div class="collapse menu-dropdown" id="salesApps">
                  <ul class="nav nav-sm flex-column">
                    
                    <li class="nav-item">
                      <a
                        href="{{url('/trips/index')}}" class="nav-link" ata-key="t-chat">
                        Trips List
                      </a>
                    </li>



                  </ul>
                </div>
              </li>




              <li class="nav-item">
                <a
                  class="nav-link menu-link"
                  href="#sitalocations"
                  data-bs-toggle="collapse"
                  role="button"
                  aria-expanded="false"
                  aria-controls="salesApps"
                >
                  <i data-feather="grid" class="icon-dual"></i>
                  <span data-key="t-apps">Seat Alocations</span>
                </a>
                <div class="collapse menu-dropdown" id="sitalocations">
                  <ul class="nav nav-sm flex-column">
                    
                    <li class="nav-item">
                      <a
                        href="{{route('seats.index')}}" class="nav-link" ata-key="t-chat">
                        All Seats
                      </a>
                    </li>



                  </ul>
                </div>
              </li>


              <!-- end Dashboard Menu -->




            </ul>
          </div>
          <!-- Sidebar -->
        </div>

        <div class="sidebar-background"></div>
    </div>