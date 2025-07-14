
<?php
$objet=verify_date();
$categorie = afficher_categorie();
// var_dump($categorie);
?>

<select name="categorie" id="">
<?php foreach($categorie as $c) { ?>
    <option value="<?= $c['id_categorie'] ?>"> <?= $c['nom_categorie'] ?></option>
<?php } ?>
</select>
<?php
foreach($objet as $o) { ?>
<p><?= $o['nom_objet'] ?></p>
<p><?= $o['nom_categorie'] ?></p>
<p><?= $o['nom_membre'] ?></p>
<?php if($o['date_retour']==null){ ?>
<p>Dispo</p>
<?php }else{ ?>
    <p>A rendre le <?= $o['date_retour'] ?></p>
<?php } ?>
<?php } ?>