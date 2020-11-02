<?php require_once "store.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Voyage d'étude</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/code.js"></script>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
</head>
<body>

    <div id="divTitle">
        <img src="img/LogoCPNV.png" alt="Logo du CPNV" height="100">
        <h1 id="h1Title">Voyage - SI-CMI2a</h1>
    </div>
    <div id="divMenu" class="flexbox">
            <input type="button" id="cmdPersonnes" value="Personnes" class="items">
            <input type="button" id="cmdTransport" value="Transports" class="items">
            <input type="button" id="cmdLogement" value="Logement" class="items">
            <input type="button" id="cmdActivite" value="Activité" class="items">
    </div>

    <div id="divForm">
        <form method="post">
            <div id="divPersonnes" class="hidden">

                Les gens:<br>
                Adresse:<input type="text" id="txtAddress00" name="txtAddress[00]">
                Code postal:<input type="text" id="txtNPA00" name="txtNPA[00]">
                Ville:<input type="text" name="txtCity[00]" id="txtCity00">
                Prénom: <input type="text" name="txtFirstName[00]" id="txtFirstName00">
                Nom:<input type="text" name="txtLastName[00]" id="txtLastName00">
                Numéro de portable:<input type="text" name="txtPhone[00]" id="txtPhone00">
                Prof ou élève:<input type="text" name="txtprof[00]" id="txtprof00"><br>

            </div>

            <div id="divTransports" class="hidden">

                Les transports:<br>
                Rendez-vous:<input type="text" name="txtMeeting[00]" id="txtMeeting00">
                Départ:<input type="text" name="txtStart[00]" id="txtStart00">
                Arrivée:<input type="text" name="txtEnd[00]" id="txtEnd00">
                Numéro de vol:<input type="text" name="txtFlight[00]" id="txtFlight00">
                Numéro de train:<input type="text" name="txtTrain[00]" id="txtTrain00">
                Numéro de bus:<input type="text" name="txtBus[00]" id="txtBus00">
                Prix:<input type="text" name="txtPrice[00]" id="txtPrice00"><br>

            </div>

            <div id="divLogement" class="hidden">

                Le logement:<br>
                Hotel: <input type="text" name="txtHotelData[00]" id="txtHotelData00"><br>
                Adresse: <input type="text" name="txtHotelData[01]" id="txtHotelData01"><br>
                NPA: <input type="text" name="txtHotelData[02]" id="txtHotelData02"><br>
                City: <input type="text" name="txtHotelData[03]" id="txtHotelData03"><br>
                Téléphone: <input type="text" name="txtHotelData[04]" id="txtHotelData04"><br>
                Email: <input type="text" name="txtHotelData[05]" id="txtHotelData05"><br>
                <!-- Chambre:<input type="text" name="txtRoom[00]" id="txtRoom00">Etage:<input type="text" name="txtFloor[00]" id="txtFloor00">Max personnes:<input type="text" name="txtCapacity[00]" id="txtCapacity00">Occupant1:<input type="text" name="txtOcc1[00]" id="txtOcc100">Occupant2:<input type="text" name="txtOcc2[00]" id="txtOcc200">Occupant3:<input type="text" name="txtOcc3[00]" id="txtOcc300">Occupant4:<input type="text" name="txtOcc4[00]" id="txtOcc400"><br> -->
                <img src="img/hotel-none.png" id="imgHotel">

            </div>

            <div id="divActivites" class="hidden">

                Les activités sur place<br>
                Titre:<input type="text" name="txtTitle[00]" id="txtTitle00">
                Description:<textarea name="txtDesc[00]" id="txtDesc00"></textarea>
                Date:<input type="text" name="txtActDate[00]" id="txtActDate00">
                Heure:<input type="text" name="txtActTime[00]" id="txtActTime00">
                Prix:<input type="text" name="txtActPrice[00]" id="txtActPrice00">
                Transport:<input type="text" name="txtActTrsp[00]" id="txtActTrsp00">
                Rendez-vous:<input type="text" name="txtRDV[00]" id="txtRDV00">
                Image:<input type="text" name="txtActImg[00]" id="txtActImg00">
                <img id="imgActImg00" class="actimg" /><br>

            </div>

            <div id="divValidation" class="hidden">
                <input type="submit" value="Ok" name="cmdSave"><input type="checkbox" name="showdata">
            </div>
        </form>
    </div>
</body>
</html>