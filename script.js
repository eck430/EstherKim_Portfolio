document.getElementById('hamburger').addEventListener('click', () => {
    document.getElementById('hamburger').classList.toggle('active');
    document.getElementById('nav_list').classList.toggle('active');
});

document.addEventListener('DOMContentLoaded', function(){
    const urlParam = new URLSearchParams(window.location.search);
    const sent = urlParam.get('sent');

    if(sent === "true"){
        alert('Thank you! Your message was sent successfully.');
    }else if(sent === "false"){
        alert('Failed to send message.');
    }
});