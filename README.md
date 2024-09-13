# Over KlantenRegister

KlantenRegister is de spil in het web van klantinteractie binnen de overheid. Het systeem integreert naadloos klantinteractieregisters en de klantinteractie-convenience API. Het maakt gebruik van de CustomerInteractionBundle om alle interacties met inwoners gestructureerd en toegankelijk te houden, waardoor overheidsmedewerkers efficiënter kunnen werken.

## Architectuur

De architectuur van KlantenRegister is gebaseerd op erkende klantinteractiepatronen en dienstverleningsmodellen:

* **Klanten en Taken**: Deze zijn gebaseerd op klantinteractiepatronen zoals beschreven in het [Klantinteractie Informatiemodel](https://vng-realisatie.github.io/klantinteracties/informatiemodel/semantisch_model). Dit model biedt een gestandaardiseerde manier om interacties met klanten te structureren en beheren. Let op in dit model kent men niet de term Klanten maar gebruikt men de term Partij(en). Dat betekend dat een Klant een Partij is en omgekeerd. [Partij API](https://redocly.github.io/redoc/?url=https://raw.githubusercontent.com/CommonGateway/CustomerInteractionBundle/main/docs/openapi.json\&nocors#tag/partij) [Taken API](https://redocly.github.io/redoc/?url=https://raw.githubusercontent.com/CommonGateway/CustomerInteractionBundle/main/docs/openapi.json\&nocors#tag/taak)

* **Berichten**: Berichten binnen het KlantenRegister zijn gebaseerd op het [dienstverleningsforum Dienstverleningsmodel](https://dienstverleningsplatform.gitbook.io/platform-generieke-dienstverlening-public/patronen/berichten). Dit model biedt richtlijnen voor het uitwisselen van berichten tussen verschillende dienstverleningssystemen, waardoor een consistente en efficiënte communicatie mogelijk wordt. [Berichten API](https://redocly.github.io/redoc/?url=https://raw.githubusercontent.com/CommonGateway/CustomerInteractionBundle/main/docs/openapi.json\&nocors#tag/bericht)

Binnen de documentatie van platform dienstverlening vind je ook meer terug over de toepassing van taken.

* **Api first**:  [API documentatie](https://redocly.github.io/redoc/?url=https://raw.githubusercontent.com/CommonGateway/CustomerInteractionBundle/main/docs/openapi.json\&nocors#tag/partij).

> **Note** Binnen VNG architectuur heten klanten partijen

## Backwards compatibility

Het KlantenRegister heeft ook backwards compatibility met de oudere (deprecated) [KlantenBundle](https://github.com/CommonGateway/KlantenBundle). De volgende endpoints zijn zo ingericht dat ze zich gedragen zoals de KlantenBundle dat deed, maar op de achtergrond worden er nieuwe CustomerInteractionBundle objecten gebruikt:

* /api/kic/v1/klanten => op de achtergrond: partij
* /api/kic/v1/contactmomenten => op de achtergrond: klantcontact
* /api/kic/v1/klantcontactmomenten => op de achtergrond: betrokkeneBijKlantcontact

## Sequence Diagrammen

Om een beter inzicht te geven in de werking van het KlantenRegister, hebben we een aantal sequence diagrammen opgesteld. Deze diagrammen illustreren de interacties tussen verschillende componenten en actoren in het systeem, met een focus op taken en klantinteracties.

### Taak Simpel
![Taak Simpel](https://raw.githubusercontent.com/CommonGateway/CustomerInteractionBundle/main/docs/taak_simpel.svg)

Dit diagram toont een vereenvoudigde weergave van het taakproces, waarbij een medewerker een verzoek tot aanvulling maakt en de klant hierop reageert via MijnOmgeving.

### Taak Uitgebreid
![Taak Uitgebreid](https://raw.githubusercontent.com/CommonGateway/CustomerInteractionBundle/main/docs/taak_uitgebreid.svg)

Het uitgebreide taakdiagram geeft een meer gedetailleerd overzicht van het volledige proces, inclusief de creatie van een zaak, beoordeling door een medewerker, en de afhandeling van de taak.

### Voorkeurskanaal Vaststellen
![Voorkeurskanaal Vaststellen](https://raw.githubusercontent.com/CommonGateway/CustomerInteractionBundle/main/docs/voorkeurskanaal_vaststellen.svg)

Dit diagram laat zien hoe het systeem het voorkeurskanaal van een klant bepaalt en gebruikt voor communicatie, wat een belangrijk aspect is van klantgerichte dienstverlening.

Deze diagrammen bieden een visuele representatie van de processen binnen het KlantenRegister en helpen bij het begrijpen van de interacties tussen verschillende componenten en actoren in het systeem.

## Bijdragen

Wilt u bijdragen aan de ontwikkeling van KlantenRegister? Uw input is welkom, of het nu gaat om foutmeldingen, verbetervoorstellen, of codebijdragen. Raadpleeg onze `CONTRIBUTING.md` voor meer informatie over hoe u kunt deelnemen.

## Licentie

KlantenRegister is uitgegeven onder een EUPL 1.2-licentie. Zie het `LICENSE.md`-bestand in onze GitHub repository voor meer details.

## Contact

Voor meer informatie over KlantenRegister en hoe het platform uw organisatie kan ondersteunen, kunt u contact opnemen via <info@conduction.nl>.
