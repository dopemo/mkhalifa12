 <?php
 function movieInfo() 
    {
            
            $curl = curl_init();
          
            
            curl_setopt_array($curl, array(
        
            
              CURLOPT_URL => "https://api.sportradar.us/nfl-ot1/games/2006/reg/schedule.json?api_key=u5kxa4drugecrtak3smyk3cz",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "GET",
                CURLOPT_POSTFIELDS => array(),
            ));
           $jsonData = curl_exec($curl);
    $data = json_decode($jsonData, true); //true makes it an array!
    
    
    //echo $data['weeks'][0]['id'];
    for($i=0;$i<10;$i++){
    echo $data['weeks'][$i]['games'][0]['home']['name'];
    echo "<br>";
    echo $data['weeks'][$i]['games'][0]['away']['name'];
    echo "<br>";
    }
}
movieInfo();
?>