<?php

function twoWayEncryption($data,String $action='encrypt',$type = 'static')  : String {
  if(session_id() ==''){ session_start();}

  $_SESSION[session_id()] = session_id();
    
    $ciphering = "AES-128-CTR"; 
      
    // Use OpenSSl Encryption method 
    $options = openssl_cipher_iv_length($ciphering); 
   
    // Non-NULL Initialization Vector for encryption 
    $encryptionIv = '8084735638465857'; 
      
    // Store the encryption key 
    $staticKey = md5(1200);
    $dynamicKey = $_SESSION[session_id()];
    $encryptionKey =$type=='static' ? $staticKey : $dynamicKey; 
      
    // Use openssl_encrypt() function to encrypt the data 
    return $action == 'encrypt' 
    ? openssl_encrypt($data, $ciphering, $encryptionKey, $options, $encryptionIv)
    : openssl_decrypt($data, $ciphering, $encryptionKey, $options, $encryptionIv);

  
    }
     // Derived Functions
    function encrypt($data){

      return twoWayEncryption($data);
    }
    
    function decrypt($data){
      return twoWayEncryption($data,'decrypt');
    }

    function encryptWithDynamicKey($data){
      return twoWayEncryption($data,'encrypt','dynamic');
    }

    function decryptWithDynamicKey($data){
      return twoWayEncryption($data,'decrypt','dynamic');
    }

    /*
    Author : Biodun Bamigboye(biodunbamigboye@eportalnet.com)

    This function helps to solve the problem of encrypting and decrypting a string in php.
    You can either use static keys if it is to be stored in database and used overtime. 
    or use a dynamic if its only available during a single sign on session.
    Just call the function name and pass the string as an argument. 
    This could easily be implemented  as a class because of functional dependency and
    alsotaking advantage of namespace to avoid colliion of function name
     but our focus in this session is functional programming.
     usage cases : 

      encrypt('Biodun Bamigboye');
      
      output  : '6ItHGWFZ2X8lb3jMZnaQ8A==';

      decrypt('6ItHGWFZ2X8lb3jMZnaQ8A==');

      output : 'Biodun Bamigboye';

      encryptWithDynamicKey('Biodun Bamigboye');

      Output : This will be different based on the user machine and it changes everytime
      the user visits the web app. Making your app more secured.
      this can be used for ids sent to frontend over the api for identification of data and
      user just encrypt and decrypt using that current session


    */
