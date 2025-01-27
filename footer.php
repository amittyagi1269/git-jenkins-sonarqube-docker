<div class="container-fluid footer padding-none">
	<div class="container">
		<div class="col-sm-6 col-xs-12 padding-none font-footer">Copyright &copy; <?php echo date('Y'); ?>, TDB e-techcom | Maintained By <a href="http://www.elegantmicroweb.com" target="_blank">Elegant Microweb</a></div>
		<div class="col-sm-6 col-xs-12 padding-none">
			<ul>
				<li><a href="policies.php">Website Policies</a></li>				
			</ul>
		</div>
	</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo SITE_URL; ?>/assets/js/jquery-3.6.4.min.js"></script>
<?php /* <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.12.0/moment.js"></script> */ ?>
<script src="<?php echo SITE_URL; ?>/assets/js/moment.js"></script>
<!-- <script
	src="<?php echo SITE_URL; ?>/assets/js/bootstrap-datetimepicker.js"></script> -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- <script src="<?php echo SITE_URL; ?>/assets/js/bootstrap.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.4.1/dist/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.43/js/bootstrap-datetimepicker.min.js" integrity="sha512-JcceycVPblKG5oooLUNXGY7KhAvXxzppH+n7CFZMCb1Uj1hZzysaWaVsOukaZpb/qPL9zFGR66DDfTTxlVB5qw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Jvascript -->
<script src="<?php echo SITE_URL; ?>/assets/js/jquery.filer.min.js"
	type="text/javascript"></script>
<script src="<?php echo SITE_URL; ?>/assets/js/custom.js"
	type="text/javascript"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/assets/js/jquery.fancybox.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/assets/js/custom-query.js?v=2.1.5"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/assets/js/jquery.shorten.1.0.js"></script>
<link rel="stylesheet" type="text/css" href="<?php echo SITE_URL; ?>/assets/css/jquery.fancybox.css?v=2.1.5" media="screen" />


<script type="text/javascript" language="javascript" src="<?php echo SITE_URL; ?>/assets/js/jquery.dataTables.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo SITE_URL; ?>/assets/js/shCore.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo SITE_URL; ?>/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo SITE_URL; ?>/assets/js/formValidation.js"></script>
<script type="text/javascript" language="javascript" src="<?php echo SITE_URL; ?>/assets/js/dropzone.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/assets/tinymce/js/tinymce/tinymce.min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/assets/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/assets/js/underscore-min.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/assets/js/calendar.js"></script>
<script type="text/javascript" src="<?php echo SITE_URL; ?>/assets/js/app.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>
<script type="text/javascript" language="javascript" class="init">
	

