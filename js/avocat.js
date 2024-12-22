document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('reservations_btn').addEventListener('click', () =>{
        document.getElementById('reservations').classList.remove('hidden');
        document.getElementById('profile').classList.add('hidden');
        document.getElementById('availability').classList.add('hidden');
        document.getElementById('statistics').classList.add('hidden');    
    });
    
    document.getElementById('profile_btn').addEventListener('click', () =>{
        document.getElementById('reservations').classList.add('hidden');
        document.getElementById('profile').classList.remove('hidden');
        document.getElementById('availability').classList.add('hidden');
        document.getElementById('statistics').classList.add('hidden');    
    });

    document.getElementById('availability_btn').addEventListener('click', () =>{
        document.getElementById('reservations').classList.add('hidden');
        document.getElementById('profile').classList.add('hidden');
        document.getElementById('availability').classList.remove('hidden');
        document.getElementById('statistics').classList.add('hidden');    
    });

    document.getElementById('statistics_btn').addEventListener('click', () =>{
        document.getElementById('reservations').classList.add('hidden');
        document.getElementById('profile').classList.add('hidden');
        document.getElementById('availability').classList.add('hidden');    
        document.getElementById('statistics').classList.remove('hidden');    
    });
});