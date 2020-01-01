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



var el = document.querySelector('form')
console.log("elements:"+el.elements)
console.log("length:" +el.length)
console.log("method:" +el.method)
console.log("action:" +el.action)
console.log("autocomplete 是否允许浏览器自动补全:" + el.autocomplete)
console.log("noValidate 是否不做表单验证:" + el.noValidate)

function formReset() {
    el.reset()
    console.log('execute reset form')
}