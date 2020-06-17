// Particle JS Init
particlesJS.load('particles-js', 'js/particle-config/particlesjs-config.json')

// AOS Init
AOS.init({
    disable: 'phone'
})
$('#radioUmum').on('click', function () {
    $('#mahasiswa').hide()
    $('#inputSchool').removeAttr('required')
    $('#inputStudentId').removeAttr('required')
})

$('#radioMhs').on('click', function () {
    $('#inputSchool').attr('required', true)
    $('#inputStudentId').attr('required', true)
    $('#mahasiswa').show()
})
