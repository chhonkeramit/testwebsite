<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- font awesome cdn -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<title>papa pancho's kitchen (Indian street food)</title>
</head>
<body>

		<header class="d-flex">
		<a href="#" class="logo"><img src="logo.png"></a>
		<div class="toggle" onclick="toggleclick()"></div>
		<ul class="menu">
			<li><a href="#home" onclick="toggleclick()">Home</a></li>
			<li><a href="#about" onclick="toggleclick()">About Us</a></li>
			<li><a href="#menucontainer" onclick="toggleclick()">Menu</a></li>

			<li><a href="#contact" onclick="toggleclick()">Contact Us</a></li>

		</ul>
	</header>

	<section class="banner" id="home">
		<div class="textBx">
			<h2>Desi Indian Punjabi Food<br><span>That give you the feel of India</span></h2>
			<h3>Desi food with Real Punjabi Tadkaa</h3>
      <a href="#about" class="btn btn-primary">Explore more</a>
      
		</div>

		<div class="social">
				<img id="one" style="width: 60px;height: 60px;cursor: pointer;margin: 10px;" src="socialicon/facebook.png">
				<img id="two" style="width: 60px;height: 60px;cursor: pointer;margin: 10px;" src="socialicon/instagram-sketched.png">
				<img id="three" style="width: 60px;height: 60px;cursor: pointer;margin: 10px;" src="socialicon/call.png">
			
			</div>
	</section>


<!-- Start About us -->
  <section class="abouty" id="about">
		<div class="headings text-center">
			<h2>About Us</h2>
		</div>
		<div class="py-5" id="venue">
    <div class="container">
        <div class="row bg-primary animate-in-down">
            <div class="p-4 col-md-6 align-self-center text-color">
                <p class="m-0">Feel comfortable, and purchase items</p>
                <h2>Discover the products</h2>
                <p class="my-4">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here</p> <a href="#menucontainer" class="btn mb-3 p-2 btn-light">View the menu</a>
            </div>
            <div class="p-0 col-md-6">
                <div class="carousel slide" data-ride="carousel" id="carousel1">
                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item"> <img class="d-block img-fluid w-100" src="images/catering.jpg" alt="first slide">
                            <div class="carousel-caption">
                                <h1>Cattering Services</h1>
                                
                            </div>
                        </div>
                        <div class="carousel-item active"> <img class="d-block img-fluid w-100" src="images/tiffin.jpg" data-holder-rendered="true">
                            <div class="carousel-caption">
                                <h1>Tiffin Services</h1>
                                <!-- <p>Enjoy our long drink</p> -->
                            </div>
                        </div>
                        <div class="carousel-item"> <img class="d-block img-fluid w-100" src="images/Thali.jpg" data-holder-rendered="true">
                            <div class="carousel-caption">
                                <h1>Check Out Our Meal Plans</h1>
                                <!-- <p>Tastes it better</p> -->
                            </div>

                        </div>
                    </div> <a class="carousel-control-prev" href="#carousel1" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a> <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                </div>
            </div>
        </div>
    </div>
