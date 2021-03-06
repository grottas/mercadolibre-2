<div class="top-menu">
  <ul class="nav navbar-nav pull-right">
    <!-- BEGIN NOTIFICATION DROPDOWN -->
    <li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="icon-bell"></i>
        <span class="badge badge-default"> 7 </span>
      </a>
      <ul class="dropdown-menu">
        <li class="external">
          <h3><span class="bold">12 pending</span> notifications</h3>
          <a href="page_user_profile_1.html">view all</a>
        </li>
        <li>
          <ul class="dropdown-menu-list scroller" style="height: 250px;" data-handle-color="#637283">
            <li>
              <a href="javascript:;">
                <span class="time">5 days</span>
                <span class="details">
                  <span class="label label-sm label-icon label-info">
                    <i class="fa fa-bullhorn"></i>
                  </span> System Error.
                </span>
              </a>
            </li>
            <li>
              <a href="javascript:;">
                <span class="time">9 days</span>
                <span class="details">
                  <span class="label label-sm label-icon label-danger">
                    <i class="fa fa-bolt"></i>
                  </span> Storage server failed.
                </span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <!-- END NOTIFICATION DROPDOWN -->
    <!-- BEGIN TODO DROPDOWN -->
    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
    <li class="dropdown dropdown-extended dropdown-tasks" id="header_task_bar">
      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <i class="icon-calendar"></i>
        <span class="badge badge-default"> 3 </span>
      </a>
      <ul class="dropdown-menu extended tasks">
        <li class="external">
          <h3>You have
          <span class="bold">12 pending</span> tasks</h3>
          <a href="app_todo.html">view all</a>
        </li>
        <li>
          <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
            <li>
              <a href="javascript:;">
                <span class="task">
                  <span class="desc">Database migration</span>
                  <span class="percent">10%</span>
                </span>
                <span class="progress">
                  <span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
                    <span class="sr-only">10% Complete</span>
                  </span>
                </span>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </li>
    <!-- END TODO DROPDOWN -->
    <!-- BEGIN USER LOGIN DROPDOWN -->
    <li class="dropdown dropdown-user">
      <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
        <img alt="" class="img-circle" src="{{ asset('angular/assets/layouts/layout/img/avatar3_small.jpg') }}" />
        <span class="username username-hide-on-mobile"> Nick </span>
        <i class="fa fa-angle-down"></i>
      </a>
      <ul class="dropdown-menu dropdown-menu-default">
        <li>
          <a href="{{ url('/meli/admin/profile') }}">
          <i class="icon-user"></i> My Profile </a>
        </li>
        <li>
          <a href="{{ url('/meli/admin/setting') }}">
            <i class="icon-rocket"></i> My Tasks
            <span class="badge badge-success"> 7 </span>
          </a>
        </li>
        <li class="divider"></li>
        <li>
          <a href="{{ url('/meli/admin/logout') }}">
          <i class="icon-key"></i> Log Out </a>
        </li>
      </ul>
    </li>
    <!-- END USER LOGIN DROPDOWN -->
    <!-- BEGIN QUICK SIDEBAR TOGGLER -->
    <li class="dropdown dropdown-quick-sidebar-toggler">
      <a href="javascript:;" class="dropdown-toggle">
        <i class="icon-logout"></i>
      </a>
    </li>
    <!-- END QUICK SIDEBAR TOGGLER -->
  </ul>
</div>