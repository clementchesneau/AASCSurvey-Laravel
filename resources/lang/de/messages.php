<?php 

return [
    /*
    |--------------------------------------------------------------------------
    | Custom deutch messages
    |--------------------------------------------------------------------------
    */

    // Home page messages
    'home' => [
        'title' => 'Hello',
        'recent'=> 'Aktuelle Formular',
    ],

    // Header messages
    'header' => [
        'dashboard' => 'Instrumententafel',
        'create' => 'Erstellen Sie ein Formular',
        'surveys' => 'Meine Formulare',
        'profile' => 'Mein Konto',
        'contacts' => 'Kontakte',
        'logout' => 'Ausloggen',
        'login' => 'Anmelden',
        'register' => 'Anmeldung',
    ],

    'footer' => [
        'profil'=>'Profil',
        'premium'=>'Premium',
        'contactus'=>'Kontaktiere uns',
        'whoarewe'=>'Über uns',
        'legal'=>'Geschäftsbedingungen',
    ],

    'login'=>[
        'creation'=>'Konto-Erstellung',
        'connect'=>'Einloggen',
        'compte'=>'Sie haben kein Konto?',
        'mdp'=>'Haben Sie Ihre Passwort vergessen ?',
        'inscrire'=>'Registrieren',
        'infos'=>'Kontoinformationen :',
        'last'=>'Letzte Verbindung :',
        'modif'=>'Letzte Änderung :',
        'about'=>'Über mich :'
    ],

    // Surveys messages
    'surveys' => [
        'index' => [
            'pagetitle' => 'Meine Formulare',
            'edit' => 'Bearbeiten',
            'delete' => 'Löschen',
            'create' => 'Erstellen Sie ein Formular',
            'nosurvey' => ' Keine Form im Moment !',
            'forms'=>'Meine Formen !',
            'nbsond'=>'Anzahl der Umfragen :',
            'nbpart'=>'Zahl der Teilnehmer:',
            'datecreation'=>'Erstellungsdatum',
            'datemodifications'=>'Letzte Änderungen',
            'sure'=>'Bist du sicher?',
            'sondsuppr'=>'Möchten Sie diese Umfrage wirklich löschen?<br> Alle seine Daten gehen verloren',
            'fermer'=>'Schließen',
            'mince'=>'Verdammt !',
            'aucun'=>'Derzeit sind keine Umfragen verfügbar',
            'stats'=>'Statistiken anzeigen',
            'partager'=>'Teilen',
            'download'=>'Daten herunterladen',
            'lienpartage'=>'Hier ist dein Share-Link',
            'copier'=>'Kopieren',
            'lien'=>'Verbindung',
            
            
        ],
        'show' => [
            'edit' => 'Bearbeiten',
            'delete' => 'Löschen',
            'anonym_allowed' => 'Anonyme Benutzer sind für dieses Formular zugelassen.',
            'anonym_disallowed' => 'Anonyme Benutzer sind für dieses Formular nicht zugelassen.',
            'sondage'=>'Formulare',
            'analyse'=>'Analyse',
            'aucun'=>' Diese Frage enthält keine Elemente !',
            'pasanalyse'=>'Der Fragetyp erlaubt keine Analyse'
        ],
        'create' => [
            'pagetitle' => 'Erstellung eines Formulars',
            'formtitleholder' => 'Formulartitel',
            'anonymous_allowed' => 'Anonyme Benutzer zulassen',
            'create' => 'Erstellen Sie das Formular',
            'create2' => 'Erstellen Sie ein Formular',
            'account' => 'Ein Konto erstellen',
            'zero'=>'Erstellen Sie aus 0',
            'existant'=>'Kopieren Sie eine vorhandene Umfrage',
        ],
        'edit' => [
            'pagetitle' => 'Formular bearbeiten',
            'formtitleholder' => 'Formulartitel',
            'anonymous_allowed' => 'Anonyme Benutzer zulassen',
            'edit' => 'Bearbeiten Sie das Formular',
            'create_question' => 'Erstellen Sie eine neue Frage',
            'save' => 'Speichern',
            'question' => 'Einfache Frage',
            'paragraphe' => 'Absatz',
            'choix' => 'Mehrfachauswahl',
            'cases' => 'Kontrollkästchen',
            'nombre' => 'Nummer',
            'echelle' => 'Lineare Skalierung',
            'date' => 'Date',
            'fichier' => 'Datei',
            'requis'=>'Erforderlich',
            'delimiter'=>'Abgrenzung',
        ],
    ],

    //Welcome Page
    'welcome' => [
        'advantage' => 'Die Vorteile unseres AASC-Werkzeuge',
        'card1' => 'Ein Team, das nach Möglichkeiten sucht, Ihnen das Leben zu erleichtern. Gehen Sie an Ihrer Seite, um Ihre Bedürfnisse in der Umfrage und Statistikbranche zu befriedigen.',
        'card2' => 'Modernste technische Fähigkeiten, gepaart mit einer hervorragenden Fähigkeit zuzuhören. Alles zu Ihrer Verfügung.',
        'card3' => 'Ein System der Teilnahme unserer Kunden, um Ihre Meinungen, Empfehlungen und Bedürfnisse zu berücksichtigen.',
        'protection' => 'ASSC und der Schutz der Daten', 
        'security' => 'Datensicherheit, Datenschutzbestimmungen',
        'learnmore' => 'Erfahren Sie mehr',
        'joinus' => 'Schließen Sie sich den Benutzern an, die uns vertraut haben, um mit hochwertigen Tools zu arbeiten.',
        'speackofus' => 'Sie sprechen von uns',
        'comment1'=>'Ein Vergnügen zu benutzen ist genau das, wonach ich gesucht habe.',
        'comment2'=>'Als Privatperson bin ich berührt von ihrer Verfügbarkeit und ihren Ablehnungen.',
        'comment3'=>'Ich verwende es für interne Umfragen. Ich habe noch nie so viele Antworten von meinen Mitarbeitern erhalten.',
        'comment4'=>'Es ist eine Freude, mit ihnen umzugehen!',
        'comment5'=>'Sie sind jung und sie wollen es, sie werden weit gehen, wenn sie auf unsere Bedürfnisse achten.',
        'comment6'=>'Es ist so einfach und so vollständig.',
        'secure'=>'AASC verpflichtet sich, Ihre Daten bei Ihnen zu sichern !',
        'presentation'=>'AASC ist ein großartiges Multifunktionswerkzeug, mit dem Sie Umfragen nach Ihren Wünschen erstellen können, und ein leistungsstarkes Werkzeug zur Analyse der abgerufenen Ergebnisse.',
    ],

    //Dashboard Page
    'dashboard' => [
        'firstsurvey' => 'Lancez-vous, créez votre tout premier sondage !',
        'informations'=>'Information',
        'nom'=>'Name :',
        'prenom'=>'Vorname :',
        'mail'=>'E-mail :',
        'premium'=>'Premium :',
        'edit'=>'Ändern Sie das Profil',
        'state'=>'Spielstatus',
        'astuces'=>'Tipps',
        'astuce1'=>'Sie können die Sprache der Site jederzeit in der Navigationsleiste ändern !',
        'astuce2'=>'Laden Sie Ihre Daten herunter, analysieren sie die Ergebnisse und teilen Sie Ihre Umfragen, indem Sie auf die Symbole unter der Umfrage klicken!',
    ],

    'about' => [
        'start' => '<br>AASC ist eine Jugendinitiative.Alle vier von uns unter dem Banner des Lernens und der Ausdauer werden wir Ihnen in Form von zusammenfassenden Kursen vorstellen, um zu verstehen, wie unsere Synergie innerhalb unseres Teams funktioniert und wie wir sehr überzeugende und dauerhafte Ergebnisse erzielen.<br>',
        'arnaud' => 'Zunächst, dank seines kraftvollen, methodischen und rigorosen Charakters, Arnaud WACHT. Als stille Kraft der Arbeit und Ausdauer steht Arnaud an vorderster Front der Information über Entwicklungsmethoden und neue Technologien. Ausgestattet mit einer unglaublichen Abneigung ist er unsere solideste Basis, die sich die Mannschaft nur wünschen konnte.',
        'alban' => 'Um fortzufahren, lassen Sie uns nun über Alban OBERT sprechen, kreativ, unermüdlich in seinem Streben nach Perfektion und Erfolg und vor allem aufmerksam auf das Wohl seiner Genossen bedacht. Da er an vielen Projekten in vielen verschiedenen Umfeldern teilgenommen hat, ist er in der Lage, das Team zu einem konstruktiven und lehrreichen Dialog zusammenzubringen, der es uns ermöglicht, das Beste aus jedem einzelnen herauszuholen und das Schlimmste auszulöschen. Zwischen der Optimierung der Humanressourcen und der Optimierung kreativer Prozesse ist Alban ein Bindeglied zwischen den Entwicklungsteams und den kreativen Menschen.',
        'sam' => 'Schauen wir uns nun den Fall von Samuel WEISSGERBER an, der sowohl akribisch arbeitet als auch immer mehr Informationen benötigt. Mit der Fähigkeit, die ihm auferlegten Probleme und Einschränkungen zu verstehen, ist Sam in der Lage, technische Schwierigkeiten zu überwinden, dank seiner Fähigkeit, Antworten auf seine Fragen zu finden. Das macht ihn zu einem unverzichtbaren Mitglied für jeden technischen Fortschritt.',
        'clem' => 'Was unser neuestes Mitglied betrifft, so möchte ich Ihnen Clément CHESNEAU vorstellen, einen Veteranen der Webentwicklung, der nicht zum ersten Mal Nutzer ist. Auf einem bemerkenswerten technischen Niveau und mit einer bemerkenswerten Fähigkeit zur Synthese und Produktion von Inhalten ist er unser technischer Motor, der notwendig ist, damit wir in der Lage sind, uns in die Zukunft zu projizieren.',
        'end' => '<br>Arnaud, Alban, Sam und Clément. Vier Personen, die von einem Durst nach Erfolg und ständigem Fortschritt angetrieben werden. Mit vollständiger Synchronisierung und Synergie, unser Team mit kompatiblen und sich ergänzenden Fähigkeiten gepaart mit dem unbändigen Wunsch, Sie zufrieden zu stellen. Wir haben AASC gegründet, damit Sie Tausende von Menschen um ihre Meinung zu den Themen bitten können, die ihnen wichtig sind !<br>'
    ],

    'legal'=>[
        'introduction'=>'Einführung',
        'texte1'=>'Wir danken Ihnen für die Nutzung der Produkte, Dienstleistungen, Websites und Anwendungen, die als zur Marke "AASC" ("AASC Services") gehörend dargestellt werden.<br>
                   Indem Sie auf eine Schaltfläche klicken oder tippen, die Ihre Zustimmung zu diesen Bedingungen anzeigt, indem Sie ein Dokument unterzeichnen, das auf diese Bedingungen verweist, oder indem Sie die Dienste nutzen, bestätigen Sie Ihre Zustimmung zu diesen Bedingungen.<br>
                   Wenn Sie vorhaben, die Dienste im Namen einer Organisation zu nutzen, stimmen Sie diesen Bedingungen im Namen dieser Organisation zu und versichern, dass Sie dazu befugt sind. In diesem Fall beziehen sich "Sie" und "Ihr" auf die fragliche Organisation.',
        'droit'=>'Gebühren und Zahlungen',
        'texte2'=>'Sie erklären sich damit einverstanden, AASC die Gebühren für jede von Ihnen gekaufte oder genutzte Dienstleistung (einschließlich etwaiger Überschüsse) gemäß den Gebühren und Zahlungsbedingungen zu zahlen, die Ihnen für diese Dienstleistung vorgelegt werden.<br> 
                   Falls zutreffend, wird Ihnen die Rechnung gemäß der von Ihnen auf Ihrer Kontoverwaltungsseite angegebenen Abrechnungsmethode in Rechnung gestellt.<br> 
                   Wenn Sie sich für die Zahlung per Kreditkarte entschieden haben, sichern Sie zu und gewährleisten, dass die Informationen, die Sie im Zusammenhang mit dieser Kreditkarte angeben, korrekt sind und dass Sie AASC unverzüglich über alle Änderungen an dieser Kreditkarte informieren werden.',
        'vie'=>'Datenschutz und Vertraulichkeit',
        'texte3'=>'Während Sie die Dienste nutzen, können Sie Inhalte an AASC senden (einschließlich Ihrer persönlichen Daten und der Daten Dritter), oder Dritte können Ihnen über die Dienste Inhalte zusenden (diese Elemente werden als Ihre "Inhalte" bezeichnet). Wir wissen, dass Sie uns mit der Zusendung Ihrer Inhalte vertrauen, dass wir diese ordnungsgemäß behandeln.<br> 
                   Die AASC-Datenschutzrichtlinien sowie andere Hinweise und Datenschutzerklärungen, die für bestimmte Dienste spezifisch sind (zusammen die "AASC-Datenschutzrichtlinien"), erklären im Detail, wie wir Ihre Inhalte behandeln und inwieweit wir uns an diese Datenschutzrichtlinien halten. Sie erklären sich damit einverstanden, dass AASC Ihre Inhalte in Übereinstimmung mit den AASC-Datenschutzrichtlinien und den anwendbaren Datenschutzgesetzen verwenden und weitergeben darf.<br> 
                   Wenn Sie ein Kunde sind, der als "für die Verarbeitung Verantwortlicher" im Sinne der Allgemeinen Datenschutzverordnung 2016/679 ("GDPR") handelt, haben wir unten in Abschnitt EU2 zusätzliche Bestimmungen bezüglich Ihrer Verpflichtungen gemäß dieser Verordnung hinzugefügt. Sie erkennen weiterhin an, dass Sie dafür verantwortlich sind, die Datenschutzrichtlinien des AASC Dritten mitzuteilen, die Inhalte über unsere Dienste einreichen.<br>
                   <br>
                   AASC wird Ihre Inhalte vertraulich behandeln und Ihre Informationen nur in Übereinstimmung mit diesen Allgemeinen Geschäftsbedingungen (einschließlich der Datenschutzrichtlinien von AASC) verwenden und offenlegen.<br> 
                   AASC kann Ihre Inhalte offenlegen, wenn dies gesetzlich oder durch ein gerichtliches Verfahren erforderlich ist, aber erst nachdem AASC, sofern gesetzlich zulässig, alle wirtschaftlich angemessenen Mittel eingesetzt hat, um Sie zu benachrichtigen und Ihnen die Möglichkeit zu geben, diese Offenlegungspflicht anzufechten.',
        'security'=>'Sicherheit',
        'texte4'=>'AASC speichert und verarbeitet Ihre Inhalte in Übereinstimmung mit den Sicherheitsstandards der Industrie.<br> 
                   Der AASC verfügt über geeignete technische und administrative Systeme, um die Sicherheit, Integrität und Vertraulichkeit Ihrer Inhalte zu gewährleisten und das Risiko eines unbefugten Zugriffs auf Ihre Inhalte oder deren Nutzung zu mindern.<br>
                   Für den Fall, dass AASC von einem unbefugten oder unrechtmäßigen Zugriff auf oder Erwerb, Änderung, Nutzung, Offenlegung oder Zerstörung von persönlichen Daten in Verbindung mit Ihrem Konto ("Sicherheitsvorfall") Kenntnis erlangt, wird der AASC angemessene Schritte unternehmen, um Sie so schnell wie möglich, auf jeden Fall aber innerhalb von 72 Stunden, nachdem er von dem Vorfall Kenntnis erlangt hat, zu benachrichtigen.<br>
                   AASC wird mit Ihnen im Zusammenhang mit der Untersuchung eines Sicherheitsvorfalles in angemessener Weise kooperieren, indem er die notwendigen Mitteilungen vorbereitet und alle anderen Informationen zur Verfügung stellt, die von Ihnen im Zusammenhang mit einem Sicherheitsvorfall vernünftigerweise angefordert werden, wenn diese Informationen Ihnen nicht bereits in Ihrem Konto oder online durch vom AASC bereitgestellte Aktualisierungen zur Verfügung stehen.',
        'account'=>'Kontoverwaltung',
        'texte5'=>'Wenn AASC ein Konto für Sie zur Nutzung der Dienste eröffnet, liegt es in Ihrer Verantwortung, Ihr Passwort und alle anderen Kennungen, die für den Zugang zu diesem Konto verwendet werden, zu schützen.<br>
                   Sie, und nicht AASC, sind allein verantwortlich für Aktivitäten, die unter Ihrem Konto stattfinden (mit Ausnahme von Aktivitäten, für die der AASC direkt verantwortlich ist und die nicht in Übereinstimmung mit Ihren Anweisungen durchgeführt werden), unabhängig davon, ob sie autorisiert sind oder nicht. Wenn Sie Kenntnis von einem unbefugten Zugriff auf Ihr Konto erhalten, müssen Sie den ACAA unverzüglich benachrichtigen. <br>
                   Konten dürfen nicht geteilt werden und können nur von einer Person benutzt werden.<br>
                   Es liegt in Ihrer Verantwortung, Ihre Inhalte zu pflegen, zu schützen und zu sichern. Soweit nach geltendem Recht zulässig, ist AASC nicht haftbar für Speicherausfälle, Verlust oder Schäden an Ihren Inhalten.<br>
                   AASC behält sich das Recht vor, Ihr Konto zu kündigen und Inhalte zu entfernen, wenn mehr als 12 Monate lang keine Aktivität auf dem Konto stattfindet.',
        'update'=>'Software Update',
        'texte6'=>'AASC kann jederzeit aus verschiedenen Gründen Änderungen an diesen Bedingungen vornehmen, unter anderem, um Änderungen im anwendbaren Recht oder Aktualisierungen der Dienste sowie neue Dienste oder Funktionen zu berücksichtigen.<br> 
                   Die aktuellste Version wird immer auf AASC-Website verfügbar sein. Im Falle einer wesentlichen Änderung, die im alleinigen Ermessen des AASC bestimmt wird, wird AASC Sie per E-Mail benachrichtigen. Eine Änderungsmitteilung kann auch auf AASC-Blog veröffentlicht oder angezeigt werden, wenn Sie sich in Ihr Konto einloggen. Änderungen treten am Tag ihrer Veröffentlichung in Kraft.<br> 
                   Damit bestimmte Änderungen in Kraft treten können, kann das anwendbare Recht von AASC verlangen, Ihre Zustimmung einzuholen oder Sie in angemessener Weise zu benachrichtigen. Wenn Sie den Änderungen der Bedingungen für einen Dienst nicht zustimmen möchten, müssen Sie die Nutzung dieses Dienstes einstellen, da Sie durch die weitere Nutzung der Dienste Ihr Einverständnis mit den aktualisierten Bedingungen erklären.<br>
                   AASC ist ständig dabei, seine Dienstleistungen zu modifizieren und zu verbessern.<br>
                   AASC kann jederzeit und ohne Vorankündigung jede Funktion eines Dienstes hinzufügen, ändern oder entfernen. AASC kann auch einen Dienst nach eigenem Ermessen einschränken, aussetzen oder einstellen. Wenn wir einen Dienst unterbrechen, werden wir Sie rechtzeitig im Voraus benachrichtigen, damit Sie eine Kopie Ihres Inhalts aus diesem Dienst exportieren können.<br> 
                   AASC kann nach eigenem Ermessen jederzeit Inhalte aus den Diensten entfernen, wird sich jedoch bemühen, Sie im Voraus zu benachrichtigen, wenn dies für Sie von wesentlicher Bedeutung ist und die Umstände es erlauben.',
    ],
];