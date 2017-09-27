<!doctype html>
<html lang="en">

<head>

	<title>
		Example Title | su it --blog
	</title>

	<!-- meta -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="index, follow">

	<!-- main css -->
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<!-- desktop css -->
	<link rel="stylesheet" media="only screen and (min-width: 768px)" type="text/css" href="/css/desktop.css">

	<!-- favicon -->
	<link rel="icon" type="image/png" href="/icon/favicon_64.ico">

	<!-- font awesome -->
	<link rel="stylesheet" href="/css/font-awesome-4.7.0/css/font-awesome.min.css">

	<!-- highlight.js -->
	<link rel="stylesheet" href="/styles/atelier-forest-dark.css">
	<script src="/css/highlight.pack.js"></script>
	<script>
		hljs.initHighlightingOnLoad();
	</script>

</head>

<body>

	<div id="header">

	<div id="banner" class="canvas">

            <canvas height="50" width="200" id="animation_canvas_header">
            </canvas>

            <i class="fa fa-bars" aria-hidden="true" id="burger"></i>

            <div id="headline">
                <a href="/" target="_self">
                    $ su IT --blog
                </a>
                <div id="subtitle">
                    <span id="console">- we sudo everything</span>
                    <span class="cursor">|</span> -
                </div>
			</div>
			
			<a target="_self" href="/">
                <img alt="logo" src="/logo/logo_1.png" id="logo">
            </a>
        </div>

		<div id="menu">
			<ul>
				<li>
					<a href="/index.php?tag=linux;" target="_self">
						Linux
					</a>
				</li>
				<li>
					<a href="/index.php?tag=blender;" target="_self">
						Blender
					</a>
				</li>
				<li>
					<a href="/index.php?tag=memes;" target="_self">
						Memes
					</a>
				</li>
				<li>
					<a href="/index.php?tag=scripts;" target="_self">
						Scripts
					</a>
				</li>
				<li>
					<a href="/index.php?tag=various;" target="_self">
						Various
					</a>
				</li>
			</ul>
		</div>
	</div>

	<div id="body">

		<i class="fa fa-arrow-left" aria-hidden="true" id="back"> Back</i>

		<div id="background">
		</div>

		<div id="container">

			<div id="article">

				<h1>Headline 1</h1>
				<h2>Headline 2</h2>

				<div class="tags">
					<div class="tag_div">
                        <img src="/icon/hexagon.png" alt="tag" class="tag_img" />
                        <div class="tag_text"><i class="fa fa-clock-o" aria-hidden="true"></i> 50 min</div>
                    </div>
					<div class="tag_div">
						<img src="/icon/hexagon.png" alt="tag" class="tag_img" />
						<div class="tag_text">Linux</div>
					</div>
					<div class="tag_div">
						<img src="/icon/hexagon.png" alt="tag" class="tag_img" />
						<div class="tag_text">programming</div>
					</div>
					<div class="tag_div">
						<img src="/icon/hexagon.png" alt="tag" class="tag_img" />
						<div class="tag_text">lululululululu</div>
					</div>
					<div class="tag_div">
						<img src="/icon/hexagon.png" alt="tag" class="tag_img" />
						<div class="tag_text">programming</div>
					</div>
				</div>

				<img src="console.png" alt="console" class="image" style="
    float: right;
