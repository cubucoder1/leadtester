<?php
//Data, connection, auth
 //$dataFromTheForm = $_POST['fieldName']; // request data from the form
 $soapUrl = "https://wixautwso2-api.autohall.ma:8243/CRM2/1/"; // asmx URL of WSDL
 //$soapUser = "username";  //  username
 //$soapPassword = "password"; // password
$loginsoap = "AU-AU-LALLAYACOUT";
$passwordsoap = "juwPTETTA1";
 // xml post structure
$text = $_POST['textfromhtml'];
 $xml_post_string = '<?xml version="1.0" encoding="utf-8"?>
 <soap12:Envelope xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:soap12="http://www.w3.org/2003/05/soap-envelope">
   <soap12:Body>
     <CreeLead2 xmlns="http://tempuri.org/">
    <sLoginE>'.$loginsoap.'</sLoginE>
       <sPasswordE>'.$passwordsoap.'</sPasswordE>
        '.$text.'
     </CreeLead2>
   </soap12:Body>
 </soap12:Envelope>';   // data from the form, e.g. some ID number

    $headers = array(
                 "Content-type: text/xml;charset=\"utf-8\"",
                 "Accept: text/xml",
                 "Cache-Control: no-cache",
                 "Pragma: no-cache",
                 //"SOAPAction: http://connecting.website.com/WSDL_Service/GetPrice", 
                 "Content-length: ".strlen($xml_post_string),
             ); //SOAPAction: your op URL

     $url = $soapUrl;

     // PHP cURL  for https connection with auth
     $ch = curl_init();
     //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 1);

     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     //curl_setopt($ch, CURLOPT_USERPWD, $soapUser.":".$soapPassword); // username and password - declared at the top of the doc
     curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
     curl_setopt($ch, CURLOPT_TIMEOUT, 10);
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_POSTFIELDS, $xml_post_string); // the SOAP request
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     

     // converting
     $responseE = curl_exec($ch); 
     curl_close($ch);
     

     // converting
     $response1 = str_replace("<soap:Body>","",$responseE);
     $response2 = str_replace("</soap:Body>","",$response1);

     // convertingc to XML
     $parser = simplexml_load_string($response2);

     $parser = json_encode($parser);
     //print_r($parser);
     // user $parser to get your data out of XML response and to display it. 
     
     $data = $parser;
///////////////////// FIN SOAP
  
  
  $res = '';
  
  echo "Merci de vérifiez  dans eSeller";
  