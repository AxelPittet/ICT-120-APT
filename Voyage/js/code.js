document.addEventListener('DOMContentLoaded', function() {

    document.getElementById("cmdPeople").addEventListener('click', function() {
        divPersonnes.classList.remove('hidden')
        divTransports.classList.add('hidden')
        divLogement.classList.add('hidden')
        divActivites.classList.add('hidden')
    })

    document.getElementById("cmdTransport").addEventListener('click', function() {
        divPersonnes.classList.add('hidden')
        divTransports.classList.remove('hidden')
        divLogement.classList.add('hidden')
        divActivites.classList.add('hidden')
    })

    document.getElementById("cmdLogement").addEventListener('click', function() {
        divPersonnes.classList.add('hidden')
        divTransports.classList.add('hidden')
        divLogement.classList.remove('hidden')
        divActivites.classList.add('hidden')
    })

    document.getElementById("cmdActivite").addEventListener('click', function() {
        divPersonnes.classList.add('hidden')
        divTransports.classList.add('hidden')
        divLogement.classList.add('hidden')
        divActivites.classList.remove('hidden')
    })
})