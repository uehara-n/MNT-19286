<?php
/*
Template Name: テスト用（トップ確認用）
*/
get_header();
$title = apply_filters( 'the_title', get_queried_object()->post_title );
?>
<!-- ======================コンテンツここから======================= -->
<div class="content">

<!--=================トップイメージ=================== -->
<div class="topimage clearfix">
<h2>
<div class="slider-wrapper theme-default">
<div id="slider">
<?php
	$args = array(
		'post_type' => 'slide_img',/* 投稿タイプを指定 */
		'paged' => $paged,/* ページ番号を指定 */
		'posts_per_page' => 10/* 最大表示数 */
		);
	query_posts( $args );
	while( have_posts() ) : the_post();
	$imagefield = get_imagefield('topimg_img');
	$imgattr = wp_get_attachment_image_src($imagefield['id'], 'full');
?>
	<a href="<?php echo post_custom('topimg_img_link'); ?>"><img src="<?php echo $imgattr[0]; ?>" alt="<?php echo post_custom('topimg_img_alt'); ?>"></a>
<?php endwhile; wp_reset_query(); ?>
</div>
</div>
</h2>

<ul>
	<li><a href="/voice" class="opacity"><img src="<?php echo get_template_directory_uri(); ?>/images/top/topbtn_voice.jpg" width="237" height="89" alt="お客様の声掲載数、群馬県No.1" /></a></li>
	<li><a href="/seko" class="opacity"><img src="<?php echo get_template_directory_uri(); ?>/images/top/topbtn_reform.jpg" width="237" height="89" alt="リフォーム施工事例掲載数、群馬県Ｎｏ．１" /></a></li>
	<li><a href="/company/osusume/" class="opacity"><img src="<?php echo get_template_directory_uri(); ?>/images/top/topbtn_gunma.jpg" width="237" height="89" alt="群馬県建築業界初！県知事より受賞！！「おすすめサービス賞」受賞" /></a></li>
	<li><a href="/showroom" class="opacity"><img src="<?php echo get_template_directory_uri(); ?>/images/top/topbtn_showroom.jpg" width="237" height="88" alt="イベント開催数Ｎｏ．１！ＴＯＴＯタカラショールームで毎月開催！" /></a></li>
</ul>
</div>
<!--=================トップイメージ=================== -->

<!--=================トップバナー=================== -->
<ul class="top_banner">
<li><a href="<?php echo site_url(); ?>/book"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/t_bnr_book.png" width="290" alt="資料請求" /></a></li>
<li><a href="<?php echo site_url(); ?>/net_yoyaku"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/t_bnr_netyoyaku.png" width="290" alt="ショールームご来店予約" /></a></li>
<li><a href="<?php echo site_url(); ?>/contact"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/t_bnr_contact.png" width="290" alt="ご相談お見積もり" /></a></li>
<li><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/bnr_tel01.png" width="950" alt="050-7576-3940" /></li>
</ul>
<!--=================トップバナー=================== -->



<!--<a href="/wp-content/themes/reform/images/top/chirashi20170123.pdf" target="_blank"><img src="/wp-content/themes/reform/images/top/chirashi20170123_rollout.jpg" width="950" height="160" alt="300日感謝祭" class="mb10"/></a>-->

<!-- ======================右コンテンツここから======================= -->
<div class="c_right top">

<!--<div id="oshirase">
<pre>
◆◇◆◇　夏季休暇のご案内　◆◇◆◇
誠に勝手ながら、2018年8月13日（月）～ 2018年8月15日（水）は休業させていただきます。
通常営業は、8月16日（木）からとなります。
休暇中にいただいたお問い合わせについては、通常営業日より順次対応させていただきますので、ご了承ください。
今後も変わらぬご愛顧をどうぞよろしくお願いいたします。
</pre>
</div>-->

<!--<a href="/wp-content/themes/reform/images/top/mitakaD3omote_170801.pdf" target="_blank"><img src="/wp-content/themes/reform/images/top/chirashi_bnr201708_rollout.jpg" width="740" height="230" alt="小相木店オープン1周年感謝祭" class="mb10"/></a>
<br clear="all">
<a href="/jstocksien"><img src="/wp-content/themes/reform/images/top/bnr_jstocksien2_rollout.png" width="740" height="150" alt="住宅ストック循環支援事業" class="mb10"/></a>-->


