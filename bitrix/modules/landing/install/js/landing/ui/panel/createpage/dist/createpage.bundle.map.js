{"version":3,"file":"createpage.bundle.map.js","names":["this","BX","Landing","UI","exports","main_core","main_loader","landing_ui_panel_content","landing_loc","landing_backend","landing_env","landing_sliderhacks","landing_ui_field_textfield","_templateObject","_templateObject2","CreatePage","_Content","babelHelpers","inherits","createClass","key","value","getInstance","instance","title","Loc","getMessage","id","data","_this","classCallCheck","possibleConstructorReturn","getPrototypeOf","call","defineProperty","assertThisInitialized","Cache","MemoryCache","Dom","addClass","layout","overlay","appendFooterButton","Button","BaseButton","text","onClick","onSave","bind","className","hide","renderTo","window","parent","document","body","getTitleField","cache","remember","TextField","textOnly","getCodeField","getForm","_this2","Form","BaseForm","fields","show","_ref","arguments","length","undefined","_ref$title","style","footer","range","contextDocument","getSelection","getRangeAt","node","Block","Node","Text","currentNode","isEditable","currentField","capitalizedTitle","replace","c","toUpperCase","setValue","translitedTitle","translit","change_case","replace_space","replace_other","clear","appendForm","get","prototype","getSuccessMessage","envOptions","Env","getOptions","urlMask","params","sef_url","landing_view","siteId","site_id","editLink","Tag","render","taggedTemplateLiteral","getFailMessage","_this3","backend","Backend","getValue","code","_Env$getInstance$getO","folderId","folder_id","loader","Loader","createPage","then","result","Promise","resolve","setTimeout","Type","isNumber","successMessage","getType","_link","querySelector","Event","event","preventDefault","SliderHacks","reloadSlider","href","append","content","concat","removeAllRanges","addRange","enableEdit","tmpHref","encode","getRandom","selection","execCommand","link","anchorNode","parentElement","attr","target","isString","innerText","isPlainObject","attrs","Content","Panel","Field"],"sources":["createpage.bundle.js"],"mappings":"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"}