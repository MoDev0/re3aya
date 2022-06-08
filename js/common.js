let contact = document.querySelector(".header ul li.active a");
contact.addEventListener("click", (e) => {
    e.preventDefault();
    let popupoverlay = document.createElement("div");
    popupoverlay.className = "popup-overlay";
    document.body.appendChild(popupoverlay);

    let popupbox = document.createElement("div");
    popupbox.className = "popup-box";

    let heading = document.createElement("h1");
    let headtxt = document.createTextNode("Contact Us");
    heading.appendChild(headtxt);
    popupbox.appendChild(heading);
    document.body.appendChild(popupbox);


    let form = document.createElement("form");
    form.setAttribute("method", "post");
    form.setAttribute("action", "submit.php");

    let inputname = document.createElement("input");
    inputname.required = true;
    inputname.className = "name";
    inputname.type = "text";
    inputname.placeholder = "Your Name";
    inputname.value = "";

    let email = document.createElement("input");
    email.required = true;
    email.className = "email";
    email.type = "email";
    email.placeholder = "Your Email";
    email.value = "";

    let inputnumber = document.createElement("input");
    inputnumber.required = true;
    inputname.className = "number";
    inputnumber.type = "text";
    inputnumber.placeholder = "Your Number";
    inputnumber.value = "";



    let textarea = document.createElement("textarea");
    textarea.required = true;
    textarea.className = "textarea";
    textarea.placeholder = "Tell Us About Your Needs";
    textarea.value = "";


    let submit = document.createElement("input");
    submit.className = "active2";
    submit.type = "submit";
    submit.value = "Send";



    form.appendChild(inputname);
    form.appendChild(email);
    form.appendChild(inputnumber);
    form.appendChild(textarea);
    form.appendChild(submit);

    popupbox.appendChild(form);
    document.body.appendChild(popupbox);

    let closebutton = document.createElement("span");
    closebutton.className = "close-button";
    let close = document.createTextNode("x");
    closebutton.appendChild(close);
    popupbox.appendChild(closebutton);
    document.body.appendChild(popupbox);



});


document.addEventListener("click", (e) => {
    if (e.target.className == "close-button" || e.target.className == "popup-overlay") {
        // e.target.parentNode.remove();
        document.querySelector(".popup-box").remove();
        document.querySelector(".popup-overlay").remove();
    }
})
