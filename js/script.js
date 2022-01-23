titre = document.title;
var accueil = document.getElementById("AccLi");
var panier = document.getElementById("PanLi");

switch(titre){
  case 'Accueil':
    accueil.style.backgroundColor = "rgb(53, 53, 56)";
    panier.style.backgroundColor = "none";
  break;
  case 'Panier':
    accueil.style.backgroundColor = "none";
    panier.style.backgroundColor = "rgb(53, 53, 56)";
  break;
}

function toggleM(){
  var compte = document.getElementById("accountMenu");
  var panier = document.getElementById("panierMenu");
  if (compte.style.display === "none") {
    if(panier.style.display === "flex"){
      panier.style.display = "none";
    }
      compte.style.display = "block";
    } else {
      compte.style.display = "none";
    }
}

function toggleP(){
  var compte = document.getElementById("accountMenu");
  var panier = document.getElementById("panierMenu");
  if (panier.style.display === "none") {
    if(compte.style.display === "block"){
      compte.style.display = "none";
    }
      panier.style.display = "flex";
    } else {
      panier.style.display = "none";
    }
}

$(document).ready(function() {
  $('.product_selector').click(function() {
    var idProduct=this.value;

    $.ajax({
      type: "POST",
      url: "update_session.php",
      data: {'add_id': idProduct},
      success: function( data ) {
        location.reload();
      }
    });
  });

  $('.suppr_product').click(function() {
    var idProduct=this.value;

    $.ajax({
      type: "POST",
      url: "update_session.php",
      data: {'delete_id': idProduct},
      success: function( data ) {
        location.reload();
      }
    });
  });

  $('.decremente').click(function() {
    var ProductQuantity=this.value;

    $.ajax({
      type: "POST",
      url: "update_session.php",
      data: {'decremente_key': ProductQuantity},
      success: function( data ) {
        location.reload();
      }
    });
  });

  $('.incremente').click(function() {
    var ProductQuantity=this.value;

    $.ajax({
      type: "POST",
      url: "update_session.php",
      data: {'incremente_key': ProductQuantity},
      success: function( data ) {
        location.reload();
      }
    });
  });

  $('.envoi_paiement').click(function() {
    var Adress=document.getElementById("Adresse_val").value;

    $.ajax({
      type: "POST",
      url: "update_session.php",
      data: {'adress': Adress},
      success: function( data ) {
      }
    });
  });
});