<?php 
function tpl_5275c0fc_SettingCategory__cQkrjx4SrlejpqAsMIicWw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php 
/* tag "div" from line 5 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeCSS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</head>
	
	<?php /* tag "body" from line 8 */; ?>
<body>
		<?php 
/* tag "div" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 10 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/StyleTools', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 11 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/MenuSetting', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "div" from line 12 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 14 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 15 */; ?>
<div class="row">
				<?php /* tag "div" from line 16 */; ?>
<div class="col-12">
					<?php /* tag "a" from line 17 */; ?>
<a href="#DialogIns" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 18 */; ?>
<i class="glyphicons-plus"></i> Thêm mới
					</a>
					<?php /* tag "a" from line 20 */; ?>
<a href="#DialogDelSelected" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 21 */; ?>
<i class="glyphicons-remove_2"></i> Xóa chọn
					</a>
					<?php /* tag "div" from line 23 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 24 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 25 */; ?>
<table class="table table-bordered table-striped table-hover with-check">
								<?php /* tag "thead" from line 26 */; ?>
<thead>
									<?php /* tag "tr" from line 27 */; ?>
<tr>
										<?php /* tag "th" from line 28 */; ?>
<th width="40"><?php /* tag "input" from line 28 */; ?>
<input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
										<?php /* tag "th" from line 29 */; ?>
<th class="left">TÊN</th>
										<?php /* tag "th" from line 30 */; ?>
<th class="right" width="100">MÓN</th>
										<?php /* tag "th" from line 31 */; ?>
<th width="40"><?php /* tag "i" from line 31 */; ?>
<i class="glyphicons-edit"></i></th>
										<?php /* tag "th" from line 32 */; ?>
<th width="40"><?php /* tag "i" from line 32 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 35 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 36 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->CategoryAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<tr>
										<?php /* tag "td" from line 37 */; ?>
<td class="center"><?php 
/* tag "input" from line 37 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_2 ?>
/></td>
										<?php /* tag "td" from line 38 */; ?>
<td><?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 39 */; ?>
<td class="right"><?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getURLCourse')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
> <?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category, 'getCourseAll/count')); ?>
</span> món</a></td>
										<?php /* tag "td" from line 40 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 42 */; ?>
<i class="glyphicon glyphicon-pencil"></i>
											</a>
										</td>
										<?php /* tag "td" from line 45 */; ?>
<td class="center">
											<?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
												<?php /* tag "i" from line 47 */; ?>
<i class="glyphicon glyphicon-remove"></i>
											</a>
										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
							</table>
						</div>
					</div>
					<?php 
/* tag "div" from line 55 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 57 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 58 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 59 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 60 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 61 */; ?>
<h3><?php /* tag "i" from line 61 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>Thêm danh mục mới</h3>
								</div>
								<?php /* tag "div" from line 63 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 64 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 65 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 66 */; ?>
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 67 */; ?>
<div class="controls">
												<?php /* tag "input" from line 68 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 72 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 73 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 73 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 74 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 74 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 83 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 84 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 85 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 86 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 87 */; ?>
<h3><?php /* tag "i" from line 87 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>Chỉnh sửa danh mục</h3>
								</div>
								<?php /* tag "div" from line 89 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 90 */; ?>
<div class="modal-body">
										<?php /* tag "label" from line 91 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 92 */; ?>
<div class="controls">
											<?php /* tag "input" from line 93 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 96 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 97 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 97 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 98 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 98 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 105 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 106 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 110 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 111 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 112 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/Category/0";
				
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
			//Delete 1 CATEGORY			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){
				var URL = "/object/del/Category/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 CATEGORY
			$('#URLInsButton').click(function(){
				var Data = [];
				Data[0] = 'null';
				Data[1] = $('#Name1').val();

				var URL = "/object/ins/Category";
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
			//Load 1 CATEGORY
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/Category/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value', data.Name);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 CATEGORY
			//-----------------------------------------------------------------------------------
			$('#URLUpdButton').click(function(){
				var Data = [];
				Data[0] = $('#URLUpdButton').attr('alt');
				Data[1] = $('#Name2').val();
																	
				var URL = "/object/upd/Category";
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

Generated by PHPTAL from I:\quanly-quanan\langchai\mvc\templates\SettingCategory.html (edit that file instead) */; ?>