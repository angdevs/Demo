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
<?php                       
   $uniarray= $this->input->post('uni') ? $this->input->post('uni'):array();
      $processarray= $this->input->post('p_id') ? $this->input->post('p_id'):array();

?>
</style>
    <div class="box-row">
        <div class="box-cell">
          <div class="box-inner">
			<div class="col-sm-12">
				<form id="userForm" action="<?php echo base_url('Icleads/addlead'); ?>" method="post" enctype="multipart/form-data"> 
					<div class="card">
						<div class="card-heading">
							<h2>Add Enroll lead</h2>
						</div>
						<div class="card-body">
							<div class="row row-sm">
							    
							    <div class="col-sm-3">
								<div class="form-group">
										  <label>Select User</label>
								  <select class="form-control" name="username2" id="username2">
                                                                        <option value="" selected disabled>Select User</option>
									<?php foreach($userData as $src1){ ?>
									<option value="<?php echo $src1->user_id; ?>"><?php echo $src1->user_name; ?></option>
									<?php } ?>
								  </select>
							
								</div>
							  </div>
							    <div class="col-sm-3">
								<div class="form-group float-label">
									  <label>Lead ID</label>
								  <input type="number" class="form-control required validatelead_id" name="lead_id" id="lead_id" required>
								  	 <span for="lead_id" id="lead_id-error"></span>
								
								</div> 
							  </div>
							    <div class="col-sm-3">
								<div class="form-group float-label">
									  <label>Referred Lead id</label>
								  <input type="number" class="form-control required" name="referredlead" id="referredlead" >
							
								</div> 
							  </div>
							    <div class="col-sm-3">
								<div class="form-group float-label">
									 <label>Referred Name</label>
								  <input type="text" class="form-control required" name="referredname" id="referredname" >
								 
								</div> 
							  </div>
							  </div>
							  
							  <hr>
							    
							    	<div class="row row-sm">
							  <div class="col-sm-3">
								<div class="form-group float-label">
								  <label>Student Name</label>
								  <input type="text" class="form-control required studentname" name="stud_name" >
								
								</div> 
							  </div>
							  <div class="col-sm-3">
								<div class="form-group float-label">
									  <label>Student Email Id</label>
								  <input type="email" class="form-control required" name="stud_email" id="email_id">
								
								  <span for="email" id="exist-error"></span>
								</div>
							  </div>
							  <div class="col-sm-3">
								<div class="form-group">
									 <label>Student Mobile Number</label>
								  <input type="number" class="form-control required" name="stud_mob" id="stud_mob">
								 
								</div>
							  </div>
							   
							    
							     <div class="col-sm-3">
							 	<div class="form-group">
							 		<label>Enter City Name</label>
								  <input type="text" class="form-control required" id="location" name="location" onFocus="geolocate()" type="text">
								  
								</div>
								<input type="hidden" name="state" id="administrative_area_level_1">
								<input type="hidden" name="city" id="locality">
								<input type="hidden" name="country" id="country">
							 </div>
							  </div>
							  
							    <hr>
							  	<div class="row row-sm">
							  <div class="col-sm-4">
								<div class="form-group">
										  <label>Select Source</label>
								  <select class="form-control" name="source" id="source">
                                                                        <option value="" selected disabled>Select Source</option>
									<?php foreach($source as $src){ ?>
									<option value="<?php echo $src->uId; ?>"><?php echo $src->source_name.' - '.$src->uname; ?></option>
									<?php } ?>
								  </select>
							
								</div>
							  </div>


							   <div class="col-sm-4">
									<div class="form-group">
										  <label>Select Media</label>
								  <select class="form-control" name="media" id="media">
								  </select>
								
								</div>
							  </div>
							  <div class="col-sm-4">
								<div class="form-group">
									  <label>Select Campaign</label>
								  <select class="form-control" name="campaign" id="campaign">
								  </select>
								
								</div>
							  </div>
