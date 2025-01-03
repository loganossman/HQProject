function artPiece(name, description, medium, size, date){
    this.name = name;
    this.description = description;
    this.medium = medium;
    this.size = size;
    this.date = date;
}

let artCollection = [];

let artCollectionLoad = function (name, description, medium, size, date){
    let guy = new artPiece(name, description, medium, size, date);
    artCollection.push(guy);
    console.log("I did my job!");
    console.log(guy);
}

let getArtCollection = function (val){
    return artCollection[val];
}

/*
function DigitalArtCollectionLoad(arr){
    for (const element of arr){
        artCollection.push(element);
    }
}

function HandMadeArtCollectionLoad(arr){
    for (const element of arr){
        artCollection.push(element);
    }
}
*/