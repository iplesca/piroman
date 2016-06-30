@extends('layout')
 
@section('main')
<h1>REGULAMENT</h1>
<h2><a class="nolink" href="#pozitii-si-roluri">FUNCŢII ȘI ROLURI</a></h2>
<h3><a class="nolink" href="#legenda">Poziţii*</a></h3>
<h4><a href="#pozitie-cc"><span>CC</span><span>Comandantul Clanului</span><em>Commander</em></a></h4>
<h4><a href="#pozitie-ce"><span>CE</span><span>Comandant Executiv</span><em>Executive Officer</em></a></h4>
<h4><a href="#pozitie-oc"><span>OC</span><span>Ofiţer de Cadre</span><em>Personnel Officer</em></a></h4>
<h4><a href="#pozitie-oi"><span>OI</span><span>Ofiţer Informaţii</span><em>Intelligence Officer</em></a></h4>
<h4><a href="#pozitie-os"><span>OS</span><span>Ofiţer Strateg</span><em>Combat Officer</em></a></h4>
<h4><a href="#pozitie-oq"><span>OQ</span><span>Ofiţer Intendent</span><em>Quartermaster</em></a></h4>
<h4><a href="#pozitie-or"><span>OR</span><span>Ofiţer Recrutor</span><em>Recruitment Officer</em></a></h4>
<h4><a href="#pozitie-oj"><span>OJ</span><span>Ofiţer Junior</span><em>Junior Officer</em></a></h4>
<h4><a href="#pozitie-sol"><span>SOL</span><span>Soldat</span><em>Private</em></a></h4>
<h4><a href="#pozitie-rec"><span>REC</span><span>Recrut</span><em>Recruit</em></a></h4>
<h4><a href="#pozitie-vet"><span>VET</span><span>Veteran</span><em>Rezervist</em></a></h4>
<h3><a class="nolink" href="#denominari">Denominări*</a></h3>
<h4><a href="#pozitie-or-ac"><span>OR-AC</span><span>Ofițer Recrutor Asistent Cadre</span></a></h4>
<h4><a href="#pozitie-oj-i"><span>OJ-I</span><span>Ofițer Junior de Informații</span></a></h4>
<h4><a href="#pozitie-oj-s"><span>OJ-S</span><span>Ofițer Junior de Strategie</span></a></h4>
<h4><a href="#pozitie-oj-r"><span>OJ-R</span><span>Ofițer Junior de Recrutare</span></a></h4>
<h5>*toate pozițiile au ca SUPERIOR și MILITAR pe CE și CC</h4>

<h2><a href="#comunicarea-in-clan">COMUNICAREA ÎN CLAN</a></h2>
<h3><a href="#limbajul">Limbajul</a></h3>
<h3><a href="#ierarhie-ranguri">Ierarhic/ranguri</a></h3>
<h4><a href="#sedinta-ofiteri-rang-superior">Şedință ofițeri de rang superior</a></h4>
<h4><a href="#sedinte-specializare">Şedințe pe specializare</a></h4>
<h4><a href="#pregatire-lupte">Pregătire lupte de clan</a></h4>
<h3><a href="#comunicarea-in-echipe">Comunicarea în echipe</a></h3>
<pre>

<a class="p_heading" name="pozitie-vet">Rezervist (VET) - Reservist</a>
<p>Jucător/ofiţer remarcat, veteran, cu o bogată activitate în clan, care, pentru terţe motive bine întemeiate, nu poate activa o vreme (care trebuie definită) sau intră destul de rar.
NOTĂ: <em>Se acordă în cazuri *excepţionale* şi cu acordul Comandantului/Executiv (CE/CC)</em></p>

