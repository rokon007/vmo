@extends('frontpage.frontpage')
 

@section('body') 


<style type="text/css">
  .card-btn{
    position:absolute;
    bottom:10px;
}
.card{
    min-height:590px;
}
.list-group-item::before{
    font-family: "Font Awesome 5 Brands";
    font-weight: 400;
    content: "✓";
    padding-right:5px;
    color:var(--green); 
}
.text-subheading{
    font-weight: 600;
    font-size: 17px;
}
</style>
    
      <!--  About -->
     <section id="courses">
          <div class="container">
               <div class="row">

                    <div class="col-md-12 col-sm-12">
                         <div class="section-title">
                              <h2>Plans & Pricing <small>Find the right plan for you</small></h2>
                         </div>

                         <div class="owl-carousel owl-theme owl-courses">
                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                <!---->
                                                  <div class="card card1">
                                                   <div class="card-body">
                                                     <div class="card-header">
                                                       <h3 style="font-weight:700"></strong>Free Plan</strong></h3>
                                                       <h1 class="card-title">$0</h1>
                                                       <br>
                                                       <p class="text-subheading">Claim your company profile & show ratings</p>
                                                   </div>
                                                      <ul class="list-group">
                                                      <li class="list-group-item">Claim your business profile page</li>
                                                      <li class="list-group-item">Invite customer reviews</li>
                                                      </ul>
                                                       <br>
                                                       <a href="#" class="card-link btn btn-primary card-btn border-0 bright-red-bg">Subscribe</a>
                                                  </div>
                                                 </div>
                                                  <!---->
                                             </div>

                                             </div>
                                   </div>
                              </div>
                                             
                                        

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                <!---->
                                                  <div class="card card2">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 style="font-weight:700"></strong>Standard Plan</h3>
                            <span class=""><strong>From</strong></span>
                            <h1 class="card-title mt-1">
                            $10 <blockquote class=" pl-2" style="display:inline-block"><p><strong>per month</strong><br> Paid annually</p></blockquote>
                            </h1>
                            <p class="text-subheading">Engage with customers & show ratings</p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Claim your business profile page</li>
                            <li class="list-group-item">Invite customer reviews</li>
                            <li class="list-group-item">Respond to reviews</li>
                        </ul>

                        <br>
                        <button type="button" onclick="submitForm('price_1K9qTqB4k1y3jDV8ZjJGXsPU');" class="card-link btn btn-primary card-btn border-0 bright-yellow-bg">Subscribe</button>
                    </div>
                </div>
                                                  <!---->
                                             </div>

                                             </div>
                                   </div>
                              </div>

                              <div class="col-md-4 col-sm-4">
                                   <div class="item">
                                        <div class="courses-thumb">
                                             <div class="courses-top">
                                                <!---->
                                                   <div class="card card3">
                    <div class="card-body">
                        <div class="card-header">
                            <h3 style="font-weight:700"></strong>Premium Plan</h3>
                            <span class=""><strong>From</strong></span>
                            <h1 class="card-title mt-1">
                            $20 <blockquote class=" pl-2" style="display:inline-block"><p><strong>per month</strong><br> Paid annually</p></blockquote>
                            </h1>
                            <p class="text-subheading">All reviews verified <i class="fas fa-check-circle "></i> for authenticity in your marketing.</p>
                        </div>
                        <ul class="list-group">
                            <li class="list-group-item">Claim your business profile page</li>
                            <li class="list-group-item">Invite customer reviews</li>
                            <li class="list-group-item">Respond to reviews</li>
                            <li class="list-group-item">All reviews verified </li>
                        </ul>

                        <button type="button" onclick="submitForm('price_1K2lRqB4k1y3jDV8MCSrIfMw');" class="card-link btn btn-primary card-btn border-0 bright-green-bg">Subscribe</button>
                    </div>
                </div>
                                                  <!---->
                                             </div>

                                             </div>
                                   </div>
                              </div>

                             

                             
                         </div>

               </div>
          </div>
     </section>

                    
                    
                    
                   

       <!-- Modal -->
           @include('frontpage.give_review');


     <!-- FOOTER -->


@endsection 


    