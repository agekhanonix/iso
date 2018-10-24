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
   Sur le FRONTEND le visiteur pourra voir le catalogue des services proposes par la SARL TH.CHARPENTIER, puis acceder, le cas echeant une fiche detaillee explicitant la prestation.  
   Sur le FRONTEND toujours, le visiteur devra pouvoir demander a etre rappele pour l'une ou plusieurs de ces prestations.  
   Sur le FRONTEND enfin, le visiteur, sous condition de s'etre enregistrer, realisera un audi de la securite operationnelle de son systeme informatique.  
   Bien entendu il devra pouvoir suspendre cet audit pour le reprendre plus tard, voir le supprimer le cas échéant.  
   A l'issue il lui sera proposé de recevoir le compte-rendu de cet audit, compte-rendu constitué :  
      - le récapitulatif de l'audit  
      - une recommandation d'actions prioritaires à mener  
      - un graphe de type radar situant le niveau de sécurité de son système informatique par rapport à la moyenne constatée.  
   b. le BACKEND  
   _____________
   Le BACKEND permettra a la SARL TH.CHARPENTIER d'editer des etats quant a la frequentation du site.  
   Plus particulierement de savoir quel sont les services qui on retenu l'attention des visiteurs, cet visualisation devra pour pour voir se faire de maniere filtree, sur la temporalite (semaine, mois, trimestre, annee), sur la localisation, une carte avec des marqueurs de tailles et de couleurs differentes selon la frequentaion est souhaitee.  
   Idem pour ce qui est des audits ON-LINE.  
   c. Contraintes :  
   - le site devra etre accessible a tout type de media  
   - une politique de confidentialite devra etre editee  
   - tous les etats devront etre propose a l'envoi par courriel au format .PDF, les courriels devront correspondre a la charte graphique de la SARL TH.CHARPENTIER.  
2. Structure du site  
____________________

   -[x]>/  
        -[x]>/config  
   -[x]>/controller  
   -[x]>/divers  
   -[x]>/libs  
        -[x]>/OCFram  
   -[x]>/model  
   -[x]>/public  
        -[x]>/bootstrap  
        -[x]>/css  
        -[x]>/images  
        -[x]>/js  
   -[x]>/template  
   -[x]>/view  