<a class="p_heading" name="pozitie-rec">Recrut (REC) - Recruit</a>
<p>Poziţie standard pentru orice nou recrut. Reprezintă perioada "de probă", între jucător şi clan - în care ambele părţi se lămuresc dacă cealaltă poate oferi ceea ce fiecare caută.
Din această poziţie, jucătorul trebuie lăsat (chiar rugat) să folosească cele mai multe tancuri pe care le are le dispoziţie (preferenţial).
SE ACORDĂ: de către OC, OR-AC, OR și OJ-R (cu acord superior). Opțional: OS
SUPERIOR: OJ-R, OR, OR-AC, OC
MILITAR: OJ-S, OS
</p>
<a class="p_heading" name="pozitie-sol">Soldat (SOL) - Private</a>
<p>Este poziţia majorităţii membrilor de clan, care au trecut procesul de recrutare şi care doresc să fie activi ca jucători, dar fără a se implica în mersul clanului.
Numele poziţiei nu implică vreo formă de "subapreciere" asupra jucătorului.
SE ACORDĂ: de către OR, OR-AC, OC
SUPERIOR: OR-AC, OC
MILITAR: OJ-S, OS
<p>
<a class="p_heading" name="pozitie-oj">Ofiţer junior (OJ) - Junior officer</a>
<p>Se acordă membrilor care manifestă un interes evident de a intra în rangurile ofiţerilor şi care doresc să se implice în bunul mers al clanului.
Această poziţie este primul pas către poziţii specializate (OR, OC, OS, OI, OQ)
În funcţie de specialitatea vizată, fiecare OJ va fi sub directă comandă/îndrumare a unui ofiţer de resort.
SE ACORDĂ: de către OC la recomandarea OS, OI, OQ, CE, CC
SUPERIOR: OC, ofițerul de specialitate
MILITAR: OS
</p>

<a class="p_heading" name="pozitie-oj-s">Ofițer junior de strategie (OJ-S)</a>
<p>Membru de clan cu interes direct de a deveni OS (strateg). Observă, fură și învață de la OS-ul desemnat (sau orice altă oportunitate). Manifestă opinii și întrebări pe tema dată.
</p>
<a class="p_heading" name="pozitie-oj-i">Ofițer junior de informații (OJ-I)</a>
<p>Membru de clan bine conectat la comunitatea românească/clanuri, care progresează spre poziția de OI.
Ajută OI cu strângerea de informații, "bârfe" și alte surse. Asistă la planificarea luptelor de clan.
</p>
<a class="p_heading" name="pozitie-oj-r">Ofițer junior de recrutare (OJ-R)</a>
Aspirant la titlul de Ofițer de Recrutare. Asistă la procesul de recrutare.

<a class="p_heading" name="pozitie-oj-q">Ofițer junior de intendență (OJ-Q)</a>
<p>Fooarte rar spre Niciodată nu va exista această poziție alocată. Ofițerul Intendent va fi promovat din rândul ofițerilor OS, OI și OC (sau din CE)
</p>
<a class="p_heading" name="pozitie-oj-c">Ofițer junior de cadre (vezi OR-AC)</a>


<a class="p_heading" name="pozitie-or">Ofiţer recrutor (OR) - Recruitment officer</a>
<p>Se află sub directă comandă, îndrumare şi *responsabilitate* a OC (și OR-AC afiliat). Împreună cu OC, redactează şi perfectează mecanismul de recrutare şi sunt mereu atenţi la posibili candidaţi pe orice mediu (joc, site WoT, prieteni)
SE ACORDĂ: de către OC
SUPERIOR: OC
MILITAR: OJ-S, OS
</p>
<a class="p_heading" name="pozitie-or-ac">Ofițer recrutor asistent de cadre (OR-AC)</a>
Echivalentul ofițerului junior pentru poziția de OC. Persoana respectivă își asumă/îi sunt atribuite responsabilități specifice/exclusive Ofițerului de Cadre.
</p>
<a class="p_heading" name="pozitie-oq">Ofiţer intendent (OQ) - Quartermaster</a>
<p>Această poziţie va fi indisponibilă pentru mult timp şi momentan asumată de CC. (Disponibilitatea va apărea când vom fi un clan cu resurse, în primul rând, şi cu cel puţin 50 de membri şi activitate de fortăreaţă susţinută).
Lucrează împreună cu CC, OC, OS pentru o bună distribuire a resurselor clanului (creare rezerve, planificare construcţie fortăreaţă, distribuire gold din trezorerie către membri)
SE ACORDĂ: de către CC.
SUPERIOR: CE, CC
MILITAR: OJ-S, OS
</p>
<a class="p_heading" name="pozitie-oc">Ofiţer de cadre (OC) - Personnel officer</a>
<p>Are în responsabilitate toţi Ofiţerii Recrutori (OR). Monitorizează activitatea şi calitatea muncii acestora.
Perfectează metode de recrutare (texte, planuri, idei etc.).
Promovează (după caz) în poziţii de SOL, OJ, OR și OR_AC.
Supraveghează activitatea REC şi face propuneri de avansare în grad de OC, OI, OS.
Monitorizează şi ține "fişe de personal" pentru *TOȚI* membrii din clan ( cu precădere cei subordonați).
Observator şi raportor al moralului clanului.
SE ACORDĂ: de către CE, CC
SUPERIOR: CE, CC
GRADAȚI: OR-AC - îi ajută pentru progresie și este asistat de către aceștia
MILITAR: OJ-S, OS
</p>
<a class="p_heading" name="pozitie-oi">Ofițer de informații (OI) - Intelligence officer</a>
<p>Acordat unui membru (de multe ori direct recrutat pentru această poziție) care este bine conectat la "wot-o-sferă": jucători, performanțe și activitate a ALTOR CLANURI românești (și nu doar).
Propune date și clanuri pentru lupte (clan wars - atac).
Propune data/ora luptelor defensive (clan wars - apărare)
Informațiile procurate sunt furnizate CE și CC.
SE ACORDĂ: de către CE, CC
SUPERIOR: CE, CC
GRADAȚI: OJ-I
MILITAR: OJ-S, OS
</p>
<a class="p_heading" name="pozitie-os">Ofițer strateg (OS - Combat officer)</a>
<p>Membru din clan expert în tehnici militare și strategii. Cunoaște toate dichisurilor tancurilor, poziționării tancului/tancurilor, hărților.
Studiază și inovează constant noi strategii.
Află ultimele hack-uri. Are fler și autoritate și I SE ACORDĂ RESPECT ȘI AUTORITATE.
Poate desemna/consulta OJ-S pentru meciuri.

