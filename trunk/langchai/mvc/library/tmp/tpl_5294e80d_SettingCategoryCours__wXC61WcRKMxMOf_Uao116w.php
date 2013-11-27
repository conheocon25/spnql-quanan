<?php 
function tpl_5294e80d_SettingCategoryCours__wXC61WcRKMxMOf_Uao116w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<th><?php /* tag "div" from line 39 */; ?>
<div class="text-left">TÊN</div></th>
										<?php /* tag "th" from line 40 */; ?>
<th width="120"><?php /* tag "div" from line 40 */; ?>
<div class="text-left">ĐƠN VỊ</div></th>
										<?php /* tag "th" from line 41 */; ?>
<th width="120"><?php /* tag "div" from line 41 */; ?>
<div class="text-right">GIÁ BÁN</div></th>
										<?php /* tag "th" from line 42 */; ?>
<th width="64">TỈ LỆ</th>										
										<?php /* tag "th" from line 43 */; ?>
<th width="32"><?php /* tag "i" from line 43 */; ?>
<i class="glyphicons-bin"></i></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 46 */; ?>
<tbody role="alert" aria-live="polite" aria-relevant="all">
									<?php 
/* tag "tr" from line 47 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Course = new PHPTAL_RepeatController($ctx->CourseAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Course as $ctx->Course): ;
?>
<tr class="gradeA odd">
										<?php /* tag "td" from line 48 */; ?>
<td class="center"><?php 
/* tag "input" from line 48 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<input class="CheckedDel" type="checkbox"<?php echo $_tmp_1 ?>
/></td>
										<?php /* tag "td" from line 49 */; ?>
<td><?php 
/* tag "a" from line 49 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Course, 'getName')); ?>
</a></td>
										<?php /* tag "td" from line 50 */; ?>
<td><?php /* tag "div" from line 50 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Course, 'getUnit')); ?>
</div></td>
										<?php /* tag "td" from line 51 */; ?>
<td align="right"><?php /* tag "div" from line 51 */; ?>
<div><?php echo phptal_escape($ctx->path($ctx->Course, 'getPrice1Print')); ?>
</div></td>
										<?php /* tag "td" from line 52 */; ?>
<td align="center"><?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getURLRecipe')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 52 */; ?>
<i class="glyphicons-edit"></i></a></td>
										<?php /* tag "td" from line 53 */; ?>
<td class="center"><?php 
/* tag "a" from line 53 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Course, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_1 ?>
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
					<?php 
/* tag "div" from line 59 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/PageBar', $_thistpl) ;
$ctx->popSlots() ;
?>
					
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
<label class="control-label">Tên</label>
											<?php /* tag "div" from line 71 */; ?>
<div class="controls">
												<?php /* tag "input" from line 72 */; ?>
<input id="Name1" name="Name1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 75 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 76 */; ?>
<label class="control-label">Tên ngắn</label>
											<?php /* tag "div" from line 77 */; ?>
<div class="controls">
												<?php /* tag "input" from line 78 */; ?>
<input id="ShortName1" name="ShortName1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 81 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 82 */; ?>
<label class="control-label">Giá bán</label>
											<?php /* tag "div" from line 83 */; ?>
<div class="controls">
												<?php /* tag "input" from line 84 */; ?>
<input id="Price1" name="Price1" type="text" class="form-control input-small"/>
											</div>
										</div>
										<?php /* tag "div" from line 87 */; ?>
<div class="form-group">
											<?php /* tag "label" from line 88 */; ?>
<label class="control-label">Đơn vị</label>
											<?php /* tag "div" from line 89 */; ?>
<div class="controls">
												<?php /* tag "select" from line 90 */; ?>
<select name="Unit1" id="Unit1" style="width:80%;">
													<?php 
/* tag "option" from line 91 */ ;
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
														<?php /* tag "span" from line 92 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</span>
													</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

												</select>
											</div>
										</div>
									</div>
									<?php /* tag "div" from line 98 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 99 */; ?>
<button id="URLInsButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 99 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 100 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 100 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END INSERT DIALOG  -->
					
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 109 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 110 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 111 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 112 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 113 */; ?>
<h3><?php /* tag "i" from line 113 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CHỈNH SỬA MÓN</h3>
								</div>
								<?php /* tag "div" from line 115 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 116 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 117 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 118 */; ?>
<div class="controls">
											<?php /* tag "input" from line 119 */; ?>
<input id="Name2" name="Name2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 122 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 123 */; ?>
<label class="control-label">Tên ngắn</label>
										<?php /* tag "div" from line 124 */; ?>
<div class="controls">
											<?php /* tag "input" from line 125 */; ?>
