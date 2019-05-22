<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('admin/head');?>
	
</head>

<body class="fixed-nav sticky-footer" id="page-top">
    <?php $this->load->view('admin/nav');?>
    <!-- /Navigation-->
    <?php $this->load->view($temp,$this->data);?>
    <?php $this->load->view('admin/footer');?>
    <!-- Scroll to Top Button-->
    <?php $this->load->view('admin/popup');?>
	
</body>
</html>
