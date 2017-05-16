/* Contact validation */
  function getElement(id){
    var element = document.getElementById(id);
    if ( element == null )
      alert ( 'Programmer error: ' + id + ' does not exist.' );
    return element;
  }

  // testing if first and last name contain one or more characters
function testText(id) {
    return (!(getElement(id).value.match(/.+/)));
  }

  // test if email ends in .ca .com .org
  function testEmail(id) {
    return (!(getElement(id).value.match(/.ca$|.com$|.org$/i)));
  }


  function formValidation() {
    var result = true;

    if(!(getElement('firstname').value.match(/.+/))) {
      getElement('firstname-error').innerHTML = "Please enter a first name";
      result = false;
    }
    else {
      getElement('firstname-error').innerHTML = '';
      result = true;
    }

    if(testText('lastname')) {
      getElement('lastname-error').innerHTML = "Please enter a last name";
      result = result && false;
    }
    else {
      getElement('lastname-error').innerHTML = '';
      result = result && true;
    }

    if(testEmail('email')) {
      getElement('email-error').innerHTML = "Please enter an email";
      result = result && false;
    }
    else {
      getElement('email-error').innerHTML = '';
      result = result && true;
    }

  //validating message
  if(!(getElement('comment').value.match(/.+/))) {
    getElement('comment-error').innerHTML = "Please enter a message";
    result = result && false;
  }
  else {
    getElement('comment-error').innerHTML = '';
    result = result && true;
  }
  return result;
}
