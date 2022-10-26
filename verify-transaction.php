<?php
   

  $ref = $_GET['reference'];
   if ($ref == "") {
      header("Location:javascript://history.go(-1)");
   }
?>

<?php
  $curl = curl_init();
  
  curl_setopt_array($curl, array(
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($ref),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => array(
      "Authorization: Bearer sk_test_4dc96bf78f66167fad5ca530f3a3645d44ac11cd",
      "Cache-Control: no-cache",
    ),
  ));
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  curl_close($curl);
  
  if ($err) {
    echo "cURL Error #:" . $err;
  } else {
   // echo $response;

    $result = json_decode($response);

  }

  if ($result->data->status == 'success')
  {
     header('Location:'.SITEURL.'success.php'?status=success);
   }

      else{
        header('location:'.SITEURL.'error.php');
      }
      /*
      c

        if ($res == true) {
            header("Location: success.php?status=success");
           exit;
        }
    
        else{
          echo "Database not updated Successfully";
        }
       
*/
      
     

?>
