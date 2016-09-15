# Hannes Loggbok

## Tisdag 2016-08-30
* Databasstrukturen är plannerad
* Databasstrukturen är applicerad i MySQL server
* Fixade upp MVC strukturen på PHP koden endligt Alexgarett's mall på Github/Youtube.
* Flyttat och bytt namn på Pontus html filer till rätt namn endligt MVC strukturen
* Gruppkontaktet är skrivet och färdigt

## Onsdag 2016-08-31
Cha cha bloggen!

* PHP har problem att ansluta till databasen. Får error som säger att PHP försöker ansluta men får inget svar av servern. Kan vara felaktiga databaskontouppgifter. Kan även vara så att Rickardh inte har portforwardat MySQL servern för standardporten som MySQl använder är inte öppen. Dock är port 80 och 443 öppen vilket är varför vi har kunnat ansluta via webGUIt phpMyAdmin där vi gjort majoriteten av vårt databasarbete än sålänge.


## Torsdag 2016-09-01
* Flyttade databasen till egen maskin.
* Rickardh har tydligen fixat sin server, får kolla det imorgon.
* Man kan nu logga in, checka in, se om man är incheckad och logga ut.
* Jag konverterade projektet till att använda Twig som templating-spårk, har ännu merge:at Twig branch:en med Master då jag måste jobba lite mer på denna branch. Kommer förmodligen hämta Pontus filer allt eftersom han uppdaterar sidan grafiskt in i Twig-branch:en tills dess att Pontus känner sig säker med Twig.
* Jag ligger i fas och känner att imorgon ska jag skriva om HTML-strukturen så att den funkar bättre med Twig då vi just måste lägga in CSS och JS i varje HTML-fil vilket är enformigt.
* När jag är klar med Twig med den nuvarande färdiga grafiska designen imorgon hade jag tänkt hjälpa Emil med SQL då det inte riktigt verkar vara hans kopp av te.
* Känner även att jag måste strukturera om koden så det inte är lika mycket återanvändning av samma kod med små ändringar. Detta händer nog på tisdag som allra tidigast.

## Fredag 2016-09-02
* Jag använder fortfarande en lokal databas vilket är ok eftersoma att jag inte har ändrat på Databasstrukturen. Jag har inte kollat in om Rickardhs server funkar men jag funderar på om jag ska skapa en publik server på jshd.io.
* Inloggning tillsammans med in- och utstämpling funkar numera.
* Vill skriva kodbasen så att den blir mer läslig
* Måste även lägga in kommentarer nångång. Skulle vara bra att ha något form av tvång tillsammans med en kommenteringsguide så jag faktiskt börjar. Jag har iallafall gjort en UML ritning över alla klasser men har ännu inte kopplat ihop dom helt då jag är osäker på vilka sorts sträck jag ska dra vart osv...
* Har hjälpt Emil med lite SQL queries då det är det vi behöver för att fylla de element Pontus skriver ihop med data.
* Jag skulle väl säga att vi alla är i fas och lite före planneringen vilket är skönt.

## Måndag 2016-09-05
### Reflektion
* Jag skulle säga att arbetet har gått bra. Vi ligger alla i fas vilket är skönt då vi slipper känna att vi är efter. Det vi gjort den senaste veckan är att skapa en PHP-kodbas som är enkel att expandera genom MVC strukturen. MVC strukturen valde jag själv för att varken Emil eller Pontus skulle vid dåtidens plannering behöva notera strukturen. Detta då Pontus ligger i frontend och emil skriver SQL queries. Det är krångligare i början när man väl ska få upp något som fungerar jämnfört med en struktur där varje phpfil huserar sin egna HTML osv men det är som sagt mycket lättare att expandera projektet samt att det är lättare att se strukturen.
* Jag hade lite problem med att kontrollera att kontrollera om man har checkat in eller inte men det är numera löst. Jag såg en guide på hur man skriver mer förståeliga if statements på youtube som jag tänkte följa för koden blir väldigt mycket mer läslig när man inte lägger if statements i varandra.
* Det känns som att jag har lärt mig relativt mycket om dokumentering men det kan vara för att man blir påtvingad att dokumentera. Jag skulle vilja lära mig skriva mer läsbar kod, måste bara hitta en lista regler man kan följa. PHPMD tror jag vet var som blev jättearg såfort jag tog fram en PHPfil jag skrivit. Det kanske finns en guide hos PHPMDs utvecklare jag kan följa.
* Rollerna tycker jag är bra fördelade då Pontus HTML ofta är kommit så långt att jag kan börja plannera hur jag ska strukturera det i backend.

