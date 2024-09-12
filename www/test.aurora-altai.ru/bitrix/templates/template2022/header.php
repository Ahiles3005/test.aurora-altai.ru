<?
$SETTINGS = array();
$SETTINGS['BODY_CLASS'] = "inner-page";
if($APPLICATION->GetCurPage() == "/"){						$SETTINGS['HEADER_CLASS'] = "index";
	$SETTINGS['BODY_CLASS'] = "index";
}
if(
	CSite::InDir("/rooms/") &&
	strlen($APPLICATION->GetCurPage()) > strlen("/rooms/"))	$SETTINGS['HEADER_CLASS'] = "nomer";
if(
	(
		!CSite::InDir("/rooms/") &&
		$APPLICATION->GetCurPage() != "/"
	) ||
	$APPLICATION->GetCurPage() == "/rooms/"
)															$SETTINGS['MAIN_CLASS'] = "container";
elseif(CSite::InDir("/rooms/"))								$SETTINGS['MENU_CLASS'] = "white-text";
if(
	//!CSite::InDir("/rooms/") &&
	$APPLICATION->GetCurPage() != "/"
)															$SETTINGS['SHOW_FORM'] = true;

if(CSite::InDir("/about/"))									$SETTINGS['LEFT_MENU'] = true;
if(CSite::InDir("/therapy/"))								$SETTINGS['LEFT_MENU'] = true;
if(CSite::InDir("/doctors/"))								$SETTINGS['LEFT_MENU'] = true;

//if(strpos($APPLICATION->GetCurPage(),"/about/")!==false)	$SETTINGS['NEED_ASIDE_MENU'] = true;
//if(strpos($APPLICATION->GetCurPage(),"/therapy/")!==false)	$SETTINGS['NEED_TOP_MENU'] = true;

if (stripos($APPLICATION->GetCurUri(), 'yd_ad_id')) {
	header("HTTP/1.1 301 Moved Permanently");
	header('Location: /404.php');
	die();
}

?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<title><?$APPLICATION->ShowTitle();?></title>

	<link rel="stylesheet icon" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/css/style.css" media="screen">
	<link rel="stylesheet icon" type="text/css" href="/bitrix/templates/template2022/css/custom.css" media="screen">
	<link rel="icon" href="/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name='yandex-verification' content='6fe556e970e385b6' />
	<meta name='yandex-verification' content='9a41ad80caacd87f' />
	<meta name="google-site-verification" content="86_g5gXrkY7OvrPaEJ0Y3wZY1xOBdcGufDGjQUI9fcA" />
	<meta name="cmsmagazine" content="996bfde9a65c1de059ad6f946ad2f863" />

	<?
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/fonts/Corbel/stylesheet.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/normalize.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/bootstrap5/bootstrap.min.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.min.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/swiper.min.css");
	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/libs/bootstrap-datepicker/css/bootstrap-datepicker3.min.css");
	$APPLICATION->SetAdditionalCSS("https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css");

//$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery-3.3.1.min.js");
	$APPLICATION->AddHeadScript("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js");
//	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.maskedinput.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.mask.js");
//	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/swiper.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/libs/bootstrap5/bootstrap.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/libs/bootstrap-datepicker/js/bootstrap-datepicker.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/libs/bootstrap-datepicker/locales/bootstrap-datepicker.ru.min.js");
	$APPLICATION->AddHeadScript("https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/script.js");
//	$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/custom.css");
	$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/custom.js");

	$APPLICATION->ShowHead();
	?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.js" integrity="sha512-hRhHH3+D9xVKPpodEiYzHWIG8CWbCjp7LCdZ00K3/6xsdC3iT0OlPJLIwxSMEl07gya1Ae8iAqXjMMLpzqqh0w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/custom.css?r=<?=rand()?>"/>
<!-- start TL head script -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5HJQB8J');</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-59ZZT43W');</script>
<!-- End Google Tag Manager -->

