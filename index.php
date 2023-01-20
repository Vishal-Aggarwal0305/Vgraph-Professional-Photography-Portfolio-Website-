 <?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login_sign/login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login_sign/login.php");
  }
?>

<!doctype html>
<html lang="en">
<style>
    html {
        scroll-behavior: smooth;
    }
</style>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="look.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap');
    </style>
    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> -->
    <title>Home</title>
</head>


<div>

	

    
    </div>

<body class="bg">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="nav1">
        <a class="navbar-brand" href="#">vGraphs</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.html" target="blank">About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Topics
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="nature.html" target="blank">Nature</a>
                        <a class="dropdown-item" href="wedding.html" target="blank">Wedding</a>
                        <a class="dropdown-item" href="world.html" target="blank">World</a>
                        <a class="dropdown-item" href="micro.html" target="blank">Macro</a>
                      
                    </div>
             
                <li class="nav-item">
                    <a class="nav-link" href="contact.html" target="blank">Reach Us</a>
                </li>
                <li>
                    

                    <!-- </div> -->
            </ul>
            <form class="form-inline my-2 my-lg-0 " style="margin-left: 30%;">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            <div class="mx-2">

                <!-- <button class="btn btn-danger my-2 my-sm-0">LogOut</button> -->
                <a href="index.php?logout='1'" class="btn btn-outline-danger" role="button">LogOut</a>
                    
            
            </div>
            <div>
                <img src="camera.png" class="logo"> </img>
            </div>
            <div class="welcome"><marquee speed="">
            <?php 
            echo "&nbsp logged in as ".$_SESSION['username']
            ?>
            </marquee>
             </div>
    </nav>
    </div>




    <!-- <a href="#nav1" class="Top">Go to Top</a> -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="nature1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Welcome to vGraphs Professionals</h2>
                    <p>Professional Photography Services</p>
                    <!-- <a href="wedding.html" class="btn btn-outline-info Top">Wedding</a> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#worldModal">World</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#weddingModal">Wedding</button>
                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#natureModal">Nature</button>
                    <button type="button" class="btn btn-warning" data-toggle="modal"
                        data-target="#microModal">Micro</button>
                </div>
            </div>



            <div class="carousel-item">
                <img class="d-block w-100" src="image/slide2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Gives you Authentic Photography Services</h2>
                    <p>2000+ Happy Customers</p>
                    <!-- <a href="wedding.html" class="btn btn-outline-info Top">Wedding</a> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#worldModal">World</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#weddingModal">Wedding</button>
                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#natureModal">Nature</button>
                    <button type="button" class="btn btn-warning" data-toggle="modal"
                        data-target="#microModal">Micro</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="https://source.unsplash.com/1400x300/?dslr_camera" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h2>List Under top 10 Amazing Photography </h2>
                    <p>We will provide you with Best Services</p>
                    <!-- <a href="wedding.html" class="btn btn-outline-info Top">Wedding</a> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal"
                        data-target="#worldModal">World</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal"
                        data-target="#weddingModal">Wedding</button>
                    <button type="button" class="btn btn-success" data-toggle="modal"
                        data-target="#natureModal">Nature</button>
                    <button type="button" class="btn btn-warning" data-toggle="modal"
                        data-target="#microModal">Micro</button>
                </div>

            </div>
        </div>
    </div>
    <div data-aos="fade-up" class=newsection><center>
        <div class="section">
            <div class="container1">
                <div class="content-section">
                    <div class="title">
                        <H1> Bring your <br>story to life</H1>
                    </div>
                    <div class="content">
                        <h3><i>Authentic ,best in Class Photography Service</i></h3>
                        <p>We have a pool of creative artists who produce incredible images for our clients. From
                            billboards to product photos, there is no job too big for our commercial photography
                            experts. They bring experience, creativity, and out-of-the-box thinking to every job -
                            helping to capture the images you need and the ones you can't live without.
                        </p>
                        <div class="button">
                            <a href="#highlights">Our Work</a>
                        </div>
                    </div>

                </div>
                <div class="image-section">
                    <img src="vGraphs PROFESSIONALS.png" alt="pic" class="src">
                </div>

            </div>
        </div>
    </center>
    </div>
    <br>
    <div class="containermy-5">
        <center>
            <h1 class="hing" style="font-family: 'Roboto Condensed', sans-serif;">Our Highlights</h1>
        </center>
        <center>
            <p class="lead" style="font-family: 'Oswald', sans-serif; color: rgb(215, 226, 226);">There is one thing the
                photo must contain – the humanity of the moment..</p><br>
        </center>

    </div>


    <div class="album" id="highlights">
        <div class="container">

            <div class="row">

                <div data-aos="zoom-in-up" class="col-md-4">
                    <div class="card-mb-4-box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="image/a1.JPG">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-up" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?bouquet">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in-up" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?flowers">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-down" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="image/a4.JPG">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-down" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="image/a5.JPG">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-aos="zoom-in-down" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?paint">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-down" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?sunshine">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in-down" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="image/a7.JPG">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div data-aos="zoom-in-down" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?sunrays">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>



                <div data-aos="zoom-in-down" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?paris">
                        <div class="card-body">
                            <p class="card-text">.Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>



                <div data-aos="zoom-in-down" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?sydney">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>



                <div data-aos="zoom-in-down" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?beach">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>



                <div data-aos="zoom-in-down" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?mountains">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>



                <div data-aos="zoom-in-up" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?flower valley">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>



                <div data-aos="zoom-in-up" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?indian wedding">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div data-aos="zoom-out-right" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?parrot">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>



                <div data-aos="zoom-out-right" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="https://source.unsplash.com/400x400/?peacock">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div data-aos="zoom-out-right" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="image/a8.JPG">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.

                            </p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div data-aos="zoom-out-left" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="image/a12.JPG">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>


                <div data-aos="zoom-out-left" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="image/a9.JPG">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-out-left" class="col-md-4">
                    <div class="card mb-4 box-shadow">
                        <img class="card-img-top"
                            data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail"
                            alt="Thumbnail [100%x225]" src="image/a10.JPG">
                        <div class="card-body">
                            <p class="card-text">Light makes photography. Embrace light. Admire it. Love it. But above
                                all, know light. Know it for all you are worth, and you will know the key to
                                photography.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                </div>
                                <small class="text-muted">9 mins</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>

    <!-- Button trigger modal -->

    <!-- Wedding Modal -->
    <div class="modal fade" id="weddingModal" tabindex="-1" role="dialog" aria-labelledby="weddingModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="weddingModalLabel">Wedding</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="wedding.html" class="href">Please click here to proceed to wedding page</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- nature Modal -->
    <div class="modal fade" id="natureModal" tabindex="-1" role="dialog" aria-labelledby="natureModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="natureModalLabel">Nature</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="nature.html" class="href">Please click here to proceed to nature page</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Micro Modal -->
    <div class="modal fade" id="microModal" tabindex="-1" role="dialog" aria-labelledby="microModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="microModalLabel">Micro</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="micro.html" class="href">Please click here to proceed to Micro shoot page</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- world Modal -->
    <div class="modal fade" id="worldModal" tabindex="-1" role="dialog" aria-labelledby="worldModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="worldModalLabel">World</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="world.html" class="href">Please click here to proceed to World-Shoot page</a>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>

                </div>
            </div>
        </div>
    </div>

    <!-- Login Modal -->

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login into your vGraph Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="login.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="Email"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="Password"
                                placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                     <button type="button" class="btn btn-primary data-toggle="modal"
                     data-target="#signupModal">Create new account</button> -->
                </div>
            </div>
        </div>
    </div>


    <!-- Signup Modal -->
    <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="signupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="signupModalLabel">Create an vGraph Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="signup.php">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="Email"
                                aria-describedby="emailHelp" placeholder="Enter email">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" name="Password" id="exampleInputPassword1"
                                placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="example1InputPassword1">Confirm Password</label>
                            <input type="password" class="form-control" id="example1InputPassword1" name="Cpassword"
                                placeholder="Password">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remember me</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Signup</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </form>
                </div>
                <!-- <div class=" modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div> -->
            </div>
        </div>
    </div>

    <center>
        <h5>Feel Free to <a href="contact.html"> <span class="contact">Contact</span></a> Us!!</h5>
    </center>


    <!--Grid column-->
    <div class="col-md-12 text-center">
        <ul class="list-unstyled mb-0">
            <li><i class="fas fa-map-marker-alt fa-2x"></i>
                <p>vGraph Professionals, Gulmohar Road, New Delhi</p>
            </li>

            <li><i class="fas fa-phone mt-4 fa-2x"></i>
                <p>+91 03323 44544 </p>
            </li>

            <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                <p>vgraphphotgraphy@desi.com</p>
            </li>
        </ul>
    </div>
    <!--Grid column-->

    </div>
    <!-- <button type="button" class="btn btn-dark" value="#nav1">Go to Top>Dark</button> -->
    <a href="#nav1" class="btn btn-outline-info Top">Top</a>

    </section>
    <!--Section: Contact v.2-->

    </section>

    <footer class="container" style="color: white;">

        <center>
            <p>© 2021-2022 Vgraphs Professionals, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
        </center>
    </footer>


    </div>


    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    


</html>