<!DOCTYPE html>
<html lang="fr">
<head><meta charset="UTF-8"><title>TP 02 PHP</title></head>
<body>
<h1>TP 02 — PHP — Programmation Web 2 (2026/2027)</h1>
<ul>
    <li><a href="ex01.php">Exercice 1 : balises, commentaires, echo</a></li>
    <li><a href="ex02.php">Exercice 2 : variables et concaténation</a></li>
    <li><a href="ex03.php">Exercice 3 : constantes et calculs</a></li>
    <li><a href="ex04.php">Exercice 4 : types et conversions</a></li>
    <li><a href="ex05.php">Exercice 5 : if / elseif / else</a></li>
    <li><a href="ex06.php">Exercice 6 : switch</a></li>
    <li><a href="ex07.php">Exercice 7 : boucles for</a></li>
    <li><a href="ex08.php">Exercice 8 : while, do-while, break, continue</a></li>
    <li><a href="ex09.php">Exercice 9 : tableaux associatifs</a></li>
    <li>Exercice 10 : <a href="ex10_get.html">formulaire GET</a> | <a href="ex10_post.html">formulaire POST</a></li>
</ul>
<!-- Code injected by live-server -->
<script>
	// <![CDATA[  <-- For SVG support
	if ('WebSocket' in window) {
		(function () {
			function refreshCSS() {
				var sheets = [].slice.call(document.getElementsByTagName("link"));
				var head = document.getElementsByTagName("head")[0];
				for (var i = 0; i < sheets.length; ++i) {
					var elem = sheets[i];
					var parent = elem.parentElement || head;
					parent.removeChild(elem);
					var rel = elem.rel;
					if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
						var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
						elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
					}
					parent.appendChild(elem);
				}
			}
			var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
			var address = protocol + window.location.host + window.location.pathname + '/ws';
			var socket = new WebSocket(address);
			socket.onmessage = function (msg) {
				if (msg.data == 'reload') window.location.reload();
				else if (msg.data == 'refreshcss') refreshCSS();
			};
			if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
				console.log('Live reload enabled.');
				sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
			}
		})();
	}
	else {
		console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
	}
	// ]]>
</script>
</body>
</html>
