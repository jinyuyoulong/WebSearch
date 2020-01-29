$(function () {
    'use strict';

    var rule = new Input('#input-control')


    var volid = new Validator('abcxx', {
        max: 100,
        min: 3,
        maxlength: 5,
        pattern: '^[a-zA-Z0-9]*$'
    })
    // var result = volid.validate_max()
    // var result = volid.validate_min()
    // var result = volid.validate_maxlength()
    // var result = volid.validate_numeric()
    // var result = volid.validate_required()
    var result = volid.validate_pattern()
    console.log('result:',result)
})
// 最重要的方法放在最前面
// 验证


// 1. get input[data-rule]
// 2. 解析规则
// 3. 验证