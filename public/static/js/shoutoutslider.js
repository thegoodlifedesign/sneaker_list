function changeImageHome() {


    var steps = document.getElementsByClassName('step');
    for (i = 0; i < steps.length; i++) {
        stepId = steps[i].getAttribute("id");

        if (stepId == "step1") {
            newId = "step2";
        }
        else if (stepId == "step2") {
            newId = "step3";
        }
        else if (stepId == "step3") {
            newId = "step4";
        }
        else if (stepId == "step4") {
            newId = "step5";
        }
        else if (stepId == "step5") {
            newId = "step6";
        }
        else if (stepId == "step6") {
            newId = "step7";
        }
        else if (stepId == "step7") {
            newId = "step8";
        }
        else if (stepId == "step8") {
            newId = "step9";
        }
        else if (stepId == "step9") {
            newId = "step10";
        }
        else if (stepId == "step10") {
            newId = "step1";
        }

        steps[i].setAttribute("id", newId);
    }

}

setInterval(changeImageHome, 3000);






		


