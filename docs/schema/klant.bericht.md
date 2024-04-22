# Bericht

No description available.

![Class Diagram](https://github.com/CommonGateway/CustomerInteractionBundle/blob/taak-object-changes-2/docs/schema/klant.bericht.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| batchID | string | GUID zonder accolades in registry format. | No |
| aanmaakDatum | string | Datum waarop de batch is aangemaakt. | No |
| berichtLeverancierID | string | Het OIN van uw organisaite, 20 cijfers. | No |
| berichtID | string | GUID in registry format. | No |
| berichtType | string | De letterlijke naam van het berichtType. | No |
| publicatieDatum | string | Datum waarop het bericht wordt gepubliceerd. | No |
| onderwerp | string | Onderwerp van het bericht. | No |
| berichttekst | string | Tekst van het bericht. | No |
| referentie | string | Uw eigen referentiegegevens. | No |
| gebruikerID | string | BSN van geadresseerde. | No |
| soortGebruiker | string | Vaste waarde: Burger. | No |
| inhoud | string | Inhoud (PDF) als base64. | No |
| bijlageType | string | Vaste waarde: Pdf. | No |
| omschrijving | string | Omschrijving van de bijlage. | No |
| volgorde | string | Indien 1 bijlage meegestuurd "1" indien 2 bijlagen meegestuurd "2" | No |
| partij | object | N/A | No |
