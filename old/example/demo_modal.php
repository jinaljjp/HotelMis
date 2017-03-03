

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>SimpleModal Demos  /  Eric Martin / ericmmartin.com</title>

<meta name="author" content="Eric Martin"/>
<meta name="keywords" content="eric martin, simplemodal, wordpress, jquery, ui architect, web standards, usability, consulting, php, modal"/>
<meta name="description" content="The blog, projects and photography of Eric Martin; web application architect and developer; husband, father, entrepreneur and photographer; creator of @SimpleModal, SMCF, @TweetUI and emAlbum"/>

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
<link rel="alternate" type="application/rss+xml" title="Eric Martin RSS Feed" href="http://www.ericmmartin.com/feed/" />
<link rel="pingback" href="http://www.ericmmartin.com/wordpress/xmlrpc.php" />

<link rel='stylesheet' id='simplemodal-login-css'  href='http://www.ericmmartin.com/wordpress/wp-content/plugins/simplemodal-login/css/osx.css?ver=1.0.7' type='text/css' media='screen' />
<link rel='stylesheet' id='emm-v3-css'  href='http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/style.css?ver=1.0.16' type='text/css' media='all' />
<link rel='stylesheet' id='simplemodal-demos-css'  href='http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/demos/demos.css?ver=1.0.4' type='text/css' media='all' />
<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js?ver=1.8.3'></script>
<link rel='prev' title='SimpleModal Contact Form (SMCF)' href='http://www.ericmmartin.com/projects/smcf/' />
<link rel='next' title='WP-Paginate' href='http://www.ericmmartin.com/projects/wp-paginate/' />
<link rel='canonical' href='http://www.ericmmartin.com/projects/simplemodal-demos/' />
<link rel='shortlink' href='http://wp.me/PednN-cy' />

</head>
<body id="projects">
<!-- BuySellAds.com Ad Code -->
<script type="text/javascript">
(function(){
  var bsa = document.createElement('script');
     bsa.type = 'text/javascript';
     bsa.async = true;
     bsa.src = '//s3.buysellads.com/ac/bsa.js';
  (document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);
})();
</script>
<!-- END BuySellAds.com Ad Code -->
<div id="ie6" style="display:none;"><h2>Dear IE6 User,</h2>I apologize if my site looks bad in your browser; I wanted to make it nice for you, I really did.<br/>Perhaps you'd like to upgrade to a modern, standards compliant browser? Thank you for your understanding.</div>
<div class="header-wrapper" id="top">
	<div id="header">
		<div id="logo">
			<h1>Eric Martin - The blog, projects and photography of Eric Martin</h1>
			<a href="/"><img src="http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/images/ericmartin.png" alt="Eric Martin" height="50" width="244" /></a>
		</div>
		<div id="menu">
			<ul><li class='home'><a href='http://www.ericmmartin.com' >home<img src='http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/images/home.png' alt='home' style='display:none;' /></a></li>
<li class='blog'><a href='http://www.ericmmartin.com/blog/' >blog<img src='http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/images/blog.png' alt='blog' style='display:none;' /></a></li>
<li class='projects'><a href='http://www.ericmmartin.com/projects/'  class='current'>projects<img src='http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/images/projects.png' alt='projects' style='display:none;' /></a></li>
<li class='photography'><a href='http://www.ericmmartin.com/photography/' >photography<img src='http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/images/photography.png' alt='photography' style='display:none;' /></a></li>
<li class='about'><a href='http://www.ericmmartin.com/about/' >about<img src='http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/images/about.png' alt='about' style='display:none;' /></a></li>
<li class='contact'><a href='http://www.ericmmartin.com/contact/' >contact<img src='http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/images/contact.png' alt='contact' style='display:none;' /></a></li>
</ul>		</div>
	</div>
</div>
<div id="wrapper">


	<div id="content">

		<div class='topnav nav'>
	<a href='http://www.ericmmartin.com'>home</a> / <a href='http://www.ericmmartin.com/projects/'>projects</a> / <span>SimpleModal Demos</span></div>
				
		<div class="project">

			<div class="content">

				<div class="entry">

					<div id="simplemodal-demos">