SE ACORDĂ: de către CE, CC
SUPERIOR: CE, CC
GRADAȚI: OJ-S, Absolut TOȚI membrii
MILITAR: CE, CC
</p>
<a class="p_heading" name="pozitie-ce">Comandant Executiv (CE) - Executive officer</a>
<p>Cine are onoarea de a avea această poziție va avea multe bătăi de cap :)
CE este o clonă 95% a CC. Are responsabilități și disponbilitate pentru orice OC, OI, OS și OQ.
Poate (și trebuie, după caz) să înlocuiască/suplinească orice poziție de ofițer - în limita posibilităților.
Are abilități (și le îmbunătățește) în toate specializările de ofițeri (majoritatea).
Urmărește dezvoltarea clanului, construcția fortăreței, sporirea numărului de membri și reputația/faima clanului.

Off-game: monitorizează serverul Web și/sau cel de TS (funcționare, permisiuni, probleme)

NOTĂ: <em>Desemnează și supervizează Ofițerul Strateg (sau OS-J) pentru fiecare meci</em>.

SE ACORDĂ: de către CC, exclusiv.
SUPERIOR/MILITAR: CC
GRADAȚI: OS, OI, OC, OQ, OR (și restul)
</p>
<a class="p_heading" name="pozitie-cc">Comandantul Clanului (CC) - Commander</a>
<p>Alfa și Omega, boss, șăfu, tata-la-bani, Dumnezo și Satan în același timp :)
Cred că ați prins ideea cu ce mă ocup eu, dacă acumulați toate responsabilitățile celorlalte poziții - plus vreo câteva exclusive: construit site, asigurat/cumpărat resurse (hosting, TS), finanțare concursuri/premii (când se vor putea organiza).

A, mai e o chestie cu care mă ocup: mediez conflicte. De pe acum, orice problemă poate apărea, dacă nu găsiți o rezolvare amiabilă/de comun acord - atunci trebuie să ajungă la mine. Vă garantez imparțialitate și corectitudine.
</p>

<a class="p_heading" name="comunicarea-in-clan">COMUNICAREA ÎN CLAN</a>

<a class="p_heading" name="limbajul">Limbajul</a>
<p>Este ok un limbaj relaxat, prietenos. Unele înjurături sunt "ok" (în ghilimele, "neoficial", și preferabil cu sens şi justificate) atât timp cât nu devin injurii (consultați definiția DEX).
Păcatul CAPITAL şi INTERZIS este "atacul la persoană", indiferent prin ce metodă sau manieră, incluzând discriminarea de sex, religie, etnie, naționalitate, rasă (clasicele).
Orice altă formă de "glumă" cu iz/sens discriminatoriu sau defăimător AR PUTEA fi tolerată, atât timp cât nu reprezintă un atac la persoană sau bădărănie de joasă speță ŞI atmosfera de discuție este una relaxată şi TOLERANTĂ. (cred că înțelege toată lumea la ce mă refer - n-aş vrea să văd "interpretări pe marginea regulamentului" care să exploateze orice alt caz nescris). Râdem, glumim, dar nu sărim gardul.

