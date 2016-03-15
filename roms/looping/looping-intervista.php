<?php
$title = 'MAME | Interview with Looping developer';
?>
<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/header.html'); ?>

<!-- Page Content -->
<div class="container">

	<center><h1 class="page-header">Intervista allo sviluppatore di Looping.</h1></center>

				<h1>Intervista allo sviluppatore di Looping.</h1>


				Intervista con Giorgio Ugozzoli, l'uomo dietro a "Looping (1982) (Video Games Gmbh)".<br>
				<br>
				Intervista condotta nel Marzo 2011 da Corrado "Kold666" Tomaselli.<br>
				Translated English version <a href="./looping-interview.html">here</a>.
				<br>
				<br>
				Grazie alla generosità di Reinhard Stompe, fondatore della Video GamesGmbh, le ROMS originali 
				di Looping sono disponibili gratuitamente <a href="./index.html">qui</a> per uso non commerciale.
				<br>
				<br>
				<b>1) Raccontami qualcosa di te, dove e quando sei nato, cosa hai studiato, quali sono i tuoi hobbies etc.</b><br><br>
				Sono nato a Parma nel 1946, poi sono emigrato in Argentina nel 1950 dove sono cresciuto e dove ho
				studiato laureandomi in Ingegneria con la specializzazione di "Tecniche Digitali" prevalentemente
				hardware. Nel frattempo giocavo a pallacanestro nella selezione di Bahia Blanca vincendo il Campionato
				Argentino per due volte nel 1969 e 1970. Diciamo che i miei due metri mi hanno permesso di giocare e di
				conseguenza studiare ($$).<br>
				Sono venuto in Italia nel 1976, dove ho iniziato la mia attività professionale. Sono un appasionato di volo,
				ho il brevetto di volo a vela e motore presi proprio nel periodo dove "covavo" Looping.<br>
				<br>
				<b>2) Looping fu il tuo primo gioco commerciale?</b><br><br>
				Looping fu il primo videogioco commerciale mentre avevo già costruito uno dei primi flippers che
				sostituivano i contatori meccanici (reels) con i display elettronici, il flipper si chiamava "Timothy T" come il
				grande cavallo da trotto famoso negli anni '70. Poi, sempre restando nell'ambito dei progetti commerciali
				avevo già ideato e realizzato una serie di gioccatoli elettronici basati sul microcomputer single chip
				TMS1000 prodotti e commercializzati dalla Reel di Modena allora, insieme a Clementoni, era una delle
				maggiori produttrici di giocattoli elettronici (anni 1978 - 1982), poi travolti dall'ondata dei giocattoli cinesi.<br>
				<br>
				<b>3) Perchè scelsi la Videogames Gmbh per pubblicare il gioco e non una società italiana?</b><br><br>
				In realtà loro hanno scelto me. Erano proprio gli anni che mi ero attrezzato per fare sviluppi con i
				componenti della Texas Instruments, ero uno dei pochi in Europa che lavorava nel settore consumer con
				il TMS1000, un microcomputer single chip a 4 bit. Fui segnalato dalla Texas Instruments, la Videogames
				cercava progettisti con conoscenze del TMS9980 (8 bit) con il quale avevano realizzato un primo gioco
				(Super Tank nel 1981) e stavano cercando idee e progettisti per un successivo gioco. Non credo ci fossero
				a suo tempo società in Italia in grado di commercializzare un gioco totalmente nuovo. Era il perido dove
				l'Italia era conosciuta come produttori di schede "cloni" di giochi originali ma non come produttore di
				giochi originali.<br>
				<br>
				<b>4) Hai programmato Looping completamente da solo? Hai progettato anche l'hardware?</b><br><br>
				A differenza degli altri produttori di hardware per videogiochi avevamo adottato un sistema a rack, un
				cestello con 3 schede CPU, I/O e Power Supply (Switching!!), in contraposizione ai produttori di single
				board. Sono nato come progettista hardware. Il concept la grafica e la scheda CPU le ho progettate
				interamente io (anche il disegno del circuito stampato) mentre la scheda video e alimentazione erano le
				stesse che Videogames aveva utilizzato per SuperTank.<br>
				<br>
				<b>5) Quali strumenti di sviluppo utilizzasti (hardware e software)?</b><br><br>
				Avevo investito tutti i miei risparmi in un sistema di sviluppo: il TI990/4 che era un microcomputer basato
				sul processore TMS9900 (16 bit nativo) con un ICE (In Circuit Emulator) per il TMS1000 e la Texas mi aveva
				regalato il ICE per il TMS 9900 semmai ne avesse avuto bisogno (non si poteva dire che fosse popolare).
				Contava con il SO, compiler e un potente debugger.<br>
				Il mercato era dominato dagli 8080 e 6800, l'idea di lavorare su un 16 bit nativo era entusiasmante, il
				gioco che avevo in mente aveva bisgno di molta CPU, i clock non aumentavano perciò il 16 bit era l'unica
				soluzione. Avevo provato in un primo tentativo il 8086 dato come più veloce (>4MHz contro i 3,3MHz), ma
				era un 16 bit "arrangiato" non nativo come il 9900 e perciò non così efficace. Con il 8086 non sarei riuscito
				a far scorrere lo sfondo e nemmeno avere tanti "sprite" volanti come avrei voluto.<br>
				Il software è stato sviluppato da 3 ragazzi neolaurati all'Università di Parma. Uno di loro mise in piedi ciò
				che avevamo chiamato il "Pascalatore" e cioè una specie di traduttore da Pascal ad assembler, metà con
				qualche procedura e metà a mano. Tutta la logica del gioco è stata sviluppata in questo modo mentre il
				volo del aeroplanino e gli spari sono stati programmati direttametne in assembler.<br>
				Grazie all'approccio a rack lo sviluppo fu abbastanza veloce. Abbiamo collegato il ICE al bus del rack
				sfruttando così la scheda video esistente perciò siamo andati in parallelo nello sviluppo del hardware e
				del software. L'emulazione del 9900 da parte del ICE si è dimostrata perfetta, anche nei loop critici perciò
				quando finimmo la scheda CPU è bastato bruciare le EPROM ed è partito subito.<br>
				<br>
				<b>6) Come hai codificato la sintesi vocale per il TMS5220 e quale software hai utilizzato?</b><br><br>
				Sempre grazie al mio rapporto preferenziale con Texas, la sintesi vocale fu realizzata totalmente da loro
				nel loro stabilimento di Nizza nel quale avevo già programmato altri speach per i gioccatoli e flipper. Per lo
				speach il mio "sponsor" era Giorgio Morosi poi diventato amministratore delegato della Texas Instruments
				Europa, fu lui a lanciarmi nel mondo della consulenza per le applicazioni con in nascenti microchip e con il
				quale avevo un rapporto privilegiato.<br>
				<br>
				<b>7) Costava molto programmare le parole?</b><br><br>
				Si era molto caro fare gli speach, per quanto riguarda i videogiochi si sceglievano parole o piccole frasi
				(Game over) prese da una libreria preconfezionata e proposta dalla Texas. L'utilizzo di parole da libreria non
				era però molto oneroso rispetto alla registrazione custom dei giocatoli in lingua italiana.<br>
				Ricordo che mi hanno anche ospitato a Nizza per una settimana. Tieni conto che solo per un gioccatolo
				elettronico prodotto dalla Reel gli avevo ottenuto un ordinativo di 100.000 pezzi, si trattava di un robot
				telecomandato parlante chiamato Charley il cui testimonial per la campagna pubblicitaria era.... Gilles
				Villeneuve. Se lo potevano sognare numeri del genere con dispositivi così soffisticati.<br>
				<br>
				<b>8) Quanto tempo ha richiesto programmare/progettare Looping?</b><br><br>
				8 mesi<br>
				<br>
				<b>9) Quanto costò progettare l'hardware di Looping?</b><br><br>
				Non fu un progetto costoso in questo senso, mancava solo la scheda CPU e anche se non avevo mai
				disegnato una 16 bit non ho avuto problemi grazie anche alla Texas che mi forniva componenti "appaiati".
				Il punto critico del 9900 era effettivamente la ram esterna che se non era velocissima comprometteva. Direi
				solo il costo dei programmatori: 3 persone per 8 mesi (sottopagate ).<br>
				<br>
				<b>10) Sapresti dirmi in quanti esemplari fu prodotto?</b><br><br>
				Non ricordo, la produzione dei cassoni e delle scheda era in Germania, nei loro stabilimenti. Credo che al
				epoca il break-even-point era 500.<br>
				<br>
				<b>11) Hai qualche aneddoto da raccontare su Looping?</b><br><br>
				Uno per tutti fu la discussione di come doveva funzionare la levetta e cioè se doveva essere come negli
				aeroplani veri oppure come intuito comanda e cioè per andare su si spinge in su (in avanti) e per andare in
				giù si spinge in giù (indietro). Negli aeroplani è al contrario. Non l'ho avuto vinta e perciò feci un egg con il
				quale scrivendo in Morse con il pulsante Fire un codice invertivo il senso della levetta, così giocavo come mi
				pareva.<br>
				<br>
				<b>12) Ci sono "Easter Egg" nascosti?</b><br><br>
				Uno è quello sopra e un'altro per far scorrere i nostri nomi, purtroppo no ricordo i codici, non erano
				intuitivi.<br>
				<br>
				<b>13) Quante revisioni furono programmate e quali bug andarono a correggere?</b><br><br>
				Solo una grande nuova release quando fu introdotto il quadro finale che non c'era nella prima release. E
				servita anche ovviamente a fissare tutti i minor bugs, no ci sono stati critical bugs.<br>
				<br>
				<b>14) Possiedi ancora l'hardware e software usato per programmare Looping o altri memorabilia di quei tempi
				(prototipi,note di programmazione,schemi elettrici, il codice sorgente)?</b><br><br>
				Dovrei tuffarmi nello scantinato dove quasi certamente ho i tabulati e i floppy, mentre per l'hardware non
				ho le schede ma conservo (letteralmente) i set dei chip sfusi (vedi allegato ). Notare nel fiasco di conserva
				il grosso 9900 bianco che la fa da padrone, era in ceramica!! (credo avesse 8.000 transistor).<br>
				<br>
				<img src="./chipJar.jpg" alt="Chip Jar" align="middle">
				<br>
				<b>15) Chi sono Alma, Marco, Pietro, Silvio, Mario e Luigi (Hi Score table della versione Videogames GMBH)?</b><br><br>
				La lista di nomi mi fa pensare che il rack che vi ha dato Stompe era di un gioco invenduto in quanto sono i
				ragazzi che lavoravano con me che nelle pause pranzo giocavano con i videogichi in azienda:<br>
				Alma = operaia nella catena di montaggio delle schede.<br>
				Marco, Pietro e Silvio = i tre programmatori, laureati in ingegneria.<br>
				Mario = specialista nella produzione di effetti sonori, sono suoi i tutti i suoni di looping.<br>
				Luigi = controllo qualità e test nella catena di montaggio.<br>
				<b>Stompe ha solo permesso l'uso gratuito senza scopo di lucro di Looping, ma non ha fornito il programma
				che è stato scaricato direttamente dalle schede trovate in commercio.</b><br>
				Non credo avesse il source, solo il object code per bruciare le Eprom. La cessione in licenza non prevedeva il
				source.<br>
				<br>
				<b>16) Pensi che sia stata una versione prototipo?<br>
				Nelle due revisioni di Looping con il copyright "Videogames GMBH (license Venture Line)" per il mercato,
				credo, americano, i nomi dell'hi score table sono solo di 3 lettere.</b><br><br>
				E' molto probabile si tratti di un prototipo da fiera che erano i primi usciti dalla linea ed interamente
				prodotti in Italia. La catena in germania è iniziata dopo le prime presentazioni fieristiche, Londra,
				Francoforte, Parigi e Roma erano le più importanti (In Europa).<br>
				<br>
				<b>17) Dove costruivate in Italia le PCB e i mobili?</b><br><br>
				E' stata creata una società apposta per l'assemblaggio dei videogiochi e flipper, si chiamava AMTEC srl
				(Amusement Technology - 1980) ed era a Parma, soci io e Videogames Gmbh.<br>
				<br>
				<b>18) Ti sei occupato anche della conversione di Looping per il Coleco Vision e del successivo Sky Bumper (della
				Venture Line)?</b><br><br>
				Non ho partecipato, le operazioni le hanno seguite direttamenet i tedeschi.<br>
				<br>
				<b>19) Hai progettato/programmato altri videogames o software?</b><br><br>
				Non videogiochi, ho invece lavorato su hardware di flipper (vedi Space Shuttle della Williams, del quale
				conservo un esemplare in casa). Ho progettato e prodotto una scheda "universale" per flipper basata sul
				9980 della quale sono stati prodotti tantissimi esemplari utilizzati la maggior parte per rigenerare flipper
				elettromeccanici. La scheda non aveva bisogno di essere programmata per adattarla ad un nuovo gioco ma
				solo configurata. Una enorme matrice tridimensionale causa-effetto-punti veniva bruciata in una EPRON
				e il gioco era pronto, piccola genialità tutta italiana.... Ciò è stato possibile grazie al fatto che i flipper
				elettromeccanici non avevano logiche di gioco complesse. Anche di questa scheda conservo un esemplare.
				Da notare il fatto che su una singola scheda c'era la CPU con tutti i chip di contorno, le EPROM e 24 TRIAC!!<br>
				per commandare i solenoidi con picchi di 10Amp - alla faccia dell'insensibilità ai disturbi.<br>
				<br>
				<b>20) Hai avuto molte richieste di quel prodotto da parte degli operatori?</b><br><br>
				La scheda per il retrofit era una ottima idea, una di quelle che ti può cambiare la vita, si vendevano
				all'epoca a 100.000Lit.(*) e c'erano i magazzini pieni di flipper elettromeccanici perfettamente funzionanti
				mandati in magazzino dai nuovi elettronici. Eravamo alla metà degli anni '80, avevo iniziato una trattativa
				per la cessione del progetto a uno dei più grossi fabbricanti di flipper in Italia. La trattativa era complessa
				e trattandosi di una esclusiva non potevo andare da altri. L'attesa è stata fatale, l'azienda ha chiuso credo
				nel '86 e per me era già tardi aprire altre strade.<br>
				<br>
				<b>21) Conosci il progetto MAME? In caso affermativo, cosa ne pensi?</b><br><br>
				No, solo ora che me lo hai fatto notare.<br>
				<br>
				<b>22) Di cosa ti occupi ora?</b><br><br>
				Faccio il consulente, lavoro nel mondo dei servizi per la telefonia mobile e progetto "cose strane" : 
				http://epigonion.mzone.it/Laser.html<br>
				<br><br>
				(*) 100,000 Lire nel 1984 sono equivalenti a 130.00 Euro di oggi.
				<br>
	<br/><br/>
</div>
<!-- /.container -->

<?php require($_SERVER['DOCUMENT_ROOT'] . '/_include/html/footer.html'); ?>