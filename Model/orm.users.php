<?php
function validateUser($username, $password){
    global $conRef;
    $sqlQuery = "SELECT `username`, `password` FROM user_details 
                WHERE `username` = '$username' AND `password` = '$password'";
    $usersDataSet = $conRef->query($sqlQuery);
    // set value for success or error case 
        if ($usersDataSet->num_rows > 0) {
            $userAuth['success'] = "ok"; 
        } else {
            $userAuth['error'] =  "Invalid username or password!";
        }
    return $userAuth;
}

function validateUserName($username){
    global $conRef;
    $sqlQuery = "SELECT `username`, `password` FROM user_details 
                WHERE `username` = '$username' ";
    $usersDataSet = $conRef->query($sqlQuery);
    // set value for success or error case 
        if ($usersDataSet->num_rows > 0) {
            $userAuth['error'] =  "Username not available, please try new username!";
        } else {
            $userAuth['success'] = "ok"; 
        }
    return $userAuth;
}


function signUpProcess($userProfileData){
    global $conRef;
    $username = $userProfileData['username'];
    $password  = $userProfileData['password'];
    $contact = $userProfileData['contact'];
    $address = $userProfileData['address'];
    $email = $userProfileData['email'];

    $sqlQuery = "INSERT INTO user_details
                    (`username`, `password`, `contact`, `email`, `address`)
                    VALUES('$username', '$password',
                    '$contact', '$email','$address') ";

    $queryResponse = $conRef->query($sqlQuery);
    var_dump($queryResponse);
    if ($queryResponse && $queryResponse -> insert_id) {
            $userAuth['success'] = "ok"; 
        } else {
            $userAuth['error'] =  "Please, try again. username already registered!";
        }
    return $userAuth;
}

?>