</div>


	</section>


  <!-- End About us -->

 <section class="ftco-section" id="menucontainer">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 ftco-animate">
            <h2 class="display-4">Today's Menu</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Far far away,From the world of mountains and from the land of Yoga and Spirituality.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-12 text-center">

            <ul class="nav ftco-tab-nav nav-pills mb-5" id="pills-tab" role="tablist">
              <li class="nav-item ftco-animate">
                <a class="nav-link active" id="pills-breakfast-tab" data-toggle="pill" href="#pills-breakfast" role="tab" aria-controls="pills-breakfast" aria-selected="true">Appetizers</a>
              </li>
              <li class="nav-item ftco-animate">
                <a class="nav-link" id="pills-lunch-tab" data-toggle="pill" href="#pills-lunch" role="tab" aria-controls="pills-lunch" aria-selected="false">Combos</a>
              </li>
              <li class="nav-item ftco-animate">
                <a class="nav-link" id="pills-dinner-tab" data-toggle="pill" href="#pills-dinner" role="tab" aria-controls="pills-dinner" aria-selected="false">Indo Chinese</a>
              </li>
            
            <li class="nav-item ftco-animate">
                <a class="nav-link" id="pills-curries-tab" data-toggle="pill" href="#pills-curries" role="tab" aria-controls="pills-curries" aria-selected="false">Curries</a>
              </li>
            
            <li class="nav-item ftco-animate">
                <a class="nav-link" id="pills-rice-tab" data-toggle="pill" href="#pills-rice" role="tab" aria-controls="pills-dinner" aria-selected="false">Rice and Bread Corner</a>
              </li>
            
            <li class="nav-item ftco-animate">
                <a class="nav-link" id="pills-dessert-tab" data-toggle="pill" href="#pills-dessert" role="tab" aria-controls="pills-dinner" aria-selected="false">Dessert</a>
              </li>
            
            <li class="nav-item ftco-animate">
                <a class="nav-link" id="pills-beverages-tab" data-toggle="pill" href="#pills-beverges" role="tab" aria-controls="pills-dinner" aria-selected="false">Beverages</a>
              </li>
            </ul>

            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="pills-breakfast" role="tabpanel" aria-labelledby="pills-breakfast-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/Aloo Tikki Chaat.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Aloo Tikki Chaat</h5>
                        <p>Simple and tasty street food prepared from potato with other chaat chutneys, yogurt and spices.</p>
                        <h6 class="text-primary menu-price">$6.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Chaat Papri.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Chaat Papri</h5>
                        <p>popular street food is made with crispy papri (wheat crackers), sev (thin gram flour noodles), yogurt, and a variety of chutneys.</p>
                        <h6 class="text-primary menu-price">$6.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Samosa Chaat.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Samosa Chaat</h5>
                        <p>Chopped up samosas (savory fried pastries filled with potatoes and peas), and topped with chutney, yogurt, and sev (those thin fried potato bits).</p>
                        <h6 class="text-primary menu-price">$6.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Bhel puri.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Bhel puri</h5>
                        <p>Chaat snack made with puffed rice, chaat chutneys, veggies & Sev.</p>
                        <h6 class="text-primary menu-price">$5.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Vada pav.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Vada pav</h5>
                        <p>Indian-inspired burger combines lightly spiced mashed potatoes, veggies and special spice mix. The whole is topped with a creamy yogurt and coriander-based garnish and sandwiched between warm buns.</p>
                        <h6 class="text-primary menu-price">$3.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Desi burger.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Desi burger</h5>
                        <p>Chopped up samosas (savory fried pastries filled with potatoes and peas), and topped with chutney, yogurt, and sev (those thin fried potato bits).</p>
                        <h6 class="text-primary menu-price">$6.99</h6>
                      </div>
                    </div>

                      <div class="media menu-item">
                      <img class="mr-3" src="images/Tandoori Soya Chaap.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Tandoori Soya Chaap</h5>
                        <p>Protein rich soya chunks marinated with yogurt and tandoori spices and then grilled until charred in our clay oven. Onion, bell peppers and tomatoes are also added to the marination and served with green chutney.</p>
                        <h6 class="text-primary menu-price">$12.99</h6>
                      </div>
                    </div>

                      <div class="media menu-item">
                      <img class="mr-3" src="images/Soya chilli chaap.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Soya chilli chaap</h5>
                        <p>Protein rich soya chunks stir-fried in indo-Chinese sauces. Onion, bell peppers and tomatoes are also added to the marination and served with green chutney.</p>
                        <h6 class="text-primary menu-price">$12.99</h6>
                      </div>
                    </div>

                      <div class="media menu-item">
                      <img class="mr-3" src="images/Malai Soya Chaap.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Malai Soya Chaap</h5>
                        <p>Protein rich soya chunks marinated with yogurt and mild tandoori spices and then grilled until charred in our clay oven and then tossed in cream. Onion, bell peppers and tomatoes are also added to the marination and served with green chutney.</p>
                        <h6 class="text-primary menu-price">$12.99</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 ftco-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/Desi grilled sandwich.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Desi grilled sandwich</h5>
                        <p>Gooey match made in heaven, filled with cheese, finely chopped veggies and our special spice mix. It starts with a sturdy bread, lots of cheese and a smear of butter and mayonnaise.</p>
                        <h6 class="text-primary menu-price">$6.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Kathi roll.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Kathi roll</h5>
                        <p>Warm, layered parathas filled with spicy paneer, mixed peppers, sweet caramelized onions, special spice mix and inhouse dressings</p>
                        <h6 class="text-primary menu-price">$7.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Veg pakora.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Veg pakora 4pc</h5>
                        <p>Chickpea fritters filled with chopped potatoes, onions, spinach, and cilantro and served with our special sauces.</p>
                        <h6 class="text-primary menu-price">$3.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Gobi pakora.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Gobi pakora</h5>
                        <p>Chickpea fritters filled with cauliflower and cilantro and served with our special sauces.</p>
                        <h6 class="text-primary menu-price">$4.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Paneer pakora.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Paneer pakora 4pc</h5>
                        <p>Chickpea fritters filled with slices of panner and cilantro and served with our special sauces.</p>
                        <h6 class="text-primary menu-price">$4.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Aloo pakora.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Aloo pakora</h5>
                        <p>Chickpea fritters filled with thinly sliced potatoes and cilantro and served with our special sauces.</p>
                        <h6 class="text-primary menu-price">$3.99</h6>
                      </div>
                    </div>

                  <div class="media menu-item">
                      <img class="mr-3" src="images/Stuffed Bread pakora.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Stuffed Bread pakora 4pc</h5>
                        <p>Chickpea fritters filled with mashed potatoes sandwiched between bread and served with our special sauces.</p>
                        <h6 class="text-primary menu-price">$3.99</h6>
                      </div>
                    </div>

                <div class="media menu-item">
                      <img class="mr-3" src="images/Tandoori Paneer Tikka.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Tandoori Paneer Tikka </h5>
                        <p>Indian cottages cheese marinated with yogurt and tandoori spices and then grilled until charred in our clay oven. Onion, bell peppers and tomatoes are also added to the marination and served with green chutney.</p>
                        <h6 class="text-primary menu-price">$12.99</h6>
                      </div>
                    </div>

                <div class="media menu-item">
                      <img class="mr-3" src="images/Tandoori Mushroom Tikka.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Tandoori Mushroom Tikka</h5>
                        <p>Mushrooms marinated with yogurt and tandoori spices and then grilled until charred in our clay oven. Onion, bell peppers and tomatoes are also added to the marination and served with green chutney.</p>
                        <h6 class="text-primary menu-price">$12.99</h6>
                      </div>
                    </div>


                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-lunch" role="tabpanel" aria-labelledby="pills-lunch-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Chana Bhatura.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Chana Bhatura</h5>
                        <p>Traditional chana masala is served with a puffy Indian yeast bread. It is food to die for.</p>
                        <h6 class="text-primary menu-price">$8.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Chana puri.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Chana puri</h5>
                        <p>Traditional chana masala is served with a puffy Indian flat bread.</p>
                        <h6 class="text-primary menu-price">$8.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Stuffed Kulcha Chana.jpeg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Stuffed Kulcha Chana</h5>
                        <p>The spicy and lemony Chickpeas filled in or served on side with butter roasted kulcha/yeast bread.</p>
                        <h6 class="text-primary menu-price">$5.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Pav Bhaji.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Pav Bhaji</h5>
                        <p>Mashed vegetable dish, served piping hot with a dollop of butter, diced red onions, cilantro, a squeeze of lime and pav(dinner rolls) on the side.</p>
                        <h6 class="text-primary menu-price">$8.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Stuffed Parantha with yogurt.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Stuffed Parantha with yogurt</h5>
                        <p>Indian breakfast flatbreads made with whole wheat flour, and stuffed with mashed potatoes, spices & herbs.</p>
                        <h6 class="text-primary menu-price">$6.99</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Rajma Chawal.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Rajma Chawal</h5>
                        <p>Kidney beans masala and curry served with cooked rice. A comfort food that comes together in a jiffy.</p>
                        <h6 class="text-primary menu-price">$8.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Chana Masala Rice.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Chana Masala Rice</h5>
                        <p>Chickpea masala and curry served with cooked rice.</p>
                        <h6 class="text-primary menu-price">$35.50</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Black Chana Rice.jpeg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Black Chana Rice</h5>
                        <p>black chickpea masala curry served with cooked rice.</p>
                        <h6 class="text-primary menu-price">$8.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Thali.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Thali</h5>
                        <p>6 different flavours of sweet, salt, bitter, sour, astringent and spicy on one single plate (dal, paneer makhni, rice, naan, yogurt, salad).</p>
                        <h6 class="text-primary menu-price">$12.99</h6>
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-dinner" role="tabpanel" aria-labelledby="pills-dinner-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Hakka Noodles.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Hakka Noodles</h5>
                        <p>Noodles wok tossed and stir fried with sauces and vegetables.</p>
                        <h6 class="text-primary menu-price">$9.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Manchurian.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Manchurian</h5>
                        <p>Addictive wisps of vegetables formed into dumplings and dunked into a sauce that explodes with hot, sweet, sour and salty flavors.</p>
                        <h6 class="text-primary menu-price">$11.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Honey Chili potato.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Honey Chili potato</h5>
                        <p>Crispy Fried Potatoes cooked with spring onion and bell peppers in a sweet and spicy sauce.. Sweet and spicy flavor combination makes it awfully delicious.</p>
                        <h6 class="text-primary menu-price">$10.99</h6>
                      </div>
                    </div>

                      <div class="media menu-item">
                      <img class="mr-3" src="images/Spring roll.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Spring roll</h5>
                        <p>Deep fried filled, rolled dim sum served with mouth watering sauces.</p>
                        <h6 class="text-primary menu-price">$4.99</h6>
                      </div>
                    </div>

                      <div class="media menu-item">
                      <img class="mr-3" src="images/Momos dumplings.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Momos/dumplings</h5>
                        <p>Deep fried filled dumplings served with mouth watering sauces.</p>
                        <h6 class="text-primary menu-price">$10.99</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Deep fried Tofu.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Deep fried Tofu</h5>
                        <p>Crispy deep fried tofu wok tossed in tsuyu sauce with grated radish and  green onion.</p>
                        <h6 class="text-primary menu-price">$9.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Cheese chill.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Cheese chill GRAVY/DRY</h5>
                        <p>Seasoned deep fried paneer wok tossed in sauces with diced vegetables.</p>
                        <h6 class="text-primary menu-price">$11.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Mushroom chilli.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Mushroom chilli	DRY/GRAVY</h5>
                        <p>Seasoned deep fried mushroom wok tossed in sauces with diced vegetables.</p>
                        <h6 class="text-primary menu-price">$11.99</h6>
                      </div>
                    </div>


                   <div class="media menu-item">
                      <img class="mr-3" src="images/Fried rice.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Fried rice</h5>
                        <p>Long grained rice, mixture of warm peas, carrots and onions wok tossed all together.</p>
                        <h6 class="text-primary menu-price">$8.99</h6>
                      </div>
                    </div>

                  <div class="media menu-item">
                      <img class="mr-3" src="images/Honey chilli cauliflower.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Honey chilli cauliflower(seasonal)</h5>
                        <p>Crispy Fried cauliflower cooked with spring onion and bell peppers in a sweet and spicy sauce. Sweet and spicy flavor combination makes it awfully delicious.</p>
                        <h6 class="text-primary menu-price">$12.99</h6>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
                


               <div class="tab-pane fade" id="pills-curries" role="tabpanel" aria-labelledby="pills-curries-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Malai kofta.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Malai kofta</h5>
                        <p>Fried balls made of potato and paneer are deep fried and served with a creamy curry.</p>
                        <h6 class="text-primary menu-price">$11.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Shahi paneer.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Shahi paneer/mushroom</h5>
                        <p>Originated in the royal kitchens, unmelting paneer is marinated in a creamy shahi gravy.</p>
                        <h6 class="text-primary menu-price">$11.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/butter mushroom.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Butter paneer/mushroom</h5>
                        <p>Paneer in sweet creamy gravy prepared with butter makhan, tomatoes and  cream.</p>
                        <h6 class="text-primary menu-price">$13.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Cream paneer.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Cream paneer/mushroom</h5>
                        <p>White creamy gravy from onion and cashew-melon seed paste along with khoya, cream and whole spices.</p>
                        <h6 class="text-primary menu-price">$13.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Paneer makhni.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Paneer makhani / Mushroom maki</h5>
                        <p>A Royal treat of soft Paneer cubes dunked in creamy and aromatic sauce.</p>
                        <h6 class="text-primary menu-price">$11.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Mix veg.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Mix veg</h5>
                        <p>A mixture of vegetables wok tossed together in a traditional Indian onion-tomato gravy.</p>
                        <h6 class="text-primary menu-price">$12.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/veg korma.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Veg korma</h5>
                        <p>Mixed vegetables, spices, coconut, poppy seeds or cashews & herbs sautéed together into a epitome of flavor.</p>
                        <h6 class="text-primary menu-price">$11.99</h6>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Saag.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Saag</h5>
                        <p>A very healthy curry of cooked greens layered in flavor.</p>
                        <h6 class="text-primary menu-price">$10.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Saag paneer.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Saag paneer/mushroom</h5>
                        <p>Paneer cubes dipped in a very healthy curry of cooked greens layered in flavor.</p>
                        <h6 class="text-primary menu-price">$11.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Kadai paneer.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Kadai paneer/Mushroom</h5>
                        <p>Semi dry curry made with firm cottage cheese, onions, tomatoes, capsicum (green bell peppers) and freshly powdered kadai masala.</p>
                        <h6 class="text-primary menu-price">$11.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Aloo gobi.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Aloo gobi</h5>
                        <p>Embodiment of perfectly spiced potato & cauliflower stir fry.</p>
                        <h6 class="text-primary menu-price">$12.99</h6>
                      </div>
                    </div>

                     <div class="media menu-item">
                      <img class="mr-3" src="images/Chana masala.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Chana masala</h5>
                        <p>Curry made by cooking chickpeas in a perfectly spiced onion tomato masala gravy.</p>
                        <h6 class="text-primary menu-price">$9.99</h6>
                      </div>
                    </div>

                     <div class="media menu-item">
                      <img class="mr-3" src="images/Butter soya chaap.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Butter soya chaap</h5>
                        <p>Soya chunks pan fried in sweet creamy gravy prepared with butter makhan, tomatoes and  cream.</p>
                        <h6 class="text-primary menu-price">$11.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Kadhai soya chaap.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Kadhai soya chaap</h5>
                        <p>Semi dry curry made with pan fried soya chunks, onions, tomatoes, capsicum (green bell peppers) and freshly powdered kadai masala.</p>
                        <h6 class="text-primary menu-price">$11.99</h6>
                      </div>
                    </div>


            </div>

          </div>
        </div>



         <div class="tab-pane fade" id="pills-rice" role="tabpanel" aria-labelledby="pills-rice-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Veg biryani.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Veg biryani</h5>
                        <p>Aromatic rice dish made by cooking basmati rice on low heat for hours with mix veggies, herbs & biryani spices.</p>
                        <h6 class="text-primary menu-price">$8.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Peas rice.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Peas rice</h5>
                        <p>Rice dish made by cooking basmati rice with peas, herbs & light spices.</p>
                        <h6 class="text-primary menu-price">$3.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Mushroom rice.png" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Mushroom rice</h5>
                        <p>Rice dish made by cooking basmati rice with pan fried mushrooms, herbs & light spices.</p>
                        <h6 class="text-primary menu-price">$5.99</h6>
                      </div>
                    </div>

                    

                    

                  </div>
                  <div class="col-md-6 ftco-animate">

                  	<div class="media menu-item">
                      <img class="mr-3" src="images/Basmati rice.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Basmati rice</h5>
                        <h6 class="text-primary menu-price">$3.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/roti.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Roti</h5>
                        <p>flatbread made with wholemeal wheat flour baked in clay oven.</p>
                        <h6 class="text-primary menu-price">$2.49</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Naan.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Naan</h5>
                        <p>Soft and pillowy flatbread traditionally made in a tandoor, or cylindrical clay oven. The dough gets slapped against the walls of the tandoor, where it adheres and bakes quickly over a burning fire.</p>
                        <h6 class="text-primary menu-price">$2.99</h6>
                      </div>
                    </div>

                    


            </div>

          </div>
        </div>

        


         <div class="tab-pane fade" id="pills-dessert" role="tabpanel" aria-labelledby="pills-dessert-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Sooji halwa.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Sooji halwa</h5>
                        <p>Almonds, raisins and cashew rich soft and savory treat for taste buds that give tough competition to the best of best dishes on the table.</p>
                        <h6 class="text-primary menu-price">$4.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Gulab jamun.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Gulab jamun</h5>
                        <p>soft delicious berry sized balls made of milk solids, flour & soaked in rose flavored sugar syrup & cardamom powder.</p>
                        <h6 class="text-primary menu-price">$4.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Ras malai.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Ras malai</h5>
                        <p>Cottage cheese balls soaked in thickened, sweetened and flavored milk.</p>
                        <h6 class="text-primary menu-price">$4.99</h6>
                      </div>
                    </div>

                  
            </div>
          </div>
        </div>


              <div class="tab-pane fade" id="pills-beverges" role="tabpanel" aria-labelledby="pills-beverges-tab">
                <div class="row">
                  <div class="col-md-6 ftco-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Special Mojito.jpeg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Special Mojito</h5>
                        
                        <h6 class="text-primary menu-price">$4.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/All Fruit Healthy Smoothie.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">All Fruit Healthy Smoothie</h5>
                        <h6 class="text-primary menu-price">$7.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Can pop.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Can pop</h5>
                        
                        <h6 class="text-primary menu-price">$1.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Mango lassi.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Mango lassi</h5>
                        <h6 class="text-primary menu-price">$3.99</h6>
                      </div>
                    </div>

                    

                  </div>
                  <div class="col-md-6 ftco-animate">



                  	<div class="media menu-item">
                      <img class="mr-3" src="images/Strawberry lassi.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Strawberry lassi </h5>
                        <h6 class="text-primary menu-price">$3.99</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Lassi with salt.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Lassi with salt</h5>
                        <h6 class="text-primary menu-price">$3.49</h6>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/Sweet lassi.jpg" class="img-fluid">
                      <div class="media-body">
                        <h5 class="mt-0 font-weight-bold">Sweet lassi  </h5>
                        <h6 class="text-primary menu-price">$3.49</h6>
                      </div>
                    </div>



            </div>

          </div>
        </div>




      </div>
    </section>


