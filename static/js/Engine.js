function validate_form()
{

    try
    {

        let name = document.getElementById("name").value;
        let email = document.getElementById('email').value;
        let text = document.getElementById('textArea').value;
        
        if (name == '' || email == '' || text == '')
        {
            alert("Um ou mais campos estão vazios. Preencha-os, por favor!")
        }

    } catch (error) 
    {
        alert(error)
    }


}