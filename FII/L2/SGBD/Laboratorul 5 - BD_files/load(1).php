var mediaWikiLoadStart=(new Date()).getTime();function isCompatible(ua){if(ua===undefined){ua=navigator.userAgent;}return!((ua.indexOf('MSIE')!==-1&&parseFloat(ua.split('MSIE')[1])<8)||(ua.indexOf('Firefox/')!==-1&&parseFloat(ua.split('Firefox/')[1])<3)||(ua.indexOf('Opera/')!==-1&&(ua.indexOf('Version/')===-1?parseFloat(ua.split('Opera/')[1])<10:parseFloat(ua.split('Version/')[1])<12))||(ua.indexOf('Opera ')!==-1&&parseFloat(ua.split(' Opera ')[1])<10)||ua.match(/BlackBerry[^\/]*\/[1-5]\./)||ua.match(/webOS\/1\.[0-4]/)||ua.match(/PlayStation/i)||ua.match(/SymbianOS|Series60/)||ua.match(/NetFront/)||ua.match(/Opera Mini/)||ua.match(/S40OviBrowser/)||(ua.match(/Glass/)&&ua.match(/Android/)));}var startUp=function(){mw.config=new mw.Map(true);mw.loader.addSource({"local":"/BD/load.php"});mw.loader.register([["site",1443603540,[],"site"],["noscript",1443603540,[],"noscript"],["filepage",1443603540],["user.groups",1443603540,[],"user"],["user",1443603540,[],"user"],["user.cssprefs",
1443603540,[],"private"],["user.defaults",1443603540],["user.options",1443603540,[6],"private"],["user.tokens",1443603540,[],"private"],["mediawiki.language.data",1443603540,[149]],["mediawiki.skinning.elements",1452288647],["mediawiki.skinning.content",1452288647],["mediawiki.skinning.interface",1452288647],["mediawiki.skinning.content.parsoid",1452288647],["mediawiki.skinning.content.externallinks",1452288647],["jquery.accessKeyLabel",1452288652,[25,43]],["jquery.appear",1452288647],["jquery.arrowSteps",1452288647],["jquery.async",1452288647],["jquery.autoEllipsis",1452288647,[37]],["jquery.badge",1452288647,[146]],["jquery.byteLength",1452288647],["jquery.byteLimit",1452288647,[21]],["jquery.checkboxShiftClick",1452288648],["jquery.chosen",1452288648],["jquery.client",1452288648],["jquery.color",1452288648,[27]],["jquery.colorUtil",1452288648],["jquery.confirmable",1452288648,[150]],["jquery.cookie",1452288648],["jquery.expandableField",1452288648],["jquery.farbtastic",1452288648,[
27]],["jquery.footHovzer",1452288648],["jquery.form",1452288648],["jquery.fullscreen",1452288648],["jquery.getAttrs",1452288648],["jquery.hidpi",1452288648],["jquery.highlightText",1452288648,[43]],["jquery.hoverIntent",1452288648],["jquery.localize",1452288648],["jquery.makeCollapsible",1452288653],["jquery.mockjax",1452288648],["jquery.mw-jump",1452288648],["jquery.mwExtension",1452288648],["jquery.placeholder",1452288648],["jquery.qunit",1452288648],["jquery.qunit.completenessTest",1452288648,[45]],["jquery.spinner",1452288648],["jquery.jStorage",1452288648,[91]],["jquery.suggestions",1452288648,[37]],["jquery.tabIndex",1452288648],["jquery.tablesorter",1452288648,[43,151]],["jquery.textSelection",1452288648,[25]],["jquery.throttle-debounce",1452288648],["jquery.validate",1452288648],["jquery.xmldom",1452288648],["jquery.tipsy",1452288648],["jquery.ui.core",1452288648,[],"jquery.ui"],["jquery.ui.accordion",1452288648,[57,76],"jquery.ui"],["jquery.ui.autocomplete",1452288649,[65],
"jquery.ui"],["jquery.ui.button",1452288649,[57,76],"jquery.ui"],["jquery.ui.datepicker",1452288649,[57],"jquery.ui"],["jquery.ui.dialog",1452288649,[60,63,67,69],"jquery.ui"],["jquery.ui.draggable",1452288649,[57,66],"jquery.ui"],["jquery.ui.droppable",1452288649,[63],"jquery.ui"],["jquery.ui.menu",1452288649,[57,67,76],"jquery.ui"],["jquery.ui.mouse",1452288649,[76],"jquery.ui"],["jquery.ui.position",1452288649,[],"jquery.ui"],["jquery.ui.progressbar",1452288649,[57,76],"jquery.ui"],["jquery.ui.resizable",1452288649,[57,66],"jquery.ui"],["jquery.ui.selectable",1452288649,[57,66],"jquery.ui"],["jquery.ui.slider",1452288649,[57,66],"jquery.ui"],["jquery.ui.sortable",1452288649,[57,66],"jquery.ui"],["jquery.ui.spinner",1452288649,[60],"jquery.ui"],["jquery.ui.tabs",1452288649,[57,76],"jquery.ui"],["jquery.ui.tooltip",1452288649,[57,67,76],"jquery.ui"],["jquery.ui.widget",1452288649,[],"jquery.ui"],["jquery.effects.core",1452288649,[],"jquery.ui"],["jquery.effects.blind",1452288649,[77],
"jquery.ui"],["jquery.effects.bounce",1452288649,[77],"jquery.ui"],["jquery.effects.clip",1452288649,[77],"jquery.ui"],["jquery.effects.drop",1452288649,[77],"jquery.ui"],["jquery.effects.explode",1452288649,[77],"jquery.ui"],["jquery.effects.fade",1452288649,[77],"jquery.ui"],["jquery.effects.fold",1452288649,[77],"jquery.ui"],["jquery.effects.highlight",1452288649,[77],"jquery.ui"],["jquery.effects.pulsate",1452288649,[77],"jquery.ui"],["jquery.effects.scale",1452288649,[77],"jquery.ui"],["jquery.effects.shake",1452288649,[77],"jquery.ui"],["jquery.effects.slide",1452288649,[77],"jquery.ui"],["jquery.effects.transfer",1452288649,[77],"jquery.ui"],["json",1452288649,[],null,null,"return!!(window.JSON\u0026\u0026JSON.stringify\u0026\u0026JSON.parse);"],["moment",1452288649],["mediawiki.apihelp",1452288649,[112]],["mediawiki.template",1452288649],["mediawiki.template.mustache",1452288649],["mediawiki.apipretty",1452288649],["mediawiki.api",1452288650,[128]],["mediawiki.api.category",
1452288650,[123,97]],["mediawiki.api.edit",1452288650,[123,97,8]],["mediawiki.api.login",1452288650,[97]],["mediawiki.api.options",1452288650,[97]],["mediawiki.api.parse",1452288650,[97]],["mediawiki.api.watch",1452288650,[97,8]],["mediawiki.content.json",1452288650],["mediawiki.confirmCloseWindow",1452288650],["mediawiki.debug",1452288650,[32,56]],["mediawiki.debug.init",1452288650,[106]],["mediawiki.feedback",1452288650,[123,116,204]],["mediawiki.filewarning",1452288650,[204]],["mediawiki.helplink",1452288650],["mediawiki.hidpi",1452288650,[36],null,null,"return'srcset'in new Image();"],["mediawiki.hlist",1452288650,[25]],["mediawiki.htmlform",1452288650,[22,43]],["mediawiki.icon",1452288650],["mediawiki.inspect",1452288650,[21,91]],["mediawiki.messagePoster",1452288650,[97,203]],["mediawiki.messagePoster.wikitext",1452288650,[99,116]],["mediawiki.notification",1452288650,[157]],["mediawiki.notify",1452288650],["mediawiki.pager.tablePager",1452288650],["mediawiki.searchSuggest",
1452288653,[35,44,49,97]],["mediawiki.sectionAnchor",1452288647],["mediawiki.Title",1452288650,[21,128]],["mediawiki.toc",1452288814,[29]],["mediawiki.Uri",1452288650,[128]],["mediawiki.user",1452288650,[29,97,7,8]],["mediawiki.userSuggest",1452288650,[49,97]],["mediawiki.util",1452288650,[15,119]],["mediawiki.cookie",1452288650,[29]],["mediawiki.toolbar",1452288650],["mediawiki.action.edit",1452288650,[22,52,132]],["mediawiki.action.edit.styles",1452288650],["mediawiki.action.edit.collapsibleFooter",1452288650,[29,40,114]],["mediawiki.action.edit.preview",1452288650,[33,47,52,137,97,150]],["mediawiki.action.edit.stash",1452288650,[35,97]],["mediawiki.action.history",1452288650,[],"mediawiki.action.history"],["mediawiki.action.history.diff",1452288650,[],"mediawiki.action.history"],["mediawiki.action.view.dblClickEdit",1452288650,[157,7]],["mediawiki.action.view.metadata",1452288650],["mediawiki.action.view.categoryPage.styles",1452288650],["mediawiki.action.view.postEdit",1452288653,[
129,150,94]],["mediawiki.action.view.redirect",1452288650,[25]],["mediawiki.action.view.redirectPage",1452288650],["mediawiki.action.view.rightClickEdit",1452288650],["mediawiki.action.edit.editWarning",1452289181,[52,105,150,7]],["mediawiki.language",1452288653,[147,9]],["mediawiki.cldr",1452288650,[148]],["mediawiki.libs.pluralruleparser",1452288650],["mediawiki.language.init",1452288650],["mediawiki.jqueryMsg",1452288650,[146,128]],["mediawiki.language.months",1452288650,[146]],["mediawiki.language.names",1443603540,[149]],["mediawiki.language.specialCharacters",1443603540,[146]],["mediawiki.libs.jpegmeta",1452288650],["mediawiki.page.gallery",1452288650,[53]],["mediawiki.page.ready",1452288651,[15,23,40,42,44]],["mediawiki.page.startup",1452288651,[128]],["mediawiki.page.patrol.ajax",1452288651,[47,123,97,157,8]],["mediawiki.page.watch.ajax",1452289181,[103,157]],["mediawiki.page.image.pagination",1452288651,[47,125]],["mediawiki.special",1452288651],["mediawiki.special.block",
1452288651,[128]],["mediawiki.special.changeemail",1452288651,[128]],["mediawiki.special.changeslist",1452288651],["mediawiki.special.changeslist.legend",1452288651],["mediawiki.special.changeslist.legend.js",1452288651,[29,40]],["mediawiki.special.changeslist.enhanced",1452288651],["mediawiki.special.edittags",1452288651,[24]],["mediawiki.special.edittags.styles",1452288651],["mediawiki.special.import",1452288651],["mediawiki.special.movePage",1452288651,[22]],["mediawiki.special.pageLanguage",1452288651],["mediawiki.special.pagesWithProp",1452288651],["mediawiki.special.preferences",1452288651,[105,146]],["mediawiki.special.recentchanges",1452288651,[161]],["mediawiki.special.search",1452506018],["mediawiki.special.undelete",1452288651],["mediawiki.special.upload",1452288651,[47,123,97,105,150,154,7,94]],["mediawiki.special.userlogin.common.styles",1452288651],["mediawiki.special.userlogin.signup.styles",1452288651],["mediawiki.special.userlogin.login.styles",1452288651],[
"mediawiki.special.userlogin.common.js",1452289177],["mediawiki.special.userlogin.signup.js",1452288651,[53,97,150]],["mediawiki.special.unwatchedPages",1452288651,[123,103]],["mediawiki.special.javaScriptTest",1452288651,[125]],["mediawiki.special.version",1452288651],["mediawiki.legacy.config",1452288651],["mediawiki.legacy.ajax",1452288651,[193]],["mediawiki.legacy.commonPrint",1452288647],["mediawiki.legacy.protect",1452288651,[22]],["mediawiki.legacy.shared",1452288647],["mediawiki.legacy.oldshared",1452288651],["mediawiki.legacy.wikibits",1452288651,[128]],["mediawiki.ui",1452288651],["mediawiki.ui.checkbox",1452288651],["mediawiki.ui.radio",1452288651],["mediawiki.ui.anchor",1452288651],["mediawiki.ui.button",1452288647],["mediawiki.ui.input",1452288651],["mediawiki.ui.icon",1452288651],["mediawiki.ui.text",1452288651],["es5-shim",1452288651,[],null,null,"return(function(){'use strict';return!this\u0026\u0026!!Function.prototype.bind;}());"],["oojs",1452288651,[202,91]],[
"oojs-ui",1452288651,[203,205]],["oojs-ui.styles",1452288651],["skins.cologneblue",1452288651],["skins.modern",1452288651],["skins.monobook.styles",1452288651],["skins.vector.styles",1452288647],["skins.vector.js",1452288651,[50,53]]]);mw.config.set({"wgLoadScript":"/BD/load.php","debug":false,"skin":"vector","stylepath":"/BD/skins","wgUrlProtocols":"bitcoin\\:|ftp\\:\\/\\/|ftps\\:\\/\\/|geo\\:|git\\:\\/\\/|gopher\\:\\/\\/|http\\:\\/\\/|https\\:\\/\\/|irc\\:\\/\\/|ircs\\:\\/\\/|magnet\\:|mailto\\:|mms\\:\\/\\/|news\\:|nntp\\:\\/\\/|redis\\:\\/\\/|sftp\\:\\/\\/|sip\\:|sips\\:|sms\\:|ssh\\:\\/\\/|svn\\:\\/\\/|tel\\:|telnet\\:\\/\\/|urn\\:|worldwind\\:\\/\\/|xmpp\\:|\\/\\/","wgArticlePath":"/BD/index.php/$1","wgScriptPath":"/BD","wgScriptExtension":".php","wgScript":"/BD/index.php","wgSearchType":null,"wgVariantArticlePath":false,"wgActionPaths":{},"wgServer":"http://85.122.23.37","wgServerName":"85.122.23.37","wgUserLanguage":"ro","wgContentLanguage":"ro","wgTranslateNumerals":true,
"wgVersion":"1.25.2","wgEnableAPI":true,"wgEnableWriteAPI":true,"wgMainPageTitle":"Pagina principală","wgFormattedNamespaces":{"-2":"Media","-1":"Special","0":"","1":"Discuție","2":"Utilizator","3":"Discuție Utilizator","4":"BD","5":"Discuție BD","6":"Fișier","7":"Discuție Fișier","8":"MediaWiki","9":"Discuție MediaWiki","10":"Format","11":"Discuție Format","12":"Ajutor","13":"Discuție Ajutor","14":"Categorie","15":"Discuție Categorie"},"wgNamespaceIds":{"media":-2,"special":-1,"":0,"discuție":1,"utilizator":2,"discuție_utilizator":3,"bd":4,"discuție_bd":5,"fișier":6,"discuție_fișier":7,"mediawiki":8,"discuție_mediawiki":9,"format":10,"discuție_format":11,"ajutor":12,"discuție_ajutor":13,"categorie":14,"discuție_categorie":15,"discuţie":1,"discuţie_utilizator":3,"imagine":6,"discuţie_imagine":7,"fişier":6,"discuţie_fişier":7,"discuţie_mediawiki":9,"discuţie_format":11,"discuţie_ajutor":13,"discuţie_categorie":15,"discuţie_bd":5,"image":6,"image_talk":7,
"talk":1,"user":2,"user_talk":3,"project":4,"project_talk":5,"file":6,"file_talk":7,"mediawiki_talk":9,"template":10,"template_talk":11,"help":12,"help_talk":13,"category":14,"category_talk":15},"wgContentNamespaces":[0],"wgSiteName":"BD","wgDBname":"my_wiki","wgAvailableSkins":{"cologneblue":"CologneBlue","modern":"Modern","monobook":"MonoBook","vector":"Vector","fallback":"Fallback","apioutput":"ApiOutput"},"wgExtensionAssetsPath":"/BD/extensions","wgCookiePrefix":"my_wiki_WIKI_BD_","wgCookieDomain":"","wgCookiePath":"/","wgCookieExpiration":15552000,"wgResourceLoaderMaxQueryLength":2000,"wgCaseSensitiveNamespaces":[],"wgLegalTitleChars":" %!\"$\u0026'()*,\\-./0-9:;=?@A-Z\\\\\\^_`a-z~+\\u0080-\\uFFFF","wgResourceLoaderStorageVersion":1,"wgResourceLoaderStorageEnabled":false});};if(isCompatible()){document.write(
"\u003Cscript src=\"/BD/load.php?debug=false\u0026amp;lang=ro\u0026amp;modules=jquery%2Cmediawiki\u0026amp;only=scripts\u0026amp;skin=vector\u0026amp;version=20160108T213049Z\"\u003E\u003C/script\u003E");};
/* cache key: my_wiki-WIKI_BD_:resourceloader:filter:minify-js:7:8335da234087971f23b9d116a179bede */