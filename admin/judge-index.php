<?php include 'common/header.php';?>
<?php require_once '../includes/Classes/Competition.php';?>
<?php require_once '../includes/Classes/Judges.php';?>
<?php 
	$rowCompetition = json_decode(Competition::fetch());
	$rowJudge = json_decode(Judges::fetch());
	if (isset($_GET['id'])) 
		$competition_id = $_GET['id'];
	else
		$competition_id = "all";
?>
	<body>
		<?php include 'common/nav.php';?>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<?php include 'common/sidebar.php';?>

			<div class="main-content">

				<div class="page-content">
					<div class="page-header position-relative">
						<h1>
							Judge
						</h1>
					</div><!--/.page-header-->

					<div class="row-fluid">
								<h3 class="header smaller lighter blue"></h3>
									Sort By: <select class="form-control" name="sort_by">
									<option value="all" <?php  if($competition_id === "all") echo"selected"; ?>>All Competition</option>

										<?php foreach ($rowCompetition as $key => $value):?>
										<option <?php  if($competition_id == $value->competition_id) echo"selected"; ?> value="<?= $value->competition_id?>"><?= $value->competition_description?></option>									
										<?php endforeach;?>
									</select>
								<div class="table-header clearfix">
									Judges
									<div class="pull-right">
										<button class="btn btn-success" data-toggle="modal" data-target=".modal-add">ADD <i class="fa fa-plus"></i></button>
									</div>
								</div>

								<table id="table-competition" class="table table-striped table-bordered table-hover">
									<thead>
										<tr>
											<th>#</th>
											<th>Judge Name</th>
											<th></th>
										</tr>
									</thead>

									<tbody>
										<?php $a = 1; foreach ($rowJudge as $key => $value):?>

										<?php if($competition_id == $value->competition_id || $competition_id === "all"):?>
										<tr>
											<td><?= $a++; ?></td>
											<td><?= $value->name; ?></td>
											<td class="td-actions">
												<div class="action-buttons">
													<input type="hidden" name="name" value="<?= $value->name; ?>">
													<input type="hidden" name="competition_id" value="<?= $value->competition_id; ?>">
													<input type="hidden" name="judges_id" value="<?= $value->judges_id; ?>">
													<a class="green" href="#">
														<i class="icon-pencil bigger-130 edit" data-toggle="modal" data-target=".modal-edit"></i>
													</a>
													<a class="red" href="#">
														<i class="icon-trash bigger-130 delete" data-toggle="modal" data-target=".modal-delete"></i>
													</a>
												</div>

											</td>
										</tr>
										<?php endif;?>
										<?php endforeach;?>

									</tbody>
								</table>
							</div>
				</div><!--/.page-content-->

				<?php include 'common/settings.php';?>
			</div><!--/.main-content-->
		</div><!--/.main-container-->

<?php include 'common/footer.php'; ?>
<script>
	$(function() {
		$('#table-competition').dataTable();
	});
</script>

		<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
			<i class="icon-double-angle-up icon-only bigger-110"></i>
		</a>
<?php include 'modal-judge/add.php'; ?>
<?php include 'modal-judge/edit.php'; ?>
<?php include 'modal-judge/delete.php'; ?>
<script type="text/javascript">
  $(function() {
    $('[name=sort_by]').on('input', function(){
    	console.log(this);       
        location.href = "<?= $_SERVER['PHP_SELF'] ?>" + "?id=" +  $('[name=sort_by]').val();
    });
  });
</script>
