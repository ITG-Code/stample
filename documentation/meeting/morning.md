# Morgonmöte
## 2016-08-31
Emil gjorde klart databasen i praktiken och tänker fortsätta jobba med SQL uttryck som vi kan använda i PHP koden.
Pontus har gjort alla skisser och inloggningssidan och har börjat med den inloggades sida. Pontus hade tänkt fortsätta med den inloggades sida alternativt börja på den instämlades sida.
Hannes har gjort klart MVC strukturen för projektet så att det är enkelt att lägga till funktioner och dylikt. Hannes hade tänkt fortsätta med inloggningsfunktionen och när den är klar försöka pusha ut data till frontend som Pontus kan stila upp.


## 2016-09-01
Emil gjorde klart SQLuttrycket för att se vad den senaste aktiviteten på en specifik person.
Hannes har jobbat på inloggningssystemet men har ännu inte fått det att funka pågrund av vald MySQL server. Han föreslår att MySQL databasen ska exporteras till varje person istället för att ligga på en extern server.
Pontus har gjort färdigt sidorna där man stämplar sig och tänkt fortsätta med det som chefen skulle se när hen loggar in.
Pontus känner att han är väldigt mycket före i planneringen medan Emil och Hannes inte känner sig lika före men fortfarande i fas.
Eftersom att vi fick feedback från projektplannen nu på morgonen så kommer vi komma närmare "ofas" eftersom att detta är något vi måste ta itag med nu.
Nästa Deadline är imorn (fredag) då vi ska lämna in projektplannen och gruppkontrakt samt att vi sagt till oss själva att vi ska kunna stämpla in och ut mot fredagens slut.

// Kan vara bra att ha en överblickande kommentar om arbetet. Är ni i fas eller inte? Relation till tidsplan etc.
// Kan vara bra att ha med information on närliggande deadlines i tidsplanen och om det är något man skall fokusera på tills dess.


## 2016-09-02
* Det har gått bra för Pontus, han har dock haft problem elementpositionering i HTMLen vilken han tänkte lösa idag med egen CSS fil. Pågrund av ändring i projektplanen så känner Pontus att han är i en halv dag före projektplaneringen. Pontus känner att han är 70% klar med det han jobar med vilket har en deadline vid nästkommande måndags slut.
* Det går bra för Emil. Han gjorde klart chefens tabell i SQL igår. Han jobbar numera på hur man gör massmatte i SQL då vi ska räkna ut tiden mellan två datum/tider flera gånger i samma SQL-fråga. Emil känner att han är i fas endligt den nya tidsplanen.
* Hannes känner sig i fas och har som mål att bli klar med loginfunktionen idag för att sedan börja jobba på incheckning och utcheckning.

## 2016-09-05
Vi blev klara fram till deadlinen som vi satt för fredagen vecka 35. Då vi skulle vara klara med login system, inlämningen av gruppkontrakt och projektplanen.
Pontus ligger i fas, på grund av störningar under dagen så kanske pontus kommer hamna efter minimalt. Lite css justeringar för stämpla ut sidan.
Hannes ligger ca två dagar före deadline, men eftersom Emil är borta en stund under onsdagen så kanske han falla efter lite men fortfarande vara före tidsplanen. Ska struktuera upp datahanteringen för adminpanelen.
Emil ligger i fas och blev färdig med det SQL uttryck han skulle fixa tills på fredagen, ska nu börja med att visa data via SQL uttryck.

## 2016-09-06
Hannes och Emil diskuterade en lösning kring hur man skulle strukturera dataflödet för histogramet. Pontus insåg att något han inte trodde var fixat var redan fixat. Vi hade inte så mycket tid att jobba igår så vi ligger på samma nivå som när vi började dagen igår mer eller mindre vilket är tråkigt. Vi skulle vilja veta hur många dagar som är plannerade att gå bort till ickeprojekt-aktiviteter så man kan plannera projektet efter det.

##2016-09-07
Hannes ska fixa buggar kring hur timmar printas ut. Hannes ligger även 3 dagar före enligt tids planen. Hannes funderar på om vi ska ha dagarna genererade i PHP helt.
Pontus ska kolla lite på Twig idag eftersom att han ligger en dag före och nästa sak han ska göra måste han vänta på Emil för att göra.
Emil ska göra lite PHP idag, han ska mata in data i tabellen där adminen/chefen ser sina arbetare och om de är instämplade eller inte. Emil ligger en dag för en dag före eftersom att han blev färdig med SQL uttrycken igår.
Imorgon kommer Pontus och Emil kolla genom den grafiska designen på hemsidan.

