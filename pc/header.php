<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ja" lang="ja">
<head>

	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TV7LJMM');</script>
	<!-- End Google Tag Manager -->

<?php wp_head(); ?>


	<title> <?php wp_title(); ?> </title>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Script-Type" content="text/javascript">

<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/allpage.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/top.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/page.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/orbit.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/skin.css" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/common/css/jquery.lightbox-0.5.css" media="screen" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/font_m.css" id="fontcs" />
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/nivo-slider.css" />
<?php if(is_post_type_archive('seminar')): ?>
<link rel="stylesheet" type="text/css" href="<?php echo site_url(); ?>/wp-content/themes/reform/css/seminar.css" />
<?php endif; ?>
<link rel="shortcut icon" href="/wp-content/themes/reform/images/favicon.ico">
<link rel="icon" href="/wp-content/themes/reform/images/favicon.ico">
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/smoothScroll.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.jcarousel.min.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.nivo.slider.pack.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery-1.7.2.js"></script>

<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/rollover2.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/heightLine.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/navi.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/top.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.orbit-1.2.3.min.js"></script>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.wpcf7.confirm.js"></script>

<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/jquery.bxslider.css">
<script src="<?php bloginfo('template_url') ?>/js/jquery.bxslider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $('.bxslider').bxSlider({
		speed: 1000,
		controls: true,
		auto : true
	});
});
</script>

<?php if(is_page(20188)): ?>
<script type="text/javascript" src="<?php echo site_url(); ?>/wp-content/themes/reform/common/js/jquery.validate.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("form").validate({
    rules: {
        "place[]" :{ required: true },
		"m1kibou" : { required: true }, d1kibou : { required: true }, h1kibou : { required: true },
		"your-name" : { required: true },
		"your-email" : { required: true },
		"tel" : { required: true }
    },
    messages: {
        "place[]":{ required: "ご希望の店舗を選択してください" },
		"m1kibou" :{ required: "希望月をご記入ください" }, "d1kibou" :{ required: "希望日をご記入ください" }, "h1kibou" :{ required: "希望時間帯をご記入ください" },
		"your-name" :{ required: "お名前をご記入ください" },
		"your-email" :{ required: "メールアドレスをご記入ください" },
		"tel" :{ required: "電話番号をご記入ください" }
    }
	});
});
</script>
<?php endif; ?>

<link rel="shortcut icon" href="<?php echo site_url(); ?>/favicon.ico" />
<script type="text/javascript">
$(function(){
	$('#slider').orbit();
});
</script>
<script type="text/javascript">
$(function() {
	var topBtn = $('#lowerbnr_wrap');
	topBtn.hide();
	$(window).scroll(function () {
		if ($(this).scrollTop() > 150) {
			topBtn.fadeIn();
		} else {
			topBtn.fadeOut();
		}
	});
});
</script>





<!--start/Hover Shine-->
<!-- <script type="text/javascript" src="common/hovershine/jquery.js"></script>
<script type="text/javascript" src="common/hovershine/jquery.easing.js"></script> -->
<!-- <script type="text/javascript" src="common/hovershine/init.js"></script>
<script type="text/javascript" src="common/hovershine/hovershine.js"></script> -->
<!-- <script type="text/javascript" src="common/hovershine/jquery.scrolldepth.min.js"></script> -->
<!--start/Hover Shine-->
</head>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TV7LJMM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/ja_JP/all.js#xfbml=1&appId=202966563163680";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<body>


<a name="top" id="top"></a>

<!-- ======================ヘッダーここから======================= -->
<div class="header">
<h1 class="header_message">リフォーム！群馬（前橋、高崎、伊勢崎、渋川）でキッチン、風呂、トイレ、増改築、外壁塗装をリフォームするなら、株式会社ミタカ工房へ！</h1>
<ul class="bt_hnavi">
	<li><a href="<?php echo site_url(); ?>/other/sitemap/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_sitemap_btn.gif" width="66" height="11" alt="サイトマップ" /></a></li>
	<li><a href="<?php echo site_url(); ?>/other/privacy/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_privacy_btn.gif" width="108" height="11" alt="プライバシーポリシー" /></a></li>
</ul>
<div class="bt_font">
	<h2><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_size_title.gif" width="51" height="11" alt="文字サイズ" /></h2>
	<ul>
		<li id="font_s"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_size_s.gif" width="20" height="19" alt="小" /></li>
		<li id="font_m"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_size_m_h.gif" width="20" height="19" alt="中" /></li>
		<li id="font_l"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_size_l.gif" width="20" height="19" alt="大" /></li>
	</ul>
</div>
<h1 class="header_logo"><a href="<?php echo site_url(); ?>/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_logo.gif" width="304" height="96" alt="お客様の不安と不満を解消する「ミタカ工房」" /></a></h1>

