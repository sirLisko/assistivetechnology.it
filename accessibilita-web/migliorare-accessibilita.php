<?php
	$title="Migliorare Accessibilita' - Assistive Technology - Informatizzando la Disabilità";
	$keywords="Assistive Technology, AT, accessibilità, tecnologia, accessibilita' web";
	$description="Consigli e linee guida su come migliorare l'accessibilita' web dei propri siti internet.";
?>
<?php include_once("../include/header.php") ?>
<?php include_once("../include/analytics.php") ?>
	<nav>
		<ul>
			<li class="prev"><a href="http://assistivetechnology.it/accessibilita-web/wai-altro"><< 3.3.3 Ulteriori documentazione rilasciate dal WAI</a> |</li>
			<li class="index"><a href="http://assistivetechnology.it/">Indice</a> |</li>
			<li class="next"><a href="http://assistivetechnology.it/accessibilita-web/conclusione">3.5 Accessibilita' Web - Conclusione >></a></li>
		</ul>
	</nav>
	<article>
		<h1><span class="capitolo">Capitolo 3: Accessibilita' Web</span>3.4 Migliorare ulteriormente lʼaccessibilità</h1>
		<h2>3.4.1 Validazione del codice</h2>
		<p>La validazione del codice, mediante gli strumenti messi a disposizione dal W3C, è di cruciale importanza se si vogliono creare pagine ad alta accessibilità. La conformità semantica e sintattica del codice è essenziale per passare questa verifica ed oltre a consentire un buon primo passo verso lʼaccessibilità della pagina consente di ottenere anche una buona affidabilità per quanto riguarda il <em>cross-browsing</em><sup id="cite_ref_1"><a href="#cite_note_1">[1]</a></sup>.</p>
		<p>Se il codice è valido significa che è stato scritto rispettando i parametri e gli standard imposti dal W3C.</p>
		<p>Esistono tre tipi di validatori automatici del codice, tutti forniti dal W3C:
		<ul>
			<li><em>Validatore del codice (X)HTML<sup id="cite_ref_2"><a href="#cite_note_2">[2]</a></sup></em></li>
			<li><em>Validatore del codice CSS<sup id="cite_ref_3"><a href="#cite_note_3">[3]</a></sup></em></li>
			<li><em>Validatore semantico del codice<sup id="cite_ref_4"><a href="#cite_note_4">[4]</a></sup></em></li>
		</ul></p>
		<p>Se il codice risulta valido si potrà inserire allʼinterno della pagine Web queste immagini che lo certificano:</p>
		<p><strong>Codice XHTML valido</strong>
			<figure>
				<a href="http://validator.w3.org/check?uri=referer">
					<img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" />
				</a>
			</figure>
			<code><pre>
    &lt;a href="http://validator.w3.org/check?uri=referer"&gt;
        &lt;img src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0 Transitional" height="31" width="88" /&gt;
    &lt;/a&gt;
			</pre></code>
		</p>
		<p><strong>Codice XHTML valido</strong>
			<figure>
				<a href="http://jigsaw.w3.org/css-validator/check/referer">
					<img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="CSS Valido!" />
				</a>
			</figure>
			<code><pre>
    &lt;a href="http://jigsaw.w3.org/css-validator/check/referer"&gt;
        &lt;img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="CSS Valido!" /&gt;
    &lt;/a&gt;
			</pre></code>
		</p>
		<h2>3.4.2 Access Key</h2>
		<p>Un <em>access key</em> (<em>tasto di accesso</em> in italiano) è una combinazione di tasti che una volta premuta in un un web browser permette di "saltare" immediatamente ad un sezione della pagina o più in generale del sito Web. Questi collegamenti permettono un agile navigazione da tastiera e consentono di migliorare l'accessibilità delle pagine Web che li adottano.</p>
		<p>Sono stati introdotti per la prima volta nel 1999 ed hanno raggiunto in breve tempo il supporto di tutti i principali Web browser.</p>
		<h4>Specificare un access key</h4>
		<p>Specificare un access key è molto semplice, basta infatti utilizzare lʼattributo apposito <em>accesskey</em> allʼinterno di un collegamento alla pagina a cui esso farà riferimento.</p>
		<p>In questo esempio è mostrato un possibile collegamento alla home page:</p>
		<code><pre>
    &lt;a href="index.html" accesskey="h"&gt;Home&lt;/a&gt;
		</pre></code>
		<p>In linea di massima, e per una maggiore immediatezza, è opportuno evidenziare in qualche modo il carattere che contraddistingue lʼaccess key appunto, mediante lʼutilizzo del tag <em>&lt;em&gt;</em> il quale ha il compito di enfatizzare parti di testo, oppure tramite la sottolineatura del carattere, questa volta con il tag <em>&lt;u&gt;</em>.</p>
		<code><pre>
    &lt;a href="index.html" accesskey="h"&gt;&lt;em&gt;H&lt;/em&gt;ome&lt;/a&gt;
    	</code></pre>
		<p>Un altro ottimo modo, forse il più corretto ed intuitivo è mediante lʼutilizzo dei CSS. Infatti basterà inserire questa riga di codice allʼinterno del proprio foglio di stile:</p>
		<code><pre>
    *[accesskey]:after {content:' [' attr(accesskey) ']'}
		</code></pre>
		<p>per ottenere il risultato seguente:</p>
		<a href="http://assistivetechnology.it/" accesskey="h"><em>H</em>ome</a>
		<h4>Mappatura standard di access key</h4>
		<p>Nellʼanno 2004 il governo del Regno Unito ha raccomandato lʼuso dei seguenti access key, con lo scopo di creare una sorta di linea guida da seguire al momento dellʼimpostazione di queste “scorciatoie” all'interno dei propri siti Web.</p>
		<p><ul>
			<li><strong>S</strong> - Skip navigation</li>
			<li><strong>1</strong> - Home page</li>
			<li><strong>2</strong> - Novità</li>
			<li><strong>3</strong> - Mappa del sito</li>
			<li><strong>4</strong> - Ricerca</li>
			<li><strong>5</strong> - Domande Frequenti - Frequently Asked Questions (FAQ)</li>
			<li><strong>6</strong> - Aiuto</li>
			<li><strong>7</strong> - Presentazione reclami</li>
			<li><strong>8</strong> - Termini e condizioni</li>
			<li><strong>9</strong> - Feedback form</li>
			<li><strong>0</strong> - Dettagli sugli Access key</li>
		</ul></p>
		<p>Chiaramente questa vuole essere solo una linea guida e soprattutto non implica lʼinserimento di tutti questi access key allʼinterno di ogni singolo sito Web. Cʼè da tener presente però che ad esempio la scorciatoia <em>skip navigation</em> può risultare parecchio utile se la navigazione della pagina è fatta mediante uno <em>screen reader</em>, in questo caso, tramite una veloce combinazione di tasti, è possibile passare alla navigazione della sezione successiva, senza dover attendere che la lettura di quella corrente sia necessariamente terminata.</p>
		<h4>Access nei principali browser</h4>
		<p>Solitamente il funzionamento degli access key è dato mediante la combinazione di un tasto di accesso (<em>alt</em> computer che utilizzano <em>Windows</em> e <em>ctrl</em> invece su macchine <em>Macintosh</em>) più il tasto corrispondete alla “scorciatoia”.</p>
		<p>Qui di seguito sono riportate le combinazioni di tasti necessarie per lʼattivazione degli access key per i principali Web browser (Google Chrome<sup id="cite_ref_5"><a href="#cite_note_5">[5]</a></sup>, Internet Explorer<sup id="cite_ref_6"><a href="#cite_note_6">[6]</a></sup>, Mozilla Firefox<sup id="cite_ref_7"><a href="#cite_note_7">[7]</a></sup>, Opera<sup id="cite_ref_8"><a href="#cite_note_8">[8]</a></sup> e Safari<sup id="cite_ref_9"><a href="#cite_note_9">[9]</a></sup>):</p>
		<table border="1">
			<tr>
				<th>Browser</th>
				<th colspan="2">Combinazione</th>
				<th>Note</th>
			</tr>
			<tr>
				<td>Google Chrome</td>
				<td>alt (win)</td>
				<td>alt + control (mac)</td>
				<td><em>Compatibile dalla versione 3 o successive</em></td>
			</tr>
			<tr>
				<td>Internet Explorer</td>
				<td colspan="2">alt</td>
				<td><em>Per confermare necessita la pressione di enter</em></td>
			</tr>
			<tr>
				<td>Mozilla FIrefox</td>
				<td colspan="2">alt + shift</td>
				<td></td>
			</tr>
			<tr>
				<td>Opera</td>
				<td colspan="2">shift + esc</td>
				<td><em>I tasti devono essere rilasciati prima della selezione dellʼaccess key desiderato.</em></td>
			</tr>
			<tr>
				<td>Safari</td>
				<td>alt (win)</td>
				<td>alt + control (mac)</td>
				<td><em>Sequenza di tasti relativa alla versione 4</em></td>
			</tr>
		</table>
		<h2>3.4.3 Access Bar</h2>
		<p>Lʼaccess bar è un validissimo strumento per aumentare lʼaccessibilità del proprio sito internet. Essa infatti permette di modificare, nel modo più semplice ed intuitivo possibile, lʼaspetto di una pagina Web per consentire una miglior accessibilità a persone con svariate disabilità. Per ottenere una maggior efficacia va posizionata in un area ad alta visibilità, lʼheader o una barra laterale sono ottime soluzioni, deve avere una grafica lineare e le funzioni devono essere mostrate in modo chiaro.</p>
		<h3>Funzionalità base</h3>
		<p>Solitamente questa classe di funzioni è presente in tutte le access bar e consiste in un primo passo base verso lʼaccessibilità.</p>
		<h4>Colore<sup id="cite_ref_10"><a href="#cite_note_10">[10]</a></sup></h4>
		<p>Cambiando la colorazione rispettivamente del testo e dello <em>sfondo</em> è possibile creare combinazioni e contrasti adatti a creare una maggior leggibilità del testo da parte di utenti con problemi visivi. Oltre ai classici colori per evidenziare il contrasto, giallo su nero può forse essere lʼesempio più lampante, è opportuno prestare attenzione anche a problemi visivi quali i <em>scotopic sensitive</em>, persone per le quali è possibile distinguere differenze di brillantezza ma non di cromaticità, di conseguenza la loro lettura è agevolata da testi con sfondi dalle colorazioni tenui.</p>
		<h4>Dimensione</h4>
		<p>La possibilità di variare la dimensione del testo riveste un ruolo fondamentale per garantire una visione ottimale del testo, consentendo un suo ingrandimento e rimpicciolimento a piacere.</p>
		<p>Esiste una funzione analoga presente nativamente nella maggior parte dei browser Web chiamata <em>zoom-in/zoom-out</em>, ma può risultare macchinosa e poco intuitiva specialmente per chi non è estremamente pratico con i computer. Inoltre questa funzione solitamente ha il compito di aumentare (o diminuire) proporzionalmente le dimensioni di qualsiasi elemento presente nella pagina e questo tende a snaturare le normali proporzioni del layout. Nel capitolo successivo si vedrà come attivare questa modifica solo relativamente alle dimensioni del testo.</p>
		<h4>Stile del testo</h4>
		<p>Questa funzione riveste un ruolo più marginale rispetto alle due precedenti in quanto solitamente si sceglie di cambiare lo stile del testo (<em>font style</em>) solamente per una questione di abitudine o di maggior gradimento di un font rispetto ad un altro. Cʼè però da aggiungere che certe categorie di disabilità trovano giovamento nella lettura di un testo con font della famiglia <em>sans-serif</em> (letteralmente senza grazie), in quanto la rappresentazione del carattere risulta più semplice ed il suo riconoscimento risulta più immediato.</p>
		<h4>Funzionalità avanzate</h4>
		<p>Queste funzionalità sono per la maggior parte dei casi un “surplus” per la navigabilità della pagina Web, esse infatti, oltre ad essere più complicate da sviluppare, e solitamente tendono ad appesantire la struttura delle pagine in quanto necessitano di contenuti multimediali ad esse collegati.</p>
		<h4>Screen reader</h4>
		<p>In alcune access bar è presente una funzione di screen reader, naturalmente questa può portare un incremento dellʼaccessibilità non solo nei confronti degli utenti non vedenti ma anche da quelli affetti da dislessia.</p>
		<h4>Download multimediali</h4>
		<p>Solitamente collegati alla funzione di screen reader, permettono lo scaricamento sul proprio computer del testo letto dallo screen reader. In alcuni casi è possibile anche trovare la funzione di download dellʼintero testo della pagina, anche se questo caso non ricopre un ruolo centrale per quanto riguarda lʼaccessibilità Web.</p>
		<h3>Alcuni esempi di Access Bar:</h3>
		<figure>
			<img src="../imgs/accessbar_1.png" alt="Access Bar minimale">
			<figcaption>
				<em>Access bar del sito ufficiale di Assistive Solutions Ltd<sup id="cite_ref_11"><a href="#cite_note_11">[11]</a></sup></em>
			</figcaption>
		</figure>
		<p>Access Bar minimale, consente di modificare la grandezza del testo ed è possibile scegliere tra due fogli di stile, il classico e quello ad alto contrasto.</p>
		<figure>
			<img src="../imgs/accessbar_2.png" alt="Access Bar esempio 2">
			<figcaption>
				<em>Access bar del sito ufficiale della British Dyslexia Association<sup id="cite_ref_12"><a href="#cite_note_12">[12]</a></sup> (BDA)</em>
			</figcaption>
		</figure>
		<p>Access Bar che consente la modifica della grandezza, dello stile e del colore del testo, del colore dello sfondo ed è inoltre disponibile una funzione di reset alle impostazioni standard.</p>
		<figure>
			<img src="../imgs/accessbar_3.png" alt="Access Bar esempio 3">
			<figcaption>
				<em>Access bar della pagina ufficiale dellʼAssociation of Dislexia Specialists in Higher Education<sup id="cite_ref_13"><a href="#cite_note_13">[13]</a></sup> (Adshe)</em>
			</figcaption>
		</figure>
		<p>Access bar con funzioni avanzate, oltre alla possibilità di cambio del colore di sfondo, grandezza e stile del testo è presente la funzione di screen reader e di download del testo letto in formato mp3.</p>
		<h2>3.4.4 Accessibilità via browser</h2>
		<p>Anche i normali browser Web permettono di modificare i metodi di visualizzazione delle pagine Web, senza necessariamente aver bisogno di strumenti creati appositamente dagli sviluppatori di tali pagine.</p>
		<p>(Nota: In questa sezione verranno presi in considerazioni solo i browser <em>Internet Explorer</em>, <em>Mozilla Firefox</em> e <em>Safari</em>.)</p>
		<h4>Ridimensionare il carattere</h4>
		<p>Anche da un normale browser è possibile ridimensionare il carattere. Lʼunica accortezza che bisogna avere è quella di essere sicuri di aver spuntato lʼopzione di ridimensionare solo testo (come si può notare nellʼimmagine di esempio che fa riferimento al Web Browser <em>Safari</em>), dopo di che sarà possibile con le apposite funzioni <em>ingrandisci</em> e <em>riduci</em> modificare solamente la grandezza appunto del testo. Solitamente, oltre che dalle normali voci di menu sarà possibile effettuare questo ridimensionamento mediante tasti rapidi (<em>command +</em> e <em>command -</em> su Mac OS e <em>ctrl +</em> e <em>ctrl -</em> su Windows) oppure mediante la rotellina del mouse (sempre con tasto <em>command</em> su Mac OS e <em>ctrl</em> su Windows).</p>
		<figure>
			<img src="../imgs/ridimensiona testo.png" alt="ridimensiona testo">
		</figure>
		<h4>Cambiare i colori di default</h4>
		<p>Oltre a cambiare le dimensioni del carattere è possibile modificare i colori di <em>default</em> allʼinterno delle pagine Web visitabili. Come ad esempio il colore del testo, dello sfondo e dei link (già visitati e non ancora).</p>
		<p>Nel esempio, che fa riferimento al browser <em>Mozilla Firefox</em> è possibile vedere mostrate la schermata appositamente dedicata a questa funzione, raggiungibile dal menu <em>preferenze</em>, sezione <em>contenuto</em>. Qui è anche possibile cambiare il font di <em>default</em>.</p>
		<figure>
			<img src="../imgs/cambiare colori default.png" alt="cambiare colori default">
		</figure>
		<h4>Impostare un proprio fogli di stile</h4>
		<p>Per una modifica più libera e sostanziale alla struttura delle pagine che si possono visitare è possibile impostare dei propri fogli di stile durante la navigazione. In <em>Internet Explorer</em> e <em>Safari</em> questa operazione non necessita nulla di particolarmente complicato, è sufficiente andare nella sezione apposita nelle preferenze del browser e selezionare il proprio foglio di stile desiderato, invece per quanto riguarda <em>Mozilla Firefox</em> questa operazione risulta un poʼ più complicata in quanto si dovrà modificare manualmente il foglio di stile di <em>default</em> del browser.</p>
		<p>Nellʼesempio è possibile notare la finestra di <em>accesso facilitato</em> del browser <em>Internet Explorer</em>, in questo caso selezionando <em>Formatta i documenti utilizzando il foglio di stile dellʼutente</em> e successivamente impostando tale file, sarà possibile modificare il normale aspetto delle pagine che saranno visualizzate tramite il browser.</p>
		<figure>
			<img src="../imgs/accesso facilitato.png" alt="accesso facilitato">
		</figure>
		<h4>Toolbar di verifica dellʼaccessibilità</h4>
		<p>Le due principali toolbar che consentono di verificare lʼaccessibilità di una pagina Web sono principalmente una per <em>Internet Explorer</em> ed è rilasciata dal <em>Web Accessibility Tools Consortium</em><sup id="cite_ref_14"><a href="#cite_note_14">[14]</a></sup> e lʼaltra per <em>Mozilla Firefox</em> ed è presente come <em>add-on</em><sup id="cite_ref_15"><a href="#cite_note_15">[15]</a></sup> dal nome <em>Firefox Accessibility Extension</em><sup id="cite_ref_16"><a href="#cite_note_16">[16]</a></sup> sviluppata dal <em>Illinois Center for Information Technology and Web Accessibility</em><sup id="cite_ref_17"><a href="#cite_note_17">[17]</a></sup>.</p>
		<p>Entrambe le toolbar dellʼaccessibilità sono state create con lo scopo di supportare la verifica manuale di un gran numero di aspetti riguardanti lʼaccessibilità di una pagina Web. Prevedono diverse funzionalità, riassumibili nelle seguenti aree:
		<ul>
			<li>Identificare le componenti di una pagina Web.</li>
			<li>Fornire lʼaccesso a visualizzazioni alternative del contenuto di una pagina.</li>
			<li>Facilitare lʼuso di applicazioni online di altri sviluppatori.</li>
		</ul></p>
		<section class="referenze">
			<h4>Referenze</h4>
			<ol>
				<li><sup id="cite_note_1"><a href="#cite_ref_1">^</a></sup> Cross-browsing - capacità di un sito Web, un'applicazione Web, del codice HTML o di uno script di essere in grado di funzionare con qualsiasi web browser.</li>
				<li><sup id="cite_note_2"><a href="#cite_ref_2">^</a></sup> <a href="http://validator.w3.org/">http://validator.w3.org/</a> - pagina del W3C che si occupa della validazione del codice (X)HTML.</li>
				<li><sup id="cite_note_3"><a href="#cite_ref_3">^</a></sup> <a href="http://jigsaw.w3.org/css-validator/">http://jigsaw.w3.org/css-validator/</a> - pagina del W3C che si occupa della validazione del codice CSS.</li>
				<li><sup id="cite_note_4"><a href="#cite_ref_4">^</a></sup> <a href="http://www.w3.org/2003/12/semantic-extractor.html">http://www.w3.org/2003/12/semantic-extractor.html</a> - pagina del W3C che si occupa della validazione della sem
				<li><sup id="cite_note_5"><a href="#cite_ref_5">^</a></sup> <a href="http://www.google.com/chrome">http://www.google.com/chrome</a> pagina ufficiale del browser Google Chrome.</li>
				<li><sup id="cite_note_6"><a href="#cite_ref_6">^</a></sup> <a href="http://www.microsoft.com/nz/ie/">http://www.microsoft.com/nz/ie/</a> - pagina ufficiale del browser Internet Explorer.</li>
				<li><sup id="cite_note_7"><a href="#cite_ref_7">^</a></sup> <a href="http://www.mozilla.com/firefox/">http://www.mozilla.com/firefox/</a> - pagina ufficiale del browser Mozilla Firefox.</li>
				<li><sup id="cite_note_8"><a href="#cite_ref_8">^</a></sup> <a href="http://www.opera.com/">http://www.opera.com/</a> - pagina ufficiale del browser Opera.</li>
				<li><sup id="cite_note_9"><a href="#cite_ref_9">^</a></sup> <a href="http://www.apple.com/safari/">http://www.apple.com/safari/</a> - pagina ufficiale del browser Safari.</li>
				<li><sup id="cite_note_10"><a href="#cite_ref_10">^</a></sup> <a href="http://www2.comune.venezia.it/letturagevolata/files/questionedileggibilita.pdf">http://www2.comune.venezia.it/letturagevolata/files/questionedileggibilita.pdf</a> - per un approfondimento legato alla leggibilità e la scelta dei colori si rimanda alla lettura del documento “Questione di leggibilità” rilasciato dal comune di Venezia.</li>
				<li><sup id="cite_note_11"><a href="#cite_ref_11">^</a></sup> <a href="http://www.assistiveitsolutions.com/">http://www.assistiveitsolutions.com/</a> - pagina ufficiale della compagnia Assistive Solutions Ltd.</li>
				<li><sup id="cite_note_12"><a href="#cite_ref_12">^</a></sup> <a href="http://www.bdadyslexia.org.uk/">http://www.bdadyslexia.org.uk/</a> - pagina ufficiale della British Dyslexia Association.</li>
				<li><sup id="cite_note_13"><a href="#cite_ref_13">^</a></sup> <a href="http://adshe.org.uk/">http://adshe.org.uk/</a> - pagina ufficiale della Association of Dyslexia Specialists in Higher Education (ADSHE).</li>
				<li><sup id="cite_note_14"><a href="#cite_ref_14">^</a></sup> <a href="http://www.wat-c.org/">http://www.wat-c.org/</a> - pagina ufficiale del Web Accessibility Tools Consortium.</li>
				<li><sup id="cite_note_15"><a href="#cite_ref_15">^</a></sup> <a href="https://addons.mozilla.org/en-US/firefox/addon/5809">https://addons.mozilla.org/en-US/firefox/addon/5809</a> - pagina di riferimento per il download dellʼestensione.</li>
				<li><sup id="cite_note_16"><a href="#cite_ref_16">^</a></sup> <a href="http://firefox.cita.uiuc.edu/">http://firefox.cita.uiuc.edu/</a> - pagina di riferimento del progetto Firefox Accessibility Extension.</li>
				<li><sup id="cite_note_17"><a href="#cite_ref_17">^</a></sup> <a href="http://www.cita.uiuc.edu/">http://www.cita.uiuc.edu/</a> - pagina ufficiale del Illinois Center for Information Technology and Web Accessibility.</li>
			</ol>
		</section>
	</article>
	<nav>
		<ul>
			<li class="prev"><a href="http://assistivetechnology.it/accessibilita-web/wai-altro"><< 3.3.3 Ulteriori documentazione rilasciate dal WAI</a> |</li>
			<li class="index"><a href="http://assistivetechnology.it/">Indice</a> |</li>
			<li class="next"><a href="http://assistivetechnology.it/accessibilita-web/conclusione">3.5 Accessibilita' Web - Conclusione >></a></li>
		</ul>
	</nav>
<?php include_once("../include/footer.php") ?>