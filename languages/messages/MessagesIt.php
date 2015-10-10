<?php
/** Italian (italiano)
 *
 * To improve a translation please visit https://translatewiki.net
 *
 * @ingroup Language
 * @file
 *
 */

$namespaceNames = array(
	NS_MEDIA            => 'Media',
	NS_SPECIAL          => 'Speciale',
	NS_TALK             => 'Discussione',
	NS_USER             => 'Utente',
	NS_USER_TALK        => 'Discussioni_utente',
	NS_PROJECT_TALK     => 'Discussioni_$1',
	NS_FILE             => 'File',
	NS_FILE_TALK        => 'Discussioni_file',
	NS_MEDIAWIKI        => 'MediaWiki',
	NS_MEDIAWIKI_TALK   => 'Discussioni_MediaWiki',
	NS_TEMPLATE         => 'Template',
	NS_TEMPLATE_TALK    => 'Discussioni_template',
	NS_HELP             => 'Aiuto',
	NS_HELP_TALK        => 'Discussioni_aiuto',
	NS_CATEGORY         => 'Categoria',
	NS_CATEGORY_TALK    => 'Discussioni_categoria',
);

$namespaceAliases = array(
	'Immagine' => NS_FILE,
	'Discussioni_immagine' => NS_FILE_TALK,
);

$separatorTransformTable = array( ',' => "\xc2\xa0", '.' => ',' );

$dateFormats = array(
	'mdy time' => 'H:i',
	'mdy date' => 'M j, Y',
	'mdy both' => 'H:i, M j, Y',

	'dmy time' => 'H:i',
	'dmy date' => 'j M Y',
	'dmy both' => 'H:i, j M Y',

	'ymd time' => 'H:i',
	'ymd date' => 'Y M j',
	'ymd both' => 'H:i, Y M j',
);

