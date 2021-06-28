# Chatportal

Online-Chat kann sich auf jede Art von Kommunikation über das Internet beziehen, die eine Echtzeitübertragung von Textnachrichten vom Sender zum Empfänger bietet. Chatnachrichten sind in der Regel kurz, damit andere Teilnehmer schnell antworten können. Dadurch wird ein einem gesprochenen Gespräch ähnliches Gefühl erzeugt, das den Chat von anderen textbasierten Online-Kommunikationsformen wie Internetforen und E-Mail unterscheidet. Online-Chat kann Punkt-zu-Punkt-Kommunikation sowie Multicast-Kommunikation von einem Sender zu vielen Empfängern und Sprach- und Video-Chat adressieren oder kann ein Merkmal eines Webkonferenzdienstes sein.

Online-Chat in einer weniger strengen Definition kann in erster Linie jeder direkte textbasierte oder videobasierte, Einzel-Chat oder Eins-zu-viele-Gruppen-Chat sein, unter Verwendung von Tools wie Instant Messenger, Internet Relay Chat (IRC), Talker und möglicherweise MUDs oder andere Online-Spiele. Der Ausdruck Online-Chat kommt vom Wort Chat, was "informelles Gespräch" bedeutet. Online-Chat umfasst webbasierte Anwendungen, die eine Kommunikation ermöglichen – oft direkt adressiert, aber anonym zwischen Benutzern in einer Mehrbenutzerumgebung. Webkonferenzen sind ein spezifischerer Onlinedienst, der oft als Dienst verkauft wird und auf einem vom Anbieter kontrollierten Webserver gehostet wird.

Über die Zeitdauer des ganzen Projektverlaufs habe ich auf die Einhaltung ISO 9241-110 Norm geachtet und die Projektinhalte entsprechend der Aufgabenangemessenheit, Selbstbeschreibungsfähigkeit, Erwartungskonformität, sowie der Erlernbarkeit, Steuerbarkeit und Robustheit gegen Benutzerfehler gestaltet.  
# Projektbeschreibung

Das Projekt beinhaltet eine Chat Funktion, in welchen Sie sich mit Ihren Freunden allein, oder in Gruppen unterhalten können. Ich werde einen Login, sowie separat eine Sign-Up Seite anfertigen, um sich einzuloggen, respektive sich zu registrieren.  Die dabei verwendeten Technologien sind hauptsächlich JavaScript und PHP, wenn nötig oder nach Bedarf werde ich noch weitere Technologien einbeziehen.

# UML-Diagramme

![img_5.png](img_5.png)

![img_6.png](img_6.png)

# Milestones

![img_7.png](img_7.png)

# Dokumentation

Zuerst habe ich ein Login Panel, mit verschiedenen Möglichkeiten, um sich anzumelden, erstellt.
Wie Sie sehen können, habe ich verschiedene Farben verwendet, um die einzelnen Knöpfe voneinander abzuheben, dabei habe ich darauf geachtet, dass ich die Erwartungskonformität einhalte.

![image](https://user-images.githubusercontent.com/56382532/121668101-3c9be480-caab-11eb-89f9-a3cf57a7b835.png)
Abbildung 1: Login Übersicht

Am rechten unteren Bildschirmrand habe ich einen sogenannten „Pop-Up“-Chat erstellt um Hilfe zu erfragen, wenn man mit den gegebenen Funktionen Schwierigkeiten hat, wobei ich die Aufgabengemessenheit in Bezug zur Minimierung unnötiger Interaktionen mit einbezogen habe.

![image](https://user-images.githubusercontent.com/56382532/121668159-50dfe180-caab-11eb-86b8-9c2e675e7311.png)
Abbildung 2: Hilfe Chatfenster

Anschließend habe ich ein Registrierformular erstellt, um sich bei der ChatApp registrieren zu können. Hier habe ich auch wieder auf die Farbkombination geachtet, um die graphische Benutzeroberfläche übersichtlich und intuitiv zu gestalten in Anbetracht der ISO 9241-110 Norm der Interaktionsprinzipien.

![image](https://user-images.githubusercontent.com/56382532/121668223-61905780-caab-11eb-996e-d16edc37ac94.png) 
Abbildung 3: Sign-Up Seite

Wenn man sich eingeloggt hat, bietet sich nun die Hauptseite für Weiterentwicklungen an. Da ich den Fokus auf die Chatfunktion gelegt habe wird eine solche auch dementsprechend entwickelt. Die restlichen Übersichtsfunktionen belasse ich, ohne weiter Funktionalitäten hinzuzufügen.

![image](https://user-images.githubusercontent.com/56382532/121668276-6ead4680-caab-11eb-8bfb-163de411115e.png)
![image](https://user-images.githubusercontent.com/56382532/121668305-77058180-caab-11eb-9771-86b61e1d7832.png)  
Abbildung 4: Übersichtsseite

Wenn man im Hauptmenu auf Chat drückt, erscheinen diese drei Profile als Kacheln, welche eine Chatfunktion beinhaltet.

![img.png](img.png)

Wenn man auf das Chat Modul drückt, erscheint dieser hart-kodierte chatverlauf.

![img_1.png](img_1.png)

Im Modal Fenster habe ich nun neu Bilder eingefügt und den „Continue to Chat“-Knopf hinzugefügt, um zu der sich noch in Arbeit befindenden Chatapplikation, dabei habe ich auf die Erwartungskonformität geachtet, dies beinhaltet die stetig gleichen Knopf Einheiten.

![img_2.png](img_2.png)![img_3.png](img_3.png)

# Versionskontrolle

02.06.2021

Index html und stylesheet erstellt.
HTML- und CSS-Entwürfe für eine Anmeldeseite hinzugefügt.
HTML- und CSS-Entwürfe für eine Anmeldeseite aktualisiert. 
Labels für Benutzername und Passwort hinzugefügt. 

03.06.2021

Ich habe das Pfadproblem gelöst.
Die Anmeldeoption wurde index.html und ihr Verhalten mit signUp.js hinzugefügt.

07.06.2021

Readme.md aktualisiert

09.06.2021

Pop-Up Chat auf Login-Seite hinzugefügt, für Hilfestellung beim Login oder Registrieren.

11.06.2021

Übersichtsseite hinzugefügt mit redundanten Suggestionen, der Fokus liegt auf dem Chat im Hauptmenü am oberen linken Bildschirmrand.

14.06.2021

Aktualisierung der Readme.md Datei, die Chatseite friends.html mit Kacheln der Freunde ergänzt und mögliche Chatverläufe hart-kodiert 
und mittels css in style.css dargestellt.

21.06.2021

Die validateForm() Funktion im index.html eingefügt, die einen POST Request an den Server sendet.

28.06.2021

Eine php Form-Validation im index.html hinzugefügt, sowie die Anbindung von main.html zu friends.html hinzugefügt und die zukünftige php Chat Applikation angefangen.  
