// Palindrom

function cekPalindrom(kata, validasi){
    if(!validasi){
        let arrayFrase = kata.split('');
        arrayFrase = arrayFrase.reverse().join('');
        return arrayFrase == kata;
    }else{
        let frase = kata.replace(/[^A-Z0-9]+/ig, '').toLowerCase();
        // menghilangkan karakter spesial dan mengubah menjadi huruf kecil semua untuk mengabaikan besar kecilnya huruf
        // console.log(frase)
        let arrayFrase = frase.split('');
        arrayFrase = arrayFrase.reverse().join('');
        return arrayFrase == frase;
    }
}


console.log(cekPalindrom("Katak", true));
console.log(cekPalindrom("Kasur Ini Rusak", true));
console.log(cekPalindrom("Level", true));
console.log(cekPalindrom("Malam", true));
console.log(cekPalindrom("A man, a plan, a canal, Panama!", true));
console.log(cekPalindrom("Coding", true));

// true, true, true
// true, true, false
// true, false, false
// false, true, false
// false, false, true
// false, false, false

// memfilter space 
// remove()
// memfilter tanda baca
// remove((/[^a-zA-Z0-9 ]/g, ''))