<!--
<a href="/hojyokin"><img src="/wp-content/themes/reform/page_image/hojyokin/hojyokin_bnr_rollout.png" width="735" height="200" alt="前橋市 平成30年度 住宅外装改修補助金について" class="mb10"/></a>
-->

<div class="showroom">
<h2><img src="/wp-content/themes/reform/images/common/title_laugh.png" width="56" height="63" class="title_laugh"/>前橋リフォームショールームへご来店ください！</h2><div class="inner">
		<h4>前橋ショールーム若宮店</h4>
		<img src="/wp-content/themes/reform/images/common/sr_wakamiya.png" width="350" alt="前橋ショールーム若宮店" />
		<p>〒371-0032　前橋市若宮町4丁目13-12</p>
		<a href="/showroom" class="opacity"><img src="/wp-content/themes/reform/images/common/btn_reserve01.png" width="350" alt="この店舗に来店予約する" /></a>
	</div>
	<div class="inner">
		<h4>前橋ショールーム小相木店</h4>
		<img src="/wp-content/themes/reform/images/common/sr_koaigi.png" width="350" alt="前橋ショールーム小相木店" />
		<p>〒371-0831　前橋市小相木町406-1</p>
		<a href="/koaigi" class="opacity"><img src="/wp-content/themes/reform/images/common/btn_reserve01.png" width="350" alt="この店舗に来店予約する" /></a>
	</div>
</div>
<!-- <?php get_showroom(); ?> -->




<div class="reform_corner">
	<h2><img src="/wp-content/themes/reform/images/common/title_laugh.png" width="56" height="63" class="title_laugh"/>ミタカ工房のリフォーム＆増改築メニュー</h2>
<div class="inner">

<a href="<?php bloginfo('url'); ?>/kitchen_lp1"><img src="<?php echo get_template_directory_uri(); ?>/images/top/rifo_bnr_kitc_rollout.png" width="340" height="230" alt="キッチンコーナー" /></a>
<a href="<?php bloginfo('url'); ?>/bath_lp1"><img src="<?php echo get_template_directory_uri(); ?>/images/top/rifo_bnr_ohuro_rollout.png" width="340" height="230" alt="お風呂コーナー" /></a>
<br clear="all">
<a href="<?php bloginfo('url'); ?>/ldk_lp1"><img src="<?php echo get_template_directory_uri(); ?>/images/top/rifo_bnr_ldk_rollout.png" width="340" height="230" alt="LDKコーナー" /></a>
<a href="<?php bloginfo('url'); ?>/big_reform_lp1"><img src="<?php echo get_template_directory_uri(); ?>/images/top/rifo_bnr_big_reform_rollout.png" width="340" height="230" alt="全面改装・増改築コーナー" /></a>
<br clear="all">
<a href="<?php bloginfo('url'); ?>/toilet_lp1"><img src="<?php echo get_template_directory_uri(); ?>/images/top/rifo_bnr_toilet_rollout.png" width="340" height="230" alt="トイレコーナー" /></a>
<a href="<?php bloginfo('url'); ?>/kyuto_lp"><img src="<?php echo get_template_directory_uri(); ?>/images/top/rifo_bnr_kyuto_rollout.png" width="340" height="230" alt="給湯器コーナー" /></a>
<br clear="all">
</div>
</div>


<!--=================最新施工事例=================== -->
	<div class="right_special">
	<h2 class="img"><img src="/wp-content/themes/reform/images/top/seko_new.gif" width="735" height="59" alt="最新施工事例" /></h2>
	<div class="area">
	<p class="bun">群馬県　ミタカ工房の最新リフォーム事例を紹介しています。<br />
	リフォームは、まったく同じようにはいかない、オーダーメイドの工事がほとんどです。<br />
	２つと同じものが存在しないからこそ、いろんな事例を見て参考にしてください。気になる事例が見つかったら、お気軽にご相談ください。<br />
	ミタカ工房の建築のプロがお客様のお宅だったらどの様に実現するかをご提案いたします。</p>
