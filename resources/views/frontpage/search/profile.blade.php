@extends('frontpage.search.frontpage1')
 

@section('body') 
<style>
@media (min-width:992px) {
 .container1 {
  max-width:960px
 }
}
@media (min-width:1200px) {
 .container1 {
  max-width:1140px
 }
}
.container1-fluid1 {
 width:100%;
 padding-right:15px;
 padding-left:15px;
 margin-right:auto;
 margin-left:auto
}
.row1 {
 display:-webkit-box;
 display:-ms-flexbox;
 display:flex;
 -ms-flex-wrap:wrap;
 flex-wrap:wrap;
 margin-right:-15px;
 margin-left:-15px
}
.d-none {
 display:none!important
}
.d-inline {
 display:inline!important
}
.d-inline-block {
 display:inline-block!important
}
.d-block {
 display:block!important
}
.d-table {
 display:table!important
}
.d-table-row {
 display:table-row!important
}
.d-table-cell {
 display:table-cell!important
}
.d-flex {
 display:-webkit-box!important;
 display:-ms-flexbox!important;
 display:flex!important
}
.d-inline-flex {
 display:-webkit-inline-box!important;
 display:-ms-inline-flexbox!important;
 display:inline-flex!important
}
@media (min-width:576px) {
 .d-sm-none {
  display:none!important
 }
 .d-sm-inline {
  display:inline!important
 }
 .d-sm-inline-block {
  display:inline-block!important
 }
 .d-sm-block {
  display:block!important
 }
 .d-sm-table {
  display:table!important
 }
 .d-sm-table-row {
  display:table-row!important
 }
 .d-sm-table-cell {
  display:table-cell!important
 }
 .d-sm-flex {
  display:-webkit-box!important;
  display:-ms-flexbox!important;
  display:flex!important
 }
 .d-sm-inline-flex {
  display:-webkit-inline-box!important;
  display:-ms-inline-flexbox!important;
  display:inline-flex!important
 }
}
@media (min-width:768px) {
 .d-md-none {
  display:none!important
 }
 .d-md-inline {
  display:inline!important
 }
 .d-md-inline-block {
  display:inline-block!important
 }
 .d-md-block {
  display:block!important
 }
 .d-md-table {
  display:table!important
 }
 .d-md-table-row {
  display:table-row!important
 }
 .d-md-table-cell {
  display:table-cell!important
 }
 .d-md-flex {
  display:-webkit-box!important;
  display:-ms-flexbox!important;
  display:flex!important
 }
 .d-md-inline-flex {
  display:-webkit-inline-box!important;
  display:-ms-inline-flexbox!important;
  display:inline-flex!important
 }
}
@media (min-width:992px) {
 .d-lg-none {
  display:none!important
 }
 .d-lg-inline {
  display:inline!important
 }
 .d-lg-inline-block {
  display:inline-block!important
 }
 .d-lg-block {
  display:block!important
 }
 .d-lg-table {
  display:table!important
 }
 .d-lg-table-row {
  display:table-row!important
 }
 .d-lg-table-cell {
  display:table-cell!important
 }
 .d-lg-flex {
  display:-webkit-box!important;
  display:-ms-flexbox!important;
  display:flex!important
 }
 .d-lg-inline-flex {
  display:-webkit-inline-box!important;
  display:-ms-inline-flexbox!important;
  display:inline-flex!important
 }
}
@media (min-width:1200px) {
 .d-xl-none {
  display:none!important
 }
 .d-xl-inline {
  display:inline!important
 }
 .d-xl-inline-block {
  display:inline-block!important
 }
 .d-xl-block {
  display:block!important
 }
 .d-xl-table {
  display:table!important
 }
 .d-xl-table-row {
  display:table-row!important
 }
 .d-xl-table-cell {
  display:table-cell!important
 }
 .d-xl-flex {
  display:-webkit-box!important;
  display:-ms-flexbox!important;
  display:flex!important
 }
 .d-xl-inline-flex {
  display:-webkit-inline-box!important;
  display:-ms-inline-flexbox!important;
  display:inline-flex!important
 }
}
@media print {
 .d-print-none {
  display:none!important
 }
 .d-print-inline {
  display:inline!important
 }
 .d-print-inline-block {
  display:inline-block!important
 }
 .d-print-block {
  display:block!important
 }
 .d-print-table {
  display:table!important
 }
 .d-print-table-row {
  display:table-row!important
 }
 .d-print-table-cell {
  display:table-cell!important
 }
 .d-print-flex {
  display:-webkit-box!important;
  display:-ms-flexbox!important;
  display:flex!important
 }
 .d-print-inline-flex {
  display:-webkit-inline-box!important;
  display:-ms-inline-flexbox!important;
  display:inline-flex!important
 }
}
.align-baseline {
 vertical-align:baseline!important
}
.align-top {
 vertical-align:top!important
}
.align-middle {
 vertical-align:middle!important
}
.align-bottom {
 vertical-align:bottom!important
}
.align-text-bottom {
 vertical-align:text-bottom!important
}
.align-text-top {
 vertical-align:text-top!important
}
.bg-primary {
 background-color:#007bff!important
}
a.bg-primary:focus,
a.bg-primary:hover,
button.bg-primary:focus,
button.bg-primary:hover {
 background-color:#0062cc!important
}
.bg-secondary {
 background-color:#6c757d!important
}
a.bg-secondary:focus,
a.bg-secondary:hover,
button.bg-secondary:focus,
button.bg-secondary:hover {
 background-color:#545b62!important
}
.bg-success {
 background-color:#28a745!important
}
a.bg-success:focus,
a.bg-success:hover,
button.bg-success:focus,
button.bg-success:hover {
 background-color:#1e7e34!important
}
.bg-info {
 background-color:#17a2b8!important
}
a.bg-info:focus,
a.bg-info:hover,
button.bg-info:focus,
button.bg-info:hover {
 background-color:#117a8b!important
}
.bg-warning {
 background-color:#ffc107!important
}
a.bg-warning:focus,
a.bg-warning:hover,
button.bg-warning:focus,
button.bg-warning:hover {
 background-color:#d39e00!important
}
.bg-danger {
 background-color:#dc3545!important
}
a.bg-danger:focus,
a.bg-danger:hover,
button.bg-danger:focus,
button.bg-danger:hover {
 background-color:#bd2130!important
}
.bg-light {
 background-color:#f8f9fa!important
}
a.bg-light:focus,
a.bg-light:hover,
button.bg-light:focus,
button.bg-light:hover {
 background-color:#dae0e5!important
}
.bg-dark {
 background-color:#343a40!important
}
a.bg-dark:focus,
a.bg-dark:hover,
button.bg-dark:focus,
button.bg-dark:hover {
 background-color:#1d2124!important
}
.bg-white {
 background-color:#fff!important
}
.bg-transparent {
 background-color:transparent!important
}
.border {
 border:1px solid #dee2e6!important
}
.border-top {
 border-top:1px solid #dee2e6!important
}
.border-right {
 border-right:1px solid #dee2e6!important
}
.border-bottom {
 border-bottom:1px solid #dee2e6!important
}
.border-left {
 border-left:1px solid #dee2e6!important
}
.border-0 {
 border:0!important
}
.border-top-0 {
 border-top:0!important
}
.border-right-0 {
 border-right:0!important
}
.border-bottom-0 {
 border-bottom:0!important
}
.border-left-0 {
 border-left:0!important
}
.border-primary {
 border-color:#007bff!important
}
.border-secondary {
 border-color:#6c757d!important
}
.border-success {
 border-color:#28a745!important
}
.border-info {
 border-color:#17a2b8!important
}
.border-warning {
 border-color:#ffc107!important
}
.border-danger {
 border-color:#dc3545!important
}
.border-light {
 border-color:#f8f9fa!important
}
.border-dark {
 border-color:#343a40!important
}
.border-white {
 border-color:#fff!important
}
.rounded {
 border-radius:.25rem!important
}
.rounded-top {
 border-top-left-radius:.25rem!important;
 border-top-right-radius:.25rem!important
}
.rounded-right {
 border-top-right-radius:.25rem!important;
 border-bottom-right-radius:.25rem!important
}
.rounded-bottom {
 border-bottom-right-radius:.25rem!important;
 border-bottom-left-radius:.25rem!important
}
.rounded-left {
 border-top-left-radius:.25rem!important;
 border-bottom-left-radius:.25rem!important
}
.rounded-circle {
 border-radius:50%!important
}
.rounded-0 {
 border-radius:0!important
}
.clearfix::after {
 display:block;
 clear:both;
 content:""
}
.justify-content-start {
 -webkit-box-pack:start!important;
 -ms-flex-pack:start!important;
 justify-content:flex-start!important
}
.justify-content-end {
 -webkit-box-pack:end!important;
 -ms-flex-pack:end!important;
 justify-content:flex-end!important
}
.justify-content-center {
 -webkit-box-pack:center!important;
 -ms-flex-pack:center!important;
 justify-content:center!important
}
.justify-content-between {
 -webkit-box-pack:justify!important;
 -ms-flex-pack:justify!important;
 justify-content:space-between!important
}
.justify-content-around {
 -ms-flex-pack:distribute!important;
 justify-content:space-around!important
}
.align-items-center {
 -webkit-box-align:center!important;
 -ms-flex-align:center!important;
 align-items:center!important
}
.text-justify {
 text-align:justify!important
}
.text-nowrap {
 white-space:nowrap!important
}
.text-truncate {
 overflow:hidden;
 text-overflow:ellipsis;
 white-space:nowrap
}
.text-left {
 text-align:left!important
}
.text-right {
 text-align:right!important
}
.text-center {
 text-align:center!important
}
.flex-column {
 -webkit-box-orient:vertical!important;
 -webkit-box-direction:normal!important;
 -ms-flex-direction:column!important;
 flex-direction:column!important
}
.pl-4,
.px-4 {
 padding-left:1.5rem!important
}
.p-0 {
 padding:0!important
}
.p-lg-5 {
  padding:3rem!important
 }
 progress {
 vertical-align:baseline
}
</style>
<br><br>
<div class="container1-fluid1 m-0 p-0">
        <div class="bg-white row1 d-flex justify-content-center text-center align-items-center">
                
                <img class="border border-dark" src="uploads/image/non.jpg" style="max-height: 149px;max-width: 198px;">
               
            
            <div class="flex-column pl-4">
                <h1 class="font-heading-sm">{{$CData->company}}</h1>
                
                <p>Total Reviews: 0</p>
                <p> Avg ratings: <strong>0</strong></p>
                
            </div>
        </div>
        
        <div class="row1">
            <div class="d-flex flex-column col-lg-8 col-sm-12">
                <div class="theme--light p-lg-5 p-0">
                    <div class="comments">  

                        <div class=" text-center m-lg-5 m-3"><h2><strong>Reviews Chart</strong></h2>
                            <!---->
                            </div>
                        <div class="card v-card v-sheet theme--light elevation-2 text-center pt-2"style="border-radius: 25px; padding: 20px; border: 1px solid black;">
                        
                        <div class="flex-row m-2">
                            <span class="text-lg-center text-left font-description-sm" style="float:left;">Excellent </span>
                            <div class="progress w-75 float-right font-description-sm">
                                <div class="bright-green-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                0
                                </div>
                            </div>
                        </div>
                        <div class="flex-row m-2">
                            <span class="font-description-sm" style="float:left;">Average</span>
                            <div class="progress w-75 float-right">
                                <div class="bright-yellow-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                0
                                </div>
                            </div>
                        </div>
                        <div class="flex-row m-2">
                            <span class="font-description-sm" style="float:left;">Bad</span>
                            <div class="progress w-75 float-right">
                                <div class="bright-red-bg" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width:0%">
                                0
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class=" text-center m-5"><h2><strong>Recent Reviews</strong></h2>
                        <input class="form-control" id="myInput" type="text" placeholder="Search reviews">
                        <!---->
                        </div>
                        
                        
                        
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column col-lg-4 col-sm-12 pt-6 align-items-center pb-6">
                <div class="card" style="width: 18rem;border-radius: 25px; padding: 20px; border: 1px solid black;">
                    
                     <center><img class="card-img-top" src="uploads/image/non.jpg" alt="Card image cap" style="width:140px;height:140px"></center>   
                    
                    
                    <div class="card-body">
                        <h5 class="card-title metallic-red text-center">About us</h5>
                        
                        
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><i class="fas fa-map-marker-alt metallic-red">
                        </i>
               {{$CData->country}}, {{$CData->city}}, {{$CData->block}}
                       </li>
                        <li class="list-group-item"><i class="fas fa-phone-square metallic-red"></i> {{$CData->contact}}</li>
                    </ul>

                </div>
            </div>
        </div>

    </div>

 
@endsection