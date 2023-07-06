<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    {{-- header --}}
    @include('user.header')

    {{-- home --}}
    @include('user.home')

    {{-- Menu --}}
    @include('user.components.menu')

    <!-- ======= Chefs Section ======= -->
    @include('user.components.chef')

     {{-- Testimonials --}}
     @include('user.components.testimonials')
    
    {{-- About Us --}}
    <section class="contact text-center mt-5">
        <h1>Contact Us</h1>
        <div class="map container mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d42350.58908432542!2d104.87953183601782!3d11.549819221810512!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3109519fe4077d69%3A0x20138e822e434660!2sRUPP%20(Royal%20University%20of%20Phnom%20Penh)!5e0!3m2!1sen!2skh!4v1674487077238!5m2!1sen!2skh"
            width="1200" 
            height="490" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade"
            title="map"></iframe>
        </div>
    </section>
    
    {{-- footer --}}
    @include('user.footer')

    {{-- boostrap --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="{{asset('js/main.js')}}"></script>

    {{-- Ajax --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</body>
</html> 