// 常用属性
// .elements 所有的输入类元素：[input, input]
// .length 所有输入类元素的数量：2
// .method method属性，使用哪种方法提交表单："post"
// .action action属性，指定表单的提交地址："https://biaoyansu.com/yo"
// .autocomplete autocomplete属性，是否允许浏览器自动补全："on"
// .noValidate 是否不做表单验证：false

// 常用方法
// submit() 提交表单
// reset() 重置表单



var el = document.querySelector('input')
var el1 = document.querySelector('#checkbox')
var el2 = document.querySelector('#text')
var info = document.querySelector('#info')
info.innerHTML =
    '<div><samp><strong>name</strong>:' + el.name + '</samp></div>' +
    '<div><samp><strong>type</strong>:' + el.type + '</samp></div>' +
    '<div><samp><strong>disabled</strong>:' + el.disabled + '</samp></div>' +
    '<div><samp><strong>required</strong>:' + el.required + '</samp></div>' +
    '<div><samp><strong>autofocus</strong>:' + el.autofocus + '</samp></div>' +
    '<div><samp><strong>value</strong>:' + el.value + '</samp></div>'+
    '<div><samp><strong>checked</strong>:' + el1.checked + '</samp></div>'+
    '<div><samp><strong>defaultChecked</strong>:' + el.defaultChecked + '</samp></div>'+
    '<div><samp><strong>autocomplete</strong>:' + el2.autocomplete + '</samp></div>'+
    '<div><samp><strong>placeholder</strong>:' + el2.placeholder + '</samp></div>'+
    '<div><samp><strong>readOnly</strong>:' + el2.readOnly + '</samp></div>'