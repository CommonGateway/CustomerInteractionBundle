# InterneTaak

No description available.

![Class Diagram](https://github.com/CommonGateway/CustomerInteractionBundle/blob/documentation-2024-Klant/docs/schema/klant.interneTaak.svg)

## Properties

| Property | Type | Description | Required |
|----------|------|-------------|----------|
| toegewezenOp | datetime | N/A | Yes |
| gevraagdeHandeling | string | N/A | Yes |
| nummer | integer | N/A | Yes |
| status | string | De waarden van de typering van de voortgang van afhandeling van

 een VERZOEK.<body><ul><li>`te_verwerken` - te verwerken Het verzoek is afgehandeld.</li><li>`verwerkt`

 - verwerkt Het verzoek id buiten behandeling gesteld.</li></ul></body> | Yes |
| toelichting | string | N/A | No |
| actor | object | N/A | Yes |
| klantcontact | object | N/A | Yes |
