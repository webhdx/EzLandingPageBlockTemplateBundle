# EzLandingPageBlockTemplateBundle

EzLandingPageBlockTemplateBundle contains template for new blocks for EzLandingPageFieldTypeBundle - powerful mechanism for creating dynamic landing pages in [eZ Studio](http://ezstudio.com) by [eZ Systems](http://ez.no)

Keep in mind this isn't any valuable, working block type. It only shows 2 examples how you can:
* create simple block solely with YAML with some syntax shortcuts (`More Fancy` example)
* create new block type in YAML with an additional service allowing business logic implementation (`Fancy` example)
  

## Usage ##

1. Clone this repository
2. Enable it in `AppKernel.php` *(by adding a new element inside the `registerBundles()` method)*
```php 
new \EzSystems\LandingPageBlockTemplateBundle\EzSystemsLandingPageBlockTemplateBundle()
```
3. You can play with the blocks using knowledge from [the official documentation](https://doc.ez.no/pages/viewpage.action?pageId=34079831).

#### credits 

###### Copyright (C) 1999-2016 eZ Systems AS. All rights reserved.
###### Block icon made by [Freepik](http://www.freepik.com) from [http://www.flaticon.com](www.flaticon.com) is licensed by [CC 3.0 BY](http://creativecommons.org/licenses/by/3.0/)
