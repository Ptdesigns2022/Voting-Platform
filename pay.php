 <?php include('menu.php'); ?> 
            
          <?php
           include('config.php');
              

              // Sanitizing form data

              $sanitizer = filter_var_array($_POST, FILTER_SANITIZE_STRING);

              // Collecting user input from form
              

              $name = $sanitizer['contestant_name'];
              $votes = $sanitizer['votes'];
              $email = $sanitizer['email'];
              $amount = $votes * 10000;
              
              $_SESSION['name'] =  $name;
              $_SESSION['votes'] = $votes;
              $_SESSION['email'] = $email;



          ?>

            <div class="voting-payment1">
              <div class="content1">
                  <form>
                    
                    <script src="https://js.paystack.co/v1/inline.js"></script> 
                  <center>  <span>You are giving &nbsp; "<?php echo $name; ?>" &nbsp; "<?php echo $votes;?>" vote(s) </span> </center>
                    <br><br>

                    <button type="button" onclick="payWithPaystack()"> Make Payment </button> 

                     <style>
                         button{
                            margin-top: 10%;
                            margin-left: 20%;
                         }

                         .voting-payment .content span{
                           margin-top: 10%;
                           margin-left: 20%;
                           text-align: center;
                         }                    
                     </style>

                  </form>
              </div>
           </div>
 <script>
  //	const paymentForm = document.getElementById('paymentForm');
//paymentForm.addEventListener("submit", payWithPaystack, false);
function payWithPaystack(){

  var handler = PaystackPop.setup({ // This was where I made a mistake.
  //e.preventDefault();
  //let handler = PaystackPop.setup({
    key: 'pk_test_6033bc9795a8ff7146ba15a894e35ef4ca3f7631', // Replace with your public key
    email: '<?php echo $email; ?>',
    amount: <?php echo $amount; ?>,
    ref: 'VS'+Math.floor((Math.random() * 1000000000) + 1),
    firstname: "<?php echo $name; ?>",

     // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"


     callback: function(response){
    // const referenced = response.reference;
     //window.location.href='success.php?successfullypaid='+ referenced;
      let message = 'Payment Complete! Reference: ' + response.reference;
      window.location = "http://localhost/SHIFT Voting/verify-transaction.php?reference=" + response.reference;

      },
     //alert('success. transaction ref is ' + response.reference);

      //Window.location = "http://localhost/SHIFT Voting/success.php?reference=" + referenced; 
   
    onClose: function(){
      
     window.location = "http://localhost/SHIFT Voting/voting.php?reference=" + response.reference;
     alert('window closed');

    }
  });
  handler.openIframe();
}
             </script>

             </body>
           </html>