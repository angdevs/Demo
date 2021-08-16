<style>
.card-heading {
    background: #8c8c8c;
    color: #fff;
}
label.error {
    margin-top: 32px !important;
    color: red;
}
.md-input:focus~label.error {
    color: red;
    margin-top: 55px !important;
}
#exist-error{
	margin-left: 10px;
	width: auto;
	display: inline;
	color:red;
}
</style>
    <div class="box-row" >
        <div class="box-cell" style="margin-top: 30px;">
          <div class="box-inner">
          	<div class="col-sm-3">
          	</div>
			<div class="col-sm-6">
				<form id="userForm" action="<?php echo base_url('promocode/addPromocode'); ?>" method="post">
					<div class="card">
						<div class="card-heading">
							<h2>Add Promo Code</h2>
						</div>
						<div class="card-body">
							<div class="row row-sm">
							  <div class="col-sm-12">
								<div class="md-form-group float-label">
								  <input type="text" class="md-input required" name="offer_name" >
								  <label>Offer Name</label>
								</div>
							  </div>
							  <div class="col-sm-12">
								<div class="md-form-group float-label"> 
								  <textarea class="md-input required" name="descp" id="descp"></textarea>
								  <label>Description</label>
								  <span for="description" id="exist-error"></span>
								</div>
							  </div>  
							  <br/>

							  <div class="col-sm-12">
								<div class="md-form-group float-label"> 
								  	<select class="form-control" name="status" id="status">
										<option value="">Select Status</option>
										<option value="1">Active</option>
										<option value="2">Inactive</option> 
									</select>
								</div>
							  </div>   

							  <div class="col-sm-12">
								<div class="md-form-group float-label" style="text-align: center;">
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							  </div>
						  </div>
						</div>
					</div>
				</form>
			</div>
          </div>
        </div>
    </div>
	</div>
</div>
  <!-- / content --> 
<script>
var bsurl = '<?php echo base_url(); ?>';
</script> 
<script src="<?php echo base_url('assets/scripts/jquery.js'); ?>"></script>
<script src="<?php echo base_url('assets/scripts/jquery.validate.js'); ?>"></script>
<script src="<?php echo base_url('assets/scripts/validation.js'); ?>"></script>
<script>

 
 
$.validator.addMethod("lettersonly", function(value, element) {
return this.optional(element) || /^[a-z\s]+$/i.test(value);
}, "Only alphabetical characters");

$.validator.addMethod("digitsonly", function(value, element) {
return this.optional(element) ||  /^\d+$/.test(value);
}, "Only digits allowed");
</script>

<script>
	
$('.autoselectusers').change(function(){
	var level=$(this).data('level');
	
//	var level=$(this).atrr('data-level');

	var team_leader = $(this).val();
		
		$.ajax({
			type: "POST",
			data:{team_leader:team_leader},
			url: "<?php echo base_url('users/temLeaderinfo'); ?>",
			success: function(response){
				var obj = JSON.parse(response);
			$('#dgmanager').val(obj.DGM_ID);
	        if(level =='l2'){
				$('#manager').val(obj.MGR_Id);
				$('#agmanager').val(obj.AGM_id);
             }
             if(level == 'l3'){
				$('#agmanager').val(obj.AGM_id);
             } 
			}

			});
		});

</script>