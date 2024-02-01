function removeSpace (text){
    let textRemoveSpace = text.replace('/\s/g', '');
    return textRemoveSpace;
}

function reverseText (text){
    let textReverse = text.split('').reverse().join('');
    return textReverse;
}

function updateVowels (text){
    var textUpdatVowels = text.replace(/[aiueoAIUEO]/g, function(match){
        return String.fromCharCode(match.charCodeAt(0) + 1)
    });

    return textUpdatVowels;
    /* parameter kedua merupakan sebuah function yang mana itu akan diberlakukan untuk setiap karakter yang terdapat pada string
    /[aiueoAIUEO]/g : akan mencocokan setiap huruf vokal, baik huruf lowercase maupun huruf yang uppercase, pencarian dilakukan secara global
    untuk mendapatkan nilai vokal setelahnya, maka harus dicari nilai ASCII dari huruf vokalnya, dilakukan dengan menggunakan syntak match.charCodeAt(0)
    String.fromCharCode : untuk mengubah nilai ASCII jadi huruf.
    */
}

let password = 'hacktiv 8';
let noSpace = removeSpace(password);
let reversed = reverseText(noSpace);
let encryptedPassword = updateVowels(reversed);


console.log(encryptedPassword);
