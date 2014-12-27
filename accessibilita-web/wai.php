<?php
	$title="WAI - Assistive Technology - Informatizzando la Disabilità";
	$keywords="Assistive Technology, AT, accessibilità, tecnologia, wai, w3c";
	$description="WAI - iniziativa per il Web accessibile, ramo del W3C che si occupa di migliorare lʼaccessibilità del Web.";
?>
<?php include_once("../include/header.php") ?>
<?php include_once("../include/analytics.php") ?>
	<nav>
		<ul>
			<li class="prev"><a href="http://assistivetechnology.it/accessibilita-web/w3c"><< 3.2 - Il World Wide Web Consortium (W3C)</a> |</li>
			<li class="index"><a href="http://assistivetechnology.it/">Indice</a> |</li>
			<li class="next"><a href="http://assistivetechnology.it/accessibilita-web/wai-aria">3.3.1 WAI - Accessible Rich Internet Applications (WAI-ARIA) >></a></li>
		</ul>
	</nav>
	<article>
		<h1><span class="capitolo">Capitolo 3: Accessibilita' Web</span>3.3 Web Accessibility Initiative (WAI)</h1>
		<p>Con <em>Web Accessibility Initiative</em> (<em>Iniziativa per il Web Accessibile</em> in italiano) si intende il ramo del W3C che si occupa di migliorare lʼaccessibilità del <em>World Wide Web</em>. Questa iniziativa è stata pensata appositamente per garantire e tutelare lʼaccessibilità Web da parte di utenti con qualsiasi tipo di disabilità e, indirettamente, migliorarne anche la fruizione da parte di tutti gli utenti.</p>
		<p>Scopo principale del WAI è sviluppare linee guida e tecniche per semplificare e direzionare il lavoro di chi sviluppa materiale per il Web.</p>
		<p>Il <em>W3C</em> ha stilato una breve linea guida per facilitare la creazione di siti web accessibili mediante brevi consigli, il tutto si snoda su una lista di dieci punti:</p>
		<h3>1. Immagini ed animazioni</h3>
		<p><strong><em>Utilizzare l'attributo</em> alt <em>per descrivere la funzione di ogni elemento grafico.</em></strong></p>
		Quando ad esempio si inserisce un immagine allʼintero di una pagina web lo si fa mediante il tag <em>img</em>. Per capire meglio questo punto è opportuno specificare nel dettaglio il funzionamento del tag <em>img</em>.</p>
		<p>Il tag <em>img</em> ha una struttura molto semplice, per mostrare un immagine sarà solamente necessario impostare lʼattributo src con lʼindirizzo appunto dellʼimmagine:</p>
		<pre>
	<code>&lt;img src="my_image.gif" alt="la mia immagine" /&gt;</code>
		</pre>
		<p>Lʼattributo alt ha il compito di fornire al browser un testo alternativo qualora non fosse possibile la visualizzazione dellʼimmagine oppure nel caso la pagina venga letta da uno screen reader.</p>
		<p>In questo esempio sono rappresentati solo gli attributi essenziali, ve ne sono altri ma non di rilevante importanza per lʼaccessibilità.</p>
		<h3>2. Immagini cliccabili</h3>
		<p><strong><em>Utilizzare l'elemento</em> map <em>e descrivere le zone attive.</em></strong></p>
		<p>Lʼelemento <em>map</em> consente di definire un immagine con diverse aree cliccabili. Anche in questo caso, come già visto per le immagini, è opportuno aggiungere una descrizione alternativa ad ognuna delle aree cliccabili poste allʼinterno dellʼimmagine, per far questo sarà sufficiente lʼuso dellʼattributo <em>alt</em>.</p>
		<h3>3. Multimedia</h3>
		<p><strong><em>Fornire sottotitoli e trascrizioni per l'audio, e descrizione di filmati.</em></strong></p>
		<p>Questo aspetto risulta fondamentale per quanto riguarda lʼaccessibilità dei contenuti multimediali presenti su pagine Web da parte di utenti con problemi visivi o uditivi. La presenza di trascrizioni e descrizioni consente la fruibilità di tali contenuti mediante strumenti di Assistive Technology quali ad esempio gli <em>screen reader</em>.</p>
		<h3>4. Link ipertestuali</h3>
		<p><strong><em>Utilizzare enunciati che conservino il loro senso al di fuori del contesto. Per esempio, evitare «cliccare qui».</em></strong></p>
		<p>Link ipertestuali non propriamente definiti, come lʼesempio precedente, possono creare ambiguità non indicando dove porta effettivamente il collegamento.</p>
		<h3>5. Organizzazione</h3>
		<p><strong><em>Utilizzare titoli, liste e una struttura coerente. Utilizzare</em> CSS<sup id="cite_ref_1"><a href="#cite_note_1">[1]</a></sup> <em>per l'impaginazione.</em></strong></p>
		<p><em>CSS - Cascading Style Sheet</em> (Fogli di stile a cascata) è un semplice meccanismo per l'aggiunta dello stile (per es. caratteri, colori, spaziatura) ai documenti Web. Praticamente sono file, contenenti appunto lo stile delle pagine Web, atti a descrive lʼaspetto semantico, come appare e comʼè formattato, di pagine web (HTML e XHTML).</p>
		<p>Per un analisi più accurata dei CSS si rimanda ai capitoli successivi.</p>
		<h3>6. Figure e diagrammi</h3>
		<p><strong><em>Descriverli all'interno della pagina o utilizzare l'attributo</em> longdesc<em>.</em></strong></p>
		<p>Lʼattributo <em>longdesc</em> consente di specificare un URL di una pagina che contiene una lunga descrizione di un immagine. Svolge un compito analogo ad <em>alt</em> con la sola differenza che ne amplia le capacità descrittive, consentendo appunto di collegare una pagina o un documento appositi per la descrizione dellʼimmagine.</p>
		<pre>
	<code>&lt;img src="my_image.gif" alt="la mia immagine" longdesc="img.txt"/&gt;</code>
		</pre>
		<p>In questo esempio si può notare che è consigliabile definire lʼattributo <em>img</em> con una brevissima descrizione dellʼimmagine, solitamente alcune parole sono sufficienti, e delegare allʼattributo <em>longdesc</em> una descrizione più accurata.</p>
		<h3>7. Script, applet e plug-in</h3>
		<p><strong><em>Fornire una pagina alternativa quando tali funzionalità sono inaccessibili o non supportati.</em></strong></p>
		<p>Non tutti i browser supportano script, applet o plug-in vari e, in alcuni casi, lʼutente per svariati motivi può disabilitare il normale funzionamento di questi. Di conseguenza è sempre opportuno fornire delle descrizioni alternative agli elementi “esterni” inseriti allʼinterno delle pagine Web.</p>
		<p>Lʼesempio seguente illustra il funzionamento con uno script e relativo tag noscript.</p>
		<pre>
	<code>&lt;script type="text/javascript"&gt;
		document.write("Hello World!")
	&lt;/script&gt;</code>
		</pre>
		<noscript>Your browser does not support JavaScript!</noscript>
		<p>Lo <em>script</em> qui riportato ha il compito di stampare a video la frase <em>Hello World</em>!. Nel caso qualcosa non dovesse funzionare, al posto dello <em>script</em>, verrà visualizzato il testo contenuto nel tag <em>noscript</em>. Al suo interno può essere inserito qualsiasi elemento normalmente collocabile in una pagina HTML. Il contenuto del tag <em>noscript</em> verrà mostrato solamente nel qual caso gli <em>script</em> non siano supportati oppure siano stati disabilitati dallʼutente.</p>
		<h3>8. Cornici (frames)</h3>
		<p><strong><em>Utilizzare noframes e titoli significativi.</em></strong></p>
		<p>Il tag <em>noframes</em> ha un funzionamento analogo a noscript, con la sola differenza che viene usato quando un browser non supporta i <em>frames</em>.</p>
		<p>I frames non sono altro che suddivisioni della pagina in parti a se stanti. Consentono di visualizzare differenti documenti, collegati con lʼattributo <em>src</em>, contemporaneamente allʼinterno di una sola pagina Web.</p>
		<pre>
	<code>&lt;frameset cols="25%,50%,25%"&gt;
		&lt;frame src="frame_a.htm" /&gt;
		&lt;frame src="frame_b.htm" /&gt;
		&lt;frame src="frame_c.htm" /&gt;
		&lt;noframes&gt;
			Sorry, your browser does not handle frames!
		&lt;/noframes&gt;
	&lt;/frameset&gt;</code>
		</pre>
		<p>Come mostrato nellʼesempio se il browser non supporta i frame la pagina non verrà caricata e al suo posto apparirà il testo (o la pagina alternativa) contenuto nel tag <em>noframe</em>.</p>
		<p>Chiaramente per motivi di accessibilità e portabilità di pagine Web lʼuso dei frames è altamente consigliato.</p>
		<h3>9. Tabelle</h3>
		<p><strong><em>Facilitare la lettura linea per linea. Riassumere.</em></strong></p>
		<h3>10.Verificare il lavoro</h3>
		<p><strong><em>Validare. Utilizzare gli strumenti, la lista di controllo e le linee guida di WCAG.</em></strong></p>
		<p>Sia la validazione del codice che la linea guida <em>WCAG</em> saranno trattati nei prossimi capitoli.</p>
		<section class="referenze">
			<h4>Referenze</h4>
			<ol>
				<li><sup id="cite_note_1"><a href="#cite_ref_1">^</a></sup>  <a href="http://www.w3.org/Style/CSS/">http://www.w3.org/Style/CSS/</a> - pagina del W3C riguardante i CSS.</li>
			</ol>
		</section>
	</article>
	<nav>
		<ul>
			<li class="prev"><a href="http://assistivetechnology.it/accessibilita-web/w3c"><< 3.2 - Il World Wide Web Consortium (W3C)</a> |</li>
			<li class="index"><a href="http://assistivetechnology.it/">Indice</a> |</li>
			<li class="next"><a href="http://assistivetechnology.it/accessibilita-web/wai-aria">3.3.1 WAI - Accessible Rich Internet Applications49 (WAI-ARIA) >></a></li>
		</ul>
	</nav>
<?php include_once("../include/footer.php") ?>