<div class="summary">
<p>The following demos are intended to illustrate the flexibility of SimpleModal. </p>
<p>Note: The Contact Form demo needs to be run from a web server and requires PHP.</p>
<p><a title="Download SimpleModal" class="button" href="http://code.google.com/p/simplemodal/downloads/list">Download SimpleModal</a> <a title="SimpleModal Project Page" class="button" href="/projects/simplemodal/">SimpleModal Project Page</a>
	</div>
<div id='basic-modal'>
<h2>Basic Modal Dialog</h2>
<p>A basic modal dialog with minimal styling and without any additional settings. There are a few CSS attributes set internally by SimpleModal, however, SimpleModal relies mostly on external CSS for the look and feel.</p>
<p><a href="#" class="demo button">Demo</a> <a href="http://simplemodal.googlecode.com/files/simplemodal-demo-basic-1.4.4.zip" class="button">Download</a></p>
</p></div>
<div id="basic-modal-content">
<h3>Basic Modal Dialog</h3>
<p>For this demo, SimpleModal is using this "hidden" data for its content. You can also populate the modal dialog with standard HTML or with DOM element(s).</p>
<p>Examples:</p>
<p><code>$('#basicModalContent').modal(); // jQuery object; this demo</code><code>$.modal(document.getElementById('basicModalContent')); // DOM</code><code>$.modal('&lt;p&gt;&lt;b&gt;HTML&lt;/b&gt; elements&lt;/p&gt;'); // HTML</code></p>
<p><a href='http://www.ericmmartin.com/projects/simplemodal'>More details...</a></p>
</p></div>
<div id='contact-form'>
<h2>Contact Form</h2>
<p>A contact form built on SimpleModal. Demonstrates the use of the <code>onOpen</code>, <code>onShow</code> and <code>onClose</code> callbacks, as well as the use of Ajax with SimpleModal.</p>
<p><a href="#" class="demo button">Demo</a> <a href="http://simplemodal.googlecode.com/files/simplemodal-demo-contact-1.4.4.zip" class="button">Download</a></p>
</p></div>
<div id='osx-dialog'>
<h2>OSX Style Dialog</h2>
<p>A modal dialog configured to behave like an OSX dialog. Demonstrates the use of the <code>onOpen</code> and <code> onClose</code> callbacks as well as a handful of options, and custom styling.</p>
<p>Inspired by <a href="http://okonet.ru/projects/modalbox/">ModalBox</a>, an OSX style dialog built with <a href="http://www.prototypejs.org/ ">prototype</a>.</p>
<p><a href="#" class="demo button">Demo</a> <a href="http://simplemodal.googlecode.com/files/simplemodal-demo-osx-1.4.4.zip" class="button">Download</a></p>
</p></div>
<div id="osx-modal-content">
<div id="osx-modal-title">OSX Style Modal Dialog</div>
<div class="close"><a href="#" class="simplemodal-close">X</a></div>
<div id="osx-modal-data">
<h2>Hello!</h2>
<p>SimpleModal gives you the flexibility to build whatever you can envision, while shielding you from related cross-browser issues inherent with UI development.</p>
<p>As you can see by this example, SimpleModal can be easily configured to behave like an OSX dialog. With a handful options, 2 custom callbacks and some styling, you have a visually appealing dialog that is ready to use!</p>
<p><button class="simplemodal-close">Close</button> <span>(or press ESC or click the overlay)</span></p>
</p></div>
</p></div>
<div id='flickr-badge'>
<h2>Flickr Badge Viewer</h2>
<p>A modal dialog configured to display images. Demonstrates the use of the <code>onOpen</code> and <code>onClose</code> callbacks as well as a handful of options, and custom styling.</p>
<p>The viewer also includes keyboard navigation; Previous: <code>p</code> or <code>&larr;</code>, Next: <code>n</code> or <code>&rarr;</code>, Close Viewer: <code>ESC</code>.</p>
<p>To demo this, click on one of the Flickr thumbnails in the footer of this page</p>
<p><a href="http://simplemodal.googlecode.com/files/simplemodal-demo-gallery-1.4.4.zip" class="button">Download</a></p>
</p></div>
<div id='confirm-dialog'>
<h2>Confirm Override</h2>
<p>A modal dialog override of the JavaScript confirm function. Demonstrates the use of <code>onShow</code> as well as how to display a modal dialog confirmation instead of the default JavaScript confirm dialog.</p>
<p><a href="#" class="demo button">Demo</a> <a href="http://simplemodal.googlecode.com/files/simplemodal-demo-confirm-1.4.4.zip" class="button">Download</a></p>
</p></div>
<div id='confirm'>
<div class='header'><span>Confirm</span></div>
<p class='message'>
<div class='buttons'>
<div class='no simplemodal-close'>No</div>
<div class='yes'>Yes</div>
</p></div>
</p></div>
</div>
	
				</div>

			</div>

		</div>
		
		<div class="bottomnav nav">
			<div class="social">
				<a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pub=emartin24"><img src="http://s7.addthis.com/static/btn/v2/lg-bookmark-en.gif" width="125" height="16" alt="Bookmark and Share" /></a>
			</div>
			<script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script>
			<a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="ericmmartin" data-related="simplemodal">Tweet</a>
		</div>
			

		
	</div>

