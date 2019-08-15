<div id="app">
    <aside class="main-sidebar fixed offcanvas shadow" data-toggle='offcanvas'>
        <section class="sidebar">
            <div class="w-80px mt-3 mb-3 ml-3">
                {{-- <img src="assets/img/basic/logo.png" alt=""> --}}
            </div>
            <div class="relative">
                <a data-toggle="collapse" href="#userSettingsCollapse" role="button" aria-expanded="false"
                    aria-controls="userSettingsCollapse"
                    class="btn-fab btn-fab-sm absolute fab-right-bottom fab-top btn-primary shadow1 ">
                    <i class="fas fa-cog"></i>
                </a>
                <div class="user-panel p-3 light mb-2">
                    <div>
                        {{-- <div class="float-left image">
                            <img class="user_avatar" src="assets/img/dummy/u2.png" alt="User Image">
                        </div> --}}
                        <div class="float-left info">
                            <h6 class="font-weight-light mt-2 mb-1">Hello, Admin</h6>
                            {{-- <h6 class="font-weight-light mt-2 mb-1">Hello, {{auth()->user()->username}}</h6> --}}


                            <a href="#"><i class="icon-circle text-primary blink"></i> Online</a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="collapse multi-collapse" id="userSettingsCollapse">
                        <div class="list-group mt-3 shadow">
                            <a href="/sentto" class="list-group-item list-group-item-action ">
                                <i class="icon mr-2 fas fa-envelope-open-text text-blue"></i>Sent To Setting
                            </a>
                            <a href="#" class="list-group-item list-group-item-action"><i
                                    class="mr-2 icon-cogs text-yellow"></i>Settings</a>
                            <a href="/changepassword" class="list-group-item list-group-item-action"><i
                                    class="mr-2 icon-security text-purple"></i>Change Password</a>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="sidebar-menu">
                <li class="header"><strong>MAIN NAVIGATION</strong></li>
                <li class="treeview"><a href="/admin">
                        <i class="icon fas fa-chart-line purple-text"></i> <span>Dashboard</span>
                    </a></li>
                <li class="treeview"><a href="#"><i class="icon fas fa-coffee red-text"></i>
                        <span>Our Story</span> <i class="icon icon-angle-left s-18 pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="/admin/ourcoffee"><i class=""></i>
                                <span>Our Coffee</span></a>
                        </li>
                        <li class="treeview"><a href="/admin/early"><i class=""></i>
                                <span>Early Days</span></a>
                        </li>
                        <li class="treeview"><a href="/admin/now"><i class=""></i>
                                <span>Now</span></a>
                        </li>
                        <li class="treeview"><a href="/admin/people"><i class=""></i>
                                <span>#PeopleOfOmbe</span></a>
                        </li>
                    </ul>
                </li>
                <li class="treeview"><a href="/admin/storelocation""><i class=" icon fas fa-map-marked-alt
                        black-text"></i>
                        <span>Store Location</span></a>
                </li>
                <li class="treeview"><a href="#"><i class="icon fas fa-equals yellow-text"></i>
                        <span>Merch</span> <i class="icon icon-angle-left s-18 pull-right"></i></a>
                    <ul class="treeview-menu">
                        <li class="treeview"><a href="/admin/merchkategori"><i class=""></i>
                                <span>Merch Kategori</span></a></li>
                        <li class="treeview"><a href="/admin/merch""><i class=""></i>
                                <span>Merch List</span></a></li>
                    </ul>
                </li>
                <li class=" treeview"><a href="/admin/subscription""><i class=" icon fas fa-credit-card
                                    green-text"></i>
                                    <span>Subscription</span></a>
                        </li>
                        <li class="treeview"><a href="#"><i class="icon fas fa-file blue-text"></i>
                                <span>Careers</span> <i class="icon icon-angle-left s-18 pull-right"></i></a>
                            <ul class="treeview-menu">
                                <li class="treeview"><a href="/admin/careers""><i class=""></i>
                                <span>Careers List</span></a>
                            </li>
                            <li class=" treeview"><a href="/admin/applicants""><i class=""></i>
                                <span>Applicants List</span></a>
                            </li>
                        </ul> 
                </li>
                <li class=" treeview">
                    <a href="/admin/project"><i class=""></i>
                    <span>Project</span></a>
                </li>
                <li class=" treeview">
                    <a href="/admin/guides"><i class=""></i>
                    <span>Guides</span></a>
                </li>
        </section>
    </aside>
    <!--Sidebar End-->
