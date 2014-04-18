<?php 
function tpl_52ae623a_Setting__aOdqdwVLee5snA1diNvANw(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<body data-menu-position="closed">
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
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/MenuApp', $_thistpl) ;
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
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 15 */; ?>
<div class="container-fluid">
				<?php /* tag "div" from line 16 */; ?>
<div class="row">
					<?php /* tag "div" from line 17 */; ?>
<div class="col-12">
						<?php /* tag "div" from line 18 */; ?>
<div class="widget-box">
							<?php /* tag "div" from line 19 */; ?>
<div class="widget-content nopadding">
								<?php /* tag "table" from line 20 */; ?>
<table class="table table-bordered table-striped table-hover">
									<?php /* tag "thead" from line 21 */; ?>
<thead>
										<?php /* tag "tr" from line 22 */; ?>
<tr>
											<?php /* tag "th" from line 23 */; ?>
<th width="40"><?php /* tag "i" from line 23 */; ?>
<i class="glyphicons-cogwheels"></i></th>
											<?php /* tag "th" from line 24 */; ?>
<th><?php /* tag "div" from line 24 */; ?>
<div class="text-left">THIẾT LẬP</div></th>
										</tr>
									</thead>
									<?php /* tag "tbody" from line 27 */; ?>
<tbody>
										<?php /* tag "tr" from line 28 */; ?>
<tr>
											<?php /* tag "td" from line 29 */; ?>
<td align="center"><?php /* tag "a" from line 29 */; ?>
<a href="/setting/customer"><?php /* tag "i" from line 29 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 30 */; ?>
<td><?php 
/* tag "a" from line 30 */ ;
if (null !== ($_tmp_1 = ('/setting/customer'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHÁCH HÀNG</a></td>
										</tr>
										<?php /* tag "tr" from line 32 */; ?>
<tr>
											<?php /* tag "td" from line 33 */; ?>
<td align="center"><?php /* tag "a" from line 33 */; ?>
<a href="/setting/category"><?php /* tag "i" from line 33 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 34 */; ?>
<td><?php 
/* tag "a" from line 34 */ ;
if (null !== ($_tmp_1 = ('/setting/category'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC MÓN</a></td>
										</tr>
										<?php /* tag "tr" from line 36 */; ?>
<tr>
											<?php /* tag "td" from line 37 */; ?>
<td align="center"><?php /* tag "a" from line 37 */; ?>
<a href="/setting/supplier"><?php /* tag "i" from line 37 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 38 */; ?>
<td><?php 
/* tag "a" from line 38 */ ;
if (null !== ($_tmp_1 = ('/setting/supplier'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÀ CUNG CẤP</a></td>
										</tr>
										<?php /* tag "tr" from line 40 */; ?>
<tr>
											<?php /* tag "td" from line 41 */; ?>
<td align="center"><?php /* tag "a" from line 41 */; ?>
<a href="/setting/domain"><?php /* tag "i" from line 41 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 42 */; ?>
<td><?php 
/* tag "a" from line 42 */ ;
if (null !== ($_tmp_1 = ('/setting/domain'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>KHU VỰC</a></td>
										</tr>
										<?php /* tag "tr" from line 44 */; ?>
<tr>
											<?php /* tag "td" from line 45 */; ?>
<td align="center"><?php /* tag "a" from line 45 */; ?>
<a href="/setting/user"><?php /* tag "i" from line 45 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 46 */; ?>
<td><?php 
/* tag "a" from line 46 */ ;
if (null !== ($_tmp_1 = ('/setting/user'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NGƯỜI DÙNG</a></td>
										</tr>									
										<?php /* tag "tr" from line 48 */; ?>
<tr>
											<?php /* tag "td" from line 49 */; ?>
<td align="center"><?php /* tag "a" from line 49 */; ?>
<a href="/setting/unit"><?php /* tag "i" from line 49 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 50 */; ?>
<td><?php 
/* tag "a" from line 50 */ ;
if (null !== ($_tmp_1 = ('/setting/unit'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>ĐƠN VỊ TÍNH</a></td>
										</tr>
										<?php /* tag "tr" from line 52 */; ?>
<tr>
											<?php /* tag "td" from line 53 */; ?>
<td align="center"><?php /* tag "a" from line 53 */; ?>
<a href="/setting/employee"><?php /* tag "i" from line 53 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 54 */; ?>
<td><?php 
/* tag "a" from line 54 */ ;
if (null !== ($_tmp_1 = ('/setting/employee'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>NHÂN VIÊN</a></td>
										</tr>
										<?php /* tag "tr" from line 56 */; ?>
<tr>
											<?php /* tag "td" from line 57 */; ?>
<td align="center"><?php /* tag "a" from line 57 */; ?>
<a href="/setting/termpaid"><?php /* tag "i" from line 57 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 58 */; ?>
<td><?php 
/* tag "a" from line 58 */ ;
if (null !== ($_tmp_1 = ('/setting/termpaid'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC THU</a></td>
										</tr>
										<?php /* tag "tr" from line 60 */; ?>
<tr>
											<?php /* tag "td" from line 61 */; ?>
<td align="center"><?php /* tag "a" from line 61 */; ?>
<a href="/setting/termcollect"><?php /* tag "i" from line 61 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 62 */; ?>
<td><?php 
/* tag "a" from line 62 */ ;
if (null !== ($_tmp_1 = ('/setting/termcollect'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>DANH MỤC CHI</a></td>
										</tr>
										<?php /* tag "tr" from line 64 */; ?>
<tr>
											<?php /* tag "td" from line 65 */; ?>
<td align="center"><?php /* tag "a" from line 65 */; ?>
<a href="/setting/config"><?php /* tag "i" from line 65 */; ?>
<i class="glyphicons-cogwheel"></i></a></td>
											<?php /* tag "td" from line 66 */; ?>
<td><?php 
/* tag "a" from line 66 */ ;
if (null !== ($_tmp_1 = ('/setting/config'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
>CẤU HÌNH</a></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>					
				</div>
			</div>
		</div>
		<?php 
/* tag "div" from line 76 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 77 */ ;
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

Generated by PHPTAL from D:\AppWebServer\SPN_QuanAn\baduc\mvc\templates\Setting.html (edit that file instead) */; ?>