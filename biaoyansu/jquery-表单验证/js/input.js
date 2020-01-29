$(function () {
    'use strict';

    // input 是一个function
    // 需要知道是哪个input，输入选择器
    window.Input = function (selector) {
        var $ele
        ,rule = {};

        this.load_validator = function () {
            var val = this.get_val()
            this.validator = new Validator(val,rule)
        }

        this.get_val = function () {
            // jquery 的方法，获取value
            return $ele.val()
        }
        function init() {
            find_ele()
            parse_rule()
            this.load_validator()
        }

        function find_ele() {
            // 判断是否是jquery对象
            if (selector instanceof jQuery) {
                $ele = selector
            } else {
                $ele = $(selector)
            }
        }

        function parse_rule() {
            // jquert 中有专门获取data-xxx这种格式的变量方法
            // data-rule='pattern:"^[0-9a-z]$"|max:100|maxlength:5|requested:true'
            var rule_string = $ele.data('rule')
            if (!rule_string) {
                return
            }
            // 分割字符串
            var rule_arr = rule_string.splite('|')
            // [
            // pattern: "^[0-9a-z]$" ,
            // max: 100 ,
            // maxlength: 5 ,
            // requested: true
            // ]
            for (let i = 0; i < rule_arr.length; i++) {
                const item_str = rule_arr[i];
                var item_arr = item_str.splite(':')
                rule[item_arr[0]] = JSON.parse(rule[item_arr[1]])
            }
        }


        init()
        

    }
})