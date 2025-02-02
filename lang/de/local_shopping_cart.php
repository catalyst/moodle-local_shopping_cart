<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Plugin strings are defined here.
 *
 * @package     local_shopping_cart
 * @category    string
 * @copyright   2021 Wunderbyte GmbH<info@wunderbyte.at>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['pluginname'] = 'Warenkorb';
$string['modulename'] = 'Warenkorb';

// General strings.
$string['addtocart'] = 'In den Warenkorb';
$string['allowrebookingcredit'] = 'Umbuchungsgutschrift';
$string['allowrebookingcredit_desc'] = 'Wenn Sie die Umbuchungsgutschrift aktivieren, bekommt ein:e Nutzer:in eine Gutschrift in Höhe der Buchungs- und Stornogebühr gutgeschrieben,
wenn er:sie innerhalb der Stornofrist ein Item storniert und ein anderes bucht.';
$string['cash'] = 'Bargeld';
$string['choose...'] = 'Auswählen...';
$string['mycart'] = 'Mein Warenkorb';
$string['optioncancelled'] = 'Buchungsoption storniert';
$string['rebookingcredit'] = 'Umbuchungsgutschrift';
$string['sendpaymentbutton'] = 'Zur Bezahlung';
$string['showorderid'] = 'Order-ID anzeigen...';

// Settings.
$string['maxitems'] = 'Max. Anzahl von Buchungen im Warenkorb';
$string['maxitems:description'] = 'Maximale Anzahl von Buchungen im Warenkorb für den/die Nutzer/in festlegen';
$string['globalcurrency'] = 'Währung';
$string['globalcurrencydesc'] = 'Wählen Sie die Währung für Preise aus.';
$string['expirationtime'] = 'Anzahl Minuten für Ablauf des Warenkorbs';
$string['expirationtime:description'] = 'Wie lange darf sich eine Buchung maximal im Warenkorb befinden?';
$string['cancelationfee'] = 'Stornierungsgebühr';
$string['bookingfee'] = 'Buchungsgebühr';
$string['bookingfee_desc'] = 'Für jede Buchung wird eine Gebühr eingehoben, unabhängig davon, wieviele Artikel gekauft werden und wieiviel sie kosten.';
$string['uniqueidentifier'] = 'Eindeutige Buchungsid';
$string['uniqueidentifier_desc'] = 'Jede Buchung benötigt eine eindeutige id. Diese startet üblicherweise bei 1, kann aber auch höher gesetzt werden. Wenn sie z.b. auf 10000000 gesetzt wird, hat der erste Kauf die ID 10000001. Wenn das Feld gesetzt wird, wird ein Error geworfen, sobald die Anzahl der Stellen überschritten wird. Wird der Wert auf 1 gesetzt, sind nur neun Buchungen möglich.';
$string['bookingfeeonlyonce'] = 'Buchungsgebühr nur einmal einheben';
$string['bookingfeeonlyonce_desc'] = 'Die Buchungsgebühr wird nur einmal für jede Nutzer:in eingehoben. Sobald einmal bezahlt wurde, sind alle weiteren Buchungen ohne Buchungsgebühr.';
$string['credittopayback'] = 'Zurückerstatteter Betrag';
$string['cancelationfee:description'] = 'Automatisch vom Guthaben abgezogene Gebühr bei einer Stornierung durch die/den KäuferIn.
                                        -1 bedeutet, dass Stornierung durch Userin nicht möglich ist.';
$string['addon'] = 'Zusätzliche Zeit festlegen';
$string['addon:description'] = 'Zeit, die zur Ablaufzeit hinzugefügt wird, nachdem der Checkout-Prozess gestartet wurde';
$string['additonalcashiersection'] = 'Text für den Kassa-Bereich';
$string['additonalcashiersection:description'] = 'HTML Shortcodes oder Buchungsoptionen für den Kassabereich hinzufügen';
$string['accountid'] = 'Zahlungsanbieter-Konto';
$string['accountid:description'] =
        'Wählen Sie aus, über welchen Anbieter (Payment Account) die Zahlungen abgewickelt werden sollen.';
$string['nopaymentaccounts'] = '<div class="text-danger font-weight-bold">Kein Zahlungsanbieter-Konto vorhanden!</div>';
$string['nopaymentaccountsdesc'] =
        '<p><a href="{$a->link}" target="_blank">Hier klicken, um ein Zahlungsanbieter-Konto anzulegen.</a></p>';
