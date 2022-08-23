 <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!-- User details -->
                

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title">Menu</li>

                            <li>
                                <a href="{{ route('dashboard') }}" class="waves-effect">
                                    <i class="ri-dashboard-line"></i>
                                    <span>Dashboard</span>
                                </a>
                            </li>


                            <!-- Supplier Sidebar Route -->
                           <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-hotel-fill"></i>
                                    <span>Manage Suppliers</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('supplier.all') }}">All Supplier</a></li>
                                    <li><a href="{{ route('stock.supplier.wise') }}">Supplier / Product Wise </a></li>
                                </ul>
                            </li>
                            <!--// Supplier Sidebar Route -->


                            <!-- Customer Sidebar Route -->
                             <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-shield-user-fill"></i>
                                    <span>Manage Customers</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('customer.all') }}">All Customers</a></li>
                                </ul>
                            </li>
                            <!--// Customer Sidebar Route -->

                            
                            <!-- Unit Sidebar Route -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-delete-back-fill"></i>
                                    <span>Manage Units</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('unit.all') }}">All Unit</a></li>
                                
                                </ul>
                            </li>
                            <!--// Unit Sidebar Route -->


                            <!-- Category Sidebar Route -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-apps-2-fill"></i>
                                    <span>Manage Category</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('category.all') }}">All Category</a></li>
                                
                                </ul>
                            </li>
                            <!--// Category Sidebar Route -->


                            <!-- Product Sidebar Route -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-reddit-fill"></i>
                                    <span>Manage Product</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('product.all') }}">All Product</a></li>
                                
                                </ul>
                            </li>
                            <!--// Product Sidebar Route -->


                            <!--// Purchase Sidebar Route -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-oil-fill"></i>
                                    <span>Manage Purchase</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('purchase.all') }}">All Purchase</a></li>
                                    <li><a href="{{ route('purchase.pending') }}">Approval Purchase</a></li>
                                    {{-- <li><a href="{{ route('daily.purchase.report') }}">Daily Purchase Report</a></li> --}}
                                
                                </ul>
                            </li>
                            <!--// Purchase Sidebar Route -->


                            <!--// Invoice Sidebar Route -->
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-compass-2-fill"></i>
                                    <span>Manage Invoice</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('invoice.all') }}">All Invoice</a></li>
                                    <li><a href="{{ route('invoice.pending.list') }}">Approval Invoice</a></li>
                                    <li><a href="{{ route('print.invoice.list') }}">Print Invoice List</a></li>
                                    <li><a href="{{ route('daily.invoice.report') }}">Daily Invoice Report</a></li>
                                </ul>
                            </li>
                            <!--// Invoice Sidebar Route -->


                            


                            
                            <li class="menu-title">Stock</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-gift-fill"></i>
                                    <span>Manage Stock</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{ route('stock.report') }}">Stock Report</a></li>
                                    <li><a href="{{ route('stock.supplier.wise') }}">Supplier / Product Wise </a></li>
                                </ul>
                            </li>






                            <!------------------------------------------------------------------------>
                            <!------------------------------------------------------------------------>
                            <!------------------------------------------------------------------------>
                            <!------------------------------------------------------------------------>
                            <!------------------------------------------------------------------------>
                            <!------------------------------------------------------------------------>
                            <!------------------------------------------------------------------------>
                            <!------------------------------------------------------------------------>
                            
                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-layout-3-line"></i>
                                    <span>Layouts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="true">
                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Vertical</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-dark-sidebar.html">Dark Sidebar</a></li>
                                            <li><a href="layouts-compact-sidebar.html">Compact Sidebar</a></li>
                                            <li><a href="layouts-icon-sidebar.html">Icon Sidebar</a></li>
                                            <li><a href="layouts-boxed.html">Boxed Layout</a></li>
                                            <li><a href="layouts-preloader.html">Preloader</a></li>
                                            <li><a href="layouts-colored-sidebar.html">Colored Sidebar</a></li>
                                        </ul>
                                    </li>

                                    <li>
                                        <a href="javascript: void(0);" class="has-arrow">Horizontal</a>
                                        <ul class="sub-menu" aria-expanded="true">
                                            <li><a href="layouts-horizontal.html">Horizontal</a></li>
                                            <li><a href="layouts-hori-topbar-light.html">Topbar light</a></li>
                                            <li><a href="layouts-hori-boxed-width.html">Boxed width</a></li>
                                            <li><a href="layouts-hori-preloader.html">Preloader</a></li>
                                            <li><a href="layouts-hori-colored-header.html">Colored Header</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>

                            <li class="menu-title">Pages</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-account-circle-line"></i>
                                    <span>Authentication</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="auth-login.html">Login</a></li>
                                    <li><a href="auth-register.html">Register</a></li>
                                    <li><a href="auth-recoverpw.html">Recover Password</a></li>
                                    <li><a href="auth-lock-screen.html">Lock Screen</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="ri-profile-line"></i>
                                    <span>Utility</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="pages-starter.html">Starter Page</a></li>
                                    <li><a href="pages-timeline.html">Timeline</a></li>
                                    <li><a href="pages-directory.html">Directory</a></li>
                                    <li><a href="pages-invoice.html">Invoice</a></li>
                                    <li><a href="pages-404.html">Error 404</a></li>
                                    <li><a href="pages-500.html">Error 500</a></li>
                                </ul>
                            </li>

                           

                            
                         

                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>