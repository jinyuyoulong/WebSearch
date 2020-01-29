$(function () {
    'use strict';

    window.Validator = function (val, rule) {
        this.is_valid = function (new_val) {
            var key
            if (new_val != undefined) {
                val = new_val
            }
            
            // 如果不是必填项，且用户未填写任何内容不用校验合法，直接判定为合法
            if (!rule.required && !val) {
                return true
            }
            for (const key in rule) {
                if (key === 'required') {// 遇到required 跳过不校验
                    continue
                }
                // 调用rule中相对应的方法
                // this['validate_'+key]等于 this.validate_key
                // 后面加() 表示执行
                var r = this['validate_' + key]()
                if (!r) {
                    return false
                }
            }
            return true
        }
    //     return true
        this.validate_max = function() {
            pre_max_min()
            return val <= rule.max
        }
        this.validate_min = function () {
            pre_max_min()
            return val >= rule.max
        }
        this.validate_maxlength = function () {
            pre_length()
            console.log('maxlength:' + val.length, rule.maxlength)
            return val.length <= rule.maxlength
        }
        this.validate_minlength = function () {
            pre_length()
            console.log('minlength:' + val.length, rule.minlength)
            return val.length >= rule.minlength
        }
        this.validate_numeric = function () {
            return $.isNumeric(val)
        }
        this.validate_required = function () {
            var real = $.trim   (val)
            if (!real && real !== 0) {
                return false
            }
            return true
        }
        this.validate_pattern = function () {
            var reg = new RegExp(rule.pattern)
            return reg.test(val)
        }

        function pre_max_min() {
            val = parseFloat(val)
        }

        function pre_length() {
            val = val.toString()
        }
    }
})