<div class="seko_cate">
		<a href="/seko_cat/kitchen"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_1.png" width="341" height="131" alt="キッチン" /></a>
		<a href="/seko_cat/ohuro"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_2.png" width="341" height="131" alt="お風呂" /></a>
		<a href="/seko_cat/toilet"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_3.png" width="341" height="131" alt="トイレ/toilet" /></a>
		<a href="/seko_cat/zenmen"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_9.png" width="341" height="131" alt="増改築" /></a>
		<a href="/seko_cat/senmen"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_4.png" width="131" height="131" alt="洗面" /></a>
		<a href="/seko_cat/kyuto"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_10.png" width="131" height="131" alt="給湯器" /></a>
		<a href="/seko_cat/design"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_15.png" width="131" height="131" alt="IH・ガスコンロ" /></a>
		<a href="/seko_cat/suisen"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_14.png" width="131" height="131" alt="水栓" /></a>
		<a href="/seko_cat/gaiheki"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_7.png" width="131" height="131" alt="外壁/屋根" /></a>
		<a href="/seko_cat/ldk"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_18.png" width="131" height="131" alt="LDK" /></a>
		<a href="/seko_cat/living"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_5.png" width="131" height="131" alt="内装" /></a>
		<a href="/seko_cat/garasusasshi"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_8.png" width="131" height="131" alt="窓サッシ" /></a>
		<a href="/seko_cat/exterior"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_6.png" width="131" height="131" alt="エクステリア" /></a>
		<a href="/seko_cat/gaibu"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_16.png" width="131" height="131" alt="外部工事" /></a>
<!--		<a href="/seko_cat/other"><img src="<?php echo get_template_directory_uri(); ?>/images/top/tseko_btn_17.png" width="131" height="131" alt="その他" /></a>
-->	</div>

<!--キッチン-->
<?php $args = array(
	'post_type' => 'seko', /* 投稿タイプ */
	'paged' => $paged,
	'posts_per_page' => 1, /* 件数表示 */
	'tax_query' => array(
	array(
	'taxonomy' => 'seko_cat', //タクソノミー名
	'field' => 'slug',
	'terms' => 'kitchen' //タームのスラッグ
))); ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
	<p class="seko_box clear_left"><span class="img">
	<?php if(post_custom('seko_after_image')){
		echo gr_get_image('seko_after_image',
			array( 'width' => '340', 'alt' => get_the_title(), 'title' => get_the_title() )
		);
	} ?></span>
	<strong><?php the_title(); ?></strong><br />
	<?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?>邸<br />
	費用：<?php echo post_custom( 'seko_price' ); ?><br>
	工期：<?php echo post_custom( 'seko_duration' ); ?>
	<a href="<? the_permalink(); ?>" class="btn">施工事例を見る</a></p>

<?php endwhile; endif; ?>

<!--お風呂-->
<?php $args = array(
	'post_type' => 'seko', /* 投稿タイプ */
	'paged' => $paged,
	'posts_per_page' => 1, /* 件数表示 */
	'tax_query' => array(
	array(
	'taxonomy' => 'seko_cat', //タクソノミー名
	'field' => 'slug',
	'terms' => 'ohuro' //タームのスラッグ
))); ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
	<p class="seko_box"><span class="img">
	<?php if(post_custom('seko_after_image')){
		echo gr_get_image('seko_after_image',
			array( 'width' => '340', 'alt' => get_the_title(), 'title' => get_the_title() )
		);
	} ?></span>
	<strong><?php the_title(); ?></strong><br />
	<?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?>邸<br />
	費用：<?php echo post_custom( 'seko_price' ); ?><br>
	工期：<?php echo post_custom( 'seko_duration' ); ?>
	<a href="<? the_permalink(); ?>" class="btn">施工事例を見る</a></p>

<?php endwhile; endif; ?>

