# Taak

Een taak voor een burger, inwoner of vertegenwoordiger van een organisatie die moet worden uitgevoerd

![Class Diagram](https://github.com/CommonGateway/CustomerInteractionBundle/blob/main/docs/schema/klant.taak.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| id | string | De unieke id van dit object voor verder | Yes |
| gebruikerID | string | Het BSN of KVK nummer van de geadreseerde | No |
| soortGebruiker | string | Het soort gebruiker natuurlijkpersoon of niet natuurlijkpersoon | No |
| onderwerp | string | Onderwerp van het bericht | Yes |
| berichttekst | string | Tekst van het bericht. | Yes |
| Referentie | string | Berichtreferentie | No |
| handelingsPerspectief | string | Benodigde reactie van de geadresseerde (bijv: betalen, informatie verstrekken). | Yes |
| eindDatumHandelingsTermijn | date | Termijn waarbinnen de geadresseerde moet reageren. | No |
| bijlagen | array | De bijlagen bij een bericht. | No |
| geopend | boolean | Het bericht is door de geadresseerde geopend of nog niet geopend. | Yes |
