// 常用属性
// .name name属性："username"
// .type type属性："text"
// .disabled disabled属性，当前元素是否已禁用
// .required required属性，是否为必填项
// .autofocus autofocus属性，是否自动聚焦
// .value 输入的值

// checkbox和radio独有的属性
// checked 是否打勾
// defaultChecked 是否默认打勾

// 文字输入类及number独有的属性
// autocomplete 是否自动补全
// placeholder 占位字符："wanghuahua"
// readOnly 是否只读
// 常用方法
// focus() 聚焦当前元素
// blur() 取消聚焦当前元素
// select() 全选当前元素中输入的值
// click() 模拟点击

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