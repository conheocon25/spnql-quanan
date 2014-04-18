<?php 
function tpl_52ba4add_SellingTableLoad__UkAJLYA3EJ96IIZdLa7vqg(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
				<?php 
/* tag "div" from line 9 */ ;
if ($ctx->path($ctx->Table, 'getSessionActive')):  ;
?>
<div class="buttons">
					<?php 
/* tag "a" from line 10 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getId')))):  ;
$_tmp_1 = ' data-session-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Chuyển bàn" data-toggle="modal" class="btn SessionMove" href="#DialogMove"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 10 */; ?>
<i class="glyphicons-move"></i></a>
					<?php 
/* tag "a" from line 11 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getId')))):  ;
$_tmp_1 = ' data-session-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Gom bàn" data-toggle="modal" class="btn SessionMerge" href="#DialogMerge"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 11 */; ?>
<i class="glyphicons-resize_small"></i></a>
					<?php 
/* tag "a" from line 12 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getId')))):  ;
$_tmp_1 = ' data-session-id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Chỉnh sửa giao dịch" data-toggle="modal" class="btn SessionUpdate" href="#DialogSession"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 12 */; ?>
<i class="glyphicons-edit"></i></a>
					<?php 
/* tag "a" from line 13 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getURLCheckoutExe')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="Tính phiếu" class="btn Checkout"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 13 */; ?>
<i class="glyphicons-ok_2"></i></a>					
					<?php 
/* tag "a" from line 14 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getURLPrint')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a title="In phiếu" data-toggle="modal" class="btn SessionPreview" href="#DialogPreview"<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 14 */; ?>
<i class="glyphicons-print"></i></a>
				</div><?php endif; ?>

			</div>
			<?php /* tag "div" from line 17 */; ?>
<div class="widget-content nopadding size-12">
				<?php 
/* tag "div" from line 18 */ ;
if (!($ctx->path($ctx->Table, 'getSessionActive'))):  ;
?>
<div class="invoice-content">
					<?php /* tag "div" from line 19 */; ?>
<div class="invoice-head">
						<?php /* tag "div" from line 20 */; ?>
<div class="invoice-meta">
							<?php 
/* tag "h5" from line 21 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<h5 id="CurrentTable"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->path($ctx->Table, 'getName')); ?>
</h5>
						</div>
					</div>
				</div><?php endif; ?>

				<?php 
/* tag "div" from line 25 */ ;
if ($ctx->path($ctx->Table, 'getSessionActive')):  ;
?>
<div class="invoice-content">
					<?php /* tag "div" from line 26 */; ?>
<div>
						<?php /* tag "div" from line 27 */; ?>
<div class="invoice-meta">
							<?php 
/* tag "h5" from line 28 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<h5 id="CurrentTable"<?php echo $_tmp_1 ?>
><?php echo phptal_escape($ctx->Table->getName() . '/' . $ctx->Table->getSessionActive()->getCustomer()->getName()); ?>
</h5>
							<?php 
/* tag "div" from line 29 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getSessionActive/getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div id="IdSession"<?php echo $_tmp_1 ?>
></div>
						</div>
						<?php /* tag "div" from line 31 */; ?>
<div class="invoice-to">
							<?php /* tag "ul" from line 32 */; ?>
<ul><?php /* tag "li" from line 32 */; ?>
<li><?php /* tag "span" from line 32 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getUser/getName')); ?>
</span></li></ul>
						</div>
						<?php /* tag "div" from line 34 */; ?>
<div class="invoice-from">
							<?php /* tag "ul" from line 35 */; ?>
<ul><?php /* tag "li" from line 35 */; ?>
<li><?php /* tag "span" from line 35 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getDateTimePrint')); ?>
</span></li></ul>
						</div>
					</div>
						<?php /* tag "table" from line 38 */; ?>
<table class="table table-striped table-hover">
							<?php /* tag "thead" from line 39 */; ?>
<thead>
								<?php /* tag "tr" from line 40 */; ?>
<tr>										
									<?php /* tag "th" from line 41 */; ?>
<th width="30">STT</th>
									<?php /* tag "th" from line 42 */; ?>
<th><?php /* tag "div" from line 42 */; ?>
<div class="text-left">TÊN</div></th>
									<?php /* tag "th" from line 43 */; ?>
<th width="30">SL</th>
									<?php /* tag "th" from line 44 */; ?>
<th width="80"><?php /* tag "div" from line 44 */; ?>
<div class="text-right">Đ.GIÁ</div></th>
									<?php /* tag "th" from line 45 */; ?>
<th width="80"><?php /* tag "div" from line 45 */; ?>
<div class="text-right">T.TIỀN</div></th>
									<?php /* tag "th" from line 46 */; ?>
<th width="30"><?php /* tag "i" from line 46 */; ?>
<i class="glyphicons-bin"></i></th>
								</tr>
							</thead>
							<?php /* tag "tbody" from line 49 */; ?>
<tbody>
								<?php 
/* tag "tr" from line 50 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Table, 'getSessionActive/getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
									<?php /* tag "td" from line 51 */; ?>
<td><?php /* tag "div" from line 51 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Detail/number')); ?>
</div></td>
									<?php /* tag "td" from line 52 */; ?>
<td><?php 
/* tag "a" from line 52 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="update-item" href="#DialogEdit" data-toggle="modal"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCourse/getName')); ?>
</a></td>
									<?php /* tag "td" from line 53 */; ?>
<td><?php /* tag "div" from line 53 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCountPrint')); ?>
</div></td>
									<?php /* tag "td" from line 54 */; ?>
<td><?php /* tag "div" from line 54 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</div></td>
									<?php /* tag "td" from line 55 */; ?>
<td><?php /* tag "div" from line 55 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</div></td>
									<?php /* tag "td" from line 56 */; ?>
<td class="center">
										<?php 
/* tag "a" from line 57 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Detail, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-item" href="#DialogDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
											<?php /* tag "i" from line 58 */; ?>
<i class="glyphicons-remove_2"></i>
										</a>
									</td>
								</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

							</tbody>
						</table>
						<?php /* tag "table" from line 64 */; ?>
<table width="100%">
							<?php /* tag "tr" from line 65 */; ?>
<tr>
								<?php /* tag "td" from line 66 */; ?>
<td style="text-align:right;">GIẢM GIÁ:</td>
								<?php /* tag "td" from line 67 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getDiscountPercentPrint')); ?>
</td>
							</tr>
							<?php /* tag "tr" from line 69 */; ?>
<tr>
								<?php /* tag "td" from line 70 */; ?>
<td style="text-align:right;">TỔNG CỘNG:</td>
								<?php /* tag "td" from line 71 */; ?>
<td style="color:#5476A6;text-align:right;"><?php echo phptal_escape($ctx->path($ctx->Table, 'getSessionActive/getValuePrint')); ?>
</td>
							</tr>
						</table>
						<?php /* tag "div" from line 74 */; ?>
<div id="abc"></div>
															
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 77 */; ?>
<div id="DialogEdit" class="modal fade">
						<?php /* tag "div" from line 78 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 79 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 80 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 81 */; ?>
<h3><?php /* tag "i" from line 81 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>CẬP NHẬT MÓN</h3>
								</div>								
								<?php /* tag "form" from line 83 */; ?>
<form id="FormSDUpdate" action="#" class="form-horizontal" novalidate="novalidate">
									<?php /* tag "div" from line 84 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 85 */; ?>
<label class="control-label">Id</label>
										<?php /* tag "div" from line 86 */; ?>
<div class="controls">
											<?php /* tag "input" from line 87 */; ?>
<input readonly="readonly" id="IdCourse1" name="IdCourse1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 90 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 91 */; ?>
<label class="control-label">Tên</label>
										<?php /* tag "div" from line 92 */; ?>
<div class="controls">
											<?php /* tag "input" from line 93 */; ?>
<input readonly="readonly" id="Name1" name="Name1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 96 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 97 */; ?>
<label class="control-label">Số lượng</label>
										<?php /* tag "div" from line 98 */; ?>
<div class="controls">
											<?php /* tag "input" from line 99 */; ?>
<input id="Count1" name="Count1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 102 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 103 */; ?>
<label class="control-label">Đơn giá</label>
										<?php /* tag "div" from line 104 */; ?>
<div class="controls">
											<?php /* tag "input" from line 105 */; ?>
<input id="Price1" name="Price1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 108 */; ?>
<div class="form-actions">										
										<?php /* tag "button" from line 109 */; ?>
<button id="URLUpdButton" class="btn btn-primary btn-small" type="submit" value="Validate"><?php /* tag "i" from line 109 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 110 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 110 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					
					<!-- DIALOG EDIT	-->
					<?php /* tag "div" from line 119 */; ?>
<div id="DialogPreview" class="modal fade">
						<?php /* tag "div" from line 120 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 121 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 122 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 123 */; ?>
<h3><?php /* tag "i" from line 123 */; ?>
<i class="glyphicons-star modal-icon"></i>XEM TRƯỚC KHI IN</h3>
								</div>								
								<?php /* tag "form" from line 125 */; ?>
<form class="form">
									<?php /* tag "div" from line 126 */; ?>
<div class="form-group">
										<?php /* tag "div" from line 127 */; ?>
<div id="DocPreview" width="320px" height="480px"></div>
									</div>
									<?php /* tag "div" from line 129 */; ?>
<div class="modal-footer">									
										<?php /* tag "button" from line 130 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 130 */; ?>
<i class="glyphicons-undo"></i> Đóng</button>
									</div>
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
														
					<!-- DIALOG SESSION EDIT	-->
					<?php /* tag "div" from line 139 */; ?>
<div id="DialogSession" class="modal fade">
						<?php /* tag "div" from line 140 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 141 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 142 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 142 */; ?>
<h3><?php /* tag "i" from line 142 */; ?>
<i class="glyphicons-edit modal-icon"></i>CẬP NHẬT GIAO DỊCH</h3></div>								
								<?php /* tag "div" from line 143 */; ?>
<div class="form-horizontal">
									<?php /* tag "div" from line 144 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 145 */; ?>
<label class="control-label">Bắt đầu</label>
										<?php /* tag "div" from line 146 */; ?>
<div class="controls">
											<?php /* tag "input" from line 147 */; ?>
<input id="DateTime1" name="DateTime1" type="text" class="form-control input-small" data-date-format="yyyy-mm-dd hh:ii"/>
										</div>
									</div>
									<?php /* tag "div" from line 150 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 151 */; ?>
<label class="control-label">Kết thúc</label>
										<?php /* tag "div" from line 152 */; ?>
<div class="controls">
											<?php /* tag "input" from line 153 */; ?>
<input id="DateTimeEnd1" name="DateTimeEnd1" type="text" class="form-control input-small" data-date-format="yyyy-mm-dd hh:ii"/>
										</div>
									</div>
									<?php /* tag "div" from line 156 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 157 */; ?>
<label class="control-label">Nhân viên</label>
										<?php /* tag "div" from line 158 */; ?>
<div class="controls">
											<?php /* tag "select" from line 159 */; ?>
<select name="IdEmployee1" id="IdEmployee1" style="width:80%;" class="form-control">
												<?php 
/* tag "option" from line 160 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Employee = new PHPTAL_RepeatController($ctx->EmployeeAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Employee as $ctx->Employee): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Employee, 'getId')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if ($ctx->Session->getIdEmployee()==$ctx->Employee->getId()?true:false):  ;
$_tmp_3 = ' selected="selected"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<option<?php echo $_tmp_1 ?>
<?php echo $_tmp_3 ?>
>
													<?php /* tag "span" from line 161 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Employee, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 166 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 167 */; ?>
<label class="control-label">Tính tiền</label>
										<?php /* tag "div" from line 168 */; ?>
<div class="controls">
											<?php /* tag "select" from line 169 */; ?>
<select name="Status1" id="Status1" style="width:80%;" class="form-control">
												<?php 
/* tag "option" from line 170 */ ;
if ($ctx->Session->getStatus()==0?'true':false):  ;
$_tmp_1 = ' selected="selected"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<option<?php echo $_tmp_1 ?>
>Chưa tính</option>
												<?php 
/* tag "option" from line 171 */ ;
if ($ctx->Session->getStatus()==1?'true':false):  ;
$_tmp_3 = ' selected="selected"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
>Thanh toán đủ</option>
												<?php 
/* tag "option" from line 172 */ ;
if ($ctx->Session->getStatus()==2?'true':false):  ;
$_tmp_2 = ' selected="selected"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option<?php echo $_tmp_2 ?>
>Nợ phiếu</option>
											</select>
										</div>
									</div>
									<?php /* tag "div" from line 176 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 177 */; ?>
<label class="control-label">Gõ/quét mã thẻ</label>
										<?php /* tag "div" from line 178 */; ?>
<div class="controls">
											<?php /* tag "input" from line 179 */; ?>
<input id="SearchIdCustomer" name="SearchIdCustomer" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 182 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 183 */; ?>
<label class="control-label">Tên KH</label>
										<?php /* tag "div" from line 184 */; ?>
<div class="controls">
											<?php /* tag "input" from line 185 */; ?>
<input id="CustomerName" name="CustomerName" readonly="readonly" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 188 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 189 */; ?>
<label class="control-label">Giảm giá</label>
										<?php /* tag "div" from line 190 */; ?>
<div class="controls">
											<?php /* tag "input" from line 191 */; ?>
<input id="DiscountPercent1" name="DiscountPercent1" type="text" class="form-control input-small"/>
										</div>
									</div>
									<?php /* tag "div" from line 194 */; ?>
<div class="form-actions">
										<?php /* tag "button" from line 195 */; ?>
<button id="URLSessionUpdButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 195 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 196 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 196 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>
									<?php /* tag "div" from line 198 */; ?>
<div id="IdUser1"></div>
									<?php /* tag "div" from line 199 */; ?>
<div id="IdCustomer1"></div>
									<?php /* tag "div" from line 200 */; ?>
<div id="Note1"></div>									
									<?php /* tag "div" from line 201 */; ?>
<div id="DiscountValue1"></div>
									<?php /* tag "div" from line 202 */; ?>
<div id="Surtax1"></div>
									<?php /* tag "div" from line 203 */; ?>
<div id="Payment1"></div>									
								</div>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<!-- DIALOG MOVE	-->
					<?php /* tag "div" from line 210 */; ?>
<div id="DialogMove" class="modal fade">
						<?php /* tag "div" from line 211 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 212 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 213 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 214 */; ?>
<h3><?php /* tag "i" from line 214 */; ?>
<i class="glyphicons-move modal-icon"></i>CHUYỂN BÀN</h3>
								</div>
								<?php 
/* tag "form" from line 216 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getURLMoveExe')))):  ;
$_tmp_1 = ' action="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<form class="form-horizontal" method="post"<?php echo $_tmp_1 ?>
>
									<?php /* tag "div" from line 217 */; ?>
<div class="form-group">
										<?php /* tag "label" from line 218 */; ?>
<label class="control-label" for="IdTableMove">Chuyển đến bàn</label>
										<?php /* tag "div" from line 219 */; ?>
<div class="controls">
											<?php /* tag "select" from line 220 */; ?>
<select name="IdTableMove" id="IdTableMove" class="form-control input-sm">
												<?php 
/* tag "option" from line 221 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Table = new PHPTAL_RepeatController($ctx->TableAllNonGuest)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Table as $ctx->Table): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_2 = ' value="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<option<?php echo $_tmp_2 ?>
>
													<?php /* tag "span" from line 222 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getDomain/getName')); ?>
</span> / <?php /* tag "span" from line 222 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 227 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 228 */; ?>
<button id="URLSessionMoveButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 228 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 229 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 229 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>									
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					
					<!-- DIALOG MERGE	-->
					<?php /* tag "div" from line 238 */; ?>
<div id="DialogMerge" class="modal fade">
						<?php /* tag "div" from line 239 */; ?>
<div class="modal-dialog">
							<?php /* tag "div" from line 240 */; ?>
<div class="modal-content">
								<?php /* tag "div" from line 241 */; ?>
<div class="modal-header">
									<?php /* tag "h3" from line 242 */; ?>
<h3><?php /* tag "i" from line 242 */; ?>
<i class="glyphicons-resize_small modal-icon"></i>GOM BÀN</h3>
								</div>
								<?php 
/* tag "form" from line 244 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Table, 'getURLMergeExe')))):  ;
$_tmp_2 = ' action="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<form class="form-horizontal" method="post"<?php echo $_tmp_2 ?>
>
									<?php /* tag "div" from line 245 */; ?>
<div class="control-group">
										<?php /* tag "label" from line 246 */; ?>
<label class="control-label" for="IdTableMerge">Gom với bàn</label>
										<?php /* tag "div" from line 247 */; ?>
<div class="controls">
											<?php /* tag "select" from line 248 */; ?>
<select name="IdTableMerge" id="IdTableMerge" class="form-control input-sm">
												<?php 
/* tag "option" from line 249 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Table = new PHPTAL_RepeatController($ctx->TableAllGuest)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Table as $ctx->Table): ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Table, 'getId')))):  ;
$_tmp_1 = ' value="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<option<?php echo $_tmp_1 ?>
>
													<?php /* tag "span" from line 250 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getDomain/getName')); ?>
</span> / <?php /* tag "span" from line 250 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Table, 'getName')); ?>
</span>
												</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

											</select>
										</div>
									</div>
									<?php /* tag "div" from line 255 */; ?>
<div class="modal-footer">
										<?php /* tag "button" from line 256 */; ?>
<button id="URLSessionMergeButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 256 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
										<?php /* tag "button" from line 257 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 257 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
									</div>									
								</form>
							</div>
						</div>
					</div>
					<!-- END DIALOG EDIT -->
					<?php 
/* tag "div" from line 264 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mDialog.xhtml/DialogDel', $_thistpl) ;
$ctx->popSlots() ;
?>
	
				</div><?php endif; ?>

			</div>
		</div>
		
		<?php /* tag "div" from line 269 */; ?>
<div id="Session" class="widget-box">			
			<?php /* tag "div" from line 270 */; ?>
<div class="widget-content nopadding">
				<?php /* tag "div" from line 271 */; ?>
<div>
					<?php /* tag "table" from line 272 */; ?>
<table class="table table-striped table-hover">
						<?php /* tag "thead" from line 273 */; ?>
<thead>
							<?php /* tag "tr" from line 274 */; ?>
<tr>										
								<?php /* tag "th" from line 275 */; ?>
<th width="30">STT</th>
								<?php /* tag "th" from line 276 */; ?>
<th><?php /* tag "div" from line 276 */; ?>
<div class="text-left">NGÀY</div></th>
								<?php /* tag "th" from line 277 */; ?>
<th><?php /* tag "div" from line 277 */; ?>
<div class="text-right">PHIẾU</div></th>
								<?php /* tag "th" from line 278 */; ?>
<th width="30"><?php /* tag "i" from line 278 */; ?>
<i class="glyphicons-bin"></i></th>
							</tr>
						</thead>
						<?php /* tag "tbody" from line 281 */; ?>
<tbody>
							<?php 
/* tag "tr" from line 282 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Session = new PHPTAL_RepeatController($ctx->path($ctx->Table, 'getSessionRecent'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Session as $ctx->Session): ;
?>
<tr>
								<?php /* tag "td" from line 283 */; ?>
<td><?php /* tag "div" from line 283 */; ?>
<div class="text-center"><?php echo phptal_escape($ctx->path($ctx->repeat, 'Session/number')); ?>
</div></td>
								<?php /* tag "td" from line 284 */; ?>
<td><?php /* tag "div" from line 284 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</div></td>
								<?php /* tag "td" from line 285 */; ?>
<td>
									<?php 
/* tag "a" from line 286 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Session, 'getURLPrint')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a target="blank"<?php echo $_tmp_3 ?>
>
										<?php /* tag "div" from line 287 */; ?>
<div class="text-right"><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</div>
									</a>
								</td>
								<?php /* tag "td" from line 290 */; ?>
<td class="center">
									<?php 
/* tag "a" from line 291 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Session, 'getId')))):  ;
$_tmp_2 = ' data-id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a class="remove-session-item" href="#DialogSessionDel" data-toggle="modal"<?php echo $_tmp_2 ?>
>
										<?php /* tag "i" from line 292 */; ?>
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
				<?php /* tag "div" from line 300 */; ?>
<div id="DialogSessionDel" class="modal fade">
					<?php /* tag "div" from line 301 */; ?>
<div class="modal-dialog">
						<?php /* tag "div" from line 302 */; ?>
<div class="modal-content">
							<?php /* tag "div" from line 303 */; ?>
<div class="modal-header"><?php /* tag "h3" from line 303 */; ?>
<h3>XÓA</h3></div>
							<?php /* tag "div" from line 304 */; ?>
<div class="modal-body">
								<?php /* tag "p" from line 305 */; ?>
<p>Bạn có chắc muốn xóa GIAO DỊCH này ?</p>
							</div>
							<?php /* tag "div" from line 307 */; ?>
<div class="modal-footer">
								<?php /* tag "button" from line 308 */; ?>
<button id="URLSessionDelButton" class="btn btn-primary btn-small">Xóa</button>
								<?php /* tag "button" from line 309 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small">Không</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
        <?php /* tag "script" from line 316 */; ?>
<script type="text/javascript">
		/*<![CDATA[*/
			$('#DateTime1').datetimepicker({
				language:  'vi',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				forceParse: 0,
				showMeridian: 1
			});
			$('#DateTimeEnd1').datetimepicker({
				language:  'vi',
				weekStart: 1,
				todayBtn:  1,
				autoclose: 1,
				todayHighlight: 1,
				startView: 2,
				forceParse: 0,
				showMeridian: 1
			});			
			$("#SearchIdCustomer").change(function(){				
				URL = "/search/customer/"+$(this).val();
				$.getJSON(URL, function(data){
					$("#IdCustomer1").attr('alt', data.Id);					
					$("#DiscountPercent1").val(data.Discount);
					$("#CustomerName").val(data.Name);
				});				
			});
			$(".SessionPreview").click(function(){
				URL = $(this).attr('alt');
				var mPDF = new PDFObject({ 		
					url: URL,				
					height: "500px",
					pdfOpenParams:{
						view: 'Fit', 
						toolbar: '1', 
						statusbar: '1', 
						messages: '1',
						navpanes: '1' 
					}				
				}).embed("DocPreview");												
				$("#DocPreview").show().printElement();	
			});
			//-----------------------------------------------------------------------------------
			//Delete 1 DETAIL			
			//-----------------------------------------------------------------------------------
			$('.remove-item').click(function(){
				$('#URLDelButton').attr('alt', $(this).attr('data-id'));
			});			
			$('#URLDelButton').click(function(e){								
				var URL = "/object/del/SessionDetail/" + $(this).attr('alt');
				var IdTable = $("#CurrentTable").attr('alt');
				$("#DialogDel").modal('hide');
				e.stopImmediatePropagation();
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						$("#Session").load("/selling/load/table/"+IdTable);
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Delete 1 SESSION			
			//-----------------------------------------------------------------------------------
			$('.remove-session-item').click(function(){
				$('#URLSessionDelButton').attr('alt', $(this).attr('data-id'));
			});			
			$('#URLSessionDelButton').click(function(e){								
				var URL = "/object/del/Session/" + $(this).attr('alt');
				var IdTable = $("#CurrentTable").attr('alt');
				$("#DialogSessionDel").modal('hide');
				e.stopImmediatePropagation();
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						$("#Session").load("/selling/load/table/"+IdTable);
					}
				});
			});
			
			//-----------------------------------------------------------------------------------
			//Update 1 SESSION
			//-----------------------------------------------------------------------------------
			$('.SessionUpdate').click(function(e){
				//Load dữ liệu JSON về
				var url = "/object/load/Session/" + $(this).attr('data-session-id');
				
				//Load dữ liệu JSON lên FORM
				$.getJSON(url, function(data){					
					$('#URLSessionUpdButton').attr('alt', data.Id);
					$('#DateTime1').attr('value'		, data.DateTime);
					$('#DateTimeEnd1').attr('value'		, data.DateTimeEnd);
					$('#DiscountPercent1').attr('value'	, data.DiscountPercent);
					$('#CustomerName').attr('value'		, data.CustomerName);					
					
					//$('#IdEmployee1').select2('val'		, 2);
					
					$('#IdUser1').attr('alt'			, data.IdUser);
					$('#IdCustomer1').attr('alt'		, data.IdCustomer);
					$('#Note1').attr('alt'				, data.Note);					
					//$('#Status1').select2('val'			, data.Status);
					//$('#Status1').select2('val'			, 2);
					$('#DiscountValue1').attr('alt'		, data.DiscountValue);
					$('#Surtax1').attr('alt'			, data.Surtax);
					$('#Payment1').attr('alt'			, data.Payment);
				});
			});
			$("#URLSessionUpdButton").click(function(){
				var IdTable = $("#CurrentTable").attr('alt');
				var Data = [];
				Data[0] 	= $('#URLSessionUpdButton').attr('alt');
				Data[1] 	= IdTable;
				Data[2] 	= $('#IdUser1').attr('alt');				
				Data[3] 	= $('#IdCustomer1').attr('alt');				
				Data[4] 	= $('#IdEmployee1').val();
				Data[5] 	= $('#DateTime1').val();
				Data[6] 	= $('#DateTimeEnd1').val();
				Data[7] 	= "";//$('#Note1').attr('alt');
				Data[8] 	= $('#Status1').val();
				Data[9] 	= $('#DiscountValue1').val();
				Data[10] 	= $('#DiscountPercent1').val();
				Data[11] 	= $('#Surtax1').val();
				Data[12] 	= "0";//$('#Payment1').val();
				$("#DialogSession").modal('hide');
									
				var URL = "/object/upd/Session";
				$.ajax({
					type: "POST",
					data: {Data:Data},
					url: URL,
					success: function(msg){						
						$("#Session").load("/selling/load/table/"+IdTable);
					}
				});
			});
			
											
			//-----------------------------------------------------------------------------------
			//click gọi món
			//-----------------------------------------------------------------------------------
			$('.Course').click(function(e){
				var IdCourse 	= $(this).attr('alt');
				var Delta 		= $(this).attr('data-delta');
				var IdTable 	= $("#CurrentTable").attr('alt');
				URL = "/selling/call/table/"+IdTable+"/"+IdCourse+"/"+Delta;				
				e.stopImmediatePropagation();
				$.ajax({
					type: "POST", 
					async: false,
					url: URL,
					dataType: 'json',
					success: function(data){
						var TableActive = "#" + $("#TableActive").attr('alt');
						$("#Session").load("/selling/load/table/"+IdTable);
						
						//Đánh dấu Table có khách
						$(TableActive).addClass('actived');
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
			//CHECKOUT
			//-----------------------------------------------------------------------------------
			$('.Checkout').click(function(e){
				var URL = $(this).attr('alt');
				var IdTable = $("#CurrentTable").attr('alt');
				$.ajax({
					type: "POST",					
					url: URL,
					success: function(msg){
						var TableActive = "#" + $("#TableActive").attr('alt');
						$("#Session").load("/selling/load/table/"+IdTable);
																		
						//Đánh dấu Table có khách
						$(TableActive).toggleClass('actived');
					}
				});
			});
						
			//-----------------------------------------------------------------------------------
			//Update 1 SESSION DETAIL
			//-----------------------------------------------------------------------------------
			$("#FormSDUpdate").validate({
				rules:{
					Count1:{
						min: 0,
						required:true
					},
					Price1:{
						min: 0,
						required:true
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
					var IdTable = $("#CurrentTable").attr('alt');
					var Data = [];
					Data[0] = $('#URLUpdButton').attr('alt');				
					Data[1] = $('#IdSession').attr('alt')				
					Data[2] = $('#IdCourse1').val();
					Data[3] = $('#Count1').val();
					Data[4] = $('#Price1').val();
					
					$("#DialogEdit").modal('hide');
										
					var URL = "/object/upd/SessionDetail";
					$.ajax({
						type: "POST",
						data: {Data:Data},
						url: URL,
						success: function(msg){
							$("#Session").load("/selling/load/table/"+IdTable);
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

Generated by PHPTAL from D:\AppWebServer\SPN_QuanAn\baduc\mvc\templates\SellingTableLoad.html (edit that file instead) */; ?>