</div>
							  
							    <hr>
							  	<div class="row row-sm">
  <div class="col-sm-3">
								<div class="form-group">
										  <label>Select Course</label>
								  <select class="form-control" name="course" id="course">
								  </select>
							
								</div>
								
							  </div>
							   <div class="col-sm-3">
							 <div class="form-group">
							 			  <label>Select Specialisation</label>
								  <select class="form-control" name="specialisation" id="specialisation">
								  </select>
						
								</div>
							
							  </div>

							  
							  <div class="col-sm-3">
							 <div class="form-group">
							 	 <label>Select Status</label>
								  <select class="form-control" name="status" id="status">
                                                                        <option value="" selected disabled>Select Status</option>
									<?php foreach($status as $stat){ ?>
									<option value="<?php echo $stat->stId; ?>"><?php echo $stat->status; ?></option>
									<?php } ?>
								  </select>
								 
								</div>
							</div>
  <div class="col-sm-3">
 	<div class="form-group">
								<label>Select Sub Status</label>
								  <select class="form-control" name="sub_status" id="sub_status">
								  </select>
								  
								</div>
							 
							 </div>
							 
							 </div>
							  
							
							  
							    <hr>
							  	<div class="row row-sm">			
<div class="col-sm-3">
								<div class="form-group">
									<label>Enquire Date</label>
									<input type='text' class="form-control" name="enq_date" id='datetimepicker1'/>
									
								</div>
	</div>

<div class="col-sm-3">

	<div class="form-group">
		<label>IP Generation Date</label>
									<input type='text' class="form-control" name="date" id='datetimepicker2'/>
									
								</div>
									</div>
									<div class="col-sm-3">
								<div class="form-group">
									<label>Expected Date</label>
									<input type='text' class="form-control" name="exp_date" id='datetimepicker8'/>
									
								</div>

	</div>
  
  <div class="col-sm-3">
							 <div class="form-group">
							 	  <label>Fee Plan</label>
								  <select class="form-control" name="feepalnerw" id="feepalnerw" onchange="asd()" >
                                                                        <option value="" selected disabled>Select Plan</option>
							
									<option value="1">Lumpsum</option>
									<option value="2">Installment</option>

									<option value="1">EMI</option>
                                    <option value="5">Corporate-feeplan</option>
								    <option value="3" >Propelld-EMI</option>
								    <option value="4" >No-cost EMI</option>


								  </select>
								
								</div>
							</div>
							</div>
							  
							    <hr>
							  	<div class="row row-sm">
<div class="col-sm-3">
								<div class="form-group float-label">
									  <label>Applicable Fees</label>
								  <input type="text" class="form-control required" name="feeapplicable" id="feeapplicable" readonly>
								
								</div> 
							  </div>

							  <div class="col-sm-3">
								<div class="form-group float-label">
									  <label>Down Payment</label>
								  <input type="text" class="form-control required" name="epayment_amt"  id="epayment_amt" readonly>
								
								</div> 
							  </div>

							  <div class="col-sm-2">
								<div class="form-group float-label">
									  <label>Balance Amount</label>
								  <input type="text" class="form-control required" name="balanceamount" id="balanceamount" readonly>


								  <input type="hidden" class="form-control required" name="share" id="share" readonly>

								  <input type="hidden" class="form-control required" name="gst0nshare" id="gst0nshare" readonly>

								
								</div> 
							  </div>

							  <div class="col-sm-2">
								<div class="form-group float-label">
									 <label> Fees Paid</label>
								  <input type="text" class="form-control required" name="downpayment" id="downpayment" readonly>
								 
								</div> 
							  </div>

							  <div class="col-sm-2">
								<div class="form-group float-label">
									  <label>NSV</label>
								  <input type="text" class="form-control required" name="nsv" id="nsv"  readonly>
								
								</div> 
							  </div>
