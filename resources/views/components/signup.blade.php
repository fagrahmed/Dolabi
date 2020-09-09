<div id="signUpPage"  class="signningUp">     
    <link rel="stylesheet" href="{{ asset('css/sign.css') }}">

           <img src="/img/ic_close_24px.svg" alt="Close" class="closebtn"  id="closeButton" >
    <div class="container" id="container">
 
       
            <div class="form-container sign-up-container">
                <form action="#">
                    <h1 id="h">Create Account</h1>

                            <div class="reg">
                                <img class="iconss" src="/img/Group 34.svg"/>
                                <input type="text" placeholder="Username" />
                            </div>
                            <div class="reg">
                                 <img class="iconss" src="/img/Group 35.svg"/>
                                 <input type="email" placeholder="Email" />
                        </div>
                        <div class="reg">
                                 <img class="iconss" src="/img/Group 36.svg"/>
                                 <input type="password" placeholder="Password" />
                        </div>
                           

                    <button id="btn1">Sign Up</button>
                </form>
            </div>
            <div class="form-container sign-in-container">
                <form action="#">
                    <h1>Sign in</h1>

                        <div class="reg">
                            <img class="iconss" src="/img/Group 35.svg"/>
                            <input type="email" placeholder="Email" />
                        </div>
                        <div class="reg">
                            <img class="iconss" src="/img/Group 36.svg"/>
                            <input type="password" placeholder="Password" />
                        </div>

                    <a href="#">Forgot your password?</a>
                    <button id="btn2">Sign In</button>
                </form>
            </div>


            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1 id ="wb">Welcome Back!</h1>
                        <p id="p2">To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1 id="hf">Hello, Friend!</h1>
                        <p id="p3">Enter your personal details and start journey with us</p>
                        <button class="ghost" id="signUp">Sign Up</button>
                    </div>
                </div>
            </div>
        

        

        <script>

        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        const closiing = document.getElementById('closeButton');

        signUpButton.addEventListener('click', () => {
            container.classList.add("right-panel-active");
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove("right-panel-active");
        });

        closiing.addEventListener('click', () => {
            document.getElementById('signUpPage').style.display="none";
        });

        </script>

    </div>
</div>  