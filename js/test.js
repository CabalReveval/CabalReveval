var messages__container = document.getElementById('messages'); 
//Контейнер сообщений — скрипт будет добавлять в него сообщения

var interval = null; //Переменная с интервалом подгрузки сообщений

var sendForm = document.getElementById('chat-form'); //Форма отправки
var messageInput = document.getElementById('message-text'); //Инпут для текста сообщения
function send_request(act, login = null, password = null) {//Основная функция
	//Переменные, которые будут отправляться
	var var1 = null;
	var var2 = null;
	
	if(act == 'auth') {
		//Если нужно авторизоваться, получаем логин и пароль, которые были переданы в функцию
		var1 = login;
		var2 = password;
	} else if(act == 'send') {
//Если нужно отправить сообщение, то получаем текст из поля ввода
		var1 = messageInput.value;
	}
	
	$.post('chat.php',{ //Отправляем переменные
		act: act,
		var1: var1,
		var2: var2
	}).done(function (data) { 
		//Заносим в контейнер ответ от сервера
		messages__container.innerHTML = data;
		if(act == 'send') {
			//Если нужно было отправить сообщение, очищаем поле ввода
			messageInput.value = '';
		}
	});
}
function update() {
	send_request('load');
}
interval = setInterval(update,500);
sendForm.onsubmit = function () {
	send_request('send');
	return false; //Возвращаем ложь, чтобы остановить классическую отправку формы
};
session_start();//Подключение должно быть на первой строчке в коде, иначе появится ошибка
$db = mysqli_connect("localhost","login","password"); 
mysqli_select_db($db,"chat");
//Заносим данные админа в сессию
$_SESSION['login'] = 'admin';
$_SESSION['password'] = 'admin';
$_SESSION['id'] = 1;