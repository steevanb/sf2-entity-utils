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

- [Id](../Traits/Id.php)
- [Date](../Traits/Date.php)
- [DateTime](../Traits/DateTime.php)
- [Description](../Traits/Description.php)
- [Name](../Traits/Name.php)
- [Slug](../Traits/Slug.php)
- [Title](../Traits/Title.php)
- [EMail](../Traits/EMail.php)
- [Message](../Traits/Message.php)

[Back to index](../README.md)
