<?php /* Smarty version 2.6.20, created on 2014-11-16 10:58:17
         compiled from administration/default.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Maverick</title>
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

  <div class="inner">  
		<h2>The Maverick Content Management System</h2>
		<div class="section">
			<a href="/administration/participants/" title="Manage Members"><img src="/administration/images/projects.gif" alt="Manage Members" height="50" width="50" /></a>
			<a href="/administration/participants/" title="Manage Members" class="title">Manage Members</a>
		</div>
		<div class="section mrg_left_50">
		<a href="/administration/company/" title="Manage Companies"><img src="/administration/images/projects.gif" alt="Manage Companies" height="50" width="50" /></a>
		<a href="/administration/company/" title="Manage Companies" class="title">Manage Companies</a>
		</div>		
		<div class="section mrg_left_50">
		<a href="/administration/gallery/" title="Manage Galleries"><img src="/administration/images/projects.gif" alt="Manage Galleries" height="50" width="50" /></a>
		<a href="/administration/gallery/" title="Manage Galleries" class="title">Manage Galleries</a>
		</div>
		<div class="clearer"><!-- --></div>
		<div class="section">
			<a href="/administration/event/" title="Manage Events"><img src="/administration/images/projects.gif" alt="Manage Events" height="50" width="50" /></a>
			<a href="/administration/event/" title="Manage Events" class="title">Manage Events</a>
		</div>
		<div class="section mrg_left_50">
		<a href="/administration/campaign/" title="Manage Newsletter"><img src="/administration/images/projects.gif" alt="Manage Newsletter" height="50" width="50" /></a>
		<a href="/administration/campaign/" title="Manage Newsletter" class="title">Manage Newsletter</a>
		</div>		
		<div class="section mrg_left_50">
		<a href="/administration/communication/" title="Manage Communication"><img src="/administration/images/projects.gif" alt="Manage Communication" height="50" width="50" /></a>
		<a href="/administration/communication/" title="Manage Communication" class="title">Manage Communication</a>
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