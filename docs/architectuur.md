# Architectuur

Het Klantregister is een implementatie van de [VNG Klantinteractie API]() gebaseerd op het [Open Regsiters](https://openregisters.app/) framework.

## Inhoud van het register
Het klantenregsiter slaat alleen gegeven op die niet in het BRP zijn opgeslagen, bij iedere bevraging op het klantenregister vraag het door op het [BRP]() via de [Haal Centraal API]() vervolgens vult het de daar gevonden NAW gegevens aan met email addres, telefoonnummer en voorkeurs kanalen om vervolgens een totaal klant beeld terug te geven.

![Class Diagram](https://github.com/CommonGateway/CustomerInteractionBundle/blob/main/docs/sequence.svg)

Daarnaast bevat het klantenregister klant specifieke informatie zo als taken en berichten.