<?php 
function tpl_528f0ce5_SellingDomainTablePr___iQfwpjFB0AiSuDZOlYSow(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
		<?php /* tag "tr" from line 8 */; ?>
<tr>			
			<?php /* tag "td" from line 9 */; ?>
<td width="100%" align="center">
				<?php /* tag "font" from line 10 */; ?>
<font size="10pt"><?php /* tag "span" from line 10 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getDatePrint')); ?>
</span></font>
			</td>
		</tr>
	</table>
<?php /* tag "br" from line 14 */; ?>
<br/>
<?php /* tag "font" from line 15 */; ?>
<font size="10pt">	
	<?php /* tag "table" from line 16 */; ?>
<table style="padding-top:0px;" width="100%" cellpadding="1" cellspacing="0" border="0" bordercolor="#FFF">
		<?php /* tag "tr" from line 17 */; ?>
<tr>
			<?php /* tag "td" from line 18 */; ?>
<td width="50%" align="left">				
				<?php /* tag "span" from line 19 */; ?>
<span><?php echo phptal_escape(mb_strtoupper($ctx->Session->getTable()->getName(),'UTF8')); ?>
</span>				
			</td>
			<?php /* tag "td" from line 21 */; ?>
<td width="50%" align="right">
				<?php /* tag "span" from line 22 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getTimeRangePrint')); ?>
</span>
			</td>
		</tr>
		<?php /* tag "tr" from line 25 */; ?>
<tr>
			<?php /* tag "td" from line 26 */; ?>
<td width="50%" align="left">				
				
			</td>
			<?php /* tag "td" from line 29 */; ?>
<td width="50%" align="right">
				NV: <?php /* tag "span" from line 30 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</span>
			</td>
		</tr>		
	</table>
</font>
<?php /* tag "br" from line 35 */; ?>
<br/>
<?php /* tag "font" from line 36 */; ?>
<font size="9pt">
	<?php /* tag "table" from line 37 */; ?>
<table style="padding-bottom:0px;" width="100%" cellpadding="2" cellspacing="0" border="1">
		<?php /* tag "thead" from line 38 */; ?>
<thead>
			<?php /* tag "tr" from line 39 */; ?>
<tr>
				<?php /* tag "th" from line 40 */; ?>
<th width="42%"><?php /* tag "b" from line 40 */; ?>
<b>TÊN HÀNG</b></th>
				<?php /* tag "th" from line 41 */; ?>
<th width="11%" align="right"><?php /* tag "b" from line 41 */; ?>
<b>SL</b></th>
				<?php /* tag "th" from line 42 */; ?>
<th width="21%" align="right"><?php /* tag "b" from line 42 */; ?>
<b>Đ.GIÁ</b></th>			
				<?php /* tag "th" from line 43 */; ?>
<th width="26%" align="right"><?php /* tag "b" from line 43 */; ?>
<b>T.TIỀN</b></th>
			</tr>
		</thead>
		<?php /* tag "tbody" from line 46 */; ?>
<tbody>
			<?php 
/* tag "tr" from line 47 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Session, 'getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
				<?php /* tag "td" from line 48 */; ?>
<td width="42%" align="left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCourse/getName')); ?>
</td>
				<?php /* tag "td" from line 49 */; ?>
<td width="11%" align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</td>
				<?php /* tag "td" from line 50 */; ?>
<td width="21%" align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</td>
				<?php /* tag "td" from line 51 */; ?>
<td width="26%" align="right"><?php /* tag "span" from line 51 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span></td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
		
		</tbody>
	</table>
	<?php /* tag "table" from line 55 */; ?>
<table style="padding-bottom:2px;" width="100%" cellpadding="2" cellspacing="0" border="0">
		<?php /* tag "tbody" from line 56 */; ?>
<tbody>						
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
<p>( Bằng chữ: <?php /* tag "span" from line 64 */; ?>
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
					CÁM ƠN QUÍ KHÁCH. HẸN GẶP LẠI !
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

Generated by PHPTAL from I:\quanly-quanan\langchai\mvc\templates\SellingDomainTablePrint.html (edit that file instead) */; ?>