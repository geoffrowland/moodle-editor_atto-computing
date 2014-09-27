moodle-editor_atto-computing
============================

Computing equation editor for Moodle using the mhchem TeX extension in MathJax

Installation

Either

Download the zip file, unzip to give the moodle-atto_editor-computing folder. Rename this to computing and copy to the lib/editor/atto/plugins folder of your Moodle installation to give lib/editor/atto/plugins/computing

Or
Navigate to the lib/editor/atto/plugins directory of your Moodle installation. Then isue the command

git clone https://github.com/geoffrowland/moodle-editor_atto-computing.git computing.

Then visit the Admin notifications page of your Moodle to complete the installation.

After installation you need to complete the following steps:

Add computing to Administration > Site administration > Plugins > Text editors > Atto HTML editor > Atto toolbar settings > Toolbar config, to give, for example:

insert = computing, equation, charmap, table, clear

Add mhchem to the Moodle MathJax filter configuration

Edit Administration > Site administration > Plugins > Filters > MathJax > MathJax configuration to include:

TeX: {
  extensions: ["mhchem.js","color.js","AMSmath.js","AMSsymbols.js","noErrors.js","noUndefined.js"]
},

You may need to Purge all caches on your Moodle server

Administration > Site administration > Development > Purge all caches

and in your browser

Enjoy!






