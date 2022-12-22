<?php
session_start();
 include "db.php";
        if(isset($_POST['username'])){
            $uname=$_POST['username'];
            $pass=md5($_POST['pass']);
            $passU=md5($_POST['passUlang']);
            $email=$_POST['email'];


            $sqlihat = "SELECT * FROM users WHERE username='$uname';";
            $result = mysqli_query($koneksi, $sqlihat);


            $pattern = '/^(?=.*[0-9])(?=.*[A-Z]).{8,20}$/';
            $emailpattern= '/^\\S+@\\S+\\.\\S+$/'; 

            if(preg_match($pattern, $_POST['pass'])){
                    $check=TRUE;
                } else {
                    $check=FALSE;
                }
            if(preg_match($emailpattern, $_POST['email'])){
                $check2=TRUE;
            } else {
                $check2=FALSE;
            }

                if(mysqli_num_rows($result)>0 or $uname==""){
                    echo "<script>alert('Username Tidak tersedia. Silahkan coba lagi!')</script>";
                } else{
                    if($check){
                            if($pass != $passU){
                                echo "<script>alert('Password Anda Tidak Sesuai. Silahkan coba lagi!')</script>";
                            } else{
                                if(mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM users WHERE email='$email';"))>0 or $email=="" or $check2==FALSE){
                                    echo "<script>alert('Email tidak tersedia!')</script>";
                                }
                                else{
                                   
                                    $_SESSION['user']=$uname;
                                    $_SESSION['pass']=$pass;
                                    $_SESSION['email']=$email;
                                    echo 1;
                                   
                                }
                    
                                
                            }
                        
                    
                    } else{
                        echo "<script>alert('Password minimal 8 karakter, 1 Kapital, dan 1 angka!')</script>";
                    }
                    
                }
            
        }
  
                                    


        
   