<?php 
function tpl_52ae623b_PayRollWork__zDWGhxWmBqxJMCKio7XIhA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
	<?php /* tag "body" from line 7 */; ?>
<body>
		<?php 
/* tag "div" from line 8 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Header', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 9 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/StyleTools', $_thistpl) ;
$ctx->popSlots() ;
?>

		
		<?php /* tag "div" from line 11 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 12 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 13 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Locationbar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 14 */; ?>
<div class="row">
				<?php /* tag "div" from line 15 */; ?>
<div class="col-12">					
					<?php 
/* tag "a" from line 16 */ ;
if (null !== ($_tmp_1 = ($ctx->URLBase . '/all/yes'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="btn btn-primary"<?php echo $_tmp_1 ?>
>Chấm tất cả </a>
					<?php /* tag "a" from line 17 */; ?>
<a class="btn btn-primary" href="#DialogInfo" data-toggle="modal">Tổng kết lương </a>
					<?php /* tag "div" from line 18 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 19 */; ?>
<div class="widget-content nopadding">
							<?php /* tag "table" from line 20 */; ?>
<table class="table table-striped table-hover">
								<?php /* tag "thead" from line 21 */; ?>
<thead>
									<?php /* tag "tr" from line 22 */; ?>
<tr>										
										<?php /* tag "th" from line 23 */; ?>
<th><?php /* tag "div" from line 23 */; ?>
<div class="text-left">NGÀY</div></th>
										<?php /* tag "th" from line 24 */; ?>
<th width="90"><?php /* tag "div" from line 24 */; ?>
<div class="text-center">CÓ LÀM</div></th>
										<?php /* tag "th" from line 25 */; ?>
<th width="90"><?php /* tag "div" from line 25 */; ?>
<div class="text-center">TĂNG CA</div></th>
										<?php /* tag "th" from line 26 */; ?>
<th width="50"><?php /* tag "div" from line 26 */; ?>
<div class="text-left">GIỜ</div></th>
										<?php /* tag "th" from line 27 */; ?>
<th width="90"><?php /* tag "div" from line 27 */; ?>
<div class="text-center">LÀM TRỄ</div></th>
										<?php /* tag "th" from line 28 */; ?>
<th width="50"><?php /* tag "div" from line 28 */; ?>
<div class="text-left">PHÚT</div></th>
									</tr>
								</thead>
								<?php /* tag "tbody" from line 31 */; ?>
<tbody>
									<?php 
/* tag "tr" from line 32 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Day = new PHPTAL_RepeatController($ctx->path($ctx->Track, 'getURLDayAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Day as $ctx->Day): ;
?>
<tr>
										<?php /* tag "td" from line 33 */; ?>
<td><?php /* tag "div" from line 33 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->Day[0]); ?>
</div></td>
										<?php /* tag "td" from line 34 */; ?>
<td>
											<?php /* tag "div" from line 35 */; ?>
<div class="text-center">
												<?php 
/* tag "a" from line 36 */ ;
if ($ctx->Employee->getPayRoll($ctx->Day[5])):  ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/no'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
													<?php 
/* tag "div" from line 37 */ ;
if ($ctx->Employee->getPayRoll($ctx->Day[5])->getState()==1):  ;
?>
<div>
														<?php /* tag "i" from line 38 */; ?>
<i class="glyphicons-check"></i>
													</div><?php endif; ?>
													
												</a><?php endif; ?>

												<?php 
/* tag "a" from line 41 */ ;
if ($ctx->Employee->getPayRoll($ctx->Day[5])):  ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
													<?php 
/* tag "div" from line 42 */ ;
if ($ctx->Employee->getPayRoll($ctx->Day[5])->getState()==0):  ;
?>
<div>
														<?php /* tag "i" from line 43 */; ?>
<i class="glyphicons-unchecked"></i>
													</div><?php endif; ?>

												</a><?php endif; ?>

												<?php 
/* tag "a" from line 46 */ ;
if (!($ctx->Employee->getPayRoll($ctx->Day[5]))):  ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
>
													<?php /* tag "i" from line 47 */; ?>
<i class="glyphicons-unchecked"></i>
												</a><?php endif; ?>

											</div>
										</td>
										<?php /* tag "td" from line 51 */; ?>
<td>
											<?php 
/* tag "div" from line 52 */ ;
if ($ctx->Employee->getPayRoll($ctx->Day[5])):  ;
?>
<div class="text-center">
												<?php /* tag "div" from line 53 */; ?>
<div class="btn-group">
													<?php /* tag "a" from line 54 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
														<?php /* tag "span" from line 55 */; ?>
<span class="caret"></span>Thêm
													</a>
													<?php /* tag "ul" from line 57 */; ?>
<ul class="dropdown-menu">
														<?php /* tag "li" from line 58 */; ?>
<li><?php 
/* tag "a" from line 58 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/100/0'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getExtra()==0?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>0 giờ</a></li>
														<?php /* tag "li" from line 59 */; ?>
<li><?php 
/* tag "a" from line 59 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/100/1'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getExtra()==1?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>1 giờ</a></li>
														<?php /* tag "li" from line 60 */; ?>
<li><?php 
/* tag "a" from line 60 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/100/2'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getExtra()==2?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>2 giờ</a></li>
														<?php /* tag "li" from line 61 */; ?>
<li><?php 
/* tag "a" from line 61 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/100/3'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getExtra()==3?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>3 giờ</a></li>
														<?php /* tag "li" from line 62 */; ?>
<li><?php 
/* tag "a" from line 62 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/100/4'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getExtra()==4?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>4 giờ</a></li>
														<?php /* tag "li" from line 63 */; ?>
<li><?php 
/* tag "a" from line 63 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/100/5'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getExtra()==5?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>5 giờ</a></li>
														<?php /* tag "li" from line 64 */; ?>
<li><?php 
/* tag "a" from line 64 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/100/6'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getExtra()==6?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>6 giờ</a></li>
														<?php /* tag "li" from line 65 */; ?>
<li><?php 
/* tag "a" from line 65 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/100/7'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getExtra()==7?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>7 giờ</a></li>
														<?php /* tag "li" from line 66 */; ?>
<li><?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/100/8'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getExtra()==8?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>8 giờ</a></li>
													</ul>
												</div>	
											</div><?php endif; ?>

										</td>
										<?php /* tag "td" from line 71 */; ?>
<td>
											<?php 
/* tag "div" from line 72 */ ;
if ($ctx->Employee->getPayRoll($ctx->Day[5])):  ;
?>
<div>
												<?php /* tag "div" from line 73 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->Employee->getPayRoll($ctx->Day[5])->getExtra()); ?>
</div>
											</div><?php endif; ?>

										</td>
										<?php /* tag "td" from line 76 */; ?>
<td>
											<?php 
/* tag "div" from line 77 */ ;
if ($ctx->Employee->getPayRoll($ctx->Day[5])):  ;
?>
<div class="text-center">
												<?php 
/* tag "div" from line 78 */ ;
if ($ctx->Employee->getPayRoll($ctx->Day[5])->getState()==1):  ;
?>
<div class="btn-group">
													<?php /* tag "a" from line 79 */; ?>
<a class="dropdown-toggle" data-toggle="dropdown" href="#">
														Trễ <?php /* tag "span" from line 80 */; ?>
<span class="caret"></span>
													</a>
													<?php /* tag "ul" from line 82 */; ?>
<ul class="dropdown-menu">
														<?php /* tag "li" from line 83 */; ?>
<li><?php 
/* tag "a" from line 83 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/0'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==0?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>Không trễ</a></li>
														<?php /* tag "li" from line 84 */; ?>
<li><?php 
/* tag "a" from line 84 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/5'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==5?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>5 phút"</a></li>
														<?php /* tag "li" from line 85 */; ?>
<li><?php 
/* tag "a" from line 85 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/10'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==10?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>10 phút"</a></li>
														<?php /* tag "li" from line 86 */; ?>
<li><?php 
/* tag "a" from line 86 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/15'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==15?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>15 phút"</a></li>
														<?php /* tag "li" from line 87 */; ?>
<li><?php 
/* tag "a" from line 87 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/20'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==20?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>20 phút"</a></li>
														<?php /* tag "li" from line 88 */; ?>
<li><?php 
/* tag "a" from line 88 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/25'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==25?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>25 phút"</a></li>
														<?php /* tag "li" from line 89 */; ?>
<li><?php 
/* tag "a" from line 89 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/30'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==30?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>30 phút"</a></li>
														<?php /* tag "li" from line 90 */; ?>
<li><?php 
/* tag "a" from line 90 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/35'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==35?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>35 phút"</a></li>
														<?php /* tag "li" from line 91 */; ?>
<li><?php 
/* tag "a" from line 91 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/40'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==40?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>40 phút"</a></li>
														<?php /* tag "li" from line 92 */; ?>
<li><?php 
/* tag "a" from line 92 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/45'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==45?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>45 phút"</a></li>
														<?php /* tag "li" from line 93 */; ?>
<li><?php 
/* tag "a" from line 93 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/50'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==50?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>50 phút"</a></li>
														<?php /* tag "li" from line 94 */; ?>
<li><?php 
/* tag "a" from line 94 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/55'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==55?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>55 phút"</a></li>
														<?php /* tag "li" from line 95 */; ?>
<li><?php 
/* tag "a" from line 95 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/60'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==60?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>60 phút"</a></li>
														<?php /* tag "li" from line 96 */; ?>
<li><?php 
/* tag "a" from line 96 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/65'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==65?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>65 phút"</a></li>
														<?php /* tag "li" from line 97 */; ?>
<li><?php 
/* tag "a" from line 97 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/70'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==70?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>70 phút"</a></li>
														<?php /* tag "li" from line 98 */; ?>
<li><?php 
/* tag "a" from line 98 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/75'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==75?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>75 phút"</a></li>
														<?php /* tag "li" from line 99 */; ?>
<li><?php 
/* tag "a" from line 99 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/80'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==80?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>80 phút"</a></li>
														<?php /* tag "li" from line 100 */; ?>
<li><?php 
/* tag "a" from line 100 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/85'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==85?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>85 phút"</a></li>
														<?php /* tag "li" from line 101 */; ?>
<li><?php 
/* tag "a" from line 101 */ ;
if (null !== ($_tmp_2 = ($ctx->URLBase . '/' . $ctx->Day[5] . '/yes/90'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
if (null !== ($_tmp_3 = ($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()==90?'btn btn-primary':'btn'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
<?php echo $_tmp_3 ?>
>90 phút"</a></li>
													</ul>
												</div><?php endif; ?>
												
											</div><?php endif; ?>

										</td>
										<?php /* tag "td" from line 106 */; ?>
<td>
											<?php 
/* tag "div" from line 107 */ ;
if ($ctx->Employee->getPayRoll($ctx->Day[5])):  ;
?>
<div>
												<?php /* tag "div" from line 108 */; ?>
<div class="text-left"><?php echo phptal_escape($ctx->Employee->getPayRoll($ctx->Day[5])->getLate()); ?>
</div>
											</div><?php endif; ?>

										</td>
									</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

								</tbody>								
							</table>													
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- UPDATE DIALOG  -->
		<?php /* tag "div" from line 120 */; ?>
<div id="DialogInfo" class="modal fade">
			<?php /* tag "div" from line 121 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 122 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 123 */; ?>
<div class="modal-header">
						<?php /* tag "h3" from line 124 */; ?>
<h3><?php /* tag "i" from line 124 */; ?>
<i class="glyphicons-tag modal-icon"></i>TỔNG KẾT LƯƠNG</h3>
					</div>
					<?php /* tag "div" from line 126 */; ?>
<div method="post" class="form-horizontal">
						<?php /* tag "table" from line 127 */; ?>
<table width="100%" border="0" cellpadding="2">
							<?php /* tag "tr" from line 128 */; ?>
<tr>
								<?php /* tag "td" from line 129 */; ?>
<td align="right" width="40%">NHÂN VIÊN</td>
								<?php /* tag "td" from line 130 */; ?>
<td align="left" width="60%"> _ <?php /* tag "B" from line 130 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->Employee, 'getName')); ?>
</B></td>
							</tr>
							<?php /* tag "tr" from line 132 */; ?>
<tr>
								<?php /* tag "td" from line 133 */; ?>
<td align="right" width="40%">LƯƠNG CB</td>
								<?php /* tag "td" from line 134 */; ?>
<td align="left" width="60%"> _ <?php /* tag "B" from line 134 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->Employee, 'getSalaryBasePrint')); ?>
</B> Đ</td>
							</tr>
							<?php /* tag "tr" from line 136 */; ?>
<tr>
								<?php /* tag "td" from line 137 */; ?>
<td align="right" width="40%">NGÀY LƯƠNG</td>
								<?php /* tag "td" from line 138 */; ?>
<td align="left" width="60%"> _ <?php /* tag "B" from line 138 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->Employee, 'getSalaryBaseDPrint')); ?>
</B> Đ</td>
							</tr>
							<?php /* tag "tr" from line 140 */; ?>
<tr>
								<?php /* tag "td" from line 141 */; ?>
<td align="right" width="40%">TĂNG CA</td>
								<?php /* tag "td" from line 142 */; ?>
<td align="left" width="60%"> _ <?php /* tag "B" from line 142 */; ?>
<B><?php echo phptal_escape($ctx->path($ctx->Employee, 'getSalaryBaseHPrint')); ?>
</B> Đ/GIỜ</td>
							</tr>
							<?php /* tag "tr" from line 144 */; ?>
<tr>
								<?php /* tag "td" from line 145 */; ?>
<td align="right" width="40%">PHẠT TRỄ</td>
								<?php /* tag "td" from line 146 */; ?>
<td align="left" width="60%"> _ <?php /* tag "B" from line 146 */; ?>
<B><?php echo phptal_escape($ctx->Config5Minutes); ?>
</B> Đ/5 PHÚT</td>
							</tr>
							<?php /* tag "tr" from line 148 */; ?>
<tr>
								<?php /* tag "td" from line 149 */; ?>
<td align="right">------------------------</td>
								<?php /* tag "td" from line 150 */; ?>
<td align="left">-----------------------</td>
							</tr>
							<?php /* tag "tr" from line 152 */; ?>
<tr>
								<?php /* tag "td" from line 153 */; ?>
<td align="right">NGÀY CÔNG</td>
								<?php /* tag "td" from line 154 */; ?>
<td align="left"> + <?php /* tag "B" from line 154 */; ?>
<B><?php echo phptal_escape($ctx->YesValue); ?>
</B> (<?php /* tag "span" from line 154 */; ?>
<span><?php echo phptal_escape($ctx->Yes); ?>
</span> CA)</td>
							</tr>
							<?php /* tag "tr" from line 156 */; ?>
<tr>
								<?php /* tag "td" from line 157 */; ?>
<td align="right">LÀM THÊM</td>
								<?php /* tag "td" from line 158 */; ?>
<td align="left"> + <?php /* tag "B" from line 158 */; ?>
<B><?php echo phptal_escape($ctx->ExtraValue); ?>
</B> Đ (<?php /* tag "span" from line 158 */; ?>
<span><?php echo phptal_escape($ctx->Extra); ?>
</span> GIỜ)</td>
							</tr>
							<?php /* tag "tr" from line 160 */; ?>
<tr>
								<?php /* tag "td" from line 161 */; ?>
<td align="right">NGHỈ </td>
								<?php /* tag "td" from line 162 */; ?>
<td align="left"> - <?php /* tag "B" from line 162 */; ?>
<B><?php echo phptal_escape($ctx->AbsentValue); ?>
</B> Đ (<?php /* tag "span" from line 162 */; ?>
<span><?php echo phptal_escape($ctx->Absent); ?>
</span> CA)</td>
							</tr>		
							<?php /* tag "tr" from line 164 */; ?>
<tr>
								<?php /* tag "td" from line 165 */; ?>
<td align="right">PHẠT TRỄ</td>
								<?php /* tag "td" from line 166 */; ?>
<td align="left"> - <?php /* tag "B" from line 166 */; ?>
<B><?php echo phptal_escape($ctx->LateValue); ?>
</B> Đ (<?php /* tag "span" from line 166 */; ?>
<span><?php echo phptal_escape($ctx->Late); ?>
</span> PHÚT)</td>
							</tr>
							<?php /* tag "tr" from line 168 */; ?>
<tr>
								<?php /* tag "td" from line 169 */; ?>
<td align="right">------------------------</td>
								<?php /* tag "td" from line 170 */; ?>
<td align="left">-----------------------</td>
							</tr>
							<?php /* tag "tr" from line 172 */; ?>
<tr>
								<?php /* tag "td" from line 173 */; ?>
<td align="right"><?php /* tag "b" from line 173 */; ?>
<b>TỔNG LƯƠNG</b></td>
								<?php /* tag "td" from line 174 */; ?>
<td align="left"> + <?php /* tag "B" from line 174 */; ?>
<B><?php echo phptal_escape($ctx->Salary); ?>
</B> ĐỒNG</td>
							</tr>
						</table>
						<?php /* tag "div" from line 177 */; ?>
<div class="modal-footer">
							<?php /* tag "button" from line 178 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 178 */; ?>
<i class="glyphicons-undo"></i> Đóng</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 184 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 185 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\SPN_QuanAn\baduc\mvc\templates\PayRollWork.html (edit that file instead) */; ?>