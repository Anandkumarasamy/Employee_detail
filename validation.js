function formValidation()
{
    var emp_no= document.getElementById(emp_no).value;
    var ename = document.getElementById(ename).value;
    var eage = document.getElementById(eage).value;
    var eaddress = document.getElementById(eaddress).value;
    var email = document.getElementById(email).value;
    var eph_no = document.getElementById(eph_no).value;
    if(emp_no_validation(emp_no))
    {
    if(name_validation(ename))
    {
    if(age_validation(eage))
    {
    if(address_validation(eaddress))
    { 
    if(email_validation(email))
    {
    if(ph_no_validation(eph_no))
    {
    } 
    }
    } 
    }
    }
    }
    return false;
} 

function emp_no_validation(emp_no)
{
    var emp_no_len = emp_no.value.length;
    if (emp_no_len == 0 || emp_no_len >= 7 || emp_no_len < 4)
    {
        alert("Employee-Number should not be empty / length should be between 4 to 7");
        emp_no.focus();
        return false;
    }
    return true;
}

function name_validation(ename)
{ 
    var letters = /^[A-Za-z]+$/;
    if(ename.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('Employeename must have alphabet characters only');
        uname.focus();
        return false;
    }
}

function age_validation(eage)
{ 
    var numbers = /^[1-9]?[0-9]{1}$|^100$/;
    if(eage.value.match(numbers))
    {
        return true;
    }
    else
    {
        alert('Age must have Numerical values only');
        eage.focus();
        return false;
    }
}

function address_validation(eaddress)
{ 
    var letters = /^[0-9a-zA-Z]+$/;
    if(eaddress.value.match(letters))
    {
        return true;
    }
    else
    {
        alert('Employee address must have alphanumeric characters only');
        uadd.focus();
        return false;
    }
}

function email_validation(email)
{
    var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    if(email.value.match(mailformat))
    {
        return true;
    }
    else
    {
        alert("You have entered an invalid Email address!");
        email.focus();
        return false;
    }
}

function ph_no_validation(eph_no)
{
    var phoneno = /^\d{10}$/;
    if(eph_no.value.match(phoneno))
    {
        return true;
    }
    else
    {
        alert("You have entered an invalid Ph-Number !");
        return false;
    }
}
