rem This batch file copies the installed printers for a Win7+ machine, dumps them into a txt file in the user directory, then robocopies that directory to an SMB share.
rem Change the location of the prnmngr.vbs to suit your needs, in this case the machines in question changed the location of the file, normally it is in System32.
rem It also good to note that both Chrome and Firefox stores saves bookmarks in APPDATA with this, so placing a needed file back should be easy.
rem this script was designed for migrations and to be run on each user account of each computer and place them in unique and organized folders. MIT License. Created by Danny Solsman.



NET USE \\SERVER\IPC$ /u:DOMAIN\administrator *SMBPASSWORD* 
cscript C:\Windows\System32\Printing_Admin_Scripts\en-US\prnmngr.vbs -l >> C:\Users\%USERNAME%\printersinstalled.txt
robocopy /Z /E /R:0 /W:0 C:\Users\%USERNAME%\ \\SERVER\SERVERDUMP\%COMPUTERNAME%\%USERNAME%\ 
NET USE \\SERVER\IPC$ /