## 2016-09-08
Emil var frånvarande under början av morgonmötet igår då han var hos tandläkaren men fyllde senare in oss på vad han skulle göra, idag ska Emil och Pontus jobba med designen av sidan, då de ska gå igenom sidan och kolla om något behöver förtydligas, läggas till eller diskuteras med gruppen. Hannes tänker börja binda ihop resterande delar. Vi kommer även att ha besök av ännu ett företag vid 10:00 idag så lite tid kommer att gå bort där. Förutom det så tänker vi jobba på enligt tidsplanen så vi blir klara tills deadlinen, för tillfället ligger vi alla i fas, då Emil och Pontus känner att de ligger lite före. Deadlinen tills på fredag är klar en dag tidigare än den borde. Under gårdagen reflekterade vi över tidsplanen.

## 2016-09-08
Emil tänker jobba med ett SQL uttryck med en persons namn och efternamn, samt att slänga ihop alla timestamps som ligger i samma checkgroup på samma rad i en tabell så det ser ut något som |Emil|Gunnarsson|2016-09-8:30|2016-09-15:30|, för att visa när folk gick av och på skift.
Pontus ska göra den grafiska sidan för detta och Hannes kommer att göra PHP delen bakom allt detta. Detta förväntas vara klart idag. Om detta är klart idag så följer vi tidsplanen.
Igår blev Emil och Pontus klara med att gå igenom och fixa / justera sidan då vi ändrade titlar och texter. Hannes sydde ihop allt som fanns på frontend enda bak till databasen. Vår ursprungliga plan var att bli klara med funktionalliteten tills idag vilket vi blev färdiga med igår, därav lägger vi till lite extra funktioner idag.

## 2016-09-12
Pontus är sjuk men vi borde kunna jobba oss runt det.
Hannes och Emil ligger endligt tidsschemat då vi la till extrafunktioner i fredags.
På tidsplanen står det att vi ska implementera PHP-koden idag men är till största del klart så vi går vidare till nästa mål i tidsplanen.
Vad vi kommer göra idag är att fixa buggar såsom att få javascriptklockan att fungera och optimera urlvägarna för att göra det smidigt att ta sig runt på sidan.
Vi gick igenom betygskritereierna och kollade av vad vi hade och inte hade gjort.
Vi ligger efter på koddokumentationen i form av kommentarer. UMLen är utdaterad och behöver uppdateras. Vi upptäckte att vi var dom enda med versionkontroll bland grupperna. Det visar sig att använda git/github var en bra idé!


## 2016-09-13
Pontus är sjuk men bestämde sig för att åka hit ändå.
Igår lade Hannes till en progress bar på varje på statistiksvisningen. Lite okart vad en progress-bar längd är och vad det betyder att ha den uppfylld men vi hittar nog en lösning på det. Emil kommenterade en del kod igår. Hannes fixade så att temavalet finns kvar efter uppdatering av sidan och försvinner endast när man loggar ut. Hannes gjorde en omfaktorisering av Histogram koden och fixade en bugg som uppstod när man hade en instämpling och en utstämpling varpå utstämplingen är före instämplingen (mer om detta i hannes loggbok). Idag är tanken att Pontus och Emil ska flytta runt lite på knapparna på sidan då den nuvarande konfigurationen inte riktigt är 'up to par'. Hannes ska applicera patchen på länkproblement i adminpanelen som Pontus hittade. Emil ska slänga in data i databasen som vi kan buggtesta och använda för presentationen.

## 2016-09-14
* Pontus låter friskare än igår dock hostar han, epedimin fortsätter.
* Stefan sa åt Hannes att spela XBox mitt i mötet, så vi tog en liten puas. När Hannes var klar med XBox kidnappade Stefan Pontus och mötet blir försenat ännu mer.
* Emil och Pontus ska ut på jakt... Buggjakt. Som sista utväg kallar dom in Jeanette för en Air Strike.
* Utöver det kommer Emil lägga in data i databasen för att simulera en riktig arbetsplats.
* Hannes har som mål att lösa månadsaktivitetsexpansionen innan lunch.

## 2016-09-15
* Igår blev Hannes ledsen eftersom hans funktion inte fungerade. Hannes och Emil diskuterade runt problemet men löste det inte. Detta är den sista stora funktionen vi skulle vilja implementera. Emil matade in data i databasen och buggtestade med Pontus. Pontus bugg testade med Emil och flyttade lite på knappar på sidan för att få det att se lite bättre ut och mer symetriskt. Vi börja dagen med att hålla en presentation som är 5 minuter lång, efter detta ska vi jobba vidare med projektet efter lunch. Hannes ska twigifiera Pontus nya implement och kolla lite till på att expandera månader och ta med varje dag i det. (det är vad som krånglar) Emil ska rensa databasen på onödig data, vi ska även se till så att alla buggar vi hittade igår fungerar. Pontus ska skriva på en utvärdering och plugga PHP. 