function funcVerificar() {
  const captcha = document.getElementById('captcha').value;
  const verificar = document.getElementById('verificar').value;
  if (isNaN(verificar)) {
    document.getElementById('test').style.visibility = 'visible';
    if (captcha == verificar) {
      document.getElementById('test').style.borderColor = 'green';
      document.getElementById('test').style.color = 'green';
      document.getElementById('test').innerHTML = '\u2713';
    } else {
      document.getElementById('test').style.borderColor = 'red';
      document.getElementById('test').style.color = 'red';
      document.getElementById('test').innerHTML = '\u2717';
    }
  } else {
    document.getElementById('test').style.borderColor = '';
    document.getElementById('test').style.visibility = 'hidden';
    document.getElementById('test').innerHTML = 'nada';
  }
  if (document.getElementById('verificar').value.length < 6) {
    document.getElementsByTagName('button')[0].disabled = true;
  } else {
    document.getElementsByTagName('button')[0].disabled = false;
  }
}

function inicio() {
  document.getElementById('verificar').value = '';
  document.getElementById('test').style.visibility = 'hidden';
  document.getElementsByTagName('button')[0].disabled = true;
  document.getElementById('test').innerHTML = 'nada';
  const verificarURL = /localhost|\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}?[:]?[0-9]/
  if (verificarURL.test(window.location.host)) {
    const action = document.querySelector('form').getAttribute('action')
    document.querySelector('form').setAttribute('action', action + '.php')
  }
}

function rand(min, max) {
  return Math.floor(Math.random() * (max - min + 1) ) + min;
}

function newCaptcha() {
  var newcaptcha = '';
  const ultimo = chars.length - 1;
  for (let i = 0; i < 6; i++) {
    newcaptcha += chars[rand(i === 0 ? 11 : 0, ultimo)];
  }
  document.getElementById('captcha').value = newcaptcha;
  document.getElementById('test').style.borderColor = '';
  inicio();
}