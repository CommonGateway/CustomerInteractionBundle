# Over KlantenRegister

KlantenRegister is de spil in het web van klantinteractie binnen de overheid. Het systeem integreert naadloos klantinteractieregisters en de klantinteractie-convenience API. Het maakt gebruik van de CustomerInteractionBundle om alle interacties met inwoners gestructureerd en toegankelijk te houden, waardoor overheidsmedewerkers efficiënter kunnen werken.

## Architectuur

De architectuur van KlantenRegister is gebaseerd op erkende klantinteractiepatronen en dienstverleningsmodellen:

* **Klanten en Taken**: Deze zijn gebaseerd op klantinteractiepatronen zoals beschreven in het [Klantinteractie Informatiemodel](https://vng-realisatie.github.io/klantinteracties/informatiemodel/semantisch_model). Dit model biedt een gestandaardiseerde manier om interacties met klanten te structureren en beheren.

* **Berichten**: Berichten binnen het KlantenRegister zijn gebaseerd op het [dienstverleningsforum Dienstverleningsmodel](https://dienstverleningsplatform.gitbook.io/platform-generieke-dienstverlening-public/patronen/berichten). Dit model biedt richtlijnen voor het uitwisselen van berichten tussen verschillende dienstverleningssystemen, waardoor een consistente en efficiënte communicatie mogelijk wordt.

Binnen de documentatie van platform dienstverlening vind je ook meer terug over de toepassing van taken.

* **Api first**:  [API documentatie](https://redocly.github.io/redoc/?url=https://raw.githubusercontent.com/CommonGateway/CustomerInteractionBundle/main/docs/openapi.json\&nocors#tag/partij).

> **Note** Binnen VNG architectuur heten klanten partijen

## Backwards compatibility

Het KlantenRegister heeft ook backwards compatibility met de oudere (deprecated) [KlantenBundle](https://github.com/CommonGateway/KlantenBundle). De volgende endpoints zijn zo ingericht dat ze zich gedragen zoals de KlantenBundle dat deed, maar op de achtergrond worden er nieuwe CustomerInteractionBundle objecten gebruikt:

* /api/kic/v1/klanten => op de achtergrond: partij
* /api/kic/v1/contactmomenten => op de achtergrond: klantcontact
* /api/kic/v1/klantcontactmomenten => op de achtergrond: betrokkeneBijKlantcontact

## Bijdragen

Wilt u bijdragen aan de ontwikkeling van KlantenRegister? Uw input is welkom, of het nu gaat om foutmeldingen, verbetervoorstellen, of codebijdragen. Raadpleeg onze `CONTRIBUTING.md` voor meer informatie over hoe u kunt deelnemen.

## Licentie

KlantenRegister is uitgegeven onder een EUPL 1.2-licentie. Zie het `LICENSE.md`-bestand in onze GitHub repository voor meer details.

## Contact

Voor meer informatie over KlantenRegister en hoe het platform uw organisatie kan ondersteunen, kunt u contact opnemen via <info@conduction.nl>.
