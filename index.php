<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="/js/jquery_3_5_1.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>

<body id="body">
<div style="width:70vw; margin:auto; margin-top:10vh;">
<h1>Ενημέρωση</h1>
<p>
Η επιστημονική έρευνα θα αποτελέσει μέρος της διδακτορικής διατριβής της υποψήφιας διδάκτωρ, Καλαϊτζίδου Σταματίας (email: mat.kal@hotmail.com), με την επίβλεψη του Επιστημονικά Υπεύθυνου Αναπληρωτή Καθηγητή κ. Κώστα Χάρδα του Τμήματος Μουσικών Σπουδών ΑΠΘ.
<p>Η συμμετοχή σας στην έρευνα είναι εθελοντική και η διαδικασία της μελέτης είναι καθʼ όλη τη διάρκεια της ανώνυμη με την συμμετοχή σας  να καταγράφεται με αριθμητικό κωδικό και χωρίς να συμπληρωθεί πουθενά οποιοδήποτε προσωπικό στοιχείο σας. Μετά την ολοκλήρωση του πειράματος τα δεδομένα θα αποθηκευτούν επίσης σε καθεστώς ανωνυμίας χωρίς να υπάρχει ποτέ η δυνατότητα να ταυτοποιηθείτε με οποιοδήποτε τρόπο. Μπορείτε να αποχωρήσετε από την έρευνα όποια στιγμή θέλετε και τα δεδομένα σας δεν θα αποθηκευτούν. </p>
<p>Οι πληροφορίες που θα συγκεντρωθούν θα είναι ανώνυμες, εμπιστευτικές και θα διατεθούν ελεύθερα προς επανάχρηση, παρέχοντας και τη δυνατότητα για επικύρωση των αποτελεσμάτων από την επιστημονική κοινότητα. </p>
<p>Αν και δεν διατηρούμε προσωπικά δεδομένα σας, σε κάθε περίπτωση όμως αν έχετε ερωτήματα για τα προσωπικά δεδομένα ή τα δικαιώματα σας και πιστεύετε ότι αυτά παραβιάζονται, μπορείτε να επικοινωνήσετε με τον Υπεύθυνο Προστασίας Δεδομένων στο email: data.protection@auth.gr και θα απαντήσουμε το συντομότερο δυνατόν ή να κάνετε καταγγελία στην Αρχή Προστασίας Δεδομένων Προσωπικού Χαρακτήρα μέσα από την ιστοσελίδα www.dpa.gr. Σας προτρέπουμε να διαβάσετε περισσότερα για την πολιτική ιδιωτικότητας και προστασίας δεδομένων του ΑΠΘ στην ιστοσελίδα: https://www.auth.gr/gdpr.</p>

</p>
	


<div style="width:10vw; margin:auto; margin-top:10vh;">
<button style="margin:auto;" onclick="location.href = '/start.php';">
  Συνέχεια
</button>
	
<script>
	


function midiOrSample()
{

$.ajax({
url     : 'includes/midiorsample.php',
method    : 'POST',
data :{
},
success   : function(response)
{
	alert("data sent response is "+response)

if (response == "odd") {
window.location.replace("introm.php");
}

else if (response == "even") {
	window.location.replace("intro.php");
}
	
},
error : function(e)
{
alert("data not sent")
}
});
}
	
</script>
	
<div>
</div>

</body>

</htmal>
