!function(e){if("object"==typeof exports&&"undefined"!=typeof module)module.exports=e();else if("function"==typeof define&&define.amd)define([],e);else{("undefined"!=typeof window?window:"undefined"!=typeof global?global:"undefined"!=typeof self?self:this).Grade=e()}}(function(){return function e(t,n,i){function r(s,o){if(!n[s]){if(!t[s]){var u="function"==typeof require&&require;if(!o&&u)return u(s,!0);if(a)return a(s,!0);var c=new Error("Cannot find module '"+s+"'");throw c.code="MODULE_NOT_FOUND",c}var g=n[s]={exports:{}};t[s][0].call(g.exports,function(e){var n=t[s][1][e];return r(n||e)},g,g.exports,e,t,n,i)}return n[s].exports}for(var a="function"==typeof require&&require,s=0;s<i.length;s++)r(i[s]);return r}({1:[function(e,t,n){"use strict";var i=function(){function e(e,t){for(var n=0;n<t.length;n++){var i=t[n];i.enumerable=i.enumerable||!1,i.configurable=!0,"value"in i&&(i.writable=!0),Object.defineProperty(e,i.key,i)}}return function(t,n,i){return n&&e(t.prototype,n),i&&e(t,i),t}}();var r=["webkit"],a=function(){function e(t,n,i){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.callback=i||null,this.container=t,this.image=this.container.querySelector(n)||this.container.querySelector("img"),this.gradientData=[],this.image&&this.container&&(this.canvas=document.createElement("canvas"),this.ctx=this.canvas.getContext("2d"),this.imageDimensions={width:0,height:0},this.imageData=[],this.readImage())}return i(e,[{key:"readImage",value:function(){this.imageDimensions.width=.1*this.image.width,this.imageDimensions.height=.1*this.image.height,this.render()}},{key:"getImageData",value:function(){var e=this.ctx.getImageData(0,0,this.imageDimensions.width,this.imageDimensions.height).data;this.imageData=Array.from(e)}},{key:"getChunkedImageData",value:function(){return this.imageData.reduce(function(e,t,n){var i=Math.floor(n/4);return e[i]||(e[i]=[]),e[i].push(t),e},[]).filter(function(e){return e.slice(0,2).every(function(e){return e<250})&&e.slice(0,2).every(function(e){return e>0})})}},{key:"getRGBAGradientValues",value:function(e){return e.map(function(e,t){return"rgb("+e.rgba.slice(0,3).join(",")+") "+(0==t?"0%":"75%")}).join(",")}},{key:"getCSSGradientProperty",value:function(e){var t=this.getRGBAGradientValues(e);return r.map(function(e){return"background-image: -"+e+"-linear-gradient(\n                        135deg,\n                        "+t+"\n                    )"}).concat(["background-image: linear-gradient(\n                    135deg,\n                    "+t+"\n                )"]).join(";")}},{key:"getMiddleRGB",value:function(e,t){return[parseInt(.5*e[0]+.5*t[0]),parseInt(.5*e[1]+.5*t[1]),parseInt(.5*e[2]+.5*t[2])]}},{key:"getSortedValues",value:function(e){return Object.keys(e).map(function(t){var n=t,i=t.split("|"),r=(299*i[0]+587*i[1]+114*i[2])/1e3;return{rgba:n.split("|"),occurs:e[t],brightness:r}}).sort(function(e,t){return e.occurs-t.occurs}).reverse().slice(0,10).sort(function(e,t){return e.brightness-t.brightness}).reverse()}},{key:"getTextProperty",value:function(e){var t=this.getMiddleRGB(e[0].rgba.slice(0,3),e[1].rgba.slice(0,3));return Math.round((299*parseInt(t[0])+587*parseInt(t[1])+114*parseInt(t[2]))/1e3)>125?"color: #000":"color: #fff"}},{key:"getTopValues",value:function(e){var t=this.getSortedValues(e);return[t[0],t[t.length-1]]}},{key:"getUniqValues",value:function(e){return e.reduce(function(e,t){var n=t.join("|");return e[n]?(e[n]=++e[n],e):(e[n]=1,e)},{})}},{key:"renderGradient",value:function(){var e=window.localStorage,t="grade-"+this.image.getAttribute("src"),n=null;if(e&&e.getItem(t))n=JSON.parse(e.getItem(t));else{var i=this.getChunkedImageData();n=this.getTopValues(this.getUniqValues(i)),e&&e.setItem(t,JSON.stringify(n))}if(this.callback)this.gradientData=n;else{var r=this.getCSSGradientProperty(n),a=this.getTextProperty(n),s=(this.container.getAttribute("style")||"")+"; "+r+"; "+a;this.container.setAttribute("style",s)}}},{key:"render",value:function(){this.canvas.width=this.imageDimensions.width,this.canvas.height=this.imageDimensions.height,this.ctx.drawImage(this.image,0,0,this.imageDimensions.width,this.imageDimensions.height),this.getImageData(),this.renderGradient()}}]),e}();t.exports=function(e,t,n){var i=function(e,t,n){var i=new a(e,t,n).gradientData;return i.length?{element:e,gradientData:i}:null},r=(NodeList.prototype.isPrototypeOf(e)?Array.from(e).map(function(e){return i(e,t,n)}):[i(e,t,n)]).filter(Boolean);if(r.length)return n(r)}},{}]},{},[1])(1)});