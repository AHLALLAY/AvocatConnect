document.addEventListener('DOMContentLoaded', () => {
    
    document.getElementById('profiles_btn').addEventListener('click', () =>{
        document.getElementById('profiles').classList.remove('hidden');
        document.getElementById('reservations').classList.add('hidden');
        document.getElementById('profile').classList.add('hidden'); 
    });
    
    document.getElementById('reservations_btn').addEventListener('click', () =>{
        document.getElementById('profiles').classList.add('hidden');
        document.getElementById('reservations').classList.remove('hidden');
        document.getElementById('profile').classList.add('hidden');
    });

    document.getElementById('profile_btn').addEventListener('click', () =>{
        document.getElementById('profiles').classList.add('hidden');
        document.getElementById('reservations').classList.add('hidden');
        document.getElementById('profile').classList.remove('hidden');   
    });
});