<!--LDK-->
<?php $args = array(
	'post_type' => 'seko', /* 投稿タイプ */
	'paged' => $paged,
	'posts_per_page' => 2, /* 件数表示 */
	'tax_query' => array(
	array(
	'taxonomy' => 'seko_cat', //タクソノミー名
	'field' => 'slug',
	'terms' => 'ldk' //タームのスラッグ
)));
$i = 0; ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
	<p class="seko_box<? if($i%2==0){ echo " clear_left";} ?>"><span class="img">
	<?php if(post_custom('seko_after_image')){
		echo gr_get_image('seko_after_image',
			array( 'width' => '340', 'alt' => get_the_title(), 'title' => get_the_title() )
		);
	} ?></span>
	<strong><?php the_title(); ?></strong><br />
	<?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?>邸<br />
	費用：<?php echo post_custom( 'seko_price' ); ?><br>
	工期：<?php echo post_custom( 'seko_duration' ); ?>
	<a href="<? the_permalink(); ?>" class="btn">施工事例を見る</a></p>

<?php
	 $i++; 
	 endwhile; endif; ?>

<!--トイレ-->
<?php $args = array(
	'post_type' => 'seko', /* 投稿タイプ */
	'paged' => $paged,
	'posts_per_page' => 1, /* 件数表示 */
	'tax_query' => array(
	array(
	'taxonomy' => 'seko_cat', //タクソノミー名
	'field' => 'slug',
	'terms' => 'toilet' //タームのスラッグ
))); ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
	<p class="seko_box clear_left"><span class="img">
	<?php if(post_custom('seko_after_image')){
		echo gr_get_image('seko_after_image',
			array( 'width' => '340', 'alt' => get_the_title(), 'title' => get_the_title() )
		);
	} ?></span>
	<strong><?php the_title(); ?></strong><br />
	<?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?>邸<br />
	費用：<?php echo post_custom( 'seko_price' ); ?><br>
	工期：<?php echo post_custom( 'seko_duration' ); ?>
	<a href="<? the_permalink(); ?>" class="btn">施工事例を見る</a></p>

<?php endwhile; endif; ?>

<!--外装-->
<?php $args = array(
	'post_type' => 'seko', /* 投稿タイプ */
	'paged' => $paged,
	'posts_per_page' => 1, /* 件数表示 */
	'tax_query' => array(
	array(
	'taxonomy' => 'seko_cat', //タクソノミー名
	'field' => 'slug',
	'terms' => 'gaiheki' //タームのスラッグ
))); ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
	<p class="seko_box"><span class="img">
	<?php if(post_custom('seko_after_image')){
		echo gr_get_image('seko_after_image',
			array( 'width' => '340', 'alt' => get_the_title(), 'title' => get_the_title() )
		);
	} ?></span>
	<strong><?php the_title(); ?></strong><br />
	<?php echo post_custom( 'seko_city' ); ?>　<?php echo post_custom( 'seko_name' ); ?>邸<br />
	費用：<?php echo post_custom( 'seko_price' ); ?><br>

	工期：<?php echo post_custom( 'seko_duration' ); ?>
	<a href="<? the_permalink(); ?>" class="btn">施工事例を見る</a></p>

<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>

	</div>
</div>
<!--=================最新施工事例=================== -->



<div class="w735">
<?php /*?><?php gr_contact_banner(); ?>
<?php */?></div><!-- //end w735 -->


<!--=================お客様インタビュー=================== -->
<div class="right_special2">
<h2><img src="/wp-content/themes/reform/images/common/title_laugh.png" width="56" height="63" class="title_laugh"/>前橋市でリフォームされたお客様にインタビュー！</h2>
<div class="area">
<div class="top_intaviewBox">
<a href="/interview/case1/"><img src="/wp-content/themes/reform/images/top/interview_sample1.jpg" alt="外壁塗装" /><br />
<p class="bgg">憧れていた「魔女の宅急便」の世界に暮らしているようです</p></a>
</div>

<div class="top_intaviewBox">
<a href="/interview/case2/"><img src="/wp-content/themes/reform/images/top/interview_sample2.jpg" alt="真空ガラス" /><br />
<p class="bgg">「真空ガラススペーシア」に変えて部屋があたたかいです！</p></a>
</div>

<div class="top_intaviewBox">
<a href="/interview/case16/"><img src="/wp-content/themes/reform/images/top/interview_sample3.jpg" alt="全面リフォーム" /><br />
<p class="bgg">天井裏から床下まで潜って、くわしく調べてくれました。</p></a>
</div>

<br clear="all">

