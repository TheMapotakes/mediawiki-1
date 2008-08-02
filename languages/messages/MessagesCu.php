<?php
/** Church Slavic (Словѣ́ньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ)
 *
 * @ingroup Language
 * @file
 *
 * @author ОйЛ
 * @author Svetko
 * @author SPQRobin
 * @author Wolliger Mensch
 */

$separatorTransformTable = array(
	',' => ".",
	'.' => ','
);

$linkPrefixExtension = true;

$namespaceNames = array(
	NS_MEDIA            => 'Срѣдьства',
	NS_SPECIAL          => 'Нарочьна',
	NS_MAIN             => '',
	NS_TALK             => 'Бесѣда',
	NS_USER             => 'Польѕевател҄ь',
	NS_USER_TALK        => 'Польѕевател_бесѣда', 
	#NS_PROJECT set by $wgMetaNamespace
  	NS_PROJECT_TALK     => '{{grammar:genitive|$1}}_бесѣда',
	NS_IMAGE            => 'Видъ',
	NS_IMAGE_TALK       => 'Вида_бесѣда',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'MediaWiki_бесѣда',
	NS_TEMPLATE         => 'Образьць',
	NS_TEMPLATE_TALK    => 'Образьца_бесѣда',
	NS_HELP             => 'Помощь',
	NS_HELP_TALK        => 'Помощи_бесѣда',
	NS_CATEGORY         => 'Катигорї',
	NS_CATEGORY_TALK    => 'Катигорїѩ_бесѣда',
);

$defaultDateFormat = 'mdy';

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'xg j числа, Y',
	'mdy both' => 'H:i, xg j числа, Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j F Y',
	'dmy both' => 'H:i, j F Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y F j',
	'ymd both' => 'H:i, Y F j',

	'ISO 8601 time' => 'xnH:xni:xns',
	'ISO 8601 date' => 'xnY-xnm-xnd',
	'ISO 8601 both' => 'xnY-xnm-xnd"T"xnH:xni:xns',
);

$linkTrail = '/^([a-zабвгдеєжѕзїіıићклмнопсстѹфхѡѿцчшщъыьѣюѥѧѩѫѭѯѱѳѷѵґѓђёјйљњќуўџэ҄я“»]+)(.*)$/sDu';

