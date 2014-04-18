<?php 
function tpl_52ba4add_SellingTablePrint__56rVDYyADdC2Qa0XMuTOuw(PHPTAL $tpl, PHPTAL_Context $ctx) {
$_thistpl = $tpl ;
$_translator = $tpl->getTranslator() ;
/* tag "documentElement" from line 1 */ ;
/* tag "table" from line 2 */ ;
?>
<table width="100%" cellpadding="1" cellspacing="0" border="0" bordercolor="#FFF">
		<?php /* tag "tr" from line 3 */; ?>
<tr>			
			<?php /* tag "td" from line 4 */; ?>
<td width="100%" align="center">
				<?php /* tag "font" from line 5 */; ?>
<font size="13pt"><?php /* tag "b" from line 5 */; ?>
<b>PHIẾU TÍNH TIỀN</b></font>
			</td>
		</tr>		
	</table>
<?php /* tag "br" from line 9 */; ?>
<br/>
<?php /* tag "font" from line 10 */; ?>
<font size="10pt">	
	<?php /* tag "table" from line 11 */; ?>
<table style="padding-top:0px;" width="100%" cellpadding="1" cellspacing="0" border="0" bordercolor="#FFF">
		<?php /* tag "tr" from line 12 */; ?>
<tr>
			<?php /* tag "td" from line 13 */; ?>
<td width="50%" align="left">				
				<?php /* tag "span" from line 14 */; ?>
<span><?php echo phptal_escape(mb_strtoupper($ctx->Session->getTable()->getName(),'UTF8')); ?>
</span>				
			</td>
			<?php /* tag "td" from line 16 */; ?>
<td width="50%" align="right">
				NV: <?php /* tag "span" from line 17 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</span>
			</td>
		</tr>
		<?php /* tag "tr" from line 20 */; ?>
<tr>
			<?php /* tag "td" from line 21 */; ?>
<td width="50%" align="left">				
				<?php /* tag "span" from line 22 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getCustomer/getName')); ?>
</span>
			</td>
			<?php /* tag "td" from line 24 */; ?>
<td width="50%" align="right">
				<?php /* tag "span" from line 25 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDateTimePrint')); ?>
</span>
			</td>
		</tr>
	</table>
</font>
<?php /* tag "br" from line 30 */; ?>
<br/>
<?php /* tag "font" from line 31 */; ?>
<font size="9pt">
	<?php /* tag "table" from line 32 */; ?>
<table style="padding-bottom:0px;" width="100%" cellpadding="2" cellspacing="0" border="1">
		<?php /* tag "thead" from line 33 */; ?>
<thead>
			<?php /* tag "tr" from line 34 */; ?>
<tr>
				<?php /* tag "th" from line 35 */; ?>
<th width="42%"><?php /* tag "b" from line 35 */; ?>
<b>TÊN HÀNG</b></th>
				<?php /* tag "th" from line 36 */; ?>
<th width="11%" align="right"><?php /* tag "b" from line 36 */; ?>
<b>SL</b></th>
				<?php /* tag "th" from line 37 */; ?>
<th width="21%" align="right"><?php /* tag "b" from line 37 */; ?>
<b>Đ.GIÁ</b></th>
				<?php /* tag "th" from line 38 */; ?>
<th width="26%" align="right"><?php /* tag "b" from line 38 */; ?>
<b>T.TIỀN</b></th>
			</tr>
		</thead>
		<?php /* tag "tbody" from line 41 */; ?>
<tbody>
			<?php 
/* tag "tr" from line 42 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Session, 'getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
				<?php /* tag "td" from line 43 */; ?>
<td width="42%" align="left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCourse/getName')); ?>
</td>
				<?php /* tag "td" from line 44 */; ?>
<td width="11%" align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</td>
				<?php /* tag "td" from line 45 */; ?>
<td width="21%" align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</td>
				<?php /* tag "td" from line 46 */; ?>
<td width="26%" align="right"><?php /* tag "span" from line 46 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span></td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

		</tbody>
	</table>
	<?php /* tag "table" from line 50 */; ?>
<table style="padding-bottom:2px;" width="100%" cellpadding="2" cellspacing="0" border="0">
		<?php /* tag "tbody" from line 51 */; ?>
<tbody>
			<?php /* tag "tr" from line 52 */; ?>
<tr>
				<?php /* tag "td" from line 53 */; ?>
<td align="right" colspan="5" width="100%">
					<?php /* tag "font" from line 54 */; ?>
<font align="right" size="12pt">GIẢM GIÁ: <?php /* tag "b" from line 54 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->Session, 'getDiscountPercentPrint')); ?>
</b></font>
				</td>
			</tr>
			<?php /* tag "tr" from line 57 */; ?>
<tr>
				<?php /* tag "td" from line 58 */; ?>
<td align="right" colspan="5" width="100%">
					<?php /* tag "font" from line 59 */; ?>
<font align="right" size="12pt">TỔNG TIỀN: <?php /* tag "b" from line 59 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</b></font>
				</td>
			</tr>
			<?php /* tag "tr" from line 62 */; ?>
<tr>
				<?php /* tag "td" from line 63 */; ?>
<td align="right" colspan="5" width="100%">
					<?php /* tag "p" from line 64 */; ?>
<p>( <?php /* tag "span" from line 64 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValueStrPrint')); ?>
</span> )</p>
				</td>
			</tr>
			<?php /* tag "tr" from line 67 */; ?>
<tr><?php /* tag "td" from line 67 */; ?>
<td></td></tr>
			<?php /* tag "tr" from line 68 */; ?>
<tr>
				<?php /* tag "td" from line 69 */; ?>
<td align="center" colspan="5" width="100%">
					<?php /* tag "B" from line 70 */; ?>
<B>CÁM ƠN QUÍ KHÁCH. HẸN GẶP LẠI ! <?php /* tag "span" from line 70 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getStatus')); ?>
</span></B>
				</td>
			</tr>
		</tbody>
	</table>	
</font><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\SPN_QuanAn\baduc\mvc\templates\SellingTablePrint.html (edit that file instead) */; ?>