


<!-- Modal-->
<div class="modal fade" id="exampleModalCustomScrollable" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Send News Letter</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i aria-hidden="true" class="ki ki-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div data-scroll="true" data-height="350">
                    
                                            <label for="exampleInputPassword1">Description</label>
                                           <form action="{{ route('sendNewsLetterEmail')}}" method="post">
										   @csrf 
											<textarea name="description" id="kt-ckeditor-1" rows="2" class="form-control"
                                                ></textarea>	
                                       
                <div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light-primary font-weight-bold" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary font-weight-bold">Send</button>
				</form>
            </div>
        </div>
    </div>
</div>

