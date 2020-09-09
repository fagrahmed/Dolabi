<div class="head">
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <link rel="stylesheet" href="{{ asset('css/style1.css') }}">
    <a class="logo" href="#">Dolabi</a>
    
    <ul class="nav-bar">

        <li><a href="#">Home</a></li>
        <li><a href="#">Blog</a></li>
        <li><a href="#">About</a></li>
        <li><button id="loginButton" onclick="openForm1()">LOGIN</button></li>
        <li>
            <a class="search" href="#">
                <img src="img/ic_search_24px.svg" alt="search">
            </a>
        </li>
        <li>
            <a class="cart" href="#">
                <img src="img/ic_shopping_cart_24px.svg" alt="search">
            </a>
        </li>
    
    </ul>

    <script>  
    function openForm1(){
        document.getElementById('signUpPage').style.display="block";
        document.getElementById('container').style.display="block";
        container.classList.remove("right-panel-active");
        
    }
    </script>


</div>