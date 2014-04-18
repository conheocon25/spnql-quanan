<?php 
function tpl_52c13513_Selling__BMGlStQaBwMvKaEaQvTz4g(PHPTAL $tpl, PHPTAL_Context $ctx) {
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
<a><?php /* tag "i" from line 13 */; ?>
<i class="glyphicons-show_big_thumbnails"></i><?php /* tag "span" from line 13 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Domain, 'getName')); ?>
</span></a>
				</li><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

				<?php 
/* tag "li" from line 15 */ ;
if (null !== ($_tmp_2 = ('101'))):  ;
$_tmp_2 = ' alt="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<li class="Domain"<?php echo $_tmp_2 ?>
>
					<?php /* tag "a" from line 16 */; ?>
<a><?php /* tag "i" from line 16 */; ?>
<i class="glyphicons-show_big_thumbnails"></i>CHƯA CÓ KHÁCH</a>
				</li>
				<?php 
/* tag "li" from line 18 */ ;
if (null !== ($_tmp_1 = ('102'))):  ;
$_tmp_1 = ' alt="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<li class="Domain"<?php echo $_tmp_1 ?>
>
					<?php /* tag "a" from line 19 */; ?>
<a><?php /* tag "i" from line 19 */; ?>
<i class="glyphicons-show_big_thumbnails"></i>ĐANG CÓ KHÁCH</a>
				</li>
			</ul>
		</div>
		<?php /* tag "div" from line 23 */; ?>
<div id="content">
			<?php 
/* tag "div" from line 24 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/ContentHeader', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php 
/* tag "div" from line 25 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/LocationBar', $_thistpl) ;
$ctx->popSlots() ;
?>

			<?php /* tag "div" from line 26 */; ?>
<div class="row">
				<?php /* tag "div" from line 27 */; ?>
<div class="col-4">
					<?php /* tag "div" from line 28 */; ?>
<div id="TableAll"></div>
					<?php /* tag "div" from line 29 */; ?>
<div class="widget-box">
						<?php /* tag "div" from line 30 */; ?>
<div class="controls">
							<?php /* tag "input" from line 31 */; ?>
<input id="SearchName" type="text" placeholder="Nhập tìm món ăn" style="width:55%;"/>
							<?php 
/* tag "a" from line 32 */ ;
if (null !== ($_tmp_2 = ($ctx->path($ctx->Config, 'getValue')))):  ;
$_tmp_2 = ' data-id-category="'.phptal_escape($_tmp_2).'"' ;
else:  ;
$_tmp_2 = '' ;
endif ;
?>
<a href="#DialogInsCourse" class="btn" data-toggle="modal"<?php echo $_tmp_2 ?>
>
								<?php /* tag "i" from line 33 */; ?>
<i class="glyphicons-plus"></i>
							</a>
							<?php /* tag "a" from line 35 */; ?>
<a class="btn RemoveCourseSearch">
								<?php /* tag "i" from line 36 */; ?>
<i class="glyphicons-circle_remove"></i>
							</a>
							<!--
							<a href="#DialogCallCourse" class="btn CallCourse" data-toggle="modal">
								<i class="glyphicons-bell" />
							</a>
							!-->
							<?php /* tag "a" from line 43 */; ?>
<a href="#DialogPrepareCourse" class="btn CoursePreparePrint" data-toggle="modal">
								<?php /* tag "i" from line 44 */; ?>
<i class="glyphicons-stopwatch"></i>
							</a>
						</div>
					</div>
					<?php /* tag "div" from line 48 */; ?>
<div id="CourseF"></div>
				</div>
				<?php /* tag "div" from line 50 */; ?>
<div class="col-5">
					<?php /* tag "div" from line 51 */; ?>
<div id="Session"></div>
				</div>
				<?php /* tag "div" from line 53 */; ?>
<div class="col-3">					
					<?php /* tag "div" from line 54 */; ?>
<div class="accordion widget-box" id="collapse-group">						
						<?php /* tag "div" from line 55 */; ?>
<div class="accordion-group widget-box">
							<?php /* tag "div" from line 56 */; ?>
<div class="accordion-heading">
								<?php /* tag "div" from line 57 */; ?>
<div class="widget-title">
									<?php 
/* tag "a" from line 58 */ ;
if (null !== ($_tmp_1 = ('#Top10'))):  ;
$_tmp_1 = ' href="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a data-parent="#collapse-group" data-toggle="collapse"<?php echo $_tmp_1 ?>
>
										<?php /* tag "span" from line 59 */; ?>
<span class="icon"><?php /* tag "i" from line 59 */; ?>
<i class="glyphicons-fast_food"></i></span><?php /* tag "h5" from line 59 */; ?>
<h5><?php echo 'Top10'; ?>
</h5>
									</a>
								</div>
							</div>							
							<?php /* tag "div" from line 63 */; ?>
<div class="collapse in accordion-body" id="Top10">
								<?php /* tag "div" from line 64 */; ?>
<div class="widget-content nopadding size-12">
									<?php /* tag "ul" from line 65 */; ?>
<ul class="activity-list">
										<?php 
/* tag "li" from line 66 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->T = new PHPTAL_RepeatController($ctx->Top10)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->T as $ctx->T): ;
?>
<li>											
											<?php 
/* tag "a" from line 67 */ ;
if (null !== ($_tmp_1 = ($ctx->T->getCourse()->getName() . ' ' . $ctx->T->getCourse()->getPrice1Print()))):  ;
$_tmp_1 = ' data-original-title="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<a class="course-item tip-left"<?php echo $_tmp_1 ?>
>
												<?php 
/* tag "strong" from line 68 */ ;
if (null !== ($_tmp_3 = ($ctx->path($ctx->T, 'getCourse/getId')))):  ;
$_tmp_3 = ' alt="'.phptal_escape($_tmp_3).'"' ;
else:  ;
$_tmp_3 = '' ;
endif ;
if (null !== ($_tmp_4 = ('plus'))):  ;
$_tmp_4 = ' data-delta="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<strong class="Course"<?php echo $_tmp_3 ?>
<?php echo $_tmp_4 ?>
><?php echo phptal_escape($ctx->path($ctx->T, 'getCourse/getShortName')); ?>
</strong>
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
/* tag "div" from line 75 */ ;
$_tmp_3 = $ctx->repeat ;
$_tmp_3->Category = new PHPTAL_RepeatController($ctx->CategoryAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_3->Category as $ctx->Category): ;
?>
<div class="accordion-group widget-box">
							<?php /* tag "div" from line 76 */; ?>
<div class="accordion-heading">
								<?php /* tag "div" from line 77 */; ?>
<div class="widget-title">
									<?php 
/* tag "a" from line 78 */ ;
if (null !== ($_tmp_4 = ('#'.$ctx->Category->getIdString()))):  ;
$_tmp_4 = ' href="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a data-parent="#collapse-group" data-toggle="collapse"<?php echo $_tmp_4 ?>
>
										<?php /* tag "span" from line 79 */; ?>
<span class="icon"><?php /* tag "i" from line 79 */; ?>
<i class="glyphicons-fast_food"></i></span><?php /* tag "h5" from line 79 */; ?>
<h5><?php echo phptal_escape($ctx->path($ctx->Category, 'getName')); ?>
</h5>
									</a>
								</div>
							</div>
							<?php 
/* tag "div" from line 83 */ ;
if (null !== ($_tmp_1 = ($ctx->path($ctx->Category, 'getIdString')))):  ;
$_tmp_1 = ' id="'.phptal_escape($_tmp_1).'"' ;
else:  ;
$_tmp_1 = '' ;
endif ;
?>
<div class="collapse accordion-body"<?php echo $_tmp_1 ?>
>
								<?php /* tag "div" from line 84 */; ?>
<div class="widget-content nopadding size-12">
									<?php /* tag "ul" from line 85 */; ?>
<ul class="activity-list">
										<?php 
/* tag "li" from line 86 */ ;
$_tmp_2 = $ctx->repeat ;
$_tmp_2->Course = new PHPTAL_RepeatController($ctx->path($ctx->Category, 'getCourseAll'))
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_2->Course as $ctx->Course): ;
?>
<li>
											<?php 
