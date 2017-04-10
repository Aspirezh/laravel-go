<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('/bower_components/AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <!-- <li class="active"><a href="#"><i class="fa fa-link"></i> <span>用户管理</span></a></li> -->
        <!-- <li><a href="#"><i class="fa fa-link"></i> <span>欢迎</span></a></li> -->
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i> <span>用户管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ asset('auth')}}">客户信息 </a></li>
            <li><a href="{{asset('play')}}">合同信息 </a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="{{asset('tec')}}"><i class="fa fa-user"></i> <span>货源管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>

        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-user"></i> <span>货运管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-cny"></i> <span>财务管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">收款记录 </a></li>
            <li><a href="#">付款记录 </a></li>
            <li><a href="{{url('tubiao')}}">统计报表</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-plane"></i> <span>运输管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{asset('car/carNum')}}">车辆记录</a></li>
            <li><a href="#">线路记录</a></li>
            <li><a href="#">货物跟踪</a></li>
            <li><a href="#">物流范围</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-th-list"></i> <span>清单管理</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#">配送单管理 </a></li>
            <li><a href="#">拣货单管理 </a></li>
            <li><a href="#">装车清单管理</a></li>
          </ul>
        </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>