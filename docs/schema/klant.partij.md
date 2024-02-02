# Partij

Een persoon of organisatie waarmee de gemeente een relatie heeft.

(Uiteindelijk) belanghebbenden waarmee de gemeente geen direct contact heeft (of heeft gehad) (bijvoorbeeld door vertegenwoordiging) zien we als partijen waarmee de gemeente een relatie heeft.? Een vertegenwoordiger (van een belanghebbende) is een partij? Partijen zijn ???gekende??? personen of organisaties? Dit betekent dat er voor eerste registratie en bij eventueel (her)gebruik authenticatie heeft plaatsgevonden. Dit hoeft niet per se te gebeuren met DigiD, eHerkenning o.i.d. Er is dus ook niet altijd sprake van vastlegging en verwerking van een BSN of ander buiten de gemeente toegekend ID-nummer.?

(Uiteindelijk) belanghebbenden waarmee de gemeente geen direct contact heeft (of heeft gehad) (bijvoorbeeld door vertegenwoordiging) zien we als partijen waarmee de gemeente een relatie heeft.? Een vertegenwoordiger (van een belanghebbende) is een partij? Partijen zijn ???gekende??? personen of organisaties? Dit betekent dat er voor eerste registratie en bij eventueel (her)gebruik authenticatie heeft plaatsgevonden. Dit hoeft niet per se te gebeuren met DigiD, eHerkenning o.i.d. Er is dus ook niet altijd sprake van vastlegging en verwerking van een BSN of ander buiten de gemeente toegekend ID-nummer.?

(Uiteindelijk) belanghebbenden waarmee de gemeente geen direct contact heeft (of heeft gehad) (bijvoorbeeld door vertegenwoordiging) zien we als partijen waarmee de gemeente een relatie heeft.? Een vertegenwoordiger (van een belanghebbende) is een partij? Partijen zijn ???gekende??? personen of organisaties? Dit betekent dat er voor eerste registratie en bij eventueel (her)gebruik authenticatie heeft plaatsgevonden. Dit hoeft niet per se te gebeuren met DigiD, eHerkenning o.i.d. Er is dus ook niet altijd sprake van vastlegging en verwerking van een BSN of ander buiten de gemeente toegekend ID-nummer.?

![Class Diagram](https://github.com/CommonGateway/CustomerInteractionBundle/blob/product-page-fix/docs/schema/klant.partij.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| nummer | integer | N/A | Yes |
| interneNotitie | string | N/A | Yes |
| indicatieGeheimhouding | boolean | N/A | Yes |
| voorkeurstaal | object | De taal waarin de persoon of organisatie bij voorkeur interactie heeft met de gemeente. | No |
| indicatieActief | boolean | N/A | Yes |
| soortPartij | string | N/A | No |
| organisatie | object | N/A | No |
| persoon | object | N/A | No |
| contactpersoon | object | N/A | No |
| voorkeurskanaal | object | Het kanaal waarlangs de partij bij voorkeur interactie heeft met de gemeente. | No |
| verstrekteAdressen | array | N/A | No |
| bezoekadres | object | Een bezoekadres is een adres waar een persoon of een bedrijf bezoekers ontvangt. | No |
| correspondentieadres | object | Het adres waarnaar de persoon of de organisatie de voor hen bestemde correspondentie laat verzenden. | No |
| externeIdentificaties | array | N/A | No |
| vertegenwoordiger | object | N/A | No |
| vertegenwoordigde | object | N/A | No |
