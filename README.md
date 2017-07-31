# GrMassively Theme

The **GrMassively** Theme is for [Grav CMS](http://github.com/getgrav/grav).

It is a port of the Massivley theme from [HTML5Up](http://html5up.net) (which is licensed under a Creative Commons By Attribution license [CC BY 3.0](https://creativecommons.org/licenses/by/3.0/))

[HTML5Up](http://html5up.net) has lots of great designs worth looking at.

## Description

This Grav implementation of Massively provides default, article, collection and frontpage templates to implement the pages shown in the [Massively demo on HTML5Up](https://html5up.net/uploads/demos/massively/index.html).


### Dependencies

This theme requires the [Pagination](https://github.com/getgrav/grav-plugin-pagination) and [Form](https://github.com/getgrav/grav-plugin-form) plugins to implement all of it's featues.

### Implementation

The GrMassively theme has been parameterised so that theme wide features can be set from the Admin—>Themes->GrMassively screen. Included are tabs for _General_ settings, _Social Links & Copyright_ and the _Footer_ contact form and details. Each tab is explained in more detail below.

#### General

The General settings that can be adjusted are:
 - Background Image<br>You can create your own background image for the theme and upload it to your Grav site. For it to work it **must** be called `bg.jpg`. For reference the orginal `bg.jpg` used in Massively is 1680 px wide and 2000 px tall.
 - Highlight Color<br>Various link and button change to the highlight color when hovered over, Massively defaults to `#18bfef` but in GrMassively we provide an override that you can set to any color available in the web color space. 
 - Page Date Format<br>Articles in Massively display their `date` across the top of the article, from this option you can select from a range of date format to suit your preferences.
 - Read more Label<br>Article collection pages (like the frontpage in the demo) provide a button to link to the full aritlce, the default label is `Full Story` but you can set it to anything you want using this option.

#### Social Links & Copyright

The Social buttons (displayed top right of theme) and the Copyright block (displayed at the very bottom of the theme) can be configured from this tab.

 - Copyright Block<br>You can add as many items to the copyright block as desired. Each item is separated from the next by padding and a vertical pipe `|`. Each item can contain basic markdown or Twig. Due to constraints of the design small peice of content are recommended. 
 
 - Social Buttons<br>Each item in the social buttons area can define an `Icon` (e.g. Twitter), `Lnk Title` (e.g. 'See you on Twitter') and an actual `Link` (e.g. https://twitter.com/cpplaus). You can add as many items to the Social Buttons block as you like, but bear in mind the space limitations of the theme.
 
#### Footer Contact Settings

This section deals with the settings for the site-wide footer defined in the Massively theme that appears directly above the Copyright block at the bottom of the page.

 - Enable Contact Form<br>If this is not enabled, the left side of the footer will be empty. If it is enabled you must select a Grav page with a suitable contact form embedded in it. (_The demo content includes a suitable `form` in the page `contact-us/form.md`._)
 - Footer Address<br>Enables the display of any Address block items in the footer right position.
 - Address Block Items<br>These items are displayed in the footer right block. Each item is displayed in it's own block, and has a `Type`, `Label` and a `Value`.
    - Type controls how the `Value` is rendered, and can be one of:
        - Address
        - Email
        - Link (url)
        - Markdown
        - Telephone number, _or_ 
        - Plain text
    - Label is displayed to _left_ of the Value and is usually a suitable word like "Phone" or "Website"
    - Value is the content you want to display and is rendered differently according to type.<br>Email, link and telephone numbers are all appropriately wrapped to make the links live.<br>Markdown is parsed for standard markdown and plain text is rendered as entered (so basic HTML can be used.)<br>_Please note_ complex markdown will not work well with the themes structure. 
- Social Block<br>Enables the display of Social links (defined in the `Social Links & Copyright` tab) using the them `alt` icon styling. You can also specify a custom label value for the `Social` block.

## Credits

GrMassively is based on Massively from [HTML5Up](http://html5up.net)

All conversion work to run on Grav was done by [CPPL](https://craigphillips.biz)

Additional credits (per the Massively [README.txt](README.txt))

**Demo Images:** [Unsplash](http://unsplash.com)

**Icons:** [Font Awesome](https://fortawesome.github.com/Font-Awesome)
