<?php 
function tpl_52b79ad7_SettingCategoryCours__kzB6AIMaSueXgKDK6cpxcw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "div" from line 13 */; ?>
<div id="sidebar">			
			<?php /* tag "ul" from line 14 */; ?>
<ul style="display: block;">
				<?php 
/* tag "li" from line 15 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category1 = new PHPTAL_RepeatController($ctx->CategoryAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category1 as $ctx->Category1): ;
if (null !== ($_tmp_2 = ($ctx->Category1->getId()==$ctx->Category->getId()?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
					<?php 
/* tag "a" from line 16 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category1, 'getURLCourse')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
						<?php /* tag "i" from line 17 */; ?>
<i class="glyphicons-fast_food"></i><?php /* tag "span" from line 17 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Category1, 'getName')); ?>
</span>							
					</a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

			</ul>
		</div>
		<?php /* tag "div" from line 22 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 23 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 24 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 25 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Category, 'getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<div id="IdCategory" class="row"<?php echo $_tmp_3 ?>
>
				<?php /* tag "div" from line 26 */; ?>
<div class="col-12">
					<?php /* tag "a" from line 27 */; ?>
<a href="#DialogIns" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 28 */; ?>
<i class="glyphicons-plus"></i> Thêm mới
					</a>
					<?php /* tag "a" from line 30 */; ?>
<a href="#DialogDelSelected" data-toggle="modal" class="btn btn-primary btn-ins">
						<?php /* tag "i" from line 31 */; ?>
<i class="glyphicons-remove_2"></i> Xóa chọn
					</a>
					<?php /* tag "div" from line 33 */; ?>
<div class="widget-box">						
						<?php /* tag "div" from line 34 */; ?>
<div class="widget-content nopadding">														
							<?php /* tag "table" from line 35 */; ?>
<table class="table table-bordered table-striped table-hover">
								<?php /* tag "thead" from line 36 */; ?>
<thead>
									<?php /* tag "tr" from line 37 */; ?>
<tr role="row">
										<?php /* tag "th" from line 38 */; ?>
<th width="40"><?php /* tag "input" from line 38 */; ?>
<input type="checkbox" id="title-table-checkbox" name="title-table-checkbox"/></th>
										<?php /* tag "th" from line 39 */; ?>
<th width="40"></th>
										<?php /* tag "th" from line 40 */; ?>
<th><?php /* tag "div" from line 40 */; ?>
<div class="text-left">TÊN</div></th>
										<?php /* tag "th" from line 41 */; ?>
<th width="120"><?php /* tag "div" from line 41 */; ?>
<div class="text-left">ĐƠN VỊ</div></th>
										<?php /* tag "th" from line 42 */; ?>
<th width="120"><?php /* tag "div" from line 42 */; ?>
<div class="text-right">GIÁ BÁN</div></th>
										<?php /* tag "th" from line 43 */; ?>
<th width="64">TỈ LỆ</th>										
										<?php /* tag "th" from line 44 */; ?>
<th width="32"><?php /* tag "i" from line 44 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 47 */; ?>
<tbody role="alert" aria-live="polite" aria-relevant="all">
									<?php 
/* tag "tr" from line 48 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Course = new PHPTAL_RepeatController($ctx->CourseAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Course as $ctx->Course): ;
?>
<tr class="gradeA odd">
										<?php /* tag "td" from line 49 */; ?>
<td class="center"><?php 
/* tag "input" from line 49 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_1 ?>
/></td>
										<?php /* tag "td" from line 50 */; ?>
<td>
											<?php 
/* tag "i" from line 51 */ ;
if ($ctx->path($ctx->Course, 'getIsDiscount')):  ;
?>
<i class="glyphicons-star"></i><?php endif; ?>

											<?php 
/* tag "i" from line 52 */ ;
if (!($ctx->path($ctx->Course, 'getIsDiscount'))):  ;
?>
<i class="glyphicons-dislikes"></i><?php endif; ?>

										</td>
										<?php /* tag "td" from line 54 */; ?>
<td><?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Course, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 55 */; ?>
<td><?php /* tag "div" from line 55 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Course, 'getUnit')); ?>
</div></td>
										<?php /* tag "td" from line 56 */; ?>
<td align="right"><?php /* tag "div" from line 56 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Course, 'getPrice1Print')); ?>
</div></td>
										<?php /* tag "td" from line 57 */; ?>
<td align="center"><?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getURLRecipe')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 57 */; ?>
<i class="glyphicons-edit"></i></a></td>
										<?php /* tag "td" from line 58 */; ?>
