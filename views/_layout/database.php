<!doctype html>
<html>
	<head>
		<title><?= $title ?></title>
<!-- meta tags -->
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- bootstrap CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

		<!-- datatables -->
	    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.5/css/responsive.bootstrap.min.css"/>
		<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css"/>
		
		<!-- custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css?v=1.2" type="text/css" title="Contemporary">
		
		
		
					</head>
					<!-- Navigation -->
						<?php $this->load->view('common/navigation');?>
						<!--/.. Navigation -->
					<body>
						<!-- Container -->
						<div class="container">
							<!-- main data -->
							<div class="main data">
								<?= $contents ?>
								
							</div>
							<!--/.. main data-->
						</div>
						<!--/.. Container -->
						<div class="footer bg-dark text-center footer">
							<div class="container">
								<div class="col-md-12 col-sm-12">
									
										© 2019 Copyright:
									<a href="https://bmb.natsci.msu.edu/grotewold-lab/"> GrotewoldLab</a>
								</div>
							</div>
						 </div>
						 <!-- JS Libs -->
						 <script type="text/javascript">
					     table ="<?php echo $tablename; ?>";
						 base_url = "<?php echo base_url(); ?>";
						 
						 </script>
						 <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
						 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
						 <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
						 <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap.min.js" ></script>
						 <script src="<?php echo base_url("assets/js/ColReorderWithResize.js") ?>" ></script>
<!--
						 <script src="<?php //echo base_url("assets/js/database.js") ?>"></script>
-->
				</body>
</html>
 <script type="text/javascript"> 				
$(document).ready(function() {
	table ="<?php echo $tablename ?>"
    $('#stock-list').DataTable({
        "serverSide": true,
        //"dom": 'Rlfrtip',
        //"order": [0, 'desc'],
        "ajax": {
            url: base_url + 'databases/'+table+'/getLists',
            type: 'post'
        }
    });
 });
 </script>