<div class="bottom">
<a href="/interview" class="under"><img src="/wp-content/themes/reform/images/top/interview_btn.gif" width="127" height="33" alt="すべて見る" /></a>
<img src="/wp-content/themes/reform/images/top/intervie_bun.gif" width="423" height="72" alt="インタビューはまだまだあります！「どこに頼んでいいか不安でしたが、現実味のあるインタビューを読んでとても安心できました。」　玉村町樋越　亀井様　40代" />
</div>

</div>
</div>
<!--=================お客様インタビュー=================== -->


<!--=================現場日記=================== -->
	<div class="right_genba">
	<h2 class="img"><img src="/wp-content/themes/reform/images/top/genbanikki_title.gif" width="735" height="63" alt="現場日記" /></h2>
	<div class="area">
            <?php
			$args = array(
			'post_type' => 'genbanikki', /* 投稿タイプを指定 */
			'paged' => $paged,		/* ページ番号を指定 */
			'posts_per_page' => 3,		/* 最大表示数 */
			);
			query_posts( $args );
			$i = 0;
			if(have_posts()) : while( have_posts() ) : the_post(); ?>
            		<div class="seko<?php if($i%3==0){ echo " clear_left"; } ?>">
			<?php get_the_post_image_id(get_the_ID(),'thumbnail'); ?>
			<p><a href="<?php
			$attachments = get_children(array('post_parent' => get_the_ID(), 'post_type' => 'attachment', 'post_mime_type' => 'image','posts_per_page' => 1 ));
			if(is_array($attachments)){
			        foreach ($attachments as $attachments) {
			            $imgL = wp_get_attachment_image_src( $attachments->ID, 'large' );
			            echo $imgL[0];
			        }
			}
			?>" rel="lightbox[genba2]" title="<? the_title(); ?>"><strong><?php the_title(); ?></strong><br />
			<?php the_time('Y年n月j日');?><br />
			<? $text = str_replace("<p>", "", get_the_excerpt());
			$text = str_replace("</p>", "", $text);
			echo $text; ?>
			</a></p></div>
			<?php
			$i++;
			endwhile;
			echo '';
			else: ?>
			<p>現在準備中です</p>
			<?php endif; ?>

	</div>
	<div class="bottom">
	<a href="/genbanikki"><img src="/wp-content/themes/reform/images/top/genba_btn.gif" width="156" height="33" alt="現場日記を見る" /></a>
	<img src="/wp-content/themes/reform/images/top/genba_bottomtitle.gif" width="411" height="34" alt="リフォームの仕事は、現場で状況を見て判断することも多いです。現場周りも私たちの大切な仕事です。" />
	</div>
	</div>
<!--=================現場日記=================== -->


<!--=================ミタカ工房へようこそ=================== -->
	<div class="right_welcome">
	<h2 class="img"><img src="/wp-content/themes/reform/images/top/welcome_images.jpg" width="165" height="257" alt="" class="image" /><img src="/wp-content/themes/reform/images/top/welcome_title.gif" width="358" height="19" alt="" class="mb20" /></h2>
	<p>ようこそ！数あるリフォーム会社の中から、弊社のサイトにお越しいただき、誠にありがとうございます。<br>
創業以来、群馬県内にて住宅のリフォーム、不動産、新築と「生活」を中心にした事業を展開してまいりました。地域の皆様とふれあいを大切にし、10,000件を超えるお客様の住まい作りに携わりました。</p>
	<p>その間「技術」より「態度」、「営業」より「助言」、「損得」より「善悪」などを合言葉とし、売上よりも信頼を勝ち取ることを信条に経営をして参りました。
</p>
<p>
	  おかげさまで建築業として県内初の「おすすめサービス賞」を県知事から頂き（平成20年受賞）、お客様からの感想数は県内１位、地域密着企業として子供達とのふれあい活動も来年で10年を迎えようとしています。</p>
	<p>どうか、このホームページから「総合リフォーム専門店」として、他店様にはない当社独自の息吹を感じていただき、<br />リフォームの持つ素晴らしさ を多くの人に知ってもらいたいと考えております。<br />
	  もし今、真剣に「リフォーム」を考えているのなら、当社にご連絡ください。一人で悩んでいるより何十倍もお力になることをお約束いたします。</p>
	<p>そしてご縁を頂いた時、私達ミタカ工房は、スタッフの全生命力を賭けて、知恵を絞りご提案させていただきます。</p>
	<p class="right">株式会社ミタカ工房　代表取締役　<strong>北屋敷　司</strong></p>
	</div>
