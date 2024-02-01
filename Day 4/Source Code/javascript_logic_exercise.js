console.log("------------EXERCISE 1--------------");
function compareNumber(firstNumber, secondNumber){
    return firstNumber == secondNumber ? -1 : secondNumber > firstNumber ? true : false;
}
console.log(compareNumber(5, 8));
console.log(compareNumber(5, 3));
console.log(compareNumber(4, 4));
console.log(compareNumber(3, 3));
console.log(compareNumber(17, 2));

console.log("-------------------------------------")


console.log("------------EXERCISE 2--------------");
function reverseString(sentence){
    let arrayString = sentence.split('');
    let reverse = arrayString.reverse().join('');
    return reverse;
}
console.log(reverseString("Hello World and Coders"));
console.log(reverseString("John Doe"));
console.log(reverseString("I am a bookworm"));
console.log(reverseString("Coding is my hobby"));
console.log(reverseString("Super"));

console.log("-------------------------------------")


console.log("------------EXERCISE 3--------------");
function reverseString(sentence){
    let arrayString = sentence.split('');
    let sentenceReverse = arrayString.sort().join('');
    return sentenceReverse;
}
console.log(reverseString("halo"));
console.log(reverseString("qwerty"));

console.log("-------------------------------------")



console.log("------------EXERCISE 4--------------");

function checkAritmatika(array){
    let check = [];
    let hasil = true;
    for(var i = 0; i<array.length; i++){
        if(i != array.length-1){
            check.push(array[i+1]-array[i]);
            if(check.length>1){
                check[i]==check[i-1] ? hasil=true : hasil =false
            }
        }
    }
    // console.log(check)
    return hasil;
}

console.log(checkAritmatika([2, 4, 6, 8]));
console.log(checkAritmatika([2,4,6,9]));
console.log(checkAritmatika([1,5,9,13,17]));
console.log("-------------------------------------")



console.log("------------EXERCISE 5--------------");
function threeStepsAB(kalimat){
    let hasil = false;
    let kalimatArray = kalimat.split('')
    for(var j = 0;j<kalimatArray.length;j++){
        if(kalimatArray[j] == 'a'){
            if(kalimatArray[j+4] == 'b'){
                hasil = true;
            }
        }else if(kalimatArray[j] == "b"){
            if(kalimatArray[j+4] == 'a'){
                hasil = true;
            }
        }
    }
    return hasil;
}
console.log(threeStepsAB("lane borrowed"));
console.log(threeStepsAB('I am sick'));
console.log(threeStepsAB('you are boring'));
console.log(threeStepsAB('barbarian'));
console.log(threeStepsAB('bacon and meat'));
console.log("-------------------------------------")



console.log("------------EXERCISE 6--------------");
// buat angka dari 1 sampai dengan batas maksimal paramater.
// terus coba kalikan 

function checkFN(firstNumber){
    let firstNumb = firstNumber;
    let arrayFirstNumber = [];
    let arrayHasilFPBFirstNumber = [];
    while(firstNumb>0){
        arrayFirstNumber.unshift(firstNumb);
        firstNumb--;
    }
    for(var i = 0; i < arrayFirstNumber.length;i++){
        for(var j = 0 ; j < arrayFirstNumber.length; j++){
            if(arrayFirstNumber[i]*arrayFirstNumber[j] == firstNumber){
                arrayHasilFPBFirstNumber.push(arrayFirstNumber[i]);
                arrayHasilFPBFirstNumber.push(arrayFirstNumber[j]);
            }
        }
    }
    let uniqueArrayHasilFirstNumber = [...new Set(arrayHasilFPBFirstNumber)];
    uniqueArrayHasilFirstNumber.sort((a,b) => a-b);
    return uniqueArrayHasilFirstNumber;
}

function checkSN(secondNumber){
    let secondNum = secondNumber;
    let arraySecondNumber = [];
    let arrayHasilFPBSecondNumber = [];
    while(secondNum>0){
        arraySecondNumber.unshift(secondNum);
        secondNum--;
    }
    for(var i = 0; i < arraySecondNumber.length;i++){
        for(var j = 0 ; j < arraySecondNumber.length; j++){
            if(arraySecondNumber[i]*arraySecondNumber[j] == secondNumber){
                arrayHasilFPBSecondNumber.push(arraySecondNumber[i]);
                arrayHasilFPBSecondNumber.push(arraySecondNumber[j]);
            }
        }
    }
    let uniqueArrayHasilSecondNumber = [...new Set(arrayHasilFPBSecondNumber)];
    uniqueArrayHasilSecondNumber.sort((a,b) => a-b);
    return uniqueArrayHasilSecondNumber;
}
function gcd(firstNumber, secondNumber){
    let fpbFirstNumber =  checkFN(firstNumber);
    let fpbSecondNumber =  checkSN(secondNumber);
    let hasilAkhir = [];
    for(var i = 0 ; i< fpbFirstNumber.length;i++){
        for(var j = 0; j<fpbSecondNumber.length;j++){
            if(fpbFirstNumber[i] == fpbSecondNumber[j]){
                hasilAkhir.push(fpbFirstNumber[i]);
            }
        }
    }
    // console.log(fpbFirstNumber);
    // console.log(fpbSecondNumber);
    let hasilAkhirTerbesar = hasilAkhir[hasilAkhir.length-1];
    return hasilAkhirTerbesar;
}

console.log(gcd(12,16));
console.log(gcd(50, 40));
console.log(gcd(22, 99));
console.log(gcd(24, 36));
console.log(gcd(17, 23));

console.log("-------------------------------------");

console.log("------------EXERCISE 7---------------");
function isPrime(number){
    let numb = number;
    let arrayNumber = [];
    let hasilPrime = [];
    while(numb>0){
        arrayNumber.push(numb);
        numb--;
    }

    for(var i = 0; i < arrayNumber.length; i++){
        for(var j = 0; j < arrayNumber.length; j++){
            if(arrayNumber[i]*arrayNumber[j]==number){
                hasilPrime.push(arrayNumber[i]);
                hasilPrime.push(arrayNumber[j]);
            }
        }
    }
    hasilPrime = [...new Set(hasilPrime)];
    return hasilPrime.length == 2 ? true : false;
}

console.log(isPrime(3));
console.log(isPrime(7));
console.log(isPrime(6));
console.log(isPrime(23));
console.log(isPrime(33));

console.log("-------------------------------------");


console.log("------------EXERCISE 8---------------");
function listPrima(angkaPertama, angkaKedua){
    let arrayRange = [];
    let hasil = [];
    for(var i = angkaPertama; i <=angkaKedua; i++){
        if(i!=1){
            arrayRange.push(i);
        }
    };

    for(var i = 0; i< arrayRange.length;i++){
        // ini kalau dia manggil fungsi di exercise 6
        // let hasilCheckPrime = checkFN(arrayRange[i]);
        // if(hasilCheckPrime.length==2){
        //     hasil.push(arrayRange[i]);
        // }

        // ini kalo dia manggil di exercise 7
        let hasilCheckPrime = isPrime(arrayRange[i]);
        if(hasilCheckPrime){
            hasil.push(arrayRange[i]);
        }
        
    };
    // console.log(arrayRange);
    // console.log(hasil);
    return hasil.join(" ");

}

console.log(listPrima(1, 5));
console.log(listPrima(5, 10));
console.log(listPrima(10, 20));
console.log("-------------------------------------");
