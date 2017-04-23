# Download ID Field

This is a custom Form Field to help Joomla! extension developers to implement Joomla Update System and meet the new [JED requirement](https://extensions.joomla.org/support/knowledgebase/item/joomla-update-system-requirement/ "Joomla! Update System requirement") for **PAID** extensions.

This field is developed to be used with [Akeeba Subscriptions](https://github.com/akeeba/akeebasubs/wiki) and [Akeeba Release System](https://github.com/akeeba/release-system/wiki) packages, although it can be customized to work with other subscriptions and realease/downlaod managers.

## How To Use?

First of all, download the downloadid.php file and add it in a proper folder inside your extension package I recommend assets/fields, so the the relative path should be YOUR\_EXTENSION/assets/fields/downloadid.php

Now, the Download ID field is ready to be used as any other standard form field within your installation xml file.

This is an example of a module installation file, let's say mod\_somemodule.xml

`<config>`

`<fields name="params">`

`<fieldset name="basic" addfieldpath="/modules/mod_somemodule/assets/fields">`

`...`

`<field`

`name="dlid"`

`type="downloadid"`

`label="Download ID"`

`description="Download ID description"`

`default=""`

`extension="Some Module"`

`key="dlid"`

`/>`

`...`

`</fieldset>`

`</fields>`

`</config>`

`<updateservers>`

`<server type="extension" name="Some Module" priority="1">http://www.yourwebsite.com/somemodule_update.xml</server>`

`</updateservers>`

Important

The Download ID field has two important additional attributes, _**extension**_ and _**key**_ where:

_**extension**_: must be the same as the _name_ attribute of &lt;server&gt;, this is very important to set the update the correct record in the update\_sites table.

_**key**_: has a default value of "dlid" which is used with Akeeba Subs & Release System combination, of course you can give it any other value if needed with any other subs and release managers.

> Note:
>
> I developed and tested this custom field in the [Stats Pro for JED](http://www.joomreem.com/extensions-store/jed-stats-pro) module.
>
> Any comments or suggessions are welcome.
>
> You can use the Download ID field as it is, without any gaurantees.
