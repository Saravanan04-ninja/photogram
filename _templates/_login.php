<?php

$username = $_POST['email_address'];
$password = $_POST['password'];

$result = validate_credential($username, $password);

if($result){
   ?> <main class="flex-shrink-0"> <div class="container"> <h1 class="mt-5">LOGIN SUCCESS</h1> <p class="lead">This is beginning</p>  </div> </main> <?
}else{
 ?>


<main class="form-signin w-100 m-auto">
    <form method="post" action="login.php">
        <img
            class="mb-4"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkO0edO8RXV6Zvi1zjEbFwEZypZ5mGvZA70e1hy3wvQg&s=10"
            alt=""
            width=""
            height="145"
        >

        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

        <div class="form-floating">
            <input
                name="email_address"
                type="email"
                class="form-control"
                id="floatingInput"
                placeholder="name@example.com"
            >
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
            <input
                name="password"
                type="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Password"
            >
            <label  for="floatingPassword">Password</label>
        </div>

        <div class="form-check text-start my-3">
            <input
                class="form-check-input"
                type="checkbox"
                value="remember-me"
                id="checkDefault"
            >
            <label class="form-check-label" for="checkDefault">
                Remember me
            </label>
        </div>

        <button class="  btn btn-primary  hvr-grow-rotate  py-2 " type="submit">
            Sign in
        </button>

        <p class="mt-5 mb-3 text-body-secondary">
            © 2017–2025
        </p>

        <select class="form-select" aria-label="Default select example">
  
    </form>

    
</main>
<?
}
?>