<?php 
include("header.php");
?>

<!-- END HEADER -->

<style>
.modal-header {
	background-color: #F3F3F3;
	background-image: linear-gradient(#F3F3F3, #E7E7E7 50%);
	border-bottom: 1px solid #C4C4C4;
	border-radius: 6px 6px 0 0;
	clear: both;
	color: #494949;
}

.modal-footer:after {
	clear: both;
}
.modal-footer:before, .modal-footer:after {
	content: "";
	display: table;
	line-height: 0;
}
.modal-footer:after {
	clear: both;
}
.modal-footer {
	border-radius: 0 0 6px 6px;
}
.toggle-button span.info{
	background:-moz-linear-gradient(center bottom , #D84A38, #BB2413) repeat scroll 0 0 #D84A38;
}
.span6.m-wrap{
	height:auto !important;
}
.tile.double {
    height: 64px;
    width: 64px !important;
}
</style>

<!-- START MODAL -->

<div id="popup" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div id="getpopupdata">
	</div>

</div>

<!-- END MODAL -->

<!-- BEGIN CONTAINER -->
<div class="page-container row-fluid">
	<!-- BEGIN SIDEBAR -->
	<?php include("leftbar.php"); ?>
	<!-- END SIDEBAR -->
	<!-- BEGIN PAGE -->
	<div class="page-content">
		<!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		<div id="portlet-config" class="modal hide">
			<div class="modal-header">
				<button data-dismiss="modal" class="close" type="button"></button>
				<h3>Widget Settings</h3>
			</div>
			<div class="modal-body">
				<p>Here will be a configuration form</p>
			</div>
		</div>
		<!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
		<!-- BEGIN PAGE CONTAINER-->
		<div class="container-fluid">
			<!-- BEGIN PAGE HEADER-->
			<div class="row-fluid">
				<div class="span12">
					<!-- BEGIN STYLE CUSTOMIZER -->
					<div class="color-panel hidden-phone">
						<div class="color-mode-icons icon-color"></div>
						<div class="color-mode-icons icon-color-close"></div>
						<div class="color-mode">
							<p>THEME COLOR</p>
							<ul class="inline">
								<li class="color-black current color-default" data-style="default"></li>
								<li class="color-blue" data-style="blue"></li>
								<li class="color-brown" data-style="brown"></li>
								<li class="color-purple" data-style="purple"></li>
								<li class="color-white color-light" data-style="light"></li>
							</ul>
							<label class="hidden-phone">
							<input type="checkbox" class="header" checked value="" />
							<span class="color-mode-label">Fixed Header</span>
							</label>							
						</div>
					</div>
					<!-- END BEGIN STYLE CUSTOMIZER -->   	
					<!-- BEGIN PAGE TITLE & BREADCRUMB-->			
					<h3 class="page-title">
						Dashboard				
					</h3>
					<ul class="breadcrumb">
						<li>
							<i class="icon-home"></i>
							<a href="dashboard.php">Home</a> 
							<i class="icon-angle-right"></i>
						</li>
						<li><a href="#">Dashboard</a></li>
						<!--<li class="pull-right no-text-shadow">
							<div id="dashboard-report-range" class="dashboard-date-range tooltips no-tooltip-on-touch-device responsive" data-tablet="" data-desktop="tooltips" data-placement="top" data-original-title="Change dashboard date range">
								<i class="icon-calendar"></i>
								<span></span>
								<i class="icon-angle-down"></i>
							</div>
						</li>-->
					</ul>
					<!-- END PAGE TITLE & BREADCRUMB-->
				</div>
			</div>
			<!-- END PAGE HEADER-->
			<div id="dashboard" style="width:100%">

				<div style="font-size:20px; font-weight:bold; color:#000000; top:0; bottom:0; left:0; right:0; margin:auto auto; width:500px; margin-top:100px;">Welcome to <?=PROJECT_NAME?> Administrative section</div>
			
			</div>
		</div>
		<!-- END PAGE CONTAINER-->		
	</div>
	<!-- END PAGE -->
</div>
<!-- END CONTAINER -->

<!-- BEGIN JAVASCRIPTS -->
<!-- Load javascripts at bottom, this will reduce page load time -->
<script src="assets/js/jquery-1.8.3.min.js"></script>	
<script src="assets/breakpoints/breakpoints.js"></script>	
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>		
<script src="assets/js/jquery.blockui.js"></script>
<script src="assets/js/jquery.cookie.js"></script>
<!-- ie8 fixes -->
<!--[if lt IE 9]>
<script src="assets/js/excanvas.js"></script>
<script src="assets/js/respond.js"></script>
<![endif]-->	
<script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
<script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
<script type="text/javascript" src="assets/data-tables/jquery.dataTables.js"></script>
<script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
<script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
<script src="assets/js/app.js"></script>		
<script>
	jQuery(document).ready(function() {			
		// initiate layout and plugins
		App.setPage("table_managed");
		$(".chosen").chosen();
		App.init();
	});
		
	function deleteone(id,table,datatype)
	{	
		var cnf = confirm("Are you sure to delete?");
		
		if(cnf)
		{
			$('.portlet .tools a.reload').click();
			$.post('ajax/delete.php',{ id : id, mode : 'single', type : 'data', table : table, datatype : datatype },
				function(data)
				{
					$('#tablesec').html(data);
					
					/************************************ Table JS ************************************/
								
					$('#sample_1').dataTable({
						"aLengthMenu": [
							[5, 15, 20, -1],
							[5, 15, 20, "All"]
						],
						// set the initial value
						"iDisplayLength": 15,
						"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
						"sPaginationType": "bootstrap",
						"oLanguage": {
							"sLengthMenu": "_MENU_ records per page",
							"oPaginate": {
								"sPrevious": "Prev",
								"sNext": "Next"
							}
						},
						"aoColumnDefs": [{
							'bSortable': false,
							'aTargets': [0]
						}]
					});
					
					jQuery('#sample_1 .group-checkable').change(function () {
						var set = jQuery(this).attr("data-set");
						var checked = jQuery(this).is(":checked");
						jQuery(set).each(function () {
							if (checked) {
								$(this).attr("checked", true);
							} else {
								$(this).attr("checked", false);
							}
						});
						jQuery.uniform.update(set);
					});
					
					var test = $("input[type=checkbox]:not(.toggle), input[type=radio]:not(.toggle, .star)");
					if (test) {
						test.uniform();
					}
					
					$(".chosen").chosen();
					
					/************************************ Table JS ************************************/
				}
			);
		}
	}
	
	function delselected(table,datatype)
	{
		var data = document.getElementsByName('data[]');
		
		var ln = data.length;
		
		var flag = 0;
		var str = "";
		
		for(i=0;i<ln;i++)
		{
			if(data[i].checked)
			{
				str = str + data[i].value + ',';
			}
		}
		
		if(str != "")
		{
			var cnf = confirm("Are you sure to delete?");
		
			if(cnf)
			{
				$('.portlet .tools a.reload').click();
				$.post('ajax/delete.php',{ ids : str , mode : 'selected', type : 'data', table : table, datatype : datatype },
					function(data)
					{
						$('#tablesec').html(data);
						
						/************************************ Table JS ************************************/
								
						$('#sample_1').dataTable({
							"aLengthMenu": [
								[5, 15, 20, -1],
								[5, 15, 20, "All"]
							],
							// set the initial value
							"iDisplayLength": 15,
							"sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span6'i><'span6'p>>",
							"sPaginationType": "bootstrap",
							"oLanguage": {
								"sLengthMenu": "_MENU_ records per page",
								"oPaginate": {
									"sPrevious": "Prev",
									"sNext": "Next"
								}
							},
							"aoColumnDefs": [{
								'bSortable': false,
								'aTargets': [0]
							}]
						});
						
						jQuery('#sample_1 .group-checkable').change(function () {
							var set = jQuery(this).attr("data-set");
							var checked = jQuery(this).is(":checked");
							jQuery(set).each(function () {
								if (checked) {
									$(this).attr("checked", true);
								} else {
									$(this).attr("checked", false);
								}
							});
							jQuery.uniform.update(set);
						});
						
						var test = $("input[type=checkbox]:not(.toggle), input[type=radio]:not(.toggle, .star)");
						if (test) {
							test.uniform();
						}
						
						$(".chosen").chosen();
						
						/************************************ Table JS ************************************/
					}
				);
			}
		}
		else
		{	
			alert('You must select atleast one item');
		}
	}
	
	function changestatus(stat,id)
	{
		//alert(id);
		//alert(stat);
		var table = "data";
		$.post('ajax/status.php',{ stat : stat , id : id , table : table });
	}
</script>

<!-- END JAVASCRIPTS -->   

<!-- BEGIN FOOTER -->
<?php include("footer.php"); ?>
<!-- END FOOTER -->

</body>
<!-- END BODY -->
</html>