<?php /* Smarty version Smarty-3.1.13, created on 2019-06-09 11:29:21
         compiled from "ui\theme\default\voucher-add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197575cfc8b2124fd39-46976589%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '64698bb68f660c1153bf4e2a58d5c503bcdc54f1' => 
    array (
      0 => 'ui\\theme\\default\\voucher-add.tpl',
      1 => 1446173633,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197575cfc8b2124fd39-46976589',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    '_L' => 0,
    '_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_5cfc8b212bcbf9_06074727',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfc8b212bcbf9_06074727')) {function content_5cfc8b212bcbf9_06074727($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("sections/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


		<div class="row">
			<div class="col-sm-12 col-md-12">
				<div class="panel panel-default panel-hovered panel-stacked mb30">
					<div class="panel-heading"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Add_Voucher'];?>
</div>
						<div class="panel-body">

                <form class="form-horizontal" method="post" role="form" action="<?php echo $_smarty_tpl->tpl_vars['_url']->value;?>
prepaid/voucher-post" >            
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Type'];?>
</label>
						<div class="col-md-6">
							<input type="radio" id="Hot" name="type" value="Hotspot"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['Hotspot_Plans'];?>
 
							<input type="radio" id="POE" name="type" value="PPPOE"> <?php echo $_smarty_tpl->tpl_vars['_L']->value['PPPOE_Plans'];?>
 
						</div>
                    </div>
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Routers'];?>
</label>
						<div class="col-md-6">
							<select id="server" name="server" class="form-control">
								<option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Routers'];?>
</option>
							</select>
						</div>
					</div>
                    <div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Service_Plan'];?>
</label>
						<div class="col-md-6">
							<select id="plan" name="plan" class="form-control">
								<option value=''><?php echo $_smarty_tpl->tpl_vars['_L']->value['Select_Plans'];?>
</option>
                            </select>
						</div>
                    </div>
					
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Number_of_Vouchers'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="numbervoucher" value="1">
						</div>
                    </div>
					
					<div class="form-group">
						<label class="col-md-2 control-label"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Length_Code'];?>
</label>
						<div class="col-md-6">
							<input type="text" class="form-control" name="lengthcode" value="12">
						</div>
                    </div>
					
					<div class="form-group">
						<div class="col-lg-offset-2 col-lg-10">
							<button class="btn btn-success waves-effect waves-light" type="submit"><?php echo $_smarty_tpl->tpl_vars['_L']->value['Generate'];?>
</button> 
						</div>
					</div>
                </form>
				
					</div>
				</div>
			</div>
		</div>

<?php echo $_smarty_tpl->getSubTemplate ("sections/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php }} ?>