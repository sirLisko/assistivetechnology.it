<?php
	$title="WCAG - Assistive Technology - Informatizzando la Disabilità";
	$keywords="Assistive Technology, AT, accessibilità, tecnologia, wai, w3c, wcag";
	$description="WCAG - linea guida sviluppata dal W3C con lo scopo di produrre contenuti web principalmente accessibili da persone disabili.";
?>
<?php include_once("../include/header.php") ?>
<?php include_once("../include/analytics.php") ?>
	<nav>
		<ul>
			<li class="prev"><a href="http://assistivetechnology.it/accessibilita-web/wai-aria"><< 3.3.1 WAI - Accessible Rich Internet Applications49 (WAI-ARIA)</a> |</li>
			<li class="index"><a href="http://assistivetechnology.it/">Indice</a> |</li>
			<li class="next"><a href="http://assistivetechnology.it/accessibilita-web/wai-altro">3.3.3 Ulteriori documentazione rilasciate dal WAI >></a></li>
		</ul>
	</nav>
	<article>
		<h1><span class="capitolo">Capitolo 3: Accessibilita' Web</span>3.3.2 Web Content Accessibility Guidelines (WCAG)</h1>
		<p>La specifica <em>WCAG - Web Content Accessibility Guidelines</em> (<em>Linea guida per lʼAccessibilità dei Contenuti Web</em> in italiano) è appunto una linea guida, sviluppata dal W3C e relativa al ramo della <em>Web Accessibility Initiative</em>, che ha come scopo principale quello di indirizzare gli sviluppatori Web a produrre contenuti principalmente accessibili da persone disabili, senza però dimenticare i normali utenti, prendendo in considerazione anche i dispositivi più limitati per lʼaccesso al Web, come ad esempio cellulari e smarthphone.</p>
		<p>La specifica WCAG si snoda su <em>19 argomenti principali</em>, i quali sono raggruppati in <em>4 Principi fondamentali</em>:</p>
		<p><ol>
			<li><strong>Percepibile</strong> (argomenti da 1 – 7)</li>
			<li><strong>Fruibile</strong> (argomenti da 8 – 12)</li>
			<li><strong>Comprensibile</strong> (argomenti da 13 – 16)</li>
			<li><strong>Durevole</strong> (argomenti da 17 – 19)</li>
		</ol></p>
		<h3>Principio 1: PERCEPIBILE</h3>
		<p><em><strong>I contenuti devono essere percepibili</strong></em></p>
		<p>Il principio numero uno si riferisce alla percettibilità dei contenuti, vale a dire alla possibilità di poter accedere al contenuto almeno in modalità testuale.</p>
		<p>I tre punti di riferimento per questo principio sono:</p>
		<p><ul>
			<li><em><strong>Utilizzare equivalenti testuali</strong></em></li>
			<li><em><strong>Separare la presentazione dal contenuto</strong></em></li>
			<li><em><strong>Sincronizzare gli elementi multimediali</strong></em></li>
		</ul></p>
		<h4>Utilizzare equivalenti testuali</h4>
		<p><strong>1.1</strong> – <em>Per i contenuti non testuali, fornire un testo equivalente che abbia lo stesso scopo o fornisca le stesse informazioni del contenuto non testuale, ad esclusione di quando lo scopo del contenuto non testuale è di generare unʼesperienza sensoriale specifica (ad esempio, musica ed arte visiva). In questo caso è sufficiente una etichetta (text label) o una descrizione.</em></p>
		<p><strong>1.4</strong> - <em>Tutto il testo deve poter essere decodificato in parole tramite Unicode<sup id="cite_ref_1"><a href="#cite_note_1">[1]</a></sup>.</em></p>
		<h4>Separare la presentazione dal contenuto</h4>
		<p><strong>1.3</strong> – <em>Le informazioni, la funzionalità e la struttura sono separabili dalla presentazione.</em></p>
		<p><strong>1.5</strong> – <em>La struttura è resa percepibile attraverso la presentazione.</em></p>
		<h4>Sincronizzare gli elementi multimediali</h4>
		<p><strong>1.2</strong> – <em>Fornire media equivalenti sincronizzati per le presentazioni dipendenti dal tempo.</em><br />
		(esempio: descrizione audio per eventi visivi, sottotitoli per dialoghi significativi, con sincronizzazione)</p>
		<p><strong>1.6</strong> – <em>Per le presentazioni visive predefinite il contenuto principale è facilmente distinguibile dallo sfondo.</em></p>
		<p><strong>1.7</strong> – <em>Per le presentazioni uditive predefinite il contenuto principale è facilmente distinguibile dallo sfondo.</em></p>
		<h3>Principio 2: FRUIBILE</h3>
		<p><em><strong>Accertarsi che gli elementi dellʼinterfaccia nel contenuto siano operabili da qualsiasi utente.</strong></em></p>
		<p>Il principio numero due si riferisce alla fruibilità dei contenuti, vale a dire alla possibilità di poter interagire con i contenuti e con le eventuali interfacce personalizzate.</p>
		<p>I tre punti di riferimento per questo principio sono:</p>
		<p><ul>
			<li><em><strong>Fornire interfacce utilizzabili almeno con tastiera</strong></em></li>
			<li><em><strong>Controllare i tempi di esecuzione</strong></em></li>
			<li><em><strong>Evitare intermittenze nello schermo</strong></em></li>
		</ul></p>
		<h4>Fornire interfacce utilizzabili almeno con tastiera</h4>
		<p><strong>2.1</strong> – <em>Tutte le funzionalità sono fruibili almeno attraverso tastiera o emulatore di tastiera.</em></p>
		<p><strong>2.4</strong> – <em>Aggiungere funzionalità che consentano di facilitare lʼorientamento e lo spostamento tra i contenuti.</em><br />
		(esempi: Struttura gerarchica del mark up, mappa del sito, più meccanismi di navigazione, possibilità di saltare blocchi di contenuto, utilizzare corrispondenze per i riferimenti incrociati nelle tabelle di dati. Assicurare che le relazioni fra le intestazioni di tabella e i dati rimangano trasparenti a chi utilizza uno screen reader o la barra Braille.)</p>
		<p><strong>2.5</strong> – <em>Fornire funzionalità che non inducano in errore o altrimenti consentire la possibilità di rimediare.</em><br />
		(esempi: scrittura nelle form, scelta da lista opzioni, spell checker, diverse tipologie di ricerca nei search engine.)</p>
		<h4>Controllare i tempi di esecuzione</h4>
		<p><strong>2.2</strong> – <em>Gli utenti possono controllare in qualsiasi momento i tempi di lettura, risposta o interazione a meno che non sia possibile in caso di eventi in tempo reale.</em><br />
		(esempi: controllo del tempo negli eventi (redirection, testo scorrevole, dialoghi che scompaiono, aggiornamenti con refresh, animazioni, filmati), possibilità di disattivare animazioni e movimenti.)</p>
		<h4>Evitare intermittenze nello schermo</h4>
		<p><strong>2.3</strong> – <em>Consentire agli utenti di evitare le intermittenze dello schermo.</em><br />
		Questo punto è stato espressamente creato per gli utenti che soffrono di epilessia fotosensibile e difficoltà di concentrazione.</p>
		<h3>Principio 3: COMPRENSIBILE</h3>
		<p><em><strong>Rendere il contenuto e i comandi comprensibili al maggior numero di utenti possibile.</strong></em></p>
		<p>Il principio numero tre si riferisce alla comprensibilità dei contenuti, vale a dire alla capacità di rendere chiari e semplici i contenuti.</p>
		<p>I tre punti di riferimento per questo principio sono:</p>
		<p><ul>
			<li><em><strong>Identificare la lingua utilizzata</strong></em></li>
			<li><em><strong>Utilizzare un linguaggio chiaro e semplice</strong></em></li>
			<li><em><strong>Creare uno stile coerente</strong></em></li>
		</ul></p>
		<h4>Identificare la lingua utilizzata</h4>
		<p><strong>3.1</strong> – <em>Rendere identificabile al programma utente la lingua utilizzata nei contenuti.</em></p>
		<h4>Utilizzare un linguaggio chiaro e semplice</h4>
		<p><strong>3.2</strong> – <em>La definizione delle abbreviazioni e degli acronimi è determinabile senza ambiguità.</em></p>
		<p><strong>3.3</strong> – <em>I contenuti sono comprensibili e/o è fornita una versione alternativa con linguaggio chiaro e semplice.</em></p>
		<h4>Creare uno stile coerente</h4>
		<p><strong>3.4</strong> – <em>La disposizione e la presentazione del contenuto sono coerenti o prevedibili, ma non identiche.</em><br />
		(esempi: le barre di navigazioni sono in posizioni costanti, le scelte lessicali per le etichette e le intestazioni sono coerenti, la grafica delle sezioni è riconoscibile, le convenzioni usate sono familiari, diverse presentazioni del layout sono selezionabili dallʼutente, spiegazioni testuali per avvisare di comportamenti inusuali.)</p>
		<h3>Principio 4: DUREVOLE</h3>
		<p><em><strong>Utilizzare le tecnologie Web che accrescono lʼoperatività del contenuto con le tecnologie utente e assistive attuali e future.</strong></em></p>
		<p>Il principio numero quattro si riferisce allʼevolvibilità delle tecnologie, vale a dire alla possibilità di poter interagire con i contenuti e con le eventuali interfacce personalizzate attuali e future.</p>
		<p>I tre punti di riferimento per questo principio sono:</p>
		<p><ul>
			<li><em><strong>Rispettare le specifiche</strong></em></li>
			<li><em><strong>Utilizzare tecnologie accessibili</strong></em></li>
			<li><em><strong>Dichiarare le tecnologie utilizzate</strong></em></li>
		</ul></p>
		<h4>Rispettare le specifiche</h4>
		<p><strong>4.1</strong> – <em>Utilizzare le tecnologie secondo le proprie specifiche.</em><br />
		(esempi: il markup è valido rispetto allo schema DTD (Document Type Definition), elementi e attributi vengono usati secondo le specifiche, non in modo presentazionale.)</p>
		<h4>Utilizzare tecnologie accessibili</h4>
		<p><strong>4.2</strong> – <em>Le interfacce dei programmi sono accessibili o è prevista una versione alternativa accessibile.</em></p>
		<h4>Dichiarare le tecnologie utilizzate</h4>
		<p><strong>4.3</strong> – <em>Le tecnologie utilizzate allʼinterno dei contenuti sono dichiarate e largamente diffuse.</em></p>
		<br/><br/><br/>
		<h2>3.3.2.1 Conformance Level<sup id="cite_ref_2"><a href="#cite_note_2">[2]</a></sup></h2>
		<p>Con conformance level si indica come una pagina Web rispetta tutti i punti focali della specifica <em>WCAG</em> e di conseguenza da quanto stilato dal <em>WAI</em>.</p>
		<p>Ogni punto focale (<em>checkpoint</em>) della guida è contraddistinto da un livello di priorità, questo livello è proporzionale all'impatto che l'insoddisfazione di tale punto potrebbe avere nei confronti dell'accessibilità generale della pagina.</p>
		<h4>Priorità 1</h4>
		<p>Uno sviluppatore di pagine Web <strong>deve</strong> soddisfare questo checkpoint. Altrimenti, per una o più categorie di disabilità sarà impossibile accedere alle informazioni presenti nel documento. La soddisfazione di questo checkpoint è un requisito base per consentire l'accesso ad alcune categorie a documenti Web.
		<h4>Priorità 2</h4></p>
		<p>Uno sviluppatore di pagine Web <strong>dovrebbe</strong> soddisfare questo checkpoint. Altrimenti, per una o più categorie di disabilità sarà difficile accedere alle informazioni presenti nel documento. La soddisfazione di questo checkpoint rimuoverebbe importanti barriere per l'accesso a documenti Web.
		<h4>Priorità 3</h4></p>
		<p>Uno sviluppatore di pagine Web <strong>può</strong> soddisfare questo checkpoint. Altrimenti, per una o più categorie di disabilità potrebbero incontrare qualche difficoltà ad accedere alle informazioni presenti nel documento.</p>
		<p>Alcuni checkpoint possono specificare un livello di priorità che potrebbe cambiare in determinate condizioni, queste condizioni sono indicate all'interno della specifica.</p>
		<h3>Livello di adempimento:</h3>
		<p>Livello "<strong>A</strong>": tutti i checkpoint con priorità 1 sono soddisfatti.</p>
		<figure>
			<a href="http://www.w3.org/WAI/WCAG2A-Conformance" title="Explanation of WCAG 2.0 Level A Conformance">
    			<img height="32" width="88" src="http://www.w3.org/WAI/wcag2A" alt="Level A conformance, W3C WAI Web Content Accessibility Guidelines 2.0">
			</a>
		</figure>
		<pre><code>&lt;a href="http://www.w3.org/WAI/WCAG2A-Conformance" title="Explanation of WCAG 2.0 Level A Conformance"&gt;
    &lt;img height="32" width="88" src="http://www.w3.org/WAI/wcag2A"
    alt="Level A conformance, W3C WAI Web Content Accessibility Guidelines 2.0"&gt;
