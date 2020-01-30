// function yo(callback) {
//     console.log("yo")
//     if (callback) {
//         callback()
//     }
// }

// yo(function () {
//     console.log("回家啦")
// })

var a = [2,4,6,8]
function each(arr,callback) {
    for (let i = 0; i < arr.length; i++) {
        const item = arr[i];
        if (callback) {
            callback(item)
        }
    }
}

each(a,function (item) {
    if (item > 5) {
        console.log(item)
    }
})

function equal2(item) {
    if (item == 2) {
        console.log(item)
    }
}
each(a,equal2)