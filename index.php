<?php require_once(dirname(__FILE__).'/include/config.inc.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php echo GetHeader(); ?>
<link href="templates/default/style/webstyle.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="templates/default/js/jquery.min.js"></script>
<script type="text/javascript" src="templates/default/js/slideplay.js"></script>
<script type="text/javascript" src="templates/default/js/srcollimg.js"></script>
<script type="text/javascript" src="templates/default/js/loadimage.js"></script>
<script type="text/javascript" src="templates/default/js/top.js"></script>
<script type="text/javascript">
$(function(){
    $(".imgwrap li img").LoadImage({width:60,height:45});
	$(".newsfocus div img").LoadImage({width:60,height:60});
});
</script>
</head>
<body>
<!-- header-->
<?php require_once('header.php'); ?>
<!-- /header-->
<!-- banner-->
<!--<div class="banner">-->
<!--	<div id="slideplay">-->
<!--		<ul>-->
<!--			--><?php
//			$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=13 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,5");
//			while($row = $dosql->GetArray())
//			{
//				if($row['linkurl'] != '')$gourl = $row['linkurl'];
//				else $gourl = 'javascript:;';
//			?>
<!--			<li><a href="--><?php //echo $gourl; ?><!--"><img src="--><?php //echo $row['picurl']; ?><!--" alt="--><?php //echo $row['title']; ?><!--" /></a></li>-->
<!--			--><?php
//			}
//			?>
<!--		</ul>-->
<!--	</div>-->
<!--</div>-->
<!-- /banner-->
<!-- notice-->
<div class="notice">
	<div class="notice_a"><strong>网站公告：</strong><?php echo Info(1); ?></div>
	<div class="search">
		<form name="search" id="search" method="get" action="product.php">
			<input type="text" name="keyword" id="keyword" title="输入产品名进行搜索" value="" class="key" />
			<button type="submit" id="search_btn" class="sub"><span>搜索</span></button>
		</form>
	</div>
</div>
<!-- /notice-->
<!-- mainbody-->

	<!-- mainbody 1of2 2of2-->

<!--    	<div class="newstitle">-->
<!--			--><?php
//			if($cfg_isreurl!='Y') $gourl = 'news.php';
//			else $gourl = 'news.html';
//			?>
<!--			<a href="--><?php //echo $gourl; ?><!--">更多&gt;&gt;</a></div>-->
<!--			<div class="newsfocus">-->
<!--				--><?php
//				$row = $dosql->GetOne("SELECT * FROM `#@__infolist` WHERE classid=4 AND flag LIKE '%h%' AND delstate='' AND checkinfo=true ORDER BY orderid DESC");
//				if(isset($row['id']))
//				{
//					//获取链接地址
//					if($row['linkurl']=='' and $cfg_isreurl!='Y')
//						$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
//					else if($cfg_isreurl=='Y')
//						$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
//					else
//						$gourl = $row['linkurl'];
//
//					//获取缩略图地址
//					if($row['picurl']!='')
//						$picurl = $row['picurl'];
//					else
//						$picurl = 'templates/default/images/nofoundpic.gif';
//				?>
<!--				<div><a href="--><?php //echo $gourl; ?><!--"><img src="--><?php //echo $picurl; ?><!--" /></a></div>-->
<!--				<h3><a href="--><?php //echo $gourl; ?><!--" style="color:--><?php //echo $row['colorval']; ?<?php //echo $row['boldval']; ?><?php //echo ReStrLen($row['title'],16); ?><!--</a></h3>-->
<!--				<p>--><?php //echo ReStrLen($row['description'],34); ?><!--</p>-->
<!--				--><?php
//				}
//				else
//				{
//					echo '网站资料更新中...';
//				}
//				?>


	<div class="am-g am-g-fixed">
					<!-- newslist-->
		<div class="am-u-lg-3">

			<div data-am-widget="titlebar" class="am-list-news am-list-news-default" >
				<!--列表标题-->
				<div class="am-list-news-hd am-cf">
					<!--带更多链接-->
					<a href="news.php" class="">
						<h2>新闻公告</h2>
						<span class="am-list-news-more am-fr">更多 &raquo;</span>

					</a>
				</div>
				<div class="am-list-news-bd">
					<ul class="am-list">
						<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE (classid=4 or parentid=4) AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,3");
						while($row = $dosql->GetArray())
						{
						//获取链接地址
						if($row['linkurl']=='' and $cfg_isreurl!='Y')
						$gourl = 'newsshow.php?cid='.$row['classid'].'&id='.$row['id'];
						else if($cfg_isreurl=='Y')
						$gourl = 'newsshow-'.$row['classid'].'-'.$row['id'].'-1.html';
						else
						$gourl = $row['linkurl'];
						?>
						<li class=" am-list-item-dated"> <a href="<?php echo $gourl; ?>" style="color:<?php echo $row['colorval']; ?>;font-weight:<?php echo $row['boldval']; ?>;"><?php echo ReStrLen($row['title'],19); ?>
								<span  class="am-list-date"><?php echo MyDate('y-m-d', $row['posttime']); ?></span>
							</a>
						</li>

						<?php
						}
						?>
					</ul>
				</div>
			</div>
		</div>
		<!-- /newslist-->
		<!-- aboutus-->
		<div class="am-u-lg-7">

			<div  data-am-widget="slider" class="am-slider am-slider-default" data-am-slider='{&quot;animation&quot;:&quot;slide&quot;,&quot;slideshow&quot;:false}' >
				<ul class="am-slides">
					<?php
								$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE classid=13 AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,5");
								while($row = $dosql->GetArray())
								{
									if($row['linkurl'] != '')$gourl = $row['linkurl'];
									else $gourl = 'javascript:;';
								?>
								<li><a href="<?php echo $gourl; ?>"><img src="<?php echo $row['picurl']; ?>" alt="<?php echo $row['title']; ?>" /></a>
								<div class="am-slider-desc"><?php echo $row['title']; ?></div>
								</li>
								<?php
								}
								?>
				</ul>
			</div>
		</div>
		<div class="am-u-lg-2">
			<div data-am-widget="list_news" class="am-list-news am-list-news-default" >
				<!--列表标题-->
				<div class="am-list-news-hd am-cf">
					<!--带更多链接-->
					<a href="case.php" class="">
						<h2>成功案例</h2>
						<span class="am-list-news-more am-fr">更多 &raquo;</span>
					</a>
				</div>

				<div class="am-list-news-bd">
					<ul class="am-list">


						<!--缩略图在标题下方居右-->
						<li class="am-g am-list-item-desced am-list-item-thumbed am-list-item-thumb-bottom-right">
							<div class=" am-u-sm-8 am-list-main">

								<div class="am-list-item-text">
									广电质量学院
								</div>

							</div>
							<div class="am-list-thumb am-u-sm-4">
								<a href="http://www.douban.com/online/11614662/" class="">
									<img src="<?php echo InfoPic(3); ?>" alt="我很囧，你保重....晒晒旅行中的那些囧！"/>
								</a>
							</div>
						</li>




					</ul>
				</div>

			</div>

			<img src="<?php echo InfoPic(3); ?>" width="154" height="83" />

		</div>
	</div>
		<!-- /aboutus-->
<!--		<div class="cl"></div>-->
<!--	</div>-->
<!--	<div class="TowOfTow">-->
<!--		<div class="contact"> --><?php //echo Info(10); ?><!-- </div>-->
<!--		<div class="follow"><a href="http://weibo.com/phpMyWind" class="sina" target="_blank">收听新浪微博</a><a href="http://t.qq.com/phpMyWind" class="tqq" target="_blank">收听腾讯微博</a></div>-->
<!--	</div>-->
<!--	<div class="cl"></div>-->
	<!-- /mainbody 1of2 2of2-->
	<!-- product-->
<!--	<div class="scrollimg">-->
<!--		<div class="imgwrap">-->
<!--			<ul>-->
<!--				--><?php
//				$dosql->Execute("SELECT * FROM `#@__infoimg` WHERE (classid=5 OR parentstr LIKE '%,5,%') AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,18");
//				while($row = $dosql->GetArray())
//				{
//					//获取链接地址
//					if($row['linkurl']=='' and $cfg_isreurl!='Y')
//						$gourl = 'productshow.php?cid='.$row['classid'].'&id='.$row['id'];
//					else if($cfg_isreurl=='Y')
//						$gourl = 'productshow-'.$row['classid'].'-'.$row['id'].'-1.html';
//					else
//						$gourl = $row['linkurl'];
//
//					//获取缩略图地址
//					if($row['picurl']!='')
//						$picurl = $row['picurl'];
//					else
//						$picurl = 'templates/default/images/nofoundpic.gif';
//				?>
<!--				<li>-->
<!--					<dl>-->
<!--						<dt><a href="--><?php //echo $gourl; ?><!--"><img src="--><?php //echo $picurl; ?><!--" title="--><?php //echo $row['title']; ?><!--" /></a></dt>-->
<!--						<dd><a href="--><?php //echo $gourl; ?><!--">--><?php //echo $row['title']; ?><!--</a>--><?php //echo $row['keywords']; ?><!--</dd>-->
<!--					</dl>-->
<!--				</li>-->
<!--				--><?php
//				}
//				?>
<!--			</ul>-->
<!--		</div>-->
<!--	</div>-->
	<!-- /product-->

<link rel="stylesheet" href="templates/assets/css/amazeui.min.css"/>
<div class="am-g am-g-fixed ">
	<!--course-->
	<div class="am-u-lg-4">
		<h3>培训课程</h3>
		<ul class="newslist">
			<?php $dosql->Execute("SELECT * FROM `#@__infolist` WHERE (classid=14 or parentid=4) AND delstate='' AND checkinfo=true ORDER BY orderid DESC LIMIT 0,3");
			while($row = $dosql->GetArray())
			{
				//获取链接地址
				if($row['linkurl']=='' and $cfg_isreurl!='Y')
					$gourl = 'courseshow.php?cid='.$row['classid'].'&id='.$row['id'];
				else if($cfg_isreurl=='Y')
					$gourl = 'course-'.$row['classid'].'-'.$row['id'].'-1.html';
				else
					$gourl = $row['linkurl'];
				?>
				<li><span><?php echo MyDate('m-d', $row['posttime']); ?></span>· <a href="<?php echo $gourl; ?>" style="color:<?php echo $row['colorval']; ?>;font-weight:<?php echo $row['boldval']; ?>;"><?php echo ReStrLen($row['title'],19); ?></a></li>
				<?php
			}
			?>
		</ul>
		<div data-am-sticky>
			<button class="am-btn am-btn-primary am-btn-block">网站更新中</button>
		</div>
	</div>
	<!--/couree-->
	<div class="am-u-lg-8">
		<div class="GRGT_main02_News">
			<div >
				<ul class="am-tabs-nav am-cf" id="myTab1">
					<li class="am-btn am-btn-success " onclick="nTabs(this,0);">开班公告 </li>
					<li  class="am-btn am-btn-default "  onclick="nTabs(this,1);">学院新闻 </li>
					<li  class="am-btn am-btn-primary "  onclick="nTabs(this,2);">行业动态 </li>
				</ul>
			</div>
			<div class="GRGT_main02_News_nr">
				<div id="myTab1_Content0" style="display: none;">
					<ul>
						<table width="598" border="0" align="center" cellpadding="0" cellspacing="0" style="line-height:30px;">
							<tbody><tr style="background:#efefef;" class="font_jc">
								<td width="390" align="left" valign="middle">&nbsp;公告标题</td>
								<td width="124" align="center" valign="middle">开班日期</td>
								<td width="84" align="center" valign="middle">在线报名</td>
							</tr>
							<tr><td align="left" valign="middle">&nbsp;<a href="ClassPage-581.html">关于举办机械制图培训</a> </td><td align="center" valign="middle" class="font_time">2020-07-31</td><td align="center" valign="middle"><a href="Apply.html"><img src="images/GRGT_News_an.jpg" width="54" height="18"></a></td></tr><tr style="background:#efefef;"><td align="left" valign="middle">&nbsp;<a href="ClassPage-582.html">关于举办精益生产培训</a> </td><td align="center" valign="middle" class="font_time">2020-07-31</td><td align="center" valign="middle"><a href="Apply.html"><img src="images/GRGT_News_an.jpg" width="54" height="18"></a></td></tr><tr><td align="left" valign="middle">&nbsp;<a href="ClassPage-583.html">关于举办形位公差培训</a> </td><td align="center" valign="middle" class="font_time">2020-07-31</td><td align="center" valign="middle"><a href="Apply.html"><img src="images/GRGT_News_an.jpg" width="54" height="18"></a></td></tr><tr style="background:#efefef;"><td align="left" valign="middle">&nbsp;<a href="ClassPage-569.html">全国三体系内审员资格证培训开班通知</a> </td><td align="center" valign="middle" class="font_time">2020-07-31</td><td align="center" valign="middle"><a href="Apply.html"><img src="images/GRGT_News_an.jpg" width="54" height="18"></a></td></tr><tr><td align="left" valign="middle">&nbsp;<a href="ClassPage-571.html">RoSH/WEEE指令培训公告</a> </td><td align="center" valign="middle" class="font_time">2020-07-31</td><td align="center" valign="middle"><a href="Apply.html"><img src="images/GRGT_News_an.jpg" width="54" height="18"></a></td></tr><tr style="background:#efefef;"><td align="left" valign="middle">&nbsp;<a href="ClassPage-572.html">紫外-可见光光度计培训通知</a> </td><td align="center" valign="middle" class="font_time">2020-07-31</td><td align="center" valign="middle"><a href="Apply.html"><img src="images/GRGT_News_an.jpg" width="54" height="18"></a></td></tr>
							</tbody></table>
					</ul>
				</div>
				<div id="myTab1_Content1" class="none" style="display: block;">
					<ul>
						<table width="598" border="0" cellspacing="0" cellpadding="0" style="line-height:30px;">
							<tbody><tr style="background:#efefef;" class="font_jc">
								<td width="490" align="left" valign="middle">&nbsp;新闻标题</td>
								<td width="108" align="center" valign="middle">发布时间</td>
							</tr>
							<tr><td align="left" valign="middle">&nbsp;<a href="NewsPage-579.html">广电质量学院7月食品检验员资格证培训顺利召开</a> </td><td align="center" valign="middle" class="font_time">2015-07-22</td></tr><tr style="background:#efefef;"><td align="left" valign="middle">&nbsp;<a href="NewsPage-577.html">关于广电质量学院定期举办技术专项课程通知</a> </td><td align="center" valign="middle" class="font_time">2015-07-21</td></tr><tr><td align="left" valign="middle">&nbsp;<a href="NewsPage-568.html">广电计量新三板挂牌敲钟仪式在京举行</a> </td><td align="center" valign="middle" class="font_time">2015-07-21</td></tr><tr style="background:#efefef;"><td align="left" valign="middle">&nbsp;<a href="NewsPage-349.html">2013年12月广电质量学院成功举办ISO17025实验室体系内审员鉴定班</a> </td><td align="center" valign="middle" class="font_time">2014-01-07</td></tr><tr><td align="left" valign="middle">&nbsp;<a href="NewsPage-348.html">2013年12月广电质量学院成功举办计量检验员国家职业资格鉴定班</a> </td><td align="center" valign="middle" class="font_time">2014-01-07</td></tr><tr style="background:#efefef;"><td align="left" valign="middle">&nbsp;<a href="NewsPage-347.html">2013年11月广电质量学院成功举办食品检验员鉴定班</a> </td><td align="center" valign="middle" class="font_time">2014-01-07</td></tr>
							</tbody></table>
					</ul>
				</div>
				<div id="myTab1_Content2" class="none" style="display: none;">
					<ul>
						<table width="598" border="0" cellspacing="0" cellpadding="0" style="line-height:30px;">
							<tbody><tr style="background:#efefef;" class="font_jc">
								<td width="490" align="left" valign="middle">&nbsp;信息标题</td>
								<td width="108" align="center" valign="middle">发布时间</td>
							</tr>
							<tr><td align="left" valign="middle">&nbsp;<a href="NewsPage-580.html">国家制定专项法律遏制“疯狂的证书”，广电质量学院加强考核培训质量</a> </td><td align="center" valign="middle" class="font_time">2015-07-22</td></tr><tr style="background:#efefef;"><td align="left" valign="middle">&nbsp;<a href="NewsPage-578.html">广电质量学院7月顺利圆满召开化学检验工国家职业资格证培训</a> </td><td align="center" valign="middle" class="font_time">2015-07-21</td></tr><tr><td align="left" valign="middle">&nbsp;<a href="NewsPage-125.html">关于做好2012年全国计量宣传工作的通知</a> </td><td align="center" valign="middle" class="font_time">2012-04-10</td></tr><tr style="background:#efefef;"><td align="left" valign="middle">&nbsp;<a href="NewsPage-124.html">市食品药品检验中心加强能力建设</a> </td><td align="center" valign="middle" class="font_time">2012-04-06</td></tr><tr><td align="left" valign="middle">&nbsp;<a href="NewsPage-123.html">蒲长城在全国质检系统计量管理培训班上要求加强基础能力建设 增强服务有效性</a> </td><td align="center" valign="middle" class="font_time">2012-03-30</td></tr><tr style="background:#efefef;"><td align="left" valign="middle">&nbsp;<a href="NewsPage-122.html">微纳技术计量标准和标准物质研究项目启动</a> </td><td align="center" valign="middle" class="font_time">2012-03-30</td></tr>
							</tbody></table>
					</ul>
				</div>
			</div>
		</div>
	</div>

</div>
	<div data-am-sticky>
		<button class="am-btn am-btn-primary am-btn-block">网站更新中</button>
	</div>
<!-- /mainbody-->
<?php require_once('footer.php'); ?>
</body>
</html>
<script type="text/javascript">
	function nTabs(thisObj,Num){
		if(thisObj.className == "active")return;
		var tabObj = thisObj.parentNode.id;
		var tabList = document.getElementById(tabObj).getElementsByTagName("li");
		for(i=0; i <tabList.length; i++)
		{
			if (i == Num)
			{
				thisObj.className = "active";
				document.getElementById(tabObj+"_Content"+i).style.display = "block";
			}else{
				tabList[i].className = "normal";
				document.getElementById(tabObj+"_Content"+i).style.display = "none";
			}
		}
	}
</script>