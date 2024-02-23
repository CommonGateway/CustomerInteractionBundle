# CommonGateway\CustomerInteractionBundle\Service\CustomerInteractionService  







## Methods

| Name | Description |
|------|-------------|
|[__construct](#customerinteractionservice__construct)|The service constructor.|
|[extendHandler](#customerinteractionserviceextendhandler)|Extend requests to external sources|
|[extendIdentificator](#customerinteractionserviceextendidentificator)|Extend an identificator object with the subobject.|
|[recursiveFindIdentificators](#customerinteractionservicerecursivefindidentificators)|Recursively walk trough the result of the original request and extend the identificators.|




### CustomerInteractionService::__construct  

**Description**

```php
public __construct (\CallService $callService, \EntityManagerInterface $entityManager, \RequestStack $requestStack, \GatewayResourceService $resourceService)
```

The service constructor. 

 

**Parameters**

* `(\CallService) $callService`
: The call service  
* `(\EntityManagerInterface) $entityManager`
: The entity manager  
* `(\RequestStack) $requestStack`
: The request stack  
* `(\GatewayResourceService) $resourceService`
: The resource service  

**Return Values**

`void`


<hr />


### CustomerInteractionService::extendHandler  

**Description**

```php
public extendHandler (array $data, array $configuration)
```

Extend requests to external sources 

 

**Parameters**

* `(array) $data`
: The result of the original request.  
* `(array) $configuration`
: The configuration of this action, contains the entity that should be extended.  

**Return Values**

`array`

> The updated data.


<hr />


### CustomerInteractionService::extendIdentificator  

**Description**

```php
public extendIdentificator (array $identificator)
```

Extend an identificator object with the subobject. 

 

**Parameters**

* `(array) $identificator`
: The identificator object.  

**Return Values**

`array`

> The resulting identificator object.


**Throws Exceptions**


`\Exception`


<hr />


### CustomerInteractionService::recursiveFindIdentificators  

**Description**

```php
public recursiveFindIdentificators (array $result)
```

Recursively walk trough the result of the original request and extend the identificators. 

 

**Parameters**

* `(array) $result`
: The result to check and update.  

**Return Values**

`array`

> The updated result.


<hr />