<!--=================ミタカ工房へようこそ=================== -->



<div class="w735">
<?php get_rightbottom(); ?>
</div>

<!-- ======================スペシャリストここから======================= -->
	<div class="right_specialist">
	<h2 class="img"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_title.gif" width="597" height="52" alt="私たち建築・リフォームのスペシャリストにお任せください。" /><span><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_top.gif" width="142" height="21" alt="ミタカ工房の" /><br />
	<a href="<?php echo site_url(); ?>/staff/"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_staff.gif" width="127" height="14" alt="スタッフ紹介を見る" /></a></span></h2>
	<p><a href="http://www.r-mitaka.com/staff/14475.html"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_im1.gif" width="74" height="100" alt="土屋美明" /></a>
	<a href="http://www.r-mitaka.com/staff/13658.html"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_im2.gif" width="75" height="87" alt="古館恵三" /></a>
	<a href="http://www.r-mitaka.com/staff/2652.html"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_im3.gif" width="74" height="105" alt="山岡優子" /></a>
	<a href="http://www.r-mitaka.com/staff/13646.html"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_im4.gif" width="74" height="99" alt="森雅行" /></a>
    <a href="http://www.r-mitaka.com/staff/13654.html"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_im5.gif" width="74" height="124" alt="北屋敷司" /></a>
    <a href="http://www.r-mitaka.com/staff/13642.html"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_im6.gif" width="75" height="112" alt="小澤亮" /></a>
	<a href="http://www.r-mitaka.com/staff/2650.html"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_im7.gif" width="74" height="112" alt="北屋敷美香" /></a>
	<a href="http://www.r-mitaka.com/staff/13638.html"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_im8.gif" width="74" height="99" alt="北屋敷匤史" /></a>
	<a href="http://www.r-mitaka.com/staff/13650.html"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/right_specialist_im9.gif" width="75" height="123" alt="本田英俊" /></a></p>
	</div>
<!-- ======================スペシャリストここまで======================= -->

<!--=================ブログRSS=================== -->
<div class="content_staffblog_head">
				<h2 class="img"><img src="/wp-content/themes/reform/page_image/staff/staffblog_title.gif" width="730" height="65" alt="ミタカ工房スタッフブログ"></h2>
<?php gr_blog_list(); ?>
</div>
<div class="rssfeed">
	<?php $args = array(
			'post_type' => 'staffblog', /* 投稿タイプ */
			'paged' => $paged,
			'posts_per_page' => 5 /* 件数表示 */
			); ?>
	<?php query_posts( $args ); ?>
	<?php if (have_posts()) : ?>
	<?php $i = 0; ?>
	<?php while (have_posts()) : the_post();
	/* ループ開始 */ ?>
<p><a href="<?php the_permalink(); ?>" target="_blank"><span class="title"><? the_title(); ?></span><span class="date"><?php the_time('Y年n月j日');?></span></a></p>
	<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

<div class="staffblog_more"><a href="/staffblog">　>> もっと読む</a></div>
</div>
<br clear="all">
<!--=================ブログRSS=================== -->


<!-- ======================FBここから=======================
        <div class="fb-like-box mb20" data-href="http://www.facebook.com/mitakakoubou" data-width="735" data-height="300" data-show-faces="true" data-stream="false" data-header="true"></div>
 ======================FBここまで======================= -->


<!--<a href="/fastreform"><img src="/wp-content/themes/reform/images/top/bnr_fastreform_rollout.jpg" width="740" height="120" alt=" 2014全国ファストリフォームアワード" class="mb30"/></a>
-->