$(document).ready(function() {
	$(".result-field").attr("readonly","true");
	$(".dropzone").dropzone();
	$('#example')
		.on( 'order.dt',  function () {  } )
		.on( 'search.dt', function () {  } )
		.on( 'page.dt',   function () {  } )
		.DataTable({
			"order"	: [],
			"dom"	: 'flt<"bottom"ip><"clear">',
			//"dom"	: 'f<"bottom"pt><"clear">',
			//"dom"	: '<"dataTableGrid">fpt',
			"pagingType": "simple_numbers",
			"language": {
				"lengthMenu": "_MENU_ records per page",
				"zeroRecords": "<?php echo NO_RECORD; ?>",
				"info": "Page _PAGE_ of _PAGES_",
				"search": ""
			}
		});

	$('#example-dashboard')
		.on( 'order.dt',  function () {  } )
		.on( 'search.dt', function () {  } )
		.on( 'page.dt',   function () {  } )
		.DataTable({
			"order"	: [],
			"dom"	: 'lt<"bottom"><"clear">',
			//"dom"	: 'f<"bottom"pt><"clear">',
			//"dom"	: '<"dataTableGrid">fpt',
			"pagingType": "simple_numbers",
			"language": {
				"lengthMenu": "",
				"zeroRecords": "<?php echo NO_RECORD; ?>",
				"info": "",
				"search": ""
			}
		});
	$('#example-settings')
	.on( 'order.dt',  function () {  } )
	.on( 'search.dt', function () {  } )
	.on( 'page.dt',   function () {  } )
	.DataTable({
		
		"dom"	: 'lt<"bottom"><"clear">',
		//"dom"	: 'f<"bottom"pt><"clear">',
		//"dom"	: '<"dataTableGrid">fpt',
		"pagingType": "simple_numbers",
		"bPaginate":false,
		"language": {
			"lengthMenu": "",
			"zeroRecords": "<?php echo NO_RECORD; ?>",
			"info": "",
			"search": ""
		}
	});
	tinyMCE.init({
		mode : "textareas",
		theme : "modern",
		editor_selector : "mceEditor",
		forced_root_block : "", 
		force_br_newlines : true,
		force_p_newlines : false,
		verify_html: false,
		plugins: [
			 "advlist autolink link image lists charmap print preview hr anchor pagebreak",
			 "wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		],
        toolbar: "insertfile undo redo | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | code print ", 
        editor_deselector : "mceNoEditor"
	});
	// for file view
	
	$("#editfile_2,#editfile_3,#editfile_4,#editfile_5,#editfile_6,#editfile_7,#editfile_8,#editfile_9,#editfile_10,#editfile_11,#editfile_12,#editfile_13,#editfile_14,#editfile_15,#editfile_16,#editfile_17,#editfile_18,#editfile_19,#editfile_20,#editfile_21,#editfile_22,#editfile_23,#editfile_24,#editfile_25,#editfile_26,#editfile_27,#editfile_28,#editfile_29,#editfile_30").on('click',function(e){
		var curId = $(this).attr('id');
		var fileId = curId.split('_');
		var currentInt = fileId[1];
		var fileID = $('.filer_input'+currentInt).attr("id");
		var filePath = $('#pathToFile').val();
		var fullPath = filePath+"/"+$("#"+fileID+"_name").val();
		window.open(fullPath);
		e.preventDefault();
		return false;
	});
	
	
} );

$(window).on('load',function(){
	onLoadCalculate("costOfProject");
	onLoadCalculate("meansOfFinance");
	onLoadCalculate("meansOfFinanceEquity");

	var divToC = "";
	var $mof_type = parseFloat($("#mof_type").val());
	if($mof_type == 1){
		divToC = "meansOfFinanceEquity";
	}else if($mof_type == 0){
		divToC = "meansOfFinance";
	}	
	if(divToC != ""){
		checkTotalCostAndMeansOfFinance(divToC);
	}
	
	onLoadEnableSaveAndContinue("costOfProject");
	
	$("#example_filter input[type=search]").attr('placeholder','Search');
	
});


</script>

	
<script type="text/javascript">
$("#costOfProject input").each(function() {
	var that = this;
	 $(this).keyup(function(){
		 	$("#currentIdToCalculate").remove();
			$("body").append('<input type="hidden" id="currentIdToCalculate" value="costOfProject" >');
	        newSum.call(that);
	    });
});
$("#meansOfFinance input").each(function() {	
	var that = this;
	 $(this).keyup(function(){
		 	$("#currentIdToCalculate").remove();
			$("body").append('<input type="hidden" id="currentIdToCalculate" value="meansOfFinance" >');
	        newSum.call(that);
	        checkTotalCostAndMeansOfFinance("meansOfFinance");
	    });
});
$("#meansOfFinanceEquity input").each(function() {	
	var that = this;
	 $(this).keyup(function(){
		 	$("#currentIdToCalculate").remove();
			$("body").append('<input type="hidden" id="currentIdToCalculate" value="meansOfFinanceEquity" >');
	        newSum.call(that);
	        checkTotalCostAndMeansOfFinance("meansOfFinanceEquity");
	    });
});
$("#manageInternationalCollabUK input").each(function() {	
	var that = this;
	 $(this).keyup(function(){
		 	$("#currentIdToCalculate").remove();
			$("body").append('<input type="hidden" id="currentIdToCalculate" value="costOfBudgetUK" >');
	        newSum.call(that);
	        // checkTotalCostBudgetUK("costOfBudgetUK");
	    });
});
$("#manageInternationalCollabSingapore input").each(function() {	
	var that = this;
	 $(this).keyup(function(){
		 	$("#currentIdToCalculate").remove();
			$("body").append('<input type="hidden" id="currentIdToCalculate" value="costOfBudgetSingapore" >');
	        newSum.call(that);
	        // checkTotalCostAndMeansOfFinance("costOfBudgetSingapore");
	    });
});

function onLoadEnableSaveAndContinue(parentMainDiv){
	var total = 0;
	$(".popup-div textarea").each(function(){
		var $id = $(this).parent().parent().parent().parent().attr("id");
		 
		if($(this).val().length > 0 || $("#"+$id+" input[name$='_name']").length > 0 ){			
			$(".fancybox."+$id).find("span").remove();
			$(".fancybox."+$id).append(' <span class="glyphicon glyphicon-ok"></span>');
			if(!$(this).hasClass("notRequired")){
				total += 1;
			}
			
		}else{
			$(".fancybox."+$id).find("span").remove();
			$(".fancybox."+$id).append(' <span class="glyphicon glyphicon-pencil"></span>');
		}
	});
	console.log(total);
	if(total == 15){
		$("#"+parentMainDiv+" #saveAndContinueButton").attr("disabled",false);
		$("#"+parentMainDiv+" #disabledButton").html("");
	}else{
		$("#"+parentMainDiv+" #saveAndContinueButton").attr("disabled",true);
		$("#"+parentMainDiv+" #disabledButton").html("Please fill justification for <br>all fields to enable this button.");	
	}
	
	/*if($('#otherSpecify_2').length > 0 && $('#otherSpecify_2').val() != ''){
		if(!$('#inline18 textarea').val().length <= 0 && !$("#inline18 input[name$='_name']").length <= 0 ){
			$("#"+parentMainDiv+" #saveAndContinueButton").attr("disabled",true);
			$("#"+parentMainDiv+" #disabledButton").html("Please fill justification for <br>all fields to enable this button.");
		}
	}

	if($('#otherSpecify_3').length > 0 && $('#otherSpecify_3').val()  != ''){		
		if($('#inline19 textarea').val().length <= 0 && $("#inline19 input[name$='_name']").length <= 0 ){
			$("#"+parentMainDiv+" #saveAndContinueButton").attr("disabled",true);
			$("#"+parentMainDiv+" #disabledButton").html("Please fill justification for <br>all fields to enable this button.");
		}
	}

	if($('#otherSpecify_4').length > 0 && $('#otherSpecify_4').val() != ''){	
		if($('#inline20 textarea').val().length <= 0 && $("#inline20 input[name$='_name']").length <= 0 ){
			$("#"+parentMainDiv+" #saveAndContinueButton").attr("disabled",true);
			$("#"+parentMainDiv+" #disabledButton").html("Please fill justification for <br>all fields to enable this button.");
		}
	}

	if($('#otherSpecify_5').length > 0 && $('#otherSpecify_5').val() != ''){
		if($('#inline21 textarea').val().length <= 0 && $("#inline21 input[name$='_name']").length <= 0 ){
			$("#"+parentMainDiv+" #saveAndContinueButton").attr("disabled",true);
			$("#"+parentMainDiv+" #disabledButton").html("Please fill justification for <br>all fields to enable this button.");
		}
	}*/
// 	alert(total);
}
function onLoadCalculate(parentDiv){
	var t = 0;
	$("#"+parentDiv+" tr td input").each(function(){
		var $this = $(this);		
		if($this.hasClass("input-field-1")){
			t += parseFloat($this.val());
		}
		if($this.hasClass("input-field-2")){
			t += parseFloat($this.val());
		}
		if($this.hasClass("input-field-3")){
			t += parseFloat($this.val());
		}
		if($this.hasClass("result-field")){
			$this.val(t);
			t = 0;
		}		
	});
	 totalInput1(parentDiv);
	 totalInput2(parentDiv);
	 totalInput3(parentDiv);
	 totalResult(parentDiv);
}
function newSum() {
	var parrentDiv = $("#currentIdToCalculate").val();
	
	var sum = 0;
	var thisRow = $(this).closest('tr');		
	
	thisRow.find('td input:text.input-field-1').each( function(){
		sum += parseFloat(this.value); // or parseInt(this.value,10) if appropriate
	});
	thisRow.find('td input:text.input-field-2').each( function(){
		sum += parseFloat(this.value); // or parseInt(this.value,10) if appropriate
	});
	thisRow.find('td input:text.input-field-3').each( function(){
		sum += parseFloat(this.value); // or parseInt(this.value,10) if appropriate
	});
	if(isNaN(sum)) sum = 0;
		thisRow.find('td input:text.result-field').val(sum); // It is an <input>, right?

		
	 totalInput1(parrentDiv);
	 totalInput2(parrentDiv);
	 totalInput3(parrentDiv);
	 totalResult(parrentDiv);		  
}


function totalInput1(parentDiv){
	var t = 0;
	$("#"+parentDiv+" .input-field-1").each(function(){
		t = t + parseInt($(this).val());
	});
	if(isNaN(t)) t = 0;
	$("#"+parentDiv+" .input-field-1-total").val(t);
}
function totalInput2(parentDiv){
	var t = 0;
	$("#"+parentDiv+" .input-field-2").each(function(){
		t = t + parseInt($(this).val());
	});
	if(isNaN(t)) t = 0;
	$("#"+parentDiv+" .input-field-2-total").val(t);
}
function totalInput3(parentDiv){
	var t = 0;
	$("#"+parentDiv+" .input-field-3").each(function(){
		t = t + parseInt($(this).val());
	});
	if(isNaN(t)) t = 0;
	$("#"+parentDiv+" .input-field-2-total").val(t);
}
function totalResult(parentDiv){
	
	var t = 0;
	$("#"+parentDiv+" .result-field").each(function(){
		t = t + parseInt($(this).val());
	});
	if(isNaN(t)) t = 0;
	$("#"+parentDiv+" .result-field-total").val(t);

	
	
}
function checkTotalCostAndMeansOfFinance(parentDiv){
	var $totalProjectCost = parseFloat($("#totalProjectCost").val());
	var currentTotal = parseFloat($("#"+parentDiv+" .result-field-total").val());
	
	var cop_exp_till_date = parseFloat($("#cop_exp_till_date").val());
	var totalProjectCost = parseFloat($("#cop_exp_future").val());
	
	var totalLoanStatusDate = parseFloat($("#totalLoanStatusDate").val());
	var totalLoanAddAmt = parseFloat($("#totalLoanAddAmt").val());
	
	var asst_tdb_src_exp_total = parseFloat($("#assisLoanStatusDate").val())
	var src_exp_total = parseFloat($("#promStatusDate").val());
	src_exp_total = src_exp_total + parseFloat($("#otrLoanStatusDate1").val());
	src_exp_total = src_exp_total + parseFloat($("#fiStatusDate").val());
	src_exp_total = src_exp_total + parseFloat($("#bankStatusDate").val());
	src_exp_total = src_exp_total + parseFloat($("#otrLoanStatusDate").val());
	
	var asst_tdb_src_exp_total_fut = parseFloat($("#assisLoanAddAmt").val())
	var src_exp_total_fut = parseFloat($("#promAddAmt").val());
	src_exp_total_fut = src_exp_total_fut + parseFloat($("#otrLoanAddAmt1").val());
	src_exp_total_fut = src_exp_total_fut + parseFloat($("#fiAddAmt").val());
	src_exp_total_fut = src_exp_total_fut + parseFloat($("#bankAddAmt").val());
	src_exp_total_fut = src_exp_total_fut + parseFloat($("#otrLoanAddAmt").val());
	
	if(currentTotal == $totalProjectCost){	
			
		$("#"+parentDiv+" #saveAndContinueButton").attr("disabled",false);
		$("#"+parentDiv+" #disabledButton").html("");
		
		if(cop_exp_till_date != totalLoanStatusDate){
			$("#"+parentDiv+" #saveAndContinueButton").attr("disabled",true);
			$("#"+parentDiv+" #copandmopvaluemissmatch").html("Expenditures incurred till the date of application Total cost & Source of expenditures incurred till the date of application total cost must be same.");
		} else if (totalProjectCost != totalLoanAddAmt){
			$("#"+parentDiv+" #saveAndContinueButton").attr("disabled",true);
			$("#"+parentDiv+" #copandmopvaluemissmatch").html("Expenditures to be incurred Total cost & Source of expenditures yet to be incurred total cost must be same.");
		} else if (asst_tdb_src_exp_total > src_exp_total){
			$("#"+parentDiv+" #saveAndContinueButton").attr("disabled",true);
			$("#"+parentDiv+" #copandmopvaluemissmatch").html("Assistance from TDB must be lessthan or equal to Source of expenditures incurred till the date of application Equity and Loan total");
		} else if (asst_tdb_src_exp_total_fut > src_exp_total_fut){
			$("#"+parentDiv+" #saveAndContinueButton").attr("disabled",true);
			$("#"+parentDiv+" #copandmopvaluemissmatch").html("Assistance from TDB must be lessthan or equal to Source of expenditures yet to be incurred Equity and Loan total");
		} else {
			$("#"+parentDiv+" #saveAndContinueButton").attr("disabled",false);
			$("#"+parentDiv+" #copandmopvaluemissmatch").html("");
		}
		
		//copandmopvaluemissmatch
		
	}else{
		$("#"+parentDiv+" #copandmopvaluemissmatch").html("");
		$("#"+parentDiv+" #saveAndContinueButton").attr("disabled",true);
		$("#"+parentDiv+" #disabledButton").html("Total project cost <br />& Means of finance total <br />cost must be same.");
	}
}

function checkAvailability() {
	if($("#email").val().trim() != '') {
		jQuery.ajax({
			url: "check_availability.php",
			data:'email='+$("#email").val(),
			type: "POST",
			success:function(data){
				if(data == 1){
					$("#email").after('<label id="email-error" class="error" for="email">This email address already exists.</label>');
					return 1;
				}else{
					return 0;
				}		 		
			}	
		});
	}	
}

function validateQty(event) {
    var key = window.event ? event.keyCode : event.which; 
    //console.log(key);   
	if (key == 8 || key == 9  || key == 37 || key == 39 || key == 0) {
    	return true;
	}
	else if ( key < 48 || key > 57 ) {
    	return false;
	}
	else return true;
};
$(function() {
	$('#datetimepicker1').datetimepicker({minDate: '1900-01-01',});
	$('#datetimepicker2').datetimepicker({minDate: '1900-01-01',});
	$('#datetimepicker3').datetimepicker({minDate: '1900-01-01',});
	$('#datetimepicker4').datetimepicker({minDate: '1900-01-01',});
	$('#datetimepicker5').datetimepicker({minDate: '1900-01-01',});
	$('#datetimepicker9').datetimepicker({minDate: '1900-01-01',});
	$('#datetimepicker6').datetimepicker({minDate: '1900-01-01',});
	$('#PECdatePicker').datetimepicker({minDate: '1900-01-01',});
	$('.datepickerclass').datetimepicker({minDate: '1900-01-01',});
	$('#datetimepicker7').datetimepicker({
		minDate: '1900-01-01',
		useCurrent: false //Important! See issue #1075
	});
	
	$('#datetimepicker11').datetimepicker({minDate: '<?php echo date('Y-m-d');?>',});
	
	$("#datetimepicker7 input").on('focus',function(){
		/*var olddate = $("#datetimepicker6 input").val().split('/');	
		$('#datetimepicker7').data("DateTimePicker").minDate(olddate,+1);*/
	});
	$("#datetimepicker6").on("dp.change", function (e) {
		$('#scheduleEndDate').val('');
		$('#datetimepicker7 input').val('');
		$('#datetimepicker7').data("DateTimePicker").minDate(e.date,+1);
	});
	
	$('#datepickerNextDate').datetimepicker({minDate: '1900-01-01',dateFormat: 'dd:mm:yyyy',});
	
		
	/*if($('#amtSoughtDate').val() != undefined){
		var dateAr = $('#amtSoughtDate').val().split('/');
		var newDate = dateAr[2] + '-' + dateAr[1] + '-' + dateAr[0].slice(-2);
		$('#datepickerNextDate').datetimepicker({
			minDate:newDate,
		});
	}*/
	
	$('#datepickerNextDate1').datetimepicker({minDate: '1900-01-01',});
	/*if($('#intUpto').val() != undefined && $('#insertLoanDisbursalSchedual').val() == '1'){
		var dateAr = $('#intUpto').val();
		$('#datepickerNextDate1').datetimepicker({
			minDate:dateAr,
			clear:true
		});
		
		$("#datepickerNextDate1").on("dp.change", function (e) {
			$('#datetimepicker7').data("DateTimePicker").minDate(e.date,+1);
		});
		
	} else {
		$('#datepickerNextDate1').datetimepicker({minDate: -10,});
	}*/
	
	/*if($('#interest_upto_date').val() != undefined){
		var dateAr = $('#interest_upto_date').val().split('/');
		$('#datetimepicker9').data("DateTimePicker").minDate(dateAr,+1);
	}*/
	/*if($('#iscApproveDate').length > 0){
		var dateAr = $('#iscApproveDate').val();
		$('#PECdatePicker').data("DateTimePicker").minDate(dateAr,+1);
	}*/
	
	
	$('.fancybox').fancybox({
		'width'  : 600,           // set the width
	    'height' : 600,    
	});
});
</script>
 <script type="text/javascript">
	$(document).ready(function(){
		$( "#tag" ).autocomplete({
			source: 'includes/common.php?act=ajax&getList=expert&existExpert=' + $('#existExpert').val()
		});
		$( "#tag-isc" ).autocomplete({
			source: 'includes/common.php?act=ajax&getList=ISC&existingIsc='+$("#existISC").val()
		});
		$( "#tag-pmc" ).autocomplete({
			source: 'includes/common.php?act=ajax&getList=PMC&existingPMC='+$("#existPMC").val()
		});
	});
	
	$(".contents").shorten({
		"showChars" : 90,
		"moreText"	: "View More",
		"lessText"	: "View Less",
	});
	$(".longWidthContents").shorten({
		"showChars" : 150,
		"moreText"	: "View More",
		"lessText"	: "View Less",
	});

	$('.nexthearingDateCourtCase').on('focus',function(){
		if($('.dateOfHearingCourtCase').val() != ''){
			var dateOfHearingCourtCase = $('.dateOfHearingCourtCase').val().split('/');		
			$('#datetimepicker3').data("DateTimePicker").minDate(dateOfHearingCourtCase,+1);
		}else{

		}
		
	});
	$('.uploadinvocationDate').on('focus',function(){
// 		alert($('#noticedate2').val());
		var noticedate2Ar = $('#noticedate2').val().split('/');		
		$('#datetimepicker3').data("DateTimePicker").minDate(noticedate2Ar,+1);
	});
	$('.secoundInstallmentDate').on('blur',function(){
		setDatesForDefaulter();
		
		
	});
	if($('.secoundInstallmentDate').length > 0 && $('.secoundInstallmentDate').val() != '' ){
		setDatesForDefaulter();
	}
</script>
<script>
	function setDatesForDefaulter(){
		var dateAr = $('.secoundInstallmentDate').val().split('/');
		$('#datetimepicker2').data("DateTimePicker").minDate(dateAr,+1);
	}
	function checkChecked(formname) {
		var anyBoxesChecked = 0;
		$('input[type="checkbox"]').each(function() {
			if ($(this).is(":checked")) {
				anyBoxesChecked = 1;
			}
		});
		if (anyBoxesChecked == 0) {
			$('#chkboxerror').show();
			return false;
		} else {
			$('#chkboxerror').hide();
			return true;
		}
	}
</script>
<script>
	$("#awardType, #awardYear").on("change", function(){
		jQuery.ajax({
			url: "includes/common.php",
			data:'getList=awardType&act=ajax&awardType='+$("#awardType").val()+'&awardYear='+$("#awardYear").val(),
			type: "POST",
			success:function(data){
				$('#selCompany').html(data);
			}	
		});
	});
</script>
<!-- For logout after 30 minits if user idel -->
<script type="text/javascript" language="javascript">
	  var idleMax = 30; // Logout after 25 minutes of IDLE
	  var idleTime = 0;

	  var idleInterval = setInterval("timerIncrement()", 60000);  // 1 minute interval    		  
	  $( "body" ).mousemove(function( event ) {			  
		  idleTime = 0; // reset to zero
	});

	// count minutes
	function timerIncrement() {
		idleTime = idleTime + 1;
		if (idleTime > idleMax) { 
			window.location="logout.php";
		}
	}       
</script>
<!-- End code -->

<?php unset($_SESSION ['sessionMessage']); ?>
<input type="hidden" name="SITE_URL" id="SITE_URL" value="<?php echo SITE_URL; ?>" />
</body>
</html>
