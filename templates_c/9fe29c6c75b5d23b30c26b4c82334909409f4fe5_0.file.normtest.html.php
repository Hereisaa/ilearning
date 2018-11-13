<?php
/* Smarty version 3.1.33, created on 2018-11-12 13:59:51
  from 'D:\xampp\htdocs\awei_ilearning\ilearning\templates\normtest.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5be97947361688_09812383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9fe29c6c75b5d23b30c26b4c82334909409f4fe5' => 
    array (
      0 => 'D:\\xampp\\htdocs\\awei_ilearning\\ilearning\\templates\\normtest.html',
      1 => 1542027591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5be97947361688_09812383 (Smarty_Internal_Template $_smarty_tpl) {
?><html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="templates/normtest.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="templates/export_xls.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 type="text/javascript" src="js-xlsx/dist/xlsx.core.min.js"><?php echo '</script'; ?>
>
	<link rel="stylesheet" type="text/css" href="templates/CSS/mycss.css">
	<link rel="stylesheet" type="text/css" href="templates/CSS/navbar.css">
    <style >
    	
    	.btn{
    		
    		font-size: 20px;
    	}
    </style>

    <title>常模測驗</title>
</head>
<body>
	<!-- 登入後資訊區 navbar-->
	<ul id="navbar_ul" >
		<li id="navbar_li"><a class="active" href="normtest.php" class="nav navbar-inverse" >越南語言測驗</a></li>
		<!-- <li id="navbar_li" style="float:right;"><a href="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
.php" ><span id="username" value="<?php echo $_smarty_tpl->tpl_vars['login_status']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</span><?php echo $_smarty_tpl->tpl_vars['login_text']->value;?>
</a></li> -->
	</ul>
	
	<!-- 題目及測驗整體 -->
	<div id="test_zone" class="container" style="display: block;">
		<!-- 第一部 -->
		<div id="part1_container" class="container" >
			<!-- 題號區 -->
			<div class="container">
				<h2 ><strong>
					<span id="part1_question_type"></span>
					<span id="part1_question_type_content" style="font-family: 'Times New Roman', Times, serif;"></span>
				</strong></h2>
				<div class="col-sm-4">
					<h2><strong>選出正確的字母 </strong> </h2>
				</div>
				<div class="col-sm-4"> 
					<h2><strong>第<span id="part1_question_num"> </span>題 / 共28題</strong> </h2>
				</div>
			</div>
			<!-- 音檔、選擇區 -->
			<div class="container col-sm-8">
				<!-- 音檔播放區 -->
			    <div class="container" style="padding-top: 15px;">
			    	<audio id="part1_audio" src="" controls="controls" controlsList="nodownload" oncontextmenu="return false">
			    	</audio>
			    </div>
			    <!-- 選擇區 -->
			    <div class="container" style="padding-top: 15px">
			    	<div class="row" style="padding-top: 10px; ">
			    		<div class="col-sm-3" >
			    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('A');" style="font-family: 'Times New Roman', Times, serif;">A : <span id="part1_option_a">none</span></button>
			    		</div>
			    		<div class="col-sm-3" >
			    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('B');" style="font-family: 'Times New Roman', Times, serif;">B : <span id="part1_option_b">none</span></button>
			    		</div>
			    	</div>
			    	<div class="row " style="padding-top: 10px; ">
			    		<div class="col-sm-3" >
			    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('C');" style="font-family: 'Times New Roman', Times, serif;">C : <span id="part1_option_c">none</span> </button>
			    		</div>
			    		<div class="col-sm-3" >
			    			<button type="button" class="btn btn-secondary btn-block" onclick="clickoption('D');" style="font-family: 'Times New Roman', Times, serif;">D : <span id="part1_option_d">none</span> </button>
			    		</div>
			    	</div>
			    </div>
			</div>
			
		    <!-- 確認區 -->
		    <div class="container col-sm-3" >
	    		<div class="row" style="font-size: 50px"><strong>選擇:<span id="part1_choosen_option" style="font-family: 'Times New Roman', Times, serif;"></span>　</strong></div>
	    		<div class="row" style="padding-top: 10px"><button id="part1_commit_btn" type="button" disabled="" onclick="commitanswer();" class="btn">確認</button></div>
	    	</div>
		</div>
		
		<!-- 第二部分 -->
		<div id="part2_container" class="container" style=" display: none;" >
			<!-- 題號區 -->
			<div class="container">
				<h2><strong>
					<span id="part2_question_type"></span>
					<span id="part2_question_type_content" style="font-family: 'Times New Roman', Times, serif;"></span>
				</strong></h2>
				<div class="col-sm-4">
					<h2><strong>選出正確的發音 </strong> </h2>
				</div>
				<div class="col-sm-4"> 
					<h2><strong>第<span id="part2_question_num"> </span>題 / 共28題</strong> </h2>
				</div>
			</div>
		   	<!-- 題目選擇區 -->
		   	<div class="container col-sm-8">
				<div class="container col-sm-4 text-center" style="justify-content: center;"> 
					<h3><strong id="part2_question"></strong></h3>
					<h2 ><strong id="part2_question_content" style="font-family: 'Times New Roman', Times, serif;"> </strong></h2>
				</div>
				<div class="container col-sm-8" style="padding-top: 15px">
					<div class="row" style="padding-top: 10px">
						<button class="btn align-top" id="part2_option_a" onclick="clickoption('A')" ><strong>A</strong></button>
						<audio id="part2_audio_a" src="" controls="controls" onclick="clickoption('A')" controlsList="nodownload" style="vertical-align: middle;"></audio>
					</div>
				 
				 <div class="row" style="padding-top: 10px">
					 <button class="btn align-top" id="part2_option_b" onclick="clickoption('B')" ><strong>B</strong></button>
					 <audio id="part2_audio_b" src="" controls="controls" onclick="clickoption('B')" controlsList="nodownload" style="vertical-align: middle;"></audio>
				 </div>
				 <div class="row" style="padding-top: 10px">
					 <button class="btn align-top" id="part2_option_b" onclick="clickoption('C')" ><strong>C</strong></button>
					 <audio id="part2_audio_c" src="" controls="controls" onclick="clickoption('C')" controlsList="nodownload" style="vertical-align: middle;"></audio>
				 </div>
			 
				 <div class="row" style="padding-top: 10px">
					 <button class="btn align-top" id="part2_option_b" onclick="clickoption('D')" ><strong>D</strong></button>
					 <audio id="part2_audio_d" src="" controls="controls" onclick="clickoption('D')" controlsList="nodownload" style="vertical-align: middle;"></audio>
				 </div>
				</div>
			</div>	
			<!-- 確認區 -->
		    <div class="container col-sm-3" >
	    		<div class="row" style="font-size: 50px"><strong>選擇:<span id="part2_choosen_option" style="font-family: 'Times New Roman', Times, serif;"></span>　</strong></div>
	    		<div class="row" style="padding-top: 10px"><button id="part2_commit_btn" type="button" disabled="" onclick="commitanswer();" class="btn">確認</button></div>
	    	</div>

		</div>
	</div>
		

	    <!-- 確認 -->
	    <!-- <div class="container col-sm-4" style=" justify-content: center; padding-left: 10% ;padding-top: 90px;">
	    	<div class="row" style="font-size: 20px"><strong>(點擊左側A、B、C、D) 你的選擇 : <span id="choosen_option" ></span> 。 </strong></div>
	    	<div class="row" style="padding-top: 10px"><button id="commit_btn" type="button" disabled="" onclick="commitanswer();" class="btn">確認</button></div>
	    </div> -->

	</div>
	
    <!-- 測驗結束後 -->
    <div id="thank_zone" class="container" style="display: none; ">
    	<!-- 作答情形區 -->
    	<div class="container">
    	   	<h2 class="row">感謝您的參與 </h2>
    	   	<h3 class="row">答對題數 : <span id="correct_num"></span>/28</h3>
    	   	<table class="table" >
	    		<thead>
	    			<tr>
	    				<th>題數</th>
	    				<th>答案</th>
	    				<th>讀音</th>
	    				<th>您的答案</th>
	    				<th></th>
	    			</tr>
				</thead>
				
	    		<tbody id="result_tbody" >
	    			
				</tbody>
				
			</table>

			

			<!-- 回到index.html 並輸出excel-->
			<form id="myform" method="POST">
				<input type="button" value="回常模測試主頁" class="btn btn-primary" onclick="add_element(this);" ><br />
			</form>
    		
    	</div>
    </div>
</body>
</html><?php }
}
