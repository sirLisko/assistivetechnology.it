<?php
	$title="Legislazione Italiana - Assistive Technology - Informatizzando la Disabilità";
	$keywords="Assistive Technology, AT, accessibilità, tecnologia, legislazione, legge, Italia";
	$description="Legislazione italiana che regola e vincola l'accessibilita' web.";
?>
<?php include_once("../include/header.php") ?>
<?php include_once("../include/analytics.php") ?>
	<nav>
		<ul>
			<li class="prev"><a href="http://assistivetechnology.it/accessibilita-web/conclusione"><< 3.5 Accessibilita' Web - Conclusione</a> |</li>
			<li class="index"><a href="http://assistivetechnology.it/">Indice</a> |</li>
			<li class="next"><a href="http://assistivetechnology.it/appendice/braille">Appendice A - Braille >></a></li>
		</ul>
	</nav>
	<article>
		<h1><span class="capitolo">Capitolo 3: Accessibilita' Web</span>3.6 Legislazione Italiana</h1>
		<p>LʼItalia seguendo le indicazioni dellʼ<em>Unione Europea</em> e basandosi sia sulle direttive del <em>W3C</em>, presenti nella specifica <em>WCAG</em>, e sulla <em>Section 508</em><sup id="cite_ref_1"><a href="#cite_note_1">[1]</a></sup> del <em>Governo degli Stati Uniti</em>, ha creato la <em>Legge 04/2004</em>, detta anche <em>Legge Stanca</em><sup id="cite_ref_2"><a href="#cite_note_2">[2]</a></sup>.</p>
		<p>Questa legge si applica a tutte le pubbliche amministrazioni e a tutte quelle aziende che hanno una prevalente capitalizzazione pubblica o che sono concessionarie di servizi pubblici.</p>
		<p>La legge Stanca purtroppo presenta tre grossi limiti:
		<ul>
			<li>Il <strong>campo di attuazione</strong>: essa infatti si applica solamente al settore pubblico, non entrando in merito per quanto concerne il privato.</li>
			<li>Lʼ<strong>applicabilità</strong>: in quanto per essere applicata necessita la presenza di un contratto, tra soggetto erogatore e usufruente del servizio. Conseguentemente tale contratto, qualora la legge non sia rispettata, potrà considerarsi nullo.</li>
			<li>Il <strong>controllo</strong>: ovvero la mancanza di un vero e proprio organo di controllo atto a verificare, e di conseguenza far rispettare, lʼinsieme di tecniche e metodologie preso in esame da questa legge.</li>
		</ul></p>
		<p>Il <em>Decreto Ministeriale dellʼ8 Luglio 2005</em> rende a tutti gli effetti operativa la <em>Legge Stanca</em>. Questo documento si focalizza in modo particolare sullʼaccessibilità informatica, suddividendola in tre grandi aree tematiche (<em>Web</em>, <em>hardware</em> e <em>software</em>) e delinea una serie di requisiti tecnici che dovrebbero essere sempre rispettati:
		<ul>
			<li><strong>Requisiti Web</strong>: riguardanti lʼaccessibilità delle applicazioni basate su tecnologie internet.</li>
			<li><strong>Requisiti Hardware</strong>: riguardanti lʼaccessibilità per i personal computer di tipo desktop e portatili.</li>
			<li><strong>Requisiti Software</strong>: riguardanti lʼaccessibilità per lʼambiente operativo, le applicazioni e i prodotti a scaffale.</li>
		</ul></p>
		<p>In aggiunta si trovano specificati anche i criteri essenziali su cui basare la verifica soggettiva dei siti Web e delle applicazioni realizzate con tecnologie Internet.</p>
		<h2>3.6.1 Requisiti Web</h2>
		<em>Requisiti tecnici di accessibilità delle applicazioni basate su tecnologie internet<sup id="cite_ref_3"><a href="#cite_note_3">[3]</a></sup></em>
		<h4>Requisito n. 1</h4>
		<p>Realizzare le pagine e gli oggetti al loro interno utilizzando tecnologie definite da grammatiche formali pubblicate nelle versioni più recenti disponibili quando sono supportate dai programmi utente. Utilizzare elementi ed attributi in modo conforme alle specifiche, rispettandone lʼaspetto semantico. In particolare, per i linguaggi a marcatori HTML (HypertText Markup Language) e XHTML (eXtensible HyperText Markup Language):
		<ol type="a">
			<li>per tutti i siti di nuova realizzazione utilizzare almeno la versione 4.01 dellʼHTML o preferibilmente la versione 1.0 dellʼXHTML, in ogni caso con DTD (Document Type Definition - Definizione del Tipo di Documento) di tipo Strict;</li>
			<li>per i siti esistenti, in sede di prima applicazione, nel caso in cui non sia possibile ottemperare al punto a) è consentito utilizzare la versione dei linguaggi sopra indicati con DTD Transitional, ma con le seguenti avvertenze:
				<ol>
					<li>evitare di utilizzare, allʼinterno del linguaggio a marcatori con il quale la pagina è realizzata, elementi ed attributi per definirne le caratteristiche di presentazione della pagina (per esempio, caratteristiche dei caratteri del testo, colori del testo stesso e dello sfondo, ecc.), ricorrendo invece ai Fogli di Stile CSS (Cascading Style Sheets) per ottenere lo stesso effetto grafico;</li>
					<li>evitare la generazione di nuove finestre; ove ciò non fosse possibile, avvisare esplicitamente lʼutente del cambiamento del focus;</li>
					<li>pianificare la transizione dellʼintero sito alla versione con DTD Strict del linguaggio utilizzato, dandone comunicazione alla Presidenza del Consiglio dei Ministri – Dipartimento per lʼinnovazione e le tecnologie e al Centro nazionale per lʼinformatica nella pubblica amministrazione.</li>
				</ol>
			</li>
		</ol></p>
		<h4>Requisito n. 2</h4>
		<p>Non è consentito lʼuso dei frame nella realizzazione di nuovi siti. In sede di prima applicazione, per i siti Web esistenti già realizzati con frame è consentito lʼuso di HTML 4.01 o XHTML 1.0 con DTD frameset, ma con le seguenti avvertenze:
		<ol type="a">
			<li>evitare di utilizzare, allʼinterno del linguaggio a marcatori con il quale la pagina è realizzata, elementi ed attributi per definirne le caratteristiche di presentazione della pagina (per esempio, caratteristiche dei caratteri del testo, colori del testo stesso e dello sfondo, ecc.), ricorrendo invece ai Fogli di Stile CSS (Cascading Style Sheets) per ottenere lo stesso effetto grafico;</li>
			<li>fare in modo che ogni frame abbia un titolo significativo per facilitarne lʼidentificazione e la navigazione; se necessario, descrivere anche lo scopo dei frame e la loro relazione;</li>
			<li>pianificare la transizione a XHTML almeno nella versione 1.0 con DTD Strict dellʼintero sito dandone comunicazione alla Presidenza del Consiglio dei Ministri – Presidenza del Consiglio dei Ministri – Dipartimento per lʼinnovazione e le tecnologie e alCentro nazionale per lʼinformatica nella pubblica amministrazione.</li>
		</ol></p>
		<h4>Requisito n. 3</h4>
		<p>Fornire una alternativa testuale equivalente per ogni oggetto non di testo presente in una pagina e garantire che quando il contenuto non testuale di un oggetto cambia dinamicamente vengano aggiornati anche i relativi contenuti equivalenti predisposti; lʼalternativa testuale equivalente di un oggetto non testuale deve essere commisurata alla funzione esercitata dallʼoggetto originale nello specifico contesto.</p>
		<h4>Requisito n. 4</h4>
		<p>Garantire che tutti gli elementi informativi e tutte le funzionalità siano disponibili anche in assenza del particolare colore utilizzato per presentarli nella pagina.</p>
		<h4>Requisito n. 5</h4>
		<p>Evitare oggetti e scritte lampeggianti o in movimento le cui frequenze di intermittenza possano provocare disturbi da epilessia fotosensibile o disturbi della concentrazione, ovvero possano causare il malfunzionamento delle tecnologie assistive utilizzate; qualora esigenze informative richiedano comunque il loro utilizzo, avvertire lʼutente del possibile rischio prima di presentarli e predisporre metodi che consentano di evitare tali elementi.</p>
		<h4>Requisito n. 6</h4>
		<p>Garantire che siano sempre distinguibili il contenuto informativo (foreground) e lo sfondo (background), ricorrendo a un sufficiente contrasto (nel caso del testo) o a differenti livelli sonori (in caso di parlato con sottofondo musicale); evitare di presentare testi in forma di immagini; ove non sia possibile, ricorrere agli stessi criteri di distinguibilità indicati in precedenza.</p>
		<h4>Requisito n. 7</h4>
		<p>Utilizzare mappe immagine sensibili di tipo lato client piuttosto che lato server, salvo il caso in cui le zone sensibili non possano essere definite con una delle forme geometriche predefinite indicate nella DTD adottata.</p>
		<h4>Requisito n.</h4> 8
		<p>In caso di utilizzo di mappe immagine lato server, fornire i collegamenti di testo alternativi necessari per ottenere tutte le informazioni o i servizi raggiungibili interagendo direttamente con la mappa.</p>
		<h4>Requisito n. 9</h4>
		<p>Per le tabelle dati usare gli elementi (marcatori) e gli attributi previsti dalla DTD adottata per descrivere i contenuti e identificare le intestazioni di righe e colonne.</p>
		<h4>Requisito n. 10</h4>
		<p>Per le tabelle dati usare gli elementi (marcatori) e gli attributi previsti nella DTD adottata per associare le celle di dati e le celle di intestazione che hanno due o più livelli logici di intestazione di righe o colonne.</p>
		<h4>Requisito n</h4>. 11
		<p>Usare i fogli di stile per controllare la presentazione dei contenuti e organizzare le pagine in modo che possano essere lette anche quando i fogli di stile siano disabilitati o non supportati.</p>
		<h4>Requisito n. 12</h4>
		<p>La presentazione e i contenuti testuali di una pagina devono potersi adattare alle dimensioni della finestra del browser utilizzata dallʼutente senza sovrapposizione degli oggetti presenti o perdita di informazioni tali da rendere incomprensibile il contenuto, anche in caso di ridimensionamento, ingrandimento o riduzione dellʼarea di visualizzazione o dei caratteri rispetto ai valori predefiniti di tali parametri.</p>
		<h4>Requisito n. 13</h4>
		<p>In caso di utilizzo di tabelle a scopo di impaginazione, garantire che il contenuto della tabella sia comprensibile anche quando questa viene letta in modo linearizzato e utilizzare gli elementi e gli attributi di una tabella rispettandone il valore semantico definito nella specifica del linguaggio a marcatori utilizzato.</p>
		<h4>Requisito n. 1</h4>4
		<p>Nei moduli (form), associare in maniera esplicita le etichette ai rispettivi controlli, posizionandole in modo che sia agevolata la compilazione dei campi da parte di chi utilizza le tecnologie assistive.</p>
		<h4>Requisito n. 15</h4>
		<p>Garantire che le pagine siano utilizzabili quando script, applet, o altri oggetti di programmazione sono disabilitati oppure non supportati; ove ciò non sia possibile fornire una spiegazione testuale della funzionalità svolta e garantire una alternativa testuale equivalente, in modo analogo a quanto indicato nel requisito n. 3.</p>
		<h4>Requisito n. 16</h4>
		<p>Garantire che i gestori di eventi che attivano script, applet o altri oggetti di programmazione o che possiedono una propria specifica interfaccia, siano indipendenti da uno specifico dispositivo di input.</p>
		<h4>Requisito n. 17</h4>
		<p>Garantire che le funzionalità e le informazioni veicolate per mezzo di oggetti di programmazione, oggetti che utilizzano tecnologie non definite da grammatiche formali pubblicate, script e applet siano direttamente accessibili.</p>
		<h4>Requisito n. 18</h4>
		<p>Nel caso in cui un filmato o una presentazione multimediale siano indispensabili per la completezza dellʼinformazione fornita o del servizio erogato, predisporre una alternativa testuale equivalente, sincronizzata in forma di sotto-titolazione o di descrizione vocale, oppure fornire un riassunto o una semplice etichetta per ciascun elemento video o multimediale tenendo conto del livello di importanza e delle difficoltà di realizzazione nel caso di trasmissioni in tempo reale.</p>
		<h4>Requisito n. 19</h4>
		<p>Rendere chiara la destinazione di ciascun collegamento ipertestuale (link) con testi significativi anche se letti indipendentemente dal proprio contesto oppure associare ai collegamenti testi alternativi che possiedano analoghe caratteristiche esplicative, nonché prevedere meccanismi che consentano di evitare la lettura ripetitiva di sequenze di collegamenti comuni a più pagine.</p>
		<h4>Requisito n. 20</h4>
		<p>Nel caso che per la fruizione del servizio erogato in una pagina è previsto un intervallo di tempo predefinito entro il quale eseguire determinate azioni, è necessario avvisare esplicitamente lʼutente, indicando il tempo massimo consentito e le alternative per fruire del servizio stesso.</p>
		<h4>Requisito n. 21</h4>
		<p>Rendere selezionabili e attivabili tramite comandi da tastiere o tecnologie in emulazione di tastiera o tramite sistemi di puntamento diversi dal mouse i collegamenti presenti in una pagina; per facilitare la selezione e lʼattivazione dei collegamenti presenti in una pagina è necessario garantire che la distanza verticale di liste di link e la spaziatura orizzontale tra link consecutivi sia di almeno 0,5 em, le distanze orizzontale e verticale tra i pulsanti di un modulo sia di almeno 0,5 em e che le dimensioni dei pulsanti in un modulo siano tali da rendere chiaramente leggibile lʼetichetta in essi contenuta.</p>
		<h4>Requisito n. 22</h4>
		<p>Per le pagine di siti esistenti che non possano rispettare i su elencati requisiti (pagine non accessibili), in sede di prima applicazione, fornire il collegamento a una pagina conforme a tali requisiti, recante informazioni e funzionalità equivalenti a quelle della pagina non accessibile ed aggiornata con la stessa frequenza, evitando la creazione di pagine di solo testo; il collegamento alla pagina conforme deve essere proposto in modo evidente allʼinizio della pagina non accessibile.</p>
		<h2>3.6.2 Requisiti Hardware</h2>
		<em>Requisiti tecnici di accessibilità per i personal computer di tipo desktop e portatili<sup id="cite_ref_4"><a href="#cite_note_4">[4]</a></sup></em>
		<h4>Requisito n. 1</h4>
		<p>Il computer deve potersi collegare mediante canali standard a sistemi di accensione remota.</p>
		<h4>Requisito n. 2</h4>
		<p>I tasti e i pulsanti devono essere raggiungibili ed operabili con minima abilità e con una forza massima di 2,3 Kg (pari a circa 22,2 N).</p>
		<h4>Requisito n. 3</h4>
		<p>I tasti e i pulsanti devono essere tattilmente percepibili, senza necessità di attivarli.</p>
		<h4>Requisito n. 4</h4>
		<p>In presenza della funzionalità di ripetizione dei tasti, lʼintervallo di tempo sia per la prima ripetizione che per le ripetizioni successive, deve essere configurabile in almeno 2 secondi.</p>
		<h4>Requisito n. 5</h4>
		<p>Il diverso stato di attivazione dei tasti selezionati o bloccati deve essere percepibile, oltre che visivamente, anche attraverso il tatto o lʼudito.</p>
		<h4>Requisito n. 6</h4>
		<p>Deve essere presente almeno una porta di comunicazione conforme agli standard industriali.</p>
		<h4>Requisito n. 7</h4>
		<p>Qualora venga utilizzata una forma di identificazione biometrica, deve essere fornita una forma alternativa di identificazione.</p>
		<h2>3.6.3 Requisiti Software</h2>
		<em>Requisiti tecnici di accessibilità per lʼambiente operativo, le applicazioni e i prodotti a scaffale<sup id="cite_ref_5"><a href="#cite_note_5">[5]</a></sup></em>
		<h4>Requisito n. 1</h4>
		<p>Le funzioni previste dallʼinterfaccia utente devono poter essere attivate anche attraverso comandi da tastiera nei casi in cui possa essere fornita una descrizione della funzione stessa o del risultato della sua esecuzione.</p>
		<h4>Requisito n. 2</h4>
		<p>Comandi e funzionalità dellʼinterfaccia utente non devono limitare o disabilitare le caratteristiche e le funzionalità di accessibilità dellʼambiente operativo documentate e rese disponibili dal produttore dellʼambiente stesso.</p>
		<h4>Requisito n. 3</h4>
		<p>Lʼapplicazione deve rendere disponibili sufficienti informazioni, quali gli elementi identificativi, le operazioni possibili e lo stato, sugli oggetti contenuti nellʼinterfaccia utente affinché le tecnologie assistive possano identificarli interpretandone le funzionalità.</p>
		<h4>Requisito n. 4</h4>
		<p>Nel caso di simboli grafici utilizzati per identificare controlli, indicatori di stato o altri elementi di programma, il significato assegnato a tali simboli deve essere coerente nellʼambito dellʼintera applicazione, ivi compresa lʼinterfaccia utente.</p>
		<h4>Requisito n. 5</h4>
		<p>Le informazioni di tipo testuale devono essere fornite utilizzando le funzionalità dellʼambiente operativo previste per la visualizzazione del testo; in particolare devono essere disponibili il contenuto testuale, la locazione del punto di inserimento e gli attributi del testo.</p>
		<h4>Requisito n. 6</h4>
		<p>Lʼapplicazione che utilizza segnalazioni audio deve prevedere una funzionalità equivalente di tipo visivo, seguendo le eventuali convenzioni dellʼambiente operativo.</p>
		<h4>Requisito n. 7</h4>
		<p>Per fornire informazioni, per indicare o per richiedere azioni non devono essere utilizzati unicamente animazioni, elementi grafici o sonori e differenze di colori.</p>
		<h4>Requisito n. 8</h4>
		<p>Le applicazioni non devono sovrapporsi alle scelte effettuate dallʼutente riguardo a livelli di contrasto, colori ed altri attributi di visualizzazione.</p>
		<h4>Requisito n. 9</h4>
		<p>Lʼinterfaccia utente non deve contenere elementi di testo, oggetti o altri elementi lampeggianti aventi una frequenza di intermittenza maggiore di 2Hz e minore di 55Hz.</p>
		<h4>Requisito n. 10</h4>
		<p>Lʼelemento attivo “focus” di una interfaccia utente deve essere chiaramente identificabile; la identificazione e la variazione del focus devono essere segnalate a livello di interfaccia di programmazione (API) affinché le tecnologie assistive possano gestirle; vanno altresì adeguatamente segnalati gli elementi che richiedono obbligatoriamente unʼazione da parte dellʼutente.</p>
		<h4>Requisito n. 11</h4>
		<p>La documentazione di supporto al prodotto e le caratteristiche di accessibilità devono essere rese disponibili anche in formato elettronico accessibile.</p>
		<h2>3.6.4 Verifica soggettiva</h2>
		<em>Criteri di valutazione per la verifica soggettiva dellʼaccessibilità delle applicazioni basate su tecnologie internet<sup id="cite_ref_6"><a href="#cite_note_6">[6]</a></sup></em>
		<p>Il decreto ministeriale prevede, in aggiunta ai già citati requisiti, una serie di criteri essenziali su cui basare una verifica soggettiva dei siti Web e delle applicazioni realizzate con tecnologie Internet.</p>
		<h4>Percezione</h4>
		<p>Informazioni e comandi necessari per lʼesecuzione dellʼattività devono essere sempre disponibili e percettibili;</p>
		<h4>Comprensibilità</h4>
		<p>Informazioni e comandi necessari per lʼesecuzione delle attività devono essere facili da capire e da usare;</p>
		<h4>Operabilità</h4>
		<p>Informazioni e comandi devono consentire una scelta immediata della azione adeguata per raggiungere lʼobiettivo voluto;</p>
		<h4>Coerenza</h4>
		<p>Simboli, messaggi e azioni devono avere lo stesso significato in tutto lʼambiente; salvaguardia della salute (safety): lʼambiente deve possedere caratteristiche idonee a salvaguardare il benessere psicofisico dellʼutente;</p>
		<h4>Sicurezza</h4>
		<p>Lʼambiente deve possedere caratteristiche idonee a fornire transazioni e dati affidabili, gestiti con adeguati livelli di sicurezza;</p>
		<h4>Trasparenza</h4>
		<p>Lʼambiente deve comunicare allʼutente lo stato, gli effetti delle azioni compiute e le informazioni necessarie per la corretta valutazione della dinamica dellʼambiente stesso;</p>
		<h4>Apprendibilità</h4>
		<p>Lʼambiente deve possedere caratteristiche di utilizzo di facile e rapido apprendimento; aiuto e documentazione: funzioni di aiuto, quali le guide in linea, e documentazione relativa al funzionamento dellʼambiente devono essere di facili reperimento e connesse al compito svolto dallʼutente;</p>
		<h4>Tolleranza agli errori</h4>
		<p>Lʼambiente, pur configurandosi in modo da prevenire gli errori, ove questi, comunque, si manifestino, deve fornire appropriati messaggi che individuino chiaramente lʼerrore occorso e le azioni necessarie per superarlo;</p>
		<h4>Gradevolezza</h4>
		<p>Lʼambiente deve possedere caratteristiche idonee a favorire e mantenere lʼinteresse dellʼutente;</p>
		<h4>Flessibilità</h4>
		<p>Lʼambiente deve tener conto delle preferenze individuali e dei contesti.</p>
		<p>Questa analisi soggettiva si sviluppa su tre fasi:
			<ul>
				<li>Un incipit portato avanti da un “esperto”.</li>
				<li>Un test diretto con lʼutenza.</li>
				<li>Lʼelaborazione dei dati raccolti con la stesura di un rapporto conclusivo.</li>
			</ul>
		</p>
		<h2>3.6.5 Il logo</h2>
		<em>Logo di accessibilità dei siti Web e delle applicazioni realizzate con tecnologie Internet<sup id="cite_ref_7"><a href="#cite_note_7">[7]</a></sup></em>
		<p>Con il Decreto Ministeriale è stato creato anche un logo che, come nel caso di quelli messi a disposizione dal W3C, attesta il grado di <em>accessibilità dei siti Web e delle applicazioni realizzate con tecnologie Internet</em>.</p>
		<p>Il logo consiste nella sagoma di un personal computer unito a tre figure umane stilizzate le quali fuoriescono dallo schermo a braccia levate. Questo logo risponde ai vari livelli di accessibilità.</p>
		<h4>Logo senza asterischi</h4>
		<p>Il logo senza asterischi risponde al primo livello di accessibilità, legato alla conformità ai requisiti previsti per la verifica tecnica, ovvero vengono rispettati tutti i requisiti Web. Il logo utilizzabile per questo livello di accessibilità è il seguente:</p>
		<figure>
			<img src="../imgs/logo accessibilita no asterischi.png" alt="logo accessibilita no asterischi">
		</figure>
		<h4>Logo con asterischi</h4>
		<p>Consiste nello stesso disegno sopra descritto con lʼaggiunta di asterischi. Questa tipologia di logo garantisce la conformità ai requisiti della verifica tecnica e lʼulteriore livello di qualità raggiunto dal sito a seguito dellʼesito positivo della verifica soggettiva.</p>
		<p>Tale livello di qualità è indicato da uno, due o tre asterischi riportati nella parte del logo raffigurante la tastiera del personal computer. Chiaramente un maggior numero di asterischi indica una maggior qualità della pagina Web. Di seguito è mostrato il logo con tre asterischi che attesta il raggiungimento del massimo livello di accessibilità Web.</p>
		<figure>
			<img src="../imgs/logo accessibilta asterischi.png" alt="logo accessibilta asterischi">
		</figure>
		<section class="referenze">
			<h4>Referenze</h4>
			<ol>
				<li><sup id="cite_note_1"><a href="#cite_ref_1">^</a></sup> <a href="http://www.section508.gov/">http://www.section508.gov/</a> - sezione 508 del Governo degli Stati Uniti.</li>
				<li><sup id="cite_note_2"><a href="#cite_ref_2">^</a></sup> Per il testo integrale della legge si rimanda alla lettura dellʼ<a href="http://assistivetechnology.it/appendice/legge-stanca">Appendice C</a> ad essa dedicata.</li>
				<li><sup id="cite_note_3"><a href="#cite_ref_3">^</a></sup> <a href="http://www.pubbliaccesso.gov.it/normative/DM080705-a.htm">http://www.pubbliaccesso.gov.it/normative/DM080705-a.htm</a> - link al D.M. 8 luglio 2005 - Allegato A.</li>
				<li><sup id="cite_note_4"><a href="#cite_ref_4">^</a></sup> <a href="http://www.pubbliaccesso.gov.it/normative/DM080705-C.htm">http://www.pubbliaccesso.gov.it/normative/DM080705-C.htm</a> - link al D.M. 8 luglio 2005 - Allegato C.</li>
				<li><sup id="cite_note_5"><a href="#cite_ref_5">^</a></sup> <a href="http://www.pubbliaccesso.gov.it/normative/DM080705-D.htm">http://www.pubbliaccesso.gov.it/normative/DM080705-D.htm</a> - link al D.M. 8 luglio 2005 - Allegato D.</li>
				<li><sup id="cite_note_6"><a href="#cite_ref_6">^</a></sup> <a href="http://www.pubbliaccesso.gov.it/normative/DM080705-B.htm">http://www.pubbliaccesso.gov.it/normative/DM080705-B.htm</a> - link al D.M. 8 luglio 2005 - Allegato B.</li>
				<li><sup id="cite_note_7"><a href="#cite_ref_7">^</a></sup> <a href="http://www.pubbliaccesso.gov.it/normative/DM080705-E.htm">http://www.pubbliaccesso.gov.it/normative/DM080705-E.htm</a> - link al D.M. 8 luglio 2005 - Allegato E.</li>
			</ol>
		</section>
	</article>
	<nav>
		<ul>
			<li class="prev"><a href="http://assistivetechnology.it/accessibilita-web/conclusione"><< 3.5 Accessibilita' Web - Conclusione</a> |</li>
			<li class="index"><a href="http://assistivetechnology.it/">Indice</a> |</li>
			<li class="next"><a href="http://assistivetechnology.it/appendice/braille">Appendice A - Braille >></a></li>
		</ul>
	</nav>
<?php include_once("../include/footer.php") ?>