### T4
Första veckan på T4 har varit kul, engagerande och långtråkig. Långtråkig pågrund av att jag vill bara grotta ner mig i kod istället för att hålla på och ha genomgångar om en massa annat. Jag antar att jag behöver lära mig hur viktigt det är att dokumentera och att jag blir bra på det tillslut så jag blir effektiv i den aspekten. Jag tyckte det var intressant när Combitech kom även fast det kändes som att Per sidetrackade en del.

### Loggbok
Idag har vi spenderat mycket tid utanför projektet vilket har lett till att vi inte haft lika mycket tid till att lägga på projektet. Men med den tid vi fått har jag och Emil med lite ideér från Stefan plannerat fram en struktur för arbetshistogramen som jag har svårt beskriva eller få ner på papper men jag tror jag har lite pekare i kodform som kan påminna mig om hur det skulle vara imorgon.

### Two Stars and a Wish
* Jag tycker det är bra hur vi har fördelat arbetet
* Jag tycker det är bra hur jag vi använder oss av MVC strukturen när det kommer till PHPkoden då det blir väldigt mycket enklare att expandera med nya funktioner.
* Jag tycker att vi borde dela varandras IP så att vi kan se varandras versioner på våra egna datorer.

## Tisdag 2016-09-06
Nu hämtas histogramdata korrekt och blir sedan behandad, ibland inte lika rätt som andra gånger men vi får ut data till HTMLen vilket är bra. Jag hade problemet att SQL inte gillade vissa format av datum... Jag hade provat timestamp som int vilket inte funkade vilket jag insåg efter lite för lång tid. Det löste jag genom att ändra formatet till "Y-m-d H:i:s" där m står för månad och i står för timme. Pontus verkar vara klar med allt sitt för projektet just nu så jag satte han på att lära sig twig så att iallafall jag kan jobba lättare med honom samt att han kan sköta utskrivningen av variabler osv vilket jag har gjort änsålänge. När jag skulle skriva ut data i histogramsidan insåg jag att det kommer bli EXTREMT mycket repetitiv kod så jag funderar på om man ska ha dagnamnen i VyModellerna också. Detta skulle resultera till en början av flerspråksstöd. Idag fick vi nästan hela dagen att jobba på projektet vilket jag tyckte var skönt. Den tid som vi inte fick till att arbeta använde Stefan till att lära oss om koddokumentation osv. där det fanns en del jag höll med om och en del jag inte höll med om men jag såg hans poäng.

## Onsdag 2016-09-07
* Jag löste den repetitiva koden genom att skapa en array i twig med veckodagarnas namn samt månadernas namn och loopa igenom den arrayen och sedan skriva ut datan jag hämtat från databasen. Utöver det så löste jag ett problem med SQL querien som hämtade summan av klockslagen som man stämplade in och ut. Problemet var att MySQL skickade timestamp:en i DateTime-format istället för den int som en timestamp faktiskt är. Vad MySQL försökte göra var att addera datum i formatet "2016-09-07 12:23:03" vilket är problematiskt eftersom att det inte är ett nummer. Vad jag gjorde var att jag gjorde så att datumet gjortes om till en int innan den summerar alla datum vilket löste problemet.
* Imorgon kommer jag med stor sannolikhet faktorisera om klassen Histogram så jag inte har två nästan exakt likadana funktioner. Jag förväntar mig inte att det kommer ta så lång tid så jag kommer nog fortsätta att konvertera den HTML som Pontus har skrivit till Twig då datan redan finns att hämta i funktioner.
* Registstrering av konto är inte än fixat men HTMLen är klar och funktionen är till stor del klar( den registrerar med fördefinerade variabler just nu) vilket gör att det mer eller mindre endast är att koppla ihop de två bitarna.

