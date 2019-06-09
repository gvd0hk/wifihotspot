<?php /* Smarty version Smarty-3.1.13, created on 2019-06-09 11:03:53
         compiled from "ui\theme\default\dbstatus.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10068072755cfc85292c8724-22377604%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8efda4b22bb54202de62a4911eb8fa8035bde3e3' => 
    array (
      0 => 'ui\\theme\\default\\dbstatus.tpl',
      1 => 1444452256,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10068072755cfc85292c8724-22377604',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    'dbsize' => 0,
    '_url' => 0,
    'tables' => 0,
    'tbl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cfc852930fe87_73405718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfc852930fe87_73405718')) {function content_5cfc852930fe87_73405718($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row">
	<div class="col-sm-12">
		<div class="panel mb20 panel-default">
			<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Database_Status'];?>
</div>
			<div class="panel-body">
			
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
						<div class="col-md-9"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Total_Database_Size'];?>
: <?php echo $_smarty_tpl->tpl_vars['dbsize']->value;?>
  MB </div>
						<div class="col-md-3 text-right">
							<a href="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
settings/dbbackup/" class="btn btn-primary btn-xs"><i class="fa fa-download"></i> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Download_Database_Backup'];?>
</a>
						</div>&nbsp;
						<div class="table-responsive">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="50%"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Table_Name'];?>
</th>
										<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Rows'];?>
</th>
										<th><?php echo $_smarty_tpl->tpl_vars['_L']->value['Size'];?>
</th>
									</tr>
								</thead>
								<tbody>
								<?php  $_smarty_tpl->tpl_vars['tbl'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tbl']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tables']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tbl']->key => $_smarty_tpl->tpl_vars['tbl']->value){
$_smarty_tpl->tpl_vars['tbl']->_loop = true;
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['name'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['rows'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['tbl']->value['size'];?>
 Kb</td>
									</tr>
								<?php } ?>
								</tbody>
							</table>
						</div>
                    </div>
                </div>
				
            </div>
        </div>
    </div>
</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>