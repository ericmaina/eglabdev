<!doctype html>
<html>
	<head>
		<title><?= $title ?></title>
<!-- meta tags -->
<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
		<!-- custom CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css?v=1.1" type="text/css" title="Contemporary">
		
		
					</head>
					<body>
						<!-- Navigation -->
						<?php $this->load->view('common/navigation');?>
						<!--/.. Navigation -->
						<!-- Container -->
						<div class="container">
							<!-- main data -->
							<div class="main data">
								<?= $contents ?>
							</div>
							<!--/.. main data-->
						</div>
						<!--/.. Container -->
						<footer class="footer">
							<div class="container-fluid bg-light text-center custom-footer">
								<div class="col-md-12 col-sm-12">
					© 2019 Copyright:
									<a href="https://bmb.natsci.msu.edu/faculty/erich-grotewold/"> GrotewoldLab</a>
								</div>
							</div>
						</footer>
						<!-- JS Libs -->
						<script src="<?php echo base_url('assets/js/jquery-3.5.0.js') ?>" ></script>
						<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js') ?>" ></script>
						<script src="<?php echo base_url('assets/js/photo-gallery.js') ?>" ></script>
						
					</body>
				</html>
				