<div id="sidebar">

	<div class="blog">
		<form method="get" id="search-form" action="http://www.ericmmartin.com/">
<div>
	<input type="text" value="" name="s" id="search-query" />
</div>
</form>
		<ul>
			<li class="twitter"><a href="http://twitter.com/ericmmartin">Follow me on Twitter!</a></li>
			<li class="rss"><a href="http://feeds.ericmmartin.com/emm/" rel="alternate" type="application/rss+xml">Subscribe to the EricMMartin.com Feed</a></li>
		</ul>
	</div>

	<div class="bsa">
	<!-- BuySellAds.com Zone Code -->
	<div id="bsap_1241198" class="bsarocks bsap_53ed2f06a1bb51cf19ba8851759e1176"></div>
	<!-- END BuySellAds.com Zone Code -->
	<br/>
		</div>

	
		<div class="recent">
		<h2>Recent Posts</h2>
		<ul>
					<li><a href="http://www.ericmmartin.com/wordpress-plugins-under-new-ownership/">WordPress Plugins Under New Ownership</a></li>
					<li><a href="http://www.ericmmartin.com/simplemodal-1-4-4-released/">SimpleModal 1.4.4 Released</a></li>
					<li><a href="http://www.ericmmartin.com/simplemodal-1-4-3-released/">SimpleModal 1.4.3 Released</a></li>
					<li><a href="http://www.ericmmartin.com/simplemodal-1-4-1-released/">SimpleModal 1.4.1 Released</a></li>
					<li><a href="http://www.ericmmartin.com/wp-paginate-1-2-released/">WP-Paginate 1.2 Released</a></li>
					<li><a href="http://www.ericmmartin.com/simplemodal-login-1-0-released/">SimpleModal Login 1.0 Released</a></li>
					<li><a href="http://www.ericmmartin.com/simplemodal-1-3-5-released/">SimpleModal 1.3.5 Released</a></li>
					<li><a href="http://www.ericmmartin.com/simplemodal-1-3-4-released/">SimpleModal 1.3.4 Released</a></li>
				</ul>
	</div>
		
	<div class="recent">
		<h2>Popular Posts</h2>
		<ul>
					<li><a href="http://www.ericmmartin.com/wordpress-pumpkin/">WordPress Pumpkin</a></li>
					<li><a href="http://www.ericmmartin.com/simplemodal-1-4-1-released/">SimpleModal 1.4.1 Released</a></li>
					<li><a href="http://www.ericmmartin.com/conditional-pagepost-navigation-links-in-wordpress-redux/">Conditional page/post navigation links in WordPress (redux)</a></li>
					<li><a href="http://www.ericmmartin.com/5-tips-for-using-jquery-with-wordpress/">5 Tips For Using jQuery with WordPress</a></li>
					<li><a href="http://www.ericmmartin.com/simplemodal-1-4-4-released/">SimpleModal 1.4.4 Released</a></li>
					<li><a href="http://www.ericmmartin.com/dropbox-beta-invites/">Dropbox Beta Invites</a></li>
					<li><a href="http://www.ericmmartin.com/running-ubuntu-710-in-vmware-player/">Running Ubuntu 7.10 in VMWare Player</a></li>
					<li><a href="http://www.ericmmartin.com/simplemodal-1-4-3-released/">SimpleModal 1.4.3 Released</a></li>
				</ul>
	</div>
	
	<div class="bloginfo">
		<div class="topics">
			<h2>Topics</h2>
			<ul>
							<li><a href="http://www.ericmmartin.com/tag/browsers/">Browsers</a><span>(5)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/bugs/">Bugs</a><span>(9)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/frameworks/">Frameworks</a><span>(3)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/java/">Java</a><span>(2)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/javascript/">JavaScript</a><span>(3)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/jquery/">jQuery</a><span>(12)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/opinion/">Opinion</a><span>(4)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/other/">Other</a><span>(4)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/personal/">Personal</a><span>(8)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/photography/">Photography</a><span>(1)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/php/">PHP</a><span>(3)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/simplemodal/">SimpleModal</a><span>(26)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/software/">Software</a><span>(5)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/web/">Web</a><span>(13)</span></li>
							<li><a href="http://www.ericmmartin.com/tag/wordpress/">WordPress</a><span>(16)</span></li>
						</ul>
			<br/>
		</div>
	
		<div class="archives">
			<h2>Archives</h2>
			<ul>
							<li><a href="http://www.ericmmartin.com/2014/">2014</a><span>(1)</span></li>
							<li><a href="http://www.ericmmartin.com/2013/">2013</a><span>(1)</span></li>
							<li><a href="http://www.ericmmartin.com/2012/">2012</a><span>(1)</span></li>
							<li><a href="http://www.ericmmartin.com/2010/">2010</a><span>(6)</span></li>
							<li><a href="http://www.ericmmartin.com/2009/">2009</a><span>(22)</span></li>
							<li><a href="http://www.ericmmartin.com/2008/">2008</a><span>(28)</span></li>
							<li><a href="http://www.ericmmartin.com/2007/">2007</a><span>(15)</span></li>
						</ul>
			<br/>
		</div>
	</div>