</div>
							  
							    <hr>
							  	<div class="row row-sm">
							   
							<div class="col-sm-3">
							 <div class="form-group">
							 	 <label>Payment Mode</label>
								  <select class="form-control" name="napprovalifappli" id="napprovalifappli">
                                                                        <option value="" selected disabled>Select Plan</option>
																		<option value="ATOM">ATOM</option>
																		<option value="IMPS">IMPS</option>
																		<option value="NEFT">NEFT</option>
																		<option value="Gpay">Gpay</option>
																		<option value="Paytm">Paytm</option>
																		<option value="UPI">UPI</option>
																		<option value="CASH DEPOSITE">CASH DEPOSITE</option>
																		<option value="ONLINE">ONLINE</option>
																		<option value="CHEQUE DEP">CHEQUE DEP</option>
																		<option value="SWIFT">SWIFT</option>

								  </select>
								 
								</div>
							</div>

							 <div class="col-sm-3">
								<div class="form-group float-label">
									  <label>Trx Id</label>
								  <input type="text" class="form-control required" name="ntrxidetais" id="ntrxidetais" >
								
								</div> 
							  </div>

							  <div class="col-sm-2">
								<div class="form-group float-label">
									<label>Amount</label>
								  <input type="text" class="form-control required" name="amountname" id="amountname" onchange="balancecheckamt()">
								  
								</div> 
							  </div>
							    <div class="col-sm-2">
								<div class="form-group float-label">
											  <label>Date</label>
								  <input type="date" class="form-control required" name="nexpdate" >
						
								</div> 
							  </div>
							      <div class="col-sm-2">
								<div class="form-group float-label">
									  <label>File</label>
                               <input type="file" class="form-control" id="paymentrecipt" name="files[]" accept=".png,.jpg,.jpeg,.gif"  required>
								
								</div> 
							  </div>
							  
							  </div>
							  
							      <hr>
							  	<div class="row row-sm">
<div class="col-sm-3">
	<div class="form-group">
							<label>Remark</label>
								  <textarea class="form-control" name="remark" id="remark"></textarea>
								  
								</div>
</div>
				
							   <div class="col-sm-3">
							 <div class="form-group">
							 	 <label>Applicable Promo Type</label>
								  <select class="form-control" name="napplicationpromotype" id="napplicationpromotype">
                                                                        <option value="" selected disabled>Select Status</option>
									<option value="Tablet Offer">Tablet Offer</option>
									<option value="Referral Tables">Referral Tab</option>

								  </select>
								 
								</div>
							</div>
							</div>
							  <div class="col-sm-12">
								<div class="form-group float-label" style="text-align: center;">
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
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

<script src="<?php echo base_url('assets/scripts/jquery.validate.js'); ?>"></script>
<script src="<?php echo base_url('assets/scripts/validation.js'); ?>"></script>
<script>

$('#usertype').change(function(){
	
	var utype = $(this).val();
		
		$.ajax({
			type: "POST",
			url: "<?php echo base_url('users/getCounslerHead'); ?>",
			success: function(response){
				
				var obj = JSON.parse(response);
				
				if(utype == 2){
					
					$('#team_leader_list').show();
					$('#team_leader').empty();
					$('#team_leader').append('<option value="" selected disabled>Select L1</option>');
					
					$.each(obj[0], function (i, item){
						$('#team_leader').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});
					
					$('#manager_list').show();
					$('#manager').empty();
					$('#manager').append('<option value="" selected disabled>Select L1</option>');
					$.each(obj[1], function (i, item){
						$('#manager').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});
						$('#agmanager_list').show();
					$('#agmanager').empty();
					$('#agmanager').append('<option value="" selected disabled>Select L3</option>');
					$.each(obj[2], function (i, item){
						$('#agmanager').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});
				
                    	$('#dgmanager_list').show();
					$('#dgmanager').empty();
					$('#dgmanager').append('<option value="" selected disabled>Select L4</option>');
					$.each(obj[3], function (i, item){
						$('#dgmanager').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});
				


					
				}else if(utype == 3){
					$('#team_leader_list').hide();
					$('#manager_list').show();
					$('#dgmanager_list').show();
					$('#manager').empty();
					$('#manager').append('<option value="" selected disabled>Select L2</option>');
					$.each(obj[1], function (i, item){
						$('#manager').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});
					$('#agmanager_list').show();
					$('#agmanager').empty();
					$('#agmanager').append('<option value="" selected disabled>Select L3</option>');
					$.each(obj[2], function (i, item){
						$('#agmanager').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});


	                 $('#dgmanager_list').show();
					$('#dgmanager').empty();
					$('#dgmanager').append('<option value="" selected disabled>Select L4</option>');
					$.each(obj[3], function (i, item){
						$('#dgmanager').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});

				







				}else if(utype == 4){
					$('#team_leader_list').hide();

                   	$('#manager_list').hide();

                   	$('#agmanager_list').show();
					$('#agmanager').empty();
					$('#agmanager').append('<option value="" selected disabled>Select L3</option>');
					$.each(obj[2], function (i, item){
						$('#agmanager').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});
    

					
					$('#dgmanager_list').show();
					$('#dgmanager').empty();
					$('#dgmanager').append('<option value="" selected disabled>Select L4</option>');
					$.each(obj[3], function (i, item){
						$('#dgmanager').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});


				}else if(utype == 5){
					$('#team_leader_list').hide();

                   	$('#manager_list').hide();

                   	$('#agmanager_list').hide();
				
    

					
					$('#dgmanager_list').show();
					$('#dgmanager').empty();
					$('#dgmanager').append('<option value="" selected disabled>Select L4</option>');
					$.each(obj[3], function (i, item){
						$('#dgmanager').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});


}else if(utype == 4){
					$('#team_leader_list').hide();

                   	$('#manager_list').hide();

                   	$('#agmanager_list').show();
					$('#agmanager').empty();
					$('#agmanager').append('<option value="" selected disabled>Select L3</option>');
					$.each(obj[2], function (i, item){
						$('#agmanager').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});
    

					
					$('#dgmanager_list').show();
					$('#dgmanager').empty();
					$('#dgmanager').append('<option value="" selected disabled>Select L4</option>');
					$.each(obj[2], function (i, item){
						$('#dgmanager').append($('<option>', { 
							value: item.user_id,
							text : item.user_name 
						}));
					});

				}else{
					$('#team_leader_list').hide();
					$('#manager_list').hide();
					$('#agmanager_list').hide();
					$('#dgmanager_list').hide();



				}
				
			}
		});
});

