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
Jag skulle säga att arbetet har gått bra. Vi ligger alla i fas vilket är skönt då vi slipper känna att vi är efter. Det vi gjort den senaste veckan är att skapa en PHP-kodbas som är enkel att expandera genom MVC strukturen. MVC strukturen valde jag själv för att varken Emil eller Pontus skulle vid dåtidens plannering behöva notera strukturen. Detta då Pontus ligger i frontend och emil skriver SQL queries. Det är krångligare i början när man väl ska få upp något som fungerar jämnfört med en struktur där varje phpfil huserar sin egna HTML osv men det är som sagt mycket lättare att expandera projektet samt att det är lättare att se strukturen.
Jag hade lite problem med att kontrollera att kontrollera om man har checkat in eller inte men det är numera löst. Jag såg en guide på hur man skriver mer förståeliga if statements på youtube som jag tänkte följa för koden blir väldigt mycket mer läslig när man inte lägger if statements i varandra.
Det känns som att jag har lärt mig relativt mycket om dokumentering men det kan vara för att man blir påtvingad att dokumentera. Jag skulle vilja lära mig skriva mer läsbar kod, måste bara hitta en lista regler man kan följa. PHPMD tror jag vet var som blev jättearg såfort jag tog fram en PHPfil jag skrivit. Det kanske finns en guide hos PHPMDs utvecklare jag kan följa.
Rollerna tycker jag är bra fördelade då Pontus HTML ofta är kommit så långt att jag kan börja plannera hur jag ska strukturera det i backend.

### T4
Första veckan på T4 har varit kul, engagerande och långtråkig. Långtråkig pågrund av att jag vill bara grotta ner mig i kod istället för att hålla på och ha genomgångar om en massa annat. Jag antar att jag behöver lära mig hur viktigt det är att dokumentera och att jag blir bra på det tillslut så jag blir effektiv i den aspekten. Jag tyckte det var intressant när Combitech kom även fast det kändes som att Per sidetrackade en del.
