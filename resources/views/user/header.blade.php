<div class="header">
    <header>
        <div class="nav-bar">
            <div class="logo mt-1">                       
                <h2>Food</h2>
            </div> 
            <nav>
                <ul class="d-flex text-secondary">
                    <li><a href=" {{ route('index_user') }}">Home</li></a>
                    <li><a href="{{ route('menu_user') }}">Menu</li></a>
                    <li><a href="{{ route('hall_user') }}">Hall</li></a>
                </ul>
            </nav>

        <div class="order_item ms-5">
            
            <button type="button" class="btn btn-outline-secondary me-3"><i class="fa-solid fa-bell p-2 "></i></button>
            <div class="alert_number position-absolute ms-4 mb-3 text-danger">0</div>

                <div class="alart position-relative d-flex justify-center">
                    <!-- Button MyOrder trigger modal -->
                <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#myOrder">
                    <i class="fa-solid fa-cart-shopping"></i>
                </button>              
                    <div class="alert_number position-absolute ms-4 mb-3 text-danger">0</div> 
                </div>
                <div class="ms-4">
                    <button type="button" class="booking btn btn-outline-secondary">History</button>
                </div>
            </div>
            <div class="registration_form">  
                @if (Route::has('login'))
                    <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right mt-2 z-10">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500 ">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </header>
</div>

