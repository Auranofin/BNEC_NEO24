<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>Accept Refund | {{ $refund->registration->user->name }}</title>
      @vite('resources/js/app.js' , 'vendor/courier/build')

      <style type="text/css">
            /* general settings */
            * {
                  margin:0;
                  padding:0
            }
            body {
                  /*  */
            }

            /* text */
            .name {
                  font-family: sans-serif;
            }
            
            .head_email{

            }
            .body_email{
                  /* text */
                  color: black;
                  font-size: 15px;
                  
                  /* position */
                  margin-top: 2rem;
            }
            .foot_email{
                  /* text */
                  color: black;
                  font-size: 15px;
            }
            .signature{
                  /* text */
                  color: black;
                  font-size: 15px;
            }
    </style>

</head>
<body>
      <h1 class="head_email"># Dear {{ $refund->registration->user->name }}, </h1>
                  
      <div class="body_email">
            <p>Your refund request has been accepted. We have transferred back your payment of Rp
                  {{ number_format($refund->payment_amount, 0, '.', '.') }} to:</p>
            
            <p>
                  <span style="margin-left: 1rem">{{ $refund->dest_account_name }}</span> <br>
                  <span style="margin-left: 1rem">{{ $refund->bank_name }} {{ $refund->dest_account_number }}</span>
            </p>

            <p>Please find the proof of payment that we have attached to this email.</p>
      </div>
      <p class="foot_email">
            If you have further questions, please contact us at our LINE Official @816tzkes or email neo.bnec@gmail.com
      </p>
      <br><br>
      <p class="signature">
            --<br>
            <p style="padding: 0px 50px;color:black">
                  Best Regards,<br>
                  The 2023 National English Olympics Committee<br>
                  Email : neo.bnec@gmail.com<br>
                  Line  : @816tzkes<br>
                  <img src="https://neo.mybnec.org/storage/logo/NEO-FULL/Colored.png" width="200px" style="padding: 30px 0;">
            </p>
      </p>
</body>
</html>