<!--=================トップバナー=================== -->
<ul class="top_banner">
<li><a href="<?php echo site_url(); ?>/book"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/t_bnr_book.png" width="240" alt="資料請求" /></a></li>
<li><a href="<?php echo site_url(); ?>/net_yoyaku"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/t_bnr_netyoyaku.png" width="240" alt="ショールームご来店予約" /></a></li>
<li><a href="<?php echo site_url(); ?>/contact"><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/t_bnr_contact.png" width="240" alt="ご相談お見積もり" /></a></li>
<li><img src="<?php echo site_url(); ?>/wp-content/themes/reform/images/common/bnr_tel01.png" width="740" alt="050-7576-3940" /></li>
</ul>
<!--=================トップバナー=================== -->

<!--=================増改築・大型リフォーム施工事例====
	<div class="right_special">
	<h2 class="seko_ti"><img src="/wp-content/themes/reform/images/top/special_title.gif" width="352" height="34" alt="最新施工事例" /></h2>
	<div class="area">
	<p class="seko clear_left">
	<img src="/wp-content/themes/reform/images/top/special_sample1.jpg" width="214" height="161" alt="" /><br />
	<strong class="tit">全面改装費用 750万円</strong><br />
	間取りはそのままに安全・快適で暮らしやすいゆとりの邸宅に大変身しました。テキストテキスト。</p>
	<p class="seko">
	<img src="/wp-content/themes/reform/images/top/special_sample2.jpg" width="214" height="161" alt="" /><br />
	<strong class="tit">全面改装費用 750万円</strong><br />
	間取りはそのままに安全・快適で暮らしやすいゆとりの邸宅に大変身しました。テキストテキスト。</p>
	<p class="seko">
	<img src="/wp-content/themes/reform/images/top/special_sample3.jpg" width="214" height="161" alt="" /><br />
	<strong class="tit">全面改装費用 750万円</strong><br />
	間取りはそのままに安全・快適で暮らしやすいゆとりの邸宅に大変身しました。テキストテキスト。</p>
	<p class="seko clear_left">
	<img src="/wp-content/themes/reform/images/top/special_sample1.jpg" width="214" height="161" alt="" /><br />
	<strong class="tit">全面改装費用 750万円</strong><br />
	間取りはそのままに安全・快適で暮らしやすいゆとりの邸宅に大変身しました。テキストテキスト。</p>
	<p class="seko">
	<img src="/wp-content/themes/reform/images/top/special_sample2.jpg" width="214" height="161" alt="" /><br />
	<strong class="tit">全面改装費用 750万円</strong><br />
	間取りはそのままに安全・快適で暮らしやすいゆとりの邸宅に大変身しました。テキストテキスト。</p>
	<p class="seko">
	<img src="/wp-content/themes/reform/images/top/special_sample3.jpg" width="214" height="161" alt="" /><br />
	<strong class="tit">全面改装費用 750万円</strong><br />
	間取りはそのままに安全・快適で暮らしやすいゆとりの邸宅に大変身しました。テキストテキスト。</p>
	</div>
	</div>
=========増改築・大型リフォーム施工事例=================== -->

<!--=================リフォームイベント案内===================
<div class="right_fair">
<h2><img src="/wp-content/themes/reform/images/top/reformfair_title.gif" width="716" height="355" alt="毎月開催！ミタカ工房リフォーム祭！前橋・高崎にある「メーカーショールーム」にて、リフォームフェアを開催！リフォーム・外壁塗装の役立つ情報が満載！" /></h2>
<p class="bun"><img src="/wp-content/themes/reform/images/top/reformfair_image.jpg" width="716" height="271" alt="ご来場お待ちしております！今までの施工事例を紹介！（ビフォー・アフターで分かりやすく解説！）" /></p>

<div><img src="/wp-content/themes/reform/images/top/event20150604.jpg" width="730" height="543" alt="オープン１周年"></div>


<div class="top_event_bg">
<p class="btn"><a href="http://www.r-mitaka.com/showroom"><img src="http://www.r-mitaka.com/wp-content/themes/reform/images/top/event_btn_rollout.gif" alt="ショールームの詳しい場所" width="360" height="40" border="0" /></a></p>
</div>

</div>
=================リフォームイベント案内=================== -->

</div>
<!-- ======================右コンテンツここまで======================= -->
<?php get_sidebar(); ?>
<!-- ======================コンテンツここまで======================= -->
<?php get_footer(); ?>