$string['showdescription'] = 'Zeige Beschreibung';
$string['rounddiscounts'] = 'Rabatte runden';
$string['rounddiscounts_desc'] = 'Rabatte auf ganze Zahlen runden (mathematisch, ohne Nachkommastellen)';
$string['taxsettings'] = 'Warenkorb Steuern';
$string['enabletax'] = 'MWSt aktivieren';
$string['enabletax_desc'] = 'Soll MWSt im Wartenkorb angezeigt und verwendet werden';
$string['taxcategories'] = 'Steuerkategorien und anwendbare Steuersätze';
$string['taxcategories_examples_button'] = '(Beispiele)';
$string['taxcategories_desc'] = 'Steuerkategorien und anwendbare Steuersätze (in %) pro User-Land.';
$string['taxcategories_invalid'] = 'Der eingegebene Text kann nicht als Steuerkategorien interpretiert werden!';
$string['itempriceisnet'] = 'Preise für Artikel sind Nettopreise: Addiere die Steuer';
$string['itempriceisnet_desc'] = 'Wenn die an den Warenkorb übergebenen Preise Nettopreise sind, dann aktivieren Sie diese Checkbox,
um die Steuern zu den Artikelpreisen hinzuzufügen. Wenn die Artikel die Steuer bereits enthalten und somit Bruttopreise sind,
deaktivieren Sie diese Checkbox, um die Steuer auf der Grundlage des Bruttowertes des Artikels zu berechnen';
$string['defaulttaxcategory'] = 'Standard Steuerkategorie';
$string['defaulttaxcategory_desc'] =
        'Standard-Steuerkategorie, die verwendet wird, wenn das Cart-Item diese nicht explizit angibt (z.B. "A")';
$string['cancellationsettings'] = 'Stornierungseinstellungen';
$string['calculateconsumation'] = 'Gutschrift bei Stornierung abzüglich konsumierter Menge.';
$string['calculateconsumation_desc'] = 'Bei Stornierung wird das Guthaben nach der bereits konsumierten Menge des gekauften Guts berechnet.';
$string['calculateconsumationfixedpercentage'] = 'FIXEN Prozentsatz verwenden statt konsumierte Menge anhand der bereits vergangenen Zeit zu berechnen';
$string['calculateconsumationfixedpercentage_desc'] = 'Wenn Sie hier einen Prozentsatz wählen, wird die konsumierte Menge nicht anhand der seit Kursbeginn
 verstrichenen Zeit berechnet, sondern IMMER mit demselben FIXEN Prozentsatz.';
$string['nofixedpercentage'] = 'Kein fixer Prozentsatz';
$string['fixedpercentageafterserviceperiodstart'] = 'Fixen Prozentsatz erst ab dem vom Plugin zur Verfügung gestellten Start der Service-Periode abziehen';
$string['fixedpercentageafterserviceperiodstart_desc'] = 'Aktivieren Sie diese Einstellungn, wenn der Prozentsatz erst ab einer bestimmten Start-Zeit
 abgezogen werden soll (muss im entsprechenden Plugin konfiguriert werden, z.B. Kursbeginn oder Semesterbeginn).';
$string['cashreportsettings'] = 'Kassajournal-Einstellungen';
$string['cashreport:showcustomorderid'] = 'Benutzerdefinierte OrderID statt der normalen OrderID anzeigen';
$string['cashreport:showcustomorderid_desc'] = 'Achtung: Nur aktivieren, wenn ihr Zahlungsgateway-Plugin benutzerdefinierte OrderIDs unterstützt.';
$string['samecostcenter'] = 'Nur eine Kostenstelle pro Zahlungsvorgang';
$string['samecostcenter_desc'] = 'Alle Items im Warenkorb müssen die selbe Kostenstelle haben.
Items mit unterschiedlichen Kostenstellen müssen separat gebucht werden.';

$string['privacyheading'] = "Privatsphäreneinstellungen";
$string['privacyheadingdescription'] = "Einstellungen in Verbindung mit den Moodle Privatsphäreneinstellugnen";
$string['deleteledger'] = "Lösche das Zahlungsjournal wenn ein/e NutzerIn das Löschen ihrer Daten verlangt";
$string['deleteledgerdescription'] = "Das Zahlungsjournal enthält Zahlungsinformationen, die aus rechtlichen Gründen womöglich erhalten bleiben müssen.";

