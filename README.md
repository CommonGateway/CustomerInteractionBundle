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

![Datamodel](.., "Datamodel")

## Gebruik

### Ophalen klant aan de hand van BSN

In de klantinteractie API worden klanten opgeslagen in het objecttype `Partij`. Om deze partij te verbinden met een persoon in het BRP of een vestiging in het KVK wordt een externeIdentificatie gebruikt met daarin een identificator.

De identificator bevat het externe register waar de klant nog meer in bestaat, het objecttype waarmee er in het externe register verbonden wordt, het identificatienummer in het externe register en het type identificatienummer.
Op dit moment wordt voor BSN's het type 'bsn' gebruikt.

Om een klant op te halen aan de hand van een BSN kan dus de volgende call worden gedaan: 

```/api/kic/v1/partijen?externeIdentificatie.partijIdentificator.objectId={{ bsn }}&externeIdentificatie.partijIdentificator.objecttype=ingeschrevenpersoon```

Waarin `{{ bsn }}` het BSN is dat we elders hebben gevonden.


### Digitaal Adressen

Digitaal adressen zijn in de klantinteractie-API de plaats waar e-mail adressen en telefoonnummers leven (andere soorten adressen kunnen worden toegevoegd).
Deze digitaal adressen bestaan uit het adres zelf (dus het e-mail adres of het telefoonnummer), een omschrijving (bijvoorbeeld 'e-mail adres werk' of 'telefoonnummer mobiel') en
het type van het digitaal adres. (Voor e-mail adressen is dit `emailadres`, voor telefoonummers is dit `telefoonnummer`. Andere types kunnen op aanvraag worden toegevoegd.)