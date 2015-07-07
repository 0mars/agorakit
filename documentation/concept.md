# Mobilizator
A tool for those who want to (self) mobilize

The goal of this tool is to allow citizens and activists to communicate, decide, organize and rejoice.

The mean is to remove the need for any admin or moderator in the process. The goal is to increase the resilience of groups.

Here follows the concept, in french.

##Principes de base
* Pas de �single point of failure� humain
* Pas d�administrateur unique par groupe
* Les membres sont coopt�s par le groupe
* La mod�ration est faite par le groupe
* Toute action importante est cog�r�e par le groupe
* Centr� autour du groupe et pas l�individu
* Utilise la machine pour faciliter le travail humain (notamment dans les calculs, cl�tures, auto mod�ration, etc...). Chaque groupe a sa vitesse de fonctionnement, sa taille, la machine s�adapte.
* Extr�mement simple � utiliser
* Prise de position forte des d�veloppeurs (pas de feature creep)
* Open source
* Auto h�bergeable facilement (lamp) sur un compte partag�.
* Ouvert � l�ext�rieur (api, import d�une boite mail par pop, publication automatique de certains contenus par rss, ical, passerelle vers les r�seaux sociaux)

##Inspiration
* Meetup : g�nial mais propri�taire et payant
* Phabricator : g�nial mais trop orient� d�veloppeurs et trop compliqu� � utiliser
* Loomio : tr�s bien pour les discussions et la prise de d�cision, mais manque certaines fonctionnalit�s. Difficile � h�berger (pas lamp)
* Slashdot : pour la mod�ration des commentaires
* Github : pour le wiki simple
* Les mailing listes : pour la difficult� de gestion et l�avalanche de mails :-)
* Basecamp : en faisant les premiers mockups de l�interface, je me suis rendu compte que �a ressemble hyper fort.

##Structure
* Page d�accueil
* D�crit le principe
* Liste les groupes
* Recherche de groupes, y compris par zone g�ographique, mot cl�, etc.
* Montre � l�utilisateur les groupes proches de chez lui (par code postal par ex.)
* Propose d�en rejoindre (= meetup)
* Cr�er un nouveau groupe

Groupe ou plut�t cercle (comme chez podemos).

Ensuite, pour chaque cercle, sous forme d�onglets (ou autre syst�me de menu) :


##Onglet discussions
(En gros comme Loomio, avec quelques am�liorations)
* Liste des derniers fils de discussion + nombre de r�ponses non lues pour chaque fil. Quand on clique, on arrive directement � l�endroit des non lus 
* Historique des modifications d�un fil et des r�ponses
* Possibilit� de +1 -1 (anonyme) sur chaque r�ponse ainsi que �J�appr�cie� qui est nominatif
* Quand une r�ponse est trop downvot�e (algorithme � d�finir), il est repli� (comme sur slashdot). Threshold automatique.
* Fils de discussions class�s par �th�matique�. Par d�faut propose au moins �G�n�ral� et �Contact de l�ext�rieur�. Pas de hi�rarchie juste un niveau de classification.
* Contact de l�ext�rieur : arrive l� dedans les fils cr��s par des ext�rieurs au groupe, soit par l�api, soit par l�import depuis une boite mail en pop, soit par un formulaire de contact
* Possibilit� de d�placer un fil dans un sujet
* Possibilit� de d�placer une r�ponse dans un autre fil
* Trace gard�e des modifications
* Pas de possibilit� d�effacement. On peut uniquement downvoter. Tout le monde poss�de la m�me �force� (un homme = une voix).
* L�onglet affiche le nombre de discussion non lues
* Possibilit� d�importer un xml simple reprenant les discussions d�un syst�me pr�c�dent (standard � d�finir)


##Onglet d�cisions
* Possibilit� de lancer une proposition (avec date de cloture automatique?)
* Chacun vote comme sur loomio �D�accord, abstention, contre, bloque�
* Graphique reprenant les d�cisions
* L�onglet affiche le nombre de d�cisions sur lesquelles le participant n�a pas encore vot�
* Certaines actions cr�es des d�cisions automatiquement (par exemple si on pr�voit un syst�me de newsletter, le fait d�envoyer la newsletter lance un processus de d�cision rapide pour lequel une partie des membres doivent donner leur accord afin d�envoyer une newsletter qui correspond au groupe). Dans les fait chacun peut initier une newsletter, mais il faut un accord pour l�envoyer effectivement. Cela se retrouve dans l�onglet d�cisions.
* En plus de voter, on peut ajouter un commentaire
* N�importe qui peut cl�turer et n�importe qui peut rouvrir une d�cision?

