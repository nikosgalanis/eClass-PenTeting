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
 - Add an .httaccess file with " Options -Indexes " in it, to prevent users from viewing the directories (added with a comment) (rfi)
 - Change admin directory name (carefull, change include files too)
 - Delete directories that are not needed (everything except the required ones)
 - All html code is saved in tool_content. Apply htmlspecialchars(), before shown on html content, or even better, before stored (done!)
 - Prepared statements for EVERY sql query
 - CSRF: Add tokens wherever a form is submited
 - Remove restore_course and other stupid stuff
 - Rename `$mysqlPassword` to something else
 - Rename database(if possible)


#### Attack

###### XSS

- (Μαθημα) -> Περιοχες Συζητησεων -> Νεο θέμα -> "html" επιλογή στον κειμενογράφο -> script (Fixed)
- (Μαθημα) -> Ανταλλαγή Αρχείων -> Ανέβασμα αρχείου με περιγραφή κάποιο script (Fixed)
- (Μάθημα) -> Τηλεσυνεργασία -> Νεό μήνυμα με script -> Αποστολή -> Νέο μήνυμα με οτιναναι θέμα -> κομπλε (Fixed)
- Επεξεργασία Προφιλ -> Αλλαγή ονόματος / επιθέτου -> script (Fixed)
- (admin) -> Δημιουργία μαθήματος -> παντού (FIxed)
- (admin) -> Ανακοινωσεις μαθήματος -> παντού (Fixed)
- (admin) -> Διαχειριση χρηστών -> παντού
- Δημιουργία χρήστη -> username -> script (Fixed)

Τα αλλα modules δεν είχαν επιλογή για κάποιο user input, μπλα μπλα μπλα

###### CSRF

###### RFI

(Μάθημα) -> Εργασίες -> Ανέβασμα εργασίας με php κωδικα -> goto <....>/courses/<courseID>/work

