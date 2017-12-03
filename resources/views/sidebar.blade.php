<?php use App\Models\Base\Permission; $permission = new Permission; ?>

<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset("/img/user2-160x160.jpg") }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            @if ($permission->hasPermission(1) == true)
            <li>
              <a href="">
                <i class="fa fa-dashboard"></i><span>DashBoard</span>
              </a>
            </li>
            @endif
            @if ($permission->hasPermission(2) == true)
            <li>
              <a href="/pdv">
                <i class="fa fa-money"></i><span>Frente de Caixa</span>
              </a>
            </li> 
            @endif
            @if ($permission->hasPermission(3) == true)
            <li>
              <a href="/product">
                <i class="fa fa-barcode"></i><span>Produtos</span>
              </a>
            </li> 
            @endif
            @if ($permission->hasPermission(4) == true)
            <li>
              <a href="/category">
                <i class="fa fa-folder"></i><span>Categorias</span>
              </a>
            </li>  
            @endif
            @if ($permission->hasPermission(5) == true)
            <li>
              <a href="">
                <i class="fa fa-shopping-cart"></i><span>Vendas</span>
              </a>
            </li>  
            @endif
            @if ($permission->hasPermission(6) == true)
            <li>
              <a href="/purchase">
                <i class="fa fa-plus"></i><span>Compras</span>
              </a>
            </li> 
            @endif
            @if ($permission->hasPermission(7) == true)
            <li>
              <a href="/expense">
                <i class="fa fa-minus"></i><span>Despesas</span>
              </a>
            </li> 
            @endif
            @if ($permission->hasPermission(8) == true)
            <li class="treeview">
              <a href="#">
                <i class="fa fa-users"></i>
                <span>Pessoas</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/bunch"><i class="fa fa-circle-o"></i>Grupos</a></li>
                <li><a href="/user"><i class="fa fa-circle-o"></i>Usuários</a></li>
                <li><a href="/costumer"><i class="fa fa-circle-o"></i>Clientes</a></li>
                <li><a href="/supplier"><i class="fa fa-circle-o"></i>Fornecedores</a></li>
              </ul>
            </li> 
            @endif
            @if ($permission->hasPermission(9) == true)
            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart-o"></i>
                <span>Relátorios</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i>Vendas Diárias</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Vendas Mensais</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Produtos mais vendidos</a></li>
              </ul>
            </li>
            @endif
            @if ($permission->hasPermission(10) == true)
            <li class="treeview">
              <a href="#">
                <i class="fa fa-cogs"></i>
                <span>Configuração</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/company"><i class="fa fa-circle-o"></i>Empresa</a></li>
              </ul>
            </li> 
            @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>