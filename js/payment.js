function validate()
{
    var fullname=document.getElementById("full");
    var email=document.getElementById("em");
    var address=document.getElementById("add");
    var city=document.getElementById("cit");
    var zip=document.getElementById("zip");
    var code=document.getElementById("cd");
    var number=document.getElementById("cc");
    var month=document.getElementById("mm");
    var ccc=document.getElementById("cv");



    if(fullname.value.trim()=="" ||email.value.trim()==""|| address.value.trim()==""||city.value.trim()==""||zip.value.trim()==""
    ||code.value.trim()==""||number.value.trim()==""||month.value.trim()==""||ccc.value.trim()=="" ) 
    {
        alert("No blank values allowed");
        return false;
    }
    else
    {
        true;

    }
}