<!-- menu ends -->


<!-- contact  -->

<section class="contact" id="contact">
  <h2 class="heading">Contact Us</h2>
</section>

<section class="about">
  <div class="about_top_box">
  <div class="contentbx">
    <div class="form">

    <!-- email from php  -->

    <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?> " method="post">
      <div class="inputbx">
        <input type="text" name="name" placeholder="Full Name">
      </div>
      <div class="inputbx">
        <input type="email" name="email" placeholder="Email Address">
      </div>

      <div class="inputbx">
        <textarea name="message" placeholder="Write your message here"></textarea>
      </div>
      <div class="inputbx">
        <input  type="submit" name="submit" value="send">
      </div>
    </form>

    <?php
      if(isset($_POST['submit'])){
      $to = "chhonker.amit@yahoo.in";
      $name = $_POST['name'];
          $email = $_POST['email'];
          $message = $_POST['message'];
      $headers = "From: $email";

      mail($to, $name, $message, $headers);

      echo "mail sent.";
    }
    ?>

    <!-- email php end -->

    </div>
  </div>
<!-- </div> -->
<div class="punjabi_tadka">
  <!-- <div class="imgbx2"></div> -->
  <img src="menu.jpg" width="40px" height="4640px">
</div>
</div>
</section>

<!-- end of contact us  -->

