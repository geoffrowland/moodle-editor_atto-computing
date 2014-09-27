moodle-editor_atto-computing
============================

Computer science equation editor plugin for Moodle 2.7+ using either TeX or MathJax

Installation

Either

Download the zip file, unzip to give the moodle-atto_editor-computing folder. Rename this to computing and copy to the lib/editor/atto/plugins folder of your Moodle installation to give lib/editor/atto/plugins/computing

Or 

Navigate to the lib/editor/atto/plugins directory of your Moodle installation. Then isue the command:

git clone https://github.com/geoffrowland/moodle-editor_atto-computing.git computing.

Then visit the Admin notifications page of your Moodle to complete the installation.

After installation, you need to complete the following steps:

Add computing to Administration > Site administration > Plugins > Text editors > Atto HTML editor > Atto toolbar settings > Toolbar config, to give, for example:

insert = computing, equation, charmap, table, clear

Of course you will need to use the Atto HTML editor. You will also need to have enabled either the Moodle TeX Filter or the MathJax Filter or both for the Computer science equation editor to work

You may need to Purge all caches on your Moodle server

Administration > Site administration > Development > Purge all caches

and in your browser

Enjoy!
