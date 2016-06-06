<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="treeview {{@$menuActive == 'dashboard' ? 'active':''}}">
        <a href="{{url('')}}">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
        </a>
      </li>
      @if($user_role === 'admin')
      <li class="treeview {{@$menuActive == 'sales' ? 'active':''}}">
        <a href="{{url('/sales')}}">
          <i class="fa fa-user"></i> <span>Sales</span>
        </a>
      </li>
      @endif
      <li class="treeview  {{@$menuActive == 'leads' ? 'active':''}}">
        <a href="{{url('/leads')}}">
          <i class="fa fa-users"></i> <span>Leads</span>
        </a>
      </li>
      <li class="treeview {{@$menuActive == 'customers' ? 'active':''}}">
        <a href="{{url('/customers')}}">
          <i class="fa fa-check"></i> <span>Customers</span>
        </a>
      </li>
      <li class="treeview  {{@$menuActive == 'oportunities' ? 'active':''}}">
        <a href="{{url('/oportunities')}}">
          <i class="fa fa-balance-scale"></i> <span>Oportunities</span>
        </a>
      </li>
      @if($user_role === 'admin')
      <li class="treeview  {{@$menuActive == 'products' ? 'active':''}}">
        <a href="{{url('/products')}}">
          <i class="fa fa-cart-plus"></i> <span>Products</span>
        </a>
      </li>
      <li class="treeview  {{@$menuActive == 'quotations' ? 'active':''}}">
        <a href="{{url('/quotations')}}">
          <i class="fa fa-dollar"></i> <span>Quotation</span>
        </a>
      </li>
      <li class="treeview  {{@$menuActive == 'reports' ? 'active':''}}">
        <a href="{{url('/reports')}}">
          <i class="fa fa-warning"></i> <span>Report</span>
        </a>
      </li>
      @endif
    </ul>
    <!-- /.sidebar -->
  </section>
</aside>