$specialPageAliases = array(
	'Activeusers'               => array( 'UtentiAttivi' ),
	'Allmessages'               => array( 'Messaggi' ),
	'Allpages'                  => array( 'TutteLePagine' ),
	'Ancientpages'              => array( 'PagineMenoRecenti' ),
	'Badtitle'                  => array( 'TitoloErrato' ),
	'Blankpage'                 => array( 'PaginaVuota' ),
	'Block'                     => array( 'Blocca' ),
	'Booksources'               => array( 'RicercaISBN' ),
	'BrokenRedirects'           => array( 'RedirectErrati' ),
	'Categories'                => array( 'Categorie' ),
	'ChangeEmail'               => array( 'CambiaEmail' ),
	'ChangePassword'            => array( 'CambiaPassword' ),
	'ComparePages'              => array( 'ComparaPagine' ),
	'Confirmemail'              => array( 'ConfermaEmail' ),
	'Contributions'             => array( 'Contributi', 'ContributiUtente', 'Edit' ),
	'CreateAccount'             => array( 'CreaUtenza', 'CreaAccount' ),
	'Deadendpages'              => array( 'PagineSenzaUscita' ),
	'DeletedContributions'      => array( 'ContributiCancellati' ),
	'DoubleRedirects'           => array( 'RedirectDoppi' ),
	'EditWatchlist'             => array( 'ModificaOsservati', 'ModificaOsservatiSpeciali', 'ModificaListaSeguiti' ),
	'Emailuser'                 => array( 'InviaEmail' ),
	'ExpandTemplates'           => array( 'EspandiTemplate' ),
	'Export'                    => array( 'Esporta' ),
	'Fewestrevisions'           => array( 'PagineConMenoRevisioni' ),
	'FileDuplicateSearch'       => array( 'CercaFileDuplicati' ),
	'Filepath'                  => array( 'Percorso' ),
	'Import'                    => array( 'Importa' ),
	'Invalidateemail'           => array( 'InvalidaEmail' ),
	'JavaScriptTest'            => array( 'TestJavaScript' ),
	'BlockList'                 => array( 'IPBloccati', 'ElencoBlocchi', 'Blocchi' ),
	'LinkSearch'                => array( 'CercaCollegamenti', 'CercaLink' ),
	'Listadmins'                => array( 'Amministratori', 'ElencoAmministratori', 'Admin', 'Sysop', 'Cricca' ),
	'Listbots'                  => array( 'Bot', 'ElencoBot' ),
	'Listfiles'                 => array( 'File', 'Immagini' ),
	'Listgrouprights'           => array( 'ElencoPermessiGruppi', 'Privilegi' ),
	'Listredirects'             => array( 'ElencoRedirect' ),
	'ListDuplicatedFiles'       => array( 'ElencoFileDuplicati' ),
	'Listusers'                 => array( 'Utenti', 'ElencoUtenti' ),
	'Lockdb'                    => array( 'BloccaDB' ),
	'Log'                       => array( 'Registri', 'Registro' ),
	'Lonelypages'               => array( 'PagineOrfane' ),
	'Longpages'                 => array( 'PaginePiùLunghe' ),
	'MergeHistory'              => array( 'UnisciCronologia' ),
	'MIMEsearch'                => array( 'RicercaMIME' ),
	'Mostcategories'            => array( 'PagineConPiùCategorie' ),
	'Mostimages'                => array( 'ImmaginiPiùRichiamate' ),
	'Mostinterwikis'            => array( 'InterwikiPiùRichiamati' ),
	'Mostlinked'                => array( 'PaginePiùRichiamate' ),
	'Mostlinkedcategories'      => array( 'CategoriePiùRichiamate' ),
	'Mostlinkedtemplates'       => array( 'TemplatePiùRichiamati' ),
	'Mostrevisions'             => array( 'PagineConPiùRevisioni' ),
	'Movepage'                  => array( 'Sposta', 'Rinomina' ),
	'Mycontributions'           => array( 'MieiContributi' ),
	'MyLanguage'                => array( 'MiaLingua' ),
	'Mypage'                    => array( 'MiaPaginaUtente', 'MiaPagina' ),
	'Mytalk'                    => array( 'MieDiscussioni' ),
	'Myuploads'                 => array( 'MieiUpload', 'MieiEdit' ),
	'Newimages'                 => array( 'ImmaginiRecenti' ),
	'Newpages'                  => array( 'PaginePiùRecenti' ),
	'PagesWithProp'             => array( 'PagineConProprietà' ),
	'PasswordReset'             => array( 'ReimpostaPassword' ),
	'PermanentLink'             => array( 'LinkPermanente' ),

	'Preferences'               => array( 'Preferenze' ),
	'Prefixindex'               => array( 'Prefissi' ),
	'Protectedpages'            => array( 'PagineProtette' ),
	'Protectedtitles'           => array( 'TitoliProtetti' ),
	'Randompage'                => array( 'PaginaCasuale' ),
	'RandomInCategory'          => array( 'CasualeInCategoria' ),
	'Randomredirect'            => array( 'RedirectCasuale' ),
	'Recentchanges'             => array( 'UltimeModifiche' ),
	'Recentchangeslinked'       => array( 'ModificheCorrelate' ),
	'ResetTokens'               => array( 'ReimpostaToken' ),
	'Revisiondelete'            => array( 'CancellaRevisione' ),
	'Search'                    => array( 'Ricerca', 'Cerca', 'Trova' ),
	'Shortpages'                => array( 'PaginePiùCorte' ),
	'Specialpages'              => array( 'PagineSpeciali' ),
	'Statistics'                => array( 'Statistiche' ),
	'Tags'                      => array( 'Etichette', 'Tag' ),
	'TrackingCategories'        => array( 'CategorieMonitoraggio' ),
	'Unblock'                   => array( 'ElencoSblocchi', 'Sblocchi' ),
	'Uncategorizedcategories'   => array( 'CategorieSenzaCategorie' ),
	'Uncategorizedimages'       => array( 'ImmaginiSenzaCategorie' ),
	'Uncategorizedpages'        => array( 'PagineSenzaCategorie' ),
	'Uncategorizedtemplates'    => array( 'TemplateSenzaCategorie' ),
	'Undelete'                  => array( 'Ripristina' ),
	'Unlockdb'                  => array( 'SbloccaDB' ),
	'Unusedcategories'          => array( 'CategorieNonUsate', 'CategorieVuote' ),
	'Unusedimages'              => array( 'ImmaginiNonUsate' ),
	'Unusedtemplates'           => array( 'TemplateNonUsati' ),
	'Unwatchedpages'            => array( 'PagineNonOsservate' ),
	'Upload'                    => array( 'Carica' ),
	'UploadStash'               => array( 'CodaCaricamenti' ),
	'Userlogin'                 => array( 'Entra' ),
	'Userlogout'                => array( 'Esci' ),
	'Userrights'                => array( 'PermessiUtente' ),
	'Version'                   => array( 'Versione' ),
	'Wantedcategories'          => array( 'CategorieRichieste' ),
	'Wantedfiles'               => array( 'FileRichiesti' ),
	'Wantedpages'               => array( 'PagineRichieste' ),
	'Wantedtemplates'           => array( 'TemplateRichiesti' ),
	'Watchlist'                 => array( 'OsservatiSpeciali' ),
	'Whatlinkshere'             => array( 'PuntanoQui' ),
	'Withoutinterwiki'          => array( 'PagineSenzaInterwiki' ),
);

