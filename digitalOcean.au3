MouseClick("left", 467, 747, 1, 50)
MouseClick("left", 630, 280, 1, 50)
AutoItSetOption("SendKeyDelay", 200)
Send("138.197.7.205")
MouseClick("left", 770, 585, 1, 50)
Sleep(5000)

Send("pablo{ENTER}")
Sleep(2000)
Send("P4bl0_{ENTER}")
Sleep(2000)
Send("clear{ENTER}")
Sleep(2000)
AutoItSetOption("SendKeyDelay", 100)
Send("git clone https://github.com/PabMendez/Mantenedor1{ENTER}")
Sleep(3000)

Send("cd Mantenedor1{ENTER}")
Sleep(1000)
Send("composer install{ENTER}")
Sleep(5000)
Send("{ENTER}")
Sleep(1000)
Send("{ENTER}")
Sleep(1000)
Send("pablo001{ENTER}")
Sleep(1000)
Send("pablo{ENTER}")
Sleep(1000)
Send("P4bl02017_{ENTER}")
Sleep(1000)
Send("{ENTER}")
Sleep(1000)
Send("{ENTER}")
Sleep(1000)
Send("{ENTER}")
Sleep(1000)
Send("{ENTER}")
Sleep(1000)
Send("{ENTER}")
Sleep(4000)

Send("php bin/console doctrine:database:create{ENTER}")
Sleep(2000)
Send("php bin/console doctrine:schema:create{ENTER}")
Sleep(3000)
Send("exit{ENTER}")
MouseClick("left", 546, 67, 1, 50)
Send("http://138.197.7.205/pablo/Mantenedor1/web/Cliente/list{ENTER}")
Sleep(3000)

AutoItSetOption("SendKeyDelay", 100)

MouseClick("left", 189, 167, 1, 50)
Sleep(2000)
MouseClick("left", 154, 230, 1, 50)
Send("121234567{TAB}")
Send("Luis{TAB}")
Send("L�pez{TAB}")
Send("P�rez{TAB}")
Send("Alameda 723, Santiago Centro{TAB}")
Send("luis.lopez@aporta.com{TAB}")
Send("569 9 753 1233{TAB}")
Sleep(1000)
MouseClick("left", 330, 547, 1, 50)
Sleep(2000)

MouseClick("left", 189, 167, 1, 50)
Sleep(2000)
MouseClick("left", 154, 230, 1, 50)
Send("142343458{TAB}")
Send("Pedro{TAB}")
Send("Gonz�lez{TAB}")
Send("Ochoa{TAB}")
Send("Bulnes 166, Santiago Centro{TAB}")
Send("pedro.gonzalez@aporta.com{TAB}")
Send("569 7 345 4534{TAB}")
Sleep(1000)
MouseClick("left", 330, 547, 1, 50)
Sleep(2000)

MouseClick("left", 189, 167, 1, 50)
Sleep(2000)
MouseClick("left", 154, 230, 1, 50)
Send("15233788K{TAB}")
Send("Juan{TAB}")
Send("Pedreros{TAB}")
Send("Gutierrez{TAB}")
Send("Lord Cochrane 1455, depto.200, Santiago Centro{TAB}")
Send("juan.pedreros@aporta.com{TAB}")
Send("569 8 234 6543{TAB}")
Sleep(1000)
MouseClick("left", 330, 547, 1, 50)
Sleep(2000)

MouseClick("left", 872, 264, 1, 50)
Sleep(3000)
MouseClick("left", 420, 415, 3, 50)
Send("Verdi 1344, La Florida{TAB}")
Sleep(1000)
MouseClick("left", 330, 547, 1, 50)
Sleep(2000)

MouseClick("left", 880, 290, 1, 50)
Sleep(1000)
MouseClick("left", 575, 182, 1, 50)
Sleep(2000)