// Capabilities.
$string['shopping_cart:canbuy'] = 'Kann kaufen';
$string['shopping_cart:history'] = 'Verlauf (History) anzeigen';
$string['shopping_cart:cashier'] = 'Ist berechtigt für die Kassa';
$string['shopping_cart:cashiermanualrebook'] = 'Kann Benutzer:innen manuell nachbuchen';
$string['shopping_cart:cashtransfer'] = 'Kann Bargeld von einer Kassa auf eine andere Kassa umbuchen';

// File: lib.php.
$string['foo'] = 'foo';

// Cache.
$string['cachedef_cashier'] = 'Kassier Cache';
$string['cachedef_cacheshopping'] = 'Shopping Cache';
$string['cachedef_schistory'] = 'Shopping cart history cache';
$string['cachedef_cachedcashreport'] = 'Kassajournal-Cache';

// Errors.
$string['itemcouldntbebought'] = 'Artikel {$a} konnte nicht gekauft werden.';
$string['noitemsincart'] = 'Es gibt keine Artikel im Warenkorb';
$string['error:capabilitymissing'] = 'FEHLER: Ihnen fehlt eine erforderliche Berechtigung.';
$string['error:cashiercapabilitymissing'] = 'FEHLER: Ihnen fehlt die Berechtigung zum Erstellen von Kassenbelegen.';
$string['error:costcentertitle'] = 'Andere Kostenstelle';
$string['error:costcentersdonotmatch'] = 'Diese Kurse können nicht gemeinsam gebucht werden.';
$string['error:alreadybookedtitle'] = 'Bereits gebucht';
$string['error:alreadybooked'] = 'Sie haben diesen Artikel bereits gebucht.';
$string['error:fullybookedtitle'] = 'Ausgebucht';
$string['error:fullybooked'] = 'Sie können nicht mehr buchen, da bereits alle Plätze belegt sind.';
$string['error:gatewaymissingornotsupported'] = 'Sie haben entweder noch kein Zahlungs-Gateway eingerichtet
oder das eingerichtete Zahlungsgateway wird nicht unterstützt.';
$string['error:generalcarterror'] = 'Sie können dieses Item aufgrund eines Fehlers nicht in den Warenkorb legen.
Bitte wenden Sie sich an einen Administrator.';
$string['error:negativevaluenotallowed'] = 'Bitte einen positiven Wert eingeben.';
$string['error:cancelationfeetoohigh'] = 'Stornogebühr darf nicht größer sein als der zurückerstattete Betrag!';
$string['error:nofieldchosen'] = 'Sie müssen ein Feld auswählen.';
$string['error:mustnotbeempty'] = 'Darf nicht leer sein.';
$string['error:noreason'] = 'Bitte geben Sie einen Grund an.';
$string['error:notpositive'] = 'Bitte geben Sie eine positive Zahl ein.';
$string['error:choosevalue'] = 'Sie müssen hier einen Wert auswählen.';
$string['selectuserfirst'] = 'Wähle zuerst eine Nutzerin.';
$string['notenoughcredits'] = 'Nicht genügend Guthaben vorhanden.';

// Cart.
$string['total'] = 'Gesamt:';
$string['total_net'] = 'Gesamt Netto:';
$string['total_gross'] = 'Gesamt Brutto:';
$string['paymentsuccessful'] = 'Zahlung erfolgreich!';
$string['paymentdenied'] = 'Zahlung abgelehnt!';
$string['paymentsuccessfultext'] = 'Der Zahlungsanbieter hat Ihre Zahlung bestätigt. Vielen Dank für Ihren Kauf!';
$string['backtohome'] = 'Zurück zur Überblicksseite.';

$string['success'] = 'Erfolgreich.';
$string['pending'] = 'Warten...';
$string['failure'] = 'Fehler.';

$string['alreadyincart'] = 'Das gewählte Item ist bereits im Warenkorb.';
$string['cartisfull'] = 'Ihr Warenkorb ist voll.';
$string['cartisempty'] = 'Ihr Warenkorb ist leer.';
$string['yourcart'] = 'Ihr Warenkorb';
$string['addedtocart'] = '{$a} wurde in den Warenkorb gelegt.';
$string['creditnotmatchbalance'] = 'Summe der Guthaben in Tabelle local_shopping_cart_credits stimmt nicht mit dem letzten Saldo (balance) überein!
Möglicherweise haben Sie doppelte oder fehlerhafte Einträge in der credits-Tabelle für den User mit userid {$a}.';

