let allimages = document.querySelectorAll(".alldoctors .box button");
allimages.forEach(button => {
    button.addEventListener("click", (e) => {
        let popupoverlay = document.createElement("div");
        popupoverlay.className = "popup-overlay";
        document.body.appendChild(popupoverlay);

        let popupbox = document.createElement("div");
        popupbox.className = "popup-box";

        let heading = document.createElement("h1");
        let headtxt = document.createTextNode("Booking Information");
        heading.appendChild(headtxt);
        popupbox.appendChild(heading);
        document.body.appendChild(popupbox);


        let form2 = document.createElement("form");
        // form2.setAttribute("method", "get");
        // form2.setAttribute("action", "submit.php");


        let inputname = document.createElement("input");
        inputname.required = true;
        inputname.className = "name";
        inputname.type = "text";
        inputname.placeholder = "Your Name";
        inputname.value = "";


        let inputnumber = document.createElement("input");
        inputnumber.required = true;
        inputname.className = "number";
        inputnumber.type = "text";
        inputnumber.placeholder = "Your Number";
        inputnumber.value = "";


        form2.appendChild(inputname);
        form2.appendChild(inputnumber);
        // form2.appendChild(submit);

        popupbox.appendChild(form2);
        document.body.appendChild(popupbox);


        let payheader = document.createElement("h2");
        let paytext = document.createTextNode("Payment Method");
        payheader.appendChild(paytext);
        popupbox.appendChild(payheader);
        document.body.appendChild(popupbox);


        let paymenticon = document.createElement("i");
        paymenticon.className = "fa fa-credit-card custom icon";
        popupbox.appendChild(paymenticon);
        document.body.appendChild(popupbox);

        let pay = document.createElement("a");
        pay.className = "link";
        pay.href = "https://buy.stripe.com/test_00g7w93BN8GhaXe288";
        let paytxt = document.createTextNode("Pay");
        pay.appendChild(paytxt);
        popupbox.appendChild(pay);
        document.body.appendChild(popupbox);





        let closebutton = document.createElement("span");
        closebutton.className = "close-button";
        let close = document.createTextNode("x");
        closebutton.appendChild(close);
        popupbox.appendChild(closebutton);
        document.body.appendChild(popupbox);



    });
});

document.addEventListener("click", (e) => {
    if (e.target.className == "close-button" || e.target.className == "popup-overlay") {
        // e.target.parentNode.remove();
        document.querySelector(".popup-box").remove();
        document.querySelector(".popup-overlay").remove();
    }
})