# Carbon Field: Unique ID

Adds a `uniqid` field type to Carbon Fields.

We made because `iamntz/carbon-uniqid` doesn't work with Carbon Fields 3.

Install using composer:

```cli
composer require ynacorp/carbon-field-uniqid
```

Usage:

```php
Field::make('uniqid', 'my_field_name')
```
