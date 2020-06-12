   <!-- header area start -->
           
            <!-- header area end -->
            <!-- page title area start -->
            <div class="page-title-area">
                <div class="row align-items-center">
                  {{--   <div class="col-md-3 col-sm-1 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        
                    </div> --}}

                    <div class="col-sm-6">
                     <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="row align-items-center">
                         <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Search..." required>
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    </div>
                    <div class="col-sm-6 clearfix">
                        <div class="user-profile pull-right">
                          

 @if(empty(Auth::user()->company->logo))
            
            <img class="avatar user-thumb" src="{{asset('avatar/man.jpg')}}">
          
            @else
            <img class="avatar user-thumb" src="{{asset('uploads/logo')}}/{{Auth::user()->company->logo}}">

            @endif





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
                </div>
            </div>