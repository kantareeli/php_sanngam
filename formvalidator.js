/* This script and many more are available free online at
The JavaScript Source :: http://javascript.internet.com
Created by: Amit Wadhwa :: http://amitwadhwa.fcpages.com/javascript.com/formvalidator.html */

function checkThisForm(formname, submitbutton, errors) {
  if (errors == '') {
    eval(formname+'.'+submitbutton+'.disabled=true');
    eval('document.'+formname+'.submit()');
  } else {
    alert(errors);
  }
}

function checkText(formname, textboxname, displaytext) {
  var localerror = '';
  if(Trim(eval('document.'+formname+'.'+textboxname+'.value'))=='') {
    localerror =  '- �ô�к�'+displaytext+'\n';
  } else localerror = '';
  return localerror;
}

function checkNum(formname, textboxname, displaytext) {
  var localerror = '';
  if(isNaN(eval('document.'+formname+'.'+textboxname+'.value'))) {
    localerror =  '- '+displaytext+'��è��������Ţ ����������ä\n';
  } else localerror = '';
  return localerror;
}

function checkSpaces(formname, textboxname, displaytext) {
  var valid = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_'; // define valid characters
  var localerror = '';
  if(!isValid(Trim(eval('document.'+formname+'.'+textboxname+'.value')), valid)) {
    localerror =  '- '+displaytext+' Should Not Contain Spaces.\n';
  } else localerror = '';
  return localerror;
}

function checkSelect(formname, selectboxname, displaytext) {
  var localerror = '';
  if(eval('document.'+formname+'.'+selectboxname+'.selectedIndex')==0) {
    localerror =  '- �ô���͡'+displaytext+'\n';
  } else localerror = '';
  return localerror;
}

function getRadio(formname, radioname, displaytext) {
  for (var i=0; i < eval('document.'+formname+'.'+radioname+'.length'); i++) {
    if (eval('document.'+formname+'.'+radioname+'[i].checked')) {
      var rad_val = eval('document.'+formname+'.'+radioname+'[i].value');
      return rad_val;
    }
  }
}

function checkRadio(formname, radioname, displaytext) {
  var localerror = '';
  var rad_val    = '';
  for (var i=0; i < eval('document.'+formname+'.'+radioname+'.length'); i++) { //check every radio button by that name
    if (eval('document.'+formname+'.'+radioname+'[i].checked'))  { //if it is checked
      rad_val += '-';
      }	else rad_val += '';
      }
    if (rad_val=='') {
      localerror =  '- �ô���͡'+displaytext+'\n';
    }
  return localerror;
}

function autoComplete (field, select, property) {
/*onKeyUp="autoComplete(this,this.form.selectboxname,'value',false)" - add this to textbox where you are typing*/
  var found = false;
  for (var i = 0; i < select.options.length; i++) {
    if (select.options[i][property].toUpperCase().indexOf(field.value.toUpperCase()) == 0) {
      found=true; break;
    }
  }
  if (found) {
    select.selectedIndex = i;
  } else {
    select.selectedIndex = -1;
  }
  if (field.createTextRange) {
    if (!found) {
      field.value=field.value.substring(0,field.value.length-1);
      return;
    }
    var cursorKeys ="8;46;37;38;39;40;33;34;35;36;45;";
    if (cursorKeys.indexOf(event.keyCode+";") == -1) {
      var r1 = field.createTextRange();
      var oldValue = r1.text;
      var newValue = found ? select.options[i][property] : oldValue;
      if (newValue != field.value) {
        field.value = newValue;
        var rNew = field.createTextRange();
        rNew.moveStart('character', oldValue.length) ;
        rNew.select();
      }
    }
  }
}

function Trim(s) {
  while ((s.substring(0,1) == ' ') || (s.substring(0,1) == '\n') || (s.substring(0,1) == '\r')) {
    s = s.substring(1,s.length);
  }
  while ((s.substring(s.length-1,s.length) == ' ') || (s.substring(s.length-1,s.length) == '\n') || (s.substring(s.length-1,s.length) == '\r')) {
    s = s.substring(0,s.length-1);
  }
  return s;
}

function isValid(string,allowed) {
//  var valid = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'; // define valid characters
    for (var i=0; i< string.length; i++) {
      if (allowed.indexOf(string.charAt(i)) == -1) return false;
    }
    return true;
}
