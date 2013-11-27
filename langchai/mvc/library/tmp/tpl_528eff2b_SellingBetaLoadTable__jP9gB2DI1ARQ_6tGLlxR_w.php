<?php 
function tpl_528eff2b_SellingBetaLoadTable__jP9gB2DI1ARQ_6tGLlxR_w(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<span class="icon">
					<?php /* tag "i" from line 7 */; ?>
<i class="glyphicon glyphicon-th-list"></i>
				</span>
				<?php /* tag "h5" from line 9 */; ?>
<h5>PHIẾU TÍNH TIỀN</h5>
				<?php 
/* tag "div" from line 10 */ ;
if ($ctx->path($ctx->Table, 'getSessionActive')):  ;
?>
<div class="buttons">
					<?php 
/* tag "a" from line 11 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getURLCheckoutExe')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Icon Title" class="btn Checkout"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 11 */; ?>
<i class="glyphicon glyphicon-shopping-cart"></i> <?php /* tag "span" from line 11 */; ?>
<span class="text">Tính tiền</span></a>
					<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getURLPrint')))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Icon Title" class="btn" target="blank"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 12 */; ?>
<i class="glyphicons-print"></i> <?php /* tag "span" from line 12 */; ?>
<span class="text">In phiếu</span></a>
				</div><?php endif; ?>

			</div>
			<?php /* tag "div" from line 15 */; ?>
<div class="widget-content">
				<?php 
/* tag "div" from line 16 */ ;
if (!($ctx->path($ctx->Table, 'getSessionActive'))):  ;
?>
<div class="invoice-content">
					<?php /* tag "div" from line 17 */; ?>
<div class="invoice-head">
						<?php /* tag "div" from line 18 */; ?>
<div class="invoice-meta">
							<?php /* tag "center" from line 19 */; ?>
<center><?php 
/* tag "h3" from line 19 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<h3 id="CurrentTable"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Table, 'getName')); ?>
</h3></center>
						</div>
					</div>
				</div><?php endif; ?>

				<?php 
/* tag "div" from line 23 */ ;
if ($ctx->path($ctx->Table, 'getSessionActive')):  ;
?>
<div class="invoice-content">
					<?php /* tag "div" from line 24 */; ?>
<div class="invoice-head">
						<?php /* tag "div" from line 25 */; ?>
<div class="invoice-meta">
							<?php /* tag "center" from line 26 */; ?>
<center><?php 
/* tag "h3" from line 26 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<h3 id="CurrentTable"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Table, 'getName')); ?>
</h3></center>
							<?php 
/* tag "div" from line 27 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="IdSession"<?php echo $_tmp_1 ?>
></div>
						</div>
						<?php /* tag "div" from line 29 */; ?>
<div class="invoice-to">
							<?php /* tag "ul" from line 30 */; ?>
<ul>
								<?php /* tag "li" from line 31 */; ?>
<li>
									<?php /* tag "span" from line 32 */; ?>
<span><?php /* tag "strong" from line 32 */; ?>
<strong>Nhân viên</strong></span>
									<?php /* tag "span" from line 33 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getUser/getName')); ?>
</span>
								</li>
							</ul>
						</div>
						<?php /* tag "div" from line 37 */; ?>
<div class="invoice-from">
							<?php /* tag "ul" from line 38 */; ?>
<ul>
								<?php /* tag "li" from line 39 */; ?>
<li>
									<?php /* tag "span" from line 40 */; ?>
<span><?php /* tag "strong" from line 40 */; ?>
<strong>Thời gian</strong></span>
									<?php /* tag "span" from line 41 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getDateTimePrint')); ?>
</span>
								</li>
							</ul>
						</div>
					</div>
					<?php /* tag "div" from line 46 */; ?>
<div>
						<?php /* tag "table" from line 47 */; ?>
<table class="table table-striped table-hover">
							<?php /* tag "thead" from line 48 */; ?>
<thead>
								<?php /* tag "tr" from line 49 */; ?>
<tr>										
									<?php /* tag "th" from line 50 */; ?>
<th width="30">STT</th>
									<?php /* tag "th" from line 51 */; ?>
<th><?php /* tag "div" from line 51 */; ?>
<div class="text-left">TÊN</div></th>
									<?php /* tag "th" from line 52 */; ?>
<th width="30">SL</th>
									<?php /* tag "th" from line 53 */; ?>
<th width="80"><?php /* tag "div" from line 53 */; ?>
<div class="text-right">Đ.GIÁ</div></th>
									<?php /* tag "th" from line 54 */; ?>
<th width="80"><?php /* tag "div" from line 54 */; ?>
<div class="text-right">T.TIỀN</div></th>
									<?php /* tag "th" from line 55 */; ?>
<th width="30"><?php /* tag "i" from line 55 */; ?>
<i class="glyphicons-bin"></i></th>
								</tr>
							</thead>
							<?php /* tag "tbody" from line 58 */; ?>
<tbody>
								<?php 
/* tag "tr" from line 59 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Table, 'getSessionActive/getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
									<?php /* tag "td" from line 60 */; ?>
<td><?php /* tag "div" from line 60 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
									<?php /* tag "td" from line 61 */; ?>
<td><?php 
/* tag "a" from line 61 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCourse/getName')); ?>
</a></td>
									<?php /* tag "td" from line 62 */; ?>
<td><?php /* tag "div" from line 62 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
									<?php /* tag "td" from line 63 */; ?>
<td><?php /* tag "div" from line 63 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
									<?php /* tag "td" from line 64 */; ?>
<td><?php /* tag "div" from line 64 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
									<?php /* tag "td" from line 65 */; ?>
<td class="center">
										<?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
											<?php /* tag "i" from line 67 */; ?>
<i class="glyphicons-remove_2"></i>
										</a>
									</td>
								</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</tbody>
						</table>
						<?php /* tag "table" from line 73 */; ?>
<table width="100%">
							<?php /* tag "tr" from line 74 */; ?>
<tr>
								<?php /* tag "td" from line 75 */; ?>
<td style="text-align:right;">Giảm giá:</td>
								<?php /* tag "td" from line 76 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getDiscountPercentPrint')); ?>
</td>
							</tr>
							<?php /* tag "tr" from line 78 */; ?>
<tr>
								<?php /* tag "td" from line 79 */; ?>
<td style="text-align:right;">Tổng cộng:</td>
								<?php /* tag "td" from line 80 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getValuePrint')); ?>
</td>
							</tr>
						</table>
					</div>
															
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 86 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 87 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 88 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 89 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 90 */; ?>
<h3><?php /* tag "i" from line 90 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT MÓN</h3>
								</div>
								<?php /* tag "div" from line 92 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 93 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 94 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 95 */; ?>
<div class="controls">
											<?php /* tag "input" from line 96 */; ?>
<input readonly="readonly" id="IdCourse1" name="IdCourse1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 99 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 100 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 101 */; ?>
<div class="controls">
											<?php /* tag "input" from line 102 */; ?>
<input readonly="readonly" id="Name1" name="Name1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 105 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 106 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 107 */; ?>
<div class="controls">
											<?php /* tag "input" from line 108 */; ?>
<input id="Count1" name="Count1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 111 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 112 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 113 */; ?>
<div class="controls">
											<?php /* tag "input" from line 114 */; ?>
<input id="Price1" name="Price1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 117 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 118 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 118 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 119 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 119 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<?php 
/* tag "div" from line 126 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>
	
				</div><?php endif; ?>

			</div>
		</div>
		
		<?php /* tag "div" from line 131 */; ?>
<div id="Session" class="widget-box">			
			<?php /* tag "div" from line 132 */; ?>
<div class="widget-content">
				<?php /* tag "div" from line 133 */; ?>
<div>
					<?php /* tag "table" from line 134 */; ?>
<table class="table table-striped table-hover">
						<?php /* tag "thead" from line 135 */; ?>
<thead>
							<?php /* tag "tr" from line 136 */; ?>
<tr>										
								<?php /* tag "th" from line 137 */; ?>
<th width="30">STT</th>
								<?php /* tag "th" from line 138 */; ?>
<th><?php /* tag "div" from line 138 */; ?>
<div class="text-left">Ngày</div></th>
								<?php /* tag "th" from line 139 */; ?>
<th><?php /* tag "div" from line 139 */; ?>
<div class="text-right">Giá trị</div></th>
								<?php /* tag "th" from line 140 */; ?>
<th width="30"><?php /* tag "i" from line 140 */; ?>
<i class="glyphicons-bin"></i></th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 143 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 144 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Session = new PHPTAL_RepeatController($ctx->path($ctx->Table, 'getSessionRecent'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Session as $ctx->Session): ;
?>
<tr>
								<?php /* tag "td" from line 145 */; ?>
<td><?php /* tag "div" from line 145 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Session/number')); ?>
</div></td>
								<?php /* tag "td" from line 146 */; ?>
<td><?php /* tag "div" from line 146 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</div></td>
								<?php /* tag "td" from line 147 */; ?>
<td><?php /* tag "div" from line 147 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</div></td>
								<?php /* tag "td" from line 148 */; ?>
<td class="center">
									<?php 
/* tag "a" from line 149 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Session, 'getId')))):  ;
$_tmp_1 = ' data-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="remove-session-item" href="#DialogSessionDel" data-toggle="modal"<?php echo $_tmp_1 ?>
>
										<?php /* tag "i" from line 150 */; ?>
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
				<?php /* tag "div" from line 158 */; ?>
<div id="DialogSessionDel" class="modal fade">
					<?php /* tag "div" from line 159 */; ?>
<div class="modal-dialog">
						<?php /* tag "div" from line 160 */; ?>
<div class="modal-content">
							<?php /* tag "div" from line 161 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 161 */; ?>
<h3>XÓA</h3></div>
							<?php /* tag "div" from line 162 */; ?>
<div class="modal-body">
								<?php /* tag "p" from line 163 */; ?>
<p>Bạn có chắc muốn xóa GIAO DỊCH này ?</p>
							</div>
							<?php /* tag "div" from line 165 */; ?>
<div class="modal-footer">
								<?php /* tag "button" from line 166 */; ?>
<button id="URLSessionDelButton" class="btn btn-primary btn-small">Xóa</button>
								<?php /* tag "button" from line 167 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small">Không</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
        <?php /* tag "script" from line 175 */; ?>
<script>
		
			//-----------------------------------------------------------------------------------
			//Delete 1 DETAIL			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});
			//Khi người dùng Click vào nút URLDelButton thì tiến  hành gọi Ajax xóa tự động
			$('#URLDelButton').click(function(e){								
				var URL = "/object/del/SessionDetail/" + $(this).attr('alt');
				var IdTable = $("#CurrentTable").attr('alt');
				$("#DialogDel").modal('hide');
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
				var IdTable = $("#CurrentTable").attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
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
				var IdTable = $("#CurrentTable").attr('alt');
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