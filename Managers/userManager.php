<?php
    include "../db_connection.php";
    //adds a new user to the database
    function addNewUser($fName, $lName, $email, $username, $password){
        $hashPassw = password_hash($password, PASSWORD_DEFAULT);
        $query = mysqli_query(openConn(), "INSERT INTO users VALUES(null, '$fName', '$lName', '$email', '$username', '$hashPassw')");
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
        if(getUserID($_POST['userName']) == 1) header('location: ../login.php?userExists');
        
        //add the user to the database
        addNewUser($_POST['firstName'],$_POST['lastName'],$_POST['email'],$_POST['userName'],$_POST['passw']);
        //set the current session ID to newly signed member
        $_SESSION['USER'] = getUserID($_POST['userName']);
        header('location: ../login.php?succ');
    }else if(isset($_POST['logIn'])){
        
        //getUserID by username
        $userID = getUserID($_POST['userName']);
        //check if user exists
       
        //TODO check if username == admin & password == 1234
        //Goto admin page to add productss
        
        //check if password and username match
        if(successfullLogin($_POST['userName'], $_POST['passw']) && $userID != 0){
            //there is currently a user in the database with that username AND the user entered correct credentials
            $_SESSION['USER'] = getUserID($_POST['userName']);
            header('location: ../login.php?Logged');
        }else{
            header('location: ../login.php?invalidLog');
        }
    }
?>