
				<div class="top1">
					<li class="stmenu"><h3><a href="#"  id="example" class="xialaguang">登录</a></h3></li>
					<li class="stmenu"><h3><a href="#" class="xialaguang"><span>注册</span></a></h3></li>
					<li class="stmenu" style="width: 200px;"><a href="#" class="xialaguang"></a></li>
					<li class="stmenu"><h3><a href="#" class="xialaguang "><span>我的订单</span></a></h3></li>
					<li class="stmenu">
						<h3><a href="#" class="xialaguang"><span>我的咔嚓</span></a></h3>    
						<ul class="children">    
						<li><a href="#"><span>评价</span></a></li>
						<li><a href="#"><span>收藏</span></a></li>
						<li><a href="#"><span>账户设置</span></a></li>
						</ul>
					</li>
					<li class="stmenu"><h3><a href="#" class="xialaguang"><span>摄影师招募</span></a></h3></li>
			</div>	
				<script type="text/javascript">
					$('#top .top1 > li').hover(function(){
						
						$(this).find('.children').animate({ opacity:'show', height:'show' },200);
						$(this).find('.xialaguang').addClass('navhover');
					}, function() {
						$('.children').stop(true,true).hide();
						$('.xialaguang').removeClass('navhover');
					});
				</script>
		
			
		<div id="LoginBox">
	        <div class="row1">
	            登录窗口<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeBtn">×</a>
	        </div>
	        <div class="row">
	            用户名: <span class="inputBox">
	                <input type="text" id="txtName" placeholder="账号/邮箱" />
	            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn">*</a>
	        </div>
	        <div class="row">
	            密&nbsp;码: <span class="inputBox">
	                <input type="password" id="txtPwd" placeholder="密码" />
	            </span><a href="javascript:void(0)" title="提示" class="warning" id="warn2">*</a>
	        </div>
	        <div class="row">
	            <a href="#"  >忘记密码了？</a>
	            <a href="#" id="loginbtn">登录</a>
	        </div>
    </div>

	<script type="text/javascript">
	$(function ($) {
		//弹出登录
		$("#example").on('click', function () {
			$("body").append("<div id='mask'></div>");
			$("#mask").addClass("mask").fadeIn("slow");
			$("#LoginBox").fadeIn("slow");
		});
		//
		//按钮的透明度
		$("#loginbtn").hover(function () {
			$(this).stop().animate({
				opacity: '1'
			}, 600);
		}, function () {
			$(this).stop().animate({
				opacity: '0.8'
			}, 1000);
		});
		//文本框不允许为空---按钮触发
		$("#loginbtn").on('click', function () {
			var txtName = $("#txtName").val();
			var txtPwd = $("#txtPwd").val();
			if (txtName == "" || txtName == undefined || txtName == null) {
				if (txtPwd == "" || txtPwd == undefined || txtPwd == null) {
					$(".warning").css({ display: 'block' });
				}
				else {
					$("#warn").css({ display: 'block' });
					$("#warn2").css({ display: 'none' });
				}
			}
			else {
				if (txtPwd == "" || txtPwd == undefined || txtPwd == null) {
					$("#warn").css({ display: 'none' });
					$(".warn2").css({ display: 'block' });
				}
				else {
					$(".warning").css({ display: 'none' });
					alert("登陆成功");
				}
			}
		});
		//文本框不允许为空---单个文本触发
		$("#txtName").on('blur', function () {
			var txtName = $("#txtName").val();
			if (txtName == "" || txtName == undefined || txtName == null) {
				$("#warn").css({ display: 'block' });
			}
			else {
				$("#warn").css({ display: 'none' });
			}
		});
		$("#txtName").on('focus', function () {
			$("#warn").css({ display: 'none' });
		});
		//
		$("#txtPwd").on('blur', function () {
			var txtName = $("#txtPwd").val();
			if (txtName == "" || txtName == undefined || txtName == null) {
				$("#warn2").css({ display: 'block' });
			}
			else {
				$("#warn2").css({ display: 'none' });
			}
		});
		$("#txtPwd").on('focus', function () {
			$("#warn2").css({ display: 'none' });
		});
		//关闭
		$(".close_btn").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
			$("#LoginBox").fadeOut("fast");
			$("#mask").css({ display: 'none' });
		});
	});
	</script>	
