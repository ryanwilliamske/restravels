<nav class="navbar navbar-expand-md navbar-light">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('images/AST Logo.png') }}" alt="Aspera Travels Logo" width="50px" id="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <!--
                            This is the search key input on the navbar
                            It performs two operation: 
                                    ~Dynamic dropdown for products
                                    ~Submits and presents results from a particular search
                          -->
                        
                          <form action=" {{ route('search') }}" method="GET" class="form-inline my-2 my-lg-0 ml-auto">
                            @csrf
                            <div class="aa-input-container" id="aa-input-container">
                                <input type="search" id="aa-search-input" class="aa-input-search" placeholder="Search for services..." name="service" autocomplete="off" 
                                value=" {{ request()->input('service') }}"
                                />
                                    <svg class="aa-input-icon" viewBox="654 -372 1664 1664">
                                        <path d="M1806,332c0-123.3-43.8-228.8-131.5-316.5C1586.8-72.2,1481.3-116,1358-116s-228.8,43.8-316.5,131.5  C953.8,103.2,910,208.7,910,332s43.8,228.8,131.5,316.5C1129.2,736.2,1234.7,780,1358,780s228.8-43.8,316.5-131.5  C1762.2,560.8,1806,455.3,1806,332z M2318,1164c0,34.7-12.7,64.7-38,90s-55.3,38-90,38c-36,0-66-12.7-90-38l-343-342  c-119.3,82.7-252.3,124-399,124c-95.3,0-186.5-18.5-273.5-55.5s-162-87-225-150s-113-138-150-225S654,427.3,654,332  s18.5-186.5,55.5-273.5s87-162,150-225s138-113,225-150S1262.7-372,1358-372s186.5,18.5,273.5,55.5s162,87,225,150s113,138,150,225  S2062,236.7,2062,332c0,146.7-41.3,279.7-124,399l343,343C2305.7,1098.7,2318,1128.7,2318,1164z" />
                                    </svg>
                              </div>
                             </form>         
                    



                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                     <!--Stuff on display-->
                     <li class="nav-item active">
                        <a class="nav-link " href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                     </li>

                     <li class="nav-item ">
                        <a class="nav-link" href="{{ url('/about') }}">About Us</a>
                     </li>

                     <li class="nav-item ">
                       <a class="nav-link" href="{{ url('/services') }}">Services</a>
                     </li>

                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                         <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->fname }} <span class="caret"></span>
                                </a>


                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                   
                                    <a class="dropdown-item"  href=" {{ route('profile.show') }} ">Profile</a>
                                </div>
                            </li>
                        
                            </ul>
                           
                        @endguest
                </div>
            </div>
        </nav>