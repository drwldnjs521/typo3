!function(t){"object"==typeof exports&&"object"==typeof module?t(require("../../lib/codemirror"),require("../xml/xml"),require("../javascript/javascript")):"function"==typeof define&&define.amd?define(["../../lib/codemirror","../xml/xml","../javascript/javascript"],t):t(CodeMirror)}((function(t){"use strict";function e(t,e,n,r){this.state=t,this.mode=e,this.depth=n,this.prev=r}function n(r){return new e(t.copyState(r.mode,r.state),r.mode,r.depth,r.prev&&n(r.prev))}t.defineMode("jsx",(function(r,i){var a=t.getMode(r,{name:"xml",allowMissing:!0,multilineTagIndentPastTag:!1,allowMissingTagName:!0}),o=t.getMode(r,i&&i.base||"javascript");function s(t){var e=t.tagName;t.tagName=null;var n=a.indent(t,"","");return t.tagName=e,n}function c(n,i){return i.context.mode==a?function(n,i,p){if(2==p.depth)return n.match(/^.*?\*\//)?p.depth=1:n.skipToEnd(),"comment";if("{"==n.peek()){a.skipAttribute(p.state);var d=s(p.state),u=p.state.context;if(u&&n.match(/^[^>]*>\s*$/,!1)){for(;u.prev&&!u.startOfLine;)u=u.prev;u.startOfLine?d-=r.indentUnit:p.prev.state.lexical&&(d=p.prev.state.lexical.indented)}else 1==p.depth&&(d+=r.indentUnit);return i.context=new e(t.startState(o,d),o,0,i.context),null}if(1==p.depth){if("<"==n.peek())return a.skipAttribute(p.state),i.context=new e(t.startState(a,s(p.state)),a,0,i.context),null;if(n.match("//"))return n.skipToEnd(),"comment";if(n.match("/*"))return p.depth=2,c(n,i)}var x,f=a.token(n,p.state),l=n.current();/\btag\b/.test(f)?/>$/.test(l)?p.state.context?p.depth=0:i.context=i.context.prev:/^</.test(l)&&(p.depth=1):!f&&(x=l.indexOf("{"))>-1&&n.backUp(l.length-x);return f}(n,i,i.context):function(n,r,i){if("<"==n.peek()&&o.expressionAllowed(n,i.state))return o.skipExpression(i.state),r.context=new e(t.startState(a,o.indent(i.state,"","")),a,0,r.context),null;var s=o.token(n,i.state);if(!s&&null!=i.depth){var c=n.current();"{"==c?i.depth++:"}"==c&&0==--i.depth&&(r.context=r.context.prev)}return s}(n,i,i.context)}return{startState:function(){return{context:new e(t.startState(o),o)}},copyState:function(t){return{context:n(t.context)}},token:c,indent:function(t,e,n){return t.context.mode.indent(t.context.state,e,n)},innerMode:function(t){return t.context}}}),"xml","javascript"),t.defineMIME("text/jsx","jsx"),t.defineMIME("text/typescript-jsx",{name:"jsx",base:{name:"javascript",typescript:!0}})}));