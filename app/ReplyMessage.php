<?php

namespace App; 

use Illuminate\Database\Eloquent\Model;

use Mail;

class ReplyMessage extends Model
{
    /** Sends Messages From Contact Form */
    public static function SendMessage($body,$subject,$name,$to,$id){
      //The Generic mailler Goes here
      $data = array(
        'name'=>$name,
        'subject'=>$subject,
        'messageAppend'=>$body
    );
    $appName = 'info@stagepass.co.ke';
    $appEmail = 'info@stagepass.co.ke';
 
 
    $FromVariable = $appEmail;
    $FromVariableName = $appName;

    $toVariable = $to;
    $toVariableName = $name;


    Mail::send('mail', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
        $message->from($FromVariable , $FromVariableName);
        $message->to($toVariable, $toVariableName)->cc('info@stagepass.co.ke')->subject($subject);
    
});
// Sets the status to Read
  $updateDetail = array(
      'status' => 1
  );
  DB::table('messages')->where('id',$id)->update($updateDetail);
  return back();
    }

    public static function mailSubscriber($email,$subject,$content,$url){
        $data = array(
            
            
            'content'=>$content,
            'url'=>$url,
            'subject'=>$subject,
           
        );
        
        $appName = 'info@stagepass.co.ke';
        $appEmail = 'info@stagepass.co.ke';
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;
        $toVariableName = 'Dear Client,';


        Mail::send('mailSubscriber', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@stagepass.co.ke')->subject($subject);
        });
    }
    /** Sends The Subscribers Mail with attachment link, the Url is the link to the file */
    public static function mailSubscribers($email,$subject,$content,$url){
        $data = array(
            
            
            'content'=>$content,
            'url'=>$url,
            'subject'=>$subject,
           
        );
        
        $appName = 'info@stagepass.co.ke';
        $appEmail = 'info@stagepass.co.ke';
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $email;
        $toVariableName = 'Dear Client,';


        Mail::send('mailSubscriber', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@stagepass.co.ke')->subject($subject);
        });
    }

  
    public static function mailNotificaton($name,$email,$subject,$message){
        //The Generic mailler Goes here
        $data = array(
            'name'=>$name,
            'email'=>$email,
            'content'=>$message,
            'service'=>$subject,
          
        );
        $subject = "You Have a New Message";
        $appName = 'Stagepass AV Contact Mailer';
        $appEmail = 'info@stagepass.co.ke';
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;

        $toVariableName = 'Stagepass Audio Visual Limited';


        Mail::send('mailContact', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@stagepass.co.ke')->subject($subject);
        });
    }

    public static function sendrfp($fname,$email,$phone,$message){
        $data = array(
            'name'=>$fname,
            'email'=>$email,
            'content'=>$message,
            'phone'=>$phone,
          
        );
        $subject = "You have a new RFP request";
        $appName = 'info@stagepass.co.ke';
        $appEmail = 'info@stagepass.co.ke';
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;

        $toVariableName = 'Stagepass Audio Visual Limited';


        Mail::send('contatRFP', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@stagepass.co.ke')->subject($subject);
        });
    }

    public static function notification($email){
        $data = array(
            
            'email'=>$email,
            
          
        );
        $subject = "Business Profile Request";
        $appName = 'info@stagepass.co.ke';
        $appEmail = 'info@stagepass.co.ke';
    
    
        $FromVariable = $appEmail;
        $FromVariableName = $appName;

        $toVariable = $appEmail;

        $toVariableName = 'Stagepass Audio Visual Limited';


        Mail::send('mailBP', $data, function($message) use ($subject,$FromVariable,$FromVariableName,$toVariable,$toVariableName){
            $message->from($FromVariable , $FromVariableName);
            $message->to($toVariable, $toVariableName)->cc('info@stagepass.co.ke')->cc('info@stagepass.co.ke')->subject($subject);
        });
    }
}