/* tag "a" from line 87 */ ;
if (null !== ($_tmp_4 = ($ctx->Course->getName() . ' ' . $ctx->Course->getPrice1Print()))):  ;
$_tmp_4 = ' data-original-title="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<a class="course-item tip-left"<?php echo $_tmp_4 ?>
>
												<?php 
/* tag "strong" from line 88 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Course, 'getId')))):  ;
$_tmp_5 = ' alt="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
if (null !== ($_tmp_6 = ('plus'))):  ;
$_tmp_6 = ' data-delta="'.phptal_escape($_tmp_6).'"' ;
else:  ;
$_tmp_6 = '' ;
endif ;
?>
<strong class="Course"<?php echo $_tmp_5 ?>
<?php echo $_tmp_6 ?>
><?php echo phptal_escape($ctx->path($ctx->Course, 'getShortName')); ?>
</strong>
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
		<?php /* tag "div" from line 99 */; ?>
<div id="TableActive"></div>
		<?php 
/* tag "div" from line 100 */ ;
if (null !== ($_tmp_5 = ($ctx->path($ctx->Domain, 'getId')))):  ;
$_tmp_5 = ' alt="'.phptal_escape($_tmp_5).'"' ;
else:  ;
$_tmp_5 = '' ;
endif ;
?>
<div id="DomainActive"<?php echo $_tmp_5 ?>
></div>
		
		<!-- INSERT DIALOG  -->
		<?php /* tag "div" from line 103 */; ?>
