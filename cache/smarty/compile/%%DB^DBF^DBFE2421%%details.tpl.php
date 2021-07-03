<?php /* Smarty version 2.6.20, created on 2014-11-16 09:00:20
         compiled from administration/participants/view/details.tpl */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Maverick</title>
<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'administration/includes/css.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'administration/includes/javascript.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

</head>
<body>
<!-- Start Main Container -->
<div id="container">
    <!-- Start Content recruiter -->
  <div id="content">
    <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'administration/includes/header.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

  	<br />
	<div id="breadcrumb">
        <ul>
            <li><a href="/administration/" title="Home">Home</a></li>
			<li><a href="/administration/participants/" title="Participants">Participants</a></li>
			<li><a href="/administration/participants/view/" title="Members">Members</a></li>
			<li><?php if (isset ( $this->_tpl_vars['participantData'] )): ?>Edit Member<?php else: ?>Add a Member<?php endif; ?></li>
        </ul>
	</div><!--breadcrumb-->
	<div class="inner"> 
      <h2><?php if (isset ( $this->_tpl_vars['participantData'] )): ?>Edit Member<?php else: ?>Add a Member<?php endif; ?></h2>
    <div id="sidetabs">
        <ul > 
            <li class="active"><a href="#" title="Details">Details</a></li>
			<li><a href="<?php if (isset ( $this->_tpl_vars['participantData'] )): ?>/administration/participants/view/login.php?code=<?php echo $this->_tpl_vars['participantData']['participant_code']; ?>
<?php else: ?>#<?php endif; ?>" title="Login">Login</a></li>	
        </ul>
    </div><!--tabs-->

	<div class="detail_box">
      <form id="detailsForm" name="detailsForm" action="/administration/participants/view/details.php<?php if (isset ( $this->_tpl_vars['participantData'] )): ?>?code=<?php echo $this->_tpl_vars['participantData']['participant_code']; ?>
<?php endif; ?>" method="post">
        <table width="700" border="0" align="center" cellpadding="0" cellspacing="0" class="form">
          <tr>
			<td>
				<h4 class="error">Name:</h4><br /><input type="text" name="participant_name" id="participant_name" value="<?php echo $this->_tpl_vars['participantData']['participant_name']; ?>
" size="30" />
				<?php if (isset ( $this->_tpl_vars['errorArray']['participant_name'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['participant_name']; ?>
</span><?php endif; ?>
			</td>	
			<td><h4 class="error">Surname:</h4><br />
				<input type="text" name="participant_surname" id="participant_surname" value="<?php echo $this->_tpl_vars['participantData']['participant_surname']; ?>
" size="30" />
				<?php if (isset ( $this->_tpl_vars['errorArray']['participant_surname'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['participant_surname']; ?>
</span><?php endif; ?>
			</td>	
			<td>
				<h4 class="error">Email:</h4><br />
				<input type="text" name="participant_email" id="participant_email" value="<?php echo $this->_tpl_vars['participantData']['participant_email']; ?>
" size="30" <?php if (isset ( $this->_tpl_vars['participantData']['participant_email'] )): ?>readonly<?php endif; ?> />
				<?php if (isset ( $this->_tpl_vars['errorArray']['participant_email'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['participant_email']; ?>
</span><?php endif; ?>
			</td>						
          </tr>
          <tr>
			<td>
				<h4>Area:</h4><br />
				<input type="text" name="areapost_name" id="areapost_name" value="<?php if ($this->_tpl_vars['participantData']['areapost_code'] != ''): ?><?php echo $this->_tpl_vars['participantData']['areapost_suburb']; ?>
, <?php echo $this->_tpl_vars['participantData']['areapost_city']; ?>
, <?php echo $this->_tpl_vars['participantData']['areapost_box']; ?>
<?php endif; ?>" size="30" />
				<input type="hidden" name="areapost_code" id="areapost_code" value="<?php echo $this->_tpl_vars['participantData']['areapost_code']; ?>
" />
				<?php if (isset ( $this->_tpl_vars['errorArray']['areapost_code'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['areapost_code']; ?>
</span><?php endif; ?>
			</td>
			<td>
				<h4>Cellphone:</h4><br /><input type="text" name="participant_cellphone" id="participant_cellphone" value="<?php echo $this->_tpl_vars['participantData']['participant_cellphone']; ?>
" size="30" />
				<?php if (isset ( $this->_tpl_vars['errorArray']['participant_cellphone'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['participant_cellphone']; ?>
</span><?php endif; ?>
			</td>		
			<td>
				<h4>Birth Date:</h4><br /><input type="text" name="participant_birthdate" id="participant_birthdate" value="<?php echo $this->_tpl_vars['participantData']['participant_birthdate']; ?>
" size="10" />
				<?php if (isset ( $this->_tpl_vars['errorArray']['participant_birthdate'] )): ?><br /><span class="error"><?php echo $this->_tpl_vars['errorArray']['participant_birthdate']; ?>
</span><?php endif; ?>
			</td>		
			</tr>		  			
        </table>
      </form>
	</div>
    <div class="clearer"><!-- --></div>
        <div class="mrg_top_10">
          <a href="/administration/participants/view/" class="button cancel mrg_left_147 fl"><span>Cancel</span></a>
          <a href="javascript:submitForm();" class="blue_button mrg_left_20 fl"><span>Save &amp; Complete</span></a>   
        </div>
    <div class="clearer"><!-- --></div>
    </div><!--inner-->
 </div> 	
<!-- End Content -->
<?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => 'administration/includes/footer.php', 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

 </div><!-- End Content -->

</div>
<?php echo '
<script type="text/javascript" language="javascript">

function submitForm() {
	document.forms.detailsForm.submit();					 
}

$( document ).ready(function() {
	
	$( "#participant_birthdate" ).datepicker({ dateFormat: \'yy-mm-dd\', changeYear: true, changeMonth: true});
	
	$( "#areapost_name" ).autocomplete({
		source: "/feeds/area.php",
		minLength: 2,
		select: function( event, ui ) {
		
			if(ui.item.id == \'\') {
				$(\'#areapost_name\').html(\'\');
				$(\'#areapost_code\').val(\'\');					
			} else {
				$(\'#areapost_name\').html(\'<b>\' + ui.item.value + \'</b>\');
				$(\'#areapost_code\').val(ui.item.id);	
			}
			$(\'#areapost_name\').val(\'\');										
		}
	});
	
});

</script>
'; ?>

<!-- End Main Container -->
</body>
</html>