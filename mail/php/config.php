<?
	// *** Настройка обязательности полей, в случае если они присутствуют в вашей форме

	// Имя
	const NAMEISREQUIRED = true;
	const MSGSNAMEERROR = "⚠ Поле обязательно для заполнения";

	// Телефон
	const TELISREQUIRED = false;
	const MSGSTELERROR = "⚠ Поле обязательно для заполнения";

	// Email
	const EMAILISREQUIRED = false;
	const MSGSEMAILERROR = "⚠ Поле обязательно для заполнения";
	const MSGSEMAILINCORRECT = "⚠ Некорректный почтовый адрес";

	// Текстовое поле
	const TEXTISREQUIRED = false;
	const MSGSTEXTERROR = "⚠ Поле обязательно для заполнения";

	// Файл
	const FILEISREQUIRED = false;
	const MSGSFILEERROR = "⚠ Забыли добавить файл";

	// Соглашение
	const AGGREMENTISREQUIRED = false;
	const MSGSAGGREMENTERROR = "⚠ Примите пользовательское соглашение"; 

	// Сообщение об успешной отправке
	const MSGSSUCCESS = "Сообщение успешно отправлено";

	// *** SMTP *** //

		require_once($_SERVER['DOCUMENT_ROOT'] . '/tomsk/mail/phpmailer/smtp.php');
		const HOST = 'ssl://smtp.yandex.ru';
		const LOGIN = 'rosdezservice-zayavka@yandex.ru';
		const PASS = 'AlexMaster123';
		const PORT = '465';

	// *** /SMTP *** //

  // Почта с которой будет приходить письмо
	const SENDER = 'rosdezservice-zayavka@yandex.ru';
	
	// Почта на которую будет приходить письмо
	const CATCHER = 'rosdezservice-zayavka@yandex.ru';
	
	// Тема письма
	const SUBJECT = 'Заявка с сайта Томск  РосДэзСервис';
	
	// Кодировка
  const CHARSET = 'UTF-8';
