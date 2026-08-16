<?php 

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$n = $_POST['username']; 
$m = $_POST['password']; 
$r = $_POST['email_adress']; 
$b = $_POST['phone']; 
 
$servername = "mysql.selfmade.ninja:3306"; 
$username = "Saravanan04"; 
$password = "Saravanan123#"; 
$dbname = "Saravanan04_signup"; 
 
$con = mysqli_connect($servername, $username, $password, $dbname); 
 
$sql = "INSERT INTO `customer` (`username`, `password`, `email_address`, `phone`) 
        VALUES ('$n', '$m', '$r', '$b')"; 
 
$sim = mysqli_query($con, $sql); 
 
if($sim){ 
    ?> 

    <main class="flex-shrink-0">
        <div class="container">  
            <h1>SIGNUP SUCCESS</h1>  
            <p class="lead">
                You can login <a href="./login.php">here</a>.
            </p>
        </div>
    </main>

    <?php
}else{ 
    echo "fail"; 
} 

} else {

?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
</head>

<body>

<main class="form-signup w-100 m-auto">

    <form method="post" action="signup.php">

        <img
            class="mb-4"
            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkO0edO8RXV6Zvi1zjEbFwEZypZ5mGvZA70e1hy3wvQg&s=10"
            alt=""
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
                id="floatingPhone" 
                placeholder="phone" 
            > 
            <label for="floatingPhone">phone</label> 
        </div> 

        <div class="form-floating"> 
            <input 
                name="email_adress" 
                type="email" 
                class="form-control" 
                id="floatingEmail" 
                placeholder="name@example.com" 
            > 
            <label for="floatingEmail">Email address</label> 
        </div> 

        <div class="form-floating"> 
            <input 
                name="password" 
                type="password" 
                class="form-control" 
                id="floatingPassword" 
                placeholder="Password" 
            > 
            <label for="floatingPassword">Password</label> 
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

        <button class="btn btn-primary hvr-grow-rotate py-2" type="submit"> 
            Sign in 
        </button> 

        <p class="mt-5 mb-3 text-body-secondary">2026</p>

    </form>

</main>

</body>
</html>

<?php
}
?>