&lt;/a&gt;
		</code></pre>
		<p>Livello "<strong>AA</strong>" o "<strong>Double-A</strong>": tutti i checkpoint con priorità 1 e 2 sono soddisfatti.</p>
		<figure>
			<a href="http://www.w3.org/WAI/WCAG2AA-Conformance" title="Explanation of WCAG 2.0 Level Double-A Conformance">
				<img height="32" width="88" src="http://www.w3.org/WAI/wcag2AA" alt="Level Double-A conformance, W3C WAI Web Content Accessibility Guidelines 2.0">
			</a>
		</figure>
		<pre><code>&lt;a href="http://www.w3.org/WAI/WCAG2AA-Conformance" title="Explanation of WCAG 2.0 Level Double-A Conformance"&gt;
	&lt;img height="32" width="88" src="http://www.w3.org/WAI/wcag2AA"
	alt="Level Double-A conformance, W3C WAI Web Content Accessibility Guidelines 2.0"&gt;
&lt;/a&gt;
		</code></pre>
		<p>Livello "<strong>AAA</strong>" o "<strong>Triple-A</strong>": tutti i checkpoint con priorità 1, 2 e 3 sono soddisfatti.</p>
		<figure>
			<a href="http://www.w3.org/WAI/WCAG2AAA-Conformance" title="Explanation of WCAG 2.0 Level Triple-A Conformance">
				<img height="32" width="88" src="http://www.w3.org/WAI/wcag2AAA" alt="Level Triple-A conformance, W3C WAI Web Content Accessibility Guidelines 2.0">
			</a>
		</figure>
		<pre><code>&lt;a href="http://www.w3.org/WAI/WCAG2AAA-Conformance" title="Explanation of WCAG 2.0 Level Triple-A Conformance"&gt;
	&lt;img height="32" width="88" src="http://www.w3.org/WAI/wcag2AAA"
	alt="Level Triple-A conformance, W3C WAI Web Content Accessibility Guidelines 2.0"&gt;
