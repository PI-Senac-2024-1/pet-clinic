function phoneMask(value){
    if (!value) return ""
    value = value.replace(/\D/g,'')
    value = value.replace(/(\d{2})(\d)/,"($1) $2")
    value = value.replace(/(\d)(\d{4})$/,"$1-$2")
    return value
}

function documentMask(value) {
    let x = value.replace(/\D/g, '').match(/(\d{0,2})(\d{0,3})(\d{0,3})(\d{0,4})(\d{0,2})/);
    value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' : '') + x[3] + (x[4] ? '/' : x[4]) + x[4] + (x[5] ? '-' + x[5] : '');

    if(value.length < 15) {
        x = value.replace(/\D/g, '').match(/(\d{0,3})(\d{0,3})(\d{0,3})(\d{0,2})/);
        value = !x[2] ? x[1] : x[1] + '.' + x[2] + (x[3] ? '.' : '') + x[3] + (x[4] ? '-' + x[4] : '');
    }

    return value
}

let inputsPhone = document.getElementsByClassName('phone')
let inputsDocument = document.getElementsByClassName('document')

for (const item of inputsPhone) {
    item.addEventListener('input', function(event) {
        let input = event.target.value
        event.target.value = phoneMask(input)
    })
}
for (const item of inputsDocument) {
    item.addEventListener('input', function(event) {
        let input = event.target.value
        event.target.value = documentMask(input)
    })
}