<div class="h_bnr">
<a href="<?php echo site_url(); ?>/net_yoyaku" class="opacity"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/bnr_netyoyaku.png" width="166" height="96" alt="ショールームご来店予約" /></a>
</div>

<div class="h_bnr">
<a href="<?php echo site_url(); ?>/contact" class="opacity"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/bnr_contact.png" width="166" height="96" alt="ご相談お見積もり" /></a>
</div>

<p class="info_tel"><a href="<?php echo site_url(); ?>/contact/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_telinfo.gif" width="302" height="96" alt="当社へのお問い合わせはHPからが一番多いです。お気軽にご相談からどうぞ！050-7576-3940　営業電話一切なし！電話受付は10:00～18:00　水曜定休です。" /></a></p>
</div>
<!-- ======================ヘッダーここまで======================= -->

<!-- ======================グローバルナビここから======================= -->
<ul class="globalnavi">
	<li><a href="<?php echo site_url(); ?>/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_navi_home_rollout.gif" width="159" height="50" alt="Home" /></a></li>
	<li><a href="<?php echo site_url(); ?>/company/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_navi_company_rollout.gif" width="158" height="50" alt="会社概要" /></a><br />
	<ul>
		<li><a href="<?php echo site_url(); ?>/company/">会社案内</a></li>
		<li><a href="<?php echo site_url(); ?>/showroom/">前橋ショールーム若宮店</a></li>
		<li><a href="<?php echo site_url(); ?>/koaigi/">前橋ショールーム小相木店</a></li>
	 	<li><a href="<?php echo site_url(); ?>/company/policy">ミタカ工房 4つのポリシー</a></li>
		<li><a href="<?php echo site_url(); ?>/company/riyu">ミタカ工房が選ばれる10の理由</a></li>
		<li><a href="<?php echo site_url(); ?>/company/rinen">経営理念</a></li>
		<li><a href="<?php echo site_url(); ?>/staff">スタッフ・職人紹介</a></li>
		<li><a href="<?php echo site_url(); ?>/voice">お客様の声</a></li>
		<li><a href="<?php echo site_url(); ?>/event">イベント・キャンペーン情報</a></li>
 		<li><a href="<?php echo site_url(); ?>/media/">マスコミ取材記事</a></li>
 		<li><a href="<?php echo site_url(); ?>/company/osusume">おすすめサービス賞授賞式</a></li>
 		<li><a href="<?php echo site_url(); ?>/media#media_radio">FM群馬にラジオ出演</a></li>
 		<li><a href="<?php echo site_url(); ?>/koken">地域貢献活動</a></li>  </ul></li>
	<li><a href="<?php echo site_url(); ?>/seko/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_navi_seko_rollout.gif" width="158" height="50" alt="施工事例" /></a><br />
	<ul>
		<li><a href="<?php echo site_url(); ?>/seko/">リフォーム</a></li>
		<li><a href="<?php echo site_url(); ?>/genbanikki/">現場日記</a></li>
	</ul>
  </li>
	<li><a href="<?php echo site_url(); ?>/voice/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_navi_voice_rollout.gif" width="158" height="50" alt="お客様の声" /></a><br />

		<ul>
		<li><a href="<?php echo site_url(); ?>/voice">お客様の声</a></li>
		<li><a href="<?php echo site_url(); ?>/interview">お客様インタビュー</a></li>
				<li><a href="<?php echo site_url(); ?>/koken">地域貢献活動</a></li>
	</ul>
	</li>
	<li><a href="<?php echo site_url(); ?>/staff/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_navi_staff_rollout.gif" width="158" height="50" alt="スタッフ紹介" /></a><br />
	    </li>
	<li><a href="<?php echo site_url(); ?>/contact/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/top_navi_contact_rollout.gif" width="159" height="50" alt="お問合せ" /></a></li>
</ul>
<!-- ======================グローバルナビここまで======================= -->
<!-- 下部固定バナーここから    -->
<div class="sample2">
<div id="lowerbnr_wrap">
<ul>
<li><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/lower_toi_bnr.gif" width="282" height="53" alt="お問合せ" /></li>
<li><a href="<?php echo site_url(); ?>/net_yoyaku"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/lower_netyoyaku_bnr_rollout.png" width="282" height="53" alt="ネット予約特典"/></a></li>
<li><a href="<?php echo site_url(); ?>/contact/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/lower_mitsumori_bnr_rollout.png" width="190" height="53" alt="無料見積"/></a></li>
<li><a href="<?php echo site_url(); ?>/book"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/lower_shiryou_bnr_rollout.png" width="190" height="53" alt="資料請求"/></a></li>
<li><a href="#top"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/lower_pagetop.png" width="42" height="50" alt="ページトップへ" /></a></li>
</ul>
</div>
</div>
<script>
//クリックされた親のタグ（要素が消える）
$(".sample2 p").click(function () {
  $(this).parent().fadeOut(2000);
});
</script>
<!-- 下部固定バナーここまで    -->
