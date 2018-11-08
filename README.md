# Cours php2


## GESTION DES FICHIERS


### `fopen("fichier.txt" , r)`

La fonction fopen ouvre un fichier stocké avec différents modes :
* **'r'** 	Ouvre en lecture seule, et place le pointeur de fichier au début du fichier.
* **'r+'** 	Ouvre en lecture et écriture, et place le pointeur de fichier au début du fichier.
* **'w'** 	Ouvre en écriture seule ; place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. Si le fichier n'existe pas, on tente de le créer.
* **'w+'** 	Ouvre en lecture et écriture ; place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. Si le fichier n'existe pas, on tente de le créer.
* **'a'** 	Ouvre en écriture seule ; place le pointeur de fichier à la fin du fichier. Si le fichier n'existe pas, on tente de le créer. Dans ce mode, la fonction fseek() n'a aucun effet, les écritures surviennent toujours.
* **'a+'** 	Ouvre en lecture et écriture ; place le pointeur de fichier à la fin du fichier. Si le fichier n'existe pas, on tente de le créer. Dans ce mode, la fonction fseek() n'affecte que la position de lecture, les écritures surviennent toujours.
* **'x'** 	Crée et ouvre le fichier en écriture seulement ; place le pointeur de fichier au début du fichier. Si le fichier existe déjà, fopen() va échouer, en retournant FALSE et en générant une erreur de niveau E_WARNING. Si le fichier n'existe pas, fopen() tente de le créer. Ce mode est l'équivalent des options O_EXCL|O_CREAT pour l'appel système open(2) sous-jacent.
* **'x+'** 	Crée et ouvre le fichier pour lecture et écriture; le comportement est le même que pour 'x'.
* **'c'** 	Ouvre le fichier pour écriture seulement. Si le fichier n'existe pas, il sera crée, s'il existe, il n'est pas tronqué (contrairement à 'w') et l'appel à la fonction n'échoue pas (comme dans le cas de 'x'). Le pointeur du fichier est positionné au début. Ce mode peut être utile pour obtenir un verrou (voyez flock()) avant de tenter de modifier le fichier, utiliser 'w' pourrait tronquer le fichier avant d'obtenir le verrou (vous pouvez toujours tronquer grâce à ftruncate()).
* **'c+'** 	Ouvre le fichier pour lecture et écriture, le comportement est le même que pour le mode 'c'.
* **'e'** 	Défini l'indicateur close-on-exec sur le descripteur de fichier ouvert. Disponible uniquement en PHP compilé sur les systèmes conforme POSIX.1-2008.

### `fgetc($ressource, 50)`, `fgets($ressource, 50)` , `fread($ressource, 50)`

Ces fonctions permettent de lire les caractères des ressources qui viennent d'un fopen
**`fread($ressource , 50)`** lira les 50 premières caractères même s'il y en à que 30 , le reste sera des espaces.
**`fgets($ressource, 50)`** lira jusqu'a 50 caractères et toute la ligne si l'on ne donne pas le paramètre.
**`fgetc($ressource , 3)`** lira un nombre précis de carctères.

### `fseek($ressource , 0)`, `rewind($ressource)`

ces fonction servent à contrôler le placement du curseur dans la ressource


### `explode($ressource)` et `implode($tableau)`

La fonction **explore** incrit dans un tableau une une chaine de caractères avec un séparateur ( à donner en paramètres).

La fonction **implode** fait l'inverse de **explode** ( ex: les fichiers .csv peuvent être crées avec  la fonction implode)

### Gérer les dossiers

#### Ouvrir un dossier :
Pour ouvrir un dossier on utilise la fonction **`opendir(/mnt);`**

#### Lire les fichiers d'un dossier
Pour lire les fichier d'un dossier on utilise  la fonction **`readdir($dossier)`**
cette fonction renvois les nom des fichiers

#### Changer de répertoire
Pour changer la position du répèrtoire courrant on utilise la fonction **`chdir($dossier)`**

---

## PROGRAMATION ORIENTEE OBJET




### Conventions

**Par convention :** 
* Les noms de classer commencent par une majuscule et sont écrit en CamelCase
* La classe est enregistrée dans un fichier du même nom

### Les portées

les différentes portées de classe :
 * **`public`** : Accessible partout de l'exterieur
 * **`private`** : Accessible seulement à l'intérieur de la classe ou de l'objet courrant
 * **`protected`** : Comme private mais aussi accessible dans une classe/objet hérité

 ### Le constructeur

