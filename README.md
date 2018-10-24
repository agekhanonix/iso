# iso
## PV : Parcours DEVELOPPEUR WEB JUNIOR (OPENCLASSROOM)
### Creer un site web pour une entreprise specialisee dans la securite operationnelle des systemes informatiques
Author  : :squirrel: Thierry CHARPENTIER  
Version : V1R0  
Date    : 21 octobre 2018  
...
1. Cahier des charges 
_____________________

La SARL TH.CHARPENTIER souhaite faire réaliser un site institutionnel afin de renforcer sa présence sur le web.  
Celui-ci, le site web, sera  constitué de deux composants :  
   a. le FRONTEND  
   ______________
   Sur le FRONTEND le visiteur pourra voir le catalogue des services proposes par la SARL TH.CHARPENTIER, puis acceder, le cas echeant une fiche détaillée explicitant la prestation.  
   Sur le FRONTEND toujours, le visiteur devra pouvoir demander a etre rappelé pour l'une ou plusieurs de ces prestations.  
   Sur le FRONTEND enfin, le visiteur, sous condition de s'être enregistrer, réalisera un audit de la sécurité opérationnelle de son système informatique.  
   Bien entendu il devra pouvoir suspendre cet audit pour le reprendre plus tard, voir le supprimer le cas échéant.  
   A l'issue il lui sera proposé de recevoir le compte-rendu de cet audit, compte-rendu constitué :  
      - le récapitulatif de l'audit  
      - une recommandation d'actions prioritaires à mener  
      - un graphe de type radar situant le niveau de sécurité de son système informatique par rapport à la moyenne constatée.  
   b. le BACKEND  
   _____________
   Le BACKEND permettra a la SARL TH.CHARPENTIER d'éditer des états quant à la fréquentation du site.  
   Plus particulièrement de savoir quels sont les services qui on retenu l'attention des visiteurs, cettte visualisation devra pouvoir se faire de maniere filtrée, sur la temporalit (semaine, mois, trimestre, année), sur la localisation, une carte avec des marqueurs de tailles et de couleurs différentes selon la fréquentaion est souhaitée.  
   Idem pour ce qui est des audits ON-LINE.  
   c. Contraintes :  
   - le site devra être accessible a tout type de média  
   - une politique de confidentialité devra etre éditée  
   - tous les états devront être proposés à l'envoi par courriel au format .PDF, les courriels devront respecter la charte graphique de la SARL TH.CHARPENTIER.  
2. Structure du site  
____________________

   >[x]>/  
   >>[x]>/config  
   >>[x]>/controller  
   >>[x]>/divers  
   >>[x]>/libs  
   >>>[x]>/OCFram  
   >[x]>/model  
   >>[x]>/public  
   >>>[x]>/bootstrap  
   >>>[x]>/css  
   >>>[x]>/images  
   >>>[x]>/js
   >>>>[x]>/objects
   >>[x]>/template  
   >>[x]>/view  