" />

				<hr>

				<div id="pre">

                    <h3>Voraussetzungen:</h3>
                    <ul>
                        <li>Schwierigkeitsgrad:
                            <br>-> Fortgeschritten</li>
                        <li>Skills:
                            <ul>
                                <li>Pure Data Programmierung</li>
                                <li>Linux-Basics</li>
                                <li>Leiterplattenbestückung (Löten, etc.)</li>
                                <li>Elektronikverständnis</li>
                            </ul>
                        </li>
                    </ul>

                    <hr>
                    <h3>Overview:</h3>

                    <ol>
						<li><a target="_self" href="#introduction">Introduction</a></li>
						<li>
							<ol>
								<li>
									<a target="_self" href="#zielsetzung">Zielsetzung</a>
								</li>
								<li>
									<a target="_self" href="#allgemeines">Allgemeines</a>
								</li>
							</ol>
						</li>
                        <li><a target="_self" href="#systemüberblick">Systemüberblick ThereOHM</a></li>
                    </ol>

                </div>

				<h1>
					Introduction
				</h1>

				<p>
					So in the progress of installing my Arch and ricing it, I also installed screenfetch.
					<br/> Screenfetch is a small program to get
				</p>
				<fieldset class="quote box">
					<legend>
						<i class="fa fa-quote-left" aria-hidden="true"></i>
					</legend>
					Example quote; link can be added afterwards if needed.
				</fieldset>

				<p>
					So you are using a script for GNU Linux that displays system information like Screenfetch or Archey, Screenfo or Neofetch. But don't you get bored to see the same distribution logo all the time?
					<br/> In this article, I'll show a very little bash script with a (much) impact.
				</p>

				<h2>
					Requirements
				</h2>

				<p>
					Here is a list of what you will need
				</p>

				<ul>
					<li>
						screenfetch, archey, screenfo, neofetch, or similar
					</li>
					<li>
						bash basics
					</li>
					<li>
						that's it, you are good to go :)
					</li>
				</ul>

				<p>
					sldkfhjkds lksdfjkldsjf k dskljf lkds flkdsjf klsdj fklds
					kldsjf  
					
				</p>
				<fieldset class="exclamation box">
					<legend>
						<i class="fa fa-exclamation-circle" aria-hidden="true"></i>
					</legend>
					Example quote; link can be added afterwards if needed.
				</fieldset>
				<p>
					sdflpks sdkf ölds f
					kldsjf 
				</p>

				<h1>
					Content
				</h1>

				<p>
					And now a random index to make things fun and different every time we call it.
				</p>

				<pre>
					<code class="bash">RAND=$[ $RANDOM % 70]
					</code>
					<code class="bash">os=("Alpine Linux" "Antergos" "Arch Linux" "Arch Linux - Old" "BLAG" "BunsenLabs" "CentOS" "Chakra" "Chapeau" "Chrome OS" "CrunchBang" "CRUX" "Debian" "Deepin" "LinuxDeepin" "Devuan" "elementary OS" "Exherbo" "Fedora" "Frugalware" "Fuduntu" "Funtoo" "Fux" "Gentoo" "gNewSense" "Jiyuu Linux" "Kali Linux" "KaOS" "KDE neon" "Kogaion" "Korora" "Mint" "LMDE" "Logos" "Mageia" "Mandriva" "Manjaro" "Netrunner" "NixOS" "openSUSE" "Parabola GNU/Linux-libre" "Pardus" "Parrot Security" "PCLinuxOS" "Peppermint" "Qubes OS" "Raspbian" "Red Hat Enterprise Linux" "ROSA" "Sabayon" "SailfishOS" "Scientific Linux" "Slackware" "Solus" "SparkyLinux" "SteamOS" "SwagArch" "Trisquel" "Ubuntu" "Viperr" "Void" "DragonFlyBSD" "FreeBSD" "NetBSD" "OpenBSD" "FreeBSD - Old" "Unknown" "Haiku" "Mac OS X" "Cygwin")
					</code>
					<code class="bash">screenfetch -A ${os[$RAND]} -w
					</code>
				</pre>

				<fieldset class="tldr box">
					<legend>
						<i class="fa fa-list-ul" aria-hidden="true"></i>
					</legend>
					tl;dr
					<br>
					short summary
				</fieldset>

				<p>
					It just calls screenfetch with one string of our array with the random index.
					<br/> The -w Flag ("-w Wrap long lines.") just to fit all information on a normal terminal window.
				</p>

				<fieldset class="info box">
					<legend>
						<i class="fa fa-info-circle" aria-hidden="true"></i>
					</legend>
					Example quote; link can be added afterwards if needed.
				</fieldset>

				<h1>
					Conclusion
				</h1>

				<p>
					And that's all you have to do. Now you can enjoy all the beautiful logos available. And every time a different one.
					<br/> I choose to put the code into my .bashrc so on every console I open, this code will be executed, but you also could make an alias which calls an bash script file with this code inside.
				</p>
				<fieldset class="warning box">
					<legend>
						<i class="fa fa-exclamation-triangle" aria-hidden="true"></i>
					</legend>
					Example quote; link can be added afterwards if needed.
				</fieldset>

				<img src="console.png" alt="console" class="image" />

				<hr/>

				<h2>
					[footer]
				</h2>

			</div>

		</div>

	</div>

	<div id="footer" class="canvas">
		<canvas height="50" width="200" id="animation_canvas_footer">
		</canvas>
		<div id="disclaimer">
			Disclaimer
			<br/> &copy; 2017
		</div>
	</div>

	<script src="/js/animation.js"></script>
	<script src="/js/cli_write.js"></script>
	<script src="/js/menu.js"></script>
	<script src="/js/scroll.js"></script>

</body>

</html>