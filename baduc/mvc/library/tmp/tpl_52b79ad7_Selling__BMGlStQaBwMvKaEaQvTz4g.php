<?php 
function tpl_52b79ad7_Selling__BMGlStQaBwMvKaEaQvTz4g(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
					<?php /* tag "div" from line 26 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 27 */; ?>
<div class="controls">
							<?php /* tag "input" from line 28 */; ?>
<input id="SearchName" type="text" placeholder="Nhập tìm món ăn" style="width:70%;"/>
							<?php 
/* tag "a" from line 29 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Config, 'getValue')))):  ;
$_tmp_2 = ' data-id-category="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a href="#DialogInsCourse" class="btn" data-toggle="modal"<?php echo $_tmp_2 ?>
>
								<?php /* tag "i" from line 30 */; ?>
<i class="glyphicons-plus"></i>
							</a>
							<?php /* tag "a" from line 32 */; ?>
<a href="#DialogCallCourse" class="btn CallCourse" data-toggle="modal">
								<?php /* tag "i" from line 33 */; ?>
<i class="glyphicons-bell"></i>
							</a>
						</div>
					</div>
					<?php /* tag "div" from line 37 */; ?>
<div id="CourseF"></div>
				</div>
				<?php /* tag "div" from line 39 */; ?>
<div class="col-5">
					<?php /* tag "div" from line 40 */; ?>
<div id="Session"></div>
				</div>
				<?php /* tag "div" from line 42 */; ?>
<div class="col-3">					
					<?php /* tag "div" from line 43 */; ?>
<div class="accordion widget-box" id="collapse-group">						
						<?php /* tag "div" from line 44 */; ?>
<div class="accordion-group widget-box">
							<?php /* tag "div" from line 45 */; ?>
<div class="accordion-heading">
								<?php /* tag "div" from line 46 */; ?>
<div class="widget-title">
									<?php 
/* tag "a" from line 47 */ ;
if (null !== ($_tmp_1 = ('#Top10'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-parent="#collapse-group" data-toggle="collapse"<?php echo $_tmp_1 ?>
>
										<?php /* tag "span" from line 48 */; ?>
<span class="icon"><?php /* tag "i" from line 48 */; ?>
<i class="glyphicons-fast_food"></i></span><?php /* tag "h5" from line 48 */; ?>
<h5><?php echo 'Top10'; ?>
</h5>
									</a>
								</div>
							</div>							
							<?php /* tag "div" from line 52 */; ?>
<div class="collapse in accordion-body" id="Top10">
								<?php /* tag "div" from line 53 */; ?>
<div class="widget-content nopadding size-12">
                                    <?php /* tag "ul" from line 54 */; ?>
<ul class="activity-list">
                                        <?php 
/* tag "li" from line 55 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->T = new PHPTAL_RepeatController($ctx->Top10)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->T as $ctx->T): ;
?>
<li>
											<?php /* tag "a" from line 56 */; ?>
<a class="course-item">
												<?php /* tag "strong" from line 57 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->T, 'getCourse/getShortName')); ?>
</strong>												
												<?php 
/* tag "button" from line 58 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->T, 'getCourse/getId')))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
if (null !== ($_tmp_3 = ('plus'))):  ;
$_tmp_3 = ' data-delta="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<button class="Course pull-right"<?php echo $_tmp_1 ?>
<?php echo $_tmp_3 ?>
><?php /* tag "i" from line 58 */; ?>
<i class="glyphicons-ok_2"></i></button>
											</a>
										</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

                                    </ul>
                                </div>
							</div>
						</div>
						<?php 
/* tag "div" from line 65 */ ;
$_tmp_1 = $ctx->repeat ;
$_tmp_1->Category = new PHPTAL_RepeatController($ctx->CategoryAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_1->Category as $ctx->Category): ;
?>
<div class="accordion-group widget-box">
							<?php /* tag "div" from line 66 */; ?>
<div class="accordion-heading">
								<?php /* tag "div" from line 67 */; ?>
<div class="widget-title">
									<?php 
/* tag "a" from line 68 */ ;
if (null !== ($_tmp_3 = ('#'.$ctx->Category->getIdString()))):  ;
$_tmp_3 = ' href="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<a data-parent="#collapse-group" data-toggle="collapse"<?php echo $_tmp_3 ?>
>
										<?php /* tag "span" from line 69 */; ?>
<span class="icon"><?php /* tag "i" from line 69 */; ?>
<i class="glyphicons-fast_food"></i></span><?php /* tag "h5" from line 69 */; ?>
<h5><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</h5>
									</a>
								</div>
							</div>
							<?php 
/* tag "div" from line 73 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Category, 'getIdString')))):  ;
$_tmp_2 = ' id="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<div class="collapse accordion-body"<?php echo $_tmp_2 ?>
>
								<?php /* tag "div" from line 74 */; ?>
<div class="widget-content nopadding size-12">
                                    <?php /* tag "ul" from line 75 */; ?>
<ul class="activity-list">
                                        <?php 
/* tag "li" from line 76 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Course = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getCourseAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Course as $ctx->Course): ;
?>
<li>
											<?php /* tag "a" from line 77 */; ?>
<a class="course-item">
												<?php /* tag "strong" from line 78 */; ?>
<strong><?php echo phptal_escape($ctx->path($ctx->Course, 'getShortName')); ?>
</strong>
												<?php 
/* tag "button" from line 79 */ ;
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
<button class="Course pull-right"<?php echo $_tmp_4 ?>
<?php echo $_tmp_5 ?>
><?php /* tag "i" from line 79 */; ?>
<i class="glyphicons-ok_2"></i></button>
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
		<?php /* tag "div" from line 90 */; ?>
<div id="TableActive"></div>
		<?php 
/* tag "div" from line 91 */ ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Domain, 'getId')))):  ;
$_tmp_4 = ' alt="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<div id="DomainActive"<?php echo $_tmp_4 ?>
></div>
		
		<!-- INSERT DIALOG  -->
		<?php /* tag "div" from line 94 */; ?>
