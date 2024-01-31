// Perulangan Javascript Challenge 1
let numbPerson = 120;
while(numbPerson>0){
    console.log(`Halo saya orang ke ${numbPerson}`);
    numbPerson--;
}

for(var i=numbPerson;i>0;i--){
    console.log(`Halo saya orang ke ${i}`)
}


// Perulangan Javascript Challenge 2
let numberPerson = 100;
while(numberPerson>0){
    if(numberPerson%2 != 0){
        let string = ''
        for(var j = 100; j>0; j--){
            string+='O';
        }
        console.log(string);
    }else{
        let string = ''
        for(var j = 100; j>0; j--){
            string+=' ';
        }
        console.log(string);
    }
    numberPerson--;
}
