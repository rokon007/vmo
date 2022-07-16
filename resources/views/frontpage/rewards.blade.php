@extends('frontpage.frontpage')
@section('title') 
 <title>Vimbiso | Rewards</title>
         <meta charset="utf-8">
    <meta name="description" content="
    Vimbiso is a free independent & transparent customer assurance platform. At Vimbiso we believe the key to unlocking business success starts by listening to your customers.
    ">
    <meta name="keywords" content="Vimbiso,how grow business,12/04">
    <meta name="author" content="Tanaka Karumazondo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	 <!-- <script>
function showdiv(){
	document.getElementByid("timer")style.display="block";
}
setTimeout("showdiv()",50000);




setTimeout(function() {
    document.getElementByid("timer")style.display="none";
	document.getElementByid("dload")style.display="block";
}, 60000);

</script> -->
<script>
    setTimeout(function() {
    $('#timer').fadeOut('fast');
	 $('#dload').fadeIn('fast');
}, 60000);
</script>
<script>
   var seconds=0;
   function displaysecond(){
    seconds +=1;
    document.getElementByid('wer').innerText="Preparing Download Will Be In"+seconds+" Seconds ...";
   } 
   setInterval(displaysecond, 1000);
</script>
    
@endsection 
 

@section('body') 
<div   class="row justify-content-center align-items-center">

        <a  style="background:red;color:#fff;padding:10px;text-decoration:none;display:block">Download Free Guide "How to get Reward"</a>
      
     

    </div>
    
    <div id="wer"></div>
	<br>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<div id="timer"  class="row justify-content-center align-items-center">
	 <p id="countdown" style="background:#333ab7;color:#fff;padding:12px;text-decoration:none;display:block">Preparing download please wait 60 seconds</p>
	 <script>
const startingMinutes=10;
let time = startingMinutes * 60;

const countdownEl =document.getElementByid('countdown');

setInterval(updateCountdown, 1000);

function updateCountdown(){
const minutes = Math.floor(time/60);
let seconds = time%60;
second = second < 10 ? '0' + seconds :seconds;
countdownEl.innerHtml = '${minutes}:${seconds}';
time--;
}
</script>
	</div>
	<br>
	<div id="dload" style="display:none;" class="row justify-content-center align-items-center">
	 <a href="/download" style="background:#333ab7;color:#fff;padding:12px;text-decoration:none;display:block">Download</a>
	</div>
	<br>
	<div class="row justify-content-center align-items-center">
	  <a  style="background:red;color:#fff;padding:10px;text-decoration:none;display:block;font-size:12px;">Note: If The Link is Not Working Then Try Again Later</a>
	</div>
                    
                    
                    
                   
<!-- Modal -->
         @include('frontpage.give_review');
       
     <!-- FOOTER -->


@endsection


    
      
     