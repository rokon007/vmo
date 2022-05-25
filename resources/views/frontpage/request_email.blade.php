<style>
/* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&family=Kalam&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}



.wrapper {
    max-width: 850px;
    margin: 50px auto;
    height: 600px;
    background-color: #FFF;
    overflow: hidden;
    box-shadow: 5px 25px 35px #3535356b;
}

.wrapper .bg-yellow {
    background-color: #fdc91f;
    height: 100%;
    width: 40%;
    padding-top: 40px;
    padding-left: 50px;
    padding-right: 20px;
}


.wrapper .bg-yellow .text-white {
    font-size: 3rem;
}

.wrapper .bg-yellow .cursive {
    font-family: 'Kalam', cursive;
    font-size: 1rem;
    font-weight: 600;

}

.wrapper .contact-form {
    width: 100%;
    padding: 40px 80px 40px 50px;
}

.wrapper .contact-form .h3 {
    padding-top: 15px;
    font-weight: 700;
}

.wrapper .contact-form label {
    font-size: 0.9rem;
    color: #555;
    font-weight: 500;
    margin-bottom: 10px;
}

.wrapper .contact-form textarea {
    height: 120px;
}

.wrapper .contact-form .form-control {
    background-color: #e7e7e7;
    box-shadow: none;
    font-weight: 600;
    font-size: 0.95rem;
    border: none;
    border-top: 1px solid #bbb;
}


.wrapper .contact-form .btn {
    font-size: 1.2rem;
    font-weight: 700;
}

.wrapper .contact-form .btn.btn-default {
    color: #F50057;
}


.wrapper .contact-form .btn.btn-primary {
    background: #F50057;
    border: none;
    padding: 8px 18px;
    box-shadow: 0 8px 12px #3535356b;
}

.wrapper .contact-form .btn.btn-primary:hover {
    background-color: #f50056e5;
}

.modal .modal-content .modal-header .fas {
    color: #F50057;
}

@media(max-width: 900.5px) {
    .wrapper {
        margin: 20px;
    }
}

@media(max-width: 575.5px) {

    .wrapper .contact-form {
        padding: 40px;
    }

    .wrapper .bg-yellow {
        padding-left: 30px;
    }
}

@media(max-width: 496px) {

    .wrapper .bg-yellow {
        display: none;
    }

}

</style>
<!-- Modal -->
<div class="modal fade" id="request_email_Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
 <!-- <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content"> -->
   <div class="wrapper rounded d-flex align-items-stretch">
        <div class="bg-yellow">
            <div class="text-white">
                <span class="far fa-envelope"></span>
            </div>
            <div class="pt-5 cursive">
                Please describe your request in a nutshell 
            </div>
            <div class="pt-sm-5 pt-5 cursive mt-sm-5">
                We need your email to reach you back
            </div>
        </div>
        <div class="contact-form">
            <div class="h3">Request for a contact email</div>
             <form method="POST" action="{{ route('request-email') }}"> 
            @csrf
              <!--  <div class="form-group pt-3">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" required></textarea>
                </div>  -->
				<input type="hidden" name="company_email" value="{{Session::get('email')}}">
                <div class="d-flex align-items-center flex-wrap justify-content-between pt-4">
                    <div class="form-group pt-lg-2 pt-3">
                        <label for="name">Your Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group pt-lg-2 pt-3">
                        <label for="name">Your Email</label>
                        <input type="email" name="email" class="form-control" required>
                    </div>
                </div>
				
				 <div class="form-group pt-3">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" required></textarea>
                </div>
				
				 <div class="modal-footer">
      
                    <div class="btn btn-default"data-dismiss="modal">
                        Cancel
                    </div>
					<button type="submit" class="btn btn-primary" >Send message</button>
                    
               
       
      </div>
                
            </form>
			<br><br>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel">Thank You
                        <span class="fas fa-heart"></span>
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ps-2">Thank You for sharing your views with us. We will get back to you as soon as
                        possible.</div>
                </div>
            </div>
        </div>
    </div>
    </div>
 <!-- </div>
</div> -->