// Cashier.
$string['paymentonline'] = 'via Online-Zahlung';
$string['paymentcashier'] = 'an der Kassa';
$string['paymentcashier:cash'] = 'in bar an der Kassa';
$string['paymentcashier:creditcard'] = 'mit Kreditkarte an der Kassa';
$string['paymentcashier:debitcard'] = 'mit Bankomatkarte an der Kassa';
$string['paymentcashier:manual'] = 'mit Fehler - manuell nachgebucht';
$string['paymentcredits'] = 'mit Guthaben';
$string['unknown'] = ' - Zahlmethode unbekannt';
$string['paid'] = 'Bezahlt';
$string['paymentconfirmed'] = 'Zahlung bestätigt und gebucht.';
$string['restart'] = 'Nächste/r KundIn';
$string['print'] = 'Drucken';
$string['previouspurchases'] = 'Bisherige Käufe';
$string['checkout'] = '<i class="fa fa-shopping-cart" aria-hidden="true"></i> Weiter zur Bezahlung ❯❯';
$string['nouserselected'] = 'Noch niemand ausgewählt';
$string['selectuser'] = 'Wähle eine/n TeilnehmerIn aus...';
$string['user'] = 'Teilnehmerin...';
$string['searchforitem'] = 'Suche...';
$string['choose'] = 'Auswählen';

$string['cashout'] = 'Barzahlungen';
$string['cashoutamount'] = 'Barzahlungsbetrag';
$string['cashoutnoamountgiven'] = 'Es können keine Nullbuchungen durchgeführt werden';
$string['cashoutamount_desc'] = 'Negative Beträge sind Entnahmen, positive Beträge Einzahlungen.';
$string['cashoutreason'] = 'Grund für die Bartransaktion';
$string['cashoutreasonnecessary'] = 'Sie müssen einen Grund eingeben.';
$string['cashoutreason_desc'] = 'Mögliche Gründe: Wechselgeld, Einzahlung etc.';
$string['cashoutsuccess'] = 'Barzahlung erfolgreich';

$string['cashtransfer'] = 'Bargeldumbuchung';
$string['cashtransferamount'] = 'Umbuchungsbetrag';
$string['cashtransfernopositiveamount'] = 'Kein positiver Wert!';
$string['cashtransferamount_help'] = 'Geben Sie einen positiven Wert ein (nicht 0) der beim ersten Kassier abgezogen und beim zweiten Kassier aufaddiert wird.';
$string['cashtransferreason'] = 'Grund für die Bargeldumbuchung';
$string['cashtransferreasonnecessary'] = 'Sie müssen einen Grund für die Bargeldumbuchung angeben!';
$string['cashtransferreason_help'] = 'Geben Sie einen Grund für die Bargeldumbuchung an.';
$string['cashtransfercashierfrom'] = 'Von Kassa';
$string['cashtransfercashierfrom_help'] = 'Kassier:in, von deren Kassa das Geld entnommen wird';
$string['cashtransfercashierto'] = 'An Kassa';
$string['cashtransfercashierto_help'] = 'Kassier:in, in deren Kassa das Geld hinzugefügt wird';
$string['cashtransfersuccess'] = 'Bargeldumbuchung erfolgreich';

$string['paidwithcash'] = 'Barzahlung bestätigen';
$string['paidwithcreditcard'] = 'Kreditkartenzahlung bestätigen';
$string['paidwithdebitcard'] = 'Bankomatkartenzahlung bestätigen';
$string['cashiermanualrebook'] = 'Manuell nachbuchen mit Anmerkung oder TransaktionsID';
$string['manualrebookingisallowed'] = 'Manuelles Nachbuchen an der Kassa erlauben';
$string['manualrebookingisallowed_desc'] = 'Mit dieser Einstellung kann die Kassierin Zahlungen nachbuchen,
 die bereits online bezahlt wurden, die aber im Kassajournal fehlen. (<span class="text-danger">Achtung:
 Aktivieren Sie dieses Feature nur, wenn Sie sicher sind, dass Sie es wirklich benötigen. Falsche Handhabung kann
 zu fehlerhaften Einträgen in der Datenbank führen!</span>)';

$string['cancelpurchase'] = 'Stornieren';
$string['canceled'] = 'Storniert';
$string['canceldidntwork'] = 'Fehler beim Stornieren';
$string['cancelsuccess'] = 'Erfolgreich storniert';
$string['applytocomponent'] = 'Stornierung an Artikel Plugin melden';
$string['applytocomponent_desc'] = 'Wird ein Artikel irrtümlich doppelt bezahlt, kann das Häkchen entfernt werden um hier zu stornieren, ohne dass die Käuferin aus z.B. dem Kurs ausgeschrieben wird.';