$('#email_id').change(function(){
   
		
	var stud_email = $('#email_id').val();
	
	$.ajax({
		url: '<?php echo base_url('lead/checkemailExist'); ?>',
		type: 'POST',
		data: {stud_email:stud_email},
		success: function(response) {
			if(response == 'success'){
				$('#email_id').focus();
				$('#exist-error').html("Email Id already exist");
				alert('Email Id already exist');
			}else{
				$('#exist-error').html('');
			}
		}            
	});
});

$("#userForm").validate({
	rules: {
		name:{
			required: true,
			lettersonly: true
		},
		mob_no:{
			required: true,
			digitsonly:true
		},
		email_id:{
			required: true,
			email:true
		},
		password:{
			required: true
		},
		usertype:{
			required: true
		}
	},
	messages: {
		name:{
			required:'Please enter user name',
			lettersonly:'Please enter characters only'
		},
		mob_no:{
			required: 'Please enter user mobile number',
			digitsonly: 'Please enter digits only'
		},
		email_id:{
			required: 'Please enter user email id',
			email: 'Please enter valid email id'
		},
		password:{
			required: 'Please enter user passowrd'
		},
		usertype:{
			required:'Please select user type'
		}
	},
	submitHandler: function() {
		
		 var useremail = $('#email_id').val();
		
        $.ajax({
            url: '<?php echo base_url('users/checkUserExist');?>',
            type: 'POST',
            data: {user_email:useremail},
            success: function(response) {
				if(response == 'success'){
					$('#email-error').hide();
					$('#userForm').submit();
				}else{
					$('#email-error').show();
					$('#email_id').focus();
					$('#email-error').html('');
					$('#exist-error').html(response);
				}
            }            
        }); 
    }
});

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
<script>
$('#source').change(function(){
	
	var u_id = $(this).val();
	
	var usrc = $( "#source option:selected" ).text();
	
	var srcarr  = usrc.split('-');
	
	if(srcarr[0]){
		
		$.ajax({
			type: "POST",
			url: "<?php echo base_url('lead/getMedia'); ?>",
			data:{sorc:srcarr[0]},
			success: function(response){
				$('#media').empty();
				$('#media').append('<option value="" selected disabled>Select Media</option>');
				var obj = JSON.parse(response);
				$.each(obj, function (i, item){
					$('#media').append($('<option>', { 
						value: item.media,
						text : item.media 
					}));

						$("#media").select2({
				  data: media
				});
				});
			}
		});
	}
	
	$.ajax({
		type: "POST",
		url: "<?php echo base_url('lead/getcourse'); ?>",
		data:{u_id:u_id},
		success: function(response){
			$('#course').empty();
			$('#course').append('<option value="" selected disabled>Select Course</option>');
			var obj = JSON.parse(response);
			$.each(obj, function (i, item){
				$('#course').append($('<option>', { 
					value: item.cname,
					text : item.cname 
				}));
			});
		}
	});
});