<div id="DialogInsCourse" class="modal fade">
			<?php /* tag "div" from line 95 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 96 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 97 */; ?>
<div class="modal-header">
						<?php /* tag "h3" from line 98 */; ?>
<h3><?php /* tag "i" from line 98 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>THÊM MÓN TỰ CHỌN</h3>
					</div>
					<?php /* tag "div" from line 100 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 101 */; ?>
<div class="modal-body">													
							<?php /* tag "div" from line 102 */; ?>
<div class="form-group">
								<?php /* tag "label" from line 103 */; ?>
<label class="control-label">Tên</label>
								<?php /* tag "div" from line 104 */; ?>
<div class="controls">
									<?php /* tag "input" from line 105 */; ?>
<input id="CName1" name="CName1" type="text" class="form-control input-small"/>
								</div>
							</div>
							<?php /* tag "div" from line 108 */; ?>
<div class="form-group">
								<?php /* tag "label" from line 109 */; ?>
<label class="control-label">Tên ngắn</label>
								<?php /* tag "div" from line 110 */; ?>
<div class="controls">
									<?php /* tag "input" from line 111 */; ?>
<input id="CShortName1" name="CShortName1" type="text" class="form-control input-small"/>
								</div>
							</div>
							<?php /* tag "div" from line 114 */; ?>
<div class="form-group">
								<?php /* tag "label" from line 115 */; ?>
<label class="control-label">Giá bán</label>
								<?php /* tag "div" from line 116 */; ?>
<div class="controls">
									<?php /* tag "input" from line 117 */; ?>
<input id="CPrice1" name="CPrice1" type="text" class="form-control input-small"/>
								</div>
							</div>
							<?php /* tag "div" from line 120 */; ?>
<div class="form-group">
								<?php /* tag "label" from line 121 */; ?>
<label class="control-label">Đơn vị</label>
								<?php /* tag "div" from line 122 */; ?>
<div class="controls">
									<?php /* tag "select" from line 123 */; ?>
<select name="CUnit1" id="CUnit1" style="width:80%;">
										<?php 
/* tag "option" from line 124 */ ;
$_tmp_5 = $ctx->repeat ;
$_tmp_5->Unit = new PHPTAL_RepeatController($ctx->UnitAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_5->Unit as $ctx->Unit): ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->Unit, 'getName')))):  ;
$_tmp_3 = ' value="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
?>
<option<?php echo $_tmp_3 ?>
>
											<?php /* tag "span" from line 125 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</span>
										</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									</select>
								</div>
							</div>
							<?php /* tag "div" from line 130 */; ?>
<div class="form-group">
								<?php /* tag "label" from line 131 */; ?>
<label class="control-label">Số phút chuẩn bị</label>
								<?php /* tag "div" from line 132 */; ?>
<div class="controls">
									<?php /* tag "input" from line 133 */; ?>
<input id="CPrepare1" name="CPrepare1" type="text" class="form-control input-small"/>
								</div>
							</div>
						</div>
						<?php /* tag "div" from line 137 */; ?>
<div class="modal-footer">
							<?php /* tag "button" from line 138 */; ?>
<button id="URLInsCourseButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 138 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
							<?php /* tag "button" from line 139 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 139 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- INSERT DIALOG  -->
		<?php /* tag "div" from line 147 */; ?>
