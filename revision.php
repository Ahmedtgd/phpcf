<?php-                                                                          
                     10 if( isset($_POST) && !empty($_POST) && is_array($_POST))                        
                              9 {                                                                               
                              8  $fullname =$_POST["fullname"];                                                 
                            7  $email    =$_POST["email"];                                                    
                              6  $message  =$_POST["message"];                                                  
                               5  $ip=getenv("REMOTE_ADDR");                                                     
                               4  $content  = "you got message! <br> From: $fullname <br>Email:$email<br>He says:$message<br> $ip";
                               3  $response = mail('ahmedtarek3885@gmail.com', 'New Contact us Message',$content);
                               2  if ($response === true){echo "your message has been sent!";}else{echo"Nothing submited!";}
                               1 }                                                                               
                              12                                                                                 
                               1                                                                                 
                               2                                                                                 
                               3 ?> 
