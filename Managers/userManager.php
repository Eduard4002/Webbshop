<?php
    include_once $_SERVER['DOCUMENT_ROOT'] . "/Webbshop/Webbshop/db_connection.php";
    session_start();
    //adds a new user to the database
    function addNewUser($email, $username, $password){
        $hashPassw = password_hash($password, PASSWORD_DEFAULT);
        $query = mysqli_query(openConn(), "INSERT INTO users VALUES(null, '$email', '$username', '$hashPassw')");
    }
    //checks if the user logged in correctly
    function successfullLogin($username, $password){
        $query = mysqli_fetch_assoc(mysqli_query(openConn(), "SELECT * FROM users WHERE userName = '$username'"));
                
        if(password_verify($password, $query['passw'])){
            return true;
        }else{
            return false;
        }
        
    }
    //update the user's password incase they forgot it
    function updatePassword($username, $password){
        $hashPassw = password_hash($password, PASSWORD_DEFAULT);
        $query = mysqli_query(openConn(), "UPDATE users SET passw = '$hashPassw' WHERE userName = '$username'");
    }
    
    //gets user's id from the username
    function getUserID($username){
        $query = mysqli_query(openConn(), "SELECT * FROM users WHERE userName = '$username'");
        if(mysqli_num_rows($query) == 1){
            $row = mysqli_fetch_assoc($query);
            return $row['ID'];
        }else{
            return 0;
        }
    }
    //get the username by ID
    function getUserByID($ID){
        $query = mysqli_query(openConn(), "SELECT * FROM users WHERE ID = '$ID'");
        return mysqli_fetch_assoc($query)['userName'] ??= null;
    }
   
    //Sign up
    if(isset($_POST['signUp'])){
        $userName = $_POST['userName'];
        $email = $_POST['email'];
        $passw = $_POST['passw'];
        echo "ID: ".getUserID($userName);
        if(getUserID($userName) != 0) {
            header('location: ../index.php?userExists');
            exit;   
        }
        if($userName === 'admin'){
            header('location: ../index.php?DiffUsername');
        }
        //add the user to the database
        addNewUser($email,$userName,$passw);
        //Create a new cart that will be associated with the user
        $userID = getUserID($userName);
        //set the current session ID to newly signed member
        createCart($userID);
        //Auto login 
         // Redirect to the login page with login parameters
         header("location: userManager.php?logIn&userName=$userName&passw=$passw");
    }else if(isset($_POST['logIn']) || isset($_GET['logIn'])){
   
        $userName = isset($_POST['userName']) ? $_POST['userName'] : (isset($_GET['userName']) ? $_GET['userName'] : '');
        $passw = isset($_POST['passw']) ? $_POST['passw'] : (isset($_GET['passw']) ? $_GET['passw'] : '');
        //getUserID by username
        $userID = getUserID($userName);
        //check if user exists
       if(!($userID > 0)){
           header('location: ../index.php?noUser');
       }
       
        // Check if username and password match
        if ($userName === 'admin' && $passw === '1234') {
            // Redirect to the admin page
            header('Location: ../admin.php');
            exit; // Terminate the script after redirect
        } 
        //check if password and username match
        if(successfullLogin($userName, $passw)){
            //there is currently a user in the database with that username AND the user entered correct credentials
            $_SESSION['USER'] = getUserID($userName);
            header('location: ../index.php?Logged');
        }else{
            header('location: ../index.php?invalidLog');
        }
    }else if(isset($_POST['logOut'])){
        $_SESSION['USER'] = null;
        header('location: ../index.php');
    }

        
    
?>