<input id="ShortName2" name="ShortName2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 128 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 129 */; ?>
<label class="control-label">Giá bán</label>
										<?php /* tag "div" from line 130 */; ?>
<div class="controls">
											<?php /* tag "input" from line 131 */; ?>
<input id="Price2" name="Price2" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 134 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 135 */; ?>
<label class="control-label">Đơn vị</label>
										<?php /* tag "div" from line 136 */; ?>
<div class="controls">
											<?php /* tag "select" from line 137 */; ?>
<select name="Unit2" id="Unit2" style="width:80%;">
												<?php 
/* tag "option" from line 138 */ ;
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
													<?php /* tag "span" from line 139 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>									
									<?php /* tag "div" from line 144 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 145 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 145 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 146 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 146 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<?php 
/* tag "div" from line 153 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>

					<?php 
/* tag "div" from line 154 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDelSelected', $_thistpl) ;
$ctx->popSlots() ;
?>

					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 159 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 160 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php /* tag "script" from line 161 */; ?>
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
			$('#URLInsButton').click(function(){
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
				
				var URL = "/object/ins/Course";
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
			//Load 1 COURSE
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/Course/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#Name2').attr('value', data.Name);
					$('#ShortName2').attr('value', data.Name);
					$('#Unit2').select2('val', data.Unit);
					$('#Price2').attr('value', data.Price1);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 RESOURCE
			//-----------------------------------------------------------------------------------
			$('#URLUpdButton').click(function(){
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
				var URL = "/object/upd/Course";
				$.ajax({
					type: "POST",
					data: {Data:Data},
					url: URL,
					success: function(msg){
						//location.reload();
					}
				});
			});			
		/*]]>*/
		</script>		
	</body>
</html>
<!--
<!DOCTYPE html>
<html style="overflow-y:hidden;" lang="en">
	<head>
		<div metal:use-macro="mAdmin.xhtml/IncludeMETA"/>
		<div metal:use-macro="mAdmin.xhtml/IncludeCSS"/>
	</head>
	
	<body data-menu-position="closed">
		<div metal:use-macro="mAdmin.xhtml/Header"/>
		<div class="menu">
			<div id="sidebar">
				
			</div>
		</div>
		<div id="content">
			<div metal:use-macro="mAdmin.xhtml/ContentHeader"/>
			<div metal:use-macro="mAdmin.xhtml/LocationBar"/>
			<div class="container-fluid">							
				<div class="row">
					<div class="col-xs-12">
						<div class="widget-box">
							<div class="widget-title">
								<span class="icon"><i class="icon-table"/></span>
								<h5 tal:content="Title"/> 
							</div>
							<div class="widget-content nopadding">
								<div role="grid" class="dataTables_wrapper">
									<table class="table table-bordered table-striped table-hover data-table">
										<thead>
											<tr role="row">
												<th width="35">STT</th>
												<th><div class="text-left">TÊN</div></th>
												<th width="120"><div class="text-left">ĐƠN VỊ</div></th>
												<th width="120"><div class="text-right">GIÁ BÁN</div></th>
												<th width="64">TỈ LỆ</th>
												<th width="32"><i class="icon-refresh my-ico"/></th>
												<th width="32"><i class="icon-trash my-ico"/></th>
											</tr>
										</thead>
										<tbody role="alert" aria-live="polite" aria-relevant="all">
											<tr tal:repeat="Course CourseAll" class="gradeA odd">
												<td align="center" tal:content="repeat/Course/number"/>
												<td><a tal:attributes="href Course/getURLUpdLoad" tal:content="Course/getName"/></td>
												<td><div tal:content="Course/getUnit"/></td>
												<td align="right"><div tal:content="Course/getPrice1Print"/></td>
												<td align="center"><a tal:attributes="href Course/getURLRecipe"><i class="icon-pencil"/></a></td>
												<td align="center"><a tal:attributes="href Course/getURLUpdLoad"><i class="icon-pencil"/></a></td>
												<td align="center"><a tal:attributes="href Course/getURLDelLoad"><i class="icon-remove"/></a></td>
											</tr>
										</tbody>
									</table>
									<div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
										<div class="dataTables_filter">
											<label style="margin-top:5px;">
												<a tal:attributes="href Category/getURLCourseInsLoad"><span class="icon-plus"/> Thêm mới</a>
											</label>
										</div>
										<div metal:use-macro="mAdmin.xhtml/Pagebar"/>
									</div>
								</div>  
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div metal:use-macro="mAdmin.xhtml/Footer"/>
		<div metal:use-macro="mAdmin.xhtml/IncludeJS"/>
	</body>
</html>
!--><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-quanan\langchai\mvc\templates\SettingCategoryCourse.html (edit that file instead) */; ?>