Le constructeur s'écrit `public function __construct(){..}` et permet, lors de l'instanciation d'initialiser certaines valeurs dans l'objet.
 
 il ya une fonction qui permet de détruire un objet : `unset($objet)` et lance la fonction magique `__destruct()`, dans l'objet en question.
 

 ### Le polymorphisme en PHP

 Défini le fait pouvoir instancier un objet avec 1,2 ou 3 paramètre dans le `__construct()`.
 Cela est possible avec l'assignation de valeurs de paramètres par default.
 ex : `__construct($nom , $age = 0)` => si on ne donne pas `$age` il faudra 0 ;

 ### La methode `__toString()`

 Cette methode doit être implémentée, et DOIT `return` une chaine de caractère et se lance comme `__construct()` pendant l'instanciation.

 ### $this , le tableau associatif

 Dans un objet, la variable `$this` est un tableau associatif avec pour clé le nom de la propriété et pour valeur sa valeur.

 ### `__set` et `__get`

Ces methodes sont des sortes de getter et setter automatiques et permettent de d'avoir acces à des propriétés privates
ex : 
```php
private $nom ; 
public function __set($name , $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }
```
    
Je peux maintenant donc utiliser ces **__get** et **__set**
```php
    $nico->nom = "Nicolas";
     echo $nico->nom; 
```

### L'héritages des classes

C'est avec le mot clé **extends** que l'on spécifie l'héritage.
`Class Enfant extends Parent{...}`

```php 
<?phps

Salarie.php
require_once("Personne.php");
class Salarie extends Personne
{
private $salaire;
public function __construct($nom, $age, $salaire)
{
$this->nom = $nom;
$this->age = $age;
$this->salaire = $salaire;
}
public function __set($var, $valeur) { $this->$var = $valeur; }
public function __get($var) { return $this->$var; }
}
?> 
```

Aussi , `parent::__contruct()` implante le constructeur du parent chez l'enfant même si ces attributs sont private.

on peut utiliser toutes les méthodes parents avec `parent::maMethode()`.

### Les constantes dans les classes

s'écrit : `const PII = 3.14;// dans la classe constante`
et on y accède de l'exterieur **sans avoir à instancier l'objet** de cette façon :
`constante::PII;`

### Les attributs de classes

S'écrit, `public static $maVariableStatique`.
y accède de l'exterieur **sans avoir à instancier l'objet** de cette façon : 
`constante::$maVariableStatique`.

#### Constante de classe

S'écrit `const NOM = "Mon nom" ;`
y accède de l'exterieur **sans avoir à instancier l'objet** de cette façon : 
`constante::PII;`

#### Attribut statique

S'écrit `public static ATT = "Mon nom" ;`
y accède de l'exterieur **sans avoir à instancier l'objet** de cette façon : 
`constante::$ATT;`

bn : Il est possible par exemple d'incrémenter un atribut statique avec le constructeur à chaques fois qu'un objet est instancié.

#### Methode statique

S'écrit `public static function GETATT() { return self::ATT;}`
y accède de l'exterieur **sans avoir à instancier l'objet** de cette façon : 
`constante::GETATT();`

### Les classes dérivées


### Les classes abstraites

C'est une classe mère **qui ne peut être instanciée, juste héritée ** .
On utilise pour la définir le mor clef **abstract**

```php

abstract class Compte
{
    public $nom;
    public $prenom;
    public $solde;

    //on déclare notre constructeur parent
    public function __construct($nom , $prenom , $solde)
    {
        $this->nom  = $nom ;
        $this->prenom = $prenom ;
        $this->solde = $solde ;
    }
    
    //on oblige la classe enfant à définir la fonction
    abstract public function credit($montant);   
    abstract public function debit($montant);


}

class Courant extends Compte
{

    public $emploi;

    //onhérite du constructeur parent en y ajoutant un paramètre is $emploi
    public function __construct($nom , $prenom , $solde , $emploi)
    {   
        $this->emploi = $emploi ;
        parent::__construct($nom , $prenom , $solde);
        
    }

    public function credit($montant)
    {
        return parent::$solde += ($montant * 1);
    }

    public function debit($montant)
    {
        return parent::$solde -= ($montant);
    }
}

```

### Les classes final

**Les classes final ne peuvent pas êtres héritées**


## MODEL VUE CONTROLER MVC

