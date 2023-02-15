<!-- Custom wow Scripts -->
<script type="text/javascript">
	//new WOW().init();
	var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       true,       // trigger animations on mobile devices (default is true)
    live:         true,       // act on asynchronously loaded content (default is true)
    callback:     function(box) {
    },
    scrollContainer: null 
  }
);
wow.init();
</script>
<!-- MAIN SCRIPT -->
<script>
$(function(){
    //NEXT QUESTIONS
    $(".flex-item1").click(function(){
      var a=document.getElementById('num').innerHTML;
      if(a!=6){
        i=Number(a)+1; 
        document.getElementById('num').innerHTML=i;
      }
      if(a==1){
            $('.progress-bar').css('width','32%');
            $('.text1').html( "<em><b>OKAY!</b>"+ 
            "The income opportunity you are about to discover requires"+
            " that you do some work just like any other legitimate way of making money </b></em>");
            $('.text2').html("Are you ready to put in some work?");
        }
        if(a==2){
            $('.progress-bar').css('width','48%');
            $('.text1').html( "<em>You REALLY Want This. <b>Great</b>. Next question.</em>");
            $('.text2').html("Can you spare at least 2 hours daily to work on your business?");
        }
        if(a==3){
            $('.progress-bar').css('width','64%');
            $('.text1').html( "<em>Be <b>honest</b> here, don't waste your time or mine...</em>");
            $('.text2').html("Are you serious about changing your current financial situation?");
        }
        if(a==4){
            $('.progress-bar').css('width','80%');
            $('.text1').html( "<em><b>Ok, good!</b> I'm truly happy to hear that because what I have for you will definitely CHANGE YOUR LIFE.</em>");
            $('.text2').html("But...Are you willing to invest <u>at least N60,000</u> to start this new business?");
        }
        if(a==5){
            $('.progress-bar').css('width','100%');
            $('.text1').html( "<div style='text-align:left'><em>Great! <b>Last question...</b> in order to make N750k a Month, you'll need two things:"+
            "<br>1. A Smart phone with internet data ( I guess you already have this)"+

            "<br>2. The  willingness to learn, follow simple instructions and take fast action.</em></div>");
            $('.text2').html("Can you do that??");
        }
        if(a==6){
            $('.num').css('display','none');
            $('.progress').css('display','none');
            $('.text1').html( "<div style='text-align:left'><em style='text-align:left;'>Okay. <b>I am out of questions.</b>"+

              "<br><br>From your responses, It looks like you are a good fit for this income opportunity."+

              "<br><br>Most people don't make it this far."+

              "<br><br>Right now, you are going to get access to the FULL details of the  legitimate money making opportunity that can change your life."+

              "<br><br>Don't rush.</em></div>");
              $('.text2').css('display','none');
            $('#msg').html("<a href='app' style='font-size:1.7em;color:blue;'><em><b>Click Here To Continue</b></em></a>").fadeIn();
            $('.text3').css('display','none');
            $('.flex-container').css('display','none');
        }
    });
    $(".flex-item").click(function(){
      window.location.href="index?reject";
    });
    //REDIRECT TO ORDER PAGE
    $(document).on('click','.btn-reg',function(){
          var button_id=$(this).attr("id");
          $("#"+button_id).click(function(){
                  Swal.fire({
                        title: '<strong class=pls>PLEASE NOTE!</strong>',
                        html:
                          '<div class=text_swal><b>There are <u>no refunds</u> for this product. All sales are final.</b><br> ' +
                          'Do you still want to proceed and make payment?</div>',
                        showCloseButton: true,
                        confirmButtonText:
                          '<a href=order class=procid>YES, Proceed to Payment</a>',
                          confirmButtonColor:'#FD784F',
                      })
          })
      });
    $("#btn-pay").click(function(){
            Swal.fire({
                  title: '',
                  icon: 'info',
                  html:
                    "<div class='order-text'>You will be required to pay with your ATM Card or Bank Account Information." +"Payment is processed by Paystack's secure payment system."+
                      "Be rest assured that your details are secured</div>",
                  showCancelButton: true,
                  confirmButtonText:
                    '<a href=index class=procid>I understand, continue</a>',
                    confirmButtonColor:'#6CC5A7',
                    cancelButtonColor:'#fff',
                    cancelButtonText:'<span class=order-cancel>Cancel</span>',
                })
            //Swal.fire('checking','Testing','success');
    })
     
});

function preventForward(){window.history.forward();}
setTimeout("preventForward()",0);
window.onload=function(){null};
 //CONFIRM PASSWORD
    /* $('#Cpassword').keyup(function(){
        var password=$('#password').val();
        var Cpassword=$('#Cpassword').val();
        if(password===Cpassword){
          $('#message').fadeIn('slow');
          $('#message').html("<span class='text-success'>Password matched !!!</span>");
          setTimeout(function(){
             $('#message').fadeOut('slow');
           },10000);
        }
        else{
          $('#message').fadeIn('slow');
          $('#message').html("<span class='text-danger'>Password do not matched !!!</span>");
        }
      });

    //UPDATING ADD USER POPUP
      $(document).ready(function(){
        var id=$('#input_id').val();
        if(id=='ed'){
           $('#addUser').modal('show');
        }
      });

      //UPDATING PASSWORD
      $('#con_pass').keyup(function(){
        var password_c=$('#password_c').val();
        var con_pass=$('#con_pass').val();
        if(password_c===con_pass){
          $('#message').fadeIn('slow');
          $('#message').html("<span class='text-success'>Password matched !!!</span>");
          setTimeout(function(){
             $('#message').fadeOut('slow');
           },10000);
        }
        else{
          $('#message').fadeIn('slow');
          $('#message').html("<span class='text-danger'>Password do not matched !!!</span>");
        }
      });

    //SAVING CONTAINER NUMBER ON TRANSIRE
   $(document).on('click','#trans-upBtn',function(){
        var button_id=$(this).attr("data-id");
        var idNum=$('#idcon'+button_id).val();
        var conNum=$('#'+button_id).val();
        var sealNum=$('#sn'+button_id).val();
         $.ajax({
          url:"containerSeal",
          method:"POST",
          data:{idNum:idNum,conNum:conNum,sealNum:sealNum},
          success:function(d){
            $('#success_msg').html(d);
          }
        });
    });  */
//**************** ENQUIRY MESSAGE PAGE **********************
    //GETTING THE ID ON MESSAGE CLICK
    /* $(document).on('click','.msgID',function(){
        var button_id=$(this).attr("id");
        $("#msgID1").val(button_id);
        $('.message').fadeOut('slow');
        $.ajax({
          url:"fetch_message",
          method:"POST",
          data:$('#get_message').serialize(),
          success:function(d){
            $('.message1').html(d);
            $('.message1').fadeIn('slow');
          }
        });
    }); 

      //REMOVING THE CONTAINER FIELD
        $(document).on('click','.btn_remove',function(){
            var button_id=$(this).attr("id");
            $("#"+button_id).remove();
        });*/
</script>