<div id="DialogInsCourse" class="modal fade">
			<?php /* tag "div" from line 104 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 105 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 106 */; ?>
<div class="modal-header">
						<?php /* tag "h3" from line 107 */; ?>
<h3><?php /* tag "i" from line 107 */; ?>
<i class="glyphicons-fast_food modal-icon"></i>THÊM MÓN TỰ CHỌN</h3>
					</div>
					<?php /* tag "div" from line 109 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 110 */; ?>
<div class="modal-body">													
							<?php /* tag "div" from line 111 */; ?>
<div class="form-group">
								<?php /* tag "label" from line 112 */; ?>
<label class="control-label">Tên</label>
								<?php /* tag "div" from line 113 */; ?>
<div class="controls">
									<?php /* tag "input" from line 114 */; ?>
<input id="CName1" name="CName1" type="text" class="form-control input-small"/>
								</div>
							</div>
							<?php /* tag "div" from line 117 */; ?>
<div class="form-group">
								<?php /* tag "label" from line 118 */; ?>
<label class="control-label">Tên ngắn</label>
								<?php /* tag "div" from line 119 */; ?>
<div class="controls">
									<?php /* tag "input" from line 120 */; ?>
<input id="CShortName1" name="CShortName1" type="text" class="form-control input-small"/>
								</div>
							</div>
							<?php /* tag "div" from line 123 */; ?>
<div class="form-group">
								<?php /* tag "label" from line 124 */; ?>
<label class="control-label">Giá bán</label>
								<?php /* tag "div" from line 125 */; ?>
<div class="controls">
									<?php /* tag "input" from line 126 */; ?>
<input id="CPrice1" name="CPrice1" type="text" class="form-control input-small"/>
								</div>
							</div>
							<?php /* tag "div" from line 129 */; ?>
<div class="form-group">
								<?php /* tag "label" from line 130 */; ?>
<label class="control-label">Đơn vị</label>
								<?php /* tag "div" from line 131 */; ?>
<div class="controls">
									<?php /* tag "select" from line 132 */; ?>
<select name="CUnit1" id="CUnit1" style="width:80%;">
										<?php 
/* tag "option" from line 133 */ ;
$_tmp_6 = $ctx->repeat ;
$_tmp_6->Unit = new PHPTAL_RepeatController($ctx->UnitAll)
 ;
$ctx = $tpl->pushContext() ;
foreach ($_tmp_6->Unit as $ctx->Unit): ;
if (null !== ($_tmp_4 = ($ctx->path($ctx->Unit, 'getName')))):  ;
$_tmp_4 = ' value="'.phptal_escape($_tmp_4).'"' ;
else:  ;
$_tmp_4 = '' ;
endif ;
?>
<option<?php echo $_tmp_4 ?>
>
											<?php /* tag "span" from line 134 */; ?>
<span><?php echo phptal_escape($ctx->path($ctx->Unit, 'getName')); ?>
</span>
										</option><?php 
endforeach ;
$ctx = $tpl->popContext() ;
?>

									</select>
								</div>
							</div>
							<?php /* tag "div" from line 139 */; ?>
<div class="form-group">
								<?php /* tag "label" from line 140 */; ?>
<label class="control-label">Số phút chuẩn bị</label>
								<?php /* tag "div" from line 141 */; ?>
<div class="controls">
									<?php /* tag "input" from line 142 */; ?>