##Onglet Calendrier
Calendrier collaboratif avec �v�nements priv�s et publics. Les publics sont exportables  en ical et rss pour int�gration ailleurs.

##Onglet Membres
* Liste des membres avec leur degr� d�activit� (derni�re interaction par exemple).
* Contact perso d�un membre
* Un algorithme d�termine les membres actifs et les inactifs en fonction de la vitesse du groupe.
* Bouton import liste de mails pour inviter les gens + abonnement � une lettre automatique de mise � jour.
* Export des membres

L�onglet affiche le nombre de membres en attente de validation. Un algorithme d�termine combien de membres doivent donner leur accord pour qu�un membre soit approuv� (ou alors c�est dans la config du groupe).

Les membres peuvent �tre aussi de simples �abonn�s� qui re�oivent des infos sur groupe par mail.

##Onglet wiki ou documents
Wiki hyper simple du type de celui de github. Remarkup comme Phabricator
cfr. https://secure.phabricator.com/book/phabricator/article/remarkup/

Si wysiwyg, ce serait bien un outil qui fait du inline editing avec juste quelques options (gras italique soulign� titre 1 2 3 et liens). https://github.com/yabwe/medium-editor 

* Liste des documents, classement par date de mise � jour
* Boite de recherche dans les titres avec affichage rapide


##Onglet fichiers
S�inspirer de comment phabricator g�re �a
Possibilit� de dropper des fichiers l� + ajouter des tags avec interface de recherche hyper simple et rapide. 

Evite les doublons si on reupload le m�me fichier.

* Chaque document a un ID
* On peut r�f�rencer chaque document par son ID dans n�importe quelle boite texte en mettant D123
* Quand un fichier est dropp� dans une boite texte, il est upload� dans la partie document, et r�f�renc� dans la boite textes avec le D123
* Impossible d�effacer un document
* Syst�me de tags � ajouter aux documents



##Onglet �mon compte�
* Gestion du profil
* Abonnement mail : 1 par mois ou 1 par semaine ou 1 par jour (pas de choix plus compliqu�). L�outil se charge de fabriquer et d�envoyer un mail r�cap super nickel � partir des infos du groupe.
* Plusieurs types de comptes
* membre candidat (suite � la demande d�un utilisateur de devenir membre)
* membre actif (interagit r�guli�rement)
* membre inactif (n�a plus donn� signe de vie depuis longtemps) 
* abonn� (re�oit juste les infos par mail de temps en temps,)



##Recherche
Recherche compl�te disponible pour tout le groupe (plein texte dans les documents wiki, les conversations et les �v�nements)



Et c�est tout ! (mais c�est d�j� beaucoup)

##Notes/id�es/implantation
* Markup
* HTML ? ou remarkup partout
* https://secure.phabricator.com/book/phabricator/article/remarkup/
* tout est r�f�ren�able par un identifiant dans le remarkup
    * E123 : lien vers �v�nement
    * C534 : lien vers une conversation
    * D123 : lien vers une d�cision
    * F123 : lien vers un fichier
    * @membre : lien vers membre
    * [[wiki]]

Finalement plut�t wysiwyg simple partout. Avec ceci : https://github.com/yabwe/medium-editor 

Tags partout
Revision partout
Pas possible d�effacer (corbeille partout + trace)

##Fichiers
Pour l�administrateur du serveur, possibilit� de configurer un stockage externe. En utilisant laravel flysystem, il semble possible que cela soit transparent au niveau d�v.

Sur le serveur de fichiers : 
storage/[id du groupe]/[dossier par sous id]/[id du document] (avec dossiers pour �viter la limite syst�me de fichiers)

Champs
id 
groupe id

##Utilisateur
Syst�me auth de laravel
Social login
Pas de syst�me de r�le
Syst�me blind� qui v�rifie qu�une ressource est accessible � un utilisateur (= l�utilisateur est membre du groupe) chaque fois qu�elle est acc�d�e. (utilisateur loggu� -> groupe(s) -> ressource)
Un utilisateur est soit candidat � un groupe soit membre effectif
Proposer quelques champs en plus (genre num�ro de t�l�phone) en indiquant clairement que les membres des groupes dans lesquels on est pourront le consulter.
Gestion du temps
https://www.drupal.org/project/radioactivity
