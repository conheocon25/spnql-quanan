<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_ReportHeader(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "table" from line 246 */; ?>
<table width="100%" border="0" cellpadding="2">
			<?php /* tag "tr" from line 247 */; ?>
<tr>			
				<?php /* tag "td" from line 248 */; ?>
<td width="50%" align="left"><?php /* tag "B" from line 248 */; ?>
<B>QUÁN ĂN LÀNG CHÀI</B></td>
				<?php /* tag "td" from line 249 */; ?>
<td width="50%" align="left"><?php /* tag "B" from line 249 */; ?>
<B align="right"><?php echo phptal_escape($ctx->Title); ?>
</B></td>
			</tr>
			<?php /* tag "tr" from line 251 */; ?>
<tr>
				<?php /* tag "td" from line 252 */; ?>
<td width="50%" align="left">TP.Cao Lãnh Đồng Tháp</td>
				<?php /* tag "td" from line 253 */; ?>
<td width="50%" align="right">Lưu hành nội bộ</td>
			</tr>
			<?php /* tag "tr" from line 255 */; ?>
<tr>
				<?php /* tag "td" from line 256 */; ?>
<td width="50%" align="left">0919 111 222</td>
				<?php /* tag "td" from line 257 */; ?>
<td width="50%" align="left"></td>
			</tr>
		</table>
	</div><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_StyleTools(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="style-switcher">
		<?php /* tag "i" from line 233 */; ?>
<i class="glyphicon glyphicon-arrow-left"></i>
		<?php /* tag "span" from line 234 */; ?>
<span>Giao diện:</span>
		<?php /* tag "a" from line 235 */; ?>
<a href="/setting/theme/grey" alt="#grey" style="background-color:#555555;border-color:#aaaaaa;cursor:pointer;"></a>
		<?php /* tag "a" from line 236 */; ?>
<a href="/setting/theme/light-blue" alt="#light-blue" style="background-color:#8399b0;cursor:pointer;"></a>
		<?php /* tag "a" from line 237 */; ?>
<a href="/setting/theme/blue" alt="#blue" style="background-color:#2D2F57;cursor:pointer;"></a>
		<?php /* tag "a" from line 238 */; ?>
<a href="/setting/theme/red" alt="#red" style="background-color:#673232;cursor:pointer;"></a>
		<?php /* tag "a" from line 239 */; ?>
<a href="/setting/theme/red-green" alt="#red-green" style="background-image:url('/mvc/templates/theme/cms/img/demo/red-green.png');background-repeat:no-repeat;cursor:pointer;"></a>
	</div><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_Footer(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div class="row">
		<?php /* tag "div" from line 224 */; ?>
<div id="footer" class="col-12" style="text-align:right; padding-right:20px;">
			2011 - 2013 &copy; <?php /* tag "a" from line 225 */; ?>
<a href="https://www.spn-soft.com">SPN Group</a>
		</div>
	</div><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_MenuSetting(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="sidebar">				
		<?php 
/* tag "ul" from line 166 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isAdmin()):  ;
?>
<ul>		
			<?php 
/* tag "li" from line 167 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Category'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 168 */ ;
if (null !== ($_tmp_3 = ('/setting/category'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "i" from line 169 */; ?>
<i class="glyphicons-fast_food"></i>DANH MỤC MÓN
				</a>
			</li>
			<?php 
/* tag "li" from line 172 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='Supplier'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 173 */ ;
if (null !== ($_tmp_3 = ('/setting/supplier'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "i" from line 174 */; ?>
<i class="glyphicons-truck"></i>NHÀ CUNG CẤP
				</a>
			</li>
			<?php 
/* tag "li" from line 177 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Domain'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 178 */ ;
if (null !== ($_tmp_3 = ('/setting/domain'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "i" from line 179 */; ?>
<i class="glyphicons-show_big_thumbnails"></i>KHU VỰC
				</a>
			</li>				
			<?php 
/* tag "li" from line 182 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='Customer'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 183 */ ;
if (null !== ($_tmp_3 = ('/setting/customer'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "i" from line 184 */; ?>
<i class="glyphicons-group"></i>KHÁCH HÀNG 
				</a>
			</li>
			<?php 
/* tag "li" from line 187 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='User'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 188 */ ;
if (null !== ($_tmp_3 = ('/setting/user'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "i" from line 189 */; ?>
<i class="glyphicons-group"></i>NGƯỜI DÙNG 
				</a>
			</li>
			<?php 
/* tag "li" from line 192 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='Unit'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 193 */ ;
if (null !== ($_tmp_3 = ('/setting/unit'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "i" from line 194 */; ?>
<i class="glyphicons-tags"></i>ĐƠN VỊ TÍNH 
				</a>
			</li>
			<?php 
/* tag "li" from line 197 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Employee'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 198 */ ;
if (null !== ($_tmp_3 = ('/setting/employee'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "i" from line 199 */; ?>
<i class="glyphicons-group"></i>NHÂN VIÊN
				</a>
			</li>
			<?php 
/* tag "li" from line 202 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='TermCollect'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 203 */ ;
if (null !== ($_tmp_3 = ('/setting/termcollect'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "i" from line 204 */; ?>
<i class="glyphicons-disk_save"></i>DANH MỤC THU
				</a>
			</li>
			<?php 
/* tag "li" from line 207 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='TermPaid'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 208 */ ;
if (null !== ($_tmp_3 = ('/setting/termpaid'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "i" from line 209 */; ?>
<i class="glyphicons-disk_open"></i>DANH MỤC CHI
				</a>
			</li>
			<?php 
/* tag "li" from line 212 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='Config'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 213 */ ;
if (null !== ($_tmp_3 = ('/setting/config'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
>
					<?php /* tag "i" from line 214 */; ?>
<i class="glyphicons-cogwheel"></i>CẤU HÌNH
				</a>
			</li>
		</ul><?php endif; ?>
	
	</div><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_MenuApp(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="sidebar">
		<?php 
/* tag "ul" from line 107 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isAdmin()):  ;
?>
<ul>
			<?php 
/* tag "li" from line 108 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='SellingBeta'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 109 */ ;
if (null !== ($_tmp_1 = ('/sellingbeta'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 109 */; ?>
<i class="glyphicons-drink"></i>BÁN HÀNG</a>
			</li>			
			<?php 
/* tag "li" from line 111 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Import'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 112 */ ;
if (null !== ($_tmp_1 = ('/import'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 112 */; ?>
<i class="glyphicons-truck"></i>NHẬP HÀNG</a>
			</li>
			<?php 
/* tag "li" from line 114 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='PayRoll'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 115 */ ;
if (null !== ($_tmp_1 = ('/payroll'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 115 */; ?>
<i class="glyphicons-table"></i>CHẤM CÔNG</a>
			</li>			
			<?php 
/* tag "li" from line 117 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Money'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 118 */ ;
if (null !== ($_tmp_1 = ('/money'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 118 */; ?>
<i class="glyphicons-transfer"></i>THU / CHI</a>
			</li>
			<?php 
/* tag "li" from line 120 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Report'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 121 */ ;
if (null !== ($_tmp_1 = ('/report'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 121 */; ?>
<i class="glyphicons-fax"></i>BÁO CÁO</a>
			</li>
			<?php 
/* tag "li" from line 123 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Setting'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 124 */ ;
if (null !== ($_tmp_1 = ('/setting'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 124 */; ?>
<i class="glyphicons-cogwheels"></i>THIẾT LẬP</a>
			</li>
		</ul><?php endif; ?>

		<?php 
/* tag "ul" from line 127 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isSeller()):  ;
?>
<ul>
			<?php 
/* tag "li" from line 128 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Selling'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 129 */ ;
if (null !== ($_tmp_1 = ('/sellingbeta'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 129 */; ?>
<i class="glyphicons-drink"></i>BÁN HÀNG</a>
			</li>
			<?php /* tag "li" from line 131 */; ?>
<li>
				<?php 
/* tag "a" from line 132 */ ;
if (null !== ($_tmp_2 = ('/change/pass/load'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 132 */; ?>
<i class="glyphicons-keys"></i>ĐỔI MẬT KHẨU</a>
			</li>
		</ul><?php endif; ?>

		<?php 
/* tag "ul" from line 135 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isManager()):  ;
?>
<ul>
			<?php 
/* tag "li" from line 136 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='Selling'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 137 */ ;
if (null !== ($_tmp_3 = ('/sellingbeta'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 137 */; ?>
<i class="glyphicons-drink"></i>BÁN HÀNG</a>
			</li>
			<?php 
/* tag "li" from line 139 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='Import'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 140 */ ;
if (null !== ($_tmp_3 = ('/import'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 140 */; ?>
<i class="glyphicons-truck"></i>NHẬP HÀNG</a>
			</li>
			<?php 
/* tag "li" from line 142 */ ;
if (null !== ($_tmp_1 = ($ctx->ActiveAdmin=='TermPaid'?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
				<?php 
/* tag "a" from line 143 */ ;
if (null !== ($_tmp_3 = ('/paid'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 143 */; ?>
<i class="glyphicons-money"></i>KHOẢN CHI</a>
			</li>
			<?php 
/* tag "li" from line 145 */ ;
if (null !== ($_tmp_2 = ($ctx->ActiveAdmin=='TermCollect'?'active':'disable'))):  ;
$_tmp_2 = ' class="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li<?php echo $_tmp_2 ?>
>
				<?php 
/* tag "a" from line 146 */ ;
if (null !== ($_tmp_3 = ('/collect'))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 146 */; ?>
<i class="glyphicons-money"></i>KHOẢN THU</a>
			</li>
			<?php /* tag "li" from line 148 */; ?>
<li>
				<?php 
/* tag "a" from line 149 */ ;
if (null !== ($_tmp_1 = ('/change/pass/load'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 149 */; ?>
<i class="glyphicons-keys"></i>ĐỔI MẬT KHẨU</a>
			</li>
		</ul><?php endif; ?>

		<?php 
/* tag "ul" from line 152 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()->isViewer()):  ;
?>
<ul>
			<?php 
/* tag "li" from line 153 */ ;
if (null !== ($_tmp_3 = ($ctx->ActiveAdmin=='Report'?'active':'disable'))):  ;
$_tmp_3 = ' class="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<li<?php echo $_tmp_3 ?>
>
				<?php 
/* tag "a" from line 154 */ ;
if (null !== ($_tmp_2 = ('/report'))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a<?php echo $_tmp_2 ?>
><?php /* tag "i" from line 154 */; ?>
<i class="glyphicons-fax"></i>BÁO CÁO</a>
			</li>
			<?php /* tag "li" from line 156 */; ?>
<li>
				<?php 
/* tag "a" from line 157 */ ;
if (null !== ($_tmp_1 = ('/change/pass/load'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a<?php echo $_tmp_1 ?>
><?php /* tag "i" from line 157 */; ?>
<i class="glyphicons-keys"></i>ĐỔI MẬT KHẨU</a>
			</li>
		</ul><?php endif; ?>

	</div><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_PageBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<ul class="pagination alternate pull-right page-bar">
		<?php 
/* tag "li" from line 98 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->P = new PHPTAL_RepeatController($ctx->path($ctx->PN, 'getPages'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->P as $ctx->P): ;
if (null !== ($_tmp_1 = ($ctx->Page==$ctx->P->getId()?'active':'disable'))):  ;
$_tmp_1 = ' class="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li<?php echo $_tmp_1 ?>
>
			<?php 
/* tag "a" from line 99 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->P, 'getURL')))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a<?php echo $_tmp_3 ?>
><?php echo phptal_escape($ctx->path($ctx->P, 'getName')); ?>
</a>
		</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

	</ul><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_ContentHeader(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="content-header"><?php /* tag "h1" from line 92 */; ?>
<h1>HỆ THỐNG QUẢN LÝ QUÁN ĂN LÀNG CHÀI</h1></div><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_LocationBar(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div id="breadcrumb">
		<?php /* tag "a" from line 84 */; ?>
<a class="tip-bottom" title="" href="/app" data-original-title="Về trang chủ"><?php /* tag "i" from line 84 */; ?>
<i class="glyphicons-shop"></i> HỆ THỐNG</a>
		<?php 
/* tag "a" from line 85 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Item = new PHPTAL_RepeatController($ctx->Navigation)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Item as $ctx->Item): ;
if (null !== ($_tmp_2 = ($ctx->Item[1]))):  ;
$_tmp_2 = ' href="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a data-original-title="Về trang này" class="tip-bottom"<?php echo $_tmp_2 ?>
><?php echo phptal_escape($ctx->Item[0]); ?>
</a><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		<?php /* tag "a" from line 86 */; ?>
<a class="current"><?php echo phptal_escape($ctx->Title); ?>
</a>
	</div><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_Header(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<div>
		<?php /* tag "div" from line 64 */; ?>
<div id="header">
			<?php /* tag "h1" from line 65 */; ?>
<h1><?php /* tag "a" from line 65 */; ?>
<a>Restaurant Management App</a></h1>
			<?php /* tag "a" from line 66 */; ?>
<a id="menu-trigger" href="#"><?php /* tag "i" from line 66 */; ?>
<i class="glyphicon glyphicon-align-justify"></i></a>	
		</div>
		<?php /* tag "div" from line 68 */; ?>
<div id="user-nav">			
            <?php /* tag "ul" from line 69 */; ?>
<ul class="btn-group">
				<?php /* tag "li" from line 70 */; ?>
<li class="btn">
					<?php /* tag "a" from line 71 */; ?>
<a><?php /* tag "i" from line 71 */; ?>
<i class="glyphicons-imac" style="margin-top:-5px;margin-right:5px;"></i> <?php /* tag "span" from line 71 */; ?>
<span><?php echo phptal_escape(\MVC\Library\Statistic::getIPPrint()); ?>
</span></a>
				</li>
                <?php /* tag "li" from line 73 */; ?>
<li class="btn"><?php /* tag "a" from line 73 */; ?>
<a class="tip-bottom" data-original-title="Click để đăng xuất" href="/signout/exe">
					<?php /* tag "i" from line 74 */; ?>
<i class="glyphicon glyphicon-user"></i> <?php 
/* tag "span" from line 74 */ ;
if (\MVC\Base\SessionRegistry::instance()->getCurrentUser()):  ;
?>
<span class="text"><?php echo phptal_escape(\MVC\Base\SessionRegistry::instance()->getCurrentUser()->getEmail()); ?>
</span><?php endif; ?>

				</a></li>
            </ul>
        </div>
	</div><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_IncludeJS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>						
		<?php /* tag "script" from line 45 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.min.js"></script>
		<?php /* tag "script" from line 46 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery-ui.custom.js"></script>
		<?php /* tag "script" from line 47 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap.min.js"></script>
		<?php /* tag "script" from line 48 */; ?>
<script src="/mvc/templates/theme/cms/js/unicorn.js"></script>
		<?php /* tag "script" from line 49 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.jpanelmenu.min.js"></script>
		<?php /* tag "script" from line 50 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.icheck.min.js"></script>
		<?php /* tag "script" from line 51 */; ?>
<script src="/mvc/templates/theme/cms/js/select2.min.js"></script>
		<?php /* tag "script" from line 52 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.dataTables.min.js"></script>
		<?php /* tag "script" from line 53 */; ?>
<script src="/mvc/templates/theme/cms/js/unicorn.tables.js"></script>
		<?php /* tag "script" from line 54 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.gritter.min.js"></script>
		<?php /* tag "script" from line 55 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.js"></script>
		<?php /* tag "script" from line 56 */; ?>
<script src="/mvc/templates/theme/cms/js/bootstrap-datepicker.vi.js"></script>
        <?php /* tag "script" from line 57 */; ?>
<script src="/mvc/templates/theme/cms/js/jquery.masonry.min.js"></script>
	</span><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_IncludeCSS(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>	
		<?php /* tag "link" from line 26 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/icheck/flat/blue.css"/>
		<?php /* tag "link" from line 27 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/select2.css"/>
		<?php /* tag "link" from line 28 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/bootstrap.min.css"/>
		<?php /* tag "link" from line 29 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/bootstrap-glyphicons.css"/>
		<?php /* tag "link" from line 30 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/glyphicons-regular.css"/>
		<?php /* tag "link" from line 31 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/jquery-ui.css"/>
		<?php /* tag "link" from line 32 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/unicorn.main.css"/>
		<?php /* tag "link" from line 33 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/datepicker.css"/>
		<?php /* tag "link" from line 34 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/datetimepicker.css"/>
		<?php /* tag "link" from line 35 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/custom.css"/>
		<?php /* tag "link" from line 36 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/grid-menu.css"/>
		<?php /* tag "link" from line 37 */; ?>
<link rel="stylesheet" href="/mvc/templates/theme/cms/css/jquery.gritter.css"/>
		<?php 
/* tag "link" from line 38 */ ;
if (null !== ($_tmp_1 = ('/mvc/templates/theme/cms/css/unicorn.' . \MVC\Base\SessionRegistry::instance()->getCurrentTheme() . '.css'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<link rel="stylesheet" class="skin-color"<?php echo $_tmp_1 ?>
/>										
	</span><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A_IncludeMETA(PHPTAL $_thistpl, PHPTAL $tpl) {
$tpl = clone $tpl ;
$ctx = $tpl->getContext() ;
$_translator = $tpl->getTranslator() ;
?>
<span>
		<?php /* tag "title" from line 7 */; ?>
<title><?php echo 'Hệ thống quản lý quán ăn'; ?>
</title>
		<?php /* tag "base" from line 8 */; ?>
<base href="http://langchai.quanly-quanan.com"/>
		<?php /* tag "meta" from line 9 */; ?>
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<?php /* tag "meta" from line 10 */; ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
		<?php /* tag "meta" from line 11 */; ?>
<meta http-equiv="Pragma" content="no-cache"/>
		<?php /* tag "meta" from line 12 */; ?>
<meta http-equiv="Expires" content="-1"/>
		<?php /* tag "meta" from line 13 */; ?>
<meta http-equiv="Cache-Control" content="no-cache"/>
		<?php /* tag "meta" from line 14 */; ?>
<meta name="keywords" content="Hệ thống quản lý quán ăn"/>
		<?php /* tag "meta" from line 15 */; ?>
<meta name="description" content="Hệ thống quản lý quán ăn"/>
		<?php /* tag "meta" from line 16 */; ?>
<meta name="page-topic" content="Hệ thống quản lý quán ăn"/>
		<?php /* tag "meta" from line 17 */; ?>
<meta name="Abstract" content="Hệ thống quản lý quán ăn"/>
		<?php /* tag "meta" from line 18 */; ?>
<meta name="classification" content="Hệ thống quản lý quán ăn"/>
		<?php /* tag "link" from line 19 */; ?>
<link rel="shortcut icon" type="image/png" href="/data/images/app/icon.png"/>
	</span><?php 
}

 ?>
<?php 
function tpl_5294e1ae_mAdmin__u8a434MezIn4KDR0HJqt_A(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "html" from line 1 */ ;
?>
<html lang="en" xml:lang="en">
<?php /* tag "body" from line 2 */; ?>
<body>
	<!-- ======================================================================== -->
	<!-- META TAG INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 6 */; ?>

	
	<!-- ======================================================================== -->
	<!-- CASCADING STYLE SHEETS INCLUDE											  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 25 */; ?>

	
	<!-- ======================================================================== -->
	<!-- JAVASCRIPT INCLUDE														  -->
	<!-- ======================================================================== -->
	<?php /* tag "span" from line 44 */; ?>

	
	<!-- ======================================================================== -->
	<!-- HEADER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 63 */; ?>


	<!-- ======================================================================== -->
	<!-- LOCATION BAR															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 83 */; ?>

	
	<!-- ======================================================================== -->
	<!-- CONTENT HEADER															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 92 */; ?>

	
	<!-- ======================================================================== -->
	<!-- PAGE BAR																  -->
	<!-- ======================================================================== -->
	<?php /* tag "ul" from line 97 */; ?>

	
	<!-- ======================================================================== -->
	<!-- MENU.APP															  	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 106 */; ?>

	
	<!-- ======================================================================== -->
	<!-- MENU.SETTING															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 165 */; ?>

	
	<!-- ======================================================================== -->
	<!-- FOOTER																	  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 223 */; ?>

	
	<!-- ======================================================================== -->
	<!-- STYLE SWITCHER															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 232 */; ?>

	
	<!-- ======================================================================== -->
	<!-- REPORT HEADER															  -->
	<!-- ======================================================================== -->
	<?php /* tag "div" from line 245 */; ?>

		
</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-quanan\langchai\mvc\templates\mAdmin.xhtml (edit that file instead) */; ?>