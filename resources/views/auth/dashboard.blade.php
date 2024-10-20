<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAR Properties</title>
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- custom css link -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="new.css">
    <link rel="stylesheet" href="middle.css">
</head>
<body>
    
    <!-- header section starts -->

    <header class="header">

    <a href="#" class="nav__logo">
        <img src="images/logw.png" alt="logo" />
            <span>Rave Stay</span>
        </a>

        <nav class="navbar">
            <a href="#home">home</a>
            <a href="#about">about</a>
            <a href="#package">package</a>
            <a href="#menu">Explore</a>
            <a href="#gallery">gallery</a>
            <a href="#review">review</a>
        </nav>

        <div class="icons">
        <a href="{{route('login')}}"><div class="fas fa-user" id="login-btn"></div></a>
            <div class="fas fa-bars" id="menu-btn"></div>
        </div>

    

    </header>

    <!-- header section ends -->

    <!-- home section starts -->
    <section class="home" id="home">
        <div class="content">
        <h1 class="title">Rave Together </h1>
      <h1 class="title1">Stay Together</h1>
        </div>
    </section>

   

    <!-- home section ends -->

    <!-- banner section starts -->



    <!-- banner section ends -->

    <!-- about us section starts -->

    <section class="about" id="about">

    <h1 class="heading">about <span>us</span></h1>

        <div class="container">
            <div class="left"></div>
                <div class="right">
                    <div class="content">
                        <h1>About Us</h1>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur, autem laudantium culpa itaque adipisci magni corporis inventore distinctio odio, doloremque cum. Animi deserunt facere maiores vero sunt, illo quasi repudiandae?</p>
                        <a href="#" class="btn1">Click Me</a>
                    </div>
                </div>
            </div>
        

    </section>

    <!-- about us section ends -->

    <!-- package section starts -->
   
    <section class="package" id="package">

        <h1 class="heading"><span>our </span> packages</h1>
        @foreach($packages as $package)

        <div class="box-container">
            <div class="box">
                <div class="image">
                    <img src="{{ asset('storage/images/'.$package->image)}}" alt="">
                </div>
                <div class="content">
                    <h3>{{$package->name}}</h3>
                    <p>{{$package->desc}}</p>
                </div>
                <div class="price">
                    <h4>${{$package->price}}</h4>
                    <h5>/ hour</h5>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <a href="{{ route('add_to_cart', $package->id) }}" class="btn">book now</a>
                </div>
            </div>

           
           
        </div>
        @endforeach
    </section>
    
    <!-- package section ends -->
   
    <!-- menu section starts -->

    <section class="menu" id="menu">

        <h1 class="heading"><span>our </span> homestays</h1>

        <div class="box-container">

            <div class="box">
                <img src="images/pic4.jpg" alt="">
                <div class="content">
                    <h3>Homestay</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quidem, nihil.</p>
                    <a href="#" class="btn">View now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pic5.jpg" alt="">
                <div class="content">
                    <h3>Homestay</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quidem, nihil.</p>
                    <a href="#" class="btn">View now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pic6.jpg" alt="">
                <div class="content">
                    <h3>Homestay</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quidem, nihil.</p>
                    <a href="#" class="btn">View now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pic7.jpg" alt="">
                <div class="content">
                    <h3>Homestay</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quidem, nihil.</p>
                    <a href="#" class="btn">View now</a>
                </div>
            </div>

            <div class="box">
                <img src="images/pic8.jpg" alt="">
                <div class="content">
                    <h3>Homestay</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa quidem, nihil.</p>
                    <a href="#" class="btn">View now</a>
                </div>
            </div>

            

        </div>

    </section>

    <!-- menu section ends -->

    <!-- gallery section starts -->
    <h1 class="heading"><span> </span> </h1>

   
    <!-- review section ends -->






    <!-- footer section starts -->

    <section class="footer">

        <div class="box-container">

            <div class="box">
                <a href="#" class="nav__logo">
        <img src="images/logw.png" alt="logo" />
            <span>Rave Stay</span>
        </a>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda quos voluptas.</p>
                <div class="share">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-linkedin"></a>
                </div>
            </div>

            <div class="box">
                <h3>contact info</h3>
                <p><i class="fas fa-phone"></i> +123-456-1899</p>
                <p><i class="fas fa-envelope"></i> ravestay@gmail.com</p>
                <p><i class="fas fa-map"></i>Dubai,UAE</p>
            </div>

            <div class="box">
                <h3>newsletter</h3>
                <p>subscribe for latest updates</p>
                <form action="">
                    <input type="email" placeholder="enter your email" class="email">
                    <input type="submit" value="subscribe" class="btn">
                </form>
            </div>

        </div>

        <div class="credit">Copyright©<span>2024 RaveStay</span> All rights reserved.</div>

    </section>












    <!-- footer section ends -->




























    <!-- jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- custom js link -->
    <script src="script.js"></script>
</body>
</html>