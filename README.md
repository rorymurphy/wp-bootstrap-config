WordPress Bootstrap Configuration Tool
======================================

This plugin allows users to easily customize the variables.less file
of a Twitter Bootstrap LESS style.  This provides a high degree of
control over the appearance of the site, without requiring any code
changes or redeployment of theme files.

In using this tool, it is assumed that users are familiar with LESS
stylesheets, and specifically with the structure Twitter Bootstrap
uses, with a variables.less file that defines all the key attributes
used throughout the stylesheets for the various components.

There are a few assumptions made in order for the tool to work.
First is that you have a LESS compiler installed on your system.
Typically this would be the lessc compiler for node.js, but others
could work.  In order to make the tool as flexible as possible, there
is a script called 'lessc' in the plugin directory.  It's function
is to invoke the correct LESS compiler, and it should be updated with
the correct path to the compiler on your system.

The second assumption is in regards to the layout of your theme.  It is
assumed that the folder structure follows the convention below

-   \<theme directory\>
    *   less
        +   bootstrap.less
        +   variables.less
        +   \<other less files\>
    *   bootstrap.css
    *   style.css

This allows the tool to easily locate your Bootstrap files when it
recompiles the stylesheet.  The last prerequisite is fairly
straightforward, when registering or enqueuing your Bootstrap based
stylesheet, you use the key 'bootstrap'.  Each time the stylesheets are
rendered, the plugin will look for a stylesheet reference with this key and
replace it with the dynamically generated one.

Usage
-----

Once the plugin has been enabled, a new menu item should appear under
Appearances->Bootstrap Settings for site administrators.  This new
administration page provides an interface for editing all of the
settings typically in variables.less.  Upon saving, the
LESS compiler will be run and the new CSS file generated.  It will use
your bootstrap.less file for the compilation, so any modification you make
will remain in place.  If you create additional styles or override the
default Bootstrap ones, these will be compiled into the dynamically generated
stylesheet so long as they are in a file referenced by your bootstrap.less.

Customizing
-----------

The plugin provides a great deal of flexibility through two filters.
The first is using the filter 'bootstrap_config_display_fields'.
This filter allows the developer to prevent certain fields or entire
sections from being shown to the user. They will still be generated
in the variables.less file using their default value.

The second is 'bootstrap_config_default_values', which allows complete
control over the sections and fields.  Fields can be added, removed, or
moved from one section to another.  When using this filter, any fields
removed will be omitted not only in the administration screen, but also
in the generated variables.less.  Remove fields with care as almost all
fields are required for Bootstrap stylesheets to compile correctly.

This filter has 1 argument, an array of the following structure:

    'category_name' => array(
        'variable_name' => array(name, title, type, value, order)
    )

The name field corresponds to the literal name of the variable in LESS,
while the title is the text that will be displayed in the settings page.
The field type along with order determine what values a particular field
can be set to.  A (target) field may be set to the value of another
(source) field if they are of same type and the latter has a lower order
(i.e. the source field is defined before the target).  As an example,
the Body Background Color (@bodyBackground) can be set to the value (@black)
because they are both of type color and @black has an order of 10 while
@bodyBackground has an order of 20.  However, the reverse is not possible
and will cause an error.


