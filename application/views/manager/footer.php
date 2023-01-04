		
		
		
		</div>
    </div>
    <section class="developer">
		<div class="thumbnail">
			<div class="caption">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12 text-right">
							<b>System Developed By >> <a href="http://starlabit.com.bd/">StarLab IT</a></b>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

    <!-- jQuery -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.js"></script>
	<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-datepicker.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/bootstrap-timepicker.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/select2.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/table.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/metisMenu.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/chart.js'); ?>"></script>
	<script src="<?php echo base_url('assets/js/script.js'); ?>"></script>	
	<script type="text/javascript">
		$('.forselect2').select2();
	</script>	
	<script type="text/javascript">
		$(function(){
			var windowHeight = $(window).height();
			var navbarHeight = $('.navbar').height();
			var wrapperHeight = windowHeight - navbarHeight;
			$('#page-wrapper').css('min-height', wrapperHeight);
		});
	</script>
	<script>
		$(function () {
            $("#ssc").hide();
            $("#hsc").hide();
            $("#graduation").hide();
            $("#postGraduation").hide();
            $("#otherCourses").hide();
	        $(".workingStudentDiv").hide();
            
	    $("#admissionType").change(function () {

	        if ($(this).val() == "1") {
	        	//alert('alert');
	            $("#ssc").show();
	            $("#hsc").hide();
	            $("#graduation").hide();
	            $("#postGraduation").hide();
	            $("#otherCourses").hide();
	            $(".workingStudentDiv").hide();
	        }
	        else if($(this).val() == "2"){
	            $("#ssc").show();
	            $("#hsc").show();
	            $("#graduation").hide();
	            $("#postGraduation").hide();
	            $("#otherCourses").hide();
	            $(".workingStudentDiv").hide();
	        }
	        else if($(this).val() == "3"){
	            $("#ssc").show();
	            $("#hsc").show();
	            $("#graduation").hide();
	            $("#postGraduation").hide();
	            $("#otherCourses").show();
	            $(".workingStudentDiv").hide();
	        }
	        else if($(this).val() == "4"){
	            $("#ssc").show();
	            $("#hsc").show();
	            $("#graduation").show();
	            $("#postGraduation").hide();
	            $("#otherCourses").hide();
	            $(".workingStudentDiv").hide();
	        }
	        else if($(this).val() == "5"){
	            $("#ssc").show();
	            $("#hsc").show();
	            $("#graduation").show();
	            $("#postGraduation").show();
	            $("#otherCourses").hide();
	            $(".workingStudentDiv").hide();
	        }
	        else if($(this).val() == "6"){
	            $("#ssc").show();
	            $("#hsc").show();
	            $("#graduation").show();
	            $("#postGraduation").show();
	            $("#otherCourses").hide();
	            $(".workingStudentDiv").hide();
	        }
	        else if($(this).val() == "7"){
	            $("#ssc").show();
	            $("#hsc").show();
	            $("#graduation").hide();
	            $("#postGraduation").hide();
	            $("#otherCourses").hide();
	            $(".workingStudentDiv").hide();
	        }
	        else{
	        	$(".workingStudentDiv").show();
	        }
	    });
	});
	</script>
	<script>
		$(function(){
		    $('.sscCurrentStudentDiv').hide();
		    $(".sscCurrentStudentCheck #inlineCheckbox3").click(function(){
		        if(this.checked) {
		            $('.sscCurrentStudentDiv').show();
		        } else {
		            $('.sscCurrentStudentDiv').hide();
		        }
		    }); 
		});
	</script>
	<script>
		$(function(){
		    $('.hscCurrentStudentDiv').hide();
		    $(".hscCurrentStudentCheck #inlineCheckbox4").click(function(){
		        if(this.checked) {
		            $('.hscCurrentStudentDiv').show();
		        } else {
		            $('.hscCurrentStudentDiv').hide();
		        }
		    }); 
		});
	</script>
	<script>
		$(function(){
		    $('.graduationCurrentStudentDiv').hide();
		    $(".graduationCurrentStudentCheck #inlineCheckbox5").click(function(){
		        if(this.checked) {
		            $('.graduationCurrentStudentDiv').show();
		        } else {
		            $('.graduationCurrentStudentDiv').hide();
		        }
		    }); 
		});
	</script>
	<script>
		$(function(){
		    $('.postGraduationCurrentStudentDiv').hide();
		    $(".postGraduationCurrentStudentCheck #inlineCheckbox6").click(function(){
		        if(this.checked) {
		            $('.postGraduationCurrentStudentDiv').show();
		        } else {
		            $('.postGraduationCurrentStudentDiv').hide();
		        }
		    }); 
		});
	</script>
	<?php include('commonJsFunction.php'); ?>
	<?php //include('allsalejs.php'); ?>
	<?php //('inventorySearchJs.php'); ?>
</body>

</html>
