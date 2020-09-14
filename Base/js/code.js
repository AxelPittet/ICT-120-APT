document.addEventListener('DOMContentLoaded', function () {
    
    chkTitle.addEventListener('click', function () {
        if (chkTitle.checked === true) {
            h1Title.classList.remove('hidden')
        } 
        else if (chkTitle.checked === false) {
            h1Title.classList.add('hidden')
        }
    })

    chkImage.addEventListener('click', function () {
        if (chkImage.checked === true) {
            imgContresens.classList.remove('hidden')
        }
        else if (chkImage.checked === false) {
            imgContresens.classList.add('hidden')
        }
    })

    chkSimpson.addEventListener('click', function () {
        if (chkSimpson.checked === true) {
            imgSimpson.classList.remove('hidden')
        }
        else if (chkSimpson.checked === false) {
            imgSimpson.classList.add('hidden')
        }
    })
})
