const name = document.getElementById('name');
const age = document.getElementById('age');
const option = document.getElementById('city');
const form = document.getElementById('form-data');
const msg_name = document.getElementById('msg-name');
const msg_age = document.getElementById('msg-age');
const msg_city = document.getElementById('msg-city');

// event
form.addEventListener('submit',(e)=>{
    if (name.value === '' || name.value === null){
        msg_name.innerText = '* Name is required'
        window.alert('* Name is required')
    }
    if (age.value === '' || age.value === null){
        msg_age.innerText = '* Age is required'

    }
    if (option.value.selected === 'Select Current location'){
        msg_city.innerText = '* City is required'
        e.preventDefault();
    }
})