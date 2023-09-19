function validate()
{
    var name=document.getElementById("name");
    var password=document.getElementById("email");
    var password=document.getElementById("address");
    var password=document.getElementById("pnno");
    var password=document.getElementById("pass");
    var password=document.getElementById("pass2");



    if(name.value.trim()=="" ||email.value.trim()==""|| address.value.trim()==""||pnno.value.trim()==""||pass.value.trim()==""
    ||pass2.value.trim()=="" ) 
    {
        alert("No blank values allowed");
        return false;
    }
    else
    {
        true;

    }
}