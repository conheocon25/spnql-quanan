<?php 
function tpl_5281e391_SettingCategoryCours__wVTU0WME4N8AEohV9A_a4Q(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html lang="en">
	<?php /* tag "head" from line 3 */; ?>
<head>
		<?php 
/* tag "div" from line 4 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeMETA', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "link" from line 5 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/icheck/flat/blue.css"/>
		<?php /* tag "link" from line 6 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/select2.css"/>
		<?php 
/* tag "div" from line 7 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>
	
	<?php /* tag "body" from line 10 */; ?>
<body>
		<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/StyleTools', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<?php /* tag "div" from line 14 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 15 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 16 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 17 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="IdCourse" class="row"<?php echo $_tmp_1 ?>
>
				<?php /* tag "div" from line 18 */; ?>
<div class="col-12">
					<?php /* tag "a" from line 19 */; ?>
<a href="#DialogIns" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 20 */; ?>
<i class="glyphicons-plus"></i> Thêm mới
					</a>
					<?php /* tag "a" from line 22 */; ?>
<a href="#DialogDelSelected" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 23 */; ?>
<i class="glyphicons-remove_2"></i> Xóa chọn
					</a>
					<?php /* tag "div" from line 25 */; ?>
<div class="widget-box">						
						<?php /* tag "div" from line 26 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 27 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 28 */; ?>
<thead>
									<?php /* tag "tr" from line 29 */; ?>
<tr role="row">
										<?php /* tag "th" from line 30 */; ?>
<th width="35">STT</th>
										<?php /* tag "th" from line 31 */; ?>
<th><?php /* tag "div" from line 31 */; ?>
<div class="text-left">NHÀ CUNG CẤP</div></th>
										<?php /* tag "th" from line 32 */; ?>
<th><?php /* tag "div" from line 32 */; ?>
<div class="text-left">TÊN HÀNG</div></th>
										<?php /* tag "th" from line 33 */; ?>
<th width="120"><?php /* tag "div" from line 33 */; ?>
<div class="text-right">TỈ LỆ NHẬP</div></th>
										<?php /* tag "th" from line 34 */; ?>
<th width="80"><?php /* tag "div" from line 34 */; ?>
<div class="text-left">ĐƠN VỊ</div></th>
										<?php /* tag "th" from line 35 */; ?>
<th width="120"><?php /* tag "div" from line 35 */; ?>
<div class="text-right">TỈ LỆ BÁN</div></th>
										<?php /* tag "th" from line 36 */; ?>
<th width="80"><?php /* tag "div" from line 36 */; ?>
<div class="text-left">ĐƠN VỊ</div></th>
										<?php /* tag "th" from line 37 */; ?>
<th width="32"><?php /* tag "i" from line 37 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 40 */; ?>
<tbody role="alert" aria-live="polite" aria-relevant="all">
									<?php 
/* tag "tr" from line 41 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Recipe = new PHPTAL_RepeatController($ctx->path($ctx->Course, 'getRecipeAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Recipe as $ctx->Recipe): ;
?>
<tr class="gradeA odd">
										<?php /* tag "td" from line 42 */; ?>
<td align="center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Recipe/number')); ?>
</td>
										<?php /* tag "td" from line 43 */; ?>
<td>
											<?php 
/* tag "a" from line 44 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Recipe, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_3 ?>
>
												<?php /* tag "span" from line 45 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Recipe, 'getResource/getSupplier/getName')); ?>
</span>
											</a>
										</td>
										<?php /* tag "td" from line 48 */; ?>
<td><?php /* tag "span" from line 48 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Recipe, 'getResource/getName')); ?>
</span></td>
										<?php /* tag "td" from line 49 */; ?>
<td><?php /* tag "div" from line 49 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Recipe, 'getValue1')); ?>
</div></td>
										<?php /* tag "td" from line 50 */; ?>
<td><?php /* tag "div" from line 50 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Recipe, 'getResource/getUnit')); ?>
</div></td>
										<?php /* tag "td" from line 51 */; ?>
<td><?php /* tag "div" from line 51 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Recipe, 'getValue2')); ?>
</div></td>
										<?php /* tag "td" from line 52 */; ?>
<td><?php /* tag "div" from line 52 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Recipe, 'getCourse/getUnit')); ?>
</div></td>
										<?php /* tag "td" from line 53 */; ?>
<td class="center"><?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Recipe, 'getId')))):  ;
$_tmp_3 = ' data-id="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 53 */; ?>
<i class="glyphicons-remove_2"></i></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
							</table>
						</div>
					</div>
					
					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 61 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 62 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 63 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 64 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 65 */; ?>
<h3><?php /* tag "i" from line 65 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>THÊM MÓN</h3>
								</div>
								<?php /* tag "div" from line 67 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 68 */; ?>
