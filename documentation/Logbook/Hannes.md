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
