<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Settings that allow configuration of the list of tex examples in the computing editor.
 *
 * @package    atto_computing
 * @copyright  2014 Geoffrey Rowland <rowland.geoff@gmail.com>
 * Based on    @package atto_equation
 * @copyright  2013 Damyon Wiese <damyon@moodle.com>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$ADMIN->add('editoratto', new admin_category('atto_computing', new lang_string('pluginname', 'atto_computing')));

$settings = new admin_settingpage('atto_computing_settings', new lang_string('settings', 'atto_computing'));
if ($ADMIN->fulltree) {
    // Group 1.
    $name = new lang_string('librarygroup1', 'atto_computing');
    $desc = new lang_string('librarygroup1_desc', 'atto_computing');
    $default = '
+
-
\pm
\mp
\times
\ast
{}^\wedge
\div
/
\mathop{\mathrm{div}}
\backslash
\bmod
\mathop{\%}
<
>
\leq
\geq
=
==
\neq
!=
<>
';
    $setting = new admin_setting_configtextarea('atto_computing/librarygroup1',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 2.
    $name = new lang_string('librarygroup2', 'atto_computing');
    $desc = new lang_string('librarygroup2_desc', 'atto_computing');
    $default = '
\leftarrow
\rightarrow
\uparrow
\downarrow
\leftrightarrow
\nearrow
\searrow
\swarrow
\nwarrow
\Leftarrow
\Rightarrow
\Uparrow
\Downarrow
\Leftrightarrow
\mapsto
';
    $setting = new admin_setting_configtextarea('atto_computing/librarygroup2',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 3.
    $name = new lang_string('librarygroup3', 'atto_computing');
    $desc = new lang_string('librarygroup3_desc', 'atto_computing');
    $default = '
\mathop{\mathrm{NOT}}
\lnot A
\overline{A}
\mathop{\mathrm{AND}}
A \land B
A \cdot B
\mathop{\mathrm{OR}}
A \lor B
A + B
\mathop{\mathrm{XOR}}
A \veebar B
A \oplus B
\mathop{\mathrm{NAND}}
\lnot (A \land B)
\overline{A \cdot B}
\mathop{\mathrm{NOR}}
\lnot (A \lor B)
\overline{A + B}
=
\equiv
\iff
\overline{\overline{A} \cdot \overline{B}}
\overline{\overline{A} + \overline{B}}
';
    $setting = new admin_setting_configtextarea('atto_computing/librarygroup3',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 4.
    $name = new lang_string('librarygroup4', 'atto_computing');
    $desc = new lang_string('librarygroup4_desc', 'atto_computing');
    $default = '
=
\neq
\in
\notin
\subset
\subseteq
\nsubseteq
\{\}
\varnothing
\emptyset
';
    $setting = new admin_setting_configtextarea('atto_computing/librarygroup4',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 5.
    $name = new lang_string('librarygroup5', 'atto_computing');
    $desc = new lang_string('librarygroup5_desc', 'atto_computing');
    $default = '
\mathop{\mathrm{ADD}}
\mathop{\mathrm{SUB}}
\mathop{\mathrm{STA}}
\mathop{\mathrm{LDA}}
\mathop{\mathrm{BRA}}
\mathop{\mathrm{BRZ}}
\mathop{\mathrm{BRP}}
\mathop{\mathrm{INP}}
\mathop{\mathrm{OUT}}
\mathop{\mathrm{HLT}}
\mathop{\mathrm{DAT}}
';
    $setting = new admin_setting_configtextarea('atto_computing/librarygroup5',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 6.
    $name = new lang_string('librarygroup6', 'atto_computing');
    $desc = new lang_string('librarygroup6_desc', 'atto_computing');
    $default = '
\mathrm{PC}
\mathrm{MAR}
\mathrm{MBR}
\mathrm{CIR}
\mathrm{Memory}
\mathrm{[PC]}
\mathrm{[MAR]}
\mathrm{[MBR]}
\mathrm{[CIR]}
\mathrm{[Memory]_{addressed}}
\leftarrow
';
    $setting = new admin_setting_configtextarea('atto_computing/librarygroup6',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

    // Group 7.
    $name = new lang_string('librarygroup7', 'atto_computing');
    $desc = new lang_string('librarygroup7_desc', 'atto_computing');
    $default = '
\mathbb{A}
\mathbb{B}
\mathbb{C}
\mathbb{D}
\mathbb{E}
\mathbb{F}
\mathbb{G}
\mathbb{H}
\mathbb{I}
\mathbb{J}
\mathbb{K}
\mathbb{L}
\mathbb{M}
\mathbb{N}
\mathbb{O}
\mathbb{P}
\mathbb{Q}
\mathbb{R}
\mathbb{S}
\mathbb{T}
\mathbb{U}
\mathbb{V}
\mathbb{W}
\mathbb{X}
\mathbb{Y}
\mathbb{Z}
';
    $setting = new admin_setting_configtextarea('atto_computing/librarygroup7',
                                                $name,
                                                $desc,
                                                $default);
    $settings->add($setting);

}
