<?php

$signup = false;
print_r($_POST);
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email_address']) and isset($_POST['phone']))
{
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email_address'];
$phone = $_POST['phone'];
$error = User::signup($username, $password, $email, $phone);
$signup = true;
echo "hello";
}
?>

 <?php
    if($signup){
        if (!$error){
            ?>
     <main class="flex-shrink-0"> <div class="container"> 
        <h1>SIGNUP SUCCESS</h1> 
         <p class="lead">You can login <a href="login.php">here</a>.</p>
 
    <?php
        } else{
        
 ?>
     <main class="flex-shrink-0">
         <div class="container"> 
            <h1>SIGNUP FAIL</h1> 
            <p class="lead">SOMETHHING WENT WRONG, <?=$error?></p> 
         </div> 
    </main> 

 <?php
        }
    }else{
    ?>
    
<main class="form-signup w-100 m-auto">
    <form method="post" action="signup.php">
        <img
            class="mb-4"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkO0edO8RXV6Zvi1zjEbFwEZypZ5mGvZA70e1hy3wvQg&s=10"
            alt=""
            width=""
            height="145"
        >

        <h1 class="h3 mb-3 fw-normal">Signup here..</h1>
          <div class="form-floating">
            <input
                name="username"
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="username"
            >
            <label for="floatingInput">username</label>
        </div>

                <div class="form-floating">
            <input
                name="phone"
                type="text"
                class="form-control"
                id="floatingInput"
                placeholder="phone"
            >
            <label for="floatingInput">phone</label>
        </div>

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
            2026
        </p>

        <select class="form-select" aria-label="Default select example">
  
    </form>

    
</main>
<?}?>