<section id="menu" class="menu">
    <div class="container" data-aos="fade-up">

      <div class="section-header">
        <h2>Our Menu</h2>
        <p>Check Our <span>Yummy Menu</span></p>
      </div>

      <ul class="nav nav-tabs d-flex justify-content-center" data-aos="fade-up" data-aos-delay="200">

        <li class="nav-item">
          <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#menu-breakfast">
            <h4>Breakfast</h4>
          </a><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-lunch">
            <h4>Lunch</h4>
          </a>
        </li><!-- End tab nav item -->

        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="tab" data-bs-target="#menu-dinner">
            <h4>Dinner</h4>
          </a>
        </li><!-- End tab nav item -->

      </ul>

      <div class="tab-content" data-aos="fade-up" data-aos-delay="300"><!-- End Starter Menu Content -->

        <div class="tab-pane fade active show" id="menu-breakfast">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Breakfast</h3>
          </div>

          <div class="row gy-5">
          @php
            $foodData = DB::table('menu_food')->where('type_food', '=', "Breakfast")->get();
          @endphp
          @foreach ($foodData as $foodItems)
            <div class="col-lg-4 menu-item">
              <div href="" class="glightbox"><img src="{{ asset('Images/imagesFood/'.$foodItems->img_food) }}" class="menu-img img-fluid" alt=""></div>
              <h4> {{ $foodItems->name }} </h4>
              <p class="price">
                {{ $foodItems->price }}$
              </p>
            </div>
          @endforeach
            <!-- Menu Item -->

            <!-- Menu Item -->

          </div>
        </div><!-- End Breakfast Menu Content -->

        <div class="tab-pane fade" id="menu-lunch">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Lunch</h3>
          </div>

          <div class="row gy-5">

            @php
              $foodData = DB::table('menu_food')->where('type_food', '=', "Lunch")->get();
            @endphp
            @foreach ($foodData as $foodItems)
              <div class="col-lg-4 menu-item">
                <div href="" class="glightbox"><img src="{{ asset('Images/imagesFood/'.$foodItems->img_food) }}" class="menu-img img-fluid" alt=""></div>
                <h4> {{ $foodItems->name }} </h4>
                <p class="price">
                  {{ $foodItems->price }}$
                </p>
              </div>
            @endforeach<!-- Menu Item -->

            <!-- Menu Item -->

          </div>
        </div><!-- End Lunch Menu Content -->

        <div class="tab-pane fade" id="menu-dinner">

          <div class="tab-header text-center">
            <p>Menu</p>
            <h3>Dinner</h3>
          </div>

          <div class="row gy-5">

            @php
              $foodData = DB::table('menu_food')->where('type_food', '=', "Dinner")->get();
            @endphp
            @foreach ($foodData as $foodItems)
              <div class="col-lg-4 menu-item">
                <div class="glightbox"> <img src="{{ asset('Images/imagesFood/'.$foodItems->img_food) }}" class="menu-img img-fluid" alt=""></div>
                <h4> {{ $foodItems->name }} </h4>
                <p class="price">
                  {{ $foodItems->price }}$
                </p>
              </div>
            @endforeach<!-- Menu Item -->

            <!-- Menu Item -->

          </div>
        </div><!-- End Dinner Menu Content -->

      </div>

    </div>
</section>
