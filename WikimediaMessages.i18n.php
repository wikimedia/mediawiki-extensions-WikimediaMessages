<?php
/**
 * Internationalisation file for extension Wikimedia Messages
 *
 * @addtogroup Extensions
 * @comment TODO:
 * @comment + Remove current events and community portal from the default sidebar
 * @comment + and add those messages to here
 * @comment + Make the help links on non-Wikimedia sites point to mediawiki.org?
 */

$messages = array();

$messages['en'] = array(
	'wikimediamessages-desc' => 'Wikimedia specific messages',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/Donate', # do not translate this URL to other languages until a donation page, approved by Wikimedia Foundation, exists
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

	# Wikimedia specific usergroups
	'group-accountcreator'        => 'Account creators',
	'group-developer'             => 'Developers',
	'group-founder'               => 'Founders',
	'group-import'                => 'Importers',
	'group-ipblock-exempt'        => 'IP block exemptions',
	'group-rollbacker'            => 'Rollbackers',
	'group-transwiki'             => 'Transwiki importers',

	'group-accountcreator-member' => 'Account creator',
	'group-developer-member'      => 'Developer',
	'group-founder-member'        => 'Founder',
	'group-import-member'         => 'Importer',
	'group-ipblock-exempt-member' => 'IP block exempt',
	'group-rollbacker-member'     => 'Rollbacker',
	'group-transwiki-member'      => 'Transwiki importer',

	'grouppage-accountcreator' => '{{ns:project}}:Account creators',
	'grouppage-developer'      => '{{ns:project}}:Developers',
	'grouppage-founder'        => '{{ns:project}}:Founders',
	'grouppage-import'         => '{{ns:project}}:Importers',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP block exemption',
	'grouppage-rollbacker'     => '{{ns:project}}:Rollbackers',
	'grouppage-transwiki'      => '{{ns:project}}:Transwiki importers',

	# Global Wikimedia specific usergroups (defined on http://meta.wikimedia.org/wiki/Special:GlobalGroupPermissions)

	'group-steward'         => 'Stewards',
	'group-Global bot'      => 'Global bots',
	'group-Global rollback' => 'Global rollbackers',
	'group-Ombudsmen'       => 'Ombudsmen',

	'group-steward-member'         => 'Steward',
	'group-Global bot-member'      => 'Global bot',
	'group-Global rollback-member' => 'Global rollbacker',
	'group-Ombudsmen-member'       => 'Ombudsman',

	'grouppage-steward'         => 'm:Stewards', # do not translate or duplicate this message to other languages
	'grouppage-Global Bot'      => 'm:Global bot', # do not translate or duplicate this message to other languages
	'grouppage-Global rollback' => 'm:Global rollback', # do not translate or duplicate this message to other languages
	'grouppage-Ombudsmen'       => 'm:Ombudsman commission', # do not translate or duplicate this message to other languages
);

/** Dalecarlian (Övdalską*)
 * @author M.M.S.
 */
$messages['dlc'] = array(
	'sitesupport'           => 'Stjaintja',
	'tooltip-n-sitesupport' => 'Styða {{SITENAME}}',
);

/** Afrikaans (Afrikaans)
 * @author SPQRobin
 * @author Siebrand
 * @author Meno25
 * @author Naudefj
 */
$messages['af'] = array(
	'wikimediamessages-desc' => 'Wikimedia spesifieke boodskappe',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/Donate/af',
	'sitesupport'            => 'Skenkings',
	'tooltip-n-sitesupport'  => 'Ondersteun ons',
	'group-developer'        => 'Ontwikkelaars',
	'group-founder'          => 'Grondleggers',
	'group-import'           => 'Importeurders',
	'group-developer-member' => 'Ontwikkelaar',
	'group-founder-member'   => 'Grondlegger',
	'group-import-member'    => 'Importeurder',
	'grouppage-developer'    => '{{ns:project}}:Ontwikkelaars',
	'grouppage-founder'      => '{{ns:project}}:Grondleggers',
	'grouppage-import'       => '{{ns:project}}:Importeurders',
);

/** Gheg Albanian (Gegë)
 * @author Cradel
 */
$messages['aln'] = array(
	'sitesupport'           => 'Dhurime',
	'tooltip-n-sitesupport' => 'Përkraheni projektin',
);

/** Amharic (አማርኛ)
 * @author Codex Sinaiticus
 */
$messages['am'] = array(
	'sitesupport'           => 'መዋጮ ለመስጠት',
	'tooltip-n-sitesupport' => 'የገንዘብ ስጦታ ለዊኪሜድያ ይስጡ',
);

/** Aragonese (Aragonés)
 * @author Juanpabl
 * @author SPQRobin
 */
$messages['an'] = array(
	'wikimediamessages-desc'      => 'Mensaches espezificos de Wikimedia',
	'sitesupport-url'             => 'Project:Donazions',
	'sitesupport'                 => 'Donazions',
	'tooltip-n-sitesupport'       => 'Refirme o procheuto',
	'group-accountcreator'        => 'Creyadors de cuentas',
	'group-developer'             => 'Desembolicadors',
	'group-founder'               => 'Fundadors',
	'group-import'                => 'Importadors',
	'group-ipblock-exempt'        => 'Exenzion de bloqueyo IP',
	'group-rollbacker'            => 'Rebertidors',
	'group-transwiki'             => 'Importadors de transwiki',
	'group-accountcreator-member' => 'Creyador de cuenta',
	'group-developer-member'      => 'Desembolicador',
	'group-founder-member'        => 'Fundador',
	'group-import-member'         => 'Importador',
	'group-ipblock-exempt-member' => 'Exenzion de bloqueyo IP',
	'group-rollbacker-member'     => 'Rebertidor',
	'group-transwiki-member'      => 'Importador transwiki',
	'grouppage-accountcreator'    => '{{ns:project}}:Creyadors de cuenta',
	'grouppage-developer'         => '{{ns:project}}:Desembolicadors',
	'grouppage-founder'           => '{{ns:project}}:Fundadors',
	'grouppage-import'            => '{{ns:project}}:Importadors',
	'grouppage-ipblock-exempt'    => "{{ns:project}}:Exenzión d'o bloqueyo d'IP",
	'grouppage-rollbacker'        => '{{ns:project}}:Rebertidors',
	'grouppage-transwiki'         => '{{ns:project}}:Importardors transwiki',
);

/** Old English (Anglo-Saxon) */
$messages['ang'] = array(
	'sitesupport' => 'Gieldgiefa',
);

/** Arabic (العربية)
 * @author Meno25
 */
$messages['ar'] = array(
	'wikimediamessages-desc'      => 'رسائل خاصة بويكيميديا',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/%D8%AC%D9%85%D8%B9_%D8%AA%D8%A8%D8%B1%D8%B9%D8%A7%D8%AA',
	'sitesupport'                 => 'التبرعات',
	'tooltip-n-sitesupport'       => 'ادعمنا',
	'group-accountcreator'        => 'منشئو الحسابات',
	'group-developer'             => 'مطورون',
	'group-founder'               => 'مؤسسون',
	'group-import'                => 'مستوردون',
	'group-ipblock-exempt'        => 'مستثنون من منع الأيبي',
	'group-rollbacker'            => 'مسترجعون',
	'group-transwiki'             => 'مستوردون عبر الويكي',
	'group-accountcreator-member' => 'منشئ حساب',
	'group-developer-member'      => 'مطور',
	'group-founder-member'        => 'مؤسس',
	'group-import-member'         => 'مستورد',
	'group-ipblock-exempt-member' => 'مستثنى من منع الأيبي',
	'group-rollbacker-member'     => 'مسترجع',
	'group-transwiki-member'      => 'مستورد عبر الويكي',
	'grouppage-accountcreator'    => '{{ns:project}}:منشئو الحسابات',
	'grouppage-developer'         => '{{ns:project}}:مطورون',
	'grouppage-founder'           => '{{ns:project}}:مؤسسون',
	'grouppage-import'            => '{{ns:project}}:مستوردون',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:استثناء من منع الأيبي',
	'grouppage-rollbacker'        => '{{ns:project}}:مسترجعون',
	'grouppage-transwiki'         => '{{ns:project}}:مستوردون عبر الويكي',
);

/** Aramaic (ܐܪܡܝܐ)
 * @author SPQRobin
 */
$messages['arc'] = array(
	'sitesupport' => 'ܕܚܘܝܬܐ',
);

/** Araucanian (Mapudungun)
 * @author Lin linao
 */
$messages['arn'] = array(
	'sitesupport' => 'Elungechi',
);

/** Egyptian Spoken Arabic (مصرى)
 * @author Ghaly
 */
$messages['arz'] = array(
	'sitesupport'            => 'التبرعات',
	'tooltip-n-sitesupport'  => 'ساندنا',
	'group-developer'        => 'مطورين',
	'group-founder'          => 'مؤسسين',
	'group-import'           => 'مستوردين',
	'group-developer-member' => 'مطور',
	'group-founder-member'   => 'مؤسس',
	'group-import-member'    => 'مستورد',
);

/** Assamese (অসমীয়া)
 * @author Psneog
 * @author Rajuonline
 */
$messages['as'] = array(
	'sitesupport'           => 'দান-বৰঙনি',
	'tooltip-n-sitesupport' => 'আমাক সহায় কৰক!',
);

/** Asturian (Asturianu)
 * @author Esbardu
 * @author SPQRobin
 */
$messages['ast'] = array(
	'sitesupport'           => 'Donativos',
	'tooltip-n-sitesupport' => 'Sofítanos',
);

/** Avaric (Авар) */
$messages['av'] = array(
	'sitesupport' => 'Садакъа',
);

/** Kotava (Kotava)
 * @author Wikimistusik
 * @author SPQRobin
 */
$messages['avk'] = array(
	'sitesupport'           => 'Zobera',
	'tooltip-n-sitesupport' => 'Va cin zobel !',
);

/** Aymara (Aymar) */
$messages['ay'] = array(
	'sitesupport' => 'Ramañanaka',
);

/** Azerbaijani (Azərbaycan) */
$messages['az'] = array(
	'sitesupport' => 'Bağışlar',
);

/** Bashkir (Башҡорт) */
$messages['ba'] = array(
	'sitesupport' => 'Ярҙам итеү',
);

/** Samogitian (Žemaitėška)
 * @author Zordsdavini
 * @author Hugo.arg
 */
$messages['bat-smg'] = array(
	'sitesupport' => 'Pagelba',
);

/** Southern Balochi (بلوچی مکرانی)
 * @author Mostafadaneshvar
 * @author Siebrand
 */
$messages['bcc'] = array(
	'wikimediamessages-desc'      => 'کوله یان مخصوص ویکی‌مدیا',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport'                 => 'مدتان',
	'tooltip-n-sitesupport'       => 'ما را حمایت کنیت',
	'group-accountcreator'        => 'حساب شرکنوکان',
	'group-developer'             => 'پیشبروکان',
	'group-founder'               => 'بنگیج کنوکان',
	'group-import'                => 'وارد کنوکان',
	'group-ipblock-exempt'        => 'معافیت محدودیت آی پی',
	'group-rollbacker'            => 'عقب ترینوک',
	'group-transwiki'             => 'واردکنوکان بین‌ویکی',
	'group-accountcreator-member' => 'حساب شرکنوک',
	'group-developer-member'      => 'پیشبروک',
	'group-founder-member'        => 'بنگیج کنوک',
	'group-import-member'         => 'واردکنوک',
	'group-ipblock-exempt-member' => 'استثنای محدودیت آی پی',
	'group-rollbacker-member'     => 'ترینوک',
	'group-transwiki-member'      => 'واردکنوک بین‌ویکی',
	'grouppage-accountcreator'    => '{{ns:project}}:حساب شرکنوکان',
	'grouppage-developer'         => '{{ns:project}}:پیشبروکان',
	'grouppage-founder'           => '{{ns:project}}:بنگیج کنوکان',
	'grouppage-import'            => '{{ns:project}}:واردکنوکان',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:استثناء محدودیت آی پی',
	'grouppage-rollbacker'        => '{{ns:project}}:واردکنوکان',
	'grouppage-transwiki'         => '{{ns:project}}:واردکنوکان بین ویکی',
);

