(()=>{"use strict";var e,t={259:()=>{const e=window.wp.blocks,t=window.wp.element,r=(window.wp.i18n,window.wp.blockEditor),l=window.wp.components,a=JSON.parse('{"u2":"create-block/mi-bloque"}');(0,e.registerBlockType)(a.u2,{edit:function({attributes:e,setAttributes:a}){const i=(0,r.useBlockProps)();return(0,t.createElement)("div",i,(0,t.createElement)(r.BlockControls,null,(0,t.createElement)(l.ToolbarGroup,null,(0,t.createElement)(r.MediaUpload,{onSelect:e=>{a({imageUrl:e.url,imageAlt:e.alt})},allowedTypes:["image"],value:e.imageUrl,render:({open:r})=>(0,t.createElement)(l.Button,{onClick:r,className:e.imageUrl?"edit-image":"upload-image"},e.imageUrl?"Editar imagen":"Subir imagen")}))),e.imageUrl&&(0,t.createElement)("img",{src:e.imageUrl,alt:e.imageAlt}),(0,t.createElement)(r.RichText,{tagName:"h2",value:e.title,onChange:e=>a({title:e}),placeholder:"Título"}))},save:function({attributes:e}){return(0,t.createElement)("div",r.useBlockProps.save(),e.imageUrl&&(0,t.createElement)("img",{src:e.imageUrl,alt:e.imageAlt}),(0,t.createElement)(r.RichText.Content,{tagName:"h2",value:e.title}))}})}},r={};function l(e){var a=r[e];if(void 0!==a)return a.exports;var i=r[e]={exports:{}};return t[e](i,i.exports,l),i.exports}l.m=t,e=[],l.O=(t,r,a,i)=>{if(!r){var o=1/0;for(s=0;s<e.length;s++){for(var[r,a,i]=e[s],n=!0,c=0;c<r.length;c++)(!1&i||o>=i)&&Object.keys(l.O).every((e=>l.O[e](r[c])))?r.splice(c--,1):(n=!1,i<o&&(o=i));if(n){e.splice(s--,1);var m=a();void 0!==m&&(t=m)}}return t}i=i||0;for(var s=e.length;s>0&&e[s-1][2]>i;s--)e[s]=e[s-1];e[s]=[r,a,i]},l.o=(e,t)=>Object.prototype.hasOwnProperty.call(e,t),(()=>{var e={826:0,431:0};l.O.j=t=>0===e[t];var t=(t,r)=>{var a,i,[o,n,c]=r,m=0;if(o.some((t=>0!==e[t]))){for(a in n)l.o(n,a)&&(l.m[a]=n[a]);if(c)var s=c(l)}for(t&&t(r);m<o.length;m++)i=o[m],l.o(e,i)&&e[i]&&e[i][0](),e[i]=0;return l.O(s)},r=globalThis.webpackChunkmi_bloque=globalThis.webpackChunkmi_bloque||[];r.forEach(t.bind(null,0)),r.push=t.bind(null,r.push.bind(r))})();var a=l.O(void 0,[431],(()=>l(259)));a=l.O(a)})();