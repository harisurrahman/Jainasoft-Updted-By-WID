<?php

class PHP_Email_Form
{
  public $to;//Who the email will be sent to.
	public $from_email;//Who the email is from
	public $from_name;//The name of the sender
	public $subject;//The subject of the email
	public $message;

	function send()//Mail Sending Function.
	{
		

		$contents = "
		From: ".$this->from_email."<br />
		Name: ".$this->from_name."<br />
		Subject: ".$this->subject."<br />
		Message: ".$this->message;

		//setting Email headers
		$headers =  $this->from_email;
	
		//PHP Mail method to send email
		if(mail($this->to, $this->subject, $this->message, $headers)){
			echo "OK";
		}else{
			echo "error";
		}

		//Return true if the mail was sent successfully.
		
	}

	function redirect($path)//Redirect class for after the mail is sent.
	{
		//Telling the browser where to go.
		header("Location: $path");
	}

	function add_message($name,$data){
		return  $data." : ". " ".$name;
		
	}

	function success(){
		return "Successfully sent";
	}
}
?>