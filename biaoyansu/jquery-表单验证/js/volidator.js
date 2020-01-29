$(function () {
    'use strict';

    window.Validator = function (val, rule) {
    //     this.isValid = function () {
    //         if (!this.validate_max) {
    //             return false
    //         }
    //     }
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
            return val.length <= rule.maxlength
        }
        this.validate_minlength = function () {
            pre_length()
            return val.length >= rule.maxlength
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