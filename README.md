# eClass PenTesting

Through this projet, we tried to exploit the vunerabilities of an old version of eClass, by GNUNet. We tried to find all the flaws without the use of any tools, simply by trying by hand all the possible attacks. 
We focused our research into the following types of attacks: __XSS attacks, SQL Injections, File Inclusions, Cross-site request forgery__. 
After the discovery of the vunerabilities, we tried to patch the site in order to make it completely secure. We also constructed a set of attacks, in order to attack the website in its original version. In this repo you can find
 - A full vunerability report for the site, under `report/vunerabilities`.
 - Some attacks implemented in order to deface the site, under `report/attacks`.
 - The main ideas in order to patch the website, and increase its security, under `report/defence`.
 - The patched version of the website, under `html/`.

The types of the attacks are the following: 

### XSS Attacks

Cross-Site Scripting (XSS) attacks are a type of injection, in which malicious scripts are injected into otherwise benign and trusted websites. XSS attacks occur when an attacker uses a web application to send malicious code, generally in the form of a browser side script, to a different end user. Flaws that allow these attacks to succeed are quite widespread and occur anywhere a web application uses input from a user within the output it generates without validating or encoding it.

### File injections

Remote file inclusion (RFI) is an attack targeting vulnerabilities in web applications that dynamically reference external scripts. The perpetrator’s goal is to exploit the referencing function in an application to upload malware (e.g., backdoor shells) from a remote URL located within a different domain.

The consequences of a successful RFI attack include information theft, compromised servers and a site takeover that allows for content modification.

### SQL Injections

SQL injection is a code injection technique, used to attack data-driven applications, in which malicious SQL statements are inserted into an entry field for execution (e.g. to dump the database contents to the attacker). SQL injection must exploit a security vulnerability in an application's software, for example, when user input is either incorrectly filtered for string literal escape characters embedded in SQL statements or user input is not strongly typed and unexpectedly executed. SQL injection is mostly known as an attack vector for websites but can be used to attack any type of SQL database.

### CSRF Attacks

Cross-site request forgery (also known as CSRF) is a web security vulnerability that allows an attacker to induce users to perform actions that they do not intend to perform. It allows an attacker to partly circumvent the same origin policy, which is designed to prevent different websites from interfering with each other.

#### Important Note

The software is owned by GNUNet, was given to us as an assignment for the course of Computer Security, and can be found [here](https://github.com/chatziko-ys13/openeclass). All the attacks were created to show how security leaks get dangerous for this site, and the software allongside with the attacks are not recommended for misuse or illegal purposes, but only for educational purposes. The attacks made by our team were made into a special server for the purposes of the course, and were never made towards any facility that uses this version of eClass.

#### Contributors

__Hack n Roll team__:

[Nikos Galanis](https://github.com/nikosgalanis) .

[Manolis Kasdaglis](https://github.com/GJmanolis) .
