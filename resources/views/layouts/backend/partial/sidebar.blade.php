 <div class="sidebar-menu">
            <div class="sidebar-header">
                <div class="logo">
               <h4 class="user-name dropdown-toggle" data-toggle="dropdown">
                  @if(Auth::user()->role_id=='2')
                                    {{Auth::user()->company->cname}}
                                    
                                
                                @elseif(Auth::user()->role_id=='3')
                                    {{Auth::user()->name}}
                                    @else
                                    {{Auth::user()->name}}
                                @endif
            </h4>
                </div>
            </div>
            <div class="main-menu">
                <div class="menu-inner">
                    <nav>
                        <ul class="metismenu" id="menu">

                            @if(Request::is('admin*'))
                        

                           <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                                <a href="{{route('admin.dashboard')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                               
                            </li>  

                               <li>
                                <a href="{{route('admin.dashboard')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                               
                            </li>  


<li class="header">Paramétres</li>

 <li class="{{ Request::is('admin/profile') ? 'active' : '' }}">
                                <a href="{{route('admin.profile')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Profile</span></a>
                               
                            </li>  



                             <li>
                           <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                            </li>







                            @endif

                               @if(Request::is('company*'))

                                 <li class="{{ Request::is('company/dashboard') ? 'active' : '' }}">
                                <a href="{{route('company.dashboard')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                               
                            </li>  

                            <li class="{{ Request::is('company/jobs') ? 'active' : '' }}">
                                <a href="{{route('company.jobs')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Jobs</span></a>

                            </li> 

                            <li class="{{ Request::is('company/applicant') ? 'active' : '' }}">
                                <a href="{{route('company.applicant')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Applicants</span></a>
                               
                            </li> 
                           

 <li class="{{ Request::is('company/profile') ? 'active' : '' }}">
                                <a href="{{route('company.profile')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Profile</span></a>
                               
                            </li>  


<li class="header">Paramétres</li>






                            <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                            </li>





                            @endif

                               @if(Request::is('seeker*'))


    <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                                <a href="{{route('seeker.dashboard')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>dashboard</span></a>
                               
                            </li>  
 <li class="{{ Request::is('seeker/profile') ? 'active' : '' }}">
                                <a href="{{route('seeker.profile')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Profile</span></a>
                               
                            </li>
<li class="{{ Request::is('seeker/favoris') ? 'active' : '' }}">
                                <a href="{{route('seeker.favoris')}}" aria-expanded="true"><i class="ti-dashboard"></i><span>Favoris</span></a>
                               
  </li>
<li class="header">Paramétres</li>

  
                                    <li>
                           <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>
                            </li>


                            @endif


                         
                        </ul>
                    </nav>
                </div>
            </div>
        </div>