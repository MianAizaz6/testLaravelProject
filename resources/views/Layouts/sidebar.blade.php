@extends('app');

@section('side')
    <!-- Sidebar user panel -->
    <div class="user-panel">
        <div class="image pull-left">
            <img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
        </div>
        <div class="info">
            <h4>Welcome</h4>
            <p>Mr. perfect</p>
        </div>
    </div>

    <!-- sidebar menu -->
    <ul class="sidebar-menu">
        <li class="active">
            <a href="index.html"><i class="fa fa-hospital-o"></i><span>Dashboard</span>
            </a>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-user-md"></i><span>User</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="form">Add User</a></li>
                <li><a href="list">User list</a></li>

            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-sitemap"></i><span>Purchase</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="./add-purchase-item.html">Add Item</a></li>
                <li><a href="./purchase-list.html">Purchase list</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-list-alt"></i> <span>Purchase Return</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="./add-purchase-return.html">Add Return Item</a></li>
                <li><a href="./purchase-return-list.html">Return list</a></li>

            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-check-square-o"></i><span>Sale</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="./add-sale.html">Add Item</a></li>
                <li><a href="./sale-list.html"> Item list</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-credit-card-alt"></i><span>Sale Return</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="./add-sale-return.html">Add Item</a></li>
                <li><a href="./sale-return-list.html">Return list</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-credit-card-alt"></i><span>Sanitory</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="add-sanitory.html">Add Item</a></li>
                <li><a href="sanitory-list.html">Item list</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-credit-card-alt"></i><span>Quotation</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="./quotation.html">New Quotation</a></li>
                <li><a href="./quotation-list.html">Quotation list</a></li>
            </ul>
        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-credit-card-alt"></i><span>Report</span>
                <span class="pull-right-container">

                </span>
            </a>

        </li>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-credit-card-alt"></i><span>Back Up</span>
                <span class="pull-right-container">

                </span>
            </a>

        </li>

        <li class="treeview">
            <a href="./est-clalculator.html">
                <i class="fa fa-credit-card-alt"></i><span>EST Calculator</span>
                <span class="pull-right-container">

                </span>
            </a>

        </li>




    </ul>
@endsection