<td class="center"><?php 
/* tag "a" from line 58 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 58 */; ?>
<i class="glyphicons-remove_2"></i></a></td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>
							</table>
						</div>
					</div>
					<?php 
/* tag "div" from line 64 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>
					
					<!-- INSERT DIALOG  -->
					<?php /* tag "div" from line 66 */; ?>
<div id="DialogIns" class="modal fade">
						<?php /* tag "div" from line 67 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 68 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 69 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 70 */; ?>
<h3><?php /* tag "i" from line 70 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>THÊM MÓN</h3>
								</div>
								<?php /* tag "form" from line 72 */; ?>
<form id="FormCourseInsert" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 73 */; ?>
<div class="modal-body">													
										<?php /* tag "div" from line 74 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 75 */; ?>
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 76 */; ?>
<div class="controls">
												<?php /* tag "input" from line 77 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 80 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 81 */; ?>
<label class="control-label">Tên ngắn</label>
											<?php /* tag "div" from line 82 */; ?>
<div class="controls">
												<?php /* tag "input" from line 83 */; ?>
<input id="ShortName1" name="ShortName1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 86 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 87 */; ?>
<label class="control-label">Giá bán</label>
											<?php /* tag "div" from line 88 */; ?>
<div class="controls">
												<?php /* tag "input" from line 89 */; ?>
<input id="Price1" name="Price1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 92 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 93 */; ?>
<label class="control-label">Đơn vị</label>
											<?php /* tag "div" from line 94 */; ?>
<div class="controls">
												<?php /* tag "select" from line 95 */; ?>
<select name="Unit1" id="Unit1" style="width:80%;">
													<?php 
/* tag "option" from line 96 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Unit = new PHPTAL_RepeatController($ctx->UnitAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Unit as $ctx->Unit): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Unit, 'getName')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option<?php echo $_tmp_2 ?>
>
														<?php /* tag "span" from line 97 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</span>
													</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

												</select>
											</div>
										</div>
										<?php /* tag "div" from line 102 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 103 */; ?>
<label class="control-label">Số phút chuẩn bị</label>
											<?php /* tag "div" from line 104 */; ?>
<div class="controls">
												<?php /* tag "input" from line 105 */; ?>
<input id="Prepare1" name="Prepare1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 108 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 109 */; ?>
<label class="control-label">Giảm giá</label>
											<?php /* tag "div" from line 110 */; ?>
<div class="controls">
												<?php /* tag "select" from line 111 */; ?>
<select name="IsDiscount1" id="IsDiscount1" style="width:80%;">
													<?php /* tag "option" from line 112 */; ?>
<option value="0">Không giảm</option>
													<?php /* tag "option" from line 113 */; ?>
<option value="1">Giảm giá</option>
												</select>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 118 */; ?>
<div class="modal-footer">										
										<?php /* tag "button" from line 119 */; ?>
<button class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 119 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 120 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 120 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 129 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 130 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 131 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 132 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 133 */; ?>
<h3><?php /* tag "i" from line 133 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CHỈNH SỬA MÓN</h3>
								</div>
								<?php /* tag "form" from line 135 */; ?>
<form id="FormCourseUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 136 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 137 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 138 */; ?>
<div class="controls">
											<?php /* tag "input" from line 139 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 142 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 143 */; ?>
<label class="control-label">Tên ngắn</label>
										<?php /* tag "div" from line 144 */; ?>
<div class="controls">
											<?php /* tag "input" from line 145 */; ?>
<input id="ShortName2" name="ShortName2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 148 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 149 */; ?>
<label class="control-label">Giá bán</label>
										<?php /* tag "div" from line 150 */; ?>
<div class="controls">
											<?php /* tag "input" from line 151 */; ?>
<input id="Price2" name="Price2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 154 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 155 */; ?>
<label class="control-label">Đơn vị</label>
										<?php /* tag "div" from line 156 */; ?>
<div class="controls">
											<?php /* tag "select" from line 157 */; ?>
<select name="Unit2" id="Unit2" style="width:80%;">
												<?php 
/* tag "option" from line 158 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Unit = new PHPTAL_RepeatController($ctx->UnitAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Unit as $ctx->Unit): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Unit, 'getName')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<option<?php echo $_tmp_1 ?>
>
													<?php /* tag "span" from line 159 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 164 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 165 */; ?>
<label class="control-label">Số phút chuẩn bị</label>
										<?php /* tag "div" from line 166 */; ?>
<div class="controls">
											<?php /* tag "input" from line 167 */; ?>
