var FirstName=document.querySelector('.firstname')
var LastName=document.querySelector('.lastname')
var Username=document.querySelector('.Username')
var Email=document.querySelector('.Email')
var Pass=document.querySelector('.Password')



FirstName.addEventListener('input', changeBackground);
LastName.addEventListener('input', changeBackground);
Username.addEventListener('input', changeBackground);
Email.addEventListener('input', changeBackground);
Pass.addEventListener('input', changeBackground);

function changeBackground(){
    if (FirstName.value.lenght == 0 && LastName.value.lenght == 0 && Username.value.lenght == 0 && Email.value.lenght == 0 && Pass.value.lenght == 0 )
    {
            document.querySelector('.Register').style.background = 'black';
    }
    else{
        document.querySelector('.Register').style.background = 'green';
    }
}