<?php
function send_mail($sender,$sender_mail,$subject,$email_body){
    $toemail="saurabhvbbpj@gmail.com";
    $from = $sender;
	$fromemail = $sender_mail;
	if($toemail!=''){
		$from = '=?UTF-8?B?'.base64_encode($from).'?=<'.$fromemail.'>';
		$to   = '=?UTF-8?B?'.base64_encode($to).'?=<'.$toemail.'>';
		$result = @mail($toemail, '=?UTF-8?B?'.base64_encode($subject).'?=',$email_body,"To:".$to."\n" ."From: ".$from."\n" . "MIME-Version: 1.0\n" .
			"Content-type: text/html; charset=UTF-8");
        if($result){
            return true;
        }else{
            return false;
        }
    }

}

?>