</div>

</div>
<div id="spotlight-bottom">
	<a href="#top" title="Top"><img src="http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/images/emm.png" class="emm" alt="Eric Martin" /></a>
</div>
<div id="footer-wrapper">
	<div id="footer">
		<div class="twitter">
			<a class="twitter-logo" href="http://twitter.com/ericmmartin"><img src="http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/images/twitter.gif" alt="Twitter" /></a>
						<div class="xtwitter-info">You can find me on Twitter as <a href="http://twitter.com/ericmmartin">@ericmmartin</a></div>
		</div>
		<div class="flickr">
			<a class="flickr-logo" href="http://www.flickr.com/photos/ericmmartin/"><img src="http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/images/flickr.gif" alt="Flickr" /></a>
						<div class="flickr_badge_image"><a href="https://www.flickr.com/photos/ericmmartin/11437469343/"><img width="75" height="75" title="La'aloa Bay" alt="La'aloa Bay" src="https://farm4.static.flickr.com/3667/11437469343_14b4b8d265_s.jpg"/></a></div>
						<div class="flickr_badge_image"><a href="https://www.flickr.com/photos/ericmmartin/11405477163/"><img width="75" height="75" title="Buddha Point" alt="Buddha Point" src="https://farm8.static.flickr.com/7380/11405477163_b821977878_s.jpg"/></a></div>
						<div class="flickr_badge_image"><a href="https://www.flickr.com/photos/ericmmartin/11319915496/"><img width="75" height="75" title="Ocean View" alt="Ocean View" src="https://farm4.static.flickr.com/3690/11319915496_f3b3814ae1_s.jpg"/></a></div>
						<div class="flickr_badge_image"><a href="https://www.flickr.com/photos/ericmmartin/8274130519/"><img width="75" height="75" title="Swing" alt="Swing" src="https://farm9.static.flickr.com/8083/8274130519_941c389a56_s.jpg"/></a></div>
						<div class="flickr_badge_image"><a href="https://www.flickr.com/photos/ericmmartin/6932769473/"><img width="75" height="75" title="Golden Gate Bridge Panorama" alt="Golden Gate Bridge Panorama" src="https://farm8.static.flickr.com/7066/6932769473_c89bbdd11b_s.jpg"/></a></div>
						<br/>
		</div>
		<br/>
		<div class="copyright"><div class="keyboard-shortcuts"><a href="#shortcuts" class="shortcuts"><u>K</u>eyboard Shortcuts</a></div>All content &amp; design &copy; 2001-2015 Eric Martin - <a rel="license" href="http://creativecommons.org/licenses/by-sa/3.0/us/">Some Rights Reserved</a> <span style='display:none'><a class="simplemodal-login" href="http://www.ericmmartin.com/wordpress/wp-login.php">Log in</a></span></div>
	</div>
