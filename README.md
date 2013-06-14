WordPress Bootstrap Configuration Tool
======================================

This plugin allows users to easily customize the variables.less file
of a Twitter Bootstrap LESS style.  This provides a high degree of
control over the appearance of the site, without requiring any code
changes or redeployment of theme files.

There are a few assumptions made in order for the tool to work.
First is that you have a LESS compiler installed on your system.
Typically this would be the lessc compiler for node.js, but others
could work.  In order to make the tool as flexible as possible, there
is a script called 'lessc' in the plugin directory.  It's function
is to invoke the correct LESS compiler, and it should be updated with
the correct path to the compiler on your system.

The second assumption is in regards to the layout of your theme.  It is
assumed that the folder structure follows the convention below

\-\<theme directory\>
\-\-less
\-\-\-bootstrap.less
\-\-\-variables.less
\-\-\-\<other less files\>

This allows the tool to easily locate your Bootstrap files when it
recompiles the stylesheet.
