<?php 
function tpl_5294e57c_SellingDomainTablePr___iQfwpjFB0AiSuDZOlYSow(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
				NV: <?php /* tag "span" from line 22 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getUser/getName')); ?>
</span>
			</td>
		</tr>		
	</table>
</font>
<?php /* tag "br" from line 27 */; ?>
<br/>
<?php /* tag "font" from line 28 */; ?>
<font size="9pt">
	<?php /* tag "table" from line 29 */; ?>
<table style="padding-bottom:0px;" width="100%" cellpadding="2" cellspacing="0" border="1">
		<?php /* tag "thead" from line 30 */; ?>
<thead>
			<?php /* tag "tr" from line 31 */; ?>
<tr>
				<?php /* tag "th" from line 32 */; ?>
<th width="42%"><?php /* tag "b" from line 32 */; ?>
<b>TÊN HÀNG</b></th>
				<?php /* tag "th" from line 33 */; ?>
<th width="11%" align="right"><?php /* tag "b" from line 33 */; ?>
<b>SL</b></th>
				<?php /* tag "th" from line 34 */; ?>
<th width="21%" align="right"><?php /* tag "b" from line 34 */; ?>
<b>Đ.GIÁ</b></th>			
				<?php /* tag "th" from line 35 */; ?>
<th width="26%" align="right"><?php /* tag "b" from line 35 */; ?>
<b>T.TIỀN</b></th>
			</tr>
		</thead>
		<?php /* tag "tbody" from line 38 */; ?>
<tbody>
			<?php 
/* tag "tr" from line 39 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Detail = new PHPTAL_RepeatController($ctx->path($ctx->Session, 'getDetails'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Detail as $ctx->Detail): ;
?>
<tr>
				<?php /* tag "td" from line 40 */; ?>
<td width="42%" align="left"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCourse/getName')); ?>
</td>
				<?php /* tag "td" from line 41 */; ?>
<td width="11%" align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getCount')); ?>
</td>
				<?php /* tag "td" from line 42 */; ?>
<td width="21%" align="right"><?php echo phptal_escape($ctx->path($ctx->Detail, 'getPricePrint')); ?>
</td>
				<?php /* tag "td" from line 43 */; ?>
<td width="26%" align="right"><?php /* tag "span" from line 43 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Detail, 'getValuePrint')); ?>
</span></td>
			</tr><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
		
		</tbody>
	</table>
	<?php /* tag "table" from line 47 */; ?>
<table style="padding-bottom:2px;" width="100%" cellpadding="2" cellspacing="0" border="0">
		<?php /* tag "tbody" from line 48 */; ?>
<tbody>						
			<?php /* tag "tr" from line 49 */; ?>
<tr>
				<?php /* tag "td" from line 50 */; ?>
<td align="right" colspan="5" width="100%">
					<?php /* tag "font" from line 51 */; ?>
<font align="right" size="12pt">TỔNG TIỀN: <?php /* tag "b" from line 51 */; ?>
<b><?php echo phptal_escape($ctx->path($ctx->Session, 'getValuePrint')); ?>
</b></font>
				</td>
			</tr>
			<?php /* tag "tr" from line 54 */; ?>
<tr>
				<?php /* tag "td" from line 55 */; ?>
<td align="right" colspan="5" width="100%">
					<?php /* tag "p" from line 56 */; ?>
<p>( <?php /* tag "span" from line 56 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Session, 'getValueStrPrint')); ?>
</span> )</p>
				</td>
			</tr>
			<?php /* tag "tr" from line 59 */; ?>
<tr><?php /* tag "td" from line 59 */; ?>
<td></td></tr>
			<?php /* tag "tr" from line 60 */; ?>
<tr>
				<?php /* tag "td" from line 61 */; ?>
<td align="center" colspan="5" width="100%">
					<?php /* tag "B" from line 62 */; ?>
<B>CÁM ƠN QUÍ KHÁCH. HẸN GẶP LẠI !</B>
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