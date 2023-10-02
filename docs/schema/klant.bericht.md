# Bericht

Een bericht aan een bedrijf,burger, inwoner of organisatie die tot handelen oproept

![Class Diagram](https://github.com/CommonGateway/CustomerInteractionBundle/blob/klanten/docs/schema/klant.bericht.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | De unieke id van dit object voor verder gebruik | Yes |
| gebruikerID | string | Het BSN of KVK nummer van de geadreseerde | No |
| soortGebruiker | string | Het soort gebruiker natuurlijkpersoon of niet natuurlijkpersoon | No |
| onderwerp | string | Onderwerp van het bericht | Yes |
| berichttekst | string | Tekst van het bericht. | Yes |
| referentie | string | Berichtreferentie | No |
| handelingsPerspectief | string | Benodigde reactie van de geadresseerde (bijv: betalen, informatie verstrekken). | Yes |
| eindDatumHandelingsTermijn | datetime | Termijn waarbinnen de geadresseerde moet reageren. | No |
| bijlagen | array | De bijlagen bij een bericht. | No |
| geopend | boolean | Het bericht is door de geadresseerde geopend of nog niet geopend. | Yes |
