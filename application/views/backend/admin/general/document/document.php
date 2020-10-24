<div class="row">
	<div class="col-md-12">
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
		<div class="portlet light bordered">
			<div class="portlet-title">
				<div class="caption font-dark">
					<i class="icon-settings font-dark"></i>
					<span class="caption-subject bold uppercase">
						<?=$title?></span>
				</div>

			</div>
			<div class="portlet-body">
				<div class="table-toolbar">

					<div class="row">
						<div class="col-md-6">
							<div class="btn-group">


								<a href="<?=base_url() . 'backend/admin/general/currency/Modal/insert/'?>" id="sample_editable_1_new" class="btn blue-hoki"
								 data-target="#basic" data-toggle="modal"> Add &nbsp<i class="fa fa-plus"></i></a>


							</div>
						</div>

						<div class="col-md-6">
							<div class="btn-group pull-right">
								<button class="btn green  btn-outline dropdown-toggle" data-toggle="dropdown">Tools
									<i class="fa fa-angle-down"></i>
								</button>
								<ul class="dropdown-menu pull-right">
									<li>
										<a href="javascript:;">
											<i class="fa fa-print"></i> Print </a>
									</li>
									<li>
										<a href="javascript:;">
											<i class="fa fa-file-pdf-o"></i> Save as PDF </a>
									</li>
									<li>
										<a href="javascript:;">
											<i class="fa fa-file-excel-o"></i> Export to Excel </a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>





				<table class="table table-striped table-bordered table-hover table-checkable order-column" id="sample_11">
					<thead>
						<tr>
							<th width="1%">
								SlNo
							</th>
							<th> Country </th>
							<th> currency </th>
							<th> Symbol </th>
							<th> Status </th>
							<th> Actions </th>
						</tr>
					</thead>
					<tbody>
						<?php

if (!empty($currency_details)) {
    $count = 1;
    foreach ($currency_details as $row) {

        ?>

						<tr class="odd gradeX">
							<td>
								<?=$count?>
							</td>

							<td>
								<?=$row['countryname']?>
							</td>

							<td>
								<?=$row['currency']?>
							</td>
							<td>
								<?=$row['CurrencySymbol']?>
							</td>
							<td>

									<?php
if ($row['StatusId'] == 1) {

            ?>

								<span class="label label-sm btn green-jungle"> Active </span>
								<?php

        } elseif ($row['StatusId'] == 4) {

            ?>

								<span class="label label-sm btn purple-soft"> Blocked </span>

								<?php

        }

        ?>


							</td>

							<td>
										<div class="btn-group">
									<button class="btn btn-xs label-danger dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
										Actions
										<i class="fa fa-angle-down"></i>
									</button>
									<ul class="dropdown-menu pull-left" role="menu">

										<li>
											<a href="<?=base_url() . 'backend/admin/general/currency/Modal/update/' . $row['Id']?>" data-toggle="modal"
											 data-target="#basic">
												<i class="icon-docs"></i> Edit </a>
										</li>

										<li>


											<a href="<?=base_url() . 'backend/admin/general/currency/Modal/delete/' . $row['Id']?>"  data-toggle="modal" data-target="#basic">
												<i class="icon-docs"></i> delete </a>

										</li>

									</ul>
								</div>
							</td>
						</tr>
						<?php
$count++;
    }
}
?>


					</tbody>
				</table>




				<div class="panel panel-success">
					<div class="panel-heading">
						<h3 class="panel-title">Notes</h3>
					</div>
					<div class="panel-body">
						<ul>
							<li> <span class="label label-sm btn blue-hoki">Add + </span>&nbsp&nbsp Indicates Add new Currency </li><br>
							<li> <span class="label label-sm btn green-jungle"> Active </span>&nbsp&nbsp Indicates account is Active </li>
							<br>
							<li> <span class="label label-sm label-danger"> Actions </span>&nbsp&nbsp Indicates Edit and Delete default
								language </li><br>
							<li> <span class="label label-sm btn purple-soft">Block </span>&nbsp&nbsp Indicates account is Block </li><br>
						</ul>
					</div>
				</div>





				<script>
					$('#NavMainGeneral').addClass('open active');

					$('#ArrowMainGeneral').addClass('open active');

					$('#NavGeneralCurrency').addClass('open active');


					$(document).ready(function () {



$('#sample_11').dataTable({
	"columns": [{
			"width": "5%"
		},
		{
			"width": "63%"
		},
		{
			"width": "9%"
		},
		{
			"width": "9%"
		},
		{
			"width": "5%"
		},
		{
			"width": "9%"
		}
	]
});


});
				</script>