<div id="DialogCallCourse" class="modal fade">
			<?php /* tag "div" from line 148 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 149 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 150 */; ?>
<div class="modal-header">
						<?php /* tag "h3" from line 151 */; ?>
<h3><?php /* tag "i" from line 151 */; ?>
<i class="glyphicons-bell modal-icon"></i>DANH SÁCH MÓN ĐANG CHỜ ...</h3>
					</div>
					<?php /* tag "div" from line 153 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 154 */; ?>
<div class="modal-body">
							<?php /* tag "div" from line 155 */; ?>
<div id="CourseLog"></div>
						</div>
						<?php /* tag "div" from line 157 */; ?>
<div class="modal-footer">							
							<?php /* tag "button" from line 158 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 158 */; ?>
<i class="glyphicons-undo"></i> Đóng lại</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<?php /* tag "div" from line 165 */; ?>
<div id="audioNotify"></div>
		<!-- END INSERT DIALOG  -->
		<?php 
/* tag "div" from line 167 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 168 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

        <?php /* tag "script" from line 169 */; ?>
<script>
			//THIẾT LẬP NOTIFY CHO HỆ THỐNG			
			function getNotifyCourse(){
				var TypeNotify;
				$.ajax({
					type: "POST",
					dataType: "json",
					url: '/notify/course',
					success: function(data){																													
						if (data.result == "OK"){
							//NGHE NHẠC NỀN CẢNH BÁO
							$("#audioNotify").jPlayer({
								ready: function() {
									$(this).jPlayer("setMedia", {
										mp3:"/data/notify/bell01.mp3"
									}).jPlayer("play");
								},
								swfPath: "data",
								supplied: "mp3",
								loop: true,
								wmode: "window"
							});
							//TĂNG SỐ LẦN NOTIFY
							nCountNotify = nCountNotify + 1;
							
							//HIỂN THỊ THÔNG BÁO
							if (data.type==1){
								TypeNotify = "gritter-red";
							}else{
								TypeNotify = "gritter-green";
							}
							$.gritter.add({
								title:	data.title,
								text:	data.message,
								position: 'bottom-left',														
								class_name:TypeNotify,
								sticky:true,
								after_close: function(){
									nCountNotify = nCountNotify - 1;
									if (nCountNotify == 0){
										$("#audioNotify").jPlayer("destroy");
									}
								}
							});
						}		
					}					
				});
			}
			var nCountNotify = 0;
			$.extend($.gritter.options, { 
				position: 'bottom-left',
				fade_in_speed: 'medium', 
				fade_out_speed: 2000 
			});

			setInterval(function(){
				getNotifyCourse();
			}, 10000);
									
			//NẠP DANH SÁCH CÁC BÀN
			$("#TableAll").load("/selling/load/domain/"+$("#DomainActive").attr('alt'));
			$('.Domain').click(function(){
				var IdDomain = $(this).attr('alt');
				$("#TableAll").load("/selling/load/domain/"+IdDomain);
				$(this).toggleClass('active').siblings().removeClass('active');
			});
			
			//-----------------------------------------------------------------------------------
			//Insert 1 COURSE
			$('#URLInsCourseButton').click(function(){
				var Data = [];
				Data[0] = 'null';								
				Data[1] = 22;
				Data[2] = $('#CName1').val();
				Data[3] = $('#CShortName1').val();
				Data[4] = $('#CUnit1').val();
				Data[5] = $('#CPrice1').val();
				Data[6] = $('#CPrice1').val();
				Data[7] = $('#CPrice1').val();
				Data[8] = $('#CPrice1').val();
				Data[9] = "";
				Data[10] = $('#CPrepare1').val();
				Data[11] = 0;
				
				var URL = "/object/ins/Course";
				$.ajax({
					type: "POST",
					data: {Data:Data},
					url: URL,
					success: function(msg){
						location.reload();
					}
				});
			});
			
			//---------------------------------------------------------------------------
			//Xử lí search tên
			$('#SearchName').bind("enterKey",function(e){				
				var Name 		= $(this).val();										
				$("#CourseF").load("/selling/search/course", { Name: Name });
				
			});
			$('#SearchName').keyup(function(e){
				if(e.keyCode == 13){
					$(this).trigger("enterKey");
				}
			});
			//-----------------------------------------------------------------------------------
			//CALL COURSE
			$(".CallCourse").click(function(){
				$("#CourseLog").load("/selling/log/course");
			});
        </script>
	</body>
</html><?php 
/* end */ ;

}

?>
<?php /* 
*** DO NOT EDIT THIS FILE ***

Generated by PHPTAL from D:\AppWebServer\SPN_QuanAn\baduc\mvc\templates\Selling.html (edit that file instead) */; ?>