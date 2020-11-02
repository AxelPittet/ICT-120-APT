txtHotelData00.value = 'gamma'
txtHotelData02.value = '1000'
txtHotelData03.value = 'Lausanne CT'

    // Load image tags with the name in the input field
    document.querySelectorAll(".actimg").forEach(img => {
        img.src = document.getElementById('txt'+img.id.substring(3)).value
    });
    