<script type='text/javascript'>
    (function(w) {
        var q = [
            ['setContext', 'TL-INT-test.aurora-altai.ru-new', 'ru']
        ];
        var t = w.travelline = (w.travelline || {}),
            ti = t.integration = (t.integration || {});
        ti.__cq = ti.__cq? ti.__cq.concat(q) : q;
        if (!ti.__loader) {
            ti.__loader = true;
            var d = w.document,
                p = d.location.protocol,
                s = d.createElement('script');
s.type = 'text/javascript';
            s.async = true;
            s.src = (p == 'https:' ? p : 'http:') + '//ibe.tlintegration.com/integration/loader.js';
            (d.getElementsByTagName('head')[0] || d.getElementsByTagName('body')[0]).appendChild(s);
        }
    })(window);
</script>
<!-- end TL head script -->
<script type="text/javascript" async src="https://app.comagic.ru/static/cs.min.js?k=AAscYKYZ_fMLLkDaDXlfGwGxGWG12RNq"></script>
</head>
<body class="<?=$SETTINGS['BODY_CLASS']?>">
<?/*<!-- Yandex.Metrika counter --> <script type="text/javascript" >  !function(e,t,a,n,c,m,r){e.ym=e.ym||function(){(e.ym.a=e.ym.a||[]).push(arguments)},e.ym.l=1*new Date,m=t.createElement(a),r=t.getElementsByTagName(a)[0],m.async=1,m.src="https://mc.yandex.ru/metrika/tag.js",r.parentNode.insertBefore(m,r)}(window,document,"script"),ym(57343993,"init",{clickmap:!0,trackLinks:!0,accurateTrackBounce:!0});</script>*/?>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HJQB8J"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-59ZZT43W"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();
   for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
   k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(30554622, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true,
        ecommerce:"dataLayer"
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/30554622" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->


<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-129766215-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-129766215-1');
</script>


<script src="//code.jivo.ru/widget/PvRvgHsB2W" async></script>

<!-- /Yandex.Metrika counter -->
<?$APPLICATION->ShowPanel();?>
	<div class="wrapper">
		<header class="header <?=$SETTINGS['HEADER_CLASS']?>">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<nav class="navbar navbar-expand-lg <?=$SETTINGS['MENU_CLASS']?>">
							<a class="navbar-brand" href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt=""></a>
							<div class="mob">
								<div class="mob-menu-right">
									<div class="mob-cnt">
										<!--a href="https://wa.me/79833557774"  target=_blank style=""><svg width=28 height=28 enable-background="new 0 0 128 128"  viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x36__stroke"><g id="WhatsApp"><rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128" width="128"/><path clip-rule="evenodd" d="M46.114,32.509    c-1.241-2.972-2.182-3.085-4.062-3.161c-0.64-0.037-1.353-0.074-2.144-0.074c-2.446,0-5.003,0.715-6.546,2.295    c-1.88,1.919-6.545,6.396-6.545,15.576c0,9.181,6.695,18.06,7.598,19.303c0.941,1.24,13.053,20.354,31.86,28.144    c14.707,6.095,19.071,5.53,22.418,4.816c4.89-1.053,11.021-4.667,12.564-9.03c1.542-4.365,1.542-8.09,1.09-8.88    c-0.451-0.79-1.693-1.24-3.573-2.182c-1.88-0.941-11.021-5.456-12.751-6.058c-1.693-0.639-3.31-0.413-4.588,1.393    c-1.806,2.521-3.573,5.08-5.003,6.622c-1.128,1.204-2.972,1.355-4.514,0.715c-2.069-0.864-7.861-2.898-15.008-9.256    c-5.53-4.928-9.291-11.06-10.381-12.904c-1.091-1.881-0.113-2.973,0.752-3.988c0.941-1.167,1.843-1.994,2.783-3.086    c0.941-1.091,1.467-1.655,2.069-2.935c0.64-1.241,0.188-2.521-0.263-3.462C51.418,45.414,47.657,36.233,46.114,32.509z M63.981,0    C28.699,0,0,28.707,0,63.999c0,13.996,4.514,26.977,12.187,37.512L4.212,125.29l24.6-7.862C38.93,124.125,51.004,128,64.019,128    C99.301,128,128,99.291,128,64.001c0-35.292-28.699-63.999-63.981-63.999h-0.037V0z" fill="#67C15E" fill-rule="evenodd" id="WhatsApp_1_"/></g></g></svg></a>
										<a href="tel:88007009855" style="margin-left:5px;"><img src="<?=SITE_TEMPLATE_PATH?>/images/tel-black-icon.svg" alt=""></a -->
									</div>
									<div class="mob-burger">
										<span class="one"></span>
										<span class="two"></span>
										<span class="three"></span>
									</div>
								</div>
							</div>
							<div class="navbar-collapse">
								<div class="mob">
									<div class="mob-menu-top">
										<a href="/" class="mob-logo"><img src="<?=SITE_TEMPLATE_PATH?>/images/mob-logo.png" alt=""></a>
										<div class="mob-menu-right">
											<?/*a href="/"><img src="<?=SITE_TEMPLATE_PATH?>/images/tel-white-icon.svg" alt=""></a*/?>
											<a href="#" class="menu-closer"><img src="<?=SITE_TEMPLATE_PATH?>/images/close-icon.svg" alt=""></a>
										</div>
									</div>
								</div>

                                <ul class="navbar-nav" >
                                    <li class="nav-item">
                                        <a class="nav-link" href="/price/">Путевки и цены</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/rooms/">Номера</a>
                                    </li>
                                    <li class="nav-item nav-main__item nav-main__item_has-sub">
                                        <a class="nav-link nav__ancor" href="/therapy/">Лечение
                                            <img class="menu-link" src="/bitrix/templates/template2022/images/link-arrow.svg">
                                        </a>

                                        <div class="nav__ancor-button"></div>
                                        <ul class="nav__dropdown_new">
                                            <li>
                                                <a href="/therapy/base/">Лечебная база</a>
                                            </li>
                                            <li>
                                                <a href="/therapy/procedures/">Перечень процедур </a>
                                            </li>
                                            <li>
                                                <a href="/therapy/doctors/">Наши врачи</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/resort/">Отдых</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/promo/">Акции</a>
                                    </li>
                                    <li class="nav-item nav-main__item nav-main__item_has-sub">
                                        <a class="nav-link nav__ancor" href="/about/">О нас
                                            <img class="menu-link" src="/bitrix/templates/template2022/images/link-arrow.svg">
                                        </a>
                                        <div class="nav__ancor-button"></div>
                                        <ul class="nav__dropdown_new">
                                            <li><a href="/about/" class="current">Санаторий "Аврора" </a></li>
                                            <li><a href="/about/dosug/">Досуг </a></li>
                                            <li><a href="/about/reviews/">Отзывы о санатории </a></li>
                                            <li><a href="/about/oplata/">Условия возврата и оплата </a></li>
                                            <li><a href="/about/restaurant/">Ресторан </a></li>
                                            <li><a href="/about/putevki/putevki.php">Виды Путевок </a></li>
                                            <li><a href="/dostavka/">Как добраться </a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="/contacts/">Контакты</a>
                                    </li>
                                </ul>


								<div class="nav-contact"><?/*tel:88007009855*/?>
									<!-- a href="tel:88007009855" class="nav-tel pc"><img src="<?=SITE_TEMPLATE_PATH?>/images/tel-icon-black.svg" alt=""> 8 800 700 98 55</a>
									<a href="tel:88007009855" class="nav-tel mob"><img src="<?=SITE_TEMPLATE_PATH?>/images/tel-icon-white.svg" alt=""> 8 800 700 98 55</a -->
									<!--div class="nav-socials pc">
										<a href="/"><img src="images/vk-black.svg" alt=""></a>
										<a href="/"><img src="images/ok-black.svg" alt=""></a>
									</div -->
									<!--div class="nav-socials mob">
										<a href="/"><img src="images/vk-white.svg" alt=""></a>
										<a href="/"><img src="images/ok-white.svg" alt=""></a>
									</div -->
									<!-- a href="/book-module/" class="nav-price blue-btn">Цены и бронирование</a -->
									<!-- a class="wa-link" href="https://wa.me/79833557774?" target=_blank><span>WhatsApp</span><svg width=24 height=24 enable-background="new 0 0 128 128"  viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x36__stroke"><g id="WhatsApp"><rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128" width="128"/><path clip-rule="evenodd" d="M46.114,32.509    c-1.241-2.972-2.182-3.085-4.062-3.161c-0.64-0.037-1.353-0.074-2.144-0.074c-2.446,0-5.003,0.715-6.546,2.295    c-1.88,1.919-6.545,6.396-6.545,15.576c0,9.181,6.695,18.06,7.598,19.303c0.941,1.24,13.053,20.354,31.86,28.144    c14.707,6.095,19.071,5.53,22.418,4.816c4.89-1.053,11.021-4.667,12.564-9.03c1.542-4.365,1.542-8.09,1.09-8.88    c-0.451-0.79-1.693-1.24-3.573-2.182c-1.88-0.941-11.021-5.456-12.751-6.058c-1.693-0.639-3.31-0.413-4.588,1.393    c-1.806,2.521-3.573,5.08-5.003,6.622c-1.128,1.204-2.972,1.355-4.514,0.715c-2.069-0.864-7.861-2.898-15.008-9.256    c-5.53-4.928-9.291-11.06-10.381-12.904c-1.091-1.881-0.113-2.973,0.752-3.988c0.941-1.167,1.843-1.994,2.783-3.086    c0.941-1.091,1.467-1.655,2.069-2.935c0.64-1.241,0.188-2.521-0.263-3.462C51.418,45.414,47.657,36.233,46.114,32.509z M63.981,0    C28.699,0,0,28.707,0,63.999c0,13.996,4.514,26.977,12.187,37.512L4.212,125.29l24.6-7.862C38.93,124.125,51.004,128,64.019,128    C99.301,128,128,99.291,128,64.001c0-35.292-28.699-63.999-63.981-63.999h-0.037V0z" fill="#67C15E" fill-rule="evenodd" id="WhatsApp_1_"/></g></g></svg></a -->
									<!-- a class="wa-link" href="/book-module/"><span>Забронировать</span --><!-- svg width=24 height=24 enable-background="new 0 0 128 128"  viewBox="0 0 128 128" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g id="_x36__stroke"><g id="WhatsApp"><rect clip-rule="evenodd" fill="none" fill-rule="evenodd" height="128" width="128"/><path clip-rule="evenodd" d="M46.114,32.509    c-1.241-2.972-2.182-3.085-4.062-3.161c-0.64-0.037-1.353-0.074-2.144-0.074c-2.446,0-5.003,0.715-6.546,2.295    c-1.88,1.919-6.545,6.396-6.545,15.576c0,9.181,6.695,18.06,7.598,19.303c0.941,1.24,13.053,20.354,31.86,28.144    c14.707,6.095,19.071,5.53,22.418,4.816c4.89-1.053,11.021-4.667,12.564-9.03c1.542-4.365,1.542-8.09,1.09-8.88    c-0.451-0.79-1.693-1.24-3.573-2.182c-1.88-0.941-11.021-5.456-12.751-6.058c-1.693-0.639-3.31-0.413-4.588,1.393    c-1.806,2.521-3.573,5.08-5.003,6.622c-1.128,1.204-2.972,1.355-4.514,0.715c-2.069-0.864-7.861-2.898-15.008-9.256    c-5.53-4.928-9.291-11.06-10.381-12.904c-1.091-1.881-0.113-2.973,0.752-3.988c0.941-1.167,1.843-1.994,2.783-3.086    c0.941-1.091,1.467-1.655,2.069-2.935c0.64-1.241,0.188-2.521-0.263-3.462C51.418,45.414,47.657,36.233,46.114,32.509z M63.981,0    C28.699,0,0,28.707,0,63.999c0,13.996,4.514,26.977,12.187,37.512L4.212,125.29l24.6-7.862C38.93,124.125,51.004,128,64.019,128    C99.301,128,128,99.291,128,64.001c0-35.292-28.699-63.999-63.981-63.999h-0.037V0z" fill="#67C15E" fill-rule="evenodd" id="WhatsApp_1_"/></g></g></svg--></a>
								</div>

								<div class="mob menu-address">
									<p>659900, Россия, Алтайский край,</p>
									<p>г. Белокуриха, ул. Славского, 53</p>
									<p>E-mail: aurora-san@mail.ru</p>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
				<?
				$APPLICATION->ShowViewContent("swiperBlock");
				?>
				<?
				$APPLICATION->ShowViewContent("headerTextBlock");
				?>



<main class="main mb-4 <?=$SETTINGS['MAIN_CLASS']?>">
	<?if($SETTINGS['SHOW_FORM']){?>
		<section class="bron-number <?if(strstr($_SERVER['REQUEST_URI'],"/book-module/")) {} else {echo "mb-5";}?> <?=(!$SETTINGS['MAIN_CLASS'])?"container":""?>">
			<div class="row">
				<div class="col-lg-12">
<?
	if(strstr($_SERVER['REQUEST_URI'],"/book-module/")) {} else {
?>
<div class="travelline-block-launcher">
	<div class="sf-title-container">Бронирование номеров</div>
	<div class="sf-top-block-2">Получите гарантированное заселение прямо сейчас!</div>
	<a href="/book-module/" class="yellow-btn">Подобрать номер</a>
</div>
<?
	}
?>

<div class="travelline-block-container">
					<div class="bron-block">
						<!-- start TL Search form script -->
						<div id='block-search'>
							<div id='tl-search-form' class='tl-container'>
								<noindex><a href='http://www.travelline.ru/products/tl-hotel' rel='nofollow'>система онлайн-бронирования</a></noindex>
							</div>
						</div>
						<script type='text/javascript'>
							(function(w) {
								var q = [
									['setContext', 'TL-INT-test.aurora-altai.ru-new', 'ru'],
									['embed', 'search-form', {
										container: 'tl-search-form'
									}]
								];
                                var h=["ru-ibe.tlintegration.ru","ibe.tlintegration.ru","ibe.tlintegration.com"];
                                var t = w.travelline = (w.travelline || {}),
                                    ti = t.integration = (t.integration || {});
                                ti.__cq = ti.__cq? ti.__cq.concat(q) : q;
                                if (!ti.__loader) {
                                    ti.__loader = true;
                                    var d=w.document,c=d.getElementsByTagName("head")[0]||d.getElementsByTagName("body")[0];
                                    function e(s,f) {return function() {w.TL||(c.removeChild(s),f())}}
                                    (function l(h) {
                                        if (0===h.length) return; var s=d.createElement("script");
                                        s.type="text/javascript";s.async=!0;s.src="https://"+h[0]+"/integration/loader.js";
                                        s.onerror=s.onload=e(s,function(){l(h.slice(1,h.length))});c.appendChild(s)
                                    })(h);
                                }
                            })(window);

                            (function () {
                                var sf = document.querySelector('#tl-search-form');
                                sf.addEventListener('mouseover', function () {
                                    var utp = document.querySelector('#box-hover');
                                    utp.classList.remove('hide-out');
                                });
                                sf.addEventListener('mouseleave', function () {
                                    var utp = document.querySelector('#box-hover');
                                    utp.classList.add('hide-out');
                                })
                            })();
						</script>
						<!-- end TL Search form script -->
					</div>
</div>

				</div>
			</div>
		</section>
	<?}?>
	
<?if ($APPLICATION->GetCurDir() != '/') {?>
	<?$APPLICATION->IncludeComponent(
		"bitrix:breadcrumb", 
		"template1", 
		array(
			"PATH" => "",
			"SITE_ID" => "s1",
			"START_FROM" => "0",
			"COMPONENT_TEMPLATE" => "template1"
		),
		false
	);?>
<?}?>
	
<?if($SETTINGS['MAIN_CLASS']){?> <h1 class="my-3"><?$APPLICATION->ShowTitle('h1');?></h1> <?}?>

	<?if($SETTINGS['LEFT_MENU']){?>
		<section class="treatment-sec">
			<div class="row">
				<div class="col-lg-3">
					<div style="width:100% !important;" class="treatment-left">
						<?$APPLICATION->IncludeComponent(
							"bitrix:menu",
							"left",
							array(
								"COMPONENT_TEMPLATE" => "left",
								"ROOT_MENU_TYPE" => "left",
								"MENU_CACHE_TYPE" => "N",
								"MENU_CACHE_TIME" => "3600",
								"MENU_CACHE_USE_GROUPS" => "Y",
								"MENU_CACHE_GET_VARS" => array(
								),
								"MAX_LEVEL" => "1",
								"CHILD_MENU_TYPE" => "left",
								"USE_EXT" => "N",
								"DELAY" => "N",
								"ALLOW_MULTI_SELECT" => "N"
							),
							false
						);?>
					</div>
				</div>
				<div class="col-lg-9 treatment-block">
	<?}?>

	