## Torsdag 2016-09-08
* Fixade buggar som uppstod när man inte hade stämplat in någonsin. Buggen uppstod pågrund av att när man loggar in så hämtar User-objektet den senaste stämplingen för att ta reda på vilken status man har. Har man däremot aldrig stämplat in så hämtas ingenting och senaste stämplingen sätts till NULL. Jag löste detta genom att skapa en temporär ViewModel som sa att allt var 0 i objektet.
* Man kan numera regisrera ett konto på plattformen men om man skriver fel så får man inga felmeddelanden. Den kan vara något att jobba på imorgon och nästa vecka då vi snart går in i finputsningsstadiet.
* Jag skrev igår att jag skulle faktorisera om klassen Histogram. Detta hände inte då jag stötte på problem som jag inte visste fanns t.ex den första i denna lista.
* Jag fixade enkodningsproblem som uppstod med åäö. Detta löste jag genom att definera vilket charset som PHP och MySQL skulle använda när de pratade med varandra.
* Jag har nu implementerat all HTML som Pontus har producerat in i Twigmiljön vilket var lätt i stunder och mer komplicerat i andra. Vi har just nu ett ofixat problem med att attributtaggar vi lägger runt adminens tabell läggs någon helt annan stans. Detta händer även utan Twig.
* Då vi har lite tid kvar till att implementera fler funktioner tänkte vi att vi skulle ha en tabell som visar när antingen en specifik person eller alla personer stämplar in och ut för dagen.

## Fredag 2016-09-09
* Idag lade vi till extra tabeller  för administratör som numera kan se när en anställd gick på sitt skift och när hen avslutade det. Denna funktion lade vi till för att vi hade en dag över i tidsplanen vilket resulterade i att vi implementerade mer info som admin kunde se.
* Har fortfarande inte faktoriserat om Histogram klassen då jag glömde av det helt.
* Vi la till en knapp som ändrar temat på webbsidan men än sålänge sparar den inte vilket alternativ man valde vid uppdatering av sidan då Javascripten aldrig säger till PHP att den vill byta utan den hämtar direkt den temafil som klienten valt.

## Måndag 2016-09-12
* Idag har jag fixat så att klockan som Pontus gjorde funkar. Detta gjorde jag genom att direkt i javscriptsfilen kalla på klockfunktionen.
* Jag har även fixat så att teman på webbsidan stannar kvar efter att man byter sida. Detta gjorde jag genom att sätta en SESSION variabel som höll i vilket tema man ville ha. Men om man loggar ut så försvinner temavalet då SESSION blir unset när man loggar ut.
* Jag faktoriserade om Histogramklassen så att den bara har en funktion att göra SQL med och la till så att den nya funktionen tog emot argument vilket gör att den funktionen blir mer återanvändbar än de två förutgående funktionerna.
* Jag fixade även så att det inte visas negativa tider i tidskaluleringen. Orsaken till att detta uppstod var att om man hade en utstämpling och en instämpling varpå utsämplingen var innan instämplingen så trodde klassen att man hade ett komplett skift. Detta fixade jag genom att lägga till en instämpling vid periodsstart och en utstämpling vid nutid eller periodslutet. Denna lösning gör att man får två kompletta korrekta skift istället för ett trasigt.
* Stefan kom med lite kritik om att websidan inte var visuell nog och kom med förslaget att vi skulle ha grafer som visar hur mycket man har jobbat under en period osv. Detta jobbade jag och Emil på dom två sista timmarna och kom fram med ett någolunda bra resultat. Det återstår bara att se vad Pontus tycker om det. Stefan ville även att man skulle kunna klicka på en månad och se arbetstimmarna i de individuella dagarna i den månaden. Det tyckte jag var ett bra förslag men jag är osäker på om vi har tid att implementera det med tanke på tidsplanen.