<div id="simplemodal-login-form" style="display:none">
	<form name="loginform" id="loginform" action="http://www.ericmmartin.com/wordpress/wp-login.php" method="post">
		<div class="title">Login</div>
		<div class="simplemodal-login-fields">
		<p>
			<label>Username<br />
			<input type="text" name="log" class="user_login input" value="" size="20" tabindex="10" /></label>
		</p>
		<p>
			<label>Password<br />
			<input type="password" name="pwd" class="user_pass input" value="" size="20" tabindex="20" /></label>
		</p>
		<p class="forgetmenot"><label><input name="rememberme" type="checkbox" id="rememberme" class="rememberme" value="forever" tabindex="90" /> Remember Me</label></p>
		<p class="submit">
			<input type="submit" name="wp-submit" value="Log In" tabindex="100" />
			<input type="button" class="simplemodal-close" value="Cancel" tabindex="101" />
			<input type="hidden" name="testcookie" value="1" />
		</p>
		<p class="nav">
			</p>
			</div>
			<div class="simplemodal-login-activity" style="display:none;"></div>
		</form></div><script type='text/javascript' src='http://www.ericmmartin.com/wordpress/wp-content/plugins/simplemodal-login/js/jquery.simplemodal.js?ver=1.4.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var SimpleModalLoginL10n = {"shortcut":"true","logged_in":"false","admin_url":"http:\/\/www.ericmmartin.com\/wordpress\/wp-admin\/","empty_username":"<strong>ERROR<\/strong>: The username field is empty.","empty_password":"<strong>ERROR<\/strong>: The password field is empty.","empty_email":"<strong>ERROR<\/strong>: The email field is empty.","empty_all":"<strong>ERROR<\/strong>: All fields are required."};
/* ]]> */
</script>
<script type='text/javascript' src='http://www.ericmmartin.com/wordpress/wp-content/plugins/simplemodal-login/js/osx.js?ver=1.0.7'></script>
<script type='text/javascript' src='http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/scripts/jquery.plugins.js?ver=1.0.3'></script>
<script type='text/javascript' src='http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/scripts/emm.js?ver=1.0.5'></script>
<script type='text/javascript' src='http://s7.addthis.com/js/250/addthis_widget.js?pub=emartin24&#038;ver=3.7.11'></script>
<script type='text/javascript' src='http://www.ericmmartin.com/wordpress/wp-content/themes/emm-v3/demos/demos.js?ver=1.0.3'></script>
<!--stats_footer_test--><script src="http://stats.wordpress.com/e-201545.js" type="text/javascript"></script>
<script type="text/javascript">
st_go({blog:'3388039',v:'ext',post:'778'});
var load_cmc = function(){linktracker_init(3388039,778,2);};
if ( typeof addLoadEvent != 'undefined' ) addLoadEvent(load_cmc);
else load_cmc();
</script>
</div>
<div id="shortcuts-wrapper">
	<div id="shortcuts">
		<div><span>1</span>home</div><div><span>2</span>blog</div><div><span>3</span>projects</div><div><span>4</span>photography</div><div><span>5</span>about</div><div><span>6</span>contact</div><div><span>s</span>search</div><div><span>c</span>comment</div><div><span>p/&larr;</span>previous</div><div><span>n/&rarr;</span>next</div><div><span>t</span>top</div>	</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-2691485-4");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
</html>

<!-- Dynamic Page Served (once) in 0.176 seconds -->
<!-- Cached page served by WP-Cache -->