$string['youcancanceluntil'] = 'Sie können bis {$a} stornieren.';
$string['youcannotcancelanymore'] = 'Stornieren ist nicht möglich.';

$string['confirmcanceltitle'] = 'Stornierung bestätigen';
$string['confirmcancelbody'] = 'Möchten Sie diesen Kauf wirklich stornieren? Das lässt sich nicht rückgängig machen.
 Der/die Käufer bekommt den Kaufpreis {$a->price} {$a->currency} abzüglich der Stornierungsgebühr von {$a->cancelationfee} {$a->currency} gutgeschrieben.';
$string['confirmcancelbodyconsumption'] = 'Möchten Sie diesen Kauf wirklich stornieren? Das lässt sich nicht rückgängig machen.
 Der/die Käufer bekommt den Kaufpreis {$a->price} {$a->currency} abzüglich des bereits verbrauchten Anteils von {$a->percentage} und einer Stornierungsgebühr von {$a->cancelationfee} {$a->currency} gutgeschrieben.';
$string['confirmcancelbodyuser'] = 'Möchten Sie den Kauf wirklich stornieren?
        Sie bekommen den Kaufpreis ({$a->price} {$a->currency}) abzüglich einer Bearbeitungsgebühr ({$a->cancelationfee} {$a->currency}) als Guthaben: ({$a->credit} {$a->currency})';
$string['confirmcancelbodyuserconsumption'] = '<p><b>Möchten Sie den Kauf wirklich stornieren?</b></p>
<p>
Sie erhalten <b>{$a->credit} {$a->currency}</b> als Guthaben.<br>
<table class="table table-light table-sm">
<tbody>
    <tr>
      <th scope="row">Originalpreis</th>
      <td align="right"> {$a->price} {$a->currency}</td>
    </tr>
    <tr>
      <th scope="row">Prozentuelle Stornogebühr ({$a->percentage})</th>
      <td align="right"> - {$a->deducedvalue} {$a->currency}</td>
    </tr>
    <tr>
      <th scope="row">Bearbeitungsgebühr</th>
      <td align="right"> - {$a->cancelationfee} {$a->currency}</td>
    </tr>
    <tr>
      <th scope="row">Gutschrift</th>
      <td align="right"> = {$a->credit} {$a->currency}</td>
    </tr>
  </tbody>
</table>
</p>
<div class="progress">
  <div class="progress-bar progress-bar-striped bg-$bootrapstyle" role="progressbar"
    style="width: {$a->percentage}" aria-valuenow="{$a->percentage}"
    aria-valuemin="0" aria-valuemax="100">{$a->percentage}
  </div>
</div>';
$string['confirmcancelbodynocredit'] = 'Möchten Sie diesen Kauf wirklich stornieren? Das lässt sich nicht rückgängig machen.<br>
 Der/die KäuferIn hat Artikel bereits vollständig konsumiert, der ursprüngliche Preis war {$a->price} {$a->currency}';
$string['confirmcancelbodyusernocredit'] = 'Möchten Sie diesen Kauf wirklich stornieren?<br>
 Da Sie den Artikel bereits zur Gänze verbraucht haben, erhalten Sie keine Rückerstattung. (Ursprünglicher Preis: {$a->price} {$a->currency})';
$string['confirmcancelallbody'] = 'Möchten Sie den Kauf für alle aktuellen Käufer:innen wirklich stornieren?
    Folgende Nutzer:innen erhalten den Kaufpreis zurück:
    {$a->userlist}
    Sie können unten die Bearbeitungsgebühr anführen. Diese wird von der rückerstatteten Summe abgezogen.';

$string['confirmpaidbacktitle'] = 'Bestätige Auszahlung';
$string['confirmpaidbackbody'] = 'Wollen Sie die Auszahlung bestätigen? Das setzt das Guthaben auf 0.';
$string['confirmpaidback'] = 'Bestätige Auszahlung';

$string['confirmzeropricecheckouttitle'] = 'Mit Guthaben bezahlen';
$string['confirmzeropricecheckoutbody'] = 'Sie haben genug Guthaben, um Ihren Kauf zur Gänze zu bezahlen. Wollen Sie fortfahren?';
$string['confirmzeropricecheckout'] = 'Bestätige';

