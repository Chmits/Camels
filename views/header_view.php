<header>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Hello <?php session_start(); if(isset($_SESSION["username"])) echo $_SESSION["username"]; ?> You are welcome!</h1>
                <hr>
                <p>Start Bootstrap can help you build better websites using the Bootstrap CSS framework! Just download your template and start going, no strings attached!</p>
                <a href="#" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
            </div>
        </div>
</header>