// attribute 显性的属性，性质
// property 隐性的属性，所有物

// 查看 浏览器预制的属性
console.dir(document.getElementById('a'))

var r =  $('#a')
            // .attr('attrm')
    // .prop('text')
    // .prop('text','范子')
    .removeAttr('attrm')
console.log(r)