<div class="modal-body">													
										<?php /* tag "div" from line 69 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 70 */; ?>
<label class="control-label">Đơn vị</label>
										<?php /* tag "div" from line 71 */; ?>
<div class="controls">
											<?php /* tag "select" from line 72 */; ?>
<select name="IdResource1" id="IdResource1" style="width:80%;">
												<?php 
/* tag "option" from line 73 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Resource = new PHPTAL_RepeatController($ctx->ResourceAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Resource as $ctx->Resource): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Resource, 'getId')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option<?php echo $_tmp_2 ?>
>
													<?php /* tag "span" from line 74 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getSupplier/getName')); ?>
</span> / <?php /* tag "span" from line 74 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getName')); ?>
</span> (<?php /* tag "span" from line 74 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getUnit')); ?>
</span>)
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
										</div>
										<?php /* tag "div" from line 79 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 80 */; ?>
<label class="control-label">Tỉ lệ nhập</label>
											<?php /* tag "div" from line 81 */; ?>
<div class="controls">
												<?php /* tag "input" from line 82 */; ?>
<input id="Value11" name="Value11" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 85 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 86 */; ?>
<label class="control-label">Tỉ lệ bán</label>
											<?php /* tag "div" from line 87 */; ?>
<div class="controls">
												<?php /* tag "input" from line 88 */; ?>
<input id="Value12" name="Value12" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 92 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 93 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 93 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 94 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 94 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 103 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 104 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 105 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 106 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 107 */; ?>
<h3><?php /* tag "i" from line 107 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CHỈNH SỬA MÓN</h3>
								</div>
								<?php /* tag "div" from line 109 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 110 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 111 */; ?>
<label class="control-label">Đơn vị</label>
										<?php /* tag "div" from line 112 */; ?>
<div class="controls">
											<?php /* tag "select" from line 113 */; ?>
<select name="IdResource2" id="IdResource2" style="width:80%;">
												<?php 
/* tag "option" from line 114 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Resource = new PHPTAL_RepeatController($ctx->ResourceAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Resource as $ctx->Resource): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Resource, 'getId')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
>
													<?php /* tag "span" from line 115 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getSupplier/getName')); ?>
</span> / <?php /* tag "span" from line 115 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getName')); ?>
</span> (<?php /* tag "span" from line 115 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Resource, 'getUnit')); ?>
</span>)
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 120 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 121 */; ?>
<label class="control-label">Tỉ lệ nhập</label>
										<?php /* tag "div" from line 122 */; ?>
<div class="controls">
											<?php /* tag "input" from line 123 */; ?>
<input id="Value21" name="Value21" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 126 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 127 */; ?>
<label class="control-label">Tỉ lệ bán</label>
										<?php /* tag "div" from line 128 */; ?>
<div class="controls">
											<?php /* tag "input" from line 129 */; ?>
<input id="Value22" name="Value22" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 132 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 133 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 133 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 134 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 134 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<?php 
/* tag "div" from line 141 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 142 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 147 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 148 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 149 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/R2C/0";
				
				$(".CheckedDel").each(function( i, obj){
					if ( $(this).is(':checked')==true ){
						count += 1;
						Data[count] = $(this).attr('data-id');
					}
				});
				
				$.ajax({
					type: "POST",
					data: {ListId:Data},
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Delete 1 R2C			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/R2C/" + $(this).attr('alt');
				$.ajax({
					type: "POST",
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 R2C
			$('#URLInsButton').click(function(){
				var Data = [];
				Data[0] = 'null';								
				Data[1] = $('#IdCourse').attr('alt');				
				Data[2] = $('#IdResource1').val();				
				Data[3] = $('#Value11').val();
				Data[4] = $('#Value12').val();
				
				var URL = "/object/ins/R2C";
				$.ajax({
					type: "POST",
					data: {Data:Data},
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Load 1 R2C
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/R2C/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);					
					$('#IdResource2').select2('val', data.IdResource);
					$('#Value21').attr('value', data.Value1);
					$('#Value22').attr('value', data.Value2);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 RESOURCE
			//-----------------------------------------------------------------------------------
			$('#URLUpdButton').click(function(){
				var Data = [];								
				Data[0] = $('#URLUpdButton').attr('alt');
				Data[1] = $('#IdCourse').attr('alt');				
				Data[2] = $('#IdResource2').val();				
				Data[3] = $('#Value21').val();
				Data[4] = $('#Value22').val();
				
				var URL = "/object/upd/R2C";
				$.ajax({
					type: "POST",
					data: {Data:Data},
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});			
		/*]]>*/
		</script>		
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-quanan\langchai\mvc\templates\SettingCategoryCourseRecipe.html (edit that file instead) */; ?>