# Cours php2


## GESTION DES FICHIERS


### `fopen("fichier.txt" , r)`

La fonction fopen ouvre un fichier stocké avec différents modes :
* 'r' 	Ouvre en lecture seule, et place le pointeur de fichier au début du fichier.
* 'r+' 	Ouvre en lecture et écriture, et place le pointeur de fichier au début du fichier.
* 'w' 	Ouvre en écriture seule ; place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. Si le fichier n'existe pas, on tente de le créer.
* 'w+' 	Ouvre en lecture et écriture ; place le pointeur de fichier au début du fichier et réduit la taille du fichier à 0. Si le fichier n'existe pas, on tente de le créer.
* 'a' 	Ouvre en écriture seule ; place le pointeur de fichier à la fin du fichier. Si le fichier n'existe pas, on tente de le créer. Dans ce mode, la fonction fseek() n'a aucun effet, les écritures surviennent toujours.
* 'a+' 	Ouvre en lecture et écriture ; place le pointeur de fichier à la fin du fichier. Si le fichier n'existe pas, on tente de le créer. Dans ce mode, la fonction fseek() n'affecte que la position de lecture, les écritures surviennent toujours.
* 'x' 	Crée et ouvre le fichier en écriture seulement ; place le pointeur de fichier au début du fichier. Si le fichier existe déjà, fopen() va échouer, en retournant FALSE et en générant une erreur de niveau E_WARNING. Si le fichier n'existe pas, fopen() tente de le créer. Ce mode est l'équivalent des options O_EXCL|O_CREAT pour l'appel système open(2) sous-jacent.
* 'x+' 	Crée et ouvre le fichier pour lecture et écriture; le comportement est le même que pour 'x'.
* 'c' 	Ouvre le fichier pour écriture seulement. Si le fichier n'existe pas, il sera crée, s'il existe, il n'est pas tronqué (contrairement à 'w') et l'appel à la fonction n'échoue pas (comme dans le cas de 'x'). Le pointeur du fichier est positionné au début. Ce mode peut être utile pour obtenir un verrou (voyez flock()) avant de tenter de modifier le fichier, utiliser 'w' pourrait tronquer le fichier avant d'obtenir le verrou (vous pouvez toujours tronquer grâce à ftruncate()).
* 'c+' 	Ouvre le fichier pour lecture et écriture, le comportement est le même que pour le mode 'c'.
* 'e' 	Défini l'indicateur close-on-exec sur le descripteur de fichier ouvert. Disponible uniquement en PHP compilé sur les systèmes conforme POSIX.1-2008.

### `fgetc($ressource, 50)`, `fgets($ressource, 50)` , `fread($ressource, 50)`

Ces fonctions permettent de lire les caractères des ressources qui viennent d'un fopen
*fread($ressource , 50)* lira les 50 premières caractères même s'il y en à que 30 , le reste sera des espaces.
*fgets($ressource, 50)* lira jusqu'a 50 caractères et toute la ligne si l'on ne donne pas le paramètre.
*fgetc($ressource , 3)* lira un nombre précis de carctères.

### `fseek($ressource , 0)`, `rewind($ressource)`

ces fonction servent à contrôler le placement du curseur dans la ressource


### `explode($ressource)` et `implode($tableau)`

La fonction explore incrit dans un tableau une une chaine de caractères avec un séparateur ( à donner en paramètres).

La fonction implode fait l'inverse de explode ( ex: les fichiers .csv peuvent être crées avec  la fonction implode)

### Gérer les dossiers

#### Ouvrir un dossier :
Pour ouvrir un dossier on utilise la fonction *`opendir(/mnt);`*

#### Lire les fichiers d'un dossier
Pour lire les fichier d'un dossier on utilise  la fonction *`readdir($dossier)`*
cette fonction renvois les nom des fichiers

#### Changer de répertoire
Pour changer la position du répèrtoire courrant on utilise la fonction *`chdir($dossier)`*



## PROGRAMATION ORIENTEE OBJET

### Conventions

Par convention : 
* Les noms de classer commencent par une majuscule et sont écrit en CamelCase
* La classe est enregistrée dans un fichier du même nom

### Les portées

les différentes portées de classe :
 * *`public`* : Accessible partout de l'exterieur
 * *`private`* : Accessible seulement à l'intérieur de la classe ou de l'objet courrant
 * *`protected`* : Comme private mais aussi accessible dans une classe/objet hérité