<!-- Items block -->
<section class="content course">
	<!-- row -->
	<div class="row">
		<!-- col-md-6 -->
		<div class="col-md-9">
			<!-- Box danger -->
			<?php echo $this->session->flashdata('message'); ?>

			<div class="box box-danger">
				<!-- Content -->
				<div class="box-body"> 
					<!-- Item table -->
					<table class="table table-condensed table-striped table-bordered">
						<thead>
							<tr>
								<th>#</th>
								<th>Module Name</th>
								<th></th>
								<th></th>
								<th>Remarks</th>
							</tr>
						</thead>

						<tbody>
							<tr>
								<td>1</td>
								<td>Sample training module</td>
								<td>
									<a href="<?php echo  base_url('index.php/course/modal_content/') ?>" data-toggle="modal" data-target=".bs-example-modal-md"><i class="fa fa-eye" aria-hidden="true"></i> Study Module</a>
								</td>
								<td><a class="text-blue" href="<?php echo  base_url('index.php/course/exam_content/') ?>" data-toggle="modal" data-target=".bs-example-modal-lg"><i class="fa fa-question-circle" aria-hidden="true"></i> Take Exam</a></td>
								<td><p class="text-green"><i class="fa fa-check" aria-hidden="true"></i> Passed</p></td>
							</tr>
						</tbody>
					</table>
					<!-- End of table -->
				</div>
				<!-- End of content -->
			</div>
			<!-- End of danger -->
		</div>
		<!-- End of col-md-6 -->
	</div>
	<!-- End of row -->
</section>
<div class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog modal-md" role="document">
		<div class="modal-content">

		</div>
	</div>
</div>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" data-keyboard="false" data-backdrop="static">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">

		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.table').DataTable();

	});

	// Detroy modal
	$('body').on('hidden.bs.modal', '.modal', function () {
		$(this).removeData('bs.modal');
	}); 
</script>