$string['deletecreditcash'] = 'Ausbezahlt bar';
$string['deletecredittransfer'] = 'Ausbezahlt überwiesen';
$string['credit'] = 'Guthaben:';
$string['creditpaidback'] = 'Guthaben ausgezahlt';
$string['creditsmanager'] = 'Guthaben-Manager';
$string['creditsmanagermode'] = 'Was möchten Sie tun?';
$string['creditsmanager:infotext'] = 'Guthaben für  <b>{$a->username} (ID: {$a->userid})</b> auf- oder abbuchen.';
$string['creditsmanagersuccess'] = 'Guthabenbuchung wurde durchgeführt.';
$string['creditsmanagercredits'] = 'Korrekturwert bzw. auszubezahlendes Guthaben';
$string['creditsmanagercredits_help'] = 'Wenn Sie "Guthaben korrigieren" gewählt haben, geben Sie hier den Korrekturwert ein.
Beispiel: Ein/e Benutzer/in hat 110 Euro Guthaben, sollte aber nur 100 Euro Guthaben haben. In diesem Fall beträgt der Korrekturwert -10.
Wenn Sie "Guthaben zurückbezahlen" ausgewählt haben, geben Sie hier den zurückzubezahlenden Betrag ein und geben Sie an, ob Sie in bar oder
per Banküberweisung zurückbezahlen möchten.';
$string['creditsmanagerreason'] = 'Grund';
$string['creditsmanager:correctcredits'] = 'Guthaben korrigieren';
$string['creditsmanager:payback'] = 'Guthaben zurückbezahlen';

$string['cashier'] = 'Kassa';

$string['initialtotal'] = 'Preis: ';
$string['usecredit'] = 'Verwende Guthaben:';
$string['deductible'] = 'Abziehbar:';
$string['remainingcredit'] = 'Verbleibendes Guthaben:';
$string['remainingtotal'] = 'Preis:';
$string['creditsused'] = 'Guthaben eingelöst';
$string['creditsusedannotation'] = 'Extra-Zeile für eingelöstes Guthaben';

$string['nopermission'] = "No permission to cancel";

// Access.php.
$string['local/shopping_cart:cashier'] = 'NutzerIn hat Kassier-Rechte';

// Report.
$string['reports'] = 'Berichte';
$string['cashreport'] = 'Kassajournal';
$string['cashreport_desc'] = 'Hier erhalten Sie einen Überblick über alle getätigten Bezahlungen.
Sie können das Kassajournal auch im gewünschten Format exportieren.';
$string['accessdenied'] = 'Zugriff verweigert';
$string['nopermissiontoaccesspage'] = '<div class="alert alert-danger" role="alert">Sie sind nicht berechtigt, auf diese Seite zuzugreifen.</div>';
$string['showdailysums'] = '&sum; Tageseinnahmen anzeigen';
$string['showdailysumscurrentcashier'] = '&sum; Tageseinnahmen der aktuell eingeloggten Kassier:in anzeigen';
$string['titledailysums'] = 'Tageseinnahmen';
$string['titledailysums:all'] = 'Gesamteinnahmen';
$string['titledailysums:total'] = 'Saldo';
$string['titledailysums:current'] = 'Aktuelle:r Kassier:in';
$string['dailysums:downloadpdf'] = 'Tageseinnahmen als PDF herunterladen';

// Report headers.
$string['timecreated'] = 'Erstellt';
$string['timemodified'] = 'Abgeschlossen';
$string['id'] = 'ID';
$string['identifier'] = 'TransaktionsID';
$string['price'] = 'Preis';
$string['currency'] = 'Währung';
$string['lastname'] = 'Nachname';
$string['firstname'] = 'Vorname';
$string['email'] = 'E-Mail';
$string['itemid'] = 'ItemID';
$string['itemname'] = 'Kurs';
$string['payment'] = 'Bezahlmethode';
$string['paymentstatus'] = 'Status';
$string['gateway'] = 'Gateway';
$string['orderid'] = 'OrderID';
$string['usermodified'] = 'Bearbeitet von';