O sugestie arzătoare este să fiți răbdători, în A SPUNE, în A ASCULTA şi mai ales în A ÎNȚELEGE. Orice problemă are de obicei mai multe fețe şi cauze iar absolut nimeni nu deține adevărul suprem.
Într-o situație latent/potențial conflictuală (şi vor fi), asigurați-vă că ştiți întregul context înainte de a emite opinii decisive și agresive şi judecăți definitive.

NOTĂ: <em>În categoria "atac la persoană" și injurii intră și atitudinea față de adversari. Vă rog păstrați-vă un limbaj civilizat - și moderație chiar și când sunteți înjurați. "Nu te coborî la nivelul porcului că ajungi în cocină și te va bate cu experiența lui"</em>.
</p>
<a class="p_heading" name="ierarhie-ranguri">Ierarhic/ranguri</a>
<p>Conversațiile se poartă cu precădere în camerele adecvate de pe serverul de TS (cu puține excepții).
Important: dacă sunt membri prezenți deja, onorabil este să dați un poke pentru permisiunea de a intra.

Astfel, există următoarele tipuri:
</p>
<a class="p_heading" name="sedinta-ofiteri-rang-superior">Şedință ofițeri de rang superior</a>
<p>Acestea sunt CC, CE, OS, OI, OC, OQ. Se vor desfăşura în camera *Rang Superior*.
</p>
<a class="p_heading" name="sedinte-specializare">Şedințe pe specializare</a>
<p>Sunt solicitate de ofițeri de Informații, Strategie, Cadre către ofițerii juniori/adjuncți şi invers, în camera *Consiliu*.
</p>
<a class="p_heading" name="pregatire-lupte">Pregătire lupte de clan</a>
<p>În avansul unei lupte, toți membrii selectați se vor prezenta în camera *Pregătire Luptă*
Orice altă formă de asociere de ranguri se poate manifesta liber în celelalte camere.

Într-un clan nu există democrație. Un membru cu o poziția superioară are ultimul cuvânt, dacă doreşte.
În orice context (echipe, detaşament, CW), cel mai mare în rang îşi asumă conducerea şi se oferă să o predea dacă apare un membru cu o poziție superioară, informându-l despre situația în fapt (cine face strategia, cine a fost recrutat/recrutor, alte informații etc.). Excepția de la regulă este prezența CE sau CC: nimic nu se schimbă decât la solicitare expresă a respectivului.

Totuşi, militez pentru o forma "uşoară" de democrație, care se numeşte bun-simț. Rangurile superioare vor ține cont de opinia celorlalți, totodată putând preda comanda unui alt ofițer (egal/subordonat). Abuzul de rang va fi monitorizat/sancționat.
</p>
<a class="p_heading" name="comunicarea-in-echipe">Comunicarea în echipe</a>
<p>*Secțiune incompletă, în progres

Înainte oricărei lupte, se fac pregătiri astfel:
- se decide cine va face strategia (OS, OJ-S, CE, CC sau cazuri exceptate) - în funcție ierarhia disponibilă. Persoana respectivă va avea CONTROLUL TOTAL al "vocii" și va avea prioritate la vorbit/ascultat. Orice alte conversații vor fi oprite/amânate.
- strategul va decide componența echipei și va schița (sau nu) în mare ideea de strategie abordată direct corelată cu compoziția echipei (cine merge cu cine, pe cine apară, cine spotează, cine ajută pe cine etc.) și potențialele diverse alternative sau informații utile.

Odată pornită lupta, ofițerul OS va comunica strategia și, ULTERIOR, ar putea permite (sau NU) alte conversații/glume/etc. Vă rog să citiți *Ghid de strategie* - când va fi gata - pentru a vă face o idee de responsabilitatea acestuia și DE CE ESTE NECESARĂ disciplina totală în privința conversației.
</p>

</pre>
@endsection