<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CV Generator</title>
</head>
<body>
    <div class="container">
        <div class="error"> 
        <?php
            if (isset($_GET['error'])) {
                echo $_GET['error'];
            }
        ?>    
        </div>
        
        <h1>Formulaire pour générer votre CV</h1>

        <div class="form">
            <form action="prototype.php" method="post" enctype="multipart/form-data">
                <fieldset>
                    <legend>Information Personnel</legend>
                    <div class="input-group">
                        <label for="name">Nom<span>*</span></label><br>
                        <input type="text" name="name" id="name" required>
                    </div>
                    <div class="input-group">
                        <label for="firstname">Prénom<span>*</span></label><br>
                        <input type="text" name="firstname" id="firstname" required>
                    </div>
                    <div class="input-group">
                        <label for="age">Age<span>*</span></label><br>
                        <input type="number" name="age" id="age" required>
                    </div>
                    <div class="input-group">
                        <label for="tel">Téléphone<span>*</span></label><br>
                        <input type="tel" name="tel" id="tel" required>
                    </div>
                    <div class="input-group">
                        <label for="email">Email<span>*</span></label><br>
                        <input type="email" name="email" id="email" required>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Description</legend>
                    <div class="input-group">
                        <label for="profildesc">Description de votre profile<span>*</span></label><br>
                        <textarea name="profildesc" id="profildesc" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="input-group">
                        <label for="objdesc">Description de votre objectif</label><br>
                        <textarea name="objdesc" id="objdesc" cols="" rows="10"></textarea>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Compétences</legend>
                    <div class="input-group">
                        <label for="comp1">Titre de la Compétence n°1 <span>*</span></label><br>
                        <input type="text" name="comp1" id="comp1" required>
                        <label for="comp1desc">Description de la compétence n°1 <span>*</span></label>
                        <textarea name="comp1desc" id="" cols="30" rows="10" required></textarea>
                    </div>
                    <div class="input-group">
                        <label for="comp2">Titre de la Compétence n°2</label><br>
                        <input type="text" name="comp2" id="comp2">
                        <label for="comp2desc">Description de la compétence n°2</label>
                        <textarea name="comp2desc" id="" cols="30" rows="10"></textarea>
                    </div>
                    <div class="input-group">
                        <label for="comp3">Titre de la compétence n°3</label><br>
                        <input type="text" name="comp3" id="comp3">
                        <label for="comp3desc">Description de la compétence n°3</label><br>
                        <textarea name="comp3desc" id="" cols="30" rows="10"></textarea>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Connaissannces</legend>
                    <div class="input-group">
                        <label for="conn1">Connaissance n°1<span>*</span></label><br>
                        <input type="text" name="conn1" id="conn1" required>
                    </div>
                    <div class="input-group">
                        <label for="conn2">Connaissance n°2</label><br>
                        <input type="text" name="conn2" id="conn2">
                    </div>
                    <div class="input-group">
                        <label for="conn3">Connaissance n°3</label><br>
                        <input type="text" name="conn3" id="conn3">
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Expériences</legend>
                    <fieldset>
                        <legend>Expérience n°1</legend>
                        <div class="input-group">
                            <label for="society_name1">Nom de la société <span>*</span></label><br>
                            <input type="text" name="society_name1" id="society_name1" required>
                        </div>
                        <div class="input-group">
                            <label for="poste1">Poste occupé <span>*</span></label>
                            <input type="text" name="poste1" id="poste1" required>
                        </div>
                        <div class="input-group">
                            <label for="start_year1">Année de début <span>*</span></label>
                            <input type="number" min="1960" max="2021" name="start_year1" required>
                        </div>
                        <div class="input-group">
                            <label for="finish_year1">Année de fin <span>*</span></label>
                            <input type="number" min="1961" max="2021" name="finish_year1" required>
                        </div>
                        <div class="input-group">
                            <label for="expdesc1">Description de l'Expérience <span>*</span></label>
                            <textarea name="expdesc1" id="expdesc1" cols="30" rows="10" required></textarea>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Expérience n°2</legend>
                        <div class="input-group">
                            <label for="society_name2">Nom de la société</label><br>
                            <input type="text" name="society_name2" id="society_name2">
                        </div>
                        <div class="input-group">
                            <label for="poste2">Poste occupé</span></label>
                            <input type="text" name="poste2" id="poste2">
                        </div>
                        <div class="input-group">
                            <label for="start_year2">Année de début</label>
                            <input type="number" min="1960" max="2021" name="start_year2">
                        </div>
                        <div class="input-group">
                            <label for="finish_year2">Année de fin</label>
                            <input type="number" min="1961" max="2021" name="finish_year2">
                        </div>
                        <div class="input-group">
                            <label for="expdesc2">Description de l'Expérience</label>
                            <textarea name="expdesc2" id="expdesc2" cols="30" rows="10"></textarea>
                        </div>
                    </fieldset>
                </fieldset>
                </fieldset>
                <fieldset>
                    <legend>Formations</legend>
                    <fieldset>
                        <legend>Formation n°1</legend>
                        <div class="input-group">
                            <label for="formtitle1">Titre de la formation <span>*</span></label><br>
                            <input type="text" name="formtitle1" id="formtitle1" required>
                        </div>
                        <div class="input-group">
                            <label for="formdesc1">Description de la formation <span>*</span></label>
                            <textarea name="formdesc1" id="expdesc1" cols="30" rows="10" required></textarea>
                        </div>
                    </fieldset>
                    <fieldset>
                        <legend>Formation n°2</legend>
                        <div class="input-group">
                            <label for="formtitle2">Titre de la formation</label><br>
                            <input type="text" name="formtitle2" id="formtitle2">
                        </div>
                        <div class="input-group">
                            <label for="formdesc2">Description de la formation</label>
                            <textarea name="formdesc2" id="formdesc2" cols="30" rows="10"></textarea>
                        </div>
                    </fieldset>
                </fieldset>
                <fieldset>
                    <legend>Loisirs</legend>
                    <div class="input-group">
                        <label for="loi1">Loisir 1 <span>*</span></span></label>
                        <input type="text" name="loi1" id="loi1" required>
                    </div>
                    <div class="input-group">
                        <label for="loi2">Loisir 2 <span>*</span></span></label>
                        <input type="text" name="loi2" id="loi2">
                    </div>
                    <div class="input-group">
                        <label for="loi3">Loisir 3 </label>
                        <input type="text" name="loi3" id="loi3">
                    </div>
                </fieldset>

                <input type="submit" name="btn" id="btn" value="Générer le CV"> 
            </form>
        </div>
    </div>
</body>
</html>