<input id="CPrepare1" name="CPrepare1" type="text" class="form-control input-small"/>
								</div>
							</div>
						</div>
						<?php /* tag "div" from line 146 */; ?>
<div class="modal-footer">
							<?php /* tag "button" from line 147 */; ?>
<button id="URLInsCourseButton" class="btn btn-primary btn-small"><?php /* tag "i" from line 147 */; ?>
<i class="glyphicons-download_alt"></i> Lưu</button>
							<?php /* tag "button" from line 148 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 148 */; ?>
<i class="glyphicons-undo"></i> Hủy</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- INSERT DIALOG  -->
		<?php /* tag "div" from line 156 */; ?>
<div id="DialogCallCourse" class="modal fade">
			<?php /* tag "div" from line 157 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 158 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 159 */; ?>
<div class="modal-header">
						<?php /* tag "h3" from line 160 */; ?>
<h3><?php /* tag "i" from line 160 */; ?>
<i class="glyphicons-bell modal-icon"></i>DANH SÁCH MÓN ĐANG CHỜ ...</h3>
					</div>
					<?php /* tag "div" from line 162 */; ?>
<div class="form-horizontal">
						<?php /* tag "div" from line 163 */; ?>
<div class="modal-body">
							<?php /* tag "div" from line 164 */; ?>
<div id="CourseLog"></div>
						</div>
						<?php /* tag "div" from line 166 */; ?>
<div class="modal-footer">							
							<?php /* tag "button" from line 167 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 167 */; ?>
<i class="glyphicons-undo"></i> Đóng lại</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- DIALOG PREPARE	-->
		<?php /* tag "div" from line 174 */; ?>
<div id="DialogPrepareCourse" class="modal fade">
			<?php /* tag "div" from line 175 */; ?>
<div class="modal-dialog">
				<?php /* tag "div" from line 176 */; ?>
<div class="modal-content">
					<?php /* tag "div" from line 177 */; ?>
<div class="modal-header">
						<?php /* tag "h3" from line 178 */; ?>
<h3><?php /* tag "i" from line 178 */; ?>
<i class="glyphicons-stopwatch modal-icon"></i>IN BẾP</h3>
					</div>
					<?php /* tag "form" from line 180 */; ?>
<form class="form">
						<?php /* tag "div" from line 181 */; ?>
<div class="form-group">
							<?php /* tag "div" from line 182 */; ?>
<div id="CoursePrepare" width="320px" height="480px"></div>
						</div>
						<?php /* tag "div" from line 184 */; ?>
<div class="modal-footer">									
							<?php /* tag "button" from line 185 */; ?>
<button data-dismiss="modal" class="btn btn-default btn-small"><?php /* tag "i" from line 185 */; ?>
<i class="glyphicons-undo"></i> Đóng</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- END DIALOG PREPARE -->
					
		<?php /* tag "div" from line 193 */; ?>
<div id="audioNotify"></div>
		<!-- END INSERT DIALOG  -->
		<?php 
/* tag "div" from line 195 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/Footer', $_thistpl) ;
$ctx->popSlots() ;
?>

		<?php 
/* tag "div" from line 196 */ ;
$ctx->pushSlots() ;
$tpl->_executeMacroOfTemplate('mAdmin.xhtml/IncludeJS', $_thistpl) ;
$ctx->popSlots() ;
?>

        <?php /* tag "script" from line 197 */; ?>
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
			/*
			setInterval(function(){
				getNotifyCourse();
			}, 10000);
			*/
			
			//NẠP DANH SÁCH CÁC BÀN			
			$('.Domain').click(function(){
				var IdDomain = $(this).attr('alt');
				$("#TableAll").load("/selling/load/domain/"+IdDomain);
				$(this).toggleClass('active').siblings().removeClass('active');
			});
			$('.Domain:first').click();
			
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
			$('#SearchName').keyup(function(e){
				var Name 		= $(this).val();										
				$("#CourseF").load("/selling/search/course", { Name: Name });
			});
			
			//-----------------------------------------------------------------------------------
			//CALL COURSE
			$(".RemoveCourseSearch").click(function(){
				$("#CourseF").html("");
			});
			
			//-----------------------------------------------------------------------------------
			//PREPARE COURSE
			$(".CoursePreparePrint").click(function(){
				URL = "/selling/log/course/print/prepare";
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
				}).embed("CoursePrepare");
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