<?php
    session_start();
    
    if (isset($_POST['submit'])) {
        

        $errors  = array();
        $errmsg  = '';

        $config = array(
            "env"              => "sandbox",
            "BusinessShortCode"=> "174379",
            "key"              => "PZotaQzHAzRfL8MijzF8CHkG3Rr4eQbs", //Enter your consumer key here
            "secret"           => "g2i31biwNsfASoZM", //Enter your consumer secret here
            "username"         => "MpesaTest",
            "TransactionType"  => "CustomerPayBillOnline",
            "passkey"          => "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919", //Enter your passkey here
            "CallBackURL"      => "https://f899-41-90-64-220.ngrok.io/mpesa/callback.php", //When using localhost, Use Ngrok to forward the response to your Localhost
            "AccountReference" => "clinic",
            "TransactionDesc"  => "Payment of X" ,
        );



        if (isset($_POST['phone_number'])) {

            $phone = $_POST['phone_number'];
            $orderNo = "#";
            $orderNo = mt_rand(0000, 9999);
            $amount = $_POST['amount'];
            $user_id = $_POST['user_id'];
            $phone = (substr($phone, 0, 1) == "+") ? str_replace("+", "", $phone) : $phone;
            $phone = (substr($phone, 0, 1) == "0") ? preg_replace("/^0/", "254", $phone) : $phone;
            $phone = (substr($phone, 0, 1) == "7") ? "254{$phone}" : $phone;



            $access_token = ($config['env']  == "live") ? "https://api.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials" : "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials"; 
            $credentials = base64_encode($config['key'] . ':' . $config['secret']); 
            
            $ch = curl_init($access_token);
            curl_setopt($ch, CURLOPT_HTTPHEADER, ["Authorization: Basic " . $credentials]);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
            $response = curl_exec($ch);
            curl_close($ch);
            $result = json_decode($response); 
            $token = isset($result->{'access_token'}) ? $result->{'access_token'} : "N/A";

            $timestamp = date("YmdHis");
            $password  = base64_encode($config['BusinessShortCode'] . "" . $config['passkey'] ."". $timestamp);

            $curl_post_data = array( 
                "BusinessShortCode" => $config['BusinessShortCode'],
                "Password" => $password,
                "Timestamp" => $timestamp,
                "TransactionType" => $config['TransactionType'],
                "Amount" => $amount,
                "PartyA" => $phone,
                "PartyB" => $config['BusinessShortCode'],
                "PhoneNumber" => $phone,
                "CallBackURL" => $config['CallBackURL'],
                "AccountReference" => $config['AccountReference'],
                "TransactionDesc" => $config['TransactionDesc'],
            ); 

            $data_string = json_encode($curl_post_data);

            $endpoint = ($config['env'] == "live") ? "https://api.safaricom.co.ke/mpesa/stkpush/v1/processrequest" : "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest"; 

            $ch = curl_init($endpoint );
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'Authorization: Bearer '.$token,
                'Content-Type: application/json'
            ]);
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $response     = curl_exec($ch);
            curl_close($ch);

            $result = json_decode(json_encode(json_decode($response)), true);

            if(!preg_match('/^[0-9]{10}+$/', $phone) && array_key_exists('errorMessage', $result)){
                $errors['phone'] = $result["errorMessage"];
            }

            if($result['ResponseCode'] === "0"){         //STK Push request successful

                $MerchantRequestID = $result['MerchantRequestID'];
                $CheckoutRequestID = $result['CheckoutRequestID'];
        
                
                ?>
                    <script>
                        alert("Payment was successfully")
                        setTimeout(() => {
                            location.href = 'payment.php?id=<?php echo $user_id?>'
                        }, 100);
                    </script>
                <?php
                
            }else{
                $errors['mpesastk'] = $result['errorMessage'];
                foreach($errors as $error) {
                    $errmsg .= $error . '<br />';
                }
            }
        }


    }