## Tisdag
* Vi började implementera det sista förslaget som Stefan gav oss idag. Vi träffade på en svår backe när vi skulle få div expansionen att funka. Man kunde endast expandera och förminska en specifik div oavsätt vilken månad man klickade på. Detta hittade jag en lösning på som funkar i det exempel som ges på JSFiddle men jag kan inte få det att funka i vårat senario vilket är dåligt på så sätt att vi inte har tid för sånnahär uppförsbackar. Dock är det samtidigt bra eftersom att nu måste jag förmodligen lära mig nånting för att få det att fungera vilket alltid är ett plus i den aspekten. Att hämta datan som ska de expanderade divarna är färdigt, jag är dock lite osäker på hur vi ska göra för att leverera datan till klienten. Funderar på om man ska skicka datan som en JSON fil så får javascript ta hand om att stila datan eller om man ska skicka ren HTML till klienten som bara lägger in det direkt på webbsidan. Min tanke är att sidan hämtar den efterfrågade månaden per efterfrågan med Ajax så att sidan laddar snabbt. Detta gör att klienten inte spenderar lika mycket tid på att vänta på att data som användaren aldrig syns ska kalkyleras och skickas iväg.
* Emil fick in- och utstämpling att gå sönder helt när han la till instämplingar i framtiden. Detta skapade problem då vi hämtar den senaste stämplingen som gjordes av en specifik person och kollar om det är en in- eller utstämpling. Då framtidsstämpeln kommer vara den senaste fram tills dess att vi passerat den tid då stämpeln hade registrerat sig på i databasen går det inte att stämpla in eller ut. Men då det inte är möjligt att lägga in framtidsstämplingar från webbsidan är detta inte ett prioriterat problem.
* Jag och Pontus bestämde oss för att vi skulle göra Histogramet mer kompakt i adminpanelen så att den såg exakt lika ut som när man tittar på sin egna panel.
* Jag spenderade lite tid på att lägga upp sidan på en linux server under matrasten så att vi har en demo att visa under presentationen av projektet. Jag korrigerade lite filnamn för linux igår (vilket jag glömde skriva igår) då linux är case sensitive när det kommer till mer eller mindre allt. Gårdagens fixande på Linux slutade med att Twig blev ledsen för att den inte fick skapa filer i webbmappen. En idé skulle vara i /tmp någonstans då Twig vill skapa cachefiler.
* Ioch med att vi har en massa annat en kodning fram till presentationsdagen vill jag gärna att vi blir klara med första föremålet på dagens lista så fort som möjligt så vi kan diskutera tweaks mm resten av dagen alternativt jobbar på presentation(erna).

## Torsdag 2016-09-15
Jag ser att jag glömde sriva loggbok igår. Ooh well...
* Idag började projektarbetet efter lunch då vi hade presentationer innan dess. Det vi gjorde idag var att optimera hur webbsidan såg ut och hur man tog sig runt på den. Vi bestämde oss t.ex att vi skulle ha menyn satt på botten av webbsidan då menyn skulle se dum ut brevid jumbotronen.
* Vi slimmade även ner sidan så att olika sorters information är indelade i olika tabbar så att man bara blir presenterad en form av data itaget.
* Jag gjorde så att stämpla-in-knappen använder sig av Ajax istället för att ladda om hela sidan. Detta gör att tiden man spenderar på sidan är avsevärt lägre då majoriteten av laddningstiden är att kalkylera den information som ska visas i diverse tabeller osv.
* Jag är väl inte riktigt nöjd med produkten. Det finns lite grejer som jag hade velat implementera såsom automatiska email för att reset:a sitt lösenord men jag har ALDRIG hållt på med email utanför färdiga system och har hört hur svårt det är att sätta upp så jag vet inte hur lång tid det skulle ta.

### Utvärdering om utvecklingsprocessen
* Jag hade jag gärna haft någon form tester som kördes för varje git commit som kolla så att alla klasser fungerade som dom skulle. Dock kan det ha varit lite avancerat då jag inte hade skrivit kod på någon månad.
* Något jag ångrar nu i efterhand är att jag inte använde PHP 7s typning vilket hade gjort debugging av systemet mycket lättare samt gjort att man fick tänka igenom funktionerna lite mer, vilket är bra.
