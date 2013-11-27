<?php 
function tpl_5294eb7e_SellingBetaLoadTable__jP9gB2DI1ARQ_6tGLlxR_w(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
$ctx->setDocType('<!DOCTYPE html>',false) ;
?>

<?php /* tag "html" from line 2 */; ?>
<html lang="en">	
	<?php /* tag "body" from line 3 */; ?>
<body>				
		<?php /* tag "div" from line 4 */; ?>
<div id="Session" class="widget-box">
			<?php /* tag "div" from line 5 */; ?>
<div class="widget-title">
				<?php /* tag "span" from line 6 */; ?>
<span class="icon"><?php /* tag "i" from line 6 */; ?>
<i class="glyphicon glyphicon-th-list"></i></span>
				<?php /* tag "h5" from line 7 */; ?>
<h5>PHIẾU TÍNH TIỀN</h5>
				<?php 
/* tag "div" from line 8 */ ;
if ($ctx->path($ctx->Table, 'getSessionActive')):  ;
?>
<div class="buttons">
					<?php 
/* tag "a" from line 9 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getURLCheckoutExe')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Icon Title" class="btn Checkout"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 9 */; ?>
<i class="glyphicon glyphicon-shopping-cart"></i> <?php /* tag "span" from line 9 */; ?>
<span class="text">Tính tiền</span></a>
					<?php 
/* tag "a" from line 10 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getURLPrint')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Icon Title" class="btn" target="blank"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 10 */; ?>
<i class="glyphicons-print"></i> <?php /* tag "span" from line 10 */; ?>
<span class="text">In phiếu</span></a>
				</div><?php endif; ?>

			</div>
			<?php /* tag "div" from line 13 */; ?>
<div class="widget-content">
				<?php /* tag "div" from line 14 */; ?>
<div class="invoice-content">					
					<?php 
/* tag "h3" from line 15 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Table, 'getName')))):  ;
$_tmp_2 = ' data-name="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<h3 id="CurrentTable"<?php echo $_tmp_1 ?>
<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Table, 'getName')); ?>
</h3>
				</div>				
				<?php 
/* tag "div" from line 17 */ ;
if ($ctx->path($ctx->Table, 'getSessionActive')):  ;
?>
<div>					
					<?php /* tag "div" from line 18 */; ?>
<div>
						<?php /* tag "table" from line 19 */; ?>
<table class="table table-striped table-hover">
							<?php /* tag "thead" from line 20 */; ?>
<thead>
								<?php /* tag "tr" from line 21 */; ?>
<tr>										
									<?php /* tag "th" from line 22 */; ?>
<th width="30">STT</th>
									<?php /* tag "th" from line 23 */; ?>
<th><?php /* tag "div" from line 23 */; ?>
<div class="text-left">TÊN</div></th>
									<?php /* tag "th" from line 24 */; ?>
<th width="30">SL</th>
									<?php /* tag "th" from line 25 */; ?>
<th width="80"><?php /* tag "div" from line 25 */; ?>
<div class="text-right">Đ.GIÁ</div></th>
									<?php /* tag "th" from line 26 */; ?>
<th width="80"><?php /* tag "div" from line 26 */; ?>
<div class="text-right">T.TIỀN</div></th>
									<?php /* tag "th" from line 27 */; ?>
<th width="30"><?php /* tag "i" from line 27 */; ?>
<i class="glyphicons-bin"></i></th>
								</tr>
							</thead>
							<?php /* tag "tbody" from line 30 */; ?>
<tbody>
								<?php 
/* tag "tr" from line 31 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Table, 'getSessionActive/getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
									<?php /* tag "td" from line 32 */; ?>
<td><?php /* tag "div" from line 32 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
									<?php /* tag "td" from line 33 */; ?>
<td><?php 
/* tag "a" from line 33 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCourse/getName')); ?>
</a></td>
									<?php /* tag "td" from line 34 */; ?>
<td><?php /* tag "div" from line 34 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
									<?php /* tag "td" from line 35 */; ?>
<td><?php /* tag "div" from line 35 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
									<?php /* tag "td" from line 36 */; ?>
<td><?php /* tag "div" from line 36 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
									<?php /* tag "td" from line 37 */; ?>
<td class="center">
										<?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
											<?php /* tag "i" from line 39 */; ?>
<i class="glyphicons-remove_2"></i>
										</a>
									</td>
								</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</tbody>
						</table>
						<?php /* tag "table" from line 45 */; ?>
<table width="100%">
							<?php /* tag "tr" from line 46 */; ?>
<tr>
								<?php /* tag "td" from line 47 */; ?>
<td style="text-align:right;">Giảm giá:</td>
								<?php /* tag "td" from line 48 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getDiscountPercentPrint')); ?>
</td>
							</tr>
							<?php /* tag "tr" from line 50 */; ?>
<tr>
								<?php /* tag "td" from line 51 */; ?>
<td style="text-align:right;">Tổng cộng:</td>
								<?php /* tag "td" from line 52 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getValuePrint')); ?>
</td>
							</tr>
						</table>
					</div>
															
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 58 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 59 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 60 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 61 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 62 */; ?>
<h3><?php /* tag "i" from line 62 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT MÓN</h3>
								</div>
								<?php /* tag "div" from line 64 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 65 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 66 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 67 */; ?>
<div class="controls">
											<?php /* tag "input" from line 68 */; ?>
<input readonly="readonly" id="IdCourse1" name="IdCourse1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 71 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 72 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 73 */; ?>
<div class="controls">
											<?php /* tag "input" from line 74 */; ?>
<input readonly="readonly" id="Name1" name="Name1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 77 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 78 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 79 */; ?>
<div class="controls">
											<?php /* tag "input" from line 80 */; ?>
<input id="Count1" name="Count1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 83 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 84 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 85 */; ?>
<div class="controls">
											<?php /* tag "input" from line 86 */; ?>
<input id="Price1" name="Price1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 89 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 90 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 90 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 91 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 91 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<?php 
/* tag "div" from line 98 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>
	
				</div><?php endif; ?>

			</div>
		</div>
		
		<?php /* tag "div" from line 103 */; ?>
<div id="Session" class="widget-box">			
			<?php /* tag "div" from line 104 */; ?>
<div class="widget-content">
				<?php /* tag "div" from line 105 */; ?>
<div>
					<?php /* tag "table" from line 106 */; ?>
<table class="table table-striped table-hover">
						<?php /* tag "thead" from line 107 */; ?>
<thead>
							<?php /* tag "tr" from line 108 */; ?>
<tr>										
								<?php /* tag "th" from line 109 */; ?>
<th width="30">STT</th>
								<?php /* tag "th" from line 110 */; ?>
<th><?php /* tag "div" from line 110 */; ?>
<div class="text-left">Ngày</div></th>
								<?php /* tag "th" from line 111 */; ?>
<th><?php /* tag "div" from line 111 */; ?>
<div class="text-right">Giá trị</div></th>
								<?php /* tag "th" from line 112 */; ?>
<th width="30"><?php /* tag "i" from line 112 */; ?>
<i class="glyphicons-bin"></i></th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 115 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 116 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Session = new PHPTAL_RepeatController($ctx->path($ctx->Table, 'getSessionRecent'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Session as $ctx->Session): ;
?>
<tr>
								<?php /* tag "td" from line 117 */; ?>
<td><?php /* tag "div" from line 117 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Session/number')); ?>
</div></td>
								<?php /* tag "td" from line 118 */; ?>
<td>
									<?php 
/* tag "a" from line 119 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
>
										<?php /* tag "span" from line 120 */; ?>
<span class="text"><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</span>
									</a>
								</td>
								<?php /* tag "td" from line 123 */; ?>
<td><?php /* tag "div" from line 123 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</div></td>
								<?php /* tag "td" from line 124 */; ?>
<td class="center">
									<?php 
/* tag "a" from line 125 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Session, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="remove-session-item" href="#DialogSessionDel" data-toggle="modal"<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 126 */; ?>
<i class="glyphicons-remove_2"></i>
									</a>
								</td>
							</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

						</tbody>
					</table>
				</div>
				<!-- DELETE DIALOG  -->
				<?php /* tag "div" from line 134 */; ?>
<div id="DialogSessionDel" class="modal fade">
					<?php /* tag "div" from line 135 */; ?>
<div class="modal-dialog">
						<?php /* tag "div" from line 136 */; ?>
<div class="modal-content">
							<?php /* tag "div" from line 137 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 137 */; ?>
<h3>XÓA</h3></div>
							<?php /* tag "div" from line 138 */; ?>
<div class="modal-body">
								<?php /* tag "p" from line 139 */; ?>
<p>Bạn có chắc muốn xóa GIAO DỊCH này ?</p>
							</div>
							<?php /* tag "div" from line 141 */; ?>
<div class="modal-footer">
								<?php /* tag "button" from line 142 */; ?>
<button id="URLSessionDelButton" class="btn btn-primary btn-small">Xóa</button>
								<?php /* tag "button" from line 143 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small">Không</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
        
		<?php /* tag "script" from line 151 */; ?>
<script>							
			//-----------------------------------------------------------------------------------
			//Delete 1 DETAIL			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(e){								
				var URL 		= "/object/del/SessionDetail/" + $(this).attr('alt');
				var IdTable 	= $("#CurrentTable").attr('alt');
				var TableName 	= $("#CurrentTable").attr('data-name');
				$("#DialogDel").modal('hide');
				e.stopImmediatePropagation();
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						//Hiển thị notify message
						$.gritter.add({
							title		:'Thông tin',
							class_name	: 'gritter-white',
							text		:'Đã chọn bàn xóa xong món của bàn ' + TableName,
							time		:5000,
							sticky		: false
						});
						$("#Session").load("/sellingbeta/load/table/"+IdTable);
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Delete 1 SESSION			
			//-----------------------------------------------------------------------------------
			$('.remove-session-item').click(function(){
				$('#URLSessionDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLSessionDelButton').click(function(e){								
				var URL = "/object/del/Session/" + $(this).attr('alt');
				var IdTable = $("#CurrentTable").attr('alt');
				$("#DialogSessionDel").modal('hide');
				e.stopImmediatePropagation();
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						$("#Session").load("/sellingbeta/load/table/"+IdTable);
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//click gọi món			
			//-----------------------------------------------------------------------------------
			$('.Course').click(function(e){
				var IdCourse 	= $(this).attr('alt');
				var Delta 		= $(this).attr('data-delta');
				
				var IdTable = $("#CurrentTable").attr('alt');				
				URL = "/sellingbeta/call/table/"+IdTable+"/"+IdCourse+"/"+Delta;
				e.stopImmediatePropagation();
												
				$.ajax({
					type: "POST", 
					async: false,
					url: URL,
					dataType: 'json',
					success: function(data){
						var TableActive = "#" + $("#TableActive").attr('alt');
						$.gritter.add({
							title		:'Thông tin',
							class_name	: 'gritter-white',
							text		:'Gọi món ' + data.Name + " " + data.Count + " (" + data.Unit + ")",
							time		:5000,
							sticky		: false
						});
				
						$("#Session").load("/sellingbeta/load/table/"+IdTable);
						
						//Đánh dấu Table có khách
						$(TableActive).toggleClass('actived');
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Load 1 SESSION DETAIL
			//-----------------------------------------------------------------------------------
			$('.update-item').click(function(){
				//Load dữ liệu JSON về
				var url = "/object/load/SessionDetail/" + $(this).attr('data-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){
					$('#URLUpdButton').attr('alt', data.Id);
					$('#IdCourse1').attr('value', data.IdCourse);
					$('#Name1').attr('value', data.Name);
					$('#Count1').attr('value', data.Count);
					$('#Price1').attr('value', data.Price);
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 SESSION DETAIL
			//-----------------------------------------------------------------------------------
			$('.Checkout').click(function(e){
				var URL = $(this).attr('alt');
				var IdTable 	= $("#CurrentTable").attr('alt');
				var TableName 	= $("#CurrentTable").attr('data-name');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
					
						$.gritter.add({
							title		: 'Thông tin',
							class_name	: 'gritter-white',
							text		: 'Tính tiền bàn ' + TableName,
							time		: 5000,
							sticky		: false
						});
						
						var TableActive = "#" + $("#TableActive").attr('alt');
						$("#Session").load("/sellingbeta/load/table/"+IdTable);
																		
						//Đánh dấu Table có khách
						$(TableActive).toggleClass('actived');
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 SESSION DETAIL
			//-----------------------------------------------------------------------------------
			$('#URLUpdButton').click(function(e){
				//alert("co");
				var IdTable 	= $("#CurrentTable").attr('alt');
				var TableName 	= $("#CurrentTable").attr('data-name');
				var Data = [];
				Data[0] = $('#URLUpdButton').attr('alt');				
				Data[1] = $('#IdSession').attr('alt')				
				Data[2] = $('#IdCourse1').val();
				Data[3] = $('#Count1').val();
				Data[4] = $('#Price1').val();
				
				$("#DialogEdit").modal('hide');
				e.stopImmediatePropagation();
				
				var URL = "/object/upd/SessionDetail";
				$.ajax({
					type: "POST",
					data: {Data:Data},
					url: URL,
					success: function(msg){
						$.gritter.add({
							title		: 'Thông tin',
							class_name	: 'gritter-white',
							text		: 'Đã cập nhật món bàn ' + TableName,
							time		: 5000,
							sticky		: false
						});
						
						$("#Session").load("/sellingbeta/load/table/"+IdTable);						
					}
				});
			});		
        </script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-quanan\langchai\mvc\templates\SellingBetaLoadTable.html (edit that file instead) */; ?>