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
            <li class="treeview">
              <a href="#">
                <i class="fa fa-gear"></i>
                <span>Gestão Empresarial</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/costumer"><i class="fa fa-circle-o"></i>Clientes</a></li>
                <li><a href="/supplier"><i class="fa fa-circle-o"></i>Fornecedores</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Transportadoras</a></li>
                <li><a href="/product"><i class="fa fa-circle-o"></i>Produtos</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Serviços</a></li>
                <li><a href="/category"><i class="fa fa-circle-o"></i>Categorias</a></li>
                <li><a href="/user"><i class="fa fa-circle-o"></i>Usuários</a></li>
                <li><a href="/bunch"><i class="fa fa-circle-o"></i>Grupos</a></li>
                @if ($permission->hasPermission(6) == true)
                    <li><a href="/purchase"><i class="fa fa-circle-o"></i>Compras</a></li>
                @endif
                @if ($permission->hasPermission(7) == true)
                    <li><a href="/expense"><i class="fa fa-circle-o"></i>Despesas</a></li>
                @endif
              </ul>
            </li>    
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dollar"></i>
                <span>Gestão Comercial</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href=""><i class="fa fa-circle-o"></i>Pedido</a></li>
                <li><a href="/supplier"><i class="fa fa-circle-o"></i>Orçamento</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Ordem de Serviço</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Comanda</a></li>
              </ul>
            </li>     
            <li class="treeview">
              <a href="#">
                <i class="fa fa-dollar"></i>
                <span>Financeiro</span>
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="/cashier"><i class="fa fa-circle-o"></i>Frente de Caixa</a></li>
                <li><a href=""><i class="fa fa-circle-o"></i>Relátorios Financeiros</a></li>
              </ul>
            </li>                               
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
                <li><a href=""><i class="fa fa-circle-o"></i>Sistema</a></li>
              </ul>
            </li> 
            @endif
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>