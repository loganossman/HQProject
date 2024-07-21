let reverseTest = function(a, artObject){
    //Code Goes Here... Eventually. Let us cook.
    if(document.querySelector(".aboutSection") != null){
        test();
    }
    let newDiv = document.createElement("div");
    let aboutHeader = document.createElement("h2");
    let aboutDescription = document.createElement("p");
    let aboutMedium = document.createElement("p");
    let aboutSize = document.createElement("p");
    let aboutDate = document.createElement("p");
    aboutHeader.append(artObject.name);
    aboutDescription.append("Description: " + artObject.description);
    aboutMedium.append("Medium: " + artObject.medium);
    aboutSize.append("Size: " + artObject.size);
    aboutDate.append("Date: " + artObject.date);
    newDiv.setAttribute("class", "aboutSection");
    newDiv.appendChild(aboutHeader);
    newDiv.appendChild(aboutDescription);
    newDiv.appendChild(aboutMedium);
    newDiv.appendChild(aboutSize);
    newDiv.appendChild(aboutDate);    
    a.classList.replace("gridCell", "gridAbout");
    a.appendChild(newDiv);
    a.setAttribute('onclick', 'test()');
}

let test = function(){
    sectionToRemove = document.querySelector('.aboutSection');
    sectionToRemove.remove();
    gridToChange = document.querySelector(".gridAbout");
    gridToChange.classList.replace("gridAbout", "gridCell")
    gridToChange.setAttribute('onclick', 'reverseTest(this, digitalPiece1)');
}