<!-- address start -->
<section class="addcontainer">
<div>
  <div class="address_left_side">

    <div class="address">
      <div class="contactInfo">
        <h3>Contact Info</h3>
        <div class="contactInfoBx">
          <div class="box">
            <div class="icon">
              <i class="fa fa-map-marker"></i>
            </div>
            <div class="text">
              <h3>Address</h3>
              <p>65 University Ave East<br>
              Waterloo, ON N2J 2V8<br>
              Canada
              </p>
            </div>
          </div>

          <div class="box">
            <div class="icon">
              <i class="fa fa-phone"></i>

            </div>
            <div class="text">
              <h3>Phone</h3>
              <p>+1-226-666-7860</p>
            </div>
          </div>

          <div class="box">
            <div class="icon">
              <i class="fa fa-envelope-o"></i>

            </div>
            <div class="text">
              <h3>Email</h3>
              <p>panchokitchen@gmail.com</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>

  <div class="address_googlemap">
    <!-- address map -->
    <iframe src="https://www.google.com/maps/embed?pb=!1m28!1m12!1m3!1d5790.748071319008!2d-80.53776717196976!3d43.47366400234008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m13!3e6!4m5!1s0x882bf401ad6dac05%3A0xbc0d83244f312792!2sUniversity%20of%20Waterloo%2C%20Waterloo%2C%20ON%2C%20Canada!3m2!1d43.4731293!2d-80.541687!4m5!1s0x882bf38b31259673%3A0xd4bb25dfb9fe935f!2s65%20University%20Ave%20E%2C%20Waterloo%2C%20ON%20N2J%202V8%2C%20Canada!3m2!1d43.477146999999995!2d-80.521126!5e0!3m2!1sen!2sin!4v1606666234662!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    <!-- address map end -->
  </div>
</div>
</section>
<!-- address ends -->


<!-- footer start -->

<div class="copyright">
<h5>Copyright &copy 2020 papa pancho's kitchen (Indian street food). All Rights Reserved.</h5>
<p><a href="https://amitsinghchhonker.com/">Developed by AMIT KUMAR SINGH</a></p>
</div>

<!-- footer ends -->



<script type="text/javascript">
  window.addEventListener('scroll', function () {
    var header = document.querySelector('header');
    header.classList.toggle('sticky', window.scrollY > 0);
  });


  // toggle function 

  function toggleclick() {
    var a = document.querySelector('.toggle');
    var menu = document.querySelector('.menu');

    a.classList.toggle('active');
    menu.classList.toggle('active');

  }

</script>


</body>
</html>