<input id="Prepare2" name="Prepare2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 170 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 171 */; ?>
<label class="control-label">Giảm giá</label>
										<?php /* tag "div" from line 172 */; ?>
<div class="controls">
											<?php /* tag "select" from line 173 */; ?>
<select name="IsDiscount2" id="IsDiscount2" style="width:80%;">
												<?php /* tag "option" from line 174 */; ?>
<option value="0">Không giảm</option>
												<?php /* tag "option" from line 175 */; ?>
<option value="1">Giảm giá</option>
											</select>
										</div>
									</div>
									<?php /* tag "div" from line 179 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 180 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 180 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 181 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 181 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<?php 
/* tag "div" from line 188 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 189 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 194 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 195 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 196 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#URLDelSelectedButton').click(function(){
				var count = 0;
				var Data = [];
				var URL = "/object/del/Course/0";
				
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
			//Delete 1 COURSE			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(){			
				var URL = "/object/del/Course/" + $(this).attr('alt');
				$.ajax({
					type: "POST",
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
		
			//-----------------------------------------------------------------------------------
			//Insert 1 RESOURCE			
			$("#FormCourseInsert").validate({
				rules:{
					Name1:{
						minlength: 2,
						required:true
					},
					ShortName1:{
						minlength: 2,
						required:true
					},
					Price1:{
						number:true,
						required:true,
						min:0,
						max:10000000
					},
					Prepare1:{
						number:true,
						required:true,
						min:0,
						max:120
					}
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.form-group').addClass('has-error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.form-group').removeClass('has-error');
					$(element).parents('.form-group').addClass('has-success');
				},
				submitHandler: function (form) {					
					var Data = [];
					Data[0] = 'null';								
					Data[1] = $('#IdCategory').attr('alt');				
					Data[2] = $('#Name1').val();
					Data[3] = $('#ShortName1').val();
					Data[4] = $('#Unit1').val();
					Data[5] = $('#Price1').val();
					Data[6] = $('#Price1').val();
					Data[7] = $('#Price1').val();
					Data[8] = $('#Price1').val();
					Data[9] = "";
					Data[10] = $('#Prepare1').val();
					Data[11] = $('#IsDiscount1').val();
					
					var URL = "/object/ins/Course";
					$.ajax({
						type: "POST",
						data: {Data:Data},
						url: URL,
						success: function(msg){
							location.reload();
						}
					});
					return false;
				}
			});				
			//-----------------------------------------------------------------------------------
			//Load 1 COURSE
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/Course/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value', data.Name);
					$('#ShortName2').attr('value', data.ShortName);
					$('#Unit2').select2('val', data.Unit);
					$('#Price2').attr('value', data.Price1);
					$('#Prepare2').attr('value', data.Prepare);
					$('#IsDiscount2').select2('val', data.IsDiscount);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 RESOURCE
			//-----------------------------------------------------------------------------------
			$("#FormCourseUpdate").validate({
				rules:{
					Name2:{
						minlength: 2,
						required:true
					},
					ShortName2:{
						minlength: 2,
						required:true
					},
					Price2:{
						number:true,
						required:true,
						min:0,
						max:10000000
					},
					Prepare2:{
						number:true,
						required:true,
						min:0,
						max:120
					}
				},
				errorClass: "help-inline",
				errorElement: "span",
				highlight:function(element, errorClass, validClass) {
					$(element).parents('.form-group').addClass('has-error');
				},
				unhighlight: function(element, errorClass, validClass) {
					$(element).parents('.form-group').removeClass('has-error');
					$(element).parents('.form-group').addClass('has-success');
				},
				submitHandler: function (form) {					
					var Data = [];								
					Data[0] = $('#URLUpdButton').attr('alt');
					Data[1] = $('#IdCategory').attr('alt');				
					Data[2] = $('#Name2').val();
					Data[3] = $('#ShortName2').val();
					Data[4] = $('#Unit2').val();
					Data[5] = $('#Price2').val();
					Data[6] = $('#Price2').val();
					Data[7] = $('#Price2').val();
					Data[8] = $('#Price2').val();
					Data[9] = "";
					Data[10] = $('#Prepare2').val();
					Data[11] = $('#IsDiscount2').val();
					
					var URL = "/object/upd/Course";
					$.ajax({
						type: "POST",
						data: {Data:Data},
						url: URL,
						success: function(msg){
							location.reload();
						}
					});
					return false;
				}
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

Generated by PHPTAL from D:\AppWebServer\SPN_QuanAn\baduc\mvc\templates\SettingCategoryCourse.html (edit that file instead) */; ?>