// Payment methods.
$string['paymentmethod'] = 'Bezahlmethode';
$string['paymentmethodonline'] = 'Online';
$string['paymentmethodcashier'] = 'Kassa';
$string['paymentmethodcredits'] = 'Guthaben';
$string['paymentmethodcreditspaidbackcash'] = 'Guthabenrückzahlung bar';
$string['paymentmethodcreditspaidbacktransfer'] = 'Guthabenrückzahlung überwiesen';
$string['paymentmethodcreditscorrection'] = 'Guthabenkorrektur';
$string['paymentmethodcashier:cash'] = 'Kassa (Bar)';
$string['paymentmethodcashier:creditcard'] = 'Kassa (Kreditkarte)';
$string['paymentmethodcashier:debitcard'] = 'Kassa (Bankomatkarte)';
$string['paymentmethodcashier:manual'] = 'Manuell nachgebucht';

$string['paidby'] = 'Bezahlt mit';
$string['paidby:visa'] = 'VISA';
$string['paidby:mastercard'] = 'Mastercard';
$string['paidby:eps'] = 'EPS';
$string['paidby:dinersclub'] = 'Diners Club';
$string['paidby:americanexpress'] = 'American Express';
$string['paidby:unknown'] = 'Unbekannt';

// Payment status.
$string['paymentpending'] = 'Keine Rückmeldung';
$string['paymentaborted'] = 'Abgebrochen';
$string['paymentsuccess'] = 'Erfolg';
$string['paymentcanceled'] = 'Storno';

// Receipt.
$string['receipt'] = 'Buchungsbestätigung';
$string['receipthtml'] = 'HTML-Vorlage zur Erstellung von Kassenbelegen';
$string['receipthtml:description'] = 'Sie können die folgenden Platzhalter verwenden:
[[price]], [[pos]], [[name]], [[location]], [[dayofweektime]] zwischen [[items]] und [[/items]].
 Außerhalb von [[items]] können Sie auch [[sum]], [[firstname]], [[lastname]], [[mail]] und [[date]] verwenden.
 Verwenden Sie nur einfaches HTML, das von TCPDF unterstützt wird.';
$string['receiptimage'] = 'Hintergrundbild für den Kassenbeleg';
$string['receiptimage:description'] = 'Laden Sie ein Hintergrundbild für den Kassenbeleg hoch, das z.B. Ihr Logo enthält.';
$string['receipt:bookingconfirmation'] = 'Buchungsbest&auml;tigung';
$string['receipt:transactionno'] = 'Transaktionsnummer';
$string['receipt:name'] = 'Name';
$string['receipt:location'] = 'Ort';
$string['receipt:dayofweektime'] = 'Tag & Uhrzeit';
$string['receipt:price'] = 'Preis';
$string['receipt:total'] = 'Gesamtsumme';

// Terms and conditions.
$string['confirmterms'] = "AGBs akzeptieren";
$string['accepttermsandconditions'] = "Bestätigung der AGBs verlangen";
$string['accepttermsandconditions:description'] = "Ohne Häkchen bei den AGBs ist buchen nicht möglich.";
$string['termsandconditions'] = "AGBs";
$string['termsandconditions:description'] = "Sie können hier z.B. ein PDF verlinken. Für Übersetzungen verwenden Sie die
 <a href='https://docs.moodle.org/402/de/Multi-language_content_filter' target='_blank'>Moodle Sprachfilter</a>.";

// Shortcodes.
$string['shoppingcarthistory'] = 'Alle bisherigen Käufe einer Person';

// Shopping cart history card.
$string['getrefundforcredit'] = 'Das Guthaben kann für einen zukünftigen Kauf genutzt werden.';

// Form modal_cancel_all_addcredit.
$string['nousersfound'] = 'Keine Nutzerinnen gefunden.';

// Discount modal.
$string['discount'] = 'Rabatt';
$string['applydiscount'] = 'Rabatt abziehen';
$string['adddiscounttoitem'] = 'Der Preis dieses Artikels kann entweder um einen absoluten Betrag oder einen Prozentwert reduziert werden,
    nicht aber um beides.';
$string['discountabsolute'] = 'Betrag';
$string['discountabsolute_help'] = 'Reduziere den Preis um diesen Betrag, z.B. "15". Keine Währung eingeben.';
$string['discountpercent'] = 'Prozent';
$string['discountpercent_help'] = 'Reduziere den Preis um diesen Prozentwert, z.B. "10". Kein %-Zeichen eingeben.';
$string['floatonly'] = 'Nur Dezimalzahlen werden akzeptiert. Das richtige Trennzeichen hängt von Ihrem System ab.';

