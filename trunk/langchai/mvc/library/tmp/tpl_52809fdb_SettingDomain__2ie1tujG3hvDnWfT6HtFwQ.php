<?php 
function tpl_52809fdb_SettingDomain__2ie1tujG3hvDnWfT6HtFwQ(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th width="80">SỐ BÀN</th>
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
$_tmp_1->Domain = new PHPTAL_RepeatController($ctx->DomainAll1)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Domain as $ctx->Domain): ;
?>
<tr>
										<?php /* tag "td" from line 37 */; ?>
<td class="center"><?php 
/* tag "input" from line 37 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Domain, 'getId')))):  ;
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
if (null !== ($_tmp_2 = ($ctx->path($ctx->Domain, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal" data-name="Domain"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Domain, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 39 */; ?>
<td class="center"><?php 
/* tag "a" from line 39 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Domain, 'getURLTable')))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
> <?php /* tag "span" from line 39 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Domain, 'getTableAll/count')); ?>
</span> bàn</a></td>
										<?php /* tag "td" from line 40 */; ?>
<td class="center"><?php 
/* tag "a" from line 40 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Domain, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 40 */; ?>
<i class="glyphicon glyphicon-pencil"></i></a></td>
										<?php /* tag "td" from line 41 */; ?>
<td class="center"><?php 
/* tag "a" from line 41 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Domain, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 41 */; ?>
<i class="glyphicon glyphicon-remove"></i></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>																								
							</table>
						</div>
					</div>
					<?php 
/* tag "div" from line 47 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>

					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 49 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 50 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 51 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 52 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 53 */; ?>
<h3><?php /* tag "i" from line 53 */; ?>
<i class="glyphicons-show_big_thumbnails modal-icon"></i>THÊM MỚI KHU VỰC</h3>
								</div>
								<?php /* tag "div" from line 55 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 56 */; ?>
<div class="modal-body">
										<?php /* tag "div" from line 57 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 58 */; ?>
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 59 */; ?>
<div class="controls">
												<?php /* tag "input" from line 60 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 64 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 65 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 65 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 66 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 66 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- UPDATE DIALOG  -->
					<?php /* tag "div" from line 75 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 76 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 77 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 78 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 79 */; ?>
<h3><?php /* tag "i" from line 79 */; ?>
<i class="glyphicons-show_big_thumbnails modal-icon"></i>CẬP NHẬT KHU VỰC</h3>
								</div>
								<?php /* tag "div" from line 81 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 82 */; ?>
<div class="modal-body">
										<?php /* tag "label" from line 83 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 84 */; ?>
<div class="controls">
											<?php /* tag "input" from line 85 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>									
									<?php /* tag "div" from line 88 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 89 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit"><?php /* tag "i" from line 89 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 90 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 90 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END UPDATE DIALOG  -->
					<?php 
/* tag "div" from line 97 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 98 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 102 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 103 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 104 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/Domain/0";
				
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
			//Delete 1 DOMAIN			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/Domain/" + $(this).attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 DOMAIN
			$('#URLInsButton').click(function(){
				var Data = [];
				Data[0] = 'null';
				Data[1] = $('#Name1').val();
																		
				var URL = "/object/ins/Domain";
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
			//Load 1 DOMAIN
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/Domain/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value', data.Name);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 DOMAIN
			//-----------------------------------------------------------------------------------
			$('#URLUpdButton').click(function(){
				var Data = [];
				Data[0] = $('#URLUpdButton').attr('alt');
				Data[1] = $('#Name2').val();
																	
				var URL = "/object/upd/Domain";
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

Generated by PHPTAL from I:\quanly-quanan\langchai\mvc\templates\SettingDomain.html (edit that file instead) */; ?>