CREATE VIEW iso_prospects_vw AS 
SELECT T1.prospect_Id AS Id, T1.audit_Id AS Audit, COUNT(T1.question_Id) AS Quests,T2.prospect_Society AS Society, T2.prospect_LastName AS LastName, T2.prospect_FirstName AS FirstName, T2.prospect_StreetNum AS StreetNum, T2.prospect_Addr1 AS Addr1, T2.prospect_Addr2 AS Addr2, T2.prospect_City AS City, T2.prospect_PostalCode AS PostalCode, T2.prospect_Phone AS Phone, T2.prospect_Mobile AS Mobile, T2.prospect_Email, SUBSTRING_INDEX(T2.prospect_Localisation,';',1) AS Lat, SUBSTRING_INDEX(T2.prospect_Localisation,';',-1) AS Lng,
T2.prospect_Pseudo AS Pseudo,
T2.prospect_Registred AS Registred,
CASE 
	WHEN COUNT(T1.question_Id) < 30 THEN 1
    WHEN (COUNT(T1.question_Id) >= 30 AND COUNT(T1.question_Id) < 50) THEN 2
    WHEN (COUNT(T1.question_Id) >= 50 AND COUNT(T1.question_Id) < 75) THEN 3
    WHEN (COUNT(T1.question_Id) >= 70 AND COUNT(T1.question_Id) < 99) THEN 4
    WHEN COUNT(T1.question_Id) = 100 THEN 5
END AS Type
FROM iso_audits AS T1 
	INNER JOIN iso_prospects AS T2 ON T1.prospect_Id = T2.prospect_Id
GROUP BY T1.audit_Id
UNION 
SELECT T3.prospect_Id,'' AS Audit, 0 AS Quests,T3.prospect_Society AS Society, T3.prospect_LastName AS LastName, T3.prospect_FirstName AS FirstName, T3.prospect_StreetNum AS StreetNum, T3.prospect_Addr1 AS Addr1, T3.prospect_Addr2 AS Addr2, T3.prospect_City AS City, T3.prospect_PostalCode AS PostalCode, T3.prospect_Phone AS Phone, T3.prospect_Mobile AS Mobile, T3.prospect_Email, SUBSTRING_INDEX(T3.prospect_Localisation,';',1) AS Lat, SUBSTRING_INDEX(T3.prospect_Localisation,';',-1) AS Lng,
T3.prospect_Pseudo AS Pseudo,
T3.prospect_Registred AS Registred,
1 AS Type
FROM iso_prospects AS T3
WHERE T3.prospect_Id > 111 AND T3.prospect_Id NOT IN (SELECT T4.prospect_Id AS Id 
FROM iso_audits AS T4 
	INNER JOIN iso_prospects AS T5 ON T4.prospect_Id = T5.prospect_Id)