// Events.
$string['item_bought'] = 'Artikel gekauft';
$string['item_notbought'] = 'Artikel konnte nicht gekauft werden';
$string['item_added'] = 'Artikel hinzugefügt';
$string['item_expired'] = 'Zeit für Artikel im Warenkorb abgelaufen';
$string['item_deleted'] = 'Artikel gelöscht';
$string['item_canceled'] = 'Artikel storniert';
$string['useraddeditem'] = 'Nutzer/in mit der id {$a->userid} hat Aritkel {$a->itemid} {$a->component} für die Nutzer/in mit der id {$a->relateduserid} hinzugefügt';
$string['userdeleteditem'] = 'Nutzer/in mit der id {$a->userid} hat Aritkel {$a->itemid} {$a->component} für die Nutzer/in mit der id {$a->relateduserid} gelöscht';
$string['userboughtitem'] = 'Nutzer/in mit der id {$a->userid} hat Aritkel {$a->itemid} {$a->component} für die Nutzer/in mit der id {$a->relateduserid} gekauft';
$string['usernotboughtitem'] = 'Nutzer/in mit der id {$a->userid} konnte den Aritkel {$a->itemid} {$a->component} für die Nutzer/in mit der id {$a->relateduserid} nicht kaufen';
$string['itemexpired'] = 'Aritkel {$a->itemid} {$a->component} für die Nutzer/in mit der id {$a->relateduserid} ist abgelaufen';
$string['itemcanceled'] = 'Nutzer/in mit der id {$a->userid} hat Aritkel {$a->itemid} {$a->component} für die Nutzer/in mit der id {$a->relateduserid} storniert';
$string['payment_added'] = 'Nutzer/in hat eine Zahlung gestartet';
$string['payment_added_log'] = 'Nutzer/in mit der id {$a->userid} hat für den Aritkel {$a->itemid} {$a->component} für die Nutzer/in mit der id {$a->relateduserid} einen Zahlungsprozess mit dem identifier {$a->identifier} gestartet';

// Caches.
$string['cachedef_schistory'] = 'Cache wird verwendet um die Einkaufskörbe der user zu speichern';

// Cashier manual rebook.
$string['annotation'] = 'Anmerkung';
$string['annotation_rebook_desc'] = 'Geben Sie eine Anmerkung oder die OrderID der Zahlungstransaktion an, die Sie nachbuchen wollen.';
$string['cashier_manualrebook'] = 'Manuelle Nachbuchung';
$string['cashier_manualrebook_desc'] = 'Manuelle Nachbuchung einer Zahlungstransaktion wurde durchgeführt.';

// Invoicing.
$string['invoicingplatformheading'] = 'Bitte wählen Sie Ihre Rechnungsplattform';
$string['invoicingplatformdescription'] = 'Wählen Sie Ihre bevorzugte Rechnungsplattform aus den folgenden Optionen aus.';
$string['chooseplatform'] = 'Plattform wählen';
$string['chooseplatformdesc'] = 'Wählen Sie Ihre Rechnungsplattform aus.';
$string['baseurl'] = 'Basis-URL';
$string['baseurldesc'] = 'Geben Sie die Basis-URL für Ihre Rechnungsplattform ein.';
$string['token'] = 'Token';
$string['tokendesc'] = 'Geben Sie Ihr Authentifizierungstoken ein. Für ERPNExt benützen sie: &lt;api_key&gt;:&lt;api_secret&gt;';
$string['startinvoicingdate'] = 'Mit dem folgenden Datum beginnen Sie mit der Rechnungsstellung';
$string['startinvoicingdatedesc'] = 'Geben Sie einen Unix Timestamp für den Zeitpunkt ein, ab dem Sie Rechnungen generieren wollen.
 Kopieren Sie ihn von dort: https://www.unixtimestamp.com/';
$string['checkout_completed'] = 'Checkout abgeschlossen';
$string['checkout_completed_desc'] = 'Der Benutzer mit der ID {$a->userid} hat den Checkout mit identifier {$a->identifier}
 erfolgreich abgeschlossen';
$string['choosedefaultcountry'] = 'Standardland auswählen';
$string['choosedefaultcountrydesc'] = 'Wählen Sie das Standardland für die Rechnungsadresse aus. Dieses wird verwendet,
 wenn die Kund/innen keine Angaben zur Rechnungsadresse machen.';
$string['erpnext'] = 'ERPNext';

// Privacy API.
$string['history'] = "Käufe";
$string['ledger'] = "Zahlungsjournal";
$string['credits'] = "Guthaben";
