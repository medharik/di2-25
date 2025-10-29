<?php 
$in=[10,2];// tableau indexe [0=>10,1=>2] format key => value  ici key c 0 , 1,...
$assoc=['libelle'=>'hp','prix'=>5000];// tableau associatif  key => value ou key : libelle,prix ....

//ajouter une case 
$in[]=-1;
$assoc['qte']=100;


//modifier une case 
$in[0]=20;// 10 est remplace par 20
$assoc['qte']=0;// 100 est remplace par 0

// supprimer une case du tableau 
// unset($in);//supprimer tout le tableau 
// unset ($assoc['libelle']);// supprime la case ayant cle = libelle

//parcourir un tableau avec foreach
print_r($assoc);
$n=[];
$k=[];
foreach ($assoc as $key => $value) {
    if (is_numeric($value)) {
      $n[]=$value; 
      $k[]=$key;
    }
}
print_r($n);
print_r($k);

?>