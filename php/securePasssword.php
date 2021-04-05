<?php
function securePassword($userPassword, $savedPassword=true) {

$hash = password_hash($userPassword, PASSWORD_BCRYPT);

return is_bool($savedPassword) ? $hash : password_verify($userPassword,$savedPassword);


}
/* 
Author Biodun Bamigboye

Description :
A basic function to securely hash and confirm password in php programming language
If first argument is passed it hash the password and return the hash value,
if  plain user password is passed  as first argument and the saved hash is passed as second argument
it compares and return true or false
 usage case 1  : 
securePassword('12345abc');
return value : $2y$10$mlbam8RbSg60EvHkwAoavu/nKKrg/otuNl457RxWkhbZOqBKebw.2

Usage case 2 :
securePassword('12345abc','$2y$10$mlbam8RbSg60EvHkwAoavu/nKKrg/otuNl457RxWkhbZOqBKebw.2');

return value : true

usage case 3 : 
securePassword('1234567abc','$2y$10$mlbam8RbSg60EvHkwAoavu/nKKrg/otuNl457RxWkhbZOqBKebw.2');

return value : false

*/



