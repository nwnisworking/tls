@echo off 

set dir=%~dp0

if not exist "%dir%ca" mkdir ca
if not exist "%dir%server" mkdir server
if not exist "%dir%client" mkdir client

openssl genpkey -algorithm RSA -out ca/.key -aes256
openssl req -key ca/.key -new -x509 -out ca/.crt

openssl genpkey -algorithm RSA -out server/.key
openssl req -key server/.key -new -out server/.csr
openssl x509 -req -in server/.csr -CA ca/.crt -CAkey ca/.key -CAcreateserial -out server/.crt -days 365

openssl genpkey -algorithm RSA -out client/.key
openssl req -key client/.key -new -out client/.csr
openssl x509 -req -in client/.csr -CA ca/.crt -CAkey ca/.key -CAcreateserial -out client/.crt -days 365

echo Certificate for CA, client and server has been created. 

pause