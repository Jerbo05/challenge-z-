var adjective = ["Joris", "Luc", "Jeremy", "Merlijn", "Youri", "Robin", "Dennis", "Nando","Yorrick", "Paris", "Yentl", "Ryan", "Sven", "Daan", "Ties", "Niek", "Teun", "Bas", "Rens", "Stijn", "Gijs", "Willem", "Matthijs", "Hendrik"] 


function generator() {
 document.getElementById("name").innerHTML = adjective[Math.floor(Math.random() * adjective.length)] ;
}