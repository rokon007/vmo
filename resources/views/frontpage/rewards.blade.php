@extends('frontpage.frontpage')
@section('title') 
 <title>Vimbiso | Rewards</title>
         <meta name="description" content="vary good">
     <meta name="keywords" content="vimbiso">
	 <script>
function showdiv(){
	document.getElementByid("timer")style.display="block";
}
setTimeout("showdiv()",50000);

function hidediv(){
	document.getElementByid("timer")style.display="none";
	document.getElementByid("dload")style.display="block";
}
setTimeout("hidediv()",6000);

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


<!--  About -->
      <section >
              <!-- Content -->
    
<link rel="stylesheet" href="../static/css/aboutus.css">

<div class="container-fluid m-0 p-0">
    <div class="row justify-content-center align-items-center">

        <div class="col-sm-12 col-md-8 col-lg-8 pl-5 pr-3 p-lg-5  align-items-center text-left">
            <h1 class="about-heading pb-lg-5 pb-sm-2">How to get Reward</h1>
            <span class="about-description" style="text-decoration:none;color:black;font-size:16px">
                Vimbiso is a free independent & transparent customer assurance platform.
                At Vimbiso we believe the key to unlocking business success starts by listening to your customers.<br><br>
                Our mission is to bridge the gap between consumers & companies.
                We provide a powerful voice to share their experiences & enable companies to respond & continually improve their customer’s experience.
            </span>
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4">
            <div class="image-circle m-5">
                <img src="../static/images/logo-no-bg.png" />
            </div>
        </div>
        <a  style="background:red;color:#fff;padding:10px;text-decoration:none;display:block">Download Free Guide "How to get Reward"</a>
      
     

    </div>
    
    <div id="wer"></div>
	<br>
	<div id="timer"  class="row justify-content-center align-items-center">
	 <p id="countdown" style="background:#333ab7;color:#fff;padding:12px;text-decoration:none;display:block">59s</p>
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
    
</div>

    
    
        <script>
            ''
        </script>
     </section>
                    
                    
                    
                   
<!-- Modal -->
         @include('frontpage.give_review');
       
     <!-- FOOTER -->


@endsection


    
      
     