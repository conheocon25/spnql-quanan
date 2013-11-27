<?php 
function tpl_5294eb28_SellingBetaLoadTable__jP9gB2DI1ARQ_6tGLlxR_w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
					<?php /* tag "div" from line 15 */; ?>
<div class="invoice-head">
						<?php /* tag "div" from line 16 */; ?>
<div class="invoice-meta">
							<?php /* tag "center" from line 17 */; ?>
<center><?php 
/* tag "h3" from line 17 */ ;
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
</h3></center>
						</div>
					</div>
				</div>
				<?php 
/* tag "div" from line 21 */ ;
if ($ctx->path($ctx->Table, 'getSessionActive')):  ;
?>
<div>					
					<?php /* tag "div" from line 22 */; ?>
<div>
						<?php /* tag "table" from line 23 */; ?>
<table class="table table-striped table-hover">
							<?php /* tag "thead" from line 24 */; ?>
<thead>
								<?php /* tag "tr" from line 25 */; ?>
<tr>										
									<?php /* tag "th" from line 26 */; ?>
<th width="30">STT</th>
									<?php /* tag "th" from line 27 */; ?>
<th><?php /* tag "div" from line 27 */; ?>
<div class="text-left">TÊN</div></th>
									<?php /* tag "th" from line 28 */; ?>
<th width="30">SL</th>
									<?php /* tag "th" from line 29 */; ?>
<th width="80"><?php /* tag "div" from line 29 */; ?>
<div class="text-right">Đ.GIÁ</div></th>
									<?php /* tag "th" from line 30 */; ?>
<th width="80"><?php /* tag "div" from line 30 */; ?>
<div class="text-right">T.TIỀN</div></th>
									<?php /* tag "th" from line 31 */; ?>
<th width="30"><?php /* tag "i" from line 31 */; ?>
<i class="glyphicons-bin"></i></th>
								</tr>
							</thead>
							<?php /* tag "tbody" from line 34 */; ?>
<tbody>
								<?php 
/* tag "tr" from line 35 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Table, 'getSessionActive/getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
									<?php /* tag "td" from line 36 */; ?>
<td><?php /* tag "div" from line 36 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
									<?php /* tag "td" from line 37 */; ?>
<td><?php 
/* tag "a" from line 37 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCourse/getName')); ?>
</a></td>
									<?php /* tag "td" from line 38 */; ?>
<td><?php /* tag "div" from line 38 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
									<?php /* tag "td" from line 39 */; ?>
<td><?php /* tag "div" from line 39 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
									<?php /* tag "td" from line 40 */; ?>
<td><?php /* tag "div" from line 40 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
									<?php /* tag "td" from line 41 */; ?>
<td class="center">
										<?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
											<?php /* tag "i" from line 43 */; ?>
<i class="glyphicons-remove_2"></i>
										</a>
									</td>
								</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</tbody>
						</table>
						<?php /* tag "table" from line 49 */; ?>
<table width="100%">
							<?php /* tag "tr" from line 50 */; ?>
<tr>
								<?php /* tag "td" from line 51 */; ?>
<td style="text-align:right;">Giảm giá:</td>
								<?php /* tag "td" from line 52 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getDiscountPercentPrint')); ?>
</td>
							</tr>
							<?php /* tag "tr" from line 54 */; ?>
<tr>
								<?php /* tag "td" from line 55 */; ?>
<td style="text-align:right;">Tổng cộng:</td>
								<?php /* tag "td" from line 56 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getValuePrint')); ?>
</td>
							</tr>
						</table>
					</div>
															
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 62 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 63 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 64 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 65 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 66 */; ?>
<h3><?php /* tag "i" from line 66 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT MÓN</h3>
								</div>
								<?php /* tag "div" from line 68 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 69 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 70 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 71 */; ?>
<div class="controls">
											<?php /* tag "input" from line 72 */; ?>
<input readonly="readonly" id="IdCourse1" name="IdCourse1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 75 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 76 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 77 */; ?>
<div class="controls">
											<?php /* tag "input" from line 78 */; ?>
<input readonly="readonly" id="Name1" name="Name1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 81 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 82 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 83 */; ?>
<div class="controls">
											<?php /* tag "input" from line 84 */; ?>
<input id="Count1" name="Count1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 87 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 88 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 89 */; ?>
<div class="controls">
											<?php /* tag "input" from line 90 */; ?>
<input id="Price1" name="Price1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 93 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 94 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 94 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 95 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 95 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<?php 
/* tag "div" from line 102 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>
	
				</div><?php endif; ?>

			</div>
		</div>
		
		<?php /* tag "div" from line 107 */; ?>
<div id="Session" class="widget-box">			
			<?php /* tag "div" from line 108 */; ?>
<div class="widget-content">
				<?php /* tag "div" from line 109 */; ?>
<div>
					<?php /* tag "table" from line 110 */; ?>
<table class="table table-striped table-hover">
						<?php /* tag "thead" from line 111 */; ?>
<thead>
							<?php /* tag "tr" from line 112 */; ?>
<tr>										
								<?php /* tag "th" from line 113 */; ?>
<th width="30">STT</th>
								<?php /* tag "th" from line 114 */; ?>
<th><?php /* tag "div" from line 114 */; ?>
<div class="text-left">Ngày</div></th>
								<?php /* tag "th" from line 115 */; ?>
<th><?php /* tag "div" from line 115 */; ?>
<div class="text-right">Giá trị</div></th>
								<?php /* tag "th" from line 116 */; ?>
<th width="30"><?php /* tag "i" from line 116 */; ?>
<i class="glyphicons-bin"></i></th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 119 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 120 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Session = new PHPTAL_RepeatController($ctx->path($ctx->Table, 'getSessionRecent'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Session as $ctx->Session): ;
?>
<tr>
								<?php /* tag "td" from line 121 */; ?>
<td><?php /* tag "div" from line 121 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Session/number')); ?>
</div></td>
								<?php /* tag "td" from line 122 */; ?>
<td>
									<?php 
/* tag "a" from line 123 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_1 ?>
>
										<?php /* tag "span" from line 124 */; ?>
<span class="text"><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</span>
									</a>
								</td>
								<?php /* tag "td" from line 127 */; ?>
<td><?php /* tag "div" from line 127 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</div></td>
								<?php /* tag "td" from line 128 */; ?>
<td class="center">
									<?php 
/* tag "a" from line 129 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Session, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="remove-session-item" href="#DialogSessionDel" data-toggle="modal"<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 130 */; ?>
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
				<?php /* tag "div" from line 138 */; ?>
<div id="DialogSessionDel" class="modal fade">
					<?php /* tag "div" from line 139 */; ?>
<div class="modal-dialog">
						<?php /* tag "div" from line 140 */; ?>
<div class="modal-content">
							<?php /* tag "div" from line 141 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 141 */; ?>
<h3>XÓA</h3></div>
							<?php /* tag "div" from line 142 */; ?>
<div class="modal-body">
								<?php /* tag "p" from line 143 */; ?>
<p>Bạn có chắc muốn xóa GIAO DỊCH này ?</p>
							</div>
							<?php /* tag "div" from line 145 */; ?>
<div class="modal-footer">
								<?php /* tag "button" from line 146 */; ?>
<button id="URLSessionDelButton" class="btn btn-primary btn-small">Xóa</button>
								<?php /* tag "button" from line 147 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small">Không</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
        
		<?php /* tag "script" from line 155 */; ?>
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