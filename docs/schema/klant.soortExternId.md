# Soort Extern Id

Een opsomming van de soorten externe identificatiecodes met de bijbehorende externe registers.



![Class Diagram](https://github.com/CommonGateway/CustomerInteractionBundle/blob/main/docs/schema/klant.soortExternId.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| code | string | De code, behorende bij de landnaam, opgenomen in de Landentabel van de GBA. | Yes |
| externRegister | string | Het register dat geraadpleegd kan worden m.b.v. de externe identificatiecode. | Yes |
| naam | string | De naam van het land, zoals opgenomen in de Landentabel van de GBA. | Yes |
