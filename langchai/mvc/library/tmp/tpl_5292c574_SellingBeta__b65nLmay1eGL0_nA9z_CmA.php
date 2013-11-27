<?php 
function tpl_5292c574_SellingBeta__b65nLmay1eGL0_nA9z_CmA(PHPTAL $tpl, PHPTAL_Context $ctx) {
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

		<?php /* tag "div" from line 10 */; ?>
<div id="sidebar">
			<?php /* tag "ul" from line 11 */; ?>
<ul>
				<?php 
/* tag "li" from line 12 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Domain = new PHPTAL_RepeatController($ctx->DomainAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Domain as $ctx->Domain): ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Domain, 'getId')))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li class="Domain"<?php echo $_tmp_2 ?>
>
					<?php /* tag "a" from line 13 */; ?>
<a>
						<?php /* tag "i" from line 14 */; ?>
<i class="glyphicons-show_big_thumbnails"></i>
						<?php /* tag "span" from line 15 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Domain, 'getName')); ?>
</span>
					</a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>
				
			</ul>
		</div>
		<?php /* tag "div" from line 20 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 21 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 22 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 23 */; ?>
<div class="row">
				<?php /* tag "div" from line 24 */; ?>
<div class="col-4">
					<?php /* tag "div" from line 25 */; ?>
<div id="TableAll"></div>
				</div>
				<?php /* tag "div" from line 27 */; ?>
<div class="col-5">
					<?php /* tag "div" from line 28 */; ?>
<div id="Session"></div>
				</div>
				<?php /* tag "div" from line 30 */; ?>
<div class="col-3">
					<?php /* tag "div" from line 31 */; ?>
<div class="accordion widget-box" id="collapse-group">
						<?php 
/* tag "div" from line 32 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Category = new PHPTAL_RepeatController($ctx->CategoryAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Category as $ctx->Category): ;
?>
<div class="accordion-group widget-box">
							<?php /* tag "div" from line 33 */; ?>
<div class="accordion-heading">
								<?php /* tag "div" from line 34 */; ?>
<div class="widget-title">
									<?php 
/* tag "a" from line 35 */ ;
if (null !== ($_tmp_1 = ('#'.$ctx->Category->getIdString()))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-parent="#collapse-group" data-toggle="collapse"<?php echo $_tmp_1 ?>
>
										<?php /* tag "span" from line 36 */; ?>
<span class="icon"><?php /* tag "i" from line 36 */; ?>
<i class="glyphicon glyphicon-glass"></i></span><?php /* tag "h5" from line 36 */; ?>
<h5><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</h5>
									</a>
								</div>
							</div>
							<?php 
/* tag "div" from line 40 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Category, 'getIdString')))):  ;
$_tmp_1 = ' id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div class="collapse accordion-body"<?php echo $_tmp_1 ?>
>
								<?php /* tag "div" from line 41 */; ?>
<div class="widget-content nopadding">
                                    <?php /* tag "ul" from line 42 */; ?>
<ul class="activity-list">
                                        <?php 
/* tag "li" from line 43 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Course = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getCourseAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Course as $ctx->Course): ;
?>
<li>
											<?php /* tag "a" from line 44 */; ?>
<a>
												<?php 
/* tag "button" from line 45 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Course, 'getId')))):  ;
$_tmp_4 = ' alt="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ('plus'))):  ;
$_tmp_5 = ' data-delta="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<button class="Course pull-left"<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
><?php /* tag "i" from line 45 */; ?>
<i class="glyphicons-circle_plus"></i></button>
												<?php /* tag "strong" from line 46 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Course, 'getName')); ?>
</strong>
												<?php 
/* tag "button" from line 47 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Course, 'getId')))):  ;
$_tmp_4 = ' alt="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
if (null !== ($_tmp_5 = ('minus'))):  ;
$_tmp_5 = ' data-delta="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<button class="Course pull-right"<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
><?php /* tag "i" from line 47 */; ?>
<i class="glyphicons-circle_minus"></i></button>
											</a>
										</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

                                    </ul>
                                </div>
							</div>
						</div><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

					</div>
				</div>				
			</div>			
		</div>		
		<?php /* tag "div" from line 58 */; ?>
<div id="TableActive"></div>
		<?php 
/* tag "div" from line 59 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Domain, 'getId')))):  ;
$_tmp_4 = ' alt="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<div id="DomainActive"<?php echo $_tmp_4 ?>
></div>
		<?php 
/* tag "div" from line 60 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 61 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

        <?php /* tag "script" from line 62 */; ?>
<script>
			$("#TableAll").load("/sellingbeta/load/domain/"+$("#DomainActive").attr('alt'));
										
			$('.Domain').click(function(){
				var IdDomain = $(this).attr('alt');
				/*
				$.gritter.add({
					title	:'Thông tin',
					text	:'Đã chọn',
					time	:5000,
					sticky: false
				});
				*/
				$("#TableAll").load("/sellingbeta/load/domain/"+IdDomain);
				$(this).toggleClass('active').siblings().removeClass('active');												
			});
						
        </script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from I:\quanly-quanan\langchai\mvc\templates\SellingBeta.html (edit that file instead) */; ?>