$messages = array(
# Dates
'sunday'        => 'нєдѣ́лꙗ',
'monday'        => 'понедѣл҄ьникъ',
'tuesday'       => 'въторьникъ',
'wednesday'     => 'срѣда',
'thursday'      => 'четврьтъкъ',
'friday'        => 'пѧтъкъ',
'saturday'      => 'сѫбота',
'sun'           => 'н҃д',
'mon'           => 'п҃н',
'tue'           => 'в҃т',
'wed'           => 'с҃р',
'thu'           => 'ч҃т',
'fri'           => 'п҃т',
'sat'           => 'с҃б',
'january'       => 'їанѹарїи',
'february'      => 'февроуа́рїи',
'march'         => 'мартїи',
'april'         => 'апрїлїи',
'may_long'      => 'ма́їи',
'june'          => 'їоу́нїи',
'july'          => 'їоу́лїи',
'august'        => 'аѵ́гоустъ',
'september'     => 'септемврїи',
'october'       => 'октѡврїи',
'november'      => 'ноемврїи',
'december'      => 'декемврїи',
'january-gen'   => 'їанѹарї',
'february-gen'  => 'фєвроуа́рїꙗ',
'march-gen'     => 'ма́ртїꙗ',
'april-gen'     => 'апрїлї',
'may-gen'       => 'ма́їꙗ',
'june-gen'      => 'їоу́нїꙗ',
'july-gen'      => 'їоу́лїꙗ',
'august-gen'    => 'аѵ́гоуста',
'september-gen' => 'септемврї',
'october-gen'   => 'октѡврї',
'november-gen'  => 'ноемврї',
'december-gen'  => 'декемврї',
'jan'           => 'ꙗ҃н',
'feb'           => 'фе҃в',
'mar'           => 'ма҃р',
'apr'           => 'ап҃р',
'may'           => 'маи',
'jun'           => 'їо҃ун',
'jul'           => 'їо҃ул',
'aug'           => 'аѵ҃г',
'sep'           => 'се҃п',
'oct'           => 'ок҃т',
'nov'           => 'но҃е',
'dec'           => 'де҃к',

# Bits of text used by many pages
'categories'      => 'катигорі́ѩ',
'pagecategories'  => '{{PLURAL:$1|Катигорі́ꙗ|Катигорі́и|Катигорі́ѩ|Катигорі́ѩ}}',
'category_header' => 'катигорі́ѩ ⁖ $1 ⁖ страни́цѧ',

'linkprefix' => '/^(.*?)(„|«)$/sD',

'qbedit'         => 'испра́ви',
'qbpageoptions'  => 'си страни́ца',
'qbmyoptions'    => 'моꙗ́ страни́цѧ',
'qbspecialpages' => 'наро́чьнꙑ страни́цѧ',
'mypage'         => 'моꙗ́ страни́ца',
'mytalk'         => 'моꙗ́ бєсѣ́да',
'navigation'     => 'пла́ваниѥ',
'and'            => 'и',

'help'             => 'по́мощь',
'search'           => 'иска́ниѥ',
'searchbutton'     => 'ищи́',
'go'               => 'прѣиди́',
'searcharticle'    => 'прѣиди́',
'history'          => 'страни́цѧ їсторі́ꙗ',
'history_short'    => 'їсторі́ꙗ',
'printableversion' => 'пєча́тьнъ о́браꙁъ',
'permalink'        => 'въи́ньна съвѧ́ꙁь',
'edit'             => 'испра́ви',
'delete'           => 'поничьжє́ниѥ',
'protect'          => 'ꙁабранѥ́ниѥ',
'unprotect'        => 'поущє́ниѥ',
'newpage'          => 'но́ва страни́ца',
'talkpagelinktext' => 'бєсѣ́да',
'specialpage'      => 'наро́чьна страни́ца',
'talk'             => 'бєсѣ́да',
'toolbox'          => 'орѫ́диꙗ',
'otherlanguages'   => 'ДРОУГꙐ́ ѨꙀꙐКꙐ́',
'redirectpagesub'  => 'прѣнаправлѥ́ниѥ',
'lastmodifiedat'   => 'страни́цѧ послѣ́дьнꙗ мѣ́на сътворѥна́ $2 · $1 бѣ ⁙', # $1 date, $2 time
'jumptonavigation' => 'пла́ваниѥ',
'jumptosearch'     => 'иска́ниѥ',

# All link text and link target definitions of links into project namespace that get used by other message strings, with the exception of user group pages (see grouppage) and the disambiguation template definition (see disambiguations).
'aboutsite'         => 'О {{grammar:instrumental|{{SITENAME}}}}',
'aboutpage'         => 'Project:О сѥ́мь опꙑтьствова́нии',
'copyright'         => 'по́дъ прощє́ниѥмь $1 пьса́но ѥ́стъ',
'currentevents'     => 'сѫ́щѧѩ вѣ́щи',
'currentevents-url' => 'Project:Сѫ́щѧѩ вѣ́щи',
'edithelppage'      => 'Help:Исправлѥ́ниѥ страни́цѧ',
'mainpage'          => 'гла́вьна страни́ца',
'portal'            => 'обьщє́ниꙗ съвѣ́тъ',
'portal-url'        => 'Project:Обьщє́ниꙗ съвѣ́тъ',
'sitesupport'       => 'даꙗ́ниꙗ',

'newmessageslink'     => 'но́ви напь́саниꙗ',
'newmessagesdifflink' => 'послѣ́дьнꙗ мѣ́на',
'editsection'         => 'испра́ви',
'editold'             => 'испра́ви',
'hidetoc'             => 'съкрꙑи',
'viewdeleted'         => '$1 ви́дєти хо́щєши ;',
'red-link-title'      => '$1 (ѥщє нє напь́сано ѥ́стъ)',

# Short words for each namespace, by default used in the namespace tab in monobook
'nstab-main'      => 'члѣ́нъ',
'nstab-user'      => 'по́льꙃєватєл҄ь',
'nstab-media'     => 'срѣ́дьства',
'nstab-special'   => 'наро́чьна',
'nstab-project'   => 'съвѣ́тъ',
'nstab-image'     => 'ви́дъ',
'nstab-mediawiki' => 'напьса́ниѥ',
'nstab-template'  => 'обраꙁь́ць',
'nstab-help'      => 'страни́ца по́мощи',
'nstab-category'  => 'катигорі́ꙗ',

# General errors
'viewsource' => 'страни́цѧ исто́чьнъ о́браꙁъ',

# Login and logout pages
'loginpagetitle'     => 'Въходъ',
'yourname'           => 'твоѥ́ и́мѧ',
'yourpassword'       => 'Таино слово напиши',
'yourpasswordagain'  => 'Опакы таиноѥ слово напиши',
'login'              => 'Въниди',
'userlogin'          => 'Въниди / съзижди си мѣсто',
'logout'             => 'ис̾хо́дъ',
'userlogout'         => 'ис̾хо́дъ',
'createaccount'      => 'Cъзижди си мѣсто',
'gotaccount'         => 'Мѣсто ти ѥстъ ли? $1.',
'gotaccountlink'     => 'Въниди',
'userexists'         => 'Сѫще польѕевател имѧ пьса. Ино изобрѧщи.',
'username'           => 'по́льꙃєватєлꙗ и́мѧ :',
'uid'                => 'по́льꙃєватєлꙗ число́ :',
'yourlanguage'       => 'ѩꙁꙑ́къ :',
'yournick'           => 'аѵто́графъ :',
'loginerror'         => 'Въхода блазна',
'loginlanguagelabel' => 'ѩꙁꙑ́къ : $1',

# Edit page toolbar
'link_sample'    => 'съвѧ́ꙁи и́мѧ',
'extlink_sample' => 'http://www.example.com съвѧ́ꙁи и́мѧ',

# Edit pages
'summary'        => 'опьса́ниѥ',
'minoredit'      => 'ма́лаꙗ мѣ́на',
'watchthis'      => 'си страни́цѧ блюдє́ниѥ',
'savearticle'    => 'съхранѥ́ниѥ',
'loginreqlink'   => 'Въниди',
'newarticle'     => '(но́въ)',
'clearyourcache' => '<big>НАРОЧИ́ТО:</big> По съхранѥ́нии мо́жєши обити́ своѥго́ съмотри́ла съхра́нъ да ви́дѣлъ би мѣ́нꙑ ⁙ Mozilla ли Firefox ли Safari ли жьмꙑ́и Shift а мꙑ́шиѭ жьми́ Reload и́ли жьми́ Ctrl-Shift-R (Cmd-Shift-R вън Apple Mac) ⁙ IE ли жьмꙑ́и Ctrl а мꙑ́шиѭ жьми́ Refresh и́ли жьми́ Ctrl-F5 ⁙ Konqueror ли жьми́ кро́мѣ Reload и́ли F5 ⁙ О́пєрꙑ по́льꙃєватєльмъ мо́жєть бꙑ́ти ноужда́ пльнѣ пони́чьжити и́хъ съмотри́ла съхра́нъ въ Tools > Preferences',
'note'           => '<strong>НАРОЧИ́ТО:</strong>',
'editing'        => 'исправлѥ́ниѥ: $1',

# History pages
'cur'          => 'нꙑ҃н',
'last'         => 'пс҃лд',
'historyempty' => '(поу́сто)',

# Revision feed
'history-feed-title' => 'мѣ́нъ їсторі́ꙗ',

# Search results
'searchresults' => 'иска́ниꙗ ито́гъ',
'powersearch'   => 'ищи́',

# Preferences page
'preferences'       => 'строи',
'mypreferences'     => 'мои строи',
'prefs-rc'          => 'послѣ́дьнѩ мѣ́нꙑ',
'prefs-watchlist'   => 'блюдє́ниꙗ',
'searchresultshead' => 'иска́ниѥ',
'files'             => 'дѣла́',

# Groups
'group-bot'        => 'аѵтома́ти',
'group-sysop'      => 'съмотри́тєлє',
'group-bureaucrat' => 'Чинода́тєлє',

'group-bot-member'        => 'аѵтома́тъ',
'group-sysop-member'      => 'съмотри́тєл҄ь',
'group-bureaucrat-member' => 'чинода́тєл҄ь',

'grouppage-bot'        => '{{ns:project}}:Аѵтома́ти',
'grouppage-sysop'      => '{{ns:project}}:Съмотри́тєлє',
'grouppage-bureaucrat' => '{{ns:project}}:Чинода́тєлє',

# Recent changes
'nchanges'        => '$1 {{PLURAL:$1|мѣ́на|мѣ́нꙑ|мѣ́нъ}}',
'recentchanges'   => 'послѣ́дьнѩ мѣ́нꙑ',
'rcshowhideminor' => '$1 ма́лꙑ мѣ́нꙑ',
'rcshowhidebots'  => '$1 аѵтома́тъ',
'diff'            => 'ра҃ꙁн',
'hist'            => 'їс҃т',
'hide'            => 'съкрꙑи',
'minoreditletter' => 'м҃л',
'newpageletter'   => 'н҃в',
'boteditletter'   => 'а҃ѵ',

# Recent changes linked
'recentchangeslinked' => 'съвѧ́ꙁанꙑ страни́цѧ',

# Upload
'upload'          => 'положє́ниѥ дѣ́ла',
'uploadbtn'       => 'положє́ниѥ дѣ́ла',
'uploadedimage'   => '⁖ [[$1]] ⁖ положє́нъ ѥ́стъ',
'watchthisupload' => 'си страни́цѧ блюдє́ниѥ',

# Image list
'ilsubmit'           => 'ищи́',
'imgfile'            => 'дѣ́ло',
'filehist-deleteone' => 'поничьжє́ниѥ',
'filehist-user'      => 'по́льꙃєватєл҄ь',
'imagelinks'         => 'съвѧ́ꙁи',
'imagelist_name'     => 'и́мѧ',
'imagelist_user'     => 'по́льꙃєватєл҄ь',
'imagelist_size'     => 'мѣ́ра',

# File deletion
'filedelete-submit' => 'поничьжє́ниѥ',

# MIME search
'mimetype' => 'MIME тѵ́пъ :',
'download' => 'поѩ́ти',

# Random page
'randompage' => 'страни́ца въ нєꙁаа́пѫ',

# Statistics
'statistics'    => 'Статїстїка',
'sitestats'     => '{{SITENAME}} статїстїка',
'userstats'     => 'Польѕевателъ статїстїка',
'sitestatstext' => "Сьдє '''$1''' {{PLURAL:$1|страни́ца ѥ́стъ|страни́ци ѥ́стє|страни́цѧ сѫ́тъ|страни́ць сѫ́тъ}} · посрѣдѣ {{PLURAL:$1|ѩже|ѥюжє|ихъжє|ихъжє}} и бєсѣдꙑ · и страницѧ о {{SITENAME}} · и ꙃѣло малꙑ члѣ́ни · и прѣнаправлѥниꙗ · и дроугꙑ́ страницѧ сѫ́тъ · ѩжє истиньнꙑ члѣ́ни нє сѫ́тъ ⁙ Бєжихъ Википєдїи '''$2''' {{PLURAL:$2|страни́ца ѥ́стъ|страни́ци ѥ́стє|страни́цѧ сѫ́тъ|страни́ць сѫ́тъ}} ѩжє {{PLURAL:$2|истиньна члѣ́нъ ѥстъ|истиньнѣ члѣ́на ѥ́стє|истиньнꙑ члѣ́ни сѫ́тъ|истиньнꙑ члѣ́ни сѫ́тъ}}

Такождє '''$8''' {{PLURAL:$8|дѣло положєно ѥстъ|дѣлѣ положєно ѥстє|дѣла положєно сѫ́тъ|дѣлъ положєно сѫ́тъ}}

О прьваѥго {{grammar:genitive|{{SITENAME}}}} дьнє '''$4''' {{PLURAL:$4|исправлѥ́ниѥ сътворѥно ѥ́стъ|исправлѥ́нии сътворѥнѣ ѥ́стє|исправлѥ́ниꙗ сътворѥно сѫ́тъ|исправлѥ́нии сътворѥно сѫ́тъ}} ⁙ Сѥ значитъ ꙗко кажьдо страница '''$5''' исправлѥниꙗ иматъ · а къжьдо мѣ́на '''$6''' {{PLURAL:$6|раꙁъ съмощрѥна бѣ|раꙁа съмощрѥна бѣашєтє|раꙁъ съмощрѥна бѣ|раꙁъ съмощрѥна бѣашѧ}}  

[http://www.mediawiki.org/wiki/Manual:Job_queue Дѣ́иствъ чрѣ́дꙑ] дльгота '''$7''' ѥ́стъ",

'brokenredirects-edit'   => '(испра́ви)',
'brokenredirects-delete' => '(поничьжє́ниѥ)',

# Miscellaneous special pages
'nbytes'            => '$1 {{PLURAL:$1|ба́итъ|ба́ита|ба́итъ}}',
'allpages'          => 'вьсѩ́ страни́цѧ',
'listusers'         => 'по́льꙃєватєлъ катало́гъ',
'specialpages'      => 'наро́чьнꙑ страни́цѧ',
'newpages'          => 'но́ви члѣ́ни',
'newpages-username' => 'по́льꙃєватєлꙗ и́мѧ :',
'move'              => 'прѣимєнова́ниѥ',

# Book sources
'booksources-go' => 'прѣиди́',

'alphaindexline' => 'о́тъ $1 до $2',
'version'        => 'MediaWiki о́браꙁъ',

# Special:Log
'specialloguserlabel' => 'по́льꙃєватєл҄ь:',
'log-search-submit'   => 'прѣиди́',

# Special:Allpages
'allpagesfrom'   => 'страни́цѧ видѣ́ти хощѫ́ съ начѧ́льнами боу́къвами :',
'allarticles'    => 'вьсѩ́ страни́цѧ',
'allpagessubmit' => 'прѣиди́',

# E-mail user
'emailuser' => 'Посъли епїстолѫ',

# Watchlist
'watchlist'     => 'моꙗ́ блюдє́ниꙗ',
'mywatchlist'   => 'Моꙗ́ блюдє́ниꙗ',
'watch'         => 'блюдє́ниѥ',
'watchthispage' => 'си страни́цѧ блюдє́ниѥ',
'unwatch'       => 'оста́ви блюдє́ниѥ',

'created' => 'сътворѥ́нъ ѥ́стъ',

# Delete/protect/revert
'excontent'       => "вънѫтри бѣ: '$1'",
'excontentauthor' => "вънѫтри́ бѣ : '$1' (и послѣ́дьн҄ии дѣ́тєл҄ь бѣ '[[Special:Contributions/$2|$2]]')",
'delete-legend'   => 'поничьжє́ниѥ',
'deletedarticle'  => '⁖ [[$1]] ⁖ поничьжє́нъ ѥ́стъ',
'dellogpage'      => 'поничьжє́ниꙗ їсторі́ꙗ',
'deletionlog'     => 'поничьжє́ниꙗ їсторі́ꙗ',

# Restrictions (nouns)
'restriction-edit' => 'испра́ви',
'restriction-move' => 'прѣимєнова́ниѥ',

# Undelete
'undelete-search-submit' => 'ищи́',

# Namespace form on various pages
'blanknamespace' => '(гла́вьно)',

# Contributions
'contributions' => 'по́льꙃєватєлꙗ добродѣꙗ́ниꙗ',
'mycontris'     => 'моꙗ́ добродѣꙗ́ниꙗ',
'uctop'         => '(послѣ́дьнꙗ мѣ́на)',

'sp-contributions-submit' => 'ищи́',

# What links here
'whatlinkshere'       => 'дос̑ьдє́щьнѩ съвѧ́ꙁи',
'whatlinkshere-page'  => 'страни́ца :',
'isredirect'          => 'прѣнаправлѥ́ниѥ',
'whatlinkshere-links' => '← съвѧ́ꙁи',

# Block/unblock
'blockip'            => 'ꙁагради́ по́льꙃєватєл҄ь',
'ipblocklist-submit' => 'иска́ниѥ',
'blocklink'          => 'ꙁагради́',
'contribslink'       => 'добродѣꙗ́ниꙗ',

# Move page
'movearticle'     => 'страни́ца :',
'move-watch'      => 'си страни́цѧ блюдє́ниѥ',
'movepagebtn'     => 'прѣимєнова́ниѥ',
'movepage-moved'  => "<big>'''⁖ $1 ⁖ нарєчє́нъ ⁖ $2⁖ ѥ́стъ'''</big>", # The two titles are passed in plain text as $3 and $4 to allow additional goodies in the message.
'movetalk'        => 'си страни́цѧ бєсѣ́дꙑ прѣимєнова́ниѥ',
'1movedto2'       => '⁖ [[$1]] ⁖ нарєчє́нъ ⁖ [[$2]] ⁖ ѥ́стъ',
'1movedto2_redir' => '[[$1]] нарєчє́нъ [[$2]] врьхоу́ прѣнаправлѥ́ниꙗ ѥ́стъ.',
'movelogpage'     => 'прѣимєнова́ниꙗ їсторі́ꙗ',

# Namespace 8 related
'allmessagesname' => 'и́мѧ',

# Tooltip help for the actions
'tooltip-pt-logout'       => 'ис̾хо́дъ',
'tooltip-p-logo'          => 'гла́вьна страни́ца',
'tooltip-n-recentchanges' => 'послѣ́дьнъ мѣ́нъ катало́гъ',

# Media information
'file-info-size' => '($1 × $2 п҃ѯ · дѣ́ла мѣ́ра : $3 · MIME тѵ́пъ : $4)',

# EXIF tags
'exif-artist' => 'творь́ць',

# 'all' in various places, this might be different for inflected languages
'watchlistall2' => 'вьсꙗ́',
'namespacesall' => 'вьсꙗ́',

'unit-pixel' => 'п҃ѯ',

# Multipage image navigation
'imgmultigo' => 'прѣиди́',

# Table pager
'table_pager_limit_submit' => 'прѣиди́',

# Auto-summaries
'autosumm-new' => 'но́ва страни́ца : $1',

# Size units
'size-bytes' => '$1 Б҃',

# Special:Version
'version-version'          => 'о́браꙁъ',
'version-license'          => 'прощє́ниѥ',
'version-software-version' => 'о́браꙁъ',

# Special:Filepath
'filepath-page' => 'дѣ́ло :',

);
