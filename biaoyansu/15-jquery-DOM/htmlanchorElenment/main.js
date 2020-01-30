var el = document.querySelector('a')
var info = document.querySelector('#info')
info.innerHTML = 
    '<div><samp><strong>href</strong>:'+el.href+'</samp></div>'+
    '<div><samp><strong>text</strong>:'+el.text+'</samp></div>'+
    '<div><samp><strong>hash</strong>:'+el.hash+'</samp></div>'+
    '<div><samp><strong>hostname</strong>:'+el.hostname+'</samp></div>'+
    '<div><samp><strong>pathname</strong>:'+el.pathname+'</samp></div>'+
    '<div><samp><strong>protocol</strong>:'+el.protocol+'</samp></div>'+
    '<div><samp><strong>target</strong>:'+el.target+'</samp></div>'+
'<div><samp><strong>toString</strong>:' + el.toString();