<?php
/**
 * Internationalisation file for extension Wikimedia Messages
 *
 * @file
 * @ingroup Extensions
 * @comment TODO:
 * @comment + Remove current events and community portal from the default sidebar
 * @comment + and add those messages to here
 * @comment + Make the help links on non-Wikimedia sites point to mediawiki.org?
 */

$messages = array();

$messages['en'] = array(
	'wikimediamessages-desc' => 'Wikimedia specific messages',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/Donate/Now/en?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation', # do not translate this URL to other languages until a donation page, approved by Wikimedia Foundation, exists
	'sitesupport'            => 'Donate',
	'tooltip-n-sitesupport'  => 'Support us',
	'sidebar'                =>  '* navigation
** mainpage|mainpage-description
** portal-url|portal
** currentevents-url|currentevents
** recentchanges-url|recentchanges
** randompage-url|randompage
** helppage|help
** sitesupport-url|sitesupport', # do not translate or duplicate this message to other languages

	# Message used by multiple extensions (StoryBoard and ContributionReporting)
	'specialpages-group-contribution' => 'Contribution/Fundraiser',

	# Per http://lists.wikimedia.org/pipermail/wikitech-l/2008-September/039454.html
	'robots.txt'  => '# Lines here will be added to the global robots.txt', # do not translate or duplicate this message to other languages

	# Wikimedia specific usergroups
	'group-abusefilter'           => 'Abuse filter editors',
	'group-accountcreator'        => 'Account creators',
	'group-arbcom'                => 'Arbitration committee members',
	'group-autopatrolled'         => 'Autopatrollers',
	'group-autoreviewer'          => 'Autoreviewers',
	'group-bigexport'             => 'Big exporters',
	'group-confirmed'             => 'Confirmed users',
	'group-editprotected'         => 'Protected page editors',
	'group-filemover'             => 'File movers',
	'group-flood'                 => 'Bot users', // http://meta.wikimedia.org/wiki/Meta:Flood_flag
	'group-founder'               => 'Founders',
	'group-import'                => 'Importers',
	'group-interface_editors'     => 'Interface editors',
	'group-ipblock-exempt'        => 'IP block exemptions',
	'group-patroller'             => 'Patrollers',
	'group-researcher'            => 'Researchers',
	'group-rollbacker'            => 'Rollbackers',
	'group-transwiki'             => 'Transwiki importers',
	'group-trusted'               => 'Trusted users',

	'group-abusefilter-member'    => 'abuse filter editor',
	'group-accountcreator-member' => 'account creator',
	'group-arbcom-member'         => 'arbitration committee member',
	'group-autopatrolled-member'  => 'autopatroller',
	'group-autoreviewer-member'   => 'autoreviewer',
	'group-bigexport-member'      => 'big exporter',
	'group-confirmed-member'      => 'confirmed user',
	'group-editprotected-member'  => 'protected page editor',
	'group-filemover-member'      => 'file mover',
	'group-flood-member'          => 'bot user',
	'group-founder-member'        => 'founder',
	'group-import-member'         => 'importer',
	'group-interface_editors-member' => 'interface editor',
	'group-ipblock-exempt-member' => 'IP block exempt',
	'group-patroller-member'      => 'patroller',
	'group-researcher-member'     => 'researcher',
	'group-rollbacker-member'     => 'rollbacker',
	'group-transwiki-member'      => 'transwiki importer',
	'group-trusted-member'        => 'trusted user',

	'grouppage-abusefilter'    => '{{ns:project}}:Abuse filter editors',
	'grouppage-accountcreator' => '{{ns:project}}:Account creators',
	'grouppage-arbcom'         => '{{ns:project}}:Arbitration committee members',
	'grouppage-autopatrolled'  => '{{ns:project}}:Autopatrollers',
	'grouppage-autoreviewer'   => '{{ns:project}}:Autoreviewers',
	'grouppage-bigexport'      => '{{ns:project}}:Big exporters',
	'grouppage-confirmed'      => '{{ns:project}}:Confirmed users',
	'grouppage-editprotected'  => '{{ns:project}}:Protected page editors',
	'grouppage-filemover'      => '{{ns:project}}:File movers',
	'grouppage-flood'          => '{{ns:project}}:Bot users',
	'grouppage-founder'        => '{{ns:project}}:Founders',
	'grouppage-import'         => '{{ns:project}}:Importers',
	'grouppage-interface_editors' => '{{ns:project}}:Interface editors',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP block exemption',
	'grouppage-researcher'     => '{{ns:project}}:Researchers',
	'grouppage-rollbacker'     => '{{ns:project}}:Rollbackers',
	'grouppage-rollbacker'     => '{{ns:project}}:Rollbackers',
	'grouppage-transwiki'      => '{{ns:project}}:Transwiki importers',
	'grouppage-trusted'        => '{{ns:project}}:Trusted users',

	# Global Wikimedia specific usergroups (defined on http://meta.wikimedia.org/wiki/Special:GlobalGroupPermissions)

	'group-steward'         => 'Stewards',
	'group-sysadmin'        => 'System administrators',
	'group-editinterface'   => 'Interface editors',
	'group-Global_bot'      => 'Global bots',
	'group-Global_rollback' => 'Global rollbackers',
	'group-Global_sysops'   => 'Global sysops',
	'group-Ombudsmen'       => 'Ombudsmen',
	'group-Staff'           => 'Staffs',

	'group-steward-member'         => 'steward',
	'group-sysadmin-member'        => 'system administrator',
	'group-editinterface-member'   => 'interface editor',
	'group-Global_bot-member'      => 'global bot',
	'group-Global_rollback-member' => 'global rollbacker',
	'group-Global_sysops-member'   => 'global sysop',
	'group-Ombudsmen-member'       => 'ombudsman',
	'group-Staff-member'           => 'staff',

	'grouppage-steward'         => 'm:Stewards', # only translate this message to other languages if you have to change it
	'grouppage-sysadmin'        => 'm:System administrators', # only translate this message to other languages if you have to change it
	'grouppage-Global_bot'      => 'm:Global bot', # only translate this message to other languages if you have to change it
	'grouppage-Global_rollback' => 'm:Global rollback', # only translate this message to other languages if you have to change it
	'grouppage-Global_sysops'   => 'm:Global sysops', # only translate this message to other languages if you have to change it
	'grouppage-Ombudsmen'       => 'm:Ombudsman commission', # only translate this message to other languages if you have to change it
	'grouppage-Staff'           => 'Foundation:Staff', # only translate this message to other languages if you have to change it

	# mediawiki.org specific user group

	'group-coder'        => 'Coders',
	'group-coder-member' => 'coder',
	'grouppage-coder'    => 'Project:Coder', # only translate this message to other languages if you have to change it

	# Private and fishbowl wikis
	'group-inactive'        => 'Inactive users',
	'group-inactive-member' => 'inactive user',
	'grouppage-inactive'    => '{{ns:project}}:Inactive users',

	# The name for the common shared repo 'shared'
	'shared-repo-name-shared' => 'Wikimedia Commons', # only translate this message to other languages if you have to change it

	# Copyright fun!
	'wikimedia-copyright' => 'Text is available under the <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
additional terms may apply.
See <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> for details.',
	'wikimedia-copyrightwarning' => 'By saving, you agree to irrevocably release your contribution under the [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] and the [http://www.gnu.org/copyleft/fdl.html GFDL].
You agree to be credited by re-users, at minimum, through a hyperlink or URL to the page you are contributing to.
See the [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] for details.',
	'wikimedia-editpage-tos-summary' => 'If you do not want your writing to be edited and redistributed at will, then do not submit it here.
If you did not write this yourself, it must be available under terms consistent with the [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use], and you agree to follow any relevant licensing requirements.',
);

/** Message documentation (Message documentation)
 * @author Aotake
 * @author EugeneZelenko
 * @author Fryed-peach
 * @author IAlex
 * @author Jon Harald Søby
 * @author Meno25
 * @author Purodha
 * @author Raymond
 * @author SPQRobin
 * @author Seb35
 * @author Siebrand
 * @author Sp5uhe
 * @author Tagimata
 * @author Umherirrender
 */
$messages['qqq'] = array(
	'wikimediamessages-desc' => '{{desc}}',
	'sitesupport-url' => 'Wikimedia-specific message used in the sidebar.
{{doc-important|Only change the link if it has a translation!|([http://wikimediafoundation.org/wiki/Special:Prefixindex/Donate/ check])}}',
	'sitesupport' => "Display name for the 'Donations' page, shown in the sidebar menu of all pages. The target page is meant to be the page where users can see how they can contribute financially to the wiki site.

{{Identical|Donate}}",
	'tooltip-n-sitesupport' => 'The tooltip when hovering over the {{msg|sitesupport}} link in the sidebar.',
	'group-accountcreator' => 'A specific group of the English Wikipedia; see [[wikipedia:Special:ListUsers/accountcreator]]. See also {{msg|group-accountcreator-member}}.',
	'group-bigexport' => 'Big export user has a right to: {{int:right-override-export-depth}}',
	'group-founder' => 'A specific group of the English Wikipedia; see [[wikipedia:Special:ListUsers/founder]] (used exclusively for [[wikipedia:User:Jimbo Wales|Jimbo Wales]]). See also {{msg|group-founder-member}}.
{{Identical|Founder}}',
	'group-researcher' => "From [[wikipedia:Wikipedia:Researcher#Researcher]]
The 'researcher' group was created in April 2010 to allow individuals explicitly approved by the Wikimedia Foundation to search deleted pages and view deleted history entries without their associated text.",
	'group-rollbacker' => '{{Identical|Rollback}}',
	'group-accountcreator-member' => 'A member of the group {{msg|group-accountcreator}}.',
	'group-bigexport-member' => 'Big export user has a right to: {{int:Right-override-export-depth}}',
	'group-founder-member' => 'A member in the group {{msg|group-founder}} (used exclusively for [[wikipedia:User:Jimbo Wales|Jimbo Wales]]).
{{Identical|Founder}}',
	'group-rollbacker-member' => '{{Identical|Rollback}}',
	'grouppage-bigexport' => 'To be used in wikitext inside double square brackets, that is, as a link to a descriptive page. Do not alter or translate "<code>{<nowiki />{ns:project}}:</code>".

Big export user has a right to: {{int:right-override-export-depth}}',
	'grouppage-rollbacker' => '{{Identical|Rollback}}',
	'group-Global_rollback' => '{{Identical|Rollback}}',
	'group-Global_rollback-member' => '{{Identical|Rollback}}',
	'grouppage-steward' => '{{Global grouppage}}',
	'grouppage-Global_bot' => '{{Global grouppage}}',
	'grouppage-Global_rollback' => '{{Global grouppage}}',
	'grouppage-Global_sysops' => '{{optional}}
{{Global grouppage}}',
	'grouppage-Ombudsmen' => '{{Global grouppage}}',
	'group-inactive' => '{{Identical|Inactive user}}',
	'group-inactive-member' => '{{Identical|Inactive user}}',
	'grouppage-inactive' => '{{Identical|Inactive user}}',
	'wikimedia-copyright' => '{{Identical/Wikimedia-licensing}}
This message is displayed on the site footer and is for the new licensing policy.',
	'wikimedia-copyrightwarning' => '{{Identical/Wikimedia-licensing}}',
	'wikimedia-editpage-tos-summary' => '{{Identical/Wikimedia-licensing}}',
);

/** Säggssch (Säggssch)
 * @author Thogo
 */
$messages['sxu'] = array(
	'sitesupport' => 'Schbändn',
	'group-steward' => 'Schdewards',
	'group-steward-member' => 'Schdeward',
	'grouppage-steward' => '{{ns:project}}:Schdewards',
);

/** Test (site admin only) (Test (site admin only)) */
$messages['test'] = array(
	'sitesupport-url' => 'x',
	'sitesupport' => 'x',
	'tooltip-n-sitesupport' => 'x',
);

/** Behase Mentawei (Behase Mentawei)
 * @author Päge bintën
 */
$messages['mwv'] = array(
	'tooltip-n-sitesupport' => 'Dukung kami',
);

/** Niuean (ko e vagahau Niuē)
 * @author Jose77
 */
$messages['niu'] = array(
	'sitesupport' => 'Tupe fakalofa mo e lagomatai',
);

/** Abkhazian (Аҧсуа)
 * @author Temuri rajavi
 */
$messages['ab'] = array(
	'sitesupport' => 'Ацхыраара зылшо',
);

/** Achinese (Acèh)
 * @author Andri.h
 * @author Si Gam Acèh
 */
$messages['ace'] = array(
	'sitesupport' => 'Meuripè',
	'tooltip-n-sitesupport' => 'Dukông kamoë',
);

/** Afrikaans (Afrikaans)
 * @author Meno25
 * @author Naudefj
 * @author SPQRobin
 * @author Spacebirdy
 */
$messages['af'] = array(
	'wikimediamessages-desc' => 'Wikimedia spesifieke boodskappe',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/af',
	'sitesupport' => 'Skenkings',
	'tooltip-n-sitesupport' => 'Ondersteun ons',
	'specialpages-group-contribution' => 'Skenkings/Fondsinsameling',
	'group-abusefilter' => 'misbruikfilter-redakteurs',
	'group-accountcreator' => 'Gebruikersrekening-skeppers',
	'group-arbcom' => 'Arbitrasie komiteelede',
	'group-bigexport' => 'Groot eksporteurs',
	'group-confirmed' => 'bevestigde gebruikers',
	'group-editprotected' => 'Wysigers van beskermde bladsye',
	'group-filemover' => 'Lêerskuiwers',
	'group-flood' => 'botgebruikers',
	'group-founder' => 'Stigters',
	'group-import' => 'Importeurders',
	'group-interface_editors' => 'Koppelvlakontwerpers',
	'group-ipblock-exempt' => 'uitgesonderdes van IP-adresblokkades',
	'group-patroller' => 'Kontroleurs',
	'group-researcher' => 'Navorsers',
	'group-rollbacker' => 'Terugrollers',
	'group-transwiki' => 'Transwiki-importeurs',
	'group-trusted' => 'Vertroude gebruikers',
	'group-abusefilter-member' => 'misbruikfilter-redakteur',
	'group-accountcreator-member' => 'gebruikersrekening-skepper',
	'group-arbcom-member' => 'arbitrasie komiteelid',
	'group-bigexport-member' => 'groot eksporteur',
	'group-confirmed-member' => 'bevestigde gebruiker',
	'group-editprotected-member' => 'wysigers van beskermde bladsye',
	'group-filemover-member' => 'lêerskuiwer',
	'group-flood-member' => 'botgebruiker',
	'group-founder-member' => 'Stigter',
	'group-import-member' => 'Importeurder',
	'group-interface_editors-member' => 'koppelvlakontwerper',
	'group-ipblock-exempt-member' => 'uitgesonder van IP-adresblokkades',
	'group-patroller-member' => 'Kontroleur',
	'group-researcher-member' => 'navorser',
	'group-rollbacker-member' => 'terugroller',
	'group-transwiki-member' => 'transwiki-importeur',
	'group-trusted-member' => 'vertroude gebruiker',
	'grouppage-abusefilter' => '{{ns:project}}:Misbruikfilter-redakteurs',
	'grouppage-accountcreator' => '{{ns:project}}:Gebruikersrekening-skeppers',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollers',
	'grouppage-bigexport' => '{{ns:project}}:Groot eksporteurs',
	'grouppage-confirmed' => '{{ns:project}}:Bevestigde gebruikers',
	'grouppage-editprotected' => '{{ns:project}}:Wysigers van beskermde bladsye',
	'grouppage-filemover' => '{{ns:project}}:Lêerskuiwers',
	'grouppage-flood' => '{{ns:project}}:Botgebruikers',
	'grouppage-founder' => '{{ns:project}}:Grondleggers',
	'grouppage-import' => '{{ns:project}}:Importeurders',
	'grouppage-interface_editors' => '{{ns:project}}:Koppelvlakontwerpers',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uitgesonderdes van IP-adresblokkades',
	'grouppage-researcher' => '{{ns:project}}:Navorsers',
	'grouppage-rollbacker' => '{{ns:project}}:Terugrollers',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importeurs',
	'grouppage-trusted' => '{{ns:project}}:Vertroude gebruikers',
	'group-steward' => 'Waarde',
	'group-sysadmin' => 'Stelseladministrateurs',
	'group-editinterface' => 'Koppelvlakontwerpers',
	'group-Global_bot' => 'Globale botte',
	'group-Global_rollback' => 'Globale terugrollers',
	'group-Global_sysops' => 'Globale beheerders',
	'group-Ombudsmen' => 'Ombudsmanne',
	'group-Staff' => 'Personeel',
	'group-steward-member' => 'Waard',
	'group-sysadmin-member' => 'Stelseladministrateur',
	'group-editinterface-member' => 'koppelvlak-redakteur',
	'group-Global_bot-member' => 'globale bot',
	'group-Global_rollback-member' => 'globale terugroller',
	'group-Global_sysops-member' => 'globale beheerder',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'Personeellid',
	'grouppage-steward' => '{{ns:project}}:Waarde',
	'group-coder' => 'Programmeerders',
	'group-coder-member' => 'programmeerder',
	'group-inactive' => 'Onaktiewe gebruikers',
	'group-inactive-member' => 'onaktiewe gebruiker',
	'grouppage-inactive' => '{{ns:project}}:Onaktiewe gebruikers',
);

/** Gheg Albanian (Gegë)
 * @author Bresta
 * @author Cradel
 * @author Mdupont
 */
$messages['aln'] = array(
	'wikimediamessages-desc' => 'Mesazhet specifike për wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/en?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'Jep donacion',
	'tooltip-n-sitesupport' => 'Përkrahnani',
	'specialpages-group-contribution' => 'Kontributi/fundraiser',
	'group-abusefilter' => 'Redaktuesit e filtrave të keqpërdorimit',
	'group-accountcreator' => 'Krijuesit e llogarive',
	'group-arbcom' => 'Anëtarët e komisionit Arbitrazhi',
	'group-autopatrolled' => 'Autopatrollers',
	'group-autoreviewer' => 'Autorishikuesit',
	'group-bigexport' => 'Eksportuesit e mëdhêj',
	'group-confirmed' => 'përdoruesit e konfirmuar',
	'group-editprotected' => 'Redaktorët e mbrojtura faqe',
	'group-filemover' => 'Levizesit File',
	'group-flood' => 'përdoruesit Bot',
	'group-founder' => 'Themeluesit',
	'group-import' => 'Importuesit',
	'group-interface_editors' => 'redaktorët Interface',
	'group-ipblock-exempt' => "Përjashtimet e bllokimeve të IP've",
	'group-patroller' => 'Patrollers',
	'group-rollbacker' => 'Mbrapakthyesit',
	'group-transwiki' => 'Importuesit transwiki',
	'group-trusted' => 'përdoruesit e Besuar',
	'group-abusefilter-member' => 'redaktues i filtrave të keqpërdorimit',
	'group-accountcreator-member' => 'krijues i llogarisë',
	'group-arbcom-member' => 'komisioni arbitrazhi anëtar',
	'group-autopatrolled-member' => 'autopatrulluesi',
	'group-autoreviewer-member' => 'autorishikues',
	'group-bigexport-member' => 'eksportues i madh',
	'group-confirmed-member' => 'përdorues konfirmoi',
	'group-editprotected-member' => 'mbrojtur redaktor faqe',
	'group-filemover-member' => 'file forcë lëvizëse',
	'group-flood-member' => 'përdorues bot',
	'group-founder-member' => 'themelues',
	'group-import-member' => 'importues',
	'group-interface_editors-member' => 'editor interface',
	'group-ipblock-exempt-member' => "përjashtim nga bllokimi i IP've",
	'group-patroller-member' => 'patroller',
	'group-rollbacker-member' => 'mbrapakthyes',
	'group-transwiki-member' => 'importues transwiki',
	'group-trusted-member' => 'përdorues besuar',
	'grouppage-abusefilter' => '{{ns:project}}:Redaktuesit e filtrave të keqpërdorimit',
	'grouppage-accountcreator' => '{{ns:project}}:Krijues llogarish',
	'grouppage-arbcom' => '{{ns:project}}:anëtarët e komisionit arbitrazhit',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrullues',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorishikuesit',
	'grouppage-bigexport' => '{{ns:project}}:Eksportuesit e mëdhêj',
	'grouppage-confirmed' => '{{ns:project}}:përdoruesit e konfirmoi',
	'grouppage-editprotected' => '{{ns:project}}:redaktorët e mbrojtura faqe',
	'grouppage-filemover' => '{{ns:project}}:Levizesit File',
	'grouppage-flood' => '{{ns:project}}:përdoruesit Bot',
	'grouppage-founder' => '{{ns:project}}:Themeluesit',
	'grouppage-import' => '{{ns:project}}:Importuesit',
	'grouppage-interface_editors' => '{{ns:project}}:redaktorët Interface',
	'grouppage-ipblock-exempt' => "{{ns:project}}:përjashtim prej bllokimit të IP've",
	'grouppage-rollbacker' => '{{ns:project}}:Mbrapakthyesit',
	'grouppage-transwiki' => '{{ns:project}}:Importuesit transwiki',
	'grouppage-trusted' => '{{ns:project}}:përdoruesit e Besuar',
	'group-steward' => 'Përcjellësit',
	'group-sysadmin' => 'Administruesit e sistemit',
	'group-editinterface' => 'redaktorët Interface',
	'group-Global_bot' => 'Botat global',
	'group-Global_rollback' => 'Mbrapakthyesit global',
	'group-Global_sysops' => 'sysops Global',
	'group-Ombudsmen' => 'Ombudspersonat',
	'group-Staff' => 'Staffi',
	'group-steward-member' => 'përcjellës',
	'group-sysadmin-member' => 'administrues i sistemit',
	'group-editinterface-member' => 'editor interface',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'mbrapakthyes global',
	'group-Global_sysops-member' => 'sysop globale',
	'group-Ombudsmen-member' => 'ombudsperson',
	'group-Staff-member' => 'antar i staffit',
	'group-coder' => 'Programerat',
	'group-coder-member' => 'programer',
	'group-inactive' => 'Përdoruesit joaktiv',
	'group-inactive-member' => 'përdorues joaktiv',
	'grouppage-inactive' => '{{ns:project}}:Përdoruesit joaktiv',
	'wikimedia-copyright' => 'Ky tekst âsht vû në dispozicion nën licencën <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
mundet me pasë klauzola shtesë që vijnë në shprehje.
Shih <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Kushtet e përdorimit</a> për mâ shumë detaje.',
	'wikimedia-copyrightwarning' => "Me t'regjistrue faqen, ju pajtoheni me lëshue kontributin tuej parevokueshëm nën [http://creativecommons.org/licenses/by-sa/3.0/ Licencën Creative Commons Attribution/Share-Alike 3.0] dhe [http://www.gnu.org/copyleft/fdl.html GFDL].
Pajtoheni që ri-përdoruesit mujnë me shprehë mirënjohjen së paku përmjet nji vegze apo URL'je te faqja, në të cilën po kontribuoni.
Shih [http://wikimediafoundation.org/wiki/Terms_of_Use Kushtet e përdorimit] për detaje.",
	'wikimedia-editpage-tos-summary' => 'Nëse nuk doni që shkrimi juej me mujtë me u redaktue dhe ridistribuue arbitrarisht, mos postoni këtu.
Nëse nuk e keni shkrue këtë shkrim vetë, duheni me u sigurue që ai âsht i disponueshëm nën kushtet që përmbahen në [http://wikimediafoundation.org/wiki/Terms_of_Use Kushtet e përdorimit], dhe me u pajtue për me iu përmbajtë tâna kërkesave të licencimit.',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'sitesupport' => 'መዋጮ ለመስጠት',
	'tooltip-n-sitesupport' => 'የገንዘብ ስጦታ ለዊኪሜድያ ይስጡ',
	'group-founder' => 'መስራች',
	'group-founder-member' => 'መስራች',
);

/** Aragonese (Aragonés)
 * @author Juanpabl
 */
$messages['an'] = array(
	'wikimediamessages-desc' => 'Mensaches especificos de Wikimedia',
	'sitesupport-url' => 'Project:Donacions',
	'sitesupport' => 'Donativos',
	'tooltip-n-sitesupport' => 'Aduye-nos',
	'group-abusefilter' => "Editors de filtro d'abuso",
	'group-accountcreator' => 'Creyadors de cuentas',
	'group-autoreviewer' => 'Autorevisadors',
	'group-bigexport' => 'Grans exportadors',
	'group-founder' => 'Fundadors',
	'group-import' => 'Importadors',
	'group-ipblock-exempt' => 'Exención de bloqueyo IP',
	'group-rollbacker' => 'Revertidors',
	'group-transwiki' => 'Importadors de transwiki',
	'group-abusefilter-member' => "editor de filtro d'abuso",
	'group-accountcreator-member' => 'Creyador de cuenta',
	'group-autopatrolled-member' => 'autopatrullero',
	'group-autoreviewer-member' => 'autorevisador',
	'group-bigexport-member' => 'gran exportador',
	'group-founder-member' => 'Fundador',
	'group-import-member' => 'Importador',
	'group-ipblock-exempt-member' => 'Exencion de bloqueyo IP',
	'group-rollbacker-member' => 'revertidor',
	'group-transwiki-member' => 'Importador transwiki',
	'grouppage-abusefilter' => "{{ns:project}}:Editors de filtro d'abuso",
	'grouppage-accountcreator' => '{{ns:project}}:Creyadors de cuenta',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrullers',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorrevisadors',
	'grouppage-bigexport' => '{{ns:project}}:Grans exportadors',
	'grouppage-founder' => '{{ns:project}}:Fundadors',
	'grouppage-import' => '{{ns:project}}:Importadors',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Exención d'o bloqueyo d'IP",
	'grouppage-rollbacker' => '{{ns:project}}:Revertidors',
	'grouppage-transwiki' => '{{ns:project}}:Importardors transwiki',
	'group-steward' => 'Stewards',
	'group-sysadmin' => "Almenistradors d'o sistema",
	'group-Global_bot' => 'Bots globals',
	'group-Global_rollback' => 'Revertidors globals',
	'group-Ombudsmen' => 'Chusticias',
	'group-Staff' => "Personal d'o wiki",
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => "almenistrador d'o sistema",
	'group-Global_bot-member' => 'Bot global',
	'group-Global_rollback-member' => 'revertidor global',
	'group-Ombudsmen-member' => 'chusticia',
	'group-Staff-member' => "Miembro d'o personal",
	'group-coder' => 'Codificadors',
	'group-coder-member' => 'codificador',
	'group-inactive' => 'Usuarios inactivos',
	'group-inactive-member' => 'usuario inactivo',
	'grouppage-inactive' => '{{ns:project}}:Usuarios inactivos',
	'wikimedia-copyright' => 'O texto ye disponible baixo a <a href="http://creativecommons.org/licenses/by-sa/3.0/">Licencia Creative Commons Atribución/Compartir-Igual</a>;
puet que sigan d\'aplicación clausulas adicionals.
Mire-se <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">os termins d\'uso</a> ta conoixer más detalles.',
	'wikimedia-copyrightwarning' => "En alzar o texto, ye acceptando a cesión irrefusable d'as suyas contribucions baixo a [http://creativecommons.org/licenses/by-sa/3.0/ Licencia Creative Commons Atribución/Compartir-Igual 3.0] y a [http://www.gnu.org/copyleft/fdl.html licencia GFDL].
Tamién ye acceptando poder estar citato, como menimo, por meyo d'un hipervinclo t'a pachina en do ha contribuyiu.
Mire-se [http://wikimediafoundation.org/wiki/Terms_of_Use l'alcuerdo de utilización] ta conoixer más detalles.",
	'wikimedia-editpage-tos-summary' => "Si no deseya que os suyos escritos sigan editatos y redistribuyitos librement, alavez no los alce aquí. Si o texto no lo ha escrito vusté, ha d'estar disponible baixo as condicions especificadas en [http://wikimediafoundation.org/wiki/Terms_of_Use as condicions d'utilización] y vusté accepta seguir qualsiquier requesta que li siga desichita en relación a las licencias.",
);

/** Old English (Ænglisc)
 * @author Wōdenhelm
 */
$messages['ang'] = array(
	'wikimediamessages-desc' => 'Rihtƿikiȝemyndes ȝeƿritu',
	'sitesupport' => 'Ȝieldȝiefan',
	'group-autopatrolled' => 'Selffremmende ƿeardas',
	'group-autoreviewer' => 'Selffremmende dēmendas',
	'group-bigexport' => 'Grēat ūtsenderas',
	'group-editprotected' => 'Borgena sīdena ādihteras',
	'group-flood' => 'Searuþrælisc brūcendas',
	'group-founder' => 'Onstelleras',
	'group-import' => 'Inbringeras',
	'group-interface_editors' => 'Ānsīene ādihtendas',
	'group-patroller' => 'Ƿeardmenn',
	'group-transwiki' => 'Ȝeondƿiki inbringeras',
	'group-trusted' => 'Betrēoƿede brūcendas',
	'group-autopatrolled-member' => 'selffremmende ƿeard',
	'group-autoreviewer-member' => 'selffremmende dēmend',
	'group-bigexport-member' => 'grēat ūtsendere',
	'group-editprotected-member' => 'Borgen sīde ādihtend',
	'group-flood-member' => 'searuþrælisc brūcend',
	'group-founder-member' => 'onstellere',
	'group-import-member' => 'inbringere',
	'group-interface_editors-member' => 'ānsīene ādihtend',
	'group-patroller-member' => 'ƿeard',
	'group-transwiki-member' => 'ȝeondƿiki inbringere',
	'group-trusted-member' => 'betrēoƿed brūcend',
	'grouppage-flood' => '{{ns:project}}:Searuþrælisc brūcendas',
	'grouppage-founder' => '{{ns:project}}:Onstelleras',
	'grouppage-import' => '{{ns:project}}:Inbringeras',
	'grouppage-transwiki' => '{{ns:project}}:Ȝeondƿikian inbringeras',
	'grouppage-trusted' => '{{ns:project}}:Betrēoƿede brūcendas',
	'group-steward' => 'Stiȝƿeardas',
	'group-sysadmin' => 'Endebyrdnesse tōþeȝnas',
	'group-editinterface' => 'Ānsīene ādihteras',
	'group-Global_bot' => 'Ƿorulde searuþralas',
	'group-Global_sysops' => 'Ƿorulde beƿitendas',
	'group-steward-member' => 'stiȝƿeard',
	'group-sysadmin-member' => 'endebyrdnesse tōþeȝn',
	'group-editinterface-member' => 'ānsīene ādihtend',
	'group-Global_bot-member' => 'ƿorulde searuþræl',
	'group-Global_sysops-member' => 'ƿorulde betƿitend',
	'group-inactive' => 'Sleace brūcendas',
	'group-inactive-member' => 'sleac brūcend',
	'grouppage-inactive' => '{{ns:project}}:Sleace brūcendas',
);

/** Arabic (العربية)
 * @author Ciphers
 * @author Meno25
 * @author OsamaK
 * @author ترجمان05
 */
$messages['ar'] = array(
	'wikimediamessages-desc' => 'رسائل خاصة بويكيميديا',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/%D8%AC%D9%85%D8%B9_%D8%AA%D8%A8%D8%B1%D8%B9%D8%A7%D8%AA',
	'sitesupport' => 'تبرع',
	'tooltip-n-sitesupport' => 'ادعمنا',
	'specialpages-group-contribution' => 'المساهمات/جمع التبرعات',
	'group-abusefilter' => 'معدلو مرشحات الإساءة',
	'group-accountcreator' => 'منشئو الحسابات',
	'group-arbcom' => 'أعضاء لجنة التحكيم',
	'group-autopatrolled' => 'المراجِعون التلقائيون',
	'group-autoreviewer' => 'مراجعون تلقائيون',
	'group-bigexport' => 'مصدرون كبار',
	'group-confirmed' => 'مستخدمون مؤكدون',
	'group-editprotected' => 'معدلو الصفحات المحمية',
	'group-flood' => 'مستخدمو البوت',
	'group-founder' => 'مؤسسون',
	'group-import' => 'مستوردون',
	'group-interface_editors' => 'محرّرو الواجهة',
	'group-ipblock-exempt' => 'مستثنون من منع الأيبي',
	'group-patroller' => 'مراجعون',
	'group-rollbacker' => 'مسترجعون',
	'group-transwiki' => 'مستوردون عبر الويكي',
	'group-trusted' => 'مستخدمون موثوقون',
	'group-abusefilter-member' => 'معدل مرشح الإساءة',
	'group-accountcreator-member' => 'منشئ حساب',
	'group-arbcom-member' => 'عضو لجنة التحكيم',
	'group-autopatrolled-member' => 'مراجع تلقائي',
	'group-autoreviewer-member' => 'مراجع تلقائي',
	'group-bigexport-member' => 'مصدر كبير',
	'group-confirmed-member' => 'مستخدم مؤكد',
	'group-editprotected-member' => 'معدل الصفحات المحمية',
	'group-flood-member' => 'مستخدمو البوت',
	'group-founder-member' => 'مؤسس',
	'group-import-member' => 'مستورد',
	'group-interface_editors-member' => 'محرّر الواجهة',
	'group-ipblock-exempt-member' => 'مستثنى من منع الأيبي',
	'group-patroller-member' => 'مراجع',
	'group-rollbacker-member' => 'مسترجع',
	'group-transwiki-member' => 'مستورد عبر الويكي',
	'group-trusted-member' => 'مستخدم موثوق',
	'grouppage-abusefilter' => '{{ns:project}}:معدلو مرشح الإساءة',
	'grouppage-accountcreator' => '{{ns:project}}:منشئو الحسابات',
	'grouppage-arbcom' => '{{ns:project}}:أعضاء لجنة التحكيم',
	'grouppage-autopatrolled' => '{{ns:project}}:مراجعون تلقائيون',
	'grouppage-autoreviewer' => '{{ns:project}}:مراجع تلقائي',
	'grouppage-bigexport' => '{{ns:project}}:مصدرون كبار',
	'grouppage-confirmed' => '{{ns:project}}:مستخدمون مؤكدون',
	'grouppage-editprotected' => '{{ns:project}}:معدلو الصفحات المحمية',
	'grouppage-flood' => '{{ns:project}}:مستخدمو البوت',
	'grouppage-founder' => '{{ns:project}}:مؤسسون',
	'grouppage-import' => '{{ns:project}}:مستوردون',
	'grouppage-interface_editors' => '{{ns:project}}:محرّرو الواجهة',
	'grouppage-ipblock-exempt' => '{{ns:project}}:استثناء من منع الأيبي',
	'grouppage-rollbacker' => '{{ns:project}}:مسترجعون',
	'grouppage-transwiki' => '{{ns:project}}:مستوردون عبر الويكي',
	'grouppage-trusted' => '{{ns:project}}:مستخدمون موثوقون',
	'group-steward' => 'مضيفون',
	'group-sysadmin' => 'إداريو النظام',
	'group-editinterface' => 'محرّرو الواجهة',
	'group-Global_bot' => 'بوتات عامة',
	'group-Global_rollback' => 'مسترجعون عامون',
	'group-Global_sysops' => 'مديرو نظام عامون',
	'group-Ombudsmen' => 'أومبدسمين',
	'group-Staff' => 'مشرفون',
	'group-steward-member' => 'مضيف',
	'group-sysadmin-member' => 'إداري نظام',
	'group-editinterface-member' => 'محرر واجهة',
	'group-Global_bot-member' => 'بوت عام',
	'group-Global_rollback-member' => 'مسترجع عام',
	'group-Global_sysops-member' => 'مدير نظام عام',
	'group-Ombudsmen-member' => 'أومبدسمان',
	'group-Staff-member' => 'عضو من المشرفين',
	'grouppage-steward' => 'm:Stewards/ar',
	'grouppage-Global_rollback' => 'm:Global rollback/ar',
	'grouppage-Staff' => 'Foundation:الطاقم',
	'group-coder' => 'مكودون',
	'group-coder-member' => 'مكود',
	'grouppage-coder' => 'Project:مكود',
	'group-inactive' => 'مستخدمون غير نشطين',
	'group-inactive-member' => 'مستخدم غير نشط',
	'grouppage-inactive' => '{{ns:project}}:مستخدمون غير نشطين',
	'shared-repo-name-shared' => 'ويكيميديا كومنز',
	'wikimedia-copyright' => 'النصوص متوفرة تحت <a href="http://creativecommons.org/licenses/by-sa/3.0/">رخصة المُشاع المُبدع نسبة المُصنّف إلى مؤلفه - المشاركة على قدم المساواة</a>.
قد تنطبق بنود أخرى أيضًا.
انظر <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">شروط الاستخدام</a> للتفاصيل.',
	'wikimedia-copyrightwarning' => 'بحفظ الصفحة، فأنت توافق على إصدار مساهمتك بلا رجعة تحت [http://creativecommons.org/licenses/by-sa/3.0/ رخصة المشاع المبدع نسبة المصنف إلى مؤلفه - المشاركة على قدم المساواة] و[http://www.gnu.org/copyleft/fdl.html رخصة جنو للوثائق الحرة].
أنت توافق على أن يشير إليك معيدو الاستخدام على الأقل عبر وصلة فائقة أو مسار إلى الصفحة التي تساهم فيها.
انظر [http://wikimediafoundation.org/wiki/Terms_of_Use شروط الاستخدام] للتفاصيل.',
	'wikimedia-editpage-tos-summary' => 'لو أنك لا تريد لكتابتك أن تعدل ويعاد توزيعها، فلا ترسلها هنا.
لو أنك لم تكتب هذا بنفسك، فيجب أن يكون متوفرا تحت شروط متوافقة مع [http://wikimediafoundation.org/wiki/Terms_of_Use شروط الاستخدام]، وأنت توافق على اتباع أي متطلبات ترخيص متعلقة.',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author Basharh
 */
$messages['arc'] = array(
	'sitesupport' => 'ܕܒܘܚ ܠܢ',
	'group-founder-member' => 'ܫܬܐܣܢܐ',
	'grouppage-founder' => '{{ns:project}}:ܫܬܐܣܢ̈ܐ',
	'grouppage-import' => '{{ns:project}}:ܡܥܠܢ̈ܐ',
	'group-sysadmin' => 'ܡܕܒܪ̈ܢܐ ܕܛܟܣܐ',
);

/** Araucanian (Mapudungun)
 * @author Lin linao
 */
$messages['arn'] = array(
	'sitesupport' => 'Elungechi',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 * @author Meno25
 * @author Ramsis II
 */
$messages['arz'] = array(
	'wikimediamessages-desc' => 'رسايل خاصه بويكيميديا',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/%D8%AC%D9%85%D8%B9_%D8%AA%D8%A8%D8%B1%D8%B9%D8%A7%D8%AA',
	'sitesupport' => 'التبرعات',
	'tooltip-n-sitesupport' => 'ساندنا',
	'specialpages-group-contribution' => 'المساهمين/جامعين التبرعات',
	'group-abusefilter' => 'معدلين فيلتر الاساءه',
	'group-accountcreator' => 'مؤسسين الحسابات',
	'group-autopatrolled' => 'مراجعين أوتوماتيكى',
	'group-autoreviewer' => 'اوتوريفيورات',
	'group-bigexport' => 'المصدرين الكبار',
	'group-confirmed' => 'يوزرات متأكدين',
	'group-flood' => 'يوزرز بوت',
	'group-founder' => 'مؤسسين',
	'group-import' => 'مستوردين',
	'group-ipblock-exempt' => 'مستثنيين من منع الااى بى',
	'group-patroller' => 'مراجعون',
	'group-rollbacker' => 'مسترجعين',
	'group-transwiki' => 'مستوردين عبر الويكى',
	'group-trusted' => 'مستخدمين موثوقين',
	'group-abusefilter-member' => 'محرر فيلتر الاساءه',
	'group-accountcreator-member' => 'مؤسس حساب',
	'group-autopatrolled-member' => 'اوتوباترولار',
	'group-autoreviewer-member' => 'مراجع اوتوماتيكى',
	'group-bigexport-member' => 'مصدر كبير',
	'group-confirmed-member' => 'يوزر متأكد',
	'group-flood-member' => 'يوزر بوت',
	'group-founder-member' => 'مؤسس',
	'group-import-member' => 'مستورد',
	'group-ipblock-exempt-member' => 'مستثنى من منع الاايبى',
	'group-patroller-member' => 'مراجع',
	'group-rollbacker-member' => 'مسترجع',
	'group-transwiki-member' => 'مستورد عبر الويكى',
	'group-trusted-member' => 'مستخدم موثوق',
	'grouppage-abusefilter' => '{{ns:project}}:محررين فيلتر الاساءه',
	'grouppage-accountcreator' => '{{ns:project}}:منشئين الحسابات',
	'grouppage-autopatrolled' => '{{ns:project}}:اوتوباترولارز',
	'grouppage-autoreviewer' => '{{ns:project}}:مراجعين اوتوماتيكيين',
	'grouppage-bigexport' => '{{ns:project}}:مصدرين كبار',
	'grouppage-confirmed' => '{{ns:project}}:يوزرات متأكدين',
	'grouppage-founder' => '{{ns:project}}:مؤسسين',
	'grouppage-import' => '{{ns:project}}:مستوردين',
	'grouppage-ipblock-exempt' => '{{ns:project}}:استثناء من منع الااى بى',
	'grouppage-rollbacker' => '{{ns:project}}:مسترجعين',
	'grouppage-transwiki' => '{{ns:project}}:مستوردين عبر الويكى',
	'group-steward' => 'مضيفين',
	'group-sysadmin' => 'اداريين النظام',
	'group-editinterface' => 'محررين الواجهه',
	'group-Global_bot' => 'بوتات عامه',
	'group-Global_rollback' => 'مسترجعين عامين',
	'group-Ombudsmen' => 'اومبادزمين',
	'group-Staff' => 'مشرفون',
	'group-steward-member' => 'مضيف',
	'group-sysadmin-member' => 'ادارى نظام',
	'group-editinterface-member' => 'محرر الواجهه',
	'group-Global_bot-member' => 'بوت عام',
	'group-Global_rollback-member' => 'مسترجع عام',
	'group-Ombudsmen-member' => 'اومبدادزمان',
	'group-Staff-member' => 'عضو من المشرفين',
	'grouppage-steward' => 'm:Stewards/ar',
	'grouppage-Global_rollback' => 'm:Global rollback/ar',
	'grouppage-Staff' => 'Foundation:الطاقم',
	'group-coder' => 'مكودون',
	'group-coder-member' => 'مكود',
	'grouppage-coder' => 'Project:مكود',
	'group-inactive' => 'يوزرات مش ناشطين',
	'group-inactive-member' => 'يوزر مش نشيط',
	'grouppage-inactive' => '{{ns:project}}:يوزرات مش نشطين',
	'shared-repo-name-shared' => 'ويكيميديا كومنز',
	'wikimedia-copyright' => 'النصوص متوفرة تحت <a href="http://creativecommons.org/licenses/by-sa/3.0/">رخصة التشارك الإبداع العزو/المشاركة بالمثل</a>;
ممكن تطبيق شروط إضافية.
بص على <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">شروط الاستخدام</a> للتفاصيل.',
	'wikimedia-copyrightwarning' => 'بتسييڤ التعديلات بتاعتك، انت بتوافق على إصدار مساهمتك بلا رجعه تحت [http://creativecommons.org/licenses/by-sa/3.0/ رخصة التشارك الإبداعى العزو/المشاركة بالمثل 3.0] و [http://www.gnu.org/copyleft/fdl.html رخصة جنو للوثائق الحرة].
أنت توافق على أن يتم الإشارة لك بواسطة معيدى الاستخدام، على الأقل، من خلال وصلة فائقة أو لينك للصفحة اللى ساهمت فيها.   بص على [http://wikimediafoundation.org/wiki/Terms_of_Use شروط الاستخدام] للتفاصيل.',
	'wikimedia-editpage-tos-summary' => 'لو ماكنتش عايز كتاباتك تتعدل و تتوزع بحريه ، لو سمحت ما تحطهاش هنا.
لو ما كنتش انتا اللى كات الكلام دا بنفسك, فلازم يكون متوفر تحت شروط متوافقه مع[http://wikimediafoundation.org/wiki/Terms_of_Use شروط الاستعمال] ، و انك بتوافق انك تلتزم متطلبات ترخيص ليها علاقه..',
);

/** Assamese (অসমীয়া)
 * @author Psneog
 * @author Rajuonline
 */
$messages['as'] = array(
	'sitesupport' => 'দান-বৰঙনি',
	'tooltip-n-sitesupport' => 'আমাক সহায় কৰক!',
	'group-Staff' => 'কর্মীবৃন্দ',
	'group-Staff-member' => 'কর্মচাৰী',
);

/** Asturian (Asturianu)
 * @author Esbardu
 */
$messages['ast'] = array(
	'wikimediamessages-desc' => 'Mensaxes específicos de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donativos',
	'sitesupport' => 'Donativos',
	'tooltip-n-sitesupport' => 'Sofítanos',
	'group-accountcreator' => 'Creadores de cuentes',
	'group-founder' => 'Fundadores',
	'group-import' => 'Importadores',
	'group-ipblock-exempt' => 'Exenciones de bloqueos IP',
	'group-rollbacker' => 'Revertidores',
	'group-transwiki' => 'Importadores treswiki',
	'group-accountcreator-member' => 'creador de cuentes',
	'group-founder-member' => 'fundador',
	'group-import-member' => 'importador',
	'group-ipblock-exempt-member' => 'exentu de bloqueos IP',
	'group-rollbacker-member' => 'revertidor',
	'group-transwiki-member' => 'importador treswiki',
	'grouppage-accountcreator' => '{{ns:project}}:Creadores de cuentes',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'grouppage-ipblock-exempt' => '{{ns:project}}:exención de bloqueos IP',
	'grouppage-rollbacker' => '{{ns:project}}:Revertidores',
	'grouppage-transwiki' => '{{ns:project}}:Importadores treswiki',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Alministradores del sistema',
	'group-Global_bot' => 'Bots globales',
	'group-Global_rollback' => 'Revertidores globales',
	'group-Ombudsmen' => 'Comisarios',
	'group-Staff' => 'Personal',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'alministrador del sistema',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'revertidor global',
	'group-Ombudsmen-member' => 'comisariu',
	'group-Staff-member' => 'Miembru del personal',
	'grouppage-steward' => '{{ns:project}}:Stewards',
	'group-coder' => 'Codificadores',
	'group-coder-member' => 'codificador',
);

/** Avaric (Авар) */
$messages['av'] = array(
	'sitesupport' => 'Садакъа',
);

/** Kotava (Kotava)
 * @author Wikimistusik
 */
$messages['avk'] = array(
	'sitesupport' => 'Zobera',
	'tooltip-n-sitesupport' => 'Va cin zobel !',
);

/** Aymara (Aymar aru) */
$messages['ay'] = array(
	'sitesupport' => 'Ramañanaka',
);

/** Azerbaijani (Azərbaycanca) */
$messages['az'] = array(
	'sitesupport' => 'Bağışlar',
);

/** Bashkir (Башҡорт)
 * @author Comp1089
 */
$messages['ba'] = array(
	'sitesupport' => 'Ярҙам итеү',
	'group-flood' => 'Боттар',
	'group-import' => 'Импортёрҙар',
	'group-steward' => 'Стюардтар',
	'group-Global_bot' => 'Глобаль боттары',
	'group-Global_sysops-member' => 'глобаль хәкиме',
	'group-inactive' => 'Әүҙемлекһеҙ ҡатнашыусылар',
);

/** Samogitian (Žemaitėška)
 * @author Hugo.arg
 * @author Zordsdavini
 */
$messages['bat-smg'] = array(
	'sitesupport' => 'Pagelba',
	'group-steward' => 'Gaspaduorē',
	'group-sysadmin' => 'Sėstėmas admėnėstratuorē',
	'group-Global_bot' => 'Gluobalūs buotā',
	'group-Global_bot-member' => 'gluobalus buots',
);

/** Southern Balochi (بلوچی مکرانی)
 * @author Mostafadaneshvar
 */
$messages['bcc'] = array(
	'wikimediamessages-desc' => 'کوله یان مخصوص ویکی‌مدیا',
	'sitesupport' => 'مدتان',
	'tooltip-n-sitesupport' => 'ما را حمایت کنیت',
	'group-accountcreator' => 'حساب شرکنوکان',
	'group-founder' => 'بنگیج کنوکان',
	'group-import' => 'وارد کنوکان',
	'group-ipblock-exempt' => 'معافیت محدودیت آی پی',
	'group-rollbacker' => 'عقب ترینوک',
	'group-transwiki' => 'واردکنوکان بین‌ویکی',
	'group-accountcreator-member' => 'حساب شرکنوک',
	'group-founder-member' => 'بنگیج کنوک',
	'group-import-member' => 'واردکنوک',
	'group-ipblock-exempt-member' => 'استثنای محدودیت آی پی',
	'group-rollbacker-member' => 'ترینوک',
	'group-transwiki-member' => 'واردکنوک بین‌ویکی',
	'grouppage-accountcreator' => '{{ns:project}}:حساب شرکنوکان',
	'grouppage-founder' => '{{ns:project}}:بنگیج کنوکان',
	'grouppage-import' => '{{ns:project}}:واردکنوکان',
	'grouppage-ipblock-exempt' => '{{ns:project}}:استثناء محدودیت آی پی',
	'grouppage-rollbacker' => '{{ns:project}}:واردکنوکان',
	'grouppage-transwiki' => '{{ns:project}}:واردکنوکان بین ویکی',
	'group-steward' => 'نگهبانان',
	'group-sysadmin' => 'مدیران سیستم',
	'group-Global_bot' => 'رباتان سراسری',
	'group-Global_rollback' => 'ترینوک سراسری',
	'group-Staff' => 'کارمند',
	'group-steward-member' => 'نگهبان',
	'group-sysadmin-member' => 'مدیر سیستم',
	'group-Global_bot-member' => 'ربات سراسری',
	'group-Global_rollback-member' => 'ترینوک سراسری',
	'group-Staff-member' => 'عضو کارمند',
);

/** Bikol Central (Bikol Central)
 * @author Filipinayzd
 */
$messages['bcl'] = array(
	'sitesupport' => 'Mga donasyon',
	'tooltip-n-sitesupport' => 'Suportaran kami',
);

/** Belarusian (Беларуская)
 * @author Yury Tarasievich
 */
$messages['be'] = array(
	'sitesupport' => 'Ахвяраванні',
	'tooltip-n-sitesupport' => 'Падтрымайце нас',
	'grouppage-abusefilter' => '{{ns:project}}:Abuse filter editors',
	'grouppage-accountcreator' => '{{ns:project}}:Account creators',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollers',
	'grouppage-autoreviewer' => '{{ns:project}}:Autoreviewers',
	'grouppage-bigexport' => '{{ns:project}}:Big exporters',
	'grouppage-founder' => '{{ns:project}}:Founders',
	'grouppage-import' => '{{ns:project}}:Importers',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP block exemption',
	'grouppage-rollbacker' => '{{ns:project}}:Rollbackers',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importers',
	'grouppage-inactive' => '{{ns:project}}:Inactive users',
	'wikimedia-copyright' => 'Тэкст даступны на ўмовах ліцэнзіі <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a>;
таксама могуць дзейнічаць дадатковыя ўмовы.
Падрабязней гл. <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Умовы карыстання</a>.',
	'wikimedia-copyrightwarning' => "Замацоўваючы гэта, вы згаджаецеся беззваротна выпусціць свой уклад на ўмовах ліцэнзій [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] і [http://www.gnu.org/copyleft/fdl.html GFDL].
Вы згаджаецеся на адзначэнне вашага аўтарства пры паўторным выкарыстанні гэтай старонкі, у мінімальным аб'ёме гіпер-спасылкі або адрасу URL гэтай старонкі, у якую вы робіце ўклад.
Падрабязней гл. [http://wikimediafoundation.org/wiki/Terms_of_Use Умовы карыстання].",
	'wikimedia-editpage-tos-summary' => 'Калі вы не жадаеце, каб ваш тэкст свабодна правіўся і распаўсюджваўся, не ўкладвайце яго сюды.
Калі вы самі не пісалі гэтага тэксту, ён мусіць быць даступным на ўмовах, якія сумяшчальныя з [http://wikimediafoundation.org/wiki/Terms_of_Use Умовамі карыстання], а вы мусіце даць згоду на ўсе наступныя змяненні ліцэнзійных патрабаванняў, якія маюць дачыненне да гэтага тэксту.',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author Cesco
 * @author EugeneZelenko
 * @author Jim-by
 * @author Red Winged Duck
 * @author Zedlik
 */
$messages['be-tarask'] = array(
	'wikimediamessages-desc' => 'Спэцыфічныя паведамленьні фундацыі «Вікімэдыя»',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Ахвяраваньні',
	'sitesupport' => 'Ахвяраваньні',
	'tooltip-n-sitesupport' => 'Падтрымайце нас',
	'specialpages-group-contribution' => 'Ахвяраваньні/Збор сродкаў',
	'group-abusefilter' => 'Рэдактары фільтру злоўжываньняў',
	'group-accountcreator' => 'Стваральнікі рахункаў',
	'group-arbcom' => 'Чальцы арбітражнага камітэту',
	'group-autopatrolled' => 'Аўтаматычна патруліруючыя',
	'group-autoreviewer' => 'Аўтарэцэнзэнты',
	'group-bigexport' => 'Значныя экспарцёры',
	'group-confirmed' => 'Пацьверджаныя ўдзельнікі',
	'group-editprotected' => 'Рэдактары абароненых старонак',
	'group-filemover' => 'Пераносчыкі файлаў',
	'group-flood' => 'Робаты',
	'group-founder' => 'Фундатары',
	'group-import' => 'Імпартэры',
	'group-interface_editors' => 'Рэдактары інтэрфэйса',
	'group-ipblock-exempt' => 'Выключэньні з блякаваньняў ІР-адрасоў',
	'group-patroller' => 'Патруліруючыя',
	'group-researcher' => 'Дасьледчыкі',
	'group-rollbacker' => 'Адкатвальнікі',
	'group-transwiki' => 'Імпартэры зь іншых вікі',
	'group-trusted' => 'Давераныя ўдзельнікі',
	'group-abusefilter-member' => 'рэдактар фільтру злоўжываньняў',
	'group-accountcreator-member' => 'стваральнік рахункаў',
	'group-arbcom-member' => 'чалец арбітражнага камітэту',
	'group-autopatrolled-member' => 'аўтапатрулюемыя',
	'group-autoreviewer-member' => 'аўтарэцэнзэнт',
	'group-bigexport-member' => 'значныя экспарцёры',
	'group-confirmed-member' => 'пацьверджаны ўдзельнік',
	'group-editprotected-member' => 'рэдактары абароненых старонак',
	'group-filemover-member' => 'пераносчык файлаў',
	'group-flood-member' => 'робаты',
	'group-founder-member' => 'фундатар',
	'group-import-member' => 'імпартэр',
	'group-interface_editors-member' => 'рэдактар інтэрфэйса',
	'group-ipblock-exempt-member' => 'выключэньне з блякаваньняў ІР-адрасоў',
	'group-patroller-member' => 'патруліруючы',
	'group-researcher-member' => 'дасьледчык',
	'group-rollbacker-member' => 'адкатвальнік',
	'group-transwiki-member' => 'імпартэр зь іншых вікі',
	'group-trusted-member' => 'давераны ўдзельнік',
	'grouppage-abusefilter' => '{{ns:project}}:Рэдактары фільтру злоўжываньняў',
	'grouppage-accountcreator' => '{{ns:project}}:Стваральнікі рахункаў',
	'grouppage-arbcom' => '{{ns:project}}:Чальцы арбітражнага камітэту',
	'grouppage-autopatrolled' => '{{ns:project}}:Аўтапатрулюемыя',
	'grouppage-autoreviewer' => '{{ns:project}}:Аўтарэцэнзэнты',
	'grouppage-bigexport' => '{{ns:project}}:Значныя экспарцёры',
	'grouppage-confirmed' => '{{ns:project}}:Пацьверджаныя ўдзельнікі',
	'grouppage-editprotected' => '{{ns:project}}:Рэдактары абароненых старонак',
	'grouppage-filemover' => '{{ns:project}}:Пераносчыкі файлаў',
	'grouppage-flood' => '{{ns:project}}:Робаты',
	'grouppage-founder' => '{{ns:project}}:Фундатары',
	'grouppage-import' => '{{ns:project}}:Імпартэры',
	'grouppage-interface_editors' => '{{ns:project}}:Рэдактары інтэрфэйса',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Выключэньні з блякаваньняў ІР-адрасоў',
	'grouppage-researcher' => '{{ns:project}}:Дасьледчык',
	'grouppage-rollbacker' => '{{ns:project}}:Адкатвальнікі',
	'grouppage-transwiki' => '{{ns:project}}:Імпартэры зь іншых вікі',
	'grouppage-trusted' => '{{ns:project}}:Давераныя ўдзельнікі',
	'group-steward' => 'Сьцюарды',
	'group-sysadmin' => 'Сыстэмныя адміністратары',
	'group-editinterface' => 'Рэдактары інтэрфэйса',
	'group-Global_bot' => 'Глябальныя робаты',
	'group-Global_rollback' => 'Глябальныя адкатвальнікі',
	'group-Global_sysops' => 'Глябальныя адміністратары',
	'group-Ombudsmen' => 'праваабаронцы',
	'group-Staff' => 'Супрацоўнікі',
	'group-steward-member' => 'сьцюард',
	'group-sysadmin-member' => 'сыстэмны адміністратар',
	'group-editinterface-member' => 'рэдактар інтэрфэйса',
	'group-Global_bot-member' => 'глябальны робат',
	'group-Global_rollback-member' => 'глябальны адкатвальнік',
	'group-Global_sysops-member' => 'глябальны адміністратар',
	'group-Ombudsmen-member' => 'праваабаронца',
	'group-Staff-member' => 'супрацоўнік',
	'group-coder' => 'Праграмісты',
	'group-coder-member' => 'праграміст',
	'group-inactive' => 'Неактыўныя ўдзельнікі',
	'group-inactive-member' => 'неактыўны ўдзельнік',
	'grouppage-inactive' => '{{ns:project}}:Неактыўныя ўдзельнікі',
	'wikimedia-copyright' => 'Гэты тэкст даступны на ўмовах <a href="http://creativecommons.org/licenses/by-sa/3.0/">ліцэнзіі Creative Commons Attribution/Share-Alike</a>; могуць ужывацца дадатковыя ўмовы. Глядзіце падрабязнасьці ва <a href="http://wikimediafoundation.org/wiki/Умовы_выкарыстаньня">ўмовах выкарыстаньня</a>.',
	'wikimedia-copyrightwarning' => 'Захоўваючы свае зьмены, Вы пагаджаецеся на іх апублікаваньне згодна ўмоваў ліцэнзіяў [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] і [http://www.gnu.org/copyleft/fdl.html GFDL]. Вы пагаджаецеся, што іншыя пры выкарыстаньні гэтага матэрыялу будуць спасылацца на Вашае аўтарства як мінімум праз гіпэрспасылку на старонку, якую Вы рэдагавалі. Падрабязнасьці глядзіце ва [http://wikimediafoundation.org/wiki/Умовы_выкарыстаньня ўмовах выкарыстаньня].',
	'wikimedia-editpage-tos-summary' => 'Калі Вы не жадаеце, каб Вашыя тэксты вольна рэдагаваліся і распаўсюджваліся, не зьмяшчайце іх сюды. Калі Вы не зьяўляецеся аўтарам гэтага тэксту, то ён павінен быць даступны на ўмовах сумяшчальных з [http://wikimediafoundation.org/wiki/Умовы_выкарыстаньня умовамі выкарыстаньня], і Вы згодны прытрымлівацца ўсім патрабаваньням ліцэнзіяў.',
);

/** Bulgarian (Български)
 * @author Borislav
 * @author DCLXVI
 * @author Meno25
 * @author Spiritia
 * @author Stanqo
 * @author Turin
 */
$messages['bg'] = array(
	'wikimediamessages-desc' => 'Съобщения, специфични за Уикимедия',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/bg',
	'sitesupport' => 'Дарения',
	'tooltip-n-sitesupport' => 'Подкрепете ни',
	'group-abusefilter' => 'Редактори на филтъра срещу злоупотреби',
	'group-accountcreator' => 'Създатели на сметки',
	'group-arbcom' => 'Членове на арбитражната комисия',
	'group-autopatrolled' => 'Автопатрули',
	'group-autoreviewer' => 'Авторецензенти',
	'group-bigexport' => 'Големи износители',
	'group-confirmed' => 'Потвърдени потребители',
	'group-editprotected' => 'Редактори на защитени страници',
	'group-flood' => 'Оператори на бот',
	'group-founder' => 'Основатели',
	'group-import' => 'Вносители',
	'group-interface_editors' => 'Редактори на интерфейса',
	'group-ipblock-exempt' => 'Изключения от блокирането по IP адрес',
	'group-patroller' => 'Патрульори',
	'group-rollbacker' => 'Изпълнителни на отмени',
	'group-transwiki' => 'Transwiki вносители',
	'group-trusted' => 'Доверени потребители',
	'group-abusefilter-member' => 'редактор на филтъра срещу злоупотреби',
	'group-accountcreator-member' => 'създател на сметки',
	'group-arbcom-member' => 'член на арбитражната комисия',
	'group-autopatrolled-member' => 'Автопатрульор',
	'group-autoreviewer-member' => 'авторецензент',
	'group-bigexport-member' => 'голям износител',
	'group-confirmed-member' => 'потвърден потребител',
	'group-editprotected-member' => 'редактор на защитени страници',
	'group-flood-member' => 'бот оператор',
	'group-founder-member' => 'Основател',
	'group-import-member' => 'вносител',
	'group-interface_editors-member' => 'редактор на интерфейса',
	'group-ipblock-exempt-member' => 'Изключение от блокирането по IP адрес',
	'group-patroller-member' => 'Патрульор',
	'group-rollbacker-member' => 'изпълнител на отмени',
	'group-transwiki-member' => 'Transwiki вносител',
	'group-trusted-member' => 'доверен потребител',
	'grouppage-abusefilter' => '{{ns:project}}: Редактори на филтъра срещу злоупотреби',
	'grouppage-accountcreator' => '{{ns:project}}:Създатели на сметки',
	'grouppage-arbcom' => '{{ns:project}}:Членове на арбитражната комисия',
	'grouppage-autopatrolled' => '{{ns:project}}:Автопатрули',
	'grouppage-autoreviewer' => '{{ns:project}}:Авторецензенти',
	'grouppage-bigexport' => '{{ns:project}}: Големи износители',
	'grouppage-confirmed' => '{{ns:project}}:Потвърдени потребители',
	'grouppage-editprotected' => '{{ns:project}}:Редактори на защитени страници',
	'grouppage-flood' => '{{ns:project}}:Бот оператори',
	'grouppage-founder' => '{{ns:project}}:Основатели',
	'grouppage-import' => '{{ns:project}}:Вносители',
	'grouppage-interface_editors' => '{{ns:project}}:Редактори на интерфейса',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Изключения от блокирането по IP адрес',
	'grouppage-rollbacker' => '{{ns:project}}:Изпълнители на отмени',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki вносители',
	'grouppage-trusted' => '{{ns:project}}:Доверени потребители',
	'group-steward' => 'Стюарди',
	'group-sysadmin' => 'Системни администратори',
	'group-editinterface' => 'Редактори на интерфейса',
	'group-Global_bot' => 'Глобални ботове',
	'group-Global_rollback' => 'Глобални изпълнители на отмени',
	'group-Global_sysops' => 'Глобални администратори',
	'group-Ombudsmen' => 'Омбудсмани',
	'group-Staff' => 'Персонал',
	'group-steward-member' => 'Стюард',
	'group-sysadmin-member' => 'системен администратор',
	'group-editinterface-member' => 'редактор на интерфейса',
	'group-Global_bot-member' => 'глобален бот',
	'group-Global_rollback-member' => 'глобален изпълнител на отмени',
	'group-Global_sysops-member' => 'глобален администратор',
	'group-Ombudsmen-member' => 'омбудсман',
	'group-Staff-member' => 'персонал',
	'grouppage-steward' => '{{ns:project}}:Стюарди',
	'group-coder' => 'Програмисти',
	'group-coder-member' => 'програмист',
	'group-inactive' => 'Неактивни потребители',
	'group-inactive-member' => 'неактивен потребител',
	'grouppage-inactive' => '{{ns:project}}:Неактивни потребители',
	'wikimedia-copyright' => 'Текстът е достъпен при условията на лиценза <a href="http://creativecommons.org/licenses/by-sa/3.0/">Криейтив Комънс Признание — Споделяне на споделеното 3.0</a>;
в сила може да има и допълнителни условия.
За подробности вижте <a href="http://wikimediafoundation.org/wiki/Terms_of_Use/bg">Условията за ползване</a>.',
	'wikimedia-copyrightwarning' => 'Със съхраняването на редакцията, се съгласявате безвъзвратно да отдадете своя принос под лиценза [http://creativecommons.org/licenses/by-sa/3.0/ Криейтив Комънс Признание — Споделяне на споделеното 3.0] и [http://www.gnu.org/copyleft/fdl.html Лиценза за свободна документация на GNU].
Съгласявате се минималното признание на авторството ви, при ползване на материала от други потребители, да става с хипервръзка към страницата, към която допринасяте.
За подробности вижте [http://wikimediafoundation.org/wiki/Terms_of_Use/bg Условията за ползване].',
	'wikimedia-editpage-tos-summary' => 'Ако не желаете материалът ви да бъде редактиран и разпространяван без ограничения, тогава не го поставяйте тук.
Ако материалът не е написан лично от вас, то за да остане тук, трябва да е съвместим с [http://wikimediafoundation.org/wiki/Terms_of_Use/bg Условията за ползване], и вие да сте съгласни да изпълните всички евентуално приложими лицензионни изисквания.',
);

/** Bihari (भोजपुरी)
 * @author Ganesh
 */
$messages['bh'] = array(
	'sitesupport' => 'दान करीं',
	'tooltip-n-sitesupport' => 'हमनी के सहयोग करीं',
	'group-accountcreator' => 'खाता बनावे वाला',
);

/** Bambara (Bamanankan) */
$messages['bm'] = array(
	'sitesupport' => 'Banumanke',
);

/** Bengali (বাংলা)
 * @author Abdullah Harun Jewel
 * @author Bellayet
 * @author Zaheen
 */
$messages['bn'] = array(
	'wikimediamessages-desc' => 'উইকিমিডিয়া নির্ধারিত বার্তা',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/en?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'দান করুন',
	'tooltip-n-sitesupport' => 'আমাদের সহায়তা করুন',
	'specialpages-group-contribution' => 'অবদান/তহবিল সংগ্রাহক',
	'group-accountcreator' => 'অ্যাকাউন্ট তৈরি করেন যারা',
	'group-autopatrolled' => 'স্বয়ংক্রীয় পর্যবেক্ষক',
	'group-confirmed' => 'নিশ্চিতকৃত ব্যবহারকারী',
	'group-flood' => 'বট ব্যবহারকারী',
	'group-founder' => 'উদ্যোক্তা',
	'group-import' => 'আমদানীকারক',
	'group-interface_editors' => 'ইন্টারফেস সম্পাদক',
	'group-ipblock-exempt' => 'আইপি নিষেধাজ্ঞা রহিতকরণ',
	'group-patroller' => 'পর্যবেক্ষক',
	'group-researcher' => 'গবেষক',
	'group-rollbacker' => 'রোলব্যাকারগণ',
	'group-transwiki' => 'ট্রান্সউইকি ইম্পোর্টারগণ',
	'group-trusted' => 'বিশ্বস্ত ব্যবহারকারী',
	'group-accountcreator-member' => 'অ্যাকাউন্ট তৈরি করেন যিনি',
	'group-autopatrolled-member' => 'স্বয়ংক্রীয় পর্যবেক্ষক',
	'group-confirmed-member' => 'নিশ্চিতকৃত ব্যবহারকারী',
	'group-flood-member' => 'বট ব্যবহারকারী',
	'group-founder-member' => 'প্রতিষ্ঠাতা',
	'group-import-member' => 'ইম্পোর্টার',
	'group-interface_editors-member' => 'ইন্টারফেস সম্পাদক',
	'group-ipblock-exempt-member' => 'আইপি নিষেধাজ্ঞা রহিত',
	'group-patroller-member' => 'পর্যবেক্ষক',
	'group-researcher-member' => 'গবেষক',
	'group-rollbacker-member' => 'রোলব্যাকার',
	'group-transwiki-member' => 'ট্রান্সউইকি ইম্পোর্টার',
	'group-trusted-member' => 'বিশ্বস্ত ব্যবহারকারী',
	'grouppage-accountcreator' => '{{ns:project}}:একাউন্ট সৃষ্টিকারীগণ',
	'grouppage-autopatrolled' => '{{ns:project}}:স্বয়ংক্রীয় পরীক্ষকগণ',
	'grouppage-confirmed' => '{{ns:project}}:নিশ্চিতকৃত ব্যবহারকারীরা',
	'grouppage-flood' => '{{ns:project}}:বট ব্যবহারকারী',
	'grouppage-founder' => '{{ns:project}}:প্রতিষ্ঠাতাগণ',
	'grouppage-import' => '{{ns:project}}:ইম্পোর্টারগণ',
	'grouppage-interface_editors' => '{{ns:project}}:ইন্টারফেস সম্পাদক',
	'grouppage-ipblock-exempt' => '{{ns:project}}:আইপি নিষেধাজ্ঞা রহিত',
	'grouppage-researcher' => '{{ns:project}}:গবেষক',
	'grouppage-rollbacker' => '{{ns:project}}:রোলব্যাকার',
	'grouppage-transwiki' => '{{ns:project}}:ট্রান্সউইকি ইম্পোর্টারগণ',
	'grouppage-trusted' => '{{ns:project}}:বিশ্বস্ত ব্যবহারকারী',
	'group-steward' => 'স্ট্যুয়ার্ডগণ',
	'group-sysadmin' => 'সিস্টেম প্রশাসকগণ',
	'group-editinterface' => 'ইন্টারফেস সম্পাদক',
	'group-Global_bot' => 'গ্লোবাল বটসমূহ',
	'group-Global_rollback' => 'গ্লোবাল রোলব্যাকারগণ',
	'group-Global_sysops' => 'সর্বব্যাপী প্রশাসক',
	'group-Ombudsmen' => 'ন্যায়পাল',
	'group-Staff' => 'স্টাফগণ',
	'group-steward-member' => 'স্টিউয়ার্ড',
	'group-sysadmin-member' => 'সিস্টেম প্রশাসক',
	'group-editinterface-member' => 'ইন্টারফেস সম্পাদক',
	'group-Global_bot-member' => 'গ্লোবাল বট',
	'group-Global_rollback-member' => 'গ্লোবাল রোলব্যাকার',
	'group-Global_sysops-member' => 'সর্বব্যাপী প্রশাসক',
	'group-Ombudsmen-member' => 'ন্যায়পাল সদস্য',
	'group-Staff-member' => 'স্টাফ',
	'group-coder' => 'কোডার',
	'group-coder-member' => 'কোডার',
	'group-inactive' => 'নিস্ক্রিয় ব্যবহারকারী',
	'group-inactive-member' => 'নিস্ক্রিয় ব্যবহারকারী',
	'grouppage-inactive' => '{{ns:project}}:নিস্ক্রিয় ব্যবহারকারীগণ',
	'wikimedia-copyright' => 'লেখাগুলো <a href="http://creativecommons.org/licenses/by-sa/3.0/">ক্রিয়েটিভ কমন্স অ্যাট্রিবিউশন/শেয়ার-আলাইক লাইসেন্সের</a> আওতাভুক্ত;
এর সাথে বাড়তি পদ প্রযোজ্য হতে পারে।
 <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">ব্যবহারের শর্তাবলীতে</a> বিস্তারিত দেখুন।',
	'wikimedia-copyrightwarning' => 'সংরক্ষণের মাধ্যমে, আপনি এই বিষয়ে একমত হচ্ছেন যে, আপনার অবদান, ক্রিয়েটিভ কমন্স [http://creativecommons.org/licenses/by-sa/3.0/ অ্যাট্রিবিউশন/শেয়ার-আলাইক লাইসেন্স ৩.০] এবং [http://www.gnu.org/copyleft/fdl.html গনু ফ্রি ডকুমেন্টেশন লাইসেন্স (জিএফডিএল)] -এর আওতাভুক্ত। এছাড়া আরও একমত হচ্ছেন যে, এটি অন্য কোথাও যেভাবেই ব্যবহৃত হোক না কেন, আপনার অবদানের স্বীকৃতি দিতে হবে, তা পাতার হাইপারলিঙ্ক বা ইউআরএল উল্লেখ করে হতে পারে। [http://wikimediafoundation.org/wiki/Terms_of_Use ব্যবহারের শর্তাবলীতে] বিস্তারিত দেখুন।',
);

/** Tibetan (བོད་ཡིག) */
$messages['bo'] = array(
	'sitesupport' => 'ཞལ་འདེབས།',
);

/** Bishnupria Manipuri (ইমার ঠার/বিষ্ণুপ্রিয়া মণিপুরী) */
$messages['bpy'] = array(
	'sitesupport' => 'দান দেনা',
);

/** Bakhtiari (بختياري)
 * @author Behdarvandyani
 */
$messages['bqi'] = array(
	'wikimediamessages-desc' => 'پیام‌های مخصوص ویکی‌مدیا',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/bqi',
	'sitesupport' => 'کمک مالی',
	'tooltip-n-sitesupport' => 'حمایت زه ایما',
);

/** Breton (Brezhoneg)
 * @author Fohanno
 * @author Fulup
 * @author Y-M D
 * @author לערי ריינהארט
 */
$messages['br'] = array(
	'wikimediamessages-desc' => 'Kemennoù dibar Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/fr',
	'sitesupport' => 'Roadoù',
	'tooltip-n-sitesupport' => "Harpit ac'hanomp",
	'specialpages-group-contribution' => 'Degasadenn/Dastum moneiz',
	'group-abusefilter' => 'Aozerioù siloù dinoazañ',
	'group-accountcreator' => 'Krouerien kontoù',
	'group-arbcom' => "Izili ar c'huzul tredeogiezh",
	'group-autopatrolled' => 'Patrouilherien emgefre',
	'group-autoreviewer' => 'Adlennerioù emgefre',
	'group-bigexport' => 'Ezporzhierien vras',
	'group-confirmed' => 'Implijerien kadarnaet',
	'group-editprotected' => 'Embannerien pennadoù gwarezet',
	'group-filemover' => 'Adenver restroù',
	'group-flood' => 'Implijerien botoù',
	'group-founder' => 'Diazezourien',
	'group-import' => 'Enporzhierien',
	'group-interface_editors' => 'Aozerien an etrefas',
	'group-ipblock-exempt' => "Nemedennoù bloc'hadoù IP",
	'group-patroller' => 'Patrouilherien',
	'group-researcher' => 'Klaskerien',
	'group-rollbacker' => 'Assaverien',
	'group-transwiki' => 'Enporzherien treuzwiki',
	'group-trusted' => 'Implijerien a fiziañs',
	'group-abusefilter-member' => 'aozer siloù a-enep ar gwallimplij',
	'group-accountcreator-member' => 'Krouer kontoù',
	'group-arbcom-member' => "ezel eus ar c'huzul tredeogiezh",
	'group-autopatrolled-member' => 'Patrouilher emgefre',
	'group-autoreviewer-member' => 'adlenner emgefre',
	'group-bigexport-member' => 'ezporzhier bras',
	'group-confirmed-member' => 'implijer kadarnaet',
	'group-editprotected-member' => 'embanner pennadoù gwarezet',
	'group-filemover-member' => 'adenver restr',
	'group-flood-member' => 'implijer botoù',
	'group-founder-member' => 'Diazezer',
	'group-import-member' => 'Enporzhier',
	'group-interface_editors-member' => 'aozer an etrefas',
	'group-ipblock-exempt-member' => "Nemedenn bloc'had IP",
	'group-patroller-member' => 'patrouilher',
	'group-researcher-member' => 'klasker',
	'group-rollbacker-member' => 'Assaver',
	'group-transwiki-member' => 'Enporzhier treuzwiki',
	'group-trusted-member' => 'implijer a fiziañs',
	'grouppage-abusefilter' => '{{ns:project}}:Aozerien siloù a-enep ar gwallimplij',
	'grouppage-accountcreator' => '{{ns:project}}: Krouerien kontoù',
	'grouppage-arbcom' => "{{ns:project}}:Izili ar c'huzul tredeogiezh",
	'grouppage-autopatrolled' => '{{ns:project}}:Patrouilherien emgefre',
	'grouppage-autoreviewer' => '{{ns:project}}:Adlennerioù emgefre',
	'grouppage-bigexport' => '{{ns:project}}: Ezporzhierien vras',
	'grouppage-confirmed' => '{{ns:project}}:Implijerien bet kadarnaet',
	'grouppage-editprotected' => '{{ns:project}}: Embannerien pennadoù gwarezet',
	'grouppage-filemover' => '{{ns:project}}: Adenverien restr',
	'grouppage-flood' => '{{ns:project}}: implijer botoù',
	'grouppage-founder' => '{{ns:project}}:Diazezerien',
	'grouppage-import' => '{{ns:project}}:Enporzherien',
	'grouppage-interface_editors' => '{{ns:project}}:Aozerien an etrefas',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Nemedenn bloc'had IP",
	'grouppage-researcher' => '{{ns:project}}:Klaskerien',
	'grouppage-rollbacker' => '{{ns:project}}:Assaverien',
	'grouppage-transwiki' => '{{ns:project}}:Enporzherien treuzwiki',
	'grouppage-trusted' => '{{ns:project}}:Implijerien a fiziañs',
	'group-steward' => 'Stewarded',
	'group-sysadmin' => 'Merourien ar reizhiad',
	'group-editinterface' => 'Aozañ etrefas',
	'group-Global_bot' => 'Botoù hollek',
	'group-Global_rollback' => 'Distaolerioù a-vras',
	'group-Global_sysops' => 'Merourien hollek',
	'group-Ombudsmen' => 'Hanterourien',
	'group-Staff' => 'skipailh',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'Merour ar reizhiad',
	'group-editinterface-member' => 'aozer an etrefas',
	'group-Global_bot-member' => 'bot hollek',
	'group-Global_rollback-member' => 'distaoler a-vras',
	'group-Global_sysops-member' => 'merour hollek',
	'group-Ombudsmen-member' => 'hanterour',
	'group-Staff-member' => "Ezel eus ar c'hoskor",
	'group-coder' => 'Koderien',
	'group-coder-member' => 'koder',
	'group-inactive' => 'Implijerien dioberiant',
	'group-inactive-member' => 'implijer dioberiant',
	'grouppage-inactive' => '{{ns:project}}:Implijerien dioberiant',
	'wikimedia-copyright' => 'Gallout a reer implijout an testennoù zo dindan <a href="http://creativecommons.org/licenses/by-sa/3.0/">an Aotre-Implijout Creative Commons Dereiñ/Kenrannañ</a>;
divizoù ouzhpenn a c\'hall bezañ ivez.
Gwelet an <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Doareoù Implijout</a> evit gouzout hiroc\'h.',
	'wikimedia-copyrightwarning' => "Dre glikañ war enrollañ ec'h asantit enskrivañ da viken ho tegasadennoù dindan [http://creativecommons.org/licenses/by-sa/3.0/ an Aotre-implijout Creative Commons Dereiñ/Kenrannañ 3.0] hag ar [http://www.gnu.org/copyleft/fdl.html GFDL].
Degemer a rit ma vo, da nebeutañ, lakaet war ho kont dre ur gourliamm pe un URL ar bajenn hoc'h eus kemeret perzh enni.
Gwelet [http://wikimediafoundation.org/wiki/Terms_of_Use an Doareoù Implijout] evit gouzout hiroc'h.",
	'wikimedia-editpage-tos-summary' => "Ma nac'hit e vefe kemmet ha skignet ho skridoù d'ar seizh avel, neuze eo arabat deoc'h kemer perzh amañ.
Mar n'int ket bet skrivet ganeoc'h war-eeun, gwiriit mat e c'haller ober ganto diouzh termenoù a glot gant an [http://wikimediafoundation.org/wiki/Terms_of_Use Doareoù Implijout], hag ec'h asantit ober diouzh divizoù leun an Aotre-Implijout.",
);

/** Bosnian (Bosanski)
 * @author CERminator
 * @author Demicx
 * @author Kal-El
 * @author Smooth O
 * @author לערי ריינהארט
 */
$messages['bs'] = array(
	'wikimediamessages-desc' => 'Posebne poruke Wikimedije',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/bs',
	'sitesupport' => 'Donacije',
	'tooltip-n-sitesupport' => 'Podržite nas',
	'specialpages-group-contribution' => 'Doprinosi/donacije',
	'group-abusefilter' => 'Uređivači filtera zloupotrebe',
	'group-accountcreator' => 'Kreatori računa',
	'group-autopatrolled' => 'Autopatroleri',
	'group-autoreviewer' => 'Autonadzornici',
	'group-bigexport' => 'Veliki izvoznici',
	'group-confirmed' => 'Potvrđeni korisnici',
	'group-flood' => 'Bot korisnici',
	'group-founder' => 'Osnivači',
	'group-import' => 'Uvoznici',
	'group-ipblock-exempt' => 'Izuzeci IP blokada',
	'group-patroller' => 'Patroleri',
	'group-rollbacker' => 'Povratioci',
	'group-transwiki' => 'Transwiki uvoznici',
	'group-trusted' => 'Korisnici od povjerenja',
	'group-abusefilter-member' => 'uređivač filtera zloupotrebe',
	'group-accountcreator-member' => 'kreator računa',
	'group-autopatrolled-member' => 'automatski patroliran',
	'group-autoreviewer-member' => 'autonadzornik',
	'group-bigexport-member' => 'veliki izvoznik',
	'group-confirmed-member' => 'potvrđeni korisnik',
	'group-flood-member' => 'bot korisnici',
	'group-founder-member' => 'osnivač',
	'group-import-member' => 'uvoznik',
	'group-ipblock-exempt-member' => 'Izuzeci IP blokada',
	'group-patroller-member' => 'patroler',
	'group-rollbacker-member' => 'povratioc',
	'group-transwiki-member' => 'transwiki uvoznik',
	'group-trusted-member' => 'korisnik od povjerenja',
	'grouppage-abusefilter' => '{{ns:project}}:Uređivači filtera zloupotrebe',
	'grouppage-accountcreator' => '{{ns:project}}:Kreatori računa',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatski patroleri',
	'grouppage-autoreviewer' => '{{ns:project}}:Autonadzornici',
	'grouppage-bigexport' => '{{ns:project}}:Veliki izvoznici',
	'grouppage-confirmed' => '{{ns:project}}:Potvrđeni korisnici',
	'grouppage-flood' => '{{ns:project}}:Bot korisnici',
	'grouppage-founder' => '{{ns:project}}:Osnivači',
	'grouppage-import' => '{{ns:project}}:Uvoznici',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Izuzeci IP blokada',
	'grouppage-rollbacker' => '{{ns:project}}:Povratioci',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki uvoznici',
	'grouppage-trusted' => '{{ns:project}}:Korisnici od povjerenja',
	'group-steward' => 'Stjuardi',
	'group-sysadmin' => 'Sistemski administratori',
	'group-editinterface' => 'Urednici sučelja',
	'group-Global_bot' => 'Globalni botovi',
	'group-Global_rollback' => 'Globalni povratioci',
	'group-Ombudsmen' => 'Ombudsmeni',
	'group-Staff' => 'Osoblje',
	'group-steward-member' => 'stujard',
	'group-sysadmin-member' => 'sistemski administrator',
	'group-editinterface-member' => 'urednik sučelja',
	'group-Global_bot-member' => 'globalni bot',
	'group-Global_rollback-member' => 'globalni povratioc',
	'group-Ombudsmen-member' => 'ombudsmen',
	'group-Staff-member' => 'članovi osoblja',
	'group-coder' => 'Koderi',
	'group-coder-member' => 'koder',
	'group-inactive' => 'Neaktivni korisnici',
	'group-inactive-member' => 'neaktivni korisnik',
	'grouppage-inactive' => '{{ns:project}}:Neaktivni korisnici',
	'wikimedia-copyright' => 'Tekst je dostupan pod <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike licencom</a>;
dodatni uslovi se mogu primijeniti.
Za detalje pogledajte <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">uslove korištenja</a>.',
	'wikimedia-copyrightwarning' => 'Ako spremite promjene, nepovratno se slažete da Vaš doprinos objavljujete pod [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike licencom 3.0] i [http://www.gnu.org/copyleft/fdl.html GFDL].
Slažete se da Vaš doprinos može biti izmijenjen od drugih korisnika, najmanje preko linka ili URLa.
Za dalje detalje pogledajte [http://wikimediafoundation.org/wiki/Terms_of_Use Pravila korištenja].',
	'wikimedia-editpage-tos-summary' => 'Ako ne želite da se Vaše izmjene i doprinos mijenjaju ili distribuiraju po želji, onda ih ne šaljite ovdje.
Ako ovo niste napisali lično, ove izmjene moraju biti dostupne pod uslovima u skladu sa [http://wikimediafoundation.org/wiki/Terms_of_Use Pravilima korištenja], i slažete se da će te slijediti sve relevantne licencne zahtjeve.',
);

/** Catalan (Català)
 * @author Aleator
 * @author Juanpabl
 * @author Martorell
 * @author Paucabot
 * @author SMP
 * @author Solde
 * @author Toniher
 * @author Vriullop
 */
$messages['ca'] = array(
	'wikimediamessages-desc' => 'Missatges específics de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/ca',
	'sitesupport' => 'Donatius',
	'tooltip-n-sitesupport' => 'Ajudau-nos',
	'group-accountcreator' => 'Creadors de comptes',
	'group-autopatrolled' => 'Autopatrulladors',
	'group-bigexport' => 'Grans exportadors',
	'group-confirmed' => 'Usuaris confirmats',
	'group-flood' => 'Usuaris bots',
	'group-founder' => 'Fundadors',
	'group-import' => 'Importadors',
	'group-ipblock-exempt' => "Exempts del bloqueig d'IP",
	'group-rollbacker' => 'Revertidors ràpids',
	'group-transwiki' => 'Importadors transwiki',
	'group-trusted' => 'Usuaris de confiança',
	'group-accountcreator-member' => 'creador de comptes',
	'group-autopatrolled-member' => 'autopatrullador',
	'group-bigexport-member' => 'gran exportador',
	'group-confirmed-member' => 'usuari confirmat',
	'group-flood-member' => 'usuari-bot',
	'group-founder-member' => 'fundador',
	'group-import-member' => 'importador',
	'group-interface_editors-member' => 'editor de la interfície',
	'group-ipblock-exempt-member' => "exempt del bloqueig d'IP",
	'group-rollbacker-member' => 'revertidor ràpid',
	'group-transwiki-member' => 'importador transwiki',
	'group-trusted-member' => 'usuari de confiança',
	'grouppage-accountcreator' => '{{ns:project}}:Creadors de comptes',
	'grouppage-bigexport' => '{{ns:project}}:Grans exportadors',
	'grouppage-flood' => '{{ns:project}}:Bots',
	'grouppage-founder' => '{{ns:project}}:Fundadors',
	'grouppage-import' => '{{ns:project}}:Importadors',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Exempts del bloqueig d'IP",
	'grouppage-rollbacker' => '{{ns:project}}:Revertidors ràpids',
	'grouppage-transwiki' => '{{ns:project}}:Importadors transwiki',
	'grouppage-trusted' => '{{ns:project}}:Usuaris verificats',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Administradors del sistema',
	'group-editinterface' => 'Editors de la interfície',
	'group-Global_bot' => 'Bots globals',
	'group-Global_rollback' => 'Revertidors ràpids globals',
	'group-Ombudsmen' => 'Síndics de greuges',
	'group-Staff' => 'Personal',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrador del sistema',
	'group-editinterface-member' => 'editor de la interfície',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'revertidor ràpid global',
	'group-Ombudsmen-member' => 'síndic de greuges',
	'group-Staff-member' => 'Personal del wiki',
	'group-inactive' => 'Usuaris inactius',
	'group-inactive-member' => 'usuari inactiu',
	'grouppage-inactive' => '{{ns:project}}:Usuaris inactius',
	'wikimedia-copyright' => 'El text està disponible sota la <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.ca">Llicència de Creative Commons Reconeixement/Compartir-Igual</a>; es poden aplicar termes addicionals.
Vegeu les <a href="http://wikimediafoundation.org/wiki/Condicions_d%27%C3%BAs">condicions d\'ús</a> per a més informació.',
	'wikimedia-copyrightwarning' => "Quan deseu, esteu acceptant alliberar irrevocablement la vostra contribució sota la [http://creativecommons.org/licenses/by-sa/3.0/deed.ca Llicència de Creative Commons Reconeixement i Compartir-Igual 3.0] i la [http://www.gnu.org/copyleft/fdl.html GFDL].
Accepteu ser atribuït, com a mínim, a través d'un hiperenllaç o URL a la pàgina on esteu contribuint.
Vegeu les [http://wikimediafoundation.org/wiki/Condicions_d%27%C3%BAs condicions d'ús] per a més informació.",
	'wikimedia-editpage-tos-summary' => "Si no voleu que el vostre text sigui modificat i redistribuït a voluntat, llavors no el lliureu aquí.
Si l'escrit no és vostre, ha d'estar disponible sota termes compatibles amb les [http://wikimediafoundation.org/wiki/Terms_of_Use condicions d'ús], i accepteu seguir tots els requisits de la llicència.",
);

/** Min Dong Chinese (Mìng-dĕ̤ng-ngṳ̄) */
$messages['cdo'] = array(
	'sitesupport' => 'Dà̤-giŏng',
);

/** Chechen (Нохчийн)
 * @author Sasan700
 */
$messages['ce'] = array(
	'sitesupport' => 'Сайтан сагIа',
	'wikimedia-copyright' => 'Йоза тlекхочучехь ду оцу хьола бакъойаларца <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a>, цхьайолчу хенахь хила мега хьоле хьаьжжина локхаллий таронца. Мадарра хьажа. <a href="http://wikimediafoundation.org/wiki/Terms_of_Use/ce">Лелоран хьал</a>.',
);

/** Cebuano (Cebuano)
 * @author Abastillas
 */
$messages['ceb'] = array(
	'sitesupport' => 'Mga donasyon',
	'tooltip-n-sitesupport' => 'Tabangi kami',
);

/** Chamorro (Chamoru)
 * @author Gadao01
 */
$messages['ch'] = array(
	'sitesupport' => "Nina'i siha",
	'tooltip-n-sitesupport' => 'Supotta ham',
);

/** Cherokee (ᏣᎳᎩ) */
$messages['chr'] = array(
	'sitesupport' => 'ᎠᎵᏍᎪᎸᏙᏗ',
);

/** Sorani (Arabic script) (‫کوردی (عەرەبی)‬)
 * @author Asoxor
 * @author Ferhad y
 * @author Marmzok
 * @author رزگار
 */
$messages['ckb-arab'] = array(
	'wikimediamessages-desc' => 'پەیامە تایبەتەکانی ویکیمیدیا',
	'sitesupport' => 'پشتیوانی لە ویکیپیدیا',
	'tooltip-n-sitesupport' => 'پاڵپشتی‌کردنی ئێمە',
	'group-accountcreator' => 'دروست‌کەری هەژمارە',
	'group-flood' => 'بەکارھێنەرانی بۆت',
	'group-accountcreator-member' => 'درووست‌که‌ری هه‌ژماره‌',
	'group-flood-member' => 'بەکارھێنەری بۆت',
	'group-founder-member' => 'دۆزەر',
	'group-sysadmin' => 'به‌ڕێوبه‌رانی سیسته‌م',
	'group-Staff' => 'کارمەندان',
	'group-sysadmin-member' => 'بەڕێوبەری سیستەم',
	'group-Staff-member' => 'کارمەند',
	'group-inactive' => 'بەکارهێنەرانی ناچالاک',
	'group-inactive-member' => 'بەکارهێنەری ناچالاک',
	'grouppage-inactive' => '{{ns:project}}: بەکارهێنەرانی ناچالاک',
	'wikimedia-copyright' => 'دەقەکە لەژێر <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a> لە بەردەستدایە؛<br />
لەوانەیە مەرجی تریشی پێ زیاد ببێ.<br />
سەیری <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">مەرجەکانی بەکارھێنان</a> بکە بۆ وردەکارییەکانی.',
	'wikimedia-copyrightwarning' => 'بە پاشەکەوت کردن، بە بێگەڕانەوە قەبووڵ دەکەی کە بەشدارییەکەت لەژێر [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] و [http://www.gnu.org/copyleft/fdl.html GFDL] بڵاو ببێتەوە.
قەبووڵ دەکەی، لانی کەم، بە URL یان ھایپەرلینکێک بەو پەڕە بەشداری تێدا دەکەن بەکارھێنەرانی تر ناوتان لێببەن.
سەیری [http://wikimediafoundation.org/wiki/Terms_of_Use مەرجەکانی بەکارھێنان] بکەن بۆ وردەکارییەکان.',
	'wikimedia-editpage-tos-summary' => 'ئەگەر ناتەوێ نووسراوەکەت بە ئارەزوو دەستکاری بکرێ و تێکبدرێت، لێرە پێشکەشی مەکە.
ئەگەر خۆت ئەمەت نەنووسیوە، ئەشێ لە ژێر [http://wikimediafoundation.org/wiki/Terms_of_Use مەرجەکانی بەکارھێنان لە ویکیمیدیا] لە بەردەست دا بێت و قەبووڵ ئەکەیت کە لە ھەر پێداویستییەکی پەیوەندی‌‌داری لایسەنس پەیڕەوی بکەی.',
);

/** Corsican (Corsu) */
$messages['co'] = array(
	'sitesupport' => 'Dunazione',
	'group-steward' => 'Steward',
	'grouppage-steward' => '{{ns:project}}:Steward',
);

/** Crimean Turkish (Latin) (Qırımtatarca (Latin))
 * @author Don Alessandro
 */
$messages['crh-latn'] = array(
	'sitesupport' => 'Bağışlar',
	'wikimedia-copyrightwarning' => 'Saifeni saqlap, yazğanıñıznıñ keri qaytalmaz şekilde [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] ve [http://www.gnu.org/copyleft/fdl.html GFDL] litsenziyalarınıñ şartlarına köre derc etilgenini qabul eteceksiñiz. Bu saifedeki malümatnı bundan soñ qullanacaqlarnıñ qoşqan isseñiz aqqında bare bu saifege bağlantı berip bildirecegi yeterli olacağını da qabul eteceksiñiz. Daa tafsilâtlı malümat içün [http://wikimediafoundation.org/wiki/ Qullanuv Şartlarını] baqıñız.',
	'wikimedia-editpage-tos-summary' => 'Eger yazğan metinleriñizni er bir adam serbestçe deñiştirip ve tarqatıp olacağını istemeseñiz, olarnı mında yerleştirmeñiz.
Eger yerleştirmege istegen metniñizni siz degil de, başqa bir adam yazğan olsa, şu metinniñ yerleştirilüvi [http://wikimediafoundation.org/wiki/Terms_of_Use Qullanuv Şartları]na uyğun olmalı, ve siz litsenziyanıñ bütün kerekli talaplarınen razı olmalısıñız.',
);

/** Crimean Turkish (Cyrillic) (Qırımtatarca (Cyrillic))
 * @author Don Alessandro
 */
$messages['crh-cyrl'] = array(
	'sitesupport' => 'Багъышлар',
	'wikimedia-copyrightwarning' => 'Саифени сакълап, язгъанынъызнынъ кери къайталмаз шекильде [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] ве [http://www.gnu.org/copyleft/fdl.html GFDL] лицензияларынынъ шартларына коре дердж этильгенини къабул этеджексинъиз. Бу саифедеки малюматны бундан сонъ къулланаджакъларнынъ къошкъан иссенъиз акъкъында баре бу саифеге багъланты берип бильдиреджеги етерли оладжагъыны да къабул этеджексинъиз. Даа тафсилятлы малюмат ичюн [http://wikimediafoundation.org/wiki/ Къулланув Шартларыны] бакъынъыз.',
	'wikimedia-editpage-tos-summary' => 'Эгер язгъан метинлеринъизни эр бир адам сербестче денъиштирип ве таркъатып оладжагъыны истемесенъиз, оларны мында ерлештирменъиз.
Эгер ерлештирмеге истеген метнинъизни сиз дегиль де, башкъа бир адам язгъан олса, шу метиннинъ ерлештирилюви [http://wikimediafoundation.org/wiki/Terms_of_Use Къулланув Шартлары]на уйгъун олмалы, ве сиз лицензиянынъ бутюн керекли талапларынен разы олмалысынъыз.',
);

/** Czech (Česky)
 * @author Danny B.
 * @author Li-sung
 * @author Matěj Grabovský
 * @author Mormegil
 * @author Ragimiri
 */
$messages['cs'] = array(
	'wikimediamessages-desc' => 'Hlášení specifická pro projekty nadace Wikimedia Foundation',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Sponzorstv%C3%AD',
	'sitesupport' => 'Podpořte nás',
	'tooltip-n-sitesupport' => 'Podpořte nás',
	'specialpages-group-contribution' => 'Příspěvky/financování',
	'group-abusefilter' => 'Správci filtrů zneužívání',
	'group-accountcreator' => 'Zakladatelé účtů',
	'group-arbcom' => 'Členové arbitrážního výboru',
	'group-autopatrolled' => 'Automatičtí strážci',
	'group-autoreviewer' => 'Autokontroloři',
	'group-bigexport' => 'Velkoexportéři',
	'group-confirmed' => 'Schválení uživatelé',
	'group-editprotected' => 'Editoři zamčených stránek',
	'group-filemover' => 'Přesouvači souborů',
	'group-flood' => 'Uživatelé botů',
	'group-founder' => 'Zakladatelé',
	'group-import' => 'Importéři',
	'group-interface_editors' => 'Editoři uživatelského rozhraní',
	'group-ipblock-exempt' => 'Nepodléhající blokování IP adres',
	'group-patroller' => 'Strážci',
	'group-researcher' => 'Výzkumníci',
	'group-rollbacker' => 'Revertovatelé',
	'group-transwiki' => 'Transwiki importéři',
	'group-trusted' => 'Důvěryhodní uživatelé',
	'group-abusefilter-member' => 'správce filtrů zneužívání',
	'group-accountcreator-member' => 'zakladatel účtů',
	'group-arbcom-member' => 'člen arbitrážního výboru',
	'group-autopatrolled-member' => 'strážce',
	'group-autoreviewer-member' => 'autokontrolor',
	'group-bigexport-member' => 'velkoexportér',
	'group-confirmed-member' => 'schválený uživatel',
	'group-editprotected-member' => 'editor zamčených stránek',
	'group-filemover-member' => 'přesouvač souborů',
	'group-flood-member' => 'uživatel botů',
	'group-founder-member' => 'zakladatel',
	'group-import-member' => 'importér',
	'group-interface_editors-member' => 'editor uživatelského rozhraní',
	'group-ipblock-exempt-member' => 'nepodléhající blokování IP adres',
	'group-patroller-member' => 'strážce',
	'group-researcher-member' => 'výzkumník',
	'group-rollbacker-member' => 'revertovatel',
	'group-transwiki-member' => 'transwiki importér',
	'group-trusted-member' => 'důvěryhodný uživatel',
	'grouppage-abusefilter' => '{{ns:project}}:Správci filtrů zneužívání',
	'grouppage-accountcreator' => '{{ns:project}}:Zakladatelé účtů',
	'grouppage-arbcom' => '{{ns:project}}:Arbitrážní výbor',
	'grouppage-autopatrolled' => '{{ns:project}}:Strážci',
	'grouppage-autoreviewer' => '{{ns:project}}:Autokontroloři',
	'grouppage-bigexport' => '{{ns:project}}:Velkoexportéři',
	'grouppage-confirmed' => '{{ns:project}}:Schválení uživatelé',
	'grouppage-editprotected' => '{{ns:project}}:Editoři zamčených stránek',
	'grouppage-filemover' => '{{ns:project}}:Přesouvači souborů',
	'grouppage-flood' => '{{ns:project}}:Uživatelé botů',
	'grouppage-founder' => '{{ns:project}}:Zakladatelé',
	'grouppage-import' => '{{ns:project}}:Importéři',
	'grouppage-interface_editors' => '{{ns:project}}:Editoři uživatelského rozhraní',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Výjimky z blokování IP adres',
	'grouppage-researcher' => '{{ns:project}}:Výzkumníci',
	'grouppage-rollbacker' => '{{ns:project}}:Revertovatelé',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importéři',
	'grouppage-trusted' => '{{ns:project}}:Důvěryhodní uživatelé',
	'group-steward' => 'Stevardi',
	'group-sysadmin' => 'Správcové serveru',
	'group-editinterface' => 'Editoři uživatelského rozhraní',
	'group-Global_bot' => 'Globální boti',
	'group-Global_rollback' => 'Globální revertovatelé',
	'group-Global_sysops' => 'Globální správci',
	'group-Ombudsmen' => 'Ombudsmani',
	'group-Staff' => 'Personál',
	'group-steward-member' => 'stevard',
	'group-sysadmin-member' => 'správce serveru',
	'group-editinterface-member' => 'editor uživatelského rozhraní',
	'group-Global_bot-member' => 'globální bot',
	'group-Global_rollback-member' => 'globální revertovatel',
	'group-Global_sysops-member' => 'globální správce',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'člen personálu',
	'group-coder' => 'Programátoři',
	'group-coder-member' => 'programátor',
	'group-inactive' => 'Neaktivní uživatelé',
	'group-inactive-member' => 'neaktivní uživatel',
	'grouppage-inactive' => '{{ns:project}}:Neaktivní uživatelé',
	'wikimedia-copyright' => 'Text je dostupný pod <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.cs">licencí Creative Commons Uveďte autora&nbsp;– Zachovejte licenci</a>, případně za dalších podmínek. Podrobnosti naleznete na stránce <a href="http://wikimediafoundation.org/wiki/Podmínky_užití">Podmínky užití</a>.',
	'wikimedia-copyrightwarning' => 'Uložením svůj příspěvek neodvolatelně uvolňujete pod licencemi [http://creativecommons.org/licenses/by-sa/3.0/deed.cs Creative Commons Uveďte autora&nbsp;– Zachovejte licenci&nbsp;3.0] a&nbsp;[http://www.gnu.org/copyleft/fdl.html GFDL]. Souhlasíte s&nbsp;tím, aby další uživatelé vaše autorství uváděli alespoň formou hypertextového odkazu nebo adresy na stránku, do které přispíváte. Podrobnosti naleznete v&nbsp;[http://wikimediafoundation.org/wiki/Podm%C3%ADnky_u%C5%BEit%C3%AD Podmínkách užití].',
	'wikimedia-editpage-tos-summary' => 'Pokud si nepřejete, aby váš příspěvek byl nemilosrdně upravován a&nbsp;volně šířen, pak ho sem neukládejte. Pokud nejste autorem textu, musí být dostupný za podmínek slučitelných s&nbsp;našimi [http://wikimediafoundation.org/wiki/Podm%C3%ADnky_u%C5%BEit%C3%AD Podmínkami užití] a&nbsp;vy souhlasíte se všemi příslušnými licenčními požadavky.',
);

/** Church Slavic (Словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'sitesupport' => 'даꙗ́ниꙗ',
);

/** Chuvash (Чӑвашла)
 * @author PCode
 */
$messages['cv'] = array(
	'sitesupport' => 'Пожертвованисем',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'wikimediamessages-desc' => 'Negeseuon neilltuol Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/cy',
	'sitesupport' => 'Rhoi arian',
	'tooltip-n-sitesupport' => "Ein cefnogi'n ariannol",
	'group-accountcreator' => 'Gwneuthurwyr cyfrifon',
	'group-confirmed' => "Defnyddwyr wedi'u cadarnhau",
	'group-flood' => 'Defnyddwyr bot',
	'group-founder' => 'Sefydlwyr',
	'group-import' => 'Mewnforwyr',
	'group-ipblock-exempt' => 'Wedi eithrio rhag bod eu cyfeiriadau IP yn cael eu blocio',
	'group-transwiki' => 'Mewnforwyr trawswici',
	'group-trusted' => 'Defnyddwyr dibynadwy',
	'group-accountcreator-member' => 'gwneuthurwr cyfrifon',
	'group-confirmed-member' => 'defnyddiwr wedi ei gadarnhau',
	'group-flood-member' => 'defnyddiwr bot',
	'group-founder-member' => 'sefydlydd',
	'group-import-member' => 'mewnforwr',
	'group-ipblock-exempt-member' => 'Wedi eithrio rhag bod ei gyfeiriad IP yn cael ei flocio',
	'group-transwiki-member' => 'mewnforwr trawswici',
	'group-trusted-member' => 'defnyddiwr dibynadwy',
	'grouppage-accountcreator' => '{{ns:project}}:Gwneuthurwyr cyfrifon',
	'grouppage-confirmed' => "{{ns:project}}:Defnyddwyr wedi'u cadarnhau",
	'grouppage-flood' => '{{ns:project}}:Defnyddwyr bot',
	'grouppage-founder' => '{{ns:project}}:Sefydlwyr',
	'grouppage-import' => '{{ns:project}}:Mewnforwyr',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Eithrio rhag blocio'r IP",
	'grouppage-transwiki' => '{{ns:project}}:Mewnforwyr trawswici',
	'grouppage-trusted' => '{{ns:project}}:Defnyddwyr dibynadwy',
	'group-steward' => 'Stiwardiaid',
	'group-sysadmin' => 'Gweinyddwyr y system',
	'group-editinterface' => 'Golygyddion y rhyngwyneb',
	'group-Global_bot' => 'Botiau wici-gyfan',
	'group-Ombudsmen' => 'Ombwdsmyn',
	'group-Staff' => "Aelodau o'r staff",
	'group-steward-member' => 'stiward',
	'group-sysadmin-member' => 'gweinyddwr y system',
	'group-editinterface-member' => 'golygydd y rhyngwyneb',
	'group-Global_bot-member' => 'bot wici-gyfan',
	'group-Ombudsmen-member' => 'ombwdsmon',
	'group-Staff-member' => 'staff',
	'group-coder' => 'Codyddion',
	'group-coder-member' => 'codydd',
	'group-inactive' => 'Defnyddwyr segur',
	'group-inactive-member' => 'defnyddiwr segur',
	'grouppage-inactive' => '{{ns:project}}:Defnyddwyr segur',
	'wikimedia-copyright' => 'Rhoddir testun y dudalen ar gael ar delerau\'r drwydded <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a>;
gall fod telerau ychwanegol yn perthyn i\'r testun.
Gweler <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Telerau Defnyddio\'r Drwydded</a> am fanylion pellach.',
	'wikimedia-copyrightwarning' => "Wrth roi'r dudalen ar gadw, rydych yn cytuno, a hynny'n ddi-alw'n-ôl, i ryddhau eich cyfraniad ar drwyddedau'r [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] a'r [http://www.gnu.org/copyleft/fdl.html GFDL].
Yr ydych yn cytuno i gael eich cydnabod pan gaiff y cyfraniad ei ail-ddefnyddio, o leiaf trwy osod hypergyswllt neu URL at y dudalen yr ydych yn cyfrannu ato.
Gweler [http://wikimediafoundation.org/wiki/Terms_of_Use Telerau Defnyddio'r Drwydded] am fanylion pellach.",
	'wikimedia-editpage-tos-summary' => "Os nad ydych am weld eich cyfraniad yn cael ei olygu a'i ail-ddefnyddio gan rywun-rywun, yna gwell peidio â chyfrannu yma.
Os nad chi ysgrifennodd y cyfraniad hwn, rhaid iddo fod ar gael ar delerau sy'n gyson â <a href=\"http://wikimediafoundation.org/wiki/Terms_of_Use\">Thelerau Defnyddio'r Drwydded</a>, ac rydych yn cytuno i ddilyn unrhyw ofynion y drwydded berthnasol.",
);

/** Danish (Dansk)
 * @author Jon Harald Søby
 * @author Kaare
 * @author Masz
 * @author Sarrus
 */
$messages['da'] = array(
	'wikimediamessages-desc' => 'Wikimedia-specifikke meddelelser',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/da',
	'sitesupport' => 'Donationer',
	'tooltip-n-sitesupport' => 'Støt os',
	'specialpages-group-contribution' => 'Bidrag/Indsamling',
	'group-abusefilter' => 'Operatører af misbrugsfilteret',
	'group-accountcreator' => 'Kontooprettere',
	'group-autopatrolled' => 'Autopatruljerede',
	'group-bigexport' => 'Storeksportører',
	'group-confirmed' => 'Bekræftede brugere',
	'group-founder' => 'Grundlæggere',
	'group-import' => 'Importører',
	'group-ipblock-exempt' => 'IP-blokeringsundtagelser',
	'group-patroller' => 'Patruljanter',
	'group-rollbacker' => 'Tilbagerullere',
	'group-transwiki' => 'Transwiki-importører',
	'group-abusefilter-member' => 'Operatør af misbrugsfilteret',
	'group-accountcreator-member' => 'Kontoopretter',
	'group-autopatrolled-member' => 'autopatruljant',
	'group-bigexport-member' => 'masse-eksportører',
	'group-confirmed-member' => 'bekræftet bruger',
	'group-founder-member' => 'Grundlægger',
	'group-import-member' => 'Importør',
	'group-ipblock-exempt-member' => 'IP-blokeringsundtagelse',
	'group-patroller-member' => 'patruljant',
	'group-rollbacker-member' => 'Tilbageruller',
	'group-transwiki-member' => 'Transwiki-importør',
	'grouppage-abusefilter' => '{{ns:project}}:Operatører af misbrugsfilteret',
	'grouppage-accountcreator' => '{{ns:project}}:Kontooprettere',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatruljanter',
	'grouppage-bigexport' => '{{ns:project}}:Storeksportører',
	'grouppage-confirmed' => '{{ns:project}}:Bekræftede brugere',
	'grouppage-founder' => '{{ns:project}}:Grundlæggere',
	'grouppage-import' => '{{ns:project}}:Importører',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-blokeringsundtagelser',
	'grouppage-rollbacker' => '{{ns:project}}:Tilbagerullere',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importører',
	'group-steward' => 'Forvaltere',
	'group-sysadmin' => 'Systemadministratorer',
	'group-editinterface' => 'Brugerfladeændrere',
	'group-Global_bot' => 'Globale robotter',
	'group-Global_rollback' => 'Globale tilbagerullere',
	'group-Global_sysops' => 'Global administrator',
	'group-Ombudsmen' => 'Ombudsmænd',
	'group-Staff' => 'Ansatte',
	'group-steward-member' => 'forvalter',
	'group-sysadmin-member' => 'systemadministrator',
	'group-editinterface-member' => 'brugerfladeændrer',
	'group-Global_bot-member' => 'global robot',
	'group-Global_rollback-member' => 'global tilbageruller',
	'group-Global_sysops-member' => 'global administrator',
	'group-Ombudsmen-member' => 'ombudsmand',
	'group-Staff-member' => 'ansat',
	'grouppage-steward' => 'm:Stewards/nb',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
	'group-coder' => 'Kodere',
	'group-coder-member' => 'koder',
	'group-inactive' => 'Inaktive brugere',
	'group-inactive-member' => 'inaktiv bruger',
	'grouppage-inactive' => '{{ns:project}}:Inaktive brugere',
	'wikimedia-copyright' => 'Tekst er tilgængelig under <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.da">Creative Commons-licensen Navngivelse/Del på samme vilkår</a>; yderligere betingelser kan være gældende. Se <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Brugsbetingelser</a> for flere oplysninger.',
	'wikimedia-copyrightwarning' => 'Når du gemmer, indvilliger du uigenkaldeligt i at udgive dit bidrag under [http://creativecommons.org/licenses/by-sa/3.0/deed.da Creative Commons-licensen Navngivelse/Del på samme vilkår 3.0] og [http://www.gnu.org/copyleft/fdl.html GFDL]. Du indvilliger i at blive angivet som kilde af genbrugere, som minimum gennem et hyperlink eller URL til artiklen, du bidrog til. Se [http://wikimediafoundation.org/wiki/Terms_of_Use Brugsbetingelser] for flere oplysninger.',
	'wikimedia-editpage-tos-summary' => 'Ønsker du ikke at dit værk redigeres og redistribueres efter forgodtbefindende, skal du ikke indsende det her. Har du ikke selv skrevet det, skal det være tilgængeligt under betingelser i overensstemmelse med [http://wikimediafoundation.org/wiki/Terms_of_Use Brugsbetingelser], og du bekræfter at leve op til alle relevante licenskrav.',
);

/** German (Deutsch)
 * @author Church of emacs
 * @author Kghbln
 * @author Khaledelmansoury
 * @author MF-Warburg
 * @author Melancholie
 * @author Merlissimo
 * @author Metalhead64
 * @author Pill
 * @author Purodha
 * @author Raimond Spekking
 * @author Spacebirdy
 * @author Umherirrender
 * @author Απεργός
 */
$messages['de'] = array(
	'wikimediamessages-desc' => 'Spezifische Systemnachrichten für Projekte der Wikimedia Foundation',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Spenden',
	'sitesupport' => 'Spenden',
	'tooltip-n-sitesupport' => 'Unterstütze uns',
	'specialpages-group-contribution' => 'Spenden/Fundraiser',
	'group-abusefilter' => 'Missbrauchsfilter-Bearbeiter',
	'group-accountcreator' => 'Benutzerkonten-Ersteller',
	'group-arbcom' => 'Schiedsgerichtsmitglieder',
	'group-autopatrolled' => 'Automatische Kontrollierer',
	'group-autoreviewer' => 'Automatische Nachprüfer',
	'group-bigexport' => 'Großexporteure',
	'group-confirmed' => 'Bestätigte Benutzer',
	'group-editprotected' => 'Bearbeiter von geschützen Seiten',
	'group-filemover' => 'Dateiverschieber',
	'group-flood' => 'Botbenutzer',
	'group-founder' => 'Gründer',
	'group-import' => 'Importeure',
	'group-interface_editors' => 'Benutzeroberflächen-Bearbeiter',
	'group-ipblock-exempt' => 'IP-Sperre-Ausnahmen',
	'group-patroller' => 'Kontrolleure',
	'group-researcher' => 'Rechercheur',
	'group-rollbacker' => 'Zurücksetzer',
	'group-transwiki' => 'Transwiki-Importeure',
	'group-trusted' => 'Vertrauenswürdige Benutzer',
	'group-abusefilter-member' => 'Missbrauchsfilter-Bearbeiter',
	'group-accountcreator-member' => 'Benutzerkonten-Ersteller',
	'group-arbcom-member' => 'Schiedsgerichtsmitglied',
	'group-autopatrolled-member' => 'Automatischer Kontrollierer',
	'group-autoreviewer-member' => 'Automatischer Nachprüfer',
	'group-bigexport-member' => 'Großexporteur',
	'group-confirmed-member' => 'Bestätigter Benutzer',
	'group-editprotected-member' => 'Bearbeiter von geschützen Seiten',
	'group-filemover-member' => 'Dateiverschieber',
	'group-flood-member' => 'Botbenutzer',
	'group-founder-member' => 'Gründer',
	'group-import-member' => 'Importeur',
	'group-interface_editors-member' => 'Benutzeroberflächen-Bearbeiter',
	'group-ipblock-exempt-member' => 'IP-Sperre-Ausnahme',
	'group-patroller-member' => 'Kontrolleur',
	'group-researcher-member' => 'Rechercheur',
	'group-rollbacker-member' => 'Zurücksetzer',
	'group-transwiki-member' => 'Transwiki-Importeur',
	'group-trusted-member' => 'Vertrauenswürdiger Benutzer',
	'grouppage-abusefilter' => '{{ns:project}}:Missbrauchsfilter-Bearbeiter',
	'grouppage-accountcreator' => '{{ns:project}}:Benutzerkonten-Ersteller',
	'grouppage-arbcom' => '{{ns:project}}:Schiedsgerichtsmitglieder',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatische Kontrollierer',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatische Nachprüfer',
	'grouppage-bigexport' => '{{ns:project}}:Großexporteure',
	'grouppage-confirmed' => '{{ns:project}}:Bestätigte Benutzer',
	'grouppage-editprotected' => '{{ns:project}}:Bearbeiter von geschützen Seiten',
	'grouppage-filemover' => '{{ns:project}}:Dateiverschieber',
	'grouppage-flood' => '{{ns:project}}:Botbenutzer',
	'grouppage-founder' => '{{ns:project}}:Gründer',
	'grouppage-import' => '{{ns:project}}:Importeure',
	'grouppage-interface_editors' => '{{ns:project}}:Benutzeroberflächen-Bearbeiter',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Sperre-Ausnahme',
	'grouppage-researcher' => '{{ns:project}}:Rechercheur',
	'grouppage-rollbacker' => '{{ns:project}}:Zurücksetzer',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importeure',
	'grouppage-trusted' => '{{ns:project}}:Vertrauenswürdige Benutzer',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Systemadministratoren',
	'group-editinterface' => 'Benutzeroberflächenbearbeiter',
	'group-Global_bot' => 'Globale Bots',
	'group-Global_rollback' => 'Globale Zurücksetzer',
	'group-Global_sysops' => 'Globale Administratoren',
	'group-Ombudsmen' => 'Ombudspersonen',
	'group-Staff' => 'Mitarbeiter',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'Systemadministrator',
	'group-editinterface-member' => 'Benutzeroberflächenbearbeiter',
	'group-Global_bot-member' => 'Globaler Bot',
	'group-Global_rollback-member' => 'Globaler Zurücksetzer',
	'group-Global_sysops-member' => 'Globaler Administrator',
	'group-Ombudsmen-member' => 'Ombudsperson',
	'group-Staff-member' => 'Mitarbeiter',
	'grouppage-steward' => 'm:Stewards/de',
	'grouppage-Global_sysops' => 'm:Global sysops/de',
	'group-coder' => 'Programmierer',
	'group-coder-member' => 'Programmierer',
	'group-inactive' => 'Inaktive Benutzer',
	'group-inactive-member' => 'Inaktiver Benutzer',
	'grouppage-inactive' => '{{ns:project}}:Inaktive Benutzer',
	'wikimedia-copyright' => 'Der Text ist unter der Lizenz <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.de">„Creative Commons Attribution/Share-Alike“</a> verfügbar; zusätzliche Bedingungen können anwendbar sein.
Einzelheiten sind in den <a href="http://wikimediafoundation.org/wiki/Nutzungsbedingungen">Nutzungsbedingungen</a> beschrieben.',
	'wikimedia-copyrightwarning' => 'Mit dem Speichern lizenzierst du deine Bearbeitung unwiderruflich unter der [http://creativecommons.org/licenses/by-sa/3.0/deed.de „Creative Commons Attribution/Share-Alike“-Lizenz 3.0] und der [http://www.gnu.org/copyleft/fdl.html GFDL].
Du stimmst zu, dass eine Weiterverwendung mindestens durch einen Hyperlink oder einer URL zur Seite, die du bearbeitest, erfolgen darf.
Einzelheiten sind in den [http://wikimediafoundation.org/wiki/Nutzungsbedingungen Nutzungsbedingungen] beschrieben.',
	'wikimedia-editpage-tos-summary' => 'Wenn du nicht möchtest, dass dein Text weiterbearbeitet und weiterverbreitet wird, dann speichere ihn nicht.
Falls du den Text nicht selbst verfasst hast, muss er unter den [http://wikimediafoundation.org/wiki/Nutzungsbedingungen Nutzungsbedingungen] verfügbar sein und du stimmst zu, notwendigen Lizenzanforderungen zu folgen.',
);

/** German (formal address) (Deutsch (Sie-Form))
 * @author Raimond Spekking
 * @author Umherirrender
 */
$messages['de-formal'] = array(
	'tooltip-n-sitesupport' => 'Unterstützen Sie uns',
	'wikimedia-copyrightwarning' => 'Mit dem Speichern lizenzieren Sie Ihre Bearbeitung unwiderruflich unter die [http://creativecommons.org/licenses/by-sa/3.0/ „Creative Commons Attribution/Share-Alike“-Lizenz 3.0] und der [http://www.gnu.org/copyleft/fdl.html GFDL].
Sie stimmen zu, dass eine Weiterverwendung mindestens durch durch einen Hyperlink oder einer URL zur Seite, die Sie bearbeiten, erfolgen darf.
Details sind den [http://wikimediafoundation.org/wiki/Nutzungsbedingungen Nutzungsbedingungen] zu entnehmen.',
	'wikimedia-editpage-tos-summary' => 'Wenn Sie nicht möchten, dass Ihr Text weiterbearbeitet und weiterverbreitet wird, dann speichern Sie ihn nicht.
Falls Sie den Text nicht selber verfasst haben, muss er unter den [http://wikimediafoundation.org/wiki/Nutzungsbedingungen Nutzungsbedingungen] verfügbar sein und Sie stimmen zu, notwendigen Lizenzanforderungen zu folgen.',
);

/** Zazaki (Zazaki)
 * @author Aspar
 * @author Mirzali
 * @author Xoser
 */
$messages['diq'] = array(
	'wikimediamessages-desc' => 'mesajê xususi yê wikimedyayi',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/tr',
	'sitesupport' => 'Bexşi',
	'tooltip-n-sitesupport' => 'paşt bıde ma',
	'specialpages-group-contribution' => 'Beğş/Peredaoğ',
	'group-abusefilter' => 'serkarê filtreyê suistimali',
	'group-accountcreator' => 'vıraştoxê hesabi',
	'group-arbcom' => 'Ezayanê komiteyê arbitasyon',
	'group-autopatrolled' => 'Oto-kontroloğî',
	'group-autoreviewer' => 'oto-rexnekeri',
	'group-bigexport' => 'ixracatkero gırd',
	'group-confirmed' => 'karbero tesdiq biyaye',
	'group-editprotected' => 'Nustekaranê pelanê ke kilit biyo',
	'group-filemover' => 'Berdoxê dosyayi',
	'group-flood' => 'karberê boti',
	'group-founder' => 'ronayoxi',
	'group-import' => 'kırıştoxê zerre kerdışi',
	'group-interface_editors' => 'Serkaranê interfaceyi',
	'group-ipblock-exempt' => 'muafiyetê ver-gırewtışê Ipyi',
	'group-patroller' => 'dewriyeyi',
	'group-researcher' => 'Cigeyroxan',
	'group-rollbacker' => 'açarnayoxî',
	'group-transwiki' => 'kırıştoxê zerrekerdışi ye benateyê wikiyani',
	'group-trusted' => 'Karbero emin',
	'group-abusefilter-member' => 'serkarê filtreyê suistimali',
	'group-accountcreator-member' => 'vıraştoxê hesabi',
	'group-arbcom-member' => 'ezayê komiteyê arbitasyon',
	'group-autopatrolled-member' => 'Oto-kontroloğ',
	'group-autoreviewer-member' => 'oto-rexneker',
	'group-bigexport-member' => 'ixracatkero gırd',
	'group-confirmed-member' => 'karbero tesdiq biyaye',
	'group-editprotected-member' => 'nustekaranê pelanê ke kilit biyo',
	'group-filemover-member' => 'dosya berdox',
	'group-flood-member' => 'karberê boti',
	'group-founder-member' => 'ronayox',
	'group-import-member' => 'kırıştoxê zerre kerdışi',
	'group-interface_editors-member' => 'serkarê interfaceyi',
	'group-ipblock-exempt-member' => "mu'afiyetê ver-gırewtışê IPyi",
	'group-patroller-member' => 'dewriye',
	'group-researcher-member' => 'cigeyrox',
	'group-rollbacker-member' => 'açarnayox',
	'group-transwiki-member' => 'kırıştoxê zerrekerdışi yo benateyê wikiyani',
	'group-trusted-member' => 'karbero emin',
	'grouppage-abusefilter' => '{{ns:project}}:serkarê filtreyê suitimali',
	'grouppage-accountcreator' => '{{ns:project}}:vıraştoxê hesabi',
	'grouppage-arbcom' => '{{ns:project}}:Ezayanê komiteyê arbitasyon',
	'grouppage-autopatrolled' => '{{ns:project}}:Oto-kontroloğ',
	'grouppage-autoreviewer' => '{{ns:project}}:Oto-rexneker',
	'grouppage-bigexport' => '{{ns:project}}:ixracatkero gırd',
	'grouppage-confirmed' => '{{ns:project}}:karbero tesdiq biyayeyi',
	'grouppage-editprotected' => '{{ns:project}}:Nustekaranê pelanê ke kilit biyo',
	'grouppage-filemover' => '{{ns:project}}:Berdoxê dosyayi',
	'grouppage-flood' => '{{ns:project}}:karberê boti',
	'grouppage-founder' => '{{ns:project}}:ronayoxi',
	'grouppage-import' => '{{ns:project}}:kırıştoxê zerre kerdışi',
	'grouppage-interface_editors' => '{{ns:project}}:Serkaranê interfaceyi',
	'grouppage-ipblock-exempt' => '{{ns:project}}:muafiyetê ver-gırewtışê IPyi',
	'grouppage-researcher' => '{{ns:project}}:Cigeyroxan',
	'grouppage-rollbacker' => '{{ns:project}}:açarnayoxi',
	'grouppage-transwiki' => '{{ns:project}}:kırıştoxê zerrekerdışi yê benateyê wikiyani',
	'grouppage-trusted' => '{{ns:project}}:Karbero emin',
	'group-steward' => 'serkari/kehyayi',
	'group-sysadmin' => 'serkarê sistemi',
	'group-editinterface' => 'serkarê interfaceyi',
	'group-Global_bot' => 'botê globali',
	'group-Global_rollback' => 'açarnayoxê globali',
	'group-Global_sysops' => 'Sysopanê globali',
	'group-Ombudsmen' => 'hekemê xoseri',
	'group-Staff' => 'wezifedari',
	'group-steward-member' => 'serkar/kehya',
	'group-sysadmin-member' => 'serkarê sistemi',
	'group-editinterface-member' => 'serkarê interfaceyi',
	'group-Global_bot-member' => 'botê globali',
	'group-Global_rollback-member' => 'açarnayoxê globali',
	'group-Global_sysops-member' => 'sysopê globali',
	'group-Ombudsmen-member' => 'hakemo xoser',
	'group-Staff-member' => 'wezifedar',
	'group-coder' => 'kod kerdoxi',
	'group-coder-member' => 'kod kerdox',
	'group-inactive' => 'karber ê ke aktif niyê',
	'group-inactive-member' => 'karber o ke aktif niyo',
	'grouppage-inactive' => '{{ns:project}}:karber ê ke aktif niyê',
	'wikimedia-copyright' => 'nuşte, bınê ıney <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/lisansê share-Alikeyi</a> de yo; şertê bini tetbiq beni. qey teferru\'ati bıewnê <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">şertê karkerdışi</a>na.',
	'wikimedia-copyrightwarning' => 'eke şıma pel qeyd bıkeri mışoreyê şıma pê [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] u [http://www.gnu.org/copyleft/fdl.html GFDL]yi lisans biyaye hesibiyeno u mışoreyê şıma tepiya nêçariyeno. Karberê bini zi eşkeni mışoreyê şıma re pê gıreyê url bıresi u eşkeni cewab bıde şıma. qey teferruati bıewnê: [http://wikimediafoundation.org/wiki/ Kullanım Koşullarına].',
	'wikimedia-editpage-tos-summary' => 'eke şıma qayil niyê nuşteyê şıma bıvuriyo ya zi vıla nêbiyo tiya ra meşawê.
eke no metn şıma nênuşto, bınusê u nuştış de şıma gani[http://wikimediafoundation.org/wiki/Terms_of_Use şertê karkerdışi] re diqqet bıkeri.',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Michawiki
 * @author Pe7er
 * @author Qualia
 */
$messages['dsb'] = array(
	'wikimediamessages-desc' => 'Zdźělenja specifiske za Wikimediju',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/dsb',
	'sitesupport' => 'Dary',
	'tooltip-n-sitesupport' => 'Pódpěraj nas',
	'specialpages-group-contribution' => 'Pśinoski/Pósćiwańska akcija',
	'group-abusefilter' => 'Wobźěłarje znjewužywańskego filtra',
	'group-accountcreator' => 'Kontowe załožarje',
	'group-arbcom' => 'Cłonki wujadnarskeje komisije',
	'group-autopatrolled' => 'Awtomatiske doglědowarje',
	'group-autoreviewer' => 'Awtomatiske kontrolery',
	'group-bigexport' => 'Wjelikoeksportery',
	'group-confirmed' => 'Wobkšuśone wužywarje',
	'group-editprotected' => 'Wobźěłarje šćitanych bokow',
	'group-filemover' => 'Pśesuwarje datajow',
	'group-flood' => 'Botowe wužywarje',
	'group-founder' => 'Załožarje',
	'group-import' => 'Importery',
	'group-interface_editors' => 'Wobźěłarje wužywarskego pówjercha',
	'group-ipblock-exempt' => 'Wuwześe z blokěrowanja IP',
	'group-patroller' => 'Doglědowarje',
	'group-researcher' => 'Rešeršěrowarje',
	'group-rollbacker' => 'Slědkstajarje',
	'group-transwiki' => 'Transwiki importery',
	'group-trusted' => 'Dowěry gódne wužywarje',
	'group-abusefilter-member' => 'Wobźěłaŕ znjewužywańskego filtra',
	'group-accountcreator-member' => 'kontowy załožaŕ',
	'group-arbcom-member' => 'Cłonk wujadnarskeje komisije',
	'group-autopatrolled-member' => 'awtomatiski doglědowaŕ',
	'group-autoreviewer-member' => 'awtomatiski kontroler',
	'group-bigexport-member' => 'wjelikoeksporter',
	'group-confirmed-member' => 'wobkšuśony wužywaŕ',
	'group-editprotected-member' => 'wobźěłaŕ šćitanych bokow',
	'group-filemover-member' => 'pśesuwaŕ datajow',
	'group-flood-member' => 'botowe wužywarje',
	'group-founder-member' => 'załožaŕ',
	'group-import-member' => 'importer',
	'group-interface_editors-member' => 'Wobźěłaŕ wužywarskego pówjercha',
	'group-ipblock-exempt-member' => 'Z blokěrowanja IP wuwzety',
	'group-patroller-member' => 'doglědowaŕ',
	'group-researcher-member' => 'rešěršowaŕ',
	'group-rollbacker-member' => 'slědkstajaŕ',
	'group-transwiki-member' => 'transwiki importer',
	'group-trusted-member' => 'dowěry gódny wužywaŕ',
	'grouppage-abusefilter' => '{{ns:project}}:Wobźěłarje znjewužywańskego filtra',
	'grouppage-accountcreator' => '{{ns:project}}:Kontowe załožarje',
	'grouppage-arbcom' => '{{ns:project}}:Cłonki wujadnarskeje komisije',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatiske doglědowarje',
	'grouppage-autoreviewer' => '{{ns:project}}:Awotomatiske kontrolery',
	'grouppage-bigexport' => '{{ns:project}}:Wjelikoeksportery',
	'grouppage-confirmed' => '{{ns:project}}:Wobkšuśone wužywarje',
	'grouppage-editprotected' => '{{ns:project}}:Wobźěłarje šćitanych bokow',
	'grouppage-filemover' => '{{ns:project}}:Pśesuwarje datajow',
	'grouppage-flood' => '{{ns:project}}:Botowe wužywarje',
	'grouppage-founder' => '{{ns:project}}:Załožarje',
	'grouppage-import' => '{{ns:project}}:Importery',
	'grouppage-interface_editors' => '{{ns:project}}:Wobźěłarje wužywarskego pówjercha',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Wuwześe z blokěrowanja IP',
	'grouppage-researcher' => '{{ns:project}}:Rešeršowarje',
	'grouppage-rollbacker' => '{{ns:project}}:Slědkstajarje',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importery',
	'grouppage-trusted' => '{{ns:project}}:Dowěry gódne wužywarje',
	'group-steward' => 'Stewardy',
	'group-sysadmin' => 'Systemowe administratory',
	'group-editinterface' => 'Wužywarski pówjerch wobźěłaś',
	'group-Global_bot' => 'Globalne bośiki',
	'group-Global_rollback' => 'Globalne slědkstajarje',
	'group-Global_sysops' => 'Globalne administratory',
	'group-Ombudsmen' => 'Ombudsniki',
	'group-Staff' => 'Sobuźěłaśerje',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'systemowy administrator',
	'group-editinterface-member' => 'wužywarski pówjerch wobźěłaś',
	'group-Global_bot-member' => 'göobalny bośik',
	'group-Global_rollback-member' => 'globalny slědkstajaŕ',
	'group-Global_sysops-member' => 'globalny admibnistrator',
	'group-Ombudsmen-member' => 'Ombudsnik',
	'group-Staff-member' => 'sobuźěłaśerje',
	'group-coder' => 'Programěrarje',
	'group-coder-member' => 'programěraŕ',
	'group-inactive' => 'Njeaktiwne wužywarje',
	'group-inactive-member' => 'njeaktiwny wužywaŕ',
	'grouppage-inactive' => '{{ns:project}}:Njeaktiwne wužywarje',
	'wikimedia-copyright' => 'Tekst stoj pód <a href="http://creativecommons.org/licenses/by-sa/3.0/">licencu Creative Commons Attribution/Share-Alike</a> k dispoziciji; pśidatne wuměnjenja mógu se nałožowaś. Glědaj <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Wužywańske wuměnjenja</a> za drobnostki.',
	'wikimedia-copyrightwarning' => 'Ze składowanim definitiwnje stajiš swój pśinosk pód [http://creativecommons.org/licenses/by-sa/3.0/ licencu Creative Commons Attribution/Share-Alike 3.0] a [http://www.gnu.org/copyleft/fdl.html GFDL].
Sy wobjadny, až dalšne wužywarje bok, kótaryž sy pśinosował, nanejmjenjej pśez wótkaz abo URL pśipóznawaju.
Glědaj [http://wikimediafoundation.org/wiki/Terms_of_Use wužywańske wuměnjenja] za drobnostki.',
	'wikimedia-editpage-tos-summary' => 'Jolic njocoš, až se twój tekst wobźěłujo a rozdźělujo pó dobrozdaśu, njewózjaw jen how.
Jolic njejsy to sam spisał, musy pód wuměnjenjami k dispoziciji staś, kótarež makaju se z [http://wikimediafoundation.org/wiki/Terms_of_Use wužywańskimi wuměnjenjami], a pśigłosujoš se wótpowědnych licencnych pominanjow źaržaś.',
);

/** Divehi (ދިވެހިބަސް) */
$messages['dv'] = array(
	'sitesupport' => 'ޚައިރާތުތައް',
);

/** Dzongkha (ཇོང་ཁ)
 * @author Tenzin
 */
$messages['dz'] = array(
	'sitesupport' => 'ཕན་འདེབས།',
	'tooltip-n-sitesupport' => 'ང་བཅས་ལུ་རྒྱབ་སྐྱོར་འབད།',
);

/** Ewe (Eʋegbe)
 * @author Natsubee
 */
$messages['ee'] = array(
	'sitesupport' => 'Wɔ nunana',
	'tooltip-n-sitesupport' => 'Kpe ɖe mía ŋu',
	'group-accountcreator' => 'Ŋkɔ ŋlɔlawo',
	'group-founder' => 'Eɖolawo',
	'group-accountcreator-member' => 'ŋkɔ ŋlɔla',
	'wikimedia-editpage-tos-summary' => 'Ne wò me di bena woa trɔ wò nuŋlɔŋlɔwo alo woa ma wo fãa o la, megaŋlɔe ɖe afisia o.<br />
Ne menye wò ŋutɔ ye ŋlɔ nusiawo o la, ekema ele be mɔɖeɖewo si ku ɖe woŋu ne sɔ kple [http://wikimediafoundation.org/wiki/Terms_of_Use Mɔɖeɖewo], eye wò lɔ̃ bena yeawɔ se siwo katã ku ɖe woŋu la dzi.',
);

/** Greek (Ελληνικά)
 * @author Badseed
 * @author Consta
 * @author Crazymadlover
 * @author Dead3y3
 * @author Geraki
 * @author Lou
 * @author Omnipaedista
 * @author ZaDiak
 * @author Απεργός
 */
$messages['el'] = array(
	'wikimediamessages-desc' => 'Μηνύματα ειδικά για το Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/el',
	'sitesupport' => 'Δωρεές',
	'tooltip-n-sitesupport' => 'Υποστηρίξτε μας',
	'specialpages-group-contribution' => 'Συνεισφορές/Έρανος',
	'group-abusefilter' => 'Τροποποιητές φίλτρων καταχρήσεων',
	'group-accountcreator' => 'Δημιουργοί λογαριασμών',
	'group-arbcom' => 'Μέλη της επιτροπής διαιτησίας',
	'group-autopatrolled' => 'Αυτοεπιτηρητές',
	'group-autoreviewer' => 'Αυτοελεγκτές',
	'group-bigexport' => 'Μεγάλοι εξαγωγείς',
	'group-confirmed' => 'Eπιβεβαιωμένοι χρήστες',
	'group-flood' => 'Χρήστες bot',
	'group-founder' => 'Ιδρυτές',
	'group-import' => 'Εισαγωγείς',
	'group-interface_editors' => 'Επεξεργαστές της διεπαφής',
	'group-ipblock-exempt' => 'Απαλλαγές από φραγή IP',
	'group-patroller' => 'Περιπολητές',
	'group-rollbacker' => 'Αναιρέτες',
	'group-transwiki' => 'Εισαγωγείς Transwiki',
	'group-trusted' => 'Έμπιστοι χρήστες',
	'group-abusefilter-member' => 'τροποποιητής φίλτρων καταχρήσεων',
	'group-accountcreator-member' => 'δημιουργός λογαριασμού',
	'group-arbcom-member' => 'μέλος της επιτροπής διαιτησίας',
	'group-autopatrolled-member' => 'αυτόματη περίπολος',
	'group-autoreviewer-member' => 'αυτοελεγκτής',
	'group-bigexport-member' => 'Μεγάλος εξαγωγέας',
	'group-confirmed-member' => 'επιβεβαιωμένος χρήστης',
	'group-flood-member' => 'χρήστης bot',
	'group-founder-member' => 'Ιδρυτής',
	'group-import-member' => 'εισαγωγέας',
	'group-interface_editors-member' => 'επεξεργαστής της διεπαφής',
	'group-ipblock-exempt-member' => 'Απαλλαγή από φραγή IP',
	'group-patroller-member' => 'περιπολητής',
	'group-rollbacker-member' => 'αναιρέτης',
	'group-transwiki-member' => 'εισαγωγέας transwiki',
	'group-trusted-member' => 'έμπιστος χρήστης',
	'grouppage-abusefilter' => '{{ns:project}}:Τροποποιητές φίλτρων καταχρήσεων',
	'grouppage-accountcreator' => '{{ns:project}}:Δημιουργοί λογαριασμών',
	'grouppage-arbcom' => '{{ns:project}}:Μέλη της επιτροπής διαιτησίας',
	'grouppage-autopatrolled' => '{{ns:project}}:Αυτόματοι περίπολοι',
	'grouppage-autoreviewer' => '{{ns:project}}:Αυτοελεγκτές',
	'grouppage-bigexport' => '{{ns:project}}:Μεγάλοι εξαγωγείς',
	'grouppage-confirmed' => '{{ns:project}}:Επιβεβαιωμένοι χρήστες',
	'grouppage-flood' => '{{ns:project}}:Χρήστες bot',
	'grouppage-founder' => '{{ns:project}}:Ιδρυτές',
	'grouppage-import' => '{{ns:project}}:Εισαγωγείς',
	'grouppage-interface_editors' => '{{ns:project}}:Επεξεργαστές της διεπαφής',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Προνόμια αποκλεισμού των IP',
	'grouppage-rollbacker' => '{{ns:project}}:Αναιρέτες',
	'grouppage-transwiki' => '{{ns:project}}:Εισαγωγείς Transwiki',
	'grouppage-trusted' => '{{ns:project}}:Έμπιστοι χρήστες',
	'group-steward' => 'Επίτροποι',
	'group-sysadmin' => 'Διαχειριστές συστήματος',
	'group-editinterface' => 'Επεξεργασία της διεπαφής',
	'group-Global_bot' => 'Καθολικά bots',
	'group-Global_rollback' => 'Καθολικοί rollbackers',
	'group-Ombudsmen' => 'Συνήγοροι του πολίτη',
	'group-Staff' => 'Προσωπικό',
	'group-steward-member' => 'επίτροπος',
	'group-sysadmin-member' => 'διαχειριστής συστήματος',
	'group-editinterface-member' => 'επεξεργασία της διεπαφής',
	'group-Global_bot-member' => 'καθολικό bot',
	'group-Global_rollback-member' => 'καθολικός rollbacker',
	'group-Ombudsmen-member' => 'συνήγορος του πολίτη',
	'group-Staff-member' => 'Μέλος προσωπικού',
	'group-coder' => 'Κωδικογράφοι',
	'group-coder-member' => 'κωδικογράφος',
	'group-inactive' => 'Ανενεργοί χρήστες',
	'group-inactive-member' => 'Ανενεργός χρήστης',
	'grouppage-inactive' => '{{ns:project}}:Ανενεργοί χρήστες',
	'wikimedia-copyright' => 'Όλα τα κείμενα είναι διαθέσιμα υπό την <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.el">Creative Commons Attribution/Share-Alike License</a>· μπορεί να ισχύουν και πρόσθετοι όροι. Δείτε τους <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Όρους Χρήσης</a> για λεπτομέρειες.',
	'wikimedia-copyrightwarning' => "Αποθηκεύοντας, συμφωνείτε χωρίς δικαίωμα ανάκλησης την δημοσίευση του υλικού υπό τους όρους της [http://creativecommons.org/licenses/by-sa/3.0/deed.el Creative Commons Attribution/Share-Alike License 3.0] και της [http://www.gnu.org/copyleft/fdl.html GFDL]. Συμφωνείτε να σας αποδίδεται η πατρότητα από τρίτους χρήστες, κατ'ελάχιστο, μέσω ενός υπερσύνδεσμου ή URL προς την σελίδα στην οποία συνεισφέρετε. Δείτε τους [http://wikimediafoundation.org/wiki/Terms_of_Use Όρους Χρήσης] για λεπτομέρειες.",
	'wikimedia-editpage-tos-summary' => 'Αν δεν θέλετε το κείμενό σας να υποστεί επεξεργασία και να αναδιανεμηθεί κατά βούληση, τότε μην το καταχωρείτε εδώ. Αν δεν το γράψατε ο ίδιος, τότε πρέπει να είναι διαθέσιμο υπό όρους σύμφωνους με τους [http://wikimediafoundation.org/wiki/Terms_of_Use Όρους Χρήσης], και συμφωνείτε να ακολουθήσετε οποιεσδήποτε απαιτήσεις αδειοδότησης.',
);

/** Emiliano-Romagnolo (Emiliàn e rumagnòl) */
$messages['eml'] = array(
	'sitesupport' => 'Donaziòun',
);

/** Esperanto (Esperanto)
 * @author Airon90
 * @author Marcos
 * @author Michawiki
 * @author Petrus Adamus
 * @author Tlustulimu
 * @author Yekrats
 * @author Ziko
 */
$messages['eo'] = array(
	'wikimediamessages-desc' => 'Specifaj mesaĝoj de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Monkolektado',
	'sitesupport' => 'Donaci',
	'tooltip-n-sitesupport' => 'Subteni nin per mono',
	'specialpages-group-contribution' => 'Kontribuoj/Monkolekto',
	'group-abusefilter' => 'Redaktantoj de misuzadaj filtriloj',
	'group-accountcreator' => 'Kreintoj de kontoj',
	'group-arbcom' => 'Komitatano de arbitracia komitato',
	'group-autopatrolled' => 'Aŭtomataj patrolantoj',
	'group-autoreviewer' => 'Aŭtomataj kontrolantoj',
	'group-bigexport' => 'Grandaj eksportantoj',
	'group-confirmed' => 'Konfirmitaj uzantoj',
	'group-editprotected' => 'Redaktantoj de protektitaj paĝoj',
	'group-filemover' => 'Dosieraj movantoj',
	'group-flood' => 'Robot-uzantoj',
	'group-founder' => 'Fondintoj',
	'group-import' => 'Importantoj',
	'group-interface_editors' => 'Interfacaj redaktantoj',
	'group-ipblock-exempt' => 'Sendevigoj por IP-forbaroj',
	'group-patroller' => 'Patrolantoj',
	'group-researcher' => 'Esplorantoj de forigitaĵoj',
	'group-rollbacker' => 'Restarigantoj',
	'group-transwiki' => 'Importintoj de Transvikio',
	'group-trusted' => 'Fidelaj uzantoj',
	'group-abusefilter-member' => 'redaktanto de misuzadaj filtriloj',
	'group-accountcreator-member' => 'Kreinto de konto',
	'group-arbcom-member' => 'komitatano de arbitracia komitato',
	'group-autopatrolled-member' => 'Aŭtomata patrolanto',
	'group-autoreviewer-member' => 'aŭtomata kontrolanto',
	'group-bigexport-member' => 'granda eksportanto',
	'group-confirmed-member' => 'konfirmita uzanto',
	'group-editprotected-member' => 'redaktanto de protektitaj paĝoj',
	'group-filemover-member' => 'dosiera movanto',
	'group-flood-member' => 'robot-uzantoj',
	'group-founder-member' => 'Fondinto',
	'group-import-member' => 'Importanto',
	'group-interface_editors-member' => 'interfaca redaktanto',
	'group-ipblock-exempt-member' => 'maldeviga de IP-forbaro',
	'group-patroller-member' => 'Patrolanto',
	'group-researcher-member' => 'esploranto de forigitaĵoj',
	'group-rollbacker-member' => 'Restariganto',
	'group-transwiki-member' => 'Transvikia importanto',
	'group-trusted-member' => 'fidela uzanto',
	'grouppage-abusefilter' => '{{ns:project}}:Redaktantoj de misuzadaj filtriloj',
	'grouppage-accountcreator' => '{{ns:project}}:Kreintoj de kontoj',
	'grouppage-arbcom' => '{{ns:project}}:Komitatantoj de arbitracia komitato',
	'grouppage-autopatrolled' => '{{ns:project}}:Aŭtomataj patrolantoj',
	'grouppage-autoreviewer' => '{{ns:project}}:Aŭtomataj kontrolantoj',
	'grouppage-bigexport' => '{{ns:project}}:Grandaj eksportantoj',
	'grouppage-confirmed' => '{{ns:project}}:Konfirmitaj uzantoj',
	'grouppage-editprotected' => '{{ns:project}}:Redaktantoj de protektitaj paĝoj',
	'grouppage-filemover' => '{{ns:project}}:Dosieraj movantoj',
	'grouppage-flood' => '{{ns:project}}:Robot-uzantoj',
	'grouppage-founder' => '{{ns:project}}:Fondintoj',
	'grouppage-import' => '{{ns:project}}:Importantoj',
	'grouppage-interface_editors' => '{{ns:project}}:Interfacaj redaktantoj',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Sendevigo por IP-forbaro',
	'grouppage-researcher' => '{{ns:project}}:Esploranto de forigitaĵoj',
	'grouppage-rollbacker' => '{{ns:project}}:Restarigantoj',
	'grouppage-transwiki' => '{{ns:project}}:Transvikiaj importantoj',
	'grouppage-trusted' => '{{ns:project}}:Fidelaj uzantoj',
	'group-steward' => 'Stevardoj',
	'group-sysadmin' => 'Sistemaj administrantoj',
	'group-editinterface' => 'Redakti interfacon',
	'group-Global_bot' => 'Ĝeneralaj robotoj',
	'group-Global_rollback' => 'Transvikia restariganto',
	'group-Global_sysops' => 'Ĝeneralaj administrantoj',
	'group-Ombudsmen' => 'Arbitraciistoj',
	'group-Staff' => 'Dungitaro',
	'group-steward-member' => 'Stevardo',
	'group-sysadmin-member' => 'sistema administranto',
	'group-editinterface-member' => 'redakti interfacon',
	'group-Global_bot-member' => 'Ĝenerala roboto',
	'group-Global_rollback-member' => 'transvikia restariganto',
	'group-Global_sysops-member' => 'ĝenerala administranto',
	'group-Ombudsmen-member' => 'Arbitraciisto',
	'group-Staff-member' => 'dungito',
	'group-coder' => 'Programistoj',
	'group-coder-member' => 'programisto',
	'group-inactive' => 'Neaktivaj uzantoj',
	'group-inactive-member' => 'neaktiva uzanto',
	'grouppage-inactive' => '{{ns:project}}:Neaktivaj uzantoj',
	'wikimedia-copyright' => 'La teksto disponeblas laŭ la permesilo <a href="http://creativecommons.org/licenses/by-sa/3.0/">Krea Komunaĵo Atribuite-Samkondiĉe 3.0 Neadaptita</a>; eble aldonaj rajtigoj aplikeblas.
Vidu la <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">uzkondiĉojn</a> por detaloj.',
	'wikimedia-copyrightwarning' => 'Konservante, vi konsentas senlime eldoni vian kontribuon laŭ la [http://creativecommons.org/licenses/by-sa/3.0/ Permesilo Creative Commons Attribution-ShareAlike 3.0] kaj la [http://www.gnu.org/copyleft/fdl.html GFDL]. 
Vi konsentas ke reuzantoj atribuas al vi almenaŭ per ligilo aŭ URL al la paĝo kontribuita. Vidu la [http://wikimediafoundation.org/wiki/Terms_of_Use Rajtojn de Uzado] por detaloj.',
	'wikimedia-editpage-tos-summary' => 'Se vi ne volas ke via verko estu redaktata kaj redistribuata laŭvole, tiam ne enigu ĝin ĉi tie. Se vi ne verkis ĝin mem, ĝi devas esti havebla kun rajtoj kiuj ne kontraŭas al la [http://wikimediafoundation.org/wiki/Terms_of_Use Kondiĉoj de Uzado], kaj vi konsentas sekvi ĉiujn ĉi-temajn permesilajn devigojn.',
);

/** Spanish (Español)
 * @author AlimanRuna
 * @author Ascánder
 * @author Crazymadlover
 * @author Dferg
 * @author Locos epraix
 * @author Manuelt15
 * @author Platonides
 * @author Sanbec
 * @author Translationista
 */
$messages['es'] = array(
	'wikimediamessages-desc' => 'Mensajes específicos de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donaciones',
	'sitesupport' => 'Donaciones',
	'tooltip-n-sitesupport' => 'Apóyenos',
	'specialpages-group-contribution' => 'Contribuciones/Recaudador de fondos',
	'group-abusefilter' => 'Editores de filtro de abuso',
	'group-accountcreator' => 'Creadores de cuentas',
	'group-arbcom' => 'Miembros del comité de arbitraje',
	'group-autopatrolled' => 'Autopatrulleros',
	'group-autoreviewer' => 'Autorrevisores',
	'group-bigexport' => 'Grandes exportadores',
	'group-confirmed' => 'Usuarios confirmados',
	'group-editprotected' => 'Editores de prensa',
	'group-filemover' => 'Desplazadores de archivos',
	'group-flood' => 'Usuarios bot',
	'group-founder' => 'Fundadores',
	'group-import' => 'Importadores',
	'group-interface_editors' => 'Editores de la interfaz',
	'group-ipblock-exempt' => 'Exentos de bloqueo a IP',
	'group-patroller' => 'Patrulleros',
	'group-researcher' => 'Investigadores',
	'group-rollbacker' => 'Reversores',
	'group-transwiki' => 'Importadores transwiki',
	'group-trusted' => 'Usuarios confiables',
	'group-abusefilter-member' => 'Editor de filtro de abuso',
	'group-accountcreator-member' => 'Creador de cuentas',
	'group-arbcom-member' => 'miembro del comité de arbitraje',
	'group-autopatrolled-member' => 'autopatrullero',
	'group-autoreviewer-member' => 'autorrevisor',
	'group-bigexport-member' => 'gran exportador',
	'group-confirmed-member' => 'Usuario confirmado',
	'group-editprotected-member' => 'editor de página protegida',
	'group-filemover-member' => 'desplazador de archivos',
	'group-flood-member' => 'usuario de bot',
	'group-founder-member' => 'Fundador',
	'group-import-member' => 'Importador',
	'group-interface_editors-member' => 'editor de la interfaz',
	'group-ipblock-exempt-member' => 'Exento de bloqueo IP',
	'group-patroller-member' => 'patrulleros',
	'group-researcher-member' => 'investigador',
	'group-rollbacker-member' => 'Reversor',
	'group-transwiki-member' => 'Importador transwiki',
	'group-trusted-member' => 'usuario confiable',
	'grouppage-abusefilter' => '{{ns:project}}:Editores de filtro de abuso',
	'grouppage-accountcreator' => '{{ns:project}}:Creadores de cuentas',
	'grouppage-arbcom' => '{{ns:project}}:Miembros del comité de arbitraje',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrulleros',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorrevisores',
	'grouppage-bigexport' => '{{ns:project}}:Grandes exportadores',
	'grouppage-confirmed' => '{{ns:project}}:Usuarios confirmados',
	'grouppage-editprotected' => '{{ns:project}}:Editores de prensa',
	'grouppage-filemover' => '{{ns:project}}:Desplazador de archivos',
	'grouppage-flood' => '{{ns:project}}:Usuarios bot',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'grouppage-interface_editors' => '{{ns:project}}: Editores de la interfaz',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exento de bloqueo a IP',
	'grouppage-researcher' => '{{ns:project}}:Investigador',
	'grouppage-rollbacker' => '{{ns:project}}:Reversores',
	'grouppage-transwiki' => '{{ns:project}}:Importadores transwiki',
	'grouppage-trusted' => '{{ns:project}}:Usuarios confiables',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Administradores del sistema',
	'group-editinterface' => 'Editores de interfaz',
	'group-Global_bot' => 'bots globales',
	'group-Global_rollback' => 'Reversores globales',
	'group-Global_sysops' => 'Administradores globales',
	'group-Ombudsmen' => 'Defensores de la comunidad',
	'group-Staff' => 'Staff',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrador del sistema',
	'group-editinterface-member' => 'editor de interfaz',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'reversor global',
	'group-Global_sysops-member' => 'administrador global',
	'group-Ombudsmen-member' => 'defensor de la comunidad',
	'group-Staff-member' => 'miembro del staff',
	'group-coder' => 'Programadores',
	'group-coder-member' => 'programador',
	'group-inactive' => 'Usuarios inactivos',
	'group-inactive-member' => 'usuario inactivo',
	'grouppage-inactive' => '{{ns:project}}:Usuarios inactivos',
	'wikimedia-copyright' => 'El texto está disponible bajo la <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.es">Licencia Creative Commons Atribución/Compartir-Igual 3.0</a>;
cláusulas adicionales pueden aplicar.
Véase <a href="http://wikimediafoundation.org/wiki/Términos_de_Uso">los términos de uso</a> para más detalles.',
	'wikimedia-copyrightwarning' => 'Guardando el texto, acepta ceder de manera irrevocable sus contribuciones bajo la [http://creativecommons.org/licenses/by-sa/3.0/deed.es Licencia Creative Commons Atribución/Compartir-Igual 3.0] y la [http://www.gnu.org/copyleft/fdl.html licencia GFDL].
Usted acepta a ser citado, como mínimo, por medio de un hipervínculo o URL a la página donde ha contribuido.
Véase los [http://wikimediafoundation.org/wiki/Términos_de_Uso términos de uso] para más detalles.',
	'wikimedia-editpage-tos-summary' => 'Si no desea que sus escritos sean editados y redistribuidos a voluntad, entonces no los guarde aquí.
Si usted no escribió el texto, este debe estar disponible bajo las condiciones especificadas en los [http://wikimediafoundation.org/wiki/Términos_de_Uso términos de uso], y usted acepta seguir cualquier requerimiento relacionado a las licencias.',
);

/** Estonian (Eesti)
 * @author Avjoska
 * @author KalmerE.
 * @author Ker
 * @author Pikne
 * @author WikedKentaur
 */
$messages['et'] = array(
	'wikimediamessages-desc' => 'Wikimedia-eriomased teated',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Annetused',
	'sitesupport' => 'Annetused',
	'tooltip-n-sitesupport' => 'Toeta meid',
	'specialpages-group-contribution' => 'Annetamine / korjandused',
	'group-abusefilter' => 'Väärtarvituse filtri muutjad',
	'group-accountcreator' => 'Kontoloojad',
	'group-arbcom' => 'Vahekohtu liikmed',
	'group-autopatrolled' => 'Automaatkontrollijad',
	'group-autoreviewer' => 'Automaatsed arvustajad',
	'group-bigexport' => 'Suureksportijad',
	'group-confirmed' => 'Kinnitatud kasutajad',
	'group-editprotected' => 'Kaitstud lehekülje toimetajad',
	'group-flood' => 'Robotkasutajad',
	'group-founder' => 'Asutajad',
	'group-import' => 'Importijad',
	'group-interface_editors' => 'Liidese muutjad',
	'group-ipblock-exempt' => 'IP-aadressi blokeerimise erandid',
	'group-patroller' => 'Kontrollijad',
	'group-rollbacker' => 'Tühistajad',
	'group-transwiki' => 'Teisest vikist importijad',
	'group-trusted' => 'Usaldusväärsed kasutajad',
	'group-abusefilter-member' => 'väärtarvituse filtri muutja',
	'group-accountcreator-member' => 'kontolooja',
	'group-arbcom-member' => 'vahekohtu liige',
	'group-autopatrolled-member' => 'automaatkontrollija',
	'group-autoreviewer-member' => 'automaatne arvustaja',
	'group-bigexport-member' => 'suureksportija',
	'group-confirmed-member' => 'kinnitatud kasutaja',
	'group-editprotected-member' => 'kaitstud lehekülje toimetaja',
	'group-flood-member' => 'robotkasutaja',
	'group-founder-member' => 'asutaja',
	'group-import-member' => 'importija',
	'group-interface_editors-member' => 'liidese muutja',
	'group-ipblock-exempt-member' => 'IP-aadressi blokeerimise erand',
	'group-patroller-member' => 'kontrollija',
	'group-rollbacker-member' => 'tühistaja',
	'group-transwiki-member' => 'teisest vikist importija',
	'group-trusted-member' => 'usaldusväärne kasutaja',
	'grouppage-abusefilter' => '{{ns:project}}:Väärtarvituse filtri muutjad',
	'grouppage-accountcreator' => '{{ns:project}}:Kontoloojad',
	'grouppage-arbcom' => '{{ns:project}}:Vahekohtu liikmed',
	'grouppage-autopatrolled' => '{{ns:project}}:Automaatkontrollijad',
	'grouppage-autoreviewer' => '{{ns:project}}:Automaatsed arvustajad',
	'grouppage-bigexport' => '{{ns:project}}:Suureksportijad',
	'grouppage-confirmed' => '{{ns:project}}:Kinnitatud kasutajad',
	'grouppage-editprotected' => '{{ns:project}}:Kaitstud lehekülje toimetajad',
	'grouppage-flood' => '{{ns:project}}:Robotkasutajad',
	'grouppage-founder' => '{{ns:project}}:Asutajad',
	'grouppage-import' => '{{ns:project}}:Importijad',
	'grouppage-interface_editors' => '{{ns:project}}:Liidese muutjad',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-aadressi blokeerimise erandid',
	'grouppage-rollbacker' => '{{ns:project}}:Tühistajad',
	'grouppage-transwiki' => '{{ns:project}}:Teisest vikist importijad',
	'grouppage-trusted' => '{{ns:project}}:Usaldusväärsed kasutajad',
	'group-steward' => 'Stjuuardid',
	'group-sysadmin' => 'Süsteemiülemad',
	'group-editinterface' => 'Liidese muutjad',
	'group-Global_bot' => 'Globaalsed robotid',
	'group-Global_rollback' => 'Globaalsed tühistajad',
	'group-Global_sysops' => 'Globaalsed administraatorid',
	'group-Ombudsmen' => 'Õigusvahemehed',
	'group-Staff' => 'Koosseis',
	'group-steward-member' => 'stjuuard',
	'group-sysadmin-member' => 'süsteemiülem',
	'group-editinterface-member' => 'liidese muutja',
	'group-Global_bot-member' => 'globaalne robot',
	'group-Global_rollback-member' => 'globaalne tühistaja',
	'group-Global_sysops-member' => 'globaalne administraator',
	'group-Ombudsmen-member' => 'õigusvahemees',
	'group-Staff-member' => 'koosseisu liige',
	'group-coder' => 'Programmeerijad',
	'group-coder-member' => 'programmeerija',
	'group-inactive' => 'Passiivsed kasutajad',
	'group-inactive-member' => 'passiivne kasutaja',
	'grouppage-inactive' => '{{ns:project}}:Ebaaktiivsed kasutajad',
	'wikimedia-copyright' => 'Tekst on kasutatav <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a>-litsentsi tingimustel;
sellele võivad lisanduda täiendavad tingimused.
Täpsemalt vaata <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Wikimedia kasutamistingimusi</a>.',
	'wikimedia-copyrightwarning' => 'Salvestamisega annate te nõusoleku oma kaastöö pöördumatuks avaldamiseks [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0-] ning [http://www.gnu.org/copyleft/fdl.html GFDL-litsentside] alusel.
Te nõustute, et Teie autorlusele osutatakse vähemalt veebiaadressi või lingiga lehele, millele Te praegu kaastööd teete.
Täpsemalt vaadake [http://wikimediafoundation.org/wiki/Terms_of_Use Wikimedia kasutamistingimusi].',
	'wikimedia-editpage-tos-summary' => 'Kui te ei soovi, et teie kirjutatut halastamatult redigeeritakse ja oma äranägemise järgi kasutatakse, siis ärge seda siia salvestage. 
Kui Te ei kirjutanud seda teksti ise, siis peab see olema kasutatav vastavalt [http://wikimediafoundation.org/wiki/Terms_of_Use kasutustingimustes] toodud nõuetele ning te kohustute täitma vastavaid litsentsi tingimusi.',
);

/** Basque (Euskara)
 * @author An13sa
 * @author Joxemai
 * @author Theklan
 * @author Unai Fdz. de Betoño
 */
$messages['eu'] = array(
	'wikimediamessages-desc' => 'Wikimediaren mezu espezifikoak',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Dohaintzak',
	'sitesupport' => 'Dohaintzak',
	'tooltip-n-sitesupport' => 'Lagundu gaitzazu',
	'group-abusefilter' => 'Abusu-iragazkien editoreak',
	'group-accountcreator' => 'Kontu sortzailea',
	'group-arbcom' => 'Tartekaritza-taldearen kideak',
	'group-autopatrolled' => 'Autopatruilariak',
	'group-autoreviewer' => 'Aztertzaile automatikoak',
	'group-bigexport' => 'Esportatzaile handiak',
	'group-confirmed' => 'Egiaztatutako erabiltzaileak',
	'group-editprotected' => 'Babestutako orrien editoreak',
	'group-flood' => 'Bot erabiltzaileak',
	'group-founder' => 'Fundatzaileak',
	'group-import' => 'Inportatzaileak',
	'group-interface_editors' => 'Interfazeko editoreak',
	'group-ipblock-exempt' => 'IP blokeo salbuespenak',
	'group-patroller' => 'Patruilariak',
	'group-rollbacker' => 'Desegin dezakete',
	'group-transwiki' => 'Transwiki inportatzaileak',
	'group-trusted' => 'Konfiantzazko lankideak',
	'group-abusefilter-member' => 'abusu-iragazkiaren editorea',
	'group-accountcreator-member' => 'kontu sortzaileak',
	'group-arbcom-member' => 'tartekaritza-taldeko kidea',
	'group-autopatrolled-member' => 'autopatruilalaria',
	'group-autoreviewer-member' => 'aztertzaile automatikoa',
	'group-bigexport-member' => 'esportatzaile handia',
	'group-confirmed-member' => 'egiaztatutako erabiltzailea',
	'group-editprotected-member' => 'babestutako orrien editorea',
	'group-flood-member' => 'bot erabiltzaileak',
	'group-founder-member' => 'fundatzailea',
	'group-import-member' => 'inportatzailea',
	'group-interface_editors-member' => 'interfazeko editorea',
	'group-ipblock-exempt-member' => 'IP blokeo salbuespena',
	'group-patroller-member' => 'patruilaria',
	'group-rollbacker-member' => 'desegin dezake',
	'group-transwiki-member' => 'transwiki inportatzailea',
	'group-trusted-member' => 'Konfiantzazko lankidea',
	'grouppage-abusefilter' => '{{ns:project}}:Abusu-iragazkien editoreak',
	'grouppage-accountcreator' => '{{ns:project}}:Kontu sortzaileak',
	'grouppage-arbcom' => '{{ns:project}}:Tartekaritza-taldeko kideak',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatruilariak',
	'grouppage-autoreviewer' => '{{ns:project}}:Aztertzaile automatikoak',
	'grouppage-bigexport' => '{{ns:project}}:Esportatzaile handiak',
	'grouppage-confirmed' => '{{ns:project}}:Egiaztatutako erabiltzaileak',
	'grouppage-editprotected' => '{{ns:project}}:Babestutako orrien editoreak',
	'grouppage-flood' => '{{ns:project}}:Bot lankideak',
	'grouppage-founder' => '{{ns:project}}:Fundatzaileak',
	'grouppage-import' => '{{ns:project}}:Inportatzaileak',
	'grouppage-interface_editors' => '{{ns:project}}:Interfazeko editoreak',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP blokeo salbuespenak',
	'grouppage-rollbacker' => '{{ns:project}}:Desegin dezakete',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki inportatzaileak',
	'grouppage-trusted' => '{{ns:project}}:Konfiantzazko lankideak',
	'group-steward' => 'Stewardak',
	'group-sysadmin' => 'Sistemaren kudeatzaileak',
	'group-editinterface' => 'Interfazeko editoreak',
	'group-Global_bot' => 'Bot globalak',
	'group-Global_rollback' => 'Globalki desegin dezakete',
	'group-Global_sysops' => 'Administratzaile globalak',
	'group-Ombudsmen' => 'Komunitatearen babesleak',
	'group-Staff' => 'Langileak',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'sistemaren garatzaileak',
	'group-editinterface-member' => 'interfazeko editorea',
	'group-Global_bot-member' => 'bot globala',
	'group-Global_rollback-member' => 'globalki desegin dezakete',
	'group-Global_sysops-member' => 'administratzaile globala',
	'group-Ombudsmen-member' => 'komunitatearen babeslea',
	'group-Staff-member' => 'langilea',
	'group-coder' => 'Kode egileak',
	'group-coder-member' => 'kode garatzailea',
	'group-inactive' => 'Erabiltzaile ez-aktiboak',
	'group-inactive-member' => 'erabiltzaile ez-aktiboa',
	'grouppage-inactive' => '{{ns:project}}:Erabiltzaile ez-aktiboak',
	'wikimedia-copyright' => 'Testua <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.eu">Creative Commons Aitortu/Partekatu Lizentziapean</a> erabil daiteke;
klausula gehigarriak aplikatu daitezke.
Xehetasunetarako, ikus <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Erabilera-baldintzak</a>.',
	'wikimedia-copyrightwarning' => 'Aldaketak gordez, zure ekarpena [http://creativecommons.org/licenses/by-sa/3.0/deed.eu Creative Commons Aitortu/Partekatu 3.0] eta [http://www.gnu.org/copyleft/fdl.html GFDL] lizentzien pean modu ezeztaezinean laga egiten duzula onartzen duzu.
Aldatu duzun orrialdera doan hiperlotura edo URL baten bidez, gutxienez, aitortua izatea onartzen duzu.
Xehetasunetarako, ikus [http://wikimediafoundation.org/wiki/Terms_of_Use Erabilera-baldintzak].',
	'wikimedia-editpage-tos-summary' => 'Zure ekarpena nahi den bezala aldatua eta birbanatua izan dadin ez baduzu nahi, orduan ez gorde.
Ekarpena ez baduzu zuk zeuk idatzi, [http://wikimediafoundation.org/wiki/Terms_of_Use Erabilera-baldintzetan] zehazten diren kondizioetan eskuragarri egon beharko du, eta edozein lizentzia-eskakizun garrantzitsu betetzea onartuko duzu.',
);

/** Extremaduran (Estremeñu)
 * @author Better
 */
$messages['ext'] = array(
	'sitesupport' => 'Donacionis',
	'tooltip-n-sitesupport' => 'Ayúamus',
	'specialpages-group-contribution' => 'Contribucionis/Fundraiser',
);

/** Persian (فارسی)
 * @author Ebraminio
 * @author Huji
 * @author Ladsgroup
 * @author Mardetanha
 */
$messages['fa'] = array(
	'wikimediamessages-desc' => 'پیغام‌های مخصوص ویکی‌مدیا',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/fa',
	'sitesupport' => 'کمک مالی',
	'tooltip-n-sitesupport' => 'حمایت از ما',
	'specialpages-group-contribution' => 'مشارکت‌ها/جمع‌آوری کمک',
	'group-abusefilter' => 'ویرایشگران پالایهٔ خرابکاری',
	'group-accountcreator' => 'سازندگان حساب کاربری',
	'group-confirmed' => 'کاربران تائیدشده',
	'group-filemover' => 'انتقال‌دهنده پرونده',
	'group-flood' => 'کاربران ربات',
	'group-founder' => 'بنیان‌گذاران',
	'group-import' => 'واردکنندگان',
	'group-ipblock-exempt' => 'استثناهای قطع دسترسی نشانی اینترنتی',
	'group-patroller' => 'گشت‌زنان',
	'group-researcher' => 'پژوهشگران',
	'group-rollbacker' => 'واگردانان',
	'group-transwiki' => 'واردکنندگان تراویکی',
	'group-trusted' => 'کاربران مورد اعتماد',
	'group-abusefilter-member' => 'ویرایشگر پالایهٔ خرابکاری',
	'group-accountcreator-member' => 'ایجادکنندهٔ حساب کاربری',
	'group-autopatrolled-member' => 'گشت‌زن خودکار',
	'group-confirmed-member' => 'کاربران تائید شده',
	'group-filemover-member' => 'انتقال‌دهنده پرونده',
	'group-flood-member' => 'کاربر ربات',
	'group-founder-member' => 'بنیان‌گذار',
	'group-import-member' => 'واردکننده',
	'group-ipblock-exempt-member' => 'استثنای قطع دسترسی نشانی اینترنتی',
	'group-patroller-member' => 'گشت‌زن',
	'group-rollbacker-member' => 'واگردان',
	'group-transwiki-member' => 'واردکنندهٔ تراویکی',
	'grouppage-accountcreator' => '{{ns:project}}:سازندگان حساب کاربری',
	'grouppage-autopatrolled' => '{{ns:project}}:گشت‌زنان خودکار',
	'grouppage-founder' => '{{ns:project}}:بنیان‌گذاران',
	'grouppage-import' => '{{ns:project}}:واردکنندگان',
	'grouppage-ipblock-exempt' => '{{ns:project}}:استثنای قطع دسترسی نشانی اینترنتی',
	'grouppage-rollbacker' => '{{ns:project}}:واگردانی‌کنندگان',
	'grouppage-transwiki' => '{{ns:project}}:واردکنندگان تراویکی',
	'group-steward' => 'ویکیبدان',
	'group-sysadmin' => 'مدیران سامانه',
	'group-Global_bot' => 'ربات‌های سراسری',
	'group-Global_rollback' => 'واگردانی‌کنندگان سراسری',
	'group-Global_sysops' => 'مدیران سراسری',
	'group-Ombudsmen' => 'دادآوران',
	'group-Staff' => 'پرسنل',
	'group-steward-member' => 'ویکیبد',
	'group-sysadmin-member' => 'مدیر سامانه',
	'group-Global_bot-member' => 'ربات سراسری',
	'group-Global_rollback-member' => 'واگردانی‌کنندهٔ سراسری',
	'group-Global_sysops-member' => 'مدیران سراسری',
	'group-Ombudsmen-member' => 'دادآور',
	'group-Staff-member' => 'عضو پرسنل',
	'group-coder' => 'برنامه‌نویسان',
	'group-coder-member' => 'برنامه‌نویس',
	'group-inactive' => 'کاربران غیرفعال',
	'group-inactive-member' => 'کاربر غیرفعال',
	'grouppage-inactive' => '{{ns:project}}:کاربران غیرفعال',
	'wikimedia-copyright' => 'همهٔ نوشته‌ها تحت <a href="http://creativecommons.org/licenses/by-sa/3.0/">مجوز Creative Commons Attribution/Share-Alike </a> در دسترس است؛ قوانین اضافه‌ای نیز ممکن است اعمال شوند.
برای جزئیات بیشتر <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">شرایط استفاده</a> را بخوانید.',
	'wikimedia-copyrightwarning' => 'با ذخیره‌سازی شما قبول می‌کنید که مشارکت‌هایتان را به صورت غیر قابل فسخ با اجازه‌نامه‌های [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] و [http://www.gnu.org/copyleft/fdl.html GFDL] منتشر کنید.
شما موافقت می‌کنید که مصرف‌کنندگان ثانوی، دست‌کم از طریق گذاشتن ابرپیوند یا درج نشانی صفحه‌ای که در آن مشارکت می‌کنید، از شما یاد کنند.
برای دیدن جزئیات [http://wikimediafoundation.org/wiki/Terms_of_Use شرایط استفاده] را ببینید.',
	'wikimedia-editpage-tos-summary' => 'اگر نمی‌خواهید که نوشته شما آزادانه ویرایش یا منتشر شود، لطفاً آن را در این‌جا ارسال نکنید.
اگر شما متنی را خود ننوشته‌اید، باید این متن مطابق اجازه‌نامه‌ای که با [http://wikimediafoundation.org/wiki/Terms_of_Use شرایط استفاده] سازگاری دارد موجود باشد، و شما با تبعیت از هر گونه موارد قید شده در اجازه‌نامه های مرتبط موافق باشید.',
);

/** Fulah (Fulfulde) */
$messages['ff'] = array(
	'sitesupport' => 'Dokkal',
);

/** Finnish (Suomi)
 * @author Agony
 * @author Cimon Avaro
 * @author Crt
 * @author Jaakonam
 * @author Nike
 * @author Silvonen
 * @author Str4nd
 * @author Tarmo
 * @author Varusmies
 */
$messages['fi'] = array(
	'wikimediamessages-desc' => 'Wikimedian käyttämiä järjestelmäviestejä.',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/fi',
	'sitesupport' => 'Lahjoitukset',
	'tooltip-n-sitesupport' => 'Tue meitä',
	'specialpages-group-contribution' => 'Lahjoituksia/Rahankeräys',
	'group-abusefilter' => 'väärinkäyttösuodattimen muokkaajat',
	'group-accountcreator' => 'käyttäjätunnusten luojat',
	'group-autopatrolled' => 'automaattisesti tarkastavat',
	'group-autoreviewer' => 'automaattiset arvioivat',
	'group-bigexport' => 'suuret viejät',
	'group-confirmed' => 'hyväksytyt käyttäjät',
	'group-flood' => 'bottitunnukset',
	'group-founder' => 'perustajat',
	'group-import' => 'sivujen tuojat',
	'group-interface_editors' => 'Käyttöliittymän muokkaajat',
	'group-ipblock-exempt' => 'IP-estoista vapautetut',
	'group-patroller' => 'tarkastajat',
	'group-rollbacker' => 'palauttajat',
	'group-transwiki' => 'toisesta wikistä sivujen tuojat',
	'group-trusted' => 'luotetut käyttäjät',
	'group-abusefilter-member' => 'väärinkäyttösuodattimen muokkaaja',
	'group-accountcreator-member' => 'käyttäjätunnusten luoja',
	'group-autopatrolled-member' => 'automaattisesti tarkastava',
	'group-autoreviewer-member' => 'automaattisesti arvioiva',
	'group-bigexport-member' => 'suuri viejä',
	'group-confirmed-member' => 'hyväksytty käyttäjä',
	'group-flood-member' => 'bottitunnus',
	'group-founder-member' => 'perustaja',
	'group-import-member' => 'sivujen tuoja',
	'group-interface_editors-member' => 'käyttöliittymän muokkaaja',
	'group-ipblock-exempt-member' => 'IP-estoista vapautettu',
	'group-patroller-member' => 'tarkastaja',
	'group-rollbacker-member' => 'palauttaja',
	'group-transwiki-member' => 'toisesta wikistä sivujen tuoja',
	'group-trusted-member' => 'luotettu käyttäjä',
	'grouppage-abusefilter' => '{{ns:project}}:Väärinkäyttösuodattimen muokkaajat',
	'grouppage-accountcreator' => '{{ns:project}}:Käyttäjätunnusten luojat',
	'grouppage-autopatrolled' => '{{ns:project}}:Automaattisesti tarkastavat',
	'grouppage-autoreviewer' => '{{ns:project}}:Automaattisesti arvioivat',
	'grouppage-bigexport' => '{{ns:project}}:Suuret viejät',
	'grouppage-confirmed' => '{{ns:project}}:Hyväksytyt käyttäjät',
	'grouppage-flood' => '{{ns:project}}:Bottitunnukset',
	'grouppage-founder' => '{{ns:project}}:Perustajat',
	'grouppage-import' => '{{ns:project}}:Sivujen tuojat',
	'grouppage-interface_editors' => '{{ns:project}}:Käyttöliittymän muokkaajat',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-estoista vapautetut',
	'grouppage-rollbacker' => '{{ns:project}}:Palauttajat',
	'grouppage-transwiki' => '{{ns:project}}:Toisista wikeistä sivujen tuojat',
	'grouppage-trusted' => '{{ns:project}}:Luotetut käyttäjät',
	'group-steward' => 'ylivalvojat',
	'group-sysadmin' => 'järjestelmän ylläpitäjät',
	'group-editinterface' => 'käyttöliittymän muokkaajat',
	'group-Global_bot' => 'globaalit botit',
	'group-Global_rollback' => 'globaalit palauttajat',
	'group-Ombudsmen' => 'edustajat',
	'group-Staff' => 'projektin ylläpitäjät',
	'group-steward-member' => 'ylivalvoja',
	'group-sysadmin-member' => 'järjestelmän ylläpitäjä',
	'group-editinterface-member' => 'käyttöliittymän muokkaaja',
	'group-Global_bot-member' => 'globaalibotti',
	'group-Global_rollback-member' => 'globaalipalauttaja',
	'group-Ombudsmen-member' => 'edustaja',
	'group-Staff-member' => 'projektin ylläpitäjä',
	'grouppage-steward' => 'm:Stewards/fi',
	'group-coder' => 'ohjelmoijat',
	'group-coder-member' => 'ohjelmoija',
	'group-inactive' => 'epäaktiiviset käyttäjät',
	'group-inactive-member' => 'epäaktiivinen käyttäjä',
	'grouppage-inactive' => '{{ns:project}}:Epäaktiiviset käyttäjät',
	'wikimedia-copyright' => 'Teksti on saatavilla <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a> -lisenssillä; lisäehtoja voi sisältyä. Katso <a href="http://wikimediafoundation.org/wiki/Käyttöehdot">käyttöehdot</a>.',
	'wikimedia-copyrightwarning' => 'Tallentamalla hyväksyt julkaiset muokkauksesi peruuttamattomasti [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0-] ja [http://www.gnu.org/copyleft/fdl.html GFDL-lisensseillä]. Aineiston myöhemmät käyttäjät saattavat mainita käyttäjätunnuksesi, vähintään linkin tai osoitteen kautta muokkaamaasi artikkeliin. Lisätietoja löytyy [http://wikimediafoundation.org/wiki/Terms_of_Use käyttöehdoista].',
	'wikimedia-editpage-tos-summary' => 'Jos et halua kirjoitustasi muiden muokattavaksi ja levitettäväksi, älä tallenna sitä tänne. Jos et kirjoittanut tätä itse, tekstin tulee olla saatavilla [http://wikimediafoundation.org/wiki/Terms_of_Use käyttöehtojen] mukaisin ehdoin ja hyväksyt asiaankuuluvien lisenssivaatimusten noudattamisen.',
);

/** Fijian (Na Vosa Vakaviti) */
$messages['fj'] = array(
	'sitesupport' => 'Soli',
);

/** Faroese (Føroyskt)
 * @author Spacebirdy
 */
$messages['fo'] = array(
	'tooltip-n-sitesupport' => 'Stuðla okkum',
	'group-steward' => 'Ternur',
	'group-steward-member' => 'Terna',
	'grouppage-steward' => '{{ns:project}}:Ternur',
);

/** French (Français)
 * @author Crochet.david
 * @author Fulup
 * @author Grondin
 * @author Guillom
 * @author Hercule
 * @author IAlex
 * @author Jean-Frédéric
 * @author Kropotkine 113
 * @author Meno25
 * @author Peter17
 * @author PieRRoMaN
 * @author Seb35
 * @author Sherbrooke
 * @author Urhixidur
 * @author Verdy p
 * @author Yekrats
 * @author Zetud
 * @author לערי ריינהארט
 */
$messages['fr'] = array(
	'wikimediamessages-desc' => 'Messages spécifiques de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/fr',
	'sitesupport' => 'Faire un don',
	'tooltip-n-sitesupport' => 'Aidez-nous',
	'specialpages-group-contribution' => 'Contributions / levée de fonds',
	'group-abusefilter' => 'Modificateurs de filtre antiabus',
	'group-accountcreator' => 'Créateurs de comptes',
	'group-arbcom' => 'Membres du comité d’arbitrage',
	'group-autopatrolled' => 'Patrouilles automatiques',
	'group-autoreviewer' => 'Relecteurs automatiques',
	'group-bigexport' => 'Grands exportateurs',
	'group-confirmed' => 'Utilisateurs confirmés',
	'group-editprotected' => 'Éditeurs de pages protégées',
	'group-filemover' => 'Renommeurs de fichiers',
	'group-flood' => 'Dresseurs de bot',
	'group-founder' => 'Fondateurs',
	'group-import' => 'Importateurs',
	'group-interface_editors' => 'Éditeurs de l’interface',
	'group-ipblock-exempt' => 'Exemptés de blocage d’IP',
	'group-patroller' => 'Patrouilleurs',
	'group-researcher' => 'Chercheurs',
	'group-rollbacker' => 'Révocateurs',
	'group-transwiki' => 'Importateurs transwiki',
	'group-trusted' => 'Utilisateurs de confiance',
	'group-abusefilter-member' => 'modificateur de filtre antiabus',
	'group-accountcreator-member' => 'créateur de comptes',
	'group-arbcom-member' => 'membre du comité d’arbitrage',
	'group-autopatrolled-member' => 'patrouilleur automatique',
	'group-autoreviewer-member' => 'relecteur automatique',
	'group-bigexport-member' => 'grand exportateur',
	'group-confirmed-member' => 'utilisateur confirmé',
	'group-editprotected-member' => 'éditeur de pages protégées',
	'group-filemover-member' => 'renommeur de fichiers',
	'group-flood-member' => 'dresseur de bot',
	'group-founder-member' => 'fondateur',
	'group-import-member' => 'importateur',
	'group-interface_editors-member' => 'éditeur de l’interface',
	'group-ipblock-exempt-member' => 'exempté de blocage d’IP',
	'group-patroller-member' => 'patrouilleur',
	'group-researcher-member' => 'chercheur',
	'group-rollbacker-member' => 'révocateur',
	'group-transwiki-member' => 'importateur transwiki',
	'group-trusted-member' => 'utilisateur de confiance',
	'grouppage-abusefilter' => '{{ns:project}}:Modificateurs de filtre antiabus',
	'grouppage-accountcreator' => '{{ns:project}}:Créateurs de comptes',
	'grouppage-arbcom' => '{{ns:project}}:Membres du comité d’arbitrage',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrouilleurs automatiques',
	'grouppage-autoreviewer' => '{{ns:project}}:Relecteurs automatiques',
	'grouppage-bigexport' => '{{ns:project}}:Grands exportateurs',
	'grouppage-confirmed' => '{{ns:project}}:Utilisateurs confirmés',
	'grouppage-editprotected' => '{{ns:project}}:Éditeurs de pages protégées',
	'grouppage-filemover' => '{{ns:project}}:Renommeurs de fichiers',
	'grouppage-flood' => '{{ns:project}}:Dresseurs de bot',
	'grouppage-founder' => '{{ns:project}}:Fondateurs',
	'grouppage-import' => '{{ns:project}}:Importateurs',
	'grouppage-interface_editors' => '{{ns:project}}:Éditeurs de l’interface',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exemption de blocage d’IP',
	'grouppage-researcher' => '{{ns:project}}:Chercheurs',
	'grouppage-rollbacker' => '{{ns:project}}:Révocateurs',
	'grouppage-transwiki' => '{{ns:project}}:Importateurs transwiki',
	'grouppage-trusted' => '{{ns:project}}:Utilisateurs de confiance',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Administrateurs système',
	'group-editinterface' => 'Modificateurs de l’interface',
	'group-Global_bot' => 'Bots globaux',
	'group-Global_rollback' => 'Révocateurs globaux',
	'group-Global_sysops' => 'Administrateurs globaux',
	'group-Ombudsmen' => 'Médiateurs',
	'group-Staff' => 'Personnel',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrateur système',
	'group-editinterface-member' => 'modificateur de l’interface',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'révocateur global',
	'group-Global_sysops-member' => 'administrateur global',
	'group-Ombudsmen-member' => 'médiateur',
	'group-Staff-member' => 'membre du personnel',
	'grouppage-steward' => 'm:Stewards/fr',
	'grouppage-Global_bot' => 'm:Bot policy/fr#Bots globaux',
	'grouppage-Global_rollback' => 'm:Global rollback/fr',
	'group-coder' => 'Codeurs',
	'group-coder-member' => 'codeur',
	'group-inactive' => 'Utilisateurs inactifs',
	'group-inactive-member' => 'utilisateur inactif',
	'grouppage-inactive' => '{{ns:project}}:Utilisateurs inactifs',
	'wikimedia-copyright' => 'Les textes sont disponibles sous <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.fr">licence Creative Commons paternité - partage à l’identique des conditions initiales</a> ; d’autres conditions peuvent s’appliquer. Voyez les <a href="http://wikimediafoundation.org/wiki/conditions_d\'utilisation">conditions d’utilisation</a> pour plus de détails.',
	'wikimedia-copyrightwarning' => 'En cliquant sur « {{int:savearticle}} », vous acceptez de placer irrévocablement votre contribution sous [http://creativecommons.org/licenses/by-sa/3.0/ licence Creative Commons attribution partage à l’identique 3.0] et [http://www.gnu.org/copyleft/fdl.html GFDL]. Vous acceptez d’être crédité par les ré-utilisateurs au minimum via un hyperlien ou une URL vers l’article auquel vous contribuez. Voyez les [http://wikimediafoundation.org/wiki/Terms_of_Use conditions d’utilisation] pour plus de détails.',
	'wikimedia-editpage-tos-summary' => 'Si vous ne désirez pas que vos écrits soient modifiés et redistribués à volonté, alors ne les soumettez pas ici. Si vous ne les avez pas écrits vous-même, ils doivent être disponibles sous des termes compatibles avec les [http://wikimediafoundation.org/wiki/Terms_of_Use termes d’utilisation], et vous acceptez de suivre toutes les exigences de la licence.',
);

/** Cajun French (Français cadien)
 * @author JeanVoisin
 */
$messages['frc'] = array(
	'sitesupport' => "Donner de l'argent",
);

/** Franco-Provençal (Arpetan)
 * @author Cedric31
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'wikimediamessages-desc' => 'Mèssâjos spèceficos de Wikimedia.',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/fr',
	'sitesupport' => 'Balyér',
	'tooltip-n-sitesupport' => 'Édiéd-nos !',
	'specialpages-group-contribution' => 'Contribucions / levâ de fonds',
	'group-abusefilter' => 'Changiors de filtro d’abus',
	'group-accountcreator' => 'Crèators de comptos',
	'group-autopatrolled' => 'Patrolyors ôtomaticos',
	'group-autoreviewer' => 'Rèvisors ôtomaticos',
	'group-bigexport' => 'Grants èxportators',
	'group-confirmed' => 'Utilisators confirmâs',
	'group-flood' => 'Drèciors de bot',
	'group-founder' => 'Fondators',
	'group-import' => 'Importators',
	'group-ipblock-exempt' => 'Ègzencions de blocâjo d’adrèce IP',
	'group-patroller' => 'Patrolyors',
	'group-rollbacker' => 'Rèvoquiors',
	'group-transwiki' => 'Importators entèrvouiqui',
	'group-trusted' => 'Utilisators de fiance',
	'group-abusefilter-member' => 'Changior de filtro d’abus',
	'group-accountcreator-member' => 'Crèator de comptos',
	'group-autopatrolled-member' => 'Patrolyor ôtomatico',
	'group-autoreviewer-member' => 'Rèvisor ôtomatico',
	'group-bigexport-member' => 'Grant èxportator',
	'group-confirmed-member' => 'Utilisator confirmâ',
	'group-flood-member' => 'Drècior de bot',
	'group-founder-member' => 'Fondator',
	'group-import-member' => 'Importator',
	'group-ipblock-exempt-member' => 'Ègzencion de blocâjo d’adrèce IP',
	'group-patroller-member' => 'Patrolyor',
	'group-rollbacker-member' => 'Rèvoquior',
	'group-transwiki-member' => 'Importator entèrvouiqui',
	'group-trusted-member' => 'Utilisator de fiance',
	'grouppage-abusefilter' => '{{ns:project}}:Changiors de filtro d’abus',
	'grouppage-accountcreator' => '{{ns:project}}:Crèators de comptos',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrolyors ôtomaticos',
	'grouppage-autoreviewer' => '{{ns:project}}:Rèvisors ôtomaticos',
	'grouppage-bigexport' => '{{ns:project}}:Grants èxportators',
	'grouppage-confirmed' => '{{ns:project}}:Utilisators confirmâs',
	'grouppage-flood' => '{{ns:project}}:Drèciors de bot',
	'grouppage-founder' => '{{ns:project}}:Fondators',
	'grouppage-import' => '{{ns:project}}:Importators',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Ègzencion de blocâjo d’adrèce IP',
	'grouppage-rollbacker' => '{{ns:project}}:Rèvoquiors',
	'grouppage-transwiki' => '{{ns:project}}:Importators entèrvouiqui',
	'grouppage-trusted' => '{{ns:project}}:Utilisators de fiance',
	'group-steward' => 'Stevârds',
	'group-sysadmin' => 'Administrators sistèmo',
	'group-editinterface' => 'Changiors de l’entèrface',
	'group-Global_bot' => 'Bots globâls',
	'group-Global_rollback' => 'Rèvoquiors globâls',
	'group-Ombudsmen' => 'Mèdiators',
	'group-Staff' => 'Gens',
	'group-steward-member' => 'Stevârd',
	'group-sysadmin-member' => 'Administrator sistèmo',
	'group-editinterface-member' => 'Changior de l’entèrface',
	'group-Global_bot-member' => 'Bot globâl',
	'group-Global_rollback-member' => 'Rèvoquior globâl',
	'group-Ombudsmen-member' => 'Mèdiator',
	'group-Staff-member' => 'Membro a les gens',
	'group-coder' => 'Codiors',
	'group-coder-member' => 'Codior',
	'group-inactive' => 'Utilisators que font ren du tot',
	'group-inactive-member' => 'Utilisator que fât ren du tot',
	'grouppage-inactive' => '{{ns:project}}:Utilisators que font ren du tot',
	'wikimedia-copyright' => 'Los tèxtos sont disponiblos desot <a href="http://creativecommons.org/licenses/by-sa/3.0/">licence Creative Commons patèrnitât - partâjo a l’identico de les premiéres condicions</a> ;
d’ôtres condicions pôvont s’aplicar.
Vêde les <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">condicions d’usâjo</a> por més de dètalys.',
	'wikimedia-copyrightwarning' => 'En cliquent dessus « Sôvar ceta pâge », vos accèptâd de placiér por de bon voutra contribucion desot [http://creativecommons.org/licenses/by-sa/3.0/ licence Creative Commons patèrnitât - partâjo a l’identico de les premiéres condicions] et [http://www.gnu.org/copyleft/fdl.html licence de documentacion abada GNU (GFDL)].
Vos accèptâd d’étre crèditâ per los rèutilisators u muens avouéc un lim hipèrtèxto ou ben una URL de vers la pâge sur laquinta vos contribuâd.
Vêde les [http://wikimediafoundation.org/wiki/Terms_of_Use condicions d’usâjo] por més de dètalys.',
	'wikimedia-editpage-tos-summary' => 'Se vos voléd pas que voutros ècrits seyont changiês et rebalyês a volontât, adonc los volyéd pas sometre ique.
Se vos los éd pas ècrits vos-mémo, dêvont étre disponiblos desot des condicions compatibles avouéc les [http://wikimediafoundation.org/wiki/Terms_of_Use condicions d’usâjo], et pués vos accèptâd de siuvre totes les ègzigences de la licence.',
);

/** Northern Frisian (Frasch)
 * @author Pyt
 */
$messages['frr'] = array(
	'wikimedia-copyright' => 'Di täkst stoont uner e lisäns <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.de">„Creative Commons Attribution/Share-Alike“</a> tu rädj; betängelse haanetu koone önjwiinjbor weese.
Änkelthäide san önj da <a href="http://wikimediafoundation.org/wiki/Nutzungsbedingungen">njütingsbetängelse</a> beschraawen.',
);

/** Friulian (Furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'sitesupport' => 'Doninus',
	'tooltip-n-sitesupport' => 'Judinus',
	'group-founder' => 'Fondadôrs',
	'group-founder-member' => 'Fondadôr',
);

/** Western Frisian (Frysk)
 * @author Pyt
 * @author Snakesteuben
 */
$messages['fy'] = array(
	'sitesupport' => 'Donaasjes',
	'tooltip-n-sitesupport' => 'Stypje ús',
);

/** Irish (Gaeilge)
 * @author Alison
 */
$messages['ga'] = array(
	'wikimediamessages-desc' => 'Teachtaireachtaí sainiúil an Viciméid',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/ga',
	'sitesupport' => 'Síntiúis',
	'tooltip-n-sitesupport' => 'Tacaigh linn',
	'group-accountcreator' => 'Cuntas cruthóirí',
	'group-founder' => 'Bunaitheoirí',
	'group-import' => 'Iompórtálaithe',
	'group-ipblock-exempt' => 'Díolúintí coisc IP',
	'group-rollbacker' => 'Tar-rolltóirí',
	'group-transwiki' => 'Iompórtálaithe traisvicí',
	'group-accountcreator-member' => 'cuntas cruthóir',
	'group-autopatrolled-member' => 'uathphatrólóir',
	'group-founder-member' => 'bunaitheoir',
	'group-import-member' => 'iompórtálaí',
	'group-ipblock-exempt-member' => 'Díolúine coisc IP',
	'group-rollbacker-member' => 'tar-rolltóir',
	'group-transwiki-member' => 'iompórtálaí traisvicí',
	'grouppage-accountcreator' => '{{ns:project}}:Cuntas cruthóirí',
	'grouppage-autopatrolled' => '{{ns:project}}:Uathphatrólóirí',
	'grouppage-founder' => '{{ns:project}}:Bunaitheoirí',
	'grouppage-import' => '{{ns:project}}:Iompórtálaithe',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Díolúine coisc IP',
	'grouppage-rollbacker' => '{{ns:project}}:Tar-rolltóirí',
	'grouppage-transwiki' => '{{ns:project}}:Iompórtálaithe traisvicí',
	'group-steward' => 'Maoir',
	'group-sysadmin' => 'Riarthóirí',
	'group-Global_bot' => 'Róbónna domhanda',
	'group-Global_rollback' => 'Tar-rolltóirí domhanda',
	'group-Ombudsmen' => 'Daoine an Phobail',
	'group-Staff' => 'Foireann',
	'group-steward-member' => 'maor',
	'group-sysadmin-member' => 'riarthóir',
	'group-Global_bot-member' => 'róbó domhanda',
	'group-Global_rollback-member' => 'tar-rolltóir domhanda',
	'group-Ombudsmen-member' => 'Duine an Phobail',
	'group-Staff-member' => 'ball foirne',
	'group-coder' => 'Códóirí',
	'group-coder-member' => 'códóir',
	'shared-repo-name-shared' => 'an Cómhaoin Vicíméid',
);

/** Gagauz (Gagauz)
 * @author Cuman
 */
$messages['gag'] = array(
	'sitesupport' => 'Baaşişlär',
	'tooltip-n-sitesupport' => 'Material destek',
);

/** Gan (贛語)
 * @author Symane
 */
$messages['gan'] = array(
	'sitesupport' => '贊助',
	'tooltip-n-sitesupport' => '資援偶嗰俚',
);

/** Simplified Gan script (赣语(简体))
 * @author Liangent
 */
$messages['gan-hans'] = array(
	'wikimediamessages-desc' => 'Wikimedia𠮶特定讯息',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/{{urlencode:捐助}}',
	'sitesupport' => '捐助',
	'tooltip-n-sitesupport' => '支持我俚',
	'group-abusefilter' => '滥用过滤器编者',
	'group-accountcreator' => '开户专员',
	'group-bigexport' => '大量汇出者',
	'group-founder' => '创办者',
	'group-import' => '汇入者',
	'group-ipblock-exempt' => 'IP封锁例外者',
	'group-rollbacker' => '返退员',
	'group-transwiki' => 'Transwiki汇入者',
	'group-abusefilter-member' => '滥用过滤器编者',
	'group-accountcreator-member' => '开户专员',
	'group-bigexport-member' => '大量汇出者',
	'group-founder-member' => '创办者',
	'group-import-member' => '汇入者',
	'group-ipblock-exempt-member' => 'IP封锁例外',
	'group-rollbacker-member' => '返退员',
	'group-transwiki-member' => 'Transwiki汇入者',
	'grouppage-abusefilter' => '{{ns:project}}:滥用过滤器编者',
	'grouppage-accountcreator' => '{{ns:project}}:开户专员',
	'grouppage-bigexport' => '{{ns:project}}:大量汇出者',
	'grouppage-founder' => '{{ns:project}}:创办者',
	'grouppage-import' => '{{ns:project}}:汇入者',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP封锁例外',
	'grouppage-rollbacker' => '{{ns:project}}:返退员',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki汇入者',
	'group-steward' => '执行员',
	'group-sysadmin' => '系统管理员',
	'group-Global_bot' => '全域机器人',
	'group-Global_rollback' => '全域返退员',
	'group-Ombudsmen' => '申诉专员',
	'group-Staff' => '成员',
	'group-steward-member' => '执行员',
	'group-sysadmin-member' => '系统管理员',
	'group-Global_bot-member' => '全域机器人',
	'group-Global_rollback-member' => '全域返退员',
	'group-Ombudsmen-member' => '申诉专员',
	'group-Staff-member' => '成员',
	'group-coder' => '编码员',
	'group-coder-member' => '编码员',
	'group-inactive' => '不活跃𠮶用户',
	'group-inactive-member' => '不活跃𠮶用户',
	'grouppage-inactive' => '{{ns:project}}:不活跃𠮶用户',
	'wikimedia-copyright' => '个首𠮶所有文字系揸得<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike 牌照</a>𠮶条款发布；可能会有附加𠮶条款。
望吖<a href="http://wikimediafoundation.org/wiki/Terms_of_Use">使用条款</a>𠮶细节。',
	'wikimedia-copyrightwarning' => '倷捺下「{{int:savearticle}}」𠮶时间，就系话倷同意搦自家𠮶贡献揸得[http://creativecommons.org/licenses/by-sa/3.0/ CC-by-sa-3.0]同得[http://www.gnu.org/copyleft/fdl.html GFDL]𠮶条款内容发表。
倷准别𠮶用者编辑佢，至少，通过只超连结或网址到倷𠮶贡献页。
望吖[http://wikimediafoundation.org/wiki/Terms_of_Use 使用条款]𠮶细节。',
	'wikimedia-editpage-tos-summary' => '要系倷不欢喜自家写𠮶文字拕别人编辑或再发布𠮶话，许就莫到个首提交。
要系个不系倷自简写𠮶文字𠮶话，佢一定要同[http://wikimediafoundation.org/wiki/Terms_of_Use 使用条款]相合，跟得倷要同意任何相关𠮶发牌条件。',
);

/** Traditional Gan script (贛語(繁體))
 * @author Symane
 */
$messages['gan-hant'] = array(
	'wikimediamessages-desc' => 'Wikimedia嗰特定訊息',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/{{urlencode:捐助}}',
	'sitesupport' => '捐助',
	'tooltip-n-sitesupport' => '支持我俚',
	'group-abusefilter' => '濫用過濾器編者',
	'group-accountcreator' => '開戶專員',
	'group-bigexport' => '大量匯出者',
	'group-founder' => '創辦者',
	'group-import' => '匯入者',
	'group-ipblock-exempt' => 'IP封鎖例外者',
	'group-rollbacker' => '返退員',
	'group-transwiki' => 'Transwiki匯入者',
	'group-abusefilter-member' => '濫用過濾器編者',
	'group-accountcreator-member' => '開戶專員',
	'group-bigexport-member' => '大量匯出者',
	'group-founder-member' => '創辦者',
	'group-import-member' => '匯入者',
	'group-ipblock-exempt-member' => 'IP封鎖例外',
	'group-rollbacker-member' => '返退員',
	'group-transwiki-member' => 'Transwiki匯入者',
	'grouppage-abusefilter' => '{{ns:project}}:濫用過濾器編者',
	'grouppage-accountcreator' => '{{ns:project}}:開戶專員',
	'grouppage-bigexport' => '{{ns:project}}:大量匯出者',
	'grouppage-founder' => '{{ns:project}}:創辦者',
	'grouppage-import' => '{{ns:project}}:匯入者',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP封鎖例外',
	'grouppage-rollbacker' => '{{ns:project}}:返退員',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki匯入者',
	'group-steward' => '執行員',
	'group-sysadmin' => '系統管理員',
	'group-Global_bot' => '全域機器人',
	'group-Global_rollback' => '全域返退員',
	'group-Ombudsmen' => '申訴專員',
	'group-Staff' => '成員',
	'group-steward-member' => '執行員',
	'group-sysadmin-member' => '系統管理員',
	'group-Global_bot-member' => '全域機器人',
	'group-Global_rollback-member' => '全域返退員',
	'group-Ombudsmen-member' => '申訴專員',
	'group-Staff-member' => '成員',
	'group-coder' => '編碼員',
	'group-coder-member' => '編碼員',
	'group-inactive' => '不活躍嗰用戶',
	'group-inactive-member' => '不活躍嗰用戶',
	'grouppage-inactive' => '{{ns:project}}:不活躍嗰用戶',
	'wikimedia-copyright' => '箇首嗰所有文字係揸得<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike 牌照</a>嗰條款發佈；可能會有附加嗰條款。
望吖<a href="http://wikimediafoundation.org/wiki/Terms_of_Use">使用條款</a>嗰細節。',
	'wikimedia-copyrightwarning' => '倷捺下「{{int:savearticle}}」嗰時間，就係話倷同意搦自家嗰貢獻揸得[http://creativecommons.org/licenses/by-sa/3.0/ CC-by-sa-3.0]同得[http://www.gnu.org/copyleft/fdl.html GFDL]嗰條款內容發表。
倷准別嗰用者編輯佢，至少，通過隻超連結或網址到倷嗰貢獻頁。
望吖[http://wikimediafoundation.org/wiki/Terms_of_Use 使用條款]嗰細節。',
	'wikimedia-editpage-tos-summary' => '要係倷不歡喜自家寫嗰文字拕別人編輯或再發佈嗰話，許就莫到箇首提交。
要係箇不係倷自簡寫嗰文字嗰話，佢一定要同[http://wikimediafoundation.org/wiki/Terms_of_Use 使用條款]相合，跟得倷要同意任何相關嗰發牌條件。',
);

/** Scottish Gaelic (Gàidhlig) */
$messages['gd'] = array(
	'sitesupport' => 'Tabhartasan',
);

/** Galician (Galego)
 * @author Alma
 * @author Meno25
 * @author Toliño
 * @author Xosé
 */
$messages['gl'] = array(
	'wikimediamessages-desc' => 'Mensaxes específicas da Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/gl',
	'sitesupport' => 'Doazóns',
	'tooltip-n-sitesupport' => 'Apóienos',
	'specialpages-group-contribution' => 'Contribucións/Recadación',
	'group-abusefilter' => 'Editores do filtro de abusos',
	'group-accountcreator' => 'Creadores de contas',
	'group-arbcom' => 'Membros do comité de arbitraxe',
	'group-autopatrolled' => 'Patrulleiros automáticos',
	'group-autoreviewer' => 'Revisores automáticos',
	'group-bigexport' => 'Grandes exportadores',
	'group-confirmed' => 'Usuarios confirmados',
	'group-editprotected' => 'Editores de páxinas protexidas',
	'group-filemover' => 'Renomeadores de ficheiros',
	'group-flood' => 'Usuarios de bot',
	'group-founder' => 'Fundadores',
	'group-import' => 'Importadores',
	'group-interface_editors' => 'Editores da interface',
	'group-ipblock-exempt' => 'Exentos de bloqueo do IP',
	'group-patroller' => 'Patrulleiros',
	'group-researcher' => 'Investigadores',
	'group-rollbacker' => 'Revertidores',
	'group-transwiki' => 'Importadores transwiki',
	'group-trusted' => 'Usuarios de confianza',
	'group-abusefilter-member' => 'editor do filtro de abusos',
	'group-accountcreator-member' => 'creador de contas',
	'group-arbcom-member' => 'membro do comité de arbitraxe',
	'group-autopatrolled-member' => 'patrulleiro automático',
	'group-autoreviewer-member' => 'revisor automático',
	'group-bigexport-member' => 'gran exportador',
	'group-confirmed-member' => 'usuario confirmado',
	'group-editprotected-member' => 'editor de páxinas protexidas',
	'group-filemover-member' => 'renomeador de ficheiros',
	'group-flood-member' => 'usuario de bot',
	'group-founder-member' => 'fundador',
	'group-import-member' => 'importador',
	'group-interface_editors-member' => 'editor da interface',
	'group-ipblock-exempt-member' => 'exento de bloqueo do IP',
	'group-patroller-member' => 'patrulleiro',
	'group-researcher-member' => 'investigador',
	'group-rollbacker-member' => 'Revertidor',
	'group-transwiki-member' => 'importador transwiki',
	'group-trusted-member' => 'usuario de confianza',
	'grouppage-abusefilter' => '{{ns:project}}:Editores do filtro de abusos',
	'grouppage-accountcreator' => '{{ns:project}}:Creadores de contas',
	'grouppage-arbcom' => '{{ns:project}}:Membros do comité de arbitraxe',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrulleiros automáticos',
	'grouppage-autoreviewer' => '{{ns:project}}:Revisores automáticos',
	'grouppage-bigexport' => '{{ns:project}}:Grandes exportadores',
	'grouppage-confirmed' => '{{ns:project}}:Usuarios confirmados',
	'grouppage-editprotected' => '{{ns:project}}:Editores de páxinas protexidas',
	'grouppage-filemover' => '{{ns:project}}:Renomeadores de ficheiros',
	'grouppage-flood' => '{{ns:project}}:Usuarios de bot',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'grouppage-interface_editors' => '{{ns:project}}:Editores da interface',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exención de bloqueo IP',
	'grouppage-researcher' => '{{ns:project}}:Investigador',
	'grouppage-rollbacker' => '{{ns:project}}:Revertidores',
	'grouppage-transwiki' => '{{ns:project}}:Importadores transwiki',
	'grouppage-trusted' => '{{ns:project}}:Usuarios de confianza',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Administradores do sistema',
	'group-editinterface' => 'Editores da interface',
	'group-Global_bot' => 'Bots globais',
	'group-Global_rollback' => 'Revertedores globais',
	'group-Global_sysops' => 'Administrador global',
	'group-Ombudsmen' => 'Comisarios',
	'group-Staff' => 'Membros',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrador do sistema',
	'group-editinterface-member' => 'editor da interface',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'revertedor global',
	'group-Global_sysops-member' => 'administrador global',
	'group-Ombudsmen-member' => 'comisario',
	'group-Staff-member' => 'membro',
	'group-coder' => 'Codificadores',
	'group-coder-member' => 'codificador',
	'group-inactive' => 'Usuarios inactivos',
	'group-inactive-member' => 'usuario inactivo',
	'grouppage-inactive' => '{{ns:project}}:Usuarios inactivos',
	'wikimedia-copyright' => 'Todo o texto está dispoñible baixo a <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.gl">licenza Creative Commons recoñecemento compartir igual 3.0</a>; pódense aplicar termos adicionais. Consulte os <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">termos de uso</a> para obter máis información.',
	'wikimedia-copyrightwarning' => 'Ao gardar acepta liberar irrevogablemente a súa contribución baixo a [http://creativecommons.org/licenses/by-sa/3.0/deed.gl licenza Creative Commons recoñecemento compartir igual 3.0] e a [http://www.gnu.org/copyleft/fdl.html GFDL]. Está de acordo en acreditar a reutilización por parte doutros, como mínimo, por medio dunha hiperligazón ou URL ao artigo ao que está contribuíndo. Consulte os [http://wikimediafoundation.org/wiki/Terms_of_Use termos de uso] para obter máis información.',
	'wikimedia-editpage-tos-summary' => 'Se non quere que o seu texto sexa editado e redistribuído, non o envíe. Se non escribiu isto, este texto debería estar dispoñible baixo termos compatibles cos [http://wikimediafoundation.org/wiki/Terms_of_Use termos de uso] e vostede debe estar de acordo en seguir todas as esixencias das licenzas.',
);

/** Gilaki (گیلکی)
 * @author AminSanaei
 */
$messages['glk'] = array(
	'sitesupport' => 'بال زئن',
);

/** Guarani (Avañe'ẽ) */
$messages['gn'] = array(
	'sitesupport' => "Me'ẽ rei",
);

/** Gothic (Gothic)
 * @author Jocke Pirat
 * @author LeighvsOptimvsMaximvs
 * @author Omnipaedista
 */
$messages['got'] = array(
	'sitesupport' => 'Hairtiþaskatts',
	'tooltip-n-sitesupport' => 'Hairtiþ uns',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author Crazymadlover
 * @author LeighvsOptimvsMaximvs
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'wikimediamessages-desc' => 'Μηνύματα ἴδια τοῦ Wikimedia',
	'sitesupport' => 'Δῶρα',
	'tooltip-n-sitesupport' => 'Τρέφειν ἡμᾶς',
	'group-abusefilter' => 'Μεταγραφεῖς διηθητηρίων καταχρήσεων',
	'group-accountcreator' => 'Ποιηταὶ λογισμῶν',
	'group-autoreviewer' => 'Ἐπιθεωρηταὶ αὐτόματοι',
	'group-bigexport' => 'Μεγάλοι ἐξαγωγεῖς',
	'group-confirmed' => 'Ἐπιβεβαιωθέντες χρώμενοι',
	'group-founder' => 'Ἱδρυταί',
	'group-import' => 'Εἰσαγωγεῖς',
	'group-ipblock-exempt' => 'Ἀπαλλαγαὶ ὑπὸ φραγῆς τῆς IP',
	'group-rollbacker' => 'Μεταστροφεῖς',
	'group-transwiki' => 'Ὑπερδιαβικι-εισαγωγεῖς',
	'group-abusefilter-member' => 'μεταγραφεύς διηθητηρίων καταχρήσεων',
	'group-accountcreator-member' => 'ποιητὴς λογισμῶν',
	'group-autopatrolled-member' => 'αὐτόματος περιπολητής',
	'group-autoreviewer-member' => 'αὐτόματος ἐπιθεωρητής',
	'group-bigexport-member' => 'μέγας ἐξαγωγεύς',
	'group-confirmed-member' => 'ἐπιβεβαιωθεὶς χρώμενος',
	'group-founder-member' => 'ἱδρυτής',
	'group-import-member' => 'εἰσαγωγεύς',
	'group-ipblock-exempt-member' => 'Ἀπαλλάσσειν ὑπὸ φραγῆς τῆς IP',
	'group-rollbacker-member' => 'μεταστροφεύς',
	'group-transwiki-member' => 'ὑπερδιαβικι-εισαγωγεύς',
	'grouppage-abusefilter' => '{{ns:project}}:Μεταγραφεῖς διηθητηρίων καταχρήσεων',
	'grouppage-accountcreator' => '{{ns:project}}:Ποιηταὶ λογισμῶν',
	'grouppage-autopatrolled' => '{{ns:project}}:Αὐτόματοι περιποληταί',
	'grouppage-autoreviewer' => '{{ns:project}}:Αὐτόματοι ἐπιθεωρηταί',
	'grouppage-bigexport' => '{{ns:project}}:Μεγάλοι ἐξαγωγεῖς',
	'grouppage-confirmed' => '{{ns:project}}:Ἐπιβεβαιωθέντες χρώμενοι',
	'grouppage-founder' => '{{ns:project}}:Ἱδρυταί',
	'grouppage-import' => '{{ns:project}}:Εἰσαγωγεῖς',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Προνόμιον κλῄσεων IP',
	'grouppage-rollbacker' => '{{ns:project}}:Μεταστροφεῖς',
	'grouppage-transwiki' => '{{ns:project}}:Ὑπερδιαβικι-εισαγωγεῖς',
	'group-steward' => 'Φροντισταί',
	'group-sysadmin' => 'Ἐπίτροποι συστήματος',
	'group-editinterface' => 'Διεπαφὴν μεταγράφειν',
	'group-Global_bot' => 'Καθολικὰ αὐτόματα',
	'group-Global_rollback' => 'Καθολικοί μεταστροφεῖς',
	'group-Ombudsmen' => 'Δέκται διαμαρτυριῶν',
	'group-Staff' => 'Στελέχη',
	'group-steward-member' => 'φροντιστής',
	'group-sysadmin-member' => 'ἐπίτροπος συστήματος',
	'group-editinterface-member' => 'διεπαφὴν μεταγράφειν',
	'group-Global_bot-member' => 'καθολικὸν αὐτόματον',
	'group-Global_rollback-member' => 'καθολικὸς μεταστροφεύς',
	'group-Ombudsmen-member' => 'δέκτης διαμαρτυριῶν',
	'group-Staff-member' => 'στέλεχος',
	'group-coder' => 'Κωδικεύοντες',
	'group-coder-member' => 'κωδικεύς',
	'group-inactive' => 'Ἀνενεργοὶ χρώμενοι',
	'group-inactive-member' => 'ἀνενεργὸς χρώμενος',
	'grouppage-inactive' => '{{ns:project}}:Ἀνενεργοὶ χρώμενοι',
);

/** Swiss German (Alemannisch)
 * @author Als-Holder
 * @author Melancholie
 */
$messages['gsw'] = array(
	'wikimediamessages-desc' => 'Wikimediaspezifischi Syschtemnochrichte',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Spenden',
	'sitesupport' => 'Finanzielli Hilf',
	'tooltip-n-sitesupport' => 'Unterstitz is',
	'specialpages-group-contribution' => 'Spände/Spändeufruef',
	'group-abusefilter' => 'Missbruuchsfilter-Bearbeiter',
	'group-accountcreator' => 'Benutzerkonte-Aaleger',
	'group-arbcom' => 'Schidsgrichtsmitglider',
	'group-autopatrolled' => 'Autopatrullierer',
	'group-autoreviewer' => 'Autoreviewer',
	'group-bigexport' => 'Großexporteur',
	'group-confirmed' => 'Bstätigti Benutzer',
	'group-editprotected' => 'Bearbeiter vun ere gschitzte Syte',
	'group-filemover' => 'Dateiverschieber',
	'group-flood' => 'Botbenutzer',
	'group-founder' => 'Grinder',
	'group-import' => 'Importeur',
	'group-interface_editors' => 'Benutzeroberflechine-Bearbeiter',
	'group-ipblock-exempt' => 'IP-Sperri-Usnahme',
	'group-patroller' => 'Fäldhieter',
	'group-researcher' => 'Untersuecher',
	'group-rollbacker' => 'Zrucksetzer',
	'group-transwiki' => 'Transwiki-Importeur',
	'group-trusted' => 'Vertröuens-Benutzer',
	'group-abusefilter-member' => 'Missbruuchsfilter-Bearbeiter',
	'group-accountcreator-member' => 'Benutzerkonte-Aaleger',
	'group-arbcom-member' => 'Schidsgrichtsmitglid',
	'group-autopatrolled-member' => 'Automatische Priefer',
	'group-autoreviewer-member' => 'Autoreviewer',
	'group-bigexport-member' => 'Großexporteur',
	'group-confirmed-member' => 'Bstätigte Benutzer',
	'group-editprotected-member' => 'Bearbeiter vun ere gschitzte Syte',
	'group-filemover-member' => 'Dateiverschieber',
	'group-flood-member' => 'Botbenutzer',
	'group-founder-member' => 'Grinder',
	'group-import-member' => 'Importeur',
	'group-interface_editors-member' => 'Benutzeroberflechine-Bearbeiter',
	'group-ipblock-exempt-member' => 'IP-Sperri-Usnahm',
	'group-patroller-member' => 'Fäldhieter',
	'group-researcher-member' => 'Untersuecher',
	'group-rollbacker-member' => 'Zrucksetzer',
	'group-transwiki-member' => 'Transwiki-Importeur',
	'group-trusted-member' => 'Vertröuens-Benutzer',
	'grouppage-abusefilter' => '{{ns:project}}:Missbruuchsfilter-Bearbeiter',
	'grouppage-accountcreator' => '{{ns:project}}:Benutzerkonte-Aaleger',
	'grouppage-arbcom' => '{{ns:project}}:Schidsgrichtsmitglider',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatischi Priefer',
	'grouppage-autoreviewer' => '{{ns:project}}:Autoreviewer',
	'grouppage-bigexport' => '{{ns:project}}:Großexporteur',
	'grouppage-confirmed' => '{{ns:project}}:Bstätigti Benutzer',
	'grouppage-editprotected' => '{{ns:project}}:Bearbeiter vun ere gschitzte Syte',
	'grouppage-filemover' => '{{ns:project}}:Dateiverschieber',
	'grouppage-flood' => '{{ns:project}}:Botbenutzer',
	'grouppage-founder' => '{{ns:project}}:Grinder',
	'grouppage-import' => '{{ns:project}}:Importeur',
	'grouppage-interface_editors' => '{{ns:project}}:Benutzeroberflechine-Bearbeiter',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Sperri-Usnahm',
	'grouppage-researcher' => '{{ns:project}}:Untersuecher',
	'grouppage-rollbacker' => '{{ns:project}}:Zrucksetzer',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importeur',
	'grouppage-trusted' => '{{ns:project}}:Vertröuens-Benutzer',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Syschtemadminischtratore',
	'group-editinterface' => 'Benutzeroberflächi bearbeite',
	'group-Global_bot' => 'Wältwyti Bötli',
	'group-Global_rollback' => 'Wältwyti Zrucksetzer',
	'group-Global_sysops' => 'Wältwyte Ammann',
	'group-Ombudsmen' => 'Ombudsmanne',
	'group-Staff' => 'Mitarbeiter',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'Syschtemadminischtrator',
	'group-editinterface-member' => 'Benutzeroberflächi bearbeite',
	'group-Global_bot-member' => 'Wältwyt Bötli',
	'group-Global_rollback-member' => 'Wältwyte Zrucksetzer',
	'group-Global_sysops-member' => 'wältwyte Ammann',
	'group-Ombudsmen-member' => 'Ombudsmann',
	'group-Staff-member' => 'Mitarbeiter',
	'group-coder' => 'Programmierer',
	'group-coder-member' => 'Programmierer',
	'group-inactive' => 'Inaktivi Benutzer',
	'group-inactive-member' => 'Inaktiver Benutzer',
	'grouppage-inactive' => '{{ns:project}}:Inactivi Benutzer',
	'wikimedia-copyright' => 'Tekscht isch verfiegbar unter dr <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.de">Creative Commons Attribution/Share-Alike License</a>; s cha syy, ass es zuesätzligi Bedingige git. Lueg d <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Nutzigsbedingige</a> fir Einzelheite.',
	'wikimedia-copyrightwarning' => 'Mit em Spychere stimmsch uuwiderrueflig zue, ass Dyyni Byytreg unter dr [http://creativecommons.org/licenses/by-sa/3.0/deed.de Creative Commons Attribution/Share-Alike License 3.0] un dr [http://www.gnu.org/copyleft/fdl.html GFDL] vereffentligt wäre. Du stimmsch zue, ass Du chasch zitiert wäre dur anderi Nutzer, zmindescht dur e Hyperlink oder URL zue dr Syte, wu du ebis byytrait hesch. Lueg d [http://wikimediafoundation.org/wiki/Terms_of_Use Nutzigsbedingige] fir Einzelheite.',
	'wikimedia-editpage-tos-summary' => 'Wänn du nit wit, ass des, was du gschribe hesch, vu andere bearbeitet un wyter verbreitet wird, no stell Dyy Byytrag nit do yyne. Wänn Du s nit sälber gschribe hesch, muess es verfiegbar syy unter Bedingige, wu zue dr [http://wikimediafoundation.org/wiki/Terms_of_Use Nutzigsbedingige] passe, un Du stimmsch zue, ass Du alli erforderlige Lizänz-Aaforderige yyhaltsch.',
);

/** Gujarati (ગુજરાતી)
 * @author Aksi great
 * @author Dsvyas
 * @author לערי ריינהארט
 */
$messages['gu'] = array(
	'sitesupport' => 'દાન',
	'tooltip-n-sitesupport' => 'અમારું સમર્થન કરો',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'sitesupport' => 'Toyrtyssyn',
	'tooltip-n-sitesupport' => 'Cooin lhien',
	'group-Staff' => 'Fwirran',
	'group-Staff-member' => 'oltey fwirran',
);

/** Hakka (Hak-kâ-fa)
 * @author Hakka
 */
$messages['hak'] = array(
	'sitesupport' => 'Chan-chhu',
	'tooltip-n-sitesupport' => 'Chṳ̂-chhu',
);

/** Hawaiian (Hawai`i)
 * @author Singularity
 */
$messages['haw'] = array(
	'sitesupport' => 'E lūlū mai',
	'tooltip-n-sitesupport' => 'Kāko‘o mai',
	'group-steward' => 'Nā kuene',
	'group-steward-member' => 'Kuene',
);

/** Hebrew (עברית)
 * @author Rotem Liss
 * @author Rotemliss
 * @author YaronSh
 * @author Yonidebest
 */
$messages['he'] = array(
	'wikimediamessages-desc' => 'הודעות המיוחדות לוויקימדיה',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/תרומות',
	'sitesupport' => 'תרומות',
	'tooltip-n-sitesupport' => 'תרומה',
	'specialpages-group-contribution' => 'תרומות/התרמה',
	'group-abusefilter' => 'עורכי מסנן ההשחתה',
	'group-accountcreator' => 'יוצרי חשבונות',
	'group-arbcom' => 'חברי ועדת הבוררות',
	'group-autopatrolled' => 'בדוקי עריכות אוטומטית',
	'group-autoreviewer' => 'בוחני עריכות אוטומטית',
	'group-bigexport' => 'מבצעי ייצוא גדול',
	'group-confirmed' => 'משתמשים מאומתים',
	'group-editprotected' => 'עורכי דפים מוגנים',
	'group-filemover' => 'מעבירי קבצים',
	'group-flood' => 'משתמשי בוט',
	'group-founder' => 'מייסדים',
	'group-import' => 'מייבאים',
	'group-interface_editors' => 'עורכי ממשק',
	'group-ipblock-exempt' => 'חסיני חסימות IP',
	'group-patroller' => 'בודקי עריכות',
	'group-researcher' => 'עורכי מחקרים',
	'group-rollbacker' => 'משחזרים',
	'group-transwiki' => 'מייבאים בין־אתריים',
	'group-trusted' => 'משתמשים מהימנים',
	'group-abusefilter-member' => 'עורך מסנן ההשחתה',
	'group-accountcreator-member' => 'יוצר חשבונות',
	'group-arbcom-member' => 'חבר ועדת הבוררות',
	'group-autopatrolled-member' => 'בדוק עריכות אוטומטית',
	'group-autoreviewer-member' => 'בוחן עריכות אוטומטית',
	'group-bigexport-member' => 'מבצע ייצוא גדול',
	'group-confirmed-member' => 'משתמש מאומת',
	'group-editprotected-member' => 'עורך דפים מוגנים',
	'group-filemover-member' => 'מעביר קבצים',
	'group-flood-member' => 'משתמש בוט',
	'group-founder-member' => 'מייסד',
	'group-import-member' => 'מייבא',
	'group-interface_editors-member' => 'עורך ממשק',
	'group-ipblock-exempt-member' => 'חסין חסימות IP',
	'group-patroller-member' => 'בודק עריכות',
	'group-researcher-member' => 'עורך מחקר',
	'group-rollbacker-member' => 'משחזר',
	'group-transwiki-member' => 'מייבא בין־אתרי',
	'group-trusted-member' => 'משתמש מהימן',
	'grouppage-abusefilter' => '{{ns:project}}:עורך מסנן ההשחתה',
	'grouppage-accountcreator' => '{{ns:project}}:יוצר חשבונות',
	'grouppage-arbcom' => '{{ns:project}}:חבר ועדת הבוררות',
	'grouppage-autopatrolled' => '{{ns:project}}:בדוק עריכות אוטומטית',
	'grouppage-autoreviewer' => '{{ns:project}}:בוחן עריכות אוטומטית',
	'grouppage-bigexport' => '{{ns:project}}:מבצע ייצוא גדול',
	'grouppage-confirmed' => '{{ns:project}}:משתמש מאומת',
	'grouppage-editprotected' => '{{ns:project}}:עורך דפים מוגנים',
	'grouppage-filemover' => '{{ns:project}}:מעביר קבצים',
	'grouppage-flood' => '{{ns:project}}:משתמש בוט',
	'grouppage-founder' => '{{ns:project}}:מייסד',
	'grouppage-import' => '{{ns:project}}:מייבא',
	'grouppage-interface_editors' => '{{ns:project}}:עורך ממשק',
	'grouppage-ipblock-exempt' => '{{ns:project}}:חסין חסימות IP',
	'grouppage-researcher' => '{{ns:project}}:עורך מחקר',
	'grouppage-rollbacker' => '{{ns:project}}:משחזר',
	'grouppage-transwiki' => '{{ns:project}}:מייבא בין-אתרי',
	'grouppage-trusted' => '{{ns:project}}:משתמשים מהימנים',
	'group-steward' => 'דיילים',
	'group-sysadmin' => 'מנהלי מערכת',
	'group-editinterface' => 'עורכי הממשק',
	'group-Global_bot' => 'בוטים גלובליים',
	'group-Global_rollback' => 'משחזרים גלובליים',
	'group-Global_sysops' => 'מפעילי מערכת גלובליים',
	'group-Ombudsmen' => 'נציבי תלונות הציבור',
	'group-Staff' => 'אנשי צוות',
	'group-steward-member' => 'דייל',
	'group-sysadmin-member' => 'מנהל מערכת',
	'group-editinterface-member' => 'עורך הממשק',
	'group-Global_bot-member' => 'בוט גלובלי',
	'group-Global_rollback-member' => 'משחזר גלובלי',
	'group-Global_sysops-member' => 'מפעיל מערכת גלובלי',
	'group-Ombudsmen-member' => 'נציב תלונות הציבור',
	'group-Staff-member' => 'איש צוות',
	'group-coder' => 'מתכנתים',
	'group-coder-member' => 'מתכנת',
	'group-inactive' => 'משתמשים בלתי פעילים',
	'group-inactive-member' => 'משתמש בלתי פעיל',
	'grouppage-inactive' => '{{ns:project}}:משתמש בלתי פעיל',
	'shared-repo-name-shared' => 'ויקישיתוף',
	'wikimedia-copyright' => 'הטקסט מוגש בכפוף לרישיון <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.he">Creative Commons ייחוס-שיתוף זהה 3.0</a>; ייתכן שיש תנאים נוספים. ראו <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">תנאי שימוש</a> לפרטים.',
	'wikimedia-copyrightwarning' => 'בשמירת הדף, הנכם מסכימים באופן סופי לשחרר את תרומתכם בכפוף לרישיון [http://creativecommons.org/licenses/by-sa/3.0/deed.he Creative Commons ייחוס-שיתוף זהה 3.0] ולרישיון [http://www.gnu.org/copyleft/fdl.html GFDL]. הנכם מסכימים לכך שמשתמשים נוספים יתנו לפחות קישור או כתובת URL לדף שאתם תורמים לו. ראו [http://wikimediafoundation.org/wiki/Terms_of_Use תנאי שימוש] לפרטים.',
	'wikimedia-editpage-tos-summary' => 'אם אינכם רוצים שעריכתכם תיערך ותופץ מחדש, אל תפרסמו אותה כאן. אם לא כתבתם אותה בעצמכם, היא חייבת להיות זמינה בתנאים התואמים ל[http://wikimediafoundation.org/wiki/Terms_of_Use תנאי השימוש], והנכם חייבים לפעול לפי כל הדרישות הרלוונטיות ברישיון החל עליה.',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 * @author לערי ריינהארט
 * @author आलोक
 */
$messages['hi'] = array(
	'wikimediamessages-desc' => 'विशिष्ट रूप से विकिमीडिया के संदेश',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/hi?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'दान',
	'tooltip-n-sitesupport' => 'हमें सहायता दें',
	'group-abusefilter' => 'दुरुपयोग छननी संपादक',
	'group-accountcreator' => 'खाता निर्माता',
	'group-autoreviewer' => 'स्वचालित समीक्षक',
	'group-bigexport' => 'बड़े निर्यातक',
	'group-confirmed' => 'पुष्टट सदस्य',
	'group-founder' => 'संस्थापक',
	'group-import' => 'आयातक',
	'group-ipblock-exempt' => 'आईपी अवरोध मुक्त',
	'group-patroller' => 'निरीक्षक',
	'group-rollbacker' => 'वापस पुरानी स्थिति में लाने वाले',
	'group-transwiki' => 'विकियों के बीच आयात करने वाले',
	'group-abusefilter-member' => 'दुरुपयोग छननी संपादक',
	'group-accountcreator-member' => 'खाता निर्माता',
	'group-autopatrolled-member' => 'स्वचालित निगरानी रखने वाले',
	'group-autoreviewer-member' => 'स्वचालित समीक्षक',
	'group-bigexport-member' => 'बड़ा निर्यातक',
	'group-confirmed-member' => 'पुष्ट सदस्य',
	'group-founder-member' => 'संस्थापक',
	'group-import-member' => 'आयातक',
	'group-ipblock-exempt-member' => 'आईपी पता अवरोध मुक्त',
	'group-patroller-member' => 'निरीक्षक',
	'group-rollbacker-member' => 'वापस पुरानी स्थिति पर लाने वाला',
	'group-transwiki-member' => 'अंतर-विकि आयातक',
	'grouppage-abusefilter' => '{{ns:project}}:दुरुपयोग छननी संपादक',
	'grouppage-accountcreator' => '{{ns:project}}:खाता निर्माता',
	'grouppage-autopatrolled' => '{{ns:project}}:स्वचालित निगरानी रखने वाले',
	'grouppage-autoreviewer' => '{{ns:project}}:स्वचालित समीक्षक',
	'grouppage-bigexport' => '{{ns:project}}:बड़े निर्यातक',
	'grouppage-confirmed' => '{{ns:project}}:पुष्ट सदस्य',
	'grouppage-founder' => '{{ns:project}}:संस्थापक',
	'grouppage-import' => '{{ns:project}}:आयातक',
	'grouppage-ipblock-exempt' => '{{ns:project}}:आईपी अवरोध मुक्त',
	'grouppage-rollbacker' => '{{ns:project}}:वापस पुरानी स्थिति पर लाने वाले',
	'grouppage-transwiki' => '{{ns:project}}:अंतर-विकि आयातक',
	'group-steward' => 'परिचालक',
	'group-sysadmin' => 'प्रणाली प्रशासक',
	'group-editinterface' => 'अंतरापृष्ठ संपादक',
	'group-Global_bot' => 'वैश्विक यंत्र',
	'group-Global_rollback' => 'वैश्विक पुरानी स्थित पर लाने वाले',
	'group-Ombudsmen' => 'लोक आयुक्त',
	'group-Staff' => 'कर्मचारी',
	'group-Staff-member' => 'स्टाफ़ सदस्य',
);

/** Fiji Hindi (Latin) (Fiji Hindi (Latin))
 * @author Girmitya
 * @author Thakurji
 */
$messages['hif-latn'] = array(
	'wikimediamessages-desc' => 'Wikimedia specific sandes',
	'sitesupport' => 'Daan',
	'tooltip-n-sitesupport' => 'Ham log ke sahara do',
	'group-abusefilter' => 'Abuse filter ke badle waala',
	'group-accountcreator' => 'Account ke banae waala',
	'group-bigexport' => 'Barraa exporters',
	'group-abusefilter-member' => 'abuse filter ke badle waala',
	'group-bigexport-member' => 'barraa exporter',
	'grouppage-abusefilter' => '{{ns:project}}:Abuse filter ke badle waala',
	'grouppage-bigexport' => '{{ns:project}}:Barraa exporter kare waala',
	'group-inactive' => 'Sadasya jon ki abhi haali koi edit nai karis hai',
	'group-inactive-member' => 'Sadasya jon ki abhi haali ekko edit nai karis hai',
	'grouppage-inactive' => '{{ns:project}}:Sadasya jon ki abhi haali ekko edit nai karin hai',
);

/** Hiligaynon (Ilonggo)
 * @author Jose77
 * @author Kguirnela
 * @author Tagimata
 */
$messages['hil'] = array(
	'wikimediamessages-desc' => 'ang ginatukoy nga mensahe sang Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/en?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'Donasyon',
	'tooltip-n-sitesupport' => 'Sakdaga kami',
	'group-abusefilter' => 'Abusar sala editor',
	'group-accountcreator' => 'Mga Gahimo Akawnt',
	'group-autoreviewer' => 'Autorebyuwer',
	'group-bigexport' => 'Mga Dagkong eksporter',
	'group-confirmed' => 'Ginsugtan nga mga user',
	'group-founder' => 'Mga Nagpatukod',
	'group-import' => 'Mga Nagakuha sa Guha',
	'group-ipblock-exempt' => 'IP eksempted harangan',
	'group-rollbacker' => 'Mga Ginabalik',
	'group-transwiki' => 'Mga Transwiki nga Gakuha sa guha',
	'group-abusefilter-member' => 'abusar nga pagsala editor',
	'group-accountcreator-member' => 'nagapanghimo account',
	'group-autopatrolled-member' => 'autobantay',
	'group-autoreviewer-member' => 'autorebyuwer',
	'group-bigexport-member' => 'daku nga gadala paguha',
	'group-confirmed-member' => 'ginpasugtan nga user',
	'group-founder-member' => 'nagpatukod',
	'group-import-member' => 'gapasulod',
	'group-ipblock-exempt-member' => 'IP eksemptado harang',
	'group-rollbacker-member' => 'manugbalik',
	'group-transwiki-member' => 'transwiki gapasulod',
	'grouppage-abusefilter' => '{{ns:project}}:Abusar manugsala nga mga editor',
	'grouppage-accountcreator' => '{{ns:project}}:Mga gahimo Account',
	'grouppage-autopatrolled' => '{{ns:project}}:Autobantay',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorebyuwer',
	'grouppage-bigexport' => '{{ns:project}}:Daku nga mga gapaguha',
	'grouppage-confirmed' => '{{ns:project}}:Ginpasugtan nga mga user',
	'grouppage-founder' => '{{ns:project}}:Mga Nagpatukod',
	'grouppage-import' => '{{ns:project}}:Mga Gapasulod',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP harang eksempsiyon',
	'grouppage-rollbacker' => '{{ns:project}}:Mga Manugbalik',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki nga mga gapasulod',
	'group-steward' => 'Manugtago',
	'group-sysadmin' => 'Mga Sistema administrador',
	'group-editinterface' => 'Mga ga-ilis sang interface',
	'group-Global_bot' => 'Kalibutan bots',
	'group-Global_rollback' => 'Kalibutan manugbalik',
	'group-Ombudsmen' => 'Mga Ombudsman',
	'group-Staff' => 'Mga Gabulig',
	'group-steward-member' => 'manughalong',
	'group-sysadmin-member' => 'sistema administrador',
	'group-editinterface-member' => 'Mga ga-ilis sang interface',
	'group-Global_bot-member' => 'kalibutan bot',
	'group-Global_rollback-member' => 'kalibutan manugbalik',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'gabulig',
	'group-coder' => 'Koders',
	'group-coder-member' => 'koder',
	'group-inactive' => 'Di-aktibo nga mga user',
	'group-inactive-member' => 'di-aktibo nga user',
	'grouppage-inactive' => '{{ns:project}}:Di-aktibo nga mga user',
	'wikimedia-copyright' => 'Ang teksto ay pwede mo makit-an sa idalum sang <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
nanga-dugang nga kasulatan pwede man pagabatunon. Palihog lang bisita sa<a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> para sa madamu nga detalye.',
	'wikimedia-copyrightwarning' => 'Kung ini ipasulod nimo, nagapasugot ka nga ipagalapta ang imo kontribusyon nga naga pai-dalum sa [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] kag ang [http://www.gnu.org/copyleft/fdl.html GFDL].
Nagapasugot ka nga kilalanon sa mga nagagamit liwat, sa pinaka kubos, nga nagapamaagi sa hyperlink o URL sa pahina nga gina kontribyut mo.
Palihog lang bisita sa [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] para sa madamu nga detalye.',
	'wikimedia-editpage-tos-summary' => 'Kung indi mo gusto nga ang imo gina sulat ma islan kag palaptahon sa imo pagkinagusto, indi pag ipadala diri.
Kung indi kag nagsulat sini sa imo kaugalingon, kilanlan nga para ina sa tanan nga naga sunod upod sa [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use], kag naga sugot ka nga magpati sa lisensyang kilanlanon.',
);

/** Croatian (Hrvatski)
 * @author CERminator
 * @author Dalibor Bosits
 * @author Ex13
 * @author SpeedyGonsales
 */
$messages['hr'] = array(
	'wikimediamessages-desc' => 'Posebne poruke Wikimedije',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donacije',
	'sitesupport' => 'Novčani prilozi',
	'tooltip-n-sitesupport' => 'Podržite nas',
	'specialpages-group-contribution' => 'Doprinosi/Prikupljanje',
	'group-abusefilter' => 'Urednici filtra zloporaba',
	'group-accountcreator' => 'Otvaratelji računa',
	'group-arbcom' => 'Članovi arbitražnog odbora',
	'group-autopatrolled' => 'Automatski patrolirani',
	'group-autoreviewer' => 'Samoocjenjivači',
	'group-bigexport' => 'Veliki izvoznici',
	'group-confirmed' => 'Potvrđeni suradnici',
	'group-editprotected' => 'Uređivači zaštićenih stranica',
	'group-filemover' => 'Premjestitelj datoteka',
	'group-flood' => 'Botovi',
	'group-founder' => 'Osnivači',
	'group-import' => 'Unositelji',
	'group-interface_editors' => 'Uređivači sučelja',
	'group-ipblock-exempt' => 'IP blok iznimke',
	'group-patroller' => 'Patroleri',
	'group-researcher' => 'Istraživači',
	'group-rollbacker' => 'Uklonitelji',
	'group-transwiki' => 'Međuwiki unositelji',
	'group-trusted' => 'Suradnici od povjerenja',
	'group-abusefilter-member' => 'urednik filtra zloporaba',
	'group-accountcreator-member' => 'otvaratelj računa',
	'group-arbcom-member' => 'član arbitražnog odbora',
	'group-autopatrolled-member' => 'automatski patroliran',
	'group-autoreviewer-member' => 'samoocjenjivač',
	'group-bigexport-member' => 'veliki izvoznik',
	'group-confirmed-member' => 'potvrđeni suradnik',
	'group-editprotected-member' => 'uređivač zaštićenih stranica',
	'group-filemover-member' => 'premjestitelj datoteka',
	'group-flood-member' => 'bot',
	'group-founder-member' => 'osnivač',
	'group-import-member' => 'unositelj',
	'group-interface_editors-member' => 'uređivač sučelja',
	'group-ipblock-exempt-member' => 'IP blok iznimka',
	'group-patroller-member' => 'patroler',
	'group-researcher-member' => 'istraživač',
	'group-rollbacker-member' => 'uklonitelj',
	'group-transwiki-member' => 'međuwiki unositelj',
	'group-trusted-member' => 'povjerljivi suradnik',
	'grouppage-abusefilter' => '{{ns:project}}:Urednici filtra zloporaba',
	'grouppage-accountcreator' => '{{ns:project}}:Otvaratelji računa',
	'grouppage-arbcom' => '{{ns:project}}:Članovi arbitražnog odbora',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatski patrolirani',
	'grouppage-autoreviewer' => '{{ns:project}}:Samoocjenjivači',
	'grouppage-bigexport' => '{{ns:project}}:Veliki izvoznici',
	'grouppage-confirmed' => '{{ns:project}}:Potvrđeni suradnici',
	'grouppage-editprotected' => '{{ns:project}}:Uređivači zaštićenih stranica',
	'grouppage-filemover' => '{{ns:project}}:Premjestitelj datoteka',
	'grouppage-flood' => '{{ns:project}}:Botovi',
	'grouppage-founder' => '{{ns:project}}:Osnivači',
	'grouppage-import' => '{{ns:project}}:Unositelji',
	'grouppage-interface_editors' => '{{ns:project}}:Uređivači sučelja',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP blok iznimka',
	'grouppage-researcher' => '{{ns:project}}:Istraživači',
	'grouppage-rollbacker' => '{{ns:project}}:Uklonitelji',
	'grouppage-transwiki' => '{{ns:project}}:Međuwiki unositelji',
	'grouppage-trusted' => '{{ns:project}}:Povjerljivi suradnici',
	'group-steward' => 'Stjuardi',
	'group-sysadmin' => 'Sistem administratori',
	'group-editinterface' => 'Uređivači sučelja',
	'group-Global_bot' => 'Globalni bot',
	'group-Global_rollback' => 'Globalni uklonitelji',
	'group-Global_sysops' => 'Globalni administratori',
	'group-Ombudsmen' => 'Ombudsman',
	'group-Staff' => 'Osoblje',
	'group-steward-member' => 'Stjuard',
	'group-sysadmin-member' => 'sistem administrator',
	'group-editinterface-member' => 'urednik sučelja',
	'group-Global_bot-member' => 'globalni bot',
	'group-Global_rollback-member' => 'globalni uklonitelj',
	'group-Global_sysops-member' => 'globalni administrator',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'član osoblja',
	'grouppage-steward' => '{{ns:project}}:Stjuardi',
	'group-coder' => 'Programeri',
	'group-coder-member' => 'programer',
	'group-inactive' => 'Neaktivni suradnici',
	'group-inactive-member' => 'neaktivni suradnik',
	'grouppage-inactive' => '{{ns:project}}:Neaktivni suradnici',
	'wikimedia-copyright' => 'Tekst je dostupan pod licencijom <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Imenovanje/Dijeli pod istim uvjetima</a>; dodatni uvjeti se mogu primjenjivati. Pogledajte <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Uvjete korištenja</a> za detalje.',
	'wikimedia-copyrightwarning' => 'Pritiskom na "sačuvaj stranicu", neopozivo ste suglasni da svoje doprinose dajte pod uvjetima iz licencije [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Imenovanje/Dijeli pod istim uvjetima 3.0] i [http://www.gnu.org/copyleft/fdl.html GFDL]. Slažete se da ćete biti naznačeni kao autor od strane korisnika najmanje preko poveznice ili URL-a na stranicu na kojoj ste doprinosili. Pogledajte [http://wikimediafoundation.org/wiki/Terms_of_Use Uvjete korištenja] za detalje.',
	'wikimedia-editpage-tos-summary' => 'Ukoliko ne želite da se vaš tekst nemilosrdno uređuje i slobodno raspačava, nemojte ga slati ovdje. Ako ovo niste sami napisali, tada ovaj tekst mora biti dostupan pod uvjetima koji su u skladu s [http://wikimediafoundation.org/wiki/Terms_of_Use Uvjetima korištenja], a vi se suglasni da slijedite sve odgovarajuće uvjete licenciranja.',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'wikimediamessages-desc' => 'Specifiske zdźělenki Wikimedije',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/hsb',
	'sitesupport' => 'Dary',
	'tooltip-n-sitesupport' => 'Podpěrajće nas',
	'specialpages-group-contribution' => 'Přinoški/Darjenska akcija',
	'group-abusefilter' => 'Wobdźěłarjo za znjewužiwanske filtry',
	'group-accountcreator' => 'Kontowi załožerjo',
	'group-arbcom' => 'Čłonojo změrcowskeje komisije',
	'group-autopatrolled' => 'Awtomatiscy dohladowarjo',
	'group-autoreviewer' => 'Awtomatiscy kontrolerojo',
	'group-bigexport' => 'Wulkowuwožowarjo',
	'group-confirmed' => 'Wobkrućeni wužiwarjo',
	'group-editprotected' => 'Wobdźěłarjo škitanych stronow',
	'group-filemover' => 'Přesuwarjo datajow',
	'group-flood' => 'Botowi wužiwarjo',
	'group-founder' => 'Załožerjo',
	'group-import' => 'Importerojo',
	'group-interface_editors' => 'Wobdźěłarjo wužiwarskeho powjercha',
	'group-ipblock-exempt' => 'Wuwzaća z blokowanja IP',
	'group-patroller' => 'Dohladowarjo',
	'group-researcher' => 'Slědźerjo',
	'group-rollbacker' => 'Wróćostajerjo',
	'group-transwiki' => 'Transwiki importerojo',
	'group-trusted' => 'Dowěryhódni wužiwarjo',
	'group-abusefilter-member' => 'wobdźěłar za znjewužiwanski filter',
	'group-accountcreator-member' => 'Kontowe załožer',
	'group-arbcom-member' => 'čłon změrcowskeje komisije',
	'group-autopatrolled-member' => 'awtomatiski dohladowar',
	'group-autoreviewer-member' => 'awtomatiski kontroler',
	'group-bigexport-member' => 'wulkowuwožowar',
	'group-confirmed-member' => 'wobkrućeny wužiwar',
	'group-editprotected-member' => 'wobdźěłar škitanych stronow',
	'group-filemover-member' => 'přesuwar datajow',
	'group-flood-member' => 'botowi wužiwarjo',
	'group-founder-member' => 'załožer',
	'group-import-member' => 'importer',
	'group-interface_editors-member' => 'wobdźěłar wužiwarskeho powjercha',
	'group-ipblock-exempt-member' => 'Z blokowanja IP wuwzaty',
	'group-patroller-member' => 'Dohladowar',
	'group-researcher-member' => 'slědźer',
	'group-rollbacker-member' => 'wróćostajer',
	'group-transwiki-member' => 'transwiki importer',
	'group-trusted-member' => 'dowěryhódny wužiwar',
	'grouppage-abusefilter' => '{{ns:project}}:Wobdźěłarjo za njewužiwanske filtry',
	'grouppage-accountcreator' => '{{ns:project}}:Kontowi załožerjo',
	'grouppage-arbcom' => '{{ns:project}}:Čłonojo změrcowskeje komisije',
	'grouppage-autopatrolled' => '{{ns:project}}:Awtomatiscy dohladowarjo',
	'grouppage-autoreviewer' => '{{ns:project}}:Awtomatiscy kontrolerojo',
	'grouppage-bigexport' => '{{ns:project}}:Wulkowuwožowarjo',
	'grouppage-confirmed' => '{{ns:project}}:Wobkrućeni wužiwarjo',
	'grouppage-editprotected' => '{{ns:project}}:Wobdźěłarjo škitanych stronow',
	'grouppage-filemover' => '{{ns:project}}:Přesuwarjo datajow',
	'grouppage-flood' => '{{ns:project}}:Botowi wužiwarjo',
	'grouppage-founder' => '{{ns:project}}:Załožerjo',
	'grouppage-import' => '{{ns:project}}:Importerojo',
	'grouppage-interface_editors' => '{{ns:project}}:Wobdźěłarjo wužiwarskeho powjercha',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Wuwzaće z blokowanja IP',
	'grouppage-researcher' => '{{ns:project}}:Slědźer',
	'grouppage-rollbacker' => '{{ns:project}}:Wróćostajerjo',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importerojo',
	'grouppage-trusted' => '{{ns:project}}:Dowěryhódni wužiwarjo',
	'group-steward' => 'Stewardźa',
	'group-sysadmin' => 'Systemowi administratorojo',
	'group-editinterface' => 'Wužiwarski powjerch wobdźěłać',
	'group-Global_bot' => 'Globalne boćiki',
	'group-Global_rollback' => 'Globalni wróćostajerjo',
	'group-Global_sysops' => 'Globalni administratorojo',
	'group-Ombudsmen' => 'Ombudsnicy',
	'group-Staff' => 'Sobudźěłaćerjo',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'systemowy administrator',
	'group-editinterface-member' => 'wužiwarski powjerch wobdźěłać',
	'group-Global_bot-member' => 'globalny boćik',
	'group-Global_rollback-member' => 'globalny wróćostajer',
	'group-Global_sysops-member' => 'globalny administrator',
	'group-Ombudsmen-member' => 'ombudsnik',
	'group-Staff-member' => 'sobudźěłaćerjo',
	'group-coder' => 'Programowarjo',
	'group-coder-member' => 'programowar',
	'group-inactive' => 'Njeaktiwni wužiwarjo',
	'group-inactive-member' => 'njeaktiwny wužiwar',
	'grouppage-inactive' => '{{ns:project}}:Njeaktiwni wužiwarjo',
	'wikimedia-copyright' => 'Tekst steji pod <a href="http://creativecommons.org/licenses/by-sa/3.0/">licencu Creative Commons Attribution/Share-Alike</a> k dispoziciji; přidatne wuměnjenja hodźa so nałožować. Hlej <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Wužiwanske wuměnjenja</a> za podrobnosće.',
	'wikimedia-copyrightwarning' => 'Ze składowanjom definitiwnje stajiš swój přinošk pod [http://creativecommons.org/licenses/by-sa/3.0/ licencu Creative Commons Attribution/Share-Alike 3.0] a [http://www.gnu.org/copyleft/fdl.html GFDL].
Sy přezjedny, zo dalši wužiwarjo stronu, kotruž sy přinošował, znajmjeńša přez wotkaz abo URL připóznawaja. 
Hlej [http://wikimediafoundation.org/wiki/Terms_of_Use wužiwanske wuměnjenja] za podrobnosće.',
	'wikimedia-editpage-tos-summary' => 'Jeli nochceš, zo so twój tekst po dobrozdaću wobdźěłuje a rozdźěluje, da njewozjew jón tu. Jeli njejsy jón sam spisał, dyrbi pod wuměnjenjemi k dispoziciji stać, kotrež su přezjedne z [http://wikimediafoundation.org/wiki/Terms_of_Use wužiwanskimi wuměnjenjemi] a přihłosuješ so po wotpowědnych licencnych žadanjach měć.',
);

/** Haitian (Kreyòl ayisyen)
 * @author Masterches
 */
$messages['ht'] = array(
	'sitesupport' => 'Fè yon don',
	'tooltip-n-sitesupport' => 'Soutni pwojè a',
);

/** Hungarian (Magyar)
 * @author Bdamokos
 * @author Dani
 * @author Glanthor Reviol
 * @author Tgr
 */
$messages['hu'] = array(
	'wikimediamessages-desc' => 'Wikimedia-specifikus üzenetek',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/hu',
	'sitesupport' => 'Adományok',
	'tooltip-n-sitesupport' => 'Támogatás',
	'specialpages-group-contribution' => 'Adományok/Adománygyűjtés',
	'group-abusefilter' => 'vandálszűrő-szerkesztők',
	'group-accountcreator' => 'fióklétrehozók',
	'group-autopatrolled' => 'Automatikus járőrök',
	'group-autoreviewer' => 'automatikusan megtekintők',
	'group-bigexport' => 'nagy mennyiségben exportálók',
	'group-confirmed' => 'megerősített szerkesztők',
	'group-flood' => 'Bot felhasználók',
	'group-founder' => 'alapítók',
	'group-import' => 'importálók',
	'group-interface_editors' => 'Felületszerkesztők',
	'group-ipblock-exempt' => 'IP-blokkok alól mentesülők',
	'group-patroller' => 'járőrök',
	'group-rollbacker' => 'visszaállítók',
	'group-transwiki' => 'wikiközi importálók',
	'group-trusted' => 'megerősített szerkesztők',
	'group-abusefilter-member' => 'vandálszűrő-szerkesztő',
	'group-accountcreator-member' => 'fióklétrehozó',
	'group-autopatrolled-member' => 'automatikus járőr',
	'group-autoreviewer-member' => 'automatikusan megtekintő',
	'group-bigexport-member' => 'nagy mennyiségben exportáló',
	'group-confirmed-member' => 'megerősített szerkesztő',
	'group-editprotected-member' => 'védett lap szerkesztő',
	'group-flood-member' => 'bot felhasználók',
	'group-founder-member' => 'alapító',
	'group-import-member' => 'importáló',
	'group-interface_editors-member' => 'felületszerkesztő',
	'group-ipblock-exempt-member' => 'IP-blokkok alól mentesülő',
	'group-patroller-member' => 'járőr',
	'group-rollbacker-member' => 'visszaállító',
	'group-transwiki-member' => 'wikiközi importáló',
	'group-trusted-member' => 'megbízható felhasználó',
	'grouppage-abusefilter' => '{{ns:project}}:Vandálszűrő-szerkesztők',
	'grouppage-accountcreator' => '{{ns:project}}:Fióklétrehozók',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatikus járőrök',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatikusan megtekintők',
	'grouppage-bigexport' => '{{ns:project}}:Nagy mennyiségben exportálók',
	'grouppage-confirmed' => '{{ns:project}}:Megerősített szerkesztők',
	'grouppage-flood' => '{{ns:project}}:Bot felhasználók',
	'grouppage-founder' => '{{ns:project}}:Alapítók',
	'grouppage-import' => '{{ns:project}}:Importálók',
	'grouppage-interface_editors' => '{{ns:project}}:Felületszerkesztők',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Mentesülés az IP-blokkok alól',
	'grouppage-rollbacker' => '{{ns:project}}:Visszaállítók',
	'grouppage-transwiki' => '{{ns:project}}:Wikiközi importálók',
	'grouppage-trusted' => '{{ns:project}}:megbízható felhasználók',
	'group-steward' => 'helytartók',
	'group-sysadmin' => 'rendszeradminisztrátorok',
	'group-editinterface' => 'felületszerkesztők',
	'group-Global_bot' => 'globális botok',
	'group-Global_rollback' => 'globális visszaállítók',
	'group-Global_sysops' => 'Globális adminisztrátorok',
	'group-Ombudsmen' => 'ombudsmanok',
	'group-Staff' => 'személyzet',
	'group-steward-member' => 'helytartó',
	'group-sysadmin-member' => 'rendszeradminisztrátor',
	'group-editinterface-member' => 'felületszerkesztő',
	'group-Global_bot-member' => 'globális bot',
	'group-Global_rollback-member' => 'globális visszaállító',
	'group-Global_sysops-member' => 'globális adminisztrátor',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'személyzeti tag',
	'grouppage-steward' => '{{ns:project}}:Helytartók',
	'group-coder' => 'programozók',
	'group-coder-member' => 'programozó',
	'group-inactive' => 'inaktív szerkesztők',
	'group-inactive-member' => 'inaktív szerkesztő',
	'grouppage-inactive' => '{{ns:project}}:Inaktív szerkesztők',
	'wikimedia-copyright' => 'A lap szövege <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.hu">Creative Commons Nevezd meg! – Így add tovább! 3.0</a> licenc alatt van; egyes esetekben más módon is felhasználható. Részletekért lásd a <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">felhasználási feltételeket</a>.',
	'wikimedia-copyrightwarning' => 'A szöveg elküldésével visszavonhatatlan engedélyt adsz annak felhasználására a [http://creativecommons.org/licenses/by-sa/3.0/deed.hu Creative Commons Nevezd meg! – Így add tovább! 3.0] licenc és – ha magad írtad – a [http://www.gnu.org/copyleft/fdl.htm GFDL] szerint, és elfogadod, hogy az újrafelhasználóknak elég közvetve, a wikioldalra mutató linken vagy URL-en keresztül hivatkozniuk rád.  Részletesebben lásd a [http://wikimediafoundation.org/wiki/Terms_of_Use felhasználási feltételekben].',
	'wikimedia-editpage-tos-summary' => 'Ha nem akarod, hogy az írásodat könyörtelenül átszerkesszék vagy tetszés szerint terjesszék, ne küldd be! Ha nem te írtad, a [http://wikimediafoundation.org/wiki/Terms_of_Use felhasználási feltételekkel] összeférő engedéllyel kell rendelkezned a beküldésére, és be kell tartanod az összes releváns licenckövetelményt.',
);

/** Armenian (Հայերեն)
 * @author Teak
 * @author Xelgen
 */
$messages['hy'] = array(
	'sitesupport' => 'Դրամական նվիրատվություն',
	'wikimedia-copyright' => 'Տեքստը տեղադրված է <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a> արտոնագրի ներքո, առանձին դեպքերում հնարավոր են հավելյալ պայմաններ։ Մանրամասնությունների համար այցելեք՝ <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Օգտագործման պայմաններ</a>։',
	'wikimedia-copyrightwarning' => 'Սեղմելով «Հիշել էջը», դուք համաձայնվում եք անվերադարձ հրապարակել ձեր ներդրումը [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] և [http://www.gnu.org/copyleft/fdl.html GFDL] արտոնագրերի ներքո։
Դուք համաձայնվում եք նրան, որ հետագա օգտագործման ժամանակ, ձեր ներդրումը կնշվի առնվազն նշելով խմբագրվող էջի URL–ը կամ դնելով հիպերհղում նրա վրա։
Ծանոթացեք [http://wikimediafoundation.org/wiki/Terms_of_Use Օգտագործման պայմաններին] մանրամասն տեղեկությունների համար։',
	'wikimedia-editpage-tos-summary' => 'Եթե դուք չեք ցանկանում, որ ձեր գրածը ազատորեն խմբագրվի և տարածվի բոլոր ցանկացողների կողմից, ապա մի ավելացրեք այն այստեղ։
Եթե ավելացվող նյութի հեղինակը անձամբ դուք չեք, ապա նյութը պարտադիր պետք է համապատասխանի [http://wikimediafoundation.org/wiki/Terms_of_Use Օգտագործման պայմաններում] նկարագրած արտոնագրային պահանջներին, և դուք համաձայնվում եք հետևել արտոնագրում ներկայացված բոլոր պահանջներին։',
);

/** Interlingua (Interlingua)
 * @author Malafaya
 * @author McDutchie
 */
$messages['ia'] = array(
	'wikimediamessages-desc' => 'Messages specific de Wikimedia',
	'sitesupport-url' => '://wikimediafoundation.org/wiki/Donate/Now/ia?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'Donationes',
	'tooltip-n-sitesupport' => 'Sustene nos',
	'specialpages-group-contribution' => 'Contributiones/Collecta de fundos',
	'group-abusefilter' => 'Redactores del filtro anti-abuso',
	'group-accountcreator' => 'Creatores de contos',
	'group-arbcom' => 'Membros del committee de arbitrage',
	'group-autopatrolled' => 'Autopatruliatores',
	'group-autoreviewer' => 'Autorevisores',
	'group-bigexport' => 'Grande exportatores',
	'group-confirmed' => 'Usatores confirmate',
	'group-editprotected' => 'Redactores de paginas protegite',
	'group-filemover' => 'Renominatores de files',
	'group-flood' => 'Usatores robot',
	'group-founder' => 'Fundatores',
	'group-import' => 'Importatores',
	'group-interface_editors' => 'Redactores del interfacie',
	'group-ipblock-exempt' => 'Exemptiones de blocos IP',
	'group-patroller' => 'Patruliatores',
	'group-researcher' => 'Recercatores',
	'group-rollbacker' => 'Revertitores',
	'group-transwiki' => 'Importatores transwiki',
	'group-trusted' => 'Usatores de confidentia',
	'group-abusefilter-member' => 'redactor del filtro anti-abuso',
	'group-accountcreator-member' => 'creator de contos',
	'group-arbcom-member' => 'membro del committee de arbitrage',
	'group-autopatrolled-member' => 'autopatruliator',
	'group-autoreviewer-member' => 'autorevisor',
	'group-bigexport-member' => 'grande exportator',
	'group-confirmed-member' => 'usator confirmate',
	'group-editprotected-member' => 'redactor de paginas protegite',
	'group-filemover-member' => 'renominator de files',
	'group-flood-member' => 'usator robot',
	'group-founder-member' => 'fundator',
	'group-import-member' => 'importator',
	'group-interface_editors-member' => 'redactor del interfacie',
	'group-ipblock-exempt-member' => 'Exemption de bloco IP',
	'group-patroller-member' => 'patruliator',
	'group-researcher-member' => 'recercator',
	'group-rollbacker-member' => 'revertitor',
	'group-transwiki-member' => 'importator transwiki',
	'group-trusted-member' => 'usator de confidentia',
	'grouppage-abusefilter' => '{{ns:project}}:Redactores del filtro anti-abuso',
	'grouppage-accountcreator' => '{{ns:project}}:Creatores de contos',
	'grouppage-arbcom' => '{{ns:project}}:Membros del committee de arbitrage',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatruliatores',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorevisores',
	'grouppage-bigexport' => '{{ns:project}}:Grande exportatores',
	'grouppage-confirmed' => '{{ns:project}}:Usatores confirmate',
	'grouppage-editprotected' => '{{ns:project}}:Redactores de paginas protegite',
	'grouppage-filemover' => '{{ns:project}}:Renominatores de files',
	'grouppage-flood' => '{{ns:project}}:Usatores robot',
	'grouppage-founder' => '{{ns:project}}:Fundatores',
	'grouppage-import' => '{{ns:project}}:Importatores',
	'grouppage-interface_editors' => '{{ns:project}}:Redactores del interfacie',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exemption de blocos IP',
	'grouppage-researcher' => '{{ns:project}}:Recercator',
	'grouppage-rollbacker' => '{{ns:project}}:Revertitores',
	'grouppage-transwiki' => '{{ns:project}}:Importatores transwiki',
	'grouppage-trusted' => '{{ns:project}}:Usatores de confidentia',
	'group-steward' => 'Stewardes',
	'group-sysadmin' => 'Administratores de systema',
	'group-editinterface' => 'Modificar interfacie',
	'group-Global_bot' => 'Robotes global',
	'group-Global_rollback' => 'Revocatores global',
	'group-Global_sysops' => 'Administratores global',
	'group-Ombudsmen' => 'Mediatores',
	'group-Staff' => 'Personal',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrator de systema',
	'group-editinterface-member' => 'modificar interfacie',
	'group-Global_bot-member' => 'robot global',
	'group-Global_rollback-member' => 'revocator global',
	'group-Global_sysops-member' => 'administrator global',
	'group-Ombudsmen-member' => 'mediator',
	'group-Staff-member' => 'membro del personal',
	'group-coder' => 'Programmatores',
	'group-coder-member' => 'programmator',
	'grouppage-coder' => 'Project:Programmator',
	'group-inactive' => 'Usatores inactive',
	'group-inactive-member' => 'usator inactive',
	'grouppage-inactive' => '{{ns:project}}:Usatores inactive',
	'wikimedia-copyright' => 'Le texto es disponibile sub le <a href="http://creativecommons.org/licenses/by-sa/3.0/"> licentia Creative Commons Attribution/Share-Alike</a>; additional conditiones pote esser in vigor. Vide <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Conditiones de uso</a> pro detalios.',
	'wikimedia-copyrightwarning' => 'Per contribuer, tu consenti al publication irrevocabile de tu contribution sub le [http://creativecommons.org/licenses/by-sa/3.0/ licentia Creative Commons Attribution/Share-Alike 3.0] e sub le [http://www.gnu.org/copyleft/fdl.html GFDL]. Tu consenti a esser recognoscite per re-usatores, al minimo, per medio de un hyperligamine o un adresse URL verso le articulo continente tu contribution. Vide le [http://wikimediafoundation.org/wiki/Terms_of_Use Conditiones de uso] pro detalios.',
	'wikimedia-editpage-tos-summary' => 'Si tu non vole que tu scripto sia modificate e redistribuite a voluntate, alora non submitte lo hic. Si tu non es le autor de isto, le contribution debe ja esser disponibile sub conditiones compatibile con le [http://wikimediafoundation.org/wiki/Terms_of_Use Conditiones de uso], e tu consenti a obedir a omne relevante requisitos de licentia.',
);

/** Indonesian (Bahasa Indonesia)
 * @author Bennylin
 * @author Irwangatot
 * @author IvanLanin
 * @author Kenrick95
 * @author Rex
 */
$messages['id'] = array(
	'wikimediamessages-desc' => 'Pesan-pesan spesifik Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Penggalangan_dana',
	'sitesupport' => 'Menyumbang',
	'tooltip-n-sitesupport' => 'Dukung kami',
	'specialpages-group-contribution' => 'Kontribusi/Penggalang dana',
	'group-abusefilter' => 'Editor filter penyalahgunaan',
	'group-accountcreator' => 'Pembuat akun',
	'group-arbcom' => 'Anggota komite arbitrase',
	'group-autopatrolled' => 'Otomatisterpatroli',
	'group-autoreviewer' => 'Autotinjau',
	'group-bigexport' => 'Eksportir besar',
	'group-confirmed' => 'Pengguna terkonfirmasi',
	'group-flood' => 'Pengguna bot',
	'group-founder' => 'Pendiri',
	'group-import' => 'Importir',
	'group-ipblock-exempt' => 'Pengecualian pemblokiran IP',
	'group-patroller' => 'Pematroli',
	'group-rollbacker' => 'Pengembali revisi',
	'group-transwiki' => 'Importir transwiki',
	'group-trusted' => 'Pengguna tepercaya',
	'group-abusefilter-member' => 'editor filter penyalahgunaan',
	'group-accountcreator-member' => 'Pembuat akun',
	'group-arbcom-member' => 'anggota komite arbitrase',
	'group-autopatrolled-member' => 'patroli otomatis',
	'group-autoreviewer-member' => 'autotinjau',
	'group-bigexport-member' => 'eksportir besar',
	'group-confirmed-member' => 'pengguna terkonfirmasi',
	'group-flood-member' => 'pengguna bot',
	'group-founder-member' => 'Pendiri',
	'group-import-member' => 'Importir',
	'group-ipblock-exempt-member' => 'Pengecualian pemblokiran IP',
	'group-patroller-member' => 'Pematroli',
	'group-rollbacker-member' => 'Pengembali revisi',
	'group-transwiki-member' => 'Importir transwiki',
	'group-trusted-member' => 'pengguna tepercaya',
	'grouppage-abusefilter' => '{{ns:project}}:Editor filter penyalahgunaan',
	'grouppage-accountcreator' => '{{ns:project}}:Pembuat akun',
	'grouppage-autopatrolled' => '{{ns:project}}:Patroli otomatis',
	'grouppage-autoreviewer' => '{{ns:project}}:Autotinjau',
	'grouppage-bigexport' => '{{ns:project}}:Eksportir besar',
	'grouppage-confirmed' => '{{ns:project}}:Pengguna terkonfirmasi',
	'grouppage-flood' => '{{ns:project}}:Pengguna bot',
	'grouppage-founder' => '{{ns:project}}:Pendiri',
	'grouppage-import' => '{{ns:project}}:Importir',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Pengecualian pemblokiran IP',
	'grouppage-rollbacker' => '{{ns:project}}:Pengembali revisi',
	'grouppage-transwiki' => '{{ns:project}}:Importir transwiki',
	'grouppage-trusted' => '{{ns:project}}:Pengguna tepercaya',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Administrator sistem',
	'group-editinterface' => 'Penyunting antarmuka',
	'group-Global_bot' => 'Bot global',
	'group-Global_rollback' => 'Pengembali revisi global',
	'group-Global_sysops' => 'Opsis global',
	'group-Ombudsmen' => 'Ombudsman',
	'group-Staff' => 'Staf',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'administrator sistem',
	'group-editinterface-member' => 'penyunting antarmuka',
	'group-Global_bot-member' => 'Bot global',
	'group-Global_rollback-member' => 'Pengembali revisi global',
	'group-Global_sysops-member' => 'opsis global',
	'group-Ombudsmen-member' => 'Ombudsman',
	'group-Staff-member' => 'Anggota staf',
	'grouppage-steward' => 'm:Stewards/id',
	'group-coder' => 'Programer',
	'group-coder-member' => 'programer',
	'group-inactive' => 'Pengguna tidak aktif',
	'group-inactive-member' => 'pengguna tidak aktif',
	'grouppage-inactive' => '{{ns:project}}:Pengguna tidak aktif',
	'wikimedia-copyright' => 'Teks tersedia di bawah <a href="http://creativecommons.org/licenses/by-sa/3.0/">Lisensi Atribusi/Berbagi Serupa Creative Commons</a>; ketentuan tambahan mungkin berlaku. Lihat <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Ketentuan Penggunaan</a> untuk lebih jelasnya.',
	'wikimedia-copyrightwarning' => 'Dengan menekan tombol simpan, Anda setuju untuk melepas kontribusi Anda seterusnya di bawah [http://creativecommons.org/licenses/by-sa/3.0/ Lisensi Atribusi/Berbagi Serupa Creative Commons 3.0] dan [http://www.gnu.org/copyleft/fdl.html GFDL]. Anda setuju untuk diberi kredit oleh pengguna ulang, minimal, melalui pranala atau URL ke halaman yang Anda kontribusikan. Lihat [http://wikimediafoundation.org/wiki/Terms_of_Use Ketentuan Penggunaan] untuk lebih jelasnya.',
	'wikimedia-editpage-tos-summary' => 'Jika Anda tidak ingin tulisan Anda disunting dan didistribusikan ulang jika diinginkan, jangan kirimkan tulisan Anda ke sini. Jika Anda tidak menulisnya sendiri, tulisan ini harus tersedia dengan ketentuan yang sesuai dengan [http://wikimediafoundation.org/wiki/Terms_of_Use Ketentuan Penggunaan], dan Anda setuju untuk mengikuti semua persyaratan perizinan yang relevan.',
);

/** Interlingue (Interlingue)
 * @author Malafaya
 */
$messages['ie'] = array(
	'sitesupport' => 'Donationes',
);

/** Igbo (Igbo)
 * @author Ukabia
 */
$messages['ig'] = array(
	'sitesupport' => 'Nyeturuanyi ihe',
	'tooltip-n-sitesupport' => 'Nye anyi ike',
	'group-flood' => 'Ndi na ji bot',
	'group-founder' => 'Ndi buzọr',
	'group-import' => 'Ndi na wete ihe',
	'group-flood-member' => 'onye na ji bot emé ihe',
	'group-founder-member' => 'onye buzọr',
	'group-import-member' => 'onye na wete ihe',
	'group-patroller-member' => 'onye na léfuru ihe anyà',
	'group-rollbacker-member' => 'onye-na-fifie-azú',
	'group-Staff-member' => 'ndi na rüoru nga',
);

/** Eastern Canadian (Unified Canadian Aboriginal Syllabics) (ᐃᓄᒃᑎᑐᑦ) */
$messages['ike-cans'] = array(
	'sitesupport' => 'ᑐᓐᓂᖅᑯᓯᐊᑦ ᑮᓇᐅᔭᐃᑦ',
);

/** Iloko (Ilokano)
 * @author Saluyot
 * @author לערי ריינהארט
 */
$messages['ilo'] = array(
	'sitesupport' => 'Donasion',
	'tooltip-n-sitesupport' => 'Suportarandakami',
);

/** Ingush (ГІалгІай Ğalğaj)
 * @author Tagir
 */
$messages['inh'] = array(
	'sitesupport' => 'СагIа',
);

/** Ido (Ido)
 * @author Malafaya
 * @author Wyvernoid
 * @author לערי ריינהארט
 */
$messages['io'] = array(
	'sitesupport' => 'Donacaji',
	'tooltip-n-sitesupport' => 'Suportez ni',
	'group-accountcreator' => 'Konto-kreanti',
	'group-founder' => 'Fondinti',
	'group-rollbacker' => 'Retrorulanti',
	'grouppage-founder' => '{{ns:project}}:Fondinti',
	'group-sysadmin' => 'Sistemo-administranti',
	'wikimedia-copyright' => 'La kontenajo esas sub la <a href="http://creativecommons.org/licenses/by-sa/3.0/"><i>Creative Commons Attribution/Share-Alike License</i></a>;
suplementala reguli forsan aplikesas.
Videz <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Reguli di Uzado</a> por detali.',
	'wikimedia-copyrightwarning' => "Per registrago, vu konkordas nerevokeble distributar vua kontributaji sub la [http://creativecommons.org/licenses/by-sa/3.0/ ''Creative Commons Attribution/Share-Alike License 3.0''] e la [http://www.gnu.org/copyleft/fdl.html GFDL]. Vu konkordas kreditesar da ri-uzanti, adminime, per ligilo od URL a la pagino quan vu kontributas ad. Videz la [http://wikimediafoundation.org/wiki/Terms_of_Use Reguli di Uzado] por detali.",
);

/** Icelandic (Íslenska)
 * @author S.Örvarr.S
 * @author Spacebirdy
 * @author לערי ריינהארט
 */
$messages['is'] = array(
	'sitesupport' => 'Fjárframlög',
	'tooltip-n-sitesupport' => 'Fjárframlagssíða',
	'group-autoreviewer' => 'Sjálfritdómarar',
	'group-Staff' => 'Starfsfólk',
	'group-Staff-member' => 'Starfsmaður',
);

/** Italian (Italiano)
 * @author Aushulz
 * @author BrokenArrow
 * @author Brownout
 * @author Darth Kule
 * @author Melos
 * @author Nemo bis
 * @author OrbiliusMagister
 * @author Pietrodn
 * @author Stefano-c
 * @author Una giornata uggiosa '94
 */
$messages['it'] = array(
	'wikimediamessages-desc' => 'Messaggi specifici di Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donazioni',
	'sitesupport' => 'Donazioni',
	'tooltip-n-sitesupport' => 'Sostienici',
	'specialpages-group-contribution' => 'Donazioni/Raccolta fondi',
	'group-abusefilter' => 'Gestori filtri anti abusi',
	'group-accountcreator' => 'Creatori di account',
	'group-autopatrolled' => 'Autopatrollatori',
	'group-autoreviewer' => 'Autorevisori',
	'group-bigexport' => 'Esportatori in blocco',
	'group-confirmed' => 'Utenti confermati',
	'group-flood' => 'Utenti Bot',
	'group-founder' => 'Fondatori',
	'group-import' => 'Importatori',
	'group-ipblock-exempt' => 'Esenti dal blocco IP',
	'group-patroller' => 'Patrollatori',
	'group-rollbacker' => 'Rollbacker',
	'group-transwiki' => 'Importatori transwiki',
	'group-trusted' => 'Utente fidato',
	'group-abusefilter-member' => 'gestore filtri anti abusi',
	'group-accountcreator-member' => 'creatore di account',
	'group-autopatrolled-member' => 'autopatroller',
	'group-autoreviewer-member' => 'autorevisore',
	'group-bigexport-member' => 'esportatore in blocco',
	'group-confirmed-member' => 'utente confermato',
	'group-flood-member' => 'Utente bot',
	'group-founder-member' => 'fondatore',
	'group-import-member' => 'importatore',
	'group-ipblock-exempt-member' => 'Esente dal blocco IP',
	'group-patroller-member' => 'Patrollatore',
	'group-rollbacker-member' => 'rollbacker',
	'group-transwiki-member' => 'importatore transwiki',
	'group-trusted-member' => 'utente fidato',
	'grouppage-abusefilter' => '{{ns:project}}:Gestori filtri anti abusi',
	'grouppage-accountcreator' => '{{ns:project}}:Creatori di account',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatroller',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorevisori',
	'grouppage-bigexport' => '{{ns:project}}:Esportatori in blocco',
	'grouppage-confirmed' => '{{ns:project}}:Utenti confermati',
	'grouppage-flood' => '{{ns:project}}:Utenti bot',
	'grouppage-founder' => '{{ns:project}}:Founders',
	'grouppage-import' => '{{ns:project}}:Importatori',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Esenti dal blocco IP',
	'grouppage-rollbacker' => '{{ns:project}}:Rollbackers',
	'grouppage-transwiki' => '{{ns:project}}:Importatori transwiki',
	'grouppage-trusted' => '{{ns:project}}:utenti fidati',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Amministratori di sistema',
	'group-editinterface' => "Editori dell'interfaccia",
	'group-Global_bot' => 'Bot globali',
	'group-Global_rollback' => 'Rollbacker globali',
	'group-Global_sysops' => 'Amministratori globali',
	'group-Ombudsmen' => 'Ombudsmen',
	'group-Staff' => 'Staff',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'amministratore di sistema',
	'group-editinterface-member' => "editore dell'interfaccia",
	'group-Global_bot-member' => 'bot globale',
	'group-Global_rollback-member' => 'rollbacker globale',
	'group-Global_sysops-member' => 'amministratore globale',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'Membro dello staff',
	'grouppage-steward' => 'm:Stewards/it',
	'grouppage-Global_rollback' => 'm:Global rollback/it',
	'group-coder' => 'Coder',
	'group-coder-member' => 'coder',
	'group-inactive' => 'Utenti inattivi',
	'group-inactive-member' => 'utente inattivo',
	'grouppage-inactive' => '{{ns:project}}:Utenti inattivi',
	'wikimedia-copyright' => 'Il testo è disponibile secondo la <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.it">licenza Creative Commons Attribuzione-Condividi allo stesso modo</a>; possono applicarsi condizioni ulteriori. Vedi le <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">condizioni d\'uso</a> per i dettagli.',
	'wikimedia-copyrightwarning' => "Salvando, accetti irrevocabilmente di rilasciare il tuo contributo sotto le licenze [http://creativecommons.org/licenses/by-sa/3.0/deed.it Creative Commons Attribuzione-Condividi allo stesso modo 3.0] e [http://www.gnu.org/copyleft/fdl.html GFDL]. Accetti che i riutilizzatori te lo attribuiscano almeno mediante un collegamento ipertestuale o un URL alla pagina a cui hai contribuito. Consulta le [http://wikimediafoundation.org/wiki/Terms_of_Use condizioni d'uso] per i dettagli.",
	'wikimedia-editpage-tos-summary' => "Se non desideri che il tuo testo possa essere modificato e ridistribuito a volontà, allora non inserirlo qui. Se non l'hai scritto tu, deve essere disponibile a condizioni compatibili con le [http://wikimediafoundation.org/wiki/Terms_of_Use condizioni d'uso], e accetti di seguire tutti i requisiti di licenza.",
);

/** Japanese (日本語)
 * @author Aotake
 * @author Fievarsty
 * @author Fryed-peach
 * @author Hosiryuhosi
 * @author JtFuruhata
 * @author Meno25
 * @author Suisui
 * @author Whym
 * @author 青子守歌
 */
$messages['ja'] = array(
	'wikimediamessages-desc' => 'ウィキメディア固有のメッセージ',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/ja?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => '寄付',
	'tooltip-n-sitesupport' => 'ご支援ください',
	'specialpages-group-contribution' => '寄付/資金調達',
	'group-abusefilter' => '不正利用フィルター編集者',
	'group-accountcreator' => 'アカウント作成権限保持者',
	'group-arbcom' => '裁定委員会のメンバー',
	'group-autopatrolled' => '自動パトローラー',
	'group-autoreviewer' => '自動査読者',
	'group-bigexport' => '大規模エクスポート権限保持者',
	'group-confirmed' => '承認された利用者',
	'group-editprotected' => '保護されたページ編集者',
	'group-filemover' => 'ファイル移動者',
	'group-flood' => 'ボット利用者',
	'group-founder' => '創設者',
	'group-import' => 'インポート権限保持者',
	'group-interface_editors' => 'インターフェイス編集者',
	'group-ipblock-exempt' => 'IPブロック適用除外者',
	'group-patroller' => 'パトローラー',
	'group-researcher' => '調査人',
	'group-rollbacker' => 'ロールバック権限保持者',
	'group-transwiki' => 'トランスウィキ・インポート権限保持者',
	'group-trusted' => '信任を得た利用者',
	'group-abusefilter-member' => '不正利用フィルター編集者',
	'group-accountcreator-member' => 'アカウント作成権限保持者',
	'group-arbcom-member' => '裁定委員会のメンバー',
	'group-autopatrolled-member' => '自動パトロール権限保持者',
	'group-autoreviewer-member' => '自動査読者',
	'group-bigexport-member' => '大規模エクスポート権限保持者',
	'group-confirmed-member' => '承認された利用者',
	'group-editprotected-member' => '保護されたページ編集者',
	'group-filemover-member' => 'ファイル移動者',
	'group-flood-member' => 'ボット利用者',
	'group-founder-member' => '創設者',
	'group-import-member' => 'インポート権限保持者',
	'group-interface_editors-member' => 'インターフェイス編集者',
	'group-ipblock-exempt-member' => 'IPブロック適用除外者',
	'group-patroller-member' => 'パトローラー',
	'group-researcher-member' => '調査人',
	'group-rollbacker-member' => 'ロールバック権限保持者',
	'group-transwiki-member' => 'トランスウィキ・インポート権限保持者',
	'group-trusted-member' => '信任を得た利用者',
	'grouppage-abusefilter' => '{{ns:project}}:不正利用フィルター編集者',
	'grouppage-accountcreator' => '{{ns:project}}:アカウント作成権限保持者',
	'grouppage-arbcom' => '{{ns:project}}:調停委員会のメンバー',
	'grouppage-autopatrolled' => '{{ns:project}}:自動パトロール権限保持者',
	'grouppage-autoreviewer' => '{{ns:project}}:自動査読者',
	'grouppage-bigexport' => '{{ns:project}}:大規模エクスポート権限保持者',
	'grouppage-confirmed' => '{{ns:project}}:承認された利用者',
	'grouppage-editprotected' => '{{ns:project}}:保護されたページ編集者',
	'grouppage-filemover' => '{{ns:project}}:ファイル移動者',
	'grouppage-flood' => '{{ns:project}}:ボット利用者',
	'grouppage-founder' => '{{ns:project}}:創設者',
	'grouppage-import' => '{{ns:project}}:インポート権限保持者',
	'grouppage-interface_editors' => '{{ns:project}}:インターフェイス編集者',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IPブロック適用除外',
	'grouppage-researcher' => '{{ns:project}}:調査人',
	'grouppage-rollbacker' => '{{ns:project}}:ロールバック権限保持者',
	'grouppage-transwiki' => '{{ns:project}}:トランスウィキ・インポート権限保持者',
	'grouppage-trusted' => '{{ns:project}}:信任を得た利用者',
	'group-steward' => 'スチュワード',
	'group-sysadmin' => 'システム管理者',
	'group-editinterface' => 'インタフェース編集者',
	'group-Global_bot' => 'グローバル・ボット',
	'group-Global_rollback' => 'グローバル・ロールバック権限保持者',
	'group-Global_sysops' => 'グローバル管理者',
	'group-Ombudsmen' => 'オンブズマン',
	'group-Staff' => 'スタッフ',
	'group-steward-member' => 'スチュワード',
	'group-sysadmin-member' => 'システム管理者',
	'group-editinterface-member' => 'インタフェース編集者',
	'group-Global_bot-member' => 'グローバル・ボット',
	'group-Global_rollback-member' => 'グローバル・ロールバック権限保持者',
	'group-Global_sysops-member' => 'グローバル管理者',
	'group-Ombudsmen-member' => 'オンブズマン',
	'group-Staff-member' => 'スタッフ',
	'grouppage-steward' => 'm:Stewards/ja',
	'group-coder' => 'コーダー',
	'group-coder-member' => 'コーダー',
	'group-inactive' => '活動停止中の利用者',
	'group-inactive-member' => '活動停止中の利用者',
	'grouppage-inactive' => '{{ns:project}}:活動停止中の利用者',
	'shared-repo-name-shared' => 'ウィキメディア・コモンズ',
	'wikimedia-copyright' => 'テキストは<a href="http://creativecommons.org/licenses/by-sa/3.0/deed.ja">クリエイティブ・コモンズ 表示-継承ライセンス</a>の下で利用可能です。追加の条件が適用される場合があります。詳細は<a href="http://wikimediafoundation.org/wiki/%E5%88%A9%E7%94%A8%E8%A6%8F%E7%B4%84">利用規約</a>を参照してください。',
	'wikimedia-copyrightwarning' => '保存すると、あなたは自身の投稿を[http://creativecommons.org/licenses/by-sa/3.0/deed.ja クリエイティブ・コモンズ 表示-継承ライセンス 3.0] ならびに [http://www.gnu.org/copyleft/fdl.html GFDL] の下で公開することに同意したことになります。この公開は取り消せません。あなたは再利用者によって、最低でもあなたが投稿しているページへのハイパーリンクか URL を通して、クレジット表示されることに同意したとみなされます。詳細は[http://wikimediafoundation.org/wiki/%E5%88%A9%E7%94%A8%E8%A6%8F%E7%B4%84 利用規約]を参照してください。',
	'wikimedia-editpage-tos-summary' => 'もしあなたが自身の文章を勝手に編集や再配布してほしくないのなら、ここに投稿しないでください。文章があなた自身で書いたものでない場合、その文章はこの[http://wikimediafoundation.org/wiki/%E5%88%A9%E7%94%A8%E8%A6%8F%E7%B4%84 利用規約]と整合する条件のもとで利用可能である必要があります。また、その場合、あなたは全ての関係するライセンス要件に従うことに同意しなければなりません。',
);

/** Lojban (Lojban)
 * @author OldakQuill
 */
$messages['jbo'] = array(
	'sitesupport' => 'jdini sidju',
);

/** Jutish (Jysk)
 * @author Ælsån
 */
$messages['jut'] = array(
	'sitesupport' => 'Støtside',
	'tooltip-n-sitesupport' => 'Støt os',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 * @author Pras
 */
$messages['jv'] = array(
	'wikimediamessages-desc' => 'Pesen-pesen spesifik Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Panggalangan_dana',
	'sitesupport' => 'Nyumbang dana',
	'tooltip-n-sitesupport' => 'Sokongen kita',
	'group-abusefilter' => 'Panyunting saringan salah-guna',
	'group-accountcreator' => 'Sing gawé akun',
	'group-autoreviewer' => 'Pamriksa otomatis',
	'group-bigexport' => 'Èksportir gedhé',
	'group-confirmed' => 'Panganggo wis dikonfirmasi',
	'group-flood' => 'Para panganggo bot',
	'group-founder' => 'Pendhiri',
	'group-import' => 'Importir',
	'group-ipblock-exempt' => 'Pambébasan saka pamblokiran IP',
	'group-rollbacker' => 'Sing mbalèkaké révisi',
	'group-transwiki' => 'Importir transwiki',
	'group-abusefilter-member' => 'panyunting saringan salah-guna',
	'group-accountcreator-member' => 'Sing gawé akun',
	'group-autopatrolled-member' => 'patroli otomatis',
	'group-autoreviewer-member' => 'pamriksa otomatis',
	'group-bigexport-member' => 'èksportir gedhé',
	'group-confirmed-member' => 'panganggo wis dikonfirmasi',
	'group-flood-member' => 'panganggo bot',
	'group-founder-member' => 'Pandhiri',
	'group-import-member' => 'importir',
	'group-ipblock-exempt-member' => 'Pambébasan saka pamblokiran IP',
	'group-rollbacker-member' => 'Sing mbalèkaké révisi',
	'group-transwiki-member' => 'importir transwiki',
	'grouppage-abusefilter' => '{{ns:project}}:Panyunting saringan salah-guna',
	'grouppage-accountcreator' => '{{ns:project}}:Sing gawé akun',
	'grouppage-autopatrolled' => '{{ns:project}}:Patroli otomatis',
	'grouppage-autoreviewer' => '{{ns:project}}:Pamriksa otomatis',
	'grouppage-bigexport' => '{{ns:project}}:Èksportir gedhé',
	'grouppage-confirmed' => '{{ns:project}}:Panganggo wis dikonfirmasi',
	'grouppage-flood' => '{{ns:project}}:Para panganggo bot',
	'grouppage-founder' => '{{ns:project}}:Pandhiri',
	'grouppage-import' => '{{ns:project}}:Importir',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Pambébasan saka pamblokiran IP',
	'grouppage-rollbacker' => '{{ns:project}}:Sing mbalèkaké révisi',
	'grouppage-transwiki' => '{{ns:project}}:Importir transwiki',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Administrator sistem',
	'group-editinterface' => 'Panyunting adu-rai',
	'group-Global_bot' => 'Bot global',
	'group-Global_rollback' => 'Sing mbalèkaké révisi global',
	'group-Ombudsmen' => 'Ombudsman',
	'group-Staff' => 'Staf',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrator sistem',
	'group-editinterface-member' => 'panyunting adu-rai',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'Sing mbalèkaké révisi global',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'staf',
	'grouppage-sysadmin' => 'm:System administrators',
	'grouppage-Global_rollback' => 'm:Global rollback',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission',
	'group-coder' => 'Programer',
	'group-coder-member' => 'programer',
	'grouppage-coder' => 'Project:Programer',
	'group-inactive' => 'Panganggo ora aktif',
	'group-inactive-member' => 'panganggo ora aktif',
	'grouppage-inactive' => '{{ns:project}}:Panganggo ora aktif',
	'wikimedia-copyright' => 'Tèks cumawis wonten ing saandhaping <a href="http://creativecommons.org/licenses/by-sa/3.0/">Lisensi Atribusi/Berbagi Serupa Creative Commons</a>; mbokmanawi ugi wonten wewaton tambahan. Pirsani <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Katentuan Pangginaan</a> supados langkung gamblang.',
	'wikimedia-copyrightwarning' => 'Kanthi nge-klik tombol simpen, panjenengan sarujuk nglepasaken kontribusi panjenengan salajengipun wonten ing saandhaping [http://creativecommons.org/licenses/by-sa/3.0/ Lisensi Atribusi/Berbagi Serupa Creative Commons 3.0] lan [http://www.gnu.org/copyleft/fdl.html GFDL]. Panjenengan sarujuk dipun-paringi krédit déning panganggé sanès, sakbotenipun, lumantar pranala utawi URL dhumateng kaca ingkang panjenengan kontribusèkaken. Pirsani [http://wikimediafoundation.org/wiki/Terms_of_Use Katentuan Pangginaan] supados langkung gamblang.',
	'wikimedia-editpage-tos-summary' => 'Manawi panjenengan boten ngersakaken seratan panjenengan bakal dipunsuntig lan dipunsebar malih manawi dipunkersakaken, sampun ngantos ngirim seratan ing ngriki.
Manawi punika sanès seratan panjenengan piyambak, seratan punika kedah kasediakaken wonten ing saandhaping [http://wikimediafoundation.org/wiki/Terms_of_Use Katentuan pangginaan], lan panjenengan sarujuk manut dhumateng sadaya persaratan lisènsi ingkang kagandhèng.',
);

/** Georgian (ქართული)
 * @author Alsandro
 * @author BRUTE
 * @author David1010
 * @author Malafaya
 * @author Sopho
 * @author Temuri rajavi
 * @author לערי ריינהארט
 * @author გიორგიმელა
 */
$messages['ka'] = array(
	'wikimediamessages-desc' => 'ვიკიმედიის სპეციფიკური წერილები',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/ka',
	'sitesupport' => 'შეწირულობები',
	'tooltip-n-sitesupport' => 'მხარდაჭერა',
	'specialpages-group-contribution' => 'წვლილი / ფონდრაიზერი',
	'group-abusefilter' => 'ბოროტად გამოყენების ფილტრის მეპატრულე',
	'group-accountcreator' => 'ანგარიში შემქმნელები',
	'group-arbcom' => 'საარბიტრჟო კომიტეტის წევრები',
	'group-autopatrolled' => 'ავტოპატრულები',
	'group-autoreviewer' => 'ავტომხილველები',
	'group-bigexport' => 'დიდი ექსპორტორები',
	'group-confirmed' => 'დადასტურებული მომხმარებლები',
	'group-editprotected' => 'დაცული გვერდების რედაქტორები',
	'group-filemover' => 'ფაილის გადამტანები',
	'group-flood' => 'მომხმარებელი-ბოტები',
	'group-founder' => 'დამაარსებლები',
	'group-import' => 'იმპორტიორები',
	'group-interface_editors' => 'ინტერფეისის რედაქტორები',
	'group-ipblock-exempt' => 'IP-ბლოკირებების გამონაკლისები',
	'group-patroller' => 'პატრულები',
	'group-researcher' => 'მკვლევარები',
	'group-rollbacker' => 'გამაუქმებლები',
	'group-transwiki' => 'Transwiki-ს იმპორტიორები',
	'group-trusted' => 'სანდო მომხმარებლები',
	'group-abusefilter-member' => 'ბოროტად გამოყენებსის ფილტრის რედაქტორი',
	'group-accountcreator-member' => 'ანგარიშის შემქმნელები',
	'group-arbcom-member' => 'საარბიტრაჟო კომიტეტის წევრი',
	'group-autopatrolled-member' => 'ავტომოპატრულე',
	'group-autoreviewer-member' => 'ავტომხილველი',
	'group-bigexport-member' => 'დიდი ექსპორტორი',
	'group-confirmed-member' => 'დადასტურებული მომხმარებელი',
	'group-editprotected-member' => 'დაცული გვერდების რედაქტორი',
	'group-filemover-member' => 'ფაილის გადამტანი',
	'group-flood-member' => 'მომხმარებელი-ბოტი',
	'group-founder-member' => 'დამაარსებელი',
	'group-import-member' => 'იმპორტორი',
	'group-interface_editors-member' => 'ინტერფეისის რედაქტორი',
	'group-ipblock-exempt-member' => 'IP ბლოკირების გამონაკლისები',
	'group-patroller-member' => 'პატროლიორი',
	'group-researcher-member' => 'მკვლევარი',
	'group-rollbacker-member' => 'გამაუქმებელი',
	'group-transwiki-member' => 'Transwiki-ს იმპორტორი',
	'group-trusted-member' => 'სანდო მომხმარებელი',
	'grouppage-abusefilter' => '{{ns:project}}:ბოროტად გამოყენების ფილტრის რედაქტორები',
	'grouppage-accountcreator' => '{{ns:project}}:ანგარიშების შემქმნელები',
	'grouppage-arbcom' => '{{ns:project}}:საარბიტრაჟო კომიტეტის წევრები',
	'grouppage-autopatrolled' => '{{ns:project}}:ავტომეპატრულე',
	'grouppage-autoreviewer' => '{{ns:project}}:ავტომხილველები',
	'grouppage-bigexport' => '{{ns:project}}:დიდი ექსპორტიორები',
	'grouppage-confirmed' => '{{ns:project}}:დადასტურებული მომხმარებლები',
	'grouppage-editprotected' => '{{ns:project}}:დაცული გვერდების რედაქტორები',
	'grouppage-filemover' => '{{ns:project}}:ფაილის გადამტანები',
	'grouppage-flood' => '{{ns:project}}:მომხმარებელი-ბოტები',
	'grouppage-founder' => '{{ns:project}}:დამაარსებლები',
	'grouppage-import' => '{{ns:project}}:იმპორტიორები',
	'grouppage-interface_editors' => '{{ns:project}}:ინტერფეისის რედაქტორები',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-დაბლოკვების გამონაკლისები',
	'grouppage-researcher' => '{{ns:project}}:მკვლევარები',
	'grouppage-rollbacker' => '{{ns:project}}:გამაუქმებლები',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-ს იმპორტორები',
	'grouppage-trusted' => '{{ns:project}}:სანდო მომხმარებლები',
	'group-steward' => 'სტიუარდები',
	'group-sysadmin' => 'სისტემური ადმინისტრატორები',
	'group-editinterface' => 'ინტერფეისის რედაქტორები',
	'group-Global_bot' => 'გლობალური ბოტები',
	'group-Global_rollback' => 'გლობალური გამმაუქმებლები',
	'group-Global_sysops' => 'გლობალური ადმინისტრატორები',
	'group-Ombudsmen' => 'ომბუცმენები',
	'group-Staff' => 'თანამშრომლები',
	'group-steward-member' => 'სტიუარდი',
	'group-sysadmin-member' => 'სისტემური ადმინისტრატორი',
	'group-editinterface-member' => 'ინტერფეისის რედაქტორი',
	'group-Global_bot-member' => 'გლობალური რობოტი',
	'group-Global_rollback-member' => 'გლობალური გამაუქმებელი',
	'group-Global_sysops-member' => 'გლობალური ადმინისტრატორი',
	'group-Ombudsmen-member' => 'ობუცმენი',
	'group-Staff-member' => 'თანამშრომელი',
	'group-coder' => 'პროგრამისტი',
	'group-coder-member' => 'პროგრამისტი',
	'group-inactive' => 'არააქტიური მომხმარებლები',
	'group-inactive-member' => 'არააქტიური მომხმარებელი',
	'grouppage-inactive' => '{{ns:project}}:არააქტიური მომხმარებლები',
	'wikimedia-copyright' => 'მოცემული ტექსტი წარმოდგენილია <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike ლიცენზიით</a>; შესაძლოა დამატებითი პირობების არსებობა. დეტალებისთვის იხილეთ <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">გამოყენების წესები</a>.',
	'wikimedia-copyrightwarning' => '<span style="font-size:115%;">→ ნუ გადმოწერთ ტექსტს აქ სხვა ვებსაიტიდან </span></b>: პატივი ეცით [[ვიკიპედია:საავტორო უფლებები|საავტორო უფლებებს]] ([[დახმარება:რეპუბლიკაცია|დახმარება]]);<br />
<b><span style="font-size:115%;">→ მიუთითეთ თქვენს ინფორმაციას გადამოწმებადი წყაროები </span></b>: [[ვიკიპედია:გადამოწმებადობა|გადამოწმებადობა]] ([[დახმარება:წყაროს მითითება|დახმარება]]).
<p style="font-size:90%" align="center">ღილაკზე « \'\'\'გვერდის შენახვა\'\'\' » დაწკაპუნებით, თქვენ თანახმა ხართ შეუქცევად განათავსოთ თქვენი წვლილი [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike (ვერსია 3.0)] და [http://www.gnu.org/copyleft/fdl.html GFDL] ლიცენზიებით. თქვენ ასევე თანახმა ხართ, რომ სხვა მომხმარებელთა მიერ თქვენს მიერ შეცვლილი გვერდის გამოყენებისას თქვენი წვლილი დამოწმდება მინიმუმ ჰიპერბმულის ან URL-ის მეშვეობით. იხილეთ ასევე [http://wikimediafoundation.org/wiki/Terms_of_Use გამოყენების პირობები] დამატებითი ინფორმაციისთვის.</p>',
	'wikimedia-editpage-tos-summary' => '<div style="border: 1px solid #aaa;margin: 1em 0;padding: 0 0.4em 0 0.4em;">
თუ არ გსურთ, რომ თქვენი ნაწერი თავისუფლად გავრცელდეს და ჩასწორდეს, აქ მას ნუ შემოიტანთ. თუ ეს ტექსტი თქვენი დაწერილი არ არის, იგი უნდა აკმაყოფილებდეს [http://wikimediafoundation.org/wiki/Terms_of_Use გამოყენების წესებს], ხოლო თქვენ თანახმა ხართ დაემორჩილოთ ნებისმიერ დაკავშირებულ სალიცენზიო მოთხოვნას.
</div>',
);

/** Kara-Kalpak (Qaraqalpaqsha)
 * @author AlefZet
 */
$messages['kaa'] = array(
	'sitesupport' => "Ja'rdem berıw",
	'tooltip-n-sitesupport' => "Bizge ja'rdem berin'",
);

/** Kabyle (Taqbaylit)
 * @author Agurzil
 * @author Berkus Tiwal
 */
$messages['kab'] = array(
	'wikimediamessages-desc' => 'Iznan usligen n Wikimedia',
	'sitesupport' => 'Efk-aɣ idrimen',
	'tooltip-n-sitesupport' => 'Ellil-aɣ',
	'group-accountcreator' => 'Imeskaren n imiḍanen',
	'group-founder' => 'Imeskar imenza',
	'grouppage-founder' => '{{ns:project}}:Imeskar Imenza',
	'group-Staff-member' => 'Amaslad (membre) n terbaεt',
);

/** Kirmanjki (Kırmancki)
 * @author Mirzali
 */
$messages['kiu'] = array(
	'sitesupport' => 'Beğş',
);

/** Kazakh (Arabic script) (‫قازاقشا (تٴوتە)‬) */
$messages['kk-arab'] = array(
	'sitesupport' => 'دەمەۋشىلىك',
);

/** Kazakh (Cyrillic) (Қазақша (Cyrillic))
 * @author AlefZet
 * @author GaiJin
 */
$messages['kk-cyrl'] = array(
	'sitesupport' => 'Демеушілік',
	'group-import' => 'Сырттан алушылар',
	'group-import-member' => 'сырттан алушы',
	'group-sysadmin' => 'Жүйе әкімшілері',
	'group-Staff' => 'Басқарма',
	'group-sysadmin-member' => 'жүйе әкімшісі',
	'group-Staff-member' => 'Басқарма мүшесі',
);

/** Kazakh (Latin) (Қазақша (Latin)) */
$messages['kk-latn'] = array(
	'sitesupport' => 'Demewşilik',
);

/** Kalaallisut (Kalaallisut)
 * @author Qaqqalik
 */
$messages['kl'] = array(
	'wikimedia-copyright' => 'Allatat ilaatinneqarput <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>-ip ataani;
piumasaqaatit atuutinneqarsinnaapput.
Takuuk <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Atugassatut piumasaqaatit</a> paasissutissaanerusut.',
);

/** Khmer (ភាសាខ្មែរ)
 * @author Kiensvay
 * @author Lovekhmer
 * @author Thearith
 * @author គីមស៊្រុន
 * @author វ័ណថារិទ្ធ
 */
$messages['km'] = array(
	'wikimediamessages-desc' => 'សារយថាប្រភេទរបស់វិគីមេឌា',
	'sitesupport-url' => 'Project:ទំព័រគាំទ្រ',
	'sitesupport' => 'វិភាគទាន',
	'tooltip-n-sitesupport' => 'គាំទ្រ​យើងខ្ញុំ',
	'group-abusefilter' => 'កម្មវិធី​កែ​សម្រួល​តម្រងការបំពានច្បាប់',
	'group-accountcreator' => 'អ្នកបង្កើតគណនី',
	'group-autoreviewer' => 'ក្រុម​អ្នកត្រួតពិនិត្យឡើងវិញដោយ​ស្វ័យប្រវត្តិ​',
	'group-bigexport' => 'ក្រុម​អ្នកនាំចេញ​ធំ​',
	'group-confirmed' => 'អ្នកប្រើប្រាស់ទាំងឡាយ​ដែលត្រូវបាន​ទទួលស្គាល់',
	'group-founder' => 'ស្ថាបនិក',
	'group-import' => 'អ្នកនាំចូល',
	'group-patroller' => 'អ្នកតាមដាន',
	'group-transwiki' => 'អ្នកនាំចូលអន្តរវិគី',
	'group-abusefilter-member' => 'កម្មវិធី​កែ​សម្រួល​តម្រងការបំពានច្បាប់',
	'group-accountcreator-member' => 'អ្នកបង្កើតគណនី',
	'group-autopatrolled-member' => 'អ្នកល្បាត​ស្វ័យប្រវត្តិ',
	'group-autoreviewer-member' => '​អ្នកត្រួតពិនិត្យឡើងវិញដោយ​ស្វ័យប្រវត្តិ​',
	'group-bigexport-member' => 'អ្នក​នាំចេញ​ធំ​',
	'group-confirmed-member' => 'អ្នកប្រើប្រាស់​ដែលត្រូវបាន​ទទួលស្គាល់',
	'group-founder-member' => 'ស្ថាបនិក',
	'group-import-member' => 'អ្នកនាំចូល',
	'group-patroller-member' => 'អ្នកតាមដាន',
	'group-transwiki-member' => 'អ្នកនាំចូលអន្តរវិគី',
	'grouppage-abusefilter' => '{{ns:project}}:កម្មវិធី​កែ​សម្រួល​តម្រងការបំពានច្បាប់',
	'grouppage-accountcreator' => '{{ns:project}}:អ្នកបង្កើតគណនី',
	'grouppage-autopatrolled' => '{{ns:project}}:អ្នកល្បាត​ស្វ័យប្រវត្តិ',
	'grouppage-autoreviewer' => '{{ns:project}}:អ្នកត្រួតពិនិត្យឡើងវិញដោយ​ស្វ័យ​ប្រវត្តិ​',
	'grouppage-bigexport' => '{{ns:project}}:ក្រុមអ្នកនាំចេញ​ធំ​',
	'grouppage-confirmed' => '{{ns:project}}:អ្នកប្រើប្រាស់ទាំងឡាយដែលត្រូវបាន​ទទួលស្គាល់',
	'grouppage-founder' => '{{ns:project}}:ស្ថាបនិក',
	'grouppage-import' => '{{ns:project}}:អ្នកនាំចូល',
	'grouppage-transwiki' => '{{ns:project}}:អ្នកនាំចូលអន្តរវិគី',
	'group-sysadmin' => 'អ្នកអភិបាលប្រព័ន្ឋ',
	'group-editinterface' => 'កែប្រែអន្តរមុខ',
	'group-Global_bot' => 'រូបយន្ត​សកល',
	'group-Ombudsmen' => 'អមប៊ុដហ្ស៍ម៉ឹន',
	'group-Staff' => 'បុគ្គលិកបម្រើការ',
	'group-sysadmin-member' => 'អ្នកអភិបាលប្រព័ន្ឋ',
	'group-editinterface-member' => 'កែប្រែអន្តរមុខ',
	'group-Global_bot-member' => 'រូបយន្ត​សកល',
	'group-Ombudsmen-member' => 'អមប៊ុដហ្ស៍ម៉ឹន',
	'group-Staff-member' => 'សមាជិកដែលជាបុគ្គលិកបម្រើការ',
	'group-coder' => 'អ្នកសរសេរកូដ',
	'group-coder-member' => 'អ្នកសរសេរកូដ',
	'group-inactive' => 'ក្រុម​អ្នក​ប្រើ​ប្រាស់​អសកម្ម​',
	'group-inactive-member' => 'អ្នក​ប្រើ​ប្រាស់​អសកម្ម​',
	'grouppage-inactive' => '{{ns:project}}:អ្នកប្រើប្រាស់អសកម្ម',
	'wikimedia-copyright' => 'អត្ថបទ​នេះ​ត្រូវបានផ្ដល់ក្រោមអាជ្ញាបណ្ឌ<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>​។ លក្ខខណ្ឌបន្ថែម​ផ្សេងៗទៀតក៏នឹងអាចត្រូវបានអនុវត្ត។​
សូមមើល <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">លក្ខខណ្ឌ​ក្នុងការ​ប្រើប្រាស់</a> សម្រាប់​ព័ត៌មានលម្អិត​។',
	'wikimedia-copyrightwarning' => 'តាមរយៈ​ការរក្សាទុកនេះ អ្នកយល់ព្រមដោយឥតកែប្រែក្នុងការ​ដាក់បញ្ចូល​ការរួមចំណែក​របស់អ្នក ឲ្យស្ថិតក្រោម​​[http://creativecommons.org/licenses/by-sa/3.0/ អាជ្ញាបណ្ណ​ 3.0 នៃ Creative Commons Attribution/Share-Alike] និង[http://www.gnu.org/copyleft/fdl.html អាជ្ញាបណ្ណ​ GFDL].
អ្នកយល់ព្រមក្នុងការដែលត្រូវបានទទួលស្គាល់ដោយអ្នកប្រើប្រាស់ដទៃទៀត យ៉ាងហោចណាស់តាមរយៈតំណបណ្ដាញ ឬ URL ទៅកាន់ទំព័រដែលអ្នកបានចូលរួមចំណែក​។
សូមមើល [http://wikimediafoundation.org/wiki/Terms_of_Use/ លក្ខខណ្ឌ​ក្នុងការ​ប្រើប្រាស់] សម្រាប់​ព័ត៌មានលម្អិត​។',
	'wikimedia-editpage-tos-summary' => 'If you do not want your writing to be edited and redistributed at will, then do not submit it here.
If you did not write this yourself, it must be available under terms consistent with the [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use], and you agree to follow any relevant licensing requirements.

ប្រសិបបើ​អ្នក​មិនចង់ឲ្យ​សំនេរ​របស់អ្នកត្រូវបាន​កែប្រែ និងចែកចាញដោយ​ឆន្ទះ នោះសូមកុំ​ដាក់បញ្ចូលមកទីនេះ​។
ប្រសិនបើ​អ្នកមិនបានសរសេរ​ដោយខ្លួនឯងផ្ទាល់ទេ សំនេរនេះ​ត្រូវតែអាចរកបានក្រាមអាជ្ញាបណ្ណទាំងឡាយ​ណាដែលមានលក្ខណៈ​ស្របនឹង [http://wikimediafoundation.org/wiki/Terms_of_Use លក្ខខណ្ឌ​ក្នុងការ​ប្រើប្រាស់] ហើយអ្នកយល់ព្រមក្នុងការគោរពតាម​តម្រូវការនានាក្នុងការដាក់ចូលអាជ្ញាបណ្ណដែលពាក់ព័ន្ធ​ណាមួយ។',
);

/** Kannada (ಕನ್ನಡ)
 * @author Nayvik
 * @author Shushruth
 * @author לערי ריינהארט
 */
$messages['kn'] = array(
	'sitesupport' => 'ದೇಣಿಗೆ',
	'tooltip-n-sitesupport' => 'ನಮ್ಮನ್ನು ಬೆಂಬಲಿಸಿ',
	'group-founder' => 'ಸಂಸ್ಥಾಪಕರು',
	'group-founder-member' => 'ಸಂಸ್ಥಾಪಕ',
	'group-Staff-member' => 'ಸಿಬ್ಬಂದಿ',
	'group-inactive' => 'ನಿಷ್ಕ್ರಿಯ ಸದಸ್ಯರು',
	'group-inactive-member' => 'ನಿಷ್ಕ್ರಿಯ ಸದಸ್ಯ',
	'grouppage-inactive' => '{{ns:project}}:ನಿಷ್ಕ್ರಿಯ ಸದಸ್ಯರು',
);

/** Korean (한국어)
 * @author Albamhandae
 * @author Devunt
 * @author Ficell
 * @author FriedC
 * @author ITurtle
 * @author Ilovesabbath
 * @author Klutzy
 * @author Kwj2772
 * @author ToePeu
 * @author Yknok29
 */
$messages['ko'] = array(
	'wikimediamessages-desc' => '위키미디어 전용 메시지',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/ko',
	'sitesupport' => '기부 안내',
	'tooltip-n-sitesupport' => '지원을 기다립니다',
	'specialpages-group-contribution' => '기부 및 모금',
	'group-abusefilter' => '어뷰즈 필터 편집자',
	'group-accountcreator' => '계정 생성자',
	'group-arbcom' => '중재위원',
	'group-autopatrolled' => '자동 검토자',
	'group-autoreviewer' => '자동 검토원',
	'group-bigexport' => '대량 문서 익스포터',
	'group-confirmed' => '자동 인증된 사용자',
	'group-editprotected' => '보호된 문서 편집자',
	'group-filemover' => '파일 이름 변경자',
	'group-flood' => '봇 사용자',
	'group-founder' => '설립자',
	'group-import' => '임포터',
	'group-interface_editors' => '인터페이스 편집자',
	'group-ipblock-exempt' => 'IP 차단 면제자',
	'group-patroller' => '검토자',
	'group-researcher' => '연구원',
	'group-rollbacker' => '롤배커',
	'group-transwiki' => '트랜스위키 임포터',
	'group-trusted' => '신뢰할수 있는 사용자',
	'group-abusefilter-member' => '어뷰즈 필터 편집자',
	'group-accountcreator-member' => '계정 생성자',
	'group-arbcom-member' => '중재위원',
	'group-autopatrolled-member' => '자동 검토자',
	'group-autoreviewer-member' => '자동 검토원',
	'group-bigexport-member' => '대량 문서 익스포터',
	'group-confirmed-member' => '자동 인증된 사용자',
	'group-editprotected-member' => '보호된 문서 편집자',
	'group-filemover-member' => '파일 이름 변경자',
	'group-flood-member' => '봇 사용자',
	'group-founder-member' => '설립자',
	'group-import-member' => '임포터',
	'group-interface_editors-member' => '인터페이스 편집자',
	'group-ipblock-exempt-member' => 'IP 차단 면제자',
	'group-patroller-member' => '검토자',
	'group-researcher-member' => '연구원',
	'group-rollbacker-member' => '롤배커',
	'group-transwiki-member' => '트랜스위키 임포터',
	'group-trusted-member' => '신뢰할수 있는 사용자',
	'grouppage-abusefilter' => '{{ns:project}}:권한 남용 감시 편집자',
	'grouppage-accountcreator' => '{{ns:project}}:계정 생성자',
	'grouppage-arbcom' => '{{ns:project}}:중재위원',
	'grouppage-autopatrolled' => '{{ns:project}}:자동 검토자',
	'grouppage-autoreviewer' => '{{ns:project}}:자동 검토원',
	'grouppage-bigexport' => '{{ns:project}}:대용량 문서 전파자',
	'grouppage-confirmed' => '{{ns:project}}:자동 인증된 사용자',
	'grouppage-editprotected' => '{{ns:project}}:보호된 문서 편집자',
	'grouppage-filemover' => '{{ns:project}}:파일 이름 변경',
	'grouppage-flood' => '{{ns:project}}:봇 사용자',
	'grouppage-founder' => '{{ns:project}}:설립자',
	'grouppage-import' => '{{ns:project}}:임포터',
	'grouppage-interface_editors' => '{{ns:project}}:인터페이스 편집자',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP 차단 면제',
	'grouppage-researcher' => '{{ns:project}}:연구원',
	'grouppage-rollbacker' => '{{ns:project}}:롤배커',
	'grouppage-transwiki' => '{{ns:project}}:트랜스위키 임포터',
	'grouppage-trusted' => '{{ns:project}}:신뢰할수 있는 사용자',
	'group-steward' => '사무장',
	'group-sysadmin' => '시스템 관리자',
	'group-editinterface' => '인터페이스 수정',
	'group-Global_bot' => '글로벌 봇',
	'group-Global_rollback' => '글로벌 롤배커',
	'group-Global_sysops' => '글로벌 관리자',
	'group-Ombudsmen' => '옴부즈맨',
	'group-Staff' => '임원',
	'group-steward-member' => '사무장',
	'group-sysadmin-member' => '시스템 관리자',
	'group-editinterface-member' => '인터페이스 에디터',
	'group-Global_bot-member' => '글로벌 봇',
	'group-Global_rollback-member' => '글로벌 롤배커',
	'group-Global_sysops-member' => '글로벌 관리자',
	'group-Ombudsmen-member' => '옴부즈맨',
	'group-Staff-member' => '임원',
	'grouppage-steward' => 'm:Stewards/ko',
	'group-coder' => '코더',
	'group-coder-member' => '코더',
	'group-inactive' => '활동하지 않는 사용자',
	'group-inactive-member' => '활동하지 않는 사용자',
	'grouppage-inactive' => '{{ns:project}}:활동하지 않는 사용자',
	'shared-repo-name-shared' => '위키미디어 공용',
	'wikimedia-copyright' => '모든 문서는 <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.ko">크리에이티브 커먼즈 저작자표시-동일조건변경허락 3.0</a>에 따라 사용할 수 있으며, 추가적인 조건이 적용될 수 있습니다. 자세한 내용은 <a href="http://wikimediafoundation.org/wiki/%EC%9D%B4%EC%9A%A9_%EA%B7%9C%EC%95%BD">이용 규약</a>을 참고하십시오.',
	'wikimedia-copyrightwarning' => '문서를 편집할 때 기여를 영구히 [http://creativecommons.org/licenses/by-sa/3.0/deed.ko 크리에이티브 커먼즈 저작자표시-동일조건변경허락 3.0]과 자유 소프트웨어 재단이 작성한 [http://www.gnu.org/copyleft/fdl.html GNU 자유 문서 사용 허가서](GFDL)로 배포하는 데 동의하여야 합니다. 이 저작물의 사용자는 이 저작물의 기여자가 저작자라는 사실을 표시해야 하며, 적어도 기여한 저작물이 있는 URL이나 하이퍼링크를 표시해야 합니다. 자세한 내용은 [http://wikimediafoundation.org/wiki/%EC%9D%B4%EC%9A%A9_%EA%B7%9C%EC%95%BD 이용 규약]을 참고하십시오.',
	'wikimedia-editpage-tos-summary' => '만약, 현재 작성하고 있는 문서가 다른 사람에 의해 자유롭게 편집/배포되길 원하지 않는다면 저장 버튼을 누르지 말아 주세요. 이 문서를 자신이 직접 작성한 것이 아니라면 [http://wikimediafoundation.org/wiki/%EC%9D%B4%EC%9A%A9_%EA%B7%9C%EC%95%BD 이용 규약]에 따라 사용 가능해야 하며, 관련된 라이선스 조건에 따르는 것에 동의해야 합니다.',
);

/** Karachay-Balkar (Къарачай-Малкъар)
 * @author Iltever
 */
$messages['krc'] = array(
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'Болушлукъ',
	'tooltip-n-sitesupport' => 'Бизге болушугъуз',
	'group-accountcreator' => 'Тергеу джазыуланы къурагъанла',
	'group-autopatrolled' => 'Автопатруль этилиниучюле',
	'group-bigexport' => 'Уллу экспортёрла',
	'group-confirmed' => 'Бегитилген къошулуучула',
	'group-flood' => 'Къошулуучула-ботла',
	'group-import' => 'Импорт этиучюле',
	'group-ipblock-exempt' => 'IP-блоклаулагъа кирмегенле',
	'group-transwiki' => 'Викиле арасы импорт этиучюле',
	'group-flood-member' => 'бот къошулуучула',
	'group-import-member' => 'импортчу',
	'group-transwiki-member' => 'Викиле арасы импорт этиучю',
	'group-steward' => 'Стюардла',
	'shared-repo-name-shared' => 'Викигёзен',
);

/** Kinaray-a (Kinaray-a)
 * @author RonaldPanaligan
 */
$messages['krj'] = array(
	'sitesupport' => 'Donasyon',
);

/** Colognian (Ripoarisch)
 * @author Merlissimo
 * @author Purodha
 * @author Απεργός
 */
$messages['ksh'] = array(
	'wikimediamessages-desc' => 'Systemnohrechte un Tex för de Wikimedia Shtefftung ier Wikis.',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Spende',
	'sitesupport' => 'Spende',
	'tooltip-n-sitesupport' => 'Donn uns Ungerstötze!',
	'specialpages-group-contribution' => 'Spendebeidrääsch',
	'group-abusefilter' => 'Meßbruchsfelter-Baaß',
	'group-accountcreator' => 'Metmaacher-Maachere',
	'group-autopatrolled' => 'Automatesch Nohkiker',
	'group-autoreviewer' => 'Automattesch Nohkiker',
	'group-bigexport' => 'Jroß-Expotöre',
	'group-confirmed' => 'Beshtäteschte Metmaacher',
	'group-flood' => 'Metmaacher, di Bot wääde künne',
	'group-founder' => 'Jröndere',
	'group-import' => 'Emportöre',
	'group-ipblock-exempt' => 'IP-Jruppe-Sperre-Ußnahme',
	'group-patroller' => 'Patrullje',
	'group-rollbacker' => 'Zeröcknemmere',
	'group-transwiki' => 'Transwiki-Emportöre',
	'group-trusted' => '{{int:Group-trusted-member}}',
	'group-abusefilter-member' => 'Meßbruchsfelter-Baaß',
	'group-accountcreator-member' => 'Metmaacher-Maacher',
	'group-autopatrolled-member' => 'Sellver-Nohloorer',
	'group-autoreviewer-member' => 'Automattesch Nohkiker',
	'group-bigexport-member' => 'Jroß-Expotör',
	'group-confirmed-member' => 'beshtäteschte Metmaacher',
	'group-flood-member' => 'Metmaacher, dä Bot wääde kann',
	'group-founder-member' => 'Jrönder',
	'group-import-member' => 'Emportör',
	'group-ipblock-exempt-member' => 'IP-Jruppe-Sperre-Ußnahm',
	'group-patroller-member' => 'Patrullje',
	'group-rollbacker-member' => 'Zeröcknemmer',
	'group-transwiki-member' => 'Transwiki-Emportör',
	'group-trusted-member' => 'Metmaacher met Vertroue',
	'grouppage-abusefilter' => '{{ns:project}}:Meßbruchsfelter-Baaß',
	'grouppage-accountcreator' => '{{ns:project}}:Metmaacher-Maacher',
	'grouppage-autopatrolled' => '{{ns:project}}:Sellver-Nohloorer',
	'grouppage-autoreviewer' => '{{ns:project}}:{{MediaWiki:Group-autoreviewer}}',
	'grouppage-bigexport' => '{{ns:project}}:Jroß-Expotöre',
	'grouppage-confirmed' => '{{ns:project}}:{{int:group-confirmed}}',
	'grouppage-flood' => '{{ns:project}}:Metmaacher, di Bot wääde künne',
	'grouppage-founder' => '{{ns:project}}:Jrönder',
	'grouppage-import' => '{{ns:project}}:Emportör',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Jruppe-Sperre-Ußnahm',
	'grouppage-rollbacker' => '{{ns:project}}:Zeröcknemmer',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Emportör',
	'grouppage-trusted' => '{{ns:project}}:{{int:group-trusted}}',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Wiki-Köbesse',
	'group-editinterface' => 'Engerfäjßbeärbeider',
	'group-Global_bot' => 'Bots för all Wikis',
	'group-Global_rollback' => 'Zeröcknämmere för all Wikis',
	'group-Ombudsmen' => 'Vermeddeler',
	'group-Staff' => 'Päsonaal',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'Wiki-Köbes',
	'group-editinterface-member' => 'Engerfäjßbeärbeider',
	'group-Global_bot-member' => 'Bot för all Wikis',
	'group-Global_rollback-member' => 'Zeröcknämmer för all Wikis',
	'group-Ombudsmen-member' => 'Vermeddeler',
	'group-Staff-member' => 'Päsonaal',
	'grouppage-steward' => 'm:Stewards/ksh',
	'grouppage-Global_bot' => 'm:Global bot/ksh',
	'grouppage-Global_rollback' => 'm:Global rollback/ksh',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission/ksh',
	'group-coder' => 'Projrammierer',
	'group-coder-member' => 'Projrammierer',
	'grouppage-coder' => 'Project:Projrammierer',
	'group-inactive' => 'Metmaacher, die nix donn',
	'group-inactive-member' => 'Metmaacher, dä nix deiht',
	'grouppage-inactive' => '{{ns:project}}:{{int:group-inactive}}',
	'shared-repo-name-shared' => '<i lang="en">Wikimedia Commons</i>',
	'wikimedia-copyright' => 'Dä Tex heh kann jebruch wääde unger dä <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.de">Lizänz: <i lang="de">Creative Commons Attribution/Share-Alike</i></a>. Zohsäzlejje Beshtemmunge künne jälte. Loor op dä Sigg övver de <a href="http://wikimediafoundation.org/wiki/Nutzungsbedingungen">Lizänz_Beshtemmunge</a>, doh shtonn mieh Einzelheite.',
	'wikimedia-copyrightwarning' => 'Endämm De jet avspeichere deihs, jiß De Dinge Beidraach unger de [http://creativecommons.org/licenses/by-sa/3.0/deed.de Lizänz <i lang="de">Creative Commons Attribution/Share-Alike</i> 3.0] un de [http://www.gnu.org/copyleft/fdl.html GFDL] frei, un shtemms zoh, dat ander Dir et Lob doför jävve, zoh_winnischß övver ene Lengk op udder en URL vun däm Atikel, woh De draan am schriive bes. Loor op dä Sigg övver de [http://wikimediafoundation.org/wiki/Nutzungsbedingungen Lizänz_Beshtemmunge], doh shtonn mieh Einzelheite.',
	'wikimedia-editpage-tos-summary' => 'Wann De nit han wells, dat Dinge Tex ömjemodelt weed, un söns wohin verdeilt, dun en hee nit speichere. Wann De dä nit sellver jeschreve häs, moß_e onger Bedengunge ze han sin, di zo de [http://wikimediafoundation.org/wiki/Nutzungsbedingungen Lizänz_Beshtemmunge] paß, un Do shtemms zoh, alle nüüdeje un rellevante Saache ze follje un ze donn för di Lizänz.',
);

/** Kurdish (Latin) (Kurdî (Latin)) */
$messages['ku-latn'] = array(
	'sitesupport' => 'Ji bo Weqfa Wikimedia Beş',
);

/** Cornish (Kernewek)
 * @author Malafaya
 * @author Nicky.ker
 */
$messages['kw'] = array(
	'sitesupport' => 'Riansow',
	'wikimedia-copyright' => 'Kavadow yw an tekst yn-dann an <a href="http://creativecommons.org/licenses/by-sa/3.0/">Kummyas Creative Commons Attribution/Share-Alike</a>; termynyow keworransel a alja bos omvyskys. Gwelewgh <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Termynyow Devnydh</a> rag manylyon.',
);

/** Kirghiz (Кыргызча) */
$messages['ky'] = array(
	'sitesupport' => 'Демөөр',
);

/** Latin (Latina)
 * @author UV
 * @author לערי ריינהארט
 */
$messages['la'] = array(
	'sitesupport' => 'Donationes',
	'group-rollbacker' => 'Revertores',
	'group-rollbacker-member' => 'revertor',
	'grouppage-rollbacker' => '{{ns:project}}:Revertores',
	'shared-repo-name-shared' => 'Vicimedia Communia',
);

/** Ladino (Ladino)
 * @author Universal Life
 * @author לערי ריינהארט
 */
$messages['lad'] = array(
	'sitesupport' => 'Donaciones',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Kaffi
 * @author Les Meloures
 * @author Robby
 * @author לערי ריינהארט
 */
$messages['lb'] = array(
	'wikimediamessages-desc' => 'Spezifesch Systemmessage fir Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/lb',
	'sitesupport' => 'Donatiounen',
	'tooltip-n-sitesupport' => 'Ënnerstëtzt eis',
	'specialpages-group-contribution' => 'Donen/Quêteur',
	'group-abusefilter' => 'Editeure vu Mëssbrauchsfilteren',
	'group-accountcreator' => 'Benotzer déi Benotzerkonten uleeën däerfen',
	'group-arbcom' => "Membere vum Comité d'arbitrage",
	'group-autopatrolled' => 'Automatesch Kontrolleren',
	'group-autoreviewer' => 'Benotzer déi automatesch nokucken',
	'group-bigexport' => 'Grouss Exportateuren',
	'group-confirmed' => 'Confirméiert Benotzer',
	'group-editprotected' => 'editeure vu gespaarte Säiten',
	'group-filemover' => 'Fichiersréckeler',
	'group-flood' => 'Benotzer mam Botstatus',
	'group-founder' => 'Grënner',
	'group-import' => 'Importateuren',
	'group-interface_editors' => 'Interface-Editeuren',
	'group-ipblock-exempt' => 'Ausnahme vun IP-Spären',
	'group-patroller' => 'Kontrolleren',
	'group-researcher' => 'Nosicher',
	'group-rollbacker' => 'Zrécksetzer',
	'group-transwiki' => 'Transwiki-Importateuren',
	'group-trusted' => 'Erfuere Benotzer',
	'group-abusefilter-member' => 'Editeur vum Mëssbrauchsfilter',
	'group-accountcreator-member' => 'Benotzer dee Benotzerkonten uleeën däerf',
	'group-arbcom-member' => "Member vum Comité d'arbitrage",
	'group-autopatrolled-member' => 'Benotzer deen automatesch iwwerkuckt',
	'group-autoreviewer-member' => 'Benotzer deen automatesch nokuckt',
	'group-bigexport-member' => 'groussen Exportateur',
	'group-confirmed-member' => 'Confirméierte Benotzer',
	'group-editprotected-member' => 'Editeur vu gespaarte Säiten',
	'group-filemover-member' => 'Fichiersréckeler',
	'group-flood-member' => 'Benotzer mam Botstatus',
	'group-founder-member' => 'Grënner',
	'group-import-member' => 'Importateur',
	'group-interface_editors-member' => 'Interface-Editeur',
	'group-ipblock-exempt-member' => 'Ausnam vun der IP-Spär',
	'group-patroller-member' => 'Kontroller',
	'group-researcher-member' => 'Nosicher',
	'group-rollbacker-member' => 'Zrécksetzer',
	'group-transwiki-member' => 'Transwiki-Importateur',
	'group-trusted-member' => 'erfuerene Benotzer',
	'grouppage-abusefilter' => '{{ns:project}}:Editeure vu Mëssbrauchsfilteren',
	'grouppage-accountcreator' => '{{ns:project}}:Benotzer déi Benotzerkonten uleeën däerfen',
	'grouppage-arbcom' => "{{ns:project}}: Membere Vum Comité d'arbitrage",
	'grouppage-autopatrolled' => '{{ns:project}}:Automatesch Préifer',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatesch Nopréifer',
	'grouppage-bigexport' => '{{ns:project}}:Grouss Exportateuren',
	'grouppage-confirmed' => '{{ns:project}}:Confirméiert Benotzer',
	'grouppage-editprotected' => '{{ns:project}}: Editeure vu gespaarte Säiten',
	'grouppage-filemover' => '{{ns:project}}: Fichiersréckeler',
	'grouppage-flood' => '{{ns:project}}: Benotzer mam Botstatus',
	'grouppage-founder' => '{{ns:project}}:Grënner',
	'grouppage-import' => '{{ns:project}}:Importateuren',
	'grouppage-interface_editors' => '{{ns:project}}:Interface-Editeuren',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Ausnahm vun der IP-Spär',
	'grouppage-researcher' => '{{ns:project}}: Nosicher',
	'grouppage-rollbacker' => '{{ns:project}}:Zrécksetzer',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importateuren',
	'grouppage-trusted' => '{{ns:project}}:Erfuere Benotzer',
	'group-steward' => 'Stewarden',
	'group-sysadmin' => 'Systemadministrateuren',
	'group-editinterface' => 'Interface änneren',
	'group-Global_bot' => 'Global Botten',
	'group-Global_rollback' => 'Global Zrécksetzer',
	'group-Global_sysops' => 'Global Administrateuren',
	'group-Ombudsmen' => 'Ombudsmänner',
	'group-Staff' => 'Mataarbechter',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'Systemadministrateur',
	'group-editinterface-member' => 'Interface änneren',
	'group-Global_bot-member' => 'Globale Bot',
	'group-Global_rollback-member' => 'Globalen Zrécksetzer',
	'group-Global_sysops-member' => 'Globalen Administrateur',
	'group-Ombudsmen-member' => 'Ombudsmann',
	'group-Staff-member' => 'Mataarbechter',
	'grouppage-steward' => '{{ns:project}}:Stewarden',
	'grouppage-sysadmin' => 'm:System Administrateuren',
	'grouppage-Global_bot' => 'm:Global bot',
	'grouppage-Staff' => 'Foundation:Personal',
	'group-coder' => 'Programméierer',
	'group-coder-member' => 'Programméierer',
	'group-inactive' => 'Benotzer déi net aktiv sinn',
	'group-inactive-member' => 'net aktive Benotzer',
	'grouppage-inactive' => '{{ns:project}}:Net aktiv Benotzer',
	'wikimedia-copyright' => 'Den Text ass disponibel ënnert der <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike Lizens</a>; zousätzlech Bedingunge kënnen applicabel sinn.
Kuckt <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Notzungsbedingungen</a> fir méi Detailer.',
	'wikimedia-copyrightwarning' => "Wann Dir ofspäichert, sidd Dir domat d'accord fir Äre Beitrag ënnert der [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike Lizenz 3.0] an der [http://www.gnu.org/copyleft/fdl.html GFDL] fräizeginn.
Dir sidd d'accord datt Dir vun deenen déi dëst weiderbenotzen, mindestens, duerch en Hyperlink oder URL op déi Säit op däer Dir matschafft honoréiert gitt.
Kuckt d'[http://wikimediafoundation.org/wiki/Terms_of_Use Benotzungsbedingungen] fir méi Detailer.",
	'wikimedia-editpage-tos-summary' => "Wann Dir net wëllt datt Ären Text vun Anere verännert a weiderverdeelt gëtt, da späichert en net hei of. Wann Dir dëst net selwer geschriwwen hutt, da muss et ënnert Konditiounen déi am Aklang mat [http://wikimediafoundation.org/wiki/Terms_of_Use Benotzungsbedingunge] sinn and Dir musst domat averstane sinn fir all Ufuederunge vun der Lizenz z'erfëllen.",
);

/** Lingua Franca Nova (Lingua Franca Nova)
 * @author Cgboeree
 */
$messages['lfn'] = array(
	'sitesupport' => 'Donas',
	'tooltip-n-sitesupport' => 'suporta nos',
);

/** Ganda (Luganda)
 * @author Kizito
 */
$messages['lg'] = array(
	'sitesupport' => 'Okutonera wiki',
	'tooltip-n-sitesupport' => "Nyiga wano ob'oyagala wiki okugiwa obuyambi obw'ensimbi",
);

/** Limburgish (Limburgs)
 * @author Matthias
 * @author Ooswesthoesbes
 * @author Pahles
 * @author לערי ריינהארט
 */
$messages['li'] = array(
	'wikimediamessages-desc' => 'Wikimedia-specifieke berichte',
	'sitesupport' => 'Donaties',
	'tooltip-n-sitesupport' => 'Óngersteun ós financieel',
	'specialpages-group-contribution' => 'Gifte/Fónswèrvingsaksie',
	'group-abusefilter' => 'misbroekfilterredaktäörs',
	'group-accountcreator' => 'Gebroekeraanmakers',
	'group-autoreviewer' => 'Autoeindredactie',
	'group-bigexport' => 'groete exportäörs',
	'group-confirmed' => 'Gekonférmeerde gebroekers',
	'group-founder' => 'Gróndlègkers',
	'group-import' => 'Importäörs',
	'group-ipblock-exempt' => 'Oetgezunjerde van IP-adresblokkades',
	'group-rollbacker' => 'Trökdriejers',
	'group-transwiki' => 'Transwikiimportäörs',
	'group-abusefilter-member' => 'misbroekfilterredaktäör',
	'group-accountcreator-member' => 'Gebroekeraanmaker',
	'group-autopatrolled-member' => 'autopatroller',
	'group-autoreviewer-member' => 'autoeindredactie',
	'group-bigexport-member' => 'groete exportäör',
	'group-confirmed-member' => 'Gekonférmeerde gebroeker',
	'group-founder-member' => 'Gróndlègker',
	'group-import-member' => 'Importäör',
	'group-ipblock-exempt-member' => 'Oetgezunjerde van IP-adresblokkades',
	'group-rollbacker-member' => 'Trökdriejer',
	'group-transwiki-member' => 'Transwikiimportäör',
	'grouppage-abusefilter' => '{{ns:project}}:Misbroekfilterredaktäöre',
	'grouppage-accountcreator' => '{{ns:project}}:Gebroekeraanmakers',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollers',
	'grouppage-autoreviewer' => '{{ns:project}}:Autoeindredactie',
	'grouppage-bigexport' => '{{ns:project}}:Groete exportäörs',
	'grouppage-confirmed' => '{{ns:project}}:Gekonférmeerde gebroekers',
	'grouppage-founder' => '{{ns:project}}:Gróndlègkers',
	'grouppage-import' => '{{ns:project}}:Importäörs',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Oetgezunjerde van IP-adresblokkades',
	'grouppage-rollbacker' => '{{ns:project}}:Trökdriejers',
	'grouppage-transwiki' => '{{ns:project}}:Transwikiimportäörs',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Systeemwèrkers',
	'group-editinterface' => 'Gebroekersinterfacebewirkers',
	'group-Global_bot' => 'Globale bots',
	'group-Global_rollback' => 'Globale trökdriejers',
	'group-Ombudsmen' => 'Ombudsmanne',
	'group-Staff' => 'Sjtaaf',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'Systeemwèrker',
	'group-editinterface-member' => 'Gebroekersinterfacebewirker',
	'group-Global_bot-member' => 'Globale bot',
	'group-Global_rollback-member' => 'Globale trökdriejer',
	'group-Ombudsmen-member' => 'Ombudsman',
	'group-Staff-member' => 'Sjtaaflid',
	'grouppage-steward' => '{{ns:project}}:Stewards',
	'group-coder' => 'Pregrammäörs',
	'group-coder-member' => 'Pregrammäör',
	'group-inactive' => 'Neet-actieve gebroekers',
	'group-inactive-member' => 'Neet-actieve gebroeker',
	'grouppage-inactive' => '{{ns:project}}:Neet-actieve gebroekers',
	'wikimedia-copyright' => 'De teks is besjikbaar ónger de <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Naomsvermelding/Geliek Deile</a> licentie.
\'t Is mäögelik dat aanvöllende veurwaarde van toepassing zeen.
Betrach de <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Algemein Veurwaarde</a> veur mie informatie.',
	'wikimedia-copyrightwarning' => "Door dees bewirking op te sjlaon, geis doe akkoord mit 't ónherropelik vriegaeve van dien biedrage ónger de [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Noamsvermelding/Geliek Deile licentie] en de [http://www.gnu.org/copyleft/fdl.html GFDL].
Doe geis demit akkoord door hergebroekers minimaal geneump te waere via 'ne hyperlink of URL nao de pagina woe-aans diech biedreugs. Betrach de [http://wikimediafoundation.org/wiki/Terms_of_Use Algemein Veurwaarde] veur mie informatie.",
	'wikimedia-editpage-tos-summary' => 'Es doe neet wils dat dien biedraag bewirk of gedistribueerd wird, moos doe ze neet opsjlaon.
Es dien bewirking neet door dichzelf gesjreve is, moot de biedraag besjikbaar zien ónger condities die consistent zien mit de [http://wikimediafoundation.org/wiki/Terms_of_Use Algemein Veurwaarde] en geis doe akkoord mit alle relevante licentieveurwaarde.',
);

/** Líguru (Líguru)
 * @author ZeneizeForesto
 */
$messages['lij'] = array(
	'sitesupport' => 'Donasioin',
	'tooltip-n-sitesupport' => 'Agiûttine',
);

/** Lumbaart (Lumbaart)
 * @author Dakrismeno
 */
$messages['lmo'] = array(
	'wikimediamessages-desc' => 'Messagg specifegh de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/lmo',
	'sitesupport' => 'Dunazión',
	'tooltip-n-sitesupport' => 'Dàss una man',
	'group-abusefilter' => 'Mudificadur di filter anti-abüs',
	'group-accountcreator' => 'Creadur di cünt',
	'group-arbcom' => "Member del cumitaa d'arbitragg",
	'group-autopatrolled' => 'Autopatrollers',
	'group-autoreviewer' => 'Revisur autumategh',
	'group-bigexport' => 'Gran espurtadur',
	'group-confirmed' => 'Druvadur cunfermaa',
	'group-flood' => 'Druvadur de Bot',
	'group-founder' => 'Fundadur',
	'group-import' => 'Impurtadur',
	'group-ipblock-exempt' => "Esenzión dal bloch de l'IP",
	'group-patroller' => 'Gent de rónda',
	'wikimedia-editpage-tos-summary' => "Se te vör mía che 'l to test 'l sia mudifegaa o redistribüii a vuluntà, alura metel mía chì denter.<br> Se te l'è no scrivüü tì medesim, 'l gh'ha de vess dispunibil suta di cundizión che i henn cumpatibil cun i [http://wikimediafoundation.org/wiki/Terms_of_Use cundizión d'usagg], e t'see d'acordi d'andà adree a tüt i requisii de la licenza.",
);

/** Lingala (Lingála) */
$messages['ln'] = array(
	'sitesupport' => 'Kofutela',
);

/** Lao (ລາວ)
 * @author Tuinui
 */
$messages['lo'] = array(
	'wikimediamessages-desc' => 'ຂໍ້ຄວາມສະເພາະ ວິກິພີເດຍ',
	'sitesupport' => 'ບໍລິຈາກ',
	'tooltip-n-sitesupport' => 'ສະໜັບສະໜຸນພວກເຮົາ',
	'group-Staff' => 'ພະນັກງານ',
	'group-Staff-member' => 'ພະນັກງານ',
);

/** Lozi (Silozi)
 * @author Ooswesthoesbes
 * @author SF-Language
 */
$messages['loz'] = array(
	'sitesupport' => 'Adonetarina',
	'tooltip-n-sitesupport' => 'Sepotisize',
);

/** Lithuanian (Lietuvių)
 * @author Homo
 * @author Hugo.arg
 * @author Matasg
 * @author Vpovilaitis
 */
$messages['lt'] = array(
	'wikimediamessages-desc' => 'Vikimedijos specialieji pranešimai',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/lt?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'Parama',
	'tooltip-n-sitesupport' => 'Palaikymas',
	'specialpages-group-contribution' => 'Įnašas/Remėjas',
	'group-abusefilter' => 'Piktnaudžiavimo filtrų redaktoriai',
	'group-accountcreator' => 'Paskyrų kūrėjai',
	'group-arbcom' => 'Arbitražo komiteto nariai',
	'group-autopatrolled' => 'Autopatruliai',
	'group-autoreviewer' => 'Autoperžiūrėtojai',
	'group-bigexport' => 'Didieji eksportuotojai',
	'group-confirmed' => 'Patvirtinti naudotojai',
	'group-editprotected' => 'Apsaugotų puslapių redaktoriai',
	'group-filemover' => 'Failų pervadintojai',
	'group-flood' => 'Botų šeimininkai',
	'group-founder' => 'Įkūrėjai',
	'group-import' => 'Importuotojai',
	'group-interface_editors' => 'Sąsajos redaktoriai',
	'group-ipblock-exempt' => 'IP blokavimo išimtys',
	'group-patroller' => 'Patruliai',
	'group-researcher' => 'Tyrėjai',
	'group-rollbacker' => 'Atmetėjai',
	'group-transwiki' => 'Transwiki įkėlėjai',
	'group-trusted' => 'Patikėtiniai',
	'group-abusefilter-member' => 'piktnaudžiavimo filtrų redaktorius',
	'group-accountcreator-member' => 'sąskaitų kūrėjai',
	'group-arbcom-member' => 'Arbitražo komiteto narys',
	'group-autopatrolled-member' => 'autopatrulis',
	'group-autoreviewer-member' => 'autoperžiūrėtojas',
	'group-bigexport-member' => 'didieji eksportuotojai',
	'group-confirmed-member' => 'patvirtintas naudotojas',
	'group-editprotected-member' => 'Apsaugotų puslapių redaktorius',
	'group-founder-member' => 'įkūrėjai',
	'group-import-member' => 'įkėlėjas',
	'group-ipblock-exempt-member' => 'atleistasis nuo IP blokavimo',
	'group-rollbacker-member' => 'atmesti',
	'group-transwiki-member' => 'transwiki įkėlėjai',
	'grouppage-abusefilter' => '{{ns:project}}:Piktnaudžiavimo filtrų redaktorius',
	'grouppage-accountcreator' => '{{ns:project}}:Sąskaitų kūrėjai',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatruliai',
	'grouppage-autoreviewer' => '{{ns:project}}:Autoperžiūrėtojai',
	'grouppage-bigexport' => '{{ns:project}}:Didieji eksportuotojai',
	'grouppage-confirmed' => '{{ns:project}}:Patvirtinti naudotojai',
	'grouppage-founder' => '{{ns:project}}:Įkūrėjai',
	'grouppage-import' => '{{ns:project}}:Importuotojai',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Atleistasis nuo IP blokavimo',
	'grouppage-rollbacker' => '{{ns:project}}:Atmetėjai',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importuotojai',
	'group-steward' => 'Ūkvedžiai',
	'group-sysadmin' => 'Sistemos administratoriai',
	'group-editinterface' => 'Sąsajos redaktoriai',
	'group-Global_bot' => 'Globalūs botai',
	'group-Global_rollback' => 'Visuotiniai atmetėjai',
	'group-Global_sysops' => 'Visuotiniai administrotoriai',
	'group-Ombudsmen' => 'Ombudsmenai',
	'group-Staff' => 'Darbuotojai',
	'group-steward-member' => 'ūkvedys',
	'group-sysadmin-member' => 'sistemos administratorius',
	'group-editinterface-member' => 'sąsajos redaktorius',
	'group-Global_bot-member' => 'visuotinis botas',
	'group-Global_rollback-member' => 'visuotinis atmetėjas',
	'group-Global_sysops-member' => 'visuotinis administratorius',
	'group-Ombudsmen-member' => 'ombudsmenas',
	'group-Staff-member' => 'Darbuotojas',
	'group-coder' => 'Koduotojai',
	'group-coder-member' => 'koduotojas',
	'group-inactive' => 'Neaktyvūs naudotojai',
	'group-inactive-member' => 'neaktyvus naudotojas',
	'grouppage-inactive' => '{{ns:project}}:Neaktyvūs naudotojai',
	'wikimedia-copyright' => 'Turinys pateikiamas pagal <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike licenciją</a>;
gali galioti kitos nuostatos.
Norėdami sužinoti daugiau, žiūrėkite <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Naudojimo sąlygas</a>.',
	'wikimedia-copyrightwarning' => 'Išsaugodami savo pakeitimą, jūs neatšaukiamai sutinkate, kad jūsų indėlis būtų platinamas pagal [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0] ir [http://www.gnu.org/copyleft/fdl.html GFDL] licencijas. Taip pat jūs sutinkate, kad straipsnio, kuriame jūs padarėte keitimų, istorijoje būtų nurodytas jūsų naudotojo vardas arba IP adresas. 
Norėdami sužinoti daugiau, žiūrėkite [http://wikimediafoundation.org/wiki/Terms_of_Use Naudojimo sąlygas]',
	'wikimedia-editpage-tos-summary' => 'Jei nenorite, kad Jūsų darbas būtų nevaržomai redaguojamas ir platinamas, jo čia nepublikuokite.
Jei šio darbo neparašėte Jūs, jis turi būti suderinamas su [http://wikimediafoundation.org/wiki/Terms_of_Use Naudojimo sąlygomis]; Jūs sutinkate vykdyti visus svarbius licencijavimo reikalavimus.',
);

/** Latvian (Latviešu)
 * @author GreenZeb
 * @author Papuass
 * @author Xil
 * @author Yyy
 */
$messages['lv'] = array(
	'wikimediamessages-desc' => 'Wikimedia raksturīgi paziņojumi',
	'sitesupport' => 'Ziedojumi',
	'tooltip-n-sitesupport' => 'Atbalsti mūs',
	'group-accountcreator' => 'Kontu veidotāji',
	'group-flood' => 'Botu lietotāji',
	'group-import' => 'Importētāji',
	'group-transwiki' => 'Transviki importētāji',
	'grouppage-import' => '{{ns:project}}:Importētāji',
	'group-steward' => 'Sistēmas pārvaldnieki',
	'grouppage-steward' => '{{ns:project}}:Sistēmas pārvaldnieki',
	'group-inactive' => 'Neaktīvi lietotāji',
	'group-inactive-member' => 'neaktīvs lietotājs',
	'grouppage-inactive' => '{{ns:project}}:Neaktīvi lietotāji',
	'wikimedia-copyright' => 'Teksts ir pieejams saskaņā ar <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike licenci</a>;
var pastāvēt papildus ierobežojumi.
Plašākai informācijai skatīt <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Pielietošanas noteikumus</a>.',
	'wikimedia-copyrightwarning' => 'Saglabājot izmaiņas, jūs piekrītat savu ieguldījumu licencēt saskaņā ar [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0] un [http://www.gnu.org/copyleft/fdl.html GFDL] licenci.
Jūs piekrītat, ka satura izmantotāji uz jūsu darbu atsauksies vismaz ar saiti uz lapu, kurā jūs veicat izmaiņas.
Plašākai informācijai skatīt [http://wikimediafoundation.org/wiki/Terms_of_Use Pielietošanas noteikumus].',
	'wikimedia-editpage-tos-summary' => 'Ja jūs nevēlaties, lai jūsu rakstīto labo un izplata bez ierobežojumiem, neiesniedziet to šeit.
Ja šo tekstu nerakstījāt jūs, tam ir jābūt pieejamam ar nosacījumiem, kas saskan ar [http://wikimediafoundation.org/wiki/Terms_of_Use pielietošanas noteikumiem] un jūs piekrītat izpildīt visas saistošās licencēšanas prasības.',
);

/** Literary Chinese (文言) */
$messages['lzh'] = array(
	'wikimediamessages-desc' => '維基媒體特集',
	'sitesupport' => '捐助集',
	'tooltip-n-sitesupport' => '濟資財、施續命、傳美皓',
	'wikimedia-copyright' => '凡我維基之文，悉為<a href="http://creativecommons.org/licenses/by-sa/3.0/">共享創意授權</a>。翻印增刪，皆須引據，並同道為之。然條款繁多，不一而足。
請閱<a href="http://wikimediafoundation.org/wiki/Terms_of_Use">全文</a>，以得其詳。',
);

/** Lazuri (Lazuri)
 * @author Bombola
 */
$messages['lzz'] = array(
	'tooltip-n-sitesupport' => 'Mxuci momçit',
);

/** Maithili (मैथिली)
 * @author Ggajendra
 */
$messages['mai'] = array(
	'tooltip-n-sitesupport' => 'हमरा सभकेँ सहयोग करू',
);

/** Basa Banyumasan (Basa Banyumasan)
 * @author לערי ריינהארט
 */
$messages['map-bms'] = array(
	'sitesupport' => 'Sumbang dana',
);

/** Moksha (Мокшень)
 * @author Kranch
 * @author Numulunj pilgae
 */
$messages['mdf'] = array(
	'sitesupport' => 'Лезкс максома',
	'tooltip-n-sitesupport' => 'Макст тейнек лезкс',
	'group-Staff' => 'Персонал',
	'group-Staff-member' => 'Персоналста ломань',
);

/** Malagasy (Malagasy)
 * @author Jagwar
 */
$messages['mg'] = array(
	'wikimediamessages-desc' => "Hafatra manokana ho an'ny Wikimedia",
	'sitesupport' => 'Fanomezana',
	'tooltip-n-sitesupport' => 'Ampio izahay',
	'specialpages-group-contribution' => "Fandraisan'anjara/Fitetezana vola",
	'group-abusefilter' => "Mpanova ''Abuse filter''",
	'group-accountcreator' => 'Mpanokatra kaonty',
	'group-autopatrolled' => 'Mpijery mandeha ho azy',
	'group-autoreviewer' => 'Mpamaky',
	'group-bigexport' => 'Mpamoaka be',
	'group-confirmed' => 'Mpikambana voamarina',
	'group-editprotected' => 'Mpanova pejy voaaro',
	'group-filemover' => 'Mpanova anaran-drakitra',
	'group-flood' => 'Mpanao rôbô',
	'group-founder' => 'Mpamorina',
	'group-import' => 'Mpanafatra',
	'group-interface_editors' => 'Mpanova ny rindrankajy',
	'group-ipblock-exempt' => "Tsy afaka voasakana amin'ny adiresy IP",
	'group-patroller' => 'Mpitsidika',
	'group-researcher' => 'Mpikaroka',
	'group-rollbacker' => 'Mpamafa',
	'group-transwiki' => 'Mpanafatra transwiki',
	'group-trusted' => 'Mpikambana azo antoka',
	'group-abusefilter-member' => 'Mpanova filtre antiabus',
	'group-accountcreator-member' => 'Mpamokatra kaonty',
	'group-arbcom-member' => "mpikambana ao amin'ny kaomitian-arbitatra",
	'group-autopatrolled-member' => 'Mpitsidika rôbô',
	'group-autoreviewer-member' => 'Mpamaky (rôbô)',
	'group-bigexport-member' => 'mpamoaka be',
	'group-confirmed-member' => 'Mpikambana voamarina',
	'group-editprotected-member' => 'mpanova pejy voaaro',
	'group-filemover-member' => 'mpanova anaran-drakitra',
	'group-flood-member' => 'mpanao rôbô',
	'group-founder-member' => 'Mpamorina',
	'group-import-member' => 'Mpanafatra',
	'group-interface_editors-member' => 'mpanova ny rindrankajy',
	'group-ipblock-exempt-member' => "Mpikambana tsy afaka voasakana amin'ny IP-ny",
	'group-patroller-member' => 'Mpitsidika',
	'group-researcher-member' => 'mpikaroka',
	'group-rollbacker-member' => 'Mpamafa',
	'group-transwiki-member' => 'Mpanafatra transwiki',
	'group-trusted-member' => 'mpikambana azo antoka',
	'grouppage-abusefilter' => '{{ns:project}}:mpanova filtre antiabus',
	'grouppage-accountcreator' => '{{ns:project}}:Mpamokatra kaonty',
	'grouppage-arbcom' => "{{ns:project}}:Mpikambana ao amin'ny kaomitian-arbitatra",
	'grouppage-autopatrolled' => '{{ns:project}}:Rôbô Mpijery',
	'grouppage-autoreviewer' => '{{ns:project}}:Mpamaky mande hoazy',
	'grouppage-bigexport' => '{{ns:project}}:Mpamoaka be',
	'grouppage-confirmed' => '{{ns:project}}:Mpikambana voamarina',
	'grouppage-editprotected' => '{{ns:project}}:Mpanova pejy voaaro',
	'grouppage-filemover' => '{{ns:project}}:Mpanova anaran-drakitra',
	'grouppage-flood' => '{{ns:project}}:mpanao rôbô',
	'grouppage-founder' => '{{ns:project}}:Mpamorina',
	'grouppage-import' => '{{ns:project}}:Mpampiditra',
	'grouppage-interface_editors' => '{{ns:project}}:Mpanova ny rindrankajy',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Tsy afaka sakanana amin'ny IP",
	'grouppage-researcher' => '{{ns:project}}:mpikaroka',
	'grouppage-rollbacker' => '{{ns:project}}:mpamafa',
	'grouppage-transwiki' => '{{ns:project}}:Mpampiditra transwiki',
	'grouppage-trusted' => '{{ns:project}}:Mpikambana azo antoka',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Mpandrindra ny sistema',
	'group-editinterface' => 'Mpanova ny interface',
	'group-Global_bot' => "Rôbô amin'ny ankapobe ny wiki",
	'group-Global_rollback' => "Mpamafa amin'ny ankapobe ny wiki",
	'group-Global_sysops' => 'Mpandrindra global',
	'group-Ombudsmen' => 'Mediatora',
	'group-Staff' => 'Staff',
	'group-steward-member' => 'Mpiambona (steward)',
	'group-sysadmin-member' => 'Mpandrindra ny Sistema',
	'group-editinterface-member' => 'mpanova ny interface',
	'group-Global_bot-member' => 'rôbô global',
	'group-Global_rollback-member' => 'mpamafa global',
	'group-Global_sysops-member' => 'mpandrindra global',
	'group-Ombudsmen-member' => 'Mediatora',
	'group-Staff-member' => "mpikamban'ny Staff",
	'group-coder' => 'Mpanakaody',
	'group-coder-member' => 'mpanakaody',
	'group-inactive' => 'mpikambana tsy miasa',
	'group-inactive-member' => 'mpikambana tsy miasa',
	'grouppage-inactive' => '{{ns:project}}:Mpikambana tsy manova',
);

/** Eastern Mari (Олык Марий)
 * @author Amdf
 */
$messages['mhr'] = array(
	'sitesupport' => 'Надыр',
);

/** Maori (Māori) */
$messages['mi'] = array(
	'sitesupport' => 'Koha',
);

/** Macedonian (Македонски)
 * @author Bjankuloski06
 * @author Brainmachine
 * @author Brest
 * @author Misos
 */
$messages['mk'] = array(
	'wikimediamessages-desc' => 'Пораки кои се однесуваат на Викимедија',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/mk?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'Донации',
	'tooltip-n-sitesupport' => 'Поддржете нè',
	'specialpages-group-contribution' => 'Придонеси/Обезб. средства',
	'group-abusefilter' => 'Уредници на филтерот на злоупотреба',
	'group-accountcreator' => 'Создавачи на сметки',
	'group-arbcom' => 'Членови на Арбитражната комисија',
	'group-autopatrolled' => 'Автопатролери',
	'group-autoreviewer' => 'Автооценувачи',
	'group-bigexport' => 'Големи извозници',
	'group-confirmed' => 'Потврдени корисници',
	'group-editprotected' => 'Заштитени уредувачи на страници',
	'group-filemover' => 'Преместувачи на податотеки',
	'group-flood' => 'Корисници-ботови',
	'group-founder' => 'Основачи',
	'group-import' => 'Увoзници',
	'group-interface_editors' => 'Уредници на посредникот',
	'group-ipblock-exempt' => 'IP блок исклучоци',
	'group-patroller' => 'Патролирачи',
	'group-researcher' => 'Истражувачи',
	'group-rollbacker' => 'Враќачи',
	'group-transwiki' => 'Меѓувики увoзници',
	'group-trusted' => 'Докажани корисници',
	'group-abusefilter-member' => 'уредник на филтерот за за злоупотреби',
	'group-accountcreator-member' => 'создавач на сметка',
	'group-arbcom-member' => 'член на арбитражната комисија',
	'group-autopatrolled-member' => 'автоматски патролирач',
	'group-autoreviewer-member' => 'автооценувач',
	'group-bigexport-member' => 'голем извозник',
	'group-confirmed-member' => 'потврден корисник',
	'group-editprotected-member' => 'заштитен уредувач на страници',
	'group-filemover-member' => 'преместувач на податотеки',
	'group-flood-member' => 'корисник-бот',
	'group-founder-member' => 'основач',
	'group-import-member' => 'увозник',
	'group-interface_editors-member' => 'уредник на посредникот',
	'group-ipblock-exempt-member' => 'IP блок исклучок',
	'group-patroller-member' => 'патролирач',
	'group-researcher-member' => 'истражувач',
	'group-rollbacker-member' => 'враќач',
	'group-transwiki-member' => 'меѓувики увозник',
	'group-trusted-member' => 'докажан корисник',
	'grouppage-abusefilter' => '{{ns:project}}:Уредници на филтер на злоупотреби',
	'grouppage-accountcreator' => '{{ns:project}}:Создавачи на сметки',
	'grouppage-arbcom' => '{{ns:project}}:Членови на Арбитражната комисија',
	'grouppage-autopatrolled' => '{{ns:project}}:Автоматски патролирачи',
	'grouppage-autoreviewer' => '{{ns:project}}:Автооценувачи',
	'grouppage-bigexport' => '{{ns:project}}:Големи извозници',
	'grouppage-confirmed' => '{{ns:project}}:Потврдени корисници',
	'grouppage-editprotected' => '{{ns:project}}:Заштитени уредувачи на страници',
	'grouppage-filemover' => '{{ns:project}}:Преместувачи на податотеки',
	'grouppage-flood' => '{{ns:project}}:Корисници-ботови',
	'grouppage-founder' => '{{ns:project}}:Основачи',
	'grouppage-import' => '{{ns:project}}:Увoзници',
	'grouppage-interface_editors' => '{{ns:project}}:Уредници на посредникот',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP блок исклучок',
	'grouppage-researcher' => '{{ns:project}}:Истражувач',
	'grouppage-rollbacker' => '{{ns:project}}:Враќачи',
	'grouppage-transwiki' => '{{ns:project}}:Меѓувики увoзници',
	'grouppage-trusted' => '{{ns:project}}:Докажани корисници',
	'group-steward' => 'Стјуарди',
	'group-sysadmin' => 'Систем администратори',
	'group-editinterface' => 'Уредници на посредникот',
	'group-Global_bot' => 'Глобални ботови',
	'group-Global_rollback' => 'Глобални враќачи',
	'group-Global_sysops' => 'Глобален сисоп',
	'group-Ombudsmen' => 'Правозастапници',
	'group-Staff' => 'Персонал',
	'group-steward-member' => 'стјуард',
	'group-sysadmin-member' => 'систем администратор',
	'group-editinterface-member' => 'уредник на посредникот',
	'group-Global_bot-member' => 'глобален бот',
	'group-Global_rollback-member' => 'глобален враќач',
	'group-Global_sysops-member' => 'глобален сисоп',
	'group-Ombudsmen-member' => 'правозастапник',
	'group-Staff-member' => 'член на персонал',
	'grouppage-steward' => 'm:Стјуарди',
	'grouppage-sysadmin' => 'm:Систем администратори',
	'grouppage-Global_rollback' => 'm:Глобално враќање',
	'grouppage-Ombudsmen' => 'm:Ombudsman commission',
	'group-coder' => 'Програмери',
	'group-coder-member' => 'програмер',
	'grouppage-coder' => 'Project:Програмер',
	'group-inactive' => 'Неактивни корисници',
	'group-inactive-member' => 'неактивен корисник',
	'grouppage-inactive' => '{{ns:project}}:Нективни корисници',
	'wikimedia-copyright' => 'Текстот е достапен под условите на лиценцата <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.mk">Creative Commons Наведи извор/Сподели под исти услови</a>;
можат да важат и дополнителни услови.
Видете ги <a href="http://wikimediafoundation.org/wiki/%D0%A3%D1%81%D0%BB%D0%BE%D0%B2%D0%B8_%D0%BD%D0%B0_%D1%83%D0%BF%D0%BE%D1%82%D1%80%D0%B5%D0%B1%D0%B0">условите на употреба</a> за детали.',
	'wikimedia-copyrightwarning' => 'Со зачувувањето на страницата Вие неотповикливо се согласувате дека ги објавувате Вашите придонеси под условите на лиценцата [http://creativecommons.org/licenses/by-sa/3.0/deed.mk Creative Commons Наведи извор/Сподели под исти услови 3.0] и на [http://www.gnu.org/copyleft/fdl.html GFDL].
Вие се согласувате да добиете заслуга од наредните употребувачи на оваа содржина најмалку преку хиперврска или URL до страницата на која придонесувате. 
Видете ги [http://wikimediafoundation.org/wiki/%D0%A3%D1%81%D0%BB%D0%BE%D0%B2%D0%B8_%D0%BD%D0%B0_%D1%83%D0%BF%D0%BE%D1%82%D1%80%D0%B5%D0%B1%D0%B0 условите на употреба] за детали.',
	'wikimedia-editpage-tos-summary' => 'Ако не сакате Вашиот текст да биде уредуван и дистрибуиран во секое време, тогаш не го поднесувајте овде.
Ако Вие самите не го напишавте текстот, тогаш тој мора да биде достапен под услови кои се согласни со [http://wikimediafoundation.org/wiki/%D0%A3%D1%81%D0%BB%D0%BE%D0%B2%D0%B8_%D0%BD%D0%B0_%D1%83%D0%BF%D0%BE%D1%82%D1%80%D0%B5%D0%B1%D0%B0 условите на употреба] и се согласувате дека ќе следите било какви барања за лиценцирање.',
);

/** Malayalam (മലയാളം)
 * @author Anoopan
 * @author Junaidpv
 * @author Meno25
 * @author Praveenp
 * @author Sadik Khalid
 * @author ShajiA
 * @author Shijualex
 * @author Vssun
 * @author לערי ריינהארט
 */
$messages['ml'] = array(
	'wikimediamessages-desc' => 'വിക്കിമീഡിയയുമായി ബന്ധപ്പെട്ട സന്ദേശങ്ങൾ',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/ml',
	'sitesupport' => 'സംഭാവന',
	'tooltip-n-sitesupport' => 'ഞങ്ങളെ പിന്തുണക്കുക',
	'specialpages-group-contribution' => 'സംഭാവനകൾ/ഫണ്ട്‌‌റെയ്സർ',
	'group-abusefilter' => 'ദുരുപയോഗ അരിപ്പ തിരുത്തുന്നവർ',
	'group-accountcreator' => 'അംഗത്വ സ്രഷ്ടാക്കൾ',
	'group-arbcom' => 'മദ്ധ്യസ്ഥ സമിതി അംഗങ്ങൾ',
	'group-autopatrolled' => 'സ്വതവേ റോന്തുചുറ്റുന്നവർ',
	'group-autoreviewer' => 'സ്വതവേ സംശോധകർ',
	'group-bigexport' => 'മഹാ കയറ്റുമതിക്കാർ',
	'group-confirmed' => 'സ്ഥിരീകരിച്ച ഉപയോക്താക്കൾ',
	'group-editprotected' => 'സംരക്ഷിത താളുകൾ തിരുത്തുന്നവർ',
	'group-filemover' => 'പ്രമാണം മാറ്റുന്നവർ',
	'group-flood' => 'ബോട്ട് ഉപയോക്താക്കൾ',
	'group-founder' => 'സ്ഥാപകർ',
	'group-import' => 'ഇറക്കുമതിക്കാർ',
	'group-interface_editors' => 'സമ്പർക്കമുഖം തിരുത്തുന്നവർ',
	'group-ipblock-exempt' => 'ഐ.പി. തടയൽ ഒഴിവാക്കലുകൾ',
	'group-patroller' => 'റോന്തു ചുറ്റുന്നവർ',
	'group-researcher' => 'ഗവേഷകർ',
	'group-rollbacker' => 'മുൻപ്രാപനം നടപ്പാക്കുന്നവർ',
	'group-transwiki' => 'ട്രാൻസ്‌‌വിക്കി ഇറക്കുമതിക്കാർ',
	'group-trusted' => 'വിശ്വാസ്യതയുള്ള ഉപയോക്താക്കൾ',
	'group-abusefilter-member' => 'ദുരുപയോഗ അരിപ്പ തിരുത്തുന്നയാൾ',
	'group-accountcreator-member' => 'അംഗത്വ സ്രഷ്ടാവ്',
	'group-arbcom-member' => 'മദ്ധ്യസ്ഥ സമിതി അംഗം',
	'group-autopatrolled-member' => 'സ്വതവേ റോന്തുചുറ്റുന്നയാൾ',
	'group-autoreviewer-member' => 'സ്വതവേ സംശോധനം ചെയ്യുന്നയാൾ',
	'group-bigexport-member' => 'മഹാ കയറ്റുമതിയാൾ',
	'group-confirmed-member' => 'സ്ഥിരീകരിച്ച ഉപയോക്താവ്',
	'group-editprotected-member' => 'സംരക്ഷണ താളുകൾ തിരുത്തുന്നവർ',
	'group-filemover-member' => 'പ്രമാണം മാറ്റുന്നവർ',
	'group-flood-member' => 'ബോട്ട് ഉപയോക്താക്കൾ',
	'group-founder-member' => 'സ്ഥാപകർ',
	'group-import-member' => 'ഇറക്കുമതിക്കാർ',
	'group-interface_editors-member' => 'സമ്പർക്കമുഖം തിരുത്തുന്നയാൾ',
	'group-ipblock-exempt-member' => 'ഐ.പി. തടയൽ ഒഴിവാക്കൽ',
	'group-patroller-member' => 'റോന്തു ചുറ്റുന്നവർ',
	'group-researcher-member' => 'ഗവേഷകർ',
	'group-rollbacker-member' => 'മുൻപ്രാപനം ചെയ്യുന്നയാൾ',
	'group-transwiki-member' => 'ട്രാൻസ്‌‌വിക്കി ഇറക്കുമതിചെയ്യുന്നയാൾ',
	'group-trusted-member' => 'വിശ്വാസ്യതയുള്ള ഉപയോക്താവ്',
	'grouppage-abusefilter' => '{{ns:project}}: ദുരുപയോഗ അരിപ്പ തിരുത്തുന്നവർ',
	'grouppage-accountcreator' => '{{ns:project}}:അംഗത്വ സ്രഷ്ടാക്കൾ',
	'grouppage-arbcom' => '{{ns:project}}:മദ്ധ്യസ്ഥ സമിതി അംഗങ്ങൾ',
	'grouppage-autopatrolled' => '{{ns:project}}:സ്വതവേ റോന്തുചുറ്റുന്നവർ',
	'grouppage-autoreviewer' => '{{ns:project}}:സ്വതവേ സംശോധനം ചെയ്യുന്നവർ',
	'grouppage-bigexport' => '{{ns:project}}:മഹാ കയറ്റുമതിക്കാർ',
	'grouppage-confirmed' => '{{ns:project}}:സ്ഥിരീകരിച്ച ഉപയോക്താക്കൾ',
	'grouppage-editprotected' => '{{ns:project}}:സംരക്ഷിത താൾ തിരുത്തുന്നവർ',
	'grouppage-filemover' => '{{ns:project}}:പ്രമാണം മാറ്റുന്നവർ',
	'grouppage-flood' => '{{ns:project}}:ബോട്ട് ഉപയോക്താക്കൾ',
	'grouppage-founder' => '{{ns:project}}:സ്ഥാപകർ',
	'grouppage-import' => '{{ns:project}}:ഇറക്കുമതിക്കാർ',
	'grouppage-interface_editors' => '{{ns:project}}:സമ്പർക്കമുഖം തിരുത്തുന്നവർ',
	'grouppage-ipblock-exempt' => '{{ns:project}}:ഐ.പി. തടയൽ ഒഴിവാക്കൽ',
	'grouppage-researcher' => '{{ns:project}}:ഗവേഷകർ',
	'grouppage-rollbacker' => '{{ns:project}}:മുൻപ്രാപനം ചെയ്യുന്നവർ',
	'grouppage-transwiki' => '{{ns:project}}:ട്രാൻസ്‌‌വിക്കി ഇറക്കുമതിക്കാർ',
	'grouppage-trusted' => '{{ns:project}}:വിശ്വാസ്യതയുള്ള ഉപയോക്താക്കൾ',
	'group-steward' => 'സ്റ്റ്യൂവാർഡുകൾ',
	'group-sysadmin' => 'സിസ്റ്റം കാര്യനിർവാഹകർ',
	'group-editinterface' => 'സമ്പർക്കമുഖം തിരുത്തുന്നവർ',
	'group-Global_bot' => 'ആഗോള യന്ത്രങ്ങൾ',
	'group-Global_rollback' => 'ആഗോള മുൻപ്രാപനം ചെയ്യുന്നവർ',
	'group-Global_sysops' => 'ആഗോള സിസോപ്പ്',
	'group-Ombudsmen' => 'ഓംബുഡ്സ്‌‌മാൻ',
	'group-Staff' => 'ഉദ്യോഗസ്ഥർ',
	'group-steward-member' => 'സ്റ്റ്യൂവാർഡ്',
	'group-sysadmin-member' => 'സിസ്റ്റം കാര്യനിർവാഹകൻ',
	'group-editinterface-member' => 'സമ്പർക്കമുഖം തിരുത്തുന്നയാൾ',
	'group-Global_bot-member' => 'ആഗോള ബോട്ട്',
	'group-Global_rollback-member' => 'ആഗോള മുൻപ്രാപനം ചെയ്യുന്നയാൾ',
	'group-Global_sysops-member' => 'ആഗോള സിസോപ്പ്',
	'group-Ombudsmen-member' => 'ഓംബുഡ്സ്‌‌മാൻ',
	'group-Staff-member' => 'ഉദ്യോഗസ്ഥ(ൻ)',
	'group-coder' => 'കോഡേഴ്സ്',
	'group-coder-member' => 'കോഡർ',
	'group-inactive' => 'സജീവരല്ലാത്ത ഉപയോക്താക്കൾ',
	'group-inactive-member' => 'സജീവമല്ലാത്ത ഉപയോക്താവ്',
	'grouppage-inactive' => '{{ns:project}}:സജീവരല്ലാത്ത ഉപയോക്താക്കൾ',
	'shared-repo-name-shared' => 'വിക്കിമീഡിയ കോമൺസ്',
	'wikimedia-copyright' => 'വിവരങ്ങൾ <a href="http://creativecommons.org/licenses/by-sa/3.0/">ക്രിയേറ്റീവ് കോമൺസ് ആട്രിബ്യൂഷൻ/ഷെയർ-എലൈക്ക് അനുമതിപത്ര (കടപ്പാട്, സമാനമായ അനുമതിപത്രം, എന്നിവ നൽകുക)</a> പ്രകാരം ലഭ്യമാണ്; മേൽ നിബന്ധനകൾ ഉണ്ടായേക്കാം. കൂടുതൽ വിവരങ്ങൾക്ക് <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">ഉപയോഗനിബന്ധകൾ</a> കാണുക.',
	'wikimedia-copyrightwarning' => 'താങ്കൾ എഴുതിച്ചേർത്തത് സേവ് ചെയ്യുമ്പോൾ, പ്രസ്തുത എഴുത്ത് [http://creativecommons.org/licenses/by-sa/3.0/ ക്രിയേറ്റീവ് കോമൺസ്/ഷെയർ എലൈക് 3.0], [http://www.gnu.org/copyleft/fdl.html ജി.എഫ്.ഡി.എൽ.] എന്നീ അനുമതിപത്രങ്ങൾ പ്രകാരം വിതരണം ചെയ്യുന്നതിനായി അംഗീകരിച്ചിരിക്കണം, ഈ അനുമതികൾ പിന്നീട് മാറ്റാൻ കഴിയുന്നതല്ല. താങ്കൾ മാറ്റങ്ങൾ വരുത്തിയ താളിനെ പുനരുപയോഗിക്കുന്നവർ, കുറഞ്ഞ പക്ഷം അതിലേക്ക് ഒരു ഹൈപ്പർലിങ്കോ യു.ആർ.എല്ലോ ഉപയോഗിച്ച് കടപ്പാട് നൽകുമെന്നും മനസ്സിലാക്കിയിരിക്കണം. 
കൂടുതൽ വിവരങ്ങൾക്ക് [http://wikimediafoundation.org/wiki/Terms_of_Use ഉപയോഗനിബന്ധനകൾ] കാണുക.',
	'wikimedia-editpage-tos-summary' => 'താങ്കളുടെ എഴുത്ത് തിരുത്തുകയും പുനർവിതരണം ചെയ്യുന്നതും അനുവദിക്കാനാകില്ലങ്കിൽ, അത് ഇവിടെ സമർപ്പിക്കാതിരിക്കുക.
ഇത് താങ്കൾ തന്നെ എഴുതിയതല്ലങ്കിൽ, നിർബന്ധമായും [http://wikimediafoundation.org/wiki/Terms_of_Use നിബന്ധനാ പ്രമാണത്തിനു] വിധേയമായി ലഭ്യമായിരിക്കണം, ഒപ്പം ബന്ധപ്പെട്ട അനുമതികൾ താങ്കൾ അംഗീകരിക്കേണ്ടതുമാണ്.',
);

/** Mongolian (Монгол)
 * @author Chinneeb
 * @author לערי ריינהארט
 */
$messages['mn'] = array(
	'sitesupport' => 'Хандив',
	'tooltip-n-sitesupport' => 'Биднийг дэмжээрэй',
	'group-rollbacker' => 'Буцаагчид',
	'group-rollbacker-member' => 'буцаагч',
	'grouppage-rollbacker' => '{{ns:project}}:Буцаагчид',
	'group-steward' => 'Үйлчлэгчид',
	'group-Global_rollback' => 'Глобал буцаагчид',
	'group-steward-member' => 'үйлчлэгч',
	'group-Global_rollback-member' => 'глобал буцаагч',
	'grouppage-steward' => 'm:Stewards',
);

/** Moldavian (Молдовеняскэ)
 * @author Node ue
 */
$messages['mo'] = array(
	'tooltip-n-sitesupport' => 'Сприжиниць-не',
);

/** Marathi (मराठी)
 * @author Kaustubh
 * @author Mahitgar
 */
$messages['mr'] = array(
	'wikimediamessages-desc' => 'विकिमीडियाबद्दलचे विशीष्ट संदेश',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Chapters/mr',
	'sitesupport' => 'दान',
	'tooltip-n-sitesupport' => 'आम्हाला पाठबळ द्या',
	'group-abusefilter' => 'दुरूपयोग गाळ्णी संपादक',
	'group-accountcreator' => 'खाते विकसक',
	'group-bigexport' => 'मोठे निर्यातक',
	'group-founder' => 'संस्थापक',
	'group-import' => 'आयातदार',
	'group-ipblock-exempt' => 'अंकपत्ता प्रतिबंधन सूट',
	'group-patroller' => 'निरीक्षक',
	'group-rollbacker' => 'द्रूतमाघारकार',
	'group-transwiki' => 'आंतरविकि आयातदार',
	'group-abusefilter-member' => 'दुरूपयोग गाळणी संपादक',
	'group-accountcreator-member' => 'खाते विकसक',
	'group-autopatrolled-member' => 'स्वयंचलीतगस्तदार',
	'group-bigexport-member' => 'मोठे निर्यातदार',
	'group-founder-member' => 'संस्थापक',
	'group-import-member' => 'आयातदार',
	'group-ipblock-exempt-member' => 'अंकपत्ता प्रतिबंधन सूट',
	'group-patroller-member' => 'निरीक्षक',
	'group-rollbacker-member' => 'द्रूतमाघारकार',
	'group-transwiki-member' => 'आंतरविकि आयातदार',
	'grouppage-abusefilter' => '{{ns:project}}:दुरूपयोग गाळणी संपादक',
	'grouppage-accountcreator' => '{{ns:project}}:खाते विकसक',
	'grouppage-autopatrolled' => '{{ns:project}}:स्वयंचलीतगस्तदार',
	'grouppage-bigexport' => '{{ns:project}}:मोठे निर्यातक',
	'grouppage-founder' => '{{ns:project}}:संस्थापक',
	'grouppage-import' => '{{ns:project}}:आयातदार',
	'grouppage-ipblock-exempt' => '{{ns:project}}:अंकपत्ता प्रतिबंधन अपवाद',
	'grouppage-rollbacker' => '{{ns:project}}:माघारकार',
	'grouppage-transwiki' => '{{ns:project}}:आंतरविकि चढवैय्ये',
	'group-steward' => 'प्रतिपालक',
	'group-sysadmin' => 'प्रचालक',
	'group-Global_bot' => 'वैश्विक सांगकामे',
	'group-Global_rollback' => 'वैश्विक माघारकार',
	'group-Ombudsmen' => 'लोकाआयूक्त',
	'group-Staff' => 'स्टाफ',
	'group-steward-member' => 'प्रतिपालक',
	'group-sysadmin-member' => 'प्रचालक',
	'group-Global_bot-member' => 'वैश्विक सांगकाम्या',
	'group-Global_rollback-member' => 'वैश्विक द्रूतमाघारकार',
	'group-Ombudsmen-member' => 'लोकआयूक्त',
	'group-Staff-member' => 'स्टाफ सदस्य',
	'group-coder' => 'संहिता(कोडर्स)',
	'group-coder-member' => 'संहिता(कोडर)',
	'group-inactive' => 'निष्क्रीय सदस्य',
	'group-inactive-member' => 'निष्क्रीय सदस्य',
	'grouppage-inactive' => '{{ns:project}}:निष्क्रीय सदस्य',
);

/** Malay (Bahasa Melayu)
 * @author Aurora
 * @author Aviator
 * @author Izzudin
 * @author Kurniasan
 */
$messages['ms'] = array(
	'wikimediamessages-desc' => 'Pesanan-pesanan Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/ms?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'Derma',
	'tooltip-n-sitesupport' => 'Derma',
	'specialpages-group-contribution' => 'Sumbangan/Tabung',
	'group-abusefilter' => 'Penyunting penapis salah laku',
	'group-accountcreator' => 'Pencipta akaun',
	'group-autopatrolled' => 'Peronda automatik',
	'group-autoreviewer' => 'Pemeriksaautomatik',
	'group-bigexport' => 'Pengeksport besar',
	'group-confirmed' => 'Pengguna sah',
	'group-flood' => 'Pengguna bot',
	'group-founder' => 'Pengasas',
	'group-import' => 'Pengimport',
	'group-ipblock-exempt' => 'Pengecualian sekatan IP',
	'group-patroller' => 'Peronda',
	'group-rollbacker' => 'Pengundur',
	'group-transwiki' => 'Pengimport rentas wiki',
	'group-trusted' => 'Pengguna terpercaya',
	'group-abusefilter-member' => 'penyunting penapis salah laku',
	'group-accountcreator-member' => 'Pencipta akaun',
	'group-autopatrolled-member' => 'autoperonda',
	'group-autoreviewer-member' => 'pemeriksaautomatik',
	'group-bigexport-member' => 'pengeksport besar',
	'group-confirmed-member' => 'Pengguna sah',
	'group-flood-member' => 'pengguna bot',
	'group-founder-member' => 'Pengasas',
	'group-import-member' => 'Pengimport',
	'group-ipblock-exempt-member' => 'Pengecualian sekatan IP',
	'group-patroller-member' => 'peronda',
	'group-rollbacker-member' => 'Pengundur',
	'group-transwiki-member' => 'Pengimport rentas wiki',
	'group-trusted-member' => 'Pengguna terpercaya',
	'grouppage-abusefilter' => '{{ns:project}}:Penyunting penapis salah laku',
	'grouppage-accountcreator' => '{{ns:project}}:Pencipta akaun',
	'grouppage-autopatrolled' => '{{ns:project}}:Autoperonda',
	'grouppage-autoreviewer' => '{{ns:project}}:Pemeriksaautomatik',
	'grouppage-bigexport' => '{{ns:project}}:Pengeksport besar',
	'grouppage-confirmed' => '{{ns:project}}:Pengguna sah',
	'grouppage-flood' => '{{ns:project}}:Pengguna bot',
	'grouppage-founder' => '{{ns:project}}:Pengasas',
	'grouppage-import' => '{{ns:project}}:Pengimport',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Pengecualian sekatan IP',
	'grouppage-rollbacker' => '{{ns:project}}:Pengundur suntingan',
	'grouppage-transwiki' => '{{ns:project}}:Pengimport rentas wiki',
	'grouppage-trusted' => '{{ns:project}}:Pengguna terpercaya',
	'group-steward' => 'Pengelola',
	'group-sysadmin' => 'Pentadbir sistem',
	'group-editinterface' => 'Penyunting antara muka',
	'group-Global_bot' => 'Bot sejagat',
	'group-Global_rollback' => 'Pengundur suntingan sejagat',
	'group-Ombudsmen' => 'Ombudsman',
	'group-Staff' => 'Kakitangan',
	'group-steward-member' => 'Pengelola',
	'group-sysadmin-member' => 'pentadbir sistem',
	'group-editinterface-member' => 'penyunting antara muka',
	'group-Global_bot-member' => 'Bot sejagat',
	'group-Global_rollback-member' => 'Pengundur suntingan sejagat',
	'group-Ombudsmen-member' => 'Ombudsman',
	'group-Staff-member' => 'kakitangan',
	'group-coder' => 'Pengekod',
	'group-coder-member' => 'pengekod',
	'group-inactive' => 'Pengguna tak aktif',
	'group-inactive-member' => 'pengguna tak aktif',
	'grouppage-inactive' => '{{ns:project}}:Pengguna tak aktif',
	'wikimedia-copyright' => 'Teks boleh didapati di bawah <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
syarat tambahan mungkin terpakai.
Lihat <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Terma Penggunaan</a> untuk perincian.',
	'wikimedia-copyrightwarning' => 'Dengan menyimpan, anda bersetuju untuk mengeluarkan sumbangan anda di bawah [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] dan [http://www.gnu.org/copyleft/fdl.html GFDL] dan tidak menarik baliknya.
Anda bersetuju untuk dikreditkan oleh pengguna semula, secara minimum, melalui pautan hiper atau URL ke laman di mana anda menyumbang.
Lihat [http://wikimediafoundation.org/wiki/Terms_of_Use Terma Penggunaan] untuk perincian.',
	'wikimedia-editpage-tos-summary' => 'Jika anda tidak mahu tulisan anda disunting dan diedarkan secara bebas oleh orang lain, maka jangan kirimkannya di sini.
Jika anda tidak menulisnya sendiri, ia mestilah dapat diperolehi di bawah syarat yang sejajar dengan [http://wikimediafoundation.org/wiki/Terms_of_Use Terma Penggunaan], dan anda bersetuju mengikuti sebarang keperluan pelesenan yang berkaitan.',
);

/** Maltese (Malti)
 * @author Chrisportelli
 * @author Giangian15
 */
$messages['mt'] = array(
	'wikimediamessages-desc' => 'Messaġġi speċifiki tal-Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donazzjonijiet',
	'sitesupport' => 'Donazzjonijiet',
	'tooltip-n-sitesupport' => 'Sostnina',
	'specialpages-group-contribution' => "Donazzjonijiet/Ġbir ta' fondi",
	'group-abusefilter' => 'Edituri tal-filtru tal-abbuż',
	'group-accountcreator' => "Kreaturi ta' kontijiet",
	'group-confirmed' => 'Utenti konfermati',
	'group-flood' => 'Utenti bot',
	'group-founder' => 'Fundaturi',
	'group-import' => 'Importaturi',
	'group-interface_editors' => 'Edituri tal-interfaċċa',
	'group-ipblock-exempt' => 'eżenzjonijiet tal-blokki tal-IP',
	'group-researcher' => 'Riċerkaturi',
	'group-transwiki' => 'Importaturi transwiki',
	'group-trusted' => 'Utenti fdati',
	'group-abusefilter-member' => 'editur tal-filtru tal-abbuż',
	'group-accountcreator-member' => 'kreatur tal-kontijiet',
	'group-arbcom-member' => 'membru tal-kumitat tal-arbitraġġ',
	'group-bigexport-member' => 'esportatur kbir',
	'group-confirmed-member' => 'utent konfermat',
	'group-founder-member' => 'fundatur',
	'group-import-member' => 'importatur',
	'group-ipblock-exempt-member' => 'Eżenti mill-imblokk tal-IP',
	'group-rollbacker-member' => 'rollbacker',
	'group-transwiki-member' => 'importatur transwiki',
	'group-trusted-member' => 'utent fdat',
	'grouppage-founder' => '{{ns:project}}:Fundaturi',
	'grouppage-import' => '{{ns:project}}:Importaturi',
	'group-steward' => 'Stwetti',
	'group-sysadmin' => 'Amministraturi tas-sistema',
	'group-Global_bot' => 'Bots globali',
	'group-Ombudsmen' => 'Ombudsmen',
	'group-Staff' => 'Uffiċjal',
	'group-steward-member' => 'stwett',
	'group-sysadmin-member' => 'amministratur tas-sistema',
	'group-editinterface-member' => 'editur tal-interfaċċa',
	'group-Global_bot-member' => 'bot globali',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'Membru uffiċjal',
	'group-inactive' => 'utenti inattivi',
	'group-inactive-member' => 'utent inattiv',
	'grouppage-inactive' => '{{ns:project}}:Utenti inattivi',
	'wikimedia-copyright' => 'It-test huwa disponibbli taħt il-<a href="http://creativecommons.org/licenses/by-sa/3.0/">Liċenzja Creative Commons Attribution/Share-Alike</a>;
termini addizjonali jistgħu japplikaw.
Ara t-<a href="http://wikimediafoundation.org/wiki/Terms_of_Use">termini ta\' użu</a> għal aktar dettalji.',
	'wikimedia-copyrightwarning' => "Billi ssalva l-paġna, int tkun qed taqbel li tirrilaxxa rrevokabilment il-kontribuzzjoni tiegħek taħt il-liċenzja [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] u l-[http://www.gnu.org/copyleft/fdl.html GFDL].
Inti taqbel li bħala minimu tiġi kreditat minn utenti oħra permezz ta' ħolqa jew URL lejn il-paġna li inti qed tikkontribwixxi fuq.
Ara t-[http://wikimediafoundation.org/wiki/Terms_of_Use termini ta' użu] għal aktar dettalji.",
	'wikimedia-editpage-tos-summary' => "Jekk ma tridx li l-ktiba tiegħek tiġi modifikata jew ridistribwita skont dak mixtieq, allura ddaħħalhiex hawnhekk. Jekk inti ma ktibx din il-ktiba, din trid tkun disponibbli taħt it-termini konsistenti mat-[http://wikimediafoundation.org/wiki/Terms_of_Use termini ta' użu], u trid taċċetta li ssegwi r-rekwiżiti kollha ta' liċenzja.",
);

/** Mirandese (Mirandés)
 * @author Cecílio
 * @author MCruz
 */
$messages['mwl'] = array(
	'sitesupport' => 'Donaçones',
	'tooltip-n-sitesupport' => 'Ajuda-mos',
	'wikimedia-copyright' => 'Este testo ye çponeblizado ne ls termos de la lhicença <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
puode star sujeito a cundiçones adecionales.
Consulta las <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Cundiçones de Uso</a> pa mais detailhes.',
);

/** Burmese (မြန်မာဘာသာ)
 * @author Hakka
 * @author Hintha
 */
$messages['my'] = array(
	'sitesupport' => 'လှု​ဒါန်း​မှု​',
	'tooltip-n-sitesupport' => 'အားပေးပါ',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 * @author Sura
 */
$messages['myv'] = array(
	'sitesupport' => 'Лезксйармаконь максома',
	'tooltip-n-sitesupport' => 'Макста миненек нежедематарка',
	'group-confirmed' => 'Кемекстань сёрмадыцят',
	'group-founder' => 'Лувонь путыйть',
	'group-confirmed-member' => 'кемекстань сёрмадыця',
	'group-founder-member' => 'лувонь путый',
	'group-import-member' => 'тевень совавтый',
	'grouppage-confirmed' => '{{ns:project}}:Кемекстань сёрмадыцят',
	'grouppage-founder' => '{{ns:project}}:Лувонь путыйть',
	'grouppage-import' => '{{ns:project}}:Тевень совавтыйть',
	'group-steward' => 'Туросторт',
	'group-sysadmin' => 'Системань администраторт',
	'group-editinterface' => 'Интерчамань витнийть-петнийть',
	'group-steward-member' => 'туростор',
	'group-editinterface-member' => 'интерчамань витний-петний',
);

/** Mazanderani (مازِرونی)
 * @author Spacebirdy
 */
$messages['mzn'] = array(
	'sitesupport' => 'پیلی کایر',
);

/** Nauru (Dorerin Naoero) */
$messages['na'] = array(
	'sitesupport' => 'Eadu a me',
);

/** Nahuatl (Nāhuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'sitesupport' => 'Tēyocatiliztli',
	'tooltip-n-sitesupport' => 'Xitēchtēpalēhuia',
	'group-founder-member' => 'Chīhualōni',
	'group-Staff' => 'Olōlli',
	'group-Staff-member' => 'Olōllācatl',
);

/** Min Nan Chinese (Bân-lâm-gú) */
$messages['nan'] = array(
	'sitesupport' => 'Kià-hù',
);

/** Neapolitan (Nnapulitano)
 * @author Cryptex
 */
$messages['nap'] = array(
	'sitesupport' => 'Donazzione',
);

/** Low German (Plattdüütsch)
 * @author Slomox
 * @author לערי ריינהארט
 */
$messages['nds'] = array(
	'wikimediamessages-desc' => 'Systemnarichten för Wikimedia',
	'sitesupport' => 'Spennen',
	'tooltip-n-sitesupport' => 'Ünnerstütt uns',
	'specialpages-group-contribution' => 'Spennen/Fundraiser',
	'group-abusefilter' => 'Missbruukfilter-Autorn',
	'group-accountcreator' => 'Brukerkonten-Opstellers',
	'group-bigexport' => 'Grootexportörs',
	'group-founder' => 'Grünners',
	'group-import' => 'Importörs',
	'group-ipblock-exempt' => 'IP-Sperr-Utnahmen',
	'group-rollbacker' => 'Trüchsetters',
	'group-transwiki' => 'Transwiki-Importörs',
	'group-abusefilter-member' => 'Missbruukfilter-Autor',
	'group-accountcreator-member' => 'Brukerkonten-Opsteller',
	'group-autopatrolled-member' => 'Autopatroller',
	'group-bigexport-member' => 'Grootexportör',
	'group-founder-member' => 'Grünner',
	'group-import-member' => 'Importör',
	'group-ipblock-exempt-member' => 'IP-Sperr-Utnahm',
	'group-rollbacker-member' => 'Trüchsetter',
	'group-transwiki-member' => 'Transwiki-Importör',
	'grouppage-abusefilter' => '{{ns:project}}:Missbruukfilter-Autorn',
	'grouppage-accountcreator' => '{{ns:project}}:Brukerkonten-Opstellers',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollers',
	'grouppage-bigexport' => '{{ns:project}}:Grootexportörs',
	'grouppage-founder' => '{{ns:project}}:Grünners',
	'grouppage-import' => '{{ns:project}}:Importörs',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Sperr-Utnahm',
	'grouppage-rollbacker' => '{{ns:project}}:Trüchsetters',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importörs',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'System-Administraters',
	'group-Global_bot' => 'Globale Bots',
	'group-Global_rollback' => 'Globale Trüchsetters',
	'group-Ombudsmen' => 'Ombudslüüd',
	'group-Staff' => 'Mitarbeiders',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'System-Administrater',
	'group-Global_bot-member' => 'Global Bot',
	'group-Global_rollback-member' => 'Global Trüchsetter',
	'group-Ombudsmen-member' => 'Ombudsmann',
	'group-Staff-member' => 'Mitarbeider',
	'group-coder' => 'Programmerers',
	'group-coder-member' => 'Programmerer',
	'group-inactive' => 'Inaktive Brukers',
	'group-inactive-member' => 'Inaktiven Bruker',
	'grouppage-inactive' => '{{ns:project}}:Inaktive Brukers',
);

/** Nedersaksisch (Nedersaksisch)
 * @author Servien
 * @author לערי ריינהארט
 */
$messages['nds-nl'] = array(
	'wikimediamessages-desc' => 'Systeemteksen veur Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/nds-nl',
	'sitesupport' => 'Geld geven',
	'tooltip-n-sitesupport' => 'Gef oons geald',
	'group-abusefilter' => 'misbruukfilterredacteuren',
	'group-accountcreator' => 'gebrukeranmakers',
	'group-autopatrolled' => 'autematische contreleurs',
	'group-autoreviewer' => 'auto-eindredactie',
	'group-bigexport' => 'grote uutvoerders',
	'group-confirmed' => 'bevestigen gebrukers',
	'group-flood' => 'botgebrukers',
	'group-founder' => 'grondlegers',
	'group-import' => 'invoerders',
	'group-ipblock-exempt' => 'uutzunderingen van IP-adresblokkeringen',
	'group-patroller' => 'contreleurs',
	'group-rollbacker' => 'weerummedreiers',
	'group-transwiki' => 'transwiki-invoerders',
	'group-accountcreator-member' => 'gebrukeranmaker',
	'group-autopatrolled-member' => 'autopatroller',
	'group-confirmed-member' => 'bevestigen gebruker',
	'group-flood-member' => 'botgebruker',
	'group-founder-member' => 'grondleger',
	'group-import-member' => 'invoerder',
	'group-ipblock-exempt-member' => 'uutzundering van IP-adresblokkeringen',
	'group-patroller-member' => 'contreleur',
	'group-rollbacker-member' => 'weerummedreier',
	'group-transwiki-member' => 'transwiki-invoerder',
	'grouppage-accountcreator' => '{{ns:project}}:Gebrukeranmakers',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollers',
	'grouppage-founder' => '{{ns:project}}:Grondlegers',
	'grouppage-import' => '{{ns:project}}:Invoerders',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uutzunderingen van IP-adresblokkeringen',
	'grouppage-rollbacker' => '{{ns:project}}:Weerummedreiers',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-invoerders',
	'group-steward' => 'rechenbeheerders',
	'group-sysadmin' => 'systeembeheerder',
	'group-Global_bot' => 'globale bots',
	'group-Global_rollback' => 'globale weerummedreiers',
	'group-Ombudsmen' => 'ombudsluui',
	'group-Staff' => 'staf',
	'group-steward-member' => 'rechenbeheerder',
	'group-sysadmin-member' => 'systeembeheerder',
	'group-Global_bot-member' => 'globale bot',
	'group-Global_rollback-member' => 'globale weerummedreier',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'staflid',
	'group-coder' => 'progremmeurs',
	'group-coder-member' => 'progremmeur',
	'group-inactive' => 'inactieve gebrukers',
	'group-inactive-member' => 'inactieve gebruker',
	'grouppage-inactive' => '{{ns:project}}:Inactieve gebrukers',
	'wikimedia-copyright' => 'De tekse ku-j naolezen onder de licentie <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Naamvermelding/Gelieke delen</a>; \'t kan ween dat nog meer veurweerden van toepassing bin.
Bekiek de <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">algemene veurweerden</a> veur meer infermasie.',
	'wikimedia-copyrightwarning' => "A-j disse bewarking opslaon, dan stem je in mit 't vriegeven van joew biedrage onder de licentie [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Naamvermelding/Gelieke delen] en de [http://www.gnu.org/copyleft/fdl.html GFDL], dit ku-w neet weerummedreien.
Je stemmen dermee in deur hergebrukers op z'n mins eneumd te wonnen via een verwiezing naor de pagina waor je an biedragen.
Bekiek de [http://wikimediafoundation.org/wiki/Terms_of_Use algemene veurweerden] veur meer infermasie.",
	'wikimedia-editpage-tos-summary' => "A-j neet willen dat joew biedrage bewark of verspreid wönnen, slao 't dan neet op.
A-j de tekse neet zelf eschreven hemmen, dan mut de biedrage beschikbaor ween onder de [http://wikimediafoundation.org/wiki/Terms_of_Use algemene veurweerden] en stem je in mit alle rillevante licentieveurweerden.",
);

/** Nepali (नेपाली) */
$messages['ne'] = array(
	'sitesupport' => 'चन्दा',
);

/** Newari (नेपाल भाषा)
 * @author Eukesh
 */
$messages['new'] = array(
	'sitesupport' => 'दान',
);

/** Dutch (Nederlands)
 * @author Mwpnl
 * @author Niels
 * @author Pahles
 * @author SPQRobin
 * @author Siebrand
 * @author Troefkaart
 * @author Tvdm
 */
$messages['nl'] = array(
	'wikimediamessages-desc' => 'Berichten voor Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Giften',
	'sitesupport' => 'Donaties',
	'tooltip-n-sitesupport' => 'Ondersteun ons financieel',
	'specialpages-group-contribution' => 'Giften/Fondsenwervingsactie',
	'group-abusefilter' => 'misbruikfilterredacteuren',
	'group-accountcreator' => 'gebruikersaanmakers',
	'group-arbcom' => 'arbitragecommissieleden',
	'group-autopatrolled' => 'autopatrollers',
	'group-autoreviewer' => 'autoeindredactie',
	'group-bigexport' => 'grote exporteurs',
	'group-confirmed' => 'bevestigde gebruikers',
	'group-editprotected' => "bewerkers van beveiligde pagina's",
	'group-filemover' => 'bestandshernoemers',
	'group-flood' => 'botgebruikers',
	'group-founder' => 'grondleggers',
	'group-import' => 'importeurs',
	'group-interface_editors' => 'interfacebewerkers',
	'group-ipblock-exempt' => 'uitgezonderden van IP-adresblokkades',
	'group-patroller' => 'Controleurs',
	'group-researcher' => 'onderzoekers',
	'group-rollbacker' => 'terugdraaiers',
	'group-transwiki' => 'transwiki-importeurs',
	'group-trusted' => 'vertrouwde gebruikers',
	'group-abusefilter-member' => 'misbruikfilterredacteur',
	'group-accountcreator-member' => 'gebruikersaanmaker',
	'group-arbcom-member' => 'arbitragecommissielid',
	'group-autopatrolled-member' => 'autopatroller',
	'group-autoreviewer-member' => 'autoeindredactie',
	'group-bigexport-member' => 'grote exporteur',
	'group-confirmed-member' => 'bevestigde gebruiker',
	'group-editprotected-member' => "bewerker van beveiligde pagina's",
	'group-filemover-member' => 'bestandshernoemer',
	'group-flood-member' => 'botgebruiker',
	'group-founder-member' => 'grondlegger',
	'group-import-member' => 'importeur',
	'group-interface_editors-member' => 'interfacebewerker',
	'group-ipblock-exempt-member' => 'uitgezonderde van IP-adresblokkades',
	'group-patroller-member' => 'Controleur',
	'group-researcher-member' => 'onderzoeker',
	'group-rollbacker-member' => 'terugdraaier',
	'group-transwiki-member' => 'transwiki-importeur',
	'group-trusted-member' => 'vertrouwde gebruiker',
	'grouppage-abusefilter' => '{{ns:project}}:Misbruikfilterredacteuren',
	'grouppage-accountcreator' => '{{ns:project}}:Gebruikersaanmakers',
	'grouppage-arbcom' => '{{ns:project}}:Arbitragecommissieleden',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrollers',
	'grouppage-autoreviewer' => '{{ns:project}}:Autoeindredactie',
	'grouppage-bigexport' => '{{ns:project}}:Grote exporteurs',
	'grouppage-confirmed' => '{{ns:project}}:Bevestigde gebruikers',
	'grouppage-editprotected' => "{{ns:project}}:Bewerkers van beveiligde pagina's",
	'grouppage-filemover' => '{{ns:project}}:Bestandshernoemers',
	'grouppage-flood' => '{{ns:project}}:Botgebruikers',
	'grouppage-founder' => '{{ns:project}}:Grondleggers',
	'grouppage-import' => '{{ns:project}}:Importeurs',
	'grouppage-interface_editors' => '{{ns:project}}:Interfacebewerkers',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uitgezonderden van IP-adresblokkades',
	'grouppage-researcher' => '{{ns:project}}:Onderzoekers',
	'grouppage-rollbacker' => '{{ns:project}}:Terugdraaiers',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importeurs',
	'grouppage-trusted' => '{{ns:project}}:Vertrouwde gebruikers',
	'group-steward' => 'stewards',
	'group-sysadmin' => 'systeembeheerders',
	'group-editinterface' => 'gebruikersinterfacebewerkers',
	'group-Global_bot' => 'globale bots',
	'group-Global_rollback' => 'globale terugdraaiers',
	'group-Global_sysops' => 'globale beheerders',
	'group-Ombudsmen' => 'ombudsmannen',
	'group-Staff' => 'staf',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'systeembeheerder',
	'group-editinterface-member' => 'gebruikersinterfacebewerker',
	'group-Global_bot-member' => 'globale bot',
	'group-Global_rollback-member' => 'globale terugdraaier',
	'group-Global_sysops-member' => 'globale beheerder',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'staflid',
	'grouppage-steward' => 'm:Stewards/nl',
	'grouppage-Global_rollback' => 'm:Global rollback/nl',
	'group-coder' => 'programmeurs',
	'group-coder-member' => 'programmeur',
	'grouppage-coder' => 'Project:Programmeur',
	'group-inactive' => 'inactieve gebruikers',
	'group-inactive-member' => 'inactieve gebruiker',
	'grouppage-inactive' => '{{ns:project}}:Inactieve gebruikers',
	'wikimedia-copyright' => 'De tekst is beschikbaar onder de licentie <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.nl">Creative Commons Naamsvermelding-Gelijk delen</a>.
Er kunnen aanvullende voorwaarden van toepassing zijn.
Zie de <a href="http://wikimediafoundation.org/wiki/Gebruiksvoorwaarden">Gebruiksvoorwaarden</a> voor meer informatie.',
	'wikimedia-copyrightwarning' => 'Door uw bewerking op te slaan, gaat u akkoord met het onherroepelijk vrijgeven van uw bijdrage onder de licentie [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Naamsvermelding/Gelijk delen] en de [http://www.gnu.org/copyleft/fdl.html GFDL].
U gaat ermee akkoord door hergebruikers minimaal genoemd te worden via een hyperlink of URL naar de pagina waaraan u bijdraagt.
Zie de [http://wikimediafoundation.org/wiki/Terms_of_Use gebruiksvoorwaarden] voor meer informatie.',
	'wikimedia-editpage-tos-summary' => 'Als u niet wilt dat uw bijdrage bewerkt of gedistribueerd wordt, sla deze dan niet op.
Als uw bewerking niet door uzelf is geschreven, dan moet uw toevoeging beschikbaar zijn onder condities die consistent zijn met de [http://wikimediafoundation.org/wiki/Gebruiksvoorwaarden Gebruiksvoorwaarden] en gaat u akkoord met alle relevante licentievoorwaarden.',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬)
 * @author Frokor
 * @author Gunnernett
 * @author Harald Khan
 * @author Jon Harald Søby
 */
$messages['nn'] = array(
	'wikimediamessages-desc' => 'Wikimedia-spesifikke meldingar',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/nn',
	'sitesupport' => 'Gåver',
	'tooltip-n-sitesupport' => 'Støtt oss',
	'specialpages-group-contribution' => 'Bidrag/Innsamling',
	'group-abusefilter' => 'Redigerarar av misbruksfilteret',
	'group-accountcreator' => 'Kontoopprettarar',
	'group-autopatrolled' => 'Autopatruljerarar',
	'group-autoreviewer' => 'Automatiske granskarar',
	'group-bigexport' => 'Store eksportørar',
	'group-confirmed' => 'Stadfesta brukarar',
	'group-flood' => 'Bot-brukarar',
	'group-founder' => 'Grunnleggarar',
	'group-import' => 'Importørar',
	'group-ipblock-exempt' => 'Unntak frå IP-blokkering',
	'group-patroller' => 'Endringsvaktarar',
	'group-rollbacker' => 'Attenderullarar',
	'group-transwiki' => 'Transwiki-importørar',
	'group-trusted' => 'Brukarar til å stola på',
	'group-abusefilter-member' => 'redigerar av misbruksfilteret',
	'group-accountcreator-member' => 'Kontoopprettar',
	'group-autopatrolled-member' => 'automatisk godkjende bidrag',
	'group-autoreviewer-member' => 'automeldar',
	'group-bigexport-member' => 'stor eksportør',
	'group-confirmed-member' => 'stadfesta brukar',
	'group-flood-member' => 'bot-brukar',
	'group-founder-member' => 'grunnleggar',
	'group-import-member' => 'importør',
	'group-ipblock-exempt-member' => 'Unteke frå IP-blokkering',
	'group-patroller-member' => 'endringsvaktar',
	'group-rollbacker-member' => 'attenderullar',
	'group-transwiki-member' => 'transwiki-importør',
	'group-trusted-member' => 'brukar til å stola på',
	'grouppage-abusefilter' => '{{ns:project}}:Redigerarar av misbruksfilteret',
	'grouppage-accountcreator' => '{{ns:project}}:Kontoopprettarar',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatisk godkjende bidrag',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatiske granskarar',
	'grouppage-bigexport' => '{{ns:project}}:Store eksportørar',
	'grouppage-confirmed' => '{{ns:project}}:Stadfeste brukarar',
	'grouppage-flood' => '{{ns:project}}:Bot-brukarar',
	'grouppage-founder' => '{{ns:project}}:Grunnleggarar',
	'grouppage-import' => '{{ns:project}}:Importørar',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Unnatekne frå IP-blokkering',
	'grouppage-rollbacker' => '{{ns:project}}:Attenderullarar',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importørar',
	'grouppage-trusted' => '{{ns:project}}:Brukarar til å stola på',
	'group-steward' => 'Stewardar',
	'group-sysadmin' => 'Systemadministratorar',
	'group-editinterface' => 'Brukargrensesnitt endringar',
	'group-Global_bot' => 'Globale robotar',
	'group-Global_rollback' => 'Globale attenderullarar',
	'group-Ombudsmen' => 'Ombodsmenn',
	'group-Staff' => 'Personale',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'systemadministrator',
	'group-editinterface-member' => 'brukargrensesnitt endring',
	'group-Global_bot-member' => 'global robot',
	'group-Global_rollback-member' => 'global attenderullar',
	'group-Ombudsmen-member' => 'ombodsmann',
	'group-Staff-member' => 'personal',
	'grouppage-steward' => 'm:Stewards/nb',
	'grouppage-sysadmin' => 'm:Systemadministratorar',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
	'group-coder' => 'Kodarar',
	'group-coder-member' => 'kodar',
	'grouppage-coder' => 'Project:Kodar',
	'group-inactive' => 'Ikkje-aktive brukarar',
	'group-inactive-member' => 'ikkje aktiv brukar',
	'grouppage-inactive' => '{{ns:project}}:Ikkje aktive brukarar',
	'wikimedia-copyright' => 'Innhaldet er tilgjengeleg under <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-alike License</a>; ytterlegare vilkår kan gjelda. Sjå <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Vilkår</a> for detaljar.',
	'wikimedia-copyrightwarning' => 'Når du lagrar gjev du ugjenkalleleg løyve til å gje ut ditt bidrag under [http://creativecommons.org/licenses/by-sa/3.0/deed.no Creative Commons-lisensen Namngjeving-Del på same vilkår 3.0] og [http://www.gnu.org/copyleft/fdl.html GFDL]. Du går òg med på å verta oppgjeven som ein opphavsperson av gjenbrukarar, som eit minimum, gjennom ei hyperlenke eller URL til artikkelen du var med på å utarbeida. Sjå [http://wikimediafoundation.org/wiki/Terms_of_Use bruksvilkåra] for fleire opplysingar.',
	'wikimedia-editpage-tos-summary' => 'Ynskjer du ikkje at verket ditt vert redigert og redistribuert, skal du ikkje lagra det her. Har du ikkje sjølv skrive det, skal det vera tilgjengeleg under vilkåra i samsvar med [http://wikimediafoundation.org/wiki/Terms_of_Use Bruksvilkåra], og du stadfestar å fylgja alle relevante lisenskrav.',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Finnrind
 * @author Jon Harald Søby
 * @author Laaknor
 * @author Nghtwlkr
 * @author Stigmj
 */
$messages['no'] = array(
	'wikimediamessages-desc' => 'Wikimedia-spesifikke beskjeder',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/nb',
	'sitesupport' => 'Donasjoner',
	'tooltip-n-sitesupport' => 'Støtt oss',
	'specialpages-group-contribution' => 'Bidrag/Innsamling',
	'group-abusefilter' => 'Redaktører av misbruksfilteret',
	'group-accountcreator' => 'Kontoopprettere',
	'group-arbcom' => 'Meglingskomitémedlemmer',
	'group-autopatrolled' => 'autopatrollere',
	'group-autoreviewer' => 'Autogranskede',
	'group-bigexport' => 'Stor eksport',
	'group-confirmed' => 'Bekreftede brukere',
	'group-editprotected' => 'Redaktører av beskyttede sider',
	'group-filemover' => 'Filflyttere',
	'group-flood' => 'bot-brukere',
	'group-founder' => 'Grunnleggere',
	'group-import' => 'Importører',
	'group-interface_editors' => 'Bidragsytere til grensesnitt',
	'group-ipblock-exempt' => 'Untatte fra IP-blokkering',
	'group-patroller' => 'Patruljører',
	'group-rollbacker' => 'Tilbakestillere',
	'group-transwiki' => 'Transwiki-importører',
	'group-trusted' => 'Betrodde brukere',
	'group-abusefilter-member' => 'redaktør av misbruksfilteret',
	'group-accountcreator-member' => 'Kontooppretter',
	'group-arbcom-member' => 'Meglingskomitémedlem',
	'group-autopatrolled-member' => 'selvpatruljør',
	'group-autoreviewer-member' => 'autogransket',
	'group-bigexport-member' => 'stor eksportør',
	'group-confirmed-member' => 'bekreftet bruker',
	'group-editprotected-member' => 'redaktør av beskyttet side',
	'group-filemover-member' => 'filflytter',
	'group-flood-member' => 'bot-bruker',
	'group-founder-member' => 'Grunnlegger',
	'group-import-member' => 'Importør',
	'group-interface_editors-member' => 'bidragsyter til grensesnitt',
	'group-ipblock-exempt-member' => 'Unttatt fra IP-blokkering',
	'group-patroller-member' => 'patruljør',
	'group-rollbacker-member' => 'Tilbakestiller',
	'group-transwiki-member' => 'Transwiki-importør',
	'group-trusted-member' => 'betrodd bruker',
	'grouppage-abusefilter' => '{{ns:project}}:Redaktører av misbruksfilteret',
	'grouppage-accountcreator' => '{{ns:project}}:Kontoopprettere',
	'grouppage-arbcom' => '{{ns:project}}:Meglingskomitémedlemmer',
	'grouppage-autopatrolled' => '{{ns:project}}:Patruljering',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatisk gransket',
	'grouppage-bigexport' => '{{ns:project}}:Store eksportører',
	'grouppage-confirmed' => '{{ns:project}}:Bekreftede brukere',
	'grouppage-editprotected' => '{{ns:project}}:Redaktører av beskyttede sider',
	'grouppage-filemover' => '{{ns:project}}:Filflyttere',
	'grouppage-flood' => '{{ns:project}}:Bot-brukere',
	'grouppage-founder' => '{{ns:project}}:Grunnleggere',
	'grouppage-import' => '{{ns:project}}:Importører',
	'grouppage-interface_editors' => '{{ns:project}}:Bidragsytere til grensesnitt',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Unntatte fra IP-blokkering',
	'grouppage-rollbacker' => '{{ns:project}}:Tilbakestillere',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importører',
	'grouppage-trusted' => '{{ns:project}}: Betrodde brukere',
	'group-steward' => 'Forvaltere',
	'group-sysadmin' => 'Systemadministratorer',
	'group-editinterface' => 'Grensesnittredigerer',
	'group-Global_bot' => 'Globale roboter',
	'group-Global_rollback' => 'Globale tilbakestillere',
	'group-Global_sysops' => 'Global sysop',
	'group-Ombudsmen' => 'Ombudsmenn',
	'group-Staff' => 'Ansatte',
	'group-steward-member' => 'forvalter',
	'group-sysadmin-member' => 'systemadministrator',
	'group-editinterface-member' => 'grensesnittredigerer',
	'group-Global_bot-member' => 'global robot',
	'group-Global_rollback-member' => 'global tilbakestiller',
	'group-Global_sysops-member' => 'global sysop',
	'group-Ombudsmen-member' => 'ombudsmann',
	'group-Staff-member' => 'ansatt',
	'grouppage-steward' => 'm:Stewards/nb',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
	'group-coder' => 'Kodere',
	'group-coder-member' => 'koder',
	'group-inactive' => 'Inaktive brukere',
	'group-inactive-member' => 'inaktiv bruker',
	'grouppage-inactive' => '{{ns:project}}:Inaktive brukere',
	'wikimedia-copyright' => 'Innholdet er tilgjengelig under <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons-lisensen Navngivelse-Del på samme vilkår</a>, men ytterligere betingelser kan gjelde. Se <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">bruksvilkårene</a> for detaljer.',
	'wikimedia-copyrightwarning' => 'Når du lagrer innvilger du ugjenkallelig å gi ut ditt bidrag under [http://creativecommons.org/licenses/by-sa/3.0/deed.no Creative Commons-lisensen Navngivelse-Del på samme vilkår 3.0] og [http://www.gnu.org/copyleft/fdl.html GFDL]. Du går også med på å bli angitt som en opphavsperson av gjenbrukere, som et minimum, gjennom en hyperlenke eller URL til artikkelen du bidro til. Se [http://wikimediafoundation.org/wiki/Terms_of_Use bruksvilkårene] for flere opplysninger.',
	'wikimedia-editpage-tos-summary' => 'Ønsker du ikke at verket ditt blir redigert og redistribuert, skal du ikke lagre det her. Har du ikke selv skrevet det, skal det være tilgjengelig under betingelsene i overensstemmelse med [http://wikimediafoundation.org/wiki/Terms_of_Use bruksvilkårene], og du bekrefter å følge alle relevante lisenskrav.',
);

/** Novial (Novial)
 * @author Malafaya
 */
$messages['nov'] = array(
	'sitesupport' => 'Donationes',
);

/** Northern Sotho (Sesotho sa Leboa)
 * @author Mohau
 */
$messages['nso'] = array(
	'sitesupport' => 'Dineelo',
	'tooltip-n-sitesupport' => 'Re thekge',
);

/** Occitan (Occitan)
 * @author Cedric31
 * @author Jfblanc
 * @author McDutchie
 */
$messages['oc'] = array(
	'wikimediamessages-desc' => 'Messatges especifics de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/oc',
	'sitesupport' => 'Far un don',
	'tooltip-n-sitesupport' => 'Sostenètz lo projècte',
	'specialpages-group-contribution' => 'Contribucions / Levada de fonses',
	'group-abusefilter' => "Modificators dels filtres d'abuses",
	'group-accountcreator' => 'Creators de comptes',
	'group-arbcom' => "de sòcis del comitat d'arbitratge",
	'group-autopatrolled' => 'Patrolhas automaticas',
	'group-autoreviewer' => 'Revisadors automatics',
	'group-bigexport' => 'Grands exportaires',
	'group-confirmed' => 'Utilizaires confirmats',
	'group-editprotected' => 'Editors de paginas protegidas',
	'group-filemover' => 'Renomenadors de fichièrs',
	'group-flood' => 'Dressaires de bòt',
	'group-founder' => 'Fondators',
	'group-import' => 'Importaires',
	'group-interface_editors' => "Editors de l'interfàcia",
	'group-ipblock-exempt' => 'Exempcions de blòts IP',
	'group-patroller' => 'Patrolhaires',
	'group-researcher' => 'Cercaires',
	'group-rollbacker' => 'Revocaires',
	'group-transwiki' => 'Importaires Transwiki',
	'group-trusted' => 'Utilizaires de fisança',
	'group-abusefilter-member' => "modificator dels filtres d'abuses",
	'group-accountcreator-member' => 'Creator de comptes',
	'group-arbcom-member' => "sòci del comitat d'arbitratge",
	'group-autopatrolled-member' => 'Patrolhador automatic',
	'group-autoreviewer-member' => 'revisador automatic',
	'group-bigexport-member' => 'grand exportaire',
	'group-confirmed-member' => 'utilizaire confirmat',
	'group-editprotected-member' => 'editor de paginas protegidas',
	'group-filemover-member' => 'Renomenador de fichièrs',
	'group-flood-member' => 'dressaires de bòt',
	'group-founder-member' => 'Fondator',
	'group-import-member' => 'Importaire',
	'group-interface_editors-member' => "editor de l'interfàcia",
	'group-ipblock-exempt-member' => 'Exempcion de blòt IP',
	'group-patroller-member' => 'Patrolhaire',
	'group-researcher-member' => 'Cercaire',
	'group-rollbacker-member' => 'Revocaire',
	'group-transwiki-member' => 'Importaire Transwiki',
	'group-trusted-member' => 'utilizaire de fisança',
	'grouppage-abusefilter' => "{{ns:project}}:Modificators dels filtres d'abuses",
	'grouppage-accountcreator' => '{{ns:project}}:Creators de comptes',
	'grouppage-arbcom' => "{{ns:project}}:de sòcis del comitat d'arbitratge",
	'grouppage-autopatrolled' => '{{ns:project}}:Patrolhadors automatics',
	'grouppage-autoreviewer' => '{{ns:project}}:Revisador automatic',
	'grouppage-bigexport' => '{{ns:project}}:Grands exportaires',
	'grouppage-confirmed' => '{{ns:project}}:Utilizaires confirmats',
	'grouppage-editprotected' => '{{ns:project}}:Editors de paginas protegidas',
	'grouppage-flood' => '{{ns:project}}:Dressaires de bòt',
	'grouppage-founder' => '{{ns:project}}:Fondators',
	'grouppage-import' => '{{ns:project}}:Importaires',
	'grouppage-interface_editors' => "{{ns:project}}:Editors de l'interfàcia",
	'grouppage-ipblock-exempt' => '{{ns:project}}:Exempcion de blòt IP',
	'grouppage-rollbacker' => '{{ns:project}}:Revocaires',
	'grouppage-transwiki' => '{{ns:project}}:Importaires Transwiki',
	'grouppage-trusted' => '{{ns:project}}:Utilizaire de fisança',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Administrators del sistèma',
	'group-editinterface' => "Modificators de l'interfàcia",
	'group-Global_bot' => 'Bòts globals',
	'group-Global_rollback' => 'Revocaires globals',
	'group-Global_sysops' => 'Administrators globals',
	'group-Ombudsmen' => 'Comissaris',
	'group-Staff' => 'Personal',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'administrator del sistèma',
	'group-editinterface-member' => "modificator de l'interfàcia",
	'group-Global_bot-member' => 'Bòt global',
	'group-Global_rollback-member' => 'Revocaire global',
	'group-Global_sysops-member' => 'administrator global',
	'group-Ombudsmen-member' => 'Comissari',
	'group-Staff-member' => 'Membre del personal',
	'group-coder' => 'Encodaires',
	'group-coder-member' => 'encodaire',
	'group-inactive' => 'Utilizaires inactius',
	'group-inactive-member' => 'Utilizaire inactiu',
	'grouppage-inactive' => '{{ns:project}}: Utilizaires inactius',
	'wikimedia-copyright' => 'Los tèxtes son disponibles jos <a href="http://creativecommons.org/licenses/by-sa/3.0/">licence Creative Commons atribucion pertatge a l’identica</a> ; d’autres tèrmes se pòdon aplicar. Vejatz los <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">tèrmes d’utilizacion</a> per mai de detalhs.',
	'wikimedia-copyrightwarning' => 'En clicant sus « publicar », acceptatz de plaçar irrevocablament vòstra contribucion jos [http://creativecommons.org/licenses/by-sa/3.0/ licence Creative Commons atribucion pertatge a l’identica 3.0] e [http://www.gnu.org/copyleft/fdl.html GFDL]. Acceptatz d’èsser creditat al minimum via un iperligam o URL cap a l’article sul qual contribuissètz. Vejatz los [http://wikimediafoundation.org/wiki/Terms_of_Use tèrmes d’utilizacion] per mai de detalhs.',
	'wikimedia-editpage-tos-summary' => 'Se volètz pas que vòstres escriches sián modificats e redistribuits a volontat, alara los sometatz pas ici. Se los avètz pas escriches vos-meteis, devon èsser disponibles jos de tèrmes compatibles amb los [http://wikimediafoundation.org/wiki/Terms_of_Use tèrmes d’utilizacion], e acceptatz de seguir totas las exigéncias de la licéncia.',
);

/** Oriya (ଓଡ଼ିଆ)
 * @author Jose77
 */
$messages['or'] = array(
	'sitesupport' => 'ଦାନ',
);

/** Ossetic (Иронау)
 * @author Amikeco
 */
$messages['os'] = array(
	'sitesupport' => 'Мысайнаг',
	'tooltip-n-sitesupport' => 'Баххуыс нын кæн',
	'group-founder' => 'Бындурæвæрджытæ',
	'group-founder-member' => 'бындурæвæрæг',
	'grouppage-founder' => '{{ns:project}}:Бындурæвæрджытæ',
);

/** Punjabi (ਪੰਜਾਬੀ) */
$messages['pa'] = array(
	'sitesupport' => 'ਦਾਨ',
);

/** Pangasinan (Pangasinan) */
$messages['pag'] = array(
	'sitesupport' => 'Donasyon',
);

/** Pampanga (Kapampangan)
 * @author Katimawan2005
 */
$messages['pam'] = array(
	'sitesupport' => 'Donasiun',
	'tooltip-n-sitesupport' => 'Saupan yu kami',
	'wikimedia-copyrightwarning' => "Nung mag-save ka, mamayun kang itabili me at e mu ne bawian ing kekang ambag king lalam ning [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] ampo ning [http://www.gnu.org/copyleft/fdl.html GFDL].
Mamayun kang kilalanan da ka deng talagamit a gagamit pasibayu kaniti (''re-users''), king paralan a e kulang king pamangabit hyperlink o URL king bulung nung nu ka manambag.
Lon me ing [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] para kareng detalle.",
);

/** Deitsch (Deitsch)
 * @author Xqt
 */
$messages['pdc'] = array(
	'group-flood' => 'Waddefresser',
	'group-founder' => 'Grinder',
	'group-flood-member' => 'Waddefresser',
	'group-founder-member' => 'Grinder',
	'grouppage-flood' => '{{ns:project}}:Waddefresser',
	'grouppage-founder' => '{{ns:project}}:Grinder',
	'group-steward' => 'Stewards',
	'group-Global_bot' => 'Globale Bots',
	'group-steward-member' => 'Steward',
	'group-Global_bot-member' => 'Globaler Bot',
);

/** Plautdietsch (Plautdietsch)
 * @author Slomox
 */
$messages['pdt'] = array(
	'sitesupport' => 'Gowe',
	'tooltip-n-sitesupport' => 'Unjastett onns',
);

/** Pfälzisch (Pfälzisch)
 * @author SPS
 */
$messages['pfl'] = array(
	'sitesupport' => 'Spende',
	'group-steward' => 'Stewards',
	'group-steward-member' => 'Steward',
	'grouppage-steward' => '{{ns:project}}:Steward',
);

/** Norfuk / Pitkern (Norfuk / Pitkern) */
$messages['pih'] = array(
	'sitesupport' => 'Doenaiishun',
);

/** Polish (Polski)
 * @author Beau
 * @author Derbeth
 * @author Leinad
 * @author Meno25
 * @author Nux
 * @author Sp5uhe
 * @author ToSter
 */
$messages['pl'] = array(
	'wikimediamessages-desc' => 'Komunikaty unikalne dla projektów Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/pl',
	'sitesupport' => 'Darowizny',
	'tooltip-n-sitesupport' => 'Pomóż nam',
	'specialpages-group-contribution' => 'Darowizny/Zbieranie funduszy',
	'group-abusefilter' => 'Operatorzy filtru nadużyć',
	'group-accountcreator' => 'Tworzący konta',
	'group-arbcom' => 'Członkowie Komitetu Arbitrażowego',
	'group-autopatrolled' => 'Patrolujący automatycznie',
	'group-autoreviewer' => 'Automatycznie przeglądający',
	'group-bigexport' => 'Masowi eksporterzy',
	'group-confirmed' => 'Zatwierdzeni użytkownicy',
	'group-editprotected' => 'Edytorzy zabezpieczonych stron',
	'group-filemover' => 'Przenoszący pliki',
	'group-flood' => 'Użytkownicy o ukrytej aktywności',
	'group-founder' => 'Założyciele',
	'group-import' => 'Importerzy',
	'group-interface_editors' => 'Edytorzy interfejsu',
	'group-ipblock-exempt' => 'Uprawnieni do logowania się z zablokowanych adresów IP',
	'group-patroller' => 'Patrolujący',
	'group-researcher' => 'Naukowcy',
	'group-rollbacker' => 'Uprawnieni do wycofywania edycji',
	'group-transwiki' => 'Importerzy transwiki',
	'group-trusted' => 'Zaufani użytkownicy',
	'group-abusefilter-member' => 'operator filtru nadużyć',
	'group-accountcreator-member' => 'twórca kont',
	'group-arbcom-member' => 'członek Komitetu Arbitrażowego',
	'group-autopatrolled-member' => 'patrolujący automatycznie',
	'group-autoreviewer-member' => 'automatycznie przeglądający',
	'group-bigexport-member' => 'masowy eksporter',
	'group-confirmed-member' => 'zatwierdzony użytkownik',
	'group-editprotected-member' => 'edytor zabezpieczonych stron',
	'group-filemover-member' => 'przenoszący pliki',
	'group-flood-member' => 'użytkownik o ukrytej aktywności',
	'group-founder-member' => 'założyciel',
	'group-import-member' => 'importer',
	'group-interface_editors-member' => 'edytor interfejsu',
	'group-ipblock-exempt-member' => 'uprawniony do zalogowania się z zablokowanego adresu IP',
	'group-patroller-member' => 'Patrolujący',
	'group-researcher-member' => 'naukowiec',
	'group-rollbacker-member' => 'uprawniony do wycofania edycji',
	'group-transwiki-member' => 'importer transwiki',
	'group-trusted-member' => 'zaufany użytkownik',
	'grouppage-abusefilter' => '{{ns:project}}:Operatorzy filtru nadużyć',
	'grouppage-accountcreator' => '{{ns:project}}:Twórcy kont',
	'grouppage-arbcom' => '{{ns:project}}:Członkowie Komitetu Arbitrażowego',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrolujący automatycznie',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatycznie przeglądający',
	'grouppage-bigexport' => '{{ns:project}}:Masowi eksporterzy',
	'grouppage-confirmed' => '{{ns:project}}:Zatwierdzeni użytkownicy',
	'grouppage-editprotected' => '{{ns:project}}:Edytorzy zabezpieczonych stron',
	'grouppage-filemover' => '{{ns:project}}:Przenoszący pliki',
	'grouppage-flood' => '{{ns:project}}:Użytkownicy o ukrytej aktywności',
	'grouppage-founder' => '{{ns:project}}:Założyciele',
	'grouppage-import' => '{{ns:project}}:Importerzy',
	'grouppage-interface_editors' => '{{ns:project}}:Edytorzy interfejsu',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uprawnieni do logowania się z zablokowanych adresów IP',
	'grouppage-researcher' => '{{ns:project}}:Naukowcy',
	'grouppage-rollbacker' => '{{ns:project}}:Uprawnieni do wycofywania edycji',
	'grouppage-transwiki' => '{{ns:project}}:Importerzy transwiki',
	'grouppage-trusted' => '{{ns:project}}:Zaufani użytkownicy',
	'group-steward' => 'Stewardzi',
	'group-sysadmin' => 'Administratorzy systemu',
	'group-editinterface' => 'Edytorzy interfejsu',
	'group-Global_bot' => 'Boty globalne',
	'group-Global_rollback' => 'Globalnie uprawnieni do wycofywania edycji',
	'group-Global_sysops' => 'Globalni administratorzy',
	'group-Ombudsmen' => 'Rzecznicy praw',
	'group-Staff' => 'Pracownicy',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrator systemu',
	'group-editinterface-member' => 'edytor interfejsu',
	'group-Global_bot-member' => 'bot globalny',
	'group-Global_rollback-member' => 'globalnie uprawniony do wycofywania edycji',
	'group-Global_sysops-member' => 'globalny administrator',
	'group-Ombudsmen-member' => 'rzecznik praw',
	'group-Staff-member' => 'pracownik',
	'grouppage-steward' => 'm:Stewards/pl',
	'group-coder' => 'Programiści',
	'group-coder-member' => 'programista',
	'group-inactive' => 'Użytkownicy nieaktywni',
	'group-inactive-member' => 'użytkownik nieaktywny',
	'grouppage-inactive' => '{{ns:project}}:Użytkownicy nieaktywni',
	'wikimedia-copyright' => 'Tekst udostępniany na <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.pl">licencji Creative Commons: uznanie autorstwa, na tych samych warunkach</a>, z możliwością obowiązywania dodatkowych ograniczeń.
Zobacz szczegółowe informacje o <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">warunkach korzystania</a>.',
	'wikimedia-copyrightwarning' => 'Zapisując zmiany, wyrażasz nieodwołalną zgodę na udostępnianie Twojego wkładu na licencji [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons: Uznanie autorstwa – Na tych samych warunkach – wersja 3.0] oraz na licencji [http://www.gnu.org/copyleft/fdl.html GFDL]. Wyrażasz zgodę na wykorzystanie Twojego wkładu w dowolnej formie pod warunkiem podania przynajmniej hiperłącza lub adresu URL do strony, na której powstała treść. Zobacz szczegółowe informacje o [http://wikimediafoundation.org/wiki/Terms_of_Use warunkach korzystania].',
	'wikimedia-editpage-tos-summary' => 'Jeśli nie chcesz, aby Twój tekst mógł być dowolnie zmieniany przez każdego oraz rozpowszechniany bez ograniczeń, nie umieszczaj go tutaj. Jeśli tekst nie został napisany przez Ciebie samodzielnie, musi on być dostępny na zasadach zgodnych z [http://wikimediafoundation.org/wiki/Terms_of_Use warunkami wykorzystania] oraz musisz zgodzić się na wszystkie istotne wymogi licencyjne.',
);

/** Piedmontese (Piemontèis)
 * @author Borichèt
 * @author Bèrto 'd Sèra
 * @author Dragonòt
 */
$messages['pms'] = array(
	'wikimediamessages-desc' => 'Mëssagi specìfich ëd Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/pms',
	'sitesupport' => 'Oferte',
	'tooltip-n-sitesupport' => 'Giutene',
	'specialpages-group-contribution' => 'Contribussion/Racòlta ëd fond',
	'group-abusefilter' => 'Modificator dij filtragi anti-abus',
	'group-accountcreator' => 'Creator ëd cont',
	'group-arbcom' => "Mèmber dël comità d'arbitragi",
	'group-autopatrolled' => 'Patoje automàtiche',
	'group-autoreviewer' => 'Riletor automàtich',
	'group-bigexport' => 'Grand esportator',
	'group-confirmed' => 'Utent confermà',
	'group-editprotected' => 'Editor ëd pàgine protegiùe',
	'group-filemover' => "Tramudador d'archivi",
	'group-flood' => "Utent ch'a deuvro dij trigomiro",
	'group-founder' => 'Fondador',
	'group-import' => 'Amportator',
	'group-interface_editors' => "Modificator ëd l'antërfassa",
	'group-ipblock-exempt' => "Esension ëd blocagi d'IP",
	'group-patroller' => 'Gent ëd patoja',
	'group-researcher' => 'Arsercador',
	'group-rollbacker' => 'Ripristinator',
	'group-transwiki' => 'Amportator transwiki',
	'group-trusted' => 'Utent sicur',
	'group-abusefilter-member' => 'Modificator ëd filtragi anti-abus',
	'group-accountcreator-member' => 'Creator ëd cont',
	'group-arbcom-member' => "mèmber dël comità d'arbitragi",
	'group-autopatrolled-member' => 'Patojador automàtich',
	'group-autoreviewer-member' => 'Riletor automàtich',
	'group-bigexport-member' => 'Grand esportator',
	'group-confirmed-member' => 'Utent confermà',
	'group-editprotected-member' => 'editor ëd pàgine protegiùe',
	'group-filemover-member' => "tramudador d'archivi",
	'group-flood-member' => "Utent ch'a deuvro dij trigomiro",
	'group-founder-member' => 'Fondador',
	'group-import-member' => 'Amportator',
	'group-interface_editors-member' => "modificator ëd l'antërfassa",
	'group-ipblock-exempt-member' => "Esentà dai blocagi d'IP",
	'group-patroller-member' => 'ëd patoja',
	'group-researcher-member' => 'arsercador',
	'group-rollbacker-member' => 'Ripristinator',
	'group-transwiki-member' => 'Amportator transwiki',
	'group-trusted-member' => 'utent sicur',
	'grouppage-abusefilter' => '{{ns:project}}:Modificator dij filtragi anti-abus',
	'grouppage-accountcreator' => '{{ns:project}}:Creator ëd cont',
	'grouppage-arbcom' => "{{ns:project}}:Mèmber dël comità d'arbitragi",
	'grouppage-autopatrolled' => '{{ns:project}}:Patojador automàtich',
	'grouppage-autoreviewer' => '{{ns:project}}:Riletor automàtich',
	'grouppage-bigexport' => '{{ns:project}}:Grand esportator',
	'grouppage-confirmed' => '{{ns:project}}:Utent confermà',
	'grouppage-editprotected' => '{{ns:project}}:Editor ëd pàgine protegiùe',
	'grouppage-filemover' => "{{ns:project}}:Tramudador d'archivi",
	'grouppage-flood' => "{{ns:project}}:Utent ch'a deuvro dij trigomiro",
	'grouppage-founder' => '{{ns:project}}:Fondador',
	'grouppage-import' => '{{ns:project}}:Amportator',
	'grouppage-interface_editors' => "{{ns:project}}:Modificator ëd l'antërfassa",
	'grouppage-ipblock-exempt' => "{{ns:project}}:Esension dai blocagi d'IP",
	'grouppage-researcher' => '{{ns:project}}:Arsercador',
	'grouppage-rollbacker' => '{{ns:project}}:Ripristinator',
	'grouppage-transwiki' => '{{ns:project}}:Amportator transwiki',
	'grouppage-trusted' => '{{ns:project}}:Utent sicur',
	'group-steward' => 'Vigilant',
	'group-sysadmin' => 'Aministrator ëd sistema',
	'group-editinterface' => "Modificator dl'antërfassa",
	'group-Global_bot' => 'Trigomiro globaj',
	'group-Global_rollback' => 'Ripristinator globaj',
	'group-Global_sysops' => 'Aministrator globaj',
	'group-Ombudsmen' => 'Mediator',
	'group-Staff' => 'Përsonal',
	'group-steward-member' => 'Vigilant',
	'group-sysadmin-member' => 'Aministrator ëd sistema',
	'group-editinterface-member' => "Modificator dl'antërfassa",
	'group-Global_bot-member' => 'Trigomiro global',
	'group-Global_rollback-member' => 'Ripristinator global',
	'group-Global_sysops-member' => 'aministrator global',
	'group-Ombudsmen-member' => 'Mediator',
	'group-Staff-member' => 'mèmber dël përsonal',
	'group-coder' => 'Codificator',
	'group-coder-member' => 'codificator',
	'group-inactive' => 'Utent inativ',
	'group-inactive-member' => 'utent inativ',
	'grouppage-inactive' => '{{ns:project}}:Utent inativ',
	'wikimedia-copyright' => 'Ël test a l\'é disponìbil sota la <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
as peulo giontesse condission adissionaj.
Varda <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> për ij detaj.',
	'wikimedia-copyrightwarning' => "An salvand, it ses d'acòrdi ëd lassé irevocabilment toa contribussion sota la [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] e la [http://www.gnu.org/copyleft/fdl.html GFDL].
It ses d'acòrdi d'esse credità dai riutilisador, almanch, con n'anliura o n'URL a la pàgina dont it l'has contribuì.
Varda ij [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] për ij detaj.",
	'wikimedia-editpage-tos-summary' => "S'it veule pa che tò scrit a sia modificà e redistribuì a volontà, alora butlo pa sì. S'it l'has pa scrivulo da sol, a deuv esse disponìbil sota condission consistente con ij [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use], e it ses d'acòrdi con tùit ij requisì aplicàbij dla licensa.",
);

/** Pontic (Ποντιακά)
 * @author Sinopeus
 */
$messages['pnt'] = array(
	'sitesupport' => 'Δωρεάς',
	'tooltip-n-sitesupport' => 'Βοηθέστεν το έργον.',
	'group-sysadmin' => 'Διαχειριστάδες συστηματί',
	'group-sysadmin-member' => 'διαχειριστάς συστηματί',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'wikimediamessages-desc' => 'د ويکيمېډيا ځانګړي پيغامونه',
	'sitesupport' => 'بسپنې',
	'tooltip-n-sitesupport' => 'زموږ ملاتړ وکړی',
	'group-accountcreator' => 'کارن-حساب جوړونکي',
	'group-founder' => 'بنسټګران',
	'group-accountcreator-member' => 'کارن-حساب جوړونکی',
	'group-founder-member' => 'بنسټګر',
	'grouppage-accountcreator' => '{{ns:project}}:کارن-حساب جوړونکي',
	'group-sysadmin' => 'د غونډال پازوالان',
	'group-Staff' => 'امله',
	'group-sysadmin-member' => 'د غونډال پازوال',
	'group-Global_sysops-member' => 'نړېوال پازوال',
	'group-Staff-member' => 'د املې غړی',
	'group-inactive' => 'ناچارنده کارنان',
	'group-inactive-member' => 'ناچارنده کارن',
	'wikimedia-editpage-tos-summary' => 'که چېرته تاسې نه غواړۍ چې ستاسې په ليکنو کې خپلسري بدلون، سمون او بياخپرونه وشي، نو دلته يې مه خپروۍ. که چېرته تاسې دا متن پخپله نه وي ليکلی، نو پکار ده چې ستاسې دا مېنځپانګه [http://wikimediafoundation.org/wiki/Terms_of_Use د کارولو دريځ] سره سمه وي او تاسې هم د اړونده لايسنس غوښتنې منلې وي.',
);

/** Portuguese (Português)
 * @author 555
 * @author Capmo
 * @author Crazymadlover
 * @author David0811
 * @author Giro720
 * @author Hamilton Abreu
 * @author Heldergeovane
 * @author Lijealso
 * @author Malafaya
 * @author Sir Lestaty de Lioncourt
 */
$messages['pt'] = array(
	'wikimediamessages-desc' => 'Mensagens específicas da Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/pt',
	'sitesupport' => 'Donativos',
	'tooltip-n-sitesupport' => 'Ajude-nos',
	'specialpages-group-contribution' => 'Contribuições/Angariação de fundos',
	'group-abusefilter' => 'Editores de filtros de abuso',
	'group-accountcreator' => 'Criadores de contas',
	'group-arbcom' => 'Membros da comissão de arbitragem',
	'group-autopatrolled' => 'Autopatrulhadores',
	'group-autoreviewer' => 'Auto-revisores',
	'group-bigexport' => 'Grandes exportadores',
	'group-confirmed' => 'Utilizadores confirmados',
	'group-editprotected' => 'Editores de páginas protegidas',
	'group-filemover' => 'Deslocadores de ficheiros',
	'group-flood' => 'Utilizadores robô',
	'group-founder' => 'Fundadores',
	'group-import' => 'Importadores',
	'group-interface_editors' => 'Editores da interface',
	'group-ipblock-exempt' => 'Isenções de bloqueio IP',
	'group-patroller' => 'Patrulhadores',
	'group-researcher' => 'Investigadores',
	'group-rollbacker' => 'Reversores',
	'group-transwiki' => 'Importadores Transwiki',
	'group-trusted' => 'Utilizadores de confiança',
	'group-abusefilter-member' => 'editor de filtros de abuso',
	'group-accountcreator-member' => 'criador de contas',
	'group-arbcom-member' => 'membro da comissão de arbitragem',
	'group-autopatrolled-member' => 'autopatrulhador',
	'group-autoreviewer-member' => 'auto-revisor',
	'group-bigexport-member' => 'grande exportador',
	'group-confirmed-member' => 'utilizador confirmado',
	'group-editprotected-member' => 'editor de páginas protegidas',
	'group-filemover-member' => 'deslocador de ficheiros',
	'group-flood-member' => 'utilizador robô',
	'group-founder-member' => 'fundador',
	'group-import-member' => 'importador',
	'group-interface_editors-member' => 'editor da interface',
	'group-ipblock-exempt-member' => 'isento de bloqueio IP',
	'group-patroller-member' => 'patrulhador',
	'group-researcher-member' => 'investigador',
	'group-rollbacker-member' => 'reversor',
	'group-transwiki-member' => 'importador transwiki',
	'group-trusted-member' => 'utilizador de confiança',
	'grouppage-abusefilter' => '{{ns:project}}:Editores de filtros de abuso',
	'grouppage-accountcreator' => '{{ns:project}}:Criadores de contas',
	'grouppage-arbcom' => '{{ns:project}}:Membros da comissão de arbitragem',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrulhadores',
	'grouppage-autoreviewer' => '{{ns:project}}:Auto-revisores',
	'grouppage-bigexport' => '{{ns:project}}:Grandes exportadores',
	'grouppage-confirmed' => '{{ns:project}}:Utilizadores confirmados',
	'grouppage-editprotected' => '{{ns:project}}:Editores de páginas protegidas',
	'grouppage-filemover' => '{{ns:project}}:Deslocadores de ficheiros',
	'grouppage-flood' => '{{ns:project}}:Utilizadores robô',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'grouppage-interface_editors' => '{{ns:project}}:Editores da interface',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Isenção de bloqueio IP',
	'grouppage-researcher' => '{{ns:project}}:Investigador',
	'grouppage-rollbacker' => '{{ns:project}}:Reversores',
	'grouppage-transwiki' => '{{ns:project}}:Importadores transwiki',
	'grouppage-trusted' => '{{ns:project}}:Utilizadores de confiança',
	'group-steward' => 'Assistentes',
	'group-sysadmin' => 'Administradores de sistema',
	'group-editinterface' => 'Editores de interface',
	'group-Global_bot' => 'Robôs globais',
	'group-Global_rollback' => 'Reversores globais',
	'group-Global_sysops' => 'Administradores globais',
	'group-Ombudsmen' => 'Mediadores',
	'group-Staff' => 'Pessoal',
	'group-steward-member' => 'assistente',
	'group-sysadmin-member' => 'administrador de sistema',
	'group-editinterface-member' => 'editor de interface',
	'group-Global_bot-member' => 'robô global',
	'group-Global_rollback-member' => 'reversor global',
	'group-Global_sysops-member' => 'Administrador global',
	'group-Ombudsmen-member' => 'mediador',
	'group-Staff-member' => 'membro do pessoal',
	'grouppage-steward' => 'm:Stewards/pt',
	'group-coder' => 'Programadores',
	'group-coder-member' => 'programador',
	'group-inactive' => 'Utilizadores inactivos',
	'group-inactive-member' => 'utilizador inactivo',
	'grouppage-inactive' => '{{ns:project}}:Utilizadores inactivos',
	'wikimedia-copyright' => 'Este texto é disponibilizado nos termos da licença <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
pode estar sujeito a condições adicionais.
Consulte as <a href="http://wikimediafoundation.org/wiki/Condições_de_Uso">Condições de Uso</a> para mais detalhes.',
	'wikimedia-copyrightwarning' => 'Ao gravar a página, concorda em publicar irrevogavelmente as suas contribuições nos termos das licenças [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] e [http://www.gnu.org/copyleft/fdl.html GFDL].
Concorda também que lhe seja atribuída a respectiva autoria por utilizadores da obra, no mínimo, na forma de um link ou URL para a página em que está a contribuir. Consulte as [http://wikimediafoundation.org/wiki/Condições_de_Uso Condições de Uso] para mais detalhes.',
	'wikimedia-editpage-tos-summary' => 'Se não quiser que o seu texto seja editado e redistribuído, por favor, não o submeta aqui.
Se não é o autor do texto, o mesmo deverá ter sido publicado segundo termos consistentes com as [http://wikimediafoundation.org/wiki/Condições_de_Uso Condições de Uso] e concorda em seguir quaisquer condições de licenciamento relevantes.',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author 555
 * @author BrunaaAa
 * @author Capmo
 * @author Carla404
 * @author Eduardo.mps
 * @author Everton137
 * @author Giro720
 * @author Heldergeovane
 * @author Luckas Blade
 * @author Sir Lestaty de Lioncourt
 */
$messages['pt-br'] = array(
	'wikimediamessages-desc' => 'Mensagens específicas da Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/pt',
	'sitesupport' => 'Doações',
	'tooltip-n-sitesupport' => 'Ajude-nos',
	'specialpages-group-contribution' => 'Contribuições/Angariação de fundos',
	'group-abusefilter' => 'Editores de filtros de abuso',
	'group-accountcreator' => 'Criadores de contas',
	'group-arbcom' => 'Membros do comitê de arbitragrem',
	'group-autopatrolled' => 'Auto-patrulhadores',
	'group-autoreviewer' => 'Autorrevisores',
	'group-bigexport' => 'Grandes exportadores',
	'group-confirmed' => 'Usuários confirmados',
	'group-editprotected' => 'Editores de página protegidos',
	'group-filemover' => 'Deslocadores de ficheiros',
	'group-flood' => 'Usuários bot',
	'group-founder' => 'Fundadores',
	'group-import' => 'Importadores',
	'group-interface_editors' => 'Editores de interface',
	'group-ipblock-exempt' => 'IPs não bloqueados',
	'group-patroller' => 'Patrulhadores',
	'group-researcher' => 'Pesquisadores',
	'group-rollbacker' => 'Reversores',
	'group-transwiki' => 'Importadores Transwiki',
	'group-trusted' => 'Usuários confiáveis',
	'group-abusefilter-member' => 'editores de filtros de abuso',
	'group-accountcreator-member' => 'Criador de contas',
	'group-arbcom-member' => 'membro do comitê de arbitragem',
	'group-autopatrolled-member' => 'auto-patrulhador',
	'group-autoreviewer-member' => 'autorrevisor',
	'group-bigexport-member' => 'grande exportador',
	'group-confirmed-member' => 'Usuário confirmado',
	'group-editprotected-member' => 'editor de página protegido',
	'group-filemover-member' => 'deslocador de ficheiros',
	'group-flood-member' => 'usuário bot',
	'group-founder-member' => 'Fundador',
	'group-import-member' => 'Importador',
	'group-interface_editors-member' => 'editor de interface',
	'group-ipblock-exempt-member' => 'IP não bloqueado',
	'group-patroller-member' => 'Patrulhador',
	'group-researcher-member' => 'pesquisador',
	'group-rollbacker-member' => 'reversor',
	'group-transwiki-member' => 'importador transwiki',
	'group-trusted-member' => 'usuário confiável',
	'grouppage-abusefilter' => '{{ns:project}}:Editores de filtros de abuso',
	'grouppage-accountcreator' => '{{ns:project}}:Criadores de contas',
	'grouppage-arbcom' => '{{ns:project}}: Membros do comitê de arbitragem',
	'grouppage-autopatrolled' => '{{ns:project}}:Auto-patrulhadores',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorrevisores',
	'grouppage-bigexport' => '{{ns:project}}:Grandes exportadores',
	'grouppage-confirmed' => '{{ns:project}}:Usuários confirmados',
	'grouppage-editprotected' => '{{ns:project}}: Editor de páginas protegidas',
	'grouppage-filemover' => '{{ns:project}}:Deslocadores de ficheiros',
	'grouppage-flood' => '{{ns:project}}: Usuários bot',
	'grouppage-founder' => '{{ns:project}}:Fundadores',
	'grouppage-import' => '{{ns:project}}:Importadores',
	'grouppage-interface_editors' => '{{ns:project}}: Editores de interface',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP não bloqueado',
	'grouppage-researcher' => '{{ns:project}}:Pesquisador',
	'grouppage-rollbacker' => '{{ns:project}}:Revertedores',
	'grouppage-transwiki' => '{{ns:project}}:Importadores transwiki',
	'grouppage-trusted' => '{{ns:project}}:Usuários confiáveis',
	'group-steward' => 'Stewards',
	'group-sysadmin' => 'Administradores de sistema',
	'group-editinterface' => 'Editores de interface',
	'group-Global_bot' => 'Robôs globais',
	'group-Global_rollback' => 'Reversores globais',
	'group-Global_sysops' => 'Administradores globais',
	'group-Ombudsmen' => 'Mediadores',
	'group-Staff' => 'Equipe',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'administrador de sistema',
	'group-editinterface-member' => 'editor de interface',
	'group-Global_bot-member' => 'robô global',
	'group-Global_rollback-member' => 'revertedor global',
	'group-Global_sysops-member' => 'administrador global',
	'group-Ombudsmen-member' => 'mediador',
	'group-Staff-member' => 'membro da equipe',
	'group-coder' => 'Codificadores',
	'group-coder-member' => 'codificador',
	'group-inactive' => 'Utilizadores inativos',
	'group-inactive-member' => 'Utilizador inativo',
	'grouppage-inactive' => '{{ns:project}}:Utilizadores inativos',
	'wikimedia-copyright' => 'O texto está disponível sob a licença <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;
condições adicionais podem-se aplicar.
Veja <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Condições de Uso</a> para detalhes.',
	'wikimedia-copyrightwarning' => 'Ao salvar, você concorda irrevogavelmente a liberar as suas contribuições sob as licenças [http://creativecommons.org/licenses/by-sa/3.0/deed.pt Creative Commons Atribuição-Compartilhamento pela mesma Licença 3.0 Unported] e [http://www.gnu.org/copyleft/fdl.html GFDL]. Você concorda em ser creditado por reutilizadores, no mínimo, através de uma hiperligação ou URL para a página na qual está contribuindo. Veja [http://wikimediafoundation.org/wiki/Terms_of_Use Condições de Uso] para detalhes.',
	'wikimedia-editpage-tos-summary' => 'Se você não quer que a sua escrita seja editada e redistribuída, por favor, não a submeta aqui. Se você não escreveu este conteúdo, ele deverá estar disponível segundo condições consistentes com as [http://wikimediafoundation.org/wiki/Terms_of_Use Condições de Uso] e você concorda em seguir quaisquer requerimentos de licenciamento relevantes.',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'wikimediamessages-desc' => 'Wikimedia sapaq willaykuna',
	'sitesupport' => 'Qarana',
	'tooltip-n-sitesupport' => 'Yanapawayku',
	'group-abusefilter' => "Millay ruray suysuna llamk'apuqkuna",
	'group-accountcreator' => 'Rakiquna kamariqkuna',
	'group-autoreviewer' => 'Kikin llanchiqkuna',
	'group-bigexport' => 'Hatun hawaman quqkuna',
	'group-confirmed' => 'Rakiqunayuq ruraqkuna',
	'group-founder' => 'Kamariqkuna',
	'group-import' => 'Hawamanta chaskiqkuna',
	'group-ipblock-exempt' => "IP hark'aymanta qispisqakuna",
	'group-rollbacker' => 'Kutichiqkuna',
	'group-transwiki' => 'Wikipura hawamanta chaskiqkuna',
	'group-abusefilter-member' => "millay ruray suysuna llamk'apuq",
	'group-accountcreator-member' => 'rakiquna kamariq',
	'group-autopatrolled-member' => 'kikinmanta patrullaq',
	'group-autoreviewer-member' => 'kikin llanchiq',
	'group-bigexport-member' => 'hatun hawaman quq',
	'group-confirmed-member' => 'rakiqunayuq ruraq',
	'group-founder-member' => 'kamariq',
	'group-import-member' => 'hawamanta chaskiq',
	'group-ipblock-exempt-member' => "IP hark'aymanta qispisqa",
	'group-rollbacker-member' => 'kutichiq',
	'group-transwiki-member' => 'wikipura hawamanta chaskiq',
	'grouppage-abusefilter' => "{{ns:project}}:Millay ruray suysuna llamk'apuqkuna",
	'grouppage-accountcreator' => '{{ns:project}}:Rakiquna kamariqkuna',
	'grouppage-autopatrolled' => '{{ns:project}}:Kikinmanta patrullaqkuna',
	'grouppage-autoreviewer' => '{{ns:project}}:Kikin llanchiqkuna',
	'grouppage-bigexport' => '{{ns:project}}:Hatun hawaman quqkuna',
	'grouppage-confirmed' => '{{ns:project}}:Rakiqunayuq ruraqkuna',
	'grouppage-founder' => '{{ns:project}}:Kamariqkuna',
	'grouppage-import' => '{{ns:project}}:Hawamanta chaskiqkuna',
	'grouppage-ipblock-exempt' => "{{ns:project}}:IP hark'aymanta qispisqakuna",
	'grouppage-rollbacker' => '{{ns:project}}:Kutichiqkuna',
	'grouppage-transwiki' => '{{ns:project}}:Wikipura hawamanta chaskiqkuna',
	'group-steward' => 'Steward nisqakuna',
	'group-sysadmin' => 'Llika kamachiqkuna',
	'group-editinterface' => "Uyapurata llamk'apuy",
	'group-Global_bot' => 'Sapsi rurana antachakuna',
	'group-Global_rollback' => 'Sapsi kutichiqkuna',
	'group-Ombudsmen' => 'Ayllu amachaqkuna',
	'group-Staff' => "Llamk'aqninkuna",
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'llika kamachiq',
	'group-editinterface-member' => "uyapurata llamk'apuy",
	'group-Global_bot-member' => 'sapsi rurana antacha',
	'group-Global_rollback-member' => 'sapsi kutichiq',
	'group-Ombudsmen-member' => 'ayllu amachaq',
	'group-Staff-member' => "llamk'aqninkuna",
	'group-coder' => 'Wakichi qillqaqkuna',
	'group-coder-member' => 'wakichi qillqaq',
	'group-inactive' => 'Puñuchkaq ruraqkuna',
	'group-inactive-member' => 'puñuchkaq ruraq',
	'grouppage-inactive' => '{{ns:project}}:Puñuchkaq ruraqkuna',
	'wikimedia-copyright' => 'Kay qillqataqa <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a> nisqapi ch\'uyanchasqa saqillaykamam chaskinki;
yapasqa phatakunachá kanqaku.
<a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Llamk\'apuypaq phatakuna</a> p\'anqapi qhaway astawan willasunaykipaq.',
	'wikimedia-copyrightwarning' => "Kay qillqata waqaychaspaykiqa, llamk'asqaykikunata mana kutinalla [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] nisqa saqillayman, [http://www.gnu.org/copyleft/fdl.html GFDL] nisqa saqillaymanpas saqimpunki.
Arí ninki musuq llamk'apuqkunap qillqasqaykimanta willaspan mast'arinanman, llikapi tiyaypura llamk'apusqayki p'anqaman t'inkimuqwan, chaytaq lliwmanta aswan pisi.
[http://wikimediafoundation.org/wiki/Terms_of_Use Llamk'apuypaq phatakuna] p'anqapi astawan willasunaykipaq qhaway.",
	'wikimedia-editpage-tos-summary' => "Llamk'asqaykikunata huk runakunap allinchayninta qispilla mast'ariyninta mana munaspaykiqa, ama kayman qillqamuychu.
Qamtaq kayta mana qillqarqaptiykiqa, kay qillqa [http://wikimediafoundation.org/wiki/Terms_of_Use llamk'apuypaq phatakuna] nisqapi ch'uyanchasqakama saqillasqa kananmi, qampataq chaypi ima saqillana phata kaqkunaman arí ninaykim.",
);

/** Tarifit (Tarifit)
 * @author Agzennay
 */
$messages['rif'] = array(
	'tooltip-n-sitesupport' => 'Ɛawn-anɣ',
);

/** Romansh (Rumantsch)
 * @author Gion-andri
 */
$messages['rm'] = array(
	'sitesupport' => 'Donaziuns',
	'tooltip-n-sitesupport' => 'Ans sustegna',
);

/** Romani (Romani)
 * @author Desiphral
 * @author לערי ריינהארט
 */
$messages['rmy'] = array(
	'sitesupport' => 'Denimata',
	'group-steward' => 'Stewardurya',
	'group-steward-member' => 'Stewardo',
	'grouppage-steward' => '{{ns:project}}:Stewardurya',
);

/** Romanian (Română)
 * @author Emily
 * @author Firilacroco
 * @author KlaudiuMihaila
 * @author Laurap
 * @author Mihai
 * @author Misterr
 */
$messages['ro'] = array(
	'wikimediamessages-desc' => 'Mesaje specifice Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/ro?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'Donații',
	'tooltip-n-sitesupport' => 'Sprijină-ne',
	'group-abusefilter' => 'Editori filtru abuz',
	'group-accountcreator' => 'Creatori de conturi',
	'group-arbcom' => 'Membrii comitetului de arbitraj',
	'group-autopatrolled' => 'Patrule automate',
	'group-autoreviewer' => 'Autorecenzori',
	'group-bigexport' => 'Exportatori mari',
	'group-confirmed' => 'Utilizatori confirmați',
	'group-flood' => 'Utilizatori robot',
	'group-founder' => 'Fondatori',
	'group-import' => 'Importatori',
	'group-ipblock-exempt' => 'Excepție blocare IP',
	'group-patroller' => 'Patrule',
	'group-rollbacker' => 'Revocatori',
	'group-transwiki' => 'Importatori între wiki',
	'group-trusted' => 'Utilizatori de încredere',
	'group-abusefilter-member' => 'editor filtru abuz',
	'group-accountcreator-member' => 'creator de conturi',
	'group-autopatrolled-member' => 'patrulă automată',
	'group-autoreviewer-member' => 'autorecenzor',
	'group-bigexport-member' => 'mare exportator',
	'group-confirmed-member' => 'utilizator confirmat',
	'group-flood-member' => 'utilizatori robot',
	'group-founder-member' => 'Fondator',
	'group-import-member' => 'importator',
	'group-ipblock-exempt-member' => 'excepție blocare IP',
	'group-patroller-member' => 'patrulă',
	'group-rollbacker-member' => 'revocator',
	'group-transwiki-member' => 'importator între wiki',
	'group-trusted-member' => 'utilizatori de încredere',
	'grouppage-abusefilter' => '{{ns:project}}:Editori ai filtrului abuz',
	'grouppage-accountcreator' => '{{ns:project}}:Creatori de conturi',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrulatori automați',
	'grouppage-autoreviewer' => '{{ns:project}}:Autorecenzori',
	'grouppage-bigexport' => '{{ns:project}}:Mari exportatori',
	'grouppage-confirmed' => '{{ns:project}}:Utilizatori confirmați',
	'grouppage-flood' => '{{ns:project}}:Utilizatori robot',
	'grouppage-founder' => '{{ns:project}}:Fondatori',
	'grouppage-import' => '{{ns:project}}:Importatori',
	'grouppage-ipblock-exempt' => '{{ns:project}}:exceptare blocare IP',
	'grouppage-rollbacker' => '{{ns:project}}:Revocatori',
	'grouppage-transwiki' => '{{ns:project}}:Importatori între wiki',
	'grouppage-trusted' => '{{ns:project}}: Utilizatori de încredere',
	'group-steward' => 'Stewarzi',
	'group-sysadmin' => 'Administratori de sistem',
	'group-editinterface' => 'Editori de interfață',
	'group-Global_bot' => 'Roboți globali',
	'group-Global_rollback' => 'Revocatori globali',
	'group-Global_sysops' => 'Administratori globali',
	'group-Ombudsmen' => 'Mijlocitor independent',
	'group-Staff' => 'Angajați',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'administrator de sistem',
	'group-editinterface-member' => 'editori de interfață',
	'group-Global_bot-member' => 'Bot global',
	'group-Global_rollback-member' => 'revocator global',
	'group-Global_sysops-member' => 'Administrator global',
	'group-Ombudsmen-member' => 'mijlocitor independent',
	'group-Staff-member' => 'angajat',
	'group-coder' => 'Codificatori',
	'group-coder-member' => 'codificator',
	'group-inactive' => 'Utilizatori inactivi',
	'group-inactive-member' => 'utilizator inactiv',
	'grouppage-inactive' => '{{ns:project}}:Utilizatori inactivi',
	'wikimedia-copyright' => 'Acest text este disponibil sub licența <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Atribuire-Distribuire în condiții identice</a>;
termeni suplimentari se pot aplica.
Vedeți <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Termenii de utilizare</a> pentru detalii.',
	'wikimedia-copyrightwarning' => 'Salvând, sunteți de acord să eliberați irevocabil contribuția dumneavoastră sub licențele [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Atribuire-Distribuire în condiții identice 3.0] și [http://www.gnu.org/copyleft/fdl.html GFDL].
Sunteți de acord să fiți creditat de către reutilizator, cel puțin, printr-o hiperlegătură sau URL către pagina la care contribuiți.
Vedeți [http://wikimediafoundation.org/wiki/Terms_of_Use Termenii de utilizare] pentru detalii.',
	'wikimedia-editpage-tos-summary' => 'Dacă nu doriți ca textul dumneavoastră să fie modificat și redistribuit, atunci nu îl trimiteți aici.
Dacă nu l-ați scris dumneavoastră, acesta trebuie să fie disponibil în concordanță cu [http://wikimediafoundation.org/wiki/Terms_of_Use termenii de utilizare], și sunteți de acord să urmați orice altă cerință de licențiere.',
);

/** Aromanian (Armãneashce)
 * @author Hakka
 */
$messages['roa-rup'] = array(
	'sitesupport' => 'Donatsiur',
);

/** Tarandíne (Tarandíne)
 * @author Joetaras
 */
$messages['roa-tara'] = array(
	'wikimediamessages-desc' => 'Wikimedia specific messages',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/en?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'Done',
	'tooltip-n-sitesupport' => 'Aiutene',
	'group-abusefilter' => "Cangiatore de le filtre d'abbuse",
	'group-accountcreator' => 'Ccrejature de cunde utinde',
	'group-arbcom' => "Membre d'u collegge arbitrale",
	'group-autopatrolled' => 'Auto condrollore',
	'group-autoreviewer' => 'Auto revisitature',
	'group-bigexport' => 'Gruèsse esportature',
	'group-confirmed' => 'Utinde confirmatarije',
	'group-flood' => 'Utinde Bot',
	'group-founder' => 'Fondature',
	'group-import' => "'Mbortature",
	'group-interface_editors' => 'Cangiature de inderfacce',
	'group-ipblock-exempt' => "IP escluse da 'u blocche",
	'group-patroller' => 'Condrollore',
	'group-rollbacker' => 'Annullature',
	'group-transwiki' => "'Mbortature 'mbrà Uicchi",
	'group-trusted' => 'Utinde fidate',
	'group-abusefilter-member' => 'cangiatore de filtre de abbuse',
	'group-accountcreator-member' => 'ccreatore de cunde utende',
	'group-arbcom-member' => "membre d'u collegge arbitrale",
	'group-autopatrolled-member' => 'auto condrollore',
	'group-autoreviewer-member' => 'auto revisitatore',
	'group-bigexport-member' => 'granne esportatore',
	'group-confirmed-member' => 'utende confirmatarije',
	'group-flood-member' => 'utende bot',
	'group-founder-member' => 'fondatore',
	'group-import-member' => "'mbortatore",
	'group-interface_editors-member' => 'Cangiatore de inderfacce',
	'group-ipblock-exempt-member' => 'IP senza blocche',
	'group-patroller-member' => 'condrollore',
	'group-rollbacker-member' => 'annullatore',
	'group-transwiki-member' => 'Importatore de transuicchi',
	'group-trusted-member' => 'utende fidate',
	'grouppage-abusefilter' => '{{ns:project}}:Cangiature de filtre de abbuse',
	'grouppage-accountcreator' => '{{ns:project}}:Ccrejature de cunde utinde',
	'grouppage-arbcom' => "{{ns:project}}:Membre d'u collegge arbitrale",
	'grouppage-autopatrolled' => '{{ns:project}}:Auto condrollore',
	'grouppage-autoreviewer' => '{{ns:project}}:Auto revisitature',
	'grouppage-bigexport' => '{{ns:project}}:Gruèsse esportature',
	'grouppage-confirmed' => '{{ns:project}}:Utinde confirmatarije',
	'grouppage-flood' => '{{ns:project}}:Utinde Bot',
	'grouppage-founder' => '{{ns:project}}:Fondature',
	'grouppage-import' => "{{ns:project}}:'Mbortature",
	'grouppage-interface_editors' => "{{ns:project}}:Cangiature de l'inderfacce",
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP senza blocche',
	'grouppage-rollbacker' => '{{ns:project}}:Annullature',
	'grouppage-transwiki' => "{{ns:project}}:'Mbortature de TransUicchi",
	'grouppage-trusted' => '{{ns:project}}:Utinde fidate',
	'group-steward' => 'Steward',
	'group-sysadmin' => "Amministrature d'u sisteme",
	'group-editinterface' => 'Cangiature de inderfacce',
	'group-Global_bot' => 'Bot globale',
	'group-Global_rollback' => 'Annullature globale',
	'group-Ombudsmen' => 'Mediature',
	'group-Staff' => "'U personale",
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'amministratore de sisteme',
	'group-editinterface-member' => 'Cangiatore de inderfacce',
	'group-Global_bot-member' => 'bot globale',
	'group-Global_rollback-member' => 'annullatore globale',
	'group-Ombudsmen-member' => 'mediatore',
	'group-Staff-member' => "cristiàne d'u personele",
	'group-coder' => 'Codificature',
	'group-coder-member' => 'codificatore',
	'group-inactive' => 'Utinde inattive',
	'group-inactive-member' => 'utende inattive',
	'grouppage-inactive' => '{{ns:project}}:Utinde inattive',
	'wikimedia-copyright' => "'U teste ète disponibbile sotte 'a <a href=\"http://creativecommons.org/licenses/by-sa/3.0/\"> licenze ''Creative Commons Attribution/Condivide a 'u stesse mode</a>;
termine addizionale pò essere applicate.
Vide <a href=\"http://wikimediafoundation.org/wiki/Terms_of_Use\">Termine de Utilizze</a> pe cchiù 'mbormaziune.",
	'wikimedia-copyrightwarning' => "Reggistranne, tu ste accette irrevocabbilmende de relassà 'u condrebbute tue sotte le licenze [http://creativecommons.org/licenses/by-sa/3.0/deed.it Creative Commons Attribbuzzione-Condivide a 'u stesse mode 3.0] e [http://www.gnu.org/copyleft/fdl.html GFDL].
Ste dice pure ca accette ca le utinde ca volene cu ausane le condrebbute tue, mettane almene 'nu collegamende ipertestuale o 'na URL a 'a pàgene addò tu è condrebbuite.
Vide pure [http://wikimediafoundation.org/wiki/Terms_of_Use condizziune d'ause] pe cchiù 'mbormaziune.",
	'wikimedia-editpage-tos-summary' => "Ce non ge vuè ca 'u teste pò essere cangiate o redistribbuite a mundone, allore 'u sè ce stè no 'u sce mettènne aqquà. Ce non ge l'è scritte tu, allore addà essere disponibbile cu condiziune combatibbele cu le [http://wikimediafoundation.org/wiki/Terms_of_Use condiziune d'ause] e accette pure tutte le requisite de licenze.",
);

/** Russian (Русский)
 * @author Ahonc
 * @author Aleksandrit
 * @author AlexSm
 * @author Crazymadlover
 * @author Ferrer
 * @author Flrn
 * @author HalanTul
 * @author Illusion
 * @author Lockal
 * @author Putnik
 * @author Александр Сигачёв
 */
$messages['ru'] = array(
	'wikimediamessages-desc' => 'Сообщения, специфичные для Викимедиа',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Сделать_пожертвование',
	'sitesupport' => 'Пожертвования',
	'tooltip-n-sitesupport' => 'Поддержите нас',
	'specialpages-group-contribution' => 'Пожертвования/Сбор средств',
	'group-abusefilter' => 'Редакторы фильтра злоупотреблений',
	'group-accountcreator' => 'Создатели учётных записей',
	'group-arbcom' => 'Члены арбитражного комитета',
	'group-autopatrolled' => 'Автопатрулируемые',
	'group-autoreviewer' => 'Автодосматриваемые',
	'group-bigexport' => 'Крупные экспортёры',
	'group-confirmed' => 'Подтверждённые участники',
	'group-editprotected' => 'Редакторы защищённой страницы',
	'group-filemover' => 'Переименовывающие файлы',
	'group-flood' => 'Участники-боты',
	'group-founder' => 'Основатели',
	'group-import' => 'Импортирующие',
	'group-interface_editors' => 'Редакторы интерфейса',
	'group-ipblock-exempt' => 'Исключения из IP-блокировок',
	'group-patroller' => 'Патрулирующие',
	'group-researcher' => 'Исследователи',
	'group-rollbacker' => 'Откатывающие',
	'group-transwiki' => 'Межвики-импортирующие',
	'group-trusted' => 'Доверенные участники',
	'group-abusefilter-member' => 'редактор фильтра злоупотреблений',
	'group-accountcreator-member' => 'создатель учётных записей',
	'group-arbcom-member' => 'член арбитражного комитета',
	'group-autopatrolled-member' => 'автопатрулируемый',
	'group-autoreviewer-member' => 'автодосматриваемый',
	'group-bigexport-member' => 'крупный экспортёр',
	'group-confirmed-member' => 'подтверждённый участник',
	'group-editprotected-member' => 'редактор защищённых страниц',
	'group-filemover-member' => 'переименовывающий файлы',
	'group-flood-member' => 'участники-боты',
	'group-founder-member' => 'основатель',
	'group-import-member' => 'импортирующий',
	'group-interface_editors-member' => 'редактор интерфейса',
	'group-ipblock-exempt-member' => 'исключение из IP-блокировок',
	'group-patroller-member' => 'патрулирующий',
	'group-researcher-member' => 'исследователь',
	'group-rollbacker-member' => 'откатывающий',
	'group-transwiki-member' => 'межвики-импортирующий',
	'group-trusted-member' => 'доверенный участник',
	'grouppage-abusefilter' => '{{ns:project}}:Редакторы фильтра злоупотреблений',
	'grouppage-accountcreator' => '{{ns:project}}:Создатели учётных записей',
	'grouppage-arbcom' => '{{ns:project}}:Члены арбитражного комитета',
	'grouppage-autopatrolled' => '{{ns:project}}:Автопатрулируемые',
	'grouppage-autoreviewer' => '{{ns:project}}:Автодосматриваемые',
	'grouppage-bigexport' => '{{ns:project}}:Крупные экспортёры',
	'grouppage-confirmed' => '{{ns:project}}:Подтверждённые участники',
	'grouppage-editprotected' => '{{ns:project}}:Редакторы защищённых страниц',
	'grouppage-filemover' => '{{ns:project}}:Переименовывающие файлы',
	'grouppage-flood' => '{{ns:project}}:Участники-боты',
	'grouppage-founder' => '{{ns:project}}:Основатели',
	'grouppage-import' => '{{ns:project}}:Импортирующие',
	'grouppage-interface_editors' => '{{ns:project}}:Редакторы интерфейса',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Исключение из IP-блокировок',
	'grouppage-researcher' => '{{ns:project}}:Исследователь',
	'grouppage-rollbacker' => '{{ns:project}}:Откатывающие',
	'grouppage-transwiki' => '{{ns:project}}:Межвики-импортирующие',
	'grouppage-trusted' => '{{ns:project}}:Доверенные участники',
	'group-steward' => 'Стюарды',
	'group-sysadmin' => 'Системные администраторы',
	'group-editinterface' => 'Редакторы интерфейса',
	'group-Global_bot' => 'Глобальные боты',
	'group-Global_rollback' => 'Глобальные откатывающие',
	'group-Global_sysops' => 'Глобальные администраторы',
	'group-Ombudsmen' => 'Омбудсмены',
	'group-Staff' => 'Сотрудники',
	'group-steward-member' => 'стюард',
	'group-sysadmin-member' => 'системный администратор',
	'group-editinterface-member' => 'редактор интерфейса',
	'group-Global_bot-member' => 'глобальный бот',
	'group-Global_rollback-member' => 'глобальный откатывающий',
	'group-Global_sysops-member' => 'глобальный администратор',
	'group-Ombudsmen-member' => 'омбудсмен',
	'group-Staff-member' => 'сотрудник',
	'grouppage-steward' => 'm:Stewards/ru',
	'group-coder' => 'Программисты',
	'group-coder-member' => 'программист',
	'group-inactive' => 'Неактивные участники',
	'group-inactive-member' => 'неактивный участник',
	'grouppage-inactive' => '{{ns:project}}:Неактивные участники',
	'shared-repo-name-shared' => 'Викисклада',
	'wikimedia-copyright' => 'Текст доступен на условиях лицензии <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a>, в отдельных случаях могут действовать дополнительные условия. Подробнее см. <a href="http://wikimediafoundation.org/wiki/Terms_of_Use/ru">Условия использования</a>.',
	'wikimedia-copyrightwarning' => 'Сохраняя свои изменения, вы соглашаетесь на их неотзывную публикацию на условиях лицензий [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0] и [http://www.gnu.org/copyleft/fdl.html GFDL]. Вы соглашаетесь, что при использовании страницы, в которую вы вносили изменения, на вас будут ссылаться, как минимум, посредством гиперссылки или URL на соответствующую страницу. Подробнее см. [http://wikimediafoundation.org/wiki/Terms_of_Use/ru Условия использования].',
	'wikimedia-editpage-tos-summary' => 'Если вы не хотите, чтобы ваши тексты свободно редактировались и распространялись любым желающим, не помещайте их сюда.
Если вы не являетесь автором размещаемого текста, то он должен быть доступен на условиях, совместимых с [http://wikimediafoundation.org/wiki/Terms_of_Use/ru Условиями использования], и вы соглашаетесь следовать всем соответствующим требованиям лицензии.',
);

/** Rusyn (русиньскый язык)
 * @author Gazeb
 */
$messages['rue'] = array(
	'tooltip-n-sitesupport' => 'Підпорьте нас',
	'group-autoreviewer' => 'Авторедакторы',
	'group-confirmed' => 'Підтверджены хоснователї',
	'group-flood' => 'Бот-хоснователї',
	'group-import' => 'Імпортеры',
	'group-interface_editors' => 'Редакторы інтерфейсу',
	'group-bigexport-member' => 'велікоекспортер',
	'grouppage-abusefilter' => '{{ns:project}}:Редакторы філтра знеужываня',
	'grouppage-accountcreator' => '{{ns:project}}:Закладателї конт',
	'grouppage-autoreviewer' => '{{ns:project}}:Авторедакторы',
	'grouppage-bigexport' => '{{ns:project}}:Великоекспортеры',
	'grouppage-confirmed' => '{{ns:project}}:Підтверджены хоснователї',
	'grouppage-editprotected' => '{{ns:project}}:Редакторы замкнутых сторінок',
	'grouppage-flood' => '{{ns:project}}:Бот-хоснователї',
	'grouppage-founder' => '{{ns:project}}:Закладателї',
	'grouppage-import' => '{{ns:project}}:Імпортеры',
	'grouppage-interface_editors' => '{{ns:project}}:Редакторы інтерфейсу',
	'grouppage-rollbacker' => '{{ns:project}}:Ревертователї',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-імпортеры',
	'grouppage-trusted' => '{{ns:project}}:Довірны хоснователї',
	'group-steward' => 'Стеварды',
);

/** Megleno-Romanian (Cyrillic) (Vlăheşte (Cyrillic))
 * @author Кумулај Маркус
 * @author Макѕе
 */
$messages['ruq-cyrl'] = array(
	'sitesupport' => 'Донационс',
	'tooltip-n-sitesupport' => 'Супора-ностре',
);

/** Megleno-Romanian (Latin) (Vlăheşte (Latin))
 * @author Кумулај Маркус
 * @author Макѕе
 */
$messages['ruq-latn'] = array(
	'sitesupport' => 'Donacions',
	'tooltip-n-sitesupport' => 'Supora-nostre',
);

/** Yakut (Саха тыла)
 * @author Bert Jickty
 * @author HalanTul
 */
$messages['sah'] = array(
	'wikimediamessages-desc' => 'Викимедиаҕа эрэ сыһыаннаах этиилэр',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Харчынан_көмө',
	'sitesupport' => 'Бу сири өйөө',
	'tooltip-n-sitesupport' => 'Өйөбүл',
	'specialpages-group-contribution' => 'Сиэртибэлээһин/Үп хомуйуу',
	'group-abusefilter' => 'Омсо сиидэтин эрэдээктэрдэрэ',
	'group-accountcreator' => 'Кыттааччылар ааттарын айааччылар/бигэргэтээччилэр',
	'group-autopatrolled' => 'Аптамаатынан ботуруулланааччылар',
	'group-autoreviewer' => 'Аптамаатынан бигэргэтиллэр',
	'group-bigexport' => 'Улахан экспортёрдар',
	'group-confirmed' => 'Бигэргэммит кыттааччылар',
	'group-flood' => 'Робот кыттааччылар',
	'group-founder' => 'Тэрийээччилэр',
	'group-import' => 'Импортааччылар',
	'group-ipblock-exempt' => 'Хааччахтааһыҥҥа киирбэт IP-лаахтар',
	'group-patroller' => 'Ботурууллар',
	'group-rollbacker' => 'Төннөрөөччүлэр',
	'group-transwiki' => 'Transwiki`ттан импортааччылар',
	'group-trusted' => 'Итэҕэллээх кыттааччылар',
	'group-abusefilter-member' => 'омсо сиидэтин эрэдээктэрэ',
	'group-accountcreator-member' => 'Кыттаачылар ааттарын бигэргэтээччи/оҥорооччу',
	'group-autopatrolled-member' => 'аптамаатынан ботуруулланааччы',
	'group-autoreviewer-member' => 'аптамаатынан бигэргэнэр',
	'group-bigexport-member' => 'улахан экспортёр',
	'group-confirmed-member' => 'бигэргэммит кыттааччы',
	'group-flood-member' => 'кытааччы руобаттар',
	'group-founder-member' => 'Тэрийээччи',
	'group-import-member' => 'Импортааччы',
	'group-ipblock-exempt-member' => 'IP-та хааччахтаммат кыттааччы',
	'group-patroller-member' => 'ботуруул',
	'group-rollbacker-member' => 'Төннөрөөччү',
	'group-transwiki-member' => 'transwiki`ттан импортааччы',
	'group-trusted-member' => 'итэҕэтиилээх кыттааччы',
	'grouppage-abusefilter' => '{{ns:project}}:Омсо сиидэтин эрэдээктэрдэрэ',
	'grouppage-accountcreator' => '{{ns:project}}:Кыттааччылар ааттарын бигэргэтээччилэр/айааччылар',
	'grouppage-autopatrolled' => '{{ns:project}}:Аптамаатынан ботуруулланааччылар',
	'grouppage-autoreviewer' => '{{ns:project}}:Аптамаатынан бигэргэнэр',
	'grouppage-bigexport' => '{{ns:project}}:Улахан экспортёрдар',
	'grouppage-confirmed' => '{{ns:project}}:Бигэргэммит кыттааччылар',
	'grouppage-flood' => '{{ns:project}}:Кыттааччы руобаттар',
	'grouppage-founder' => '{{ns:project}}:Тэрийээччилэр',
	'grouppage-import' => '{{ns:project}}:Импортааччылар',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-лара хааччахтаммат кыттааччылар',
	'grouppage-rollbacker' => '{{ns:project}}:Төннөрөөччүлэр',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki`ттан көһөрөөччүлэр',
	'grouppage-trusted' => '{{ns:project}}:Итэҕэллээх кыттааччылар',
	'group-steward' => 'Үстүйээрдэр',
	'group-sysadmin' => 'Тиһик (систиэмэ) дьаһабыллара',
	'group-editinterface' => 'Интерфейс эрэдээктэрдэрэ',
	'group-Global_bot' => 'Бырайыактар ыккардынааҕы руобаттар',
	'group-Global_rollback' => 'Бырайыактар ыккардынааҕы төннөрөөччүлэр',
	'group-Ombudsmen' => 'Омбудсменнар',
	'group-Staff' => 'Үлэһиттэр',
	'group-steward-member' => 'үстүйээрдэр',
	'group-sysadmin-member' => 'дьаһабыл',
	'group-editinterface-member' => 'интерфейс эрэдээктэрэ',
	'group-Global_bot-member' => 'бырайыактар ыккардынааҕы руобаттар',
	'group-Global_rollback-member' => 'бырайыактар ыккардынааҕы төннөрөөччүлэр',
	'group-Ombudsmen-member' => 'омбудсман',
	'group-Staff-member' => 'үлэһит',
	'group-coder' => 'Программистар',
	'group-coder-member' => 'программист',
	'group-inactive' => 'Көҕө суох кыттааччылар',
	'group-inactive-member' => 'көҕө суох кыттааччы',
	'grouppage-inactive' => '{{ns:project}}:Көҕө суох кыттааччылар',
	'wikimedia-copyright' => 'Тиэкис <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a> лицензия усулуобуйатынан тарҕанар, сорох түбэлтэҕэ эбии көрдөбүллэр баар буолуохтарын сөп. Сиһилии <a href="http://wikimediafoundation.org/wiki/Terms_of_Use/ru">Туттуу усулуобуйатын</a> көр.',
	'wikimedia-copyrightwarning' => 'Бэйэҥ уларытыыгын киллэрдэххинэ суруйбуккун [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0] уонна [http://www.gnu.org/copyleft/fdl.html GFDL] лицензияларынан тарҕанарыгар сөбүлэҥҥин биэрэҕин, онтуҥ төннүбэт. Бу сирэйи атын дьон туһанар түгэннэригэр, эйиэхэ гипер сигэ эбэтэр URL көмөтүнэн сигэниэхтэрэ, ону кытта сөбүлэһэҕин. Сиһилии [http://wikimediafoundation.org/wiki/Terms_of_Use/ru Условия использования] көр.',
	'wikimedia-editpage-tos-summary' => 'Эн тиэкистэриҥ көҥүл уларытыллыахтарын уонна ханнык баҕарар ньыманнан тарҕаныахтарын баҕарбат буоллаххына манна угума.
Угар тиэкиһиҥ ааптара буолбатах буоллаххына, ол тиэкис бу лицензия көрдөбүллэригэр сөп түбэһиэхтээх:[http://wikimediafoundation.org/wiki/Terms_of_Use/ru Условия использования] ону таһынан лицензия көрдөбүллэрин толоруом диэн бэйэҥ сөбүлэһэҕин.',
);

/** Sardinian (Sardu)
 * @author Andria
 * @author Marzedu
 */
$messages['sc'] = array(
	'sitesupport' => 'Donaduras',
	'tooltip-n-sitesupport' => 'Acotza·nos',
	'group-steward' => 'Stewards',
	'wikimedia-copyright' => 'Su testu est disponìbile segundu sa <a href="http://creativecommons.org/licenses/by-sa/3.0/">licèntzia Atributzione Creative Commons-Cundivide cantepare</a>; si podent aplicare prus cunditziones galu. Abbista is <a href="http://wikimediafoundation.org/wiki/Terms_of_Use"> cunditziones de impreu</a> pro is particulares.',
	'wikimedia-copyrightwarning' => 'Sarbende, acunsentis de non pòder prus retirare su contributu tuo lassadu de nou a suta is licèntzias [http://creativecommons.org/licenses/by-sa/3.0/ Atributzione Creative Commons/Cundivide cantepare 3.0] e [http://www.gnu.org/copyleft/fdl.html GFDL]. 
Acunsentis ca is re-usuàrios ti ddu ant a atribuire a su mancu cun unu ligàmine iper-testuale e unu URL a sa pàgina a sa cale as contribuidu. Abbista is [http://wikimediafoundation.org/wiki/Terms_of_Use cunditziones de impreu] pro is particulares.',
	'wikimedia-editpage-tos-summary' => "Si non tenes praxere ki su testu tuo siat acontzadu e re-distribuidu a cantu nd’andat, tando non ddu insertas inoghe. 
Si non dd'as scritu tue etotu, depet èsser disponìbile a cunditziones cantepare is [http://wikimediafoundation.org/wiki/Terms_of_Use cunditziones de impreu], e atzetas de sighire totu is rekisidos de sa licèntzia.",
);

/** Sicilian (Sicilianu)
 * @author Gmelfi
 * @author Melos
 * @author Santu
 * @author לערי ריינהארט
 */
$messages['scn'] = array(
	'wikimediamessages-desc' => 'Missaggi spicifici di Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/scn',
	'sitesupport' => 'Dunazzioni',
	'tooltip-n-sitesupport' => 'Sustinìticci',
	'group-abusefilter' => 'Gisturi di filtra anti abbusi',
	'group-accountcreator' => 'Criatura di cunti',
	'group-confirmed' => 'Utilizzatura cunfirmati',
	'group-founder' => 'Funnatura',
	'group-import' => 'Mpurtatura',
	'group-ipblock-exempt' => 'Esenti dû bloccu IP',
	'group-rollbacker' => 'Ripristinatura',
	'group-transwiki' => 'Mpurtaturi transwiki',
	'group-accountcreator-member' => 'Criaturi di cuntu',
	'group-founder-member' => 'Funnaturi',
	'group-import-member' => 'Mpurtaturi',
	'group-ipblock-exempt-member' => 'Esenti dû bloccu IP',
	'group-rollbacker-member' => 'Ripristinaturi',
	'group-transwiki-member' => 'Mpurtaturi transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Criatura di cunti',
	'grouppage-founder' => '{{ns:project}}:Funnatura',
	'grouppage-import' => '{{ns:project}}:Mpurtatura',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Esenti dû bloccu IP',
	'grouppage-rollbacker' => '{{ns:project}}:Ripristinatura',
	'grouppage-transwiki' => '{{ns:project}}:Mpurtatura transwiki',
	'group-steward' => 'Stiùwart',
	'group-sysadmin' => 'Amministratura di sistema',
	'group-Global_bot' => 'Bot glubbali',
	'group-Global_rollback' => 'Ripristinatura glubbali',
	'group-Ombudsmen' => 'Difinsura civici',
	'group-Staff' => 'Staff',
	'group-steward-member' => 'Stiùwart',
	'group-sysadmin-member' => 'amministraturi di sistema',
	'group-editinterface-member' => 'Editori dâ interfaccia',
	'group-Global_bot-member' => 'bot glubbali',
	'group-Global_rollback-member' => 'ripristinaturi glubbali',
	'group-Ombudsmen-member' => 'difinsuri cìvicu',
	'group-Staff-member' => 'Cumpunenti dû staff',
	'grouppage-steward' => 'm:Stewards',
	'grouppage-sysadmin' => 'm:System administrators',
	'group-coder' => 'Cudificatura',
	'group-coder-member' => 'cudificaturi',
	'group-inactive' => 'Utenti inattivi',
	'group-inactive-member' => 'utenti inattivu',
	'grouppage-inactive' => '{{ns:project}}:Utenti inattivi',
	'wikimedia-copyright' => 'Lu testu è dispunibbili sutta la <a href="http://creativecommons.org/licenses/by-sa/3.0/">Licenza Creative Commons Attribuzzioni/Spartuta â stissa manera</a>;
si pònnu applicàrisi àutri cunnizzioni.
Talìa li <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">cunnizzioni di usu</a> pi li dittagli.',
	'wikimedia-copyrightwarning' => "Sarvannu, siti d'accordu di rènniri dispunìbbili lu vostru cuntribbutu sutta la [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] e la [http://www.gnu.org/copyleft/fdl.html GFDL].
Siti d'accordu puru ca àutri riutilizzatura b'accreditanu lu vostru travagghiu, cu lu liami o cu na URL â pàggina â quali stai cuntribbuennu.
Talia lu [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] pi sapìrinni cchiossai.",
	'wikimedia-editpage-tos-summary' => "Siddu nun vuoi ca lu tò scrittu nun è canciatu e ridistrubuitu a vuluntà, allura nun lu suttamettiri ccà.
Siddu nun lu scrivistu tu, havi a essiri dispunibbili a cunnizzioni ca arrispetta li [http://wikimediafoundation.org/wiki/Terms_of_Use Termini di Usu], e ca tu si d'accordu di rispittari li riquisiti di licenza.",
);

/** Scots (Scots)
 * @author OchAyeTheNoo
 */
$messages['sco'] = array(
	'sitesupport' => 'Propines',
);

/** Sindhi (سنڌي)
 * @author Aursani
 */
$messages['sd'] = array(
	'sitesupport' => 'مالي امداد',
	'tooltip-n-sitesupport' => 'اسان جي مدد ڪريو',
);

/** Sassaresu (Sassaresu)
 * @author Felis
 */
$messages['sdc'] = array(
	'sitesupport' => 'Dunazioni',
	'tooltip-n-sitesupport' => 'Supporthazi',
);

/** Northern Sami (Sámegiella)
 * @author Skuolfi
 */
$messages['se'] = array(
	'sitesupport' => 'Skeaŋkkat',
	'tooltip-n-sitesupport' => 'Doarrjo siidduid doaimma',
);

/** Cmique Itom (Cmique Itom)
 * @author SeriCtam
 */
$messages['sei'] = array(
	'sitesupport' => 'Donación',
	'tooltip-n-sitesupport' => 'Donacíonhuíiitl',
);

/** Tachelhit (Tašlḥiyt)
 * @author Dalinanir
 * @author Zanatos
 */
$messages['shi'] = array(
	'sitesupport' => 'Aws',
	'tooltip-n-sitesupport' => 'Awsaɣ',
	'group-import' => 'Willi di tawin',
);

/** Sinhala (සිංහල)
 * @author Calcey
 * @author චතුනි අලහප්පෙරුම
 * @author නන්දිමිතුරු
 * @author බිඟුවා
 */
$messages['si'] = array(
	'wikimediamessages-desc' => 'විකිමාධ්‍ය විශේෂී පණිවුඩයන්',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport' => 'පරිත්‍යාග',
	'tooltip-n-sitesupport' => 'අප හට අනුග්‍රහ සපයන්න',
	'specialpages-group-contribution' => 'දායකත්වය/සංචිතය',
	'group-abusefilter' => 'පෙරහන් සැකසුම් අනිසි භාවිතය',
	'group-accountcreator' => 'ගිණුම් තනන්නන්',
	'group-arbcom' => 'සමථ කමිටු සාමාජීකයන්',
	'group-autopatrolled' => 'ස්වයං මුර සංචාරකයන්',
	'group-autoreviewer' => 'ස්වයං විචාරකයන්',
	'group-bigexport' => 'විශාල නිර්යාතකරුවන්',
	'group-confirmed' => 'තහවුරු කරනු ලැබූ පරිශීලකයන්',
	'group-flood' => 'Bot පරිශීලකයන්',
	'group-founder' => 'ප්‍රාරම්භකයන්',
	'group-import' => 'ආයාතකරුවන්',
	'group-interface_editors' => 'අතුරු මුහුණත් සකසන',
	'group-ipblock-exempt' => 'අන්තර්ජාල වාරණ විවර්ජනයන්',
	'group-patroller' => 'මුර සංචාරකයන්',
	'group-rollbacker' => 'පසුපෙරළන්නන්',
	'group-transwiki' => 'අන්තර්විකී ආයාතකරුවන්',
	'group-trusted' => 'විශ්වාසනීය පරිශීලකයන්',
	'group-abusefilter-member' => 'පෙරහන් සැකසුම වැරදි භාවිතය',
	'group-accountcreator-member' => 'ගිණුම් තනන්නා',
	'group-arbcom-member' => 'සමථ කමිටු සාමාජීකයා',
	'group-autopatrolled-member' => 'ස්වයං මුර සංචාරකයා',
	'group-autoreviewer-member' => 'ස්වයං විචාරකයා',
	'group-bigexport-member' => 'විශාල නිර්යාතකරු',
	'group-confirmed-member' => 'තහවුරු කරනු ලැබූ පරිශීලක',
	'group-flood-member' => ' bot පරිශීලක',
	'group-founder-member' => 'ප්‍රාරම්භක',
	'group-import-member' => 'ආයාතකරු',
	'group-interface_editors-member' => 'අතුරු මුහුණත් සකසනය',
	'group-ipblock-exempt-member' => 'අන්තර්ජාල වාරණ විවර්ජනය',
	'group-patroller-member' => 'මුර සංචාරකයා',
	'group-rollbacker-member' => 'පසුපෙරළන්නා',
	'group-transwiki-member' => 'අන්තර්විකි ආයාතකරු',
	'group-trusted-member' => 'විශ්වාසනීය පරිශීලකයා',
	'grouppage-abusefilter' => '{{ns:project}}:පෙරහන් සකසන වැරදි භාවිතය',
	'grouppage-accountcreator' => '{{ns:project}}:ගිණුම් තනන්නන්',
	'grouppage-arbcom' => '{{ns:project}}:සමථ කමිටු සාමාජීකයන්',
	'grouppage-autopatrolled' => '{{ns:project}}:ස්වයං මුර සංචාරකයන්',
	'grouppage-autoreviewer' => '{{ns:project}}:ස්වයං විචාරකයන්',
	'grouppage-bigexport' => '{{ns:project}}:විශාල නිර්යාතකරුවන්',
	'grouppage-confirmed' => '{{ns:project}}:තහවුරු කරන ලද පරිශීලකයන්',
	'grouppage-flood' => '{{ns:project}}:Bot පරිශීලකයන්',
	'grouppage-founder' => '{{ns:project}}:ප්‍රාරම්භකයන්',
	'grouppage-import' => '{{ns:project}}:ආයාත කරුවන්',
	'grouppage-ipblock-exempt' => '{{ns:project}}:අන්තර්ජාල වාරණ විවර්ජනය',
	'grouppage-rollbacker' => '{{ns:project}}:පසුපෙරළන්නන්',
	'grouppage-transwiki' => '{{ns:project}}:අන්තර්විකි ආයාතකරුවන්',
	'grouppage-trusted' => '{{ns:project}}:විශ්වාසනීය පරිශීලකයන්',
	'group-steward' => 'භාරකරුවන්',
	'group-sysadmin' => 'පද්ධති පරිපාලකයන්',
	'group-editinterface' => 'අතුරු මුහුණත් සකසන',
	'group-Global_bot' => 'ගෝලීය රොබෝවරුන්',
	'group-Global_rollback' => 'ගෝලීය පසුපෙරළන්නන්',
	'group-Ombudsmen' => 'දුග්ගන්නාරාළවරුන්',
	'group-Staff' => 'සේවක මඩුල්ල',
	'group-steward-member' => 'භාරකරු',
	'group-sysadmin-member' => 'පද්ධති පරිපාලකවරයා',
	'group-editinterface-member' => 'අතුරු මුහුණත් සකසනය',
	'group-Global_bot-member' => 'ගෝලීය රොබෝවරයා',
	'group-Global_rollback-member' => 'ගෝලීය පසුපෙරළන්නා',
	'group-Ombudsmen-member' => 'දුග්ගන්නාරාළ',
	'group-Staff-member' => 'සේවක මණ්ඩල සාමාජිකයා',
	'grouppage-steward' => 'm:භාරකරුවන්',
	'grouppage-sysadmin' => 'm:පද්ධති පරිපාලකවරුන්',
	'grouppage-Global_rollback' => 'm:ගෝලීය පසුපෙරළීම',
	'grouppage-Ombudsmen' => 'm:දුග්ගන්නාරාළ කොමිසම',
	'group-coder' => 'කේතකරුවන්',
	'group-coder-member' => 'කේතකරු',
	'grouppage-coder' => 'Project:කේතකරු',
	'group-inactive' => 'අක්‍රීය පරිශීලකයන්',
	'group-inactive-member' => 'අක්‍රීය පරිශීලකයා',
	'grouppage-inactive' => '{{ns:project}}:අක්‍රීය පරිශීලකයන්',
	'wikimedia-copyright' => 'පෙළ <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>;යටතේ ලබා ගත හැක.අමතර කොන්දේසි භාවිතා විය හැක.
වැඩි විස්තර සඳහා <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> බලන්න.',
	'wikimedia-copyrightwarning' => 'සුරැකීමෙන්, [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] සහ  [http://www.gnu.org/copyleft/fdl.html GFDL].
යටතේ ඔබේ දායකත්වය යළි වෙනස් කළ නොහැකි ලෙස නිකුත් කිරීමට ඔබ එකඟ වේ.ඔබ දායකත්වය සපයන පිටුවට අධි-සබැඳුම් හෝ URL තුළින්,අවමයේදී,ප්‍රති-පරිශීලකයන් විසින් බැර කරනු ලැබීමට ඔබ එකඟ වේ.වැඩි විස්තර සඳහා [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] බලන්න.',
	'wikimedia-editpage-tos-summary' => 'ඔබගේ ලේඛනය කැමැත්ත පරිදි සංස්කරණය කිරීමට හෝ යළි වෙනස් විදියකින් බෙදා හැරීමට ඔබට අවශ්‍ය නොවේ නම්,එය මෙහි යොමු නොකරන්න.
මෙය ඔබ විසින්ම ලියනු නොලැබුවේනම්,එය [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] සමඟ අනුරූප කොන්දේසි යටතේ ලබා ගත හැකිවිය යුතු අතර,ඕනෑම අදාළ බලපත්‍රදායක අවශ්‍යතාවයක් අනුගමනය කිරීමට ඔබ එකඟ වෙයි.',
);

/** Slovak (Slovenčina)
 * @author Helix84
 * @author Απεργός
 */
$messages['sk'] = array(
	'wikimediamessages-desc' => 'Správy špecifické pre Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Zbieranie_príspevkov',
	'sitesupport' => 'Podpora',
	'tooltip-n-sitesupport' => 'Podporte nás',
	'specialpages-group-contribution' => 'Prispievateľov/fundraising',
	'group-abusefilter' => 'Redaktori filtrov zneužití',
	'group-accountcreator' => 'Tvorcovia účtov',
	'group-autopatrolled' => 'Automatickí strážcovia',
	'group-autoreviewer' => 'Autokontrolóri',
	'group-bigexport' => 'Hromadní exportéri',
	'group-confirmed' => 'Potvrdení používatelia',
	'group-flood' => 'Robotickí používatelia',
	'group-founder' => 'Zakladatelia',
	'group-import' => 'Importéri',
	'group-ipblock-exempt' => 'Výnimky z blokovaní IP',
	'group-patroller' => 'Strážcovia',
	'group-rollbacker' => 'S právom rollback',
	'group-transwiki' => 'Transwiki importéri',
	'group-trusted' => 'Dôveryhodní používatelia',
	'group-abusefilter-member' => 'redaktor filtrov zneužití',
	'group-accountcreator-member' => 'Tvorca účtu',
	'group-autopatrolled-member' => 'strážca',
	'group-autoreviewer-member' => 'autokontrolór',
	'group-bigexport-member' => 'hromadní exportér',
	'group-confirmed-member' => 'potvrdený používateľ',
	'group-flood-member' => 'robotickí používatelia',
	'group-founder-member' => 'Zakladateľ',
	'group-import-member' => 'Importér',
	'group-ipblock-exempt-member' => 'Výnimka z blokovaní IP',
	'group-patroller-member' => 'Strážca',
	'group-rollbacker-member' => 'S právom rollback',
	'group-transwiki-member' => 'Transwiki importér',
	'group-trusted-member' => 'dôveryhodný používateľ',
	'grouppage-abusefilter' => '{{ns:project}}:Redaktori filtrov zneužití',
	'grouppage-accountcreator' => '{{ns:project}}:Tvorcovia účtov',
	'grouppage-autopatrolled' => '{{ns:project}}:Strážcovia',
	'grouppage-autoreviewer' => '{{ns:project}}:Autokontrolóri',
	'grouppage-bigexport' => '{{ns:project}}:Hromadní exportéri',
	'grouppage-confirmed' => '{{ns:project}}:Potvrdení používatelia',
	'grouppage-flood' => '{{ns:project}}:Robotickí používatelia',
	'grouppage-founder' => '{{ns:project}}:Zakladatelia',
	'grouppage-import' => '{{ns:project}}:Importéri',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Výnimky z blokovaní IP',
	'grouppage-rollbacker' => '{{ns:project}}:S právom rollback',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki importéri',
	'grouppage-trusted' => '{{ns:project}}:Dôveryhodní používatelia',
	'group-steward' => 'Stewardi',
	'group-sysadmin' => 'Správcovia systému',
	'group-editinterface' => 'Editori rozhrania',
	'group-Global_bot' => 'Globálni roboti',
	'group-Global_rollback' => 'Globálni rollbackeri',
	'group-Ombudsmen' => 'Ombudsmani',
	'group-Staff' => 'Zamestnanci',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'správca systému',
	'group-editinterface-member' => 'editor rozhrania',
	'group-Global_bot-member' => 'Globálny robot',
	'group-Global_rollback-member' => 'Globálny rollbacker',
	'group-Ombudsmen-member' => 'Ombudsman',
	'group-Staff-member' => 'zamestnanec',
	'group-coder' => 'Kóderi',
	'group-coder-member' => 'kóder',
	'group-inactive' => 'Neaktívni používatelia',
	'group-inactive-member' => 'neaktívny používateľ',
	'grouppage-inactive' => '{{ns:project}}:Neaktívni používatelia',
	'wikimedia-copyright' => 'Text je dostupný za podmienok <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>; prípadne za ďalších podmienok. Podrobnejšie informácie nájdete na stránke <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Podmienky použitia</a>.',
	'wikimedia-copyrightwarning' => 'Uložením stránky neodvolateľne súhlasíte s uvoľnením svojho príspevku za podmienok [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] a [http://www.gnu.org/copyleft/fdl.html GFDL]. Súhlasíte, že používatelia tohto obsahu vás musia uviesť ako autora a to minimálne hyperodkazom alebo URL na článok do ktorého prispievate. Podrobnejšie informácie nájdete na stránke [http://wikimediafoundation.org/wiki/Terms_of_Use Podmienky použitia].',
	'wikimedia-editpage-tos-summary' => 'Ak nesúhlasíte s tým, že váš príspevok môže byť ľubovoľne upravovaný a šírený, nezverejňujte ho tu. Ak ste tento text nenapísali sami, musí byť dostupný za podmienok v súlade s [http://wikimediafoundation.org/wiki/Terms_of_Use Podmienkami použitia] a musíte dodržiavať všetky súvisiace licenčné požiadavky.',
);

/** Slovenian (Slovenščina)
 * @author Dbc334
 * @author Smihael
 * @author Yerpo
 */
$messages['sl'] = array(
	'wikimediamessages-desc' => 'Posebna sporočila Wikimedie',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/sl?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'Denarni prispevki',
	'tooltip-n-sitesupport' => 'Podprite nas',
	'specialpages-group-contribution' => 'Prispevek/Zbiralec sredstev',
	'group-abusefilter' => 'Uredniki filtrov zlorabe',
	'group-accountcreator' => 'Ustvarjalci računov',
	'group-arbcom' => 'Člani arbitražnega odbora',
	'group-autopatrolled' => 'Samodejno nadzorovani',
	'group-autoreviewer' => 'Samodejni pregledovalci',
	'group-bigexport' => 'Veliki izvozniki',
	'group-confirmed' => 'Potrjeni uporabniki',
	'group-editprotected' => 'Urejevalci zaščitenih strani',
	'group-filemover' => 'Prestavljalci datotek',
	'group-flood' => 'Uporabniki boti',
	'group-founder' => 'Ustanovitelji',
	'group-import' => 'Uvozniki',
	'group-interface_editors' => 'Urejevalci vmesnika',
	'group-ipblock-exempt' => 'Izvzemi blokade IP',
	'group-patroller' => 'Nadzorniki',
	'group-rollbacker' => 'Vračalci urejanj',
	'group-transwiki' => 'Transwiki uvozniki',
	'group-trusted' => 'Zaupani uporabniki',
	'group-abusefilter-member' => 'urednik filtrov zlorabe',
	'group-accountcreator-member' => 'ustvarjalec računov',
	'group-arbcom-member' => 'član arbitražnega odbora',
	'group-autopatrolled-member' => 'samodejni nadzornik',
	'group-autoreviewer-member' => 'samodejni pregledovalec',
	'group-bigexport-member' => 'velik izvoznik',
	'group-confirmed-member' => 'potrjen uporabnik',
	'group-editprotected-member' => 'urejevalci zaščitenih strani',
	'group-filemover-member' => 'prestavljalec datotek',
	'group-flood-member' => 'uporabnik bot',
	'group-founder-member' => 'ustanovitelj',
	'group-import-member' => 'uvoznik',
	'group-interface_editors-member' => 'urejevalec vmesnika',
	'group-ipblock-exempt-member' => 'izvzem blokade IP',
	'group-patroller-member' => 'nadzornik',
	'group-rollbacker-member' => 'vračalec urejanj',
	'group-transwiki-member' => 'transwiki uvoznik',
	'group-trusted-member' => 'zaupan uporabnik',
	'grouppage-abusefilter' => '{{ns:project}}:Uredniki filtrov zlorabe',
	'grouppage-accountcreator' => '{{ns:project}}:Ustvarjalci računov',
	'grouppage-arbcom' => '{{ns:project}}:Člani arbitražnega odbora',
	'grouppage-autopatrolled' => '{{ns:project}}:Samodejni nadzorniki',
	'grouppage-autoreviewer' => '{{ns:project}}:Samodejni pregledovalci',
	'grouppage-bigexport' => '{{ns:project}}:Veliki izvozniki',
	'grouppage-confirmed' => '{{ns:project}}:Potrjeni uporabniki',
	'grouppage-editprotected' => '{{ns:project}}:Urejevalci zaščitenih strani',
	'grouppage-filemover' => '{{ns:project}}:Prestavljalec datotek',
	'grouppage-flood' => '{{ns:project}}:Uporabniki boti',
	'grouppage-founder' => '{{ns:project}}:Ustanovitelji',
	'grouppage-import' => '{{ns:project}}:Uvozniki',
	'grouppage-interface_editors' => '{{ns:project}}:Urejevalci vmesnika',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Izvzem blokade IP',
	'grouppage-rollbacker' => '{{ns:project}}:Vračalci urejanj',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki uvozniki',
	'grouppage-trusted' => '{{ns:project}}:Zaupani uporabniki',
	'group-steward' => 'Upravniki',
	'group-sysadmin' => 'Sistemski administratorji',
	'group-editinterface' => 'Urejevalci vmesnika',
	'group-Global_bot' => 'Globalni boti',
	'group-Global_rollback' => 'Globalni vračalci urejanj',
	'group-Global_sysops' => 'Globalni administratorji',
	'group-Ombudsmen' => 'Ombudsmani',
	'group-Staff' => 'Osebje',
	'group-steward-member' => 'upravnik',
	'group-sysadmin-member' => 'sistemski administrator',
	'group-editinterface-member' => 'urejevalec vmesnika',
	'group-Global_bot-member' => 'globalni bot',
	'group-Global_rollback-member' => 'globalni vračalec urejanj',
	'group-Global_sysops-member' => 'globalni administrator',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'zaposlen',
	'group-coder' => 'Koderji',
	'group-coder-member' => 'koder',
	'group-inactive' => 'Neaktivni uporabniki',
	'group-inactive-member' => 'neaktiven uporabnik',
	'grouppage-inactive' => '{{ns:project}}:Neaktivni uporabniki',
	'shared-repo-name-shared' => 'Wikimedijine Zbirke',
	'wikimedia-copyright' => 'Besedilo je na razpolago pod <a href="http://creativecommons.org/licenses/by-sa/3.0/">dovoljenjem Creative Commons 
Priznanje avtorstva-Deljenje pod enakimi pogoji 3.0</a>; dodatni pogoji se lahko uveljavljajo. Glej <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Pogoje uporabe</a> za podrobnosti.',
	'wikimedia-copyrightwarning' => 'S klikom na »Shrani stran« se strinjate z nepreklicno objavo svojega prispevka v skladu z licencama [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Priznanje avtorstva-Deljenje pod enakimi pogoji 3.0] in [http://www.gnu.org/copyleft/fdl.html GFDL].
Strinjate se, da se, ob morebitni ponovni uporabi prispevka, navede vsaj povezavo oz. URL do strani h kateri pravkar prispevate.
Glej [http://wikimediafoundation.org/wiki/Terms_of_Use Pogoje uporabe] za podrobnosti.',
	'wikimedia-editpage-tos-summary' => 'Če ne želite, da so vaši prispevki kadarkoli preurejeni ali redistribuirani, ga ne prispevajte. 
Če prispevka niste napisali sami, mora biti na razpolago pod pogoji, skladnimi s [http://wikimediafoundation.org/wiki/Terms_of_Use Pogoji uporabe]. Poleg tega s shranjevanjem potrjujete, da upoštevate vse zahteve licence izvirne objave.',
);

/** Lower Silesian (Schläsch)
 * @author Schläsinger
 */
$messages['sli'] = array(
	'sitesupport' => 'Spenda',
	'group-coder' => 'Programmierer',
);

/** Samoan (Gagana Samoa) */
$messages['sm'] = array(
	'sitesupport' => 'Meaalofa tupe',
);

/** Southern Sami (Åarjelsaemien)
 * @author M.M.S.
 */
$messages['sma'] = array(
	'sitesupport' => 'Vedtedh beetnegh',
	'tooltip-n-sitesupport' => '{{SITENAME}} dåarjedidh',
);

/** Shona (chiShona)
 * @author Hakka
 */
$messages['sn'] = array(
	'sitesupport' => 'Zvipo',
);

/** Somali (Soomaaliga)
 * @author Mimursal
 */
$messages['so'] = array(
	'sitesupport' => 'Tabarucid',
	'tooltip-n-sitesupport' => 'Nacaawi',
);

/** Albanian (Shqip)
 * @author Dori
 * @author Puntori
 */
$messages['sq'] = array(
	'sitesupport' => 'Dhurime',
	'tooltip-n-sitesupport' => 'Na përmbajë',
	'group-accountcreator' => 'Krijuesit e kontove',
	'group-founder' => 'Themeluesit',
	'group-import' => 'Importuesit',
	'group-founder-member' => 'themelues',
	'group-import-member' => 'importues',
	'group-steward' => 'Përgjegjës',
	'group-Staff' => 'Stafi',
	'group-steward-member' => 'Përgjegjës',
	'group-Staff-member' => 'anëtar i stafit',
	'group-coder' => 'Koduesit',
	'group-coder-member' => 'kodues',
);

/** Serbian Cyrillic ekavian (Српски (ћирилица))
 * @author Millosh
 * @author Red Baron
 * @author Михајло Анђелковић
 */
$messages['sr-ec'] = array(
	'wikimediamessages-desc' => 'Поруке специфичне за Викимедију.',
	'sitesupport' => 'Донације',
	'tooltip-n-sitesupport' => 'подржи нас',
	'group-accountcreator' => 'ствараоци налога',
	'group-arbcom' => 'Чланови арбитражног већа',
	'group-autopatrolled' => 'Аутоматски патролисани',
	'group-autoreviewer' => 'Аутоматски прегледани',
	'group-bigexport' => 'Велики извозници',
	'group-confirmed' => 'Проверени корисници',
	'group-editprotected' => 'Уредници заштићених страна',
	'group-filemover' => 'Премештачи фајлова',
	'group-flood' => 'Ботовски корисници',
	'group-founder' => 'оснивачи',
	'group-import' => 'уносници',
	'group-interface_editors' => 'Уредници интерфејса',
	'group-ipblock-exempt' => 'изузеци од ИП блокова',
	'group-patroller' => 'Патролери',
	'group-researcher' => 'Истраживачи',
	'group-rollbacker' => 'враћачи',
	'group-transwiki' => 'међувики уносници',
	'group-trusted' => 'Корсиници од поверења',
	'group-accountcreator-member' => 'стваралац налога',
	'group-arbcom-member' => 'члан арбитражног већа',
	'group-autopatrolled-member' => 'аутопатролисан',
	'group-autoreviewer-member' => 'аутоматски прегледан',
	'group-bigexport-member' => 'велики извозник',
	'group-confirmed-member' => 'проверени корсиник',
	'group-editprotected-member' => 'уредник заштићених страна',
	'group-filemover-member' => 'премештач фајлова',
	'group-flood-member' => 'ботовски корисник',
	'group-founder-member' => 'оснивач',
	'group-import-member' => 'уносник',
	'group-interface_editors-member' => 'уредник интерфејса',
	'group-ipblock-exempt-member' => 'изузетак од ИП блокова',
	'group-patroller-member' => 'патролер',
	'group-researcher-member' => 'истраживач',
	'group-rollbacker-member' => 'враћач',
	'group-transwiki-member' => 'међувики уносник',
	'group-trusted-member' => 'корисник од поверења',
	'grouppage-accountcreator' => '{{ns:project}}:Стварачи налога',
	'grouppage-arbcom' => '{{ns:project}}:Чланови арбитражне комисије',
	'grouppage-autopatrolled' => '{{ns:project}}:Аутопатролисани',
	'grouppage-autoreviewer' => '{{ns:project}}:Аутоматски прегледани',
	'grouppage-bigexport' => '{{ns:project}}:Велики извозници',
	'grouppage-confirmed' => '{{ns:project}}:Проверени корисници',
	'grouppage-editprotected' => '{{ns:project}}:Уредници заштићених страна',
	'grouppage-filemover' => '{{ns:project}}:Премештачи фајлова',
	'grouppage-flood' => '{{ns:project}}:Ботовски корисници',
	'grouppage-founder' => '{{ns:project}}:Оснивачи',
	'grouppage-import' => '{{ns:project}}:Уносници',
	'grouppage-interface_editors' => '{{ns:project}}:Уредници интерфејса',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Изузетак од ИП блокова',
	'grouppage-researcher' => '{{ns:project}}:Истраживачи',
	'grouppage-rollbacker' => '{{ns:project}}:Враћачи',
	'grouppage-transwiki' => '{{ns:project}}:Међувики уносници',
	'grouppage-trusted' => '{{ns:project}}:Корисници од поверења',
	'group-steward' => 'Стјуарди',
	'group-sysadmin' => 'Системски администратори',
	'group-editinterface' => 'Уредници интерфејса',
	'group-Global_bot' => 'Глобални ботови',
	'group-Global_rollback' => 'Глобални враћачи',
	'group-Global_sysops' => 'Глобални администратори',
	'group-steward-member' => 'Стјуард',
	'group-sysadmin-member' => 'системски администратор',
	'group-editinterface-member' => 'уредник интерфејса',
	'group-Global_bot-member' => 'глобални бот',
	'group-Global_rollback-member' => 'глобални враћач',
	'group-Global_sysops-member' => 'глобални администратор',
	'group-coder' => 'Кодери',
	'group-coder-member' => 'кодер',
	'group-inactive' => 'Неактивни корисници',
	'group-inactive-member' => 'неактиван корисник',
	'grouppage-inactive' => '{{ns:project}}:Неактивни корисници',
);

/** Serbian Latin ekavian (Srpski (latinica))
 * @author Michaello
 */
$messages['sr-el'] = array(
	'wikimediamessages-desc' => 'Poruke specifične za Vikimediju.',
	'sitesupport' => 'Donacije',
	'tooltip-n-sitesupport' => 'podrži nas',
	'group-accountcreator' => 'stvaraoci naloga',
	'group-arbcom' => 'Članovi arbitražnog veća',
	'group-autopatrolled' => 'Automatski patrolisani',
	'group-autoreviewer' => 'Automatski pregledani',
	'group-bigexport' => 'Veliki izvoznici',
	'group-confirmed' => 'Provereni korisnici',
	'group-editprotected' => 'Urednici zaštićenih strana',
	'group-filemover' => 'Premeštači fajlova',
	'group-flood' => 'Botovski korisnici',
	'group-founder' => 'osnivači',
	'group-import' => 'unosnici',
	'group-interface_editors' => 'Urednici interfejsa',
	'group-ipblock-exempt' => 'izuzeci od IP blokova',
	'group-patroller' => 'Patroleri',
	'group-researcher' => 'Istraživači',
	'group-rollbacker' => 'vraćači',
	'group-transwiki' => 'međuviki unosnici',
	'group-trusted' => 'Korsinici od poverenja',
	'group-accountcreator-member' => 'stvaralac naloga',
	'group-arbcom-member' => 'član arbitražnog veća',
	'group-autopatrolled-member' => 'autopatrolisan',
	'group-autoreviewer-member' => 'automatski pregledan',
	'group-bigexport-member' => 'veliki izvoznik',
	'group-confirmed-member' => 'provereni korsinik',
	'group-editprotected-member' => 'urednik zaštićenih strana',
	'group-filemover-member' => 'premeštač fajlova',
	'group-flood-member' => 'botovski korisnik',
	'group-founder-member' => 'osnivač',
	'group-import-member' => 'unosnik',
	'group-interface_editors-member' => 'urednik interfejsa',
	'group-ipblock-exempt-member' => 'izuzetak od IP blokova',
	'group-patroller-member' => 'patroler',
	'group-researcher-member' => 'istraživač',
	'group-rollbacker-member' => 'vraćač',
	'group-transwiki-member' => 'međuviki unosnik',
	'group-trusted-member' => 'korisnik od poverenja',
	'grouppage-accountcreator' => '{{ns:project}}:Stvarači naloga',
	'grouppage-arbcom' => '{{ns:project}}:Članovi arbitražne komisije',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrolisani',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatski pregledani',
	'grouppage-bigexport' => '{{ns:project}}:Veliki izvoznici',
	'grouppage-confirmed' => '{{ns:project}}:Provereni korisnici',
	'grouppage-editprotected' => '{{ns:project}}:Urednici zaštićenih strana',
	'grouppage-filemover' => '{{ns:project}}:Premeštači fajlova',
	'grouppage-flood' => '{{ns:project}}:Botovski korisnici',
	'grouppage-founder' => '{{ns:project}}:Osnivači',
	'grouppage-import' => '{{ns:project}}:Unosnici',
	'grouppage-interface_editors' => '{{ns:project}}:Urednici interfejsa',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Izuzetak od IP blokova',
	'grouppage-researcher' => '{{ns:project}}:Istraživači',
	'grouppage-rollbacker' => '{{ns:project}}:Vraćači',
	'grouppage-transwiki' => '{{ns:project}}:Međuviki unosnici',
	'grouppage-trusted' => '{{ns:project}}:Korisnici od poverenja',
	'group-steward' => 'Stjuardi',
	'group-sysadmin' => 'Sistemski administratori',
	'group-editinterface' => 'Urednici interfejsa',
	'group-Global_bot' => 'Globalni botovi',
	'group-Global_rollback' => 'Globalni vraćači',
	'group-Global_sysops' => 'Globalni administratori',
	'group-steward-member' => 'Stjuard',
	'group-sysadmin-member' => 'sistemski administrator',
	'group-editinterface-member' => 'urednik interfejsa',
	'group-Global_bot-member' => 'globalni bot',
	'group-Global_rollback-member' => 'globalni vraćač',
	'group-Global_sysops-member' => 'globalni administrator',
	'group-coder' => 'Koderi',
	'group-coder-member' => 'koder',
	'group-inactive' => 'Neaktivni korisnici',
	'group-inactive-member' => 'neaktivan korisnik',
	'grouppage-inactive' => '{{ns:project}}:Neaktivni korisnici',
);

/** Sranan Tongo (Sranantongo)
 * @author Adfokati
 */
$messages['srn'] = array(
	'sitesupport' => 'Yibi a finansi',
	'tooltip-n-sitesupport' => 'Gi wi wan finansi',
);

/** Southern Sotho (Sesotho) */
$messages['st'] = array(
	'sitesupport' => 'Dimpho',
);

/** Seeltersk (Seeltersk)
 * @author Maartenvdbent
 * @author Pyt
 */
$messages['stq'] = array(
	'wikimediamessages-desc' => 'Wikimediaspezifiske Systemättergjuchten',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Spändje',
	'sitesupport' => 'Spenden',
	'tooltip-n-sitesupport' => 'Unnerstutse uus',
	'group-abusefilter' => 'Misbruukssieuwe-Beoarbaidere',
	'group-accountcreator' => 'Benutserkonten-Moakere',
	'group-autopatrolled' => 'Automatiske Kontrollierdere',
	'group-autoreviewer' => 'Autowröigere',
	'group-bigexport' => 'Grootexporteure',
	'group-confirmed' => 'Bestäätigede Benutsere',
	'group-flood' => 'Botbenutsere',
	'group-founder' => 'Gruundere',
	'group-import' => 'Importeur',
	'group-ipblock-exempt' => 'IP-Speere-Uutnoamen',
	'group-patroller' => 'Kontrolleure',
	'group-rollbacker' => 'Touräächsättere',
	'group-transwiki' => 'Transwiki-Importeure',
	'group-trusted' => 'Fertjouenswöidige Benutsere',
	'group-abusefilter-member' => 'Misbruukssieuwe-Beoarbaider',
	'group-accountcreator-member' => 'Benutserkonten-Moaker',
	'group-autopatrolled-member' => 'Automatisken Wröiger',
	'group-autoreviewer-member' => 'Automatisken Wröiger',
	'group-bigexport-member' => 'Grootexporteur',
	'group-confirmed-member' => 'Bestäätigeden Benutser',
	'group-flood-member' => 'Botbenutser',
	'group-founder-member' => 'Gruunder',
	'group-import-member' => 'Importeur',
	'group-ipblock-exempt-member' => 'IP-Speere-Uutnoame',
	'group-patroller-member' => 'Kontrolleur',
	'group-rollbacker-member' => 'Touräächsätter',
	'group-transwiki-member' => 'Transwiki-Importeur',
	'group-trusted-member' => 'Fertjouenswöidigen Benutser',
	'grouppage-abusefilter' => '{{ns:project}}:Misbruukssieuwe-Beoarbaidere',
	'grouppage-accountcreator' => '{{ns:project}}:Benutserkonten-Moakere',
	'grouppage-autopatrolled' => '{{ns:project}}:Automatiske Wröigere',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatiske Wröigere',
	'grouppage-bigexport' => '{{ns:project}}:Grootexporteure',
	'grouppage-confirmed' => '{{ns:project}}:Bestäätigede Benutsere',
	'grouppage-flood' => '{{ns:project}}:Botbenutsere',
	'grouppage-founder' => '{{ns:project}}:Gruundere',
	'grouppage-import' => '{{ns:project}}:Importeure',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP-Speere-Uutnoame',
	'grouppage-rollbacker' => '{{ns:project}}:Touräächsättere',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-Importeure',
	'grouppage-trusted' => '{{ns:project}}:Fertjouenswöidige Benutsere',
	'group-steward' => 'Stewarde',
	'group-sysadmin' => 'Systemadministratore',
	'group-editinterface' => 'Benutseruurflächenbeoarbaidere',
	'group-Global_bot' => 'Globoale Bots',
	'group-Global_rollback' => 'Globoale Touräächsättere',
	'group-Ombudsmen' => 'Ombudsljuude',
	'group-Staff' => 'Mee-Oarbaidere',
	'group-steward-member' => 'Steward',
	'group-sysadmin-member' => 'Systemadministrator',
	'group-editinterface-member' => 'Benutseruurflächenbeoarbaider',
	'group-Global_bot-member' => 'Globoalen Bot',
	'group-Global_rollback-member' => 'Globoalen Touräächsätter',
	'group-Ombudsmen-member' => 'Ombudspersoon',
	'group-Staff-member' => 'Mee-Oarbaider',
	'grouppage-steward' => '{{ns:project}}:Stewards',
	'group-coder' => 'Programmierdere',
	'group-coder-member' => 'Programmierder',
	'group-inactive' => 'Inaktive Benutsere',
	'group-inactive-member' => 'Inaktiven Benutser',
	'grouppage-inactive' => '{{ns:project}}:Inaktive Benutsere',
	'wikimedia-copyright' => 'Die Text is unner ju Lizenz <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.de">„Creative Commons Attribution/Share-Alike“</a> ferföigboar; Bedingengen uurhoop konnen anweendboar weese.
Eenpeldhaide sunt in do <a href="http://wikimediafoundation.org/wiki/Nutzungsbedingungen">Nutsengsbedingengen</a> beschrieuwen.',
	'wikimedia-copyrightwarning' => 'Mäd dät Spiekerjen lizenzierst du dien Beoarbaidenge sunner dät du dät touräächtraale koast unner ju [http://creativecommons.org/licenses/by-sa/3.0/deed.de „Creative Commons Attribution/Share-Alike“-Lizenz 3.0] un ju [http://www.gnu.org/copyleft/fdl.html GFDL].
Du stimst tou, dät ne Fääreferweendenge ap minste truch n Hyperlink of ne URL tou ju Siede, ju du beoarbaidest, geböäre duur.
Eenpeldhaide sunt in do [http://wikimediafoundation.org/wiki/Nutzungsbedingungen Nutsengsbedingengen] beschrieuwen.',
	'wikimedia-editpage-tos-summary' => 'Wan du nit moatest, dät dien Text fäärebeoarbaided un fääre fersprat wäd, dan spieker ju nit.
Fals du dän Text nit sälwen ferfoated hääst, mout er unner do 
[http://wikimediafoundation.org/wiki/Nutzungsbedingungen Nutsengsbedingengen] ferföichboar weese un du stimst tou, noodweendige Lizenzanfoarderengen tou foulgjen.',
);

/** Sundanese (Basa Sunda)
 * @author Irwangatot
 * @author Kandar
 */
$messages['su'] = array(
	'wikimediamessages-desc' => 'Talatah-talatah spesifik Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Penggalangan_dana',
	'sitesupport' => 'Sumbangan',
	'tooltip-n-sitesupport' => 'Bobotohan',
	'group-accountcreator' => 'Nu nyieun rekening',
	'group-founder' => 'Nu ngadegkeun',
	'group-import' => 'Importir',
	'group-ipblock-exempt' => 'Peungpeuk kajaba IP',
	'group-patroller' => 'Nu ngaronda',
	'group-rollbacker' => 'Malikeun révisi',
	'group-transwiki' => 'Importir transwiki',
	'group-accountcreator-member' => 'nu nyieun rekening',
	'group-founder-member' => 'nu ngadegkeun',
	'group-import-member' => 'importir',
	'group-ipblock-exempt-member' => 'Peungpeuk kajaba IP',
	'group-patroller-member' => 'Nu ngaronda',
	'group-rollbacker-member' => 'Malikeun révisi',
	'group-transwiki-member' => 'importir transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Nu nyieun rekening',
	'grouppage-founder' => '{{ns:project}}:Nu ngadegkeun',
	'grouppage-import' => '{{ns:project}}:Importir',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Peungpeuk kajaba IP',
	'grouppage-rollbacker' => '{{ns:project}}:Malikeun révisi',
	'grouppage-transwiki' => '{{ns:project}}:Importir transwiki',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Kuncén sistem',
	'group-Global_bot' => 'Bot global',
	'group-Global_rollback' => 'Malikeun révisi global',
	'group-Ombudsmen' => 'Ombudsman',
	'group-Staff' => 'Staf',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'kuncén sistem',
	'group-Global_bot-member' => 'bot global',
	'group-Global_rollback-member' => 'Malikeun révisi global',
	'group-Ombudsmen-member' => 'Ombudsman',
	'group-Staff-member' => 'Anggota staf',
	'grouppage-steward' => '{{ns:project}}:Steward',
);

/** Swedish (Svenska)
 * @author Ainali
 * @author Boivie
 * @author Fluff
 * @author Jon Harald Søby
 * @author Lejonel
 * @author M.M.S.
 * @author Najami
 * @author Per
 * @author Rotsee
 * @author Sannab
 * @author Sertion
 */
$messages['sv'] = array(
	'wikimediamessages-desc' => 'Wikimedia-specifika meddelanden',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/sv',
	'sitesupport' => 'Donera',
	'tooltip-n-sitesupport' => 'Stöd oss',
	'specialpages-group-contribution' => 'Bidrag/Insamling',
	'group-abusefilter' => 'Redigerare av missbruksfilter',
	'group-accountcreator' => 'Kontoskapare',
	'group-arbcom' => 'Medlemmar av förlikningskommitte',
	'group-autopatrolled' => 'Autopatrullerare',
	'group-autoreviewer' => 'Automatiska granskare',
	'group-bigexport' => 'Stora exporterare',
	'group-confirmed' => 'Bekräftade användare',
	'group-editprotected' => 'Redigerare av skyddade sidor',
	'group-filemover' => 'Filflyttare',
	'group-flood' => 'Bot användare',
	'group-founder' => 'Grundare',
	'group-import' => 'Importörer',
	'group-interface_editors' => 'Redigerare av gränssnitt',
	'group-ipblock-exempt' => 'Undantagna från IP-blockering',
	'group-patroller' => 'Patrullerare',
	'group-researcher' => 'Forskare',
	'group-rollbacker' => 'Tillbakarullare',
	'group-transwiki' => 'Transwiki-importörer',
	'group-trusted' => 'Betrodda användare',
	'group-abusefilter-member' => 'redigerare av missbruksfilter',
	'group-accountcreator-member' => 'kontoskapare',
	'group-arbcom-member' => 'medlem av förlikningskommitte',
	'group-autopatrolled-member' => 'autopatrullerare',
	'group-autoreviewer-member' => 'automatisk granskare',
	'group-bigexport-member' => 'stor exporterare',
	'group-confirmed-member' => 'bekräftad användare',
	'group-editprotected-member' => 'redigerare av skyddade sidor',
	'group-filemover-member' => 'filflyttare',
	'group-flood-member' => 'bot användare',
	'group-founder-member' => 'grundare',
	'group-import-member' => 'importör',
	'group-interface_editors-member' => 'redigerare av gränssnitt',
	'group-ipblock-exempt-member' => 'undantagen från IP-blockering',
	'group-patroller-member' => 'patrullerare',
	'group-researcher-member' => 'forskare',
	'group-rollbacker-member' => 'tillbakarullare',
	'group-transwiki-member' => 'transwiki-importör',
	'group-trusted-member' => 'betrodd användare',
	'grouppage-abusefilter' => '{{ns:project}}:Redigerare av missbruksfilter',
	'grouppage-accountcreator' => '{{ns:project}}:Kontoskapare',
	'grouppage-arbcom' => '{{ns:project}}:Förlikningskommittemedlemmar',
	'grouppage-autopatrolled' => '{{ns:project}}:Autopatrullerare',
	'grouppage-autoreviewer' => '{{ns:project}}:Automatiska granskare',
	'grouppage-bigexport' => '{{ns:project}}:Stora exporterare',
	'grouppage-confirmed' => '{{ns:project}}:Bekräftade användare',
	'grouppage-editprotected' => '{{ns:project}}:Redigerare av skyddade sidor',
	'grouppage-filemover' => '{{ns:project}}:Filflyttare',
	'grouppage-flood' => '{{ns:project}}:Bot användare',
	'grouppage-founder' => '{{ns:project}}:Grundare',
	'grouppage-import' => '{{ns:project}}:Importörer',
	'grouppage-interface_editors' => '{{ns:project}}:Redigerare av gränssnitt',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Undantagna från IP-blockering',
	'grouppage-researcher' => '{{ns:project}}:Forskare',
	'grouppage-rollbacker' => '{{ns:project}}:Tillbakarullare',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-importörer',
	'grouppage-trusted' => '{{ns:project}}:Betrodda användare',
	'group-steward' => 'Stewarder',
	'group-sysadmin' => 'Systemadministratörer',
	'group-editinterface' => 'Gränssnitts-redigeringar',
	'group-Global_bot' => 'Globala robotar',
	'group-Global_rollback' => 'Globala tillbakarullare',
	'group-Global_sysops' => 'Globala administratörer',
	'group-Ombudsmen' => 'Ombudsmän',
	'group-Staff' => 'Personal',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'systemadministratör',
	'group-editinterface-member' => 'gränssnitts-redigering',
	'group-Global_bot-member' => 'global robot',
	'group-Global_rollback-member' => 'global tillbakarullare',
	'group-Global_sysops-member' => 'global administratör',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'personal',
	'grouppage-steward' => 'm:Stewards/nb',
	'grouppage-Global_rollback' => 'm:Global rollback/nb',
	'group-coder' => 'Kodare',
	'group-coder-member' => 'kodare',
	'group-inactive' => 'Inaktiva användare',
	'group-inactive-member' => 'inaktiv användare',
	'grouppage-inactive' => '{{ns:project}}:Inaktiva användare',
	'wikimedia-copyright' => 'Text är tillgänglig under <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.sv">Creative Commons Erkännande-Dela Lika-licens</a>; ytterligare villkor kan gälla. Se <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Villkor</a> för detaljer.',
	'wikimedia-copyrightwarning' => 'Genom att spara släpper du oåterkalligen dina bidrag under [http://creativecommons.org/licenses/by-sa/3.0/deed.sv Creative Commons-licensen Erkännande-Dela Lika 3.0] och [http://www.gnu.org/copyleft/fdl.html GFDL].
Du går med på att bli krediterat av återanvändare med minst en hyperlänk eller URL till sidan du bidrar till.
Se [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] för mer upplysningar.',
	'wikimedia-editpage-tos-summary' => 'Om du inte vill att det du skriver ska bli redigerat och återanvänt ska du inte spara det här.
Om du inte själv skrev texten, så måste det vara tillgängligt under villkor som är i överensstämmelse med [http://wikimediafoundation.org/wiki/Terms_of_Use användarvillkoren], du bekräftar att du uppfyller alla relevanta licenskrav.',
);

/** Swahili (Kiswahili)
 * @author Lloffiwr
 * @author Malangali
 * @author לערי ריינהארט
 */
$messages['sw'] = array(
	'sitesupport' => 'Michango',
	'tooltip-n-sitesupport' => 'Tuunge mkono',
	'wikimedia-copyright' => 'Maandishi yanapatikana chini ya leseni ya <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>; matakwa mengine yanaweza kutakiwa.
Tazama maelezo zaidi ya <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Matakwa ya Utumiaji</a>.',
	'wikimedia-copyrightwarning' => 'Unapohifadhi maandishi yako, unakubali (kwa jinsi isiotenguka) mchango wako utolewe chini ya leseni ya [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] pamoja na [http://www.gnu.org/copyleft/fdl.html GFDL].
Unakubali utambuliwe wakati maandishi haya yatumika na wengine, angalau kwa nia ya kiungo (hyperlink) au URL kwenye ukurasa uliouchangia.
Tazama maelezo zaidi ya [http://wikimediafoundation.org/wiki/Terms_of_Use Matakwa ya Utumiaji].',
	'wikimedia-editpage-tos-summary' => 'Ikiwa hutaki maandashi yako yahaririwe na yatumike kwa hiari, basi usiyaweke hapa.
Ikiwa hukuandika mchango huu mwenyewe, lazima upatikane chini ya matakwa yanayolingana na [http://wikimediafoundation.org/wiki/Terms_of_Use Matakwa ya Utumiaji] yanayotumika hapa, na unakubali kufuata matakwa yeyote ya leseni yake.',
);

/** Silesian (Ślůnski)
 * @author Herr Kriss
 * @author Lajsikonik
 */
$messages['szl'] = array(
	'wikimediamessages-desc' => 'Kůmůńikaty ůńikalne lů projektůw Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/pl',
	'sitesupport' => 'Śćepa',
	'tooltip-n-sitesupport' => 'Wspůmůž nas',
	'group-accountcreator' => 'Tworzůncy kůnta',
	'group-founder' => 'Zołożyćele',
	'group-import' => 'Importery',
	'group-ipblock-exempt' => 'Uprowńyńi do logowańo śe s zawartych adresůw IP',
	'group-rollbacker' => 'Uprowńyńi do wycofywańo sprowjyń',
	'group-transwiki' => 'Importery transwiki',
	'group-accountcreator-member' => 'twůrca kůnt',
	'group-autopatrolled-member' => 'patrolujůncy autůmatyczńy',
	'group-founder-member' => 'zołożyćel',
	'group-import-member' => 'importer',
	'group-ipblock-exempt-member' => 'uprowńůny do logowańo śe s zawartego adresa IP',
	'group-rollbacker-member' => 'uprowńůny do wycofywańo sprowjyń',
	'group-transwiki-member' => 'importer transwiki',
	'grouppage-accountcreator' => '{{ns:project}}:Twůrcy kůnt',
	'grouppage-autopatrolled' => '{{ns:project}}:Patrolujůncy autůmatyczńy',
	'grouppage-founder' => '{{ns:project}}:Zołożyćele',
	'grouppage-import' => '{{ns:project}}:Importery',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Uprowńyńi do logowańo śe s zawartych adresůw IP',
	'grouppage-rollbacker' => '{{ns:project}}:Uprowńyńi do wycofywańo sprowjyń',
	'grouppage-transwiki' => '{{ns:project}}:Importery transwiki',
	'group-steward' => 'Stewardy',
	'group-sysadmin' => 'Admińistratory systymu',
	'group-Global_bot' => 'Boty globalne',
	'group-Global_rollback' => 'Globalńy uprowńyńi do wycofywańo sprowjyń',
	'group-Ombudsmen' => 'Rzeczńiki prow',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'admińistrator systyma',
	'group-Global_bot-member' => 'bot globalny',
	'group-Global_rollback-member' => 'globalńy uprowńony do wycofywańo sprowjyń',
	'group-Ombudsmen-member' => 'rzeczńik prow',
	'group-coder' => 'Programisty',
	'group-coder-member' => 'programista',
	'wikimedia-copyright' => 'Tekst je udostympńany na <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.pl">licencyji Creative Commons: uznańe autorstwa, na jednakich warunkach</a>, ze możebnośćům uobowjůnzywańo ekstra uograńiczyń.
Uobejzdrzij blank dokłodne informacyje uo <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">warunkach korzystańo</a>.',
	'wikimedia-copyrightwarning' => 'Bez spamjyntańe půmjyńań dowosz ńyodwołalno zgoda na udostympńańe Twojygo wkłodu na licencyjach [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons: uznańe autorstwa, na jednakich warůnkach, wersyja licencyji 3.0] a tyż na licencyji [http://www.gnu.org/copyleft/fdl.html GFDL]. Wyrażosz zgoda na wykorzystańe pod warunkem co najmnńyj podańo necowygo uodwołańo abo adresa URL do zajty na keryj powstoła treść. Uobejzdrzij blank dokładne informacyje uo [http://wikimediafoundation.org/wiki/Terms_of_Use warunkach korzystańo].',
	'wikimedia-editpage-tos-summary' => 'Eli ńy chcesz, coby Twůj tekst můg być dowolńe půmjyńany uod kożdygo a tyż rozpowszechńany bez uograńiczeńůw, ńy wćepuj go sam. Jeli tekst ńy uostoł naszkryflany uod Ćebje samygo, muśi uůn być dostympny pode zasadůma zgodnymi ze [http://wikimediafoundation.org/wiki/Terms_of_Use warunkami wykorzistańo] a muśisz dać zgoda na wszyjske istotne licencyjne wymogi.',
);

/** Tamil (தமிழ்)
 * @author Mayooranathan
 * @author Trengarasu
 */
$messages['ta'] = array(
	'sitesupport' => 'நன்கொடை',
	'tooltip-n-sitesupport' => 'நன்கொடைகளை வழங்குங்கள்',
);

/** Telugu (తెలుగు)
 * @author Chaduvari
 * @author Kiranmayee
 * @author Mpradeep
 * @author Ravichandra
 * @author Veeven
 */
$messages['te'] = array(
	'wikimediamessages-desc' => 'వికీమీడియా సంబంధిత సందేశాలు',
	'sitesupport' => 'విరాళములు',
	'tooltip-n-sitesupport' => 'మాకు తోడ్పడండి',
	'specialpages-group-contribution' => 'విరాళాలు/నిధుల సేకరణ',
	'group-abusefilter' => 'దుర్వినియోగ వడపోతన కూర్పరులు',
	'group-accountcreator' => 'ఖాతా తయారీదార్లు',
	'group-autoreviewer' => 'ఆటోరివ్యూవర్స్',
	'group-bigexport' => 'పెద్ద ఎగుమతిదారులు',
	'group-confirmed' => 'నిర్థారిత వాడుకరులు',
	'group-flood' => 'బాటు వాడుకరులు',
	'group-founder' => 'వ్యవస్థాపకులు',
	'group-import' => 'దిగుమతిదార్లు',
	'group-ipblock-exempt' => 'ఐపీ నిరోధపు మినహాయింపులు',
	'group-patroller' => 'పర్యవేక్షకులు',
	'group-rollbacker' => 'రద్దుచేసినవారు',
	'group-transwiki' => 'ట్రాన్స్ వికీ దిగుమతిదారులు',
	'group-trusted' => 'విశ్వసనీయ వాడుకరులు',
	'group-abusefilter-member' => 'దుర్వినియోగ వడపోతల కూర్పరి',
	'group-accountcreator-member' => 'ఖాతా సృష్టికర్త',
	'group-arbcom-member' => 'మధ్యవర్తిత్వ సంఘ సభ్యులు',
	'group-autopatrolled-member' => 'ఆటోపాట్రోలర్',
	'group-autoreviewer-member' => 'ఆటోరివ్యూవర్',
	'group-bigexport-member' => 'పెద్ద ఎగుమతిదారుడు',
	'group-confirmed-member' => 'నిర్ధారించబడిన వాడుకరి',
	'group-editprotected-member' => 'సంరక్షిత పుట కూర్పరి',
	'group-flood-member' => 'బాటు వాడుకరులు',
	'group-founder-member' => 'వ్యవస్థాపకుడు',
	'group-import-member' => 'దిగుమతిదారు',
	'group-interface_editors-member' => 'అంతర్ముఖి లేఖిని',
	'group-ipblock-exempt-member' => 'ఐపీ నిరోధపు మినహాయింపు',
	'group-patroller-member' => 'పర్యవేక్షకుడు',
	'group-researcher-member' => 'పరిశోధకుడు',
	'group-rollbacker-member' => 'రద్దుచేసినవారు',
	'group-transwiki-member' => 'ట్రాన్స్ వికీ దిగుమతిదారుడు',
	'group-trusted-member' => 'విశ్వసనీయ వాడుకరి',
	'grouppage-abusefilter' => '{{ns:project}}:దుర్వినియోగ వడపోతల కూర్పరులు',
	'grouppage-accountcreator' => '{{ns:project}}:ఖాతా సృష్టికర్తలు',
	'grouppage-arbcom' => '{{ns:project}}: మధ్యవర్తిత్వ సంఘ సభ్యులు',
	'grouppage-autoreviewer' => '{{ns:project}}: ఆటోరివ్యూవర్స్',
	'grouppage-bigexport' => '{{ns:project}}:పెద్ద ఎగుమతిదారులు',
	'grouppage-confirmed' => '{{ns:project}}:నిర్థారించబడిన వాడుకరులు',
	'grouppage-flood' => '{{ns:project}}:బాటు వాడుకరులు',
	'grouppage-founder' => '{{ns:project}}:వ్యవస్థాపకులు',
	'grouppage-import' => '{{ns:project}}:దిగుమతిదార్లు',
	'grouppage-ipblock-exempt' => '{{ns:project}}:ఐపీ నిరోధపు మినహాయింపు',
	'grouppage-rollbacker' => '{{ns:project}}:రద్దుచేసినవారు',
	'grouppage-transwiki' => '{{ns:project}}:ట్రాన్స్ వికీ దిగుమతిదార్లు',
	'grouppage-trusted' => '{{ns:project}}:విశ్వసనీయ వాడుకరులు',
	'group-steward' => 'స్టీవార్డులు',
	'group-sysadmin' => 'వ్యవస్థ నిర్వాహకులు',
	'group-editinterface' => 'ఇంటర్ఫేస్ ఎడిటర్లు',
	'group-Global_bot' => 'సార్వత్రిక బాట్లు',
	'group-Global_rollback' => 'విశ్వ వెనకకి మళ్లింపుదారులు',
	'group-Global_sysops' => 'సార్వత్రిక నిర్వాహకులు',
	'group-Ombudsmen' => 'అంబుడ్స్మెన్',
	'group-Staff' => 'సిబ్బంది',
	'group-steward-member' => 'స్టీవార్డు',
	'group-sysadmin-member' => 'నిర్వహణాధికారి',
	'group-editinterface-member' => 'ఇంటర్ఫేస్ ఎడిటరు',
	'group-Global_bot-member' => 'విశ్వ బాటు',
	'group-Global_rollback-member' => 'విశ్వ వెనకకి మళ్లింపుదారు',
	'group-Global_sysops-member' => 'సార్వత్రిక నిర్వాహకులు',
	'group-Ombudsmen-member' => 'అంబుడ్స్మన్',
	'group-Staff-member' => 'సిబ్బంది',
	'group-coder' => 'కోడర్లు',
	'group-coder-member' => 'కోడర్',
	'group-inactive' => 'అచేతన వాడుకరులు',
	'group-inactive-member' => 'అచేతన వాడుకరి',
	'grouppage-inactive' => '{{ns:project}}:అచేతన వాడుకరులు',
	'wikimedia-copyright' => 'పాఠ్యం <a href="http://creativecommons.org/licenses/by-sa/3.0/">క్రియేటివ్ కామన్స్ అట్రిబ్యూషన్/షేర్-అలైక్ లైసెన్సు</a> క్రింద లభ్యం;
అదనపు షరతులు వర్తించవచ్చు.
మరిన్ని వివరాలకు <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">వాడుక నియమాల</a>ను చూడండి.',
	'wikimedia-copyrightwarning' => 'దీన్ని భద్రపరచడం ద్వారా, మీ కృతిని [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] మరియు [http://www.gnu.org/copyleft/fdl.html GFDL] లకు లోబడి విడుదల చేసేందుకు మీరు సమ్మతిస్తున్నారు. ఇది వెనక్కి తిరిగి తీసుకోలేని అనుమతి అని మీరు ఎరుగుదురు.

కనీస స్థాయిలో మీరు పనిచేస్తున్న పేజీకి లింకు లేదా URL ఇవ్వడం ద్వారా దీన్ని వాడుకునేవారు మీకు శ్రేయస్సు నాపాదిస్తారు. ఇందుకు మీరు సమ్మతిస్తున్నారు.

వివరాల కోసం [http://wikimediafoundation.org/wiki/Terms_of_Use వినియోగ నియమాలు] చూడండి.',
	'wikimedia-editpage-tos-summary' => 'మీ రచనలను వేరొకరు మార్చకూడదు, పంచిపెట్టకూడదు అని మీరు అనుకుంటే, మీ రచనలను ఇక్కడ సమర్పించవద్దు. ఈ రచనకు మీరు స్వంతదారులు కాకపోతే ఇది [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] క్రింద ఇది సమర్పించబడి ఉండాలి. అలానే, సంబంధించిన లైసెన్స్ షరతులకు మీరు ఒప్పుకోవాలి.',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'sitesupport' => 'Fó donativu ida',
	'tooltip-n-sitesupport' => 'Tulun ami',
	'group-steward' => 'Steward sira',
	'group-steward-member' => 'Steward',
	'grouppage-steward' => '{{ns:project}}:Steward sira',
);

/** Tajik (Cyrillic) (Тоҷикӣ (Cyrillic))
 * @author Ibrahim
 * @author לערי ריינהארט
 */
$messages['tg-cyrl'] = array(
	'wikimediamessages-desc' => 'Пайғомҳои махсуси Викимедиа',
	'sitesupport' => 'Кӯмаки молӣ',
	'tooltip-n-sitesupport' => 'Моро дастгири намоед',
	'group-accountcreator' => 'Эҷодгарони ҳисоб',
	'group-founder' => 'Бунёдгузорон',
	'group-import' => 'Воридкунандагон',
	'group-ipblock-exempt' => 'Истиснои қатъи дастрасии нишонаи IP',
	'group-rollbacker' => 'Вогардоникунандагон',
	'group-transwiki' => 'Воридкунандагони трансвики',
	'group-accountcreator-member' => 'эҷодкунандаи ҳисоб',
	'group-autopatrolled-member' => 'гаштзани худкор',
	'group-founder-member' => 'асосгузор',
	'group-import-member' => 'воридкунанда',
	'group-ipblock-exempt-member' => 'Истиснои қатъи дастрасии нишонаи интернетӣ',
	'group-rollbacker-member' => 'вогардоникунанда',
	'group-transwiki-member' => 'воридкунандаи трансвики',
	'grouppage-accountcreator' => '{{ns:project}}:Созандагони ҳисоби корбарӣ',
	'grouppage-autopatrolled' => '{{ns:project}}:Гаштзанони худкор',
	'grouppage-founder' => '{{ns:project}}:Асосгузорон',
	'grouppage-import' => '{{ns:project}}:Воридкунандагон',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Истиснои қатъи дастрасии нишонаи IP',
	'grouppage-rollbacker' => '{{ns:project}}:Вогардоникунандагон',
	'grouppage-transwiki' => '{{ns:project}}:Воридкунандагони трансвики',
	'group-steward' => 'Википедон',
	'group-sysadmin' => 'Мудирони систем',
	'group-Global_bot' => 'Ботҳои саросарӣ',
	'group-Global_rollback' => 'Вогардоникунандагони саросарӣ',
	'group-Ombudsmen' => 'Додоварон',
	'group-steward-member' => 'википед',
	'group-sysadmin-member' => 'мудири систем',
	'group-Global_bot-member' => 'боти саросарӣ',
	'group-Global_rollback-member' => 'вогардоникунандаи саросарӣ',
	'group-Ombudsmen-member' => 'додовар',
	'group-coder' => 'барноманависон',
	'group-coder-member' => 'барноманавис',
	'group-inactive' => 'Корбарони ғайрифаъол',
	'group-inactive-member' => 'корбарони ғайрифаъол',
);

/** Tajik (Latin) (Тоҷикӣ (Latin))
 * @author Liangent
 */
$messages['tg-latn'] = array(
	'wikimediamessages-desc' => 'Pajƣomhoi maxsusi Vikimedia',
	'sitesupport' => 'Kūmaki molī',
	'tooltip-n-sitesupport' => 'Moro dastgiri namoed',
	'group-accountcreator' => 'Eçodgaroni hisob',
	'group-founder' => 'Bunjodguzoron',
	'group-import' => 'Voridkunandagon',
	'group-ipblock-exempt' => "Istisnoi qat'i dastrasiji nişonai IP",
	'group-rollbacker' => 'Vogardonikunandagon',
	'group-transwiki' => 'Voridkunandagoni transviki',
	'group-accountcreator-member' => 'eçodkunandai hisob',
	'group-autopatrolled-member' => 'gaştzani xudkor',
	'group-founder-member' => 'asosguzor',
	'group-import-member' => 'voridkunanda',
	'group-ipblock-exempt-member' => "Istisnoi qat'i dastrasiji nişonai internetī",
	'group-rollbacker-member' => 'vogardonikunanda',
	'group-transwiki-member' => 'voridkunandai transviki',
	'grouppage-accountcreator' => '{{ns:project}}:Sozandagoni hisobi korbarī',
	'grouppage-autopatrolled' => '{{ns:project}}:Gaştzanoni xudkor',
	'grouppage-founder' => '{{ns:project}}:Asosguzoron',
	'grouppage-import' => '{{ns:project}}:Voridkunandagon',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Istisnoi qat'i dastrasiji nişonai IP",
	'grouppage-rollbacker' => '{{ns:project}}:Vogardonikunandagon',
	'grouppage-transwiki' => '{{ns:project}}:Voridkunandagoni transviki',
	'group-steward' => 'Vikipedon',
	'group-sysadmin' => 'Mudironi sistem',
	'group-Global_bot' => 'Bothoi sarosarī',
	'group-Global_rollback' => 'Vogardonikunandagoni sarosarī',
	'group-Ombudsmen' => 'Dodovaron',
	'group-steward-member' => 'vikiped',
	'group-sysadmin-member' => 'mudiri sistem',
	'group-Global_bot-member' => 'boti sarosarī',
	'group-Global_rollback-member' => 'vogardonikunandai sarosarī',
	'group-Ombudsmen-member' => 'dodovar',
	'group-coder' => 'barnomanavison',
	'group-coder-member' => 'barnomanavis',
	'group-inactive' => "Korbaroni ƣajrifa'ol",
	'group-inactive-member' => "korbaroni ƣajrifa'ol",
);

/** Thai (ไทย)
 * @author Manop
 * @author Mopza
 * @author Octahedron80
 * @author Passawuth
 * @author Woraponboonkerd
 */
$messages['th'] = array(
	'wikimediamessages-desc' => 'ข้อความเฉพาะของวิกิมีเดีย',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/th',
	'sitesupport' => 'สนับสนุน',
	'tooltip-n-sitesupport' => 'สนับสนุนเรา',
	'specialpages-group-contribution' => 'การบริจาค/ระดมทุน',
	'group-abusefilter' => 'บรรณาธิการกลั่นกรองการใช้ที่ไม่เหมาะสม',
	'group-accountcreator' => 'ผู้สร้างบัญชีผู้ใช้',
	'group-autopatrolled' => 'ผู้ตรวจการอัติโนมัติ',
	'group-autoreviewer' => 'ผู้ตรวจสอบอัติโนมัติ',
	'group-confirmed' => 'ผู้ใช้ที่ยืนยันแล้ว',
	'group-flood' => 'ผู้ใช้ที่เป็นบอต',
	'group-founder' => 'ผู้ก่อตั้ง',
	'group-import' => 'ผู้นำเข้า',
	'group-ipblock-exempt' => 'การยกเว้นการระงับหมายเลขไอพี',
	'group-patroller' => 'ผู้ตรวจการ',
	'group-rollbacker' => 'ผู้ย้อนสถานะ',
	'group-trusted' => 'ผู้ใช้ที่เชื่อถือได้',
	'group-accountcreator-member' => 'ผู้สร้างบัญชีผู้ใช้',
	'group-autopatrolled-member' => 'ผู้ตรวจการอัติโนมัติ',
	'group-autoreviewer-member' => 'ผู้ตรวจสอบอัติโนมัติ',
	'group-confirmed-member' => 'ผู้ใช่ที่ยืนยันแล้ว',
	'group-flood-member' => 'ผู้ใช้ที่เป็นบอต',
	'group-founder-member' => 'ผู้ก่อตั้ง',
	'group-ipblock-exempt-member' => 'หมายเลขไอพีที่ยกเว้นจากการระงับ',
	'group-patroller-member' => 'ผู้ตรวจการ',
	'group-rollbacker-member' => 'ผู้ย้อนสถานะ',
	'group-trusted-member' => 'ผู้ใช้ที่เชื่อถือได้',
	'grouppage-abusefilter' => '{{ns:project}}:บรรณาธิการกลั่นกรองการใช้ที่ไม่ถูกต้อง',
	'grouppage-accountcreator' => '{{ns:project}}:ผู้สร้างบัญชีผู้ใช้',
	'grouppage-autopatrolled' => '{{ns:project}}:ผู้ตรวจการอัติโนมัติ',
	'grouppage-autoreviewer' => '{{ns:project}}:ผู้ตรวจสอบอัติโนมัติ',
	'grouppage-confirmed' => '{{ns:project}}:ผู้ใช้ที่ยืนยันแล้ว',
	'grouppage-flood' => '{{ns:project}}:ผู้ใช้ที่เป็นบอต',
	'grouppage-founder' => '{{ns:project}}:ผู้ร่วมก่อตั้ง',
	'grouppage-rollbacker' => '{{ns:project}}:ผู้ย้อนสถานะ',
	'grouppage-trusted' => '{{ns:project}}:ผู้ใช้ที่เชื่อถือได้',
	'group-steward' => 'ผู้ดูแลโครงการ',
	'group-sysadmin' => 'ผู้ดูแลระบบ',
	'group-Ombudsmen' => 'ผู้ตรวจการ',
	'group-Staff' => 'ผู้แปล',
	'group-steward-member' => 'ผู้ดูแลโครงการ',
	'group-sysadmin-member' => 'ผู้ดูแลระบบ',
	'group-Ombudsmen-member' => 'ผู้ตรวจการ',
	'group-Staff-member' => 'ทีมงาน',
	'group-inactive' => 'ผู้ใช้ที่ใช้ไม่สม่ำเสมอ',
	'group-inactive-member' => 'ผู้ใช้ที่ใช้ไม่สม่ำเสมอ',
	'grouppage-inactive' => '{{ns:project}}:ผู้ใช้ไม่ประจำ',
	'wikimedia-copyright' => 'ตัวอักษรนี้อยู่ภายใต้<a href="http://creativecommons.org/licenses/by-sa/3.0/">สัญญาอนุญาตครีเอทีฟ คอมมอนส์/สัญญาแบบ Share-Alike</a>;
และอาจจะมีข้อเพิ่มเติมอื่นๆ
กรุณาดู<a href="http://wikimediafoundation.org/wiki/Terms_of_Use">สิทธิ์การใช้งาน</a>สำหรับรายละเอียดเพิ่มเติม',
	'wikimedia-editpage-tos-summary' => 'ถ้าคุณไม่ต้องการให้งานเขียนของคุณถูกแก้ไขแม้แต่นิดเดียว กรุณาอย่าส่งงานเขียนที่นี่
ถ้าคุณไม่ได้เขียนงานนี้ด้วยตัวคุณเอง งานเขียนต้องสามารถอยู่ภายใต้ [http://wikimediafoundation.org/wiki/Terms_of_Use สิทธิ์การใช้] และคุณต้องยินดีกระทำตามควมต้องการของสัญญาอนุญาตทั้งหมด',
);

/** Turkmen (Türkmençe)
 * @author Hanberke
 * @author Runningfridgesrule
 */
$messages['tk'] = array(
	'wikimediamessages-desc' => 'Wikimedia ýörite habarlaşyklary',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/en?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'Haýyr-sawahatlar',
	'tooltip-n-sitesupport' => 'Bizi goldaň',
	'specialpages-group-contribution' => 'Goşantlar/Fond ýygnaýjy',
	'group-abusefilter' => 'Erbet ulanmak filtr redaktorlary',
	'group-accountcreator' => 'Hasap döredijiler',
	'group-autopatrolled' => 'Awtopatrullar',
	'group-autoreviewer' => 'Awto gözden geçirijiler',
	'group-bigexport' => 'Iri eksportirleýjiler',
	'group-confirmed' => 'Tassyklanylan ulanyjylar',
	'group-flood' => 'Bot ulanyjylary',
	'group-founder' => 'Esaslandyryjylar',
	'group-import' => 'Importirleýjiler',
	'group-ipblock-exempt' => 'IP blokirleme daş tutmalary',
	'group-patroller' => 'Patrullar',
	'group-rollbacker' => 'Öňki katdyna getirijiler',
	'group-transwiki' => 'Wikiara importirleýjiler',
	'group-trusted' => 'Ynamdar ulanyjylar',
	'group-abusefilter-member' => 'erbet ulanmak filtr redaktory',
	'group-accountcreator-member' => 'hasap dörediji',
	'group-autopatrolled-member' => 'awtopatrullar',
	'group-autoreviewer-member' => 'awto gözden geçiriji',
	'group-bigexport-member' => 'iri eksportirleýji',
	'group-confirmed-member' => 'tassyklanylan ulanyjy',
	'group-flood-member' => 'bot ulanyjysy',
	'group-founder-member' => 'esaslandyryjy',
	'group-import-member' => 'importirleýji',
	'group-ipblock-exempt-member' => 'IP blokirleme daş tutmasy',
	'group-patroller-member' => 'patrul',
	'group-rollbacker-member' => 'öňki katdyna getiriji',
	'group-transwiki-member' => 'wikiara importirleýjisi',
	'group-trusted-member' => 'ynamdar ulanyjy',
	'grouppage-abusefilter' => '{{ns:project}}:Erbet ulanmak filtr redaktorlary',
	'grouppage-accountcreator' => '{{ns:project}}:Hasap döredijiler',
	'grouppage-autopatrolled' => '{{ns:project}}:Awtopatrullar',
	'grouppage-autoreviewer' => '{{ns:project}}:Awtogözegçiler',
	'grouppage-bigexport' => '{{ns:project}}:Iri eksportirleýjiler',
	'grouppage-confirmed' => '{{ns:project}}:Tassyklanylan ulanyjylar',
	'grouppage-flood' => '{{ns:project}}:Bot ulanyjylary',
	'grouppage-founder' => '{{ns:project}}:Esaslandyryjylar',
	'grouppage-import' => '{{ns:project}}:Importirleýjiler',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP blokirleme daş tutmasy',
	'grouppage-rollbacker' => '{{ns:project}}:Öňki katdyna getirijiler',
	'grouppage-transwiki' => '{{ns:project}}:Wikiara importirleýjiler',
	'grouppage-trusted' => '{{ns:project}}:Ynamdar ulanyjylar',
	'group-steward' => 'Stýuardlar',
	'group-sysadmin' => 'Ulgam administratorlary',
	'group-editinterface' => 'Interfeýs redaktorlary',
	'group-Global_bot' => 'Global botlar',
	'group-Global_rollback' => 'Global öňki katdyna getirijiler',
	'group-Ombudsmen' => 'Ombudsmenler',
	'group-Staff' => 'Işgärler',
	'group-steward-member' => 'stýuard',
	'group-sysadmin-member' => 'ulgam administratory',
	'group-editinterface-member' => 'interfeýs redaktory',
	'group-Global_bot-member' => 'global bot',
	'group-Global_rollback-member' => 'global öňki katdyna getiriji',
	'group-Ombudsmen-member' => 'ombudsmen',
	'group-Staff-member' => 'işgär',
	'group-coder' => 'Kodirleýjiler',
	'group-coder-member' => 'kodirleýji',
	'group-inactive' => 'Işjeň däl ulanyjylar',
	'group-inactive-member' => 'işjeň däl ulanyjy',
	'grouppage-inactive' => '{{ns:project}}:Işjeň däl ulanyjylar',
	'wikimedia-copyright' => 'Tekst <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike lisenziýasyna</a> laýyklykda elýeterlidir; goşmaça şertler bolmagy mümkin. Jikme-jiklikler üçin <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Ulanyş şertleri</a>ne serediň.',
	'wikimedia-copyrightwarning' => 'Ýazdyrmak bilen, goşandyňyzyň yzyna alyp bolmajak ýagdaýda [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] we [http://www.gnu.org/copyleft/fdl.html GFDL] boýunça neşir edilmegine ylalaşýarsyňyz. Bu mazmuny ulanjaklaryň size iň bolmanda goşant eden sahypaňyzyň URL çykgydy bilen salgylanjakdygyny hem kabul edýärsiňiz. Jikme-jiklikler üçin [http://wikimediafoundation.org/wiki/ Ulanyş şertlerine] serediň.',
	'wikimedia-editpage-tos-summary' => 'Eger işiňiziň arkaýyn redaktirlenmegini ýa-da paýlanylmagyny islemeýän bolsaňyz, onda bu ýere tabşyrmaň.  
Eger muny özüňiz ýazmadyk bolsaňyz, onda ol [http://wikimediafoundation.org/wiki/Terms_of_Use Ulanyş şertlerine] laýyk gelmelidir. Siz haýsydyr bir degişli lisenziýa talabyny berjaý etmäge ylalaşýarsyňyz.',
);

/** Tagalog (Tagalog)
 * @author AnakngAraw
 * @author לערי ריינהארט
 */
$messages['tl'] = array(
	'wikimediamessages-desc' => 'Tiyak na mga mensahe ng Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/Now/en?utm_source=donate&utm_medium=sidebar&utm_campaign=spontaneous_donation',
	'sitesupport' => 'Mag-ambag',
	'tooltip-n-sitesupport' => 'Tangkilikin kami',
	'specialpages-group-contribution' => 'Mga ambag/Pangangalap ng salaping panustos',
	'group-abusefilter' => 'Mga patnugot ng pansala ng pang-aabuso',
	'group-accountcreator' => 'Mga tagapalikha ng kuwenta/akawnt',
	'group-arbcom' => 'Mga kasapi sa lupon ng arbitrasyon',
	'group-autopatrolled' => 'Mga kusang tagapatrolya',
	'group-autoreviewer' => 'Mga kusang tagapagsuri',
	'group-bigexport' => 'Malalaking mga tagapagluwas',
	'group-confirmed' => 'Natiyak na mga tagagamit',
	'group-editprotected' => 'Mga patnugot ng pahinang nakaprutekta',
	'group-filemover' => 'Mga tagapaglipat ng talaksan',
	'group-flood' => 'Mga tagagamit ng bot',
	'group-founder' => 'Mga tagapagtatag',
	'group-import' => 'Mga tagapagangkat',
	'group-interface_editors' => 'Mga patnugot ng hangganang-mukha',
	'group-ipblock-exempt' => 'Mga hindi kasali sa paghaharang/paghahadlang ng IP',
	'group-patroller' => 'Mga tagapatrolya',
	'group-researcher' => 'Mga mananaliksik',
	'group-rollbacker' => 'Mga tagagpagpagulong pabalik sa dati',
	'group-transwiki' => 'Mga tagapagangkat na panglipat-wiki/transwiki',
	'group-trusted' => 'Pinagkakatiwalaang mga tagagamit',
	'group-abusefilter-member' => 'patnugot ng pansala ng pang-aabuso',
	'group-accountcreator-member' => 'tagapaglikha ng kuwenta/akawnt',
	'group-arbcom-member' => 'kasapi sa lupon ng arbitrasyon',
	'group-autopatrolled-member' => 'kusang tagapatrolya/awtopatrolyador',
	'group-autoreviewer-member' => 'kusang tagapagsuri',
	'group-bigexport-member' => 'malaking tagapagluwas',
	'group-confirmed-member' => 'natiyak na tagagamit',
	'group-editprotected-member' => 'patnugot ng pahinang nakaprutekta',
	'group-filemover-member' => 'tagapaglipat ng talaksan',
	'group-flood-member' => 'tagagamit ng bot',
	'group-founder-member' => 'tagapagtatag',
	'group-import-member' => 'tagapagangkat',
	'group-interface_editors-member' => 'patnugot ng hangganang-mukha',
	'group-ipblock-exempt-member' => 'Hindi kasali sa pagharang/paghadlang ng IP',
	'group-patroller-member' => 'tagapatrolya',
	'group-researcher-member' => 'mananaliksik',
	'group-rollbacker-member' => 'tagapagpagulong pabalik sa dati',
	'group-transwiki-member' => 'tagapagangkat na pangtranswiki/lipat-wiki',
	'group-trusted-member' => 'pinagkakatiwalaang tagagamit',
	'grouppage-abusefilter' => '{{ns:project}}:Mga patnugot ng pansala ng pang-aabuso',
	'grouppage-accountcreator' => '{{ns:project}}:Mga tagapaglikha ng akawnt/kuwenta',
	'grouppage-arbcom' => '{{ns:project}}:Mga kasapi sa lupon ng arbitrasyon',
	'grouppage-autopatrolled' => '{{ns:project}}:Mga awtopatrolyador',
	'grouppage-autoreviewer' => '{{ns:project}}:Kusang tagapagsuri',
	'grouppage-bigexport' => '{{ns:project}}:Malalaking mga tagapagluwas',
	'grouppage-confirmed' => '{{ns:project}}:Natiyak na mga tagagamit',
	'grouppage-editprotected' => '{{ns:project}}:Mga patnugot ng mga pahinang nakaprutekta',
	'grouppage-filemover' => '{{ns:project}}:Mga tagapaglipat ng talaksan',
	'grouppage-flood' => '{{ns:project}}:Mga tagagamit ng bot',
	'grouppage-founder' => '{{ns:project}}:Mga tagapagtatag',
	'grouppage-import' => '{{ns:project}}:Mga tagapagangkat',
	'grouppage-interface_editors' => '{{ns:project}}:Mga patnugot ng hangganang-mukha',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Hind kasali sa paghadlang na pang-IP',
	'grouppage-researcher' => '{{ns:project}}:Mga mananaliksik',
	'grouppage-rollbacker' => '{{ns:project}}:Mga tagapagpagulong pabalik sa dati',
	'grouppage-transwiki' => '{{ns:project}}:Mga tagapagangkat na pangtranswiki/panglipat-wiki',
	'grouppage-trusted' => '{{ns:project}}:Pinagkakatiwalaang mga tagagamit',
	'group-steward' => 'Mga bandahali',
	'group-sysadmin' => 'Mga tagapangasiwa ng sistema',
	'group-editinterface' => 'Mga patnugot ng hangganang-mukha',
	'group-Global_bot' => "Pandaigdigang mga ''bot''",
	'group-Global_rollback' => 'Pandaigdigang mga tagapagpagulong pabalik sa dati',
	'group-Global_sysops' => 'Pandaigdigang mga tagapagpaandar ng sistema',
	'group-Ombudsmen' => 'Mga tanod-bayan',
	'group-Staff' => 'Mga tauhan',
	'group-steward-member' => 'bandahali',
	'group-sysadmin-member' => 'tagapangasiwa ng sistema',
	'group-editinterface-member' => 'patnugot ng hangganang-mukha',
	'group-Global_bot-member' => "pandaigdigang ''bot''",
	'group-Global_rollback-member' => 'pandaigdigang tagapagpagulong pabalik sa dati',
	'group-Global_sysops-member' => 'Pandaigdigang tagapagpaandar ng sistema',
	'group-Ombudsmen-member' => 'tanod-bayan',
	'group-Staff-member' => 'kasaping tauhan',
	'grouppage-steward' => 'm:Mga bandahali',
	'grouppage-sysadmin' => 'm:Mga tagapangasiwa ng sistema',
	'grouppage-Global_rollback' => 'm:Pandaigdigang pagpapagulong-pabalik sa dati',
	'grouppage-Ombudsmen' => 'm:Komisyon ng tanod-bayan',
	'group-coder' => 'Mga tagapagkodigo',
	'group-coder-member' => 'tagapagkodigo',
	'grouppage-coder' => 'Project:Tagapagkodigo',
	'group-inactive' => 'Hindi masiglang mga tagagamit',
	'group-inactive-member' => 'hindi masiglang tagagamit',
	'grouppage-inactive' => '{{ns:project}}:Hindi masiglang mga tagagamit',
	'wikimedia-copyright' => 'Makukuha ang teksto sa ilalim ng <a href="http://creativecommons.org/licenses/by-sa/3.0/">Lisensyang Creative Commons Attribution/Share-Alike</a>;
maaaring gamitan ng karagdagan pang mga patakaran.
See <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Terms of Use</a> for details.',
	'wikimedia-copyrightwarning' => 'Sa pamamagitan ng pagsagip, pumapayag ka sa hindi na mababagong paglalabas ng ambag mo sa ilalim ng [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] at  [http://www.gnu.org/copyleft/fdl.html GFDL].
Pumapayag kang banggitin ng mga muling-tagagamit, sa pinakamababa, sa pamamagitan ng isang hiper-kawing o URL sa pahinang inaambagan mo.
Tingnan ang [http://wikimediafoundation.org/wiki/Terms_of_Use Mga Patakaran sa Paggamit] para sa mga detalye.',
	'wikimedia-editpage-tos-summary' => 'Kung ayaw mong mabago ang naisulat mo at ipamahagi ayon sa kagustuhan, kung gayon huwag ipasa iyon dito.
Kung hindi ikaw ang nagsulat nito, dapat itong magamit sa ilalim ng mga patakarang umaayon sa [http://wikimediafoundation.org/wiki/Terms_of_Use Mga Patakaran sa Paggamit], at pumapayag kang sumunod sa anumang kaugnay na mga pangangailangang panglisensya.',
);

/** Tswana (Setswana)
 * @author Hakka
 */
$messages['tn'] = array(
	'sitesupport' => 'Dimpho',
);

/** Tonga (lea faka-Tonga) */
$messages['to'] = array(
	'sitesupport' => 'Ngaahi meʻa ʻofa',
	'group-steward' => 'Kau setuate',
	'group-steward-member' => 'Setuate',
);

/** Toki Pona (Toki Pona) */
$messages['tokipona'] = array(
	'sitesupport' => 'o pana e mani',
);

/** Tok Pisin (Tok Pisin)
 * @author לערי ריינהארט
 */
$messages['tpi'] = array(
	'sitesupport' => 'Givim moni',
);

/** Turkish (Türkçe)
 * @author Joseph
 * @author Karduelis
 * @author Metal Militia
 */
$messages['tr'] = array(
	'wikimediamessages-desc' => 'Vikimedya özel mesajları',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/tr',
	'sitesupport' => 'Bağışlar',
	'tooltip-n-sitesupport' => 'Bizi destekleyin',
	'specialpages-group-contribution' => 'Katkı/Fonsağlayıcı',
	'group-abusefilter' => 'Suistimal filtresi editörleri',
	'group-accountcreator' => 'Hesap oluşturucular',
	'group-arbcom' => 'Tahkim heyeti üyeleri',
	'group-autopatrolled' => 'Oto-devriyeler',
	'group-autoreviewer' => 'Oto-inceleyici',
	'group-bigexport' => 'Büyük ihraççılar',
	'group-confirmed' => 'Onaylı kullanıcılar',
	'group-editprotected' => 'Korumalı sayfa yazarları',
	'group-filemover' => 'Dosya taşıyıcılar',
	'group-flood' => 'Bot kullanıcıları',
	'group-founder' => 'Kurucular',
	'group-import' => 'İçe aktarıcılar',
	'group-interface_editors' => 'Arayüz editörleri',
	'group-ipblock-exempt' => 'IP engelleme muafiyetleri',
	'group-patroller' => 'Devriyeler',
	'group-researcher' => 'Araştırmacılar',
	'group-rollbacker' => 'Geri döndürücüler',
	'group-transwiki' => 'Vikilerarası içe aktarıcılar',
	'group-trusted' => 'Güvenilir kullanıcılar',
	'group-abusefilter-member' => 'Suistimal filtresi editörü',
	'group-accountcreator-member' => 'Hesap oluşturucu',
	'group-arbcom-member' => 'tahkim heyeti üyesi',
	'group-autopatrolled-member' => 'Oto-devriye',
	'group-autoreviewer-member' => 'Oto-inceleyici',
	'group-bigexport-member' => 'Büyük ihraççı',
	'group-confirmed-member' => 'Onaylı kullanıcı',
	'group-editprotected-member' => 'korumalı sayfa yazarı',
	'group-filemover-member' => 'dosya taşıyıcı',
	'group-flood-member' => 'bot kullanıcıları',
	'group-founder-member' => 'Kurucu',
	'group-import-member' => 'İçe aktarıcı',
	'group-interface_editors-member' => 'arayüz editörü',
	'group-ipblock-exempt-member' => 'IP engelleme muafı',
	'group-patroller-member' => 'Devriye',
	'group-researcher-member' => 'araştırmacı',
	'group-rollbacker-member' => 'Geri döndürücü',
	'group-transwiki-member' => 'Vikilerarası içe aktarıcı',
	'group-trusted-member' => 'güvenilir kullanıcı',
	'grouppage-abusefilter' => '{{ns:project}}:Suistimal filtresi editörleri',
	'grouppage-accountcreator' => '{{ns:project}}:Hesap oluşturucular',
	'grouppage-arbcom' => '{{ns:project}}:Tahkim heyeti üyeleri',
	'grouppage-autopatrolled' => '{{ns:project}}:Oto-devriye',
	'grouppage-autoreviewer' => '{{ns:project}}:Oto-eleştirmenler',
	'grouppage-bigexport' => '{{ns:project}}:Büyük ihraççılar',
	'grouppage-confirmed' => '{{ns:project}}:Onaylı kullanıcılar',
	'grouppage-editprotected' => '{{ns:project}}:Korumalı sayfa yazarı',
	'grouppage-filemover' => '{{ns:project}}:Dosya taşıyıcılar',
	'grouppage-flood' => '{{ns:project}}:Bot kullanıcıları',
	'grouppage-founder' => '{{ns:project}}:Kurucular',
	'grouppage-import' => '{{ns:project}}:İçe aktarıcılar',
	'grouppage-interface_editors' => '{{ns:project}}:Arayüz editörleri',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP engelleme muafiyeti',
	'grouppage-researcher' => '{{ns:project}}:Araştırmacılar',
	'grouppage-rollbacker' => '{{ns:project}}:Geri döndürücüler',
	'grouppage-transwiki' => '{{ns:project}}:Vikilerarası içe aktarıcılar',
	'grouppage-trusted' => '{{ns:project}}:Güvenilir kullanıcılar',
	'group-steward' => 'Kâhyalar',
	'group-sysadmin' => 'Sistem yöneticileri',
	'group-editinterface' => 'Arayüzey editörleri',
	'group-Global_bot' => 'Küresel botlar',
	'group-Global_rollback' => 'Küresel geri döndürücüler',
	'group-Global_sysops' => 'Küresel hizmetliler',
	'group-Ombudsmen' => 'Bağımsız hakemler',
	'group-Staff' => 'Görevliler',
	'group-steward-member' => 'Kâhya',
	'group-sysadmin-member' => 'Sistem yöneticisi',
	'group-editinterface-member' => 'arayüz editörü',
	'group-Global_bot-member' => 'Küresel bot',
	'group-Global_rollback-member' => 'Küresel geri döndürücü',
	'group-Global_sysops-member' => 'küresel hizmetli',
	'group-Ombudsmen-member' => 'Bağımsız hakem',
	'group-Staff-member' => 'Görevli',
	'grouppage-steward' => '{{ns:project}}:Stewardlar',
	'grouppage-sysadmin' => 'm:Sistem yöneticileri',
	'group-coder' => 'Kodlayıcılar',
	'group-coder-member' => 'Kodlayıcı',
	'group-inactive' => 'Etkin olmayan kullanıcılar',
	'group-inactive-member' => 'Etkin olmayan kullanıcı',
	'grouppage-inactive' => '{{ns:project}}:Etkin olmayan kullanıcılar',
	'shared-repo-name-shared' => 'Vikipedi Commons',
	'wikimedia-copyright' => 'Metin <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike Lisansı</a> altındadır; ek koşullar uygulanabilir. Ayrıntılar için <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Kullanım Koşulları</a>na bakın.',
	'wikimedia-copyrightwarning' => 'Sayfayı kaydetmekle katkınızı geri dönülmez şekilde [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] ve [http://www.gnu.org/copyleft/fdl.html GFDL] ile lisanslamayı kabul etmiş olacaksınız. Böylece içeriği daha sonra kullananların size en azından katkıda bulunduğunuz sayfanın url cinsinden bağlantısıyla atıfta bulunacağını da kabul etmiş olursunuz. Ayrıntılar için [http://wikimediafoundation.org/wiki/ Kullanım Koşullarına] bakınız.',
	'wikimedia-editpage-tos-summary' => 'Eğer yazınızın istendiğinde değiştirilmesini ya da yeniden dağıtılmasını istemiyorsanız, burada göndermeyiniz.
Eğer bunu siz yazmadıysanız, yazınız [http://wikimediafoundation.org/wiki/Terms_of_Use Kullanım Koşulları] ile uyumlu şartlar altında olmalıdır, ve herhangi bir ilgili lisans gereksinimine uymayı kabul ediyorsunuz.',
);

/** Tsonga (Xitsonga)
 * @author Thuvack
 */
$messages['ts'] = array(
	'sitesupport' => 'Nyikela mali',
	'tooltip-n-sitesupport' => 'Hi seketeli',
);

/** Tatar (Cyrillic) (Татарча/Tatarça (Cyrillic))
 * @author Rinatus
 * @author Timming
 * @author Ерней
 * @author Рашат Якупов
 */
$messages['tt-cyrl'] = array(
	'sitesupport' => 'Иганә',
	'tooltip-n-sitesupport' => 'Безгә ярдәм итегез',
	'group-patroller-member' => 'тикшерүче',
	'group-trusted-member' => 'ышанычлы кулланучы',
	'grouppage-flood' => '{{ns:project}}:Кулланучы-ботлар',
	'grouppage-founder' => '{{ns:project}}:Нигезчеләр',
	'grouppage-import' => '{{ns:project}}:Импортчылар',
	'grouppage-interface_editors' => '{{ns:project}}:Интерфейс тәрҗемәчеләре',
	'group-steward' => 'Стюардлар',
	'group-sysadmin' => 'Система идарәчеләре',
	'group-editinterface' => 'Интерфейс тәрҗемәчеләре',
	'group-Global_bot' => 'Глобаль ботлар',
	'group-steward-member' => 'стюард',
	'group-sysadmin-member' => 'система идарәчесе',
	'group-inactive' => 'Актив булмаган катнашучылар',
	'wikimedia-copyright' => 'Текст <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a> лицензиясе астында бирелә, аерым очракларда өстәмә шартлар эшләргә мөмкин. Өстәмә мәгълүмат өчен <a href="http://wikimediafoundation.org/wiki/Terms_of_Use/ru">Куллану шартларын</a> карагыз.',
	'wikimedia-copyrightwarning' => "Үзгәртүләрне саклаган вакытта, сез аларның [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike License 3.0] һәм [http://www.gnu.org/copyleft/fdl.html GFDL] лицензияләре таләпләре буенча публикацияләвенә риза буласыз. Бу битне кулланганда, сезгә иң киме гиперсылтама яки бит URL'ы аша сылтама куелуга риза буласыз. Тулырак мәгълүмат өчен [http://wikimediafoundation.org/wiki/Terms_of_Use Terms of Use] битен карагыз.",
	'wikimedia-editpage-tos-summary' => 'Сез текстларыгыз ирекле рәвештә төзәтелүенне һәм теләгәннәр тарафыннан таратылуынны теләмәсәгез, аларны монда урнаштырмагыз.
Сез язган текстның авторы булмасагыз, текст [http://wikimediafoundation.org/wiki/Terms_of_Use/ Куллану шартлары] белән килешкән шартларга туры килергә тиеш, һәм Сез лицензиянең таләпләренә буйсынырга килешәсез.',
);

/** Tatar (Latin) (Татарча/Tatarça (Latin)) */
$messages['tt-latn'] = array(
	'sitesupport' => 'Ximäyäçegä',
);

/** Tahitian (Reo Mā`ohi) */
$messages['ty'] = array(
	'sitesupport' => 'Pūpū i te ō',
);

/** Tuvinian (Тыва дыл) */
$messages['tyv'] = array(
	'sitesupport' => 'Белектер',
);

/** Udmurt (Удмурт)
 * @author Kaganer
 * @author ОйЛ
 */
$messages['udm'] = array(
	'sitesupport' => 'Проектлы юрттон',
	'wikimedia-copyrightwarning' => "!!Ваньзэ, мае тӥ гожтоды та статьяе, пыраклы кылёз таӵе лицензиос улын — [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0] но [http://www.gnu.org/copyleft/fdl.html GFDL]. 
Тыро-быдогес со сярысь лыдӟе [http://wikimediafoundation.org/wiki/Terms_of_Use/ru Викимедиа проектъёсын ужан условиос] статьяын. '''Ноку эн пыртэ Википедие автор правоен утем материалъёсты!''' Википедиын со туж бадӟым сьӧлыкен лыдъяське. Википедие гожъяса, тӥ асьтэлэн автор правоостылэсь куштӥськоды.",
	'wikimedia-editpage-tos-summary' => 'Тӥлесьтыд татчы кельтэм тесктъёстэс котькудӥз адямилэн тупатыны но вӧлмытыны правоен ванен тӥ соглаш ӧвӧл ке, татчы номыр эн гожъялэ! 
Мукет адямилэсь текстсэ тытчы пыртэмды ке потэ, [http://wikimediafoundation.org/wiki/Terms_of_Use/ru Викимедиа проектъёсын ужан условиослы] но лицензиослэн условиоссылы тупамзэ чакласа возе!',
);

/** Uighur (Uyghurche‎ / ئۇيغۇرچە) */
$messages['ug'] = array(
	'sitesupport' => 'Iana Toplash',
);

/** ئۇيغۇرچە (ئۇيغۇرچە)
 * @author Sahran
 */
$messages['ug-arab'] = array(
	'wikimediamessages-desc' => 'Wikimedia تەپسىلىي ئۇچۇرلىرى',
	'sitesupport' => 'ئىئانە',
	'tooltip-n-sitesupport' => 'بىزنى قوللاڭ',
	'specialpages-group-contribution' => 'تۆھپە/ئىئانەچى',
	'group-abusefilter' => 'سۈزگۈچتىن قالايمىقان پايدىلانغان تەھرىرلىگۈچى',
	'group-accountcreator' => 'ھېسابات قۇرغۇچى',
	'group-arbcom' => 'كېسىم كومىتېتى ئەزاسى',
	'group-autopatrolled' => 'ئۆزلۈكىدىن چارلىغۇچى',
	'group-autoreviewer' => 'ئۆزلۈكىدىن باھالىغۇچىلار',
	'group-bigexport' => 'كۆپ مىقداردا چىقارغۇچى',
	'group-confirmed' => 'جەزملەنگەن ئىشلەتكۈچىلەر',
	'group-editprotected' => 'قوغدالغان بەت تەھرىرلىرى',
	'group-filemover' => 'ھۆججەت يۆتكىگۈچى',
	'group-flood' => 'ماشىنا ئادەم ئىشلەتكۈچى',
	'group-founder' => 'ئاساس سالغۇچىلار',
	'group-import' => 'ئەكىرگۈچى',
	'group-interface_editors' => 'ئارايۈز تەھرىرلىرى',
	'group-ipblock-exempt' => 'IP چەكلەنمەيدىغانلار',
	'group-patroller' => 'چارلىغۇچىلار',
	'group-researcher' => 'تەتقىقاتچىلار',
	'group-rollbacker' => 'ئەسلىگە قايتۇرغۇچى',
	'group-transwiki' => 'wiki ھالقىغان ئەكىرگۈچى',
	'group-trusted' => 'ئىشەنچلىك ئىشلەتكۈچىلەر',
	'group-abusefilter-member' => 'سۈزگۈچتىن قالايمىقان پايدىلانغان تەھرىرلىگۈچى',
	'group-accountcreator-member' => 'ھېسابات قۇرغۇچى',
	'group-arbcom-member' => 'كېسىم ھەيئەت ئەزاسى',
	'group-autopatrolled-member' => 'ئۆزلۈكىدىن چارلىغۇچى',
	'group-autoreviewer-member' => 'ئۆزلۈكىدىن باھالىغۇچى',
	'group-bigexport-member' => 'كۆپ مىقداردا چىقارغۇچى',
	'group-confirmed-member' => 'جەزملەنگەن ئىشلەتكۈچى',
	'group-editprotected-member' => 'قوغدالغان بەت تەھرىرى',
	'group-filemover-member' => 'ھۆججەت يۆتكىگۈچى',
	'group-flood-member' => 'ماشىنا ئادەم ئىشلەتكۈچى',
	'group-founder-member' => 'ئاساس سالغۇچىلار',
	'group-import-member' => 'ئەكىرگۈچى',
	'group-interface_editors-member' => 'ئارايۈز تەھرىرى',
	'group-ipblock-exempt-member' => 'IP چەكلەنمەيدىغانلار',
	'group-patroller-member' => 'چارلىغۇچى',
	'group-researcher-member' => 'تەتقىقاتچى',
	'group-rollbacker-member' => 'ئەسلىگە قايتۇرغۇچى',
	'group-transwiki-member' => 'wiki ھالقىغان ئەكىرگۈچى',
	'group-trusted-member' => 'ئىشەنچلىك ئىشلەتكۈچى',
	'grouppage-abusefilter' => '{{ns:project}}:سۈزگۈچتىن قالايمىقان پايدىلانغان تەھرىرلىگۈچى',
	'grouppage-accountcreator' => '{{ns:project}}: ھېسابات قۇرغۇچى',
	'grouppage-arbcom' => '{{ns:project}}: كېسىم ھەيئەت ئەزالىرى',
	'grouppage-autopatrolled' => '{{ns:project}}:ئۆزلۈكىدىن چارلىغۇچى',
	'grouppage-autoreviewer' => '{{ns:project}}:ئۆزلۈكىدىن باھالىغۇچى',
	'grouppage-bigexport' => '{{ns:project}}:كۆپ مىقداردا ئەكىرگۈچى',
	'grouppage-confirmed' => '{{ns:project}}:جەزملەنگەن ئىشلەتكۈچىلەر',
	'grouppage-editprotected' => '{{ns:project}}: قوغدالغان بەت تەھرىرلىگۇچىلەر',
	'grouppage-filemover' => '{{ns:project}}: ھۆججەت يۆتكىگۈچى',
	'grouppage-flood' => '{{ns:project}}:ماشىنا ئادەم ئىشلەتكۈچىلەر',
	'grouppage-founder' => '{{ns:project}}:ئاساس سالغۇچىلار',
	'grouppage-import' => '{{ns:project}}:ئەكىرگۈچى',
	'grouppage-interface_editors' => '{{ns:project}}: ئارايۈز تەھرىرلەر',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP چەكلەنمەيدىغانلار',
	'grouppage-researcher' => '{{ns:project}}:ئەسلىگە قايتۇرغۇچىلار',
	'grouppage-rollbacker' => '{{ns:project}}:ئەسلىگە قايتۇرغۇچى',
	'grouppage-transwiki' => '{{ns:project}}:wiki ھالقىغان ئەكىرگۈچى',
	'grouppage-trusted' => '{{ns:project}}:ئىشەنچلىك ئىشلەتكۈچىلەر',
	'group-steward' => 'تەشكىللىگۈچى',
	'group-sysadmin' => 'سىستېما باشقۇرغۇچى',
	'group-editinterface' => 'ئارايۈز تەھرىرلىرى',
	'group-Global_bot' => 'پۈتۈن دائىرىلىك ماشىنا ئادەم',
	'group-Global_rollback' => 'پۈتكۈل دائىرىلىك ئەسلىگە قايتۇرغۇچى',
	'group-sysadmin-member' => 'سىستېما باشقۇرغۇچى',
	'group-Global_bot-member' => 'پۈتكۈل دائىرىلىك ماشىنا ئادەم',
	'group-Global_rollback-member' => 'پۈتكۈل دائىرىلىك ئەسلىگە قايتۇرغۇچى',
	'group-coder' => 'پروگراممىچىلار',
	'group-coder-member' => 'پروگراممىچى',
	'group-inactive' => 'پاسسىپ ئىشلەتكۈچىلەر',
	'group-inactive-member' => 'پاسسىپ ئىشلەتكۈچى',
	'grouppage-inactive' => '{{ns:project}}:پاسسىپ ئىشلەتكۈچىلەر',
);

/** Uighur (Latin) (Uyghurche‎ / ئۇيغۇرچە (Latin)) */
$messages['ug-latn'] = array(
	'sitesupport' => 'Iana Toplash',
);

/** Ukrainian (Українська)
 * @author A1
 * @author AS
 * @author Ahonc
 * @author Ickis
 * @author NickK
 * @author Prima klasy4na
 */
$messages['uk'] = array(
	'wikimediamessages-desc' => 'Повідомлення, характерні для Вікімедіа',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/uk',
	'sitesupport' => 'Пожертвування',
	'tooltip-n-sitesupport' => 'Підтримайте проект',
	'specialpages-group-contribution' => 'Пожертвування/Збір коштів',
	'group-abusefilter' => 'Редактори фільтра зловживань',
	'group-accountcreator' => 'Створювачі облікових записів',
	'group-arbcom' => 'Члени арбітражного комітету',
	'group-autopatrolled' => 'Автопатрульні',
	'group-autoreviewer' => 'Авторедактори',
	'group-bigexport' => 'Крупні експортери',
	'group-confirmed' => 'Підтверджені користувачі',
	'group-editprotected' => 'Редактори захищених сторінок',
	'group-flood' => 'Бот-користувачі',
	'group-founder' => 'Засновники',
	'group-import' => 'Імпортери',
	'group-interface_editors' => 'Редактори інтерфейсу',
	'group-ipblock-exempt' => 'Виключення з IP-блокувань',
	'group-patroller' => 'Патрульні',
	'group-rollbacker' => 'Відкочувачі',
	'group-transwiki' => 'Transwiki-імпортери',
	'group-trusted' => 'Довірені користувачі',
	'group-abusefilter-member' => 'редактор фільтра зловживань',
	'group-accountcreator-member' => 'створювач облікових записів',
	'group-arbcom-member' => 'член арбітражного комітету',
	'group-autopatrolled-member' => 'автопатрульний',
	'group-autoreviewer-member' => 'авторедактор',
	'group-bigexport-member' => 'крупний експортер',
	'group-confirmed-member' => 'підтверджений користувач',
	'group-editprotected-member' => 'редактор захищених сторінок',
	'group-flood-member' => 'бот-користувач',
	'group-founder-member' => 'засновник',
	'group-import-member' => 'імпортер',
	'group-interface_editors-member' => 'редактор інтерфейсу',
	'group-ipblock-exempt-member' => 'виключення з IP-блокування',
	'group-patroller-member' => 'патрульний',
	'group-rollbacker-member' => 'відкочувач',
	'group-transwiki-member' => 'Transwiki-імпортер',
	'group-trusted-member' => 'Довірений користувач',
	'grouppage-abusefilter' => '{{ns:project}}:Редактори фільтра зловживань',
	'grouppage-accountcreator' => '{{ns:project}}:Створювачі облікових записів',
	'grouppage-arbcom' => '{{ns:project}}:Члени арбітражного комітету',
	'grouppage-autopatrolled' => '{{ns:project}}:Автопатрульні',
	'grouppage-autoreviewer' => '{{ns:project}}:Авторедактори',
	'grouppage-bigexport' => '{{ns:project}}:Крупні експортери',
	'grouppage-confirmed' => '{{ns:project}}:Підтверджені користувачі',
	'grouppage-editprotected' => '{{ns:project}}:Редактори захищених сторінок',
	'grouppage-flood' => '{{ns:project}}:Бот-користувачі',
	'grouppage-founder' => '{{ns:project}}:Засновники',
	'grouppage-import' => '{{ns:project}}:Імпортери',
	'grouppage-interface_editors' => '{{ns:project}}:Редактори інтерфейсу',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Виключення з IP-блокування',
	'grouppage-rollbacker' => '{{ns:project}}:Відкочувачі',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki-імпортери',
	'grouppage-trusted' => '{{ns:project}}:Довірені користувачі',
	'group-steward' => 'Стюарди',
	'group-sysadmin' => 'Системні адміністратори',
	'group-editinterface' => 'Редактори інтерфейсу',
	'group-Global_bot' => 'Глобальні боти',
	'group-Global_rollback' => 'Глобальні відкочувачі',
	'group-Global_sysops' => 'Глобальні адміністратори',
	'group-Ombudsmen' => 'Омбудсмени',
	'group-Staff' => 'Співробітники',
	'group-steward-member' => 'стюард',
	'group-sysadmin-member' => 'системний адміністратор',
	'group-editinterface-member' => 'редактор інтерфейсу',
	'group-Global_bot-member' => 'глобальний бот',
	'group-Global_rollback-member' => 'глобальний відкочувач',
	'group-Global_sysops-member' => 'глобальний адміністратор',
	'group-Ombudsmen-member' => 'омбудсмен',
	'group-Staff-member' => 'співробітник',
	'grouppage-steward' => '{{ns:project}}:Стюарди',
	'group-coder' => 'Програмісти',
	'group-coder-member' => 'програміст',
	'group-inactive' => 'Неактивні користувачі',
	'group-inactive-member' => 'неактивний користувач',
	'grouppage-inactive' => '{{ns:project}}:Неактивні користувачі',
	'shared-repo-name-shared' => 'Вікісховища',
	'wikimedia-copyright' => 'Текст доступний на умовах ліцензії <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a>, також можуть діяти додаткові умови. Детальніше див. <a href="http://wikimediafoundation.org/wiki/Умови_використання">умови використання</a>.',
	'wikimedia-copyrightwarning' => 'Зберігаючи свої зміни, ви погоджуєтесь на їх невідкличну публікацію на умовах ліцензій [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0] та [http://www.gnu.org/copyleft/fdl.html GFDL]. Ви погоджуєтесь на використання свого внеску за умови вказання URL-адреси на сторінку, яку ви редагували. Детальніше див. [http://wikimediafoundation.org/wiki/Умови_використання умови використання].',
	'wikimedia-editpage-tos-summary' => 'Якщо ви не бажаєте, щоб ваші тексти вільно редагувалися і розповсюджувалися будь-ким, не поміщайте їх сюди.
Якщо ви не є автором цього тексту, він повинен бути доступний на умовах, сумісних із [http://wikimediafoundation.org/wiki/Умови_використання умовами використання], і ви погоджуєтесь дотримуватись усіх відповідних ліцензійних вимог.',
);

/** Urdu (اردو)
 * @author محبوب عالم
 */
$messages['ur'] = array(
	'wikimediamessages-desc' => 'ویکیمیڈیا معیّن پیغامات',
	'sitesupport' => 'رابطہ',
	'tooltip-n-sitesupport' => 'معاونت کیجئے',
	'group-accountcreator' => 'کھاتہ سازان',
	'group-founder' => 'بانیان',
	'group-import-member' => 'برآمدکار',
	'group-trusted-member' => 'معتمد صارف',
	'group-sysadmin' => 'منتظمینِ نظام',
	'group-editinterface' => 'مدیرانِ سطح البین',
	'group-sysadmin-member' => 'منتظمِ نظام',
	'group-Staff-member' => 'عملہ',
	'group-inactive' => 'غیرفعال صارفین',
	'group-inactive-member' => 'غیرفعال صارف',
);

/** Uzbek (O'zbek) */
$messages['uz'] = array(
	'sitesupport' => "Loyihaga ko'mak",
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'wikimediamessages-desc' => 'Messagi specifici de Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donasion',
	'sitesupport' => 'Donassion',
	'tooltip-n-sitesupport' => 'Jùtane',
	'specialpages-group-contribution' => 'Contributi/Racolta fondi',
	'group-abusefilter' => 'Gestori filtri anti abusi',
	'group-accountcreator' => 'Creatori de account',
	'group-arbcom' => 'Menbri del comitato de arbitrato',
	'group-autopatrolled' => 'Patujadori automatici',
	'group-autoreviewer' => 'Autoreviewer',
	'group-bigexport' => 'Grando esportador',
	'group-confirmed' => 'Utenti confermà',
	'group-flood' => 'Utenti bot',
	'group-founder' => 'Fondatori',
	'group-import' => 'Inportadori',
	'group-ipblock-exempt' => "Esenzioni dal bloco de l'IP",
	'group-patroller' => 'Patujadori',
	'group-rollbacker' => 'Ripristinadori',
	'group-transwiki' => 'Inportadori transwiki',
	'group-trusted' => 'Utenti de cui fidarse',
	'group-abusefilter-member' => 'gestor filtri anti abusi',
	'group-accountcreator-member' => 'Creator de account',
	'group-arbcom-member' => 'menbro del comitato de arbitrato',
	'group-autopatrolled-member' => 'patujador automàtego',
	'group-autoreviewer-member' => 'autoreviewer',
	'group-bigexport-member' => 'grando esportador',
	'group-confirmed-member' => 'utente confermà',
	'group-flood-member' => 'utenti bot',
	'group-founder-member' => 'Fondator',
	'group-import-member' => 'Inportador',
	'group-ipblock-exempt-member' => 'esente dal bloco IP',
	'group-patroller-member' => 'patujador',
	'group-rollbacker-member' => 'ripristinador',
	'group-transwiki-member' => 'Inportador transwiki',
	'group-trusted-member' => 'utente de cui fidarse',
	'grouppage-abusefilter' => '{{ns:project}}:Gestori filtri anti abusi',
	'grouppage-accountcreator' => '{{ns:project}}:Creatori de account',
	'grouppage-arbcom' => '{{ns:project}}:Menbri del comitato de arbitrato',
	'grouppage-autopatrolled' => '{{ns:project}}:Patujadori automàteghi',
	'grouppage-autoreviewer' => '{{ns:project}}:Autoreviewer',
	'grouppage-bigexport' => '{{ns:project}}:Grandi esportadori',
	'grouppage-confirmed' => '{{ns:project}}:Utenti confermà',
	'grouppage-flood' => '{{ns:project}}:Utenti bot',
	'grouppage-founder' => '{{ns:project}}:Fondatori',
	'grouppage-import' => '{{ns:project}}:Inportadori',
	'grouppage-ipblock-exempt' => "{{ns:project}}:Esenzion dal bloco de l'IP",
	'grouppage-rollbacker' => '{{ns:project}}:Ripristinadori',
	'grouppage-transwiki' => '{{ns:project}}:Inportadori transwiki',
	'grouppage-trusted' => '{{ns:project}}:Utenti de cui fidarse',
	'group-steward' => 'Steward',
	'group-sysadmin' => 'Aministradori de sistema',
	'group-editinterface' => "Editori de l'interfacia",
	'group-Global_bot' => 'Bot globali',
	'group-Global_rollback' => 'Ripristinadori globali',
	'group-Ombudsmen' => 'Ombudsman',
	'group-Staff' => 'Staff',
	'group-steward-member' => 'steward',
	'group-sysadmin-member' => 'aministrador de sistema',
	'group-editinterface-member' => "editor de l'interfacia",
	'group-Global_bot-member' => 'bot globale',
	'group-Global_rollback-member' => 'ripristinador globale',
	'group-Ombudsmen-member' => 'ombudsman',
	'group-Staff-member' => 'Menbro del staff',
	'group-coder' => 'Programatori',
	'group-coder-member' => 'programator',
	'group-inactive' => 'Utenti inativi',
	'group-inactive-member' => 'utente inativo',
	'grouppage-inactive' => '{{ns:project}}:Utenti inativi',
	'wikimedia-copyright' => 'El testo el xe disponibile soto la <a href="http://creativecommons.org/licenses/by-sa/3.0/deed.it">licensa Creative Commons Attribution/Share-Alike</a>; a questa podarìa zontarse ulteriori condizioni. Varda le <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">condizioni d\'uso</a> par tuti i detagli.',
	'wikimedia-copyrightwarning' => "Salvando, te acèti in maniera irevocabile de rilassiar el to contributo soto le license [http://creativecommons.org/licenses/by-sa/3.0/deed.it Creative Commons Attribution/Share-Alike 3.0] e [http://www.gnu.org/copyleft/fdl.html GFDL]. Te acèti anca che i riutilizadori te lo atribuìssa almanco mediante un colegamento ipertestuale o un URL a la pagina a cui te ghè contribuìo. Consulta le [http://wikimediafoundation.org/wiki/Terms_of_Use condizioni d'uso] par tuti i detagli.",
	'wikimedia-editpage-tos-summary' => "Se no te voli che el to testo el possa vegner modificà e ridistribuìo a volontà, alora no sta inserirlo qua. Se no te lo ghè scrito ti, el ga da èssar disponibile a condizioni conpatibili co le [http://wikimediafoundation.org/wiki/Terms_of_Use condizioni d'uso], e te acèti de seguir tuti i requisiti de licensa.",
);

/** Veps (Vepsan kel')
 * @author Игорь Бродский
 */
$messages['vep'] = array(
	'wikimediamessages-desc' => 'WikiMedial kävutadud specifižed tedotused',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Tehta_rahalahj',
	'sitesupport' => 'Rahalahjad',
	'tooltip-n-sitesupport' => "Pid'oitelgat meid",
	'specialpages-group-contribution' => 'Lahjoičendad/Rahoidenkeradand',
	'group-abusefilter' => "Abidočendan fil'tran redaktorad",
	'group-accountcreator' => 'Registrirujad',
	'group-autoreviewer' => 'avtomatižed arvostelijad',
	'group-bigexport' => 'Järedad eksportörad',
	'group-confirmed' => 'vahvištoittud kävutajad',
	'group-flood' => 'Botad-kävutajad',
	'group-founder' => 'Alusenpanijad',
	'group-import' => 'Importörad',
	'group-ipblock-exempt' => 'Erindad IP-blokiruindoišpäi',
	'group-patroller' => 'Patrulirujad',
	'group-rollbacker' => 'Endištajad',
	'group-transwiki' => 'Importörad Transwikišpäi',
	'group-abusefilter-member' => "pahan kävutamižen fil'tr",
	'group-accountcreator-member' => 'Registrirujad',
	'group-autopatrolled-member' => 'Avtomatižešti patruliruidud',
	'group-autoreviewer-member' => 'avtomatine arvostelii',
	'group-bigexport-member' => 'järed eksportör',
	'group-confirmed-member' => 'vahvištoittud kävutai',
	'group-founder-member' => 'alusenpanii',
	'group-import-member' => 'importör',
	'group-ipblock-exempt-member' => 'Erind IP-blokiruindoišpäi',
	'group-patroller-member' => 'patrulirui',
	'group-rollbacker-member' => 'endištai',
	'group-transwiki-member' => 'importör Transwikišpäi',
	'grouppage-abusefilter' => "{{ns:project}}:Abidoičendan fil'tran redaktorad",
	'grouppage-accountcreator' => '{{ns:project}}:Registrirujad',
	'grouppage-autopatrolled' => '{{ns:project}}:Avtomatižešti patruliruidud',
	'grouppage-autoreviewer' => '{{ns:project}}:Avtomatižed arvostelijad',
	'grouppage-bigexport' => '{{ns:project}}:Järedad eksportörad',
	'grouppage-confirmed' => '{{ns:project}}:Vahvištoittud kävutajad',
	'grouppage-founder' => '{{ns:project}}:Alusenpanijad',
	'grouppage-import' => '{{ns:project}}:Importörad',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Erind IP-blokiruindoišpäi',
	'grouppage-rollbacker' => '{{ns:project}}:Endištajad',
	'grouppage-transwiki' => '{{ns:project}}:Importörad Transwikišpäi',
	'group-steward' => 'Stüardad',
	'group-sysadmin' => 'Sisteman administratorad',
	'group-editinterface' => 'Interfeisan redaktorad',
	'group-Global_bot' => 'Globaližed botad',
	'group-Global_rollback' => 'Globaližed endištajad',
	'group-Ombudsmen' => 'Ombudsmenad',
	'group-Staff' => 'projektan radnikad',
	'group-steward-member' => 'stüard',
	'group-sysadmin-member' => 'sisteman administratorad',
	'group-editinterface-member' => 'interfeisan redaktor',
	'group-Global_bot-member' => 'globaline bot',
	'group-Global_rollback-member' => 'globaline endištai',
	'group-Ombudsmen-member' => 'ombudsmen',
	'group-Staff-member' => 'projektan radnik',
	'group-coder' => 'Programmistad',
	'group-coder-member' => 'programmist',
	'group-inactive' => 'Kävutajad aktivižuseta',
	'group-inactive-member' => 'kävutai aktivižuseta',
	'grouppage-inactive' => '{{ns:project}}:Kävutajad aktivižuseta',
	'wikimedia-copyright' => 'Tekst sab sada <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike License</a>-licenzijan mödhe; erasti voib olesketa ližaarvoimižid. 
Kacu mugažo: <a href="http://wikimediafoundation.org/wiki/Käyttöehdot">käyttöehdot</a>.',
);

/** Vietnamese (Tiếng Việt)
 * @author Minh Nguyen
 * @author Trần Nguyễn Minh Huy
 * @author Vinhtantran
 * @author לערי ריינהארט
 */
$messages['vi'] = array(
	'wikimediamessages-desc' => 'Các thông báo đặc trưng cho Wikimedia',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Quy%C3%AAn_g%C3%B3p',
	'sitesupport' => 'Quyên góp',
	'tooltip-n-sitesupport' => 'Hãy hỗ trợ chúng tôi',
	'specialpages-group-contribution' => 'Quyên góp/Vận động gây quỹ',
	'group-abusefilter' => 'Người sửa bộ lọc lạm dụng',
	'group-accountcreator' => 'Người mở tài khoản',
	'group-arbcom' => 'Ủy viên Ủy ban Trọng tài',
	'group-autopatrolled' => 'Người tự đánh dấu tuần tra',
	'group-autoreviewer' => 'Người tự duyệt',
	'group-bigexport' => 'Thành viên được phép xuất nhiều trang',
	'group-confirmed' => 'Thành viên được xác nhận',
	'group-editprotected' => 'Người sửa trang bị khóa',
	'group-filemover' => 'Người đổi tên tập tin',
	'group-flood' => 'Người dùng bot',
	'group-founder' => 'Nhà sáng lập',
	'group-import' => 'Người nhập trang',
	'group-interface_editors' => 'Người sửa giao diện',
	'group-ipblock-exempt' => 'Người được miễn cấm IP',
	'group-patroller' => 'Tuần tra viên',
	'group-researcher' => 'Nhà nghiên cứu',
	'group-rollbacker' => 'Người lùi sửa',
	'group-transwiki' => 'Người nhập trang giữa wiki',
	'group-trusted' => 'Thành viên tin cậy',
	'group-abusefilter-member' => 'người sửa bộ lọc lạm dụng',
	'group-accountcreator-member' => 'Người mở tài khoản',
	'group-arbcom-member' => 'ủy viên Ủy ban Trọng tài',
	'group-autopatrolled-member' => 'tuần tra viên tự động',
	'group-autoreviewer-member' => 'người tự duyệt',
	'group-bigexport-member' => 'xuất nhiều trang',
	'group-confirmed-member' => 'thành viên được xác nhận',
	'group-editprotected-member' => 'người sửa trang bị khóa',
	'group-filemover-member' => 'người đổi tên tập tin',
	'group-flood-member' => 'người dùng bot',
	'group-founder-member' => 'Nhà sáng lập',
	'group-import-member' => 'Người nhập trang',
	'group-interface_editors-member' => 'người sửa giao diện',
	'group-ipblock-exempt-member' => 'Người được miễn cấm IP',
	'group-patroller-member' => 'Tuần tra viên',
	'group-researcher-member' => 'nhà nghiên cứu',
	'group-rollbacker-member' => 'Người lùi sửa',
	'group-transwiki-member' => 'Người nhập trang giữa wiki',
	'group-trusted-member' => 'thành viên tin cậy',
	'grouppage-abusefilter' => '{{ns:project}}:Người sửa bộ lọc lạm dụng',
	'grouppage-accountcreator' => '{{ns:project}}:Người mở tài khoản',
	'grouppage-arbcom' => '{{ns:project}}:Ủy viên Ủy ban Trọng tài',
	'grouppage-autopatrolled' => '{{ns:project}}:Tuần tra viên tự động',
	'grouppage-autoreviewer' => '{{ns:project}}:Người tự duyệt',
	'grouppage-bigexport' => '{{ns:project}}:Thành viên được phép xuất nhiều trang',
	'grouppage-confirmed' => '{{ns:project}}:Thành viên được xác nhận',
	'grouppage-editprotected' => '{{ns:project}}:Người sửa trang bị khóa',
	'grouppage-filemover' => '{{ns:project}}:Người đổi tên tập tin',
	'grouppage-flood' => '{{ns:project}}:Người dùng bot',
	'grouppage-founder' => '{{ns:project}}:Nhà sáng lập',
	'grouppage-import' => '{{ns:project}}:Người nhập trang',
	'grouppage-interface_editors' => '{{ns:project}}:Người sửa giao diện',
	'grouppage-ipblock-exempt' => '{{ns:project}}:Người được miễn cấm IP',
	'grouppage-researcher' => '{{ns:project}}:Nhà nghiên cứu',
	'grouppage-rollbacker' => '{{ns:project}}:Người lùi sửa',
	'grouppage-transwiki' => '{{ns:project}}:Người nhập trang giữa wiki',
	'grouppage-trusted' => '{{ns:project}}:Thành viên tin cậy',
	'group-steward' => 'Tiếp viên',
	'group-sysadmin' => 'Người quản lý hệ thống',
	'group-editinterface' => 'Sửa giao diện',
	'group-Global_bot' => 'Robot toàn cầu',
	'group-Global_rollback' => 'Thành viên lùi sửa toàn cầu',
	'group-Global_sysops' => 'Bảo quản viên toàn hệ thống',
	'group-Ombudsmen' => 'Thanh tra viên',
	'group-Staff' => 'Nhân viên',
	'group-steward-member' => 'Tiếp viên',
	'group-sysadmin-member' => 'người quản lý hệ thống',
	'group-editinterface-member' => 'sửa giao diện',
	'group-Global_bot-member' => 'robot toàn cầu',
	'group-Global_rollback-member' => 'người lùi sửa toàn cầu',
	'group-Global_sysops-member' => 'bảo quản viên toàn hệ thống',
	'group-Ombudsmen-member' => 'thanh tra viên',
	'group-Staff-member' => 'Nhân viên',
	'grouppage-Global_bot' => 'm:Bot policy/vi#Bot toàn cầu',
	'group-coder' => 'Lập trình viên',
	'group-coder-member' => 'lập trình viên',
	'group-inactive' => 'Thành viên không tích cực',
	'group-inactive-member' => 'thành viên không tích cực',
	'grouppage-inactive' => '{{ns:project}}:Thành viên không tích cực',
	'wikimedia-copyright' => 'Văn bản được phát hành theo <a href="http://creativecommons.org/licenses/by-sa/3.0/">Giấy phép Creative Commons Ghi công/Chia sẻ tương tự</a>; có thể áp dụng điều khoản bổ sung. Xem <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Điều khoản Sử dụng</a> để biết thêm chi tiết.',
	'wikimedia-copyrightwarning' => 'Với việc lưu trang, bạn đồng ý phát hành, không thể hủy bỏ, đóng góp của mình theo [http://creativecommons.org/licenses/by-sa/3.0/ Giấy phép Creative Commons Ghi công/Chia sẻ tương tự 3.0] và [http://www.gnu.org/copyleft/fdl.html GFDL]. Bạn đồng ý được ghi công bởi những người tái sử dụng, ở mức tối thiểu là thông qua một siêu liên kết hoặc URL đến trang bạn đang đóng góp vào. Xem [http://wikimediafoundation.org/wiki/Terms_of_Use Điều khoản Sử dụng] để biết thêm chi tiết.',
	'wikimedia-editpage-tos-summary' => 'Nếu không muốn những gì bạn viết bị tùy ý chỉnh sửa và tái phân phối, xin đừng đăng nó ở đây. Nếu nội dung đưa vào không phải do chính bạn viết ra, nội dung đó phải được phát hành theo những điều khoản nhất quán với [http://wikimediafoundation.org/wiki/Terms_of_Use Điều khoản Sử dụng], và bạn đồng ý tuân theo các yêu cầu cấp phép bản quyền thích hợp.',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author Smeira
 */
$messages['vo'] = array(
	'sitesupport' => 'Födagivots',
	'tooltip-n-sitesupport' => 'Stütolös obsi',
	'group-accountcreator' => 'Kalijafans',
	'group-founder' => 'Fünans',
	'group-import' => 'Nüveigans',
	'group-rollbacker' => 'Sädunans',
	'group-accountcreator-member' => 'kalijafan',
	'group-founder-member' => 'fünan',
	'group-import-member' => 'nüveigan',
	'group-rollbacker-member' => 'sädunan',
	'group-transwiki-member' => 'nüveigan vüvükik',
	'grouppage-accountcreator' => '{{ns:project}}:Kalijafans',
	'grouppage-founder' => '{{ns:project}}:Fünans',
	'grouppage-import' => '{{ns:project}}:Nüveigans',
	'grouppage-rollbacker' => '{{ns:project}}:Sädunans',
	'group-sysadmin' => 'Sitiguvans',
	'group-sysadmin-member' => 'sitiguvan',
	'group-Global_bot-member' => 'bot valöpik',
	'group-coder' => 'Kotans',
	'group-coder-member' => 'kotan',
);

/** Võro (Võro)
 * @author Võrok
 */
$messages['vro'] = array(
	'sitesupport' => 'Tugõminõ',
	'tooltip-n-sitesupport' => 'Tukõq mi tüüd',
	'wikimedia-copyright' => 'Teksti või pruukiq <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a>-litsendsi tingimüisi perrä;
mõnikõrd või päält taa ollaq ka muid tingimüisi.
Taa kotsilõ kaeq täpsämbähe <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">Wikimedia pruukmistingimüisist</a>.',
	'wikimedia-copyrightwarning' => 'Pästmisega annat nõunolõgi uma tüü tagasipüürdmäldä ärq ilmutamisõs [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons Attribution/Share-Alike 3.0-] ja [http://www.gnu.org/copyleft/fdl.html GFDL-litsendsi] perrä.
Olõt nõun, et su autorisolõmist näüdätäs vähämbält võrgoaadrõsi vai lingiga seo lehe pääle, midä sa parhilla toimõndat.
Täpsämbähe kaeq taa kotsilõ [http://wikimediafoundation.org/wiki/Terms_of_Use Wikimedia pruukmistingimüisist].',
	'wikimedia-editpage-tos-summary' => 'Kui sa taha-ai, et su kirotõdut halõstamalda toimõndõdas ja uma ärqnägemise perrä tarvitõdas, sis pästku-ui taad siiäq.  
Ku sa kiroda-as taad teksti esiq, sis piät taa tarvitaminõ vastama [http://wikimediafoundation.org/wiki/Terms_of_Use pruukmistingimüisile] ja sul om kohustus täütäq sääl näüdätüid litsendsinõudmiisi.',
);

/** Walloon (Walon)
 * @author Lucyin
 * @author Srtxg
 */
$messages['wa'] = array(
	'wikimediamessages-desc' => 'Messaedjes rén k\' pol waibe "Wikimedia"',
	'sitesupport' => 'Ecwårlaedje',
	'tooltip-n-sitesupport' => 'Sotnez nos',
	'group-abusefilter' => "Candjeus d' passetes",
	'group-accountcreator' => "Ahiveus d' contes",
	'group-autoreviewer' => 'Coridjreces otomatikes',
	'group-bigexport' => "Grands epoirteus d' pådjes",
	'group-founder' => 'Askepieus do Wiki e-n inglès',
	'group-import' => 'Ristitcheus',
	'group-ipblock-exempt' => 'IP nén rboutåve',
	'group-rollbacker' => 'Disfijheus',
	'group-transwiki' => 'Ricopieus inte les wikis',
	'group-abusefilter-member' => 'Ricandjeu(se) des passetes',
	'group-accountcreator-member' => "Ahiveu d' contes",
	'group-autopatrolled-member' => 'Robot naxheu',
	'group-autoreviewer-member' => 'Coridjrece otomatike',
	'group-bigexport-member' => 'Grand(e) epoirteu(se) di pådjes',
	'group-founder-member' => 'Askepieu',
	'group-import-member' => 'Ristitcheu(se)',
	'group-ipblock-exempt-member' => 'IP nén rboutåve',
	'group-rollbacker-member' => 'Ridisfijheu(se)',
	'group-transwiki-member' => "Ricopieu(se) d' on wiki a l' ôte",
	'grouppage-abusefilter' => '{{ns:project}}:Ricandjeus des passetes',
	'grouppage-accountcreator' => '{{ns:project}}:Manaedjeus',
	'grouppage-autopatrolled' => '{{ns:project}}:Robots naxheus',
	'grouppage-autoreviewer' => '{{ns:project}}:Ricoridjreces otomatikes',
	'grouppage-bigexport' => "{{ns:project}}:Grands epoirteus d' pådjes",
	'grouppage-founder' => '{{ns:project}}:Mwaisse-manaedjeus',
	'grouppage-import' => "{{ns:project}}:Apoirteus d' pådjes",
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP nén rboutåve',
	'grouppage-rollbacker' => '{{ns:project}}:Ridisfijheus',
	'grouppage-transwiki' => "{{ns:project}}:Apoirteus d' pådjes d' èn ôte wiki",
	'group-steward' => 'Mwaisse-manaedjeus tot avå',
	'group-sysadmin' => 'Manaedjeus',
	'group-Global_bot' => 'Programeus totavå',
	'group-Global_rollback' => 'Ridisfijheus totavå',
	'group-Ombudsmen' => 'Arindjeus des bidons',
	'group-Staff' => 'Eployîs',
	'group-steward-member' => 'mwaisse-manaedjeu tot avå',
	'group-sysadmin-member' => 'Manaedjeu(se)',
	'group-Global_bot-member' => 'Programeu(se) totavå',
	'group-Global_rollback-member' => 'Ridisfijheu(se) totavå',
	'group-Ombudsmen-member' => 'Arindjeu(se) des bidons',
	'group-Staff-member' => 'Eployî, eployeye',
	'group-coder' => "Fijheus d' côdes",
	'group-coder-member' => 'Fijheu(se) di côdes',
	'group-inactive' => "Uzeu ki n' boutèt nén",
	'group-inactive-member' => "Uzeu(se) ki n' boute nén",
	'grouppage-inactive' => "{{ns:project}}:Uzeus ki n' boutnut nén",
	'wikimedia-copyright' => "Les tecses polèt esse ricopyîs dizo l' [http://creativecommons.org/licenses/by-sa/3.0/ licince \"''Creative Commons''\" atribucion pårtaedje a l’ idintike 3.0]\".
Loukîz les [http://wikimediafoundation.org/wiki/Terms_of_Use condicions d’ eployaedje] po saveur les ca et les ma.",
	'wikimedia-copyrightwarning' => "Si vos clitchîz so «Schaper l' pådje», vos acceptez, sins poleur rivni e-n erî, di mete vosse sicrijhaedje dizo l'&nbsp;
[http://creativecommons.org/licenses/by-sa/3.0/ licince \"''Creative Commons\"'' atribucion pårtaedje a l’ idintike 3.0] eyet [http://www.gnu.org/copyleft/fdl.html GFDL]. 
Et esse sifwaitmint d' acoird d’ esse ricnoxhou (-owe) come sicrijheu(se) di ces racsegnes la, pol moens pa ene hårdêye ou èn URL aviè l’ årtike ki vos avoz scrît ou ki vos î avoz bodjî. 
Loukîz les [http://wikimediafoundation.org/wiki/Terms_of_Use condicions d’ eployaedje] po saveur les ca et les ma.",
	'wikimedia-editpage-tos-summary' => "Si vos n' vôrîz nén, télfeye, ki vos scrijhaedjes fouxhénxhe ricandjîs, et spårdous totavå, adon, n' elzès metoz nén droci. 
Tant k' ås tecses ki n' serént nén da vosse, po les riscrire cial, i dvèt esse ricopiåves sorlon les [http://wikimediafoundation.org/wiki/Terms_of_Use condicions d' eployaedje håynêyes vaici]. 
Eto seroz vos d' acoird po shuve totes les clawes di cisse licince la.",
);

/** Waray (Winaray)
 * @author לערי ריינהארט
 */
$messages['war'] = array(
	'sitesupport' => 'Mga Donasyon',
);

/** Wolof (Wolof)
 * @author Ibou
 */
$messages['wo'] = array(
	'sitesupport' => 'Joxe ag ndimbal',
);

/** Wu (吴语) */
$messages['wuu'] = array(
	'sitesupport' => '捐款',
);

/** Kalmyk (Хальмг)
 * @author Huuchin
 */
$messages['xal'] = array(
	'sitesupport' => 'Өгх',
	'wikimedia-copyright' => 'Бичг <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike</a> зөвшлтин болзани орлһта, зәрм бәәдлт дәкәд болзан йоста бәәдг. Тодрхаһар <a href="http://wikimediafoundation.org/wiki/Terms_of_Use/ru">Эдллһнә болзан</a> хәләтн.',
);

/** Xhosa (isiXhosa) */
$messages['xh'] = array(
	'sitesupport' => 'Amalizo',
);

/** Mingrelian (მარგალური)
 * @author Alsandro
 * @author Dato deutschland
 * @author Lika2672
 */
$messages['xmf'] = array(
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/ka',
	'sitesupport' => 'აზარა',
	'tooltip-n-sitesupport' => 'ხუჯ დომკინით',
);

/** Yiddish (ייִדיש)
 * @author Yidel
 * @author פוילישער
 */
$messages['yi'] = array(
	'wikimediamessages-desc' => 'וויקימעדיע ספעציפֿישע מעלדונגען',
	'sitesupport-url' => 'פֿאָרשער',
	'sitesupport' => 'ביישטייערונגן',
	'tooltip-n-sitesupport' => 'שטיצט אונז',
	'group-accountcreator' => 'קאָנטע באַשאַפֿער',
	'group-autopatrolled' => 'אויטאמאַטישע פאַטראלירער',
	'group-confirmed' => 'באַשטעטיגטע באַניצער',
	'group-flood' => 'באט באַניצער',
	'group-founder' => 'גרינדער',
	'group-import' => 'אימפארטירערס',
	'group-patroller' => 'פאטראלירער',
	'group-rollbacker' => 'צוריקדרייער',
	'group-accountcreator-member' => 'קאָנטע באַשאַפֿער',
	'group-autopatrolled-member' => 'אויטאפאַטראלירער',
	'group-confirmed-member' => 'באַשטעטיגטער באַניצער',
	'group-flood-member' => 'באט באַניצער',
	'group-founder-member' => 'גרינדער',
	'group-import-member' => 'אימפארטירער',
	'group-patroller-member' => 'פאטראלירער',
	'group-rollbacker-member' => 'צוריקדרייער',
	'grouppage-flood' => '{{ns:project}}:באט באַניצער',
	'grouppage-rollbacker' => '{{ns:project}}:צוריקדרייער',
	'group-steward' => 'סטואַרדן',
	'group-sysadmin' => 'סיסאפן',
	'group-Global_bot' => 'גלאבאלע באטן',
	'group-Global_rollback' => 'גלאבאַלע צוריקדרייער',
	'group-steward-member' => 'סטואַרד',
	'group-sysadmin-member' => 'סיסטעם אדמיניסטראטאר',
	'group-Global_bot-member' => 'גלאבאַלער באט',
	'group-Global_rollback-member' => 'גלאבאַלער צוריקדרייער',
	'group-Global_sysops-member' => 'גלאבאַלער סיסאָפּ',
	'group-coder-member' => 'פראגראַמירער',
	'group-inactive' => 'אומאַקטיווע באַניצער',
	'group-inactive-member' => 'אומאַקטיווער באַניצער',
	'grouppage-inactive' => '{{ns:project}}:אומאַקטיווע באַניצער',
	'shared-repo-name-shared' => 'וויקימעדיע קאמאנס',
	'wikimedia-copyright' => 'טעקסט איז פאראן לויטן <a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons צושרייבן/טייל-גלייך ליצענץ</a>; קען אפשר זיין נאך תנאים.
זעט <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">תנאים פון באניצן</a> פֿאר פרטים.',
	'wikimedia-copyrightwarning' => 'מיטן אויפהיטן, זענט איר מסכים אומאפענדערלעך צו באפרייען אייער ביישטייערונג אונטערן [http://creativecommons.org/licenses/by-sa/3.0/ Creative Commons צושרייבן/טייל-גלייך ליצענץ 3.0] און דעם [http://www.gnu.org/copyleft/fdl.html GFDL].
איר שטימט צו אז ווידער-באניצער זאלן קרעדיטירן, לכל הפחות, דורך א היפערלינק אדער URL צום בלאט צו וואס איר ביישטייערט.
זעט די [http://wikimediafoundation.org/wiki/Terms_of_Use תנאים פון באניץ] פאר פרטים.',
	'wikimedia-editpage-tos-summary' => "אז איר ווילט נישט מ'זאל רעדאקטירן און פארשפרייטן דיין שרייבארבעט ווייטער, זאלט איר זי נישט איינגעבן דא.
אויב איר האט דאס נישט אליין געשריבן, מוז עס זיין פֿאראן אונטער [http://wikimediafoundation.org/wiki/Terms_of_Use ניצבאדינגען], און איר זענט מסכים צו פֿאלגן די שייכדיגן פאדערונגען פונעם ליצענץ.",
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'sitesupport' => 'Ṣe ìgbọ̀wọ́',
	'tooltip-n-sitesupport' => 'Tíwálẹ́yìn',
);

/** Cantonese (粵語)
 * @author Horacewai2
 */
$messages['yue'] = array(
	'wikimediamessages-desc' => 'Wikimedia特定訊息',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/{{urlencode:捐贈}}',
	'sitesupport' => '慷慨解囊',
	'tooltip-n-sitesupport' => '資持我哋',
	'group-abusefilter' => '濫用過濾器編者',
	'group-accountcreator' => '開戶專員',
	'group-autopatrolled' => '自動複查員',
	'group-autoreviewer' => '自動覆查者',
	'group-bigexport' => '大型倒出者',
	'group-confirmed' => '確認用戶',
	'group-editprotected' => '保護頁面編者',
	'group-filemover' => '搬檔案者',
	'group-flood' => '機械人用戶',
	'group-founder' => '創辦人',
	'group-import' => '匯入者',
	'group-interface_editors' => '介面編者',
	'group-ipblock-exempt' => 'IP封鎖例外者',
	'group-patroller' => '巡邏員',
	'group-researcher' => '研究者',
	'group-rollbacker' => '反轉者',
	'group-transwiki' => 'Transwiki匯入者',
	'group-trusted' => '可信戶',
	'group-abusefilter-member' => '濫用過濾器編者',
	'group-accountcreator-member' => '開戶專員',
	'group-autopatrolled-member' => '自動巡查員',
	'group-autoreviewer-member' => '自動覆查者',
	'group-bigexport-member' => '大型倒出者',
	'group-confirmed-member' => '確認用戶',
	'group-editprotected-member' => '已保護頁面編者',
	'group-filemover-member' => '搬檔案',
	'group-flood-member' => '機械人用戶',
	'group-founder-member' => '創辦人',
	'group-import-member' => '匯入者',
	'group-interface_editors-member' => '界面編輯者',
	'group-ipblock-exempt-member' => 'IP封鎖例外',
	'group-patroller-member' => '巡邏員',
	'group-researcher-member' => '研究者',
	'group-rollbacker-member' => '反轉者',
	'group-transwiki-member' => 'Transwiki匯入者',
	'grouppage-abusefilter' => '{{ns:project}}:濫用過濾器編者',
	'grouppage-accountcreator' => '{{ns:project}}:開戶專員',
	'grouppage-autopatrolled' => '{{ns:project}}:自動巡查員',
	'grouppage-autoreviewer' => '{{ns:project}}:自動覆查者',
	'grouppage-bigexport' => '{{ns:project}}:大型倒出者',
	'grouppage-confirmed' => '{{ns:project}}:確認用戶',
	'grouppage-founder' => '{{ns:project}}:創辦人',
	'grouppage-import' => '{{ns:project}}:匯入者',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP封鎖例外',
	'grouppage-rollbacker' => '{{ns:project}}:反轉者',
	'grouppage-transwiki' => '{{ns:project}}:Transwiki匯入者',
	'group-steward' => '執行員',
	'group-sysadmin' => '系統管理員',
	'group-editinterface' => '界面編輯者',
	'group-Global_bot' => '全域機械人',
	'group-Global_rollback' => '全域反轉者',
	'group-Global_sysops' => '全域管理員',
	'group-Ombudsmen' => '申訴專員',
	'group-Staff' => '職員',
	'group-steward-member' => '執行員',
	'group-sysadmin-member' => '系統管理員',
	'group-editinterface-member' => '界面編輯者',
	'group-Global_bot-member' => '全域機械人',
	'group-Global_rollback-member' => '全域反轉者',
	'group-Ombudsmen-member' => '申訴專員',
	'group-Staff-member' => '職員',
	'group-coder' => '編碼員',
	'group-coder-member' => '編碼員',
	'group-inactive' => '唔活躍嘅用戶',
	'group-inactive-member' => '唔活躍嘅用戶',
	'grouppage-inactive' => '{{ns:project}}:唔活躍嘅用戶',
	'wikimedia-copyright' => '呢度嘅所有文字係根據<a href="http://creativecommons.org/licenses/by-sa/3.0/">Creative Commons Attribution/Share-Alike 牌照</a>嘅條款發佈；可能會有附加嘅條款。
睇吓<a href="http://wikimediafoundation.org/wiki/Terms_of_Use">使用條款</a>嘅細節。',
	'wikimedia-copyrightwarning' => '當保存嗰陣，你同意將你嘅貢獻喺[http://creativecommons.org/licenses/by-sa/3.0/ 共享創意 署名－相同方式共享 3.0]同埋[http://www.gnu.org/copyleft/fdl.html GNU自由文檔協議]發表。
你同意加你個名畀再利用者，最少，經過嘅超連結或者網址到你貢獻嘅版。
睇吓[http://wikimediafoundation.org/wiki/Terms_of_Use 使用條款]嘅細節。',
	'wikimedia-editpage-tos-summary' => '如果你唔想將你寫嘅嘢畀人編輯同埋再發佈嘅話，噉就唔好響呢度遞交。
唔果你唔係自己去寫呢篇嘢嘅話，佢一定要同[http://wikimediafoundation.org/wiki/Terms_of_Use 使用條款]可以提供嘅情況之下提供，同埋你同意跟住任何有關嘅發牌條件。',
);

/** Zeeuws (Zeêuws)
 * @author NJ
 */
$messages['zea'] = array(
	'sitesupport' => 'Donaoties',
);

/** Simplified Chinese (‪中文(简体)‬)
 * @author Bencmq
 * @author Gaoxuewei
 * @author Jimmy xu wrk
 * @author KaiesTse
 * @author PhiLiP
 * @author Shizhao
 * @author William915
 * @author Wmr89502270
 */
$messages['zh-hans'] = array(
	'wikimediamessages-desc' => '维基媒体特定信息',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/{{urlencode:赞助}}',
	'sitesupport' => '资助',
	'tooltip-n-sitesupport' => '资助我们',
	'specialpages-group-contribution' => '贡献/募捐者',
	'group-abusefilter' => '防滥用过滤器编辑者',
	'group-accountcreator' => '账户创建员',
	'group-arbcom' => '仲裁委员会成员',
	'group-autopatrolled' => '自动巡查员',
	'group-autoreviewer' => '复查豁免者',
	'group-bigexport' => '大量导出者',
	'group-confirmed' => '已确认用户',
	'group-editprotected' => '已保护的页面编者',
	'group-filemover' => '档案移动员',
	'group-flood' => '机器人用户',
	'group-founder' => '创办人',
	'group-import' => '导入者',
	'group-interface_editors' => '界面编辑者',
	'group-ipblock-exempt' => 'IP查封例外者',
	'group-patroller' => '巡逻员',
	'group-researcher' => '研究人员',
	'group-rollbacker' => '回退员',
	'group-transwiki' => '跨维基导入者',
	'group-trusted' => '信任用户',
	'group-abusefilter-member' => '滥用过滤器编辑者',
	'group-accountcreator-member' => '账户创建员',
	'group-arbcom-member' => '仲裁委员会委员',
	'group-autopatrolled-member' => '自动巡查员',
	'group-autoreviewer-member' => '自动覆查员',
	'group-bigexport-member' => '大量导出者',
	'group-confirmed-member' => '已确认用户',
	'group-editprotected-member' => '受保护的页面编辑者',
	'group-filemover-member' => '文件移动员',
	'group-flood-member' => '机器人用户',
	'group-founder-member' => '创办人',
	'group-import-member' => '导入者',
	'group-interface_editors-member' => '界面编辑者',
	'group-ipblock-exempt-member' => 'IP查封例外',
	'group-patroller-member' => '巡逻员',
	'group-researcher-member' => '研究员',
	'group-rollbacker-member' => '回退员',
	'group-transwiki-member' => '跨维基导入者',
	'group-trusted-member' => '信任用户',
	'grouppage-abusefilter' => '{{ns:project}}:反滥用过滤器编辑者',
	'grouppage-accountcreator' => '{{ns:project}}:账户创建员',
	'grouppage-arbcom' => '{{ns:project}}:仲裁委员会成员',
	'grouppage-autopatrolled' => '{{ns:project}}:自动巡查员',
	'grouppage-autoreviewer' => '{{ns:project}}:自动覆查员',
	'grouppage-bigexport' => '{{ns:project}}:大量导出者',
	'grouppage-confirmed' => '{{ns:project}}:已确认用户',
	'grouppage-editprotected' => '{{ns:project}}:被保护页面编者',
	'grouppage-filemover' => '{{ns:project}}:档案移动员',
	'grouppage-flood' => '{{ns:project}}:机器人',
	'grouppage-founder' => '{{ns:project}}:创办人',
	'grouppage-import' => '{{ns:project}}:导入者',
	'grouppage-interface_editors' => '{{ns:project}}:介面编辑者',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP查封例外',
	'grouppage-researcher' => '{{ns:project}}:研究人员',
	'grouppage-rollbacker' => '{{ns:project}}:回退员',
	'grouppage-transwiki' => '{{ns:project}}:跨维基导入者',
	'grouppage-trusted' => '{{ns:project}}:受信任的用戶',
	'group-steward' => '监管员',
	'group-sysadmin' => '系统管理员',
	'group-editinterface' => '界面编辑者',
	'group-Global_bot' => '全域机器人',
	'group-Global_rollback' => '全域回退员',
	'group-Global_sysops' => '全域管理员',
	'group-Ombudsmen' => '申诉专员',
	'group-Staff' => '基金会工作人员',
	'group-steward-member' => '监管员',
	'group-sysadmin-member' => '系统管理员',
	'group-editinterface-member' => '界面编辑者',
	'group-Global_bot-member' => '全域机器人',
	'group-Global_rollback-member' => '全域回退员',
	'group-Global_sysops-member' => '全域管理员',
	'group-Ombudsmen-member' => '申诉专员',
	'group-Staff-member' => '成员',
	'group-coder' => '编程人员',
	'group-coder-member' => '编程人员',
	'group-inactive' => '不活跃的用户',
	'group-inactive-member' => '不活跃的用户',
	'grouppage-inactive' => '{{ns:project}}:不活跃的用户',
	'shared-repo-name-shared' => '维基共享资源',
	'wikimedia-copyright' => '本站的全部文字在<a href="{{localurle:Wikipedia:CC-by-sa-3.0协议文本}}" title="Wikipedia:CC-by-sa-3.0协议文本">知识共享 署名-相同方式共享 3.0协议</a>之条款下提供，附加条款亦可能应用。（请参阅<a href="http://wikimediafoundation.org/wiki/Terms_of_Use">使用条款</a>）',
	'wikimedia-copyrightwarning' => "点击'''{{int:savearticle}}'''钮，就表示您同意依据[http://creativecommons.org/licenses/by-sa/3.0/ CC-by-sa-3.0]和[http://www.gnu.org/copyleft/fdl.html GFDL]不可逆轉地释出貢獻。
你同意其他人在引用您的贡献内容时，只须通过超连结或其它形式进行署名。如不欲其它用户编辑或转载您的文章，请勿提交。
请参见我们的[http://wikimediafoundation.org/wiki/Terms_of_Use 使用条款]。",
	'wikimedia-editpage-tos-summary' => '请勿提交任何阁下不欲予人编辑或重新发布的内容。当提交非由阁下编写的内容时，请确保这些内容的版权与[http://wikimediafoundation.org/wiki/Terms_of_Use 使用条款]一致，及阁下同意遵行一切相关的版权条款。',
);

/** Traditional Chinese (‪中文(繁體)‬)
 * @author Alexsh
 * @author Horacewai2
 * @author KaiesTse
 * @author Mark85296341
 * @author William915
 * @author Wong128hk
 * @author Wrightbus
 */
$messages['zh-hant'] = array(
	'wikimediamessages-desc' => '維基媒體特定訊息',
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/{{urlencode:資助}}',
	'sitesupport' => '贊助',
	'tooltip-n-sitesupport' => '資助我們',
	'specialpages-group-contribution' => '貢獻/募捐者',
	'group-abusefilter' => '濫用過瀘器編輯者',
	'group-accountcreator' => '賬戶創建員',
	'group-arbcom' => '仲裁委員會成員',
	'group-autopatrolled' => '自動巡查員',
	'group-autoreviewer' => '巡查豁免者',
	'group-bigexport' => '大量匯出者',
	'group-confirmed' => '確認用戶',
	'group-editprotected' => '已保護的頁面編者',
	'group-filemover' => '檔案移動員',
	'group-flood' => '機器人用户',
	'group-founder' => '創辦人',
	'group-import' => '匯入者',
	'group-interface_editors' => '界面編輯者',
	'group-ipblock-exempt' => 'IP查封例外者',
	'group-patroller' => '巡邏員',
	'group-researcher' => '研究人員',
	'group-rollbacker' => '回退員',
	'group-transwiki' => '跨維基匯入者',
	'group-trusted' => '受信任的用戶',
	'group-abusefilter-member' => '濫用過濾器編輯者',
	'group-accountcreator-member' => '賬戶創建員',
	'group-arbcom-member' => '仲裁委員會委員',
	'group-autopatrolled-member' => '巡查豁免者',
	'group-autoreviewer-member' => '巡查豁免者',
	'group-bigexport-member' => '大量匯出者',
	'group-confirmed-member' => '確認用戶',
	'group-editprotected-member' => '受保護的頁面編輯者',
	'group-filemover-member' => '文件移動員',
	'group-flood-member' => '機器人用户',
	'group-founder-member' => '創辦人',
	'group-import-member' => '匯入者',
	'group-interface_editors-member' => '界面編輯者',
	'group-ipblock-exempt-member' => 'IP查封例外',
	'group-patroller-member' => '巡邏員',
	'group-researcher-member' => '研究員',
	'group-rollbacker-member' => '回退員',
	'group-transwiki-member' => '跨維基匯入者',
	'group-trusted-member' => '受信任的用戶',
	'grouppage-abusefilter' => '{{ns:project}}:濫用過濾器編輯者',
	'grouppage-accountcreator' => '{{ns:project}}:賬戶創建員',
	'grouppage-arbcom' => '{{ns:project}}:仲裁委員會成員',
	'grouppage-autopatrolled' => '{{ns:project}}:巡查豁免權',
	'grouppage-autoreviewer' => '{{ns:project}}:巡查豁免權',
	'grouppage-bigexport' => '{{ns:project}}:大量匯出者',
	'grouppage-confirmed' => '{{ns:project}}:已確認用戶',
	'grouppage-editprotected' => '{{ns:project}}:被保護頁面編者',
	'grouppage-filemover' => '{{ns:project}}:檔案移動員',
	'grouppage-flood' => '{{ns:project}}:機器人',
	'grouppage-founder' => '{{ns:project}}:創辦人',
	'grouppage-import' => '{{ns:project}}:匯入者',
	'grouppage-interface_editors' => '{{ns:project}}:介面編輯者',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP查封例外',
	'grouppage-researcher' => '{{ns:project}}:研究人員',
	'grouppage-rollbacker' => '{{ns:project}}:反轉者',
	'grouppage-transwiki' => '{{ns:project}}:跨維基匯入者',
	'grouppage-trusted' => '{{ns:project}}:受信任的用戶',
	'group-steward' => '監管員',
	'group-sysadmin' => '系統管理員',
	'group-editinterface' => '界面編輯者',
	'group-Global_bot' => '全域機器人',
	'group-Global_rollback' => '全域反轉者',
	'group-Global_sysops' => '全域管理員',
	'group-Ombudsmen' => '申訴專員',
	'group-Staff' => '內部成員',
	'group-steward-member' => '監管員',
	'group-sysadmin-member' => '系統管理員',
	'group-editinterface-member' => '界面編輯者',
	'group-Global_bot-member' => '全域機器人',
	'group-Global_rollback-member' => '全域反轉者',
	'group-Global_sysops-member' => '全域管理員',
	'group-Ombudsmen-member' => '申訴專員',
	'group-Staff-member' => '成員',
	'group-coder' => '程式編輯者',
	'group-coder-member' => '程式編輯者',
	'group-inactive' => '不活躍的用戶',
	'group-inactive-member' => '不活躍的用戶',
	'grouppage-inactive' => '{{ns:project}}:不活躍的用戶',
	'shared-repo-name-shared' => '維基共享資源',
	'wikimedia-copyright' => '本站的全部文字在<a "href="{{localurle:Wikipedia:CC-by-sa-3.0協議文本}}"title="Wikipedia:CC-by-sa-3.0協議文本">知識共享署名 - 相同方式共享3.0協議</a>之條款下提供，附加條款亦可能應用。（請參閱 <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">使用條款</a>）',
	'wikimedia-copyrightwarning' => "點擊'''{{int:savearticle}}'''按鈕，即表示您同意依據[http://creativecommons.org/licenses/by-sa/3.0/ CC-by-sa-3.0]和[http://www.gnu.org/copyleft/fdl.html GFDL]協議不可逆轉地釋出貢獻。
你同意其他人在引用您的貢獻內容時，只須通過超連結或其它形式進行署名。如不欲其它用戶編輯或轉載您的文章，請勿提交。
請參閱我們的[http://wikimediafoundation.org/wiki/Terms_of_Use 使用條款]。",
	'wikimedia-editpage-tos-summary' => '請勿提交任何閣下不欲予人編輯或重新發布的內容。當提交非由閣下編寫的內容時，請確保這些內容的版權狀態合乎[http://wikimediafoundation.org/wiki/Terms_of_Use 使用條款]，閣下同意遵行一切相關的版權條款。',
);

/** Chinese (Hong Kong) (‪中文(香港)‬)
 * @author KaiesTse
 */
$messages['zh-hk'] = array(
	'group-Global_bot' => '全域機械人',
	'group-Global_bot-member' => '全域機械人',
	'wikimedia-copyright' => '本站的全部文字在<a "href="{{localurle:Wikipedia:CC-by-sa-3.0協議文本}}"title="Wikipedia:CC-by-sa-3.0協議文本">共享創意 署名-相同方式共享 3.0</a>協議之條款下提供，同時或受附加條款約束。（請參閱 <a href="http://wikimediafoundation.org/wiki/Terms_of_Use">使用條款</a>）',
);

/** Zulu (isiZulu)
 * @author לערי ריינהארט
 */
$messages['zu'] = array(
	'sitesupport' => 'Izipho',
);

