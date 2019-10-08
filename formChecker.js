function reset()
{
    document.getElementById("choco").value = null;
    document.getElementById("vanilla").value = null;
    document.getElementById("mint").value = null;
    document.getElementById("peanut").value = null;    
    document.getElementById("pw").value = null;
    document.getElementById("user").value = null;
    document.getElementById("shipping").value = null;
}

function validate()
{
    let choco = document.getElementById("choco").value;
    let vanilla = document.getElementById("vanilla").value;
    let mint = document.getElementById("mint").value ;
    let peanut = document.getElementById("peanut").value;   
    let user = document.getElementById("user").value;   
    let email = document.getElementById("email").value;   
    let shipping = document.getElementById("shipping").value;   

    if (choco == null && vanilla == null && mint == null && peanut == null )
    {
        alert("You must purchase at least one cake!");
        return false;
    }
    if(shipping == null || user == null || email == null)
    {
        alert("Error, the username and password and shipping option must be entered");
        return false;
    }
    if(!user.includes(".com") || !user.includes("@"))
    {
        alert("Error, your username is not in the form of email@domain.com");
        preventDefault();
    }

    return true;
}