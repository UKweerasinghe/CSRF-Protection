<?php

class token {
   
	public static function checkToken($token,$sessionIdentifier){
		
		
echo "<script>alert('$sessionIdentifier');</script>";
		
		$myfile = fopen("Tokens.txt", "r") or die("Unable to open the file!");
		list($tok,$sid) = explode(",",chop(fgets($myfile)),2); 
		fclose($myfile);
		if($tok == $token){
			if($sessionIdentifier == $sid ){
		return true;
			}
		}
		
	}
	
	


}
?>