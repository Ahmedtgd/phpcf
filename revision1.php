

<?php-                                                                          
                      if( isset($_POST) && !empty($_POST) && is_array($_POST))                        
                              {                                                                               
                               $fullname =$_POST["fullname"];                                                 
                              $email    =$_POST["email"];                                                    
                                $message  =$_POST["message"];                                                  
                                $ip=getenv("REMOTE_ADDR");                                                     
                                $content  = "you got message! <br> From: $fullname <br>Email:$email<br>He says:$message<br> $ip";
                                $response = mail('ahmedtarek3885@gmail.com', 'New Contact us Message',$content);
                                if ($response === true){echo "your message has been sent!";}else{echo"Nothing submited!";}
                                }                                                                               
                              ?> 
