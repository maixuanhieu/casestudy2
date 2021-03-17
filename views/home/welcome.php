<div id="main">

    <div id="head" <?php if (isset($_SESSION[AUTH_KEY])) {
                                                                                                        echo 'hidden';
                                                                                                    } ?>>
        <nav class="navbar navbar-expand-lg navbar-black bg-black custom_nav">
            <a class="navbar-brand" href="#"><img src="/Image/s1team.png" alt="logo" width="100px" height="80px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                            STORE
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="?controller=home&action=welcome">HOME</a>
                            <a class="dropdown-item" href="#">DISCOVERY QUEUE</a>
                            <a class="dropdown-item" href="#">WISHLIST</a>
                            <a class="dropdown-item" href="#">POINTS SHOP</a>
                            <a class="dropdown-item" href="#">NEWS</a>
                            <a class="dropdown-item" href="#">STATS</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                            COMMUNITY
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                            <a class="dropdown-item" href="?controller=home&action=welcome">HOME</a>
                            <a class="dropdown-item" href="#">DISCUSSIONS</a>
                            <a class="dropdown-item" href="#">WORKSHOP</a>
                            <a class="dropdown-item" href="#">MARKET</a>
                            <a class="dropdown-item" href="#">BROADCASTS</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" style="color: white;">SUPPORT</a>
                    </li>
                </ul>
                <li class="nav-item">
                    <a class="nav-link" href="?controller=auth&action=login" style="color: white;" <?php if (isset($_SESSION[AUTH_KEY])) {
                                                                                                        echo 'hidden';
                                                                                                    } ?>>LOGIN</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="?controller=auth&action=logOut" style="color: white;" <?php if (!isset($_SESSION[AUTH_KEY])) {
                                                                                                        echo 'hidden';
                                                                                                    } ?>>LOG OUT</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white;">
                        LANGUAGE
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="#">ENGLISH</a>
                        <a class="dropdown-item" href="#">FRENCH</a>
                        <a class="dropdown-item" href="#">VIETNAMESE</a>
                        <a class="dropdown-item" href="#">JAPANESE</a>
                        <a class="dropdown-item" href="#">KOREAN</a>
                    </div>
                </li>
        </nav>
    </div>
    <div id="head-link" <?php if (isset($_SESSION[AUTH_KEY])) {
                                                                                                        echo 'hidden';
                                                                                                    } ?>>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #e3f2fd;">

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Your Store
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown4">
                            <a class="dropdown-item" href="index.php">Home</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Community Recommendations</a>
                            <a class="dropdown-item" href="#">Recently Viewed</a>
                            <a class="dropdown-item" href="#">S1team Curators</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown5" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Browse
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown5">
                            <table>
                                <tr>
                                    <td><a class="dropdown-item" href="#">Free To Play</a></td>
                                    <td><a class="dropdown-item disabled" href="#">Game Genres</a></td>
                                    <td><a class="dropdown-item disabled" href="#">Software</a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#">Early Access</a></td>
                                    <td><a class="dropdown-item" href="#">Action</a></td>
                                    <td><a class="dropdown-item" href="#">Animation</a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#">Demos</a></td>
                                    <td><a class="dropdown-item" href="#">Adventure</a></td>
                                    <td><a class="dropdown-item" href="#">Audio Production</a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#">Controller Friendly</a></td>
                                    <td><a class="dropdown-item" href="#">Casual</a></td>
                                    <td><a class="dropdown-item" href="#">Design & Illustration</a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#">For PC Cafes</a></td>
                                    <td><a class="dropdown-item" href="#">Indie</a></td>
                                    <td><a class="dropdown-item" href="#">Education</a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#">Remote Play</a></td>
                                    <td><a class="dropdown-item" href="#">Massively Multiplayer</a></td>
                                    <td><a class="dropdown-item" href="#">Game Development</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dropdown-divider"></div>
                                    </td>
                                    <td><a class="dropdown-item" href="#">Racing</a></td>
                                    <td><a class="dropdown-item" href="#">Photo Editing</a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item disabled " href="#">Virtual Reality</a></td>
                                    <td><a class="dropdown-item" href="#">RPG</a></td>
                                    <td><a class="dropdown-item" href="#">Utilities</a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#">VR Games & Experiences</a></td>
                                    <td><a class="dropdown-item" href="#">Simulation</a></td>
                                    <td><a class="dropdown-item" href="#">Video Production</a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#">VR Hardware</a></td>
                                    <td><a class="dropdown-item" href="#">Sports</a></td>
                                    <td><a class="dropdown-item" href="#">Web Publishing</a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dropdown-divider"></div>
                                    </td>
                                    <td><a class="dropdown-item" href="#">Strategy</a></td>
                                    <td><a class="dropdown-item" href="#"></a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item disabled" href="#">Platforms</a></td>
                                    <td>
                                        <div class="dropdown-divider"></div>
                                    </td>
                                    <td><a class="dropdown-item" href="#"></a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#">Mac OS X</a></td>
                                    <td><a class="dropdown-item" href="#">More Popular Tags...</a></td>
                                    <td><a class="dropdown-item" href="#"></a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#">S1teamOS + Linux</a></td>
                                    <td><a class="dropdown-item" href="#"></a></td>
                                    <td><a class="dropdown-item" href="#"></a></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="dropdown-divider"></div>
                                    </td>
                                    <td><a class="dropdown-item" href="#"></a></td>
                                    <td><a class="dropdown-item" href="#"></a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item disabled" href="#">Additional Content</a></td>
                                    <td><a class="dropdown-item" href="#"></a></td>
                                    <td><a class="dropdown-item" href="#"></a></td>
                                </tr>
                                <tr>
                                    <td><a class="dropdown-item" href="#">Soundtracks</a></td>
                                    <td><a class="dropdown-item" href="#"></a></td>
                                    <td><a class="dropdown-item" href="#"></a></td>
                                </tr>
                            </table>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Points Shop</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">News</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">S1team Labs</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?controller=shop&action=index" <?php if (isset($_SESSION[AUTH_KEY])) {
                                                                                                        echo 'hidden';
                                                                                                    } ?>>Your Cart</a>
                    </li>

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="?controller=products&action=index" <?php if (!isset($_SESSION[AUTH_KEY])) {
                                                                                                        echo 'hidden';
                                                                                                    } ?>>Products</a>
                    </li> -->
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search the store" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div id="s-body">
        <div id="left">
            <ul class="list-group list-group-flush" style="text-align: left;">
                <li class="list-group-item"><b>RECOMMENDED</b></li>
                <a href="">
                    <li class="list-group-item">By Friends</li>
                </a>
                <a href="">
                    <li class="list-group-item">By Curators</li>
                </a>
                <a href="">
                    <li class="list-group-item">Tags</li>
                </a>
                <li class="list-group-item"><b>DISCOVERY QUEUES</b></li>
                <a href="">
                    <li class="list-group-item">Recommendations</li>
                </a>
                <a href="">
                    <li class="list-group-item">New Releases</li>
                </a>
                <li class="list-group-item"><b>BROWSE CATEGORIES</b></li>
                <a href="">
                    <li class="list-group-item">Top Sellers</li>
                </a>
                <a href="">
                    <li class="list-group-item">New Releases</li>
                </a>
                <a href="">
                    <li class="list-group-item">Upcoming</li>
                </a>
                <a href="">
                    <li class="list-group-item">Specials</li>
                </a>
                <a href="">

                    <li class="list-group-item">Virtual Reality</li>
                </a>
                <a href="">
                    <li class="list-group-item">Controller Friendly</li>
                </a>
                <li class="list-group-item"><b>BROWSE BY GENRE</b></li>
                <a href="">
                    <li class="list-group-item">Free to Play</li>
                </a>
                <a href="">
                    <li class="list-group-item">Action</li>
                </a>
                <a href="">
                    <li class="list-group-item">Adventure</li>
                </a>
                <a href="">
                    <li class="list-group-item">Casual</li>
                </a>
                <a href="">
                    <li class="list-group-item">Indie</li>
                </a>
                <a href="">
                    <li class="list-group-item">Massively Multiplayer</li>
                </a>
                <a href="">
                    <li class="list-group-item">Racing</li>
                </a>
                <a href="">
                    <li class="list-group-item">RPG</li>
                </a>
                <a href="">
                    <li class="list-group-item">Simulation</li>
                </a>
                <a href="">
                    <li class="list-group-item">Sports</li>
                </a>
                <a href="">
                    <li class="list-group-item">Strategy</li>
                </a>
            </ul>
        </div>
        <div id="content">
            <!-- Ảnh đầu -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="Image/cyberpunk-2077.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Image/fifa-21.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Image/Dead-Cells.jpg" alt="Third slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Image/horizon-zero-dawn.jpg" alt="Fourth slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="Image/red-dead-redemption.jpg" alt="Fifth slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div>
                <b style="display: flex; justify-content: left;">SPECIAL OFFERS</b>
                <!-- Ảnh sale -->
                <div id="carouselExampleIndicators1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators1" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators1" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row custom_mg">
                                <div class="col-4 custom-pd"><img class="d-block w-100" src="sale/Capture8.PNG" class="img-cover" alt="First slide"></div>
                                <div class="col-4 custom-pd"><img class="d-block w-100" src="sale/Capture10.PNG" class="img-cover" alt="First slide"></div>
                                <div class="col-4 custom-pd"><img class="d-block w-100" src="sale/Capture11.PNG" class="img-cover" alt="First slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item ">
                            <div class="row custom_mg">
                                <div class="col-4 custom-pd"><img class="d-block w-100" src="sale/Capture12.PNG" class="img-cover" alt="Second slide"></div>
                                <div class="col-4 custom-pd"><img class="d-block w-100" src="sale/Capture3.PNG" class="img-cover" alt="Second slide"></div>
                                <div class="col-4 custom-pd"><img class="d-block w-100" src="sale/Capture4.PNG" class="img-cover" alt="Second slide"></div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row  custom_mg">
                                <div class="col-4 custom-pd"><img class="d-block w-100" src="sale/Capture5.PNG" class="img-cover" alt="Third slide"></div>
                                <div class="col-4 custom-pd"><img class="d-block w-100" src="sale/Capture6.PNG" class="img-cover" alt="Third slide"></div>
                                <div class="col-4 custom-pd"><img class="d-block w-100" src="sale/Capture7.PNG" class="img-cover" alt="Third slide"></div>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <div>
                <b style="display: flex; justify-content: left;">THE COMMUNITY RECOMMENDS</b>
                <div style="display: flex; justify-content: left;">THESE GAMES TODAY</div>
                <!-- Ảnh comment -->
                <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="3"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="comment/Capture.PNG" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="comment/Capture1.PNG" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="comment/Capture2.PNG" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="comment/Capture3.PNG" alt="Fourth slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="comment/Capture4.PNG" alt="Fifth slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">© 2012-2021 S1TEAM</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer>
    </div>
</div>

