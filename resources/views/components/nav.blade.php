        <nav class="navbar-default navbar-static-side" role="navigation">

            <div class="sidebar-collapse">

                <ul class="nav metismenu" id="side-menu">

                    <li class="nav-header first">

                        <div class="dropdown profile-element">

                            <img alt="image" class="" src="{{ asset('assets/images/logo.png') }}" style="width: 70px;"/>

                            <a data-toggle="" class="dropdown-toggle" href="#">

                                <span class="block m-t-xs font-bold">@auth {{ Auth::user()->name }} @endauth</span>

                                <!-- <span class="text-muted text-xs block">Art Director <b class="caret"></b></span> -->

                            </a>

                            <!-- <ul class="dropdown-menu animated fadeInRight m-t-xs">

                                <li><a class="dropdown-item" href="profile.html">Profile</a></li>

                                <li><a class="dropdown-item" href="contacts.html">Contacts</a></li>

                                <li><a class="dropdown-item" href="mailbox.html">Mailbox</a></li>

                                <li class="dropdown-divider"></li>

                           		

                            </ul> -->

                        </div>

                        <div class="logo-element">

                         <img alt="image" class="" src="{{ asset('assets/images/logo.png') }}" style="width: 40px;"/>

                        </div>

                    </li>

                    <li class="active">

                        <a href="{{ url(Config::get('constants.ADMIN_PATH'))}}"><i class="fa fa-th-large"></i> <span class="nav-label">Tabeau de Board</span></a>

                        

                    </li>

                    <li class="active">

                        <a href="{{ url(Config::get('constants.ADMIN_PATH').'categories')}}"><i class="fa fa-chart-pie"></i> <span class="nav-label">Categories</span></a>

                    </li>

                    <li class="active">

                        <a href="{{ url(Config::get('constants.ADMIN_PATH').'posts')}}"><i class="fa fa-newspaper"></i> <span class="nav-label">Posts</span></a>

                    </li>

                    <li class="active">

                        <a href="{{ url(Config::get('constants.ADMIN_PATH').'tags')}}"><i class="fa fa-tags"></i> <span class="nav-label">Tags</span></a>

                    </li>

                    <li class="active">

                        <a href="{{ url(Config::get('constants.ADMIN_PATH').'mailings')}}"><i class="fa fa-envelope"></i> <span class="nav-label">Mailing</span></a>

                    </li>

                    

                    <li class="active">

                        <a href="{{ url(Config::get('constants.ADMIN_PATH').'backlinks')}}"><i class="fa fa-paperclip"></i> <span class="nav-label">Backlinks</span></a>

                    </li>

                    



                    <li >

                        <a href="#"><i class="fas fa-cogs"></i> <span class="nav-label">Autres</span> <span class="fa arrow"></span></a>

                        <ul class="nav nav-second-level">

                            @if(App\Helpers\Checker::checkAcces('users','liste'))

                            <li class="active"><a href="{{ url(Config::get('constants.ADMIN_PATH').'users')}}"> Utilisateurs </a></li>

                            @endif

                            <li class="active"><a href="{{ url(Config::get('constants.ADMIN_PATH').'roles')}}"> Roles </a></li>

                        </ul>

                    </li>

                  

                </ul>



            </div>

        </nav>