/** Bikol Central (Bikol Central)
 * @author Filipinayzd
 */
$messages['bcl'] = array(
	'sitesupport'           => 'Mga donasyon',
	'tooltip-n-sitesupport' => 'Suportaran kami',
);

/** Belarusian (Беларуская)
 * @author Yury Tarasievich
 */
$messages['be'] = array(
	'sitesupport'           => 'Ахвяраванні',
	'tooltip-n-sitesupport' => 'Падтрымайце нас',
);

/** Belarusian (Taraškievica orthography) (Беларуская (тарашкевіца))
 * @author Red Winged Duck
 * @author EugeneZelenko
 * @author Jim-by
 */
$messages['be-tarask'] = array(
	'wikimediamessages-desc'      => 'Спэцыфічныя паведамленьні фундацыі «Вікімэдыя»',
	'sitesupport-url'             => 'Project:Ахвяраваньні',
	'sitesupport'                 => 'Ахвяраваньні',
	'tooltip-n-sitesupport'       => 'Падтрымайце нас',
	'group-accountcreator'        => 'Стваральнікі рахункаў',
	'group-developer'             => 'Распрацоўшчыкі',
	'group-founder'               => 'Фундатары',
	'group-import'                => 'Імпартэры',
	'group-ipblock-exempt'        => 'Выключэньні з блякаваньняў ІР-адрасоў',
	'group-rollbacker'            => 'Адкатвальнікі',
	'group-transwiki'             => 'Імпартэры зь іншых вікі',
	'group-accountcreator-member' => 'Стваральнік рахункаў',
	'group-developer-member'      => 'Распрацоўшчык',
	'group-founder-member'        => 'Фундатар',
	'group-import-member'         => 'Імпартэр',
	'group-ipblock-exempt-member' => 'Выключэньне з блякаваньняў ІР-адрасоў',
	'group-rollbacker-member'     => 'Адкатвальнік',
	'group-transwiki-member'      => 'Імпартэр зь іншых вікі',
	'grouppage-accountcreator'    => '{{ns:project}}:Стваральнікі рахункаў',
	'grouppage-developer'         => '{{ns:project}}:Распрацоўшчыкі',
	'grouppage-founder'           => '{{ns:project}}:Фундатары',
	'grouppage-import'            => '{{ns:project}}:Імпартэры',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Выключэньні з блякаваньняў ІР-адрасоў',
	'grouppage-rollbacker'        => '{{ns:project}}:Адкатвальнікі',
	'grouppage-transwiki'         => '{{ns:project}}:Імпартэры зь іншых вікі',
);

/** Bulgarian (Български)
 * @author Borislav
 * @author DCLXVI
 * @author Meno25
 */
$messages['bg'] = array(
	'wikimediamessages-desc' => 'Съобщения, специфични за Уикимедия',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/Donate/bg',
	'sitesupport'            => 'Дарения',
	'group-developer'        => 'Разработчици',
	'group-founder'          => 'Основатели',
	'group-developer-member' => 'Разработчик',
	'group-founder-member'   => 'Основател',
	'grouppage-developer'    => '{{ns:project}}:Разработчици',
	'grouppage-founder'      => '{{ns:project}}:Основатели',
);

/** Bambara (Bamanankan) */
$messages['bm'] = array(
	'sitesupport' => 'Banumanke',
);

/** Bengali (বাংলা)
 * @author Zaheen
 * @author Bellayet
 */
$messages['bn'] = array(
	'wikimediamessages-desc'      => 'উইকিমিডিয়া নির্ধারিত বার্তা',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport'                 => 'দান করুন',
	'tooltip-n-sitesupport'       => 'আমাদের সহায়তা করুন',
	'group-accountcreator'        => 'অ্যাকাউন্ট তৈরি করেন যারা',
	'group-developer'             => 'ডেভেলোপারগণ',
	'group-founder'               => 'উদ্যোক্তা',
	'group-import'                => 'আমদানীকারক',
	'group-accountcreator-member' => 'অ্যাকাউন্ট তৈরি করেন যিনি',
	'group-developer-member'      => 'ডেভেলোপার',
	'group-founder-member'        => 'উদ্যোক্তা',
);

/** Tibetan (བོད་ཡིག) */
$messages['bo'] = array(
	'sitesupport' => 'ཞལ་འདེབས།',
);

/** Bishnupriya (ইমার ঠার/বিষ্ণুপ্রিয়া মণিপুরী) */
$messages['bpy'] = array(
	'sitesupport' => 'দান দেনা',
);

/** Breton (Brezhoneg)
 * @author לערי ריינהארט
 * @author Fulup
 */
$messages['br'] = array(
	'wikimediamessages-desc'      => 'Kemennoù dibar Wikimedia',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport'                 => 'Roadoù',
	'tooltip-n-sitesupport'       => "Harpit ac'hanomp",
	'group-accountcreator'        => 'Krouerien kontoù',
	'group-developer'             => 'Diorroer',
	'group-founder'               => 'Diazezourien',
	'group-import'                => 'Enporzhier',
	'group-ipblock-exempt'        => "Nemedennoù bloc'hadoù IP",
	'group-rollbacker'            => 'Assaverien',
	'group-transwiki'             => 'Enporzherien treuzwiki',
	'group-accountcreator-member' => 'Krouer kontoù',
	'group-developer-member'      => 'Diorroer',
	'group-founder-member'        => 'Diazezer',
	'group-import-member'         => 'Enporzhier',
	'group-ipblock-exempt-member' => "Nemedenn bloc'had IP",
	'group-rollbacker-member'     => 'Assaver',
	'group-transwiki-member'      => 'Enporzhier treuzwiki',
	'grouppage-accountcreator'    => '{{ns:project}}: Krouerien kontoù',
	'grouppage-developer'         => '{{ns:project}}:Diorroerien',
	'grouppage-founder'           => '{{ns:project}}:Diazezerien',
	'grouppage-import'            => '{{ns:project}}:Enporzherien',
	'grouppage-ipblock-exempt'    => "{{ns:project}}:Nemedenn bloc'had IP",
	'grouppage-rollbacker'        => '{{ns:project}}:Assaverien',
	'grouppage-transwiki'         => '{{ns:project}}:Enporzherien treuzwiki',
);

/** Bosnian (Bosanski)
 * @author Demicx
 * @author לערי ריינהארט
 */
$messages['bs'] = array(
	'sitesupport'           => 'Donacije',
	'tooltip-n-sitesupport' => 'Podržite nas',
);

/** Catalan (Català)
 * @author Martorell
 */
$messages['ca'] = array(
	'sitesupport' => 'Donacions',
);

/** Min Dong Chinese (Mìng-dĕ̤ng-ngṳ̄) */
$messages['cdo'] = array(
	'sitesupport' => 'Dà̤-giŏng',
);

/** Chechen (Нохчийн) */
$messages['ce'] = array(
	'sitesupport' => 'Сайтан сагIа',
);

/** Cebuano (Cebuano)
 * @author Abastillas
 * @author SPQRobin
 */
$messages['ceb'] = array(
	'sitesupport'           => 'Mga donasyon',
	'tooltip-n-sitesupport' => 'Tabangi kami',
);

/** Chamorro (Chamoru)
 * @author Gadao01
 */
$messages['ch'] = array(
	'sitesupport'           => "Nina'i siha",
	'tooltip-n-sitesupport' => 'Supotta ham',
);

/** Cherokee (ᏣᎳᎩ)
 * @author SPQRobin
 */
$messages['chr'] = array(
	'sitesupport' => 'ᎠᎵᏍᎪᎸᏙᏗ',
);

/** Corsican (Corsu) */
$messages['co'] = array(
	'sitesupport' => 'Dunazione',
);

/** Crimean Turkish (Latin) (Qırımtatarca (Latin)) */
$messages['crh-latn'] = array(
	'sitesupport' => 'Bağışlar',
);

/** Crimean Turkish (Cyrillic) (Qırımtatarca (Cyrillic)) */
$messages['crh-cyrl'] = array(
	'sitesupport' => 'Багъышлар',
);

/** Czech (Česky)
 * @author Danny B.
 * @author Matěj Grabovský
 */
$messages['cs'] = array(
	'wikimediamessages-desc' => 'Hlášení specifická pro projekty nadace Wikimedia Foundation',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/Sponzorstv%C3%AD',
	'sitesupport'            => 'Podpořte nás',
	'tooltip-n-sitesupport'  => 'Podpořte nás',
	'group-developer'        => 'Vývojáři',
	'group-founder'          => 'Zakladatelé',
	'group-developer-member' => 'Vývojář',
	'group-founder-member'   => 'Zakladatel',
	'grouppage-developer'    => '{{ns:project}}:Vývojáři',
	'grouppage-founder'      => '{{ns:project}}:Zakladatelé',
);

/** Church Slavic (Словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 * @author ОйЛ
 */
$messages['cu'] = array(
	'sitesupport' => 'даꙗ́ниꙗ',
);

/** Chuvash (Чăвашла)
 * @author PCode
 */
$messages['cv'] = array(
	'sitesupport'     => 'Пожертвованисем',
);

/** Welsh (Cymraeg)
 * @author Lloffiwr
 */
$messages['cy'] = array(
	'sitesupport' => 'Rhoi arian',
);

/** Danish (Dansk) */
$messages['da'] = array(
	'sitesupport' => 'Støt siden',
);

/** German (Deutsch)
 * @author Raimond Spekking
 */
$messages['de'] = array(
	'wikimediamessages-desc' => 'Wikimediaspezifische Systemnachrichten',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/Spenden',
	'sitesupport'            => 'Spenden',
	'tooltip-n-sitesupport'  => 'Unterstütze uns',
	'group-import'           => 'Importeur',
	'group-developer'        => 'Systemadministrator',
	'group-transwiki'        => 'Transwiki-Importeur',
	'group-import-member'    => 'Importeur',
	'group-developer-member' => 'Systemadministrator',
	'group-transwiki-member' => 'Transwiki-Importeur',
	'grouppage-import'       => '{{ns:project}}:Importeure',
	'grouppage-developer'    => '{{ns:project}}:Systemadministratoren',
	'grouppage-transwiki'    => '{{ns:project}}:Transwiki-Importeure',
);

/** Formal German
 * @author Raimond Spekking
 */
$messages['de-formal'] = array(
	'tooltip-n-sitesupport'  => 'Unterstützen Sie uns',
);

/** Zazaki (Zazaki)
 * @author Mirzali
 */
$messages['diq'] = array(
	'sitesupport' => 'Beğş',
);

/** Lower Sorbian (Dolnoserbski)
 * @author Pe7er
 * @author Qualia
 */
$messages['dsb'] = array(
	'sitesupport'           => 'Dary',
	'tooltip-n-sitesupport' => 'Pódpěraj nas',
);

/** Divehi (ދިވެހިބަސް) */
$messages['dv'] = array(
	'sitesupport' => 'ޚައިރާތުތައް',
);

/** Dzongkha (ཇོང་ཁ)
 * @author Tenzin
 */
$messages['dz'] = array(
	'sitesupport'           => 'ཕན་འདེབས།',
	'tooltip-n-sitesupport' => 'ང་བཅས་ལུ་རྒྱབ་སྐྱོར་འབད།',
);

