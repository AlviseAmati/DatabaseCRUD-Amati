function Cerca() {
    var stringa = document.getElementById('mySearch').value.toUpperCase();
    var table=document.getElementById('tabella');
    var celle=table.getElementsByTagName('td');
    for(var i=0;i<celle.length;i++){
        celle[i].style.backgroundColor="white";
    }

    if(stringa!="")
    {
    for(var i=0;i<celle.length;i++)
    {
        if(celle[i].innerHTML.toUpperCase().search(stringa)!=-1 && celle[i].innerHTML.search("<")==-1)
        {
            celle[i].style.backgroundColor = "lightblue";
        }
    }
}
}
