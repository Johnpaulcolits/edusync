


<?php



include "../header/header.php";
include "../config/database.php";
include "../model/login.model.php";

//User login function
if (isset($_POST['user'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $user = new UserModel($conn);

    $result = $user->verifyUser($username,$password);  

    

    if ($result ) {

       
        echo '<script>
                    Swal.fire({
                        title: "Successfully Logged In",
                        text: "Redirecting to Student Page...",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 2000,
                        onClose: () => {
                            window.location.href = "../student/userspage.php";
                        }
                    });
                </script>';
       
      
  
              
                }
                
                else {
               

                    echo '<script>
                         Swal.fire({
                      title: "Error!",
                     text: "Invalid Username Or Password In user Login",
                    icon: "error",
                  confirmButtonText: "OK"
                }).then(function() {
                   window.location.href = "../login.php"; 
                 });
                 </script>';


    }

    

   
} 




//Admin Page
if (isset($_POST['admin'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $admin = new UserModel($conn);

    $result = $admin->verifyAdmin($username,$password);  

    

    if ($result ) {

       
        echo '<script>
                    Swal.fire({
                        title: "Successfully Logged In",
                        text: "Redirecting to Admin Page...",
                        icon: "success",
                        showConfirmButton: false,
                        timer: 2000,
                        onClose: () => {
                            window.location.href = "../admin/adminspage.php";
                        }
                    });
                </script>';
       
      
  
              
                }
                
                else {
               

                    echo '<script>
                         Swal.fire({
                      title: "Error!",
                     text: "Invalid Username Or Password In Admin Login",
                    icon: "error",
                  confirmButtonText: "OK"
                }).then(function() {
                   window.location.href = "../login.php"; 
                 });
                 </script>';


    }

    

   
} 





















?>



