/** Ewe (Eʋegbe)
 * @author M.M.S.
 */
$messages['ee'] = array(
	'sitesupport'           => 'Wɔ nunana',
	'tooltip-n-sitesupport' => 'Kpe ɖe mía ŋu',
);

/** Greek (Ελληνικά)
 * @author ZaDiak
 * @author Badseed
 * @author Consta
 */
$messages['el'] = array(
	'sitesupport'           => 'Δωρεές',
	'tooltip-n-sitesupport' => 'Υποστηρίξτε μας',
	'group-founder'         => 'Ιδρυτές',
	'group-founder-member'  => 'Ιδρυτής',
	'grouppage-founder'     => '{{ns:project}}:Ιδρυτές',
);

/** Emiliano-Romagnolo (Emiliàn e rumagnòl) */
$messages['eml'] = array(
	'sitesupport' => 'Donaziòun',
);

/** Esperanto (Esperanto)
 * @author Yekrats
 */
$messages['eo'] = array(
	'wikimediamessages-desc'      => 'Specifaj mesaĝoj de Wikimedia',
	'sitesupport'                 => 'Donaci',
	'tooltip-n-sitesupport'       => 'Subteni nin per mono',
	'group-accountcreator'        => 'Kreintoj de kontoj',
	'group-developer'             => 'Programistoj',
	'group-founder'               => 'Fondintoj',
	'group-import'                => 'Importantoj',
	'group-transwiki'             => 'Importintoj de Transvikio',
	'group-accountcreator-member' => 'Kreinto de konto',
	'group-developer-member'      => 'Programisto',
	'group-founder-member'        => 'Fondinto',
	'group-import-member'         => 'Importanto',
	'group-rollbacker-member'     => 'Restariganto',
	'grouppage-accountcreator'    => '{{ns:project}}:Kreintoj de kontoj',
	'grouppage-developer'         => '{{ns:project}}:Programistoj',
	'grouppage-founder'           => '{{ns:project}}:Fondintoj',
	'grouppage-import'            => '{{ns:project}}:Importantoj',
);

/** Spanish (Español) */
$messages['es'] = array(
	'sitesupport' => 'Donaciones',
);

/** Estonian (Eesti)
 * @author WikedKentaur
 */
$messages['et'] = array(
	'sitesupport'           => 'Annetused',
	'tooltip-n-sitesupport' => 'Toeta meid',
);

/** Basque (Euskara)
 * @author SPQRobin
 */
$messages['eu'] = array(
	'sitesupport' => 'Emariak',
);

/** Extremaduran (Estremeñu)
 * @author Better
 */
$messages['ext'] = array(
	'sitesupport'           => 'Donacionis',
	'tooltip-n-sitesupport' => 'Ayúamus',
);

/** Persian (فارسی) */
$messages['fa'] = array(
	'sitesupport' => 'کمک مالی',
);

/** Fulah (Fulfulde)
 * @author SPQRobin
 */
$messages['ff'] = array(
	'sitesupport' => 'Dokkal',
);

/** Finnish (Suomi)
 * @author Nike
 */
$messages['fi'] = array(
	'wikimediamessages-desc'      => 'Wikimedian käyttämiä järjestelmäviestejä.',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate/fi',
	'sitesupport'                 => 'Lahjoitukset',
	'tooltip-n-sitesupport'       => 'Tue meitä',
	'group-accountcreator'        => 'käyttäjätunnusten luojat',
	'group-developer'             => 'ohjelmistokehittäjät',
	'group-founder'               => 'perustajat',
	'group-import'                => 'sivujen tuojat',
	'group-ipblock-exempt'        => 'IP-estoista vapautetut',
	'group-rollbacker'            => 'palauttajat',
	'group-transwiki'             => 'toisesta wikistä sivujen tuojat',
	'group-accountcreator-member' => 'käyttäjätunnusten luoja',
	'group-developer-member'      => 'ohjelmistokehittäjä',
	'group-founder-member'        => 'perustaja',
	'group-import-member'         => 'sivujen tuoja',
	'group-ipblock-exempt-member' => 'IP-estosta vapautettu',
	'group-rollbacker-member'     => 'palauttaja',
	'group-transwiki-member'      => 'toisesta wikistä sivujen tuoja',
	'grouppage-accountcreator'    => '{{ns:project}}:Käyttäjätunnusten luojat',
	'grouppage-developer'         => '{{ns:project}}:Ohjelmistokehittäjät',
	'grouppage-founder'           => '{{ns:project}}:Perustajat',
	'grouppage-import'            => '{{ns:project}}:Sivujen tuojat',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:IP-estoista vapautetut',
	'grouppage-rollbacker'        => '{{ns:project}}:Palauttajat',
	'grouppage-transwiki'         => '{{ns:project}}:Toisista wikeistä sivujen tuojat',
);

/** Võro (Võro)
 * @author Võrok
 */
$messages['fiu-vro'] = array(
	'sitesupport'           => 'Tugõminõ',
	'tooltip-n-sitesupport' => 'Tukõq mi tüüd',
);

/** Fijian (Na Vosa Vakaviti) */
$messages['fj'] = array(
	'sitesupport' => 'Soli',
);

/** French (Français)
 * @author לערי ריינהארט
 * @author Grondin
 * @author Meno25
 */
$messages['fr'] = array(
	'wikimediamessages-desc'      => 'Messages spécifiques de Wikimedia',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate/fr',
	'sitesupport'                 => 'Faire un don',
	'tooltip-n-sitesupport'       => 'Aidez nous',
	'group-accountcreator'        => 'Créateurs de comptes',
	'group-developer'             => 'Développeur',
	'group-founder'               => 'Fondateurs',
	'group-import'                => 'Importateur',
	'group-ipblock-exempt'        => 'Exemptions de blocs IP',
	'group-rollbacker'            => 'Réverteurs',
	'group-transwiki'             => 'Importateur Transwiki',
	'group-accountcreator-member' => 'Créateur de comptes',
	'group-developer-member'      => 'Développeur',
	'group-founder-member'        => 'Fondateur',
	'group-import-member'         => 'Importateur',
	'group-ipblock-exempt-member' => 'Exemption de bloc IP',
	'group-rollbacker-member'     => 'Réverteur',
	'group-transwiki-member'      => 'Importateur Transwiki',
	'grouppage-accountcreator'    => '{{ns:project}}:Créateurs de comptes',
	'grouppage-developer'         => '{{ns:project}}:Développeurs',
	'grouppage-founder'           => '{{ns:project}}:Fondateurs',
	'grouppage-import'            => '{{ns:project}}:Importateurs',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Exemption de bloc IP',
	'grouppage-rollbacker'        => '{{ns:project}}:Réverteurs',
	'grouppage-transwiki'         => '{{ns:project}}:Importateurs Transwiki',
);

/** Cajun French (Français cadien)
 * @author JeanVoisin
 */
$messages['frc'] = array(
	'sitesupport' => "Donner de l'argent",
);

/** Franco-Provençal (Arpetan)
 * @author ChrisPtDe
 */
$messages['frp'] = array(
	'sitesupport'           => 'Balyér',
	'tooltip-n-sitesupport' => 'Sotegnéd lo projèt.',
);

/** Friulian (Furlan)
 * @author Klenje
 */
$messages['fur'] = array(
	'sitesupport'           => 'Doninus',
	'tooltip-n-sitesupport' => 'Judinus',
);

/** Western Frisian (Frysk)
 * @author Pyt
 */
$messages['fy'] = array(
	'sitesupport'           => 'Jildlik stypje',
	'tooltip-n-sitesupport' => 'Stypje ús',
);

/** Irish (Gaeilge) */
$messages['ga'] = array(
	'sitesupport' => 'Síntiúis',
);

/** Gagauz (Gagauz)
 * @author Cuman
 */
$messages['gag'] = array(
	'sitesupport'           => 'Baaşişlär',
	'tooltip-n-sitesupport' => 'Material destek',
);

/** Gan (贛語)
 * @author Symane
 */
$messages['gan'] = array(
	'sitesupport'           => '贊助',
	'tooltip-n-sitesupport' => '資援偶嗰俚',
);

/** Scottish Gaelic (Gàidhlig) */
$messages['gd'] = array(
	'sitesupport' => 'Tabhartasan',
);

/** Galician (Galego)
 * @author Toliño
 * @author Alma
 * @author Xosé
 * @author Meno25
 */
