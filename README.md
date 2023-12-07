# CustomerInteractionBundle [![Codacy Badge](https://app.codacy.com/project/badge/Grade/980ea2efc85a427ea909518f29506ff6)](https://app.codacy.com/gh/CommonGateway/CustomerInteractionBundle/dashboard?utm_source=gh\&utm_medium=referral\&utm_content=\&utm_campaign=Badge_grade)

Deze plugin is bedoeld als MOCK voor de klant interactie api's tijden de Mijn Zaken Hackathon van 2 op 6 oktober, de plugin heeft GEEN productie status.

## Positionering

De klantinteractie bundle voorziet in

* Klanten API's
* Taken API
* Berichten API

## Patroon

![Sequence Diagram](https://raw.githubusercontent.com/CommonGateway/CustomerInteractionBundle/main/docs/mijnzaken_sequence_diagram.svg "Sequence Diagram")

## Datamodel

![Datamodel](https://raw.githubusercontent.com/CommonGateway/CustomerInteractionBundle/main/docs/schema/all_classes.svg "Datamodel")

## Gebruik

### Ophalen klant aan de hand van BSN

In de klantinteractie API worden klanten opgeslagen in het objecttype `Partij`. Om deze partij te verbinden met een persoon in het BRP of een vestiging in het KVK wordt een externeIdentificatie gebruikt met daarin een identificator.

De identificator bevat het externe register waar de klant nog meer in bestaat, het objecttype waarmee er in het externe register verbonden wordt, het identificatienummer in het externe register en het type identificatienummer.
Op dit moment wordt voor BSN's het type 'bsn' gebruikt.

Om een klant op te halen aan de hand van een BSN kan dus de volgende call worden gedaan:

`/api/kic/v1/partijen?externeIdentificatie.partijIdentificator.objectId={{ bsn }}&externeIdentificatie.partijIdentificator.objecttype=ingeschrevenpersoon`

Waarin `{{ bsn }}` het BSN is dat we elders hebben gevonden.

### Digitaal Adressen

Digitaal adressen zijn in de klantinteractie-API de plaats waar e-mail adressen en telefoonnummers leven (andere soorten adressen kunnen worden toegevoegd).
Deze digitaal adressen bestaan uit het adres zelf (dus het e-mail adres of het telefoonnummer), een omschrijving (bijvoorbeeld 'e-mail adres werk' of 'telefoonnummer mobiel') en
het type van het digitaal adres. (Voor e-mail adressen is dit `emailadres`, voor telefoonummers is dit `telefoonnummer`. Andere types kunnen op aanvraag worden toegevoegd.)

### Externe resources extenden

In het datamodel van de klantinteractie-API wordt op 3 plekken naar externe objecten verwezen. Dit gebeurt in de objecten klantcontact en partij, in de subobjecten onder het veld `bijlage`, `gaatOver` respectievelijk `externeIdentificaties`.

Deze externe verwijzingen kunnen worden extend bij het ophalen van een enkel object van het type. Dit gebeurt dan door het extenden van het veld waarin het object Identificator in zit, dus bijvoorbeeld voor het gaatOver veld van een klantcontact moet de query `?_extend[]=gaatOver.objectIdentificator` worden meegegeven. Indien het identificator-object zich in een array van objecten bevind (zoals bij partijen.externeIdentificaties), dan moet de index van het te extenden object worden meegegeven.
Bijvoorbeeld als het eerste object in de externeIdentificaties van een partij moet worden extend, moet de query als volgt zijn: `_extend[]=externeIdentificaties.0.partijIdentificator`.

> :warning: Let op, een `_extend[]=all` wordt hier niet gezien als vervanging van het specifieke veld, in verband met privacy en performance overwegingen moeten extended velden specifiek meegegeven worden bij het bevragen van externe gegevens.
