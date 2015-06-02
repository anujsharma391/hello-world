<?php

	    error_reporting(0);

	    $androidDeviceToken = 'APA91bEG0A3J1oD71jEqFD3lGmzvZme9dm7qkQwbJmizlJ2e6cErnmckKapHARcrjNziG1euoQiMF3xI3NwaDmUBpa1ugbEoYiozse_jeKTM-sqKflfhjuQH3D8CtDuUpyyPR8EJTlyYexZNj19k6Xw05U4xx5nTxQ';
            
            /* Android Push Notification Functionality */
            if(!empty($androidDeviceToken)){
                
                        // API access key from Google API's Console
                        define('API_ACCESS_KEY', 'AIzaSyALVupXV5fk1lCnH7S3KwIeHTyhvTVDNKc');
                        
                        $registrationIds = array($androidDeviceToken);
                        
                        $msg = array
                        (
                        'message'	=> 'You have received a message from android device123',
                        'vibrate'	=> 1,
                        'sound'		=> 1,
			'badge'	=> 115
                        );
                        
                        $fields = array
                        (
                        'registration_ids' => $registrationIds,
                        'data'	=> $msg
                        );
                        $headers = array
                        (
                        'Authorization: key=' . API_ACCESS_KEY,
                        'Content-Type: application/json'
                        );
                        
                        $ch = curl_init();
                        curl_setopt( $ch,CURLOPT_URL, 'https://android.googleapis.com/gcm/send' );
                        curl_setopt( $ch,CURLOPT_POST, true );
                        curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
                        curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
                        curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
                        curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
                        $result = curl_exec($ch );
			$result_decode = json_decode($result);
			
                        //echo '<pre>';print_r($result_decode);//die('dfdfd');
			
                        if(!empty($result_decode->failure)){//die('if');
                            $android_response['error']['status']   = 0;
                            $android_response['error']['code']     = 204;
                            $android_response['error']['messages'] = 'Android push not send.';
                        }else{//die('else');
                            $android_response['success']['status']   = 0;
                            $android_response['success']['code']     = 205;
                            $android_response['success']['messages'] = 'Android push send successfully.';
                            //$android_response['success']['data'] = $countAndroidDeviceNotification;
                        }
                        curl_close( $ch );
                        echo '<pre>';print_r($android_response);die('tttttttttttt*****ttttt');
            }
?>