import string
plaintext = input('Ketik pesan yang akan dideskripsi caesar chipertext : ')
geser = input('Ketik besar pergeseran : ')
ciphertext = ''
if geser == 0 or geser == '':
    geser = 3
geser = int(geser)
for karakter in plaintext:
    ckar = chr((ord(karakter) - geser) % 256)
    ciphertext += ckar
print('Hasil ciphertextnya : ' + ciphertext)
