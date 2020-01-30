// 通过父父 找到 子
$('.grandpa').find('.child').css('background','#999')

// 通过子向上找到父
$('#child1').parent().css('border','2px solid #666')

// 通过 子 向上寻找 所有 父级
$('#child1').parents('.grandpa').css('border','2px solid #333')

// 同类指定过滤寻找 某一特性的元素
$('.child').filter('.not-gey').css('background', 'yellow')