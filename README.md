## Open eClass 2.3

Το repository αυτό περιέχει μια __παλιά και μη ασφαλή__ έκδοση του eclass.
Προορίζεται για χρήση στα πλαίσια του μαθήματος
[Προστασία & Ασφάλεια Υπολογιστικών Συστημάτων (ΥΣ13)](https://crypto.di.uoa.gr/csec/), __μην τη
χρησιμοποιήσετε για κάνενα άλλο σκοπό__.


## 2020 Project 1

Εκφώνηση: https://crypto.di.uoa.gr/csec/assets/projects/project1.pdf


### Προσωπικά στοιχεία

__Όνομα__:  Νικόλαος Γαλάνης | Εμμανουήλ Κάσδαγλης

__Α.Μ.__: 1115201700019      | 1115201700049


### Report

#### Defence 

TODO:

 - Change the uid of admin (from sql)
 - Add sql code 
 - Add an .httaccess file with " Options -Indexes " in it, to prevent users from viewing the directories
 - Change admin directory name (catefull, change include files too)
 - Delete directories that are not needed (everything except the required ones)
 - All html code is saved in tool_content. Apply htmlspecialchars(), before shown on html content, or even better, before stored
 - Prepared statements for EVERY sql query
 - CSRF: Add tokens wherever a form is submited


#### Attack

###### XSS

- (Μαθημα) -> Περιοχες Συζητησεων -> Νεο θέμα -> "html" επιλογή στον κειμενογράφο -> script
- (Μαθημα) -> Ανταλλαγή Αρχείων -> Ανέβασμα αρχείου με περιγραφή κάποιο script 
- (Μάθημα) -> Τηλεσυνεργασία -> Νεό μήνυμα με script -> Αποστολή -> Νέο μήνυμα με οτιναναι θέμα -> κομπλε
- Επεξεργασία Προφιλ -> Αλλαγή ονόματος / επιθέτου -> script

Τα αλλα modules δεν είχαν επιλογή για κάποιο user input, μπλα μπλα μπλα



###### RFI

(Μάθημα) -> Εργασίες -> Ανέβασμα εργασίας με php κωδικα -> goto <....>/courses/<courseID>/work


###### When we get in

- Goto the database and find the admin password
- It is encrypted with md5
- Change it, to something after parsing it with an md5 encoder