$messages['gl'] = array(
	'wikimediamessages-desc'      => 'Mensaxes específicas da Wikimedia',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate/gl',
	'sitesupport'                 => 'Doazóns',
	'tooltip-n-sitesupport'       => 'Apóienos',
	'group-accountcreator'        => 'Creadores de contas',
	'group-developer'             => 'Desenvolvedores',
	'group-founder'               => 'Fundadores',
	'group-import'                => 'Importadores',
	'group-ipblock-exempt'        => 'Exención de bloqueo IP',
	'group-rollbacker'            => 'Revertidores',
	'group-transwiki'             => 'Importadores transwiki',
	'group-accountcreator-member' => 'Creador de contas',
	'group-developer-member'      => 'Desenvolvedor',
	'group-founder-member'        => 'Fundador',
	'group-import-member'         => 'Importador',
	'group-ipblock-exempt-member' => 'Exento de bloqueo IP',
	'group-rollbacker-member'     => 'Revertidor',
	'group-transwiki-member'      => 'Importador transwiki',
	'grouppage-accountcreator'    => '{{ns:project}}:Creadores de contas',
	'grouppage-developer'         => '{{ns:project}}:Desenvolvedores',
	'grouppage-founder'           => '{{ns:project}}:Fundadores',
	'grouppage-import'            => '{{ns:project}}:Importadores',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Exención de bloqueo IP',
	'grouppage-rollbacker'        => '{{ns:project}}:Revertidores',
	'grouppage-transwiki'         => '{{ns:project}}:Importadores transwiki',
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

/** Gothic (𐌲𐌿𐍄𐌹𐍃𐌺)
 * @author Jocke Pirat
 */
$messages['got'] = array(
	'sitesupport'           => 'Hairtiþaskatts',
	'tooltip-n-sitesupport' => 'Hairtiþ uns',
);

/** Ancient Greek (Ἀρχαία ἑλληνικὴ)
 * @author LeighvsOptimvsMaximvs
 * @author Omnipaedista
 */
$messages['grc'] = array(
	'sitesupport'           => 'Δῶρα',
	'tooltip-n-sitesupport' => 'Τρέφειν ἡμᾶς',
);

/** Swiss German (Alemannisch) */
$messages['gsw'] = array(
	'sitesupport' => 'Finanzielli Hilf',
);

/** Gujarati (ગુજરાતી)
 * @author Aksi great
 * @author לערי ריינהארט
 * @author Dsvyas
 */
$messages['gu'] = array(
	'sitesupport'           => 'દાન',
	'tooltip-n-sitesupport' => 'અમારું સમર્થન કરો',
);

/** Manx (Gaelg)
 * @author MacTire02
 */
$messages['gv'] = array(
	'sitesupport'           => 'Toyrtysyn',
	'tooltip-n-sitesupport' => 'Cooin lhien',
);

/** Hakka (Hak-kâ-fa)
 * @author Hakka
 */
$messages['hak'] = array(
	'sitesupport'           => 'Chan-chhu',
	'tooltip-n-sitesupport' => 'Chṳ̂-chhu',
);

/** Hawaiian (Hawai`i)
 * @author Singularity
 */
$messages['haw'] = array(
	'sitesupport'           => 'E lūlū mai',
	'tooltip-n-sitesupport' => 'Kāko‘o mai',
);

/** Hebrew (עברית)
 * @author Rotem Liss
 */
$messages['he'] = array(
	'wikimediamessages-desc'      => 'הודעות המיוחדות לוויקימדיה',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/תרומות',
	'sitesupport'                 => 'תרומות',
	'tooltip-n-sitesupport'       => 'תרומה',
	'group-accountcreator'        => 'יוצרי חשבונות',
	'group-developer'             => 'מפתחים',
	'group-founder'               => 'מייסדים',
	'group-import'                => 'מייבאים',
	'group-ipblock-exempt'        => 'חסיני חסימות IP',
	'group-rollbacker'            => 'משחזרים',
	'group-transwiki'             => 'מייבאים בין־אתריים',
	'group-accountcreator-member' => 'יוצר חשבונות',
	'group-developer-member'      => 'מפתח',
	'group-founder-member'        => 'מייסד',
	'group-import-member'         => 'מייבא',
	'group-ipblock-exempt-member' => 'חסין חסימות IP',
	'group-rollbacker-member'     => 'משחזר',
	'group-transwiki-member'      => 'מייבא בין־אתרי',
	'grouppage-accountcreator'    => '{{ns:project}}:יוצר חשבונות',
	'grouppage-developer'         => '{{ns:project}}:מפתח',
	'grouppage-founder'           => '{{ns:project}}:מייסד',
	'grouppage-import'            => '{{ns:project}}:מייבא',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:חסין חסימות IP',
	'grouppage-rollbacker'        => '{{ns:project}}:משחזר',
	'grouppage-transwiki'         => '{{ns:project}}:מייבא בין-אתרי',

	# Global Wikimedia specific usergroups (defined on http://meta.wikimedia.org/wiki/Special:GlobalGroupPermissions)

	'group-steward'         => 'דיילים',
	'group-Global bot'      => 'בוטים גלובליים',
	'group-Global rollback' => 'משחזרים גלובליים',
	'group-Ombudsmen'       => 'נציבי תלונות הציבור',

	'group-steward-member'         => 'דייל',
	'group-Global bot-member'      => 'בוט גלובלי',
	'group-Global rollback-member' => 'משחזר גלובלי',
	'group-Ombudsmen-member'       => 'נציב תלונות הציבור',
);

/** Hindi (हिन्दी)
 * @author Kaustubh
 * @author לערי ריינהארט
 */
$messages['hi'] = array(
	'sitesupport'           => 'दान',
	'tooltip-n-sitesupport' => 'हमें सहायता दें',
);

/** Fiji Hindi (Latin) (Fiji Hindi (Latin))
 * @author Girmitya
 */
$messages['hif-latn'] = array(
	'sitesupport'           => 'Daan',
	'tooltip-n-sitesupport' => 'Ham log ke sahara do',
);

/** Hiligaynon (Ilonggo)
 * @author Kguirnela
 * @author Jose77
 */
$messages['hil'] = array(
	'sitesupport'           => 'Donasyon',
	'tooltip-n-sitesupport' => 'Sakdaga kami',
);

/** Croatian (Hrvatski) */
$messages['hr'] = array(
	'sitesupport' => 'Novčani prilozi',
);

/** Upper Sorbian (Hornjoserbsce)
 * @author Michawiki
 */
$messages['hsb'] = array(
	'sitesupport'           => 'Dary',
	'tooltip-n-sitesupport' => 'Podpěrajće nas',
);

/** Haitian (Kreyòl ayisyen)
 * @author Masterches
 */
$messages['ht'] = array(
	'sitesupport-url'       => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport'           => 'Fè yon don',
	'tooltip-n-sitesupport' => 'Soutni pwojè a',
);

/** Hungarian (Magyar)
 * @author Dani
 */
$messages['hu'] = array(
	'wikimediamessages-desc'      => 'Wikimedia-specifikus üzenetek',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport'                 => 'Adományok',
	'tooltip-n-sitesupport'       => 'Támogatás',
	'group-accountcreator'        => 'fióklétrehozók',
	'group-developer'             => 'fejlesztők',
	'group-founder'               => 'alapítók',
	'group-import'                => 'importálók',
	'group-ipblock-exempt'        => 'IP-blokkok alól mentesülők',
	'group-rollbacker'            => 'visszaállítók',
	'group-transwiki'             => 'wikiközi importálók',
	'group-accountcreator-member' => 'fióklétrehozó',
	'group-developer-member'      => 'fejlesztő',
	'group-founder-member'        => 'alapító',
	'group-import-member'         => 'importáló',
	'group-ipblock-exempt-member' => 'IP-blokkok alól mentesülő',
	'group-rollbacker-member'     => 'visszaállító',
	'group-transwiki-member'      => 'wikiközi importáló',
	'grouppage-accountcreator'    => '{{ns:project}}:Fióklétrehozók',
	'grouppage-developer'         => '{{ns:project}}:Fejlesztők',
	'grouppage-founder'           => '{{ns:project}}:Alapítók',
	'grouppage-import'            => '{{ns:project}}:Importálók',
	'grouppage-ipblock-exempt'    => 'Mentesülés az IP-blokkok alól',
	'grouppage-rollbacker'        => '{{ns:project}}:Visszaállítók',
	'grouppage-transwiki'         => '{{ns:project}}:Wikiközi importálók',
);

/** Armenian (Հայերեն)
 * @author Teak
 */
$messages['hy'] = array(
	'sitesupport' => 'Դրամական նվիրատվություն',
);

/** Interlingua (Interlingua)
 * @author Malafaya
 * @author McDutchie
 */
$messages['ia'] = array(
	'wikimediamessages-desc'      => 'Messages specific de Wikimedia',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport'                 => 'Donationes',
	'tooltip-n-sitesupport'       => 'Sustene nos',
	'group-accountcreator'        => 'Creatores de contos',
	'group-developer'             => 'Disveloppatores',
	'group-founder'               => 'Fundatores',
	'group-import'                => 'Importatores',
	'group-ipblock-exempt'        => 'Exemptiones de blocos IP',
	'group-rollbacker'            => 'Revertitores',
	'group-transwiki'             => 'Importatores transwiki',
	'group-accountcreator-member' => 'Creator de contos',
	'group-developer-member'      => 'Disveloppator',
	'group-founder-member'        => 'Fundator',
	'group-import-member'         => 'Importator',
	'group-ipblock-exempt-member' => 'Exemption de bloco IP',
	'group-rollbacker-member'     => 'Revertitor',
	'group-transwiki-member'      => 'Importator transwiki',
	'grouppage-accountcreator'    => '{{ns:project}}:Creatores de contos',
	'grouppage-developer'         => '{{ns:project}}:Disveloppatores',
	'grouppage-founder'           => '{{ns:project}}:Fundatores',
	'grouppage-import'            => '{{ns:project}}:Importatores',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Exemption de blocos IP',
	'grouppage-rollbacker'        => '{{ns:project}}:Revertitores',
	'grouppage-transwiki'         => '{{ns:project}}:Importatores transwiki',
);

/** Indonesian (Bahasa Indonesia)
 * @author Rex
 */
$messages['id'] = array(
	'wikimediamessages-desc'      => 'Pesan-pesan spesifik Wikimedia',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Penggalangan_dana',
	'sitesupport'                 => 'Menyumbang',
	'tooltip-n-sitesupport'       => 'Dukung kami',
	'group-accountcreator'        => 'Pembuat akun',
	'group-developer'             => 'Developer',
	'group-founder'               => 'Pendiri',
	'group-import'                => 'Importir',
	'group-ipblock-exempt'        => 'Pengecualian pemblokiran IP',
	'group-rollbacker'            => 'Pengembali revisi',
	'group-transwiki'             => 'Importir transwiki',
	'group-accountcreator-member' => 'Pembuat akun',
	'group-developer-member'      => 'Developer',
	'group-founder-member'        => 'Pendiri',
	'group-import-member'         => 'Importir',
	'group-ipblock-exempt-member' => 'Pengecualian pemblokiran IP',
	'group-rollbacker-member'     => 'Pengembali revisi',
	'group-transwiki-member'      => 'Importir transwiki',
	'grouppage-accountcreator'    => '{{ns:project}}:Pembuat akun',
	'grouppage-developer'         => '{{ns:project}}:Developer',
	'grouppage-founder'           => '{{ns:project}}:Pendiri',
	'grouppage-import'            => '{{ns:project}}:Importir',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Pengecualian pemblokiran IP',
	'grouppage-rollbacker'        => '{{ns:project}}:Pengembali revisi',
	'grouppage-transwiki'         => '{{ns:project}}:Importir transwiki',
);

/** Interlingue (Interlingue)
 * @author Malafaya
 */
$messages['ie'] = array(
	'sitesupport' => 'Donationes',
);

/** Eastern Canadian (Unified Canadian Aboriginal Syllabics) (ᐃᓄᒃᑎᑐᑦ)
 * @author SPQRobin
 */
$messages['ike-cans'] = array(
	'sitesupport' => 'ᑐᓐᓂᖅᑯᓯᐊᑦ ᑮᓇᐅᔭᐃᑦ',
);

/** Eastern Canadian (Latin) (ᐃᓄᒃᑎᑐᑦ)
$messages['ike-latn'] = array(
	'sitesupport' => 'tunniqkusiat kiinaujait',
);

/** Iloko (Ilokano)
 * @author Saluyot
 * @author לערי ריינהארט
 */
$messages['ilo'] = array(
	'sitesupport'           => 'Donasion',
	'tooltip-n-sitesupport' => 'Suportarandakami',
);

/** Iloko (Ilokano)
 * @author Saluyot
 * @author לערי ריינהארט
 */
$messages['ilo'] = array(
	'sitesupport'           => 'Donasion',
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
 * @author לערי ריינהארט
 */
$messages['io'] = array(
	'sitesupport'           => 'Donacaji',
	'tooltip-n-sitesupport' => 'Suportez ni',
);

/** Icelandic (Íslenska)
 * @author S.Örvarr.S
 * @author לערי ריינהארט
 */
$messages['is'] = array(
	'sitesupport'           => 'Fjárframlög',
	'tooltip-n-sitesupport' => 'Fjárframlagssíða',
);

/** Italian (Italiano)
 * @author Pietrodn
 * @author Darth Kule
 */
$messages['it'] = array(
	'wikimediamessages-desc' => 'Messaggi specifici di Wikimedia',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/Donazioni',
	'sitesupport'            => 'Donazioni',
	'tooltip-n-sitesupport'  => 'Sostienici',
);

/** Japanese (日本語)
 * @author JtFuruhata
 * @author Meno25
 */
$messages['ja'] = array(
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/ja',
	'sitesupport'     => '寄付',
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
	'sitesupport'           => 'Støtside',
	'tooltip-n-sitesupport' => 'Støt os',
);

/** Javanese (Basa Jawa)
 * @author Meursault2004
 */
$messages['jv'] = array(
	'sitesupport'           => 'Nyumbang dana',
	'tooltip-n-sitesupport' => 'Sokongen kita',
);

/** Georgian (ქართული)
 * @author Alsandro
 * @author לערי ריינהארט
 */
$messages['ka'] = array(
	'sitesupport'           => 'შეწირულობები',
	'tooltip-n-sitesupport' => 'მხარდაჭერა',
);

/** Kara-Kalpak (Qaraqalpaqsha)
 * @author AlefZet
 */
$messages['kaa'] = array(
	'sitesupport'           => "Ja'rdem berıw",
	'tooltip-n-sitesupport' => "Bizge ja'rdem berin'",
);

/** Kabyle (Taqbaylit)
 * @author Agurzil
 */
$messages['kab'] = array(
	'sitesupport'           => 'Efk-aɣ idrimen',
	'tooltip-n-sitesupport' => 'Ellil-aɣ',
);

/** Kazakh (Arabic script) (‫قازاقشا (تٴوتە)‬)
 * @author Siebrand
 */
$messages['kk-arab'] = array(
	'sitesupport' => 'دەمەۋشىلىك',
);

/** Kazakh (Cyrillic) (Қазақша (Cyrillic)) */
$messages['kk-cyrl'] = array(
	'sitesupport' => 'Демеушілік',
);

/** Kazakh (Latin) (Қазақша (Latin))
 * @author Siebrand
 */
$messages['kk-latn'] = array(
	'sitesupport' => 'Demewşilik',
);

/** Khmer (ភាសាខ្មែរ)
 * @author តឹក ប៊ុនលី
 * @author គីមស៊្រុន
 * @author Lovekhmer
 */
$messages['km'] = array(
	'sitesupport-url'             => 'Project:ទំព័រគាំទ្រ',
	'sitesupport'                 => 'វិភាគទាន',
	'tooltip-n-sitesupport'       => 'គាំទ្រ​យើងខ្ញុំ',
	'group-accountcreator'        => 'អ្នកបង្កើតគណនី',
	'group-founder'               => 'ស្ថាបនិក',
	'group-accountcreator-member' => 'អ្នកបង្កើតគណនី',
	'group-founder-member'        => 'ស្ថាបនិក',
	'grouppage-accountcreator'    => '{{ns:project}}:អ្នកបង្កើតគណនី',
);

/** Kannada (ಕನ್ನಡ)
 * @author Shushruth
 * @author לערי ריינהארט
 */
$messages['kn'] = array(
	'sitesupport'           => 'ದೇಣಿಗೆ',
	'tooltip-n-sitesupport' => 'ನಮ್ಮನ್ನು ಬೆಂಬಲಿಸಿ',
);

/** Korean (한국어)
 * @author Klutzy
 */
$messages['ko'] = array(
	'sitesupport' => '기부 안내',
);

/** Kinaray-a (Kinaray-a)
 * @author RonaldPanaligan
 */
$messages['krj'] = array(
	'sitesupport' => 'Donasyon',
);

/** Ripoarisch (Ripoarisch)
 * @author Purodha
 */
$messages['ksh'] = array(
	'wikimediamessages-desc'      => 'Systemnohrechte un Tex för de Wikimedia Wikis',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Spende',
	'sitesupport'                 => 'Spende',
	'tooltip-n-sitesupport'       => 'Donn uns Ungerstötze!',
	'group-accountcreator'        => 'Metmaacher-Maachere',
	'group-developer'             => 'Entwecklere',
	'group-founder'               => 'Jröndere',
	'group-import'                => 'Emportöre',
	'group-ipblock-exempt'        => 'IP-Jruppe-Sperre-Ußnahme',
	'group-rollbacker'            => 'Zeröcknemmere',
	'group-transwiki'             => 'Transwiki-Emportöre',
	'group-accountcreator-member' => 'Metmaacher-Maacher',
	'group-developer-member'      => 'Entweckler',
	'group-founder-member'        => 'Jrönder',
	'group-import-member'         => 'Emportör',
	'group-ipblock-exempt-member' => 'IP-Jruppe-Sperre-Ußnahm',
	'group-rollbacker-member'     => 'Zeröcknemmer',
	'group-transwiki-member'      => 'Transwiki-Emportör',
	'grouppage-accountcreator'    => '{{ns:project}}:Metmaacher-Maacher',
	'grouppage-developer'         => '{{ns:project}}:Entweckler',
	'grouppage-founder'           => '{{ns:project}}:Jrönder',
	'grouppage-import'            => '{{ns:project}}:Emportör',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:IP-Jruppe-Sperre-Ußnahm',
	'grouppage-rollbacker'        => '{{ns:project}}:Zeröcknemmer',
	'grouppage-transwiki'         => '{{ns:project}}:Transwiki-Emportör',
);

/** Kurdish (Latin) (Kurdî / كوردی (Latin)) */
$messages['ku-latn'] = array(
	'sitesupport' => 'Ji bo Weqfa Wikimedia Beş',
);

/** Cornish (Kernewek)
 * @author Malafaya
 */
$messages['kw'] = array(
	'sitesupport' => 'Riansow',
);

/** Kirghiz (Кыргызча) */
$messages['ky'] = array(
	'sitesupport' => 'Демөөр',
);

/** Latin (Latina)
 * @author לערי ריינהארט
 */
$messages['la'] = array(
	'sitesupport' => 'Donationes',
);

/** Ladino (Ladino)
 * @author לערי ריינהארט
 */
$messages['lad'] = array(
	'sitesupport' => 'Donasiones',
);

/** Luxembourgish (Lëtzebuergesch)
 * @author Robby
 * @author לערי ריינהארט
 * @author Kaffi
 */
$messages['lb'] = array(
	'wikimediamessages-desc'      => 'Spezifesch Systemmessage fir Wikimedia',
	'sitesupport-url'             => 'Project:En Don maachen',
	'sitesupport'                 => 'Donatiounen',
	'tooltip-n-sitesupport'       => 'Ënnerstetzt eis',
	'group-accountcreator'        => 'Benotzer déi Benotzerkonten uleeën däerfen',
	'group-developer'             => 'System-Entwéckler',
	'group-founder'               => 'Grënner',
	'group-import'                => 'Importateuren',
	'group-ipblock-exempt'        => 'Ausnahme vun IP-Spären',
	'group-transwiki'             => 'Transwiki-Importateuren',
	'group-accountcreator-member' => 'Benotzer dee Benotzerkonten uleeën däerf',
	'group-developer-member'      => 'System-Entwéckler',
	'group-founder-member'        => 'Grënner',
	'group-import-member'         => 'Importateur',
	'group-ipblock-exempt-member' => 'Ausnam vun der IP-Spär',
	'group-transwiki-member'      => 'Transwiki-Importateur',
	'grouppage-accountcreator'    => '{{ns:project}}:Benotzer déi Benotzerkonten uleeën däerfen',
	'grouppage-developer'         => '{{ns:project}}:System-Entwéckler',
	'grouppage-founder'           => '{{ns:project}}:Grënner',
	'grouppage-import'            => '{{ns:project}}:Importateuren',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Ausnahm vun der IP-Spär',
	'grouppage-transwiki'         => '{{ns:project}}:Transwiki-Importateuren',
);

/** Lingua Franca Nova (Lingua Franca Nova)
 * @author Cgboeree
 */
$messages['lfn'] = array(
	'sitesupport'           => 'Donas',
	'tooltip-n-sitesupport' => 'suporta nos',
);

/** Ganda (Luganda)
 * @author Kizito
 */
$messages['lg'] = array(
	'sitesupport'           => 'Okutonera wiki',
	'tooltip-n-sitesupport' => "Nyiga wano ob'oyagala wiki okugiwa obuyambi obw'ensimbi",
);

/** Limburgish (Limburgs)
 * @author לערי ריינהארט
 */
$messages['li'] = array(
	'sitesupport' => 'Donaties',
);

/** Líguru (Líguru)
 * @author ZeneizeForesto
 */
$messages['lij'] = array(
	'sitesupport'           => 'Donasioin',
	'tooltip-n-sitesupport' => 'Agiûttine',
);

/** Lumbaart (Lumbaart)
 * @author SPQRobin
 */
$messages['lmo'] = array(
	'sitesupport' => 'Dunazziun',
);

/** Lingala (Lingála)
 * @author SPQRobin
 */
$messages['ln'] = array(
	'sitesupport' => 'Kofutela',
);

/** Lao (ລາວ)
 * @author Tuinui
 */
$messages['lo'] = array(
	'sitesupport'           => 'ບໍລິຈາກ',
	'tooltip-n-sitesupport' => 'ສະໜັບສະໜຸນພວກເຮົາ',
);

/** Lozi (Silozi)
 * @author Ooswesthoesbes
 * @author SF-Language
 */
$messages['loz'] = array(
	'sitesupport'           => 'Adonetarina',
	'tooltip-n-sitesupport' => 'Sepotisize',
);

/** Lithuanian (Lietuvių) */
$messages['lt'] = array(
	'sitesupport' => 'Parama',
);

/** Latvian (Latviešu)
 * @author Yyy
 */
$messages['lv'] = array(
	'sitesupport' => 'Ziedojumi',
);

/** Moksha (Мокшень)
 * @author Kranch
 * @author Numulunj pilgae
 */
$messages['mdf'] = array(
	'sitesupport'           => 'Лезкс максома',
	'tooltip-n-sitesupport' => 'Макст тейнек лезкс',
);

/** Malagasy (Malagasy) */
$messages['mg'] = array(
	'sitesupport' => 'Fanomezana',
);

/** Maori (Māori) */
$messages['mi'] = array(
	'sitesupport' => 'Koha',
);

/** Macedonian (Македонски) */
$messages['mk'] = array(
	'sitesupport' => 'Донации',
);

/** Malayalam (മലയാളം)
 * @author Shijualex
 * @author לערי ריינהארט
 * @author Meno25
 */
$messages['ml'] = array(
	'sitesupport-url'       => 'http://wikimediafoundation.org/wiki/Donate/ml',
	'sitesupport'           => 'സംഭാവന',
	'tooltip-n-sitesupport' => 'ഞങ്ങളെ പിന്തുണക്കുക',
);

/** Mongolian (Монгол)
 * @author Chinneeb
 * @author לערי ריינהארט
 */
$messages['mn'] = array(
	'sitesupport'           => 'Хандив',
	'tooltip-n-sitesupport' => 'Биднийг дэмжээрэй',
);

/** Marathi (मराठी)
 * @author Mahitgar
 */
$messages['mr'] = array(
	'sitesupport' => 'दान',
);

/** Malay (Bahasa Melayu)
 * @author Aviator
 */
$messages['ms'] = array(
	'wikimediamessages-desc'      => 'Pesanan-pesanan Wikimedia',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport'                 => 'Derma',
	'tooltip-n-sitesupport'       => 'Derma',
	'group-accountcreator'        => 'Pencipta akaun',
	'group-developer'             => 'Pembangun',
	'group-founder'               => 'Pengasas',
	'group-import'                => 'Pengimport',
	'group-ipblock-exempt'        => 'Pengecualian sekatan IP',
	'group-rollbacker'            => 'Pengundur',
	'group-transwiki'             => 'Pengimport rentas wiki',
	'group-accountcreator-member' => 'Pencipta akaun',
	'group-developer-member'      => 'Pembangun',
	'group-founder-member'        => 'Pengasas',
	'group-import-member'         => 'Pengimport',
	'group-ipblock-exempt-member' => 'Pengecualian sekatan IP',
	'group-rollbacker-member'     => 'Pengundur',
	'group-transwiki-member'      => 'Pengimport rentas wiki',
	'grouppage-accountcreator'    => '{{ns:project}}:Pencipta akaun',
	'grouppage-developer'         => '{{ns:project}}:Pembangun',
	'grouppage-founder'           => '{{ns:project}}:Pengasas',
	'grouppage-import'            => '{{ns:project}}:Pengimport',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Pengecualian sekatan IP',
	'grouppage-rollbacker'        => '{{ns:project}}:Pengundur',
	'grouppage-transwiki'         => '{{ns:project}}:Pengimport rentas wiki',
);

/** Maltese (Malti)
 * @author Giangian15
 */
$messages['mt'] = array(
	'wikimediamessages-desc' => "Messaġġi speċifiki ta' Wikimedija",
	'sitesupport'            => 'Donazzjonijiet',
	'tooltip-n-sitesupport'  => 'Appoġġjana',
);

/** Mirandese (Mirandés)
 * @author MCruz
 */
$messages['mwl'] = array(
	'sitesupport'           => 'Donativos',
	'tooltip-n-sitesupport' => 'Ayude-nos',
);

/** Burmese (Myanmasa)
 * @author Hintha
 * @author Hakka
 */
$messages['my'] = array(
	'sitesupport'           => 'လှု​ဒါန်း​မှု​',
	'tooltip-n-sitesupport' => 'အားပေးပါ',
);

/** Erzya (Эрзянь)
 * @author Botuzhaleny-sodamo
 */
$messages['myv'] = array(
	'sitesupport'           => 'Лезксйармаконь максома',
	'tooltip-n-sitesupport' => 'Макста миненек нежедематарка',
);

/** Nauru (Ekakairũ Naoero) */
$messages['na'] = array(
	'sitesupport' => 'Eadu a me',
);

/** Nahuatl (Nahuatl)
 * @author Fluence
 */
$messages['nah'] = array(
	'sitesupport'           => 'Tēyocatiliztli',
	'tooltip-n-sitesupport' => 'Xitēchtēpalēhuia',
	'group-founder-member'  => 'Chīhualōni',
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
 * @author לערי ריינהארט
 * @author Slomox
 */
$messages['nds'] = array(
	'sitesupport' => 'Spennen',
);

/** Nedersaksisch (Nedersaksisch)
 * @author לערי ריינהארט
 * @author Servien
 */
$messages['nds-nl'] = array(
	'sitesupport'           => 'Financiële steun',
	'tooltip-n-sitesupport' => 'Gef oons geald',
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
 * @author Siebrand
 * @author Troefkaart
 * @author SPQRobin
 */
$messages['nl'] = array(
	'wikimediamessages-desc'      => 'Berichten voor Wikimedia',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Giften',
	'sitesupport'                 => 'Donaties',
	'tooltip-n-sitesupport'       => 'Ondersteun ons financieel',
	'group-accountcreator'        => 'Gebruikersaanmakers',
	'group-developer'             => 'Ontwikkelaars',
	'group-founder'               => 'Grondleggers',
	'group-import'                => 'Importeurs',
	'group-ipblock-exempt'        => 'Uitgezonderden van IP-adres blokkades',
	'group-rollbacker'            => 'Terugdraaiers',
	'group-transwiki'             => 'Transwikiimporteurs',
	'group-accountcreator-member' => 'Gebruikersaanmaker',
	'group-developer-member'      => 'Ontwikkelaar',
	'group-founder-member'        => 'Grondlegger',
	'group-import-member'         => 'Importeur',
	'group-ipblock-exempt-member' => 'Uitgezonderde van IP-adresblokkades',
	'group-rollbacker-member'     => 'Terugdraaier',
	'group-transwiki-member'      => 'Transwikiimporteur',
	'grouppage-accountcreator'    => '{{ns:project}}:Gebruikersaanmakers',
	'grouppage-developer'         => '{{ns:project}}:Ontwikkelaars',
	'grouppage-founder'           => '{{ns:project}}:Grondleggers',
	'grouppage-import'            => '{{ns:project}}:Importeurs',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Uitgezonderden van IP-adresblokkades',
	'grouppage-rollbacker'        => '{{ns:project}}:Terugdraaiers',
	'grouppage-transwiki'         => '{{ns:project}}:Transwikiimporteurs',
);

/** Norwegian Nynorsk (‪Norsk (nynorsk)‬) */
$messages['nn'] = array(
	'sitesupport-url' => 'http://wikimediafoundation.org/wiki/Donate/nn',
	'sitesupport'     => 'Gåver',
);

/** Norwegian (bokmål)‬ (‪Norsk (bokmål)‬)
 * @author Jon Harald Søby
 */
$messages['no'] = array(
	'wikimediamessages-desc'      => 'Wikimedia-spesifikke beskjeder',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate/nb',
	'sitesupport'                 => 'Donasjoner',
	'tooltip-n-sitesupport'       => 'Støtt oss',
	'group-accountcreator'        => 'Kontoopprettere',
	'group-developer'             => 'Utviklere',
	'group-founder'               => 'Grunnleggere',
	'group-import'                => 'Importører',
	'group-ipblock-exempt'        => 'Untatte fra IP-blokkering',
	'group-rollbacker'            => 'Tilbakestillere',
	'group-transwiki'             => 'Transwiki-importører',
	'group-accountcreator-member' => 'Kontooppretter',
	'group-developer-member'      => 'Utvikler',
	'group-founder-member'        => 'Grunnlegger',
	'group-import-member'         => 'Importør',
	'group-ipblock-exempt-member' => 'Unttatt fra IP-blokkering',
	'group-rollbacker-member'     => 'Tilbakestiller',
	'group-transwiki-member'      => 'Transwiki-importør',
	'grouppage-accountcreator'    => '{{ns:project}}:Kontoopprettere',
	'grouppage-developer'         => '{{ns:project}}:Utviklere',
	'grouppage-founder'           => '{{ns:project}}:Grunnleggere',
	'grouppage-import'            => '{{ns:project}}:Importører',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Unntatte fra IP-blokkering',
	'grouppage-rollbacker'        => '{{ns:project}}:Tilbakestillere',
	'grouppage-transwiki'         => '{{ns:project}}:Transwiki-importører',
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
	'sitesupport'           => 'Dineelo',
	'tooltip-n-sitesupport' => 'Re thekge',
);

/** Occitan (Occitan)
 * @author Cedric31
 */
$messages['oc'] = array(
	'sitesupport'           => 'Far un don',
	'tooltip-n-sitesupport' => 'Sostenètz lo projècte',
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
	'sitesupport'           => 'Donasiun',
	'tooltip-n-sitesupport' => 'Saupan yu kami',
);

/** Pfälzisch (Pfälzisch)
 * @author SPS
 */
$messages['pfl'] = array(
	'sitesupport' => 'Spende',
);

/** Norfuk / Pitkern (Norfuk / Pitkern) */
$messages['pih'] = array(
	'sitesupport' => 'Doenaiishun',
);

/** Polish (Polski)
 * @author Beau
 * @author Sp5uhe
 * @author Meno25
 */
$messages['pl'] = array(
	'wikimediamessages-desc'      => 'Komunikaty unikalne dla projektów Wikimedia',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate/pl',
	'sitesupport'                 => 'Darowizny',
	'tooltip-n-sitesupport'       => 'Pomóż nam',
	'group-accountcreator'        => 'Tworzący konta',
	'group-developer'             => 'Deweloperzy',
	'group-founder'               => 'Założyciele',
	'group-import'                => 'Importerzy',
	'group-ipblock-exempt'        => 'Uprawnieni do logowania się z zablokowanych adresów IP',
	'group-rollbacker'            => 'Uprawnieni do wycofywania transakcji bazy danych',
	'group-transwiki'             => 'Importerzy z innych wiki',
	'group-accountcreator-member' => 'Twórca kont',
	'group-developer-member'      => 'Deweloper',
	'group-founder-member'        => 'Założyciel',
	'group-import-member'         => 'Importer',
	'group-ipblock-exempt-member' => 'Uprawniony do zalogowania się z zablokowanego adresu IP',
	'group-rollbacker-member'     => 'Uprawniony do wycofania transakcji bazy danych',
	'group-transwiki-member'      => 'Importer z innych wiki',
);

/** Piemontèis (Piemontèis) */
$messages['pms'] = array(
	'sitesupport' => 'Oferte',
);

/** Pontic (Ποντιακά)
 * @author Sinopeus
 */
$messages['pnt'] = array(
	'sitesupport'           => 'Δωρεάς',
	'tooltip-n-sitesupport' => 'Βοηθέστεν το έργον.',
);

/** Pashto (پښتو)
 * @author Ahmed-Najib-Biabani-Ibrahimkhel
 */
$messages['ps'] = array(
	'sitesupport'           => 'بسپنې',
	'tooltip-n-sitesupport' => 'زموږ ملاتړ وکړی',
);

/** Portuguese (Português)
 * @author Malafaya
 * @author 555
 */
$messages['pt'] = array(
	'wikimediamessages-desc'      => 'Mensagens específicas à Wikimedia',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate/pt',
	'sitesupport'                 => 'Doações',
	'group-accountcreator'        => 'Criadores de contas',
	'group-developer'             => 'Desenvolvedores',
	'group-founder'               => 'Fundadores',
	'group-import'                => 'Importadores',
	'group-rollbacker'            => 'Revertedores',
	'group-transwiki'             => 'Importadores Transwiki',
	'group-accountcreator-member' => 'Criador de contas',
	'group-developer-member'      => 'Desenvolvedor',
	'group-founder-member'        => 'Fundador',
	'group-import-member'         => 'Importador',
	'group-rollbacker-member'     => 'Revertedor',
);

/** Brazilian Portuguese (Português do Brasil)
 * @author 555
 */
$messages['pt-br'] = array(
	'sitesupport'           => 'Doações',
	'tooltip-n-sitesupport' => 'Ajude-nos',
);

/** Quechua (Runa Simi)
 * @author AlimanRuna
 */
$messages['qu'] = array(
	'sitesupport'           => 'Qarana',
	'tooltip-n-sitesupport' => 'Yanapawayku',
);

/** Rhaeto-Romance (Rumantsch)
 * @author SPQRobin
 */
$messages['rm'] = array(
	'sitesupport' => 'Donaziuns',
);

/** Romani (Romani)
 * @author לערי ריינהארט
 */
$messages['rmy'] = array(
	'sitesupport' => 'Denimata',
);

/** Romanian (Română)
 * @author Emily
 * @author KlaudiuMihaila
 */
$messages['ro'] = array(
	'sitesupport'          => 'Donaţii',
	'group-founder'        => 'Fondatori',
	'group-founder-member' => 'Fondator',
);

/** Aromanian (Armãneashce)
 * @author Hakka
 */
$messages['roa-rup'] = array(
	'sitesupport' => 'Donatsiur',
);

/** Russian (Русский)
 * @author HalanTul
 * @author Александр Сигачёв
 * @author Ahonc
 */
$messages['ru'] = array(
	'wikimediamessages-desc'      => 'Сообщения, специфичные для Викимедиа',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/%D0%A1%D0%B1%D0%BE%D1%80_%D1%81%D1%80%D0%B5%D0%B4%D1%81%D1%82%D0%B2',
	'sitesupport'                 => 'Пожертвования',
	'tooltip-n-sitesupport'       => 'Поддержите нас',
	'group-accountcreator'        => 'Создатели учётных записей',
	'group-developer'             => 'Разработчики',
	'group-founder'               => 'Основатели',
	'group-import'                => 'Импортёры',
	'group-ipblock-exempt'        => 'Исключения из IP-блокировок',
	'group-rollbacker'            => 'Откатывающие',
	'group-transwiki'             => 'Импортёры из Transwiki',
	'group-accountcreator-member' => 'создатель учётных записей',
	'group-developer-member'      => 'разработчик',
	'group-founder-member'        => 'основатель',
	'group-import-member'         => 'импортёр',
	'group-ipblock-exempt-member' => 'исключение из IP-блокировки',
	'group-rollbacker-member'     => 'откатывающий',
	'group-transwiki-member'      => 'импортёр из Transwiki',
	'grouppage-accountcreator'    => '{{ns:project}}:Создатели учётных записей',
	'grouppage-developer'         => '{{ns:project}}:Разработчики',
	'grouppage-founder'           => '{{ns:project}}:Основатели',
	'grouppage-import'            => '{{ns:project}}:Импортёры',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Исключение из IP-блокировки',
	'grouppage-rollbacker'        => '{{ns:project}}:Откатывающие',
	'grouppage-transwiki'         => '{{ns:project}}:Импортёры из Transwiki',
);

/** Megleno-Romanian (Cyrillic) (Vlăheşte (Cyrillic))
 * @author Макѕе
 * @author Кумулај Маркус
 */
$messages['ruq-cyrl'] = array(
	'sitesupport'           => 'Донационс',
	'tooltip-n-sitesupport' => 'Супора-ностре',
);

/** Megleno-Romanian (Latin) (Vlăheşte (Latin))
 * @author Макѕе
 * @author Кумулај Маркус
 */
$messages['ruq-latn'] = array(
	'sitesupport'           => 'Donacions',
	'tooltip-n-sitesupport' => 'Supora-nostre',
);

/** Yakut (Саха тыла)
 * @author HalanTul
 * @author Bert Jickty
 */
$messages['sah'] = array(
	'sitesupport'           => 'Бу сири өйөө',
	'tooltip-n-sitesupport' => 'Өйөбүл',
);

/** Sicilian (Sicilianu)
 * @author לערי ריינהארט
 */
$messages['scn'] = array(
	'sitesupport' => 'Dunazzioni',
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
	'sitesupport'           => 'مالي امداد',
	'tooltip-n-sitesupport' => 'اسان جي مدد ڪريو',
);

/** Sassaresu (Sassaresu)
 * @author Felis
 */
$messages['sdc'] = array(
	'sitesupport'           => 'Dunazioni',
	'tooltip-n-sitesupport' => 'Supporthazi',
);

/** Northern Sami (Sámegiella)
 * @author Skuolfi
 */
$messages['se'] = array(
	'sitesupport'           => 'Skeaŋkkat',
	'tooltip-n-sitesupport' => 'Doarrjo siidduid doaimma',
);

/** Cmique Itom (Cmique Itom)
 * @author SeriCtam
 */
$messages['sei'] = array(
	'sitesupport'           => 'Donación',
	'tooltip-n-sitesupport' => 'Donacíonhuíiitl',
);

/** Sinhala (සිංහල) */
$messages['si'] = array(
	'sitesupport' => 'පරිත්‍යාග',
);

/** Slovak (Slovenčina)
 * @author Helix84
 */
$messages['sk'] = array(
	'wikimediamessages-desc'      => 'Správy špecifické pre Wikimedia',
	'sitesupport'                 => 'Podpora',
	'tooltip-n-sitesupport'       => 'Podporte nás',
	'group-accountcreator'        => 'Tvorcovia účtov',
	'group-developer'             => 'Vývojári',
	'group-founder'               => 'Zakladatelia',
	'group-import'                => 'Importéri',
	'group-ipblock-exempt'        => 'Výnimky z blokovaní IP',
	'group-rollbacker'            => 'S právom rollback',
	'group-transwiki'             => 'Transwiki importéri',
	'group-accountcreator-member' => 'Tvorca účtu',
	'group-developer-member'      => 'Vývojár',
	'group-founder-member'        => 'Zakladateľ',
	'group-import-member'         => 'Importér',
	'group-ipblock-exempt-member' => 'Výnimka z blokovaní IP',
	'group-rollbacker-member'     => 'S právom rollback',
	'group-transwiki-member'      => 'Transwiki importér',
	'grouppage-accountcreator'    => '{{ns:project}}:Tvorcovia účtov',
	'grouppage-developer'         => '{{ns:project}}:Vývojári',
	'grouppage-founder'           => '{{ns:project}}:Zakladatelia',
	'grouppage-import'            => '{{ns:project}}:Importéri',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Výnimky z blokovaní IP',
	'grouppage-rollbacker'        => '{{ns:project}}:S právom rollback',
	'grouppage-transwiki'         => '{{ns:project}}:Transwiki importéri',
);

/** Slovenian (Slovenščina) */
$messages['sl'] = array(
	'sitesupport' => 'Denarni prispevki',
);

/** Samoan (Gagana Samoa) */
$messages['sm'] = array(
	'sitesupport' => 'Meaalofa tupe',
);

/** Southern Sami (Åarjelsaemien gïele)
 * @author M.M.S.
 */
$messages['sma'] = array(
	'sitesupport'           => 'Vedtedh beetnegh',
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
	'sitesupport'           => 'Tabarucid',
	'tooltip-n-sitesupport' => 'Nacaawi',
);

/** Albanian (Shqip) */
$messages['sq'] = array(
	'sitesupport' => 'Dhurime',
);

/** Serbian Cyrillic ekavian (ћирилица)
 * @author Millosh
 */
$messages['sr-ec'] = array(
	'wikimediamessages-desc'      => 'Поруке специфичне за Викимедију.',
	'sitesupport'                 => 'Донације',
	'tooltip-n-sitesupport'       => 'подржи нас',
	'group-accountcreator'        => 'ствараоци налога',
	'group-developer'             => 'развијачи софтвера',
	'group-founder'               => 'оснивачи',
	'group-import'                => 'уносници',
	'group-ipblock-exempt'        => 'изузеци од ИП блокова',
	'group-rollbacker'            => 'враћачи',
	'group-transwiki'             => 'међувики уносници',
	'group-accountcreator-member' => 'стваралац налога',
	'group-developer-member'      => 'развијач софтвера',
	'group-founder-member'        => 'оснивач',
	'group-import-member'         => 'уносник',
	'group-ipblock-exempt-member' => 'изузетак од ИП блокова',
	'group-rollbacker-member'     => 'враћач',
	'group-transwiki-member'      => 'међувики уносник',
	'grouppage-accountcreator'    => '{{ns:project}}:Стварачи налога',
	'grouppage-developer'         => '{{ns:project}}:Развијачи софтвера',
	'grouppage-founder'           => '{{ns:project}}:Оснивачи',
	'grouppage-import'            => '{{ns:project}}:Уносници',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Изузетак од ИП блокова',
	'grouppage-rollbacker'        => '{{ns:project}}:Враћачи',
	'grouppage-transwiki'         => '{{ns:project}}:Међувики уносници',
);

/** latinica (latinica) */
$messages['sr-el'] = array(
	'sitesupport' => 'Donacije',
);

/** Sranan Tongo (Sranantongo)
 * @author Adfokati
 */
$messages['srn'] = array(
	'sitesupport'           => 'Yibi a finansi',
	'tooltip-n-sitesupport' => 'Gi wi wan finansi',
);

/** Southern Sotho (Sesotho) */
$messages['st'] = array(
	'sitesupport' => 'Dimpho',
);

/** Seeltersk (Seeltersk)
 * @author Pyt
 * @author Maartenvdbent
 */
$messages['stq'] = array(
	'wikimediamessages-desc' => 'Wikimediaspezifiske Systemättergjuchten',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/Spändje',
	'sitesupport'            => 'Spenden',
	'tooltip-n-sitesupport'  => 'Unnerstutse uus',
	'group-developer'        => 'Systemadministrator',
	'group-import'           => 'Importeur',
	'group-transwiki-member' => 'Transwiki-Importeur',
	'grouppage-developer'    => '{{ns:project}}:Systemadministratore',
	'grouppage-import'       => '{{ns:project}}:Importeure',
	'grouppage-transwiki'    => '{{ns:project}}:Transwiki-Importeure',
);

/** Sundanese (Basa Sunda)
 * @author Kandar
 */
$messages['su'] = array(
	'sitesupport'           => 'Sumbangan',
	'tooltip-n-sitesupport' => 'Bobotohan',
);

/** Swedish (Svenska)
 * @author Boivie
 * @author M.M.S.
 */
$messages['sv'] = array(
	'wikimediamessages-desc'      => 'Wikimedia-specifika meddelanden',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate/sv',
	'sitesupport'                 => 'Donationer',
	'tooltip-n-sitesupport'       => 'Stöd oss',
	'group-accountcreator'        => 'Kontoskapare',
	'group-developer'             => 'Utvecklare',
	'group-founder'               => 'Grundare',
	'group-import'                => 'Importörer',
	'group-ipblock-exempt'        => 'Undantagna från IP-blockering',
	'group-rollbacker'            => 'Tillbakarullare',
	'group-transwiki'             => 'Transwiki-importörer',
	'group-accountcreator-member' => 'Kontoskapare',
	'group-developer-member'      => 'Utvecklare',
	'group-founder-member'        => 'Grundare',
	'group-import-member'         => 'Importör',
	'group-ipblock-exempt-member' => 'Undantagen från IP-blockering',
	'group-rollbacker-member'     => 'Tillbakarullare',
	'group-transwiki-member'      => 'Tranwiki-importör',
	'grouppage-accountcreator'    => '{{ns:project}}:Kontoskapare',
	'grouppage-developer'         => '{{ns:project}}:Utvecklare',
	'grouppage-founder'           => '{{ns:project}}:Grundare',
	'grouppage-import'            => '{{ns:project}}:Importörer',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Undantagna från IP-blockering',
	'grouppage-rollbacker'        => '{{ns:project}}:Tillbakarullare',
	'grouppage-transwiki'         => '{{ns:project}}:Transwiki-importörer',
);

/** Swahili (Kiswahili)
 * @author Malangali
 * @author לערי ריינהארט
 */
$messages['sw'] = array(
	'sitesupport'           => 'Michango',
	'tooltip-n-sitesupport' => 'Tuunge mkono',
);

/** Silesian (Ślůnski)
 * @author Lajsikonik
 * @author Herr Kriss
 */
$messages['szl'] = array(
	'sitesupport'           => 'Śćepa',
	'tooltip-n-sitesupport' => 'Wspůmůž nas',
);

/** Tamil (தமிழ்)
 * @author Trengarasu
 * @author Mayooranathan
 */
$messages['ta'] = array(
	'sitesupport'           => 'நன்கொடை',
	'tooltip-n-sitesupport' => 'நன்கொடைகளை வழங்குங்கள்',
);

/** Telugu (తెలుగు)
 * @author Veeven
 * @author Mpradeep
 */
$messages['te'] = array(
	'sitesupport'           => 'విరాళములు',
	'tooltip-n-sitesupport' => 'మాకు తోడ్పడండి',
);

/** Tetum (Tetun)
 * @author MF-Warburg
 */
$messages['tet'] = array(
	'sitesupport'           => 'Fó donativu ida',
	'tooltip-n-sitesupport' => 'Tulun ami',
);

/** Tajik (Cyrillic) (Тоҷикӣ/tojikī (Cyrillic))
 * @author לערי ריינהארט
 * @author Siebrand
 */
$messages['tg-cyrl'] = array(
	'sitesupport' => 'Кӯмаки молӣ',
);

/** Thai (ไทย) */
$messages['th'] = array(
	'sitesupport' => 'สนับสนุน',
);

/** Tagalog (Tagalog)
 * @author לערי ריינהארט
 */
$messages['tl'] = array(
	'sitesupport' => 'Donasyon',
);

/** Tswana (Setswana)
 * @author Hakka
 */
$messages['tn'] = array(
	'sitesupport' => 'Dimpho',
);

/** Tonga (faka-Tonga) */
$messages['to'] = array(
	'sitesupport' => 'Ngaahi meʻa ʻofa',
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

/** Turkish (Türkçe) */
$messages['tr'] = array(
	'sitesupport' => 'Bağışlar',
);

/** Tsonga (Xitsonga)
 * @author Thuvack
 */
$messages['ts'] = array(
	'sitesupport'           => 'Nyikela mali',
	'tooltip-n-sitesupport' => 'Hi seketeli',
);

/** Tatar (Cyrillic) (Tatarça/Татарча (Cyrillic))
 * @author Ерней
 */
$messages['tt-cyrl'] = array(
	'sitesupport'           => 'Иганә',
	'tooltip-n-sitesupport' => 'Безгә ярдәм итегез',
);

/** Tatar (Latin) (Tatarça/Татарча (Latin)) */
$messages['tt-latn'] = array(
	'sitesupport' => 'Ximäyäçegä',
);

/** Tahitian (Reo Mā`ohi)
 * @author SPQRobin
 */
$messages['ty'] = array(
	'sitesupport' => 'Pūpū i te ō',
);

/** Tuvinian (Тыва дыл) */
$messages['tyv'] = array(
	'sitesupport' => 'Белектер',
);

/** Uighur (Uyghurche‎ / ئۇيغۇرچە)
 * @author SPQRobin
 */
$messages['ug'] = array(
	'sitesupport' => 'Iana Toplash',
);

/** Ukrainian (Українська)
 * @author Ahonc
 */
$messages['uk'] = array(
	'wikimediamessages-desc'      => 'Повідомлення, характерні для Вікімедіа',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Donate',
	'sitesupport'                 => 'Пожертвування',
	'tooltip-n-sitesupport'       => 'Підтримайте проект',
	'group-accountcreator'        => 'Створювачі облікових записів',
	'group-developer'             => 'Розробники',
	'group-founder'               => 'Засновники',
	'group-import'                => 'Імпортери',
	'group-ipblock-exempt'        => 'Виключення з IP-блокувань',
	'group-rollbacker'            => 'Відкочувачі',
	'group-transwiki'             => 'Transwiki-імпортери',
	'group-accountcreator-member' => 'створювач облікових записів',
	'group-developer-member'      => 'розробник',
	'group-founder-member'        => 'засновник',
	'group-import-member'         => 'імпортер',
	'group-ipblock-exempt-member' => 'виключення з IP-блокування',
	'group-rollbacker-member'     => 'відкочувач',
	'group-transwiki-member'      => 'Transwiki-імпортер',
	'grouppage-accountcreator'    => '{{ns:project}}:Створювачі облікових записів',
	'grouppage-developer'         => '{{ns:project}}:Розробники',
	'grouppage-founder'           => '{{ns:project}}:Засновники',
	'grouppage-import'            => '{{ns:project}}:Імпортери',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Виключення з IP-блокування',
	'grouppage-rollbacker'        => '{{ns:project}}:Відкочувачі',
	'grouppage-transwiki'         => '{{ns:project}}:Transwiki-імпортери',
);

/** Urdu (اردو) */
$messages['ur'] = array(
	'sitesupport' => 'رابطہ',
);

/** Uzbek (O'zbek) */
$messages['uz'] = array(
	'sitesupport' => "Loyihaga ko'mak",
);

/** Vèneto (Vèneto)
 * @author Candalua
 */
$messages['vec'] = array(
	'wikimediamessages-desc'      => 'Messagi specifici de Wikimedia',
	'sitesupport'                 => 'Donassioni',
	'tooltip-n-sitesupport'       => 'Jùtane',
	'group-accountcreator'        => 'Creatori de account',
	'group-developer'             => 'Svilupadori',
	'group-founder'               => 'Fondatori',
	'group-import'                => 'Inportadori',
	'group-transwiki'             => 'Inportadori transwiki',
	'group-accountcreator-member' => 'Creator de account',
	'group-developer-member'      => 'Svilupador',
	'group-founder-member'        => 'Fondator',
	'group-import-member'         => 'Inportador',
	'group-transwiki-member'      => 'Inportador transwiki',
	'grouppage-accountcreator'    => '{{ns:project}}:Creatori de account',
	'grouppage-developer'         => '{{ns:project}}:Svilupadori',
	'grouppage-founder'           => '{{ns:project}}:Fondatori',
	'grouppage-import'            => '{{ns:project}}:Inportadori',
	'grouppage-transwiki'         => '{{ns:project}}:Inportadori transwiki',
);

/** Vietnamese (Tiếng Việt)
 * @author Vinhtantran
 * @author לערי ריינהארט
 * @author Minh Nguyen
 */
$messages['vi'] = array(
	'wikimediamessages-desc'      => 'Các thông báo đặc trưng cho Wikimedia',
	'sitesupport-url'             => 'http://wikimediafoundation.org/wiki/Quy%C3%AAn_g%C3%B3p',
	'sitesupport'                 => 'Quyên góp',
	'tooltip-n-sitesupport'       => 'Hãy ủng hộ chúng tôi',
	'group-accountcreator'        => 'Người mở tài khoản',
	'group-developer'             => 'Người phát triển',
	'group-founder'               => 'Nhà sáng lập',
	'group-import'                => 'Người nhập trang',
	'group-ipblock-exempt'        => 'Người được miễn cấm IP',
	'group-rollbacker'            => 'Người lùi sửa',
	'group-transwiki'             => 'Người nhập trang giữa wiki',
	'group-accountcreator-member' => 'Người mở tài khoản',
	'group-developer-member'      => 'Người phát triển',
	'group-founder-member'        => 'Nhà sáng lập',
	'group-import-member'         => 'Người nhập trang',
	'group-ipblock-exempt-member' => 'Người được miễn cấm IP',
	'group-rollbacker-member'     => 'Người lùi sửa',
	'group-transwiki-member'      => 'Người nhập trang giữa wiki',
	'grouppage-accountcreator'    => '{{ns:project}}:Người mở tài khoản',
	'grouppage-developer'         => '{{ns:project}}:Người phát triển',
	'grouppage-founder'           => '{{ns:project}}:Nhà sáng lập',
	'grouppage-import'            => '{{ns:project}}:Người nhập trang',
	'grouppage-ipblock-exempt'    => '{{ns:project}}:Người được miễn cấm IP',
	'grouppage-rollbacker'        => '{{ns:project}}:Người lùi sửa',
	'grouppage-transwiki'         => '{{ns:project}}:Người nhập trang giữa wiki',
);

/** Volapük (Volapük)
 * @author Malafaya
 * @author SPQRobin
 */
$messages['vo'] = array(
	'sitesupport'           => 'Födagivots',
	'tooltip-n-sitesupport' => 'Stütolös obsi',
);

/** Walloon (Walon) */
$messages['wa'] = array(
	'sitesupport' => 'Ecwårlaedje',
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

/** Xhosa (isiXhosa) */
$messages['xh'] = array(
	'sitesupport' => 'Amalizo',
);

/** Mingrelian (მარგალური)
 * @author Dato deutschland
 * @author Alsandro
 */
$messages['xmf'] = array(
	'sitesupport'           => 'აზარა',
	'tooltip-n-sitesupport' => 'ხუჯ დომკინით',
);

/** Yiddish (ייִדיש)
 * @author Yidel
 */
$messages['yi'] = array(
	'sitesupport'           => 'ביישטייערונגן',
	'tooltip-n-sitesupport' => 'שטיצט אונז',
);

/** Yoruba (Yorùbá)
 * @author Demmy
 */
$messages['yo'] = array(
	'sitesupport' => 'Se ẹ̀bùn owó',
);

/** Yue (粵語) */
$messages['yue'] = array(
	'wikimediamessages-desc' => 'Wikimedia特定訊息',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/{{urlencode:捐贈}}',
	'sitesupport'            => '慷慨解囊',
	'tooltip-n-sitesupport'  => '資持我哋',

	# Wikimedia specific usergroups
	'group-accountcreator'        => '開戶專員',
	'group-developer'             => '技術員',
	'group-founder'               => '創辦人',
	'group-import'                => '匯入者',
	'group-ipblock-exempt'        => 'IP封鎖例外者',
	'group-rollbacker'            => '反轉者',
	'group-transwiki'             => 'Transwiki匯入者',

	'group-accountcreator-member' => '開戶專員',
	'group-developer-member'      => '技術員',
	'group-founder-member'        => '創辦人',
	'group-import-member'         => '匯入者',
	'group-ipblock-exempt-member' => 'IP封鎖例外',
	'group-rollbacker-member'     => '反轉者',
	'group-transwiki-member'      => 'Transwiki匯入者',

	'grouppage-accountcreator' => '{{ns:project}}:開戶專員',
	'grouppage-developer'      => '{{ns:project}}:技術員',
	'grouppage-founder'        => '{{ns:project}}:創辦人',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP封鎖例外',
	'grouppage-rollbacker'     => '{{ns:project}}:反轉者',
	'grouppage-import'         => '{{ns:project}}:匯入者',
	'grouppage-transwiki'      => '{{ns:project}}:Transwiki匯入者',
);

/** Zeeuws (Zeêuws)
 * @author SPQRobin
 * @author NJ
 */
$messages['zea'] = array(
	'sitesupport' => 'Donaoties',
);

/** Classical Chinese (文言) */
$messages['zh-classical'] = array(
	'wikimediamessages-desc' => '維基媒體特集',
	'sitesupport'            => '捐助集',
	'tooltip-n-sitesupport'  => '濟資財、施續命、傳美皓',
);

/** Simplified Chinese (‪中文(简体)‬) */
$messages['zh-hans'] = array(
	'wikimediamessages-desc' => '维基媒体特定信息',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/{{urlencode:赞助}}',
	'sitesupport'            => '资助',
	'tooltip-n-sitesupport'  => '资助我们',

	# Wikimedia specific usergroups
	'group-accountcreator'        => '账户创建员',
	'group-developer'             => '开发员',
	'group-founder'               => '创办人',
	'group-import'                => '导入者',
	'group-ipblock-exempt'        => 'IP查封例外者',
	'group-rollbacker'            => '回退员',
	'group-transwiki'             => '跨维基导入者',

	'group-accountcreator-member' => '账户创建员',
	'group-developer-member'      => '开发员',
	'group-founder-member'        => '创办人',
	'group-import-member'         => '导入者',
	'group-ipblock-exempt-member' => 'IP查封例外',
	'group-rollbacker-member'     => '回退员',
	'group-transwiki-member'      => '跨维基导入者',

	'grouppage-accountcreator' => '{{ns:project}}:账户创建员',
	'grouppage-developer'      => '{{ns:project}}:开发员',
	'grouppage-founder'        => '{{ns:project}}:创办人',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP查封例外',
	'grouppage-rollbacker'     => '{{ns:project}}:反转者',
	'grouppage-import'         => '{{ns:project}}:回退员',
	'grouppage-transwiki'      => '{{ns:project}}:跨维基导入者',
);

/** Traditional Chinese (‪中文(繁體)‬) */
$messages['zh-hant'] = array(
	'wikimediamessages-desc' => '維基媒體特定信息',
	'sitesupport-url'        => 'http://wikimediafoundation.org/wiki/{{urlencode:資助}}',
	'sitesupport'            => '贊助',
	'tooltip-n-sitesupport'  => '資助我們',

	# Wikimedia specific usergroups
	'group-accountcreator'        => '賬戶創建員',
	'group-developer'             => '開發員',
	'group-founder'               => '創辦人',
	'group-import'                => '匯入者',
	'group-ipblock-exempt'        => 'IP查封例外者',
	'group-rollbacker'            => '回退員',
	'group-transwiki'             => '跨維基匯入者',

	'group-accountcreator-member' => '賬戶創建員',
	'group-developer-member'      => '開發員',
	'group-founder-member'        => '創辦人',
	'group-import-member'         => '匯入者',
	'group-ipblock-exempt-member' => 'IP查封例外',
	'group-rollbacker-member'     => '回退員',
	'group-transwiki-member'      => '跨維基匯入者',

	'grouppage-accountcreator' => '{{ns:project}}:賬戶創建員',
	'grouppage-developer'      => '{{ns:project}}:開發員',
	'grouppage-founder'        => '{{ns:project}}:創辦人',
	'grouppage-ipblock-exempt' => '{{ns:project}}:IP查封例外',
	'grouppage-rollbacker'     => '{{ns:project}}:反轉者',
	'grouppage-import'         => '{{ns:project}}:回退員',
	'grouppage-transwiki'      => '{{ns:project}}:跨維基匯入者',
);

/** Zulu (isiZulu)
 * @author לערי ריינהארט
 */
$messages['zu'] = array(
	'sitesupport' => 'Izipho',
);

