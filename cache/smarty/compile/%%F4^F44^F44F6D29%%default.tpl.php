<?php /* Smarty version 2.6.20, created on 2014-09-11 20:41:15
         compiled from administration/registry/default.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Bizlounge | Registry</title>
<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'administration/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'administration/includes/javascript.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>
 
</head>
<body>
<!-- Start Main Container -->
<div id="container">

    <!-- Start Content Section -->
  <div id="content">
    <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'administration/includes/header.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

	<div id="breadcrumb">
        <ul>
            <li><a href="/administration/" title="Home">Home</a></li>
			<li><a href="/administration/registry/" title="Registry">Registry</a></li>
        </ul>
	</div><!--breadcrumb-->	
  <div class="inner">  
		<h2>Manage Registry</h2>
		<div class="section">
		<a href="/administration/registry/view/" title="Manage View"><img src="/administration/images/users.gif" alt="Manage  View" height="50" width="50" /></a>
		<a href="/administration/registry/view/" title="Manage View" class="title">Manage  View</a>
		</div>
		<div class="section mrg_left_50">
		<a href="/administration/registry/products/" title="Manage Products"><img src="/administration/images/projects.gif" alt="Manage Products" height="50" width="50" /></a>
		<a href="/administration/registry/products/" title="Manage Products" class="title">Manage Products</a>
		</div>	
		<div class="clearer"><!-- --></div>
    </div><!--inner-->
  </div><!-- End Content Section -->
 <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'administration/includes/footer.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

</div>
<!-- End Main Container -->
</body>
</html>