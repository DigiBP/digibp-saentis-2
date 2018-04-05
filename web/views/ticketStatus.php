<?php

echo 'Display ticket status';

$processInstances = callCamundaAPI("https://saentisincident.herokuapp.com/rest/process-instance");

$arrProcessInstances = json_decode($processInstances, true);
 print_r($arrProcessInstances);        // D
 echo '<br /><br /><br />';
var_dump($processInstances);
// Variables
//https://saentisincident.herokuapp.com/rest/process-instance/d322ef06-38e8-11e8-98ba-72f9e2b639dc/activity-instances

    }
function callCamundaAPI($url, $data_string){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );

        $result = curl_exec($ch);
	  var_dump($result);

}


?>

