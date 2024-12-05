<!--
Desing by Emreylcz
Discord: ＤＩＳＳＹ#0001
-->
<footer class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<figure class="footer-logo">
						<a href="#"><img src="https://i.hizliresim.com/4ekp602.png" height="150px" width="35%" alt="logo"></a>
					</figure>

					<nav class="footer-navigation">
						<ul class="flex flex-wrap justify-content-center align-items-center">
							<li><a href="#">Anasayfa</a></li>
							<li><a href="#biz-kimiz">Biz Kimiz?</a></li>
							<li><a href="#oyundan-kareler">Oyundan Kareler</a></li>
							<li><a href="#neden-nv-roleplay">Neden VERSİA ROLEPLAY?</a></li>
							<li><a href="#ekibimiz">Ekibimiz</a></li>
							<li><a href="#sunucu-durumu">Sunucu Durumu</a></li>
							<li><a href="#bize-ulasin">Bize Ulaşın</a></li>
						</ul>
					</nav>

					<span style="color: white;">&copy; 2020 VERSİA ROLEPLAY | Design by</span> <a href="https://www.instagram.com/emreylcz.jpg/?hl=tr" target="_blank" style="background: rgb(129,10,175); color: white; padding: 2px 5px; border-radius: 4px; letter-spacing: 0px; text-decoration: none;"> DİSSY</a> </p>

					<div class="footer-social">
						<ul class="flex flex-wrap justify-content-center align-items-center">
							<li><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						</ul>
					</div>

				</div>
			</div>
		</div>

</footer>

<div class="back-to-top flex justify-content-center align-items-center">
	<span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg"><path d="M1395 1184q0 13-10 23l-50 50q-10 10-23 10t-23-10l-393-393-393 393q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l466 466q10 10 10 23z"/></svg></span>
</div>


	<!--***********************************************************************************************-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135901577-2"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-135901577-2');
	</script>
	<!--***********************************************************************************************-->
	<script src="https://www.delac.io/wow/dist/wow.min.js"></script>
	<script>
		new WOW().init();
	</script>
	<!--***********************************************************************************************-->
	<script type='text/javascript' src='js/jquery.js'></script>
	<!--===============================================================================================-->	
	<script type='text/javascript' src='js/masonry.pkgd.min.js'></script>
	<!--===============================================================================================-->	
	<script type='text/javascript' src='js/jquery.collapsible.min.js'></script>
	<!--===============================================================================================-->	
	<script type='text/javascript' src='js/swiper.min.js'></script>
	<!--===============================================================================================-->	
	<script type='text/javascript' src='js/jquery.countdown.min.js'></script>
	<!--===============================================================================================-->	
	<script type='text/javascript' src='js/circle-progress.min.js'></script>
	<!--===============================================================================================-->	
	<script type='text/javascript' src='js/jquery.countTo.min.js'></script>
	<!--===============================================================================================-->	
	<script type='text/javascript' src='js/custom.js'></script>
	<!--===============================================================================================-->	
	<div id="uyari" title="DİSSY" style="display:none;">
		<p>
			Bu dialog kutusu sayfanın açılışında kullanıcılara gösterilmekteidr.
		</p>
		<img src="https://source.unsplash.com/random" width="100%">
	</div>         
	<!--===============================================================================================-->	
	<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
	<!--===============================================================================================-->	
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
	<!--===============================================================================================-->	
	<script>
		$(function(){
                // sayfa açılışında dialog kutusunun gelmesi için her hangi bir buton için yerleştirmedik
                $("#uyari").dialog({
                    width:600, //dialog kutusunun genişliği
                    modal:true, //arkaplanın koyu olması
                    autoOpen:false, //gerek yok ama otomatik açılması için
                    position:  { my: "center top", at: "center top" }, //konum
                    show: { effect: "scale", duration: 500 },
                    hide: { effect: "scale", duration: 1000 }
                });
            })

    </script>
    <!--===============================================================================================-->	
    <script>
			document.onkeydown = function(e) {
				if (e.ctrlKey && 
					(
						e.keyCode === 85 || 
						e.keyCode === 117)) {
					return false;
			} else {
				return true;
			}
		};
		$(document).keypress("u",function(e) {
			if(e.ctrlKey)
			{
				return false;
			}
			else
			{
				return true;
			}
		});
	</script>
    <!--===============================================================================================-->	
    <script type="text/javascript">
        	var gallery = document.querySelector('#gallery');
        	var getVal = function (elem, style) { return parseInt(window.getComputedStyle(elem).getPropertyValue(style)); };
        	var getHeight = function (item) { return item.querySelector('.content').getBoundingClientRect().height; };
        	var resizeAll = function () {
        		var altura = getVal(gallery, 'grid-auto-rows');
        		var gap = getVal(gallery, 'grid-row-gap');
        		gallery.querySelectorAll('.gallery-item').forEach(function (item) {
        			var el = item;
        			el.style.gridRowEnd = "span " + Math.ceil((getHeight(item) + gap) / (altura + gap));
        		});
        	};
        	gallery.querySelectorAll('img').forEach(function (item) {
        		item.classList.add('byebye');
        		if (item.complete) {
        			console.log(item.src);
        		}
        		else {
        			item.addEventListener('load', function () {
        				var altura = getVal(gallery, 'grid-auto-rows');
        				var gap = getVal(gallery, 'grid-row-gap');
        				var gitem = item.parentElement.parentElement;
        				gitem.style.gridRowEnd = "span " + Math.ceil((getHeight(gitem) + gap) / (altura + gap));
        				item.classList.remove('byebye');
        			});
        		}
        	});
        	window.addEventListener('resize', resizeAll);
        	gallery.querySelectorAll('.gallery-item').forEach(function (item) {
        		item.addEventListener('click', function () {        
        			item.classList.toggle('full');        
        		});
        	}); 
    </script>
    <!--===============================================================================================-->	
        	

</body>
</html>