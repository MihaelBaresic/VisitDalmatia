function SubmitFormData1(img, el, counter) {
    var id = img;
    var klasa = el.className;

    if(klasa.includes("far")){
        klasa = "far";
    }
    else{
        klasa = "fas";
    }


    $.post("submit.php", { id: id, klasa: klasa },
    function(data) {
	 $('#results').html(data);
	 $('#myForm1')[0].reset();
    });


    document.getElementById('del'+counter).style.display='block';
}