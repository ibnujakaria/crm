<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="treeview {{@$menuActive == 'dashboard' ? 'active':''}}">
        <a href="{{url('admin')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      <li class="treeview {{@$menuActive == 'sales' ? 'active':''}}">
        <a href="{{url('admin/sales')}}">
          <i class="fa fa-user"></i> <span>Sales</span>
        </a>
      </li>
      <li class="treeview  {{@$menuActive == 'leads' ? 'active':''}}">
        <a href="{{url('admin/leads')}}">
          <i class="fa fa-users"></i> <span>Leads</span>
        </a>
      </li>
      <li class="treeview {{@$menuActive == 'customers' ? 'active':''}}">
        <a href="{{url('admin/customers')}}">
          <i class="fa fa-check"></i> <span>Customers</span>
        </a>
      </li>
      <li class="treeview  {{@$menuActive == 'promo-campaign' ? 'active':''}}">
        <a href="{{url('admin/promo-campaign')}}">
          <i class="fa fa-area-chart"></i> <span>Campaigns</span>
        </a>
      </li>
      <li class="treeview  {{@$menuActive == 'activities' ? 'active':''}}">
        <a href="{{url('admin/activities')}}">
          <i class="fa fa-calendar"></i> <span>Activites</span>
        </a>
      </li>
    </ul>
    <!-- /.sidebar -->
  </section>
</aside>