&lt;/a&gt;
		</code></pre>
		<section class="referenze">
			<h4>Referenze</h4>
			<ol>
				<li><sup id="cite_note_1"><a href="#cite_ref_1">^</a></sup> Unicode - sistema di codifica che assegna un numero univoco ad ogni carattere usato per la scrittura di testi, in maniera indipendente dalla lingua, dalla piattaforma informatica e dal programma utilizzati.</li>
				<li><sup id="cite_note_2"><a href="#cite_ref_2">^</a></sup> <a href="http://www.w3.org/WAI/WCAG2-Conformance.html">http://www.w3.org/WAI/WCAG2-Conformance.html</a> - pagina relativa al confermance level del W3C.</li>
			</ol>
		</section>
	</article>
	<nav>
		<ul>
			<li class="prev"><a href="http://assistivetechnology.it/accessibilita-web/wai-aria"><< 3.3.1 WAI - Accessible Rich Internet Applications49 (WAI-ARIA)</a> |</li>
			<li class="index"><a href="http://assistivetechnology.it/">Indice</a> |</li>
			<li class="next"><a href="http://assistivetechnology.it/accessibilita-web/wai-altro">3.3.3 Ulteriori documentazione rilasciate dal WAI >></a></li>
		</ul>
	</nav>
<?php include_once("../include/footer.php") ?>