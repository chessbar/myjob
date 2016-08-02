<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?>			<!-- 简历完成状态盒子开始 -->
			<div class="state_box">
				<ul>
					<li class="none">
						简历完成状态
					</li>
					<li class="one">
						<div class="progress">
							<div style="width:<?php echo $propress;?>%;background-color:#99CC00; height:8px;left:0;top0;position:absolute"> </div>
						</div>
						<?php echo $propress;?>%
					</li>
					<li class="one two">
						<a href="">显示简历所有内容</a>
					</li><!--class="fullstatus"-->
					<li <?php if(METHOD == 'make1'||METHOD == 'make1_update'){?> class="on"<?php }?> <?php if(in_array(1,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make1',array('reid'=>$_GET['reid']));?>">基本信息</a>
					</li>
					<li <?php if(METHOD == 'make2'||METHOD == 'make2_update'){?> class="on"<?php }?> <?php if(in_array(2,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make2',array('reid'=>$_GET['reid']));?>">求职意向</a>
					</li>
					<li <?php if(METHOD == 'make3'||METHOD == 'make3_update'){?> class="on"<?php }?> <?php if(in_array(3,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make3',array('reid'=>$_GET['reid']));?>">技能特长</a>
					</li>
					<li <?php if(METHOD == 'make4'||METHOD == 'make4_update'){?> class="on"<?php }?> <?php if(in_array(4,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make4',array('reid'=>$_GET['reid']));?>">教育经历</a>
					</li>
					<li <?php if(METHOD == 'make5'||METHOD == 'make5_update'){?> class="on"<?php }?> <?php if(in_array(5,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make5',array('reid'=>$_GET['reid']));?>">工作经历</a>
					</li>
					<li <?php if(METHOD == 'make6'||METHOD == 'make6_update'){?> class="on"<?php }?> <?php if(in_array(6,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make6',array('reid'=>$_GET['reid']));?>">培训经历</a>
					</li>
					<li <?php if(METHOD == 'make7'){?> class="on"<?php }?> <?php if(in_array(7,$stepArr)){?> class="fullstatus"<?php }?>>
						<a href="<?php echo U('Resume/make7',array('reid'=>$_GET['reid']));?>">形象照片</a>
					</li>
				</ul>
			</div>
			<!-- 简历完成状态盒子结束 -->