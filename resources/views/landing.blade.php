<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dolabi</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    
</head>

<body>

    <header >
        @include('components.nav-bar')
        @include('components.signup')
    </header>

    
    <div class="pageOne" >
        <div class="content" >
            
            <div class="textBox">
                <h1>Better know what to <br /> 
                add to your closet.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur <br> adipisicing elit,sed do eiusmod tempor incididunt <br> ut ero labore et dolore magna aliqua.</p>
            </div>
            <div class ="buttons">
                <a class="viewMore" href="#">View More</a>
                <a class="shopNow" href="#">Shop Now
                    <img class="arrow" src="img/ic_arrow_forward_24px.svg" alt="shop">
                </a>
            </div>
        </div>
    </div>


    <div class="pageTwo">
        <div class="container55"> 

            <h3 class="h3">How Dolabi Works</h3>
            <div class="parts"> 

                <div id="part1">

                    <img class="icons" src="/img/Clock.svg"/>
                    <h4 class="h4">SAVE TIME</h4>
                    <p class="p">Shopping has never been faster! Online shop,<br />
                put the pieces you want on your custom avatar<br />
                and you're good to go!</p>
                </div>

                <div id="part2"> 
                    <img class="icons" src="/img/money.svg"/>
                    <h4 class="h4">SAVE MONEY</h4>
                    <p class="p">The whole process will save you money<br />
                    wasted on buying pieces that don't fit.</p>
                </div>

                <div id="part3"> 
                    <img class="icons" src="/img/Recommendations.svg"/>
                    <h4 class="h4">YOUR STYLIST</h4>
                    <p class="p">Consider it as getting a new stylist!<br /> 
                    We help you on what and what not to buy based<br />
                    on your lifestyle, size and the ongoing trends!</p>
                </div>

            </div>

            <div class ="button" >
                <a class="getstarted" href="#">Get Started</a>
            </div>
        </div>
    </div>

    <div class="pageThree">
        <div class="content">
            <div class="box">
                <div class="textBox">
                    <h3>FASHION COLLECTIONS</h3>
                    <h1>TOP PICKS</h1>
                </div>
                <div class ="buttons">
                    <a class="learnMore" href="#">Learn More</a>
                </div>
            </div>
            <div class="arrows">
                    <a class="leftArrow" href="#">
                        <img src="img/carousel_btn_left.svg" alt="left">
                    </a>
                    <a class="rightArrow" href="#">
                        <img src="img/carousel_btn_right.svg" alt="right">
                    </a>
            </div>
        </div>
    </div>







    <div class="page4">
        <div class="container2">

            <div class="rec"></div>
            <div class="signup">

                <h3 id="rdy">Ready to join?</h3>
                <p id="min">It only takes a couple of minutes!</p>

                <div class ="button">
                    <button id="openButton" onclick="openForm()">Sign Up</button>
                </div>
            </div>


        </div>
        <div class="footer">
            @include('components.footer')
        </div>
    </diV>


    <div>

        <script>  
        function openForm(){
            document.getElementById('signUpPage').style.display="block";
            document.getElementById('container').style.display="block";
            container.classList.add("right-panel-active");
        }
        </script>

    </div>


</body>
</html>
