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
                            <center>Store</center>
                        </b></h3>
                </li>
                <li id="NavMain" class="nav-item ">
                    <a href="<?=base_url('store/dashboard')?>" class="nav-link nav-toggle">
                        <i class="icon-home"></i>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li class="heading">
                    <h3 class="uppercase">Features</h3>
                </li>
                <li id="NavUserStore" class="nav-item ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-users"></i>
                        <span class="title">User</span>
                        <span id="ArrowUserStore" class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li id="NavUserEmployee" class="nav-item  ">
                            <a href="<?=base_url() . 'store/user/employee';?>" class="nav-link ">
                                <span class="title">Employees</span>
                            </a>
                        </li>
                        <li id="NavUserServiceProvider" class="nav-item  ">
                            <a href="<?=base_url() . 'store/user/serviceprovider'?>" class="nav-link ">
                                <span class="title">Service Provider</span>
                            </a>
                        </li>
                    </ul>
                </li>
               
                <li id="NavTax" class="nav-item ">
                    <a href="<?=base_url() . 'store/ecommerce/products';?>" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="title">Products</span>
                    </a>
                </li>
                <li id="NavTax" class="nav-item ">
                    <a href="<?=base_url() . 'store/theme';?>" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="title">Theme</span>
                    </a>
                </li>
                <li id="NavTax" class="nav-item ">
                    <a href="<?=base_url() . 'store/categories';?>" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="title">categories</span>
                    </a>
                </li>
                <li id="NavTax" class="nav-item ">
                    <a href="<?=base_url() . 'store/service';?>" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="title">Service</span>
                    </a>
                </li>
                <li id="NavTax" class="nav-item ">
                    <a href="<?=base_url() . 'store/offer';?>" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="title">Offer</span>
                    </a>
                </li>
                <li id="NavUserStore" class="nav-item ">
                    <a href="javascript:;" class="nav-link nav-toggle">
                        <i class="icon-users"></i>
                        <span class="title">Reservation</span>
                        <span id="ArrowUserStore" class="arrow"></span>
                    </a>
                    <ul class="sub-menu">
                        <li id="NavUserEmployee" class="nav-item  ">
                            <a href="<?=base_url() . 'store/reservations/today';?>" class="nav-link ">
                                <span class="title">Today</span>
                            </a>
                        </li>
                        <li id="NavUserServiceProvider" class="nav-item  ">
                            <a href="<?=base_url() . 'store/reservations/all'?>" class="nav-link ">
                                <span class="title">All</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li id="NavTax" class="nav-item ">
                    <a href="<?=base_url() . 'store/layout';?>" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="title">Layout</span>
                    </a>
                </li>

            </ul>
            </li>
            </ul>
        </div>
    </div>