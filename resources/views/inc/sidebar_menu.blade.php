
<!-- structure from https://www.codeply.com/go/7XYosZ7VH5 -->

<!-- Bootstrap row -->
<div class="row" id="body-row">
    <!-- Sidebar -->
    <div id="sidebar-container" class="sidebar-expanded d-none d-md-block col-2">
        <!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
        <!-- Bootstrap List Group -->
        <ul class="list-group sticky-top sticky-offset">
            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>SHOP</small>
            </li>
            <!-- /END Separator -->
            <!-- Menu with submenu -->
            <a href="#submenu1" data-toggle="collapse" aria-expanded="false" class="bg-light list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-dashboard fa-fw mr-3"></span>
                    <span class="menu-collapsed">Dashboard</span>
                    <span class="fa fa-caret-left ml-auto" ></span>
                </div>
            </a>

            <!-- Submenu content of Dashboard-->
            <div id="submenu1" class="collapse sidebar-submenu ">
                <a href="#" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed">Charts</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed">Reports</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed">Tables</span>
                </a>
            </div>


            <a href="/shop.starlit/public/products" class="bg-light list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-shopping-cart fa-fw mr-3"></span>
                    <span class="menu-collapsed" >Products</span>
                </div>
            </a>

            <a href="/shop.starlit/public/suppliers" class="bg-light list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-users fa-fw mr-3"></span>
                    <span class="menu-collapsed">Suppliers</span>
                </div>
            </a>

            <a href="#submenu2" data-toggle="collapse" aria-expanded="false" class=" list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-user fa-fw mr-3"></span>
                    <span class="menu-collapsed">Users</span>
                    <span class="fa fa-caret-left ml-auto"></span>
                </div>
            </a>
            <!-- Submenu content of Users-->
            <div id="submenu2" class="collapse sidebar-submenu">
                <a href="#" class="list-group-item list-group-item-action ">
                    <span class="menu-collapsed">Settings</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action">
                    <span class="menu-collapsed">Password</span>
                </a>
            </div>

            <!-- Separator with title -->
            <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                <small>OPTIONS</small>
            </li>
            <!-- /END Separator -->
            <a href="#" class="bg-light list-group-item list-group-item-action">
                <div class="d-flex w-100 justify-content-start align-items-center">
                    <span class="fa fa-calendar fa-fw mr-3"></span>
                    <span class="menu-collapsed">Calendar</span>
                </div>
            </a>

        </ul>
        <!-- List Group END-->
    </div>
    <!-- sidebar-container END -->

    <!-- MAIN -->
    <div class="col py-3" id="main">

    </div>
    <!-- Main Col END -->

</div>
<!-- body-row END -->
