function appointments(status){
    if(status == "Accepted"){
        document.getElementById("appointmentsInterviews").style.display = "none";
        document.getElementById("appointmentsInterviewsShow").style.display = "none";
        document.getElementById("approvedAppointmentsInterviews").style.display = "block"; 
    }
    else if(status == "interviews"){
        document.getElementById("appointmentsInterviews").style.display = "none";
        document.getElementById("approvedAppointmentsInterviews").style.display = "none";
        document.getElementById("cancelledAppointmentsInterviews").style.display = "none";
        document.getElementById("appointmentsInterviewsShow").style.display = "block"; 
    }
    else if(status == "canceld"){
        document.getElementById("appointmentsInterviews").style.display = "none";
        document.getElementById("approvedAppointmentsInterviews").style.display = "none";
        document.getElementById("appointmentsInterviewsShow").style.display = "none";
        document.getElementById("cancelledAppointmentsInterviews").style.display = "block";
    }
    else if(status == 'Waiting') {
        document.getElementById("cancelledAppointmentsInterviews").style.display = "none";
        document.getElementById("approvedAppointmentsInterviews").style.display = "none";
        document.getElementById("appointmentsInterviewsShow").style.display = "none";
        document.getElementById("appointmentsInterviews").style.display = "block";
    }
    // else{
    //     document.getElementById("appointmentsInterviewsShow").style.display = "none";
    //     document.getElementById("appointmentsInterviews").style.display = "inline";
    //     // document.getElementById("appointmentsStatus").innerHTML = status;
    //     document.getElementById("appointmentsCanceledReason").style.display = "none";
    // }
}
