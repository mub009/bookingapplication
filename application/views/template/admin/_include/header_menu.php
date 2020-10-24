<div class="clearfix"> </div>
<div class="page-container">
    <div class="page-sidebar-wrapper">
        <div class="page-sidebar navbar-collapse collapse">
            <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true"
                data-slide-speed="200" style="padding-top: 20px">
                <li class="sidebar-toggler-wrapper hide">
                    <div class="sidebar-toggler">
                        <span></span>
                    </div>
                </li>
                <li class="heading">
                    <h3 class="uppercase" style="color: azure;"><b>
                            <center>Admin</center>
                        </b></h3>
                </li>
                <li id="NavMain" class="nav-item ">
                    <a href="<?=base_url('admin/dashboard')?>" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Features</h3>
                </li>
                <li id="NavEmployee" class="nav-item ">
                    <a href="<?=base_url() . 'admin/employee';?>" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="title">Employee</span>
                    </a>
                </li>
           
                <li id="NavMainStore" class="nav-item ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-users"></i>
                        <span class="title">Store</span>
                        <span id="ArrowMainStore" class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li id="NavStore" class="nav-item  ">
                            <a href="<?=base_url() . 'admin/store'?>" class="nav-link ">
                                <span class="title">Store</span>
                            </a>
                        </li>
                        <li id="NavStoreEmployees" class="nav-item  ">
                            <a href="<?=base_url() . 'admin/store/employee'?>" class="nav-link ">
                                <span class="title">Store Employees</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="NavMainGeneral" class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-diamond"></i>
                        <span class="title">General </span>
                        <span id="ArrowMainGeneral" class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li id="NavGeneralCountry" class="nav-item  ">
                            <a href="<?=base_url() . 'admin/general/country'?>" class="nav-link ">
                                <span class="title">Country</span>
                            </a>
                        </li>
                        <li id="NavGeneralState" class="nav-item  ">
                            <a href="<?=base_url() . 'admin/general/state'?>" class="nav-link ">
                                <span class="title">State</span>
                            </a>
                        </li>
                        <li id="NavGeneralCity" class="nav-item  ">
                            <a href="<?=base_url() . 'admin/general/city'?>" class="nav-link ">
                                <span class="title">City</span>
                            </a>
                        </li>
                        <li id="NavGeneralArea" class="nav-item  ">
                            <a href="<?=base_url() . 'admin/general/area'?>" class="nav-link ">
                                <span class="title">Area</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="NavMainGeneral" class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-book"></i>
                        <span class="title">Reservations</span>
                        <span id="ArrowMainGeneral" class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li id="NavGeneralCountry" class="nav-item  ">
                            <a href="<?=base_url() . 'admin/reservations/today'?>" class="nav-link ">
                                <span class="title">Today</span>
                            </a>
                        </li>
                        <li id="NavGeneralState" class="nav-item  ">
                            <a href="<?=base_url() . 'admin/reservations/all'?>" class="nav-link ">
                                <span class="title">All</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="NavMainGeneral" class="nav-item  ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="fa fa-calendar"></i>
                        <span class="title">Order</span>
                        <span id="ArrowMainGeneral" class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li id="NavGeneralCountry" class="nav-item  ">
                            <a href="<?=base_url() . 'admin/order/reservations'?>" class="nav-link ">
                                <span class="title">Reservations</span>
                            </a>
                        </li>
                        <li id="NavGeneralState" class="nav-item  ">
                            <a href="<?=base_url() . 'admin/order/store'?>" class="nav-link ">
                                <span class="title">Store</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="NavTax" class="nav-item ">
                    <a href="<?=base_url() . 'admin/setting';?>" class="nav-link">
                        <i class="fa fa-cogs"></i>
                        <span class="title">Settings</span>
                    </a>
                </li>
                
                <li id="NavTax" class="nav-item ">
                    <a href="<?=base_url() . 'admin/profile';?>" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="title">Profile </span>
                    </a>
                    <ul class="sub-menu">
                    </ul>
                </li>
            </ul>
            </li>
            </ul>
        </div>
    </div>