(function(e){e.fn.inlineStyler=function(t){var n=e.extend({propertyGroups:{"*":["border","border-radius","box-shadow","height","margin","padding","width","max-width","min-width","border-collapse","border-spacing","caption-side","empty-cells","table-layout","direction","font","font-family","font-style","font-variant","font-size","font-weight","letter-spacing","line-height","text-align","text-decoration","text-indent","text-overflow","text-shadow","text-transform","white-space","word-spacing","word-wrap","vertical-align","color","background","background-color","background-image","background-position","background-repeat","Opacity","bottom","clear","clip","cursor","display","float","left","opacity","outline ","overflow","position","resize ","right","top","visibility","z-index","list-style-image","list-style-position","list-style-type"],block:["margin","padding"]},elementGroups:{"*":["A","ABBR","ACRONYM","ADDRESS","APPLET","AREA","ARTICLE","ASIDE","AUDIO","B","BASE","BASEFONT","BDI","BDO","BIG","BLOCKQUOTE","BODY","BR","BUTTON","CANVAS","CAPTION","CENTER","CITE","CODE","COL","COLGROUP","COMMAND","DATALIST","DD","DEL","DETAILS","DFN","DIALOG","DIR","DIV","DL","DT","EM","EMBED","FIELDSET","FIGCAPTION","FIGURE","FONT","FOOTER","FORM","FRAME","FRAMESET","H1","HEAD","HEADER","HR","HTML","I","IFRAME","IMG","INPUT","INS","KBD","KEYGEN","LABEL","LEGEND","LI","LINK","MAP","MARK","MENU","META","METER","NAV","NOFRAMES","NOSCRIPT","OBJECT","OL","OPTGROUP","OPTION","OUTPUT","P","PARAM","PRE","PROGRESS","Q","RP","RT","RUBY","S","SAMP","SCRIPT","SECTION","SELECT","SMALL","SOURCE","SPAN","STRIKE","STRONG","STYLE","SUB","SUMMARY","SUP","TABLE","TBODY","TD","TEXTAREA","TFOOT","TH","THEAD","TIME","TITLE","TR","TRACK","TT","U","UL","VAR","VIDEO","WBR"]}},t);this.each(function(t,r){for(var i in n.elementGroups){for(var s=0,o=n.elementGroups[i].length;s<o;s++){var u=e(this).find(n.elementGroups[i][s]);u.each(function(){if(e(this).attr("style")){var t=e(this).attr("style");var r=t.split(";")}else{var r=[]}for(var s=0,o=n.propertyGroups[i].length;s<o;s++){var u=n.propertyGroups[i][s];if(e(this).css(u)){r.push(u+":"+e(this).css(u))}}e(this).attr("style",r.join(";"))})}}})}})(jQuery)