$('#media').change(function(){
	
	var meda = $(this).val();
	
	var usrc = $( "#source option:selected" ).text();
	
	var srcarr  = usrc.split('-');
	
	$.ajax({
		type: "POST",
		url: "<?php echo base_url('lead/getCampaign'); ?>",
		data:{meda:meda,src:srcarr[0]},
		success: function(response){
			$('#campaign').empty();
			$('#campaign').append('<option value="" selected disabled>Select Campaign</option>');
			var obj = JSON.parse(response);
			$.each(obj, function (i, item){
				$('#campaign').append($('<option>', { 
					value: item.campaign,
					text : item.campaign 
				}));
			});
		}
	});
});

$('#course').change(function(){
	
	var c_id = $(this).val();
	var src = $('#source').val();
	
	$.ajax({
		type: "POST",
		url: "<?php echo base_url('lead/getspec'); ?>",
		data:{c_id:c_id,src:src},
		success: function(response){
			$('#specialisation').empty();
			$('#specialisation').append('<option value="" selected disabled>Select Specialisation</option>');
			var obj = JSON.parse(response);
			$.each(obj, function (i, item){
				$('#specialisation').append($('<option>', { 
					value: item.spec_Id,
					text : item.specname 
				}));
			});
		}
	});
});

$('#status').change(function(){
	
	var stat = $(this).val();
	
	$.ajax({
		type: "POST",
		url: "<?php echo base_url('lead/getsubstatus'); ?>",
		data:{stat:stat},
		success: function(response){
			$('#sub_status').empty();
			$('#sub_status').append('<option value="" selected disabled>Select Sub Status</option>');
			var obj = JSON.parse(response);
			$.each(obj, function (i, item){
				$('#sub_status').append($('<option>', { 
					value: item.id,
					text : item.name 
				}));
			});
		}
	});
});

$('#state').change(function(){
	var state = $(this).val();
	var base_url = '<?php echo base_url('lead/getAjaxCity'); ?>';
	$('#city').empty();
	$.ajax({
		type: "POST",
		url: base_url,
		data:{state:state},
		success: function(response){
			var res = JSON.parse(response);
			$('#city').append('<option value="" disabled selected>Select City</option>');
			$.each(res, function(key, value) {   
				 $('#city')
					 .append($("<option></option>")
								.attr("value",value.city_name)
								.text(value.city_name)); 
			});
		}
	});
});



function asd() {

		var nfeeapplicable = $('#feeapplicable').val();
	     var nsource = $('#source').val();
	    
	     var ncource = $('#course').val();
		 var feepalne = $('#feepalnerw').val();
		   var mediaadd = $('#mediaaddcap').val();
	     	var is_indian = "india";
                    $('#referrby').val(mediaadd);
          
        if (feepalne && ncource) {
		$.ajax({
		type: "POST",
		url: "<?php echo base_url('lead/calculation'); ?>",
		data:{feepalne:feepalne,ncource:ncource,nsource:nsource,is_indian:is_indian},
		 }).done(function( response ) {
			 response=$.parseJSON(response);
			 
					$('#epayment_amt').val(response.firstpay);
					$('#feeapplicable').val(response.installment);
					$('#share').val(response.cshare);

					$('#gst0nshare').val(response.Ushare);
                    $('#nsv').val(response.NSV);
			
		
  		});
	}


	}


	function balancecheckamt(btrid) {


		var nfeeapplicable = $('#feeapplicable').val();


var Efeepay=$('#amountname').val();

var balancepay=nfeeapplicable-Efeepay;

 $('#balanceamount').val(balancepay);
  $('#downpayment').val(Efeepay);

}

</script>

<script>
   

    $('#lead_id').change(function(){
      $('#lead_id-error').text('');
      var lead_id=$(this).val();
    
      $.ajax({
         type: "GET",
         url: '<?= base_url();?>'+'enrolled/validatelead_id/'+lead_id,
         data:{},
          }).done(function( response ) {
                  if (response){
                     confirm('leadid id ' + response + ' is already used, Please re-check. do you want to continue ?');
                     $('#lead_id-error').text('Lead id Already exists');
                  }
          });


   });

</script>