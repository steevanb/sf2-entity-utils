Traits for entities
-------------------

You will find a lot of traits in steevanb\EntityUtils\Traits namespace, to help you creating your entities.

All traits have a property, and accessors.

By default, annotations set nullable=false, but you can use NullableFoo to have nullable=true.

Some traits can be translated, with @Gedmo\Translatable annotation, and are prefixed by Translatable.

Exemples
--------

- Description is not nullable, not translated
- NullableDescription is nullable, not translated
- TranslatableNullableDescription is nullable, translated

Traits
------

- [Id](../Entity/IdTrait.php)
- [Date](../Entity/DateTrait.php)
- [DateTime](../Entity/DateTimeTrait.php)
- [Description](../Entity/DescriptionTrait.php)
- [Name](../Entity/NameTrait.php)
- [Slug](../Entity/SlugTrait.php)
- [Title](../Entity/TitleTrait.php)
- [EMail](../Entity/EMailTrait.php)
- [Message](../Entity/MessageTrait.php)
- [Url](../Entity/UrlTrait.php)

[Back to index](../README.md)
