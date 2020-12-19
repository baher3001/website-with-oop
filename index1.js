var icons = document.querySelectorAll('i');
var inputs=document.querySelectorAll('.form-control');


icons[0].onclick = function()
{
    icons[0].style.display="none";
    icons[1].style.display="block";
    inputs[2].type="text";
}
icons[1].onclick = function()
{
    icons[1].style.display="none";
    icons[0].style.display="block";
    inputs[2].type="password";
}
for(var i=0; i<inputs.length;i++)
{
    inputs[i].onblur = function(e)
    {
        if(e.target.value<4)
        {
            e.target.nextElementSibling.style.display="block";
        }else
        {
            e.target.nextElementSibling.style.display="none";
        }
    }
}