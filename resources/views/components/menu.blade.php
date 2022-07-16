    <div class="menu shadow-sm p-3 mb-5 bg-body rounded">
        <nav class="navbar navbar-expand-md navbar-light container" aria-label="Fourth navbar example">
            <div class="container-fluid">
                <a class="navbar-brand logo" href="{{ url('/') }}">
                    <img src="{{ asset('/images/logo.png') }}" alt="" srcset="">
                </a>
                <button class="navbar-toggler text-dark" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse text-dark" id="navbarsExample04">
                    <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/services') }}">Expertise</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="{{ url('/focus') }}">Focus</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/about-us') }}" tabindex="-1"
                                aria-disabled="true">About
                                us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/team') }}" tabindex="-1"
                                aria-disabled="true">Team</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="{{ url('/contact-us') }}" tabindex="-1"
                                aria-disabled="true">Contact Us</a>
                        </li>
                        {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-bs-toggle="dropdown"
                                aria-expanded="false">Contact Us</a>
                            <ul class="dropdown-menu" aria-labelledby="dropdown04">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li> --}}
                    </ul>
                    <form class="navbar-nav ms-auto">
                        @guest
                            @if (Route::has('login'))
                                {{-- <li class="nav-item">
                                    <a class="color-secondary nav-link"
                                        href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li> --}}
                            @endif
                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li class="nav-item">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-blue btn-sm text-white" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Donate
                            </button>
                        </li>
                    </form>
                </div>
            </div>
        </nav>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-blue f-w-200 uppercase" id="exampleModalLabel">Donation Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="pay-detail">
                        <img src="{{ 'images/airtel.jpeg' }}"
                            class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                            alt="">
                        <span>+256 702 152 894</span>
                    </div>
                    <div class="pay-detail">
                        <img src="{{ 'images/mtn.jpeg' }}"
                            class="img-fluid ${3|rounded-top,rounded-right,rounded-bottom,rounded-left,rounded-circle,|}"
                            alt="">
                        <span>+256 782 494 211</span>
                    </div>

                </div>
                <div class="modal-footer">
                    <p class="text-blue">Thank you for your donation!</p>
                </div>
            </div>
        </div>
    </div>
