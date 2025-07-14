
<?php
$_SESSION['id']=$_GET['id'];
$objet=verify_date();
$categorie = afficher_categorie();
// var_dump($categorie);
?>
<h4>Filtre : 
<select name="categorie" id="">
    <?php foreach($categorie as $c) { ?>
        <option value="<?= $c['id_categorie'] ?>"> <?= $c['nom_categorie'] ?></option>
    <?php } ?>
</select>
</h4>

<?php foreach($objet as $o) { ?>

    <div class="cards-container">
    <div class="card">
        <div class="card-title"><p><?= $o['nom_objet'] ?></p></div>
        <div class="card-content">
            <p>Categorie : <?= $o['nom_categorie'] ?></p>
            <p>Par <?= $o['nom_membre'] ?></p>
            <?php if($o['date_retour']==null){ ?>
            <p>Dispo</p>
            <?php }else{ ?>
                <p>A rendre le <?= $o['date_retour'] ?></p>
            <?php } ?>   
        </div>
        <div class="card-actions">
            <a href="#">Modifier</a>
        </div>
    </div>
</div>
<?php } ?>