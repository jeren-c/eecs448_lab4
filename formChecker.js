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
    let password = document.getElementById("pw").value;
    let shipping = document.forms["form"].elements["shipping"].value;

    if (choco.length == 0 && vanilla.length == 0 && mint.length == 0  && peanut.length == 0 )
    {
        alert("You must purchase at least one cake!");
        return false;
    }
    if(shipping.length == 0  || user.length == 0 || password.length== 0)
    {
        alert("Error, the username and password and shipping option must be entered");
        return false;
    }
    if(!user.includes(".com") || !user.includes("@"))
    {
        alert("Error, your username is not in the form of email@domain.com");
        return false;
    }
    if(choco < 0 || vanilla <0 || mint < 0 || peanut < 0)
    {
      alert("You can't order a negative number");
      return false;
    }
    return true;
}