$magicWords = array(
	'redirect'                  => array( '0', '#RINVIA', '#RINVIO', '#RIMANDO', '#REDIRECT' ),
	'currentmonth'              => array( '1', 'MESEATTUALE', 'MESECORRENTE', 'CURRENTMONTH', 'CURRENTMONTH2' ),
	'currentmonthname'          => array( '1', 'NOMEMESEATTUALE', 'NOMEMESECORRENTE', 'CURRENTMONTHNAME' ),
	'currentmonthnamegen'       => array( '1', 'NOMEMESEATTUALEGEN', 'NOMEMESECORRENTEGEN', 'CURRENTMONTHNAMEGEN' ),
	'currentmonthabbrev'        => array( '1', 'MESEATTUALEABBREV', 'MESECORRENTEABBREV', 'CURRENTMONTHABBREV' ),
	'currentday'                => array( '1', 'GIORNOATTUALE', 'GIORNOCORRENTE', 'CURRENTDAY' ),
	'currentday2'               => array( '1', 'GIORNOATTUALE2', 'GIORNOCORRENTE2', 'CURRENTDAY2' ),
	'currentdayname'            => array( '1', 'NOMEGIORNOATTUALE', 'NOMEGIORNOCORRENTE', 'CURRENTDAYNAME' ),
	'currentyear'               => array( '1', 'ANNOATTUALE', 'ANNOCORRENTE', 'CURRENTYEAR' ),
	'currenttime'               => array( '1', 'ORARIOATTUALE', 'CURRENTTIME' ),
	'currenthour'               => array( '1', 'ORAATTUALE', 'ORACORRENTE', 'CURRENTHOUR' ),
	'localmonth'                => array( '1', 'MESELOCALE', 'MESELOCALE2', 'LOCALMONTH', 'LOCALMONTH2' ),
	'localmonth1'               => array( '1', 'MESELOCALE1', 'LOCALMONTH1' ),
	'localmonthname'            => array( '1', 'NOMEMESELOCALE', 'LOCALMONTHNAME' ),
	'localmonthnamegen'         => array( '1', 'NOMEMESELOCALEGEN', 'LOCALMONTHNAMEGEN' ),
	'localmonthabbrev'          => array( '1', 'MESELOCALEABBREV', 'LOCALMONTHABBREV' ),
	'localday'                  => array( '1', 'GIORNOLOCALE', 'LOCALDAY' ),
	'localday2'                 => array( '1', 'GIORNOLOCALE2', 'LOCALDAY2' ),
	'localdayname'              => array( '1', 'NOMEGIORNOLOCALE', 'LOCALDAYNAME' ),
	'localyear'                 => array( '1', 'ANNOLOCALE', 'LOCALYEAR' ),
	'localtime'                 => array( '1', 'ORARIOLOCALE', 'LOCALTIME' ),
	'localhour'                 => array( '1', 'ORALOCALE', 'LOCALHOUR' ),
	'numberofpages'             => array( '1', 'NUMEROPAGINE', 'NUMBEROFPAGES' ),
	'numberofarticles'          => array( '1', 'NUMEROVOCI', 'NUMEROARTICOLI', 'NUMBEROFARTICLES' ),
	'numberoffiles'             => array( '1', 'NUMEROFILE', 'NUMBEROFFILES' ),
	'numberofusers'             => array( '1', 'NUMEROUTENTI', 'NUMBEROFUSERS' ),
	'numberofactiveusers'       => array( '1', 'NUMEROUTENTIATTIVI', 'NUMBEROFACTIVEUSERS' ),
	'numberofedits'             => array( '1', 'NUMEROMODIFICHE', 'NUMEROEDIT', 'NUMBEROFEDITS' ),
	'pagename'                  => array( '1', 'TITOLOPAGINA', 'PAGENAME' ),
	'pagenamee'                 => array( '1', 'TITOLOPAGINAE', 'PAGENAMEE' ),
	'subpagename'               => array( '1', 'NOMESOTTOPAGINA', 'SUBPAGENAME' ),
	'subpagenamee'              => array( '1', 'NOMESOTTOPAGINAE', 'SUBPAGENAMEE' ),
	'subst'                     => array( '0', 'SOST:', 'SUBST:' ),
	'img_thumbnail'             => array( '1', 'miniatura', 'min', 'thumbnail', 'thumb' ),
	'img_manualthumb'           => array( '1', 'miniatura=$1', 'min=$1', 'thumbnail=$1', 'thumb=$1' ),
	'img_right'                 => array( '1', 'destra', 'right' ),
	'img_left'                  => array( '1', 'sinistra', 'left' ),
	'img_none'                  => array( '1', 'nessuno', 'none' ),
	'img_center'                => array( '1', 'centro', 'center', 'centre' ),
	'img_framed'                => array( '1', 'riquadrato', 'incorniciato', 'originale', 'framed', 'enframed', 'frame' ),
	'img_frameless'             => array( '1', 'senza_cornice', 'frameless' ),
	'img_page'                  => array( '1', 'pagina=$1', 'pagina_$1', 'page=$1', 'page $1' ),
	'img_upright'               => array( '1', 'verticale', 'verticale=$1', 'verticale_$1', 'upright', 'upright=$1', 'upright $1' ),
	'img_border'                => array( '1', 'bordo', 'border' ),
	'img_sub'                   => array( '1', 'pedice', 'sub' ),
	'img_top'                   => array( '1', 'sopra', 'top' ),
	'img_text_top'              => array( '1', 'testo-sopra', 'text-top' ),
	'img_middle'                => array( '1', 'metà', 'middle' ),
	'img_bottom'                => array( '1', 'sotto', 'bottom' ),
	'img_text_bottom'           => array( '1', 'testo-sotto', 'text-bottom' ),
	'sitename'                  => array( '1', 'NOMESITO', 'SITENAME' ),
	'servername'                => array( '0', 'NOMESERVER', 'SERVERNAME' ),
	'gender'                    => array( '0', 'GENERE:', 'GENDER:' ),
	'currentweek'               => array( '1', 'SETTIMANACORRENTE', 'CURRENTWEEK' ),
	'localweek'                 => array( '1', 'SETTIMANALOCALE', 'LOCALWEEK' ),
	'plural'                    => array( '0', 'PLURALE:', 'PLURAL:' ),
	'displaytitle'              => array( '1', 'MOSTRATITOLO', 'DISPLAYTITLE' ),
	'language'                  => array( '0', '#LINGUA', '#LANGUAGE:' ),
	'numberofadmins'            => array( '1', 'NUMEROADMIN', 'NUMBEROFADMINS' ),
	'special'                   => array( '0', 'speciale', 'special' ),
	'tag'                       => array( '0', 'etichetta', 'tag' ),
	'pagesincategory'           => array( '1', 'PAGINEINCAT', 'PAGESINCATEGORY', 'PAGESINCAT' ),
	'pagesize'                  => array( '1', 'DIMENSIONEPAGINA', 'PESOPAGINA', 'PAGESIZE' ),
	'index'                     => array( '1', '__INDICE__', '__INDEX__' ),
	'noindex'                   => array( '1', '__NOINDICE__', '__NOINDEX__' ),
	'protectionlevel'           => array( '1', 'LIVELLOPROTEZIONE', 'PROTECTIONLEVEL' ),
	'formatdate'                => array( '0', 'formatodata', 'formatdate', 'dateformat' ),
	'pagesincategory_pages'     => array( '0', 'pagine', 'pages' ),
	'pagesincategory_files'     => array( '0', 'file', 'files' ),
);

$linkTrail = '/^([a-zàéèíîìóòúù]+)(.*)$/sDu';

